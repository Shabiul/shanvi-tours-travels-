<?php
http_response_code(404);
$page_title = "404 - Page Not Found | Shanvi Tours & Travels Bangalore";
$page_description = "The page you requested could not be found on Shanvi Tours & Travels. Browse our 12 to 49 seater mini bus and coach fleet, check rental tariffs, or contact our Bangalore dispatch team.";
$page_keywords = "404 page not found, shanvi tours and travels, mini bus rental bangalore, tempo traveller bangalore";
$no_hero = true;
include 'includes/header.php';
?>

<section class="section-padding section-padding-nav-offset" style="min-height: 75vh; display: flex; align-items: center;">
    <div class="container text-center">
        <div style="max-width: 680px; margin: 0 auto;">
            <div style="font-size: clamp(5rem, 12vw, 8rem); font-family: 'Fraunces', serif; font-weight: 900; color: var(--color-desertsun); line-height: 1; margin-bottom: 1rem;">
                404
            </div>
            <h1 style="font-size: clamp(1.6rem, 3.5vw, 2.4rem); color: var(--brand-navy); margin-bottom: 1rem;">
                Looking for a Route We Don't Cover?
            </h1>
            <p style="font-size: 1.1rem; color: var(--text-light); line-height: 1.7; margin-bottom: 2rem;">
                The page or file you are trying to reach has moved or does not exist. But don't worry &mdash; Shanvi Tours &amp; Travels has verified commercial vehicles ready for your Bangalore journey.
            </p>

            <div class="row g-3 justify-content-center mb-4 text-start">
                <div class="col-sm-6">
                    <a href="21-seater-bus-rental-bangalore.php" class="p-3 bg-white rounded-3 shadow-sm border d-block text-decoration-none h-100" style="transition: transform 0.2s ease;">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fas fa-bus-alt text-warning fa-2x"></i>
                            <div>
                                <strong style="color: var(--brand-navy); display: block;">21 Seater Mini Bus</strong>
                                <span style="font-size: 0.85rem; color: #64748b;">From ₹4,500/day &bull; 2x2 AC Pushback</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="fleet.php" class="p-3 bg-white rounded-3 shadow-sm border d-block text-decoration-none h-100" style="transition: transform 0.2s ease;">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fas fa-clipboard-list text-primary fa-2x"></i>
                            <div>
                                <strong style="color: var(--brand-navy); display: block;">Fleet &amp; Tariffs</strong>
                                <span style="font-size: 0.85rem; color: #64748b;">12, 21, 33 &amp; 49 Seater Coaches</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="blog.php" class="p-3 bg-white rounded-3 shadow-sm border d-block text-decoration-none h-100" style="transition: transform 0.2s ease;">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fas fa-newspaper text-info fa-2x"></i>
                            <div>
                                <strong style="color: var(--brand-navy); display: block;">Travel Guides &amp; Blog</strong>
                                <span style="font-size: 0.85rem; color: #64748b;">Outstation itineraries &amp; tips</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="contact.php" class="p-3 bg-white rounded-3 shadow-sm border d-block text-decoration-none h-100" style="transition: transform 0.2s ease;">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fas fa-phone-alt text-success fa-2x"></i>
                            <div>
                                <strong style="color: var(--brand-navy); display: block;">24/7 Dispatch Desk</strong>
                                <span style="font-size: 0.85rem; color: #64748b;">Instant quotes &amp; vehicle booking</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="/" class="btn-hero" title="Return to Shanvi Tours & Travels Homepage">
                    <i class="fas fa-home me-2"></i> Back to Home
                </a>
                <a href="https://wa.me/919611120023?text=Hi%20Shanvi%20Tours,%20need%20a%20vehicle%20quote" target="_blank" rel="noopener" class="btn-hero-outline" style="border-color: #25D366; color: #128C7E;" title="Chat with Shanvi Tours on WhatsApp">
                    <i class="fab fa-whatsapp me-2"></i> WhatsApp Dispatch (9611120023)
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
