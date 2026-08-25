## 2026-08-25 - Added Accessibility to SVGs
**Learning:** Inline SVGs without appropriate ARIA labels or aria-hidden attributes can disrupt screen reader flow, either by being announced incorrectly or skipped.
**Action:** Always ensure inline SVGs have either `aria-hidden="true"` (if decorative) or an `aria-label` and `role="img"` (if informative).
