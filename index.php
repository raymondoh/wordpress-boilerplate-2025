<?php get_header(); ?>

<main id="main" class="site-main container section" role="main">
    <?php if ( have_posts() ) : ?>
        <div class="space-y-12">
            <?php
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content/content' );
            endwhile;
            ?>
        </div>

        <?php the_posts_pagination( array( 'mid_size' => 2 ) ); ?>
    <?php else : ?>
        <?php get_template_part( 'template-parts/content', 'none' ); ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
