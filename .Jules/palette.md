## 2026-11-08 - SVGs missing ARIA labels
**Learning:** Found multiple inline <svg> elements used for decorative or informative purposes without appropriate accessibility attributes (like `aria-hidden` or `aria-label`).
**Action:** Adding `aria-hidden="true"` to decorative SVGs in welcome.blade.php to improve screen reader flow.
