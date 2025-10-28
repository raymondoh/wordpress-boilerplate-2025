# WordPress Boilerplate Theme

A lean WordPress starter that pairs **Tailwind CSS 3**, **esbuild**, and clean PHP templates. It ships with a sticky header, mobile drawer navigation, and a modular hero layout you can toggle per project.

---

## 🚀 Quick Start

1. Copy or clone the theme into your WordPress installation under `wp-content/themes/`.
2. Install dependencies:
   ```bash
   npm install
   ```
3. Start local builds while you work:
   ```bash
   npm run watch
   ```
   or compile a production build when you deploy:
   ```bash
   npm run build
   ```
4. Activate **WordPress Boilerplate 2025** in the WordPress admin.

## 🧰 Build Commands

| Command | Description |
| ------- | ----------- |
| `npm run watch` | Watches Tailwind (`src/css/tailwind.css`) and JavaScript (`src/js/main.js`) and rebuilds to `assets/css/main.css` and `assets/js/main.js`. |
| `npm run build` | Runs one-off production builds for CSS and JS (minified, cache-friendly). |

## 🧭 Boilerplate Guide

### Mobile drawer navigation
The sticky header renders a desktop menu plus the mobile toggle button (`#mobile-nav-toggle`) with open (`#icon-open`) and close (`#icon-close`) icons. The drawer itself lives in `template-parts/navigation-mobile.php` and is included directly after the header via `get_template_part('template-parts/navigation-mobile');`.

The hidden `<span>` inside `header.php` safelists the utility classes that the JavaScript toggles (`translate-x-*`, `opacity-*`, `pointer-events-*`, `overflow-hidden`). Keep that span (or add an equivalent) if you adjust the header so Tailwind does not purge those classes.

### Hero section module
A static hero scaffold is stored at `template-parts/hero/hero.php`. It is already referenced in `front-page.php`:
```php
get_template_part( 'template-parts/hero/hero' );
```
Swap the placeholder copy, wire it up to ACF, or add a slider script when you need it—no additional enqueueing is enabled by default.

### Site Functionality plugin
Project-specific logic (custom post types, taxonomies, ACF field groups) belongs in `wp-content/plugins/site-functionality/site-functionality.php`. The scaffold ships with commented examples so you can quickly uncomment or adapt them for each client site. Activate this plugin alongside the theme to keep presentation and functionality separate.

## 🗂 File Structure

```
theme/
├── style.css                      # Theme header + minimal baseline styles
├── functions.php                  # Boots the theme and registers helpers
├── inc/
│   ├── setup.php                  # Theme supports and menus
│   └── enqueue.php                # Enqueues CSS/JS bundles
├── assets/                        # Build output lives here (ignored)
├── src/
│   ├── css/tailwind.css           # Tailwind entrypoint
│   └── js/
│       ├── main.js                # Theme JS entrypoint (imports drawer)
│       └── mobile-drawer.js       # Off-canvas navigation logic
├── template-parts/
│   ├── hero/hero.php              # Hero module scaffold
│   └── navigation-mobile.php      # Mobile drawer markup
├── front-page.php                 # Example home template including hero
├── header.php / footer.php        # Layout chrome
└── wp-content/plugins/
    └── site-functionality/        # Project functionality plugin scaffold
```

## 🎨 Styling

Tailwind CSS 3 drives all styling. Edit `src/css/tailwind.css` to add global layers or utilities, then rebuild with `npm run watch` or `npm run build`.

## ✅ Requirements

- Node.js 18+
- WordPress 6.0+
- PHP 7.4+
