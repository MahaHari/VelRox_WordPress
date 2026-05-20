<?php
/**
 * Template Name: Our Products
 */
get_header();

velrox_page_banner(
    __( 'Our Products', 'velrox' ),
    __( 'A comprehensive range of premium frozen seafood products sourced from India, ready for export to European markets.', 'velrox' ),
    'https://images.pexels.com/photos/3376799/pexels-photo-3376799.jpeg?auto=compress&cs=tinysrgb&w=1920&q=80',
    __( 'Products', 'velrox' )
);

$products = [
    /* ---- FISH ---- */
    [
        'name'     => 'Indian Mackerel (Headless)',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => '8/12 Count',
        'desc'     => 'Premium headless Indian mackerel, carefully processed and blast-frozen for maximum freshness and EU compliance.',
    ],
    [
        'name'     => 'Sardine (Headless)',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => '60/80 Count',
        'desc'     => 'Fresh headless sardines, IQF-frozen at source to preserve natural flavour and nutritional value.',
    ],
    [
        'name'     => 'Anchovy (Cleaned)',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => '80/100 Count',
        'desc'     => 'Cleaned and frozen anchovies ideal for European food processing, retail, and food service sectors.',
    ],
    [
        'name'     => 'Indian Mackerel (Whole)',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => '8/10 Count',
        'desc'     => 'Whole Indian mackerel with consistent sizing, frozen to retain quality throughout cold-chain delivery.',
    ],
    [
        'name'     => 'Sail Fish (Curry Cut)',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => 'S/L, B/L — 30–40 pc/kg',
        'desc'     => 'Sail fish curry cuts available in skin-on/skin-off and bone-in/boneless, suited for retail and food service.',
    ],
    [
        'name'     => 'Tuna (Curry Cut)',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => 'S/L, B/L — 30–40 pc/kg',
        'desc'     => 'Tuna curry cuts in multiple specifications, frozen for convenient European market distribution.',
    ],
    [
        'name'     => 'Travelly (Curry Cut)',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => 'S/L, B/L — 30–40 pc/kg',
        'desc'     => 'Indian Travelly (Trevally) curry cut portions, exported with full traceability and quality certificates.',
    ],
    [
        'name'     => 'Orra Fish',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => 'Export Grade',
        'desc'     => 'Orra fish processed to export standards, available in multiple cut formats for European importers.',
    ],
    [
        'name'     => 'Silver Pomfret',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => 'Export Grade',
        'desc'     => 'Highly prized Silver Pomfret, whole or cleaned, renowned in European and Asian markets for its delicate taste.',
    ],
    [
        'name'     => 'Tilapia (Whole)',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => '350–500g',
        'desc'     => 'Farmed Tilapia in the 350–500g weight range, IQF-frozen and packed to European retail and wholesale requirements.',
    ],
    [
        'name'     => 'Mahi Mahi (Slices)',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => 'Skin On / Bone In',
        'desc'     => 'Mahi Mahi slices with skin-on and bone-in specification, popular with European seafood distributors.',
    ],
    [
        'name'     => 'Yellow Fin Tuna Steaks',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => 'S/L, B/L — 170–230g',
        'desc'     => 'Premium Yellow Fin Tuna steaks in multiple specifications, ideal for food service and premium retail.',
    ],
    [
        'name'     => 'Yellow Fin Tuna Loins',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => 'S/L, B/L',
        'desc'     => 'Skinless and boneless Yellow Fin Tuna loins, restaurant-grade quality for European premium markets.',
    ],
    [
        'name'     => 'Grouper Fish',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => '500g–1kg, 1–2kg, 2–3kg+',
        'desc'     => 'Whole round Grouper in multiple weight brackets, frozen fresh from certified processing facilities.',
    ],
    [
        'name'     => 'Otti Fish',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => 'Export Grade',
        'desc'     => 'Otti Fish processed to international export standards and suitable for European food service markets.',
    ],
    [
        'name'     => 'Wahoo Steaks',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => 'Skinless Boneless',
        'desc'     => 'Premium Wahoo steaks, skinless and boneless, with a firm texture and mild flavour favoured in European cuisine.',
    ],
    [
        'name'     => 'Pearlspot',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => 'Export Grade',
        'desc'     => 'Pearlspot (Karimeen) — a prized Kerala fish exported whole or cleaned to European specialty retailers.',
    ],
    [
        'name'     => 'Green Job Fillet',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => 'IQF Fillet',
        'desc'     => 'Green Job fish fillets, individually quick frozen, suited for European retail and food service applications.',
    ],
    [
        'name'     => 'Skipjack Tuna (Moon Cut)',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => 'Moon Cut',
        'desc'     => 'Skipjack Tuna in moon cut format — clean, consistent portions for European canning and food service.',
    ],
    [
        'name'     => 'Red Mullet',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => 'Export Grade',
        'desc'     => 'Whole Red Mullet, highly valued in Mediterranean markets, frozen to maintain flavour and appearance.',
    ],
    [
        'name'     => 'Red Grouper',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => '300g–1kg+',
        'desc'     => 'Red Grouper in various weight grades — a premium fish with strong demand across European seafood markets.',
    ],
    [
        'name'     => 'Leather Jacket',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => 'Export Grade',
        'desc'     => 'Leather Jacket fish processed whole or as fillets, offered to European importers and wholesale buyers.',
    ],
    [
        'name'     => 'Lady Fish',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => 'Export Grade',
        'desc'     => 'Lady Fish (Oxeye Herring) — whole or headless, an economical species with steady European demand.',
    ],
    [
        'name'     => 'Kingfish Steaks',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => 'Skin On / Bone In',
        'desc'     => 'Kingfish (Surmai) steaks with skin on and bone in, a sought-after species among European ethnic retailers.',
    ],
    [
        'name'     => 'Black Pomfret',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => 'Skin On / Bone In',
        'desc'     => 'Black Pomfret whole, a highly regarded species in European and Middle Eastern seafood trade.',
    ],
    [
        'name'     => 'Chooparai',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => 'Export Grade',
        'desc'     => 'Chooparai (Torpedo Scad) processed and frozen for European export markets.',
    ],
    [
        'name'     => 'Emperor Fish',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => '200g+',
        'desc'     => 'Emperor Fish (Lethrinidae), whole round from 200g upwards, exported with full quality documentation.',
    ],
    [
        'name'     => 'Catla Fish',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => 'Export Grade',
        'desc'     => 'Catla — a major Indian carp species, whole or dressed, for European ethnic and specialty food markets.',
    ],
    [
        'name'     => 'Threadfin Bream',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => '50g+',
        'desc'     => 'Threadfin Bream (Nemipterus), whole from 50g upwards — a versatile species widely used in European markets.',
    ],
    [
        'name'     => 'Sole Fish',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => 'Export Grade',
        'desc'     => 'Flathead Grey Mullet or true Sole, a premium flat fish frozen to retain its delicate texture.',
    ],
    [
        'name'     => 'Swordfish Loins',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => 'Skin On',
        'desc'     => 'Swordfish loins with skin on, a premium export product with strong European food service demand.',
    ],
    [
        'name'     => 'Parrot Fish',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => 'Export Grade',
        'desc'     => 'Colourful Parrot Fish, whole round, exported to European ethnic and specialty seafood buyers.',
    ],
    [
        'name'     => 'Swordfish Steaks',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => 'Export Grade',
        'desc'     => 'Swordfish steaks frozen at peak freshness, ideal for premium retail and food service applications.',
    ],
    [
        'name'     => 'Ribbon Fish',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => '200g–1kg',
        'desc'     => 'Ribbon Fish (Hairtail / Cutlassfish) in the 200g–1kg range — a popular species in European Asian communities.',
    ],
    [
        'name'     => 'Red Snapper',
        'category' => 'fish',
        'cat_label'=> 'Fish',
        'spec'     => '200g–1kg',
        'desc'     => 'Wild-caught Red Snapper, a premium white fish with excellent demand in European retail and food service.',
    ],
    /* ---- SHELLFISH ---- */
    [
        'name'     => 'Vannamei Shrimp PD',
        'category' => 'shellfish',
        'cat_label'=> 'Shellfish',
        'spec'     => '50–110 Count',
        'desc'     => 'Peeled & deveined Vannamei (Whiteleg) shrimp — the most in-demand shrimp in European supermarket and food service supply chains.',
    ],
    [
        'name'     => 'Crab',
        'category' => 'shellfish',
        'cat_label'=> 'Shellfish',
        'spec'     => '150g+',
        'desc'     => 'Whole frozen crabs from 150g upwards, sourced from certified operations and frozen to maintain quality.',
    ],
    /* ---- CEPHALOPODS ---- */
    [
        'name'     => 'Squid',
        'category' => 'cephalopods',
        'cat_label'=> 'Cephalopods',
        'spec'     => 'IQF Whole / Cleaned',
        'desc'     => 'IQF squid — available whole or cleaned, a versatile product for European calamari and food processing markets.',
    ],
    [
        'name'     => 'Cuttlefish (Cleaned)',
        'category' => 'cephalopods',
        'cat_label'=> 'Cephalopods',
        'spec'     => 'U1 / U2 / U3',
        'desc'     => 'Cleaned cuttlefish in U1, U2, and U3 size grades — widely used in Mediterranean cuisine and European seafood processing.',
    ],
    [
        'name'     => 'Octopus (Cleaned)',
        'category' => 'cephalopods',
        'cat_label'=> 'Cephalopods',
        'spec'     => '10/20, 20/40',
        'desc'     => 'Cleaned octopus in 10/20 and 20/40 size grades, a premium product with strong demand in Southern European markets.',
    ],
];
?>

