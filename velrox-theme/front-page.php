<?php get_header(); ?>

<!-- ============================================================
     HERO CAROUSEL
     ============================================================ -->
<section class="hero-carousel" aria-label="<?php esc_attr_e( 'Hero banner', 'velrox' ); ?>">

    <!-- Slide 1 -->
    <div class="hero-slide">
        <div class="hero-slide-bg">
            <img src="https://images.pexels.com/photos/2226458/pexels-photo-2226458.jpeg?auto=compress&cs=tinysrgb&w=1920&q=80"
                 alt="<?php esc_attr_e( 'Reefer containers at port', 'velrox' ); ?>"
                 loading="eager" fetchpriority="high">
        </div>
        <div class="hero-slide-overlay"></div>
        <div class="hero-content container">
            <div class="hero-text">
                <div class="hero-tag"><span class="tag-dot"></span><?php esc_html_e( 'EU-Compliant Frozen Seafood Supply', 'velrox' ); ?></div>
                <h1 class="hero-title">
                    <?php esc_html_e( 'Reliable Frozen Seafood', 'velrox' ); ?><br>
                    <span><?php esc_html_e( 'Supply for European', 'velrox' ); ?></span><br>
                    <?php esc_html_e( 'Buyers', 'velrox' ); ?>
                </h1>
                <p class="hero-subtitle"><?php esc_html_e( 'Velrox coordinates sourcing, export execution, and cold-chain logistics through trusted seafood processing networks across Asia.', 'velrox' ); ?></p>
                <div class="hero-actions">
                    <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="btn btn-primary btn-lg">
                        <?php esc_html_e( 'Request Product List', 'velrox' ); ?>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-outline btn-lg"><?php esc_html_e( 'Discuss Supply Requirements', 'velrox' ); ?></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Slide 2 -->
    <div class="hero-slide">
        <div class="hero-slide-bg">
            <img src="https://images.pexels.com/photos/3773049/pexels-photo-3773049.jpeg?auto=compress&cs=tinysrgb&w=1920&q=80"
                 alt="<?php esc_attr_e( 'Frozen seafood processing facility', 'velrox' ); ?>"
                 loading="lazy">
        </div>
        <div class="hero-slide-overlay hero-slide-overlay--warm"></div>
        <div class="hero-content container">
            <div class="hero-text">
                <div class="hero-tag"><span class="tag-dot"></span><?php esc_html_e( 'Export-Grade Product Range', 'velrox' ); ?></div>
                <h1 class="hero-title">
                    <?php esc_html_e( 'Certified Frozen Seafood', 'velrox' ); ?><br>
                    <span><?php esc_html_e( 'from Asian Processing', 'velrox' ); ?></span><br>
                    <?php esc_html_e( 'Networks', 'velrox' ); ?>
                </h1>
                <p class="hero-subtitle"><?php esc_html_e( 'Full-container shipments of finfish, cephalopods, and shellfish backed by HACCP-certified supply partners and EU import documentation.', 'velrox' ); ?></p>
                <div class="hero-actions">
                    <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="btn btn-primary btn-lg">
                        <?php esc_html_e( 'View Our Products', 'velrox' ); ?>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn btn-outline btn-lg"><?php esc_html_e( 'About Velrox', 'velrox' ); ?></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Slide 3 -->
    <div class="hero-slide">
        <div class="hero-slide-bg">
            <img src="https://images.pexels.com/photos/906982/pexels-photo-906982.jpeg?auto=compress&cs=tinysrgb&w=1920&q=80"
                 alt="<?php esc_attr_e( 'Cold storage warehouse logistics', 'velrox' ); ?>"
                 loading="lazy">
        </div>
        <div class="hero-slide-overlay hero-slide-overlay--deep"></div>
        <div class="hero-content container">
            <div class="hero-text">
                <div class="hero-tag"><span class="tag-dot"></span><?php esc_html_e( 'Cold-Chain Logistics Coordination', 'velrox' ); ?></div>
                <h1 class="hero-title">
                    <?php esc_html_e( 'End-to-End Export', 'velrox' ); ?><br>
                    <span><?php esc_html_e( 'Coordination to', 'velrox' ); ?></span><br>
                    <?php esc_html_e( 'European Ports', 'velrox' ); ?>
                </h1>
                <p class="hero-subtitle"><?php esc_html_e( 'From procurement to reefer container loading — Velrox manages documentation, logistics, and buyer communication throughout the supply chain.', 'velrox' ); ?></p>
                <div class="hero-actions">
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary btn-lg">
                        <?php esc_html_e( 'Send Your Requirements', 'velrox' ); ?>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn-outline btn-lg"><?php esc_html_e( 'Our Capabilities', 'velrox' ); ?></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel Controls -->
    <button class="hero-prev" aria-label="<?php esc_attr_e( 'Previous slide', 'velrox' ); ?>">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
    </button>
    <button class="hero-next" aria-label="<?php esc_attr_e( 'Next slide', 'velrox' ); ?>">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
    </button>

    <div class="hero-dots">
        <button class="hero-dot" aria-label="<?php esc_attr_e( 'Go to slide 1', 'velrox' ); ?>"></button>
        <button class="hero-dot" aria-label="<?php esc_attr_e( 'Go to slide 2', 'velrox' ); ?>"></button>
        <button class="hero-dot" aria-label="<?php esc_attr_e( 'Go to slide 3', 'velrox' ); ?>"></button>
    </div>

    <div class="scroll-indicator"><div class="scroll-line"></div></div>
