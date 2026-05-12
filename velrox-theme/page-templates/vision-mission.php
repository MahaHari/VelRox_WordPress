<?php
/**
 * Template Name: Vision & Mission
 */
get_header();

velrox_page_banner(
    __( 'Vision & Mission', 'velrox' ),
    __( 'The purpose and ambition that drives everything we do at Velrox Global Seafood Trading.', 'velrox' ),
    'https://images.pexels.com/photos/1619838/pexels-photo-1619838.jpeg?auto=compress&cs=tinysrgb&w=1920&q=80',
    __( 'Vision & Mission', 'velrox' )
);
?>

<!-- VISION & MISSION CARDS -->
<section class="section-padding">
    <div class="container">
        <div class="section-header centered">
            <div class="section-tag animate-fade-up"><?php esc_html_e( 'Our Purpose', 'velrox' ); ?></div>
            <h2 class="section-title animate-fade-up delay-1">
                <?php esc_html_e( 'Guided by', 'velrox' ); ?>
                <span class="highlight"><?php esc_html_e( 'Clear Vision', 'velrox' ); ?></span>
                <?php esc_html_e( '& Purpose', 'velrox' ); ?>
            </h2>
            <p class="section-subtitle animate-fade-up delay-2">
                <?php esc_html_e( 'At Velrox, our vision and mission are not just words — they are the compass that guides every decision and every partnership we forge.', 'velrox' ); ?>
            </p>
        </div>
        <div class="vm-main-grid">
            <!-- Vision -->
            <div class="vm-main-card vision-card animate-slide-left">
                <div class="vmc-accent"></div>
                <div class="vmc-icon"><?php echo velrox_icon( 'globe', 40 ); // phpcs:ignore ?></div>
                <div class="vmc-tag"><?php esc_html_e( 'Our Vision', 'velrox' ); ?></div>
                <h2><?php esc_html_e( 'A Global Leader in Responsible Seafood Trade', 'velrox' ); ?></h2>
                <div class="vmc-divider"></div>
                <p>
                    <?php esc_html_e( 'To become a leading international seafood trading company recognized for reliability, quality, and sustainable supply chain excellence across European markets and beyond.', 'velrox' ); ?>
                </p>
                <p>
                    <?php esc_html_e( 'We envision a world where premium frozen seafood from the world\'s best production regions reaches European buyers effortlessly, with full traceability and confidence in every shipment.', 'velrox' ); ?>
                </p>
                <ul class="vmc-points">
                    <li><?php esc_html_e( 'Industry recognition for trade excellence in Europe', 'velrox' ); ?></li>
                    <li><?php esc_html_e( 'Benchmark standards for Asian seafood exports', 'velrox' ); ?></li>
                    <li><?php esc_html_e( 'Trusted partner for 100+ European businesses', 'velrox' ); ?></li>
                </ul>
            </div>
            <!-- Mission -->
            <div class="vm-main-card mission-card animate-slide-right">
                <div class="vmc-accent"></div>
                <div class="vmc-icon"><?php echo velrox_icon( 'anchor', 40 ); // phpcs:ignore ?></div>
                <div class="vmc-tag"><?php esc_html_e( 'Our Mission', 'velrox' ); ?></div>
                <h2><?php esc_html_e( 'Connecting Supply to Standards, Every Day', 'velrox' ); ?></h2>
                <div class="vmc-divider"></div>
                <p>
                    <?php esc_html_e( 'To bridge global seafood supply with European market standards by delivering transparent, efficient, and reliable trade partnerships that create lasting value for all stakeholders.', 'velrox' ); ?>
                </p>
                <p>
                    <?php esc_html_e( 'We fulfill this mission by maintaining rigorous quality standards, building strong supplier relationships, investing in logistics excellence, and treating every client as a long-term partner.', 'velrox' ); ?>
                </p>
                <ul class="vmc-points">
                    <li><?php esc_html_e( 'End-to-end trade management for every order', 'velrox' ); ?></li>
                    <li><?php esc_html_e( 'Transparent communication at every trade stage', 'velrox' ); ?></li>
                    <li><?php esc_html_e( 'Consistent quality and on-time delivery', 'velrox' ); ?></li>
                </ul>
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
                <?php esc_html_e( 'The Values We', 'velrox' ); ?>
                <span class="highlight"><?php esc_html_e( 'Live By', 'velrox' ); ?></span>
            </h2>
            <p class="section-subtitle animate-fade-up delay-2">
                <?php esc_html_e( 'These principles shape our culture, our decisions, and our relationships.', 'velrox' ); ?>
            </p>
        </div>
        <div class="core-values-grid">
            <?php
            $values = [
                [ 'heart',  __( 'Integrity', 'velrox' ),     __( 'Every trade is conducted with complete honesty and accountability.', 'velrox' ) ],
                [ 'target', __( 'Precision', 'velrox' ),     __( 'Accurate documentation, compliance, and quality standards on every shipment.', 'velrox' ) ],
                [ 'globe',  __( 'Global Reach', 'velrox' ),  __( 'Building connections that bridge continents and cultures in seafood trade.', 'velrox' ) ],
                [ 'leaf',   __( 'Sustainability', 'velrox' ),__( 'Promoting responsible and sustainable seafood sourcing practices.', 'velrox' ) ],
                [ 'chart',  __( 'Growth', 'velrox' ),        __( 'Growing together with our partners through consistent value delivery.', 'velrox' ) ],
                [ 'anchor', __( 'Reliability', 'velrox' ),   __( 'Being the dependable partner our clients can always count on.', 'velrox' ) ],
            ];
            foreach ( $values as $i => $v ) :
            ?>
            <div class="cv-card animate-fade-up delay-<?php echo esc_attr( ( $i % 3 ) + 1 ); ?>">
                <div class="cv-icon"><?php echo velrox_icon( $v[0], 20 ); // phpcs:ignore ?></div>
                <h4><?php echo esc_html( $v[1] ); ?></h4>
                <p><?php echo esc_html( $v[2] ); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- STRATEGIC GOALS -->
