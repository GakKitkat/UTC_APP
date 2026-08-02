## 2026-08-02 - Inline SVG Accessibility Pattern
**Learning:** Decorative inline SVGs in this application's templates (like `welcome.blade.php`) lack `aria-hidden="true"`, which can cause screen readers to announce them unnecessarily or read confusing SVG path data. Conversely, informative SVGs lack `role="img"` and `aria-label`.
**Action:** Always verify inline SVGs. Add `aria-hidden="true"` to decorative SVGs (like icons next to text). Add `role="img"` and an `aria-label` to informative SVGs (like logos or standalone icons) so screen readers handle them correctly.
