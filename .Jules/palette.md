## 2023-10-05 - Default Laravel Welcome Page Accessibility
**Learning:** The default Laravel `welcome.blade.php` page includes several inline SVGs for icons and logos without proper accessibility attributes out-of-the-box, meaning screen readers will either ignore the logo or inappropriately attempt to announce the decorative paths.
**Action:** Always check default framework starter templates (like Laravel's welcome page) for missing ARIA attributes on inline SVGs, ensuring informative graphics have `aria-label` and `role="img"`, and decorative icons have `aria-hidden="true"`.
