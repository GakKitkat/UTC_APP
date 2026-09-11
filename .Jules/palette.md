## 2024-11-20 - Ensure Decorative SVGs are Hidden from Screen Readers
**Learning:** Found multiple decorative SVG icons in the default Laravel view that lacked `aria-hidden="true"`. This is a common pattern when quickly scaffolding views using tailwind components.
**Action:** Always add `aria-hidden="true"` to SVG elements that are purely decorative to improve the experience for screen reader users.
