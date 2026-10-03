<?php
$page_title = "Our Fleet - Tempo Traveller & Buses";
$page_description = "Browse 12+1 Tempo Traveller, 21+1 Mini Bus, 33+1 Bus & 49+1 Luxury Bus in Bangalore. Pushback AC seats, GPS-tracked with verified driver. Call 9611120023.";
$page_keywords = "mini bus rental bangalore, bus hire bangalore, 12 seater mini bus rental bangalore, 21 seater mini bus rental bangalore, 33 seater bus rental bangalore, 49 seater bus rental bangalore, mini bus with driver bangalore, bus rental near me, tempo traveller rental bangalore, 50 seater luxury bus bangalore";
$no_hero = true;
include 'includes/header.php';
include 'includes/fleet-data.php';
?>

<!-- Vehicle Categories Header -->
<section class="section-padding section-padding-nav-offset">
    <div class="container">
        <div class="section-title">
            <span class="eyebrow">Real Fleet Specifications</span>
            <h1>Our Commercial Fleet at a Glance</h1>
            <p>Four standardized passenger classes, each backed by real vehicle photography, exact seating capacity, and All India Tourist Permits</p>
        </div>

        <!-- Princeton GEO & AEO Quick Fleet Selection Guide -->
        <div style="background: linear-gradient(135deg, rgba(230, 81, 0, 0.05) 0%, rgba(13, 27, 42, 0.03) 100%); border-left: 4px solid var(--primary-color); border-radius: 8px; padding: 1.5rem 1.8rem; box-shadow: 0 4px 15px rgba(0,0,0,0.03); margin-bottom: 3rem;">
            <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.6rem;">
                <i class="fas fa-clipboard-check" style="color: var(--primary-color); font-size: 1.25rem;"></i>
                <h2 style="font-size: 1.15rem; margin: 0; font-weight: 700; color: var(--brand-navy); text-transform: uppercase; letter-spacing: 0.5px;">Quick Guide: Which Vehicle Size is Right for Your Group?</h2>
            </div>
            <p style="font-size: 1.05rem; line-height: 1.75; margin-bottom: 0.75rem; color: #2d3748;">
                Shanvi Tours &amp; Travels operates four distinct passenger seating capacities in Bangalore to prevent overbooking or paying for empty seats:
                <strong>1) 12+1 Seater Tempo Traveller</strong> (ideal for 8–12 passengers; families, airport pickups, small corporate teams);
                <strong>2) 21+1 Seater Mercedes-Chassis Mini Bus</strong> (ideal for 14–21 passengers; college departments, office outings);
                <strong>3) 33+1 Seater Touring Coach</strong> (ideal for 22–33 passengers; pilgrimage tours, school trips, inter-state holidays);
                <strong>4) 49+1 Seater Luxury Bus</strong> (ideal for 34–50 passengers; wedding guest convoys, corporate conferences, student batches).
                All vehicles feature high-capacity dual AC, AIS-140 GPS tracking, pushback seats, and yellow-board commercial registration.
            </p>
            <div style="display: flex; flex-wrap: wrap; gap: 1rem; font-size: 0.88rem; color: #4a5568; font-weight: 600;">
                <span><i class="fas fa-check-circle" style="color: #2e7d32;"></i> 100% Real Fleet Photos (No Stock Images)</span>
                <span><i class="fas fa-check-circle" style="color: #2e7d32;"></i> AIS-140 GPS Telemetry &amp; Speed Governors</span>
                <span><i class="fas fa-check-circle" style="color: #2e7d32;"></i> Pushback Reclining Seats in Every Coach</span>
            </div>
        </div>

        <div class="row g-4">
            <?php foreach ($fleet as $v): ?>
            <div class="col-md-6">
                <div class="service-card">
                    <div class="card-cover card-cover--vehicle">
                        <img src="<?php echo htmlspecialchars($v['exterior']); ?>" alt="<?php echo htmlspecialchars('Shanvi Tours & Travels ' . $v['name'] . ', ' . $v['seats'] . ' Bangalore Fleet'); ?>" title="<?php echo htmlspecialchars('Shanvi Tours & Travels ' . $v['name'] . ' (' . $v['seats'] . ') - Commercial Passenger Bus Rental Bangalore'); ?>" loading="lazy" width="400" height="200" decoding="async">
                    </div>
                    <div class="service-icon"><i class="fas <?php echo $v['icon']; ?>"></i></div>
                    <h3><?php echo htmlspecialchars($v['name']); ?> — <?php echo htmlspecialchars($v['seats']); ?></h3>
                    <p style="font-size: 1rem; line-height: 1.7;"><?php echo htmlspecialchars($v['desc']); ?></p>
                    <div style="margin: 0.75rem 0; padding: 0.5rem 0; border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle); font-size: 0.92rem; color: #4a5568;">
                        <strong>Plate:</strong> <?php echo htmlspecialchars($v['plate']); ?> | <strong>Permit:</strong> All India Tourist Permit (AITP)
                    </div>
                    <p style="color: var(--primary-color); font-weight: 600; margin-top: 0.5rem;"><?php echo htmlspecialchars($v['ideal']); ?></p>
                    <div class="d-flex gap-2 mt-3">
                        <a href="contact.php" class="btn-price">Price on Request</a>
                        <a href="gallery.php" class="btn-hero-outline" style="padding: 0.5rem 1rem; font-size: 0.9rem;">View All Photos</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Vehicle structured data — lets AI answer engines and rich results answer queries directly -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ItemList",
    "name": "Shanvi Tours & Travels Commercial Vehicle Fleet Bangalore",
    "description": "Four passenger vehicle categories with real seating capacities: 12+1 Tempo Traveller, 21+1 Mini Bus, 33+1 Bus, and 49+1 Luxury Bus.",
    "itemListElement": [
        <?php foreach ($fleet as $i => $v): ?>
        {
            "@type": "ListItem",
            "position": <?php echo $i + 1; ?>,
            "item": {
                "@type": ["Vehicle", "Product"],
                "name": <?php echo json_encode('Shanvi Tours & Travels ' . $v['name'] . ' ' . $v['seats']); ?>,
                "vehicleSeatingCapacity": <?php echo $v['seat_count']; ?>,
                "image": <?php echo json_encode($site_url . '/' . $v['exterior']); ?>,
                "description": <?php echo json_encode($v['desc']); ?>,
                "vehicleConfiguration": <?php echo json_encode($v['seats']); ?>,
                "driveWheelConfiguration": "AllWheelDriveConfiguration",
                "fuelType": "Diesel",
                "provider": {
                    "@type": "TravelAgency",
                    "name": "Shanvi Tours & Travels",
                    "telephone": "+91-9611120023",
                    "url": "https://www.shanvitoursandtravels.com/"
                }
            }
        }<?php echo $i < count($fleet) - 1 ? ',' : ''; ?>
        <?php endforeach; ?>
    ]
}
</script>

