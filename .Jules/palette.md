## 2024-07-07 - Accessible SVG Icons
**Learning:** Decorative SVG icons in default Laravel templates (`welcome.blade.php`) often lack `aria-hidden="true"`, causing unnecessary noise for screen readers, while primary brand logos lack `role="img"` and `aria-label`.
**Action:** Next time I work with default templates or components, proactively check for unlabelled or non-hidden SVGs to improve screen reader experience out-of-the-box.
