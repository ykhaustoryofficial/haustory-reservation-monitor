#!/usr/bin/env python3
"""Public-site reservation change monitor. No booking or form submission."""
import datetime as dt
import hashlib
import json
import os
import re
import urllib.error
import urllib.request
from pathlib import Path

BASE = "https://www.xn--399a9js72an4ic7dr7a0yl59rz1h.com"
PATHS = ["/", "/schedule.php", "/reservation.php", "/contract.php",
"/contract_reservation.php", "/contract_reserve.php", "/contract_booking.php",
"/contract_visit.php", "/contract/index.php", "/contract/reserve.php",
"/contract/reservation.php", "/reserve.php", "/booking.php",
"/reservation/index.php", "/reserve/index.php", "/booking/index.php",
"/apply.php", "/register.php", "/visit.php", "/visit_reservation.php",
"/visit_reserve.php", "/visit_booking.php", "/visit/index.php",
"/visit/reserve.php", "/visit/reservation.php", "/wish/wish.php", "/pc/register",
"/js/common.js", "/js/main_v02.js", "/js/sub.js", "/js/mobile.js"]
STATE = Path("state/baseline.json")
REPORT = Path("report.md")
KEYWORDS = re.compile(r"reservation|reserv|booking|contract|reserve|방문.?예약|정당계약|사전방문|alertContractNotOpen|alertReserveNotOpen|popupContract-btn--reserve|popupLoan-btn--(general|pre)", re.I)
LINKS = re.compile(r"(?:href|onclick|action)\s*=\s*[\"'][^\"']+[\"']|(?:location\.(?:href|assign|replace)|window\.open)\s*\(?[^;\n]{0,250}", re.I)
TIMEOUT = 18

def fetch(path):
    req = urllib.request.Request(BASE + path, headers={"User-Agent": "Mozilla/5.0 (compatible; reservation-monitor/1.0)", "Accept": "text/html,application/javascript,*/*"})
    try:
        with urllib.request.urlopen(req, timeout=TIMEOUT) as response:
            body = response.read(2_000_000).decode("utf-8", errors="replace")
            final_url = response.geturl()
            status = response.status
            content_type = response.headers.get("Content-Type", "")
    except urllib.error.HTTPError as exc:
        return {"status": exc.code, "error": f"HTTP {exc.code}", "url": exc.geturl()}
    except Exception as exc:
        return {"status": None, "error": f"{type(exc).__name__}: {exc}"}
    if status != 200 or final_url.rstrip("/") != (BASE + path).rstrip("/"):
        return {"status": status, "error": "redirect or unexpected status", "url": final_url}
    if "text/html" not in content_type and "javascript" not in content_type and "text/plain" not in content_type:
        return {"status": status, "error": "unexpected content type: " + content_type}
    if re.search(r"<title>\s*(?:404|not found|error)", body, re.I):
        return {"status": status, "error": "error page content"}
    lines = body.splitlines()
    relevant = []
    for i, line in enumerate(lines):
        if KEYWORDS.search(line):
            relevant.append(f"L{i+1}: {line.strip()[:450]}")
            for nearby in lines[max(0,i-1):min(len(lines),i+2)]:
                for match in LINKS.findall(nearby):
                    relevant.append("  " + match[:350])
    # A complete body digest catches modifications even when relevant lines stay unchanged.
    return {"status": status, "sha256": hashlib.sha256(body.encode()).hexdigest(),
            "relevant": sorted(set(relevant))[:200], "length": len(body)}

def main():
    previous = json.loads(STATE.read_text()) if STATE.exists() else {}
    current = {}
    changes = []
    errors = []
    for path in PATHS:
        result = fetch(path)
        if "sha256" not in result:
            errors.append(f"{path}: {result.get('error','unavailable')}")
            # Do not overwrite a valid baseline with a failed fetch.
            if path in previous:
                current[path] = previous[path]
            continue
        current[path] = result
        old = previous.get(path)
        if old and old.get("sha256") != result["sha256"]:
            old_lines = set(old.get("relevant", []))
            new_lines = set(result["relevant"])
            added = sorted(new_lines - old_lines)
            removed = sorted(old_lines - new_lines)
            if added or removed:
                changes.append((path, added[:30], removed[:30]))
        elif not old and previous and result["relevant"]:
            # A newly accessible page with reservation-related content.
            changes.append((path, result["relevant"][:20], []))
    STATE.parent.mkdir(parents=True, exist_ok=True)
    STATE.write_text(json.dumps(current, ensure_ascii=False, indent=2) + "\n")
    timestamp = dt.datetime.now(dt.timezone(dt.timedelta(hours=9))).strftime("%Y-%m-%d %H:%M KST")
    parts = [f"# 하우스토리 예약 감시: {timestamp}", f"확인 성공: {len(current) - len([p for p in errors if False])}개 기준 데이터 보존", ""]
    if not previous:
        parts.append("첫 실행: 기준 데이터를 수집했으며 변경 알림은 생성하지 않습니다.")
    if changes:
        parts.append("## 예약 관련 코드 변경 후보 (검증 필요)")
        for path, added, removed in changes:
            parts.append(f"### {BASE + path}")
            parts += ["추가:"] + ["- `" + x.replace("`", "'") + "`" for x in added]
            parts += ["삭제:"] + ["- `" + x.replace("`", "'") + "`" for x in removed]
    else:
        parts.append("예약 관련 텍스트 변경 감지 없음 (접근 실패 경로는 미확인).")
    if errors:
        parts.append("\n## 접근 실패 및 미확인")
        parts.extend("- " + x for x in errors)
    REPORT.write_text("\n".join(parts) + "\n")
    print(REPORT.read_text())
    # Only alert for changes in actual reservation-related lines.
    with open(os.environ.get("GITHUB_OUTPUT", "/tmp/haustory-output"), "a") as out:
        out.write(f"changed={'true' if changes else 'false'}\n")

if __name__ == "__main__":
    main()
