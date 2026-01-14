<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:title" content="<?php wp_title(''); ?> <?php bloginfo('name'); ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:image" content="https://cdn.prod.website-files.com/6601a33a428bb6f9b3c92728/6618214cfc8f95f202a8ab62_URL-min.jpeg" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic", "Inter:regular,500,600,700,800"]
            }
        });
    </script>
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);
    </script>
    
    <link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" rel="shortcut icon" type="image/x-icon" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/images/webclip.png" rel="apple-touch-icon" />
    
    <style>
        .split-text {
            overflow: hidden !important;
        }
        .line-animation {
            overflow: hidden !important;
        }
        [js-line-animation] {
            visibility: hidden;
        }
        .w--editor [js-line-animation] {
            visibility: visible;
        }
        [js-line-animation] .line {
            overflow: hidden;
        }
    </style>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PNB78VM');
    </script>
    <!-- End Google Tag Manager -->
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PNB78VM" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <div class="page-wrapper">
        <div class="global-styles w-embed">
            <style>
                /* Make text look crisper and more legible in all browsers */
                body {
                    -webkit-font-smoothing: antialiased;
                    -moz-osx-font-smoothing: grayscale;
                    font-smoothing: antialiased;
                    text-rendering: optimizeLegibility;
                }

                /* Focus state style for keyboard navigation for the focusable elements */
                *[tabindex]:focus-visible,
                input[type="file"]:focus-visible {
                    outline: 0.125rem solid #4d65ff;
                    outline-offset: 0.125rem;
                }

                /* Set color style to inherit */
                .inherit-color * {
                    color: inherit;
                }

                /* Get rid of top margin on first element in any rich text element */
                .w-richtext> :not(div):first-child,
                .w-richtext>div:first-child> :first-child {
                    margin-top: 0 !important;
                }

                /* Get rid of bottom margin on last element in any rich text element */
                .w-richtext>:last-child,
                .w-richtext ol li:last-child,
                .w-richtext ul li:last-child {
                    margin-bottom: 0 !important;
                }

                /* Make sure containers never lose their center alignment */
                .container-medium,
                .container-small,
                .container-large {
                    margin-right: auto !important;
                    margin-left: auto !important;
                }

                /* Apply "..." after 3 lines of text */
                .text-style-3lines {
                    display: -webkit-box;
                    overflow: hidden;
                    -webkit-line-clamp: 3;
                    -webkit-box-orient: vertical;
                }

                /* Apply "..." after 2 lines of text */
                .text-style-2lines {
                    display: -webkit-box;
                    overflow: hidden;
                    -webkit-line-clamp: 2;
                    -webkit-box-orient: vertical;
                }

                /* Adds inline flex display */
                .display-inlineflex {
                    display: inline-flex;
                }

                /* These classes are never overwritten */
                .hide {
                    display: none !important;
                }

                @media screen and (max-width: 991px) {
                    .hide,
                    .hide-tablet {
                        display: none !important;
                    }
                }

                @media screen and (max-width: 767px) {
                    .hide-mobile-landscape {
                        display: none !important;
                    }
                }

                @media screen and (max-width: 479px) {
                    .hide-mobile {
                        display: none !important;
                    }
                }

                .margin-0 {
                    margin: 0rem !important;
                }

                .padding-0 {
                    padding: 0rem !important;
                }

                .spacing-clean {
                    padding: 0rem !important;
                    margin: 0rem !important;
                }

                .margin-top {
                    margin-right: 0rem !important;
                    margin-bottom: 0rem !important;
                    margin-left: 0rem !important;
                }

                .padding-top {
                    padding-right: 0rem !important;
                    padding-bottom: 0rem !important;
                    padding-left: 0rem !important;
                }

                .margin-right {
                    margin-top: 0rem !important;
                    margin-bottom: 0rem !important;
                    margin-left: 0rem !important;
                }

                .padding-right {
                    padding-top: 0rem !important;
                    padding-bottom: 0rem !important;
                    padding-left: 0rem !important;
                }

                .margin-bottom {
                    margin-top: 0rem !important;
                    margin-right: 0rem !important;
                    margin-left: 0rem !important;
                }

                .padding-bottom {
                    padding-top: 0rem !important;
                    padding-right: 0rem !important;
                    padding-left: 0rem !important;
                }

                .margin-left {
                    margin-top: 0rem !important;
                    margin-right: 0rem !important;
                    margin-bottom: 0rem !important;
                }

                .padding-left {
                    padding-top: 0rem !important;
                    padding-right: 0rem !important;
                    padding-bottom: 0rem !important;
                }

                .margin-horizontal {
                    margin-top: 0rem !important;
                    margin-bottom: 0rem !important;
                }

                .padding-horizontal {
                    padding-top: 0rem !important;
                    padding-bottom: 0rem !important;
                }

                .margin-vertical {
                    margin-right: 0rem !important;
                    margin-left: 0rem !important;
                }

                .padding-vertical {
                    padding-right: 0rem !important;
                    padding-left: 0rem !important;
                }
            </style>
        </div>
        <div class="w-embed">
            <style>
                @keyframes scroll {
                    from {
                        transform: translateX(0);
                    }
                    to {
                        transform: translateX(-100%);
                    }
                }

                .scroll {
                    animation: scroll 10s linear infinite;
                }

                .reverse {
                    animation-direction: reverse;
                }

                .marquee-image {
                    -webkit-transform: translateZ(0);
                }
            </style>
        </div>
        
        <main class="main-wrapper">
            <!-- Navigation -->
            <div data-w-id="229f351e-4508-b011-4db4-97cc9369af1a" class="nav">
                <div class="padding-global menu">
                    <div class="container-nav">
                        <div class="padding-nav">
                            <div class="nav-flexbox">
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo-wrapper w-inline-block <?php if(is_front_page()) echo 'w--current'; ?>">
                                    <img src="https://cdn.prod.website-files.com/6601a33a428bb6f9b3c92728/6601b21d001fcb4a4c8e271c_TNG__LOGO_LANGUIT_DARK_GREEN.png" loading="lazy" alt="<?php bloginfo('name'); ?>"/>
                                </a>
                                <div class="nav-desktop-wrapper">
                                    <div class="nav-item">
                                        <div class="nav-item-move">
                                            <div class="green-dot"></div>
                                            <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-link <?php if(is_front_page()) echo 'w--current'; ?>">Home</a>
                                        </div>
                                    </div>
                                    <div class="nav-item">
                                        <div data-w-id="7115ec69-0715-425f-bda3-a1caee34ec94" class="nav-item-move">
                                            <div class="green-dot"></div>
                                            <a href="<?php echo esc_url(home_url('/over-ons')); ?>" class="nav-link">Over ons</a>
                                        </div>
                                    </div>
                                    <div class="nav-item hide">
                                        <div class="nav-item-move">
                                            <div class="green-dot"></div>
                                            <a href="<?php echo esc_url(home_url('/cases')); ?>" class="nav-link">Cases</a>
                                        </div>
                                    </div>
                                    <div data-hover="true" data-delay="0" class="nav-link w-dropdown">
                                        <div class="dropdown-toggle w-dropdown-toggle">
                                            <div class="nav-item">
                                                <div class="nav-item-move">
                                                    <div class="green-dot"></div>
                                                    <a href="<?php echo esc_url(home_url('/diensten')); ?>" class="nav-link">Diensten</a>
                                                </div>
                                            </div>
                                        </div>
                                        <nav class="dropdown-list w-dropdown-list">
                                            <div class="nav-item">
                                                <div class="nav-item-move">
                                                    <div class="green-dot"></div>
                                                    <a href="<?php echo esc_url(home_url('/diensten-website-seo')); ?>" class="nav-link dropdown w-dropdown-link">Website &amp; Seo</a>
                                                </div>
                                            </div>
                                            <div class="nav-item">
                                                <div class="nav-item-move">
                                                    <div class="green-dot"></div>
                                                    <a href="<?php echo esc_url(home_url('/diensten-data-tracking')); ?>" class="nav-link dropdown w-dropdown-link">Data &amp; Tracking</a>
                                                </div>
                                            </div>
                                            <div class="nav-item">
                                                <div class="nav-item-move">
                                                    <div class="green-dot"></div>
                                                    <a href="<?php echo esc_url(home_url('/diensten-advertising')); ?>" class="nav-link dropdown w-dropdown-link">Advertising</a>
                                                </div>
                                            </div>
                                            <div class="nav-item">
                                                <div class="nav-item-move">
                                                    <div class="green-dot"></div>
                                                    <a href="<?php echo esc_url(home_url('/diensten-creative-excellence')); ?>" class="nav-link dropdown w-dropdown-link">Creative excellence</a>
                                                </div>
                                            </div>
                                            <div class="nav-item">
                                                <div class="nav-item-move">
                                                    <div class="green-dot"></div>
                                                    <a href="<?php echo esc_url(home_url('/diensten-organic-social')); ?>" class="nav-link dropdown w-dropdown-link">Organic Social</a>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                    <div class="nav-item">
                                        <div class="nav-item-move">
                                            <div class="green-dot"></div>
                                            <a href="<?php echo esc_url(home_url('/insights')); ?>" class="nav-link">insights</a>
                                        </div>
                                    </div>
                                    <div class="nav-item">
                                        <div class="nav-item-move">
                                            <div class="green-dot"></div>
                                            <a href="#" data-w-id="229f351e-4508-b011-4db4-97cc9369af2a" class="nav-link">contact</a>
                                        </div>
                                    </div>
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
            
            <!-- Mobile Navigation -->
            <div class="nav-mobile-parent">
                <div class="nav-mobile-column">
                    <h3 class="nav-mobile-header">Menu</h3>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-mobile-link <?php if(is_front_page()) echo 'w--current'; ?>">Home</a>
                    <a href="<?php echo esc_url(home_url('/over-ons')); ?>" class="nav-mobile-link">Over ons</a>
                    <a href="<?php echo esc_url(home_url('/cases')); ?>" class="nav-mobile-link hide">Cases</a>
                    <a href="<?php echo esc_url(home_url('/diensten')); ?>" class="nav-mobile-link">Diensten</a>
                    <a href="<?php echo esc_url(home_url('/insights')); ?>" class="nav-mobile-link">Insights</a>
                    <a data-w-id="334516b1-beea-d61d-33f9-620a996289e2" href="#" class="nav-mobile-link">Contact</a>
                </div>
                <div class="nav-mobile-column">
                    <h3 class="nav-mobile-header">Diensten</h3>
                    <a href="<?php echo esc_url(home_url('/diensten-advertising')); ?>" class="nav-mobile-link">Advertising</a>
                    <a href="<?php echo esc_url(home_url('/diensten-data-tracking')); ?>" class="nav-mobile-link">Data &amp; tracking</a>
                    <a href="<?php echo esc_url(home_url('/diensten-website-seo')); ?>" class="nav-mobile-link">Website &amp; SEO</a>
                    <a href="<?php echo esc_url(home_url('/diensten-creative-excellence')); ?>" class="nav-mobile-link">Creative Excellence</a>
                    <a href="<?php echo esc_url(home_url('/diensten-organic-social')); ?>" class="nav-mobile-link">Organic Social</a>
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
                                    <form id="email-form" name="email-form" data-name="Email Form" method="post" class="form" action="<?php echo admin_url('admin-post.php'); ?>">
                                        <input type="hidden" name="action" value="tng_contact_form">
                                        <?php wp_nonce_field('tng_contact_form_nonce', 'contact_nonce'); ?>
                                        <label for="Naam" class="field-label">Naam</label>
                                        <input class="form-text-field w-input" maxlength="256" name="naam" placeholder="" type="text" id="Naam" required />
                                        <label for="Email-4" class="field-label">E-mailadres</label>
                                        <input class="form-text-field w-input" maxlength="256" name="email" placeholder="" type="email" id="Email-4" required />
                                        <label for="Telefoonnummer" class="field-label">Telefoonnummer</label>
                                        <input class="form-text-field w-input" maxlength="256" name="telefoonnummer" placeholder="" type="tel" id="Telefoonnummer" required />
                                        <label for="Bericht" class="field-label">Bericht</label>
                                        <textarea placeholder="" maxlength="5000" id="Bericht" name="bericht" class="form-text-field w-input"></textarea>
                                        <input type="submit" class="submit-button w-button" value="Verstuur bericht" />
                                    </form>
                                    <div class="success-message w-form-done">
                                        <div class="text-block-2">Bedankt! We nemen z.s.m. contact met je op!</div>
                                    </div>
                                    <div class="error-message w-form-fail">
                                        <div class="text-block-2">Oeps, er ging iets verkeerd.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-footer">
                        <div class="contact_padding-hor">
                            <div class="contact_container">
                                <div class="contact-footer-flexbox">
                                    <a href="mailto:info@tng.agency" class="footer_link text-color-primary">info@tng.agency</a>
                                    <div class="social_flexbox">
                                        <a href="https://www.linkedin.com/company/tng-agency/" target="_blank" class="footer_social-link w-inline-block">
                                            <img src="https://cdn.prod.website-files.com/6601a33a428bb6f9b3c92728/661826deb52c53a2bc63c1ca_Vector.svg" loading="lazy" alt="LinkedIn" class="footer_social"/>
                                        </a>
                                        <a href="https://www.instagram.com/tng_agency/" target="_blank" class="footer_social-link w-inline-block">
                                            <img src="https://cdn.prod.website-files.com/6601a33a428bb6f9b3c92728/661826de7b21d8d987facd5c_Vector-1.svg" loading="lazy" alt="Instagram" class="footer_social" />
                                        </a>
                                        <a href="https://www.facebook.com/TNGAgencyNL" target="_blank" class="footer_social-link w-inline-block">
                                            <img src="https://cdn.prod.website-files.com/6601a33a428bb6f9b3c92728/661826de9cbebcf73a577b12_Vector-3.svg" loading="lazy" alt="Facebook" class="footer_social"/>
                                        </a>
                                        <a href="https://twitter.com/tng_agency" target="_blank" class="footer_social-link w-inline-block">
                                            <img src="https://cdn.prod.website-files.com/6601a33a428bb6f9b3c92728/661826de364ff27f21f005da_Vector-2.svg" loading="lazy" alt="Twitter" class="footer_social"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-w-id="1ab37c44-77e8-4395-7166-80a0ebe378cf" class="contact_close"></div>
                </div>
            </div>
