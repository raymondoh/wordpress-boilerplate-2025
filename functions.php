<?php
/**
 * Theme bootstrap
 *
 * @package WordPress_Boilerplate_2025
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! defined( 'BP_THEME_VERSION' ) ) {
    define( 'BP_THEME_VERSION', '0.1.0' );
}

require_once get_template_directory() . '/inc/setup.php';
require_once get_template_directory() . '/inc/enqueue.php';

if ( ! function_exists( 'bp_get_part' ) ) {
    /**
     * Wrapper for get_template_part with optional arguments.
     *
     * @param string     $slug Template slug.
     * @param string|null $name Optional. Template name.
     * @param array      $args Optional. Arguments passed to the template.
     */
    function bp_get_part( $slug, $name = null, $args = array() ) {
        if ( empty( $slug ) ) {
            return;
        }

        get_template_part( $slug, $name, $args );
    }
}

if ( ! function_exists( 'bp_fallback_menu' ) ) {
    /**
     * Fallback menu that lists top-level pages when no menu is assigned.
     *
     * @param array|object $args Arguments supplied by wp_nav_menu().
     * @return string|null Rendered markup when echo is false.
     */
    function bp_fallback_menu( $args ) {
        $args = (array) $args;

        $defaults = array(
            'container'   => '',
            'menu_id'     => '',
            'menu_class'  => '',
            'depth'       => 1,
            'link_before' => '',
            'link_after'  => '',
            'echo'        => true,
        );

        $args = wp_parse_args( $args, $defaults );

        $pages = wp_list_pages(
            array(
                'depth'      => (int) $args['depth'],
                'echo'       => false,
                'title_li'   => '',
                'sort_column'=> 'menu_order,post_title',
            )
        );

        if ( empty( $pages ) ) {
            return null;
        }

        $menu_id    = $args['menu_id'] ? ' id="' . esc_attr( $args['menu_id'] ) . '"' : '';
        $menu_class = $args['menu_class'] ? ' class="' . esc_attr( $args['menu_class'] ) . '"' : '';

        $output = '<ul' . $menu_id . $menu_class . '>' . $pages . '</ul>';

        if ( $args['echo'] ) {
            echo $output; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
            return null;
        }

        return $output;
    }
}

$bp_modules = array(
    'alpine'   => false,
    'fancybox' => false,
    'swiper'   => false,
);

/**
 * Allow plugins or child themes to filter module toggles.
 */
$bp_modules = apply_filters( 'bp/modules', $bp_modules );

$GLOBALS['BP_MODULES'] = $bp_modules;
