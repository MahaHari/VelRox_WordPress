<?php
/**
 * Velrox — index.php
 * This file is intentionally left minimal.
 * WordPress requires it for theme fallback.
 */
get_header(); ?>

<section class="section-padding">
    <div class="container">
        <?php if ( have_posts() ) : ?>
        <div class="entry-content">
            <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div><?php the_excerpt(); ?></div>
            </article>
            <?php endwhile; ?>
        </div>
        <?php else : ?>
        <p><?php esc_html_e( 'No content found.', 'velrox' ); ?></p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
