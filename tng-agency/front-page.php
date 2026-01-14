<?php
/**
 * Template Name: Home Page
 * Description: TNG Agency Home Page Template
 */

get_header(); ?>

<main class="main-wrapper">
    <!-- Navigation -->
    <div data-w-id="229f351e-4508-b011-4db4-97cc9369af1a" class="nav">
        <div class="padding-global menu">
            <div class="container-nav">
                <div class="padding-nav">
                    <div class="nav-flexbox">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo-wrapper w-inline-block w--current">
                            <img src="https://cdn.prod.website-files.com/6601a33a428bb6f9b3c92728/6601b21d001fcb4a4c8e271c_TNG__LOGO_LANGUIT_DARK_GREEN.png" loading="lazy" alt="<?php bloginfo('name'); ?>"/>
                        </a>
                        <div class="nav-desktop-wrapper">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'container' => false,
                                'menu_class' => 'nav-menu',
                                'fallback_cb' => false
                            ));
                            ?>
                        </div>
                        <div data-w-id="4677cb22-374d-8a85-b82d-bd2d9dcdceab" class="nav-mobile-wrapper">
                            <a href="#" class="nav-mobile-icon-wrapper w-inline-block">
                                <div class="nav-mobile-line top"></div>
                                <div class="nav-mobile-line bottom"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Loader -->
    <div class="page-loader"></div>

    <!-- Contact Section (Hidden) -->
    <div class="section_contact">
        <div class="contact_blur"></div>
        <div class="contact_page">
            <div class="contact_padding-hor">
                <div class="contact_container">
                    <div class="contact_padding-vert">
                        <h2 class="contact-header">Neem contact op</h2>
                        <p>Wil je ontdekken wat TNG Agency voor jou kan betekenen? Of wil je graag even sparren over de groei van jouw bedrijf? Neem dan gerust contact met ons op, en we zullen binnen één werkdag contact met je opnemen.</p>
                        <div class="form-block w-form">
                            <?php echo do_shortcode('[contact-form-7 id="1" title="Contact form"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-footer">
                <div class="contact_padding-hor">
                    <div class="contact_container">
                        <div class="contact-footer-flexbox">
                            <a href="mailto:<?php echo get_option('admin_email'); ?>" class="footer_link text-color-primary"><?php echo get_option('admin_email'); ?></a>
                            <div class="social_flexbox">
                                <?php
                                $social_links = array(
                                    'linkedin' => get_theme_mod('linkedin_url', '#'),
                                    'instagram' => get_theme_mod('instagram_url', '#'),
                                    'facebook' => get_theme_mod('facebook_url', '#'),
                                    'twitter' => get_theme_mod('twitter_url', '#')
                                );
                                foreach ($social_links as $platform => $url) :
                                ?>
                                <a href="<?php echo esc_url($url); ?>" target="_blank" class="footer_social-link w-inline-block">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $platform; ?>-icon.svg" loading="lazy" alt="<?php echo ucfirst($platform); ?>" class="footer_social"/>
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-w-id="1ab37c44-77e8-4395-7166-80a0ebe378cf" class="contact_close"></div>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="section_hero">
        <div class="padding-global">
            <div class="container-large">
                <div class="padding-hero">
                    <h1 style="-webkit-transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="hero-heading-2">
                        <?php echo get_theme_mod('hero_heading', 'TNG Agency. Ga voor groei met digital & performance marketing'); ?>
                    </h1>
                    <p style="-webkit-transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="hero-paragraph">
                        <?php echo get_theme_mod('hero_description', 'Haal jij het maximale uit jouw marketingstrategie? Vraag een vrijblijvende audit aan en krijg inzicht in je marketingperformance.'); ?> 
                        <a href="#" data-w-id="3470fa71-63b7-6399-b667-a9156825c6e9">Neem contact met ons op!</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero Image Section -->
    <div class="section_picture-full-width">
        <div style="-webkit-transform:translate3d(0, 5rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 5rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 5rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 5rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="image-wrapper">
            <div class="image-holder-hero home" style="background-image: url('https://images.realworks.nl/servlets/images/media.objectmedia/97793692.jpg?portalid=4286&check=api_sha256%3a1dc336a98756a7befacf02a92bdb88c9693747ccdcd43c57d59ef3097d3dd8dc&v=20210324105745&width=2160&height=1440');"></div>
            <div style="height:100%" class="image-cover-hero"></div>
        </div>
    </div>

    <!-- Over Ons Section (About Us) -->
    <div class="section_home-over-ons">
        <div class="padding-global">
            <div class="container-large">
                <div class="padding-section-large">
                    <div class="w-layout-grid grid-basic">
                        <div id="w-node-_6a563629-cbd8-061b-2581-f09f8bd74bfa-b3c9278d" class="section-title-wrapper">
                            <h2 js-line-animation="" class="heading-style-h2">Over ons</h2>
                        </div>
                        <div id="w-node-_94384921-b126-36a2-bd49-209cb385c9a5-b3c9278d" class="section-content-wrapper">
                            <div class="h2-subtitel-mobile">Over ons</div>
                            <h2 data-w-id="5206228c-a0c8-1cf4-71b1-069a5d6a46d1" class="h2-animated">
                                <?php echo get_theme_mod('about_title', 'TNG Agency: jouw partner voor resultaat'); ?>
                            </h2>
                            <p class="paragraph-animated">
                                <?php echo get_theme_mod('about_description', 'Haal het meeste uit je marketing met The Next Gen Agency. Met onze praktische aanpak weten we jouw marketing zo effectief mogelijk in te zetten. Daarbij streven we naar topresultaten tegen de laagst mogelijke kosten, zo weet je zeker dat jouw investering echt loont.'); ?>
                            </p>
                            <div class="button-wrapper">
                                <a data-w-id="405e6a18-cad5-97da-6824-16c653b85d65" href="#" class="button is-primary w-inline-block">
                                    <div class="text-flip-over-wrapper">
                                        <div class="button-text">Neem contact op</div>
                                        <div class="button-text is-primary absolute">Neem contact op</div>
                                    </div>
                                </a>
                                <a data-w-id="7e5d8c7e-2001-f1cb-5333-0861ee5b3f44" href="<?php echo esc_url(home_url('/over-ons')); ?>" class="button is-secondary w-inline-block">
                                    <div class="text-flip-over-wrapper">
                                        <div class="button-text is-secondary">Meer over ons</div>
                                        <div class="button-text is-secondary absolute">Meer over ons</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div class="section_diensten-overview">
        <div class="padding-global">
            <div class="container-large">
                <div class="padding-section-large">
                    <div class="w-layout-grid grid-basic">
                        <div id="w-node-f0c10cd4-792f-08d2-d9e5-09d2d59ad219-d59ad214" class="section-title-wrapper">
                            <h2 js-line-animation="" class="heading-style-h2">Diensten</h2>
                        </div>
                        <div id="w-node-f0c10cd4-792f-08d2-d9e5-09d2d59ad21c-d59ad214" class="section-content-wrapper">
                            <div class="h2-subtitel-mobile">Diensten</div>
                            <h2 class="h2-animated">Waar we goed in zijn</h2>
                            <p class="paragraph-animated">Bij <strong>TNG Agency</strong> bieden we een brede mix van effectieve marketingstrategieën en leggen we de basis voor het succesvol laten draaien van jouw (online) business. Of het nu gaat om krachtige social media campagnes of het optimaliseren van je vindbaarheid in zoekmachines, wij zorgen ervoor dat je opvalt waar het telt.</p>
                            
                            <div class="diensten-overview-wrapper">
                                <?php
                                // Services array
                                $services = array(
                                    array(
                                        'title' => 'Website & SEO',
                                        'description' => 'Een sterke online aanwezigheid begint met een gebruiksvriendelijke, conversiegerichte website die volledig geoptimaliseerd is voor mobiel gebruik. Dit vormt de basis die deuren opent voor de zichtbaarheid van jouw merk. <br/><br/>Wij creëren voor jou een razendsnelle en strakke website, waarbij conversieoptimalisatie altijd centraal staat. Zodra je site live is, zorgen wij er met slimme SEO-strategieën voor dat jouw klanten je gemakkelijk kunnen vinden. Zo leggen we samen de basis voor langdurig online succes.',
                                        'link' => '/diensten-website-seo'
                                    ),
                                    array(
                                        'title' => 'Data & tracking',
                                        'description' => 'Wat doen gebruikers op je website of in je app? Welke campagne zorgt voor de hoogste conversie? En hoe nauwkeurig kun je jouw Return on Ad Spend (ROAS) meten? <br/><br/>Dit zijn zo maar een aantal vragen die wij dagelijks beantwoorden. Met de juiste tracking en conversiemetingen krijg je helder antwoord op al deze vragen. Wij zorgen voor de implementatie van deze metingen en bouwen een overzichtelijk dashboard waar je de resultaten moeiteloos kunt volgen.',
                                        'link' => '/diensten-data-tracking'
                                    ),
                                    array(
                                        'title' => 'Advertising',
                                        'description' => 'Is je app of website optimaal ingericht? Is de tracking goed ingesteld en kun je alles nauwkeurig meten? Dan is het tijd om echt van start te gaan! <br/><br/>TNG Agency helpt jouw organisatie bij het effectief bereiken van je doelgroep via betaalde advertenties via verschillende tools. Als experts en partners van Google Ads, Meta, TikTok, en Pinterest zorgen wij ervoor dat je instroom leads en omzet groeien en jouw bedrijf naar een hoger niveau wordt getild.',
                                        'link' => '/diensten-advertising'
                                    ),
                                    array(
                                        'title' => 'Creative excellence',
                                        'description' => 'Pakkende content is de sleutel tot een sterke online aanwezigheid en interactie met je doelgroep. Kun je wel wat hulp gebruiken met het creëren van content voor Instagram, TikTok en Youtube? Of merk je dat betaalde advertenties niet het gewenste resultaat opleveren? Met onze uitgebreide ervaring en inzichten uit A/B-tests maken we content die echt werkt.',
                                        'link' => '/diensten-creative-excellence'
                                    ),
                                    array(
                                        'title' => 'Organic Social',
                                        'description' => 'Om op te vallen bij de juiste doelgroep, moet je inspelen op de relevantie en beleving van jouw merk. Bij TNG Agency ontwikkelen we een krachtige contentstrategie, produceren we kwalitatieve content en vergroten we tegelijkertijd de merkloyaliteit.',
                                        'link' => '/diensten-organic-social'
                                    )
                                );

                                foreach ($services as $index => $service) :
                                ?>
                                <div data-hover="false" data-delay="500" class="diensten_dropdown w-dropdown">
                                    <div class="diensten_dropdown-button w-dropdown-toggle">
                                        <div class="diensten-text-move-horizontal">
                                            <div class="text-flip-over-wrapper">
                                                <div class="diensten_dropdown-title"><?php echo $service['title']; ?></div>
                                                <div class="diensten_dropdown-title absolute"><?php echo $service['title']; ?></div>
                                            </div>
                                        </div>
                                        <div class="arrow_articles w-embed">
                                            <svg height="100%" viewBox="0 0 29 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.9411 0C15.8616 0 16.7822 -2.35114e-08 17.7027 0.0242742C17.5847 5.00049 21.196 9.7097 25.8932 10.8263C26.7665 11.1176 27.7106 11.0691 28.6312 11.1662C28.6312 12.1128 28.6312 13.0595 28.6312 13.982C26.8609 14.0791 25.067 14.3461 23.5092 15.2685C20.0159 17.1619 17.6791 21.07 17.6791 25.1481C16.7586 25.1481 15.838 25.1481 14.9411 25.1481C14.9175 20.803 16.9946 16.5308 20.4171 13.9577C13.6193 13.982 6.79784 13.9577 0 13.9577C0.0236036 13.0353 0.0236036 12.0886 0 11.1419C6.77424 11.2147 13.5721 11.1662 20.3699 11.1904C17.986 9.24849 16.0741 6.60259 15.3659 3.54404C15.0827 2.40315 14.9647 1.18944 14.9411 0Z" fill="currentcolor"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <nav class="diensten_dropdown-content w-dropdown-list">
                                        <p class="paragraph-dropdown"><?php echo $service['description']; ?></p>
                                        <div class="button-wrapper bottom-marging">
                                            <a href="<?php echo esc_url(home_url($service['link'])); ?>" class="button is-primary w-inline-block">
                                                <div class="text-flip-over-wrapper">
                                                    <div class="button-text is-primary">Meer lezen</div>
                                                    <div class="button-text is-primary absolute">Meer lezen</div>
                                                </div>
                                            </a>
                                            <a data-w-id="92225642-ed73-a390-03f2-3dd1436f7919" href="#" class="button is-secondary w-inline-block">
                                                <div class="text-flip-over-wrapper">
                                                    <div class="button-text is-secondary">Neem contact op</div>
                                                    <div class="button-text is-secondary absolute">Neem contact op</div>
                                                </div>
                                            </a>
                                        </div>
                                    </nav>
                                </div>
                                <div class="grey-line-2"><div class="black-line"></div></div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Clients Section -->
    <div class="section_klanten">
        <div class="padding-global">
            <div class="container-large">
                <div class="w-layout-grid grid-basic">
                    <div id="w-node-a8f45258-5757-91d5-4071-d15c556dbd0e-f6c6c92c" class="padding-section-large">
                        <div class="section-title-wrapper">
                            <h2 js-line-animation="" class="heading-style-h2 text-color-secondary">onze<br/>klanten</h2>
                        </div>
                    </div>
                    <div id="w-node-_868ac11c-646c-3849-22e3-302cf6c6c934-f6c6c92c" class="section-content-wrapper">
                        <div class="home-logos_card">
                            <div id="w-node-_2635e7e6-3147-0d9b-452d-ee34ec261af5-f6c6c92c" class="home-logos_layout">
                                <div class="home-logos_content">
                                    <div class="grid-child">
                                        <div class="padding-section-large">
                                            <div class="section-content-wrapper">
                                                <div class="h2-subtitel-mobile text-color-alternate">Onze klanten</div>
                                                <h2 class="text-color-secondary">Wij werken voor</h2>
                                                <p class="paragraph text-color-alternate">Een blik op onze succesvolle samenwerkingen.</p>
                                                <div class="button-wrapper">
                                                    <a href="<?php echo esc_url(home_url('/onze-klanten')); ?>" class="button w-inline-block">
                                                        <div class="text-flip-over-wrapper">
                                                            <div class="button-text is-secondary">Bekijk alle klanten</div>
                                                            <div class="button-text is-secondary absolute">Bekijk alle klanten</div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="w-node-_2635e7e6-3147-0d9b-452d-ee34ec261aff-f6c6c92c" class="home-logos_right">
                                    <div class="home-logos_right-height"></div>
                                    <div id="w-node-_2635e7e6-3147-0d9b-452d-ee34ec261b01-f6c6c92c" class="home-logos_flex">
                                        <!-- Client logos will be added via WordPress customizer -->
                                        <?php
                                        $clients = get_theme_mod('client_logos', array());
                                        if (!empty($clients)) :
                                        ?>
                                        <div tr-marquee-scrollscrub="true" tr-marquee-element="component" tr-marquee-vertical="true" class="marquee-logos_component">
                                            <div tr-marquee-element="triggerhover" class="marquee-logos_wrapper">
                                                <div tr-marquee-element="panel" class="marquee-logos_panel">
                                                    <?php foreach ($clients as $client) : ?>
                                                    <div class="marquee-logos_item">
                                                        <img alt="<?php echo esc_attr($client['name']); ?>" src="<?php echo esc_url($client['logo']); ?>" class="marquee-logos_image"/>
                                                        <div class="marquee-logos_item-height"></div>
                                                    </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why TNG Section -->
    <div class="section_waarom-tng">
        <div class="padding-global">
            <div class="container-large">
                <div class="padding-section-large">
                    <div class="w-layout-grid grid-basic two-rows">
                        <div id="w-node-_165b9b73-40c9-5975-ea3c-3af5ff79a7b1-b3c9278d" class="section-title-wrapper">
                            <h2 js-line-animation="" class="heading-style-h2">waarom <br/>tng</h2>
                        </div>
                        <div id="w-node-_85b4c21f-5d53-f997-c4ee-49685fde92fb-b3c9278d" class="image-wrapper _90">
                            <div class="waarom-tng_img right-aligned"></div>
                            <div class="img-cover-body background-color-alternate"></div>
                        </div>
                        <div id="w-node-_3f84e39d-4f34-219a-0cd6-9d33b4bcf86e-b3c9278d" class="image-wrapper _90">
                            <div class="waarom-tng_img left-aligned"></div>
                            <div class="img-cover-body background-color-alternate"></div>
                        </div>
                        <div id="w-node-d1aa11a7-85ce-c174-0f74-ba73dc749a66-b3c9278d" class="waarom-tng_text-wrapper">
                            <div class="h2-subtitel-mobile">waarom tng</div>
                            <h2 class="h2-animated">Jouw pad naar succes</h2>
                            <p class="paragraph-animated">In een wereld vol met verschillende kanalen, razendsnelle veranderingen en ontwikkelende marketingtechnieken, kan het moeilijk zijn om een strategie te vinden die werkt voor jouw merk. Maak je geen zorgen, TNG Agency is er om je te helpen! Met onze praktische aanpak, onderbouwd door data, gaan we aan de slag om jouw doelen te behalen.</p>
                        </div>
                        <div id="w-node-a87d7561-89a3-b98f-f4a0-f1ca9ab04fc3-b3c9278d">
                            <h2 class="h2-animated">Ga voor groei</h2>
                            <p class="paragraph-animated">Ben je klaar om jouw marketing naar een hoger niveau te tillen? Neem vandaag nog contact met ons op en ontdek wat onze enthousiaste experts en slimme strategieën voor je bedrijf kunnen betekenen.</p>
                            <div class="button-wrapper">
                                <a data-w-id="b23b9473-a8f9-301f-f36e-1f1a0faa5385" href="#" class="button is-primary w-inline-block">
                                    <div class="text-flip-over-wrapper">
                                        <div class="button-text is-primary">Neem contact op</div>
                                        <div class="button-text is-primary absolute">Neem contact op</div>
                                    </div>
                                </a>
                                <a href="<?php echo esc_url(home_url('/over-ons')); ?>" class="button is-secondary w-inline-block">
                                    <div class="text-flip-over-wrapper">
                                        <div class="button-text is-secondary">Meer over ons</div>
                                        <div class="button-text is-secondary absolute">Meer over ons</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Technology/Partners Section -->
    <div class="section_technologie">
        <div class="padding-global">
            <div class="container-large">
                <div class="w-layout-grid grid-basic">
                    <div id="w-node-d767ee73-54ff-9928-1503-8bd2b5ff2e86-b3c9278d" class="padding-section-large">
                        <div id="w-node-ab153e59-2f42-5772-1091-a81f3678d319-b3c9278d" class="section-title-wrapper">
                            <h2 js-line-animation="" class="heading-style-h2 text-color-secondary">Partners <br/>& Tools</h2>
                        </div>
                    </div>
                    <div id="w-node-_262a1237-a16c-c36f-5840-3f1c75303917-b3c9278d" class="section-content-wrapper">
                        <div class="home-logos_card">
                            <div class="home-logos_layout">
                                <div class="home-logos_content">
                                    <div class="grid-child">
                                        <div class="padding-section-large">
                                            <div class="section-content-wrapper">
                                                <div class="h2-subtitel-mobile text-color-alternate">Partners & Tools</div>
                                                <h2 class="text-color-secondary">Partners en tools</h2>
                                                <p class="paragraph text-color-alternate">Wij kennen de weg als het gaat om marketingtools.</p>
                                                <div class="button-wrapper">
                                                    <a href="<?php echo esc_url(home_url('/partners-en-tools')); ?>" class="button w-inline-block">
                                                        <div class="text-flip-over-wrapper">
                                                            <div class="button-text is-secondary">Zie meer</div>
                                                            <div class="button-text is-secondary absolute">Zie meer</div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Insights/Blog Section -->
    <div class="section_home-insights">
        <div class="padding-global">
            <div class="container-large">
                <div class="padding-section-large">
                    <div class="w-layout-grid grid-basic">
                        <div id="w-node-_40e4bff4-0713-cf46-bda3-357132a67be1-b3c9278d" class="section-title-wrapper">
                            <h2 js-line-animation="" class="heading-style-h2">insights</h2>
                        </div>
                        <div id="w-node-_40e4bff4-0713-cf46-bda3-357132a67be4-b3c9278d" class="section-content-wrapper">
                            <div class="h2-subtitel-mobile">insights</div>
                            <h2 class="h2-animated">Insights</h2>
                            <div class="insights_cms_wrapper">
                                <div class="grey-line-2"><div class="black-line"></div></div>
                                <div class="home-insights_coll">
                                    <?php
                                    $insights = new WP_Query(array(
                                        'post_type' => 'post',
                                        'posts_per_page' => 3,
                                        'orderby' => 'date',
                                        'order' => 'DESC'
                                    ));

                                    if ($insights->have_posts()) :
                                        while ($insights->have_posts()) : $insights->the_post();
                                    ?>
                                    <div class="home-insights_item">
                                        <a href="<?php the_permalink(); ?>" class="insights_grid w-inline-block">
                                            <div class="insights_img-wrapper">
                                                <?php if (has_post_thumbnail()) : ?>
                                                <div style="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>')" class="insights_img"></div>
                                                <?php endif; ?>
                                                <div style="width:100%;height:100%" class="img-cover-body"></div>
                                            </div>
                                            <div class="insights_top-text-wrapper">
                                                <div class="insights_top-text"><?php echo get_the_date('n/j/Y'); ?></div>
                                                <div class="insights_top-text">•</div>
                                                <div class="insights_top-text"><?php the_category(', '); ?></div>
                                            </div>
                                            <div class="insights_text-bottom">
                                                <h3 class="insights_title"><?php the_title(); ?></h3>
                                            </div>
                                            <div class="insights_arrow-wrapper">
                                                <div class="arrow_articles w-embed">
                                                    <svg height="100%" viewBox="0 0 29 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14.9411 0C15.8616 0 16.7822 -2.35114e-08 17.7027 0.0242742C17.5847 5.00049 21.196 9.7097 25.8932 10.8263C26.7665 11.1176 27.7106 11.0691 28.6312 11.1662C28.6312 12.1128 28.6312 13.0595 28.6312 13.982C26.8609 14.0791 25.067 14.3461 23.5092 15.2685C20.0159 17.1619 17.6791 21.07 17.6791 25.1481C16.7586 25.1481 15.838 25.1481 14.9411 25.1481C14.9175 20.803 16.9946 16.5308 20.4171 13.9577C13.6193 13.982 6.79784 13.9577 0 13.9577C0.0236036 13.0353 0.0236036 12.0886 0 11.1419C6.77424 11.2147 13.5721 11.1662 20.3699 11.1904C17.986 9.24849 16.0741 6.60259 15.3659 3.54404C15.0827 2.40315 14.9647 1.18944 14.9411 0Z" fill="currentcolor"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="grey-line-2 _2rem"><div class="black-line"></div></div>
                                    </div>
                                    <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    endif;
                                    ?>
                                </div>
                                <div class="button-wrapper">
                                    <a href="<?php echo esc_url(home_url('/insights')); ?>" class="button is-primary w-inline-block">
                                        <div class="text-flip-over-wrapper">
                                            <div class="button-text is-primary">Meer insights</div>
                                            <div class="button-text is-primary absolute">Meer insights</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="padding-global">
            <div class="container-large">
                <div class="padding-section-footer">
                    <div class="w-layout-grid grid-footer">
                        <div class="footer_title-wrapper">
                            <h2 class="text-color-secondary footer-title">Stuur ons een<br/>bericht</h2>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/circle-logo.png" loading="lazy" alt="" class="image-3"/>
                        </div>
                        <div class="footer_cta">
                            <p class="text-color-secondary footer-cta paragraph-2 paragraph-3">Benieuwd hoe je huidige marketing het doet, of weten wat TNG Agency kan betekenen voor jouw bedrijf? We gaan graag in gesprek!</p>
                            <div class="button-wrapper no-margin">
                                <a data-w-id="f4cc9390-a784-1c71-21d4-adc03d7e9fbe" href="#" class="button is-primary w-inline-block">
                                    <div class="text-flip-over-wrapper">
                                        <div class="button-text is-primary">Neem contact op</div>
                                        <div class="button-text is-primary absolute">Neem contact op</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <?php
                        // Footer navigation columns
                        $footer_menus = array(
                            array('title' => 'SITEMAP', 'menu' => 'footer-sitemap'),
                            array('title' => 'Partners', 'menu' => 'footer-partners'),
                            array('title' => 'contact', 'menu' => 'footer-contact')
                        );

                        foreach ($footer_menus as $menu_data) :
                        ?>
                        <div class="footer_link-column">
                            <h4 class="footer_header"><?php echo $menu_data['title']; ?></h4>
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => $menu_data['menu'],
                                'container' => false,
                                'items_wrap' => '%3$s',
                                'fallback_cb' => false
                            ));
                            ?>
                        </div>
                        <?php endforeach; ?>

                        <div class="footer_link-column">
                            <h4 class="footer_header">LEGAL</h4>
                            <div class="footer_link no-hover"><?php echo get_theme_mod('company_vat', 'BTW: NL864879520B01'); ?></div>
                            <div class="footer_link no-hover"><?php echo get_theme_mod('company_kvk', 'KVK: 89101502'); ?></div>
                        </div>

                        <div class="footer_link-column">
                            <h4 class="footer_header">socials</h4>
                            <div class="social_flexbox">
                                <?php
                                $social_links = array(
                                    'linkedin' => array('url' => get_theme_mod('linkedin_url', '#'), 'icon' => 'linkedin'),
                                    'instagram' => array('url' => get_theme_mod('instagram_url', '#'), 'icon' => 'instagram'),
                                    'facebook' => array('url' => get_theme_mod('facebook_url', '#'), 'icon' => 'facebook'),
                                    'twitter' => array('url' => get_theme_mod('twitter_url', '#'), 'icon' => 'twitter')
                                );
                                
                                foreach ($social_links as $platform => $data) :
                                ?>
                                <a href="<?php echo esc_url($data['url']); ?>" target="_blank" class="footer_social-link w-inline-block">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $data['icon']; ?>-footer.svg" loading="lazy" alt="<?php echo ucfirst($platform); ?>" class="footer_social"/>
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="padding-global">
                <div class="container-large">
                    <div class="footer-bottom-flexbox">
                        <div class="footer-bottom-text">© <?php echo bloginfo('name'); ?> <?php echo date('Y'); ?></div>
                        <div class="cookie-privacy-flexbox">
                            <a href="<?php echo esc_url(home_url('/vacatures')); ?>" class="footer_link">Vacatures</a>
                            <a href="<?php echo esc_url(home_url('/algemen-voorwaarden')); ?>" class="footer_link">Algemene voorwaarden</a>
                            <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>" class="footer_link">Privacy policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>