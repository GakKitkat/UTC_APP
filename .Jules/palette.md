## 2023-10-26 - SVG Accessibility in Blade Templates
**Learning:** Laravel's default welcome blade template contains decorative SVGs that lack `aria-hidden="true"` and an informative main logo SVG lacking a `role="img"` and `aria-label`.
**Action:** Always verify inline SVGs in Blade templates have appropriate aria attributes to ensure clean screen reader flows.
