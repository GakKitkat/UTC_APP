## 2026-06-24 - Hide Decorative SVGs
**Learning:** The default Laravel `welcome.blade.php` template includes several decorative SVGs that add noise to screen readers without providing meaningful information.
**Action:** Always add `aria-hidden="true"` to purely decorative icons, and explicitly label meaningful SVGs (like the main logo) with `role="img"` and `aria-label`.
