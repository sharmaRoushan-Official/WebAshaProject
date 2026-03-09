<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include common header links for meta, CSS, JS, and favicon -->
    <?php include("include/headerlink.php"); ?>
    <!-- Compute current URL for metadata -->
    <?php
      $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
      $current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
    <!-- Page-specific metadata for Red Hat Training & Certification Offer -->
    <title>Red Hat Training & Certification Offer <?php echo date("Y"); ?> in Pune | WebAsha Technologies</title>
    <meta name="description" content="Join WebAsha Technologies’ Red Hat Training Offer <?php echo date("Y"); ?> in Pune. Get hands-on training, official materials, and discounted exam vouchers for RHCSA (EX200), RHCE (EX294), OpenStack (CL210), and OpenShift (DO180, DO280) certifications in 2025.">
    <meta name="keywords" content="Red Hat Training Offer Pune <?php echo date("Y"); ?>, RHCSA Certification, RHCE Training, OpenStack CL210 Course, OpenShift DO180 DO280 Training, Red Hat Exam Vouchers Pune">
    <!-- Canonical URL to avoid duplicate content -->
    <link rel="canonical" href="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <!-- Page-specific Open Graph for social sharing -->
    <meta property="og:title" content="Red Hat Training & Certification Offer <?php echo date("Y"); ?> in Pune | WebAsha Technologies">
    <meta property="og:description" content="Launch your Red Hat certification journey with WebAsha Technologies in Pune. Expert-led training, hands-on labs, and discounted exam vouchers for RHCSA, RHCE, OpenStack, and OpenShift.">
    <meta property="og:url" content="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <meta property="og:image" content="https://training.webasha.com/assets/img/red-hat/red-hat-training.webp">
    <meta property="og:image:alt" content="Red Hat Training & Certification Offer <?php echo date("Y"); ?> at WebAsha Technologies in Pune">
    <meta property="og:type" content="website">
    <!-- Page-specific Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Red Hat Training & Certification Offer <?php echo date("Y"); ?> in Pune | WebAsha Technologies">
    <meta name="twitter:description" content="Master Red Hat certifications with WebAsha Technologies’ training offer in Pune. Includes labs, official materials, and exam vouchers for RHCSA, RHCE, and more in 2025.">
    <meta name="twitter:image" content="https://training.webasha.com/assets/img/red-hat/red-hat-training.webp">
    <!-- Page-specific JSON-LD: Course schema for enhanced search visibility -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Course",
      "name": "Red Hat Training & Certification Offer <?php echo date("Y"); ?>",
      "description": "Prepare for Red Hat certifications with WebAsha Technologies in Pune. Expert-led training, hands-on labs, and discounted exam vouchers for RHCSA (EX200), RHCE (EX294), OpenStack (CL210), and OpenShift (DO180, DO280) in 2025.",
      "provider": {
        "@type": "Organization",
        "name": "WebAsha Technologies",
        "url": "https://training.webasha.com/",
        "sameAs": [
          "https://www.facebook.com/WebAshaTech/",
          "https://www.instagram.com/webashatech/",
          "https://x.com/ForteWebAsha",
          "https://www.linkedin.com/company/webasha-technologies",
          "https://in.pinterest.com/webasha",
          "https://www.youtube.com/@WebAshaTechnologies"
        ]
      },
      "offers": {
        "@type": "Offer",
        "url": "<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>",
        "priceCurrency": "INR",
        "price": "Request Info",
        "availability": "https://schema.org/InStock"
      },
      "courseMode": ["Onsite", "Online"],
      "hasCourseInstance": {
        "@type": "CourseInstance",
        "courseMode": "Classroom",
        "location": {
          "@type": "Place",
          "name": "WebAsha Technologies Pune",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Pune",
            "addressRegion": "Maharashtra",
            "addressCountry": "IN"
          }
        },
        "startDate": "<?php echo date('l, F j, Y', strtotime('+7 days')); ?>"
      }
    }
    </script>
