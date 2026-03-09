<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include common header links / global meta / favicon / CSS / JS -->
    <?php include("include/headerlink.php"); ?>
    <!-- Page-specific metadata (Winter Training Program) -->
    <?php
      $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
      $current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
    <title>Winter Training Program <?php echo date("Y"); ?> in Pune | WebAsha Technologies</title>
    <meta name="description" content="Join WebAsha Technologies’ Winter Training Program <?php echo date("Y"); ?> in Pune. Gain hands-on experience in IT skills with industry-relevant projects, expert mentorship, and certifications for B.Tech and MCA students.">
    <meta name="keywords" content="Winter Training Pune <?php echo date("Y"); ?>, IT Winter Internship, Winter Project Training for BTech MCA, WebAsha Winter Training, Hands-On IT Training Pune, Certification Training Program">
    <!-- Canonical URL to avoid duplicate content -->
    <link rel="canonical" href="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <!-- Page-specific Open Graph for social sharing -->
    <meta property="og:title" content="Winter Training Program <?php echo date("Y"); ?> in Pune | WebAsha Technologies">
    <meta property="og:description" content="Launch your tech career with WebAsha Technologies’ Winter Training Program in Pune. Hands-on projects, expert guidance, and certifications for B.Tech and MCA students in <?php echo date("Y"); ?>.">
    <meta property="og:url" content="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <meta property="og:image" content="https://training.webasha.com/assets/img/summer-internship/internship.webp">
    <meta property="og:image:alt" content="Winter Training Program <?php echo date("Y"); ?> at WebAsha Technologies in Pune">
    <meta property="og:type" content="website">
    <!-- Page-specific Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Winter Training Program <?php echo date("Y"); ?> in Pune | WebAsha Technologies">
    <meta name="twitter:description" content="Transform your skills with WebAsha Technologies’ Winter Training in Pune. Industry-focused training and certifications for future tech leaders in <?php echo date("Y"); ?>.">
    <meta name="twitter:image" content="https://training.webasha.com/assets/img/summer-internship/internship.webp">
    <!-- Page-specific JSON-LD: Course schema for enhanced search visibility -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Course",
      "name": "Winter Training Program <?php echo date("Y"); ?>",
      "description": "Gain practical IT skills with WebAsha Technologies’ Winter Training Program in Pune. Designed for B.Tech and MCA students, this program offers hands-on projects, expert mentorship, and industry certifications for <?php echo date("Y"); ?>.",
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
  <!-- page content starts here -->
  <body>
    <!-- Including the site header --> <?php include("include/header.php"); ?>
    <!-- Banner Section: Showcasing course introduction and enrollment information -->
    <section class="banner-course">
      <div class="container">
        <div class="row align-items-center">
          <!-- Left Column -->
          <div class="col-lg-8 col-sm-12">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="/" class="text-decoration-none" aria-label="Home">
                    <svg viewBox="0 0 20 18" xmlns="http://www.w3.org/2000/svg" width="20" height="18">
                      <path d="M8 17.5V11.5H12V17.5H17V9.5H20L10 0.5L0 9.5H3V17.5H8Z" fill="currentColor" />
                    </svg>
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Winter Training Program <?php echo date("Y"); ?></li>
              </ol>
            </nav>
            <!-- Banner Content -->
            <div class="banner-course-content">
              <h1 class="heading-main-1 text-white">Winter Training Program <?php echo date("Y"); ?> in Pune - Upskill, Innovate, Grow!</h1>
              <!-- Review Card -->
              <div class="banner-review-card">
                <div class="enrolled-group d-flex align-items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700" viewBox="0 0 24 24" aria-hidden="true" role="img" class="me-2">
                    <path d="M16 11c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-8 0c1.7 0 3-1.3 3-3S9.7 5 8 5 5 6.3 5 8s1.3 3 3 3zm0 2c-2.3 0-7 1.2-7 3.5V20h14v-3.5C15 14.2 10.3 13 8 13zm8 0c-.3 0-.7 0-1 .1 1.2.8 2 2.1 2 3.4V20h6v-3.5c0-2.3-4.7-3.5-7-3.5z" />
                  </svg>
                  <span>3,850 Participants Enrolled</span>
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
              <!-- description -->
              <p class="text-white">Enroll in our <strong>Winter Training Program</strong> at WebAsha Technologies — a hands-on, career-boosting program curated for students and freshers to gain practical experience and industry-level skills in trending technologies.We also offer semester project training and winter training for B.Tech, MCA, and other eligible students – all available at WebAsha Technologies. </p>
              <div class="check-list-box">
                <ul class="benefits-list mb-0">
                  <li>
                    <i class="fa-solid fa-square-check"></i> Official Training Certificate &amp; Letter of Completion
                  </li>
                  <li>
                    <i class="fa-solid fa-square-check"></i> Access to Learning Videos &amp; Industry Tools
                  </li>
                  <li>
                    <i class="fa-solid fa-square-check"></i> Up-to-date Curriculum with Cutting-Edge Technologies
                  </li>
                  <li>
                    <i class="fa-solid fa-square-check"></i> Flexible Learning Modes - Online &amp; Offline
                  </li>
                  <li>
                    <i class="fa-solid fa-square-check"></i> Live industry project work &amp; portfolio building
                  </li>
                  <li>
                    <i class="fa-solid fa-square-check"></i> Expert mentorship &amp; career guidance
                  </li>
                </ul>
              </div>
              <p class="text-white">Whether you're improving coding skills, learning new tools, or seeking a training that adds value to your resume — start your tech career with practical exposure and expert mentorship.</p>
              <!-- info bar -->
              <div class="info-bar" role="region" aria-label="Course details">
                <div class="info-pill">Course Duration : <strong class="ms-2">1 Month • 6 Weeks • 45-180 Days</strong>
                </div>
                <div class="info-text">Delivery : <strong class="ms-1">Online | Offline</strong>
                </div>
                <div class="info-text">Language : <strong class="ms-1">Hindi | English</strong>
                </div>
              </div>
              <!-- Buttons -->
              <div class="button-group  mb-5">
                <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20Winter%20Training" class="btn-whatsapp text-decoration-none" aria-label="Contact via WhatsApp">
                  <i class="fab fa-whatsapp"></i> WhatsApp </a>
                <a href="#" class="btn-phone text-decoration-none" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">
                  <i class="fa fa-download me-2"></i> Download Syllabus </a>
              </div>
            </div>
          </div>
          <!-- Right Column -->
          <div class="col-lg-4 col-sm-12">
            <div class="ec-council">
              <div class="video-thumbnail position-relative">
                <picture>
                  <source srcset="assets/img/summer-internship/internship.webp" type="image/webp">
                  <img src="assets/img/summer-internship/internship.webp" alt="Winter Training Preview Thumbnail" width="360" height="220" loading="lazy" decoding="async" class="img-fluid rounded shadow-sm">
                </picture>
                <button type="button" class="video-btn position-absolute top-50 start-50 translate-middle" aria-label="Play course promo video" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="ERtp4zua0-s">
                  <svg class="play-icon" viewBox="0 0 64 64" width="64" height="64" aria-hidden="true" focusable="false">
                    <circle cx="32" cy="32" r="32" fill="rgba(0,0,0,0.55)" />
                    <path d="M26 20 L45 32 L26 44 z" fill="#fff" />
                  </svg>
                </button>
              </div>
              <div class="pera-group">
                <p class="desc">Industry-Recognized Winter Training Program</p>
                <p>Have Questions? Consult Our Experts</p>
              </div>
              <div class="button-group">
                <a href="#" class="animated-button1 mx-auto d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span> Enroll Now <i class="fa fa-arrow-right ms-2"></i>
                </a>
              </div>
            </div>
          </div>
          <!-- Stats -->
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
    </section>
    <!-- Sticky Header: Navigation for course sections -->
    <section class="sticky-main-header1" id="stickyheader" style="position: sticky; top: 0; z-index: 1000; background-color: white;">
      <div class="container">
        <div class="sticky-header-list">
          <ul class="list-unstyled mb-0">
            <li>
              <a href="#overview" class="btn btn-outline-primary text-decoration-none">Overview</a>
            </li>
            <li>
              <a href="#training-options" class="btn btn-outline-primary text-decoration-none">Training Programs</a>
            </li>
            <li>
              <a href="#syllabus" class="btn btn-outline-primary text-decoration-none">Winter Training</a>
            </li>
            <li>
              <a href="#our-instructor" class="btn btn-outline-primary text-decoration-none">Alumni</a>
            </li>
            <li>
              <a href="#exam-certification" class="btn btn-outline-primary text-decoration-none">Training Certification</a>
            </li>
            <li>
              <a href="#placement-reviews" class="btn btn-outline-primary text-decoration-none">Placement & Reviews</a>
            </li>
            <li>
              <a href="#faqs" class="btn btn-outline-primary text-decoration-none">FAQs</a>
            </li>
          </ul>
          <div class="button-group">
            <button type="button" class="btn btn-enroll" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Enroll Now</button>
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</button>
          </div>
        </div>
      </div>
    </section>
    <!-- Lazy Sections Start -->
    <!-- Brands -->
    <section class="our-learners section-header text-center lazy-section"> <?php include("include/brands.php"); ?> </section>
    <!-- Recent Placements Video Testimonials Section -->
    <section class="course-recent-reviews section-header text-center lazy-section">
      <span class="section-badge">Recent Placements Testimonials</span>
      <h2 class="heading-main-1 text-white text-center">Winter Training Program <?php echo date("Y"); ?> <span class="red-color">Recent Reviews</span>
      </h2> <?php include("include/video-reviews.php"); ?>
    </section>
    <!-- Testimonials -->
    <section class="success-speaks-reviwe course-speaks section-header text-center lazy-section">
      <div class="container">
        <span class="section-badge">Recent Placements Testimonials</span>
        <h2 class="heading-main text-center mb-5">Winter Training Program <?php echo date("Y"); ?> <span class="red-color">Reviews</span>
        </h2> <?php include("include/text-reviews.php"); ?>
      </div>
    </section>
    <!-- Career Roadmap -->
    <section class="course-technologies-placement lazy-section" id="placement-reviews"> <?php include("include/placement.php"); ?> </section>
    <!-- Key Features -->
    <section class="lazy-section">
      <div class="training-features section-header text-center mt-5 lazy-section">
        <div class="container">
          <!-- Preload critical image for LCP -->
          <link rel="preload" href="https://i.ibb.co/5X09hRg/lab.gif" as="image" fetchpriority="high">
          <span class="section-badge">Training Key Features</span>
          <h2 class="heading-main-1 text-center">Winter Training Program <?php echo date("Y"); ?> <span class="red-color">Training Key Features</span>
          </h2>
          <p class="text-muted text-center mb-5">Explore the unique benefits of our Winter Training Program designed for success in Pune’s booming IT sector.</p> <?php include("include/summer-key-features.php"); ?>
    </section>
    <!-- Why Choose Us -->
    <section class="py-5 course-comparison-section lazy-section"> <?php include("include/why-webasha.php"); ?> </section>
    <!-- Main Course Content -->
    <main>
      <!-- Course Overview Section -->
      <div class="container">
        <div class="row">
          <!-- Main Content -->
          <div class="col-lg-8 col-sm-12" id="sticky-start-section2">
            <!-- Bootcamp -->
            <section class="contentcard lazy-section" id="overview">
              <div class="content-container" id="contentContainer1">
                <div class="summary-details text-center">
                  <h2 class="heading-main">From Zero To Hero | <span class="red-color">100% Placement-Based Winter Training <?php echo date("Y"); ?></span> in Pune </h2>
                  <p class="text-muted mb-0"> Join <b>WebAsha Technologies</b> for a hands-on, industry-focused <b>Winter Training / Industrial Training Program <?php echo date("Y"); ?></b> in Pune. Designed for <b>B.Tech, MCA, BCA, Diploma</b>, and other IT aspirants, this program helps you go <b>From Zero To Hero</b> by gaining real-world experience and placement-ready skills. </p>
                </div>
                <h5 class="bold-text mb-2 mt-3">Why Winter Training / Industrial Training?</h5>
                <p class="text-muted mb-0"> The <b>Winter Training / Industrial Training</b> is a mandatory and essential part of the <b>B.Tech / Engineering curriculum</b>. It bridges the gap between academic theory and practical application, offering <b>industrial exposure</b> that prepares students for real-time challenges in the IT world. In today’s competitive job market, employers seek candidates who are technically skilled, creative, and job-ready — not just degree holders. </p>
                <ul class="mt-2">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Gain in-depth, practical knowledge of your engineering domain.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Improve employability with real project experience.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Build strong technical, analytical, and interpersonal skills.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Prepare for high-paying jobs without needing post-training support.
                  </li>
                </ul>
                <h5 class="bold-text mb-2 mt-3">Who Can Apply?</h5>
                <p class="text-muted mb-0">
                  <b>WebAsha Technologies</b> invites <b>B.Tech / B.E, MCA, BCA, M.Sc (IT), B.Sc (IT), and Diploma</b> students for its <b>Winter Training | Industrial Training | Project-Based Training</b> program in Pune. Energetic freshers who want hands-on experience and real project exposure can apply. We also offer <b>Final Semester Project Training</b> & <b>Winter Training</b> for students across engineering and IT streams.
                </p>
                <h5 class="bold-text mb-2 mt-3">Training Duration:</h5>
                <p class="text-muted mb-0">
                  <b>Flexible Options:</b> 6 Weeks, 45 Days, 60 Days, 90 Days, 120 Days, or 6 Months — Online or Offline.
                </p>
                <h5 class="bold-text mb-2 mt-3">Winter Training / Industrial Training Overview:</h5>
                <p class="text-muted mb-0"> The <b>“From Zero To Hero” Winter Training & Industrial Training Program <?php echo date("Y"); ?></b> at WebAsha Technologies is designed to offer <b>real industry exposure</b>. Participants interact directly with professionals, work on live projects, and master trending technologies that boost their employability. </p>
                <h5 class="bold-text mb-2 mt-3">Top Technologies Covered:</h5>
                <ul>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Red Hat Linux (RHCSA / RHCE)
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> AWS | Azure | Google Cloud (GCP) | Cloud Computing
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Docker | Kubernetes | OpenShift | Terraform | Ansible | Jenkins CI/CD
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> CCNA | Networking | Cyber Security | CEH v13 | CND | Python | Splunk
                  </li>
                </ul>
                <h5 class="bold-text mb-2 mt-3">Mode of Training:</h5>
                <ul>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Offline (at WebAsha Technologies, Pune Centre)
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Online – Live Instructor-Led Training (Certificates couriered to your address)
                  </li>
                </ul>
                <h5 class="bold-text mb-2 mt-3">Certification:</h5>
                <ul>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Industrial Training Certificate from WebAsha Technologies
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Training Letter & Recommendation on Company Letterhead
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Project Completion Certificate (on company letterhead)
                  </li>
                </ul>
                <h5 class="bold-text mb-2 mt-3">Who Should Attend?</h5>
                <ul>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Engineering & IT Students (B.Tech/B.E/MCA/BCA/M.Sc/Polytechnic)
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Research Scholars, Faculties, and Working Professionals
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Anyone aiming to upgrade technical skills & build a strong portfolio
                  </li>
                </ul>
                <h5 class="bold-text mb-2 mt-3">Program Highlights:</h5>
                <ul>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Advance-Level Fast-Track Training with Industry Experts
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Real-Time Project Work aligned with industry standards
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Personality Development & Interview Preparation Sessions
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Free Study Material, Software Tools & Interactive Q&A Sessions
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> 100% Placement Assistance Post Training
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Globally Accepted Certificates upon Completion
                  </li>
                </ul>
                <h5 class="bold-text mb-2 mt-3">Why Choose WebAsha Technologies?</h5>
                <ul>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Government Registered & Authorized Training Partner
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> 100% Practical-Based Learning with Real Tools
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Industry Experienced Trainers with Global Certifications
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Affordable Fee Structure & Flexible Learning Options
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Proven Placement Record in Top MNCs
                  </li>
                </ul>
                <p class="text-muted mt-3">
                  <b>Call: +91 8010911256</b> — Enroll in WebAsha Technologies’ <b>“From Zero To Hero” Winter Training & Industrial Training Program <?php echo date("Y"); ?></b> for <b>BCA, BBA, B.Tech, Diploma, IT, Computer Science, and Electronics students</b> in Pune (Viman Nagar & Kharadi).
                </p>
                <div class="gradient-overlay"></div>
              </div>
              <button class="toggle-button" onclick="toggleContent('contentContainer1', this)">View More</button>
            </section>
            <!-- Certified Candidates -->
            <section class="course-certified-candidates lazy-section" id="exam-certification"> <?php include("include/cert/ceh.php"); ?> </section>
          </div>
          <!-- Sidebar -->
          <div class="col-lg-4 col-sm-12 col-12 sticky-sidebar1 lazy-section" id="sticky-sidebar2">
            <div class="course-subsciption sticky-sidebar-container"> <?php include("include/course-sidebar2.php"); ?> </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Lazy Sections Continue -->
    <!-- Winter Training Programs (Bootstrap 5) -->
    <section class="training-features py-5 bg-light lazy-section visible" id="training-options">
      <div class="container">
        <div class="text-center section-header">
          <span class="section-badge">Winter Training Programs</span>
          <h2 class="heading-main"> Winter Training <span class="red-color">Programs <?php echo date("Y"); ?> in Pune</span>
          </h2>
        </div>
        <p class="text-muted text-center"> Join <b>WebAsha Technologies’ Winter Training Program <?php echo date("Y"); ?></b> and master the most in-demand IT skills to launch your tech career. Choose from a wide range of specializations designed to provide practical, hands-on experience and industry exposure. </p>
        <div class="row g-4 mt-4">
          <!-- Card: Cyber Security & Ethical Hacking -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef0e5be2f.webp" class="card-img-top rounded-top" alt="Winter Training - Cyber Security & Ethical Hacking" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2 mt-4"> Winter Training in <span class="red-color">Cyber Security & Ethical Hacking</span>
                </h5>
                <p class="text-muted small"> Learn cybersecurity essentials, ethical hacking techniques, and hands-on penetration testing using tools like Kali Linux, Burp Suite, and Wireshark. </p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Duration:</b> 6–8 Weeks
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Certification:</b> Training + Project Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Topics:</b> Footprinting, Scanning, Exploitation, Network Security
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Tools:</b> Nmap, Burp Suite, Wireshark, Metasploit
                  </li>
                </ul>
                <p class="small mt-3 text-muted"> Best suited for BCA, B.Tech, MCA, and IT students aiming to start a career in cybersecurity with 100% placement assistance. </p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20Cyber%20Security%20%26%20Ethical%20Hacking%20Winter%20Training" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card: Cloud Administration -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef0f81c3d.webp" class="card-img-top rounded-top" alt="Winter Training - Cloud Administration" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2"> Winter Training in <span class="red-color">Cloud Administration</span>
                </h5>
                <p class="text-muted small"> Get practical experience with AWS, Azure, and Linux cloud environments — provisioning, configuration, monitoring and backup with lab-based projects. </p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Duration:</b> 6–8 Weeks
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Certification:</b> Training + Project Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Topics:</b> VM Deployment, Load Balancing, Backup & Recovery
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Tools:</b> AWS Console, Azure Portal, Linux CLI, CloudWatch
                  </li>
                </ul>
                <p class="small mt-3 text-muted"> Ideal for B.Tech, MCA, and BCA students interested in building careers in Cloud and DevOps roles. </p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20Cloud%20Administration%20Winter%20Training" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card: Full Stack Development with Python -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef1052b4b.webp" class="card-img-top rounded-top" alt="Winter Training - Full Stack Development with Python" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2"> Winter Training in <span class="red-color">Full Stack Development with Python</span>
                </h5>
                <p class="text-muted small"> Master Python, Django, REST APIs, front-end basics and databases to build full stack web applications with real project work. </p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Duration:</b> 6–8 Weeks
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Certification:</b> Training + Project Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Topics:</b> Django, REST APIs, HTML/CSS, JS, MySQL
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Tools:</b> PyCharm, Postman, VS Code, GitHub
                  </li>
                </ul>
                <p class="small mt-3 text-muted"> Perfect for IT, CS, and MCA students looking to start careers in web development with live project exposure and placement support. </p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20Full%20Stack%20Development%20with%20Python%20Winter%20Training" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card: Data Science -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef11633a0.webp" class="card-img-top rounded-top" alt="Winter Training - Data Science" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2"> Winter Training in <span class="red-color">Data Science</span>
                </h5>
                <p class="text-muted small"> Learn Python for data analysis, statistics, machine learning and visualization using pandas, scikit-learn and real datasets. </p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Duration:</b> 6–8 Weeks
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Certification:</b> Training + Project Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Topics:</b> Pandas, NumPy, ML Models, Visualization
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Tools:</b> Jupyter Notebook, Python, Tableau, Power BI
                  </li>
                </ul>
                <p class="small mt-3 text-muted"> Ideal for BCA, BSc, B.Tech, MCA students and analytics enthusiasts. Includes hands-on mentorship and placement prep. </p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20Data%20Science%20Winter%20Training" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card: AI & ML -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef123666a.webp" class="card-img-top rounded-top" alt="Winter Training - AI & ML" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2"> Winter Training in <span class="red-color">Artificial Intelligence & Machine Learning</span>
                </h5>
                <p class="text-muted small"> Hands-on training in ML algorithms, deep learning and neural networks with Python, TensorFlow and Keras for real-world projects. </p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Duration:</b> 6–8 Weeks
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Certification:</b> Training + Project Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Topics:</b> Supervised & Unsupervised Learning, Neural Networks
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Tools:</b> Python, TensorFlow, Keras, Scikit-learn
                  </li>
                </ul>
                <p class="small mt-3 text-muted"> Suitable for BCA, BSc, B.Tech, MCA students and anyone keen on building a career in AI/ML. </p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20AI%20%26%20ML%20Winter%20Training" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card: Networking -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef1308192.webp" class="card-img-top rounded-top" alt="Winter Training - Networking" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2"> Winter Training in <span class="red-color">Networking</span>
                </h5>
                <p class="text-muted small"> Hands-on network administration training covering routing, switching, IP addressing and network security using real lab tools. </p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Duration:</b> 6–8 Weeks
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Certification:</b> Training + Project Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Topics:</b> IP Addressing, Routing, Switching, Network Security
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Tools:</b> Cisco Packet Tracer, Wireshark, Nmap
                  </li>
                </ul>
                <p class="small mt-3 text-muted"> Ideal for students pursuing BCA, BSc, B.Tech, MCA and aspiring networking professionals. </p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20Networking%20Winter%20Training" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card: Cloud Security -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef13d60ef.webp" class="card-img-top rounded-top" alt="Winter Training - Cloud Security" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2"> Winter Training in <span class="red-color">Cloud Security</span>
                </h5>
                <p class="text-muted small"> Learn cloud security architecture, risk management and compliance for AWS, Azure and GCP with hands-on labs and assessments. </p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Duration:</b> 6–8 Weeks
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Certification:</b> Training + Project Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Topics:</b> Cloud Security Architecture, Risk Management, Compliance
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Tools:</b> AWS, Azure, Google Cloud
                  </li>
                </ul>
                <p class="small mt-3 text-muted"> Perfect for students pursuing BCA, BSc, B.Tech, MCA and anyone aspiring to specialize in cloud security. </p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20Cloud%20Security%20Winter%20Training" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card: DevOps Engineering -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef14a4272.webp" class="card-img-top rounded-top" alt="Winter Training - DevOps Engineering" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2"> Winter Training in <span class="red-color">DevOps Engineering</span>
                </h5>
                <p class="text-muted small"> Learn CI/CD pipelines, containerization, IaC and automation with Jenkins, Docker, Kubernetes, Ansible and Terraform via practical labs. </p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Duration:</b> 6–8 Weeks
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Certification:</b> Training + Project Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Topics:</b> CI/CD, Containerization, IaC
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Tools:</b> Jenkins, Docker, Kubernetes, Ansible, Terraform
                  </li>
                </ul>
                <p class="small mt-3 text-muted"> Ideal for BCA, B.Tech, MCA and career changers wanting to enter DevOps with strong placement support. </p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20DevOps%20Engineering%20Winter%20Training" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card: Linux System Administration -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef1568b13.webp" class="card-img-top rounded-top" alt="Winter Training - Linux System Administration" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2"> Winter Training in <span class="red-color">Linux System Administration</span>
                </h5>
                <p class="text-muted small"> Master Linux server administration, shell scripting, web server management (Apache/Nginx) and system monitoring with hands-on labs. </p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Duration:</b> 6–8 Weeks
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Certification:</b> Training + Project Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Topics:</b> Linux Installation, Server Management, System Security
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Tools:</b> Apache, Nginx, Bash, Monitoring Tools
                  </li>
                </ul>
                <p class="small mt-3 text-muted"> Perfect for students and freshers wanting to deepen Linux skills and prepare for system admin roles. </p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20Linux%20System%20Administration%20Winter%20Training" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card: Web Development (HTML, CSS, JS, React) -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef1646ae4.webp" class="card-img-top rounded-top" alt="Winter Training - Web Development" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2"> Winter Training in <span class="red-color">Web Development (HTML, CSS, JS, React)</span>
                </h5>
                <p class="text-muted small"> Build responsive, interactive websites and web apps using HTML5, CSS3, JavaScript and React with real-time projects and deployment. </p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Duration:</b> 6–8 Weeks
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Certification:</b> Training + Project Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Topics:</b> HTML5, CSS3, JS, React.js, Responsive Design
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Tools:</b> VS Code, Git, React Developer Tools
                  </li>
                </ul>
                <p class="small mt-3 text-muted"> Ideal for BCA, BSc, B.Tech and MCA students aiming for web development careers with placement support. </p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20Web%20Development%20Winter%20Training" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card: AWS Cloud -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef1716f7d.webp" class="card-img-top rounded-top" alt="Winter Training - AWS Cloud" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2"> Winter Training in <span class="red-color">AWS Cloud</span>
                </h5>
                <p class="text-muted small"> Hands-on AWS training covering EC2, S3, VPC, Lambda, RDS and IAM plus real-world deployments and monitoring. </p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Duration:</b> 6–8 Weeks
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Certification:</b> Training + Project Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Topics:</b> EC2, S3, VPC, Lambda, RDS, IAM
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Tools:</b> AWS Console, AWS CLI, CloudFormation, CloudWatch
                  </li>
                </ul>
                <p class="small mt-3 text-muted"> Perfect for students and freshers wanting to build careers in cloud technology with placement support. </p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20AWS%20Cloud%20Winter%20Training" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card: Azure Cloud -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef17d0730.webp" class="card-img-top rounded-top" alt="Winter Training - Azure Cloud" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2"> Winter Training in <span class="red-color">Azure Cloud</span>
                </h5>
                <p class="text-muted small"> Practical exposure to Azure services — VMs, Storage, Functions, Networking and ARM templates with lab tasks. </p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Duration:</b> 6–8 Weeks
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Certification:</b> Training + Project Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Topics:</b> Azure VMs, Blob Storage, Functions, Networking
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Tools:</b> Azure Portal, Azure CLI, Azure DevOps, ARM Templates
                  </li>
                </ul>
                <p class="small mt-3 text-muted"> Ideal for students seeking specialization in Microsoft Azure and cloud careers. </p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20Azure%20Cloud%20Winter%20Training" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card: Kubernetes & Docker -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef1897f35.webp" class="card-img-top rounded-top" alt="Winter Training - Kubernetes & Docker" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2"> Winter Training in <span class="red-color">Kubernetes & Docker</span>
                </h5>
                <p class="text-muted small"> Learn containerization with Docker and orchestration with Kubernetes — build, deploy and scale containerized applications. </p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Duration:</b> 6–8 Weeks
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Certification:</b> Training + Project Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Topics:</b> Docker Containers, Kubernetes Clusters, Orchestration
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Tools:</b> Docker CLI, Kubernetes, Helm, Docker Compose
                  </li>
                </ul>
                <p class="small mt-3 text-muted"> Great for students aiming for DevOps and cloud-native roles with hands-on labs and placement assistance. </p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20Kubernetes%20%26%20Docker%20Winter%20Training" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card: Penetration Testing -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef195679f.webp" class="card-img-top rounded-top" alt="Winter Training - Penetration Testing" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2"> Winter Training in <span class="red-color">Penetration Testing</span>
                </h5>
                <p class="text-muted small"> Practical penetration testing program covering vulnerability assessment, exploitation and safe reporting using Kali Linux, Metasploit and Burp Suite. </p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Duration:</b> 6–8 Weeks
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Certification:</b> Training + Project Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Topics:</b> Ethical Hacking, Vulnerability Assessment, Pen Testing Techniques
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Tools:</b> Kali Linux, Metasploit, Burp Suite, Nmap, Wireshark
                  </li>
                </ul>
                <p class="small mt-3 text-muted"> Perfect for IT students and freshers looking to specialize in ethical hacking with placement support. </p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20Penetration%20Testing%20Winter%20Training" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card: Digital Marketing -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef1a36ae6.webp" class="card-img-top rounded-top" alt="Winter Training - Digital Marketing" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2"> Winter Training in <span class="red-color">Digital Marketing</span>
                </h5>
                <p class="text-muted small"> Practical digital marketing training covering SEO, SEM, social media, content marketing and analytics with campaign projects. </p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Duration:</b> 6–8 Weeks
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Certification:</b> Training + Project Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Topics:</b> SEO, SEM, Social Media Marketing, Content Marketing
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Tools:</b> Google Ads, Facebook Ads, SEMrush, Google Analytics
                  </li>
                </ul>
                <p class="small mt-3 text-muted"> Great for students and freshers aiming to start careers in digital marketing with real campaign experience. </p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20Digital%20Marketing%20Winter%20Training" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card: UI/UX Designing -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef1b1284c.webp" class="card-img-top rounded-top" alt="Winter Training - UI/UX Designing" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2"> Winter Training in <span class="red-color">UI/UX Designing</span>
                </h5>
                <p class="text-muted small"> Learn user research, wireframing, prototyping and interaction design using Figma, Adobe XD and InVision to build a strong design portfolio. </p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Duration:</b> 6–8 Weeks
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Certification:</b> Training + Project Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Topics:</b> Wireframing, Prototyping, User Research
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Tools:</b> Figma, Adobe XD, Sketch
                  </li>
                </ul>
                <p class="small mt-3 text-muted"> Perfect for aspiring designers wanting hands-on projects and portfolio development. </p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20UI/UX%20Designing%20Winter%20Training" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card: Blockchain Basics -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef1c403c2.webp" class="card-img-top rounded-top" alt="Winter Training - Blockchain Basics" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2"> Winter Training in <span class="red-color">Blockchain Basics</span>
                </h5>
                <p class="text-muted small"> Understand blockchain fundamentals, smart contracts and dApp development on Ethereum using Solidity and Truffle. </p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Duration:</b> 6–8 Weeks
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Certification:</b> Training + Project Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Topics:</b> Blockchain Basics, Smart Contracts, dApps
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Tools:</b> Ethereum, Solidity, Truffle, Hyperledger
                  </li>
                </ul>
                <p class="small mt-3 text-muted"> Great for students wanting to explore blockchain development and decentralized applications. </p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20Blockchain%20Basics%20Winter%20Training" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card: Python with Automation -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef1d0440c.webp" class="card-img-top rounded-top" alt="Winter Training - Python with Automation" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2"> Winter Training in <span class="red-color">Python with Automation</span>
                </h5>
                <p class="text-muted small"> Automate tasks using Python libraries like Selenium and PyAutoGUI — web scraping, automation workflows and scripting projects. </p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Duration:</b> 6–8 Weeks
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Certification:</b> Training + Project Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Topics:</b> Web Scraping, Automation, Selenium
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Tools:</b> Python, Selenium, PyAutoGUI, BeautifulSoup
                  </li>
                </ul>
                <p class="small mt-3 text-muted"> Ideal for BCA, BSc, B.Tech, MCA students who want practical Python automation experience. </p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20Python%20with%20Automation%20Winter%20Training" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- Salient Features of Winter Training Program <?php echo date("Y"); ?> -->
    <section class="training-features py-5 bg-light lazy-section visible" id="syllabus">
      <div class="container">
        <div class="text-center section-header mb-4">
          <span class="section-badge">Winter Training <?php echo date("Y"); ?></span>
          <h2 class="heading-main">
            <span class="red-color">Winter Training Programs in Pune</span> – Your Gateway to Skill Development
          </h2>
          <p class="text-muted text-center"> Join <b>WebAsha Technologies’ Winter Training Program <?php echo date("Y"); ?> in Pune</b> and take the first step towards your dream IT career. Our programs are designed to help students and fresh graduates gain real-world experience, master in-demand technologies, and build a professional portfolio that stands out. </p>
        </div>
        <div class="card shadow-sm border-0 p-4">
          <h4 class="fw-bold mb-3 text-center">Top Winter Training Programs in Pune <?php echo date("Y"); ?></h4>
          <p class="text-muted"> WebAsha Technologies offers the <b>best winter training programs in Pune</b> tailored for IT students and tech enthusiasts. Each program is structured to provide a perfect blend of theory and hands-on learning using the latest tools and technologies. Whether you're interested in coding, cloud computing, or cybersecurity — we have a specialization for you. </p>
          <p class="text-muted"> Students can choose from highly demanded programs such as <b>Web Development Training</b>, <b>Data Science Training</b>, and <b>Cyber Security & Ethical Hacking Training</b>. Additionally, those looking to explore advanced technologies can enroll in <b>Cloud Computing</b>, <b>Python Programming</b>, <b>Machine Learning</b>, or <b>AI Winter Training</b> programs in Pune. </p>
        </div>
        <div class="card shadow-sm border-0 p-4 mt-4">
          <h4 class="fw-bold mb-3 text-center">Specialized Winter Training Tracks</h4>
          <p class="text-muted"> Our training curriculum focuses on helping you become industry-ready through specialized courses. The <b>Full Stack Development Training</b> covers both front-end and back-end technologies, while the <b>AI & ML Training</b> introduces students to intelligent systems and neural networks. </p>
          <p class="text-muted"> If your interest lies in IT infrastructure, our <b>Networking Training</b> and <b>Cloud Security Training</b> will equip you with practical knowledge in managing and securing networks and cloud environments. Additionally, the <b>Digital Marketing Training</b> helps aspiring marketers learn SEO, social media strategy, and online branding — all essential skills for today’s digital age. </p>
        </div>
        <div class="card shadow-sm border-0 p-4 mt-4">
          <h4 class="fw-bold mb-3 text-center">Professional Development & Real-World Exposure</h4>
          <p class="text-muted"> At WebAsha Technologies, we focus not only on technical learning but also on overall professional development. Each training program includes <b>live projects, career mentoring, and placement support</b> to ensure you gain real-world exposure. </p>
          <p class="text-muted"> Our <b>Cloud Security Winter Training</b> trains you in securing cloud platforms like AWS and Azure, while the <b>Software Development Training</b> helps you master software design and development. Every program is guided by expert mentors who provide continuous feedback, career guidance, and support for your growth. </p>
          <p class="text-muted"> We also offer <b>training for BCA, BSc IT, MCA, and engineering students</b>, ensuring everyone has an opportunity to learn, grow, and gain industry-relevant experience. </p>
        </div>
        <div class="card shadow-sm border-0 p-4 mt-4">
          <h4 class="fw-bold mb-3 text-center">Why Choose WebAsha Technologies?</h4>
          <ul class="list-unstyled ps-2 small">
            <li>
              <i class="fa-solid fa-angles-right text-danger me-2"></i>
              <b>Learn from Certified Industry Experts</b> with years of professional experience in leading domains.
            </li>
            <li>
              <i class="fa-solid fa-angles-right text-danger me-2"></i>
              <b>Gain Hands-On Experience</b> with real-time projects and live technical demonstrations.
            </li>
            <li>
              <i class="fa-solid fa-angles-right text-danger me-2"></i>
              <b>Earn Globally Recognized Certification</b> from WebAsha Technologies upon successful completion.
            </li>
            <li>
              <i class="fa-solid fa-angles-right text-danger me-2"></i>
              <b>Access Premium Learning Materials</b> including software toolkits, guides, and recorded sessions.
            </li>
            <li>
              <i class="fa-solid fa-angles-right text-danger me-2"></i>
              <b>Get Project Completion Certificate</b> on company letterhead to enhance your professional portfolio.
            </li>
            <li>
              <i class="fa-solid fa-angles-right text-danger me-2"></i>
              <b>Receive Placement Assistance</b> and interview preparation from experienced mentors.
            </li>
            <li>
              <i class="fa-solid fa-angles-right text-danger me-2"></i>
              <b>Boost Employability</b> with soft-skill workshops and technical interview practice.
            </li>
          </ul>
        </div>
        <div class="card shadow-sm border-0 p-4 mt-4">
          <h4 class="fw-bold mb-3 text-center">Take the First Step Toward Your Future</h4>
          <p class="text-muted"> Whether you dream of becoming a web developer, ethical hacker, data analyst, AI engineer, or cloud specialist — <b>WebAsha Technologies’ Winter Training Programs in Pune</b> are built to turn your goals into achievements. </p>
          <p class="text-muted"> Start your journey towards success by enrolling in the <b>best winter training programs in Pune for <?php echo date("Y"); ?></b>. Build your technical skills, gain practical exposure, and launch your professional career with confidence. </p>
        </div>
        <div class="text-center mt-4">
          <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll Now">Enroll Now</a>
          <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="View Syllabus">View Syllabus</a>
          <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20know%20more%20about%20the%20Winter%20Training%20Programs%20in%20Pune%20<?php echo date("Y"); ?>" target="_blank" class="btn btn-success btn-sm">
            <i class="fa-brands fa-whatsapp me-1"></i> Whatsapp </a>
        </div>
      </div>
    </section>
    <!-- Screenshots -->
    <section class="career-straight lazy-section"> <?php include("include/career-straight.php"); ?> </section>
    <!-- Alumni -->
    <section class="course-discover-profile lazy-section" id="our-instructor">
      <div class="section-header text-center">
        <span class="section-badge">Recent Career Success Stories</span>
      </div>
      <h2 class="heading-main-1 text-center">Explore Alumni with Profiles <span class="red-color">Like Yours</span>
      </h2>
      <p class="desc text-center">Learn about their career paths, specialties, and accomplishments.</p> <?php include("include/alumni.php"); ?>
    </section>
    <!-- FAQs -->
   <section class="course-webasha-faq lazy-section" id="faqs">
  <div class="container mt-4 mb-4">
    <div class="section-header text-center mb-5">
      <span class="section-badge">FAQs</span>
      <h2 class="heading-main-1 text-center">
        Winter Training Program <?php echo date("Y"); ?>  <span class="red-color">FAQs</span>
      </h2>
    </div>

    <div class="all-theme-accordion" id="content">
      <div class="accordion accordion-flush" id="coursefaqAccordionFlush">

        <!-- FAQ 1 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading-1">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq1" aria-expanded="true" aria-controls="flush-coursefaq1">
              What does the Winter Training Program include?
            </button>
          </h2>
          <div id="flush-coursefaq1" class="accordion-collapse collapse show" aria-labelledby="flush-heading-1" data-bs-parent="#coursefaqAccordionFlush">
            <div class="accordion-body pt-0 text-muted">
              The program includes instructor-led labs, real-world projects, mentorship, career guidance, a project completion certificate and optional placement support.
            </div>
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading-2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq2" aria-expanded="false" aria-controls="flush-coursefaq2">
              Who is eligible to apply for the training?
            </button>
          </h2>
          <div id="flush-coursefaq2" class="accordion-collapse collapse" aria-labelledby="flush-heading-2" data-bs-parent="#coursefaqAccordionFlush">
            <div class="accordion-body pt-0 text-muted">
              College students (B.Tech/B.E, MCA, BCA, BSc IT), diploma students, and fresh graduates looking for hands-on exposure are eligible. Specific programs may list additional prerequisites.
            </div>
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading-3">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq3" aria-expanded="false" aria-controls="flush-coursefaq3">
              What are the program durations available?
            </button>
          </h2>
          <div id="flush-coursefaq3" class="accordion-collapse collapse" aria-labelledby="flush-heading-3" data-bs-parent="#coursefaqAccordionFlush">
            <div class="accordion-body pt-0 text-muted">
              Durations typically range from short 4–6 week bootcamps to 6–8 week trainings and extended 3–6 month industrial training options; check the specific course page for exact schedules.
            </div>
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading-4">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq4" aria-expanded="false" aria-controls="flush-coursefaq4">
              Are classes online, offline or hybrid?
            </button>
          </h2>
          <div id="flush-coursefaq4" class="accordion-collapse collapse" aria-labelledby="flush-heading-4" data-bs-parent="#coursefaqAccordionFlush">
            <div class="accordion-body pt-0 text-muted">
              We offer classroom (offline), live online instructor-led, and hybrid modes. Availability depends on the selected training and batch.
            </div>
          </div>
        </div>

        <!-- FAQ 5 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading-5">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq5" aria-expanded="false" aria-controls="flush-coursefaq5">
              Will I get a certificate on completion?
            </button>
          </h2>
          <div id="flush-coursefaq5" class="accordion-collapse collapse" aria-labelledby="flush-heading-5" data-bs-parent="#coursefaqAccordionFlush">
            <div class="accordion-body pt-0 text-muted">
              Yes. On successful completion of projects and assessments you receive a training certificate and a separate project completion letter on company letterhead.
            </div>
          </div>
        </div>

        <!-- FAQ 6 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading-6">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq6" aria-expanded="false" aria-controls="flush-coursefaq6">
              Are training hours flexible for college schedules?
            </button>
          </h2>
          <div id="flush-coursefaq6" class="accordion-collapse collapse" aria-labelledby="flush-heading-6" data-bs-parent="#coursefaqAccordionFlush">
            <div class="accordion-body pt-0 text-muted">
              Many batches and lab timings are designed to accommodate college timetables; evening and weekend slots are commonly available. Confirm the selected batch timing when you enroll.
            </div>
          </div>
        </div>

        <!-- FAQ 7 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading-7">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq7" aria-expanded="false" aria-controls="flush-coursefaq7">
              What projects will I work on during the training?
            </button>
          </h2>
          <div id="flush-coursefaq7" class="accordion-collapse collapse" aria-labelledby="flush-heading-7" data-bs-parent="#coursefaqAccordionFlush">
            <div class="accordion-body pt-0 text-muted">
              Projects are practical and industry-aligned: e.g., cloud deployments, secure web app pentests, ML models, full-stack apps, automation scripts, or containerized microservices depending on the track.
            </div>
          </div>
        </div>

        <!-- FAQ 8 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading-8">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq8" aria-expanded="false" aria-controls="flush-coursefaq8">
              Is assessment or certification exam part of the program?
            </button>
          </h2>
          <div id="flush-coursefaq8" class="accordion-collapse collapse" aria-labelledby="flush-heading-8" data-bs-parent="#coursefaqAccordionFlush">
            <div class="accordion-body pt-0 text-muted">
              Trainings include periodic assessments, project evaluations and a final review. Some specialized courses include vendor exams (optional) — check individual course details.
            </div>
          </div>
        </div>

        <!-- FAQ 9 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading-9">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq9" aria-expanded="false" aria-controls="flush-coursefaq9">
              Does WebAsha provide placement assistance after the training?
            </button>
          </h2>
          <div id="flush-coursefaq9" class="accordion-collapse collapse" aria-labelledby="flush-heading-9" data-bs-parent="#coursefaqAccordionFlush">
            <div class="accordion-body pt-0 text-muted">
              Yes. We offer placement guidance, resume workshops, mock interviews and connect qualified candidates with hiring partners; placement is subject to eligibility and performance.
            </div>
          </div>
        </div>

        <!-- FAQ 10 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading-10">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq10" aria-expanded="false" aria-controls="flush-coursefaq10">
              What is the program fee and are there payment options?
            </button>
          </h2>
          <div id="flush-coursefaq10" class="accordion-collapse collapse" aria-labelledby="flush-heading-10" data-bs-parent="#coursefaqAccordionFlush">
            <div class="accordion-body pt-0 text-muted">
              Fees vary by program and duration. We provide EMI, multi-installment and student discounts on selected batches — contact admissions for a fee schedule and payment plans.
            </div>
          </div>
        </div>

        <!-- FAQ 11 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading-11">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq11" aria-expanded="false" aria-controls="flush-coursefaq11">
              Are scholarships or group discounts available?
            </button>
          </h2>
          <div id="flush-coursefaq11" class="accordion-collapse collapse" aria-labelledby="flush-heading-11" data-bs-parent="#coursefaqAccordionFlush">
            <div class="accordion-body pt-0 text-muted">
              We occasionally run scholarship offers and group discounts for teams or college batches. Contact admissions to check current promotions and eligibility.
            </div>
          </div>
        </div>

        <!-- FAQ 12 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading-12">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq12" aria-expanded="false" aria-controls="flush-coursefaq12">
              Will I receive training letters for college credit?
            </button>
          </h2>
          <div id="flush-coursefaq12" class="accordion-collapse collapse" aria-labelledby="flush-heading-12" data-bs-parent="#coursefaqAccordionFlush">
            <div class="accordion-body pt-0 text-muted">
              Yes. We provide training letters and completion certificates which many colleges accept for credit; verify college-specific requirements with your department.
            </div>
          </div>
        </div>

        <!-- FAQ 13 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading-13">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq13" aria-expanded="false" aria-controls="flush-coursefaq13">
              What hardware/software do I need to participate?
            </button>
          </h2>
          <div id="flush-coursefaq13" class="accordion-collapse collapse" aria-labelledby="flush-heading-13" data-bs-parent="#coursefaqAccordionFlush">
            <div class="accordion-body pt-0 text-muted">
              A laptop with internet access is recommended. Specific programs may require additional free/open-source tools which we list on the course page; paid software (if any) will be communicated beforehand.
            </div>
          </div>
        </div>

        <!-- FAQ 14 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading-14">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq14" aria-expanded="false" aria-controls="flush-coursefaq14">
              How are mentors and trainers selected?
            </button>
          </h2>
          <div id="flush-coursefaq14" class="accordion-collapse collapse" aria-labelledby="flush-heading-14" data-bs-parent="#coursefaqAccordionFlush">
            <div class="accordion-body pt-0 text-muted">
              Trainers are industry practitioners with relevant certifications and hands-on experience. We vet mentors for teaching ability and domain expertise to ensure quality guidance.
            </div>
          </div>
        </div>

        <!-- FAQ 15 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading-15">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq15" aria-expanded="false" aria-controls="flush-coursefaq15">
              Can working professionals attend the training?
            </button>
          </h2>
          <div id="flush-coursefaq15" class="accordion-collapse collapse" aria-labelledby="flush-heading-15" data-bs-parent="#coursefaqAccordionFlush">
            <div class="accordion-body pt-0 text-muted">
              Yes. Many programs are suited for working professionals — choose weekend or evening batches or the online live format to fit your schedule.
            </div>
          </div>
        </div>

        <!-- FAQ 16 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading-16">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq16" aria-expanded="false" aria-controls="flush-coursefaq16">
              What is the refund or cancellation policy?
            </button>
          </h2>
          <div id="flush-coursefaq16" class="accordion-collapse collapse" aria-labelledby="flush-heading-16" data-bs-parent="#coursefaqAccordionFlush">
            <div class="accordion-body pt-0 text-muted">
              Refund policies vary by program and are shared at enrollment. Generally, cancellations before start receive partial/full refunds depending on notice period; contact admissions for specifics.
            </div>
          </div>
        </div>

        <!-- FAQ 17 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading-17">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq17" aria-expanded="false" aria-controls="flush-coursefaq17">
              How do I apply and reserve my seat?
            </button>
          </h2>
          <div id="flush-coursefaq17" class="accordion-collapse collapse" aria-labelledby="flush-heading-17" data-bs-parent="#coursefaqAccordionFlush">
            <div class="accordion-body pt-0 text-muted">
              Apply via the program page, enquiry form, or call/WhatsApp admissions. Seats are confirmed after payment or by following the registration steps provided by admissions.
            </div>
          </div>
        </div>

        <!-- FAQ 18 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading-18">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq18" aria-expanded="false" aria-controls="flush-coursefaq18">
              Are training certificates globally recognized?
            </button>
          </h2>
          <div id="flush-coursefaq18" class="accordion-collapse collapse" aria-labelledby="flush-heading-18" data-bs-parent="#coursefaqAccordionFlush">
            <div class="accordion-body pt-0 text-muted">
              Our certificates reflect the training and projects completed at WebAsha Technologies. Recognition depends on employer or institution policies; many hiring partners accept our certificates as proof of practical training.
            </div>
          </div>
        </div>

        <!-- FAQ 19 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading-19">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq19" aria-expanded="false" aria-controls="flush-coursefaq19">
              Will I get one-on-one mentoring or doubt-clearing sessions?
            </button>
          </h2>
          <div id="flush-coursefaq19" class="accordion-collapse collapse" aria-labelledby="flush-heading-19" data-bs-parent="#coursefaqAccordionFlush">
            <div class="accordion-body pt-0 text-muted">
              Yes. Most trainings include mentor office hours, one-on-one project guidance and dedicated doubt-clearing sessions to ensure steady progress.
            </div>
          </div>
        </div>

        <!-- FAQ 20 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading-20">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq20" aria-expanded="false" aria-controls="flush-coursefaq20">
              Who do I contact for more information?
            </button>
          </h2>
          <div id="flush-coursefaq20" class="accordion-collapse collapse" aria-labelledby="flush-heading-20" data-bs-parent="#coursefaqAccordionFlush">
            <div class="accordion-body pt-0 text-muted">
              Contact admissions at <a href="tel:+918010911256">+91 80109 11256</a>, email the admissions team, or use the enquiry form on the program page — we’ll respond with batch details and enrollment steps.
            </div>
          </div>
        </div>

      </div> <!-- /.accordion -->
    </div> <!-- /.all-theme-accordion -->
  </div> <!-- /.container -->
