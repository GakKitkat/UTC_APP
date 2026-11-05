## 2026-11-05 - Adding aria-hidden to decorative SVGs
**Learning:** Decorative inline SVGs in Laravel's default welcome view lack `aria-hidden="true"`, which can cause screen readers to announce them unnecessarily, cluttering the experience.
**Action:** Add `aria-hidden="true"` to all decorative inline SVGs to improve accessibility without changing visual styling.
