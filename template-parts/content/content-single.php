<?php
/**
 * Template part for displaying a single post's content.
 *
 * @package WP_Boilerplate
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-xl'); ?>>
    <?php if ( has_post_thumbnail() ) : ?>
        <figure class="aspect-[16/9]">
            <img class="h-full w-full object-cover" src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="<?php the_title_attribute(); ?>">
        </figure>
    <?php endif; ?>

    <div class="space-y-8 p-8 sm:p-10 lg:p-12">
        <header class="space-y-4">
            <?php the_title( '<h1 class="text-4xl font-bold tracking-tight text-slate-900 sm:text-5xl">', '</h1>' ); ?>

            <div class="flex flex-wrap gap-4 text-sm text-slate-500">
                <span>
                    <time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
                </span>
                <span>
                    <?php
                    echo wp_kses_post(
                        sprintf(
                            /* translators: %s: author name. */
                            __( 'by %s', 'boilerplate' ),
                            get_the_author_posts_link()
                        )
                    );
                    ?>
                </span>
            </div>
        </header>

        <div class="prose prose-lg prose-slate max-w-none">
            <?php
            the_content();

            wp_link_pages(
                array(
                    'before' => '<div class="mt-8 space-x-2 text-sm font-medium">' . esc_html__( 'Pages:', 'boilerplate' ),
                    'after'  => '</div>',
                )
            );
            ?>
        </div>
    </div>
</article>
