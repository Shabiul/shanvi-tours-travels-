<?php
$page_title = "Fleet Photo Gallery - 12 to 49 Seats";
$page_description = "View real photos of our Bangalore fleet: 12+1 Tempo Traveller, 21+1 Mini Bus, 33+1 Bus & 49+1 Luxury Bus. Exterior & interior seating photos. No stock imagery.";
$page_keywords = "mini bus rental bangalore, bus hire bangalore, 12 seater mini bus rental bangalore, 21 seater mini bus rental bangalore, 33 seater bus rental bangalore, 49 seater bus rental bangalore, mini bus with driver bangalore, bus rental near me, bus photos bangalore, real bus fleet images";
include 'includes/header.php';
include 'includes/fleet-data.php';
?>

<!-- Page Header -->
<section class="hero-section">
    <div class="carousel-item active">
        <a href="gallery.php" class="hero-image-link" title="Shanvi Tours &amp; Travels 33+1 Seater Touring Coach on Bangalore highway" aria-label="Shanvi Tours &amp; Travels 33+1 Seater Touring Coach on Bangalore highway">
            <img src="images/fleet/bus-exterior.jpg" alt="Shanvi Tours &amp; Travels fleet — 33+1 Seater Touring Coach on Bangalore highway" title="Shanvi Tours &amp; Travels 33+1 Seater Touring Coach on Bangalore highway" width="1920" height="700" loading="eager" fetchpriority="high" decoding="async">
        </a>
        <div class="carousel-overlay">
            <div class="hero-content">
                <h1>Mini Bus &amp; Bus Rental Fleet — Bangalore</h1>
                <p>Real commercial vehicles, real seating capacity — from 12+1 seater Tempo Travellers to 49+1 seater Luxury Coaches</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap mt-3">
                    <a href="fleet.php" class="btn-hero">View Fleet Specs</a>
                    <a href="contact.php" class="btn-hero-outline">Check Availability</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Princeton GEO & AEO Gallery Statement -->