</section>

<!-- JSON-LD FAQ schema for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What does the Winter Training Program include?",
      "acceptedAnswer": { "@type": "Answer", "text": "The program includes instructor-led labs, real-world projects, mentorship, career guidance, a project completion certificate and optional placement support."}
    },
    {
      "@type": "Question",
      "name": "Who is eligible to apply for the training?",
      "acceptedAnswer": { "@type": "Answer", "text": "College students (B.Tech/B.E, MCA, BCA, BSc IT), diploma students, and fresh graduates looking for hands-on exposure are eligible. Specific programs may list additional prerequisites."}
    },
    {
      "@type": "Question",
      "name": "What are the program durations available?",
      "acceptedAnswer": { "@type": "Answer", "text": "Durations typically range from short 4–6 week bootcamps to 6–8 week trainings and extended 3–6 month industrial training options; check the specific course page for exact schedules."}
    },
    {
      "@type": "Question",
      "name": "Are classes online, offline or hybrid?",
      "acceptedAnswer": { "@type": "Answer", "text": "We offer classroom (offline), live online instructor-led, and hybrid modes. Availability depends on the selected training and batch."}
    },
    {
      "@type": "Question",
      "name": "Will I get a certificate on completion?",
      "acceptedAnswer": { "@type": "Answer", "text": "Yes. On successful completion of projects and assessments you receive a training certificate and a separate project completion letter on company letterhead."}
    },
    {
      "@type": "Question",
      "name": "Are training hours flexible for college schedules?",
      "acceptedAnswer": { "@type": "Answer", "text": "Many batches and lab timings are designed to accommodate college timetables; evening and weekend slots are commonly available. Confirm the selected batch timing when you enroll."}
    },
    {
      "@type": "Question",
      "name": "What projects will I work on during the training?",
      "acceptedAnswer": { "@type": "Answer", "text": "Projects are practical and industry-aligned: e.g., cloud deployments, secure web app pentests, ML models, full-stack apps, automation scripts, or containerized microservices depending on the track."}
    },
    {
      "@type": "Question",
      "name": "Is assessment or certification exam part of the program?",
      "acceptedAnswer": { "@type": "Answer", "text": "Trainings include periodic assessments, project evaluations and a final review. Some specialized courses include vendor exams (optional) — check individual course details."}
    },
    {
      "@type": "Question",
      "name": "Does WebAsha provide placement assistance after the training?",
      "acceptedAnswer": { "@type": "Answer", "text": "Yes. We offer placement guidance, resume workshops, mock interviews and connect qualified candidates with hiring partners; placement is subject to eligibility and performance."}
    },
    {
      "@type": "Question",
      "name": "What is the program fee and are there payment options?",
      "acceptedAnswer": { "@type": "Answer", "text": "Fees vary by program and duration. We provide EMI, multi-installment and student discounts on selected batches — contact admissions for a fee schedule and payment plans."}
    },
    {
      "@type": "Question",
      "name": "Are scholarships or group discounts available?",
      "acceptedAnswer": { "@type": "Answer", "text": "We occasionally run scholarship offers and group discounts for teams or college batches. Contact admissions to check current promotions and eligibility."}
    },
    {
      "@type": "Question",
      "name": "Will I receive training letters for college credit?",
      "acceptedAnswer": { "@type": "Answer", "text": "Yes. We provide training letters and completion certificates which many colleges accept for credit; verify college-specific requirements with your department."}
    },
    {
      "@type": "Question",
      "name": "What hardware/software do I need to participate?",
      "acceptedAnswer": { "@type": "Answer", "text": "A laptop with internet access is recommended. Specific programs may require additional free/open-source tools which we list on the course page; paid software (if any) will be communicated beforehand."}
    },
    {
      "@type": "Question",
      "name": "How are mentors and trainers selected?",
      "acceptedAnswer": { "@type": "Answer", "text": "Trainers are industry practitioners with relevant certifications and hands-on experience. We vet mentors for teaching ability and domain expertise to ensure quality guidance."}
    },
    {
      "@type": "Question",
      "name": "Can working professionals attend the training?",
      "acceptedAnswer": { "@type": "Answer", "text": "Yes. Many programs are suited for working professionals — choose weekend or evening batches or the online live format to fit your schedule."}
    },
    {
      "@type": "Question",
      "name": "What is the refund or cancellation policy?",
      "acceptedAnswer": { "@type": "Answer", "text": "Refund policies vary by program and are shared at enrollment. Generally, cancellations before start receive partial/full refunds depending on notice period; contact admissions for specifics."}
    },
    {
      "@type": "Question",
      "name": "How do I apply and reserve my seat?",
      "acceptedAnswer": { "@type": "Answer", "text": "Apply via the program page, enquiry form, or call/WhatsApp admissions. Seats are confirmed after payment or by following the registration steps provided by admissions."}
    },
    {
      "@type": "Question",
      "name": "Are training certificates globally recognized?",
      "acceptedAnswer": { "@type": "Answer", "text": "Our certificates reflect the training and projects completed at WebAsha Technologies. Recognition depends on employer or institution policies; many hiring partners accept our certificates as proof of practical training."}
    },
    {
      "@type": "Question",
      "name": "Will I get one-on-one mentoring or doubt-clearing sessions?",
      "acceptedAnswer": { "@type": "Answer", "text": "Yes. Most trainings include mentor office hours, one-on-one project guidance and dedicated doubt-clearing sessions to ensure steady progress."}
    },
    {
      "@type": "Question",
      "name": "Who do I contact for more information?",
      "acceptedAnswer": { "@type": "Answer", "text": "Contact admissions at +91 80109 11256, email the admissions team, or use the enquiry form on the program page — we’ll respond with batch details and enrollment steps."}
    }
  ]
}
</script>

    <!-- Other Courses -->
    <section class="other-course-kubernetes lazy-section">
      <div class="container">
        <div class="course-kubernetes-wraper">
          <div class="course-kubernetes">
            <h2 class="heading-main text-center">Browse Winter Training Program <?php echo date("Y"); ?> related Resources</h2> <?php include("include/related-resources.php"); ?>
          </div>
        </div>
      </div>
    </section> <?php include("include/enquiry-modal.php"); ?> <?php include("include/syllabus-modal.php"); ?> </main>
    <!-- Footer --> <?php include("include/footer.php"); ?> <?php include("include/footerlink.php"); ?>
  </body>
</html>