<section class="section-padding">
    <div class="container">
        <div class="section-header centered">
            <div class="section-tag animate-fade-up"><?php esc_html_e( 'Strategic Goals', 'velrox' ); ?></div>
            <h2 class="section-title animate-fade-up delay-1">
                <?php esc_html_e( 'Our Roadmap to', 'velrox' ); ?>
                <span class="highlight">2028</span>
            </h2>
        </div>
        <div class="goals-grid">
            <?php
            $goals = [
                [ '2025', __( 'Market Leadership', 'velrox' ),    __( 'Establish Velrox as the top-of-mind brand for Indian frozen seafood exports to Europe.', 'velrox' ) ],
                [ '2026', __( 'Product Expansion', 'velrox' ),    __( 'Extend product range to cover 15+ species and value-added seafood categories.', 'velrox' ) ],
                [ '2027', __( 'Logistics Excellence', 'velrox' ), __( 'Own and operate dedicated cold logistics assets across key European ports.', 'velrox' ) ],
                [ '2028', __( 'Sustainability Leader', 'velrox' ),__( 'Achieve full sustainability certification for all sourcing partnerships.', 'velrox' ) ],
            ];
            foreach ( $goals as $i => $g ) :
            ?>
            <div class="goal-card animate-fade-up delay-<?php echo esc_attr( $i + 1 ); ?>">
                <div class="goal-year"><?php echo esc_html( $g[0] ); ?></div>
                <h4><?php echo esc_html( $g[1] ); ?></h4>
                <p><?php echo esc_html( $g[2] ); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section-padding" style="background:var(--navy);">
    <div class="container" style="text-align:center;">
        <h2 class="animate-fade-up" style="color:white;margin-bottom:16px;font-family:var(--font-primary);font-size:clamp(26px,3vw,38px);">
            <?php esc_html_e( 'Share Our Vision', 'velrox' ); ?>
        </h2>
        <p class="animate-fade-up delay-1" style="color:rgba(255,255,255,0.65);margin-bottom:32px;max-width:460px;margin-left:auto;margin-right:auto;">
            <?php esc_html_e( 'If our mission resonates with your business values, let\'s build something great together.', 'velrox' ); ?>
        </p>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary btn-lg animate-fade-up delay-2">
            <?php esc_html_e( 'Partner With Us', 'velrox' ); ?>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
    </div>
</section>

<?php get_footer(); ?>
