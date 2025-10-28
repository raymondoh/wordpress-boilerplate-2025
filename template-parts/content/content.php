<?php
/**
 * Template part for displaying post summaries on the blog page.
 *
 * @package WP_Boilerplate
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('group overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition duration-200 hover:-translate-y-1 hover:shadow-lg'); ?>>
    <?php if ( has_post_thumbnail() ) : ?>
        <figure class="relative aspect-[16/9] overflow-hidden">
            <a href="<?php the_permalink(); ?>" class="absolute inset-0">
                <span class="sr-only"><?php the_title(); ?></span>
            </a>
            <img class="h-full w-full object-cover transition duration-200 group-hover:scale-[1.02]" src="<?php the_post_thumbnail_url( 'large' ); ?>" alt="<?php the_title_attribute(); ?>">
        </figure>
    <?php endif; ?>

    <div class="flex flex-col gap-4 p-6">
        <header class="space-y-2">
            <?php
            the_title(
                sprintf(
                    '<h2 class="text-2xl font-semibold tracking-tight text-slate-900"><a class="no-underline transition hover:text-slate-600" href="%s" rel="bookmark">',
                    esc_url( get_permalink() )
                ),
                '</a></h2>'
            );
            ?>
            <div class="text-sm text-slate-500">
                <time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
            </div>
        </header>

        <div class="prose prose-slate max-w-none">
            <?php the_excerpt(); ?>
        </div>

        <div>
            <a class="inline-flex items-center gap-2 text-sm font-semibold text-blue-600 transition hover:text-blue-500" href="<?php the_permalink(); ?>">
                <?php esc_html_e( 'Continue reading', 'boilerplate' ); ?>
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M5 12h14" />
                    <path d="M13 6l6 6-6 6" />
                </svg>
            </a>
        </div>
    </div>
</article>
