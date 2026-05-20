<?php get_header(); ?>

<!-- ============================================================
     HERO CAROUSEL
     ============================================================ -->
<section class="hero-carousel" aria-label="<?php esc_attr_e( 'Hero banner', 'velrox' ); ?>">

    <!-- Slide 1 — Reliable Global Seafood Trading -->
    <div class="hero-slide">
        <div class="hero-slide-bg">
            <img src="https://images.pexels.com/photos/1619838/pexels-photo-1619838.jpeg?auto=compress&cs=tinysrgb&w=1920&q=80"
                 alt="<?php esc_attr_e( 'Global seafood trading vessel at sea', 'velrox' ); ?>"
                 loading="eager" fetchpriority="high">
        </div>
        <div class="hero-slide-overlay"></div>
        <div class="hero-content container">
            <div class="hero-text">
                <div class="hero-tag"><span class="tag-dot"></span><?php esc_html_e( 'Global Seafood Trading', 'velrox' ); ?></div>
                <h1 class="hero-title">
                    <?php esc_html_e( 'Reliable Global', 'velrox' ); ?><br>
                    <span><?php esc_html_e( 'Seafood Trading', 'velrox' ); ?></span><br>
                    <?php esc_html_e( 'Solutions', 'velrox' ); ?>
                </h1>
                <p class="hero-subtitle"><?php esc_html_e( 'Connecting international seafood supply with European market standards through trust, logistics, and long-term partnerships.', 'velrox' ); ?></p>
                <div class="hero-actions">
                    <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn-primary btn-lg">
                        <?php esc_html_e( 'Explore Services', 'velrox' ); ?>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-outline btn-lg"><?php esc_html_e( 'Contact Us', 'velrox' ); ?></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Slide 2 — Export-Quality Frozen Seafood -->
    <div class="hero-slide">
        <div class="hero-slide-bg">
            <img src="https://images.pexels.com/photos/3376799/pexels-photo-3376799.jpeg?auto=compress&cs=tinysrgb&w=1920&q=80"
                 alt="<?php esc_attr_e( 'Premium export-quality frozen seafood', 'velrox' ); ?>"
                 loading="lazy">
        </div>
        <div class="hero-slide-overlay hero-slide-overlay--warm"></div>
        <div class="hero-content container">
            <div class="hero-text">
                <div class="hero-tag"><span class="tag-dot"></span><?php esc_html_e( 'Export Quality Assured', 'velrox' ); ?></div>
                <h1 class="hero-title">
                    <?php esc_html_e( 'Premium Frozen Seafood', 'velrox' ); ?><br>
                    <span><?php esc_html_e( 'for European', 'velrox' ); ?></span><br>
                    <?php esc_html_e( 'Markets', 'velrox' ); ?>
                </h1>
                <p class="hero-subtitle"><?php esc_html_e( "HACCP-certified sourcing from India's finest processing facilities, delivering consistent quality and full EU food safety compliance.", 'velrox' ); ?></p>
                <div class="hero-actions">
                    <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="btn btn-primary btn-lg">
                        <?php esc_html_e( 'Our Products', 'velrox' ); ?>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn btn-outline btn-lg"><?php esc_html_e( 'About Velrox', 'velrox' ); ?></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Slide 3 — Global Trade & Logistics Partner -->
    <div class="hero-slide">
        <div class="hero-slide-bg">
            <img src="https://images.pexels.com/photos/1117211/pexels-photo-1117211.jpeg?auto=compress&cs=tinysrgb&w=1920&q=80"
                 alt="<?php esc_attr_e( 'Global shipping logistics and trade', 'velrox' ); ?>"
                 loading="lazy">
        </div>
        <div class="hero-slide-overlay hero-slide-overlay--deep"></div>
        <div class="hero-content container">
            <div class="hero-text">
                <div class="hero-tag"><span class="tag-dot"></span><?php esc_html_e( 'International Trade Partner', 'velrox' ); ?></div>
                <h1 class="hero-title">
                    <?php esc_html_e( 'Your Trusted Partner', 'velrox' ); ?><br>
                    <span><?php esc_html_e( 'in Global', 'velrox' ); ?></span><br>
                    <?php esc_html_e( 'Seafood Trade', 'velrox' ); ?>
                </h1>
                <p class="hero-subtitle"><?php esc_html_e( 'End-to-end logistics, transparent trade practices, and dedicated account support — from source to European ports, reliably delivered.', 'velrox' ); ?></p>
                <div class="hero-actions">
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary btn-lg">
                        <?php esc_html_e( 'Start a Conversation', 'velrox' ); ?>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn-outline btn-lg"><?php esc_html_e( 'Our Services', 'velrox' ); ?></a>
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

    <!-- Pagination Dots -->
    <div class="hero-dots">
        <button class="hero-dot" aria-label="<?php esc_attr_e( 'Go to slide 1', 'velrox' ); ?>"></button>
        <button class="hero-dot" aria-label="<?php esc_attr_e( 'Go to slide 2', 'velrox' ); ?>"></button>
        <button class="hero-dot" aria-label="<?php esc_attr_e( 'Go to slide 3', 'velrox' ); ?>"></button>
    </div>

    <div class="scroll-indicator"><div class="scroll-line"></div></div>
