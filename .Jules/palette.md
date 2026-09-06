## 2024-09-06 - SVG Accessibility Pattern in Blade Templates
**Learning:** Found a recurring pattern in Laravel default Blade templates where SVGs are used for both branding (Laravel logo) and decoration (link icons) without any a11y attributes. Screen readers would either announce confusing SVG code or ignore critical branding.
**Action:** When working on generic PHP/Blade views, systematically check all inline `<svg>` tags and classify them as informative (needs `role="img" aria-label="..."`) or decorative (needs `aria-hidden="true"`).