<!-- Features & Amenities -->
<section class="section-padding" style="background: var(--light-bg);">
    <div class="container">
        <div class="section-title">
            <span class="eyebrow">Safety &amp; Comfort</span>
            <h2>Standard Fleet Features &amp; Safety Equipment</h2>
            <p>Every commercial vehicle in our fleet is maintained to institutional passenger safety standards</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <h4><i class="fas fa-snowflake" style="color: var(--primary-color);"></i></h4>
                    <h5 style="font-size: 1.2rem; margin: 1rem 0;">Dual-Zone Air Conditioned</h5>
                    <p>High-capacity cooling with individual overhead AC louvers for each seat row.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <h4><i class="fas fa-map-marked-alt" style="color: var(--primary-color);"></i></h4>
                    <h5 style="font-size: 1.2rem; margin: 1rem 0;">AIS-140 GPS &amp; Panic SOS</h5>
                    <p>Government-certified real-time telematics with emergency alert buttons.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <h4><i class="fas fa-couch" style="color: var(--primary-color);"></i></h4>
                    <h5 style="font-size: 1.2rem; margin: 1rem 0;">Pushback Reclining Seats</h5>
                    <p>Plush ergonomic seating with adjustable calf support and ample legroom.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <h4><i class="fas fa-tachometer-alt" style="color: var(--primary-color);"></i></h4>
                    <h5 style="font-size: 1.2rem; margin: 1rem 0;">Speed Governor Calibrated</h5>
                    <p>Speed limited to a safe 80 km/h in strict compliance with CMVR safety rules.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <h4><i class="fas fa-suitcase" style="color: var(--primary-color);"></i></h4>
                    <h5 style="font-size: 1.2rem; margin: 1rem 0;">Deep Underfloor Luggage Bay</h5>
                    <p>Dedicated boot space accommodating trolleys, duffels, and tour equipment.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <h4><i class="fas fa-charging-station" style="color: var(--primary-color);"></i></h4>
                    <h5 style="font-size: 1.2rem; margin: 1rem 0;">USB &amp; Mobile Charging</h5>
                    <p>Convenient charging sockets along seat rows to keep passenger devices powered.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <h4><i class="fas fa-music" style="color: var(--primary-color);"></i></h4>
                    <h5 style="font-size: 1.2rem; margin: 1rem 0;">Audio &amp; Video Entertainment</h5>
                    <p>Integrated Bluetooth music systems and LED display screen on luxury buses.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <h4><i class="fas fa-shield-alt" style="color: var(--primary-color);"></i></h4>
                    <h5 style="font-size: 1.2rem; margin: 1rem 0;">First Aid &amp; Fire Safety</h5>
                    <p>Comprehensive medical first-aid kits and operational dry-chemical fire extinguishers.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$fleet_faqs = [
    [
        'q' => "What's the difference between the Tempo Traveller and the Mini Bus?",
        'a' => "The 12+1 Seater Tempo Traveller is built on a Force Motors chassis and is optimal for 8-12 passengers with light luggage; the 21+1 Seater Mini Bus is built on a heavy Mercedes-Benz chassis by Singh Motor Coach Builders, offering greater aisle width, heavier passenger payload, and ideal seating for mid-size corporate groups and college departments."
    ],
    [
        'q' => "Are all vehicles in your fleet air-conditioned?",
        'a' => "Yes. Every vehicle — our 12+1 Tempo Traveller, 21+1 Mini Bus, 33+1 Touring Bus, and 49+1 Luxury Bus — is fully air-conditioned with dual-zone climate systems and individual roof louvers."
    ],
    [
        'q' => "Do your buses have live GPS tracking for passengers?",
        'a' => "Yes. 100% of our fleet is equipped with AIS-140 standard GPS telemetry, allowing organizers and families to track the vehicle's real-time location, speed, and ETA."
    ],
    [
        'q' => "Which vehicle should I book for a 30-person office outing from Bangalore?",
        'a' => "The 33+1 Seater Touring Coach is the recommended fit for 30 passengers, providing ample luggage storage and reclining seats. If your headcount may exceed 33, our 49+1 Luxury Coach is the best choice."
    ],
    [
        'q' => "Can I inspect the vehicle in person before booking?",
        'a' => "Yes. All photos on this website are real photos of our actual fleet. You are welcome to inspect any vehicle at our SMV Layout office in Nagadevanahalli, Bangalore prior to confirming your booking."
    ]
];
?>

