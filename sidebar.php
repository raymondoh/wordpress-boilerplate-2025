<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WP_Boilerplate
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    return;
}
?>

<aside id="secondary" class="widget-area space-y-6">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
