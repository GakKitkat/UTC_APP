## 2026-07-05 - Added SVG Accessibility Attributes to Default Welcome Page
**Learning:** Found that the default Laravel welcome template uses SVGs for both primary branding (logo) and decorative icons without proper ARIA attributes, creating a noisy and uninformative experience for screen reader users.
**Action:** When working with Blade templates containing inline SVGs, explicitly differentiate between structural/informative SVGs (using role="img" and aria-label) and purely decorative SVGs (using aria-hidden="true").