<!-- Fleet FAQ -->
<section class="section-padding">
    <div class="container">
        <div class="section-title">
            <span class="eyebrow">Vehicle Guidance</span>
            <h2>Fleet Questions, Answered</h2>
            <p>Common questions about choosing between vehicle sizes, amenities, and inspections</p>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="faq-list">
                    <?php foreach ($fleet_faqs as $i => $faq): ?>
                    <div class="faq-item<?php echo $i === 0 ? ' is-open' : ''; ?>">
                        <button class="faq-question" type="button" aria-expanded="<?php echo $i === 0 ? 'true' : 'false'; ?>">
                            <span><?php echo htmlspecialchars($faq['q']); ?></span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p><?php echo htmlspecialchars($faq['a']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        <?php foreach ($fleet_faqs as $i => $faq): ?>
        {
            "@type": "Question",
            "name": <?php echo json_encode($faq['q']); ?>,
            "acceptedAnswer": {
                "@type": "Answer",
                "text": <?php echo json_encode($faq['a']); ?>
            }
        }<?php echo $i < count($fleet_faqs) - 1 ? ',' : ''; ?>
        <?php endforeach; ?>
    ]
}
</script>

<!-- Call to Action -->
<section class="section-padding" style="background: var(--brand-navy); color: white;">
    <div class="container text-center">
        <h2 style="color: white; font-size: clamp(1.6rem, 4vw, 3rem); margin-bottom: 1.5rem;">Ready to Reserve a Vehicle for Your Trip?</h2>
        <p style="font-size: clamp(1rem, 2.5vw, 1.3rem); margin-bottom: 2.5rem;">Choose your preferred vehicle size and speak with our 24/7 fleet manager</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="contact.php" class="btn-hero">Book Your Vehicle</a>
            <a href="tel:9611120023" class="btn-hero-outline">Call: 9611120023</a>
            <a href="https://wa.me/919611120023" target="_blank" class="btn-hero-outline"><i class="fab fa-whatsapp me-1"></i> WhatsApp Booking</a>
        </div>
    </div>
