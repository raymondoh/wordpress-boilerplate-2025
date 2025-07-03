<?php
/**
 * The template for displaying all pages
 *
 * @package WP_Boilerplate
 */

get_header();
?>

<main id="primary" class="site-main container mx-auto py-8 px-4">

    <?php while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-lg shadow-md overflow-hidden'); ?>>
            <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail('large', ['class' => 'w-full h-auto']); ?>
                </div>
            <?php endif; ?>

            <div class="p-6">
                <header class="entry-header mb-4">
                    <?php the_title('<h1 class="entry-title text-2xl font-bold">', '</h1>'); ?>
                </header>

                <div class="entry-content prose max-w-none">
                    <?php the_content(); ?>
                    <?php
                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'wp-boilerplate'),
                        'after' => '</div>',
                    ));
                    ?>
                </div>
            </div>
        </article>

        <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;
        ?>

    <?php endwhile; ?>

</main>

<?php
get_sidebar();
get_footer();
