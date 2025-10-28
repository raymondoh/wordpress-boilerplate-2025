<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="sticky top-0 z-50 border-b border-slate-200 bg-white/95 py-4 shadow-sm backdrop-blur">
    <div class="mx-auto flex w-full max-w-6xl items-center justify-between gap-6 px-4 lg:px-8">
        <div class="flex items-center gap-3">
            <?php if ( has_custom_logo() ) : ?>
                <div class="shrink-0">
                    <?php the_custom_logo(); ?>
                </div>
            <?php else : ?>
                <a class="text-xl font-semibold text-slate-900 no-underline transition hover:text-slate-600" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php bloginfo( 'name' ); ?>
                </a>
            <?php endif; ?>
        </div>

        <nav class="hidden items-center gap-8 text-sm font-medium text-slate-900 lg:flex" aria-label="<?php esc_attr_e( 'Primary Menu', 'boilerplate' ); ?>">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'flex items-center gap-8',
                    'container'      => '',
                    'fallback_cb'    => 'bp_fallback_menu',
                    'depth'          => 1,
                )
            );
            ?>
        </nav>

        <div class="flex items-center gap-3 lg:hidden">
            <button
                id="mobile-nav-toggle"
                type="button"
                class="inline-flex items-center justify-center rounded-full border border-slate-200 p-2 text-slate-700 transition hover:border-slate-300 hover:text-slate-900 focus:outline-none focus-visible:ring-2 focus-visible:ring-slate-500 focus-visible:ring-offset-2"
                aria-controls="mobile-nav"
                aria-expanded="false"
            >
                <span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'boilerplate' ); ?></span>
                <span id="icon-open" aria-hidden="true">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                        <path d="M4 7h16M4 12h16M4 17h16" />
                    </svg>
                </span>
                <span id="icon-close" class="hidden" aria-hidden="true">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                        <path d="M6 6l12 12M18 6l-12 12" />
                    </svg>
                </span>
            </button>
        </div>
    </div>
    <span class="sr-only hidden -translate-x-4 translate-x-0 translate-x-full opacity-0 opacity-100 pointer-events-none pointer-events-auto overflow-hidden"></span>
</header>

<?php get_template_part( 'template-parts/navigation-mobile' ); ?>

