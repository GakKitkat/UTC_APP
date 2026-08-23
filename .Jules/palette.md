## 2024-08-23 - Decorative vs Informative SVGs
**Learning:** In standard Laravel welcome pages, structural SVGs are often injected inline directly into blade files. These are read out raw by screen readers if lacking proper attributes. Distinguishing between informative SVGs (which need `role="img"` and `aria-label`) and decorative SVGs (which need `aria-hidden="true"`) is crucial for clean screen reader flow.
**Action:** Always scan for inline `<svg>` elements in blade templates and ensure they have either `aria-hidden="true"` (if decorative) or an `aria-label` (if informative).
