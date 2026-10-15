## 2024-05-24 - Inline SVG Accessibility
**Learning:** Default generated blade files from Laravel may use inline decorative `<svg>` elements without `aria-hidden="true"`, causing screen readers to incorrectly announce them.
**Action:** When adding or reviewing inline decorative SVGs, always ensure they have `aria-hidden="true"`.
