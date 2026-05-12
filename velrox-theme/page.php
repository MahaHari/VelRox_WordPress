<?php get_header(); ?>

<?php
// If the page has a featured image, show a banner
$banner_image = '';
if ( has_post_thumbnail() ) {
    $banner_image = get_the_post_thumbnail_url( null, 'velrox-banner' );
}
velrox_page_banner(
    get_the_title(),
    '',
    $banner_image ?: 'https://images.pexels.com/photos/1072824/pexels-photo-1072824.jpeg?auto=compress&cs=tinysrgb&w=1920&q=80',
    get_the_title()
);
?>

<section class="section-padding">
    <div class="container">
        <div class="entry-content">
            <?php
            while ( have_posts() ) :
                the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
