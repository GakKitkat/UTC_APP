## 2024-08-24 - SVG Accessibility in Blade Templates
**Learning:** Decorative inline SVGs (like icons next to text links) are often read confusingly by screen readers if they lack aria attributes. Informative SVGs need labels, and decorative ones must be hidden.
**Action:** When adding or modifying inline SVGs in Blade templates, always ensure they have either `aria-hidden="true"` (if decorative) or an `aria-label` and `role="img"` (if informative) for proper screen reader flow.
