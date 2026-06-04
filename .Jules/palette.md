
## 2023-10-27 - Icon Hit Areas in Laravel Footer
**Learning:** Found that decorative icons next to links in the default Laravel welcome page were placed outside the anchor tags. This reduced the clickable hit area and lacked semantic grouping for screen readers.
**Action:** Always wrap decorative icons adjacent to text links *inside* the anchor tag (`<a>`) and apply `aria-hidden="true"` to the SVG. This both increases the hit area for better usability and improves screen reader experience.
