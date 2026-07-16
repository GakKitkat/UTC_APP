## 2024-03-21 - Added Accessibility Attributes to Welcome Page SVGs
**Learning:** Screen readers might try to parse raw SVG code or ignore it entirely if roles and labels are missing. Decorative SVGs can cause noise for screen reader users if not hidden.
**Action:** Always add `role="img"` and an `aria-label` to informative SVGs, and `aria-hidden="true"` to purely decorative SVGs to improve the experience for screen reader users.
