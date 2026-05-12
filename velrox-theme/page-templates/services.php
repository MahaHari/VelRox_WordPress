<?php
/**
 * Template Name: Services
 */
get_header();

velrox_page_banner(
    __( 'Our Services', 'velrox' ),
    __( 'Comprehensive frozen seafood trade services from sourcing to delivery, built for European market standards.', 'velrox' ),
    'https://images.pexels.com/photos/1072824/pexels-photo-1072824.jpeg?auto=compress&cs=tinysrgb&w=1920&q=80',
    __( 'Services', 'velrox' )
);
?>

<!-- SERVICES DETAIL -->
<section class="section-padding">
    <div class="container">
        <div class="section-header centered">
            <div class="section-tag animate-fade-up"><?php esc_html_e( 'What We Offer', 'velrox' ); ?></div>
            <h2 class="section-title animate-fade-up delay-1">
                <?php esc_html_e( 'Full-Spectrum', 'velrox' ); ?>
                <span class="highlight"><?php esc_html_e( 'Trade Services', 'velrox' ); ?></span>
            </h2>
            <p class="section-subtitle animate-fade-up delay-2">
                <?php esc_html_e( 'Every service we provide is designed to make your frozen seafood procurement smoother, more reliable, and more profitable.', 'velrox' ); ?>
            </p>
        </div>
        <div class="services-detail-grid">
            <?php
            $services = [
                [
                    'fish', __( 'Frozen Seafood Sourcing', 'velrox' ),
                    __( 'We specialize in sourcing premium frozen seafood from certified processing partners across India and global supply chains. Our sourcing team ensures consistent product quality, species availability, and competitive pricing for European buyers.', 'velrox' ),
                    [ __( 'Vannamei shrimp, black tiger shrimp', 'velrox' ), __( 'Squid, cuttlefish, octopus', 'velrox' ), __( 'Fish fillets and value-added products', 'velrox' ), __( 'IQF and block frozen formats', 'velrox' ) ],
                ],
                [
                    'package', __( 'Export Coordination', 'velrox' ),
                    __( 'End-to-end export management covering documentation, regulatory compliance, inspection coordination, and customs clearance. We manage the complexity so you can focus on your business.', 'velrox' ),
                    [ __( 'Export documentation handling', 'velrox' ), __( 'EU health certificate coordination', 'velrox' ), __( 'HACCP and BRC compliance support', 'velrox' ), __( 'Phyto and veterinary certification', 'velrox' ) ],
                ],
                [
                    'truck', __( 'Logistics & Distribution', 'velrox' ),
                    __( 'Our cold-chain logistics network is designed for reliability and efficiency. We coordinate container shipments from Indian ports to major European destinations with full temperature integrity.', 'velrox' ),
                    [ __( 'Reefer container shipping', 'velrox' ), __( 'Port-to-door delivery coordination', 'velrox' ), __( 'Cold warehouse management', 'velrox' ), __( 'Real-time shipment tracking', 'velrox' ) ],
                ],
                [
                    'chart', __( 'Trade Solutions', 'velrox' ),
                    __( 'We offer customized commercial trade solutions that adapt to your procurement cycle, volume requirements, and budget constraints. Flexible arrangements from spot purchases to annual contracts.', 'velrox' ),
                    [ __( 'Spot and contract supply options', 'velrox' ), __( 'Volume-flexible ordering', 'velrox' ), __( 'Custom packing and labeling', 'velrox' ), __( 'Private label support', 'velrox' ) ],
                ],
                [
                    'shield', __( 'Quality & Compliance', 'velrox' ),
                    __( 'Quality is non-negotiable at Velrox. We ensure all products meet EU food safety standards with full documentation trail, inspection records, and third-party certifications.', 'velrox' ),
                    [ __( 'EU import compliance checks', 'velrox' ), __( 'Third-party quality inspection', 'velrox' ), __( 'Allergen and labeling compliance', 'velrox' ), __( 'Certificate of origin coordination', 'velrox' ) ],
                ],
                [
                    'globe', __( 'Market Intelligence', 'velrox' ),
                    __( 'Stay ahead with Velrox market insights. We provide our partners with regular updates on pricing trends, species availability, regulatory changes, and supply chain developments.', 'velrox' ),
                    [ __( 'Seasonal price trend reports', 'velrox' ), __( 'Regulatory update briefings', 'velrox' ), __( 'Supply availability forecasts', 'velrox' ), __( 'Species and product advisory', 'velrox' ) ],
                ],
            ];
            foreach ( $services as $i => $s ) :
            ?>
            <div class="service-detail-card animate-fade-up delay-<?php echo esc_attr( ( $i % 3 ) + 1 ); ?>">
                <div class="sdc-icon"><?php echo velrox_icon( $s[0], 32 ); // phpcs:ignore ?></div>
                <h3 class="sdc-title"><?php echo esc_html( $s[1] ); ?></h3>
                <p class="sdc-desc"><?php echo esc_html( $s[2] ); ?></p>
                <ul class="sdc-features">
                    <?php foreach ( $s[3] as $feature ) : ?>
                    <li><?php echo esc_html( $feature ); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- PROCESS -->
