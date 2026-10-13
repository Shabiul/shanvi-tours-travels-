<?php
$page_title = "Travel Blog & Bus Rental Guides Bangalore | Shanvi Tours & Travels";
$page_description = "Official travel blog of Shanvi Tours & Travels Bangalore. In-depth guides on 21 seater mini bus rental, outstation road trip itineraries, fleet comparisons & corporate travel tips.";
$page_keywords = "bangalore travel blog, bus rental blog bangalore, 21 seater mini bus guide, outstation travel guide bangalore, tempo traveller tips, corporate bus rental bangalore";
$canonical_url = "https://www.shanvitoursandtravels.com/blog.php";
$og_image = "https://www.shanvitoursandtravels.com/images/fleet/mini-bus-exterior.jpg";
$no_hero = true;
include 'includes/header.php';

$posts = [
    [
        'title' => '21 Seater Mini Bus Rental in Bangalore: Complete Tariff Guide, Seating Layout & Outstation Routes (2026)',
        'slug' => 'blog-21-seater-mini-bus-rental-bangalore.php',
        'category' => '21-Seater Spotlight',
        'badge_class' => 'badge-featured',
        'image' => 'images/fleet/mini-bus-exterior.jpg',
        'image_alt' => 'Shanvi Tours 21 Seater Mercedes Mini Bus Bangalore',
        'date' => 'October 10, 2026',
        'read_time' => '8 min read',
        'excerpt' => 'Everything you need to know about hiring a 21-seater mini bus in Bangalore. Check 2026 tariffs (from ₹4,500), 2x2 pushback seating comfort, luggage space, and top outstation routes.',
        'featured' => true,
    ],
    [
        'title' => '12 Seater Tempo Traveller vs. 21 Seater Mini Bus: Which Should You Rent in Bangalore?',
        'slug' => 'blog-tempo-traveller-vs-21-seater-bus.php',
        'category' => 'Vehicle Comparison',
        'badge_class' => '',
        'image' => 'images/fleet/tempo-traveller-exterior.jpg',
        'image_alt' => '12 Seater Tempo Traveller vs 21 Seater Mini Bus Bangalore',
        'date' => 'October 11, 2026',
        'read_time' => '7 min read',
        'excerpt' => 'Comparing headcounts, per-head costs (₹225 vs ₹233), luggage limits, and Western Ghats agility to help you choose the right vehicle for your group.',
        'featured' => false,
    ],
    [
        'title' => 'Top 7 Weekend Road Trips from Bangalore for Groups of 15 to 21 Passengers',
        'slug' => 'blog-weekend-road-trips-bangalore-21-seater.php',
        'category' => 'Outstation Itineraries',
        'badge_class' => '',
        'image' => 'images/destinations/coorg.jpg',
        'image_alt' => 'Weekend Road Trips from Bangalore for 15-21 Passenger Groups',
        'date' => 'October 12, 2026',
        'read_time' => '9 min read',
        'excerpt' => 'Tested highway itineraries to Coorg, Chikmagalur, Ooty, Wayanad, and Mysore with driving times, ghat road feasibility, and vehicle recommendations.',
        'featured' => false,
    ],
    [
        'title' => 'Corporate Team Outings & Employee Transport: Why Companies Choose 21-Seater Coaches',
        'slug' => 'blog-corporate-team-outing-bus-bangalore.php',
        'category' => 'Corporate Travel',
        'badge_class' => '',
        'image' => 'images/services/corporate.jpg',
        'image_alt' => 'Corporate Team Outing Bus Rental Bangalore',
        'date' => 'October 12, 2026',
        'read_time' => '7 min read',
        'excerpt' => 'How Bangalore tech parks and enterprise HR teams manage offsite transport with GST invoicing, AIS-140 GPS telemetry, and background-verified chauffeurs.',
        'featured' => false,
    ],
];
?>

