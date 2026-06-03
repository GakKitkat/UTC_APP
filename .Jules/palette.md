## 2026-06-03 - Decorative Inline SVGs Need Screen Reader Attributes
**Learning:** Decorative inline SVGs in Laravel's default welcome view lack screen reader attributes, causing screen readers to potentially announce unhelpful graphic elements or skip important branding entirely.
**Action:** Always verify that important SVGs (like logos) have `role="img"` and `aria-label`, while purely decorative SVGs have `aria-hidden="true"`.
