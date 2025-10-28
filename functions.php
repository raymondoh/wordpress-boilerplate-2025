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