</section>

<!-- ============================================================
     TRUST STRIP
     ============================================================ -->
<section class="trust-strip">
    <div class="container-wide">
        <div class="trust-grid">
            <?php
            $trust_items = [
                [ 'shieldcheck', __( 'HACCP-Oriented Supply', 'velrox' ) ],
                [ 'truck',       __( 'Reefer Logistics Coordination', 'velrox' ) ],
                [ 'package',     __( 'Export Documentation Support', 'velrox' ) ],
                [ 'globe',       __( 'Europe-Focused Trade Network', 'velrox' ) ],
                [ 'trending',    __( 'Long-Term Supply Partnerships', 'velrox' ) ],
            ];
            foreach ( $trust_items as $item ) :
            ?>
            <div class="trust-item">
                <div class="trust-icon"><?php echo velrox_icon( $item[0], 18 ); // phpcs:ignore ?></div>
                <span class="trust-label"><?php echo esc_html( $item[1] ); ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================================
     PRODUCT SHOWCASE
     ============================================================ -->
<section class="section-padding products-showcase">
    <div class="container">
        <div class="section-header centered">
            <div class="section-tag animate-fade-up"><?php esc_html_e( 'Product Catalogue', 'velrox' ); ?></div>
            <h2 class="section-title animate-fade-up delay-1">
                <?php esc_html_e( 'Export-Ready Frozen', 'velrox' ); ?>
                <span class="highlight"><?php esc_html_e( 'Seafood Range', 'velrox' ); ?></span>
            </h2>
            <p class="section-subtitle animate-fade-up delay-2">
                <?php esc_html_e( 'A curated selection of our most in-demand products for European importers and wholesalers.', 'velrox' ); ?>
            </p>
        </div>
        <div class="showcase-grid">
            <?php
            $showcase = [
                [
                    'name'   => __( 'Whole Fish', 'velrox' ),
                    'img'    => 'https://images.pexels.com/photos/3296434/pexels-photo-3296434.jpeg?auto=compress&cs=tinysrgb&w=800&q=80',
                    'tags'   => [ 'Export Grade', 'Bulk Packing' ],
                ],
                [
                    'name'   => __( 'Mackerel', 'velrox' ),
                    'img'    => 'https://images.pexels.com/photos/2871757/pexels-photo-2871757.jpeg?auto=compress&cs=tinysrgb&w=800&q=80',
                    'tags'   => [ 'Frozen', 'Container Supply' ],
                ],
                [
                    'name'   => __( 'Tuna Steaks', 'velrox' ),
                    'img'    => 'https://images.pexels.com/photos/1192031/pexels-photo-1192031.jpeg?auto=compress&cs=tinysrgb&w=800&q=80',
                    'tags'   => [ 'Export Grade', 'IQF Frozen' ],
                ],
                [
                    'name'   => __( 'Red Snapper', 'velrox' ),
                    'img'    => 'https://images.pexels.com/photos/1860197/pexels-photo-1860197.jpeg?auto=compress&cs=tinysrgb&w=800&q=80',
                    'tags'   => [ 'Frozen', 'Bulk Packing' ],
                ],
                [
                    'name'   => __( 'Sardines', 'velrox' ),
                    'img'    => 'https://images.pexels.com/photos/3296434/pexels-photo-3296434.jpeg?auto=compress&cs=tinysrgb&w=800&q=80',
                    'tags'   => [ 'Export Grade', 'Container Supply' ],
                ],
                [
                    'name'   => __( 'Frozen Portions', 'velrox' ),
                    'img'    => 'https://images.pexels.com/photos/1267320/pexels-photo-1267320.jpeg?auto=compress&cs=tinysrgb&w=800&q=80',
                    'tags'   => [ 'IQF Frozen', 'Bulk Packing' ],
                ],
            ];
            foreach ( $showcase as $i => $product ) :
            ?>
            <div class="showcase-card animate-fade-up delay-<?php echo esc_attr( $i + 1 ); ?>">
                <div class="showcase-img">
                    <img src="<?php echo esc_url( $product['img'] ); ?>"
                         alt="<?php echo esc_attr( $product['name'] ); ?>"
                         loading="lazy">
                    <div class="showcase-overlay"></div>
                </div>
                <div class="showcase-body">
                    <h3 class="showcase-name"><?php echo esc_html( $product['name'] ); ?></h3>
                    <div class="showcase-tags">
                        <?php foreach ( $product['tags'] as $tag ) : ?>
                        <span class="showcase-tag"><?php echo esc_html( $tag ); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="showcase-footer animate-fade-up">
            <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="btn btn-outline-dark">
                <?php esc_html_e( 'View Full Product Range', 'velrox' ); ?>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- ============================================================
     ABOUT VELROX
     ============================================================ -->
