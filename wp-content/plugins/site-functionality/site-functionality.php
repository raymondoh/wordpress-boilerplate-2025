<?php
/**
 * Plugin Name: Site Functionality
 * Plugin URI: https://example.com/
 * Description: Scaffold for project-specific functionality (CPTs, taxonomies, ACF) that should live outside the theme.
 * Version: 0.1.0
 * Author: Your Name
 * Author URI: https://example.com/
 * License: GPL-2.0-or-later
 * Text Domain: site-functionality
 *
 * Use this plugin as the home for any functionality you would otherwise add to a mu-plugin or the theme's functions.php.
 * Duplicate it per project, rename the plugin header, and commit bespoke content types, taxonomies, or field groups here.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/*
add_action( 'init', function() {
    $labels = array(
        'name'               => __( 'Projects', 'site-functionality' ),
        'singular_name'      => __( 'Project', 'site-functionality' ),
        'add_new'            => __( 'Add New', 'site-functionality' ),
        'add_new_item'       => __( 'Add New Project', 'site-functionality' ),
        'edit_item'          => __( 'Edit Project', 'site-functionality' ),
        'new_item'           => __( 'New Project', 'site-functionality' ),
        'view_item'          => __( 'View Project', 'site-functionality' ),
        'search_items'       => __( 'Search Projects', 'site-functionality' ),
        'not_found'          => __( 'No projects found', 'site-functionality' ),
        'not_found_in_trash' => __( 'No projects found in Trash', 'site-functionality' ),
        'all_items'          => __( 'All Projects', 'site-functionality' ),
        'menu_name'          => __( 'Projects', 'site-functionality' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array( 'slug' => 'projects' ),
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'project', $args );
});
*/

/*
add_action( 'init', function() {
    $labels = array(
        'name'          => __( 'Project Categories', 'site-functionality' ),
        'singular_name' => __( 'Project Category', 'site-functionality' ),
        'search_items'  => __( 'Search Project Categories', 'site-functionality' ),
        'all_items'     => __( 'All Project Categories', 'site-functionality' ),
        'edit_item'     => __( 'Edit Project Category', 'site-functionality' ),
        'update_item'   => __( 'Update Project Category', 'site-functionality' ),
        'add_new_item'  => __( 'Add New Project Category', 'site-functionality' ),
        'new_item_name' => __( 'New Project Category', 'site-functionality' ),
        'menu_name'     => __( 'Project Categories', 'site-functionality' ),
    );

    register_taxonomy(
        'project_category',
        'project',
        array(
            'labels'       => $labels,
            'hierarchical' => true,
            'show_in_rest' => true,
            'rewrite'      => array( 'slug' => 'project-category' ),
        )
    );
});
*/

/*
if ( function_exists( 'acf_add_local_field_group' ) ) {
    add_action( 'acf/init', function() {
        acf_add_local_field_group(
            array(
                'key'    => 'group_project_details',
                'title'  => __( 'Project Details', 'site-functionality' ),
                'fields' => array(
                    array(
                        'key'   => 'field_project_subtitle',
                        'name'  => 'project_subtitle',
                        'label' => __( 'Project Subtitle', 'site-functionality' ),
                        'type'  => 'text',
                    ),
                ),
                'location' => array(
                    array(
                        array(
                            'param'    => 'post_type',
                            'operator' => '==',
                            'value'    => 'project',
                        ),
                    ),
                ),
            )
        );
    });
}
*/
