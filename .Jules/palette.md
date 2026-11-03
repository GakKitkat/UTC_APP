## 2026-11-03 - Accessibility of Inline SVGs in Laravel Welcome Page
**Learning:** The default Laravel `welcome.blade.php` file uses several inline `<svg>` elements for its UI components. Without ARIA attributes, these SVGs can be confusing for screen readers. The main logo SVG requires `role="img"` and `aria-label` for identification, while decorative SVGs need `aria-hidden="true"` so screen readers skip them.
**Action:** Always verify that inline SVGs have explicit ARIA attributes applied: `aria-hidden="true"` if decorative, or `role="img"` with an `aria-label` if informative.
