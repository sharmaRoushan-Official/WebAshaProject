<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include common header links / global meta / favicon / CSS / JS -->
    <?php include("include/headerlink.php"); ?>
    <!-- Page-specific metadata (CKS Training with Certification) -->
    <?php
      $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
      $current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
    <title>CKS Training in Pune | Certified Kubernetes Security Specialist Course - WebAsha Technologies</title>
    <meta name="description" content="Join WebAsha Technologies for CKS Training in Pune. Excel in Kubernetes security with hands-on labs, expert mentorship, and preparation for the Certified Kubernetes Security Specialist (CKS) exam in 2025.">
    <meta name="keywords" content="CKS Training Pune, Certified Kubernetes Security Specialist Certification, Kubernetes Security Course, CKS Exam Preparation, Cloud-Native Security Training Pune, Kubernetes Security Training">
    <!-- Canonical URL to avoid duplicate content -->
    <link rel="canonical" href="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <!-- Page-specific Open Graph for social sharing -->
    <meta property="og:title" content="CKS Training in Pune | Certified Kubernetes Security Specialist Course - WebAsha Technologies">
    <meta property="og:description" content="Advance your cloud-native security skills with WebAsha Technologies’ CKS Training in Pune. Master Kubernetes security through practical labs and expert guidance for CKS certification success.">
    <meta property="og:url" content="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <meta property="og:image" content="https://training.webasha.com/assets/img/course/devops/cks.webp">
    <meta property="og:image:alt" content="CKS Training - Certified Kubernetes Security Specialist Course in Pune">
    <meta property="og:type" content="website">
    <!-- Page-specific Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="CKS Training in Pune | Certified Kubernetes Security Specialist Course - WebAsha Technologies">
    <meta name="twitter:description" content="Become a Certified Kubernetes Security Specialist with WebAsha Technologies in Pune. Hands-on training and CKS exam prep for a thriving cloud career in 2025.">
    <meta name="twitter:image" content="https://training.webasha.com/assets/img/course/devops/cks.webp">
    <!-- Page-specific JSON-LD: Course schema for enhanced search visibility -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Course",
      "name": "Certified Kubernetes Security Specialist (CKS) Training",
      "description": "Develop advanced Kubernetes security skills with WebAsha Technologies in Pune. This course offers practical labs, expert instruction, and comprehensive CKS certification preparation for 2025.",
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
    <!-- Including the site header -->
    <?php include("include/header.php"); ?>
    <!-- Banner Section: Showcasing CKS course introduction -->
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
                <li class="breadcrumb-item active" aria-current="page">CKS Training</li>
              </ol>
            </nav>
            <!-- Banner Content -->
            <div class="banner-course-content">
              <!-- Course At-a-Glance -->
              <section class="at-a-glance text-light">
                <h1 class="heading-main-1 text-white">CKS Training with Certification: Certified Kubernetes Security Specialist</h1>
                <!-- Review Card -->
                <div class="banner-review-card">
                  <div class="enrolled-group d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700" viewBox="0 0 24 24" aria-hidden="true" role="img" class="me-2">
                      <path d="M16 11c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-8 0c1.7 0 3-1.3 3-3S9.7 5 8 5 5 6.3 5 8s1.3 3 3 3zm0 2c-2.3 0-7 1.2-7 3.5V20h14v-3.5C15 14.2 10.3 13 8 13zm8 0c-.3 0-.7 0-1 .1 1.2.8 2 2.1 2 3.4V20h6v-3.5c0-2.3-4.7-3.5-7-3.5z" />
                    </svg>
                    <span>1,500 Participants Enrolled</span>
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
                  The <strong>CKS Training with Certification: Certified Kubernetes Security Specialist</strong> at
                  <span class="red-color">WebAsha Technologies</span> in Pune provides comprehensive, hands-on training for IT professionals aiming to excel in securing Kubernetes clusters and cloud-native applications. This course covers cluster hardening, network security, access controls, container runtime security, and vulnerability management in Kubernetes environments.
                  <br><br>
                  The Certified Kubernetes Security Specialist (CKS) certification, offered by the Cloud Native Computing Foundation (CNCF), is a globally recognized credential for security engineers, DevOps professionals, and Kubernetes administrators. With expert-led instruction, real-world lab simulations, and alignment with official exam objectives, this training ensures you are well-prepared to pass the <strong>CKS certification exam</strong> on your first attempt. Whether you're advancing your security expertise or pursuing a career in cloud-native security, WebAsha Technologies provides the tools and mentorship to succeed.
                  <br><br>
                  Enroll now to master Kubernetes security and elevate your career in cloud computing with a trusted training provider.
                </p>
                <table class="table table-dark table-bordered facts-table mt-3 mb-0">
                  <tbody>
                    <tr>
                      <td class="fw-semibold text-warning">Duration:</td>
                      <td class="text-light">60 Hours (Weekday / Weekend Batches)</td>
                    </tr>
                    <tr>
                      <td class="fw-semibold text-warning">Mode:</td>
                      <td class="text-light">Online & Classroom Training</td>
                    </tr>
                    <tr>
                      <td class="fw-semibold text-warning">Certification:</td>
                      <td class="text-light">Certified Kubernetes Security Specialist (CKS)</td>
                    </tr>
                    <tr>
                      <td class="fw-semibold text-warning">Institute:</td>
                      <td class="text-light">WebAsha Technologies, Pune</td>
                    </tr>
                    <tr>
                      <td class="fw-semibold text-warning">Includes:</td>
                      <td class="text-light">Hands-on Labs, Official CNCF Curriculum, Real Exam Simulations</td>
                    </tr>
                  </tbody>
                </table>
              </section>
              <!-- Buttons -->
              <div class="button-group mt-4 mb-4">
                <a href="https://api.whatsapp.com/send?phone=+91-8010911256&text=Hello%20WebAsha,%20I%20want%20CKS%20Info" class="btn-whatsapp text-decoration-none" aria-label="Contact via WhatsApp">
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
                  <source srcset="assets/img/course/devops/cks.webp" type="image/webp">
                  <img src="assets/img/course/devops/cks.webp" alt="CKS Course Preview Thumbnail" width="360" height="220" loading="lazy" decoding="async" class="img-fluid rounded shadow-sm">
                </picture>
                <button type="button" class="video-btn position-absolute top-50 start-50 translate-middle" aria-label="Play CKS course promo video" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="ERtp4zua0-s">
                  <svg class="play-icon" viewBox="0 0 64 64" width="64" height="64" aria-hidden="true" focusable="false">
                    <circle cx="32" cy="32" r="32" fill="rgba(0,0,0,0.55)" />
                    <path d="M26 20 L45 32 L26 44 z" fill="#fff" />
                  </svg>
                </button>
              </div>
              <div class="pera-group">
                <p class="desc">Leading Kubernetes Security Training Platform</p>
                <p>Have Questions? Consult Our Experts</p>
              </div>
              <div class="button-group">
                <a href="#" class="animated-button1 mx-auto d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in CKS Course">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span> Enroll Now <i class="fa fa-arrow-right ms-2"></i>
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
                    <h2>600+</h2>
                    <p>Professionals Trained</p>
                  </div>
                </div>
                <div class="item">
                  <img src="assets/imgs/fi-2.png" alt="Batches per Month" width="73" height="73" loading="lazy">
                  <div class="content">
                    <h2>6+</h2>
                    <p>Batches Every Month</p>
                  </div>
                </div>
                <div class="item">
                  <img src="assets/imgs/fi-3.png" alt="Countries" width="73" height="73" loading="lazy">
                  <div class="content">
                    <h2>12+</h2>
                    <p>Countries Served</p>
                  </div>
                </div>
                <div class="item">
                  <img src="assets/imgs/fi-4.png" alt="Corporate Clients" width="73" height="73" loading="lazy">
                  <div class="content">
                    <h2>300+</h2>
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
    <section class="sticky-main-header1" id="stickyheader">
      <div class="container">
        <div class="sticky-header-list">
          <ul class="list-unstyled mb-0">
            <li>
              <a href="#overview" class="btn btn-outline-primary text-decoration-none">Overview</a>
            </li>
            <li>
              <a href="#training-options" class="btn btn-outline-primary text-decoration-none">Training Options</a>
            </li>
            <li>
              <a href="#syllabus" class="btn btn-outline-primary text-decoration-none">Syllabus</a>
            </li>
            <li>
              <a href="#our-instructor" class="btn btn-outline-primary text-decoration-none">Our Instructor</a>
            </li>
            <li>
              <a href="#exam-certification" class="btn btn-outline-primary text-decoration-none">Exam & Certification</a>
            </li>
            <li>
              <a href="#placement-reviews" class="btn btn-outline-primary text-decoration-none">Placement & Reviews</a>
            </li>
            <li>
              <a href="#faqs" class="btn btn-outline-primary text-decoration-none">FAQs</a>
            </li>
          </ul>
          <div class="button-group">
            <button type="button" class="btn btn-enroll" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in CKS Course">Enroll Now</button>
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download CKS Syllabus">View Syllabus</button>
          </div>
        </div>
      </div>
    </section>
    <!-- Lazy Sections Start -->
    <!-- Brands -->
    <section class="our-learners section-header text-center lazy-section">
      <?php include("include/devops/brands.php"); ?>
    </section>
    <!-- Recent Placements Video Testimonials Section -->
    <section class="course-recent-reviews section-header text-center lazy-section" id="sticky-sidebar2">
      <span class="section-badge">Recent Placements Testimonials</span>
      <h2 class="heading-main-1 text-white text-center">Certified Kubernetes Security Specialist <span class="red-color">Recent Reviews</span></h2>
      <?php include("include/devops/video-reviews.php"); ?>
    </section>
    <!-- Testimonials -->
    <section class="success-speaks-reviwe course-speaks section-header text-center lazy-section">
      <div class="container">
        <span class="section-badge">Recent Placements Testimonials</span>
        <h2 class="heading-main text-center mb-5">Certified Kubernetes Security Specialist <span class="red-color">Reviews</span></h2>
        <?php include("include/devops/text-reviews.php"); ?>
      </div>
    </section>
    <!-- Career Roadmap -->
    <section class="course-technologies-placement lazy-section" id="placement-reviews">
      <?php include("include/devops/placement.php"); ?>
    </section>
    <!-- Key Features -->
    <section class="lazy-section">
      <div class="training-features section-header text-center mt-5 lazy-section">
        <div class="container">
          <link rel="preload" href="https://i.ibb.co/5X09hRg/lab.gif" as="image" fetchpriority="high">
          <span class="section-badge">Training Key Features</span>
          <h2 class="heading-main-1 text-center">CKS Course <span class="red-color">Training Key Features</span></h2>
          <p class="description text-center mb-5">Discover the core advantages of our CKS prep courses tailored for certification success in Pune’s cloud-native security sector.</p>
          <?php include("include/devops/key-features.php"); ?>
        </div>
      </div>
    </section>
    <!-- Why Choose Us -->
    <section class="py-5 course-comparison-section lazy-section">
      <?php include("include/devops/why-webasha.php"); ?>
    </section>
    <!-- Training Calendar -->
    <section class="py-5 lazy-section" id="training-options">
      <?php include("include/devops/batchschedule.php"); ?>
    </section>
    <!-- Main Course Content -->
    <main>
      <div class="container">
        <div class="row">
          <!-- Left -->
          <div class="col-lg-8 col-12" id="sticky-start-section1">
            <!-- Course Overview Start -->
            <section class="course-training-overview lazy-section" id="overview">
              <?php include("include/devops/slider/cks.php"); ?>
            </section>
            <!-- Course Prerequisites Start -->
            <section class="contentcard lazy-section">
              <div class="content-container" id="contentContainer1">
                <div class="summary-details">
                  <h2 class="heading-main text-center">Certified Kubernetes Security Specialist <span class="red-color">Training Overview</span></h2>
                  <p class="description mb-0">Advance your cloud-native security skills with our <b>Classroom and Online Certified Kubernetes Security Specialist (CKS) Training</b> at <b>WebAsha Technologies</b>. This program equips learners with <b>hands-on, performance-based skills</b> to secure Kubernetes clusters, preparing you for the <b>CKS certification exam</b> and high-demand roles in 2025.</p>
                </div>
                <h5 class="bold-text mb-2 mt-2">Certified Kubernetes Security Specialist Training Overview:</h5>
                <p class="description mb-0">The <b>CKS Training</b> focuses on mastering Kubernetes security, covering cluster hardening, access control, container runtime security, and vulnerability management. Through interactive labs and real-world scenarios, participants learn to secure Kubernetes environments, aligning with the CKS exam’s performance-based format.</p>
                <h5 class="bold-text mb-2 mt-2">Intended Audience:</h5>
                <p class="description mb-0">This course is ideal for <b>security engineers, DevOps professionals, Kubernetes administrators, and IT professionals</b> aiming to validate their Kubernetes security expertise through CNCF certification. It’s also suitable for <b>career changers in Pune</b> looking to specialize in cloud-native security. A valid CKA certification is required.</p>
                <h5 class="bold-text mb-2 mt-2">Topics Covered:</h5>
                <ul>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Cluster Setup:</b> Harden Kubernetes clusters using secure configurations.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Access Control:</b> Implement Role-Based Access Control (RBAC) and service accounts.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Network Security:</b> Configure network policies and secure communication.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Container Runtime Security:</b> Secure container runtimes and images.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Vulnerability Management:</b> Scan and mitigate vulnerabilities in clusters.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Supply Chain Security:</b> Secure container supply chains and image signing.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Monitoring and Auditing:</b> Set up audit logs and monitoring for security events.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Troubleshooting:</b> Diagnose and resolve security-related issues.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Microservices Security:</b> Secure microservices in Kubernetes environments.</li>
                </ul>
                <h5 class="bold-text mb-2 mt-2">Requirements:</h5>
                <p class="description mb-0">Participants must hold a <b>valid CKA certification</b> and have a <b>basic understanding of Kubernetes administration</b>. For online learners, a <b>stable internet connection</b> and a <b>laptop/desktop with sufficient resources</b> are required for live sessions and labs. The course includes <b>performance-based labs</b> to master CKS exam tasks.</p>
                <h5 class="bold-text mb-2 mt-2">Pre-Requisites:</h5>
                <p class="description mb-0">A <b>valid Certified Kubernetes Administrator (CKA) certification</b> is mandatory. Familiarity with Linux administration, container concepts, and Kubernetes administration is required. Experience with security practices is beneficial but not mandatory.</p>
                <h5 class="bold-text mb-2 mt-2">Career Benefits:</h5>
                <p class="description mb-0">Earning the <b>Certified Kubernetes Security Specialist (CKS)</b> credential positions you for high-demand roles like <b>Kubernetes Security Engineer, DevOps Security Specialist, or Cloud Security Architect</b>. In Pune and other IT hubs, CKS-certified professionals can earn between <b>₹8 LPA to ₹22 LPA</b>, with opportunities for global roles in cloud-native security.</p>
                <div class="gradient-overlay"></div>
              </div>
              <button class="toggle-button" onclick="toggleContent('contentContainer1', this)">View More</button>
            </section>
            <!-- Kubernetes Track Start -->
            <section class="contentcard lazy-section">
              <?php include("include/devops/kubernetes-track.php"); ?>
            </section>
            <!-- Course Syllabus Start -->
            <section class="course-top-curriculum lazy-section" id="syllabus">
              <div class="contentcard">
                <h2 class="heading-main text-center mb-2">Curriculum <span class="red-color">CKS</span></h2>
                <div class="content-container" id="contentContainer3">
                  <div class="accordion-curriculum mb-5">
                    <div class="top-curriculum-header">
                      <p class="desc">Certified Kubernetes Security Specialist (CKS) syllabus</p>
                      <a href="#" class="btn btn-white" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download CKS Syllabus">
                        <svg viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M0.625 11.375C0.79076 11.375 0.949732 11.4408 1.06694 11.5581C1.18415 11.6753 1.25 11.8342 1.25 12V15.125C1.25 15.4565 1.3817 15.7745 1.61612 16.0089C1.85054 16.2433 2.16848 16.375 2.5 16.375H17.5C17.8315 16.375 18.1495 16.2433 18.3839 16.0089C18.6183 15.7745 18.75 15.4565 18.75 15.125V12C18.75 11.8342 18.8158 11.6753 18.9331 11.5581C19.0503 11.4408 19.2092 11.375 19.375 11.375C19.5408 11.375 19.6997 11.4408 19.8169 11.5581C19.9342 11.6753 20 11.8342 20 12V15.125C20 15.788 19.7366 15.4239 19.2678 16.8928C18.7989 17.3616 18.163 17.625 17.5 17.625H2.5C1.83696 17.625 1.20107 17.3616 0.732233 16.8928C0.263392 16.4239 0 15.788 0 15.125V12C0 11.8342 0.065848 11.6753 0.183058 11.5581C0.300269 11.4408 0.45924 11.375 0.625 11.375Z" />
                          <path d="M9.55829 13.8175C9.61635 13.8757 9.68532 13.9219 9.76125 13.9534C9.83718 13.9849 9.91858 14.0011 10.0008 14.0011C10.083 14.0011 10.1644 13.9849 10.2403 13.9534C10.3163 13.9219 10.3852 13.8757 10.4433 13.8175L14.1933 10.0675C14.3106 9.95014 14.3766 9.79097 14.3766 9.625C14.3766 9.45903 14.3106 9.29986 14.1933 9.1825C14.0759 9.06514 13.9168 8.99921 13.7508 8.99921C13.5848 8.99921 13.4256 9.06514 13.3083 9.1825L10.6258 11.8663V0.875C10.6258 0.70924 10.5599 0.550268 10.4427 0.433058C10.3255 0.315848 10.1666 0.25 10.0008 0.25C9.83503 0.25 9.67606 0.315848 9.55885 0.433058C9.44164 0.550268 9.37579 0.70924 9.37579 0.875V11.8663L6.69329 9.1825C6.57593 9.06514 6.41676 8.99921 6.25079 8.99921C6.08482 8.99921 5.92565 9.06514 5.80829 9.1825C5.69093 9.29986 5.625 9.45903 5.625 9.625C5.625 9.79097 5.69093 9.95014 5.80829 10.0675L9.55829 13.8175Z" />
                        </svg>
                        Download Syllabus
                      </a>
                    </div>
                    <div class="accordion accordion-flush" id="curriculumAccordionFlush">
                      <!-- Module 1: Cluster Setup and Hardening -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-1">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-1" aria-expanded="false" aria-controls="flush-curriculum-1">
                            <div class="curriculum-number"><span>1.</span> Cluster Setup and Hardening</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-1" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-1" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Configuring secure Kubernetes clusters with kubeadm.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Implementing cluster hardening best practices.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Lab: Hardening a Kubernetes cluster.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 2: Access Control -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-2">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-2" aria-expanded="false" aria-controls="flush-curriculum-2">
                            <div class="curriculum-number"><span>2.</span> Role-Based Access Control (RBAC)</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-2" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-2" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Configuring RBAC roles and role bindings.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Managing service accounts and permissions.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Lab: Implementing RBAC policies.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 3: Network Security -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-3">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-3" aria-expanded="false" aria-controls="flush-curriculum-3">
                            <div class="curriculum-number"><span>3.</span> Network Security</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-3" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-3" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Configuring network policies for secure communication.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Implementing secure ingress and service configurations.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Lab: Setting up network policies.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 4: Container Runtime Security -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-4">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-4" aria-expanded="false" aria-controls="flush-curriculum-4">
                            <div class="curriculum-number"><span>4.</span> Container Runtime Security</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-4" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-4" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Securing container runtimes (e.g., containerd, CRI-O).</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Configuring pod security standards and policies.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Lab: Securing container runtimes.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 5: Vulnerability Management -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-5">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-5" aria-expanded="false" aria-controls="flush-curriculum-5">
                            <div class="curriculum-number"><span>5.</span> Vulnerability Scanning and Management</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-5" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-5" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Scanning container images for vulnerabilities.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Mitigating cluster and application vulnerabilities.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Lab: Using vulnerability scanning tools.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 6: Supply Chain Security -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-6">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-6" aria-expanded="false" aria-controls="flush-curriculum-6">
                            <div class="curriculum-number"><span>6.</span> Supply Chain Security</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-6" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-6" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Securing container supply chains with image signing.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Implementing admission controllers and policies.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Lab: Configuring image signing and validation.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 7: Monitoring and Auditing -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-7">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-7" aria-expanded="false" aria-controls="flush-curriculum-7">
                            <div class="curriculum-number"><span>7.</span> Monitoring and Auditing</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-7" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-7" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Configuring audit logs for security events.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Setting up monitoring with Prometheus and Grafana.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Lab: Monitoring security events.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 8: Troubleshooting -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-8">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-8" aria-expanded="false" aria-controls="flush-curriculum-8">
                            <div class="curriculum-number"><span>8.</span> Security Troubleshooting</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-8" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-8" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Diagnosing RBAC and network policy issues.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Resolving container runtime security problems.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Lab: Troubleshooting security misconfigurations.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 9: Exam Preparation -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-9">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-9" aria-expanded="false" aria-controls="flush-curriculum-9">
                            <div class="curriculum-number"><span>9.</span> CKS Exam Preparation</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-9" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-9" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Review of CKS exam objectives and task types.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Mock exams simulating real CKS scenarios.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Lab: Time management and exam strategies.</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="gradient-overlay"></div>
                </div>
                <button class="toggle-button" onclick="toggleContent('contentContainer3', this)">View More</button>
              </div>
            </section>
            <!-- Trainer Profile Start -->
            <section class="contentcard lazy-section" id="our-instructor">
              <h2 class="heading-main text-center">Meet Our <span class="red-color">Expert Trainers</span></h2>
              <p class="description text-center">At <b>WebAsha Technologies</b>, our <b>CNCF-certified instructors</b> bring extensive experience in Kubernetes security and cloud-native technologies. They guide learners through hands-on labs and real-world scenarios, ensuring you’re ready for the <b>CKS certification exam</b> and industry challenges.</p>
              <ul>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Exam-Focused Teaching:</b> Instructors align training with CKS exam objectives, focusing on performance-based tasks like cluster hardening, access control, and vulnerability management.</li>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Practical Simulations:</b> Practice in lab environments mirroring CKS exam scenarios, covering RBAC, network policies, and container runtime security.</li>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Individual Support:</b> Receive personalized mentorship to address doubts and strengthen skills, tailored to your learning pace.</li>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Certification Aid:</b> Get guidance on exam strategies, time management, and best practices for the CKS performance-based test.</li>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Industry Experience:</b> Trainers have hands-on experience in securing Kubernetes deployments for enterprises, offering real-world insights.</li>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Certified Experts:</b> All trainers hold <b>CKS or CKA certifications</b>, ensuring expert-led instruction from professionals who’ve passed CNCF exams.</li>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Real-World Insights:</b> Learn practical applications of Kubernetes security in DevOps, microservices, and cloud environments.</li>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Training Success:</b> Our trainers have guided <b>over 300 students annually</b> to CKS certification, with alumni at top firms like AWS, Google, and Red Hat.</li>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Corporate Partnerships:</b> Collaborations with companies like <b>TCS, Infosys, and IBM</b> keep our trainers updated on the latest Kubernetes security trends.</li>
              </ul>
            </section>
          </div>
          <!-- Sidebar 1 -->
          <?php include("include/devops/course-sidebar1.php"); ?>
        </div>
      </div>
      <!-- Newsletter -->
      <section class="newsletter course-newsletter lazy-section" id="sticky-end-section1">
        <?php include("include/devops/self-assessment.php"); ?>
      </section>
      <div class="container">
        <div class="row">
          <!-- Main Content -->
          <div class="col-lg-8 col-sm-12" id="sticky-start-section2">
            <!-- Bootcamp -->
            <section class="lazy-section">
              <h2 class="heading-main text-center mb-0">CKS <span class="red-color">Certification Bootcamp</span></h2>
              <p class="description mb-0">The CKS certification from CNCF validates your Kubernetes security skills, recognized globally for cloud-native expertise.</p>
              <ul>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Global Credential:</b> Enhances your resume with a CNCF certification.</li>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Performance-Based:</b> Tests hands-on Kubernetes security skills.</li>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Key for Security Roles:</b> Positions you for cloud-native security roles.</li>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Prerequisites:</b> Valid CKA certification required.</li>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Validity:</b> 2 years, renewable via recertification.</li>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Hands-On Exam:</b> Practical task-based assessment.</li>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Language:</b> English.</li>
              </ul>
            </section>
            <!-- Certified Candidates -->
            <section class="course-certified-candidates lazy-section" id="exam-certification">
              <?php include("include/devops/cert/cks.php"); ?>
            </section>
            <!-- Exam Info -->
            <section class="course-exam-information lazy-section">
              <h2 class="heading-main text-center">CKS Exam <span class="red-color">Details and Format</span></h2>
              <div class="table-responsive custom-table mb-4">
                <table class="table table-bordered align-middle">
                  <thead class="table-light">
                    <tr>
                      <th scope="col" class="subs-title">Attribute</th>
                      <th scope="col" class="subs-title">Details</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><strong>Exam Name</strong></td>
                      <td>Certified Kubernetes Security Specialist (CKS)</td>
                    </tr>
                    <tr>
                      <td><strong>Exam Duration</strong></td>
                      <td>2 Hours</td>
                    </tr>
                    <tr>
                      <td><strong>Number of Questions</strong></td>
                      <td>15-20 Performance-based tasks</td>
                    </tr>
                    <tr>
                      <td><strong>Exam Fee</strong></td>
                      <td>Approx ₹25,000 in India (varies)</td>
                    </tr>
                    <tr>
                      <td><strong>Validity</strong></td>
                      <td>2 Years</td>
                    </tr>
                    <tr>
                      <td><strong>Exam Code</strong></td>
                      <td>CKS</td>
                    </tr>
                    <tr>
                      <td><strong>Exam Format</strong></td>
                      <td>Hands-On Lab (Online Proctored)</td>
                    </tr>
                    <tr>
                      <td><strong>Passing Score</strong></td>
                      <td>66% (varies by exam version)</td>
                    </tr>
                    <tr>
                      <td><strong>Eligibility / Prerequisite</strong></td>
                      <td>Valid CKA certification required</td>
                    </tr>
                    <tr>
                      <td><strong>Exam Languages</strong></td>
                      <td>English</td>
                    </tr>
                    <tr>
                      <td><strong>Exam Mode</strong></td>
                      <td>Online Proctored</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>
            <!-- Passing Score -->
            <section class="course-ceh-group lazy-section">
              <h4 class="text-center mb-0">Passing Criteria for CKS Exam</h4>
              <p class="description text-center mb-0">To earn the CKS certification, score at least 66% on the 2-hour, online proctored, hands-on exam. Offered by WebAsha Technologies in Pune, it tests Kubernetes security skills. Fees approx ₹25,000 in India, valid for 2 years. Prepare with WebAsha for success.</p>
              <div class="button-group">
                <a href="https://api.whatsapp.com/send?phone=+91-8010911256&text=Hello%20WebAsha,%20I%20want%20CKS%20Discounted%20Exam%20Voucher" target="_blank" rel="noopener" aria-label="Chat on WhatsApp" class="btn-whatsapp text-decoration-none">
                  <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
                <a href="tel:+918485847920" class="btn-phone text-decoration-none">
                  <i class="fa-solid fa-phone"></i> +91 8485847920
                </a>
              </div>
            </section>
            <!-- Salary -->
            <section class="contentcard lazy-section">
              <div class="content-container" id="contentContainer4">
                <h2 class="heading-main text-center">Job Roles and Salary Outlook After <span class="red-color">CKS</span></h2>
                <p class="description text-center">Obtaining CKS certification opens doors to high-demand cloud-native security roles in India’s IT landscape for 2025.</p>
                <div class="table-responsive custom-table mb-4">
                  <table class="table table-bordered align-middle">
                    <thead class="table-light">
                      <tr>
                        <th scope="col" class="subs-title">Job Title</th>
                        <th scope="col" class="subs-title">Primary Responsibilities</th>
                        <th scope="col" class="subs-title">Average Salary (INR)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><strong>Kubernetes Security Engineer</strong></td>
                        <td>Secure Kubernetes clusters and applications.</td>
                        <td>Fresher: ₹8–12 LPA <br>Experienced: ₹15–25 LPA</td>
                      </tr>
                      <tr>
                        <td><strong>DevOps Security Specialist</strong></td>
                        <td>Implement security in CI/CD pipelines and Kubernetes.</td>
                        <td>Fresher: ₹7–10 LPA <br>Experienced: ₹12–22 LPA</td>
                      </tr>
                      <tr>
                        <td><strong>Cloud Security Architect</strong></td>
                        <td>Design secure cloud-native infrastructures.</td>
                        <td>Fresher: ₹9–13 LPA <br>Experienced: ₹18–30 LPA</td>
                      </tr>
                      <tr>
                        <td><strong>Site Reliability Engineer</strong></td>
                        <td>Ensure secure and reliable Kubernetes environments.</td>
                        <td>Fresher: ₹7–11 LPA <br>Experienced: ₹15–25 LPA</td>
                      </tr>
                      <tr>
                        <td><strong>Security Consultant</strong></td>
                        <td>Provide Kubernetes security consulting services.</td>
                        <td>Fresher: ₹6–9 LPA <br>Experienced: ₹12–20 LPA</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <p class="description"><b>Note:</b> Salaries vary by experience, location, and company; CKS certification significantly boosts earning potential in 2025.</p>
                <p class="description">India’s cloud-native security growth projects numerous Kubernetes security roles by 2025.</p>
                <div class="gradient-overlay"></div>
              </div>
              <button class="toggle-button" onclick="toggleContent('contentContainer4', this)">View More</button>
            </section>
            <!-- Career Benefits -->
            <section class="contentcard lazy-section">
              <div class="content-container" id="contentContainer5">
                <h2 class="heading-main text-center">Career Benefits of <span class="red-color">CKS</span></h2>
                <p class="description text-center">In the <b>cloud-native era of 2025</b>, the <b>Certified Kubernetes Security Specialist (CKS)</b> certification is a critical credential for professionals aiming to excel in Kubernetes security. WebAsha Technologies’ CKS training equips you with <b>practical security skills</b> to harden clusters, secure applications, and mitigate vulnerabilities, highly valued in DevOps and cloud security ecosystems.</p>
                <ul>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>High Demand:</b> With Kubernetes adoption growing, CKS-certified professionals are sought after for securing cloud-native infrastructures.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Competitive Salaries:</b> CKS holders can earn between <b>₹8 LPA to ₹22 LPA</b> in India, with higher earnings in global roles.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Career Pathways:</b> CKS builds on CKA, opening doors to advanced cloud security and DevOps roles.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Global Opportunities:</b> As a CNCF certification, CKS is recognized worldwide, enabling job prospects in the USA, Europe, and Asia.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Practical Skills:</b> Hands-on training ensures you can immediately apply Kubernetes security practices in production environments.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Versatile Roles:</b> CKS skills apply to roles like Kubernetes Security Engineer, DevOps Security Specialist, and Cloud Security Architect.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Career Growth:</b> Progress to leadership roles like Cloud Security Architect or Security Manager with CKS as a foundation.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Freelance Opportunities:</b> Offer Kubernetes security consulting services on platforms like Upwork, leveraging your expertise.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Innovation Scope:</b> Contribute to secure cloud-native solutions, driving organizational resilience.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Future-Proof:</b> Kubernetes security is critical for cloud-native tech, ensuring your skills remain relevant in 2025 and beyond.</li>
                </ul>
                <div class="gradient-overlay"></div>
              </div>
              <button class="toggle-button" onclick="toggleContent('contentContainer5', this)">View More</button>
            </section>
            <!-- Why Choose Us -->
            <section class="contentcard lazy-section">
              <div class="content-container" id="contentContainer6">
                <h2 class="heading-main text-center">Why Choose CKS Training at <span class="red-color">WebAsha Technologies in Pune</span></h2>
                <p class="description text-center">Prepare for the <b>Certified Kubernetes Security Specialist (CKS)</b> exam with <b>WebAsha Technologies</b>, Pune’s trusted Kubernetes training provider. Our CKS program is designed for security and DevOps professionals, offering hands-on labs and expert guidance aligned with the <b>CNCF’s performance-based exam</b>.</p>
                <ul>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Expert Instruction:</b> Learn from <b>CNCF-certified trainers</b> with real-world Kubernetes security experience, guiding you through exam-specific tasks.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Comprehensive Coverage:</b> Covers all CKS exam domains, including cluster hardening, access control, container security, and vulnerability management.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Realistic Labs:</b> Practice in <b>Kubernetes lab environments</b> simulating CKS exam scenarios, ensuring exam readiness.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Flexible Scheduling:</b> Choose <b>weekday or weekend batches</b> to suit your professional or academic needs.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Advanced Labs:</b> Train on <b>cloud-based Kubernetes clusters</b> with high-performance infrastructure for hands-on learning.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Trusted in Pune:</b> WebAsha is a leading <b>Kubernetes training provider</b> in Pune, known for high pass rates and alumni success.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Tech Community:</b> Join Pune’s vibrant <b>DevOps and cloud security community</b>, networking with peers and industry professionals.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Exam Focus:</b> Training is tailored to the <b>CKS’s performance-based format</b>, with mock exams to build confidence.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Key Skills:</b> Master cluster security, access control, and vulnerability management for real-world Kubernetes environments.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Alumni Success:</b> Our CKS graduates work at top firms like <b>Google, AWS, and Microsoft</b>, reflecting our training quality.</li>
                </ul>
                <div class="gradient-overlay"></div>
              </div>
              <button class="toggle-button" onclick="toggleContent('contentContainer6', this)">View More</button>
            </section>
          </div>
          <!-- Sidebar -->
          <div class="col-lg-4 col-sm-12 col-12 sticky-sidebar1 lazy-section" id="sticky-sidebar2">
            <div class="course-subsciption sticky-sidebar-container">
              <?php include("include/devops/course-sidebar2.php"); ?>
            </div>
          </div>
        </div>
      </div>
      <!-- Screenshots -->
      <section class="career-straight lazy-section">
        <?php include("include/devops/career-straight.php"); ?>
      </section>
      <!-- Alumni -->
      <section class="course-discover-profile lazy-section">
        <div class="section-header text-center">
          <span class="section-badge">Recent Career Success Stories</span>
        </div>
        <h2 class="heading-main-1 text-center">Explore Alumni with Profiles <span class="red-color">Like Yours</span></h2>
        <p class="desc text-center">Discover their career paths, Kubernetes security expertise, and achievements in cloud-native roles.</p>
        <?php include("include/devops/alumni.php"); ?>
      </section>
      <!-- Related Courses -->
      <section class="course-related-courses lazy-section visible">
        <div class="section-header text-center mb-4">
          <span class="section-badge">Related Courses</span>
          <h2 class="heading-main-1 text-center">Explore <span class="red-color">Related Courses</span></h2>
          <p class="desc text-center">Enhance your skills with additional cloud-native and DevOps security courses.</p>
        </div>
        <?php include("include/devops/related-courses.php"); ?>
      </section>
      <!-- FAQs -->
      <section class="course-webasha-faq lazy-section" id="faqs">
        <div class="container mt-4 mb-4">
          <div class="section-header text-center mb-4">
            <span class="section-badge">FAQs</span>
            <h2 class="heading-main-1 text-center">CKS FAQs <span class="red-color">(Frequently Asked Questions)</span></h2>
          </div>
          <div class="all-theme-accordion" id="content">
            <div class="accordion accordion-flush" id="coursefaqAccordionFlush">
              <!-- FAQ 1: Overview of CKS training -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq1" aria-expanded="false" aria-controls="flush-coursefaq1">What is included in the CKS training?</button>
                </h2>
                <div id="flush-coursefaq1" class="accordion-collapse collapse show" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">The CKS training covers all CNCF exam objectives, including cluster hardening, access control, network security, container runtime security, vulnerability management, and auditing. It includes hands-on labs, mock exams, and real-world scenarios to prepare for the performance-based CKS exam.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 2: Eligibility criteria -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq2" aria-expanded="false" aria-controls="flush-coursefaq2">Who can enroll in CKS training?</button>
                </h2>
                <div id="flush-coursefaq2" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">The course is suitable for security engineers, DevOps professionals, and Kubernetes administrators with a valid CKA certification. Familiarity with Kubernetes administration and security practices is required.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 3: Certification validity -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq3" aria-expanded="false" aria-controls="flush-coursefaq3">How long is the CKS certification valid?</button>
                </h2>
                <div id="flush-coursefaq3" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">The CKS certification is valid for 2 years. Recertification requires retaking the exam or completing CNCF-approved continuing education activities.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 4: Exam format -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq4" aria-expanded="false" aria-controls="flush-coursefaq4">What is the format of the CKS exam?</button>
                </h2>
                <div id="flush-coursefaq4" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">The CKS exam is a 2-hour, online proctored, performance-based test with 15-20 hands-on tasks, such as securing clusters, configuring RBAC, and mitigating vulnerabilities in a live Kubernetes environment.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 5: Passing score -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq5" aria-expanded="false" aria-controls="flush-coursefaq5">What is the passing score for CKS?</button>
                </h2>
                <div id="flush-coursefaq5" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">The passing score for the CKS exam is typically 66%, though it may vary slightly by exam version. Check the CNCF website for the latest details.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 6: Exam languages -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq6" aria-expanded="false" aria-controls="flush-coursefaq6">In which languages is the CKS exam available?</button>
                </h2>
                <div id="flush-coursefaq6" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">The CKS exam is offered in English. Check the CNCF exam portal for any updates on language availability.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 7: Training duration -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq7" aria-expanded="false" aria-controls="flush-coursefaq7">How long does CKS training take?</button>
                </h2>
                <div id="flush-coursefaq7" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">Intensive instructor-led CKS training typically lasts 5-7 days. Flexible part-time or self-paced options are available for working professionals.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 8: Cost of certification -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq8" aria-expanded="false" aria-controls="flush-coursefaq8">What is the cost of the CKS certification?</button>
                </h2>
                <div id="flush-coursefaq8" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">The CKS exam fee is approximately ₹25,000 in India, subject to change. Contact WebAsha or check the CNCF website for current pricing and potential exam voucher discounts.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 9: Online vs in-person training -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq9" aria-expanded="false" aria-controls="flush-coursefaq9">What’s the difference between online and in-person CKS training?</button>
                </h2>
                <div id="flush-coursefaq9" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">Online training offers remote access to cloud-based Kubernetes labs and flexible scheduling, ideal for remote learners. In-person classes in Pune provide direct instructor interaction and collaborative lab sessions. Both formats cover the same CKS-aligned curriculum with equivalent hands-on labs.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 10: Prerequisites for exam -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq10" aria-expanded="false" aria-controls="flush-coursefaq10">Are there any prerequisites for the CKS exam?</button>
                </h2>
                <div id="flush-coursefaq10" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">A valid Certified Kubernetes Administrator (CKA) certification is required. Familiarity with Kubernetes administration and security practices is essential.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 11: Recertification process -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq11" aria-expanded="false" aria-controls="flush-coursefaq11">How can I recertify for CKS?</button>
                </h2>
                <div id="flush-coursefaq11" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">To recertify, retake the CKS exam or complete CNCF-approved continuing education activities before the 2-year validity expires. Check the CNCF certification portal for detailed recertification options.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 12: Job opportunities -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq12" aria-expanded="false" aria-controls="flush-coursefaq12">What job roles can I pursue with CKS?</button>
                </h2>
                <div id="flush-coursefaq12" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">CKS certification qualifies you for roles like Kubernetes Security Engineer, DevOps Security Specialist, Cloud Security Architect, Site Reliability Engineer, and Security Consultant. Salaries in India range from ₹8–22 LPA, depending on experience and location.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 13: Training locations -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq13" aria-expanded="false" aria-controls="flush-coursefaq13">Where is CKS training offered?</button>
                </h2>
                <div id="flush-coursefaq13" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">WebAsha offers CKS training online (live virtual classes with cloud-based labs) and in-person at our Pune training center. Corporate or private batch options are available upon request.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 14: Study materials (continued) -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq14" aria-expanded="false" aria-controls="flush-coursefaq14">What study materials are provided for CKS?</button>
                </h2>
                <div id="flush-coursefaq14" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">Students receive CNCF-aligned course materials, lab guides, Kubernetes security command cheat-sheets, and mock exam tasks. WebAsha provides access to practice labs and instructor-led demos to reinforce exam-ready skills.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 15: Exam retake policy -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq15" aria-expanded="false" aria-controls="flush-coursefaq15">What is the policy for retaking the CKS exam?</button>
                </h2>
                <div id="flush-coursefaq15" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">CNCF allows exam retakes after a waiting period (typically 24 hours), with additional fees. Check the CNCF exam portal for the latest retake policies and costs.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 16: Career support -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq16" aria-expanded="false" aria-controls="flush-coursefaq16">Does WebAsha offer career support for CKS?</button>
                </h2>
                <div id="flush-coursefaq16" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">Yes, WebAsha provides resume reviews, mock interviews, and job placement assistance with our network of IT partners. Career support varies by package—contact admissions for details.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 17: Practical skills integration -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq17" aria-expanded="false" aria-controls="flush-coursefaq17">How does CKS training incorporate practical skills?</button>
                </h2>
                <div id="flush-coursefaq17" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">The training includes hands-on labs, timed exercises, and mock exams that replicate CKS tasks, such as cluster hardening, configuring RBAC, and vulnerability scanning, ensuring exam-relevant practical experience.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 18: Accreditation -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq18" aria-expanded="false" aria-controls="flush-coursefaq18">Is the CKS accredited?</button>
                </h2>
                <div id="flush-coursefaq18" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">Yes, the CKS is an official CNCF certification, globally recognized for Kubernetes security expertise.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 19: Group discounts -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq19" aria-expanded="false" aria-controls="flush-coursefaq19">Are there group discounts for CKS training?</button>
                </h2>
                <div id="flush-coursefaq19" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">Yes, WebAsha offers group and corporate discounts for three or more participants. Contact our sales team for custom quotes and scheduling options.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 20: Post-training support -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq20" aria-expanded="false" aria-controls="flush-coursefaq20">What support is offered after CKS training?</button>
                </h2>
                <div id="flush-coursefaq20" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">Post-training support includes limited-time lab access, downloadable resources, community forums, and instructor-led doubt-clearing sessions. Specific benefits depend on the package—check with admissions.</p>
                  </div>
                </div>
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
          {
            "@type": "Question",
            "name": "What is included in the CKS training?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The CKS training covers all CNCF exam objectives, including cluster hardening, access control, network security, container runtime security, vulnerability management, and auditing, with hands-on labs and mock exams."
            }
          },
          {
            "@type": "Question",
            "name": "Who can enroll in CKS training?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Security engineers, DevOps professionals, and Kubernetes administrators with a valid CKA certification; familiarity with Kubernetes administration and security practices is required."
            }
          },
          {
            "@type": "Question",
            "name": "How long is the CKS certification valid?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The CKS certification is valid for 2 years; recertification requires retaking the exam or completing CNCF-approved activities."
            }
          },
          {
            "@type": "Question",
            "name": "What is the format of the CKS exam?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The CKS exam is a 2-hour, online proctored, performance-based test with 15-20 hands-on tasks in a live Kubernetes environment."
            }
          },
          {
            "@type": "Question",
            "name": "What is the passing score for CKS?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The passing score is typically 66%, though it may vary by exam version; confirm with CNCF."
            }
          },
          {
            "@type": "Question",
            "name": "In which languages is the CKS exam available?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The CKS exam is offered in English; check the CNCF portal for updates on language availability."
            }
          },
          {
            "@type": "Question",
            "name": "How long does CKS training take?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Intensive instructor-led training lasts 5-7 days; part-time or self-paced options are available."
            }
          },
          {
            "@type": "Question",
            "name": "What is the cost of the CKS certification?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The CKS exam fee is approximately ₹25,000 in India; confirm pricing with CNCF or WebAsha for discounts."
            }
          },
          {
            "@type": "Question",
            "name": "What’s the difference between online and in-person CKS training?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Online training offers remote lab access and flexibility; in-person classes in Pune provide direct instructor interaction and collaborative labs. Both follow the same curriculum."
            }
          },
          {
            "@type": "Question",
            "name": "Are there any prerequisites for the CKS exam?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "A valid CKA certification is required, along with familiarity with Kubernetes administration and security practices."
            }
          },
          {
            "@type": "Question",
            "name": "How can I recertify for CKS?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Recertify by retaking the CKS exam or completing CNCF-approved continuing education activities."
            }
          },
          {
            "@type": "Question",
            "name": "What job roles can I pursue with CKS?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Roles include Kubernetes Security Engineer, DevOps Security Specialist, Cloud Security Architect, and Site Reliability Engineer, with salaries ranging from ₹8–22 LPA in India."
            }
          },
          {
            "@type": "Question",
            "name": "Where is CKS training offered?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "WebAsha offers online and in-person training in Pune; corporate options available."
            }
          },
          {
            "@type": "Question",
            "name": "What study materials are provided for CKS?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Materials include CNCF-aligned lab guides, security command cheat-sheets, practice labs, and instructor demos."
            }
          },
          {
            "@type": "Question",
            "name": "What is the policy for retaking the CKS exam?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Retakes are allowed after a waiting period (typically 24 hours) with additional fees; check CNCF for details."
            }
          },
          {
            "@type": "Question",
            "name": "Does WebAsha offer career support for CKS?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, WebAsha provides resume reviews, mock interviews, and job placement assistance, depending on the package."
            }
          },
          {
            "@type": "Question",
            "name": "How does CKS training incorporate practical skills?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Training includes hands-on labs, timed exercises, and mock exams replicating CKS tasks like cluster hardening and vulnerability management."
            }
          },
          {
            "@type": "Question",
            "name": "Is the CKS accredited?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, the CKS is an official CNCF certification recognized globally."
            }
          },
          {
            "@type": "Question",
            "name": "Are there group discounts for CKS training?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, group and corporate discounts are available for three or more participants; contact WebAsha for quotes."
            }
          },
          {
            "@type": "Question",
            "name": "What support is offered after CKS training?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Support includes limited-time lab access, downloadable resources, community forums, and doubt-clearing sessions, depending on the package."
            }
          }
        ]
      }
      </script>
      <!-- Other Courses -->
      <section class="other-course-kubernetes lazy-section">
        <div class="container">
          <div class="course-kubernetes-wraper">
            <div class="course-kubernetes">
              <h2 class="heading-main text-center">Browse CKS-Related Resources</h2>
              <?php include("include/devops/related-resources.php"); ?>
            </div>
          </div>
        </div>
      </section>
      <!-- Modals -->
      <?php include("include/devops/enquiry-modal.php"); ?>
      <?php include("include/devops/syllabus-modal.php"); ?>
    </main>
    <!-- Footer -->
    <?php include("include/footer.php"); ?>
    <?php include("include/footerlink.php"); ?>
  </body>
</html>