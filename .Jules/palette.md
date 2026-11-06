## 2024-11-06 - SVG Accessibility in Laravel Welcome Page
**Learning:** Found multiple inline SVGs in `resources/views/welcome.blade.php` used as icons. These lack `aria-hidden="true"`, meaning screen readers will try to read them, causing unnecessary noise for users.
**Action:** Always add `aria-hidden="true"` to decorative SVGs, or provide an appropriate `aria-label` and `role="img"` if they convey meaning. I will add `aria-hidden="true"` to the decorative icon SVGs on the welcome page.
