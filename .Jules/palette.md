## 2024-08-12 - Fix Fragmented Click Targets

**Learning:** When decorative icons accompany a text link, placing the icon outside the `<a>` tag fractures the click target, which is particularly bad for users with motor impairments or those using touch devices. Additionally, screen readers may announce decorative icons redundantly if `aria-hidden` is not used.
**Action:** Always wrap both the descriptive text and its accompanying icon within the same anchor tag to maximize the actionable area. Apply `flex items-center` (or similar alignment) to the `<a>` tag rather than its parent container to maintain visual presentation while improving usability. Ensure decorative SVGs have `aria-hidden="true"`.
