## 2024-07-13 - Wrapping Icons inside Links
**Learning:** Found instances where icons placed adjacent to links visually appeared as part of the link but were not clickable or read properly by screen readers in context.
**Action:** Always wrap icons inside their corresponding anchor tags with `aria-hidden="true"` on the icon itself, while applying utility flexbox classes to ensure proper alignment. This increases target size and screen reader clarity.
