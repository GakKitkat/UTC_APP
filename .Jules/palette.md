## 2024-05-24 - Laravel Welcome Page Accessibility
**Learning:** Default inline SVGs in standard Laravel templates often lack ARIA attributes, creating noise for screen readers.
**Action:** Add aria-hidden="true" to decorative icons and role="img" with aria-label to structural/brand icons.
