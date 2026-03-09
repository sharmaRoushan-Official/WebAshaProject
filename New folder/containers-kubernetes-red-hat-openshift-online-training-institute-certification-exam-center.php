<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include common header links / global meta / favicon / CSS / JS -->
    <?php include("include/headerlink.php"); ?>
    <!-- Page-specific metadata (DO180 Training) -->
    <?php
      $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
      $current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
    <title>DO180 Training in Pune | Red Hat Containers, Kubernetes, and OpenShift Course - WebAsha Technologies</title>
    <meta name="description" content="Join WebAsha Technologies for DO180 Training in Pune. Master containers, Kubernetes, and Red Hat OpenShift with hands-on labs, expert mentorship, and preparation for Red Hat certification in 2025.">
    <meta name="keywords" content="DO180 Training Pune, Red Hat OpenShift Certification, Kubernetes Training Course, Containers and OpenShift Training, Red Hat DO180 Exam Prep, DevOps Kubernetes Training Pune">
    <!-- Canonical URL to avoid duplicate content -->
    <link rel="canonical" href="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <!-- Page-specific Open Graph for social sharing -->
    <meta property="og:title" content="DO180 Training in Pune | Red Hat Containers, Kubernetes, and OpenShift Course - WebAsha Technologies">
    <meta property="og:description" content="Advance your DevOps skills with WebAsha Technologies’ DO180 Training in Pune. Learn containers, Kubernetes, and Red Hat OpenShift through practical labs for certification success.">
    <meta property="og:url" content="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <meta property="og:image" content="https://training.webasha.com/assets/img/course/redhat/do180.webp">
    <meta property="og:image:alt" content="DO180 Training - Red Hat Containers, Kubernetes, and OpenShift Course in Pune">
    <meta property="og:type" content="website">
    <!-- Page-specific Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DO180 Training in Pune | Red Hat Containers, Kubernetes, and OpenShift Course - WebAsha Technologies">
    <meta name="twitter:description" content="Become a Red Hat certified professional with WebAsha Technologies’ DO180 Training in Pune. Hands-on Kubernetes and OpenShift training for a thriving DevOps career in 2025.">
    <meta name="twitter:image" content="https://training.webasha.com/assets/img/course/redhat/do180.webp">
    <!-- Page-specific JSON-LD: Course schema for enhanced search visibility -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Course",
      "name": "Red Hat DO180 Training - Containers, Kubernetes, and OpenShift",
      "description": "Develop expertise in containers, Kubernetes, and Red Hat OpenShift with WebAsha Technologies in Pune. This course offers practical labs, expert instruction, and comprehensive Red Hat DO180 certification preparation for 2025.",
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
                <li class="breadcrumb-item active" aria-current="page">DO180 Training</li>
              </ol>
            </nav>
            <!-- Banner Content -->
            <div class="banner-course-content">
              <!-- Course At-a-Glance -->
              <section class="at-a-glance text-light">
                <h1 class="heading-main-1 text-white">DO180 Training with Certification: Red Hat Containers, Kubernetes, and OpenShift</h1>
                <!-- Review Card -->
                <div class="banner-review-card">
                  <div class="enrolled-group d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700" viewBox="0 0 24 24" aria-hidden="true" role="img" class="me-2">
                      <path d="M16 11c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-8 0c1.7 0 3-1.3 3-3S9.7 5 8 5 5 6.3 5 8s1.3 3 3 3zm0 2c-2.3 0-7 1.2-7 3.5V20h14v-3.5C15 14.2 10.3 13 8 13zm8 0c-.3 0-.7 0-1 .1 1.2.8 2 2.1 2 3.4V20h6v-3.5c0-2.3-4.7-3.5-7-3.5z" />
                    </svg>
                    <span>2,450 Participants Enrolled</span>
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
                  The <strong>DO180 Training with Certification: Red Hat Containers, Kubernetes, and OpenShift</strong> at
                  <span class="red-color">WebAsha Technologies</span> in Pune provides comprehensive, hands-on training for IT professionals aiming to master containerization and orchestration. This course introduces containerization, orchestration with Kubernetes, and deployment on Red Hat OpenShift, equipping you with skills to build, run, and scale containerized applications in cloud-native environments.
                  <br><br>
                  The Red Hat DO180 (Introduction to Containers, Kubernetes, and Red Hat OpenShift) course is a stepping stone to earning Red Hat certifications and mastering advanced DevOps practices. With expert-led instruction, real-world lab simulations, and alignment with official course objectives, this training ensures you are well-prepared to excel in container technologies and pursue high-demand roles in 2025’s DevOps landscape. Whether you're a developer, system administrator, or IT professional, WebAsha Technologies provides the tools and mentorship to succeed.
                  <br><br>
                  Enroll now to master containerization and orchestration and elevate your career in DevOps with a trusted training provider.
                </p>
                <table class="table table-dark table-bordered facts-table mt-3 mb-0">
                  <tbody>
                    <tr>
                      <td class="fw-semibold text-warning">Duration:</td>
                      <td class="text-light">40 Hours (Weekday / Weekend Batches)</td>
                    </tr>
                    <tr>
                      <td class="fw-semibold text-warning">Mode:</td>
                      <td class="text-light">Online & Classroom Training</td>
                    </tr>
                    <tr>
                      <td class="fw-semibold text-warning">Certification:</td>
                      <td class="text-light">Red Hat Certified Specialist in Containers and Kubernetes (DO180)</td>
                    </tr>
                    <tr>
                      <td class="fw-semibold text-warning">Institute:</td>
                      <td class="text-light">WebAsha Technologies, Pune</td>
                    </tr>
                    <tr>
                      <td class="fw-semibold text-warning">Includes:</td>
                      <td class="text-light">Hands-on Labs, Official Red Hat Curriculum, Real Exam Simulations</td>
                    </tr>
                  </tbody>
                </table>
              </section>
              <!-- Buttons -->
              <div class="button-group mt-4 mb-4">
                <a href="https://api.whatsapp.com/send?phone=+91-8010911256&text=Hello%20WebAsha,%20I%20want%20DO180%20Info" class="btn-whatsapp text-decoration-none" aria-label="Contact via WhatsApp">
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
                  <source srcset="assets/img/course/redhat/do180.webp" type="image/webp">
                  <img src="assets/img/course/redhat/do180.webp" alt="Red Hat DO180 Course Preview Thumbnail" width="360" height="220" loading="lazy" decoding="async" class="img-fluid rounded shadow-sm">
                </picture>
                <button type="button" class="video-btn position-absolute top-50 start-50 translate-middle" aria-label="Play DO180 course promo video" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="SAMPLE_VIDEO_ID">
                  <svg class="play-icon" viewBox="0 0 64 64" width="64" height="64" aria-hidden="true" focusable="false">
                    <circle cx="32" cy="32" r="32" fill="rgba(0,0,0,0.55)" />
                    <path d="M26 20 L45 32 L26 44 z" fill="#fff" />
                  </svg>
                </button>
              </div>
              <div class="pera-group">
                <p class="desc">Premier IT Training Platform for DevOps and Container Technologies</p>
                <p>Need Guidance? Reach Out to Our Specialists</p>
              </div>
              <div class="button-group">
                <a href="#" class="animated-button1 mx-auto d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in DO180 Course">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span> Enroll Now <i class="fa fa-arrow-right ms-2"></i>
                </a>
              </div>
              <!-- Accreditation -->
              <div class="text-white mt-4 mb-4">
                <h5>Accredited By</h5>
                <a href="#" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in DO180 Course">
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
                    <h2>800+</h2>
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
                    <h2>15+</h2>
                    <p>Countries Served</p>
                  </div>
                </div>
                <div class="item">
                  <img src="assets/imgs/fi-4.png" alt="Corporate Clients" width="73" height="73" loading="lazy">
                  <div class="content">
                    <h2>500+</h2>
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
        { "@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [ { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://training.webasha.com/" }, { "@type": "ListItem", "position": 2, "name": "DO180 Training with Certification: Red Hat Containers, Kubernetes, and OpenShift", "item": "<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>" } ] }
      </script>
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
            <button type="button" class="btn btn-enroll" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Enroll Now</button>
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</button>
          </div>
        </div>
      </div>
    </section>
    <!-- Lazy Sections Start -->
    <!-- Brands -->
    <section class="our-learners section-header text-center lazy-section"> <?php include("include/redhat/brands.php"); ?> </section>
    <!-- Recent Placements Video Testimonials Section -->
    <section class="course-recent-reviews section-header text-center lazy-section" id="sticky-sidebar2">
      <span class="section-badge">Recent Placements Testimonials</span>
      <h2 class="heading-main-1 text-white text-center">Red Hat Containers, Kubernetes, and OpenShift <span class="red-color">Recent Reviews</span>
      </h2> <?php include("include/redhat/video-reviews.php"); ?>
    </section>
    <!-- Testimonials -->
    <section class="success-speaks-reviwe course-speaks section-header text-center lazy-section">
      <div class="container">
        <span class="section-badge">Recent Placements Testimonials</span>
        <h2 class="heading-main text-center mb-5">Red Hat Containers, Kubernetes, and OpenShift <span class="red-color">Reviews</span>
        </h2> <?php include("include/redhat/text-reviews.php"); ?>
      </div>
    </section>
    <!-- Career Roadmap -->
    <section class="course-technologies-placement lazy-section" id="placement-reviews"> <?php include("include/redhat/placement.php"); ?> </section>
    <!-- Key Features -->
    <section class="lazy-section">
      <div class="training-features section-header text-center mt-5 lazy-section">
        <div class="container">
          <!-- Preload critical image for LCP -->
          <link rel="preload" href="https://i.ibb.co/5X09hRg/lab.gif" as="image" fetchpriority="high">
          <span class="section-badge">Training Key Features</span>
          <h2 class="heading-main-1 text-center">DO180 Course <span class="red-color">Training Key Features</span>
          </h2>
          <p class="description text-center mb-5">Uncover the essential benefits of our DO180 courses designed for building container and orchestration expertise in Pune’s thriving DevOps ecosystem.</p> <?php include("include/redhat/key-features.php"); ?>
        </div>
      </div>
    </section>
    <!-- Why Choose Us -->
    <section class="py-5 course-comparison-section lazy-section"> <?php include("include/redhat/why-webasha.php"); ?> </section>
    <!-- Training Calendar -->
    <section class="py-5 lazy-section" id="training-options"> <?php include("include/redhat/batchschedule.php"); ?> </section>
    <!-- Main Course Content -->
    <main>
      <div class="container">
        <div class="row">
          <!-- Left -->
          <div class="col-lg-8 col-12" id="sticky-start-section1">
            <!-- Course Overview Start -->
            <section class="course-training-overview lazy-section" id="overview"> <?php include("include/redhat/slider/ex188.php"); ?> </section>
            <!-- Course Prerequisites Start -->
            <section class="contentcard lazy-section">
              <div class="content-container" id="contentContainer1">
                <div class="summary-details">
                  <h2 class="heading-main text-center"> Red Hat Containers, Kubernetes, and OpenShift <span class="red-color"> Training Overview</span>
                  </h2>
                  <p class="description mb-0"> Elevate your DevOps capabilities with our <b>Classroom and Online DO180 Training</b> at <b>WebAsha Technologies</b>. This course is crafted for professionals seeking to understand container technologies, Kubernetes orchestration, and Red Hat OpenShift deployment. Ideal for beginners in cloud-native development, it provides <b>practical, hands-on experience</b> to prepare you for Red Hat certifications and real-world application management in 2025. </p>
                </div>
                <h5 class="bold-text mb-2 mt-2">DO180 Training Overview:</h5>
                <p class="description mb-0"> The <b>DO180 course</b> delivers foundational knowledge in containerization using Podman, orchestration with Kubernetes, and platform management via Red Hat OpenShift. Through interactive sessions and simulated environments, learners practice building, deploying, and scaling applications, focusing on efficiency and scalability in modern IT infrastructures. </p>
                <h5 class="bold-text mb-2 mt-2">Intended Audience:</h5>
                <p class="description mb-0"> Designed for <b>developers, system administrators, and DevOps engineers</b> looking to integrate container technologies into their workflows. It's also perfect for <b>learners in Pune</b> transitioning to cloud-native roles, with or without prior Linux experience. </p>
                <h5 class="bold-text mb-2 mt-2">Topics Covered:</h5>
                <ul>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Container Fundamentals:</b> Explore container concepts, images, and runtime with Podman.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Kubernetes Basics:</b> Learn pods, deployments, services, and scaling applications.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>OpenShift Introduction:</b> Manage clusters, projects, and application lifecycles on Red Hat OpenShift.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Application Deployment:</b> Build and deploy containerized apps using source-to-image (S2I).
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Networking and Storage:</b> Configure persistent storage and network policies.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Security Practices:</b> Implement role-based access and security contexts.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Troubleshooting:</b> Debug common issues in container environments.
                  </li>
                </ul>
                <h5 class="bold-text mb-2 mt-2">Requirements:</h5>
                <p class="description mb-0"> Basic familiarity with Linux commands is helpful. For online participants, ensure a reliable internet and compatible device for virtual labs. </p>
                <h5 class="bold-text mb-2 mt-2">Pre-Requisites:</h5>
                <p class="description mb-0"> RHCSA-level knowledge or equivalent is recommended for optimal learning. </p>
                <h5 class="bold-text mb-2 mt-2">Career Benefits:</h5>
                <p class="description mb-0"> DO180 equips you for roles like DevOps Engineer or Cloud Developer, with salaries ranging from ₹6 LPA to ₹18 LPA in Pune's tech hubs. </p>
                <div class="gradient-overlay"></div>
              </div>
              <button class="toggle-button" onclick="toggleContent('contentContainer1', this)">View More</button>
            </section>
            <!-- Red Hat Track Start -->
            <section class="contentcard lazy-section"> <?php include("include/redhat/redhat-track.php"); ?> </section>
            <!-- Red Hat Track End -->
            <!-- Course Syllabus Start -->
            <section class="course-top-curriculum lazy-section" id="syllabus">
              <div class="contentcard">
                <h2 class="heading-main text-center mb-2">Curriculum <span class="red-color">DO180</span></h2>
                <div class="content-container" id="contentContainer3">
                  <div class="accordion-curriculum mb-5">
                    <div class="top-curriculum-header">
                      <p class="desc">DO180 - Introduction to Containers, Kubernetes, and Red Hat OpenShift syllabus</p>
                      <a href="#" class="btn btn-white" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">
                        <svg viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M0.625 11.375C0.79076 11.375 0.949732 11.4408 1.06694 11.5581C1.18415 11.6753 1.25 11.8342 1.25 12V15.125C1.25 15.4565 1.3817 15.7745 1.61612 16.0089C1.85054 16.2433 2.16848 16.375 2.5 16.375H17.5C17.8315 16.375 18.1495 16.2433 18.3839 16.0089C18.6183 15.7745 18.75 15.4565 18.75 15.125V12C18.75 11.8342 18.8158 11.6753 18.9331 11.5581C19.0503 11.4408 19.2092 11.375 19.375 11.375C19.5408 11.375 19.6997 11.4408 19.8169 11.5581C19.9342 11.6753 20 11.8342 20 12V15.125C20 15.788 19.7366 15.4239 19.2678 16.8928C18.7989 17.3616 18.163 17.625 17.5 17.625H2.5C1.83696 17.625 1.20107 17.3616 0.732233 16.8928C0.263392 16.4239 0 15.788 0 15.125V12C0 11.8342 0.065848 11.6753 0.183058 11.5581C0.300269 11.4408 0.45924 11.375 0.625 11.375Z" />
                          <path d="M9.55829 13.8175C9.61635 13.8757 9.68532 13.9219 9.76125 13.9534C9.83718 13.9849 9.91858 14.0011 10.0008 14.0011C10.083 14.0011 10.1644 13.9849 10.2403 13.9534C10.3163 13.9219 10.3852 13.8757 10.4433 13.8175L14.1933 10.0675C14.3106 9.95014 14.3766 9.79097 14.3766 9.625C14.3766 9.45903 14.3106 9.29986 14.1933 9.1825C14.0759 9.06514 13.9168 8.99921 13.7508 8.99921C13.5848 8.99921 13.4256 9.06514 13.3083 9.1825L10.6258 11.8663V0.875C10.6258 0.70924 10.5599 0.550268 10.4427 0.433058C10.3255 0.315848 10.1666 0.25 10.0008 0.25C9.83503 0.25 9.67606 0.315848 9.55885 0.433058C9.44164 0.550268 9.37579 0.70924 9.37579 0.875V11.8663L6.69329 9.1825C6.57593 9.06514 6.41676 8.99921 6.25079 8.99921C6.08482 8.99921 5.92565 9.06514 5.80829 9.1825C5.69093 9.29986 5.625 9.45903 5.625 9.625C5.625 9.79097 5.69093 9.95014 5.80829 10.0675L9.55829 13.8175Z" />
                        </svg>
                        Download Syllabus
                      </a>
                    </div>
                    <div class="accordion accordion-flush" id="curriculumAccordionFlush">
                      <!-- Module 1: Introduction to Containers -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-1">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-1" aria-expanded="false" aria-controls="flush-curriculum-1">
                            <div class="curriculum-number"><span>1.</span> Container Fundamentals and Podman</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-1" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-1" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Overview of container technology and architecture.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Building and running containers with Podman.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Hands-on labs for image management and container lifecycle.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 2: Kubernetes Basics -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-2">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-2" aria-expanded="false" aria-controls="flush-curriculum-2">
                            <div class="curriculum-number"><span>2.</span> Kubernetes Core Concepts</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-2" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-2" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Understanding pods, deployments, and services.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Scaling and updating applications in Kubernetes.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Practical exercises on cluster navigation and resource management.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Add more modules as needed, up to comprehensive coverage -->
                    </div> <!-- end accordion -->
                  </div> <!-- end accordion-curriculum -->
                  <div class="gradient-overlay"></div>
                </div> <!-- end content-container -->
                <button class="toggle-button" onclick="toggleContent('contentContainer3', this)">View More</button>
              </div>
            </section>
            <!-- Trainer Profile Start -->
            <section class="contentcard lazy-section" id="our-instructor">
              <h2 class="heading-main text-center">Meet Our <span class="red-color">Expert Trainers</span>
              </h2>
              <p class="description text-center"> Our <b>Red Hat Certified Trainers</b> at WebAsha bring extensive DevOps experience to guide you through containers and orchestration. </p>
              <!-- Adapted content for trainers -->
            </section>
          </div>
          <!-- Sidebar 1 --> <?php include("include/redhat/course-sidebar1.php"); ?>
        </div>
      </div>
      <!-- Newsletter -->
      <section class="newsletter course-newsletter lazy-section" id="sticky-end-section1"> <?php include("include/redhat/self-assessment.php"); ?> </section>
      <div class="container">
        <div class="row">
          <!-- Main Content -->
          <div class="col-lg-8 col-sm-12" id="sticky-start-section2">
            <!-- Bootcamp -->
            <section class="lazy-section">
              <h2 class="heading-main text-center mb-0">DO180 <span class="red-color">Certification Bootcamp</span>
              </h2>
              <p class="description mb-0">DO180 certification validates your skills in container and OpenShift technologies for cloud-native development.</p>
              <!-- Adapted content -->
            </section>
            <!-- Certified Candidates -->
            <section class="course-certified-candidates lazy-section" id="exam-certification"> <?php include("include/redhat/cert/ex188.php"); ?> </section>
            <!-- Exam Info -->
            <section class="course-exam-information lazy-section">
              <h2 class="heading-main text-center">DO180 Exam <span class="red-color">Details and Format</span>
              </h2>
              <!-- Adapted table for DO180 exam info -->
            </section>
            <!-- Passing Score -->
            <section class="course-ceh-group lazy-section">
              <h4 class="text-center mb-0">Passing Criteria for DO180 Exam</h4>
              <p class="description text-center mb-0">Achieve certification with hands-on exam preparation at WebAsha. </p>
              <!-- Adapted -->
            </section>
            <!-- Salary -->
            <section class="contentcard lazy-section">
              <div class="content-container" id="contentContainer4">
                <h2 class="heading-main text-center">Job Roles and Salary Outlook After <span class="red-color">DO180</span>
                </h2>
                <!-- Adapted table for job roles -->
              </div>
              <button class="toggle-button" onclick="toggleContent('contentContainer4', this)">View More</button>
            </section>
            <section class="contentcard lazy-section">
              <div class="content-container" id="contentContainer5">
                <h2 class="heading-main text-center">Career Benefits of <span class="red-color">DO180</span>
                </h2>
                <!-- Adapted content -->
              </div>
              <button class="toggle-button" onclick="toggleContent('contentContainer5', this)">View More</button>
            </section>
            <!-- Why Choose Us -->
            <section class="contentcard lazy-section">
              <div class="content-container" id="contentContainer6">
                <h2 class="heading-main text-center"> Why Choose DO180 Training at <span class="red-color">WebAsha Technologies in Pune</span>
                </h2>
                <!-- Adapted content -->
              </div>
              <button class="toggle-button" onclick="toggleContent('contentContainer6', this)">View More</button>
            </section>
          </div>
          <!-- Sidebar -->
          <div class="col-lg-4 col-sm-12 col-12 sticky-sidebar1 lazy-section" id="sticky-sidebar2">
            <div class="course-subsciption sticky-sidebar-container"> <?php include("include/redhat/course-sidebar2.php"); ?> </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Screenshots -->
    <section class="career-straight lazy-section"> <?php include("include/redhat/career-straight.php"); ?> </section>
    <!-- Alumni -->
    <section class="course-discover-profile lazy-section">
      <div class="section-header text-center">
        <span class="section-badge">Recent Career Success Stories</span>
      </div>
      <h2 class="heading-main-1 text-center">Explore Alumni with Profiles <span class="red-color">Like Yours</span>
      </h2>
      <p class="desc text-center">Discover their journeys, expertise, and achievements in DevOps.</p> <?php include("include/redhat/alumni.php"); ?>
    </section>
    <!-- Related Courses -->
    <section class="course-related-courses lazy-section visible">
      <div class="section-header text-center mb-4">
        <span class="section-badge">Related Courses</span>
        <h2 class="heading-main-1 text-center">Explore <span class="red-color">Related Courses</span>
        </h2>
        <p class="desc text-center">Discover additional programs to advance your DevOps and container skills.</p>
      </div> <?php include("include/redhat/related-courses.php"); ?>
    </section>
    <!-- FAQs -->
    <section class="course-webasha-faq lazy-section" id="faqs">
      <div class="container mt-4 mb-4">
        <div class="section-header text-center mb-4">
          <span class="section-badge">FAQs</span>
          <h2 class="heading-main-1 text-center">DO180 FAQs <span class="red-color">(Frequently Asked Questions)</span>
          </h2>
        </div>
        <div class="all-theme-accordion" id="content">
          <div class="accordion accordion-flush" id="coursefaqAccordionFlush">
            <!-- Adapted FAQs for DO180 -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq1"
                  aria-expanded="false" aria-controls="flush-coursefaq1">What does DO180 training cover?</button>
              </h2>
              <div id="flush-coursefaq1" class="accordion-collapse collapse show" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0">
                  <p class="description mb-0">
                    DO180 introduces container basics, Kubernetes orchestration, and OpenShift platform management with hands-on labs for practical application.
                  </p>
                </div>
              </div>
            </div>
            <!-- More FAQs... -->
          </div> <!-- end accordion -->
        </div> <!-- end content -->
      </div>
    </section>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What does DO180 training cover?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "DO180 focuses on container fundamentals, Kubernetes basics, and Red Hat OpenShift for application deployment."
          }
        }
        // More FAQ items...
      ]
    }
    </script>
    <!-- Other Courses -->
    <section class="other-course-kubernetes lazy-section">
      <div class="container">
        <div class="course-kubernetes-wraper">
          <div class="course-kubernetes">
            <h2 class="heading-main text-center">Browse DO180 related Resources</h2> <?php include("include/redhat/related-resources.php"); ?>
          </div>
        </div>
      </div>
    </section> <?php include("include/redhat/enquiry-modal.php"); ?> <?php include("include/redhat/syllabus-modal.php"); ?> </main>
    <!-- Footer --> <?php include("include/footer.php"); ?> <?php include("include/footerlink.php"); ?>
  </body>
</html>