<!-- Blog Hub Header -->
<section class="section-padding section-padding-nav-offset" style="background: linear-gradient(135deg, #0d2c45 0%, #14477e 100%); color: #ffffff; padding-top: 130px; padding-bottom: 70px;">
    <div class="container text-center">
        <span style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(242, 169, 59, 0.2); border: 1px solid rgba(242, 169, 59, 0.5); padding: 5px 16px; border-radius: 50px; font-size: 0.85rem; font-weight: 700; color: #f2a93b; margin-bottom: 1rem;">
            <i class="fas fa-book-open"></i> Insights &bull; Route Guides &bull; Tariffs
        </span>
        <h1 style="font-size: clamp(2.2rem, 4.5vw, 3.4rem); font-weight: 800; line-height: 1.2; margin-bottom: 1rem; color: #ffffff;">
            Shanvi Tours &amp; Travels Blog &amp; Guides
        </h1>
        <p style="font-size: 1.15rem; line-height: 1.7; opacity: 0.92; max-width: 680px; margin: 0 auto 1.5rem;">
            Expert advice from Bangalore's commercial fleet operator since 2013. Learn how to pick the right vehicle, calculate transparent tariffs, and explore South India safely.
        </p>
        <div class="d-flex justify-content-center gap-2 flex-wrap">
            <span class="badge bg-light text-dark px-3 py-2" style="font-size: 0.88rem; font-weight: 600;"><i class="fas fa-check-circle text-success me-1"></i> 21-Seater Guides</span>
            <span class="badge bg-light text-dark px-3 py-2" style="font-size: 0.88rem; font-weight: 600;"><i class="fas fa-check-circle text-success me-1"></i> Outstation Routes</span>
            <span class="badge bg-light text-dark px-3 py-2" style="font-size: 0.88rem; font-weight: 600;"><i class="fas fa-check-circle text-success me-1"></i> Corporate Offsites</span>
            <span class="badge bg-light text-dark px-3 py-2" style="font-size: 0.88rem; font-weight: 600;"><i class="fas fa-check-circle text-success me-1"></i> Tariff Transparency</span>
        </div>
    </div>
</section>