<section class="section-padding" style="background:var(--white);">
    <div class="container">
        <div class="about-home-grid">
            <div class="animate-slide-left">
                <div class="about-img-wrapper">
                    <img src="https://images.pexels.com/photos/1008155/pexels-photo-1008155.jpeg?auto=compress&cs=tinysrgb&w=800&q=80"
                         alt="<?php esc_attr_e( 'Frozen seafood export operations', 'velrox' ); ?>" loading="lazy">
                    <div class="about-badge">
                        <?php echo velrox_icon( 'anchor', 20 ); // phpcs:ignore ?>
                        <span><?php esc_html_e( 'Export Operations', 'velrox' ); ?></span>
                    </div>
                </div>
            </div>
            <div class="animate-slide-right">
                <div class="section-tag"><?php esc_html_e( 'About Velrox', 'velrox' ); ?></div>
                <h2 class="section-title">
                    <?php esc_html_e( 'A Dedicated Frozen Seafood', 'velrox' ); ?>
                    <span class="highlight"><?php esc_html_e( 'Supply & Export Operator', 'velrox' ); ?></span>
                </h2>
                <div class="divider"></div>
                <p style="margin-bottom:16px;">
                    <?php esc_html_e( 'Velrox operates as a procurement coordinator and export facilitator — sourcing frozen seafood from certified processing partners across India and Asia, and coordinating full-container shipments to European buyers.', 'velrox' ); ?>
                </p>
                <p>
                    <?php esc_html_e( 'We work with importers, wholesalers, and distribution companies across Europe, managing supply arrangements from product specification through to port delivery.', 'velrox' ); ?>
                </p>
                <div class="about-checklist" style="margin:24px 0 32px;">
                    <?php
                    $checks = [
                        __( 'Reefer container logistics', 'velrox' ),
                        __( 'Back-to-back documentation', 'velrox' ),
                        __( 'Multi-origin sourcing network', 'velrox' ),
                        __( 'EU import compliance support', 'velrox' ),
                    ];
                    foreach ( $checks as $check ) :
                    ?>
                    <div class="check-item"><?php echo esc_html( $check ); ?></div>
                    <?php endforeach; ?>
                </div>
                <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn btn-outline-dark">
                    <?php esc_html_e( 'Our Supply Capabilities', 'velrox' ); ?>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     HOW VELROX OPERATES — SERVICE CARDS
     ============================================================ -->
