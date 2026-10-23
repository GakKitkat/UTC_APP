## 2023-10-23 - Accessibility of Inline SVGs in Laravel Welcome Page
**Learning:** Decorative SVGs next to descriptive text (like "Documentation", "Laravel News") create noise for screen reader users if not explicitly hidden. The main logo SVG also lacked an aria-label.
**Action:** Always add `aria-hidden="true"` to decorative inline `<svg>` elements that accompany text links. For informative SVGs (like logos), ensure they have `role="img"` and a descriptive `aria-label`.
