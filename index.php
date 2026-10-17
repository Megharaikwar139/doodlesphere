<?php
/**
 * DoodleSphere - 12,500+ Preschool Printable Activities Bundle
 * Main Landing Page
 */
$page_title = "DoodleSphere - 12,500+ Preschool Activities Printable Bundle";
$purchase_url = "payment.php";
$product_price = "₹199";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="Get 12,500+ Preschool Learning & Coloring Activities for just <?php echo $product_price; ?>. 2,500+ Coloring Pages and 10,000+ Worksheets. Instant digital PDF download for kids ages 3-8.">
    
    <!-- Open Graph Metadata -->
    <meta property="og:title" content="DoodleSphere - 12,500+ Preschool Activities Bundle">
    <meta property="og:description" content="Printable PDF Preschool Learning & Coloring Activities for just <?php echo $product_price; ?>. Instant Access!">
    <meta property="og:image" content="images/hero-girl.jpg">
    <meta property="og:type" content="website">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Fredoka:wght@400;500;600;700;800&family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- ===== HEADER / NAVBAR ===== -->
    <header class="header-navbar" id="navbar">
        <div class="container nav-container">
            <!-- Brand Logo -->
            <a href="#" class="brand-logo-group" aria-label="DoodleSphere Home">
                <img src="images/logo.png" alt="DoodleSphere Logo" class="brand-emblem" width="48" height="48">
                <div class="brand-text-col">
                    <span class="brand-title"><span class="brand-doodle">Doodle</span><span class="brand-sphere">Sphere</span></span>
                    <span class="brand-tagline">PRINT &bull; PLAY &bull; LEARN &bull; GROW</span>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <ul class="nav-desktop-links">
                <li><a href="#whats-inside" class="nav-link">What's Inside</a></li>
                <li><a href="#how-it-works" class="nav-link">How It Works</a></li>
                <li><a href="#faq" class="nav-link">FAQ</a></li>
            </ul>

            <!-- Header CTA Button -->
            <a href="<?php echo htmlspecialchars($purchase_url); ?>" class="btn-primary-pill nav-cta-btn js-purchase-btn">Get Instant Access</a>

            <!-- Mobile Hamburger Button -->
            <button class="hamburger-btn" id="hamburgerBtn" aria-label="Toggle navigation menu" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

        <!-- Mobile Drawer Menu -->
        <nav class="mobile-nav-drawer" id="mobileNavDrawer" aria-label="Mobile Navigation">
            <a href="#whats-inside" class="nav-link">What's Inside</a>
            <a href="#how-it-works" class="nav-link">How It Works</a>
            <a href="#faq" class="nav-link">FAQ</a>
            <a href="<?php echo htmlspecialchars($purchase_url); ?>" class="btn-primary-pill js-purchase-btn">Get Instant Access</a>
        </nav>
    </header>

    <main>
        <!-- ===== HERO SECTION ===== -->
        <section class="hero-section" id="hero">
            <!-- Hero Panoramic Banner -->
            <div class="container hero-banner-wrap">
                <a href="<?php echo htmlspecialchars($purchase_url); ?>" class="hero-banner-card js-purchase-btn" aria-label="12,500+ Preschool Activities Printable Bundle">
                    <img src="images/banner-hero.jpg" alt="12,500+ Preschool Learning and Coloring Activities Bundle" class="hero-banner-img" width="1024" height="213" fetchpriority="high">
                </a>
            </div>

            <div class="container hero-grid">
                <!-- Left Column -->
                <div class="hero-left">
                    <!-- Headline Cloud with surrounding stars and leaves -->
                    <div class="hero-headline-cloud-wrap">
                        <!-- Top-Left Star & Sparkle -->
                        <div class="deco-star-top" aria-hidden="true">
                            <svg class="star-yellow-svg" width="38" height="38" viewBox="0 0 24 24" fill="#FFC72C">
                                <polygon points="12,2 15,9 22,9 17,14 19,21 12,17 5,21 7,14 2,9 9,9"/>
                            </svg>
                            <svg class="sparkle-cyan-svg" width="20" height="20" viewBox="0 0 24 24" fill="#0875D1">
                                <path d="M12,2 L14,9 L21,12 L14,15 L12,22 L10,15 L3,12 L10,9 Z"/>
                            </svg>
                        </div>

                        <!-- The Scalloped Yellow Cloud -->
                        <div class="hero-yellow-cloud">
                            <span class="hero-number-main">12,500+</span>
                            <h1 class="hero-title-main">PRESCHOOL ACTIVITIES</h1>
                        </div>

                        <!-- Left Tropical Leaves -->
                        <div class="deco-leaves-left" aria-hidden="true">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                <path d="M10,42 C10,22 26,12 40,10 C40,26 28,42 10,42 Z" fill="#10B981"/>
                                <path d="M6,44 C6,30 18,20 30,18 C30,32 20,44 6,44 Z" fill="#059669"/>
                            </svg>
                        </div>

                        <!-- Bottom Star -->
                        <div class="deco-star-bottom" aria-hidden="true">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="#FFC72C">
                                <polygon points="12,2 15,9 22,9 17,14 19,21 12,17 5,21 7,14 2,9 9,9"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Badges Row -->
                    <div class="hero-badges-row">
                        <!-- Pink 2,500+ Coloring Pages -->
                        <div class="hero-stat-pill stat-pill-pink">
                            <span class="pill-bold-num" style="color: #FF1D58;">2,500+</span>
                            <span class="pill-label-text">Coloring Pages</span>
                        </div>

                        <!-- Plus Sign -->
                        <div class="stat-plus-badge" aria-hidden="true">+</div>

                        <!-- Blue 10,000+ Worksheets -->
                        <div class="hero-stat-pill stat-pill-blue">
                            <span class="pill-bold-num" style="color: #0875D1;">10,000+</span>
                            <span class="pill-label-text">Worksheets</span>
                        </div>
                    </div>

                    <!-- Feature Indicators Row -->
                    <div class="hero-features-row">
                        <!-- For Kids Ages 3-8 -->
                        <div class="hero-feat-pill feat-pill-green">
                            <span class="feat-icon-circle">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#0D9488" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"/>
                                    <path d="M8 14s1.5 2 4 2 4-2 4-2"/>
                                    <line x1="9" y1="9" x2="9.01" y2="9"/>
                                    <line x1="15" y1="9" x2="15.01" y2="9"/>
                                </svg>
                            </span>
                            <div class="feat-text-col">
                                <span class="feat-top-line">For Kids</span>
                                <span class="feat-bottom-line">Ages <strong class="highlight-pink">3–8</strong></span>
                            </div>
                        </div>

                        <!-- Printable PDF Print at Home -->
                        <div class="hero-feat-pill feat-pill-purple">
                            <span class="feat-icon-circle">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#6366F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 6 2 18 2 18 9"/>
                                    <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/>
                                    <rect x="6" y="14" width="12" height="8"/>
                                </svg>
                            </span>
                            <div class="feat-text-col">
                                <span class="feat-top-line">Printable PDF</span>
                                <span class="feat-bottom-line">Print at Home</span>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Group -->
                    <div class="hero-cta-group">
                        <a href="<?php echo htmlspecialchars($purchase_url); ?>" class="btn-hero-complete js-purchase-btn">
                            Complete Bundle – <?php echo $product_price; ?> &rarr;
                        </a>
                        <div class="hero-trust-bar">
                            <span class="trust-badge-item">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="#0875D1">
                                    <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/>
                                </svg>
                                Secure Payment via Cashfree
                            </span>
                            <span class="trust-badge-item">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="#F59E0B">
                                    <path d="M11 21h-1l1-7H7.5c-.88 0-.33-.75-.31-.78C8.48 10.94 10.42 7.54 13 3h1l-1 7h3.5c.49 0 .56.33.47.51l-6 10.49z"/>
                                </svg>
                                Instant Access After Payment
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Right Column (Exact Hero Artwork from Reference) -->
                <div class="hero-right">
                    <div class="hero-photo-wrapper">
                        <!-- Main Hero Photo & Artwork from Reference -->
                        <img src="images/hero-girl-exact.png" alt="Smiling preschool girl drawing on a worksheet" class="hero-girl-img" width="608" height="532" fetchpriority="high">
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== CATEGORY PILLS BAR (Below Hero - Full Width) ===== -->
        <section class="category-bar-section" aria-label="Preschool Activity Categories">
            <!-- Left Decorative Cluster (Leaves + Heart + Star) -->
            <div class="cat-deco-left" aria-hidden="true">
                <svg class="cat-deco-leaves" width="80" height="96" viewBox="0 0 80 96" fill="none">
                    <path d="M0 48 C20 48 56 36 68 10 C50 8 26 22 0 48 Z" fill="#22C55E"/>
                    <path d="M0 48 C22 38 44 26 68 10" stroke="#16A34A" stroke-width="2.5" stroke-linecap="round"/>
                    <path d="M0 72 C16 72 46 64 56 44 C40 42 20 52 0 72 Z" fill="#16A34A"/>
                    <path d="M0 72 C18 64 36 54 56 44" stroke="#15803D" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <div class="cat-deco-floaters-left">
                    <svg class="cat-deco-heart" width="28" height="28" viewBox="0 0 24 24" fill="#FF5B84">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                    <svg class="cat-deco-star-left" width="20" height="20" viewBox="0 0 24 24" fill="#FFC72C">
                        <polygon points="12,2 15,9 22,9 17,14 19,21 12,17 5,21 7,14 2,9 9,9"/>
                    </svg>
                </div>
            </div>

            <!-- Full Width Category Items Wrapper -->
            <div class="category-bar-wrapper">
                <!-- Alphabets -->
                <a href="#whats-inside" class="category-pill-card">
                    <div class="category-pill pill-alphabets">
                        <img src="images/cat-alphabets.svg" alt="Alphabets" class="cat-pill-icon" width="46" height="46">
                    </div>
                    <span class="category-pill-label">Alphabets</span>
                </a>
                <!-- Numbers -->
                <a href="#whats-inside" class="category-pill-card">
                    <div class="category-pill pill-numbers">
                        <img src="images/cat-numbers.svg" alt="Numbers" class="cat-pill-icon" width="46" height="46">
                    </div>
                    <span class="category-pill-label">Numbers</span>
                </a>
                <!-- Shapes -->
                <a href="#whats-inside" class="category-pill-card">
                    <div class="category-pill pill-shapes">
                        <img src="images/cat-shapes.svg" alt="Shapes" class="cat-pill-icon" width="46" height="46">
                    </div>
                    <span class="category-pill-label">Shapes</span>
                </a>
                <!-- Animals -->
                <a href="#whats-inside" class="category-pill-card">
                    <div class="category-pill pill-animals">
                        <img src="images/cat-animals.svg" alt="Animals" class="cat-pill-icon" width="46" height="46">
                    </div>
                    <span class="category-pill-label">Animals</span>
                </a>
                <!-- Tracing -->
                <a href="#whats-inside" class="category-pill-card">
                    <div class="category-pill pill-tracing">
                        <img src="images/cat-tracing.svg" alt="Tracing" class="cat-pill-icon" width="46" height="46">
                    </div>
                    <span class="category-pill-label">Tracing</span>
                </a>
                <!-- Coloring -->
                <a href="#whats-inside" class="category-pill-card">
                    <div class="category-pill pill-coloring">
                        <img src="images/cat-coloring.svg" alt="Coloring" class="cat-pill-icon" width="46" height="46">
                    </div>
                    <span class="category-pill-label">Coloring</span>
                </a>
            </div>

            <!-- Right Decorative Cluster (Leaves + Star) -->
            <div class="cat-deco-right" aria-hidden="true">
                <div class="cat-deco-floaters-right">
                    <svg class="cat-deco-star-right" width="24" height="24" viewBox="0 0 24 24" fill="#FFC72C">
                        <polygon points="12,2 15,9 22,9 17,14 19,21 12,17 5,21 7,14 2,9 9,9"/>
                    </svg>
                </div>
                <svg class="cat-deco-leaves-right" width="80" height="96" viewBox="0 0 80 96" fill="none">
                    <path d="M80 48 C60 48 24 36 12 10 C30 8 54 22 80 48 Z" fill="#22C55E"/>
                    <path d="M80 48 C58 38 36 26 12 10" stroke="#16A34A" stroke-width="2.5" stroke-linecap="round"/>
                    <path d="M80 72 C64 72 34 64 24 44 C40 42 60 52 80 72 Z" fill="#16A34A"/>
                    <path d="M80 72 C62 64 44 54 24 44" stroke="#15803D" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </div>
        </section>

        <!-- ===== "SEE WHAT'S INSIDE" SECTION ===== -->
        <section class="see-inside-section" id="whats-inside">
            <!-- Organic Gentle Top Wave -->
            <div class="section-wave-top" aria-hidden="true">
                <svg viewBox="0 0 1440 36" preserveAspectRatio="none">
                    <path d="M0,0 C360,18 720,10 1080,16 C1260,20 1380,12 1440,6 L1440,0 L0,0 Z" fill="#FFFDF7"></path>
                </svg>
            </div>

            <div class="container">
                <h2 class="section-title">SEE WHAT'S <span class="text-pink">INSIDE</span></h2>
                <p class="section-subtitle">A huge variety of printable activities to keep your child engaged and learning.</p>

                <!-- 6 Worksheet Gallery Previews -->
                <div class="worksheets-gallery-wrap">
                    <div class="worksheets-gallery-grid">
                        <!-- 1. Alphabet -->
                        <div class="worksheet-card ws-rot-1" title="Alphabet Worksheet">
                            <img src="images/ws-alphabet.jpg" alt="Alphabet Tracing Worksheet Aa" class="worksheet-img" loading="lazy" width="170" height="227">
                        </div>

                        <!-- 2. Numbers -->
                        <div class="worksheet-card ws-rot-2" title="Numbers Worksheet">
                            <img src="images/ws-numbers.jpg" alt="Numbers Counting Worksheet 3" class="worksheet-img" loading="lazy" width="170" height="227">
                        </div>

                        <!-- 3. Coloring Page -->
                        <div class="worksheet-card ws-rot-3" title="Coloring Page Worksheet">
                            <img src="images/ws-lion.jpg" alt="Coloring Page Baby Lion" class="worksheet-img" loading="lazy" width="170" height="227">
                        </div>

                        <!-- 4. Shapes -->
                        <div class="worksheet-card ws-rot-4" title="Shapes Worksheet">
                            <img src="images/ws-shapes.jpg" alt="Shapes Tracing Worksheet" class="worksheet-img" loading="lazy" width="170" height="227">
                        </div>

                        <!-- 5. Tracing -->
                        <div class="worksheet-card ws-rot-5" title="Tracing Worksheet">
                            <img src="images/ws-tracing.jpg" alt="Pre-writing Line Tracing Worksheet" class="worksheet-img" loading="lazy" width="170" height="227">
                        </div>

                        <!-- 6. Animals -->
                        <div class="worksheet-card ws-rot-6" title="Animals Worksheet">
                            <img src="images/ws-giraffe.jpg" alt="Animals Giraffe Worksheet Gg" class="worksheet-img" loading="lazy" width="170" height="227">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Organic Downward Curved Bottom Wave -->
            <div class="section-wave-bottom" aria-hidden="true">
                <svg viewBox="0 0 1440 80" preserveAspectRatio="none">
                    <path d="M0,15 C360,65 1080,65 1440,15 L1440,80 L0,80 Z" fill="#FFFDF7"></path>
                </svg>
            </div>
        </section>

        <!-- ===== "WHAT'S INCLUDED?" SECTION ===== -->
        <section class="whats-included-section" id="whats-included">
            <div class="container">
                <h2 class="section-title">WHAT'S INCLUDED?</h2>
                <p class="section-subtitle">12,500+ high-quality preschool learning and coloring activities, including:</p>

                <!-- Row 1: 3 Major Cards -->
                <div class="included-grid-top">
                    <!-- Card 1: Coloring Pages -->
                    <div class="included-card inc-card-pink">
                        <div class="included-icon-box">🎨</div>
                        <div class="included-info">
                            <h3 class="included-title">2,500+ Coloring Pages</h3>
                            <p class="included-desc">Fun and engaging coloring activities</p>
                        </div>
                    </div>

                    <!-- Card 2: Worksheets -->
                    <div class="included-card inc-card-blue">
                        <div class="included-icon-box">📄</div>
                        <div class="included-info">
                            <h3 class="included-title">10,000+ Worksheets</h3>
                            <p class="included-desc">Practice activities for early learning</p>
                        </div>
                    </div>

                    <!-- Card 3: Alphabets & Letters -->
                    <div class="included-card inc-card-yellow">
                        <div class="included-icon-box">🔤</div>
                        <div class="included-info">
                            <h3 class="included-title">Alphabets &amp; Letters</h3>
                            <p class="included-desc">Recognize, trace and practice letters</p>
                        </div>
                    </div>
                </div>

                <!-- Row 2: 4 Activity Cards -->
                <div class="included-grid-bottom">
                    <!-- Card 4: Numbers & Counting -->
                    <div class="included-card inc-card-teal">
                        <div class="included-icon-box">🔢</div>
                        <div class="included-info">
                            <h3 class="included-title">Numbers &amp; Counting</h3>
                            <p class="included-desc">Learn numbers with fun activities</p>
                        </div>
                    </div>

                    <!-- Card 5: Shapes & Colors -->
                    <div class="included-card inc-card-lavender">
                        <div class="included-icon-box">🔺</div>
                        <div class="included-info">
                            <h3 class="included-title">Shapes &amp; Colors</h3>
                            <p class="included-desc">Identify and trace shapes and colors</p>
                        </div>
                    </div>

                    <!-- Card 6: Animals -->
                    <div class="included-card inc-card-amber">
                        <div class="included-icon-box">🦁</div>
                        <div class="included-info">
                            <h3 class="included-title">Animals</h3>
                            <p class="included-desc">Fun animal-themed activities</p>
                        </div>
                    </div>

                    <!-- Card 7: Tracing & Pre-Writing -->
                    <div class="included-card inc-card-mint">
                        <div class="included-icon-box">✏️</div>
                        <div class="included-info">
                            <h3 class="included-title">Tracing &amp; Pre-Writing</h3>
                            <p class="included-desc">Build early writing skills</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== "WHY PARENTS & TEACHERS LOVE IT" SECTION ===== -->
        <section class="why-love-section">
            <div class="container">
                <h2 class="section-title">WHY PARENTS &amp; TEACHERS LOVE IT</h2>
                
                <div class="why-love-grid">
                    <!-- 1 -->
                    <div class="why-love-item">
                        <div class="why-love-icon-circle icon-bg-green">🧠</div>
                        <span class="why-love-label">Keeps Kids<br>Engaged</span>
                    </div>

                    <!-- 2 -->
                    <div class="why-love-item">
                        <div class="why-love-icon-circle icon-bg-pink">❤️</div>
                        <span class="why-love-label">Screen-Free<br>Activities</span>
                    </div>

                    <!-- 3 -->
                    <div class="why-love-item">
                        <div class="why-love-icon-circle icon-bg-yellow">💡</div>
                        <span class="why-love-label">Supports Early<br>Learning</span>
                    </div>

                    <!-- 4 -->
                    <div class="why-love-item">
                        <div class="why-love-icon-circle icon-bg-blue">🖨️</div>
                        <span class="why-love-label">Print Whenever<br>You Need</span>
                    </div>

                    <!-- 5 -->
                    <div class="why-love-item">
                        <div class="why-love-icon-circle icon-bg-orange">⭐</div>
                        <span class="why-love-label">Wide Variety<br>of Activities</span>
                    </div>

                    <!-- 6 -->
                    <div class="why-love-item">
                        <div class="why-love-icon-circle icon-bg-purple">👥</div>
                        <span class="why-love-label">Great for Home<br>or Classroom Use</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== "PERFECT FOR" & "HOW IT WORKS" PANELS ===== -->
        <section class="two-panels-section" id="how-it-works">
            <div class="container two-panels-grid">
                <!-- Left Panel: Perfect For -->
                <div class="panel-container">
                    <h3 class="panel-title">PERFECT FOR</h3>
                    <div class="perfect-for-list">
                        <!-- Parents -->
                        <div class="perfect-item">
                            <img src="images/perfect-parents.jpg" alt="Parents and children" class="perfect-item-img" loading="lazy" width="68" height="68">
                            <div class="perfect-item-text">
                                <h4>Parents</h4>
                                <p>Fun and educational activities at home.</p>
                            </div>
                        </div>

                        <!-- Homeschool Families -->
                        <div class="perfect-item">
                            <img src="images/perfect-home.jpg" alt="Homeschool families" class="perfect-item-img" loading="lazy" width="68" height="68">
                            <div class="perfect-item-text">
                                <h4>Homeschool Families</h4>
                                <p>Support learning at your own pace.</p>
                            </div>
                        </div>

                        <!-- Teachers & Educators -->
                        <div class="perfect-item">
                            <img src="images/perfect-teacher.jpg" alt="Teachers and educators" class="perfect-item-img" loading="lazy" width="68" height="68">
                            <div class="perfect-item-text">
                                <h4>Teachers &amp; Educators</h4>
                                <p>Useful resources for preschool and kindergarten.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Panel: How It Works -->
                <div class="panel-container">
                    <h3 class="panel-title">HOW IT WORKS</h3>
                    <div class="how-it-works-steps">
                        <!-- Step 1 -->
                        <div class="step-card">
                            <span class="step-badge-num step-badge-pink">1</span>
                            <div class="step-icon-box">🛒</div>
                            <h4 class="step-title">Purchase</h4>
                            <p class="step-desc">Complete your secure payment via Cashfree.</p>
                        </div>

                        <div class="step-arrow" aria-hidden="true">&rarr;</div>

                        <!-- Step 2 -->
                        <div class="step-card">
                            <span class="step-badge-num step-badge-blue">2</span>
                            <div class="step-icon-box">✉️</div>
                            <h4 class="step-title">Get Access</h4>
                            <p class="step-desc">After successful payment, you'll be taken to the confirmation page.</p>
                        </div>

                        <div class="step-arrow" aria-hidden="true">&rarr;</div>

                        <!-- Step 3 -->
                        <div class="step-card">
                            <span class="step-badge-num step-badge-green">3</span>
                            <div class="step-icon-box">☁️</div>
                            <h4 class="step-title">Download</h4>
                            <p class="step-desc">Use the provided Google Drive link to access your PDF files.</p>
                        </div>

                        <div class="step-arrow" aria-hidden="true">&rarr;</div>

                        <!-- Step 4 -->
                        <div class="step-card">
                            <span class="step-badge-num step-badge-yellow">4</span>
                            <div class="step-icon-box">🖨️</div>
                            <h4 class="step-title">Print &amp; Play</h4>
                            <p class="step-desc">Print the activities whenever you need them.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== PROMOTIONAL CTA BANNER ===== -->
        <section class="promo-banner-section">
            <div class="container">
                <div class="promo-banner-card">
                    <div class="promo-banner-grid">
                        <!-- Left: Stack of Worksheets -->
                        <div class="promo-left">
                            <img src="images/worksheet-stack.jpg" alt="Stack of preschool activity worksheets" class="promo-stack-img" loading="lazy" width="440" height="330">
                        </div>

                        <!-- Right: Banner Copy & CTA -->
                        <div class="promo-right">
                            <h3 class="promo-heading">12,500+ ACTIVITIES.<br>ONE COMPLETE BUNDLE.</h3>
                            <p class="promo-subtext">2,500+ Coloring Pages + 10,000+ Worksheets</p>

                            <div class="hero-features-row">
                                <div class="feature-indicator indicator-green">
                                    <span class="feature-indicator-icon">👦</span>
                                    <span>For Kids Ages 3–8</span>
                                </div>
                                <div class="feature-indicator indicator-blue">
                                    <span class="feature-indicator-icon">🖨️</span>
                                    <span>Printable PDF Print at Home</span>
                                </div>
                            </div>

                            <a href="<?php echo htmlspecialchars($purchase_url); ?>" class="btn-primary-pill btn-large js-purchase-btn">
                                Get Instant Access – <?php echo $product_price; ?> &rarr;
                            </a>

                            <div class="trust-row">
                                <div class="trust-item">
                                    <span class="trust-icon">🛡️</span>
                                    <span>Secure Payment via Cashfree</span>
                                </div>
                                <div class="trust-item">
                                    <span class="trust-icon">⚡</span>
                                    <span>Instant Access After Payment</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== "FREQUENTLY ASKED QUESTIONS" SECTION ===== -->
        <section class="faq-section" id="faq">
            <div class="container">
                <h2 class="section-title">FREQUENTLY ASKED QUESTIONS</h2>

                <div class="faq-grid">
                    <!-- 1 -->
                    <div class="faq-card">
                        <div class="faq-card-header">
                            <span class="faq-card-icon">📄</span>
                            <h3 class="faq-question">Is this a physical product?</h3>
                        </div>
                        <p class="faq-answer">No. This is a digital PDF bundle. No physical product will be shipped.</p>
                    </div>

                    <!-- 2 -->
                    <div class="faq-card">
                        <div class="faq-card-header">
                            <span class="faq-card-icon">📦</span>
                            <h3 class="faq-question">What will I get?</h3>
                        </div>
                        <p class="faq-answer">You'll get access to the DoodleSphere 12,500+ Preschool Learning &amp; Coloring Activities Mega Bundle, containing 2,500+ coloring pages and 10,000+ worksheets.</p>
                    </div>

                    <!-- 3 -->
                    <div class="faq-card">
                        <div class="faq-card-header">
                            <span class="faq-card-icon">👥</span>
                            <h3 class="faq-question">What age group is it for?</h3>
                        </div>
                        <p class="faq-answer">The activities are designed for children ages 3–8.</p>
                    </div>

                    <!-- 4 -->
                    <div class="faq-card">
                        <div class="faq-card-header">
                            <span class="faq-card-icon">🖨️</span>
                            <h3 class="faq-question">Can I print the activities at home?</h3>
                        </div>
                        <p class="faq-answer">Yes. You can print the activities at home whenever needed.</p>
                    </div>

                    <!-- 5 -->
                    <div class="faq-card">
                        <div class="faq-card-header">
                            <span class="faq-card-icon">☁️</span>
                            <h3 class="faq-question">How do I receive the files?</h3>
                        </div>
                        <p class="faq-answer">After successful payment, you'll receive access instructions on the confirmation page with a Google Drive link.</p>
                    </div>

                    <!-- 6 -->
                    <div class="faq-card">
                        <div class="faq-card-header">
                            <span class="faq-card-icon">💻</span>
                            <h3 class="faq-question">Do I need special software?</h3>
                        </div>
                        <p class="faq-answer">No. The files are provided as PDF documents and can be opened with standard PDF reader software on any device.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== FINAL CTA SECTION ===== -->
        <section class="final-cta-section">
            <!-- Decorative stickers -->
            <span class="final-deco-sun" aria-hidden="true">☀️</span>
            <span class="final-deco-heart" aria-hidden="true">💖</span>

            <div class="container final-cta-wrap">
                <!-- Cartoon Boy Left -->
                <div class="cta-character-col">
                    <img src="images/cta-boy.jpg" alt="Happy cartoon boy waving" class="cta-character-img char-boy" loading="lazy" width="190" height="190">
                </div>

                <!-- Center Offer Content -->
                <div class="final-cta-center">
                    <h2 class="final-cta-title">Ready to Fill Your Activity Library?</h2>
                    <p class="final-cta-sub">12,500+ preschool activities for just <span class="price-highlight"><?php echo $product_price; ?></span>.</p>

                    <a href="<?php echo htmlspecialchars($purchase_url); ?>" class="btn-primary-pill btn-large js-purchase-btn">
                        Get Instant Access – <?php echo $product_price; ?> &rarr;
                    </a>

                    <div class="trust-row">
                        <div class="trust-item">
                            <span class="trust-icon">🛡️</span>
                            <span>Secure Payment via Cashfree</span>
                        </div>
                        <div class="trust-item">
                            <span class="trust-icon">⚡</span>
                            <span>Instant Access After Payment</span>
                        </div>
                    </div>
                </div>

                <!-- Cartoon Girl Right -->
                <div class="cta-character-col">
                    <img src="images/cta-girl.jpg" alt="Happy cartoon girl smiling" class="cta-character-img char-girl" loading="lazy" width="190" height="190">
                </div>
            </div>
        </section>
    </main>

    <!-- ===== FOOTER ===== -->
    <footer class="site-footer">
        <!-- Footer Panoramic Banner -->
        <div class="container footer-banner-wrap">
            <a href="<?php echo htmlspecialchars($purchase_url); ?>" class="footer-banner-card js-purchase-btn" aria-label="Get Instant Access to 12,500+ Preschool Activities">
                <img src="images/banner-footer.jpg" alt="DoodleSphere Preschool Learning and Coloring Activities" class="footer-banner-img" width="1024" height="213" loading="lazy">
            </a>
        </div>

        <div class="container footer-content">
            <div class="brand-text-col">
                <span class="brand-title" style="font-size: 1.25rem;"><span class="brand-doodle">Doodle</span><span class="brand-sphere">Sphere</span></span>
                <span class="brand-tagline">PRINT &bull; PLAY &bull; LEARN &bull; GROW</span>
            </div>

            <ul class="footer-links">
                <li><a href="#whats-inside">What's Inside</a></li>
                <li><a href="#how-it-works">How It Works</a></li>
                <li><a href="#faq">FAQ</a></li>
            </ul>

            <p class="footer-copy">&copy; <?php echo date("Y"); ?> DoodleSphere. All rights reserved.</p>
        </div>
    </footer>

    <!-- Interactive JavaScript -->
    <script src="script.js"></script>
</body>
</html>