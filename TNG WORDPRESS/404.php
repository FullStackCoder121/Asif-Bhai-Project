<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>

<div class="section_hero">
    <div class="padding-global">
        <div class="container-large">
            <div class="padding-hero">
                <h1 class="hero-heading-2">404 - Pagina niet gevonden</h1>
                <p class="hero-paragraph">De pagina die je zoekt bestaat niet of is verplaatst.</p>
            </div>
        </div>
    </div>
</div>

<div class="section_home-over-ons">
    <div class="padding-global">
        <div class="container-large">
            <div class="padding-section-large">
                <div class="w-layout-grid grid-basic">
                    <div class="section-content-wrapper">
                        <h2 class="h2-animated">Wat nu?</h2>
                        <p class="paragraph-animated">Misschien vind je wat je zoekt via één van onderstaande links:</p>
                        <div class="button-wrapper">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="button is-primary w-inline-block">
                                <div class="text-flip-over-wrapper">
                                    <div class="button-text is-primary">Ga naar home</div>
                                    <div class="button-text is-primary absolute">Ga naar home</div>
                                </div>
                            </a>
                            <a href="<?php echo esc_url(home_url('/diensten')); ?>" class="button is-secondary w-inline-block">
                                <div class="text-flip-over-wrapper">
                                    <div class="button-text is-secondary">Bekijk diensten</div>
                                    <div class="button-text is-secondary absolute">Bekijk diensten</div>
                                </div>
                            </a>
                            <a href="#" class="button is-secondary w-inline-block">
                                <div class="text-flip-over-wrapper">
                                    <div class="button-text is-secondary">Neem contact op</div>
                                    <div class="button-text is-secondary absolute">Neem contact op</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
