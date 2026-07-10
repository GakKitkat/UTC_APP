## 2024-07-10 - Adding ARIA attributes to SVGs
**Learning:** This app uses inline SVGs for both meaningful images (logos) and decorative elements, often without basic accessibility attributes like roles, aria-labels, or aria-hidden.
**Action:** Always check newly added or modified inline SVGs for proper ARIA roles/labels (if meaningful) or `aria-hidden="true"` (if decorative) to ensure they are accessible to screen readers.
