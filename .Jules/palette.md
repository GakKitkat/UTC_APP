## 2026-06-09 - SVG Accessibility Patterns
**Learning:** Found an accessibility issue pattern specific to this app's components: inline SVGs are often used purely for decoration next to informative text, causing screen readers to announce unlabelled graphic elements redundantly.
**Action:** When working with inline SVGs in this app, ensure decorative SVGs use `aria-hidden="true"` and meaningful ones (like the main logo) have `role="img"` and `aria-label="[Description]"`.
