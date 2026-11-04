#!/usr/bin/env python3
"""Archive public website source for independent review. No booking submissions."""
from concurrent.futures import ThreadPoolExecutor, as_completed
import datetime as dt
import hashlib
import json
import re
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


with ThreadPoolExecutor(max_workers=8) as pool:
    for path, entry in pool.map(fetch, PATHS):
        manifest["pages"][path] = entry
        print(path, entry["status"], flush=True)

manifest["expected_paths"] = len(PATHS)
manifest["completed_paths"] = len(manifest["pages"])
manifest["complete"] = manifest["expected_paths"] == manifest["completed_paths"]

Path("snapshots/manifest.json").write_text(json.dumps(manifest, ensure_ascii=False, indent=2) + "\n", encoding="utf-8")
