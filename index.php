<?php
/**
 * The main template file
 *
 * @package WP_Boilerplate
 */

get_header();
?>

<main id="primary" class="site-main container mx-auto py-8 px-4">

    <?php if (have_posts()) : ?>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/content', get_post_type()); ?>
            <?php endwhile; ?>
        </div>

        <?php the_posts_pagination(array(
            'prev_text' => '&larr; Previous',
            'next_text' => 'Next &rarr;',
            'class' => 'mt-8',
        )); ?>

    <?php else : ?>

        <?php get_template_part('template-parts/content', 'none'); ?>

    <?php endif; ?>

</main>

<?php
get_sidebar();
get_footer();
