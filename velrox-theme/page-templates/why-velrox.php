<?php
/**
 * Template Name: Why Velrox
 */
get_header();

velrox_page_banner(
    __( 'Why Choose Velrox', 'velrox' ),
    __( 'Discover what makes Velrox the preferred seafood trading partner for European importers and wholesalers.', 'velrox' ),
    'https://images.pexels.com/photos/1117211/pexels-photo-1117211.jpeg?auto=compress&cs=tinysrgb&w=1920&q=80',
    __( 'Why Velrox', 'velrox' )
);
?>

<!-- INTRO + STATS -->
<section class="section-padding">
    <div class="container">
        <div class="why-intro-grid">
            <div class="animate-slide-left">
                <div class="section-tag"><?php esc_html_e( 'The Velrox Advantage', 'velrox' ); ?></div>
                <h2 class="section-title">
                    <?php esc_html_e( 'Built for', 'velrox' ); ?>
                    <span class="highlight"><?php esc_html_e( 'Modern International', 'velrox' ); ?></span>
                    <?php esc_html_e( 'Seafood Trade', 'velrox' ); ?>
                </h2>
                <div class="divider"></div>
                <p style="margin-bottom:16px;">
                    <?php esc_html_e( 'In a competitive global seafood market, your trading partner makes all the difference. Velrox was built from the ground up to address the pain points of European seafood buyers working with Asian suppliers.', 'velrox' ); ?>
                </p>
                <p>
                    <?php esc_html_e( 'From documentation headaches to logistics coordination and quality assurance — we manage the complexity so you receive consistent, compliant, quality seafood products on time and at competitive prices.', 'velrox' ); ?>
                </p>
            </div>
            <div class="why-stats-grid animate-slide-right">
                <?php
                $stats = [
                    [ '98%',  __( 'On-time Delivery Rate', 'velrox' ) ],
                    [ '50+',  __( 'European Trade Partners', 'velrox' ) ],
                    [ '200+', __( 'Containers Shipped', 'velrox' ) ],
                    [ '100%', __( 'Compliance Record', 'velrox' ) ],
                ];
                foreach ( $stats as $i => $stat ) :
                ?>
                <div class="why-stat-card animate-fade-up delay-<?php echo esc_attr( $i + 1 ); ?>">
                    <div class="why-stat-num"><?php echo esc_html( $stat[0] ); ?></div>
                    <div class="why-stat-label"><?php echo esc_html( $stat[1] ); ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- KEY ADVANTAGES -->
<section class="section-padding" style="background:var(--grey-bg);">
    <div class="container">
        <div class="section-header centered">
            <div class="section-tag animate-fade-up"><?php esc_html_e( 'Key Advantages', 'velrox' ); ?></div>
            <h2 class="section-title animate-fade-up delay-1">
                <?php esc_html_e( '6 Reasons to Partner with', 'velrox' ); ?>
                <span class="highlight"><?php esc_html_e( 'Velrox', 'velrox' ); ?></span>
            </h2>
        </div>
        <div class="advantages-grid">
            <?php
            $advantages = [
                [ 'globe',       __( 'International Trade Mindset', 'velrox' ),   __( 'International Trade', 'velrox' ),  __( 'Velrox operates with a global perspective, understanding the complexities of cross-border seafood trade, documentation, customs, and regulatory compliance across multiple jurisdictions.', 'velrox' ) ],
                [ 'trending',    __( 'European Market Orientation', 'velrox' ),   __( 'EU Specialists', 'velrox' ),       __( 'Deep understanding of European buyers\' expectations, EU food safety regulations, labeling requirements, and import procedures makes Velrox the ideal gateway for Asian seafood into Europe.', 'velrox' ) ],
                [ 'package',     __( 'Flexible Supply Capabilities', 'velrox' ),  __( 'Scale With You', 'velrox' ),       __( 'Whether you need a trial container or annual supply contracts, Velrox scales to match your procurement needs — offering flexibility in volume, packing formats, and delivery scheduling.', 'velrox' ) ],
                [ 'zap',         __( 'Fast Communication', 'velrox' ),            __( 'Always Responsive', 'velrox' ),    __( 'Our dedicated trade team ensures rapid response times, proactive communication on shipment status, and immediate escalation handling. Your business doesn\'t wait — neither should your supplier.', 'velrox' ) ],
                [ 'users',       __( 'Long-term Partnership Focus', 'velrox' ),   __( 'Partnership First', 'velrox' ),    __( 'We don\'t just look for transactions — we look to build lasting commercial relationships. Our partners benefit from consistent pricing, priority allocation, and dedicated account management.', 'velrox' ) ],
                [ 'shieldcheck', __( 'Quality Commitment', 'velrox' ),            __( 'Zero Compromise', 'velrox' ),      __( 'Every shipment is backed by rigorous quality checks, full documentation, and compliance verification. We put our reputation on the line with every container we ship.', 'velrox' ) ],
            ];
            foreach ( $advantages as $i => $adv ) :
            ?>
            <div class="advantage-card animate-fade-up delay-<?php echo esc_attr( ( $i % 3 ) + 1 ); ?>">
                <div class="adv-tag"><?php echo esc_html( $adv[2] ); ?></div>
                <div class="adv-icon"><?php echo velrox_icon( $adv[0], 28 ); // phpcs:ignore ?></div>
                <h3><?php echo esc_html( $adv[1] ); ?></h3>
                <p><?php echo esc_html( $adv[3] ); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- COMPARISON TABLE -->