<section class="section-padding services-section">
    <div class="container">
        <div class="section-header centered">
            <div class="section-tag animate-fade-up"><?php esc_html_e( 'Our Process', 'velrox' ); ?></div>
            <h2 class="section-title animate-fade-up delay-1">
                <?php esc_html_e( 'How Velrox', 'velrox' ); ?>
                <span class="highlight"><?php esc_html_e( 'Coordinates Your Supply', 'velrox' ); ?></span>
            </h2>
            <p class="section-subtitle animate-fade-up delay-2">
                <?php esc_html_e( 'From sourcing to port delivery — a structured process built around your requirements.', 'velrox' ); ?>
            </p>
        </div>
        <div class="services-home-grid">
            <?php
            $services = [
                [ 'anchor',      '01', __( 'Procurement Coordination', 'velrox' ),    __( 'Buyer requirements aligned with pre-qualified HACCP-certified processing partners across our Asian supply network.', 'velrox' ) ],
                [ 'shieldcheck', '02', __( 'Quality & Documentation', 'velrox' ),     __( 'Health certificates, EU phytosanitary requirements, and all export documentation coordinated prior to shipment.', 'velrox' ) ],
                [ 'truck',       '03', __( 'Cold Chain Logistics', 'velrox' ),        __( 'Reefer container booking, temperature monitoring, and port-to-port coordination to your European destination.', 'velrox' ) ],
                [ 'zap',         '04', __( 'Buyer Communication', 'velrox' ),         __( 'A dedicated point of contact for pricing, availability, documentation, and real-time shipment updates.', 'velrox' ) ],
            ];
            foreach ( $services as $i => $svc ) :
            ?>
            <div class="service-card animate-fade-up delay-<?php echo esc_attr( $i + 1 ); ?>">
                <div class="service-step-num"><?php echo esc_html( $svc[1] ); ?></div>
                <div class="service-icon"><?php echo velrox_icon( $svc[0], 28 ); // phpcs:ignore ?></div>
                <h3 class="service-title"><?php echo esc_html( $svc[2] ); ?></h3>
                <p class="service-desc"><?php echo esc_html( $svc[3] ); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================================
     SUPPLY ADVANTAGES
     ============================================================ -->
<section class="section-padding" style="background:var(--white);">
    <div class="container">
        <div class="strengths-grid">
            <div class="animate-slide-left">
                <div class="section-tag"><?php esc_html_e( 'Supply Advantages', 'velrox' ); ?></div>
                <h2 class="section-title">
                    <?php esc_html_e( 'Built for Serious', 'velrox' ); ?>
                    <span class="highlight"><?php esc_html_e( 'Seafood Procurement', 'velrox' ); ?></span>
                </h2>
                <div class="divider"></div>
                <p class="section-subtitle">
                    <?php esc_html_e( 'Structured sourcing, reliable documentation, and logistics coordination — purpose-built for European buyers.', 'velrox' ); ?>
                </p>
                <a href="<?php echo esc_url( home_url( '/why-velrox' ) ); ?>" class="btn btn-primary" style="margin-top:32px;">
                    <?php esc_html_e( 'View Supply Capabilities', 'velrox' ); ?>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
            </div>
            <div class="strengths-items">
                <?php
                $strengths = [
                    [ 'globe',  __( 'Europe-Focused Supply Network', 'velrox' ),    __( 'Sourcing and logistics structured specifically around EU import requirements and buyer expectations.', 'velrox' ) ],
                    [ 'truck',  __( 'Flexible Shipment Structures', 'velrox' ),     __( 'FCL and LCL options available, from trial orders to full annual container supply programmes.', 'velrox' ) ],
                    [ 'zap',    __( 'Responsive Communication', 'velrox' ),         __( 'Dedicated contact managing pricing, availability, documentation, and delivery at every stage.', 'velrox' ) ],
                    [ 'anchor', __( 'Multi-Origin Procurement', 'velrox' ),         __( 'India, Vietnam, and Indonesia sourcing networks for product diversity and supply continuity.', 'velrox' ) ],
                ];
                foreach ( $strengths as $i => $s ) :
                ?>
                <div class="strength-item animate-fade-up delay-<?php echo esc_attr( $i + 1 ); ?>">
                    <div class="strength-icon"><?php echo velrox_icon( $s[0], 24 ); // phpcs:ignore ?></div>
                    <div>
                        <div class="strength-title"><?php echo esc_html( $s[1] ); ?></div>
                        <p class="strength-desc"><?php echo esc_html( $s[2] ); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     SUPPLY EXECUTION (DARK SECTION)
     ============================================================ -->
