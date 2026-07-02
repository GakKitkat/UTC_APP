## 2024-05-15 - Framework Boilerplate SVGs Lack Accessibility
**Learning:** Default Laravel boilerplate (like `welcome.blade.php`) often omits basic accessibility attributes on SVGs, which causes screen readers to either completely ignore informative images (missing accessible names) or read out confusing metadata for decorative icons.
**Action:** Always audit framework-generated SVGs. Add `role="img"` and `aria-label` to informative SVGs, and `aria-hidden="true"` to purely decorative SVGs.
