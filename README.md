# 역곡지구 하우스토리 예약 감시

공식 홈페이지의 공개 HTML과 JavaScript를 읽고 직전 성공 수집본과 비교합니다. **예약을 신청하거나 폼을 제출하지 않습니다.**

- 한국시간 매일 **08:00~19:00 매시 정각**에 GitHub Actions 예약 실행 (UTC 기준 23:00, 00:00~10:00)
- GitHub 예약 실행은 지연되거나 누락될 수 있습니다.
- 메인, 분양일정, 예약 후보 25개 경로, common.js, main_v02.js, sub.js, mobile.js 검사
- HTTP 오류, 리다이렉트, 오류 페이지는 정상 콘텐츠로 간주하지 않고 기존 기준본을 보존
- 실제 응답 본문의 SHA-256 및 예약 관련 문구/링크를 비교. 쿼리 버전만 변경된 것은 비교 대상이 아님
- 예약 관련 텍스트의 변경 후보를 발견하면 GitHub Issue 생성. **변경 알림은 예약 URL 확정이나 예약 가능을 보장하지 않음**
- 첫 실행은 기준 데이터만 저장하고 알림을 보내지 않습니다.
- 공개 저장소이므로 수집된 텍스트 일부와 알림 Issue는 공개됩니다. 개인정보는 수집하지 않습니다.

## 사용
1. **Actions** 탭에서 `Reservation source monitor` → **Run workflow**로 최초 실행합니다.
2. **Settings → Actions → General → Workflow permissions**에서 읽기/쓰기 권한이 필요한 경우 허용합니다.
3. GitHub 저장소의 **Watch → Custom → Issues**를 켜고 GitHub 계정의 이메일 알림을 활성화하면 변경 Issue 이메일을 받을 수 있습니다.
4. Actions 실행 로그와 `state/baseline.json`에서 수집 결과를 확인합니다.

참고: 홈페이지의 HTML과 JavaScript를 검사하는 방식이며, 로그인 뒤 콘텐츠나 동적 브라우저 렌더링까지 검증하지는 않습니다. 외부 사이트가 GitHub 서버를 차단하면 일부 수집이 실패할 수 있습니다.