</section>

<!-- ============================================================
     STATS BAR
     ============================================================ -->
<section class="stats-bar">
    <div class="container-wide">
        <div class="stats-grid">
            <?php
            $stats = [
                [ '10+',  __( 'Years Experience', 'velrox' ) ],
                [ '50+',  __( 'Trading Partners', 'velrox' ) ],
                [ '20+',  __( 'European Markets', 'velrox' ) ],
                [ '100%', __( 'Quality Assured', 'velrox' ) ],
            ];
            foreach ( $stats as $stat ) :
            ?>
            <div class="stat-item animate-fade-up">
                <span class="stat-num"><?php echo esc_html( $stat[0] ); ?></span>
                <span class="stat-label"><?php echo esc_html( $stat[1] ); ?></span>
            </div>
            <?php endforeach; ?>
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
                    <img src="https://images.pexels.com/photos/3766111/pexels-photo-3766111.jpeg?auto=compress&cs=tinysrgb&w=800&q=80"
                         alt="<?php esc_attr_e( 'Seafood trading operations', 'velrox' ); ?>" loading="lazy">
                    <div class="about-badge">
                        <?php echo velrox_icon( 'fish', 20 ); // phpcs:ignore ?>
                        <span><?php esc_html_e( 'Trusted Since 2010', 'velrox' ); ?></span>
                    </div>
                </div>
            </div>
            <div class="animate-slide-right">
                <div class="section-tag"><?php esc_html_e( 'About Velrox', 'velrox' ); ?></div>
                <h2 class="section-title">
                    <?php esc_html_e( 'Bridging Global Supply with', 'velrox' ); ?>
                    <span class="highlight"><?php esc_html_e( 'European Standards', 'velrox' ); ?></span>
                </h2>
                <div class="divider"></div>
                <p style="margin-bottom:16px;">
                    <?php esc_html_e( 'At Velrox, we connect global seafood supply with European market standards through reliable sourcing, transparent trade, and long-term partnerships.', 'velrox' ); ?>
                </p>
                <p>
                    <?php esc_html_e( 'Founded with a focus on international frozen seafood trading, Velrox works closely with processing partners and logistics networks to deliver consistent quality products to importers, wholesalers, distributors, and food service buyers across Europe.', 'velrox' ); ?>
                </p>
                <div class="about-checklist" style="margin:24px 0 32px;">
                    <?php
                    $checks = [
                        __( 'Certified processing partners', 'velrox' ),
                        __( 'EU food safety compliance', 'velrox' ),
                        __( 'Transparent trade practices', 'velrox' ),
                        __( 'Dedicated account support', 'velrox' ),
                    ];
                    foreach ( $checks as $check ) :
                    ?>
                    <div class="check-item"><?php echo esc_html( $check ); ?></div>
                    <?php endforeach; ?>
                </div>
                <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn btn-outline-dark">
                    <?php esc_html_e( 'Learn More About Us', 'velrox' ); ?>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     WHAT WE DO — SERVICE CARDS
     ============================================================ -->
