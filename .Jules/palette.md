## 2024-05-24 - Accessibility for inline SVGs in Blade templates
**Learning:** Inline SVGs in Blade templates (like those in welcome.blade.php) need explicit accessibility attributes to ensure correct screen reader flow. Without them, screen readers might read out meaningless image content or miss important semantic meaning.
**Action:** When adding or reviewing inline SVGs, always ensure they have `aria-hidden="true"` if they are purely decorative, or `aria-label` and `role="img"` if they convey meaning.