<!-- Blog Posts Section -->
<section class="section-padding" style="background: var(--light-bg);">
    <div class="container">
        
        <!-- Featured Post Spotlight -->
        <div class="mb-5">
            <div class="card border-0 shadow-sm overflow-hidden" style="border-radius: 20px; border: 1px solid #e2e8f0; background: #ffffff;">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-6">
                        <div style="height: 380px; position: relative; overflow: hidden;">
                            <img src="<?php echo htmlspecialchars($posts[0]['image']); ?>" alt="<?php echo htmlspecialchars($posts[0]['image_alt']); ?>" style="width: 100%; height: 100%; object-fit: cover;" width="600" height="380" fetchpriority="high">
                            <span class="blog-card-badge badge-featured">
                                <i class="fas fa-star me-1"></i> Featured Editorial Guide
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-6 p-4 p-lg-5">
                        <div class="blog-meta-line mb-2">
                            <span><i class="fas fa-tag text-warning me-1"></i> 21 Seater Spotlight</span>
                            <span>&bull;</span>
                            <span><i class="fas fa-calendar-alt me-1"></i> <?php echo htmlspecialchars($posts[0]['date']); ?></span>
                            <span>&bull;</span>
                            <span><i class="fas fa-clock me-1"></i> <?php echo htmlspecialchars($posts[0]['read_time']); ?></span>
                        </div>
                        <h2 style="font-size: clamp(1.5rem, 2.5vw, 2rem); font-weight: 800; color: var(--brand-navy); margin-bottom: 1rem; line-height: 1.3;">
                            <a href="<?php echo htmlspecialchars($posts[0]['slug']); ?>" style="color: inherit; text-decoration: none;">
                                <?php echo htmlspecialchars($posts[0]['title']); ?>
                            </a>
                        </h2>
                        <p style="font-size: 1.02rem; color: #475569; line-height: 1.7; margin-bottom: 1.5rem;">
                            <?php echo htmlspecialchars($posts[0]['excerpt']); ?>
                        </p>
                        <div class="d-flex gap-3 align-items-center flex-wrap">
                            <a href="<?php echo htmlspecialchars($posts[0]['slug']); ?>" class="btn-hero" style="background: var(--brand-navy); color: #ffffff; padding: 0.6rem 1.6rem; font-size: 0.95rem;">
                                Read Complete Guide &rarr;
                            </a>
                            <a href="21-seater-bus-rental-bangalore.php" class="btn-hero-outline" style="padding: 0.6rem 1.4rem; font-size: 0.95rem;">
                                View 21-Seater Page
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Remaining Posts Grid -->
        <div class="section-title mb-4 text-start">
            <span class="eyebrow">More Articles</span>
            <h2>Latest Travel &amp; Vehicle Guides</h2>
        </div>

        <div class="row g-4">
            <?php for ($i = 1; $i < count($posts); $i++): $p = $posts[$i]; ?>
            <div class="col-md-6 col-lg-4">
                <a href="<?php echo htmlspecialchars($p['slug']); ?>" class="blog-card">
                    <div class="blog-card-img-wrap">
                        <img src="<?php echo htmlspecialchars($p['image']); ?>" alt="<?php echo htmlspecialchars($p['image_alt']); ?>" loading="lazy" width="400" height="220">
                        <span class="blog-card-badge <?php echo $p['badge_class']; ?>">
                            <?php echo htmlspecialchars($p['category']); ?>
                        </span>
                    </div>
                    <div class="blog-card-body">
                        <div class="blog-meta-line">
                            <span><i class="fas fa-calendar-alt me-1"></i> <?php echo htmlspecialchars($p['date']); ?></span>
                            <span>&bull;</span>
                            <span><i class="fas fa-clock me-1"></i> <?php echo htmlspecialchars($p['read_time']); ?></span>
                        </div>
                        <h3 class="blog-card-title">
                            <?php echo htmlspecialchars($p['title']); ?>
                        </h3>
                        <p class="blog-card-excerpt">
                            <?php echo htmlspecialchars($p['excerpt']); ?>
                        </p>
                        <div class="blog-card-footer">
                            <span>Read Article</span>
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <?php endfor; ?>
        </div>

        <!-- Consultation Box -->
        <div class="p-4 p-lg-5 my-5 rounded-4 text-center" style="background: #ffffff; border: 1px solid #e2e8f0; box-shadow: 0 10px 30px rgba(0,0,0,0.03);">
            <div style="max-width: 650px; margin: 0 auto;">
                <span class="eyebrow">Direct Fleet Advice</span>
                <h3 style="font-size: 1.7rem; color: var(--brand-navy); margin-bottom: 0.75rem;">Need Personalized Guidance for Your Group?</h3>
                <p style="font-size: 1rem; color: #64748b; line-height: 1.7; margin-bottom: 1.5rem;">
                    Whether you are debating between a 12-seater and a 21-seater, or coordinating a 200+ guest wedding convoy, our founder Pradeep H.B. is available for direct dispatch consultation.
                </p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="contact.php" class="btn-hero" style="padding: 0.65rem 1.6rem;">
                        <i class="fas fa-envelope me-2"></i> Request Custom Quote
                    </a>
                    <a href="https://wa.me/919611120023?text=Hi%20Shanvi%20Tours,%20need%20advice%20for%20my%20group%20trip" target="_blank" rel="noopener" class="btn-hero-outline" style="border-color: #25D366; color: #128C7E; padding: 0.65rem 1.5rem;">
                        <i class="fab fa-whatsapp me-2"></i> WhatsApp Dispatch: 9611120023
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Blog Collection Structured Data -->
<?php
$blog_schema_posts = [];
foreach ($posts as $post) {
    $blog_schema_posts[] = [
        '@type' => 'BlogPosting',
        'headline' => $post['title'],
        'description' => $post['excerpt'],
        'url' => $site_url . '/' . $post['slug'],
        'image' => $site_url . '/' . $post['image'],
        'datePublished' => '2026-10-10T09:00:00+05:30',
    ];
}
$blog_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'Blog',
    'name' => 'Shanvi Tours & Travels Blog',
    'description' => 'Travel guides, vehicle comparison advice, and transparent tariff documentation for Bangalore commercial bus and tempo traveller rentals.',
    'url' => 'https://www.shanvitoursandtravels.com/blog.php',
    'publisher' => [
        '@type' => 'TravelAgency',
        'name' => 'Shanvi Tours & Travels Bangalore',
        'logo' => 'https://www.shanvitoursandtravels.com/images/logo.png',
    ],
    'blogPost' => $blog_schema_posts,
];
?>
<script type="application/ld+json">
<?php echo json_encode($blog_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>

<?php include 'includes/footer.php'; ?>
