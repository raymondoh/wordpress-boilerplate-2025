<?php
/**
 * The template for displaying the front page.
 *
 * @package WordPress
 * @subpackage your-theme-name
 */

get_header(); 
?>

<main id="main" class="site-main" role="main">

    <?php
    // Display our Hero Component
    get_template_part('template-parts/components/hero');

    // Display our Native Gallery Component
    get_template_part('template-parts/components/native-gallery'); 
  ?>

</main>

<?php
get_footer();