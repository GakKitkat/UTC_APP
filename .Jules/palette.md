## 2026-08-28 - Adding accessibility labels to decorative SVGs
**Learning:** Decorative inline SVG elements can interfere with screen readers if they lack aria-hidden attributes, while informative SVGs need aria-label and role='img'.
**Action:** When adding or updating SVG icons in Blade templates (or similar UI components), always specify an explicit aria-hidden='true' for decorative ones, or an aria-label for informative ones.
