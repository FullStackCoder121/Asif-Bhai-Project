<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/webclip.png"/>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    
    <?php wp_head(); ?>
    
    <style>
        .split-text{
            overflow: hidden !important;
        }
        .line-animation{
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
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','<?php echo get_theme_mod('gtm_id', 'GTM-XXXXXXX'); ?>');</script>
    <!-- End Google Tag Manager -->
</head>
<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo get_theme_mod('gtm_id', 'GTM-XXXXXXX'); ?>"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <div class="page-wrapper">
        <div class="global-styles w-embed"><style>

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
        .w-richtext > :not(div):first-child, .w-richtext > div:first-child > :first-child {
            margin-top: 0 !important;
        }

        /* Get rid of bottom margin on last element in any rich text element */
        .w-richtext>:last-child, .w-richtext ol li:last-child, .w-richtext ul li:last-child {
            margin-bottom: 0 !important;
        }

        /* Make sure containers never lose their center alignment */
        .container-medium,.container-small, .container-large {
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
            .hide, .hide-tablet {
                display: none !important;
            }
        }
        @media screen and (max-width: 767px) {
            .hide-mobile-landscape{
                display: none !important;
            }
        }
        @media screen and (max-width: 479px) {
            .hide-mobile{
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

        </style></div>
        <div class="w-embed"><style>

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
        </style></div>