<section class="section-padding services-section">
    <div class="container">
        <div class="section-header centered">
            <div class="section-tag animate-fade-up"><?php esc_html_e( 'What We Do', 'velrox' ); ?></div>
            <h2 class="section-title animate-fade-up delay-1">
                <?php esc_html_e( 'Comprehensive', 'velrox' ); ?>
                <span class="highlight"><?php esc_html_e( 'Seafood Trade', 'velrox' ); ?></span>
                <?php esc_html_e( 'Services', 'velrox' ); ?>
            </h2>
            <p class="section-subtitle animate-fade-up delay-2">
                <?php esc_html_e( 'From sourcing to logistics, we provide end-to-end solutions for your frozen seafood procurement needs.', 'velrox' ); ?>
            </p>
        </div>
        <div class="services-home-grid">
            <?php
            $services = [
                [ 'fish',    __( 'Frozen Seafood Sourcing', 'velrox' ),     __( 'Direct access to premium frozen seafood from certified processing partners across global supply chains.', 'velrox' ) ],
                [ 'package', __( 'Export Coordination', 'velrox' ),         __( 'End-to-end export management ensuring compliance with international trade regulations and documentation.', 'velrox' ) ],
                [ 'truck',   __( 'Logistics & Distribution', 'velrox' ),    __( 'Container logistics and cold-chain distribution networks optimized for European market delivery.', 'velrox' ) ],
                [ 'chart',   __( 'Customized Trade Solutions', 'velrox' ),  __( 'Customized commercial trade solutions tailored to the specific needs of importers and wholesalers.', 'velrox' ) ],
            ];
            foreach ( $services as $i => $svc ) :
            ?>
            <div class="service-card animate-fade-up delay-<?php echo esc_attr( $i + 1 ); ?>">
                <div class="service-icon"><?php echo velrox_icon( $svc[0], 28 ); // phpcs:ignore ?></div>
                <h3 class="service-title"><?php echo esc_html( $svc[1] ); ?></h3>
                <p class="service-desc"><?php echo esc_html( $svc[2] ); ?></p>
                <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="service-link">
                    <?php esc_html_e( 'Learn more', 'velrox' ); ?>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================================
     OUR STRENGTHS
     ============================================================ -->
