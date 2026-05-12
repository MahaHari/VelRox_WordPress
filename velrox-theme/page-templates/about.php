<?php
/**
 * Template Name: About Us
 */
get_header();

velrox_page_banner(
    __( 'About Velrox', 'velrox' ),
    __( 'Learn about our story, values, and the team driving Velrox Global Seafood Trading.', 'velrox' ),
    'https://images.pexels.com/photos/3766111/pexels-photo-3766111.jpeg?auto=compress&cs=tinysrgb&w=1920&q=80',
    __( 'About Us', 'velrox' )
);
?>

<!-- WHO WE ARE -->
<section class="section-padding">
    <div class="container">
        <div class="about-who-grid">
            <div class="animate-slide-left">
                <div class="section-tag"><?php esc_html_e( 'Who We Are', 'velrox' ); ?></div>
                <h2 class="section-title">
                    <?php esc_html_e( 'A Trusted Name in', 'velrox' ); ?>
                    <span class="highlight"><?php esc_html_e( 'Global Seafood Trade', 'velrox' ); ?></span>
                </h2>
                <div class="divider"></div>
                <p style="margin-bottom:16px;">
                    <?php esc_html_e( 'At Velrox, we connect global seafood supply with European market standards through reliable sourcing, transparent trade, and long-term partnerships.', 'velrox' ); ?>
                </p>
                <p style="margin-bottom:24px;">
                    <?php esc_html_e( 'Founded with a focus on international frozen seafood trading, Velrox works closely with processing partners and logistics networks to deliver consistent quality products to importers, wholesalers, distributors, and food service buyers across Europe.', 'velrox' ); ?>
                </p>
                <p>
                    <?php esc_html_e( 'Our team brings together expertise in international trade, seafood processing standards, cold-chain logistics, and European regulatory compliance — allowing us to serve as a reliable bridge between suppliers and buyers across continents.', 'velrox' ); ?>
                </p>
                <div class="about-points">
                    <?php
                    $points = [
                        __( 'Established relationships with certified Indian seafood processors', 'velrox' ),
                        __( 'Deep knowledge of EU import regulations and food safety standards', 'velrox' ),
                        __( 'Experienced trade and logistics coordination team', 'velrox' ),
                        __( 'Commitment to transparent, long-term commercial relationships', 'velrox' ),
                    ];
                    foreach ( $points as $pt ) :
                    ?>
                    <div class="about-point"><?php echo esc_html( $pt ); ?></div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="animate-slide-right">
                <div class="about-img-stack">
                    <div class="about-img-main">
                        <img src="https://images.pexels.com/photos/1619838/pexels-photo-1619838.jpeg?auto=compress&cs=tinysrgb&w=800&q=80"
                             alt="<?php esc_attr_e( 'Seafood trading vessel', 'velrox' ); ?>" loading="lazy">
                    </div>
                    <div class="about-img-secondary">
                        <img src="https://images.pexels.com/photos/3680219/pexels-photo-3680219.jpeg?auto=compress&cs=tinysrgb&w=400&q=80"
                             alt="<?php esc_attr_e( 'Seafood processing', 'velrox' ); ?>" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CORE VALUES -->
