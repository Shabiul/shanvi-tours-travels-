    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>About Shanvi Tours &amp; Travels Bangalore</h4>
                    <p>Bangalore-based commercial passenger fleet operator founded in 2013 by Pradeep H.B. — 12+1 Tempo Traveller, 21+1 Mini Bus, 33+1 Bus, and 49+1 Luxury Bus with verified drivers. 100% Yellow-Board registered under Karnataka Motor Vehicles Rules.</p>
                    <div style="margin: 0.85rem 0;">
                        <a href="https://maps.app.goo.gl/xzitq4A2wqQ5V18X7" target="_blank" rel="noopener" style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.2); border-radius: 50px; padding: 6px 14px; text-decoration: none; color: #ffffff; font-size: 0.85rem;" title="View Shanvi Tours &amp; Travels 5.0 Google Rating">
                            <i class="fab fa-google" style="color: #4285F4;"></i>
                            <span><strong style="color: #fbbc04;">★★★★★ 5.0</strong> (25 Google Reviews)</span>
                        </a>
                    </div>
                    <div class="social-links">
                        <a href="https://facebook.com" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://instagram.com" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://linkedin.com" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <a href="/">Home</a>
                    <a href="about.php">About Us</a>
                    <a href="services.php">Our Services</a>
                    <a href="fleet.php">Our Fleet &amp; Tariffs</a>
                    <a href="21-seater-bus-rental-bangalore.php" style="color: var(--color-desertsun); font-weight: 700;">★ 21 Seater Mini Bus</a>
                    <a href="blog.php">Travel Blog &amp; Guides</a>
                    <a href="gallery.php">Gallery</a>
                    <a href="contact.php">Contact</a>
                </div>
                
                <div class="footer-section">
                    <h4>Bus Rental Services</h4>
                    <a href="21-seater-bus-rental-bangalore.php">21 Seater Mini Bus Rental</a>
                    <a href="services.php#employee-transport">Employee Transport</a>
                    <a href="services.php#corporate">Corporate Bus Rental</a>
                    <a href="services.php#wedding">Wedding Bus Rental</a>
                    <a href="services.php#school-college">School &amp; College Trips</a>
                    <a href="services.php#outstation">Outstation Bus Rental</a>
                    <a href="services.php#package-tours">Pilgrimage &amp; Package Tours</a>
                </div>
                
                <div class="footer-section">
                    <h4>Contact Info</h4>
                    <p><i class="fas fa-map-marker-alt"></i> #2472/1, 3rd Block, SMV Layout,<br>Doddabasthihalli, Near Vijaya Hospital,<br>Nagadevanahalli, Bangalore - 560056</p>
                    <p><i class="fas fa-phone"></i> <a href="tel:9611120023">9611120023</a></p>
                    <p><i class="fas fa-phone"></i> <a href="tel:8050507333">8050507333</a></p>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:info@shanvitoursandtravels.com">info@shanvitoursandtravels.com</a></p>
                    <p><i class="fab fa-google"></i> <a href="https://maps.app.goo.gl/xzitq4A2wqQ5V18X7" target="_blank" rel="noopener" title="Shanvi Tours & Travels on Google Maps & Business Profile">Find us on Google Maps &amp; Reviews</a></p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Shanvi Tours &amp; Travels Bangalore (Registered Commercial Passenger Transport, Karnataka). All Rights Reserved.</p>
                <p style="font-size: 0.75rem; opacity: 0.6; margin-top: 0.4rem;">Home page photo credits: mountain sunrise by LiteraryDP, Pondicherry sea sunrise by Mkamath1976 &mdash; Wikimedia Commons (<a href="https://creativecommons.org/licenses/by-sa/4.0" target="_blank" rel="noopener" style="color: inherit; text-decoration: underline;">CC BY-SA</a>)</p>
            </div>
        </div>
    </footer>
    
    <!-- WhatsApp Float Button -->
    <div class="whatsapp-float">
        <a href="https://wa.me/919611120023" target="_blank" class="whatsapp-btn" aria-label="Chat on WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <!-- Call Float Button -->
    <div class="call-float">
        <a href="tel:+919611120023" class="call-btn" aria-label="Call Shanvi Tours & Travels">
            <i class="fas fa-phone"></i>
        </a>
    </div>

    <!-- BreadcrumbList structured data: page context for AI answer engines and rich results -->
    <?php
    $breadcrumb_labels = [
        'index.php'                            => 'Home',
        'about.php'                            => 'About Us',
        'services.php'                         => 'Our Services',
        'fleet.php'                            => 'Our Fleet & Tariffs',
        '21-seater-bus-rental-bangalore.php'   => '21 Seater Mini Bus Rental',
        'blog.php'                             => 'Travel Blog & Guides',
        'blog-21-seater-mini-bus-rental-bangalore.php' => '21 Seater Mini Bus Rental Guide',
        'blog-tempo-traveller-vs-21-seater-bus.php'   => 'Tempo Traveller vs 21 Seater Bus',
        'blog-weekend-road-trips-bangalore-21-seater.php' => 'Weekend Road Trips Bangalore',
        'blog-corporate-team-outing-bus-bangalore.php' => 'Corporate Team Outing Bus Rental',
        'gallery.php'                          => 'Gallery',
        'contact.php'                          => 'Contact',
        '404.php'                              => 'Page Not Found',
    ];
    $current_file = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    $breadcrumb_items = [['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $site_url . '/']];
    if (strpos($current_file, 'blog-') === 0) {
        $breadcrumb_items[] = [
            '@type' => 'ListItem',
            'position' => 2,
            'name' => 'Travel Blog',
            'item' => $site_url . '/blog.php',
        ];
        $breadcrumb_items[] = [
            '@type' => 'ListItem',
            'position' => 3,
            'name' => isset($breadcrumb_labels[$current_file]) ? $breadcrumb_labels[$current_file] : 'Article',
            'item' => $site_url . '/' . $current_file,
        ];
    } elseif ($current_file !== 'index.php' && isset($breadcrumb_labels[$current_file])) {
        $breadcrumb_items[] = [
            '@type' => 'ListItem',
            'position' => 2,
            'name' => $breadcrumb_labels[$current_file],
            'item' => $site_url . '/' . $current_file,
        ];
    }
    ?>
    <script type="application/ld+json">
    <?php echo json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => $breadcrumb_items,
    ], JSON_UNESCAPED_SLASHES); ?>
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="js/script.js"></script>
</body>
</html>