<section style="background: #ffffff; border-bottom: 1px solid var(--border-subtle); padding: 2rem 0;">
    <div class="container">
        <div style="background: linear-gradient(135deg, rgba(230, 81, 0, 0.05) 0%, rgba(13, 27, 42, 0.03) 100%); border-left: 4px solid var(--primary-color); border-radius: 8px; padding: 1.5rem 1.8rem; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
            <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.6rem;">
                <i class="fas fa-camera" style="color: var(--primary-color); font-size: 1.25rem;"></i>
                <h2 style="font-size: 1.15rem; margin: 0; font-weight: 700; color: var(--brand-navy); text-transform: uppercase; letter-spacing: 0.5px;">Real Fleet Verification: 100% Authentic Vehicle Photography</h2>
            </div>
            <p style="font-size: 1.05rem; line-height: 1.75; margin-bottom: 0.5rem; color: #2d3748;">
                Unlike aggregator portals that display generic brochure stock images, every photograph in this gallery depicts our actual Bangalore commercial fleet — registered with Karnataka Yellow Board plates (KA 51 series). You can examine the exact seating layout, pushback seat pitch, dual-zone AC vents, and deep underfloor luggage compartments before making your booking.
            </p>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="section-padding">
    <div class="container">
        <div class="section-title">
            <span class="eyebrow">Real Vehicle Photography</span>
            <h2>Mini Bus &amp; Commercial Bus Rental Vehicles</h2>
            <p>Every photo below represents an actual vehicle in our Bangalore fleet — no stock photography</p>
        </div>

        <div class="gallery-grid">
            <?php foreach ($fleet as $v): ?>
            <a href="<?php echo htmlspecialchars($v['exterior']); ?>" class="gallery-item" title="<?php echo htmlspecialchars('Shanvi Tours & Travels ' . $v['name'] . ' ' . $v['seats'] . ' - Exterior View'); ?>" aria-label="<?php echo htmlspecialchars('View full size exterior photo of Shanvi Tours & Travels ' . $v['name'] . ' ' . $v['seats']); ?>">
                <span class="trip-badge"><?php echo htmlspecialchars($v['name'] . ' · ' . $v['seats'] . ' Exterior'); ?></span>
                <img src="<?php echo htmlspecialchars($v['exterior']); ?>" alt="<?php echo htmlspecialchars('Shanvi Tours & Travels ' . $v['name'] . ' ' . $v['seats'] . ' Exterior View Bangalore Fleet'); ?>" title="<?php echo htmlspecialchars('Shanvi Tours & Travels ' . $v['name'] . ' ' . $v['seats'] . ' - Exterior View'); ?>" width="400" height="250" loading="lazy" decoding="async">
                <div class="gallery-overlay">
                    <i class="fas fa-search-plus"></i>
                </div>
            </a>
            <a href="<?php echo htmlspecialchars($v['interior']); ?>" class="gallery-item" title="<?php echo htmlspecialchars('Shanvi Tours & Travels ' . $v['name'] . ' ' . $v['seats'] . ' - Interior Pushback Seating'); ?>" aria-label="<?php echo htmlspecialchars('View full size interior seating photo of Shanvi Tours & Travels ' . $v['name'] . ' ' . $v['seats']); ?>">
                <span class="trip-badge"><?php echo htmlspecialchars($v['name'] . ' Interior'); ?></span>
                <img src="<?php echo htmlspecialchars($v['interior']); ?>" alt="<?php echo htmlspecialchars('Shanvi Tours & Travels ' . $v['name'] . ' ' . $v['seats'] . ' Interior Pushback Seating'); ?>" title="<?php echo htmlspecialchars('Shanvi Tours & Travels ' . $v['name'] . ' ' . $v['seats'] . ' - Interior Pushback Seating'); ?>" width="400" height="250" loading="lazy" decoding="async">
                <div class="gallery-overlay">
                    <i class="fas fa-search-plus"></i>
                </div>
            </a>
            <?php foreach (($v['extra'] ?? []) as $photo): ?>
            <a href="<?php echo htmlspecialchars($photo['src']); ?>" class="gallery-item" title="<?php echo htmlspecialchars('Shanvi Tours & Travels ' . $v['name'] . ' - ' . $photo['label']); ?>" aria-label="<?php echo htmlspecialchars('View photo of Shanvi Tours & Travels ' . $v['name'] . ' ' . $photo['label']); ?>">
                <span class="trip-badge"><?php echo htmlspecialchars($v['name'] . ' · ' . $photo['label']); ?></span>
                <img src="<?php echo htmlspecialchars($photo['src']); ?>" alt="<?php echo htmlspecialchars('Shanvi Tours & Travels ' . $v['name'] . ' — ' . $photo['label'] . ' on Bangalore Roads'); ?>" title="<?php echo htmlspecialchars('Shanvi Tours & Travels ' . $v['name'] . ' - ' . $photo['label']); ?>" width="400" height="250" loading="lazy" decoding="async">
                <div class="gallery-overlay">
                    <i class="fas fa-search-plus"></i>
                </div>
            </a>
            <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ImageGallery Structured Data -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ImageGallery",
    "name": "Shanvi Tours & Travels Real Commercial Bus Fleet Gallery",
    "description": "Photographs of authentic commercial buses and Tempo Travellers in Bangalore: 12+1, 21+1, 33+1, and 49+1 seater coaches.",
    "url": "https://www.shanvitoursandtravels.com/gallery.php",
    "provider": {
        "@type": "TravelAgency",
        "name": "Shanvi Tours & Travels",
        "url": "https://www.shanvitoursandtravels.com/"
    },
    "hasPart": [
        <?php
        $gallery_schema_items = [];
        foreach ($fleet as $v) {
            $gallery_schema_items[] = [
                '@type' => 'ImageObject',
                'name' => 'Shanvi Tours & Travels ' . $v['name'] . ' ' . $v['seats'] . ' Exterior View',
                'caption' => 'Shanvi Tours & Travels ' . $v['name'] . ' ' . $v['seats'] . ' Exterior View Bangalore Fleet',
                'contentUrl' => $site_url . '/' . $v['exterior'],
                'thumbnailUrl' => $site_url . '/' . $v['exterior']
            ];
            $gallery_schema_items[] = [
                '@type' => 'ImageObject',
                'name' => 'Shanvi Tours & Travels ' . $v['name'] . ' ' . $v['seats'] . ' Interior View',
                'caption' => 'Shanvi Tours & Travels ' . $v['name'] . ' ' . $v['seats'] . ' Interior Pushback Seating Layout',
                'contentUrl' => $site_url . '/' . $v['interior'],
                'thumbnailUrl' => $site_url . '/' . $v['interior']
            ];
            foreach (($v['extra'] ?? []) as $photo) {
                $gallery_schema_items[] = [
                    '@type' => 'ImageObject',
                    'name' => 'Shanvi Tours & Travels ' . $v['name'] . ' ' . $photo['label'],
                    'caption' => 'Shanvi Tours & Travels ' . $v['name'] . ' — ' . $photo['label'] . ' on Bangalore Roads',
                    'contentUrl' => $site_url . '/' . $photo['src'],
                    'thumbnailUrl' => $site_url . '/' . $photo['src']
                ];
            }
        }
        $json_items = [];
        foreach ($gallery_schema_items as $item) {
            $json_items[] = json_encode($item, JSON_UNESCAPED_SLASHES);
        }
        echo implode(",\n        ", $json_items);
        ?>
    ]
}
</script>

