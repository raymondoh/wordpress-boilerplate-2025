<?php
/**
 * Enqueue theme styles and scripts.
 *
 * @package WordPress_Boilerplate_2025
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'bp_enqueue_theme_assets' ) ) {
    /**
     * Load the compiled CSS and JS bundles with cache busting.
     */
    function bp_enqueue_theme_assets() {
        $theme_dir = get_template_directory();
        $theme_uri = get_template_directory_uri();

        wp_enqueue_style(
            'bp-style',
            get_stylesheet_uri(),
            array(),
            BP_THEME_VERSION
        );

        $css_rel  = '/assets/css/main.css';
        $css_path = $theme_dir . $css_rel;
        if ( file_exists( $css_path ) ) {
            wp_enqueue_style(
                'bp-main',
                $theme_uri . $css_rel,
                array( 'bp-style' ),
                filemtime( $css_path )
            );
        }

        $js_rel  = '/assets/js/main.js';
        $js_path = $theme_dir . $js_rel;
        if ( file_exists( $js_path ) ) {
            wp_enqueue_script(
                'bp-main',
                $theme_uri . $js_rel,
                array(),
                filemtime( $js_path ),
                true
            );
        }
    }
}
add_action( 'wp_enqueue_scripts', 'bp_enqueue_theme_assets' );


