## 2024-07-20 - Laravel Welcome Page SVG Accessibility
**Learning:** Found multiple instances of inline SVGs on the default Laravel welcome page lacking basic accessibility attributes. Complex decorative SVGs can clutter screen reader output if not hidden, while informative logos need clear labels.
**Action:** Always verify inline SVGs. Distinguish between informative SVGs (needs `role="img"` and `aria-label"`) and decorative SVGs (needs `aria-hidden="true"`).
