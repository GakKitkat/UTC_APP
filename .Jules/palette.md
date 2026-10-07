## 2024-05-16 - SVG Accessibility in Laravel Welcome Page
**Learning:** Found multiple inline `<svg>` elements used for icons and decorative purposes without any accessibility attributes (`aria-hidden="true"`). This causes screen readers to announce them as "group" or not handle them correctly.
**Action:** Adding `aria-hidden="true"` to all decorative SVGs in `resources/views/welcome.blade.php`.
