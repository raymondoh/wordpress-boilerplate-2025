<?php
/**
 * Off-canvas mobile navigation.
 *
 * @package WordPress_Boilerplate_2025
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$menu_args = array(
    'theme_location' => 'primary',
    'menu_id'        => 'mobile-primary-menu',
    'menu_class'     => 'flex flex-col gap-6 text-lg font-medium text-slate-900',
    'container'      => '',
    'echo'           => false,
    'depth'          => 1,
);

if ( has_nav_menu( 'primary' ) ) {
    $menu_markup = wp_nav_menu( $menu_args );
} else {
    $menu_markup = bp_fallback_menu(
        array_merge(
            $menu_args,
            array(
                'echo' => false,
            )
        )
    );
}

if ( ! empty( $menu_markup ) ) {
    $menu_markup = preg_replace_callback(
        '/<li([^>]*)class="([^"]*)"/i',
        static function( $matches ) {
            $classes = $matches[2];
            if ( false === strpos( $classes, 'mobile-stagger' ) ) {
                $classes .= ' mobile-stagger';
            }

            return '<li' . $matches[1] . 'class="' . $classes . '"';
        },
        $menu_markup
    );

    $menu_markup = preg_replace(
        '/<li(?![^>]*class=")/i',
        '<li class="mobile-stagger"',
        $menu_markup
    );
}
?>
<div id="mobile-backdrop" class="fixed inset-0 z-40 bg-slate-900/60 opacity-0 pointer-events-none transition-opacity duration-300 lg:hidden" hidden></div>

<aside id="mobile-nav" class="fixed inset-y-0 right-0 z-50 flex w-full max-w-xs translate-x-full flex-col gap-6 bg-white px-6 pb-8 pt-6 shadow-xl opacity-0 pointer-events-none transition-all duration-300 lg:hidden" aria-hidden="true">
    <div class="flex flex-col gap-1">
        <span class="text-sm font-semibold uppercase tracking-wide text-slate-500"><?php bloginfo( 'name' ); ?></span>
        <?php $tagline = get_bloginfo( 'description' ); ?>
        <?php if ( ! empty( $tagline ) ) : ?>
            <span class="text-xs text-slate-400"><?php echo esc_html( $tagline ); ?></span>
        <?php endif; ?>
    </div>

    <nav aria-label="<?php esc_attr_e( 'Mobile Primary Menu', 'boilerplate' ); ?>" class="flex-1 overflow-y-auto">
        <?php echo ! empty( $menu_markup ) ? wp_kses_post( $menu_markup ) : ''; ?>
    </nav>

    <div class="mt-auto flex flex-col gap-4">
        <a class="inline-flex items-center justify-center rounded-full bg-slate-900 px-5 py-3 text-base font-semibold text-white transition hover:bg-slate-700" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
            <?php esc_html_e( 'Start a Project', 'boilerplate' ); ?>
        </a>
        <p class="text-xs text-slate-500">
            <?php esc_html_e( 'Update this call-to-action per project or replace it with something else.', 'boilerplate' ); ?>
        </p>
    </div>
</aside>

