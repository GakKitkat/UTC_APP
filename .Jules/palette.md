## 2026-05-26 - SVG Screen Reader Clutter
**Learning:** Decorative SVGs adjacent to text labels in links/cards create redundant noise for screen readers, while meaningful SVGs lack descriptions.
**Action:** Always add `aria-hidden="true"` to purely decorative SVGs and `role="img"` with an `aria-label` to informative SVGs to improve screen reader clarity.
