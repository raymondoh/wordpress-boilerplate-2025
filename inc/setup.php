<?php
/**
 * Theme setup callbacks.
 *
 * @package WordPress_Boilerplate_2025
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'bp_theme_setup' ) ) {
    /**
     * Register theme supports and menus.
     */
    function bp_theme_setup() {
        register_nav_menus(
            array(
                'primary' => __( 'Primary Menu', 'boilerplate' ),
            )
        );

        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support(
            'html5',
            array(
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'search-form',
                'script',
                'style',
            )
        );
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 120,
                'width'       => 400,
                'flex-height' => true,
                'flex-width'  => true,
            )
        );
    }
}
add_action( 'after_setup_theme', 'bp_theme_setup' );

if ( ! function_exists( 'bp_theme_body_class' ) ) {
    /**
     * Append a helper body class for the boilerplate.
     *
     * @param array $classes Body classes.
     * @return array
     */
    function bp_theme_body_class( $classes ) {
        $classes[] = 'bp-theme';
        return $classes;
    }
}
add_filter( 'body_class', 'bp_theme_body_class' );

