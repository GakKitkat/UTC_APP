## 2026-05-17 - Semantics and Screen Reader Accessibility in Laravel Welcome View
**Learning:** When using standard decorative SVG icons from common libraries in default Laravel templates, screen readers can redundantly announce them or become confused by complex paths unless properly hidden. Conversely, primary logos lack explicit labels by default.
**Action:** Add `role="img"` and `aria-label="..."` to informative SVGs, and use `aria-hidden="true"` for decorative ones to clean up the screen reader experience. Always upgrade primary content containers to semantic landmarks like `<main>`.