</section>

<!-- Static Semantic Noscript Layer for Image & Search Engine Crawlers -->
<noscript>
    <div style="padding: 2rem; background: #fff; color: #111;">
        <h2>Shanvi Tours &amp; Travels — Complete Bangalore Fleet Catalogue</h2>
        <p>12+1 Tempo Traveller, 21+1 Mini Bus, 33+1 Bus, 49+1 Luxury Bus available in Bangalore with driver.</p>
        <img src="images/fleet/tempo-traveller-exterior.jpg" alt="12+1 Seater Tempo Traveller Bangalore Exterior - Pushback AC Seats" title="12+1 Seater Tempo Traveller Bangalore Exterior - Pushback AC Seats" width="400" height="250" loading="lazy" decoding="async">
        <img src="images/fleet/tempo-traveller-interior.jpg" alt="12+1 Seater Tempo Traveller Interior - Captain Seats and Overhead AC" title="12+1 Seater Tempo Traveller Interior - Captain Seats and Overhead AC" width="400" height="250" loading="lazy" decoding="async">
        <img src="images/fleet/mini-bus-exterior.jpg" alt="21+1 Seater Mercedes Mini Bus Bangalore - Commercial Coach" title="21+1 Seater Mercedes Mini Bus Bangalore - Commercial Coach" width="400" height="250" loading="lazy" decoding="async">
        <img src="images/fleet/mini-bus-interior.jpg" alt="21+1 Seater Mini Bus Interior - Ergonomic Reclining Seats" title="21+1 Seater Mini Bus Interior - Ergonomic Reclining Seats" width="400" height="250" loading="lazy" decoding="async">
        <img src="images/fleet/bus-exterior.jpg" alt="33+1 Seater Touring Coach Bangalore - Highway Tourist Bus" title="33+1 Seater Touring Coach Bangalore - Highway Tourist Bus" width="400" height="250" loading="lazy" decoding="async">
        <img src="images/fleet/bus-interior.jpg" alt="33+1 Seater Bus Interior - 2x2 Reclining Seats with Reading Lights" title="33+1 Seater Bus Interior - 2x2 Reclining Seats with Reading Lights" width="400" height="250" loading="lazy" decoding="async">
        <img src="images/fleet/luxury-bus-exterior.jpg" alt="49+1 Seater Luxury Bus Bangalore - 50 Seater Highway Coach" title="49+1 Seater Luxury Bus Bangalore - 50 Seater Highway Coach" width="400" height="250" loading="lazy" decoding="async">
        <img src="images/fleet/luxury-bus-interior.jpg" alt="49+1 Seater Luxury Bus Interior - Upholstered Seats with Red Carpet Aisle" title="49+1 Seater Luxury Bus Interior - Upholstered Seats with Red Carpet Aisle" width="400" height="250" loading="lazy" decoding="async">
    </div>
</noscript>

<?php include 'includes/footer.php'; ?>