<section class="section-padding approach-section">
    <div class="approach-bg">
        <img src="https://images.pexels.com/photos/3601425/pexels-photo-3601425.jpeg?auto=compress&cs=tinysrgb&w=1920&q=80"
             alt="<?php esc_attr_e( 'Container port logistics', 'velrox' ); ?>" loading="lazy">
        <div class="approach-overlay"></div>
    </div>
    <div class="container">
        <div class="approach-content">
            <div class="section-tag animate-fade-up" style="background:rgba(0,166,203,0.15);border-color:rgba(0,166,203,0.30);color:#00A6CB;">
                <?php esc_html_e( 'Supply Execution', 'velrox' ); ?>
            </div>
            <h2 class="section-title animate-fade-up delay-1" style="color:white;">
                <?php esc_html_e( 'How We Execute', 'velrox' ); ?>
                <span class="highlight"><?php esc_html_e( 'Each Shipment', 'velrox' ); ?></span>
            </h2>
            <div class="approach-steps">
                <?php
                $steps = [
                    [ '01', __( 'Buyer Requirement Review', 'velrox' ),           __( 'Product specs, packaging, labelling, volume, and delivery terms confirmed before sourcing begins.', 'velrox' ) ],
                    [ '02', __( 'Supplier Allocation & Quality Check', 'velrox' ), __( 'Sourcing from pre-qualified HACCP-certified partners with pre-shipment inspection coordination.', 'velrox' ) ],
                    [ '03', __( 'Export & Documentation Management', 'velrox' ),   __( 'BL, health certificates, phytosanitary, EUR.1, and all EU customs documentation handled end-to-end.', 'velrox' ) ],
                    [ '04', __( 'Reefer Logistics & Delivery', 'velrox' ),         __( 'Container booking, temperature-controlled transport, and coordination to your European destination port.', 'velrox' ) ],
                ];
                foreach ( $steps as $i => $step ) :
                ?>
                <div class="approach-step animate-fade-up delay-<?php echo esc_attr( $i + 1 ); ?>">
                    <div class="step-num"><?php echo esc_html( $step[0] ); ?></div>
                    <div class="step-content">
                        <h4><?php echo esc_html( $step[1] ); ?></h4>
                        <p><?php echo esc_html( $step[2] ); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     COMMERCIAL TRADE CAPABILITIES
     ============================================================ -->
<section class="section-padding capabilities-section">
    <div class="container">
        <div class="section-header centered">
            <div class="section-tag animate-fade-up" style="background:rgba(0,166,203,0.15);border-color:rgba(0,166,203,0.30);color:#00A6CB;"><?php esc_html_e( 'B2B Supply Structure', 'velrox' ); ?></div>
            <h2 class="section-title animate-fade-up delay-1" style="color:white;">
                <?php esc_html_e( 'Commercial Trade', 'velrox' ); ?>
                <span class="highlight"><?php esc_html_e( 'Capabilities', 'velrox' ); ?></span>
            </h2>
        </div>
        <div class="capabilities-grid">
            <?php
            $caps = [
                [ 'globe',       __( 'CIF Europe Terms', 'velrox' ),                   __( 'Cost, insurance, and freight to European ports.', 'velrox' ) ],
                [ 'package',     __( 'Consolidated Container Shipments', 'velrox' ),    __( 'FCL and LCL options for all order volumes.', 'velrox' ) ],
                [ 'anchor',      __( 'Buyer-Specific Packing', 'velrox' ),              __( 'Private label and custom packaging available.', 'velrox' ) ],
                [ 'shieldcheck', __( 'Back-to-Back Documentation', 'velrox' ),          __( 'Full EU import compliance documentation handled.', 'velrox' ) ],
                [ 'trending',    __( 'CAD / LC Coordination', 'velrox' ),               __( 'Flexible payment terms for established buyers.', 'velrox' ) ],
                [ 'zap',         __( 'Multi-Buyer Shipment Structuring', 'velrox' ),    __( 'Consolidated loads for multiple buyer accounts.', 'velrox' ) ],
            ];
            foreach ( $caps as $i => $cap ) :
            ?>
            <div class="cap-card animate-fade-up delay-<?php echo esc_attr( $i + 1 ); ?>">
                <div class="cap-icon"><?php echo velrox_icon( $cap[0], 24 ); // phpcs:ignore ?></div>
                <div class="cap-body">
                    <div class="cap-title"><?php echo esc_html( $cap[1] ); ?></div>
                    <p class="cap-desc"><?php echo esc_html( $cap[2] ); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================================
     WHY VELROX
     ============================================================ -->
