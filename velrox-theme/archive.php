<?php
get_header();
velrox_page_banner( get_the_archive_title(), get_the_archive_description(), '', get_the_archive_title() );
?>

<section class="section-padding">
    <div class="container">
        <div class="entry-content">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="margin-bottom:32px;padding-bottom:32px;border-bottom:1px solid var(--grey-border);">
                    <h2 style="margin-bottom:8px;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div style="color:var(--text-muted);font-size:13px;margin-bottom:12px;"><?php echo esc_html( get_the_date() ); ?></div>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary" style="margin-top:16px;"><?php esc_html_e( 'Read More', 'velrox' ); ?></a>
                </article>
                <?php endwhile; ?>
                <div><?php the_posts_navigation(); ?></div>
            <?php else : ?>
                <p><?php esc_html_e( 'No posts found.', 'velrox' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