<!-- Call to Action -->
<section class="section-padding" style="background: var(--brand-navy); color: white;">
    <div class="container text-center">
        <h2 style="color: white; font-size: clamp(1.6rem, 4vw, 3rem); margin-bottom: 1.5rem;">Like What You See?</h2>
        <p style="font-size: clamp(1rem, 2.5vw, 1.3rem); margin-bottom: 2.5rem;">Check seating capacity, luggage limits, and transparent rates on our fleet page</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="fleet.php" class="btn-hero">See Fleet Specs</a>
            <a href="tel:9611120023" class="btn-hero-outline">Call: 9611120023</a>
            <a href="https://wa.me/919611120023" target="_blank" class="btn-hero-outline"><i class="fab fa-whatsapp me-1"></i> WhatsApp Booking</a>
        </div>
    </div>
</section>

<!-- Static Semantic Noscript Layer for Image & Search Engine Crawlers -->
<noscript>
    <div style="padding: 2rem; background: #fff; color: #111;">
        <h2>Shanvi Tours &amp; Travels — Complete Bangalore Fleet Photo Catalogue</h2>
        <p>Photographs of our real commercial vehicles in Bangalore.</p>
        <a href="images/fleet/tempo-traveller-exterior.jpg" title="12+1 Seater Tempo Traveller Bangalore Exterior - Pushback AC Seats" aria-label="12+1 Seater Tempo Traveller Bangalore Exterior"><img src="images/fleet/tempo-traveller-exterior.jpg" alt="12+1 Seater Tempo Traveller Bangalore Exterior - Pushback AC Seats" title="12+1 Seater Tempo Traveller Bangalore Exterior - Pushback AC Seats" width="400" height="250" loading="lazy" decoding="async"></a>
        <a href="images/fleet/tempo-traveller-interior.jpg" title="12+1 Seater Tempo Traveller Interior - Captain Seats and Overhead AC" aria-label="12+1 Seater Tempo Traveller Interior"><img src="images/fleet/tempo-traveller-interior.jpg" alt="12+1 Seater Tempo Traveller Interior - Captain Seats and Overhead AC" title="12+1 Seater Tempo Traveller Interior - Captain Seats and Overhead AC" width="400" height="250" loading="lazy" decoding="async"></a>
        <a href="images/fleet/mini-bus-exterior.jpg" title="21+1 Seater Mercedes Mini Bus Bangalore - Commercial Coach" aria-label="21+1 Seater Mercedes Mini Bus Bangalore"><img src="images/fleet/mini-bus-exterior.jpg" alt="21+1 Seater Mercedes Mini Bus Bangalore - Commercial Coach" title="21+1 Seater Mercedes Mini Bus Bangalore - Commercial Coach" width="400" height="250" loading="lazy" decoding="async"></a>
        <a href="images/fleet/mini-bus-interior.jpg" title="21+1 Seater Mini Bus Interior - Ergonomic Reclining Seats" aria-label="21+1 Seater Mini Bus Interior"><img src="images/fleet/mini-bus-interior.jpg" alt="21+1 Seater Mini Bus Interior - Ergonomic Reclining Seats" title="21+1 Seater Mini Bus Interior - Ergonomic Reclining Seats" width="400" height="250" loading="lazy" decoding="async"></a>
        <a href="images/fleet/bus-exterior.jpg" title="33+1 Seater Touring Coach Bangalore - Highway Tourist Bus" aria-label="33+1 Seater Touring Coach Bangalore"><img src="images/fleet/bus-exterior.jpg" alt="33+1 Seater Touring Coach Bangalore - Highway Tourist Bus" title="33+1 Seater Touring Coach Bangalore - Highway Tourist Bus" width="400" height="250" loading="lazy" decoding="async"></a>
        <a href="images/fleet/bus-interior.jpg" title="33+1 Seater Bus Interior - 2x2 Reclining Seats with Reading Lights" aria-label="33+1 Seater Bus Interior"><img src="images/fleet/bus-interior.jpg" alt="33+1 Seater Bus Interior - 2x2 Reclining Seats with Reading Lights" title="33+1 Seater Bus Interior - 2x2 Reclining Seats with Reading Lights" width="400" height="250" loading="lazy" decoding="async"></a>
        <a href="images/fleet/bus-city-street.jpg" title="33+1 Seater Bus Navigating Bangalore City Streets for Wedding Shuttles" aria-label="33+1 Seater Bus Navigating Bangalore City Streets for Wedding Shuttles"><img src="images/fleet/bus-city-street.jpg" alt="33+1 Seater Bus Navigating Bangalore City Streets for Wedding Shuttles" title="33+1 Seater Bus Navigating Bangalore City Streets for Wedding Shuttles" width="400" height="250" loading="lazy" decoding="async"></a>
        <a href="images/fleet/bus-road-angle.jpg" title="33+1 Seater Bus on Highway Route Across Karnataka" aria-label="33+1 Seater Bus on Highway Route Across Karnataka"><img src="images/fleet/bus-road-angle.jpg" alt="33+1 Seater Bus on Highway Route Across Karnataka" title="33+1 Seater Bus on Highway Route Across Karnataka" width="400" height="250" loading="lazy" decoding="async"></a>
        <a href="images/fleet/luxury-bus-exterior.jpg" title="49+1 Seater Luxury Bus Bangalore - 50 Seater Highway Coach" aria-label="49+1 Seater Luxury Bus Bangalore"><img src="images/fleet/luxury-bus-exterior.jpg" alt="49+1 Seater Luxury Bus Bangalore - 50 Seater Highway Coach" title="49+1 Seater Luxury Bus Bangalore - 50 Seater Highway Coach" width="400" height="250" loading="lazy" decoding="async"></a>
        <a href="images/fleet/luxury-bus-interior.jpg" title="49+1 Seater Luxury Bus Interior - Upholstered Seats with Red Carpet Aisle" aria-label="49+1 Seater Luxury Bus Interior with Red Carpet"><img src="images/fleet/luxury-bus-interior.jpg" alt="49+1 Seater Luxury Bus Interior - Upholstered Seats with Red Carpet Aisle" title="49+1 Seater Luxury Bus Interior - Upholstered Seats with Red Carpet Aisle" width="400" height="250" loading="lazy" decoding="async"></a>
        <a href="images/fleet/luxury-bus-parked.jpg" title="49+1 Seater Luxury Tourist Bus Parked Ready for Departure" aria-label="49+1 Seater Luxury Tourist Bus Parked"><img src="images/fleet/luxury-bus-parked.jpg" alt="49+1 Seater Luxury Tourist Bus Parked Ready for Departure" title="49+1 Seater Luxury Tourist Bus Parked Ready for Departure" width="400" height="250" loading="lazy" decoding="async"></a>
        <a href="images/fleet/luxury-bus-temple-1.jpg" title="49+1 Seater Luxury Bus on Pilgrimage Tour from Bangalore" aria-label="49+1 Seater Luxury Bus on Pilgrimage Tour"><img src="images/fleet/luxury-bus-temple-1.jpg" alt="49+1 Seater Luxury Bus on Pilgrimage Tour from Bangalore" title="49+1 Seater Luxury Bus on Pilgrimage Tour from Bangalore" width="400" height="250" loading="lazy" decoding="async"></a>
        <a href="images/fleet/luxury-bus-temple-2.jpg" title="Luxury Tourist Bus on Temple Pilgrimage Circuit to Tirupati" aria-label="Luxury Tourist Bus on Temple Pilgrimage Circuit"><img src="images/fleet/luxury-bus-temple-2.jpg" alt="Luxury Tourist Bus on Temple Pilgrimage Circuit to Tirupati" title="Luxury Tourist Bus on Temple Pilgrimage Circuit to Tirupati" width="400" height="250" loading="lazy" decoding="async"></a>
    </div>
</noscript>

<?php include 'includes/footer.php'; ?>
