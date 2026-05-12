<?php get_header(); ?>

<?php
$banner_image = has_post_thumbnail() ? get_the_post_thumbnail_url( null, 'velrox-banner' ) : '';
velrox_page_banner(
    get_the_title(),
    '',
    $banner_image ?: 'https://images.pexels.com/photos/1072824/pexels-photo-1072824.jpeg?auto=compress&cs=tinysrgb&w=1920&q=80',
    __( 'Blog', 'velrox' )
);
?>

<section class="section-padding">
    <div class="container">
        <article class="entry-content">
            <?php
            while ( have_posts() ) :
                the_post();
                the_content();
                wp_link_pages();
            endwhile;
            ?>
        </article>
    </div>
</section>

<?php get_footer(); ?>
