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

<header class="site-header" id="site-header">
    <div class="header-inner container-wide">

        <!-- Logo -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-branding" aria-label="<?php bloginfo( 'name' ); ?>">
            <?php if ( has_custom_logo() ) : ?>
                <div class="logo-icon"><?php the_custom_logo(); ?></div>
            <?php else : ?>
                <div class="logo-icon"><?php echo velrox_logo_svg(); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
            <?php endif; ?>
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
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary">
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
    ];
    echo '<ul>';
    foreach ( $pages as $url => $label ) {
        echo '<li><a href="' . esc_url( $url ) . '">' . esc_html( $label ) . '</a></li>';
    }
    echo '</ul>';
}