</head>
  <!-- Starting page content -->
  <body>
    <!-- Including the site header -->
    <?php include("include/header.php"); ?>
    <!-- Creating banner section for Red Hat Training & Certification Offer -->
    <section class="banner-course">
      <div class="container">
        <div class="row align-items-center">
          <!-- Left Column -->
          <div class="col-lg-8 col-sm-12">
            <!-- Breadcrumb Navigation -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="/" class="text-decoration-none" aria-label="Home">
                    <svg viewBox="0 0 20 18" xmlns="http://www.w3.org/2000/svg" width="20" height="18">
                      <path d="M8 17.5V11.5H12V17.5H17V9.5H20L10 0.5L0 9.5H3V17.5H8Z" fill="currentColor" />
                    </svg>
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Red Hat Training & Certification Offer <?php echo date("Y"); ?></li>
              </ol>
            </nav>
            <!-- Banner Content -->
            <div class="banner-course-content">
              <!-- Course At-a-Glance -->
              <section class="at-a-glance text-light">
                <h1 class="heading-main-1 text-white">Red Hat RHCSA, RHCE, OpenStack, OpenShift Training & Certification Offer <?php echo date("Y"); ?> in Pune</h1>
                <!-- Review Card -->
                <div class="banner-review-card">
                  <div class="enrolled-group d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700" viewBox="0 0 24 24" aria-hidden="true" role="img" class="me-2">
                      <path d="M16 11c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-8 0c1.7 0 3-1.3 3-3S9.7 5 8 5 5 6.3 5 8s1.3 3 3 3zm0 2c-2.3 0-7 1.2-7 3.5V20h14v-3.5C15 14.2 10.3 13 8 13zm8 0c-.3 0-.7 0-1 .1 1.2.8 2 2.1 2 3.4V20h6v-3.5c0-2.3-4.7-3.5-7-3.5z" />
                    </svg>
                    <span>3,850 Certified Professionals</span>
                  </div>
                  <!-- Rating Stars -->
                  <ul class="list-unstyled rating-list">
                    <li>
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" aria-hidden="true" role="img" fill="#FFD700">
                        <path d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.782 1.401 8.178L12 18.897l-7.335 3.856 1.401-8.178L.132 9.21l8.2-1.192z" />
                      </svg>
                    </li>
                    <li>
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" aria-hidden="true" role="img" fill="#FFD700">
                        <path d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.782 1.401 8.178L12 18.897l-7.335 3.856 1.401-8.178L.132 9.21l8.2-1.192z" />
                      </svg>
                    </li>
                    <li>
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" aria-hidden="true" role="img" fill="#FFD700">
                        <path d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.782 1.401 8.178L12 18.897l-7.335 3.856 1.401-8.178L.132 9.21l8.2-1.192z" />
                      </svg>
                    </li>
                    <li>
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" aria-hidden="true" role="img" fill="#FFD700">
                        <path d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.782 1.401 8.178L12 18.897l-7.335 3.856 1.401-8.178L.132 9.21l8.2-1.192z" />
                      </svg>
                    </li>
                    <li>
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" aria-hidden="true" role="img">
                        <defs>
                          <clipPath id="halfStar">
                            <rect x="0" y="0" width="12" height="24"></rect>
                          </clipPath>
                        </defs>
                        <path d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.782 1.401 8.178L12 18.897l-7.335 3.856 1.401-8.178L.132 9.21l8.2-1.192z" fill="#FFD700" clip-path="url(#halfStar)" />
                        <path d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.782 1.401 8.178L12 18.897l-7.335 3.856 1.401-8.178L.132 9.21l8.2-1.192z" fill="#ddd" />
                      </svg>
                    </li>
                    <li>
                      <p>4.9 out of 5 Based on 48,765 Reviews</p>
                    </li>
                  </ul>
                  <!-- Social Ratings -->
                  <ul class="list-unstyled social-list">
                    <li>
                      <img src="assets/img/icons/google.svg" alt="Google Rating" width="20" height="20" loading="lazy"> 4.9/5
                    </li>
                    <li>
                      <img src="assets/img/icons/facebook.svg" alt="Facebook Rating" width="24" height="24" loading="lazy"> 4.9/5
                    </li>
                  </ul>
                </div>
                <!-- SEO-Friendly Content -->
                <p class="text-light mt-4">
                  Join <strong>WebAsha Technologies’ Red Hat Training & Certification Offer <?php echo date("Y"); ?></strong> in Pune to master RHCSA (EX200), RHCE (EX294), OpenStack (CL210), and OpenShift (DO180, DO280) certifications. This comprehensive program, offered by <span class="red-color">WebAsha Technologies</span>, equips IT professionals with hands-on skills in Linux administration, automation, and cloud technologies. With expert-led training, official Red Hat curriculum, and real-world lab simulations, you'll be prepared to excel in globally recognized certification exams.
                  <br><br>
                  This offer includes discounted exam vouchers, flexible training modes (online and offline), and placement assistance to boost your career in system administration, DevOps, and cloud computing. Whether you're a beginner or an experienced professional, our tailored courses ensure you gain the expertise needed to succeed in high-demand IT roles.
                  <br><br>
                  Enroll today to unlock your potential and achieve Red Hat certifications with WebAsha Technologies, a trusted training provider in Pune.
                </p>
                <div class="check-list-box">
                  <ul class="benefits-list mb-0">
                    <li>
                      <i class="fa-solid fa-square-check"></i> Official Red Hat Course Materials
                    </li>
                    <li>
                      <i class="fa-solid fa-square-check"></i> Hands-On Labs & Practice Exams
                    </li>
                    <li>
                      <i class="fa-solid fa-square-check"></i> Discounted Exam Vouchers
                    </li>
                    <li>
                      <i class="fa-solid fa-square-check"></i> Flexible Online & Offline Training
                    </li>
                    <li>
                      <i class="fa-solid fa-square-check"></i> Expert-Led Instruction
                    </li>
                    <li>
                      <i class="fa-solid fa-square-check"></i> Placement Assistance Post-Certification
                    </li>
                  </ul>
                </div>
                <table class="table table-dark table-bordered facts-table mt-3 mb-0">
                  <tbody>
                    <tr>
                      <td class="fw-semibold text-warning">Duration:</td>
                      <td class="text-light">4-8 Weeks (Weekday / Weekend Batches)</td>
                    </tr>
                    <tr>
                      <td class="fw-semibold text-warning">Mode:</td>
                      <td class="text-light">Online & Classroom Training</td>
                    </tr>
                    <tr>
                      <td class="fw-semibold text-warning">Certifications:</td>
                      <td class="text-light">RHCSA (EX200), RHCE (EX294), OpenStack (CL210), OpenShift (DO180, DO280)</td>
                    </tr>
                    <tr>
                      <td class="fw-semibold text-warning">Institute:</td>
                      <td class="text-light">WebAsha Technologies, Pune</td>
                    </tr>
                    <tr>
                      <td class="fw-semibold text-warning">Includes:</td>
                      <td class="text-light">Hands-on Labs, Official Red Hat Curriculum, Exam Vouchers, Placement Support</td>
                    </tr>
                  </tbody>
                </table>
              </section>
              <!-- Call-to-Action Buttons -->
              <div class="button-group mt-4 mb-4">
                <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20Red%20Hat%20Training%20Offer" class="btn-whatsapp text-decoration-none" aria-label="Contact via WhatsApp">
                  <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
                <a href="#" class="btn-phone text-decoration-none" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">
                  <i class="fa fa-download me-2"></i> Download Syllabus
                </a>
              </div>
            </div>
          </div>
          <!-- Right Column -->
          <div class="col-lg-4 col-sm-12">
            <div class="ec-council">
              <div class="video-thumbnail position-relative">
                <picture>
                  <source srcset="assets/img/red-hat/red-hat-training.webp" type="image/webp">
                  <img src="assets/img/red-hat/red-hat-training.webp" alt="Red Hat Training Preview Thumbnail" width="360" height="220" loading="lazy" decoding="async" class="img-fluid rounded shadow-sm">
                </picture>
                <button type="button" class="video-btn position-absolute top-50 start-50 translate-middle" aria-label="Play Red Hat training promo video" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="ERtp4zua0-s">
                  <svg class="play-icon" viewBox="0 0 64 64" width="64" height="64" aria-hidden="true" focusable="false">
                    <circle cx="32" cy="32" r="32" fill="rgba(0,0,0,0.55)" />
                    <path d="M26 20 L45 32 L26 44 z" fill="#fff" />
                  </svg>
                </button>
              </div>
              <div class="pera-group">
                <p class="desc">Industry-Recognized Red Hat Training & Certification</p>
                <p>Have Questions? Consult Our Experts</p>
              </div>
              <div class="button-group">
                <a href="#" class="animated-button1 mx-auto d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Training">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span> Enroll Now <i class="fa fa-arrow-right ms-2"></i>
                </a>
              </div>
              <!-- Accreditation -->
              <div class="text-white mt-4 mb-4">
                <h5>Accredited By</h5>
                <a href="#" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Training">
                  <picture>
                    <img src="assets/img/icons/partner/redhat.webp" alt="Red Hat Authorized Training Partner" height="146" width="180" loading="lazy">
                  </picture>
                </a>
              </div>
            </div>
          </div>
          <!-- Stats Section -->
          <div class="col-lg-12 col-sm-12">
            <div class="banner-course-card">
              <div class="banner-course-row">
                <div class="item">
                  <img src="assets/imgs/fi-1.png" alt="Professionals Trained" width="73" height="73" loading="lazy">
                  <div class="content">
                    <h2>1000+</h2>
                    <p>Professionals Trained</p>
                  </div>
                </div>
                <div class="item">
                  <img src="assets/imgs/fi-2.png" alt="Batches per Month" width="73" height="73" loading="lazy">
                  <div class="content">
                    <h2>8+</h2>
                    <p>Batches Every Month</p>
                  </div>
                </div>
                <div class="item">
                  <img src="assets/imgs/fi-3.png" alt="Countries" width="73" height="73" loading="lazy">
                  <div class="content">
                    <h2>20+</h2>
                    <p>Countries Served</p>
                  </div>
                </div>
                <div class="item">
                  <img src="assets/imgs/fi-4.png" alt="Corporate Clients" width="73" height="73" loading="lazy">
                  <div class="content">
                    <h2>1000+</h2>
                    <p>Corporate Clients</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- JSON-LD Breadcrumb Schema -->
      <script type="application/ld+json">
        { "@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [ { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://training.webasha.com/" }, { "@type": "ListItem", "position": 2, "name": "Red Hat Training & Certification Offer <?php echo date("Y"); ?>", "item": "<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>" } ] }
      </script>
