<?php
/**
 * TNG Agency Theme Functions
 */

// Theme Setup
function tng_agency_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('automatic-feed-links');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'tng-agency'),
        'footer-sitemap' => __('Footer Sitemap', 'tng-agency'),
        'footer-partners' => __('Footer Partners', 'tng-agency'),
        'footer-contact' => __('Footer Contact', 'tng-agency'),
    ));

    // Add image sizes
    add_image_size('hero-large', 1920, 1080, true);
    add_image_size('blog-thumbnail', 800, 600, true);
    add_image_size('client-logo', 400, 300, true);
}
add_action('after_setup_theme', 'tng_agency_setup');

// Enqueue styles and scripts
function tng_agency_scripts() {
    // Main stylesheet (you need to create this based on the original CSS)
    wp_enqueue_style('tng-agency-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // External stylesheets
    wp_enqueue_style('webflow-css', 'https://cdn.prod.website-files.com/6601a33a428bb6f9b3c92728/css/tng-agency.webflow.shared.a39728a3a.min.css', array(), '1.0.0');
    
    // jQuery (WordPress includes it)
    wp_enqueue_script('jquery');
    
    // GSAP (loaded in footer via footer.php)
    // Custom scripts will be loaded in footer.php
}
add_action('wp_enqueue_scripts', 'tng_agency_scripts');

// Register widget areas
function tng_agency_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar', 'tng-agency'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here to appear in your sidebar.', 'tng-agency'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'tng_agency_widgets_init');

// Customizer settings
function tng_agency_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('hero_section', array(
        'title' => __('Hero Section', 'tng-agency'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('hero_heading', array(
        'default' => 'TNG Agency. Ga voor groei met digital & performance marketing',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_heading', array(
        'label' => __('Hero Heading', 'tng-agency'),
        'section' => 'hero_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('hero_description', array(
        'default' => 'Haal jij het maximale uit jouw marketingstrategie?',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('hero_description', array(
        'label' => __('Hero Description', 'tng-agency'),
        'section' => 'hero_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('hero_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
        'label' => __('Hero Background Image', 'tng-agency'),
        'section' => 'hero_section',
    )));

    // About Section
    $wp_customize->add_section('about_section', array(
        'title' => __('About Section', 'tng-agency'),
        'priority' => 31,
    ));

    $wp_customize->add_setting('about_title', array(
        'default' => 'TNG Agency: jouw partner voor resultaat',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('about_title', array(
        'label' => __('About Title', 'tng-agency'),
        'section' => 'about_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('about_description', array(
        'default' => 'Haal het meeste uit je marketing met The Next Gen Agency.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('about_description', array(
        'label' => __('About Description', 'tng-agency'),
        'section' => 'about_section',
        'type' => 'textarea',
    ));

    // Social Links
    $wp_customize->add_section('social_links', array(
        'title' => __('Social Links', 'tng-agency'),
        'priority' => 32,
    ));

    $social_networks = array('linkedin', 'instagram', 'facebook', 'twitter');
    foreach ($social_networks as $network) {
        $wp_customize->add_setting($network . '_url', array(
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control($network . '_url', array(
            'label' => sprintf(__('%s URL', 'tng-agency'), ucfirst($network)),
            'section' => 'social_links',
            'type' => 'url',
        ));
    }

    // Company Info
    $wp_customize->add_section('company_info', array(
        'title' => __('Company Information', 'tng-agency'),
        'priority' => 33,
    ));

    $wp_customize->add_setting('company_vat', array(
        'default' => 'BTW: NL864879520B01',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('company_vat', array(
        'label' => __('VAT Number', 'tng-agency'),
        'section' => 'company_info',
        'type' => 'text',
    ));

    $wp_customize->add_setting('company_kvk', array(
        'default' => 'KVK: 89101502',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('company_kvk', array(
        'label' => __('KVK Number', 'tng-agency'),
        'section' => 'company_info',
        'type' => 'text',
    ));

    $wp_customize->add_setting('gtm_id', array(
        'default' => 'GTM-XXXXXXX',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('gtm_id', array(
        'label' => __('Google Tag Manager ID', 'tng-agency'),
        'section' => 'company_info',
        'type' => 'text',
    ));
}
add_action('customize_register', 'tng_agency_customize_register');

// Custom post type for Services
function tng_agency_register_services_post_type() {
    $labels = array(
        'name' => __('Services', 'tng-agency'),
        'singular_name' => __('Service', 'tng-agency'),
        'add_new' => __('Add New', 'tng-agency'),
        'add_new_item' => __('Add New Service', 'tng-agency'),
        'edit_item' => __('Edit Service', 'tng-agency'),
        'new_item' => __('New Service', 'tng-agency'),
        'view_item' => __('View Service', 'tng-agency'),
        'search_items' => __('Search Services', 'tng-agency'),
        'not_found' => __('No services found', 'tng-agency'),
        'not_found_in_trash' => __('No services found in Trash', 'tng-agency'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite' => array('slug' => 'diensten'),
    );

    register_post_type('services', $args);
}
add_action('init', 'tng_agency_register_services_post_type');

// Custom post type for Clients
function tng_agency_register_clients_post_type() {
    $labels = array(
        'name' => __('Clients', 'tng-agency'),
        'singular_name' => __('Client', 'tng-agency'),
        'add_new' => __('Add New', 'tng-agency'),
        'add_new_item' => __('Add New Client', 'tng-agency'),
        'edit_item' => __('Edit Client', 'tng-agency'),
        'new_item' => __('New Client', 'tng-agency'),
        'view_item' => __('View Client', 'tng-agency'),
        'search_items' => __('Search Clients', 'tng-agency'),
        'not_found' => __('No clients found', 'tng-agency'),
        'not_found_in_trash' => __('No clients found in Trash', 'tng-agency'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-groups',
        'supports' => array('title', 'thumbnail'),
        'rewrite' => array('slug' => 'klanten'),
    );

    register_post_type('clients', $args);
}
add_action('init', 'tng_agency_register_clients_post_type');

// Add body classes
function tng_agency_body_classes($classes) {
    if (is_front_page()) {
        $classes[] = 'home-page';
    }
    return $classes;
}
add_filter('body_class', 'tng_agency_body_classes');

// Excerpt length
function tng_agency_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'tng_agency_excerpt_length');

// Excerpt more
function tng_agency_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'tng_agency_excerpt_more');

// Remove WordPress version from head
remove_action('wp_head', 'wp_generator');