<section class="section-padding" style="background:var(--grey-bg);">
    <div class="container">
        <div class="section-header centered">
            <div class="section-tag animate-fade-up"><?php esc_html_e( 'Core Values', 'velrox' ); ?></div>
            <h2 class="section-title animate-fade-up delay-1">
                <?php esc_html_e( 'The Principles That', 'velrox' ); ?>
                <span class="highlight"><?php esc_html_e( 'Guide Us', 'velrox' ); ?></span>
            </h2>
            <p class="section-subtitle animate-fade-up delay-2">
                <?php esc_html_e( 'Our values are the foundation of every relationship we build and every trade we facilitate.', 'velrox' ); ?>
            </p>
        </div>
        <div class="values-grid">
            <?php
            $values = [
                [ 'handshake', __( 'Integrity', 'velrox' ),    __( 'We conduct business with complete transparency and honesty in every transaction.', 'velrox' ) ],
                [ 'trending',  __( 'Excellence', 'velrox' ),   __( 'We are committed to delivering the highest quality products and services.', 'velrox' ) ],
                [ 'users',     __( 'Partnership', 'velrox' ),  __( 'We build meaningful long-term partnerships based on mutual trust and growth.', 'velrox' ) ],
                [ 'globe',     __( 'Global Vision', 'velrox' ),__( 'We think globally and act with a deep understanding of international markets.', 'velrox' ) ],
            ];
            foreach ( $values as $i => $v ) :
            ?>
            <div class="value-card animate-fade-up delay-<?php echo esc_attr( $i + 1 ); ?>">
                <div class="value-icon"><?php echo velrox_icon( $v[0], 22 ); // phpcs:ignore ?></div>
                <h3 class="value-title"><?php echo esc_html( $v[1] ); ?></h3>
                <p><?php echo esc_html( $v[2] ); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- TIMELINE -->
<section class="section-padding">
    <div class="container">
        <div class="section-header centered">
            <div class="section-tag animate-fade-up"><?php esc_html_e( 'Our Journey', 'velrox' ); ?></div>
            <h2 class="section-title animate-fade-up delay-1">
                <?php esc_html_e( 'Building', 'velrox' ); ?>
                <span class="highlight"><?php esc_html_e( 'Trade Excellence', 'velrox' ); ?></span>
                <?php esc_html_e( 'Over the Years', 'velrox' ); ?>
            </h2>
        </div>
        <div class="timeline">
            <?php
            $milestones = [
                [ '2010', __( 'Founded in Amsterdam', 'velrox' ),  __( 'Velrox was established with a mission to bridge global seafood supply with European buyers.', 'velrox' ) ],
                [ '2013', __( 'Indian Market Entry', 'velrox' ),   __( 'Established direct partnerships with certified frozen seafood processors in India.', 'velrox' ) ],
                [ '2016', __( 'European Expansion', 'velrox' ),    __( 'Expanded operations to serve importers across 10+ European countries.', 'velrox' ) ],
                [ '2019', __( 'Logistics Network', 'velrox' ),     __( 'Built a comprehensive cold-chain logistics and container distribution network.', 'velrox' ) ],
                [ '2022', __( 'Sustainable Trading', 'velrox' ),   __( 'Adopted sustainable sourcing practices and enhanced compliance programs.', 'velrox' ) ],
                [ '2024', __( 'Global Leadership', 'velrox' ),     __( 'Recognized as a trusted partner for European frozen seafood procurement.', 'velrox' ) ],
            ];
            foreach ( $milestones as $i => $m ) :
                $side = ( $i % 2 === 0 ) ? 'left' : 'right';
            ?>
            <div class="timeline-item <?php echo esc_attr( $side ); ?> animate-fade-up delay-<?php echo esc_attr( ( $i % 3 ) + 1 ); ?>">
                <div class="timeline-content">
                    <span class="timeline-year"><?php echo esc_html( $m[0] ); ?></span>
                    <h4><?php echo esc_html( $m[1] ); ?></h4>
                    <p><?php echo esc_html( $m[2] ); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
            <div class="timeline-line"></div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section-padding-sm" style="background:var(--navy);">
    <div class="container" style="text-align:center;">
        <h2 class="animate-fade-up" style="color:white;margin-bottom:16px;font-family:var(--font-primary);font-size:clamp(24px,3vw,36px);">
            <?php esc_html_e( 'Ready to Trade with Velrox?', 'velrox' ); ?>
        </h2>
        <p class="animate-fade-up delay-1" style="color:rgba(255,255,255,0.65);margin-bottom:32px;max-width:480px;margin-left:auto;margin-right:auto;">
            <?php esc_html_e( 'Contact our team to discuss your requirements and start a rewarding partnership.', 'velrox' ); ?>
        </p>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary btn-lg animate-fade-up delay-2">
            <?php esc_html_e( 'Contact Us', 'velrox' ); ?>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
    </div>
</section>

<?php get_footer(); ?>
