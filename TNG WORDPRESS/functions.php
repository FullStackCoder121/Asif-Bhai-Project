<?php
/**
 * TNG Agency Theme Functions
 * 
 * @package TNG_Agency
 */

// Theme Setup
function tng_agency_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('custom-logo');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'tng-agency'),
        'footer-sitemap' => __('Footer Sitemap', 'tng-agency'),
        'footer-partners' => __('Footer Partners', 'tng-agency'),
        'footer-contact' => __('Footer Contact', 'tng-agency'),
    ));
}
add_action('after_setup_theme', 'tng_agency_setup');

// Enqueue Styles and Scripts
function tng_agency_enqueue_scripts() {
    // Main stylesheet
    wp_enqueue_style('tng-agency-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Webflow CSS
    wp_enqueue_style('tng-webflow-css', 'https://cdn.prod.website-files.com/6601a33a428bb6f9b3c92728/css/tng-agency.webflow.shared.a39728a3a.min.css', array(), '1.0.0');
    
    // Google Fonts
    wp_enqueue_style('tng-google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&family=Inter:wght@400;500;600;700;800&display=swap', array(), null);
    
    // jQuery (WordPress includes this by default)
    wp_enqueue_script('jquery');
    
    // Webflow JS
    wp_enqueue_script('tng-webflow-1', 'https://cdn.prod.website-files.com/6601a33a428bb6f9b3c92728/js/webflow.schunk.36b8fb49256177c8.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('tng-webflow-2', 'https://cdn.prod.website-files.com/6601a33a428bb6f9b3c92728/js/webflow.schunk.43e3c73cbe26cc05.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('tng-webflow-3', 'https://cdn.prod.website-files.com/6601a33a428bb6f9b3c92728/js/webflow.1d698a72.73b34bf7d48a46fd.js', array('jquery'), '1.0.0', true);
    
    // Split Type
    wp_enqueue_script('split-type', 'https://unpkg.com/split-type', array(), null, true);
    
    // GSAP
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js', array(), '3.11.4', true);
    wp_enqueue_script('gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js', array('gsap'), '3.11.4', true);
}
add_action('wp_enqueue_scripts', 'tng_agency_enqueue_scripts');

// Handle Contact Form Submission
function tng_handle_contact_form() {
    // Verify nonce
    if (!isset($_POST['contact_nonce']) || !wp_verify_nonce($_POST['contact_nonce'], 'tng_contact_form_nonce')) {
        wp_die('Security check failed');
    }
    
    // Sanitize form data
    $naam = sanitize_text_field($_POST['naam']);
    $email = sanitize_email($_POST['email']);
    $telefoonnummer = sanitize_text_field($_POST['telefoonnummer']);
    $bericht = sanitize_textarea_field($_POST['bericht']);
    
    // Email details
    $to = get_option('admin_email');
    $subject = 'Nieuw contactformulier bericht van ' . $naam;
    $message = "Naam: $naam\n";
    $message .= "Email: $email\n";
    $message .= "Telefoonnummer: $telefoonnummer\n\n";
    $message .= "Bericht:\n$bericht";
    
    $headers = array('Content-Type: text/plain; charset=UTF-8', 'From: ' . $naam . ' <' . $email . '>');
    
    // Send email
    $sent = wp_mail($to, $subject, $message, $headers);
    
    if ($sent) {
        wp_redirect(home_url('/?contact=success'));
    } else {
        wp_redirect(home_url('/?contact=error'));
    }
    exit;
}
add_action('admin_post_tng_contact_form', 'tng_handle_contact_form');
add_action('admin_post_nopriv_tng_contact_form', 'tng_handle_contact_form');

// Customizer Options
function tng_agency_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('tng_hero_section', array(
        'title' => __('Hero Section', 'tng-agency'),
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('hero_heading', array(
        'default' => 'TNG Agency. Ga voor groei met digital & performance marketing',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_heading', array(
        'label' => __('Hero Heading', 'tng-agency'),
        'section' => 'tng_hero_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('hero_description', array(
        'default' => 'Haal jij het maximale uit jouw marketingstrategie? Vraag een vrijblijvende audit aan en krijg inzicht in je marketingperformance.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('hero_description', array(
        'label' => __('Hero Description', 'tng-agency'),
        'section' => 'tng_hero_section',
        'type' => 'textarea',
    ));
    
    // About Section
    $wp_customize->add_section('tng_about_section', array(
        'title' => __('About Section', 'tng-agency'),
        'priority' => 31,
    ));
    
    $wp_customize->add_setting('about_title', array(
        'default' => 'TNG Agency: jouw partner voor resultaat',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('about_title', array(
        'label' => __('About Title', 'tng-agency'),
        'section' => 'tng_about_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('about_description', array(
        'default' => 'Haal het meeste uit je marketing met The Next Gen Agency. Met onze praktische aanpak weten we jouw marketing zo effectief mogelijk in te zetten.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('about_description', array(
        'label' => __('About Description', 'tng-agency'),
        'section' => 'tng_about_section',
        'type' => 'textarea',
    ));
    
    // Social Media Links
    $wp_customize->add_section('tng_social_section', array(
        'title' => __('Social Media Links', 'tng-agency'),
        'priority' => 32,
    ));
    
    $social_platforms = array(
        'linkedin' => 'LinkedIn URL',
        'instagram' => 'Instagram URL',
        'facebook' => 'Facebook URL',
        'twitter' => 'Twitter URL'
    );
    
    foreach ($social_platforms as $platform => $label) {
        $wp_customize->add_setting($platform . '_url', array(
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw',
        ));
        
        $wp_customize->add_control($platform . '_url', array(
            'label' => __($label, 'tng-agency'),
            'section' => 'tng_social_section',
            'type' => 'url',
        ));
    }
    
    // Company Info
    $wp_customize->add_section('tng_company_section', array(
        'title' => __('Company Information', 'tng-agency'),
        'priority' => 33,
    ));
    
    $wp_customize->add_setting('company_vat', array(
        'default' => 'BTW: NL864879520B01',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('company_vat', array(
        'label' => __('VAT Number', 'tng-agency'),
        'section' => 'tng_company_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('company_kvk', array(
        'default' => 'KVK: 89101502',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('company_kvk', array(
        'label' => __('KVK Number', 'tng-agency'),
        'section' => 'tng_company_section',
        'type' => 'text',
    ));
}
add_action('customize_register', 'tng_agency_customize_register');

// Add body classes based on page
function tng_agency_body_classes($classes) {
    if (is_front_page()) {
        $classes[] = 'home-page';
    }
    return $classes;
}
add_filter('body_class', 'tng_agency_body_classes');
