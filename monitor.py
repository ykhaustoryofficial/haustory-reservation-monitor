#!/usr/bin/env python3
"""Archive public website source for independent review. No booking submissions."""
from concurrent.futures import ThreadPoolExecutor, as_completed
import datetime as dt
import hashlib
import json
import re
import html
from urllib.parse import urljoin, urlsplit, unquote
import urllib.error
import urllib.request
from pathlib import Path

BASE = "https://www.xn--399a9js72an4ic7dr7a0yl59rz1h.com"
PATHS = [
 "/", "/schedule.php", "/reservation.php", "/contract.php",
 "/contract_reservation.php", "/contract_reserve.php", "/contract_booking.php",
 "/contract_visit.php", "/contract/index.php", "/contract/reserve.php",
 "/contract/reservation.php", "/reserve.php", "/booking.php",
 "/reservation/index.php", "/reserve/index.php", "/booking/index.php",
 "/apply.php", "/register.php", "/visit.php", "/visit_reservation.php",
 "/visit_reserve.php", "/visit_booking.php", "/visit/index.php",
 "/visit/reserve.php", "/visit/reservation.php", "/wish/wish.php",
 "/pc/register",
 "/contract_visit_reservation.php", "/contract_visit_reserve.php",
 "/contract_visit_booking.php", "/contract_reservation/index.php",
 "/contract_reserve/index.php", "/contract_booking/index.php",
 "/contract/booking.php", "/contract/visit.php", "/contract/apply.php",
 "/reservation_contract.php", "/reservation_visit.php",
 "/reserve_visit.php", "/reserve_contract_visit.php",
 "/booking_contract.php", "/booking_visit.php",
 "/visit_contract.php", "/visit_contract_reserve.php",
 "/visit_contract_reservation.php", "/visit_contract_booking.php",
 "/visit/booking.php", "/visit/apply.php",
 "/booking/contract.php",
 "/reserve/contract.php",
 "/reservation/contract.php", "/reservation/visit.php",
 "/contract_guide.php", "/stamp_tax.php",
 "/reserve_contract.php", "/option_contract.php", "/loan_guide.php",
 "/js/common.js", "/js/main_v02.js", "/js/sub.js", "/js/mobile.js",
]
# Discover additional same-site HTML/JS links, including links in comments and inline scripts.
# Only inspect public GET endpoints; never submit forms or follow action URLs.
MAX_DISCOVERED = 80
MAX_TOTAL = 150
ASSET_RE = re.compile(r"""(?:href|src|action|data-url|url)\s*=\s*["']([^"'#]+)["']|["']((?:https?://[^"'\s<>]+|(?:\.{0,2}/|/)[\w./%-]+\.(?:php|html?|js)(?:\?[^"'\s<>]*)?))["']""", re.I)
INTEREST_RE = re.compile(r"(reserv|book|contract|visit|apply|register|appoint|schedule|calendar|time|date|예약|계약|방문|신청)", re.I)
SKIP_RE = re.compile(r"(logout|delete|remove|cancel|payment|pay|submit|download|admin|login|auth|\.pdf$)", re.I)

def discover(source_path, content):
    found = set()
    source_url = urljoin(BASE + "/", source_path.lstrip("/"))
    for match in ASSET_RE.finditer(html.unescape(content)):
        raw = (match.group(1) or match.group(2) or "").strip()
        if not raw or raw.startswith(("javascript:", "mailto:", "tel:", "data:", "#")):
            continue
        full = urljoin(source_url, raw)
        parsed = urlsplit(full)
        if parsed.netloc.lower() != urlsplit(BASE).netloc.lower():
            continue
        path = unquote(parsed.path)
        if not path.startswith("/") or ".." in path.split("/"):
            continue
        if SKIP_RE.search(path) or not INTEREST_RE.search(path):
            continue
        if not re.search(r"\.(?:php|html?|js)$", path, re.I):
            continue
        found.add(path)
    return found

MANIFEST_PATH = Path("snapshots/manifest.json")
try:
    previous_manifest = json.loads(MANIFEST_PATH.read_text(encoding="utf-8"))
except (OSError, ValueError):
    previous_manifest = {}
previous_pages = previous_manifest.get("pages", {})

ROOT = Path("snapshots/current")
ROOT.mkdir(parents=True, exist_ok=True)
timestamp = dt.datetime.now(dt.timezone(dt.timedelta(hours=9))).isoformat(timespec="seconds")
manifest = {"captured_at_kst": timestamp, "base_url": BASE, "pages": {}}