</section>
    <!-- Adding sticky navigation for training sections -->
    <section class="sticky-main-header1" id="stickyheader" style="position: sticky; top: 0; z-index: 1000; background-color: white;">
      <div class="container">
        <div class="sticky-header-list">
          <ul class="list-unstyled mb-0">
            <li>
              <a href="#overview" class="btn btn-outline-primary text-decoration-none">Overview</a>
            </li>
            <li>
              <a href="#training-tracks" class="btn btn-outline-primary text-decoration-none">Training Tracks</a>
            </li>
            <li>
              <a href="#exam-prep" class="btn btn-outline-primary text-decoration-none">Exam Preparation</a>
            </li>
            <li>
              <a href="#our-instructor" class="btn btn-outline-primary text-decoration-none">Alumni</a>
            </li>
            <li>
              <a href="#exam-certification" class="btn btn-outline-primary text-decoration-none">Certification</a>
            </li>
            <li>
              <a href="#placement-reviews" class="btn btn-outline-primary text-decoration-none">Placement & Reviews</a>
            </li>
            <li>
              <a href="#faqs" class="btn btn-outline-primary text-decoration-none">FAQs</a>
            </li>
          </ul>
          <div class="button-group">
            <button type="button" class="btn btn-enroll" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Training">Enroll Now</button>
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</button>
          </div>
        </div>
      </div>
    </section>
    <!-- Starting lazy-loaded sections -->
    <!-- Including brand partners -->
    <section class="our-learners section-header text-center lazy-section">
      <?php include("include/brands.php"); ?>
    </section>
    <!-- Displaying recent placement testimonials -->
    <section class="course-recent-reviews section-header text-center lazy-section">
      <span class="section-badge">Recent Placements Testimonials</span>
      <h2 class="heading-main-1 text-white text-center">Red Hat Training & Certification Offer <?php echo date("Y"); ?> <span class="red-color">Recent Reviews</span></h2>
      <?php include("include/video-reviews.php"); ?>
    </section>
    <!-- Showing text-based reviews -->
    <section class="success-speaks-reviwe course-speaks section-header text-center lazy-section">
      <div class="container">
        <span class="section-badge">Recent Placements Testimonials</span>
        <h2 class="heading-main text-center mb-5">Red Hat Training & Certification Offer <?php echo date("Y"); ?> <span class="red-color">Reviews</span></h2>
        <?php include("include/text-reviews.php"); ?>
      </div>
    </section>
    <!-- Highlighting placement success -->
    <section class="course-technologies-placement lazy-section" id="placement-reviews">
      <?php include("include/placement.php"); ?>
    </section>
    <!-- Listing key features of training offer -->
    <section class="training-features section-header text-center mt-5 lazy-section">
      <div class="container">
        <!-- Preloading critical image for performance -->
        <link rel="preload" href="https://i.ibb.co/5X09hRg/lab.gif" as="image" fetchpriority="high">
        <span class="section-badge">Training Key Features</span>
        <h2 class="heading-main-1 text-center">Red Hat Training & Certification Offer <?php echo date("Y"); ?> <span class="red-color">Training Key Features</span></h2>
        <p class="text-muted text-center mb-5">Explore the unique benefits of our Red Hat Training Offer designed to help you achieve RHCSA, RHCE, OpenStack, and OpenShift certifications.</p>
        <?php include("include/red-hat-key-features.php"); ?>
    </section>
    <!-- Explaining why choose WebAsha -->
    <section class="py-5 course-comparison-section lazy-section">
      <?php include("include/why-webasha.php"); ?>
    </section>
    <!-- Starting main content -->
    <main>
      <!-- Training Overview Section -->
      <div class="container">
        <div class="row">
          <!-- Main Content -->
          <div class="col-lg-8 col-sm-12" id="sticky-start-section2">
            <!-- Describing Red Hat training offer -->
            <section class="contentcard lazy-section" id="overview">
              <div class="content-container" id="contentContainer1">
                <div class="summary-details text-center">
                  <h2 class="heading-main">Master Red Hat Certifications | <span class="red-color">Training & Certification Offer <?php echo date("Y"); ?></span> in Pune</h2>
                  <p class="text-muted mb-0">Join <b>WebAsha Technologies</b> for a comprehensive <b>Red Hat Training & Certification Offer <?php echo date("Y"); ?></b> in Pune. Prepare for RHCSA (EX200), RHCE (EX294), OpenStack (CL210), and OpenShift (DO180, DO280) with hands-on labs, official materials, and discounted exam vouchers.</p>
                </div>
                <h5 class="bold-text mb-2 mt-3">Why Red Hat Certifications?</h5>
                <p class="text-muted mb-0">Red Hat certifications are globally recognized for validating expertise in Linux administration, automation, and cloud technologies. They open doors to roles like system administrator, DevOps engineer, and cloud architect.</p>
                <ul class="mt-2">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Validate Linux and cloud skills
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Boost employability in IT
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Hands-on training with Red Hat tools
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Access high-demand roles
                  </li>
                </ul>
                <h5 class="bold-text mb-2 mt-3">Who Can Apply?</h5>
                <p class="text-muted mb-0">IT professionals, B.Tech, MCA, BCA, and Diploma students with basic Linux knowledge. RHCE and advanced courses require RHCSA or equivalent experience.</p>
                <h5 class="bold-text mb-2 mt-3">Training Duration:</h5>
                <p class="text-muted mb-0"><b>Flexible Options:</b> 4-8 Weeks — Online or Offline.</p>
                <h5 class="bold-text mb-2 mt-3">Training Offer Overview:</h5>
                <p class="text-muted mb-0">Our <b>Red Hat Training & Certification Offer <?php echo date("Y"); ?></b> provides expert-led training, official Red Hat courseware, hands-on labs, and discounted exam vouchers for RHCSA, RHCE, OpenStack, and OpenShift certifications.</p>
                <h5 class="bold-text mb-2 mt-3">Certifications Covered:</h5>
                <ul>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>RHCSA (EX200)
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>RHCE (EX294)
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>OpenStack (CL210)
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>OpenShift (DO180, DO280)
                  </li>
                </ul>
                <h5 class="bold-text mb-2 mt-3">Mode of Training:</h5>
                <ul>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Offline (Pune Centre)
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Online – Live Instructor-Led
                  </li>
                </ul>
                <h5 class="bold-text mb-2 mt-3">Certification Benefits:</h5>
                <ul>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Official Red Hat Certifications
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Discounted Exam Vouchers
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>WebAsha Training Certificate
                  </li>
                </ul>
                <h5 class="bold-text mb-2 mt-3">Who Should Attend?</h5>
                <ul>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>IT Professionals and System Administrators
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Engineering & IT Students
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Certification Aspirants
                  </li>
                </ul>
                <h5 class="bold-text mb-2 mt-3">Program Highlights:</h5>
                <ul>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Official Red Hat Courseware
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Hands-On Labs with RHEL
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Practice Tests & Mock Exams
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Expert Instructors
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Placement Assistance
                  </li>
                </ul>
                <h5 class="bold-text mb-2 mt-3">Why Choose WebAsha Technologies?</h5>
                <ul>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Authorized Red Hat Training Partner
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Certified Instructors
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Affordable Training Packages
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Proven Certification Success
                  </li>
                </ul>
                <p class="text-muted mt-3">
                  <b>Call: +91 8010911256</b> — Enroll in WebAsha Technologies’ <b>Red Hat Training & Certification Offer <?php echo date("Y"); ?></b> in Pune (Viman Nagar & Kharadi).
                </p>
                <div class="gradient-overlay"></div>
              </div>
              <button class="toggle-button" onclick="toggleContent('contentContainer1', this)">View More</button>
            </section>
            <!-- Highlighting certified candidates -->
            <section class="course-certified-candidates lazy-section" id="exam-certification">
              <?php include("include/cert/red-hat.php"); ?>
            </section>
          </div>
          <!-- Sidebar for training subscription -->
          <div class="col-lg-4 col-sm-12 col-12 sticky-sidebar1 lazy-section" id="sticky-sidebar2">
            <div class="course-subsciption sticky-sidebar-container">
              <?php include("include/course-sidebar2.php"); ?>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Continuing lazy-loaded sections -->
    <!-- Listing Red Hat training tracks -->
    <section class="training-features py-5 bg-light lazy-section visible" id="training-tracks">
      <div class="container">
        <div class="text-center section-header">
          <span class="section-badge">Red Hat Training Tracks</span>
          <h2 class="heading-main">Red Hat Training & Certification Offer <span class="red-color"><?php echo date("Y"); ?> in Pune</span></h2>
        </div>
        <p class="text-muted text-center">Join <b>WebAsha Technologies’ Red Hat Training Offer <?php echo date("Y"); ?></b> to master RHCSA, RHCE, OpenStack, and OpenShift certifications with expert-led training, labs, and exam vouchers.</p>
        <div class="row g-4 mt-4">
          <!-- Card: RHCSA Training -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef0e5be2f.webp" class="card-img-top rounded-top" alt="RHCSA Training" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2">RHCSA <span class="red-color">Training (EX200)</span></h5>
                <p class="text-muted small">Master Linux administration with hands-on labs on system configuration, user management, and security.</p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Duration:</b> 4-6 Weeks
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Certification:</b> RHCSA Voucher + Training Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Topics:</b> System Admin, File Systems, Security
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Tools:</b> RHEL, Bash, Ansible
                  </li>
                </ul>
                <p class="small mt-3 text-muted">Ideal for IT students and professionals starting Linux administration.</p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="rhcsa1" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20RHCSA%20Training" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card: RHCE Training -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef0f81c3d.webp" class="card-img-top rounded-top" alt="RHCE Training" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2">RHCE <span class="red-color">Training (EX294)</span></h5>
                <p class="text-muted small">Learn advanced Linux automation with Ansible, scripting, and system management for RHCE certification.</p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Duration:</b> 4-6 Weeks
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Certification:</b> RHCE Voucher + Training Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Topics:</b> Ansible Automation, Security
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Tools:</b> RHEL, Ansible, Bash
                  </li>
                </ul>
                <p class="small mt-3 text-muted">Perfect for RHCSA holders seeking advanced DevOps skills.</p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="rhce" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20RHCE%20Training" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card: OpenStack Training -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef1052b4b.webp" class="card-img-top rounded-top" alt="OpenStack Training" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2">OpenStack <span class="red-color">Training (CL210)</span></h5>
                <p class="text-muted small">Master cloud computing with OpenStack, focusing on deployment, management, and orchestration.</p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Duration:</b> 4-6 Weeks
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Certification:</b> OpenStack Voucher + Training Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Topics:</b> Cloud Deployment, Orchestration
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Tools:</b> OpenStack, Horizon, Heat
                  </li>
                </ul>
                <p class="small mt-3 text-muted">Ideal for professionals targeting cloud administration roles.</p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="openstack-cl210" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20OpenStack%20Training" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card: OpenShift Training -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef11633a0.webp" class="card-img-top rounded-top" alt="OpenShift Training" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2">OpenShift <span class="red-color">Training (DO180, DO280)</span></h5>
                <p class="text-muted small">Learn containerization and Kubernetes orchestration with OpenShift for cloud-native development.</p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Duration:</b> 4-6 Weeks
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Certification:</b> OpenShift Voucher + Training Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Topics:</b> Containers, Kubernetes, OpenShift
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Tools:</b> OpenShift, Docker, Kubernetes
                  </li>
                </ul>
                <p class="small mt-3 text-muted">Perfect for DevOps and cloud-native career aspirants.</p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="openshift-do180" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20OpenShift%20Training" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Detailing exam preparation resources -->
    <section class="training-features py-5 bg-light lazy-section visible" id="exam-prep">
      <div class="container">
        <div class="text-center section-header mb-4">
          <span class="section-badge">Red Hat Exam Preparation</span>
          <h2 class="heading-main">Red Hat Training & Certification Offer <span class="red-color"><?php echo date("Y"); ?> – Your Path to Certification</span></h2>
          <p class="text-muted text-center">Prepare with WebAsha Technologies’ comprehensive Red Hat training, including official courseware, hands-on labs, and discounted exam vouchers for RHCSA, RHCE, OpenStack, and OpenShift certifications.</p>
        </div>
        <div class="card shadow-sm border-0 p-4">
          <h4 class="fw-bold mb-3 text-center">Top Red Hat Certification Programs</h4>
          <p class="text-muted">WebAsha Technologies offers the <b>best Red Hat training in Pune</b> for RHCSA (EX200), RHCE (EX294), OpenStack (CL210), and OpenShift (DO180, DO280). Our programs include official Red Hat materials, labs, and practice exams.</p>
          <p class="text-muted">Choose from tracks like <b>RHCSA Training</b>, <b>RHCE Training</b>, <b>OpenStack Training</b>, and <b>OpenShift Training</b> to master Linux and cloud technologies.</p>
        </div>
        <div class="card shadow-sm border-0 p-4 mt-4">
          <h4 class="fw-bold mb-3 text-center">Exam Preparation Resources</h4>
          <p class="text-muted">Access <b>official Red Hat courseware</b>, <b>hands-on labs</b>, <b>practice tests</b>, and <b>mock exams</b> aligned with exam objectives. Benefit from expert-led sessions, interactive Q&A, and personalized feedback.</p>
          <p class="text-muted">Our <b>discounted exam vouchers</b> make certifications affordable for RHCSA, RHCE, OpenStack, and OpenShift exams.</p>
        </div>
        <div class="card shadow-sm border-0 p-4 mt-4">
          <h4 class="fw-bold mb-3 text-center">Why Choose WebAsha?</h4>
          <ul class="list-unstyled ps-2 small">
            <li>
              <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Authorized Red Hat Partner</b> with official courseware
            </li>
            <li>
              <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Hands-On Labs</b> for practical skills
            </li>
            <li>
              <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Certified Instructors</b> with industry experience
            </li>
            <li>
              <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Discounted Vouchers</b> for Red Hat exams
            </li>
            <li>
              <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Placement Support</b> for certified professionals
            </li>
          </ul>
        </div>
        <div class="card shadow-sm border-0 p-4 mt-4">
          <h4 class="fw-bold mb-3 text-center">Launch Your Red Hat Career</h4>
          <p class="text-muted">Achieve globally recognized Red Hat certifications with WebAsha Technologies’ training and exam voucher offer. Build a rewarding career in Linux, automation, and cloud computing.</p>
          <p class="text-muted">Enroll in the <b>Red Hat Training & Certification Offer <?php echo date("Y"); ?></b> in Pune to start your journey.</p>
        </div>
        <div class="text-center mt-4">
          <a href="red-hat" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll Now">Enroll Now</a>
          <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="View Syllabus">View Syllabus</a>
          <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20know%20more%20about%20Red%20Hat%20Training%20Offer%20<?php echo date("Y"); ?>" target="_blank" class="btn btn-success btn-sm">
            <i class="fa-brands fa-whatsapp me-1"></i> Whatsapp
          </a>
        </div>
      </div>
    </section>
    <!-- Showcasing career paths -->
    <section class="career-straight lazy-section">
      <?php include("include/career-straight.php"); ?>
    </section>
    <!-- Highlighting Red Hat certified alumni -->
    <section class="course-discover-profile lazy-section" id="our-instructor">
      <div class="section-header text-center">
        <span class="section-badge">Red Hat Certified Alumni</span>
      </div>
      <h2 class="heading-main-1 text-center">Explore Alumni with <span class="red-color">Red Hat Certifications</span></h2>
      <p class="desc text-center">Learn about their career paths and achievements in Linux and cloud technologies.</p>
      <?php include("include/alumni.php"); ?>
    </section>
    <!-- Providing FAQs for Red Hat training offer -->
    <section class="course-webasha-faq lazy-section" id="faqs">
      <div class="container mt-4 mb-4">
        <div class="section-header text-center mb-5">
          <span class="section-badge">FAQs</span>
          <h2 class="heading-main-1 text-center">Red Hat Training & Certification Offer <?php echo date("Y"); ?> <span class="red-color">FAQs</span></h2>
        </div>
        <div class="all-theme-accordion" id="content">
          <div class="accordion accordion-flush" id="coursefaqAccordionFlush">
            <!-- FAQ 1 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq1" aria-expanded="true" aria-controls="flush-coursefaq1">
                  What is included in the Red Hat Training Offer?
                </button>
              </h2>
              <div id="flush-coursefaq1" class="accordion-collapse collapse show" aria-labelledby="flush-heading-1" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0 text-muted">
                  The offer includes official Red Hat courseware, hands-on labs, practice tests, discounted exam vouchers, and a training certificate.
                </div>
              </div>
            </div>
            <!-- FAQ 2 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq2" aria-expanded="false" aria-controls="flush-coursefaq2">
                  Who is eligible for the training programs?
                </button>
              </h2>
              <div id="flush-coursefaq2" class="accordion-collapse collapse" aria-labelledby="flush-heading-2" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0 text-muted">
                  IT professionals, B.Tech, MCA, BCA, and Diploma students with basic Linux knowledge. RHCE and advanced courses require RHCSA or equivalent.
                </div>
              </div>
            </div>
            <!-- FAQ 3 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq3" aria-expanded="false" aria-controls="flush-coursefaq3">
                  What is the duration of the training programs?
                </button>
              </h2>
              <div id="flush-coursefaq3" class="accordion-collapse collapse" aria-labelledby="flush-heading-3" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0 text-muted">
                  Programs range from 4-6 weeks for RHCSA, RHCE, OpenStack, and OpenShift training, with flexible schedules.
                </div>
              </div>
            </div>
            <!-- FAQ 4 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq4" aria-expanded="false" aria-controls="flush-coursefaq4">
                  Are classes online, offline, or hybrid?
                </button>
              </h2>
              <div id="flush-coursefaq4" class="accordion-collapse collapse" aria-labelledby="flush-heading-4" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0 text-muted">
                  We offer classroom (offline), live online instructor-led, and hybrid modes, depending on the batch.
                </div>
              </div>
            </div>
            <!-- FAQ 5 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq5" aria-expanded="false" aria-controls="flush-coursefaq5">
                  Are exam vouchers included in the offer?
                </button>
              </h2>
              <div id="flush-coursefaq5" class="accordion-collapse collapse" aria-labelledby="flush-heading-5" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0 text-muted">
                  Yes, discounted vouchers for RHCSA (EX200), RHCE (EX294), OpenStack (CL210), and OpenShift (DO180, DO280) are included.
                </div>
              </div>
            </div>
            <!-- FAQ 6 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-6">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq6" aria-expanded="false" aria-controls="flush-coursefaq6">
                  What is the format of Red Hat exams?
                </button>
              </h2>
              <div id="flush-coursefaq6" class="accordion-collapse collapse" aria-labelledby="flush-heading-6" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0 text-muted">
                  Red Hat exams are performance-based, requiring hands-on tasks in a live environment, lasting 2-3 hours.
                </div>
              </div>
            </div>
            <!-- FAQ 7 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-7">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq7" aria-expanded="false" aria-controls="flush-coursefaq7">
                  How long are exam vouchers valid?
                </button>
              </h2>
              <div id="flush-coursefaq7" class="accordion-collapse collapse" aria-labelledby="flush-heading-7" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0 text-muted">
                  Vouchers are typically valid for one year from purchase. Confirm with admissions for exact terms.
                </div>
              </div>
            </div>
            <!-- FAQ 8 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-8">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq8" aria-expanded="false" aria-controls="flush-coursefaq8">
                  Does WebAsha provide placement assistance?
                </button>
              </h2>
              <div id="flush-coursefaq8" class="accordion-collapse collapse" aria-labelledby="flush-heading-8" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0 text-muted">
                  Yes, we offer resume workshops, mock interviews, and connections with hiring partners for certified candidates.
                </div>
              </div>
            </div>
            <!-- FAQ 9 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-9">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq9" aria-expanded="false" aria-controls="flush-coursefaq9">
                  What materials are provided during training?
                </button>
              </h2>
              <div id="flush-coursefaq9" class="accordion-collapse collapse" aria-labelledby="flush-heading-9" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0 text-muted">
                  Official Red Hat courseware, lab access, practice tests, and study guides are provided to all participants.
                </div>
              </div>
            </div>
            <!-- FAQ 10 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-10">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq10" aria-expanded="false" aria-controls="flush-coursefaq10">
                  How do I enroll in the Red Hat Training Offer?
                </button>
              </h2>
              <div id="flush-coursefaq10" class="accordion-collapse collapse" aria-labelledby="flush-heading-10" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0 text-muted">
                  Apply via the enquiry form, call/WhatsApp +91 8010911256, or follow the registration steps provided by admissions.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Adding JSON-LD for FAQ schema -->
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "What is included in the Red Hat Training Offer?",
            "acceptedAnswer": { "@type": "Answer", "text": "The offer includes official Red Hat courseware, hands-on labs, practice tests, discounted exam vouchers, and a training certificate."}
          },
          {
            "@type": "Question",
            "name": "Who is eligible for the training programs?",
            "acceptedAnswer": { "@type": "Answer", "text": "IT professionals, B.Tech, MCA, BCA, and Diploma students with basic Linux knowledge. RHCE and advanced courses require RHCSA or equivalent."}
          },
          {
            "@type": "Question",
            "name": "What is the duration of the training programs?",
            "acceptedAnswer": { "@type": "Answer", "text": "Programs range from 4-6 weeks for RHCSA, RHCE, OpenStack, and OpenShift training, with flexible schedules."}
          },
          {
            "@type": "Question",
            "name": "Are classes online, offline, or hybrid?",
            "acceptedAnswer": { "@type": "Answer", "text": "We offer classroom (offline), live online instructor-led, and hybrid modes, depending on the batch."}
          },
          {
            "@type": "Question",
            "name": "Are exam vouchers included in the offer?",
            "acceptedAnswer": { "@type": "Answer", "text": "Yes, discounted vouchers for RHCSA (EX200), RHCE (EX294), OpenStack (CL210), and OpenShift (DO180, DO280) are included."}
          },
          {
            "@type": "Question",
            "name": "What is the format of Red Hat exams?",
            "acceptedAnswer": { "@type": "Answer", "text": "Red Hat exams are performance-based, requiring hands-on tasks in a live environment, lasting 2-3 hours."}
          },
          {
            "@type": "Question",
            "name": "How long are exam vouchers valid?",
            "acceptedAnswer": { "@type": "Answer", "text": "Vouchers are typically valid for one year from purchase. Confirm with admissions for exact terms."}
          },
          {
            "@type": "Question",
            "name": "Does WebAsha provide placement assistance?",
            "acceptedAnswer": { "@type": "Answer", "text": "Yes, we offer resume workshops, mock interviews, and connections with hiring partners for certified candidates."}
          },
          {
            "@type": "Question",
            "name": "What materials are provided during training?",
            "acceptedAnswer": { "@type": "Answer", "text": "Official Red Hat courseware, lab access, practice tests, and study guides are provided to all participants."}
          },
          {
            "@type": "Question",
            "name": "How do I enroll in the Red Hat Training Offer?",
            "acceptedAnswer": { "@type": "Answer", "text": "Apply via the enquiry form, call/WhatsApp +91 8010911256, or follow the registration steps provided by admissions."}
          }
        ]
      }
    </script>
    <!-- Including related Red Hat resources -->
    <section class="other-course-kubernetes lazy-section">
      <div class="container">
        <div class="course-kubernetes-wraper">
          <div class="course-kubernetes">
            <h2 class="heading-main text-center">Browse Red Hat Training & Certification Offer <?php echo date("Y"); ?> Related Resources</h2>
            <?php include("include/related-resources.php"); ?>
          </div>
        </div>
      </div>
    </section>
    <!-- Including modals and footer -->
    <?php include("include/enquiry-modal.php"); ?>
    <?php include("include/syllabus-modal.php"); ?>
    <!-- Footer -->
    <?php include("include/footer.php"); ?>
    <?php include("include/footerlink.php"); ?>
  </body>
</html>