<!-- ============================================================
     PRODUCTS INTRO
     ============================================================ -->
<section class="section-padding-sm" style="background:var(--white);">
    <div class="container">
        <div class="section-header centered animate-fade-up">
            <div class="section-tag"><?php esc_html_e( 'Product Catalogue', 'velrox' ); ?></div>
            <h2 class="section-title">
                <?php esc_html_e( 'Our Frozen Seafood', 'velrox' ); ?>
                <span class="highlight"><?php esc_html_e( 'Range', 'velrox' ); ?></span>
            </h2>
            <p class="section-subtitle">
                <?php esc_html_e( '40+ premium frozen seafood products sourced directly from certified processing partners in India, exported to European markets with full quality documentation.', 'velrox' ); ?>
            </p>
        </div>

        <!-- Category Filter -->
        <div class="product-filters animate-fade-up">
            <button class="product-filter-btn active" data-filter="all"><?php esc_html_e( 'All Products', 'velrox' ); ?></button>
            <button class="product-filter-btn" data-filter="fish"><?php esc_html_e( 'Fish', 'velrox' ); ?></button>
            <button class="product-filter-btn" data-filter="shellfish"><?php esc_html_e( 'Shellfish', 'velrox' ); ?></button>
            <button class="product-filter-btn" data-filter="cephalopods"><?php esc_html_e( 'Cephalopods', 'velrox' ); ?></button>
        </div>

        <!-- Products Grid -->
        <div class="products-grid" id="products-grid">
            <?php foreach ( $products as $i => $product ) : ?>
            <div class="product-card animate-fade-up" data-category="<?php echo esc_attr( $product['category'] ); ?>">
                <div class="product-card-img">
                    <?php
                    $icons = [
                        'fish'        => 'fish',
                        'shellfish'   => 'anchor',
                        'cephalopods' => 'package',
                    ];
                    echo velrox_icon( $icons[ $product['category'] ] ?? 'fish', 36 ); // phpcs:ignore
                    ?>
                </div>
                <div class="product-card-body">
                    <div class="product-card-meta">
                        <span class="product-cat-badge product-cat-<?php echo esc_attr( $product['category'] ); ?>">
                            <?php echo esc_html( $product['cat_label'] ); ?>
                        </span>
                        <span class="product-spec-badge"><?php echo esc_html( $product['spec'] ); ?></span>
                    </div>
                    <h3 class="product-name"><?php echo esc_html( $product['name'] ); ?></h3>
                    <p class="product-desc"><?php echo esc_html( $product['desc'] ); ?></p>
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="product-enquire-btn">
                        <?php esc_html_e( 'Enquire Now', 'velrox' ); ?>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- No results message -->
        <div class="products-empty" id="products-empty" style="display:none;">
            <p><?php esc_html_e( 'No products found in this category.', 'velrox' ); ?></p>
        </div>
    </div>
