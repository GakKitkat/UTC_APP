## 2024-03-24 - SVG Accessibility
**Learning:** Default Laravel welcome page SVGs lack accessibility attributes. Without `aria-hidden="true"`, decorative SVGs can create unnecessary noise for screen reader users.
**Action:** Always ensure inline `<svg>` elements have either `aria-hidden="true"` (if decorative) or an `aria-label` and `role="img"` (if informative) for proper screen reader flow.
