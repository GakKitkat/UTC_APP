## 2024-05-18 - Improve SVG Accessibility in Default Templates
**Learning:** Inline SVGs in the app's default Blade templates (like welcome.blade.php) lack necessary ARIA attributes out of the box, causing them to either be skipped or improperly announced by screen readers.
**Action:** Consistently apply `aria-hidden="true"` to decorative SVGs (like icons next to text links) and `role="img"` with a descriptive `aria-label` to informative SVGs (like logos).
