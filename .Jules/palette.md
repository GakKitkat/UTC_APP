## 2026-09-10 - Adding aria-hidden to decorative SVGs
**Learning:** Decorative inline SVGs without accessibility attributes can be confusing for screen readers, as they might try to announce the complex path data or a confusing default label.
**Action:** Always add aria-hidden="true" to SVGs that are purely decorative, especially when they are accompanied by text that conveys the same meaning.
