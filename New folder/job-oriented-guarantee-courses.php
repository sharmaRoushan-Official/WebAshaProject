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
    <!-- Page-specific metadata for Job Guarantee Courses -->
    <title>Job Guarantee Courses <?php echo date("Y"); ?> in Pune | WebAsha Technologies</title>
    <meta name="description" content="Join WebAsha Technologies for Job Guarantee Courses in Pune with 100% Placement Support. Gain industry-ready skills in Full Stack, DevOps, Data Science, Cloud, and Cyber Security for career success in <?php echo date("Y"); ?>.">
    <meta name="keywords" content="Job Guarantee Courses Pune <?php echo date("Y"); ?>, 100% Placement Training, Job Oriented Courses Pune, Full Stack Developer Training, DevOps Job Guarantee, Cloud Computing Placement">
    <!-- Canonical URL to avoid duplicate content -->
    <link rel="canonical" href="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <!-- Page-specific Open Graph for social sharing -->
    <meta property="og:title" content="Job Guarantee Courses <?php echo date("Y"); ?> in Pune | WebAsha Technologies">
    <meta property="og:description" content="Launch your IT career with WebAsha Technologies’ Job Guarantee Courses in Pune. Expert-led training and 100% placement assistance in Full Stack, DevOps, and more.">
    <meta property="og:url" content="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <meta property="og:image" content="https://training.webasha.com/assets/img/job-guarantee/job-guarantee.webp">
    <meta property="og:image:alt" content="Job Guarantee Courses <?php echo date("Y"); ?> at WebAsha Technologies in Pune">
    <meta property="og:type" content="website">
    <!-- Page-specific Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Job Guarantee Courses <?php echo date("Y"); ?> in Pune | WebAsha Technologies">
    <meta name="twitter:description" content="Secure top IT jobs with WebAsha Technologies’ Job Guarantee Courses in Pune. Comprehensive training and assured placements for <?php echo date("Y"); ?>.">
    <meta name="twitter:image" content="https://training.webasha.com/assets/img/job-guarantee/job-guarantee.webp">
    <!-- Page-specific JSON-LD: Course schema for enhanced search visibility -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Course",
      "name": "Job Guarantee Courses <?php echo date("Y"); ?> in Pune",
      "description": "Transform your career with WebAsha Technologies’ Job Guarantee Courses in Pune. Expert-led training in Full Stack, DevOps, Data Science, Cloud, and Cyber Security with 100% placement support.",
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
    <!-- Creating banner section for Job Guarantee Courses -->
    <section class="banner-course">
      <div class="container">
        <div class="row align-items-center">
          <!-- Left Column -->
          <div class="col-lg-8 col-sm-12">
            <!-- Adding breadcrumb navigation -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="/" class="text-decoration-none" aria-label="Home">
                    <svg viewBox="0 0 20 18" xmlns="http://www.w3.org/2000/svg" width="20" height="18">
                      <path d="M8 17.5V11.5H12V17.5H17V9.5H20L10 0.5L0 9.5H3V17.5H8Z" fill="currentColor" />
                    </svg>
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Job Oriented Guarantee Courses <?php echo date("Y"); ?></li>
              </ol>
            </nav>
            <!-- Displaying banner content -->
            <div class="banner-course-content">
              <h1 class="heading-main-1 text-white">Job Oriented Guarantee Courses <?php echo date("Y"); ?> in Pune - <span class="red-color">100% Placement Guaranteed!</span></h1>
              <!-- Showing review card with stats and ratings -->
              <div class="banner-review-card">
                <div class="enrolled-group d-flex align-items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700" viewBox="0 0 24 24" aria-hidden="true" role="img" class="me-2">
                    <path d="M16 11c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-8 0c1.7 0 3-1.3 3-3S9.7 5 8 5 5 6.3 5 8s1.3 3 3 3zm0 2c-2.3 0-7 1.2-7 3.5V20h14v-3.5C15 14.2 10.3 13 8 13zm8 0c-.3 0-.7 0-1 .1 1.2.8 2 2.1 2 3.4V20h6v-3.5c0-2.3-4.7-3.5-7-3.5z" />
                  </svg>
                  <span>3,850 Students Placed</span>
                </div>
                <!-- Displaying rating stars -->
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
                <!-- Showing social ratings -->
                <ul class="list-unstyled social-list">
                  <li>
                    <img src="assets/img/icons/google.svg" alt="Google Rating" width="20" height="20" loading="lazy"> 4.9/5
                  </li>
                  <li>
                    <img src="assets/img/icons/facebook.svg" alt="Facebook Rating" width="24" height="24" loading="lazy"> 4.9/5
                  </li>
                </ul>
              </div>
              <!-- Describing job guarantee courses -->
              <p class="text-white">Join our <strong>Job Oriented Guarantee Courses <?php echo date("Y"); ?></strong> at WebAsha Technologies and secure your dream IT job with <strong>100% placement guarantee</strong>. Get industry-ready skills, live projects, and guaranteed job offers in top companies.</p>
              <div class="check-list-box">
                <ul class="benefits-list mb-0">
                  <li>
                    <i class="fa-solid fa-square-check"></i> 100% Job Guarantee with Salary ₹4-8 LPA
                  </li>
                  <li>
                    <i class="fa-solid fa-square-check"></i> Live Projects & Industry Exposure
                  </li>
                  <li>
                    <i class="fa-solid fa-square-check"></i> Expert Interview Preparation
                  </li>
                  <li>
                    <i class="fa-solid fa-square-check"></i> Flexible Learning Modes
                  </li>
                  <li>
                    <i class="fa-solid fa-square-check"></i> 500+ Hiring Partners
                  </li>
                  <li>
                    <i class="fa-solid fa-square-check"></i> Unlimited Mock Interviews
                  </li>
                </ul>
              </div>
              <p class="text-white">Transform your career with our proven job guarantee programs designed for immediate employment success.</p>
              <!-- Displaying course details -->
              <div class="info-bar" role="region" aria-label="Course details">
                <div class="info-pill">Course Duration: <strong class="ms-2">6 Months • 8 Months</strong></div>
                <div class="info-text">Delivery: <strong class="ms-1">Online | Offline</strong></div>
                <div class="info-text">Language: <strong class="ms-1">Hindi | English</strong></div>
              </div>
              <!-- Adding call-to-action buttons -->
              <div class="button-group mb-5">
                <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20Job%20Guarantee%20Course" class="btn-whatsapp text-decoration-none" aria-label="Contact via WhatsApp">
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
                  <source srcset="assets/img/job-guarantee/job-guarantee.webp" type="image/webp">
                  <img src="assets/img/job-guarantee/job-guarantee.webp" alt="Job Guarantee Courses Preview Thumbnail" width="360" height="220" loading="lazy" decoding="async" class="img-fluid rounded shadow-sm">
                </picture>
                <button type="button" class="video-btn position-absolute top-50 start-50 translate-middle" aria-label="Play course promo video" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="ERtp4zua0-s">
                  <svg class="play-icon" viewBox="0 0 64 64" width="64" height="64" aria-hidden="true" focusable="false">
                    <circle cx="32" cy="32" r="32" fill="rgba(0,0,0,0.55)" />
                    <path d="M26 20 L45 32 L26 44 z" fill="#fff" />
                  </svg>
                </button>
              </div>
              <div class="pera-group">
                <p class="desc">100% Job Guarantee Career Programs</p>
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
          <!-- Showing placement stats -->
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
    <!-- Adding sticky navigation for job sections -->
    <section class="sticky-main-header1" id="stickyheader" style="position: sticky; top: 0; z-index: 1000; background-color: white;">
      <div class="container">
        <div class="sticky-header-list">
          <ul class="list-unstyled mb-0">
            <li>
              <a href="#overview" class="btn btn-outline-primary text-decoration-none">Overview</a>
            </li>
            <li>
              <a href="#job-tracks" class="btn btn-outline-primary text-decoration-none">Job Programs</a>
            </li>
            <li>
              <a href="#job-prep" class="btn btn-outline-primary text-decoration-none">Placement Process</a>
            </li>
            <li>
              <a href="#our-instructor" class="btn btn-outline-primary text-decoration-none">Success Stories</a>
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
            <button type="button" class="btn btn-enroll" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Enroll Now</button>
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
      <h2 class="heading-main-1 text-white text-center">Job Guarantee Courses <?php echo date("Y"); ?> <span class="red-color">Recent Reviews</span></h2>
      <?php include("include/video-reviews.php"); ?>
    </section>
    <!-- Showing text-based reviews -->
    <section class="success-speaks-reviwe course-speaks section-header text-center lazy-section">
      <div class="container">
        <span class="section-badge">Recent Placements Testimonials</span>
        <h2 class="heading-main text-center mb-5">Job Guarantee Courses <?php echo date("Y"); ?> <span class="red-color">Reviews</span></h2>
        <?php include("include/text-reviews.php"); ?>
      </div>
    </section>
    <!-- Highlighting placement success -->
    <section class="course-technologies-placement lazy-section" id="placement-reviews">
      <?php include("include/placement.php"); ?>
    </section>
    <!-- Listing key features of job guarantee courses -->
    <section class="training-features section-header text-center mt-5 lazy-section">
      <div class="container">
        <!-- Preloading critical image for performance -->
        <link rel="preload" href="https://i.ibb.co/5X09hRg/lab.gif" as="image" fetchpriority="high">
        <span class="section-badge">Training Key Features</span>
        <h2 class="heading-main-1 text-center">Job Guarantee Courses <?php echo date("Y"); ?> <span class="red-color">Training Key Features</span></h2>
        <p class="text-muted text-center mb-5">Explore the unique benefits of our Job Guarantee Courses designed for immediate employment success in Pune’s IT industry.</p>
        <?php include("include/summer-key-features.php"); ?>
    </section>
    <!-- Explaining why choose WebAsha -->
    <section class="py-5 course-comparison-section lazy-section">
      <?php include("include/why-webasha.php"); ?>
    </section>
    <!-- Starting main content -->
    <main>
      <!-- Job Overview Section -->
      <div class="container">
        <div class="row">
          <!-- Main Content -->
          <div class="col-lg-8 col-sm-12" id="sticky-start-section2">
            <!-- Describing job guarantee programs -->
            <section class="contentcard lazy-section" id="overview">
              <div class="content-container" id="contentContainer1">
                <div class="summary-details text-center">
                  <h2 class="heading-main">Secure Your Dream Job | <span class="red-color">100% Job Guarantee Courses <?php echo date("Y"); ?></span> in Pune</h2>
                  <p class="text-muted mb-0">Join <b>WebAsha Technologies</b> for <b>Job Oriented Guarantee Courses <?php echo date("Y"); ?></b> with <strong>100% placement assurance</strong>. Get industry-ready skills, live projects, and guaranteed job offers in top IT companies with salaries ₹4-8 LPA.</p>
                </div>
                <h5 class="bold-text mb-2 mt-3">Why Job Guarantee Courses?</h5>
                <p class="text-muted mb-0">In today’s competitive job market, our <strong>100% Job Guarantee Programs</strong> eliminate placement uncertainty. Get trained by industry experts, work on real projects, and receive guaranteed job offers from our 500+ hiring partners.</p>
                <ul class="mt-2">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>100% Job Guarantee with ₹4-8 LPA Salary
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Live Projects with Top MNCs
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Unlimited Mock Interviews
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>500+ Hiring Partners
                  </li>
                </ul>
                <h5 class="bold-text mb-2 mt-3">Who Can Apply?</h5>
                <p class="text-muted mb-0"><b>Freshers & Students:</b> B.Tech, MCA, BCA, Diploma with basic programming knowledge. <b>Career Switchers:</b> Professionals with 0-2 years experience seeking IT roles.</p>
                <h5 class="bold-text mb-2 mt-3">Course Duration:</h5>
                <p class="text-muted mb-0"><b>Job-Ready Programs:</b> 6 Months • 8 Months — Online or Offline.</p>
                <h5 class="bold-text mb-2 mt-3">Job Guarantee Overview:</h5>
                <p class="text-muted mb-0">Our <b>100% Job Guarantee Courses <?php echo date("Y"); ?></b> combine expert training, live projects, and placement support to ensure every student gets a job offer. <strong>No Job = Full Refund!</strong></p>
                <h5 class="bold-text mb-2 mt-3">Top Job Roles Covered:</h5>
                <ul>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Full Stack Developer
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>DevOps Engineer
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Data Scientist
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Cloud Administrator
                  </li>
                </ul>
                <h5 class="bold-text mb-2 mt-3">Guarantee Terms:</h5>
                <ul>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Complete 100% Course Attendance
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Clear All Assessments & Projects
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Attend All Scheduled Interviews
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Maintain Minimum Performance Standards
                  </li>
                </ul>
                <h5 class="bold-text mb-2 mt-3">Mode of Training:</h5>
                <ul>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Offline (at WebAsha Technologies, Pune Centre)
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Online – Live Instructor-Led Training
                  </li>
                </ul>
                <h5 class="bold-text mb-2 mt-3">Certification:</h5>
                <ul>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Course Completion Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Project Completion Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Industry-Recognized Certifications (e.g., AWS, Red Hat)
                  </li>
                </ul>
                <h5 class="bold-text mb-2 mt-3">Who Should Attend?</h5>
                <ul>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Freshers & Graduates (B.Tech, MCA, BCA, Diploma)
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Career Switchers Seeking IT Roles
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Professionals Aiming for High-Paying Jobs
                  </li>
                </ul>
                <h5 class="bold-text mb-2 mt-3">Program Highlights:</h5>
                <ul>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>100% Job Guarantee with Refund Policy
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Live Industry Projects
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Resume & Interview Preparation
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Access to 500+ Hiring Partners
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Free Study Materials & Tools
                  </li>
                </ul>
                <h5 class="bold-text mb-2 mt-3">Why Choose WebAsha Technologies?</h5>
                <ul>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Proven 100% Placement Record
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Industry Expert Trainers
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Flexible EMI & Payment Options
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>Real-Time Project Experience
                  </li>
                </ul>
                <p class="text-muted mt-3">
                  <b>Call: +91 8010911256</b> — Enroll in WebAsha Technologies’ <b>Job Oriented Guarantee Courses <?php echo date("Y"); ?></b> in Pune (Viman Nagar & Kharadi) for a secure IT career.
                </p>
                <div class="gradient-overlay"></div>
              </div>
              <button class="toggle-button" onclick="toggleContent('contentContainer1', this)">View More</button>
            </section>
            <!-- Highlighting certified candidates -->
            <section class="course-certified-candidates lazy-section" id="exam-certification">
              <?php include("include/cert/ceh.php"); ?>
            </section>
          </div>
          <!-- Sidebar for course subscription -->
          <div class="col-lg-4 col-sm-12 col-12 sticky-sidebar1 lazy-section" id="sticky-sidebar2">
            <div class="course-subsciption sticky-sidebar-container">
              <?php include("include/course-sidebar2.php"); ?>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Continuing lazy-loaded sections -->
    <!-- Listing job-oriented programs -->
    <section class="training-features py-5 bg-light lazy-section visible" id="job-tracks">
      <div class="container">
        <div class="text-center section-header">
          <span class="section-badge">Job Guarantee Programs</span>
          <h2 class="heading-main">Job Oriented Guarantee Courses <span class="red-color"><?php echo date("Y"); ?> in Pune</span></h2>
        </div>
        <p class="text-muted text-center">Join <b>WebAsha Technologies’ Job Guarantee Courses <?php echo date("Y"); ?></b> to master in-demand IT skills and secure guaranteed job offers in top companies.</p>
        <div class="row g-4 mt-4">
          <!-- Card: Full Stack Developer -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef0e5be2f.webp" class="card-img-top rounded-top" alt="Full Stack Developer Job Guarantee" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2">Full Stack Developer <span class="red-color">Job Guarantee</span></h5>
                <p class="text-muted small">Master front-end and back-end development with Python, Django, React, and databases through live projects.</p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Duration:</b> 6–8 Months
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Certification:</b> Course + Project Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Topics:</b> HTML, CSS, JavaScript, Django, React
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Tools:</b> VS Code, Git, Postman
                  </li>
                </ul>
                <p class="small mt-3 text-muted">Ideal for freshers aiming for full stack developer roles with 100% placement.</p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="full-stack-python" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20Full%20Stack%20Developer%20Job%20Guarantee" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card: DevOps Engineer -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef0f81c3d.webp" class="card-img-top rounded-top" alt="DevOps Engineer Job Guarantee" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2">DevOps Engineer <span class="red-color">Job Guarantee</span></h5>
                <p class="text-muted small">Learn CI/CD, containerization, and automation with Jenkins, Docker, Kubernetes, and Terraform.</p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Duration:</b> 6–8 Months
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Certification:</b> Course + Project Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Topics:</b> CI/CD, Containers, IaC
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Tools:</b> Jenkins, Docker, Kubernetes
                  </li>
                </ul>
                <p class="small mt-3 text-muted">Perfect for career switchers targeting DevOps roles with guaranteed placement.</p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="devops-bootcamp" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20DevOps%20Engineer%20Job%20Guarantee" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card: Data Scientist -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef1052b4b.webp" class="card-img-top rounded-top" alt="Data Scientist Job Guarantee" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2">Data Scientist <span class="red-color">Job Guarantee</span></h5>
                <p class="text-muted small">Master data analysis, machine learning, and visualization with Python, Pandas, and Scikit-learn.</p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Duration:</b> 6–8 Months
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Certification:</b> Course + Project Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Topics:</b> Data Analysis, ML, Visualization
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Tools:</b> Python, Jupyter, Tableau
                  </li>
                </ul>
                <p class="small mt-3 text-muted">Ideal for analytics enthusiasts seeking data science roles with placement.</p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="data-science-bootcamp" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20Data%20Scientist%20Job%20Guarantee" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card: Cloud Administrator -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef11633a0.webp" class="card-img-top rounded-top" alt="Cloud Administrator Job Guarantee" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2">Cloud Administrator <span class="red-color">Job Guarantee</span></h5>
                <p class="text-muted small">Gain expertise in AWS, Azure, and Linux cloud management with hands-on projects.</p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Duration:</b> 6–8 Months
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Certification:</b> Course + AWS Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Topics:</b> Cloud Deployment, Security
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Tools:</b> AWS, Azure, CloudWatch
                  </li>
                </ul>
                <p class="small mt-3 text-muted">Perfect for cloud career aspirants with guaranteed placement.</p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="cloud-admin-bootcamp" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20Cloud%20Administrator%20Job%20Guarantee" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card: Cyber Security Specialist -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef123666a.webp" class="card-img-top rounded-top" alt="Cyber Security Specialist Job Guarantee" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2">Cyber Security Specialist <span class="red-color">Job Guarantee</span></h5>
                <p class="text-muted small">Learn ethical hacking and security with tools like Kali Linux and Wireshark.</p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Duration:</b> 6–8 Months
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Certification:</b> Course + CEH Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Topics:</b> Penetration Testing, Security
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Tools:</b> Kali Linux, Metasploit
                  </li>
                </ul>
                <p class="small mt-3 text-muted">Ideal for cybersecurity enthusiasts with placement guarantee.</p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="cybersecurity-bootcamp" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20Cyber%20Security%20Job%20Guarantee" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card: AI/ML Engineer -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef1308192.webp" class="card-img-top rounded-top" alt="AI/ML Engineer Job Guarantee" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2">AI/ML Engineer <span class="red-color">Job Guarantee</span></h5>
                <p class="text-muted small">Master machine learning and AI with Python, TensorFlow, and Keras.</p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Duration:</b> 6–8 Months
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Certification:</b> Course + Project Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Topics:</b> ML Algorithms, Neural Networks
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Tools:</b> TensorFlow, Keras, Python
                  </li>
                </ul>
                <p class="small mt-3 text-muted">Perfect for AI enthusiasts with guaranteed job placement.</p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="ai-ml-bootcamp" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20AI%20ML%20Job%20Guarantee" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card: Digital Marketing Specialist -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef13d60ef.webp" class="card-img-top rounded-top" alt="Digital Marketing Specialist Job Guarantee" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2">Digital Marketing Specialist <span class="red-color">Job Guarantee</span></h5>
                <p class="text-muted small">Learn SEO, SEM, and social media marketing with live campaigns.</p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Duration:</b> 6–8 Months
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Certification:</b> Course + Google Ads Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Topics:</b> SEO, SEM, Social Media
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Tools:</b> Google Ads, SEMrush
                  </li>
                </ul>
                <p class="small mt-3 text-muted">Ideal for marketing enthusiasts with guaranteed placement.</p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="digital-marketing-bootcamp" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20Digital%20Marketing%20Job%20Guarantee" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card: UI/UX Designer -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="https://s3.ap-south-1.amazonaws.com/webasha-blog/uploads/gallery/<?php echo date("Y"); ?>04/image_1920x_6808ef14a4272.webp" class="card-img-top rounded-top" alt="UI/UX Designer Job Guarantee" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2">UI/UX Designer <span class="red-color">Job Guarantee</span></h5>
                <p class="text-muted small">Learn wireframing, prototyping, and design with Figma and Adobe XD.</p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Duration:</b> 6–8 Months
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Certification:</b> Course + Project Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Topics:</b> Wireframing, Prototyping
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Tools:</b> Figma, Adobe XD, Sketch
                  </li>
                </ul>
                <p class="small mt-3 text-muted">Perfect for designers seeking UI/UX roles with placement.</p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="ui-ux-bootcamp" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20UI%20UX%20Job%20Guarantee" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Detailing placement process -->
    <section class="training-features py-5 bg-light lazy-section visible" id="job-prep">
      <div class="container">
        <div class="text-center section-header mb-4">
          <span class="section-badge">Placement Process</span>
          <h2 class="heading-main">Job Guarantee Courses <span class="red-color"><?php echo date("Y"); ?> – Your Path to Employment</span></h2>
          <p class="text-muted text-center">Secure your IT career with WebAsha Technologies’ Job Guarantee Courses, featuring comprehensive training, live projects, and guaranteed placement support.</p>
        </div>
        <div class="card shadow-sm border-0 p-4">
          <h4 class="fw-bold mb-3 text-center">Top Job Guarantee Programs</h4>
          <p class="text-muted">WebAsha Technologies offers the <b>best job-oriented training in Pune</b> with a focus on Full Stack, DevOps, Data Science, and more. Our programs ensure 100% placement through rigorous training and industry partnerships.</p>
          <p class="text-muted">Choose from tracks like <b>Full Stack Developer</b>, <b>DevOps Engineer</b>, <b>Data Scientist</b>, and <b>Cloud Administrator</b> to land high-paying IT jobs.</p>
        </div>
        <div class="card shadow-sm border-0 p-4 mt-4">
          <h4 class="fw-bold mb-3 text-center">Placement Process</h4>
          <p class="text-muted">Our placement process includes <b>resume building</b>, <b>mock interviews</b>, and <b>job offer guarantees</b>. We connect you with 500+ hiring partners for roles in top MNCs.</p>
          <p class="text-muted">Benefit from <b>unlimited interview opportunities</b>, personalized feedback, and profile optimization to ensure job success.</p>
        </div>
        <div class="card shadow-sm border-0 p-4 mt-4">
          <h4 class="fw-bold mb-3 text-center">Why Choose WebAsha?</h4>
          <ul class="list-unstyled ps-2 small">
            <li>
              <i class="fa-solid fa-angles-right text-danger me-2"></i><b>100% Placement Guarantee</b> with refund policy
            </li>
            <li>
              <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Live Projects</b> with real-world applications
            </li>
            <li>
              <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Expert Mentors</b> with industry experience
            </li>
            <li>
              <i class="fa-solid fa-angles-right text-danger me-2"></i><b>500+ Hiring Partners</b> for job placements
            </li>
            <li>
              <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Comprehensive Support</b> with mock interviews
            </li>
          </ul>
        </div>
        <div class="card shadow-sm border-0 p-4 mt-4">
          <h4 class="fw-bold mb-3 text-center">Launch Your IT Career</h4>
          <p class="text-muted">Join <b>WebAsha Technologies’ Job Guarantee Courses <?php echo date("Y"); ?></b> to gain skills, certifications, and a guaranteed job offer. Start your journey to a high-paying IT career today.</p>
          <p class="text-muted">Enroll now for a secure future with our proven placement track record.</p>
        </div>
        <div class="text-center mt-4">
          <a href="job-oriented-programs" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll Now">Enroll Now</a>
          <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="View Syllabus">View Syllabus</a>
          <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20know%20more%20about%20Job%20Guarantee%20Courses%20<?php echo date("Y"); ?>" target="_blank" class="btn btn-success btn-sm">
            <i class="fa-brands fa-whatsapp me-1"></i> Whatsapp
          </a>
        </div>
      </div>
    </section>
    <!-- Showcasing career paths -->
    <section class="career-straight lazy-section">
      <?php include("include/career-straight.php"); ?>
    </section>
    <!-- Highlighting successful placements -->
    <section class="course-discover-profile lazy-section" id="our-instructor">
      <div class="section-header text-center">
        <span class="section-badge">Recent Career Success Stories</span>
      </div>
      <h2 class="heading-main-1 text-center">Explore Alumni with Profiles <span class="red-color">Like Yours</span></h2>
      <p class="desc text-center">Learn about their career paths, specialties, and accomplishments in IT roles.</p>
      <?php include("include/alumni.php"); ?>
    </section>
    <!-- Providing FAQs for job guarantee courses -->
    <section class="course-webasha-faq lazy-section" id="faqs">
      <div class="container mt-4 mb-4">
        <div class="section-header text-center mb-5">
          <span class="section-badge">FAQs</span>
          <h2 class="heading-main-1 text-center">Job Guarantee Courses <?php echo date("Y"); ?> <span class="red-color">FAQs</span></h2>
        </div>
        <div class="all-theme-accordion" id="content">
          <div class="accordion accordion-flush" id="coursefaqAccordionFlush">
            <!-- FAQ 1 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq1" aria-expanded="true" aria-controls="flush-coursefaq1">
                  What is included in the Job Guarantee Courses?
                </button>
              </h2>
              <div id="flush-coursefaq1" class="accordion-collapse collapse show" aria-labelledby="flush-heading-1" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0 text-muted">
                  The courses include expert-led training, live projects, certifications, resume building, mock interviews, and guaranteed job placement.
                </div>
              </div>
            </div>
            <!-- FAQ 2 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq2" aria-expanded="false" aria-controls="flush-coursefaq2">
                  Who is eligible for the Job Guarantee Courses?
                </button>
              </h2>
              <div id="flush-coursefaq2" class="accordion-collapse collapse" aria-labelledby="flush-heading-2" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0 text-muted">
                  Freshers (B.Tech, MCA, BCA, Diploma) with basic programming knowledge and professionals with 0-2 years experience seeking IT roles.
                </div>
              </div>
            </div>
            <!-- FAQ 3 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq3" aria-expanded="false" aria-controls="flush-coursefaq3">
                  What is the 100% Job Guarantee policy?
                </button>
              </h2>
              <div id="flush-coursefaq3" class="accordion-collapse collapse" aria-labelledby="flush-heading-3" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0 text-muted">
                  If you complete the course, clear assessments, and attend interviews but don’t get a job, you receive a full refund.
                </div>
              </div>
            </div>
            <!-- FAQ 4 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq4" aria-expanded="false" aria-controls="flush-coursefaq4">
                  What is the duration of the job guarantee programs?
                </button>
              </h2>
              <div id="flush-coursefaq4" class="accordion-collapse collapse" aria-labelledby="flush-heading-4" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0 text-muted">
                  Programs last 6–8 months, with flexible online and offline batches to suit your schedule.
                </div>
              </div>
            </div>
            <!-- FAQ 5 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq5" aria-expanded="false" aria-controls="flush-coursefaq5">
                  What types of jobs are guaranteed?
                </button>
              </h2>
              <div id="flush-coursefaq5" class="accordion-collapse collapse" aria-labelledby="flush-heading-5" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0 text-muted">
                  Roles include Full Stack Developer, DevOps Engineer, Data Scientist, Cloud Administrator, and more with salaries ₹4-8 LPA.
                </div>
              </div>
            </div>
            <!-- FAQ 6 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-6">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq6" aria-expanded="false" aria-controls="flush-coursefaq6">
                  Are classes online, offline, or hybrid?
                </button>
              </h2>
              <div id="flush-coursefaq6" class="accordion-collapse collapse" aria-labelledby="flush-heading-6" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0 text-muted">
                  We offer classroom (offline), live online instructor-led, and hybrid modes, depending on the batch.
                </div>
              </div>
            </div>
            <!-- FAQ 7 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-7">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq7" aria-expanded="false" aria-controls="flush-coursefaq7">
                  What is the placement process?
                </button>
              </h2>
              <div id="flush-coursefaq7" class="accordion-collapse collapse" aria-labelledby="flush-heading-7" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0 text-muted">
                  The process includes resume building, mock interviews, profile optimization, and interviews with 500+ hiring partners until a job offer is secured.
                </div>
              </div>
            </div>
            <!-- FAQ 8 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-8">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq8" aria-expanded="false" aria-controls="flush-coursefaq8">
                  Are certifications provided?
                </button>
              </h2>
              <div id="flush-coursefaq8" class="accordion-collapse collapse" aria-labelledby="flush-heading-8" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0 text-muted">
                  Yes, you receive a course completion certificate, project certificate, and industry-recognized certifications (e.g., AWS, Red Hat).
                </div>
              </div>
            </div>
            <!-- FAQ 9 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-9">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq9" aria-expanded="false" aria-controls="flush-coursefaq9">
                  What are the payment options for the program?
                </button>
              </h2>
              <div id="flush-coursefaq9" class="accordion-collapse collapse" aria-labelledby="flush-heading-9" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0 text-muted">
                  We offer EMI, multi-installment plans, and student discounts. Contact admissions for details.
                </div>
              </div>
            </div>
            <!-- FAQ 10 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-10">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq10" aria-expanded="false" aria-controls="flush-coursefaq10">
                  How do I enroll in the Job Guarantee Courses?
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
            "name": "What is included in the Job Guarantee Courses?",
            "acceptedAnswer": { "@type": "Answer", "text": "The courses include expert-led training, live projects, certifications, resume building, mock interviews, and guaranteed job placement."}
          },
          {
            "@type": "Question",
            "name": "Who is eligible for the Job Guarantee Courses?",
            "acceptedAnswer": { "@type": "Answer", "text": "Freshers (B.Tech, MCA, BCA, Diploma) with basic programming knowledge and professionals with 0-2 years experience seeking IT roles."}
          },
          {
            "@type": "Question",
            "name": "What is the 100% Job Guarantee policy?",
            "acceptedAnswer": { "@type": "Answer", "text": "If you complete the course, clear assessments, and attend interviews but don’t get a job, you receive a full refund."}
          },
          {
            "@type": "Question",
            "name": "What is the duration of the job guarantee programs?",
            "acceptedAnswer": { "@type": "Answer", "text": "Programs last 6–8 months, with flexible online and offline batches to suit your schedule."}
          },
          {
            "@type": "Question",
            "name": "What types of jobs are guaranteed?",
            "acceptedAnswer": { "@type": "Answer", "text": "Roles include Full Stack Developer, DevOps Engineer, Data Scientist, Cloud Administrator, and more with salaries ₹4-8 LPA."}
          },
          {
            "@type": "Question",
            "name": "Are classes online, offline, or hybrid?",
            "acceptedAnswer": { "@type": "Answer", "text": "We offer classroom (offline), live online instructor-led, and hybrid modes, depending on the batch."}
          },
          {
            "@type": "Question",
            "name": "What is the placement process?",
            "acceptedAnswer": { "@type": "Answer", "text": "The process includes resume building, mock interviews, profile optimization, and interviews with 500+ hiring partners until a job offer is secured."}
          },
          {
            "@type": "Question",
            "name": "Are certifications provided?",
            "acceptedAnswer": { "@type": "Answer", "text": "Yes, you receive a course completion certificate, project certificate, and industry-recognized certifications (e.g., AWS, Red Hat)."}
          },
          {
            "@type": "Question",
            "name": "What are the payment options for the program?",
            "acceptedAnswer": { "@type": "Answer", "text": "We offer EMI, multi-installment plans, and student discounts. Contact admissions for details."}
          },
          {
            "@type": "Question",
            "name": "How do I enroll in the Job Guarantee Courses?",
            "acceptedAnswer": { "@type": "Answer", "text": "Apply via the enquiry form, call/WhatsApp +91 8010911256, or follow the registration steps provided by admissions."}
          }
        ]
      }
    </script>
    <!-- Including related job-oriented resources -->
    <section class="other-course-kubernetes lazy-section">
      <div class="container">
        <div class="course-kubernetes-wraper">
          <div class="course-kubernetes">
            <h2 class="heading-main text-center">Browse Job Guarantee Courses <?php echo date("Y"); ?> related Resources</h2>
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