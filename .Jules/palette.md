## 2024-07-08 - Explicit Accessibility Attributes for Inline SVGs in Blade
**Learning:** Decorative and informative inline `<svg>` elements in Blade templates need explicit accessibility attributes (e.g., `aria-hidden="true"` or `role="img" aria-label="..."`) because they don't natively communicate their purpose to screen readers, unlike standard HTML components with semantic meaning.
**Action:** Always manually evaluate and annotate inline `<svg>` elements in templates to determine if they are decorative (`aria-hidden="true"`) or informative (`role="img"` with an `aria-label`).
