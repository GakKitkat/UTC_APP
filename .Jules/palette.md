## 2024-08-15 - SVG Accessibility

**Learning:** When working with inline SVGs, it's crucial to specify accessibility attributes. The main informative SVG (the logo) requires a `role="img"` and an `aria-label`, whereas decorative SVGs (the icons in the list) should be hidden from screen readers using `aria-hidden="true"`.
**Action:** When inspecting SVG elements in Blade templates, verify their role and ensure they either have informative accessible text or are hidden from assistive technologies.
