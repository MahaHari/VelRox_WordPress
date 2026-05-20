<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
$is_front = is_front_page();
$header_class = $is_front ? 'site-header' : 'site-header site-header--solid';
?>

<header class="<?php echo esc_attr( $header_class ); ?>" id="site-header">
    <div class="header-inner container-wide">

        <!-- Logo -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-branding" aria-label="<?php bloginfo( 'name' ); ?>">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/velrox-logo.jpg' ); ?>"
                 alt="<?php esc_attr_e( 'Velrox Global Seafood Trading', 'velrox' ); ?>"
                 class="site-logo-img">
            <div class="logo-text">
                <span class="logo-brand"><?php echo esc_html( get_bloginfo( 'name' ) ?: 'VELROX' ); ?></span>
                <span class="logo-sub">Global Seafood Trading</span>
            </div>
        </a>

        <!-- Desktop Navigation -->
        <div class="desktop-nav-wrap">
            <?php
            wp_nav_menu( [
                'theme_location' => 'primary',
                'container'      => 'nav',
                'container_class'=> 'site-nav',
                'menu_class'     => '',
                'fallback_cb'    => 'velrox_fallback_nav',
            ] );
            ?>
        </div>

        <!-- Header Actions -->
        <div class="header-actions">
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn header-cta-btn">
                <?php esc_html_e( 'Contact Us', 'velrox' ); ?>
            </a>
            <button class="mobile-toggle" id="mobile-toggle" aria-label="<?php esc_attr_e( 'Toggle menu', 'velrox' ); ?>" aria-expanded="false">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                    <line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/>
                </svg>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Menu Overlay -->
<div class="mobile-menu" id="mobile-menu" aria-hidden="true">
    <button class="mobile-close" id="mobile-close" aria-label="<?php esc_attr_e( 'Close menu', 'velrox' ); ?>">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
            <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
        </svg>
    </button>
    <nav class="mobile-nav">
        <?php
        wp_nav_menu( [
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => '',
            'fallback_cb'    => 'velrox_fallback_mobile_nav',
        ] );
        ?>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary" style="margin-top:24px;justify-content:center;">
            <?php esc_html_e( 'Contact Us', 'velrox' ); ?>
        </a>
    </nav>
</div>

<main id="main-content" class="site-main">
<?php

// ============================================================
// FALLBACK NAV FUNCTIONS
// ============================================================
function velrox_fallback_nav() {
    $pages = [
        home_url( '/' )               => __( 'Home', 'velrox' ),
        home_url( '/about' )          => __( 'About Us', 'velrox' ),
        home_url( '/services' )       => __( 'Services', 'velrox' ),
        home_url( '/why-velrox' )     => __( 'Why Velrox', 'velrox' ),
        home_url( '/vision-mission' ) => __( 'Vision & Mission', 'velrox' ),
        home_url( '/products' )       => __( 'Our Products', 'velrox' ),
    ];
    echo '<nav class="site-nav"><ul>';
    foreach ( $pages as $url => $label ) {
        $active = ( untrailingslashit( $_SERVER['REQUEST_URI'] ?? '' ) === parse_url( $url, PHP_URL_PATH ) ) ? ' class="current-menu-item"' : '';
        echo '<li' . $active . '><a href="' . esc_url( $url ) . '">' . esc_html( $label ) . '</a></li>';
    }
    echo '</ul></nav>';
}

function velrox_fallback_mobile_nav() {
    $pages = [
        home_url( '/' )               => __( 'Home', 'velrox' ),
        home_url( '/about' )          => __( 'About Us', 'velrox' ),
        home_url( '/services' )       => __( 'Services', 'velrox' ),
        home_url( '/why-velrox' )     => __( 'Why Velrox', 'velrox' ),
        home_url( '/vision-mission' ) => __( 'Vision & Mission', 'velrox' ),
        home_url( '/products' )       => __( 'Our Products', 'velrox' ),
    ];
    echo '<ul>';
    foreach ( $pages as $url => $label ) {
        echo '<li><a href="' . esc_url( $url ) . '">' . esc_html( $label ) . '</a></li>';
    }
    echo '</ul>';
}