<section class="section-padding" style="background:var(--grey-bg);">
    <div class="container">
        <div class="section-header centered">
            <div class="section-tag animate-fade-up"><?php esc_html_e( 'Our Process', 'velrox' ); ?></div>
            <h2 class="section-title animate-fade-up delay-1">
                <?php esc_html_e( 'How We Work With', 'velrox' ); ?>
                <span class="highlight"><?php esc_html_e( 'You', 'velrox' ); ?></span>
            </h2>
        </div>
        <div class="process-steps">
            <?php
            $steps = [
                [ 'clock',  '01', __( 'Initial Consultation', 'velrox' ), __( 'We begin with understanding your specific requirements, target species, volumes, and delivery timelines.', 'velrox' ) ],
                [ 'fish',   '02', __( 'Sourcing & Quotation', 'velrox' ), __( 'Our team identifies the best available products and processing partners, then provides competitive pricing.', 'velrox' ) ],
                [ 'shield', '03', __( 'Quality Confirmation', 'velrox' ), __( 'Pre-shipment inspection and documentation review ensures the product meets your exact specifications.', 'velrox' ) ],
                [ 'truck',  '04', __( 'Shipment & Delivery', 'velrox' ),  __( 'We coordinate the full logistics chain to ensure on-time, temperature-compliant delivery to your location.', 'velrox' ) ],
            ];
            foreach ( $steps as $i => $step ) :
            ?>
            <div class="process-step animate-fade-up delay-<?php echo esc_attr( $i + 1 ); ?>">
                <div class="ps-number"><?php echo esc_html( $step[1] ); ?></div>
                <div class="ps-icon"><?php echo velrox_icon( $step[0], 20 ); // phpcs:ignore ?></div>
                <h4><?php echo esc_html( $step[2] ); ?></h4>
                <p><?php echo esc_html( $step[3] ); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section-padding" style="background:var(--navy);">
    <div class="container" style="text-align:center;">
        <h2 class="animate-fade-up" style="color:white;margin-bottom:16px;font-family:var(--font-primary);font-size:clamp(26px,3vw,38px);">
            <?php esc_html_e( 'Need a Specific Service?', 'velrox' ); ?>
        </h2>
        <p class="animate-fade-up delay-1" style="color:rgba(255,255,255,0.65);margin-bottom:32px;max-width:460px;margin-left:auto;margin-right:auto;">
            <?php esc_html_e( 'Our team is ready to discuss your requirements and create a tailored trade solution for your business.', 'velrox' ); ?>
        </p>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary btn-lg animate-fade-up delay-2">
            <?php esc_html_e( 'Contact Our Team', 'velrox' ); ?>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
    </div>
</section>

<?php get_footer(); ?>