<section class="section-padding">
    <div class="container">
        <div class="section-header centered">
            <div class="section-tag animate-fade-up"><?php esc_html_e( 'The Difference', 'velrox' ); ?></div>
            <h2 class="section-title animate-fade-up delay-1">
                <?php esc_html_e( 'Velrox vs.', 'velrox' ); ?>
                <span class="highlight"><?php esc_html_e( 'Typical Suppliers', 'velrox' ); ?></span>
            </h2>
        </div>
        <div class="comparison-table animate-fade-up delay-2">
            <div class="comparison-header">
                <span><?php esc_html_e( 'Feature', 'velrox' ); ?></span>
                <span class="col-velrox"><?php esc_html_e( 'Velrox', 'velrox' ); ?></span>
                <span class="col-other"><?php esc_html_e( 'Typical Supplier', 'velrox' ); ?></span>
            </div>
            <?php
            $rows = [
                [ __( 'EU regulatory expertise', 'velrox' ),              true,  false ],
                [ __( 'Dedicated European account manager', 'velrox' ),   true,  false ],
                [ __( 'Flexible volume options', 'velrox' ),              true,  false ],
                [ __( 'Pre-shipment quality inspection', 'velrox' ),      true,  false ],
                [ __( 'Full documentation support', 'velrox' ),           true,  true  ],
                [ __( 'Real-time shipment tracking', 'velrox' ),          true,  false ],
                [ __( 'Transparent pricing', 'velrox' ),                  true,  false ],
                [ __( 'Long-term contract flexibility', 'velrox' ),       true,  false ],
            ];
            foreach ( $rows as $row ) :
            ?>
            <div class="comparison-row">
                <span class="col-feature"><?php echo esc_html( $row[0] ); ?></span>
                <span class="col-velrox"><?php echo $row[1] ? '✓' : '—'; // phpcs:ignore ?></span>
                <span class="col-other <?php echo $row[2] ? '' : 'col-other-no'; ?>"><?php echo $row[2] ? '✓' : '✕'; // phpcs:ignore ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section-padding" style="background:var(--navy);">
    <div class="container" style="text-align:center;">
        <h2 class="animate-fade-up" style="color:white;margin-bottom:16px;font-family:var(--font-primary);font-size:clamp(26px,3vw,38px);">
            <?php esc_html_e( 'Experience the Velrox Difference', 'velrox' ); ?>
        </h2>
        <p class="animate-fade-up delay-1" style="color:rgba(255,255,255,0.65);margin-bottom:32px;max-width:460px;margin-left:auto;margin-right:auto;">
            <?php esc_html_e( 'Start a conversation and discover how Velrox can transform your seafood procurement.', 'velrox' ); ?>
        </p>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary btn-lg animate-fade-up delay-2">
            <?php esc_html_e( 'Start a Conversation', 'velrox' ); ?>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
    </div>
</section>

<?php get_footer(); ?>
