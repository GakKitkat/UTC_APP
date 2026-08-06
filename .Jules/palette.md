
## 2024-05-24 - Accessibility for SVGs in Blade Templates
**Learning:** Decorative inline SVGs (like icons next to links) in Laravel's default welcome page need `aria-hidden="true"` to prevent screen readers from announcing them unnecessarily, and the main informational logo SVG needs `role="img"` and an `aria-label` to be accessible.
**Action:** When working with UI updates that involve inline SVGs, always evaluate whether the SVG is informative (needs `role="img"` + `aria-label`) or decorative (needs `aria-hidden="true"`).
