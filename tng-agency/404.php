<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php get_header(); ?>

<main class="main-wrapper">
    <!-- Hero Section -->
    <div class="section_hero">
        <div class="padding-global">
            <div class="container-large">
                <div class="padding-hero" style="text-align: center; min-height: 60vh; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                    <h1 class="hero-heading-2" style="font-size: 10rem; margin: 0;">404</h1>
                    <h2 style="font-size: 2.5rem; margin: 2rem 0 1rem;">Pagina niet gevonden</h2>
                    <p class="hero-paragraph" style="max-width: 600px; margin: 0 auto 2rem;">
                        Sorry, de pagina die je zoekt bestaat niet of is verplaatst. Ga terug naar de homepage of gebruik de navigatie om verder te gaan.
                    </p>
                    <div class="button-wrapper" style="justify-content: center;">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="button is-primary w-inline-block">
                            <div class="text-flip-over-wrapper">
                                <div class="button-text is-primary">Terug naar Home</div>
                                <div class="button-text is-primary absolute">Terug naar Home</div>
                            </div>
                        </a>
                        <a href="<?php echo esc_url(home_url('/diensten')); ?>" class="button is-secondary w-inline-block">
                            <div class="text-flip-over-wrapper">
                                <div class="button-text is-secondary">Bekijk Diensten</div>
                                <div class="button-text is-secondary absolute">Bekijk Diensten</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Popular Content Section -->
    <div class="section_home-insights">
        <div class="padding-global">
            <div class="container-large">
                <div class="padding-section-large">
                    <div class="w-layout-grid grid-basic">
                        <div class="section-title-wrapper">
                            <h2 js-line-animation="" class="heading-style-h2">Populaire<br/>Pagina's</h2>
                        </div>
                        <div class="section-content-wrapper">
                            <div class="h2-subtitel-mobile">Populaire Pagina's</div>
                            <h2 class="h2-animated">Misschien zoek je dit?</h2>
                            
                            <div style="margin-top: 2rem;">
                                <div class="grey-line-2"><div class="black-line"></div></div>
                                
                                <?php
                                $popular_pages = array(
                                    array('title' => 'Over Ons', 'url' => '/over-ons', 'desc' => 'Leer meer over TNG Agency en ons team'),
                                    array('title' => 'Diensten', 'url' => '/diensten', 'desc' => 'Ontdek onze marketing diensten'),
                                    array('title' => 'Insights', 'url' => '/insights', 'desc' => 'Lees onze laatste blog artikelen'),
                                    array('title' => 'Contact', 'url' => '#', 'desc' => 'Neem contact met ons op', 'contact' => true)
                                );

                                foreach ($popular_pages as $page) :
                                ?>
                                <div style="padding: 2rem 0; border-bottom: 1px solid #e0e0e0;">
                                    <?php if (isset($page['contact']) && $page['contact']) : ?>
                                    <a href="#" data-w-id="page-link" onclick="jQuery('.section_contact').addClass('active'); return false;" style="display: flex; justify-content: space-between; align-items: center; text-decoration: none; color: inherit;">
                                    <?php else : ?>
                                    <a href="<?php echo esc_url(home_url($page['url'])); ?>" style="display: flex; justify-content: space-between; align-items: center; text-decoration: none; color: inherit;">
                                    <?php endif; ?>
                                        <div>
                                            <h3 style="font-size: 1.5rem; margin-bottom: 0.5rem;"><?php echo $page['title']; ?></h3>
                                            <p style="color: #666; margin: 0;"><?php echo $page['desc']; ?></p>
                                        </div>
                                        <div class="arrow_articles w-embed">
                                            <svg height="30px" viewBox="0 0 29 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.9411 0C15.8616 0 16.7822 -2.35114e-08 17.7027 0.0242742C17.5847 5.00049 21.196 9.7097 25.8932 10.8263C26.7665 11.1176 27.7106 11.0691 28.6312 11.1662C28.6312 12.1128 28.6312 13.0595 28.6312 13.982C26.8609 14.0791 25.067 14.3461 23.5092 15.2685C20.0159 17.1619 17.6791 21.07 17.6791 25.1481C16.7586 25.1481 15.838 25.1481 14.9411 25.1481C14.9175 20.803 16.9946 16.5308 20.4171 13.9577C13.6193 13.982 6.79784 13.9577 0 13.9577C0.0236036 13.0353 0.0236036 12.0886 0 11.1419C6.77424 11.2147 13.5721 11.1662 20.3699 11.1904C17.986 9.24849 16.0741 6.60259 15.3659 3.54404C15.0827 2.40315 14.9647 1.18944 14.9411 0Z" fill="currentcolor"/>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>

</body>
</html>
