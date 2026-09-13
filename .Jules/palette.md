## 2024-09-13 - [SVG Accessibility in Blade Templates]
**Learning:** Decorative SVGs in default Laravel templates (like `welcome.blade.php`) are missing basic accessibility attributes out-of-the-box.
**Action:** Always check inline `<svg>` elements in Blade views and add `aria-hidden="true"` (if decorative) or an `aria-label` and `role="img"` (if informative).