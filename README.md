# WordPress Boilerplate Theme

A lean WordPress starter that pairs **Tailwind CSS 4**, **esbuild**, and clean PHP templates. It ships with a sticky header, mobile drawer navigation, and a modular hero layout you can adapt per project.

---

## 🚀 Quick Start

1. Copy or clone the theme into your WordPress installation under `wp-content/themes/`.

2. If you use `nvm`, switch to the project Node version defined in `.nvmrc`:

   ```bash
   nvm use
   ```

3. Install dependencies:

   ```bash
   npm install
   ```

4. Start local builds while you work:

   ```bash
   npm run watch
   ```

   Or compile a production build when you deploy:

   ```bash
   npm run build
   ```

5. Activate **WordPress Boilerplate 2025** in the WordPress admin.

## 🧰 Build Commands

| Command | Description |
| ------- | ----------- |
| `npm run watch` | Watches Tailwind (`src/css/tailwind.css`) and JavaScript (`src/js/main.js`) and rebuilds to `assets/css/main.css` and `assets/js/main.js`. |
| `npm run build` | Runs one-off production builds for CSS and JS (minified, cache-friendly). |
| `npm run build:css` | Builds and minifies the Tailwind CSS bundle using `@tailwindcss/cli`. |
| `npm run build:js` | Bundles and minifies the JavaScript entrypoint using esbuild. |

## 🧭 Boilerplate Guide

### Mobile drawer navigation

The sticky header renders a desktop menu plus the mobile toggle button (`#mobile-nav-toggle`) with open (`#icon-open`) and close (`#icon-close`) icons. The drawer itself lives in `template-parts/navigation-mobile.php` and is included directly after the header via `get_template_part('template-parts/navigation-mobile');`.

The hidden `<span>` inside `header.php` contains the utility classes that the JavaScript toggles (`translate-x-*`, `opacity-*`, `pointer-events-*`, `overflow-hidden`). Keep that span (or add an equivalent source reference) if you adjust the header so Tailwind can detect and include those classes in the generated CSS.

### Hero section module

A static hero scaffold is stored at `template-parts/hero/hero.php`. It is already referenced in `front-page.php`:

```php
get_template_part( 'template-parts/hero/hero' );
```

Swap the placeholder copy, wire it up to ACF, or add a slider script when you need it—no additional enqueueing is enabled by default.

### Site Functionality plugin

Project-specific logic (custom post types, taxonomies, ACF field groups) belongs in `wp-content/plugins/site-functionality/site-functionality.php`. The scaffold ships with commented examples so you can quickly uncomment or adapt them for each client site. Activate this plugin alongside the theme to keep presentation and functionality separate.

## 🗂 File Structure

```text
theme/
├── style.css                      # Theme header + minimal baseline styles
├── functions.php                  # Boots the theme and registers helpers
├── inc/
│   ├── setup.php                  # Theme supports and menus
│   └── enqueue.php                # Enqueues CSS/JS bundles
├── assets/                        # Build output lives here (ignored)
├── src/
│   ├── css/tailwind.css           # Tailwind CSS 4 entrypoint
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

Tailwind CSS 4 drives the theme styling. The CSS entrypoint is `src/css/tailwind.css` and begins with:

```css
@import "tailwindcss";
```

Add project-wide styles, components, or utilities there, then rebuild with `npm run watch` or `npm run build`.

The project also includes `postcss.config.mjs` using `@tailwindcss/postcss` for Tailwind CSS 4 compatibility.

## ✅ Requirements

- Node.js 24 recommended (`.nvmrc` included)
- WordPress 6.0+
- PHP 7.4+
