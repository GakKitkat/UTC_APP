## 2024-03-21 - [Accessibility] Screen readers & Inline SVGs
**Learning:** Decorative inline `<svg>` elements without ARIA attributes confuse screen readers or announce redundantly.
**Action:** Always ensure inline `<svg>` elements have either `aria-hidden="true"` (if decorative) or an `aria-label` and `role="img"` (if informative) for proper screen reader flow.
