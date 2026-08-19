
## 2026-08-19 - Improve screen reader experience for SVG icons
**Learning:** SVG icons acting as decorative elements should have `aria-hidden="true"` to prevent screen readers from announcing redundant information, while meaningful SVGs should include `role="img"` and an `aria-label`.
**Action:** Apply these ARIA attributes to SVGs in Blade templates to enhance accessibility.
