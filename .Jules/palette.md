## 2026-08-11 - Hide decorative SVGs to reduce noise
**Learning:** In Laravel default templates, decorative SVGs lack `aria-hidden` and the main logo lacks `role="img"` and `aria-label`, which adds unnecessary noise and confusion for screen readers.
**Action:** Always add `aria-hidden="true"` to decorative SVGs and proper labels to informative ones.
