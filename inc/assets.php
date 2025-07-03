<?php
/**
 * Enqueue scripts and styles
 *
 * @package WP_Boilerplate
 */

/**
 * Enqueue scripts and styles.
 */
function wp_boilerplate_scripts() {
    // Enqueue Tailwind CSS
    wp_enqueue_style(
        'tailwindcss', 
        get_template_directory_uri() . '/assets/css/tailwind.css',
        array(),
        WP_BOILERPLATE_VERSION
    );

    // Enqueue theme stylesheet
    wp_enqueue_style(
        'wp-boilerplate-style',
        get_stylesheet_uri(),
        array('tailwindcss'),
        WP_BOILERPLATE_VERSION
    );

    // Enqueue theme script
    wp_enqueue_script(
        'wp-boilerplate-script',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        WP_BOILERPLATE_VERSION,
        true
    );

    // Localize script
    wp_localize_script('wp-boilerplate-script', 'wpBoilerplateData', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'homeUrl' => home_url(),
        'themeUrl' => get_template_directory_uri(),
    ));

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'wp_boilerplate_scripts');

/**
 * Enqueue admin scripts and styles.
 */
function wp_boilerplate_admin_scripts() {
    // Enqueue admin stylesheet
    wp_enqueue_style(
        'wp-boilerplate-admin-style',
        get_template_directory_uri() . '/assets/css/admin.css',
        array(),
        WP_BOILERPLATE_VERSION
    );

    // Enqueue admin script
    wp_enqueue_script(
        'wp-boilerplate-admin-script',
        get_template_directory_uri() . '/assets/js/admin.js',
        array('jquery'),
        WP_BOILERPLATE_VERSION,
        true
    );
}
add_action('admin_enqueue_scripts', 'wp_boilerplate_admin_scripts');

/**
 * Enqueue block editor assets.
 */
function wp_boilerplate_block_editor_assets() {
    // Enqueue block editor stylesheet
    wp_enqueue_style(
        'wp-boilerplate-editor-style',
        get_template_directory_uri() . '/assets/css/editor.css',
        array(),
        WP_BOILERPLATE_VERSION
    );
}
add_action('enqueue_block_editor_assets', 'wp_boilerplate_block_editor_assets');
