## 2024-08-03 - Expanding Link Click Targets
**Learning:** Decorative icons placed adjacent to text links without being wrapped in the anchor tag create fragmented, small click areas which degrades UX, especially on touch devices. Screen readers can also interpret standalone SVGs redundantly if not properly hidden.
**Action:** Always wrap related decorative icons and text together inside the `<a>` or `<button>` tags using flexbox (`flex items-center`) to maximize the clickable area, and apply `aria-hidden="true"` to the decorative icon to prevent screen reader noise.