</section>

<!-- ============================================================
     ENQUIRY CTA
     ============================================================ -->
<section class="cta-section">
    <div class="container">
        <div class="cta-inner animate-fade-up">
            <h2><?php esc_html_e( 'Interested in Our Products?', 'velrox' ); ?></h2>
            <p><?php esc_html_e( 'Contact us to discuss product availability, specifications, pricing, and supply arrangements for your business.', 'velrox' ); ?></p>
            <div class="cta-actions">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary btn-lg">
                    <?php esc_html_e( 'Send an Enquiry', 'velrox' ); ?>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
                <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn-outline btn-lg">
                    <?php esc_html_e( 'Our Services', 'velrox' ); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<script>
(function () {
    'use strict';
    var filterBtns = document.querySelectorAll('.product-filter-btn');
    var cards      = document.querySelectorAll('.product-card');
    var empty      = document.getElementById('products-empty');

    filterBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            filterBtns.forEach(function (b) { b.classList.remove('active'); });
            btn.classList.add('active');

            var filter  = btn.getAttribute('data-filter');
            var visible = 0;

            cards.forEach(function (card) {
                var match = filter === 'all' || card.getAttribute('data-category') === filter;
                card.style.display = match ? '' : 'none';
                if (match) visible++;
            });

            empty.style.display = visible === 0 ? 'block' : 'none';
        });
    });
}());
</script>

<?php get_footer(); ?>
