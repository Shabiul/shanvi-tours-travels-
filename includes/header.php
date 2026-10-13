<?php
// Per-page SEO overrides. Each page sets $page_title / $page_description / $page_keywords
// before including this file; sensible site-wide defaults are used otherwise.
$site_name   = 'Shanvi Tours & Travels';
$site_url    = 'https://www.shanvitoursandtravels.com';
$page_title       = isset($page_title) ? $page_title : 'Mini Bus & Bus Rental Bangalore - 12 to 49 Seater, With Driver';
$page_description = isset($page_description) ? $page_description : "Shanvi Tours & Travels: mini bus and bus rental in Bangalore since 2013. 12+1, 21+1, 33+1 & 49+1 seater vehicles with driver for corporate, wedding, school & outstation trips.";
$page_keywords    = isset($page_keywords) ? $page_keywords : 'mini bus rental bangalore, bus rental bangalore, bus hire bangalore, mini bus hire bangalore, tourist bus rental bangalore, bus rental near me, corporate bus rental bangalore';
if (!isset($canonical_url)) {
    $raw_path      = isset($_SERVER['REQUEST_URI']) ? strtok($_SERVER['REQUEST_URI'], '?') : '/';
    $current_path  = ($raw_path === '/index.php' || $raw_path === '' || $raw_path === '/') ? '/' : $raw_path;
    $canonical_url = rtrim($site_url, '/') . ($current_path === '/' ? '/' : $current_path);
}
$og_image      = isset($og_image) ? $og_image : ($site_url . '/images/img_1.jpeg');

