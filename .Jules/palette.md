## 2024-06-13 - Decorative SVGs Missing aria-hidden in Boilerplate
**Learning:** Standard Laravel starter templates (like `welcome.blade.php`) include inline decorative SVGs next to links that lack `aria-hidden="true"`, causing screen readers to announce them redundantly. The main logo SVG also lacked an accessible name and role.
**Action:** Always check default boilerplate code for missing ARIA attributes on decorative and informative SVGs, even in widely used frameworks.