def fetch(path):
        req = urllib.request.Request(BASE + path, headers={
            "User-Agent": "Mozilla/5.0 (compatible; reservation-source-archive/1.0)",
            "Accept": "text/html,application/javascript,*/*"})
        entry = {}
        try:
            with urllib.request.urlopen(req, timeout=10) as response:
                body = response.read(2_000_000)
                url = response.geturl()
                ctype = response.headers.get("Content-Type", "")
                if response.status != 200 or url.rstrip("/") != (BASE + path).rstrip("/"):
                    raise ValueError("redirect or unexpected response")
                if not any(x in ctype.lower() for x in ("html", "javascript", "text/plain")):
                    raise ValueError("unexpected content type")
                content = body.decode("utf-8", errors="replace")
                if re.search(r"<title>\s*(?:404|not found|error)", content, re.I):
                    raise ValueError("error page")
                relative = path.lstrip("/") or "index.html"
                target = ROOT / relative
                target.parent.mkdir(parents=True, exist_ok=True)
                target.write_text(content, encoding="utf-8")
                entry = {"status": "ok", "file": str(target), "sha256": hashlib.sha256(body).hexdigest(), "bytes": len(body)}
        except urllib.error.HTTPError as exc:
            entry = {"status": "unavailable", "http_status": exc.code}
        except Exception as exc:
            entry = {"status": "unavailable", "reason": str(exc)[:180]}
        return path, entry


# First capture the established candidate list, then scan successful public sources
# for new, previously unmonitored reservation-related endpoints.
with ThreadPoolExecutor(max_workers=8) as pool:
    for path, entry in pool.map(fetch, PATHS):
        manifest["pages"][path] = entry
        print(path, entry["status"], flush=True)

discovered = set()
for source_path, entry in list(manifest["pages"].items()):
    if entry["status"] != "ok" or not source_path.lower().endswith((".php", ".html", ".js", "/")):
        continue
    try:
        source_file = Path(entry["file"])
        discovered.update(discover(source_path, source_file.read_text(encoding="utf-8")))
    except (OSError, UnicodeError):
        pass
# Continue watching previously discovered URLs, even when links disappear.
candidate_paths = discovered | set(previous_manifest.get("discovered_paths", []))
new_paths = sorted(candidate_paths - set(PATHS))[:max(0, min(MAX_DISCOVERED, MAX_TOTAL - len(PATHS)))]
with ThreadPoolExecutor(max_workers=8) as pool:
    for path, entry in pool.map(fetch, new_paths):
        manifest["pages"][path] = entry
        print("DISCOVERED", path, entry["status"], flush=True)
manifest["discovered_paths"] = new_paths
manifest["discovered_total"] = len(candidate_paths - set(PATHS))
manifest["discovery_truncated"] = len(candidate_paths - set(PATHS)) > len(new_paths)
manifest["expected_paths"] = len(PATHS) + len(new_paths)
manifest["completed_paths"] = len(manifest["pages"])
manifest["complete"] = manifest["expected_paths"] == manifest["completed_paths"]

Path("snapshots/manifest.json").write_text(json.dumps(manifest, ensure_ascii=False, indent=2) + "\n", encoding="utf-8")

# Offline-only inspection of already downloaded public HTML/JS.
# No availability API, booking API, form submission, or extra network requests.
SIGNALS = {
    "contract_alert": "alertContractNotOpen(",
    "reserve_alert": "alertReserveNotOpen(",
    "date_picker": "selectReserveDate(",
    "time_picker": "selectReserveTime(",
    "booking_submit": "On_Booking(",
    "date_api_reference": "/proxy/visitors/json/getstate",
    "time_api_reference": "/proxy/visitors/json/gettimes",
    "booking_api_reference": "/proxy/visitors/json/reservation",
    "november_reference": "2026-11",
}
analysis = {
    "captured_at_kst": timestamp,
    "mode": "passive_source_only",
    "api_requests_performed": 0,
    "previous_captured_at_kst": previous_manifest.get("captured_at_kst"),
    "status_changes": [],
    "source_signals": {},
}
for path, entry in manifest["pages"].items():
    old = previous_pages.get(path)
    before = {k: old.get(k) for k in ("status", "http_status", "reason")} if old else None
    after = {k: entry.get(k) for k in ("status", "http_status", "reason")}
    if before != after:
        analysis["status_changes"].append({"path": path, "before": before, "after": after})
    if entry.get("status") != "ok":
        continue
    try:
        source = Path(entry["file"]).read_text(encoding="utf-8")
    except (OSError, UnicodeError):
        continue
    signals = {key: value in source for key, value in SIGNALS.items()}
    if any(signals.values()) or "reserv" in path.lower() or "book" in path.lower():
        analysis["source_signals"][path] = {
            "sha256": entry.get("sha256"),
            "changed_since_previous": (old or {}).get("sha256") != entry.get("sha256"),
            "signals": signals,
        }
Path("snapshots/analysis.json").write_text(
    json.dumps(analysis, ensure_ascii=False, indent=2) + "\n", encoding="utf-8"
)
