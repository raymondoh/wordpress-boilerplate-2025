<footer class="border-t border-slate-200 bg-slate-50">
    <div class="container flex flex-col gap-2 py-12 text-sm text-slate-500">
        <p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></p>
        <?php if ( $description = get_bloginfo( 'description', 'display' ) ) : ?>
            <p class="text-slate-400"><?php echo esc_html( $description ); ?></p>
        <?php endif; ?>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>
