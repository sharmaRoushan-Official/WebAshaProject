<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include common header links / global meta / favicon / CSS / JS -->
    <?php include("include/headerlink.php"); ?>
    <!-- Page-specific metadata (Thank You Page) -->
    <?php
      $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
      $current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
    <title>Thank You | WebAsha Technologies - Training Institute in Pune</title>
    <meta name="description" content="Thank you for reaching out to WebAsha Technologies in Pune! Our team will contact you soon to discuss your IT training needs and help you start your journey in Cloud, DevOps, Security, or Networking.">
    <meta name="keywords" content="WebAsha Thank You, IT Training Enquiry Pune, WebAsha Contact, IT Certification Support, Training Program Enquiry">
    <!-- Canonical URL to avoid duplicate content -->
    <link rel="canonical" href="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <!-- Page-specific Open Graph for social sharing -->
    <meta property="og:title" content="Thank You | WebAsha Technologies - Training Institute in Pune">
    <meta property="og:description" content="Thank you for your interest in WebAsha Technologies’ IT training programs in Pune. We’ll connect with you soon to explore our courses and certification opportunities.">
    <meta property="og:url" content="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <meta property="og:image" content="https://training.webasha.com/assets/img/thank-you/thank-you.webp">
    <meta property="og:image:alt" content="Thank You - WebAsha Technologies Training Institute in Pune">
    <meta property="og:type" content="website">
    <!-- Page-specific Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Thank You | WebAsha Technologies - Training Institute in Pune">
    <meta name="twitter:description" content="Thank you for contacting WebAsha Technologies in Pune! We’re excited to assist you with our IT training and certification programs.">
    <meta name="twitter:image" content="https://training.webasha.com/assets/img/thank-you/thank-you.webp">
    <!-- Page-specific JSON-LD: Organization schema for enhanced search visibility -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "WebAsha Technologies",
      "url": "https://training.webasha.com/",
      "logo": "https://training.webasha.com/assets/img/logo.webp",
      "description": "Thank you for contacting WebAsha Technologies, a leading IT training institute in Pune offering courses in Cloud, DevOps, Security, and Networking with certification and placement support.",
      "sameAs": [
        "https://www.facebook.com/WebAshaTech/",
        "https://www.instagram.com/webashatech/",
        "https://x.com/ForteWebAsha",
        "https://www.linkedin.com/company/webasha-technologies",
        "https://in.pinterest.com/webasha",
        "https://www.youtube.com/@WebAshaTechnologies"
      ],
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "bestRating": "5",
        "worstRating": "1",
        "ratingCount": "48765",
        "reviewCount": "48765"
      }
    }
    </script>
    <style>
      /* tiny inline helpers to keep page tidy until main CSS loads */
      .breadcrumb-bar { background: #000; }
      .breadcrumb-bar .heading-main-1 { margin: 0; padding: 0; }
    </style>
</head>

<body>
    <!-- site header -->
    <?php include("include/header.php"); ?>

    <!-- Banner / Breadcrumb -->
    <div class="breadcrumb-bar text-center">
      <div class="container">
        <div class="row align-items-center py-3">
          <div class="col-12">
            <h1 class="heading-main-1 mb-2 text-white">Thank You</h1>

            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center mb-0" style="background:transparent;">
                <li class="breadcrumb-item">
                  <a href="/" class="text-decoration-none text-white" aria-label="Home">
                    <svg viewBox="0 0 20 18" xmlns="http://www.w3.org/2000/svg" width="15" height="12" role="img" aria-hidden="true">
                      <path d="M8 17.5V11.5H12V17.5H17V9.5H20L10 0.5L0 9.5H3V17.5H8Z" fill="currentColor" />
                    </svg>
                    <span class="ms-1">Home</span>
                  </a>
                </li>
                <li class="breadcrumb-item active text-white" aria-current="page">Thank You</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <!-- Thank You Section -->
    <section class="section-header lazy-section mt-4 mb-4" aria-label="Thank You from WebAsha Technologies">
      <div class="container">
        <div class="row align-items-center gy-4">
          <div class="col-lg-6">
            <h2 class="heading-main-1">Thank You for Reaching Out!</h2>
            <p class="description mb-3">
              We appreciate your interest in WebAsha Technologies, Pune’s leading IT training institute. Our team will contact you soon to discuss your training goals and how our hands-on courses in Cloud, DevOps, Security, and Networking can help you succeed.
            </p>
            <p class="description mb-0">
              In the meantime, explore our courses or connect with us on social media for updates and insights.
            </p>
          </div>
          <div class="col-lg-6">
            <picture>
              <source srcset="assets/img/thank-you/thank-you-hero.webp" type="image/webp">
              <img src="assets/img/thank-you/thank-you-hero.jpg" alt="WebAsha Technologies training environment" class="img-fluid rounded shadow-sm" loading="lazy">
            </picture>
          </div>
        </div>
      </div>
    </section>

    <!-- Why Choose Us -->
    <section class="lazy-section py-4">
      <div class="container">
        <div class="row gy-4">
          <div class="col-md-4">
            <h3 class="heading-main">Expert Instructors</h3>
            <p class="description">Learn from industry-certified trainers with real-world experience in IT and training.</p>
          </div>
          <div class="col-md-4">
            <h3 class="heading-main">Hands-On Labs</h3>
            <p class="description">Gain practical skills through real-world projects and cutting-edge lab environments.</p>
          </div>
          <div class="col-md-4">
            <h3 class="heading-main">Placement Support</h3>
            <p class="description">Secure top IT roles with our dedicated placement cell and 300+ hiring partners.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Quick Stats -->
    <section class="lazy-section py-4 bg-light">
      <div class="container">
        <div class="row text-center gy-3">
          <div class="col-6 col-md-3">
            <h4 class="mb-1">+5,000</h4>
            <p class="mb-0 small">Students Trained</p>
          </div>
          <div class="col-6 col-md-3">
            <h4 class="mb-1">92%</h4>
            <p class="mb-0 small">Pass / Success Rate</p>
          </div>
          <div class="col-6 col-md-3">
            <h4 class="mb-1">+300</h4>
            <p class="mb-0 small">Hiring Partners</p>
          </div>
          <div class="col-6 col-md-3">
            <h4 class="mb-1">10 yrs</h4>
            <p class="mb-0 small">Industry Experience</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Explore Courses -->
    <section class="lazy-section py-5">
      <div class="container text-center">
        <h2 class="heading-main-1">Explore Our IT Courses</h2>
        <p class="description mb-4">Discover our range of industry-aligned courses in Cloud, DevOps, Security, and Networking to kickstart your career.</p>
        <a href="courses.php" class="btn btn-outline-primary">View All Courses</a>
      </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5 course-comparison-section lazy-section visible">
      <div class="container text-center">
        <h2 class="heading-main-1">Ready to Start Your IT Journey?</h2>
        <p class="description mb-3">Join WebAsha Technologies for practical training, industry certifications, and placement support to excel in your tech career.</p>
        <a href="/" class="btn btn-primary btn-width mx-auto d-inline-flex align-items-center" aria-label="Back to Home">
          Back to Home
          <i class="fa fa-arrow-right ms-2" aria-hidden="true"></i>
        </a>
      </div>
    </section>

    <!-- footer includes -->
    <?php include("include/footer.php"); ?>
    <?php include("include/footerlink.php"); ?>
</body>
</html>