<section class="section-padding" style="background:var(--white);">
    <div class="container">
        <div class="section-header centered">
            <div class="section-tag animate-fade-up"><?php esc_html_e( 'Why Velrox', 'velrox' ); ?></div>
            <h2 class="section-title animate-fade-up delay-1">
                <?php esc_html_e( 'What Makes Velrox a', 'velrox' ); ?>
                <span class="highlight"><?php esc_html_e( 'Reliable Supply Partner', 'velrox' ); ?></span>
            </h2>
            <p class="section-subtitle animate-fade-up delay-2">
                <?php esc_html_e( 'Purpose-built for European buyers who need consistent supply, clear communication, and commercial flexibility.', 'velrox' ); ?>
            </p>
        </div>
        <div class="why-grid">
            <?php
            $why_cards = [
                [ 'globe',    __( 'Europe-Focused Supply', 'velrox' ),      __( 'All sourcing, documentation, and logistics structured around EU import requirements.', 'velrox' ) ],
                [ 'package',  __( 'Flexible Volume Options', 'velrox' ),    __( 'Trial shipments to multi-container annual programmes — matched to your procurement cycle.', 'velrox' ) ],
                [ 'zap',      __( 'Single Point of Contact', 'velrox' ),    __( 'One dedicated coordinator from pricing through to port arrival.', 'velrox' ) ],
                [ 'shield',   __( 'Transparent Operations', 'velrox' ),     __( 'Open communication on pricing, lead times, and shipment status at every stage.', 'velrox' ) ],
                [ 'trending', __( 'Long-Term Supply Approach', 'velrox' ),  __( 'Built for repeat business and growing supply relationships — not one-off transactions.', 'velrox' ) ],
            ];
            foreach ( $why_cards as $i => $card ) :
            ?>
            <div class="why-card animate-fade-up delay-<?php echo esc_attr( $i + 1 ); ?>">
                <div class="why-icon"><?php echo velrox_icon( $card[0], 22 ); // phpcs:ignore ?></div>
                <h4><?php echo esc_html( $card[1] ); ?></h4>
                <p><?php echo esc_html( $card[2] ); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================================
     SUPPLY NETWORK
     ============================================================ -->
<section class="section-padding" style="background:var(--grey-bg);">
    <div class="container">
        <div class="global-inner animate-fade-up">
            <div class="global-bg">
                <img src="https://images.pexels.com/photos/1117210/pexels-photo-1117210.jpeg?auto=compress&cs=tinysrgb&w=1200&q=80"
                     alt="<?php esc_attr_e( 'Container shipping at port', 'velrox' ); ?>" loading="lazy">
            </div>
            <div class="global-overlay"></div>
            <div class="global-content">
                <div class="section-tag" style="background:rgba(0,166,203,0.15);border-color:rgba(0,166,203,0.30);">
                    <?php esc_html_e( 'Supply Network', 'velrox' ); ?>
                </div>
                <h2><?php esc_html_e( 'Connecting Asian Supply with European Demand', 'velrox' ); ?></h2>
                <p><?php esc_html_e( 'Velrox operates across established seafood processing networks in India, Vietnam, and Indonesia — coordinating supply for European importers, wholesalers, and distribution companies.', 'velrox' ); ?></p>
                <div class="global-tags">
                    <div class="global-tag"><?php echo velrox_icon( 'mappin', 18 ); // phpcs:ignore ?> <span><?php esc_html_e( 'India / Vietnam / Indonesia', 'velrox' ); ?></span></div>
                    <div class="global-tag"><?php echo velrox_icon( 'truck', 18 ); // phpcs:ignore ?> <span><?php esc_html_e( 'Reefer Container Export', 'velrox' ); ?></span></div>
                    <div class="global-tag"><?php echo velrox_icon( 'globe', 18 ); // phpcs:ignore ?> <span><?php esc_html_e( 'EU Port Destinations', 'velrox' ); ?></span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     CTA SECTION
     ============================================================ -->
<section class="cta-section">
    <div class="container">
        <div class="cta-inner animate-fade-up">
            <h2><?php esc_html_e( 'Looking for a Reliable Frozen Seafood Supplier?', 'velrox' ); ?></h2>
            <p><?php esc_html_e( 'Send us your product requirements and we will respond with availability, specifications, and pricing within 24 hours.', 'velrox' ); ?></p>
            <div class="cta-actions">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary btn-lg">
                    <?php esc_html_e( 'Send Your Requirements', 'velrox' ); ?>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
                <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="btn btn-outline btn-lg">
                    <?php esc_html_e( 'View Product Range', 'velrox' ); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
