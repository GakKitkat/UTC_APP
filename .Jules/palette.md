## 2024-09-21 - Added missing ARIA attributes to SVGs in welcome.blade.php
**Learning:** Decorative inline SVGs in Laravel Blade templates often lack `aria-hidden="true"`, and informative SVGs (like logos) often lack `role="img"` and `aria-label`.
**Action:** When updating Blade templates, always ensure inline `<svg>` elements have either `aria-hidden="true"` (if decorative) or an `aria-label` and `role="img"` (if informative) for proper screen reader flow.
