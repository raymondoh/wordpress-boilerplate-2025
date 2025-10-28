<?php
get_header();
get_template_part( 'template-parts/hero/hero' );
?>
<main id="main" class="site-main mx-auto w-full max-w-4xl px-4 py-16" role="main">
    <?php
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
    ?>
</main>
<?php
get_footer();
?>

