<?php
/**
 * Velrox Global Seafood Trading - Theme Functions
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'VELROX_VERSION', '1.0.0' );
define( 'VELROX_DIR', get_template_directory() );
define( 'VELROX_URI', get_template_directory_uri() );

// ============================================================
// THEME SETUP
// ============================================================
function velrox_setup() {
    load_theme_textdomain( 'velrox', VELROX_DIR . '/languages' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ] );
    add_theme_support( 'custom-logo', [
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ] );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

    // Elementor full-width support
    add_theme_support( 'elementor' );

    // Register nav menus
    register_nav_menus( [
        'primary'   => __( 'Primary Navigation', 'velrox' ),
        'footer'    => __( 'Footer Navigation', 'velrox' ),
        'secondary' => __( 'Secondary Footer Navigation', 'velrox' ),
    ] );

    // Image sizes
    add_image_size( 'velrox-hero',    1920, 900, true );
    add_image_size( 'velrox-banner',  1200, 480, true );
    add_image_size( 'velrox-card',    600,  420, true );
    add_image_size( 'velrox-thumb',   400,  300, true );
}
add_action( 'after_setup_theme', 'velrox_setup' );

// ============================================================
// ENQUEUE STYLES & SCRIPTS
// ============================================================
function velrox_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style(
        'velrox-fonts',
        'https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700;800;900&family=Montserrat:wght@300;400;500;600&display=swap',
        [],
        null
    );

    // Main stylesheet (style.css in theme root)
    wp_enqueue_style(
        'velrox-style',
        get_stylesheet_uri(),
        [ 'velrox-fonts' ],
        VELROX_VERSION
    );

    // Main JS
    wp_enqueue_script(
        'velrox-main',
        VELROX_URI . '/assets/js/main.js',
        [],
        VELROX_VERSION,
        true
    );

    // Contact form JS (only on contact page)
    if ( is_page_template( 'page-templates/contact.php' ) ) {
        wp_enqueue_script(
            'velrox-contact',
            VELROX_URI . '/assets/js/contact.js',
            [ 'velrox-main' ],
            VELROX_VERSION,
            true
        );

        wp_localize_script( 'velrox-contact', 'velroxContact', [
            'ajaxUrl' => admin_url( 'admin-ajax.php' ),
            'nonce'   => wp_create_nonce( 'velrox_contact_nonce' ),
        ] );
    }
}
add_action( 'wp_enqueue_scripts', 'velrox_enqueue_assets' );

// ============================================================
// CONTACT FORM AJAX HANDLER
// ============================================================
function velrox_handle_contact() {
    check_ajax_referer( 'velrox_contact_nonce', 'nonce' );

    $name    = sanitize_text_field( wp_unslash( $_POST['name'] ?? '' ) );
    $email   = sanitize_email( wp_unslash( $_POST['email'] ?? '' ) );
    $company = sanitize_text_field( wp_unslash( $_POST['company'] ?? '' ) );
    $phone   = sanitize_text_field( wp_unslash( $_POST['phone'] ?? '' ) );
    $subject = sanitize_text_field( wp_unslash( $_POST['subject'] ?? '' ) );
    $message = sanitize_textarea_field( wp_unslash( $_POST['message'] ?? '' ) );

    if ( empty( $name ) || ! is_email( $email ) || empty( $message ) ) {
        wp_send_json_error( [ 'message' => __( 'Please fill in all required fields.', 'velrox' ) ] );
    }

    // Store in DB (custom table or post meta)
    $post_id = wp_insert_post( [
        'post_type'   => 'velrox_inquiry',
        'post_title'  => $name . ' — ' . $subject,
        'post_status' => 'private',
        'meta_input'  => [
            '_inquiry_name'    => $name,
            '_inquiry_email'   => $email,
            '_inquiry_company' => $company,
            '_inquiry_phone'   => $phone,
            '_inquiry_subject' => $subject,
            '_inquiry_message' => $message,
        ],
    ] );

    if ( is_wp_error( $post_id ) ) {
        wp_send_json_error( [ 'message' => __( 'An error occurred. Please try again.', 'velrox' ) ] );
    }

    // Email notification to admin
    $admin_email = get_option( 'admin_email' );
    $email_subject = sprintf( __( 'New Contact Inquiry from %s', 'velrox' ), $name );
    $email_body  = sprintf(
        "Name: %s\nEmail: %s\nCompany: %s\nPhone: %s\nSubject: %s\n\nMessage:\n%s",
        $name, $email, $company, $phone, $subject, $message
    );
    wp_mail( $admin_email, $email_subject, $email_body );

    wp_send_json_success( [ 'message' => __( 'Message sent successfully!', 'velrox' ) ] );
}
add_action( 'wp_ajax_velrox_contact',        'velrox_handle_contact' );
add_action( 'wp_ajax_nopriv_velrox_contact', 'velrox_handle_contact' );

// ============================================================
// CUSTOM POST TYPE: INQUIRIES
// ============================================================
function velrox_register_post_types() {
    register_post_type( 'velrox_inquiry', [
        'label'               => __( 'Inquiries', 'velrox' ),
        'labels'              => [
            'name'          => __( 'Inquiries', 'velrox' ),
            'singular_name' => __( 'Inquiry', 'velrox' ),
        ],
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_icon'           => 'dashicons-email-alt',
        'supports'            => [ 'title' ],
        'capability_type'     => 'post',
        'capabilities'        => [
            'create_posts' => false,
        ],
        'map_meta_cap'        => true,
    ] );
}
add_action( 'init', 'velrox_register_post_types' );

// Show inquiry meta in admin
function velrox_inquiry_meta_boxes() {
    add_meta_box(
        'velrox_inquiry_details',
        __( 'Inquiry Details', 'velrox' ),
        'velrox_inquiry_meta_box_callback',
        'velrox_inquiry',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'velrox_inquiry_meta_boxes' );

function velrox_inquiry_meta_box_callback( $post ) {
    $fields = [
        '_inquiry_name'    => __( 'Name', 'velrox' ),
        '_inquiry_email'   => __( 'Email', 'velrox' ),
        '_inquiry_company' => __( 'Company', 'velrox' ),
        '_inquiry_phone'   => __( 'Phone', 'velrox' ),
        '_inquiry_subject' => __( 'Subject', 'velrox' ),
        '_inquiry_message' => __( 'Message', 'velrox' ),
    ];
    echo '<table class="form-table" style="font-size:14px;">';
    foreach ( $fields as $key => $label ) {
        $value = get_post_meta( $post->ID, $key, true );
        echo '<tr><th style="padding:8px 12px;width:120px;">' . esc_html( $label ) . '</th>';
        echo '<td style="padding:8px 12px;">' . esc_html( $value ) . '</td></tr>';
    }
    echo '</table>';
}

// ============================================================
// WIDGETIZED SIDEBAR
// ============================================================
function velrox_widgets_init() {
    register_sidebar( [
        'name'          => __( 'Blog Sidebar', 'velrox' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Sidebar for blog/archive pages.', 'velrox' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ] );
}
add_action( 'widgets_init', 'velrox_widgets_init' );

// ============================================================
// ELEMENTOR COMPATIBILITY
// ============================================================
// Remove WordPress admin bar height padding from fixed header
function velrox_admin_bar_style() {
    if ( is_admin_bar_showing() ) {
        echo '<style>#wpadminbar { z-index: 10001; } .site-header { top: 32px; } @media (max-width:782px){ .site-header { top: 46px; } }</style>';
    }
}
add_action( 'wp_head', 'velrox_admin_bar_style' );

// Full-width Elementor pages (removes default content wrapper)
function velrox_is_elementor_page() {
    if ( function_exists( 'elementor_theme_do_location' ) ) {
        return elementor_theme_do_location( 'single' );
    }
    return false;
}

// ============================================================
// HELPERS
// ============================================================
function velrox_logo_svg() {
    return '<svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="40" height="40" rx="6" fill="#00A6CB"/>
        <path d="M8 20C8 20 12 12 20 12C28 12 32 20 32 20C32 20 28 28 20 28C12 28 8 20 8 20Z" fill="white" opacity="0.15"/>
        <ellipse cx="20" cy="20" rx="7" ry="5" fill="white" opacity="0.9"/>
        <circle cx="22" cy="19" r="1.5" fill="#00A6CB"/>
        <path d="M30 20C30 20 32 18 34 20C32 22 30 20 30 20Z" fill="white" opacity="0.8"/>
    </svg>';
}

function velrox_page_banner( $title = '', $subtitle = '', $image_url = '', $breadcrumb = '' ) {
    if ( empty( $image_url ) ) {
        $image_url = 'https://images.pexels.com/photos/1072824/pexels-photo-1072824.jpeg?auto=compress&cs=tinysrgb&w=1920&q=80';
    }
    ?>
    <section class="page-banner">
        <div class="page-banner-bg">
            <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $title ); ?>">
            <div class="page-banner-overlay"></div>
        </div>
        <div class="page-banner-content container">
            <?php if ( $breadcrumb ) : ?>
            <div class="page-breadcrumb">
                <span><?php esc_html_e( 'Home', 'velrox' ); ?></span>
                <span class="sep">/</span>
                <span class="current"><?php echo esc_html( $breadcrumb ); ?></span>
            </div>
            <?php endif; ?>
            <h1 class="page-banner-title"><?php echo esc_html( $title ); ?></h1>
            <?php if ( $subtitle ) : ?>
            <p class="page-banner-subtitle"><?php echo esc_html( $subtitle ); ?></p>
            <?php endif; ?>
        </div>
    </section>
    <?php
}

// Inline SVG icons used throughout the theme
function velrox_icon( $name, $size = 24 ) {
    $icons = [
        'fish'        => '<polyline points="23 7 17 7 17 13"/><path d="M1.73 1.73l20.54 20.54M22.46 1.73L1.92 22.27"/><path d="M19.07 4.93A10 10 0 1 0 4.93 19.07"/><path d="M17 7c0 5.52-4.48 10-10 10"/>',
        'package'     => '<line x1="16.5" y1="9.4" x2="7.5" y2="4.21"/><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/>',
        'truck'       => '<rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/>',
        'chart'       => '<line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/>',
        'shield'      => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
        'globe'       => '<circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>',
        'anchor'      => '<circle cx="12" cy="5" r="3"/><line x1="12" y1="22" x2="12" y2="8"/><path d="M5 12H2a10 10 0 0 0 20 0h-3"/>',
        'zap'         => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>',
        'users'       => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
        'trending'    => '<polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/>',
        'clock'       => '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>',
        'mappin'      => '<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>',
        'mail'        => '<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>',
        'phone'       => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2.18h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.09 6.09l1.05-1.05a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>',
        'message'     => '<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>',
        'handshake'   => '<path d="M18.5 12.5l-6 6L9 15l-3.5 3.5M12.5 6.5L9 10M6.5 9.5L3 6"/><path d="M21 3l-6.5 6.5M15 15l3.5 3.5"/>',
        'heart'       => '<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>',
        'target'      => '<circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/>',
        'leaf'        => '<path d="M2 22l10-10M17 3s-11 1-13 13c0 0 7-7 13-7 0 6-7 13-7 13s12-2 13-13c0-1-3-7-6-6z"/>',
        'award'       => '<circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/>',
        'shieldcheck' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/>',
    ];
    $path = $icons[ $name ] ?? '';
    return sprintf(
        '<svg xmlns="http://www.w3.org/2000/svg" width="%1$d" height="%1$d" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">%2$s</svg>',
        $size,
        $path
    );
}