?>
<?php
$rendered_title = (strpos($page_title, $site_name) !== false) ? $page_title : ($page_title . ' | ' . $site_name);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($rendered_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($page_keywords); ?>">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="author" content="Shanvi Tours & Travels Bangalore">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">

    <!-- Geo / Local-business Signals (GEO & Local Ranking) -->
    <meta name="geo.region" content="IN-KA">
    <meta name="geo.placename" content="Bangalore, Karnataka, India">
    <meta name="geo.position" content="12.9634;77.5099">
    <meta name="ICBM" content="12.9634, 77.5099">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($site_name); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($rendered_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($og_image); ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Shanvi Tours & Travels Bangalore Bus Rental Fleet">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($rendered_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($og_image); ?>">
    <meta name="twitter:image:alt" content="Shanvi Tours & Travels Bangalore Bus Rental Fleet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/fav.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Preconnect to third-party origins used above the fold -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo filemtime(__DIR__ . '/../css/style.css'); ?>">

    <!-- WebSite Schema with SearchAction for Google Sitelinks -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "@id": "<?php echo htmlspecialchars($site_url); ?>/#website",
        "name": "Shanvi Tours & Travels",
        "url": "<?php echo htmlspecialchars($site_url); ?>/",
        "description": "Mini Bus & Bus Rental Company in Bangalore - 12 to 49 Seater AC Coaches With Chauffeur",
        "publisher": {
            "@id": "<?php echo htmlspecialchars($site_url); ?>/#organization"
        },
        "inLanguage": "en-IN"
    }
    </script>

    <!-- LocalBusiness / TravelAgency structured data (site-wide, powers GEO / AI answer citations) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": ["TravelAgency", "AutoRental", "LocalBusiness"],
        "@id": "<?php echo htmlspecialchars($site_url); ?>/#organization",
        "name": "Shanvi Tours & Travels",
        "legalName": "Shanvi Tours & Travels Bangalore",
        "alternateName": [
            "Shanvi Travels Bangalore",
            "Shanvi Bus Rental Bangalore",
            "Shanvi Tours Bangalore",
            "Shanvi Tours & Travels Doddabasthihalli",
            "Shanvi Tours & Travels SMV Layout"
        ],
        "disambiguatingDescription": "Shanvi Tours & Travels Bangalore is an independent commercial passenger transport service based in Nagadevanahalli, Bangalore, Karnataka (PIN 560056) operating Yellow-Board buses with drivers since 2013. We are not affiliated with third-party bus operators of similar names in Indore, Lucknow, Noida, or RedBus booking agents.",
        "slogan": "Bangalore's Trusted Mini Bus & Bus Rental Service Since 2013",
        "foundingDate": "2013",
        "founder": {
            "@type": "Person",
            "name": "Pradeep H.B.",
            "jobTitle": "Founder & Managing Director",
            "worksFor": {
                "@type": "TravelAgency",
                "name": "Shanvi Tours & Travels Bangalore"
            }
        },
        "description": "Established in 2013, Shanvi Tours & Travels is a licensed commercial passenger transport company in Bangalore providing 12+1, 21+1, 33+1, and 49+1 seater AC mini buses and luxury coaches with verified drivers for corporate shuttles, employee transport, weddings, school trips, and outstation tours across Karnataka, Kerala, Tamil Nadu, Telangana, and Andhra Pradesh.",
        "image": "<?php echo htmlspecialchars($og_image); ?>",
        "logo": "<?php echo htmlspecialchars($site_url); ?>/images/logo.png",
        "url": "<?php echo htmlspecialchars($site_url); ?>/",
        "telephone": "+91-9611120023",
        "priceRange": "₹₹",
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Bangalore Commercial Bus & Tempo Traveller Rental Tariffs",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "12+1 Seater Tempo Traveller Rental Bangalore",
                        "description": "Local 8-Hour / 80-Km package starting from ₹2,800; outstation from ₹24/km"
                    },
                    "priceSpecification": {
                        "@type": "PriceSpecification",
                        "price": "2800",
                        "priceCurrency": "INR"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "21+1 Seater Mercedes Mini Bus Rental Bangalore",
                        "description": "Local 8-Hour / 80-Km package starting from ₹4,500; outstation from ₹32/km"
                    },
                    "priceSpecification": {
                        "@type": "PriceSpecification",
                        "price": "4500",
                        "priceCurrency": "INR"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "33+1 Seater Touring Bus Rental Bangalore",
                        "description": "Local 8-Hour / 80-Km package starting from ₹6,500; outstation from ₹42/km"
                    },
                    "priceSpecification": {
                        "@type": "PriceSpecification",
                        "price": "6500",
                        "priceCurrency": "INR"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "49+1 Seater Luxury Wedding Coach Rental Bangalore",
                        "description": "Local 8-Hour / 80-Km package starting from ₹8,500; outstation from ₹50/km"
                    },
                    "priceSpecification": {
                        "@type": "PriceSpecification",
                        "price": "8500",
                        "priceCurrency": "INR"
                    }
                }
            ]
        },
        "paymentAccepted": ["Cash", "Credit Card", "UPI", "Bank Transfer", "Corporate Invoicing"],
        "currenciesAccepted": "INR",
        "knowsAbout": [
            "Mini Bus Rental Bangalore",
            "Bus Rental Bangalore",
            "Tempo Traveller Hire Bangalore",
            "12 Seater Tempo Traveller Rental",
            "21 Seater Mini Bus Rental",
            "33 Seater Bus Hire Bangalore",
            "49 Seater Luxury Bus Rental",
            "Corporate Bus Rental Bangalore",
            "Employee Transport Services Bangalore",
            "Wedding Bus Rental Bangalore",
            "Wedding Transport Logistics Bangalore",
            "49+1 Luxury Coach Wedding Rental",
            "Multi-Vehicle Coordinated Convoys for Weddings with 200+ Guests",
            "Continuous Shuttle Loops Between Guest Hotels and Reception Venues",
            "School and College Excursion Bus Hire",
            "Pilgrimage Bus Rental Tirupati Dharmasthala",
            "Outstation Bus Hire Karnataka South India",
            "All India Tourist Permit Commercial Buses"
        ],
        "hasMap": "https://maps.app.goo.gl/xzitq4A2wqQ5V18X7",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "#2472/1, 3rd Block, SMV Layout, Doddabasthihalli, Near Vijaya Hospital, Nagadevanahalli",
            "addressLocality": "Bangalore",
            "addressRegion": "Karnataka",
            "postalCode": "560056",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 12.9634,
            "longitude": 77.5099
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            "opens": "00:00",
            "closes": "23:59"
        },
        "areaServed": [
            { "@type": "City", "name": "Bangalore" },
            { "@type": "State", "name": "Karnataka" },
            { "@type": "State", "name": "Kerala" },
            { "@type": "State", "name": "Tamil Nadu" },
            { "@type": "State", "name": "Telangana" },
            { "@type": "State", "name": "Andhra Pradesh" },
            { "@type": "Place", "name": "Whitefield, Bangalore" },
            { "@type": "Place", "name": "Electronic City, Bangalore" },
            { "@type": "Place", "name": "Koramangala, Bangalore" },
            { "@type": "Place", "name": "Indiranagar, Bangalore" },
            { "@type": "Place", "name": "HSR Layout, Bangalore" },
            { "@type": "Place", "name": "Marathahalli, Bangalore" },
            { "@type": "Place", "name": "Jayanagar, Bangalore" },
            { "@type": "Place", "name": "JP Nagar, Bangalore" },
            { "@type": "Place", "name": "BTM Layout, Bangalore" },
            { "@type": "Place", "name": "Yelahanka, Bangalore" },
            { "@type": "Place", "name": "Hebbal, Bangalore" },
            { "@type": "Place", "name": "Banashankari, Bangalore" },
            { "@type": "Place", "name": "Malleshwaram, Bangalore" },
            { "@type": "Place", "name": "Rajajinagar, Bangalore" },
            { "@type": "Place", "name": "Sarjapur Road, Bangalore" },
            { "@type": "Place", "name": "Bannerghatta Road, Bangalore" },
            { "@type": "Place", "name": "KR Puram, Bangalore" },
            { "@type": "Place", "name": "Bellandur, Bangalore" },
            { "@type": "Place", "name": "RT Nagar, Bangalore" },
            { "@type": "Place", "name": "Yeshwanthpur, Bangalore" },
            { "@type": "Place", "name": "Nagadevanahalli, Bangalore" },
            { "@type": "Place", "name": "Kengeri, Bangalore" },
            { "@type": "Place", "name": "SMV Layout, Bangalore" }
        ],
        "serviceArea": {
            "@type": "GeoCircle",
            "geoMidpoint": { "@type": "GeoCoordinates", "latitude": 12.9634, "longitude": 77.5099 },
            "geoRadius": "50000"
        },
        "sameAs": [
            "https://maps.app.goo.gl/xzitq4A2wqQ5V18X7",
            "https://facebook.com",
            "https://instagram.com",
            "https://twitter.com",
            "https://linkedin.com"
        ],
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "5.0",
            "bestRating": "5",
            "worstRating": "1",
            "ratingCount": "25",
            "reviewCount": "25"
        },
        "review": [
            {
                "@type": "Review",
                "author": { "@type": "Person", "name": "Goutham Gowda" },
                "datePublished": "2026-09-01",
                "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" },
                "reviewBody": "Good and friendly driver and had a pleasant trip with Shanvi tours and travels. Very good service"
            },
            {
                "@type": "Review",
                "author": { "@type": "Person", "name": "Ranjitha Gowda" },
                "datePublished": "2026-09-10",
                "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" },
                "reviewBody": "Good and clean buses, and the driver is polite and good and safe driving. Super experiences in Shanvi tours and travels bus."
            },
            {
                "@type": "Review",
                "author": { "@type": "Person", "name": "Praveen K" },
                "datePublished": "2026-09-18",
                "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" },
                "reviewBody": "Good Service, super interior and exterior, driving was to good. Thank you for Shanvi tours and travels"
            },
            {
                "@type": "Review",
                "author": { "@type": "Person", "name": "Manoj Kumar C" },
                "datePublished": "2026-09-05",
                "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" },
                "reviewBody": "Service was very good and communication with driver also friendly"
            },
            {
                "@type": "Review",
                "author": { "@type": "Person", "name": "Anand H S" },
                "datePublished": "2026-09-02",
                "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" },
                "reviewBody": "Good experience good driver and maintain"
            }
        ],
        "contactPoint": [
            {
                "@type": "ContactPoint",
                "telephone": "+91-9611120023",
                "contactType": "customer service",
                "areaServed": "IN",
                "availableLanguage": ["en", "kn", "hi"],
                "hoursAvailable": "Mo-Su 00:00-23:59"
            },
            {
                "@type": "ContactPoint",
                "telephone": "+91-8050507333",
                "contactType": "reservations",
                "areaServed": "IN",
                "availableLanguage": ["en", "kn", "hi"]
            }
        ]
    }
    </script>
</head>
<body<?php echo !empty($no_hero) ? ' data-no-hero="true"' : ''; ?>>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/" title="Shanvi Tours & Travels - Home">
                <img src="images/logo.png" alt="Shanvi Tours & Travels Logo" title="Shanvi Tours & Travels - Mini Bus & Bus Rental Bangalore" width="180" height="60" decoding="async">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="fleet.php">Fleet &amp; Tariffs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="21-seater-bus-rental-bangalore.php" style="position: relative;">
                            21 Seater Mini Bus
                            <span class="badge" style="background: var(--accent-orange, #f2a93b); color: #0d2c45; font-size: 0.65rem; padding: 2px 6px; border-radius: 20px; font-weight: 700; vertical-align: middle; margin-left: 2px;">Hot</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
