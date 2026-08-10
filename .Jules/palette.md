## 2024-08-10 - Improved SVG Icon Accessibility in Blade Templates
**Learning:** Found a pattern where purely decorative SVG icons accompanying text links were being announced by screen readers, creating unnecessary noise, and the main logo lacked an aria-label.
**Action:** When adding inline SVGs, always evaluate if they are informative or decorative. Add `role="img"` and `aria-label` to informative ones, and `aria-hidden="true"` to decorative ones to improve the screen reader experience.
