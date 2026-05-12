<?php get_header(); ?>

<section class="error-404-section">
    <div class="container">
        <h1>404</h1>
        <h2><?php esc_html_e( 'Page Not Found', 'velrox' ); ?></h2>
        <p><?php esc_html_e( "The page you're looking for doesn't exist or has been moved. Let's get you back on track.", 'velrox' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary btn-lg">
            <?php esc_html_e( 'Back to Home', 'velrox' ); ?>
        </a>
    </div>
</section>

<?php get_footer(); ?>
