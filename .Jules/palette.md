## 2024-06-22 - Distinguishing Informative and Decorative SVGs
**Learning:** Found a pattern in the base blade template where all SVGs (both the main logo and decorative icons) lacked accessibility attributes. Screen readers would try to read the paths or miss the logo entirely.
**Action:** When working with SVGs in blade templates, always add `role="img" aria-label="..."` for informative graphics (like logos) and `aria-hidden="true"` for purely decorative icons to reduce screen reader noise.
