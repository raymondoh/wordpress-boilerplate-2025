<?php get_header(); ?>

<main id="main" class="site-main container section" role="main">
    <?php
    while ( have_posts() ) :
        the_post();
        get_template_part( 'template-parts/content/content-single' );

        the_post_navigation(
            array(
                'prev_text' => '<span class="block text-xs uppercase tracking-wide text-slate-400">' . esc_html__( 'Previous', 'boilerplate' ) . '</span><span class="text-sm font-semibold text-slate-700">%title</span>',
                'next_text' => '<span class="block text-xs uppercase tracking-wide text-slate-400">' . esc_html__( 'Next', 'boilerplate' ) . '</span><span class="text-sm font-semibold text-slate-700">%title</span>',
            )
        );
    endwhile;
    ?>
</main>

<?php get_footer(); ?>
