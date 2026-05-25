## 2026-05-25 - [Decorative SVGs without aria-hidden="true"]
**Learning:** Found decorative SVGs in the welcome page without `aria-hidden="true"`. Screen readers would announce these SVGs as images, which would cause confusion as they are purely decorative and have context adjacent to them.
**Action:** Added `aria-hidden="true"` to all decorative SVGs to improve accessibility.
