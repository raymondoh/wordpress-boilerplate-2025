<?php
/**
 * Enqueue theme styles, scripts, and optional modules.
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

        $css_rel  = '/assets/css/main.css';
        $css_path = $theme_dir . $css_rel;
        if ( file_exists( $css_path ) ) {
            wp_enqueue_style(
                'bp-main',
                $theme_uri . $css_rel,
                array(),
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

if ( ! function_exists( 'bp_enqueue_optional_modules' ) ) {
    /**
     * Conditionally load optional front-end modules via CDN.
     */
    function bp_enqueue_optional_modules() {
        $modules = array();

        if ( isset( $GLOBALS['BP_MODULES'] ) && is_array( $GLOBALS['BP_MODULES'] ) ) {
            $modules = $GLOBALS['BP_MODULES'];
        }

        if ( ! empty( $modules['alpine'] ) ) {
            wp_enqueue_script(
                'alpinejs',
                'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js',
                array(),
                null,
                true
            );
        }

        if ( ! empty( $modules['fancybox'] ) ) {
            wp_enqueue_style(
                'fancybox',
                'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css',
                array(),
                '5.0'
            );

            wp_enqueue_script(
                'fancybox',
                'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js',
                array(),
                '5.0',
                true
            );
        }

        if ( ! empty( $modules['swiper'] ) ) {
            wp_enqueue_style(
                'swiper',
                'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css',
                array(),
                '10.0.0'
            );

            wp_enqueue_script(
                'swiper',
                'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js',
                array(),
                '10.0.0',
                true
            );
        }
    }
}
add_action( 'wp_enqueue_scripts', 'bp_enqueue_optional_modules', 20 );
