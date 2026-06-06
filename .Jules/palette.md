## 2026-06-06 - Decorative SVGs in Default Components
**Learning:** Default components in frameworks like Laravel often include inline SVGs for visual polish that aren't optimized for screen readers, leading to confusing or verbose output.
**Action:** Always audit framework-provided views/components and add `aria-hidden="true"` to decorative SVGs, and `role="img"` with `aria-label` to informative ones.
