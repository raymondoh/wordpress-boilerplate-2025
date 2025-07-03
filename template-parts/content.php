<?php
/**
 * Template part for displaying posts
 *
 * @package WP_Boilerplate
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-lg shadow-md overflow-hidden h-full flex flex-col'); ?>>
    <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>" class="block">
            <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-48 object-cover']); ?>
        </a>
    <?php endif; ?>

    <div class="p-4 flex-grow">
        <header class="entry-header mb-2">
            <?php the_title('<h2 class="entry-title text-xl font-semibold"><a href="' . esc_url(get_permalink()) . '" rel="bookmark" class="hover:text-blue-600">', '</a></h2>'); ?>

            <?php if ('post' === get_post_type()) : ?>
                <div class="entry-meta text-sm text-gray-600 mt-1">
                    <?php
                    wp_boilerplate_posted_on();
                    ?>
                </div>
            <?php endif; ?>
        </header>

        <div class="entry-content">
            <?php the_excerpt(); ?>
        </div>
    </div>

    <footer class="entry-footer p-4 pt-0 mt-auto">
        <a href="<?php the_permalink(); ?>" class="inline-block text-blue-600 hover:text-blue-800">
            <?php esc_html_e('Read more', 'wp-boilerplate'); ?> &rarr;
        </a>
    </footer>
</article>
