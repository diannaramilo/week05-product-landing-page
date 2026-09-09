# BASH MANILA — Responsive Product Landing Page

ITST 302 – Client-Server Technologies · Week 5 · MP04

## 1. Introduction

A product landing page is a focused, single-page site built around one goal:
turning a visitor into a customer, subscriber, or lead. It's usually a
visitor's first real impression of a brand, so its layout, copy, and
responsiveness directly affect trust and conversion.

This project reimagines **BASH MANILA**, a fictional Manila-based bag label,
as a modern landing page — built with Laravel Blade Components for reusable
UI, and Tailwind CSS for fast, consistent, responsive styling.

*(Write 2–3 more sentences in your own words about your specific goals for this build.)*

## 2. Objectives

- Built responsive interfaces using Tailwind CSS utility classes and breakpoints.
- Created reusable Laravel Blade Components (navbar, hero, feature-card,
  pricing-card, testimonial-card, button, footer, and more) to eliminate
  duplicated markup.
- Applied Flexbox and Grid for layout across desktop, tablet, and mobile.
- Implemented scroll-reveal and hover animations for a more engaging UI.
- Organized the project following Laravel's `layouts/ components/ pages/`
  convention.

## 3. Responsive Web Design

*(Explain each of these in your own words, referencing what you actually did:)*

- **Mobile-first design** — how the base (unprefixed) Tailwind classes target
  mobile, and `sm:` / `md:` / `lg:` prefixes layer on larger-screen styles.
- **Responsive breakpoints** — where you used `md:` and `lg:` and why (e.g.
  the navbar collapses to a hamburger menu below `md`).
- **Flexbox** — where used (e.g. the navbar, the CTA form).
- **CSS Grid** — where used (e.g. the features grid, the collections bento grid).
- **User Experience (UX)** — how scroll-reveal, hover states, and the sticky
  navbar improve usability without being distracting.

## 4. Tailwind CSS

- **Utility-first CSS** — explain the approach vs. writing custom CSS classes.
- **Advantages** — faster iteration, no unused CSS, consistent spacing scale.
- **Responsive utility classes** — example from your code, e.g.
  `hidden md:flex` on the navbar links.
- **Component styling** — how `resources/css/app.css` defines the brand's
  design tokens in Tailwind v4's `@theme` block (no `tailwind.config.js`
  needed) — custom colors (`bash-pink`, `bash-ink`, `bash-coral`,
  `bash-chrome`), fonts, and keyframe animations (`animate-marquee`,
  `animate-float`, `animate-fade-up`).

## 5. Blade Components

- **What are Blade Components?** Reusable, self-contained pieces of Blade
  markup (`resources/views/components/*.blade.php`) that can accept props and
  slots, rendered anywhere with `<x-component-name />`.
- **Why they improve maintainability** — one source of truth per UI piece
  (e.g. one `button.blade.php` powers every button on the page, styled by a
  `variant` prop).
- **Benefits of modular UI** — faster changes, consistent design, easier
  testing.

Include a code snippet, e.g.:
```blade
<x-pricing-card plan="Insider" price="₱499" period="year" :featured="true" :features="[
    'Free shipping, always',
    '48-hour early drop access',
]" />
```

## 6. User Interface Design

- **Color Palette** — Blush `#FBF0EA` (base), Bash Pink `#F0567A` (primary),
  Bash Ink `#191410` (dark sections/text), Chrome `#B8BCC2` and Coral
  `#FF5A36` (accents).
- **Typography** — Bricolage Grotesque (display/headings) paired with
  Manrope (body text).
- **Iconography** — inline SVG icons (no external icon library) for feature
  cards and the checklist in pricing cards.
- **Button Styles** — a single `<x-button>` component with `primary`,
  `coral`, `outline`, `ghost`, and `dark` variants.
- **Card Design** — rounded-3xl cards with a consistent border/shadow
  treatment across features, pricing, and testimonials.
- **Layout Consistency** — a shared `max-w-7xl` content width and consistent
  vertical rhythm (`py-24 lg:py-32`) between sections.

## 7. Folder Structure

```
resources/views/
├── layouts/       → app.blade.php, the shared page shell (head, nav, footer)
├── components/    → reusable, self-contained UI pieces (<x-... />)
└── pages/         → full page views that extend the layout (home.blade.php)

public/            → compiled assets + public/images/ (product photography)
screenshots/        → documentation screenshots (desktop/tablet/mobile, etc.)
documentation/      → before/after comparison images
```

## 8. Screenshots

*(Embed your images here once captured — see `screenshots/` and `documentation/`.)*

- Desktop / Tablet / Mobile views
- Navbar (desktop + mobile menu open)
- Hero, Features, Pricing, Testimonials, Footer sections
- Blade Components folder in VS Code
- GitHub repository page

## 9. Before-and-After Comparison

*(Place your early unstyled prototype next to the final polished version and
briefly explain what changed and why.)*

---

## Getting Started (for anyone cloning this repo)

```bash
composer install
npm install
npm run dev        # in one terminal
php artisan serve  # in another terminal
```
Then open http://127.0.0.1:8000
