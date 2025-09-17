<?php
/**
 * Static hero module placeholder.
 *
 * @package WordPress_Boilerplate_2025
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<section id="hero-slider-section" class="relative flex min-h-screen items-center overflow-hidden bg-slate-950 text-white">
    <div id="hero-slide-wrapper" class="absolute inset-0 -z-10">
        <div class="hero-slide absolute inset-0 h-full w-full bg-gradient-to-br from-slate-950 via-slate-900 to-slate-800">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(255,255,255,0.08),_transparent_60%)]"></div>
        </div>
    </div>

    <div class="relative z-10 w-full">
        <div class="mx-auto flex w-full max-w-6xl flex-col gap-16 px-4 py-24 lg:flex-row lg:items-center lg:gap-24 lg:px-8">
            <div class="max-w-xl space-y-6">
                <span class="inline-flex items-center rounded-full bg-white/10 px-4 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-white/70">
                    <?php esc_html_e( 'Hero Module', 'boilerplate' ); ?>
                </span>
                <h1 class="text-4xl font-bold leading-tight tracking-tight text-white sm:text-5xl lg:text-6xl">
                    <?php esc_html_e( 'Launch faster with a dependable WordPress foundation.', 'boilerplate' ); ?>
                </h1>
                <p class="text-lg text-white/80">
                    <?php esc_html_e( 'WordPress Boilerplate 2025 pairs Tailwind CSS with modern tooling so you can focus on custom design and content.', 'boilerplate' ); ?>
                </p>
                <div class="flex flex-wrap items-center gap-4">
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="inline-flex items-center justify-center rounded-full bg-white px-6 py-3 text-base font-semibold text-slate-900 transition hover:bg-slate-100">
                        <?php esc_html_e( 'Start a Project', 'boilerplate' ); ?>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/work' ) ); ?>" class="inline-flex items-center justify-center rounded-full border border-white/40 px-6 py-3 text-base font-semibold text-white transition hover:border-white hover:bg-white/10">
                        <?php esc_html_e( 'View Latest Work', 'boilerplate' ); ?>
                    </a>
                </div>
            </div>

            <div class="relative flex flex-1 justify-end">
                <div id="project-info-box" class="absolute bottom-6 right-0 w-64 rounded-2xl bg-black/85 px-6 py-5 shadow-2xl backdrop-blur">
                    <p id="project-info-title" class="text-sm font-semibold uppercase tracking-[0.3em] text-white/60">
                        <?php esc_html_e( 'Featured Project', 'boilerplate' ); ?>
                    </p>
                    <h3 id="project-info-subtitle" class="mt-3 text-xl font-semibold text-white">
                        <?php esc_html_e( 'Boilerplate Studio', 'boilerplate' ); ?>
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <div class="pointer-events-none absolute inset-x-0 bottom-12 flex items-center justify-center gap-6">
        <button id="hero-prev-slide" type="button" class="pointer-events-auto inline-flex h-12 w-12 items-center justify-center rounded-full border border-white/30 text-white transition hover:border-white hover:bg-white/10" aria-label="<?php esc_attr_e( 'Previous slide', 'boilerplate' ); ?>">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                <path d="M15 18l-6-6 6-6" />
            </svg>
        </button>
        <div class="flex items-center justify-center gap-3">
            <span class="hero-indicator h-2.5 w-2.5 rounded-full bg-white"></span>
            <span class="hero-indicator h-2.5 w-2.5 rounded-full bg-white/40"></span>
            <span class="hero-indicator h-2.5 w-2.5 rounded-full bg-white/40"></span>
        </div>
        <button id="hero-next-slide" type="button" class="pointer-events-auto inline-flex h-12 w-12 items-center justify-center rounded-full border border-white/30 text-white transition hover:border-white hover:bg-white/10" aria-label="<?php esc_attr_e( 'Next slide', 'boilerplate' ); ?>">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                <path d="M9 6l6 6-6 6" />
            </svg>
        </button>
    </div>
</section>