<section class="section-padding" style="background:var(--white);">
    <div class="container">
        <div class="strengths-grid">
            <div class="animate-slide-left">
                <div class="section-tag"><?php esc_html_e( 'Our Strengths', 'velrox' ); ?></div>
                <h2 class="section-title">
                    <?php esc_html_e( 'Why the Industry', 'velrox' ); ?>
                    <span class="highlight"><?php esc_html_e( 'Trusts Velrox', 'velrox' ); ?></span>
                </h2>
                <div class="divider"></div>
                <p class="section-subtitle">
                    <?php esc_html_e( 'Built on decades of experience in international seafood trade, our capabilities set us apart in the European market.', 'velrox' ); ?>
                </p>
                <a href="<?php echo esc_url( home_url( '/why-velrox' ) ); ?>" class="btn btn-primary" style="margin-top:32px;">
                    <?php esc_html_e( 'Why Choose Us', 'velrox' ); ?>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
            </div>
            <div class="strengths-items">
                <?php
                $strengths = [
                    [ 'anchor',      __( 'Direct Sourcing from India', 'velrox' ),       __( 'Strong established relationships with certified processing partners in India\'s seafood industry.', 'velrox' ) ],
                    [ 'globe',       __( 'European Logistics Network', 'velrox' ),        __( 'Deep knowledge of European import standards, cold-chain requirements, and distribution channels.', 'velrox' ) ],
                    [ 'zap',         __( 'Commercial Flexibility', 'velrox' ),            __( 'Adaptable commercial terms and supply arrangements to match your business requirements.', 'velrox' ) ],
                    [ 'shieldcheck', __( 'Quality & Compliance Commitment', 'velrox' ),   __( 'Rigorous quality standards and full compliance with EU food safety and import regulations.', 'velrox' ) ],
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
     OUR APPROACH
     ============================================================ -->
<section class="section-padding approach-section">
    <div class="approach-bg">
        <img src="https://images.pexels.com/photos/1117211/pexels-photo-1117211.jpeg?auto=compress&cs=tinysrgb&w=1920&q=80"
             alt="<?php esc_attr_e( 'Ocean shipping', 'velrox' ); ?>" loading="lazy">
        <div class="approach-overlay"></div>
    </div>
    <div class="container">
        <div class="approach-content">
            <div class="section-tag animate-fade-up" style="background:rgba(0,166,203,0.15);border-color:rgba(0,166,203,0.30);color:#00A6CB;">
                <?php esc_html_e( 'Our Approach', 'velrox' ); ?>
            </div>
            <h2 class="section-title animate-fade-up delay-1" style="color:white;">
                <?php esc_html_e( 'How We Deliver', 'velrox' ); ?>
                <span class="highlight"><?php esc_html_e( 'Excellence', 'velrox' ); ?></span>
            </h2>
            <div class="approach-steps">
                <?php
                $steps = [
                    [ '01', __( 'Reliable Sourcing', 'velrox' ),           __( 'We maintain strong relationships with certified processing partners, ensuring consistent product availability and quality.', 'velrox' ) ],
                    [ '02', __( 'Efficient Logistics', 'velrox' ),          __( 'Our cold-chain logistics network ensures your seafood arrives in perfect condition, on time, every time.', 'velrox' ) ],
                    [ '03', __( 'Competitive Pricing', 'velrox' ),          __( 'Direct sourcing relationships and operational efficiency allow us to offer market-competitive pricing structures.', 'velrox' ) ],
                    [ '04', __( 'Long-term Relationships', 'velrox' ),      __( 'We grow with our partners, building lasting commercial relationships through trust, transparency, and consistent delivery.', 'velrox' ) ],
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
     VISION & MISSION PREVIEW
     ============================================================ -->
<section class="section-padding" style="background:var(--grey-bg);">
    <div class="container">
        <div class="section-header centered">
            <div class="section-tag animate-fade-up"><?php esc_html_e( 'Vision & Mission', 'velrox' ); ?></div>
            <h2 class="section-title animate-fade-up delay-1">
                <?php esc_html_e( 'Guided by', 'velrox' ); ?>
                <span class="highlight"><?php esc_html_e( 'Purpose', 'velrox' ); ?></span>
            </h2>
        </div>
        <div class="vm-grid">
            <div class="vm-card vm-vision animate-slide-left">
                <div class="vm-icon"><?php echo velrox_icon( 'globe', 32 ); // phpcs:ignore ?></div>
                <h3><?php esc_html_e( 'Our Vision', 'velrox' ); ?></h3>
                <p><?php esc_html_e( 'To become a leading international seafood trading company known for reliability, quality, and sustainable supply chain excellence across European markets.', 'velrox' ); ?></p>
                <a href="<?php echo esc_url( home_url( '/vision-mission' ) ); ?>" class="vm-link"><?php esc_html_e( 'Read More', 'velrox' ); ?></a>
            </div>
            <div class="vm-card vm-mission animate-slide-right">
                <div class="vm-icon"><?php echo velrox_icon( 'anchor', 32 ); // phpcs:ignore ?></div>
                <h3><?php esc_html_e( 'Our Mission', 'velrox' ); ?></h3>
                <p><?php esc_html_e( 'To bridge global seafood supply with European market standards by delivering transparent, efficient, and reliable trade partnerships that create lasting value for all stakeholders.', 'velrox' ); ?></p>
                <a href="<?php echo esc_url( home_url( '/vision-mission' ) ); ?>" class="vm-link"><?php esc_html_e( 'Read More', 'velrox' ); ?></a>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     WHY VELROX HIGHLIGHTS
     ============================================================ -->
<section class="section-padding" style="background:var(--white);">
    <div class="container">
        <div class="section-header centered">
            <div class="section-tag animate-fade-up"><?php esc_html_e( 'Why Velrox', 'velrox' ); ?></div>
            <h2 class="section-title animate-fade-up delay-1">
                <?php esc_html_e( 'The Velrox', 'velrox' ); ?>
                <span class="highlight"><?php esc_html_e( 'Advantage', 'velrox' ); ?></span>
            </h2>
            <p class="section-subtitle animate-fade-up delay-2">
                <?php esc_html_e( 'We combine industry expertise with a client-first approach to deliver measurable value to every partner.', 'velrox' ); ?>
            </p>
        </div>
        <div class="why-grid">
            <?php
            $why_cards = [
                [ 'globe',    __( 'International Trade Mindset', 'velrox' ),   __( 'Built for cross-border trade with deep expertise in navigating global seafood markets.', 'velrox' ) ],
                [ 'trending', __( 'European Market Orientation', 'velrox' ),   __( 'Specialized understanding of European buyer expectations, certifications, and regulations.', 'velrox' ) ],
                [ 'package',  __( 'Flexible Supply Capabilities', 'velrox' ),  __( 'Volume flexibility from trial orders to full container loads to match your procurement cycle.', 'velrox' ) ],
                [ 'zap',      __( 'Fast Communication', 'velrox' ),            __( 'Dedicated team ensuring rapid response and transparent communication at every step.', 'velrox' ) ],
                [ 'users',    __( 'Long-term Partnership Focus', 'velrox' ),   __( 'We invest in relationships, not transactions — growing together with our trading partners.', 'velrox' ) ],
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
     GLOBAL TRADE SECTION
     ============================================================ -->
<section class="section-padding" style="background:var(--grey-bg);">
    <div class="container">
        <div class="global-inner animate-fade-up">
            <div class="global-bg">
                <img src="https://images.pexels.com/photos/1072824/pexels-photo-1072824.jpeg?auto=compress&cs=tinysrgb&w=1200&q=80"
                     alt="<?php esc_attr_e( 'Global shipping', 'velrox' ); ?>" loading="lazy">
            </div>
            <div class="global-overlay"></div>
            <div class="global-content">
                <div class="section-tag" style="background:rgba(0,166,203,0.15);border-color:rgba(0,166,203,0.30);">
                    <?php esc_html_e( 'Global Reach', 'velrox' ); ?>
                </div>
                <h2><?php esc_html_e( 'Connecting Supply Chains Across Continents', 'velrox' ); ?></h2>
                <p><?php esc_html_e( 'From the processing facilities in South Asia to the ports of Northern Europe, Velrox manages the entire trade journey to ensure your seafood arrives with quality and precision.', 'velrox' ); ?></p>
                <div class="global-tags">
                    <div class="global-tag"><?php echo velrox_icon( 'mappin', 18 ); // phpcs:ignore ?> <span><?php esc_html_e( 'India Origin Sourcing', 'velrox' ); ?></span></div>
                    <div class="global-tag"><?php echo velrox_icon( 'truck', 18 ); // phpcs:ignore ?> <span><?php esc_html_e( 'EU Port Delivery', 'velrox' ); ?></span></div>
                    <div class="global-tag"><?php echo velrox_icon( 'shieldcheck', 18 ); // phpcs:ignore ?> <span><?php esc_html_e( 'HACCP Compliant', 'velrox' ); ?></span></div>
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
            <h2><?php esc_html_e( 'Ready to Start a Conversation?', 'velrox' ); ?></h2>
            <p><?php esc_html_e( 'Reach out to discuss your seafood sourcing requirements and discover how Velrox can support your business.', 'velrox' ); ?></p>
            <div class="cta-actions">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary btn-lg">
                    <?php esc_html_e( 'Get In Touch', 'velrox' ); ?>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
                <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn-outline btn-lg">
                    <?php esc_html_e( 'View Services', 'velrox' ); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
