<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include common header links / global meta / favicon / CSS / JS -->
    <?php include("include/headerlink.php"); ?>
    <!-- Page-specific metadata (ECSA Training) -->
    <?php
      $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
      $current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
    <title>ECSA Training in Pune | EC-Council Certified Security Analyst Course - WebAsha Technologies</title>
    <meta name="description" content="Join WebAsha Technologies for ECSA Training in Pune. Master advanced penetration testing and security analysis with hands-on labs, expert mentorship, and preparation for EC-Council Certified Security Analyst (ECSA) certification in 2025.">
    <meta name="keywords" content="ECSA Training Pune, EC-Council Certified Security Analyst Certification, Penetration Testing Course, Cybersecurity Analysis Training, EC-Council ECSA Exam Prep, Advanced Ethical Hacking Pune">
    <!-- Canonical URL to avoid duplicate content -->
    <link rel="canonical" href="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <!-- Page-specific Open Graph for social sharing -->
    <meta property="og:title" content="ECSA Training in Pune | EC-Council Certified Security Analyst Course - WebAsha Technologies">
    <meta property="og:description" content="Elevate your cybersecurity expertise with WebAsha Technologies’ ECSA Training in Pune. Learn advanced penetration testing through practical labs and expert guidance for EC-Council ECSA certification.">
    <meta property="og:url" content="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <meta property="og:image" content="https://training.webasha.com/assets/img/course/eccouncil/ecsa.webp">
    <meta property="og:image:alt" content="ECSA Training - EC-Council Certified Security Analyst Course in Pune">
    <meta property="og:type" content="website">
    <!-- Page-specific Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ECSA Training in Pune | EC-Council Certified Security Analyst Course - WebAsha Technologies">
    <meta name="twitter:description" content="Become an EC-Council Certified Security Analyst with WebAsha Technologies in Pune. Hands-on training and ECSA exam prep for a thriving cybersecurity career in 2025.">
    <meta name="twitter:image" content="https://training.webasha.com/assets/img/course/eccouncil/ecsa.webp">
    <!-- Page-specific JSON-LD: Course schema for enhanced search visibility -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Course",
      "name": "EC-Council Certified Security Analyst (ECSA) Training",
      "description": "Develop advanced penetration testing and security analysis skills with WebAsha Technologies in Pune. This course offers practical labs, expert instruction, and comprehensive EC-Council ECSA certification preparation for 2025.",
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
                <li class="breadcrumb-item active" aria-current="page">ECSA Training</li>
              </ol>
            </nav>
            <!-- Banner Content -->
            <div class="banner-course-content">
              <!-- Course At-a-Glance -->
              <section class="at-a-glance text-light">
                <h1 class="heading-main-1 text-white">ECSA Training: Certified Security Analyst Certification</h1>
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
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 34" aria-hidden="true" role="img" fill="#FFD700">
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
                  The <strong>ECSA Training: Certified Security Analyst Certification</strong> at
                  <span class="red-color">WebAsha Technologies</span> in Pune provides comprehensive, hands-on training for IT professionals aiming to master penetration testing and security analysis. This course focuses on advanced penetration testing methodologies, covering network penetration, web application testing, wireless attacks, social engineering, and Capture The Flag (CTF) challenges for real-world security assessment.
                  <br><br>
                  The EC-Council Certified Security Analyst (ECSA) certification, offered by EC-Council, is a globally recognized credential for cybersecurity professionals specializing in security analysis and penetration testing. With expert-led instruction, real-world lab simulations, and alignment with official exam objectives, this training ensures you are well-prepared to pass the <strong>ECSA certification exam</strong> on your first attempt. Whether you're advancing your cybersecurity expertise or pursuing a career in security analysis, WebAsha Technologies provides the tools and mentorship to succeed.
                  <br><br>
                  Enroll now to master security analysis and elevate your career in cybersecurity with a trusted training provider.
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
                      <td class="text-light">EC-Council Certified Security Analyst (ECSA)</td>
                    </tr>
                    <tr>
                      <td class="fw-semibold text-warning">Institute:</td>
                      <td class="text-light">WebAsha Technologies, Pune</td>
                    </tr>
                    <tr>
                      <td class="fw-semibold text-warning">Includes:</td>
                      <td class="text-light">Hands-on Labs, Official EC-Council Curriculum, Real Exam Simulations</td>
                    </tr>
                  </tbody>
                </table>
              </section>
              <!-- Buttons -->
              <div class="button-group mt-4 mb-4">
                <a href="https://api.whatsapp.com/send?phone=+91-8010911256&text=Hello%20WebAsha,%20I%20want%20ECSA%20Info" class="btn-whatsapp text-decoration-none" aria-label="Contact via WhatsApp">
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
                  <source srcset="assets/img/course/eccouncil/ecsa.webp" type="image/webp">
                  <img src="assets/img/course/eccouncil/ecsa.webp" alt="EC-Council ECSA Course Preview Thumbnail" width="360" height="220" loading="lazy" decoding="async" class="img-fluid rounded shadow-sm">
                </picture>
                <button type="button" class="video-btn position-absolute top-50 start-50 translate-middle" aria-label="Play ECSA course promo video" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="ERtp4zua0-s">
                  <svg class="play-icon" viewBox="0 0 64 64" width="64" height="64" aria-hidden="true" focusable="false">
                    <circle cx="32" cy="32" r="32" fill="rgba(0,0,0,0.55)" />
                    <path d="M26 20 L45 32 L26 44 z" fill="#fff" />
                  </svg>
                </button>
              </div>
              <div class="pera-group">
                <p class="desc">Leading Global IT Training and Exam Prep Platform</p>
                <p>Have Questions? Consult Our Experts</p>
              </div>
              <div class="button-group">
                <a href="#" class="animated-button1 mx-auto d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in ECSA Course">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span> Enroll Now <i class="fa fa-arrow-right ms-2"></i>
                </a>
              </div>
              <!-- Accreditation -->
              <div class="text-white mt-4 mb-4">
                <h5>Accredited By</h5>
                <a href="#" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in ECSA Course">
                  <picture>
                    <img src="assets/img/icons/partner/ec-logo.png" alt="EC-Council Authorized Training Partner" height="103" width="192" loading="lazy">
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
        { "@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [ { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://training.webasha.com/" }, { "@type": "ListItem", "position": 2, "name": "EC-Council Certified Security Analyst (ECSA) Training", "item": "<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>" } ] }
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
            <button type="button" class="btn btn-enroll">Enroll Now</button>
            <button type="button" class="btn btn-outline-primary">View Syllabus</button>
          </div>
        </div>
      </div>
    </section>
    <!-- Lazy Sections Start -->
    <!-- Brands -->
    <section class="our-learners section-header text-center lazy-section"> <?php include("include/brands.php"); ?> </section>
    <!-- Recent Placements Video Testimonials Section -->
    <section class="course-recent-reviews section-header text-center lazy-section" id="sticky-sidebar2">
      <span class="section-badge">Recent Placements Testimonials</span>
      <h2 class="heading-main-1 text-white text-center">EC-Council Certified Security Analyst ECSA <span class="red-color">Recent Reviews</span>
      </h2> <?php include("include/video-reviews.php"); ?>
    </section>
    <!-- Testimonials -->
    <section class="success-speaks-reviwe course-speaks section-header text-center lazy-section">
      <div class="container">
        <span class="section-badge">Recent Placements Testimonials</span>
        <h2 class="heading-main text-center mb-5">EC-Council Certified Security Analyst ECSA <span class="red-color">Reviews</span>
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
                <h2 class="heading-main-1 text-center">ECSA Course <span class="red-color">Training Key Features</span></h2>
                <p class="description text-center mb-5">Explore the unique benefits of our ECSA courses designed for success in Pune’s booming IT sector.</p>
        <?php include("include/key-features.php"); ?> 
    </section>
    <!-- Why Choose Us -->
    <section class="py-5 course-comparison-section lazy-section"> <?php include("include/why-webasha.php"); ?> </section>
    <!-- Training Calendar -->
    <section class="py-5 lazy-section" id="training-options"> <?php include("include/batchschedule.php"); ?> </section>
    <!-- Main Course Content -->
    <main>
      <div class="container">
        <div class="row">
          <!-- Left -->
          <div class="col-lg-8 col-12" id="sticky-start-section1">
            <!-- Course Overview Start -->
            <section class="course-training-overview lazy-section" id="overview"> <?php include("include/slider/ecsa.php"); ?> </section>
            <!-- Course Prerequisites Start -->
            <section class="contentcard lazy-section">
              <div class="content-container" id="contentContainer1">
                <div class="summary-details">
                  <h2 class="heading-main text-center">EC-Council Certified Security Analyst ECSA Course <span class="red-color"> Training Overview</span>
                  </h2>
                  <p class="description mb-0"> Elevate your <b>penetration testing mastery</b> with our <b>Classroom / Online EC-Council Certified Security Analyst (ECSA) Course Training</b>, emphasizing <b>methodologies</b> and <b>advanced techniques</b>. Secure <b>certification</b> to lead in 2025's cybersecurity domain. </p>
                </div>
                <h5 class="bold-text mb-2 mt-2">EC-Council Certified Security Analyst ECSA Course Training Overview:</h5>
                <p class="description mb-0"> The <b>EC-Council Certified Security Analyst (ECSA) Course</b> offers advanced training in penetration testing methodologies, vulnerability analysis, and reporting. This program prepares you for EC-Council's ECSA certification. </p>
                <h5 class="bold-text mb-2 mt-2">Intended Audience:</h5>
                <p class="description mb-0"> Designed for <b>ethical hackers, pen testers, security analysts, and IT pros</b> with CEH. Ideal for those in Pune seeking methodology-focused skills. </p>
                <h5 class="bold-text mb-2 mt-2">Topics Covered:</h5>
                <ul>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Pen Testing Essentials
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Scoping and Engagement
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> OSINT
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Social Engineering Pen Testing
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Network Pen Testing - External
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Network Pen Testing - Internal
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Network Pen Testing - Perimeter
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Web Application Pen Testing
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Wireless Pen Testing
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> IoT Pen Testing
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> OT/SCADA Pen Testing
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Cloud Pen Testing
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Binary Analysis and Exploitation
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i> Report Writing and Post-Testing Actions
                  </li>
                </ul>
                <h5 class="bold-text mb-2 mt-2">Requirements:</h5>
                <p class="description mb-0"> CEH certification; stable internet for labs. </p>
                <h5 class="bold-text mb-2 mt-2">Pre-Requisites:</h5>
                <p class="description mb-0"> CEH required for exam. </p>
                <h5 class="bold-text mb-2 mt-2">Career Benefits:</h5>
                <p class="description mb-0"> Roles like <b>Security Analyst, Pen Tester</b> with salaries ₹8-22 LPA. ECSA cert proves methodology expertise. </p>
                <div class="gradient-overlay"></div>
              </div>
              <button class="toggle-button" onclick="toggleContent('contentContainer1', this)">View More</button>
            </section>
            <!-- Hacking Tools Covered Start -->
            <section class="contentcard lazy-section">
              <div class="content-container" id="contentContainer2">
                <div class="summary-details">
                  <h2 class="heading-main text-center">ECSA Course Training <span class="red-color"> Tools Covered</span>
                  </h2>
                  <img src="https://www.webasha.com/blog/uploads/gallery/202410/image_1920x_66ffd16c1c8dd.webp" alt="ECSA Course Training Tools Overview" width="900" height="400" class="img-fluid mb-3 rounded shadow-sm" loading="lazy">
                </div>
                <div class="table-responsive custom-table mb-4">
                  <table class="table table-bordered align-middle">
                    <thead class="table-light">
                      <tr>
                        <th scope="col" class="subs-title">Category</th>
                        <th scope="col" class="subs-title">Tools Covered</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <strong>Footprinting Tools</strong>
                        </td>
                        <td>Maltego, Foca, Recon-ng, Google Dorks, Whois, theHarvester, Shodan, Dnsrecon, Grecon, Photon, Sherlock, Spiderfoot, holehe</td>
                      </tr>
                      <tr>
                        <td>
                          <strong>Scanning Tools</strong>
                        </td>
                        <td>Nmap, Rustscan, sx-Tool, Colasoft Packet Builder, Nessus, OpenVAS, QualysGuard, Nikto, Angry IP Scanner, Hping3</td>
                      </tr>
                      <tr>
                        <td>
                          <strong>Enumeration Tools</strong>
                        </td>
                        <td>Netcat, SNMPCheck, SNMPEnum, Enum4Linux, NbtScan, SuperEnum, RPCScan, Dnsrecon</td>
                      </tr>
                      <tr>
                        <td>
                          <strong>Vulnerability Assessment Tools</strong>
                        </td>
                        <td>Nessus, OpenVAS, QualysGuard, Nikto, Burp Suite, W3af</td>
                      </tr>
                      <tr>
                        <td>
                          <strong>System Hacking Tools</strong>
                        </td>
                        <td>Metasploit Framework, Msfvenom, Cain & Abel, John the Ripper, Hydra, Medussa, Hashcat, RainbowCrack, Havoc, PowerSploit, Reverse-shell-generator, L0pthCrack, Winrtgen, pwdump7, Tanium Endpoint Management</td>
                      </tr>
                      <tr>
                        <td>
                          <strong>Sniffing Tools</strong>
                        </td>
                        <td>Wireshark, Tcpdump, Ettercap, Dsniff, MITM, Cain & Abel, Macchanger</td>
                      </tr>
                      <tr>
                        <td>
                          <strong>Social Engineering Tools</strong>
                        </td>
                        <td>Social-Engineer Toolkit (SET), Dark-Phish, Shellphish</td>
                      </tr>
                      <tr>
                        <td>
                          <strong>Denial of Service Tools</strong>
                        </td>
                        <td>Slowloris, LOIC, HOIC, UltraDDoS, pyDDoS, PyFlooder</td>
                      </tr>
                      <tr>
                        <td>
                          <strong>Session Hijacking Tools</strong>
                        </td>
                        <td>CAIDO, Hetty, OWASP ZAP</td>
                      </tr>
                      <tr>
                        <td>
                          <strong>Evading IDS, Firewall, and Honeypots Tools</strong>
                        </td>
                        <td>Nmap, Tcpreplay, Snort, Hping3, Pfsense</td>
                      </tr>
                      <tr>
                        <td>
                          <strong>Hacking Web Server Tools</strong>
                        </td>
                        <td>Ghost_eye, Impacket, Ncat, NMAP, Httprecon, ID Serve</td>
                      </tr>
                      <tr>
                        <td>
                          <strong>Web Application Hacking Tools</strong>
                        </td>
                        <td>OWASP ZAP, Burp Suite, SQLmap, Wapiti, Nikto, DirBuster, Wpscan, Skipfish, PwnXSS, Dirsearch, ClickjackPOC</td>
                      </tr>
                      <tr>
                        <td>
                          <strong>SQL Injection Tools</strong>
                        </td>
                        <td>DSSS, ghauri, SQLmap</td>
                      </tr>
                      <tr>
                        <td>
                          <strong>Hacking Wireless Networks Tools</strong>
                        </td>
                        <td>Sparrow-wifi, Airodump-ng, Aircrack-ng</td>
                      </tr>
                      <tr>
                        <td>
                          <strong>Hacking Mobile Platforms Tools</strong>
                        </td>
                        <td>AndroRAT, PhoneSploit-Pro, LOIC</td>
                      </tr>
                      <tr>
                        <td>
                          <strong>IoT and OT Tools</strong>
                        </td>
                        <td>Bevywise IoT Simulator</td>
                      </tr>
                      <tr>
                        <td>
                          <strong>AI Tools</strong>
                        </td>
                        <td>ShellGPT, Tranis AI, Malware.AI, ChatGPT, DeepfakeVFX, SmartScanner, OSS Insight, DeepExploit, Hoodem</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="gradient-overlay"></div>
              </div>
              <button class="toggle-button" onclick="toggleContent('contentContainer2', this)">View More</button>
            </section>
            <!-- Hacking Tools Covered End -->
            <!-- Course Syllabus Start -->
            <section class="course-top-curriculum lazy-section" id="syllabus">
              <div class="contentcard">
                <h2 class="heading-main text-center mb-2">Curriculum <span class="red-color">ECSA</span>
                </h2>
                <div class="content-container" id="contentContainer3">
                  <div class="accordion-curriculum mb-5">
                    <div class="top-curriculum-header">
                      <p class="desc">EC-Council Certified Security Analyst ECSA Curriculum</p>
                      <a href="#" class="btn btn-white" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">
                        <svg viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M0.625 11.375C0.79076 11.375 0.949732 11.4408 1.06694 11.5581C1.18415 11.6753 1.25 11.8342 1.25 12V15.125C1.25 15.4565 1.3817 15.7745 1.61612 16.0089C1.85054 16.2433 2.16848 16.375 2.5 16.375H17.5C17.8315 16.375 18.1495 16.2433 18.3839 16.0089C18.6183 15.7745 18.75 15.4565 18.75 15.125V12C18.75 11.8342 18.8158 11.6753 18.9331 11.5581C19.0503 11.4408 19.2092 11.375 19.375 11.375C19.5408 11.375 19.6997 11.4408 19.8169 11.5581C19.9342 11.6753 20 11.8342 20 12V15.125C20 15.788 19.7366 15.4239 19.2678 16.8928C18.7989 17.3616 18.163 17.625 17.5 17.625H2.5C1.83696 17.625 1.20107 17.3616 0.732233 16.8928C0.263392 16.4239 0 15.788 0 15.125V12C0 11.8342 0.065848 11.6753 0.183058 11.5581C0.300269 11.4408 0.45924 11.375 0.625 11.375Z" />
                          <path d="M9.55829 13.8175C9.61635 13.8757 9.68532 13.9219 9.76125 13.9534C9.83718 13.9849 9.91858 14.0011 10.0008 14.0011C10.083 14.0011 10.1644 13.9849 10.2403 13.9534C10.3163 13.9219 10.3852 13.8757 10.4433 13.8175L14.1933 10.0675C14.3106 9.95014 14.3766 9.79097 14.3766 9.625C14.3766 9.45903 14.3106 9.29986 14.1933 9.1825C14.0759 9.06514 13.9168 8.99921 13.7508 8.99921C13.5848 8.99921 13.4256 9.06514 13.3083 9.1825L10.6258 11.8663V0.875C10.6258 0.70924 10.5599 0.550268 10.4427 0.433058C10.3255 0.315848 10.1666 0.25 10.0008 0.25C9.83503 0.25 9.67606 0.315848 9.55885 0.433058C9.44164 0.550268 9.37579 0.70924 9.37579 0.875V11.8663L6.69329 9.1825C6.57593 9.06514 6.41676 8.99921 6.25079 8.99921C6.08482 8.99921 5.92565 9.06514 5.80829 9.1825C5.69093 9.29986 5.625 9.45903 5.625 9.625C5.625 9.79097 5.69093 9.95014 5.80829 10.0675L9.55829 13.8175Z" />
                        </svg> Download Syllabus </a>
                    </div>
                    <div class="accordion accordion-flush" id="curriculumAccordionFlush">
                      <!-- Module 1 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-1">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-1" aria-expanded="false" aria-controls="flush-curriculum-1">
                            <div class="curriculum-number">
                              <span>1.</span> Penetration Testing Essentials
                            </div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-1" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-1" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Pen testing methodologies.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Legal considerations.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Scoping and rules of engagement.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Reporting basics.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 2 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-2">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-2" aria-expanded="false" aria-controls="flush-curriculum-2">
                            <div class="curriculum-number">
                              <span>2.</span> Penetration Testing Scoping and Engagement Methodology
                            </div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-2" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-2" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Defining test scope.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Client agreements.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Project planning.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Risk assessment.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 3 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-3">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-3" aria-expanded="false" aria-controls="flush-curriculum-3">
                            <div class="curriculum-number">
                              <span>3.</span> Open-Source Intelligence (OSINT) Methodology
                            </div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-3" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-3" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>OSINT tools and techniques.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Information gathering from public sources.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Social media reconnaissance.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Data analysis for targeting.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 4 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-4">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-4" aria-expanded="false" aria-controls="flush-curriculum-4">
                            <div class="curriculum-number">
                              <span>4.</span> Social Engineering Penetration Testing Methodology
                            </div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-4" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-4" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Social engineering techniques.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Phishing simulations.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Physical security testing.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Mitigation strategies.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 5 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-5">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-5" aria-expanded="false" aria-controls="flush-curriculum-5">
                            <div class="curriculum-number">
                              <span>5.</span> Network Penetration Testing Methodology - External
                            </div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-5" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-5" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>External network scanning.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Vulnerability exploitation.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Firewall bypassing.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Gaining initial access.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 6 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-6">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-6" aria-expanded="false" aria-controls="flush-curriculum-6">
                            <div class="curriculum-number">
                              <span>6.</span> Network Penetration Testing Methodology - Internal
                            </div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-6" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-6" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Internal scanning techniques.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Pivoting and lateral movement.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Privilege escalation.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Domain dominance.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 7 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-7">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-7" aria-expanded="false" aria-controls="flush-curriculum-7">
                            <div class="curriculum-number">
                              <span>7.</span> Network Penetration Testing Methodology - Perimeter Devices
                            </div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-7" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-7" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Firewall testing.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>IDS/IPS evasion.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Router/switch exploitation.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Perimeter defenses assessment.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 8 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-8">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-8" aria-expanded="false" aria-controls="flush-curriculum-8">
                            <div class="curriculum-number">
                              <span>8.</span> Web Application Penetration Testing Methodology
                            </div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-8" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-8" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>OWASP Top 10 testing.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>SQL injection exploits.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>XSS and CSRF attacks.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Secure coding review.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 9 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-9">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-9" aria-expanded="false" aria-controls="flush-curriculum-9">
                            <div class="curriculum-number">
                              <span>9.</span> Wireless Penetration Testing Methodology
                            </div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-9" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-9" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Wireless protocol analysis.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>WPA cracking techniques.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Rogue AP detection.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Secure wireless deployment.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 10 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-10">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-10" aria-expanded="false" aria-controls="flush-curriculum-10">
                            <div class="curriculum-number">
                              <span>10.</span> IoT Penetration Testing Methodology
                            </div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-10" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-10" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>IoT device exploitation.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Firmware analysis.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Protocol testing (MQTT).</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>IoT security best practices.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 11 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-11">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-11" aria-expanded="false" aria-controls="flush-curriculum-11">
                            <div class="curriculum-number">
                              <span>11.</span> OT/SCADA Penetration Testing Methodology
                            </div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-11" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-11" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>OT network mapping.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>SCADA protocol exploits.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>PLC vulnerabilities.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Safety considerations.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 12 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-12">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-12" aria-expanded="false" aria-controls="flush-curriculum-12">
                            <div class="curriculum-number">
                              <span>12.</span> Cloud Penetration Testing Methodology
                            </div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-12" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-12" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Cloud misconfiguration exploits.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>AWS/Azure testing.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Identity management attacks.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Cloud security best practices.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 13 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-13">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-13" aria-expanded="false" aria-controls="flush-curriculum-13">
                            <div class="curriculum-number">
                              <span>13.</span> Binary Analysis and Exploitation
                            </div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-13" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-13" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Reverse engineering binaries.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Buffer overflow exploits.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Format string vulnerabilities.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Mitigation techniques.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 14 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-14">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-14" aria-expanded="false" aria-controls="flush-curriculum-14">
                            <div class="curriculum-number">
                              <span>14.</span> Report Writing and Post-Testing Actions
                            </div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-14" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-14" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Professional report structure.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Finding prioritization.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Remediation recommendations.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Post-test cleanup.</li>
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
            <section class="contentcard lazy-section">
              <h2 class="heading-main text-center">Meet Our <span class="red-color">Expert Trainers</span>
              </h2>
              <p class="description text-center">At WebAsha Training Institute, our ECSA instructors are seasoned experts dedicated to providing methodology-focused, career-driven education in penetration testing.</p>
              <ul>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Simplified Instruction:</b> Break down complex concepts into clear, understandable lessons.
                </li>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Hands-On Training:</b> Engage in practical labs designed for Red Team and Blue Team roles.
                </li>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Personalized Support:</b> Benefit from tailored one-on-one guidance to meet your objectives.
                </li>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Career & Project Guidance:</b> Receive assistance with projects and interview preparation.
                </li>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Industry Expertise:</b> Leverage trainers' decade-long experience in ethical hacking.
                </li>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Certified Professionals:</b> Learn from experts holding CEH, CISSP, and OSCP credentials.
                </li>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Operational Experience:</b> Gain insights from active participation in Red Team/Blue Team simulations.
                </li>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Proven Success:</b> Join over 1,000 students trained each year.
                </li>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Corporate Collaboration:</b> Benefit from trainers' work with leading firms like IBM, Dell, and Wipro.
                </li>
              </ul>
            </section>
          </div>
          <!-- Sidebar 1 --> <?php include("include/course-sidebar1.php"); ?>
        </div>
      </div>
      <!-- Newsletter -->
      <section class="newsletter course-newsletter lazy-section" id="sticky-end-section1"> <?php include("include/self-assessment.php"); ?> </section>
      <div class="container">
        <div class="row">
          <!-- Main Content -->
          <div class="col-lg-8 col-sm-12" id="sticky-start-section2">
            <!-- Bootcamp -->
            <section class="lazy-section">
              <h2 class="heading-main text-center mb-0">EC-Council Certified Security Analyst ECSA <span class="red-color">Certification Bootcamp</span>
              </h2>
              <p class="description mb-0">The ECSA certification from EC-Council validates advanced penetration testing skills with global recognition.</p>
              <ul>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Globally Recognized Certification:</b> Elevates your professional profile.
                </li>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Hands-On Requirement:</b> Submit comprehensive pen test reports.
                </li>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Valuable for Job Seekers:</b> Demonstrates expert-level capabilities.
                </li>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Prerequisites:</b> CEH certification required.
                </li>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>International Validity:</b> 3 years, renewable.
                </li>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Exam Delivered Online:</b> Flexible 4-hour format.
                </li>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Language Support:</b> English primary.
                </li>
              </ul>
            </section>
            <!-- Certified Candidates -->
            <section class="course-certified-candidates lazy-section" id="exam-certification"> <?php include("include/cert/ecsa.php"); ?> </section>
            <!-- Exam Info -->
            <section class="course-exam-information lazy-section">
              <h2 class="heading-main text-center">ECSA Exam <span class="red-color">Details and Format</span>
              </h2>
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
                      <td>
                        <strong>Exam Name</strong>
                      </td>
                      <td>EC-Council Certified Security Analyst (ECSA)</td>
                    </tr>
                    <tr>
                      <td>
                        <strong>Exam Duration</strong>
                      </td>
                      <td>240 Minutes</td>
                    </tr>
                    <tr>
                      <td>
                        <strong>Number of Questions</strong>
                      </td>
                      <td>Multiple Practical Challenges</td>
                    </tr>
                    <tr>
                      <td>
                        <strong>Exam Fee</strong>
                      </td>
                      <td>Varies by region (₹50,000 + 18% GST in India)</td>
                    </tr>
                    <tr>
                      <td>
                        <strong>Validity</strong>
                      </td>
                      <td>3 Years</td>
                    </tr>
                    <tr>
                      <td>
                        <strong>Exam Code</strong>
                      </td>
                      <td>412-79</td>
                    </tr>
                    <tr>
                      <td>
                        <strong>Exam Format</strong>
                      </td>
                      <td>Practical Report Submission</td>
                    </tr>
                    <tr>
                      <td>
                        <strong>Passing Score</strong>
                      </td>
                      <td>70%</td>
                    </tr>
                    <tr>
                      <td>
                        <strong>Eligibility / Prerequisite</strong>
                      </td>
                      <td>CEH Certification</td>
                    </tr>
                    <tr>
                      <td>
                        <strong>Exam Languages</strong>
                      </td>
                      <td>English</td>
                    </tr>
                    <tr>
                      <td>
                        <strong>Exam Mode</strong>
                      </td>
                      <td>Remote Proctoring Services</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>
            <!-- Passing Score -->
            <section class="course-ceh-group lazy-section">
              <h4 class="text-center mb-0">Passing Criteria for ECSA Exam</h4>
              <p class="description text-center mb-0">To achieve <b>ECSA certification</b>, score at least <b>70%</b> on the practical report, offered by <b>WebAsha Technologies</b> in Pune. This <b>240-minute</b> test requires submitting a penetration report. Success demands advanced skills, evaluated via <b>remote proctoring</b> in <b>English</b>. Begin with <b>WebAsha</b> for mastery. </p>
              <div class="button-group">
                <a href="https://api.whatsapp.com/send?phone=+91-8010911256&text=Hello%20WebAsha,%20I%20want%20Discounted%20Exam%20Voucher" target="_blank" rel="noopener" aria-label="Chat on WhatsApp" class="btn-whatsapp text-decoration-none">
                  <i class="fab fa-whatsapp"></i> WhatsApp </a>
                <a href="tel:+918485847920" class="btn-phone text-decoration-none">
                  <i class="fa-solid fa-phone"></i> +91 848584 7920 </a>
              </div>
            </section>
            <!-- Salary -->
            <section class="contentcard lazy-section">
              <div class="content-container" id="contentContainer4">
                <h2 class="heading-main text-center">Job Roles and Salary Outlook After <span class="red-color">ECSA</span>
                </h2>
                <p class="description text-center">ECSA certification unlocks advanced security analysis roles in 2025's IT sector.</p>
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
                        <td>
                          <strong>Security Analyst</strong>
                        </td>
                        <td>Analyze and mitigate security risks.</td>
                        <td>Fresher: ₹4–6 LPA <br>Experienced: ₹10–18 LPA </td>
                      </tr>
                      <tr>
                        <td>
                          <strong>Penetration Tester</strong>
                        </td>
                        <td>Conduct security assessments.</td>
                        <td>Fresher: ₹5–7 LPA <br>Experienced: ₹12–20 LPA </td>
                      </tr>
                      <tr>
                        <td>
                          <strong>Cybersecurity Consultant</strong>
                        </td>
                        <td>Advise on security strategies.</td>
                        <td>Fresher: ₹4.5–6.5 LPA <br>Experienced: ₹15–25 LPA </td>
                      </tr>
                      <tr>
                        <td>
                          <strong>Vulnerability Analyst</strong>
                        </td>
                        <td>Identify system weaknesses.</td>
                        <td>Fresher: ₹5–8 LPA <br>Experienced: ₹15–25 LPA </td>
                      </tr>
                      <tr>
                        <td>
                          <strong>Red Team Operator</strong>
                        </td>
                        <td>Simulate advanced attacks.</td>
                        <td>Fresher: ₹4–6 LPA <br>Experienced: ₹10–18 LPA </td>
                      </tr>
                      <tr>
                        <td>
                          <strong>Security Engineer</strong>
                        </td>
                        <td>Build secure systems.</td>
                        <td>Fresher: ₹6–8 LPA <br>Experienced: ₹12–20 LPA </td>
                      </tr>
                      <tr>
                        <td>
                          <strong>Incident Response Analyst</strong>
                        </td>
                        <td>Respond to security incidents.</td>
                        <td>Fresher: ₹5–7 LPA <br>Experienced: ₹15–25 LPA </td>
                      </tr>
                      <tr>
                        <td>
                          <strong>Ethical Hacker</strong>
                        </td>
                        <td>Perform authorized hacks.</td>
                        <td>Fresher: ₹4–6 LPA <br>Experienced: ₹10–18 LPA </td>
                      </tr>
                      <tr>
                        <td>
                          <strong>Security Architect</strong>
                        </td>
                        <td>Design security frameworks.</td>
                        <td>Fresher: ₹7–10 LPA <br>Experienced: ₹20–30 LPA </td>
                      </tr>
                      <tr>
                        <td>
                          <strong>Compliance Officer</strong>
                        </td>
                        <td>Ensure regulatory compliance.</td>
                        <td>Fresher: ₹6–9 LPA <br>Experienced: ₹15–25 LPA </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <p class="description">
                  <b>Note:</b> Salaries vary based on experience, location, and company; ECSA certification boosts earning potential in 2025.
                </p>
                <p class="description">India's cybersecurity sector is booming, with millions of open roles by 2025.</p>
                <div class="gradient-overlay"></div>
              </div>
              <button class="toggle-button" onclick="toggleContent('contentContainer4', this)">View More</button>
            </section>
            <section class="contentcard lazy-section">
              <div class="content-container" id="contentContainer5">
                <h2 class="heading-main text-center">Career Benefits of <span class="red-color">ECSA</span>
                </h2>
                <p class="description text-center">In 2025's threat landscape, ECSA skills are crucial for security analysis careers.</p>
                <ul>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>High Industry Demand:</b> Conduct advanced security assessments.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Excellent Salary Potential:</b> Access lucrative roles.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Multiple Career Paths:</b> Advance to Pen Tester or Security Engineer.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Global Opportunities:</b> Open doors internationally.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Fast Application of Skills:</b> Apply methodologies immediately.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Wide-Reaching Impact:</b> Cover network, web, wireless testing.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Career Advancement:</b> Progress to senior positions.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Freelance & Consulting Options:</b> Offer expert services.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Startup & Innovation Potential:</b> Build secure systems.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Future-Proof Expertise:</b> Adapt to evolving threats.
                  </li>
                </ul>
                <div class="gradient-overlay"></div>
              </div>
              <button class="toggle-button" onclick="toggleContent('contentContainer5', this)">View More</button>
            </section>
            <section class="contentcard lazy-section">
              <div class="content-container" id="contentContainer6">
                <h2 class="heading-main text-center">Why Choose ECSA Training at <span class="red-color">WebAsha Technologies in Pune</span>
                </h2>
                <p class="description text-center">Elevate your pen testing career with ECSA training at WebAsha Technologies in Pune, a leading cybersecurity hub.</p>
                <ul>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Expert Training:</b> Learn from certified analysts.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Comprehensive Curriculum:</b> Methodology-focused content.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Hands-On Projects:</b> Real-world testing labs.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Flexible Schedule:</b> Fit your routine.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Modern Infrastructure:</b> Advanced tools available.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Statewide Recognition:</b> Trusted in Maharashtra.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Tech Hub Location:</b> Network in Pune's IT scene.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Career Ready:</b> Prepare for ECSA cert.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Specialized Skills:</b> Master advanced testing.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Proven Results:</b> Join successful alumni.
                  </li>
                </ul>
                <div class="gradient-overlay"></div>
              </div>
              <button class="toggle-button" onclick="toggleContent('contentContainer6', this)">View More</button>
            </section>
          </div>
          <!-- Sidebar -->
          <div class="col-lg-4 col-sm-12 col-12 sticky-sidebar1 lazy-section" id="sticky-sidebar2">
            <div class="course-subsciption sticky-sidebar-container"> <?php include("include/course-sidebar2.php"); ?> </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Screenshots -->
    <section class="career-straight lazy-section"> <?php include("include/career-straight.php"); ?> </section>
    <!-- Alumni -->
    <section class="course-discover-profile lazy-section">
      <div class="section-header text-center">
        <span class="section-badge">Recent Career Success Stories</span>
      </div>
      <h2 class="heading-main-1 text-center">Explore Alumni with Profiles <span class="red-color">Like Yours</span>
      </h2>
      <p class="desc text-center">Learn about their career paths, specialties, and accomplishments.</p> <?php include("include/alumni.php"); ?>
    </section>
    <!-- Related Courses -->
    <section class="course-related-courses lazy-section visible">
      <div class="section-header text-center mb-4">
        <span class="section-badge">Related Courses</span>
        <h2 class="heading-main-1 text-center">Explore <span class="red-color">Related Courses</span>
        </h2>
        <p class="desc text-center">Find additional courses to boost your career and skills.</p>
      </div> <?php include("include/related-courses.php"); ?>
    </section>
    <!-- FAQs -->
    <section class="course-webasha-faq lazy-section" id="faqs">
      <div class="container mt-4 mb-4">
        <div class="section-header text-center mb-4">
          <span class="section-badge">FAQs</span>
          <h2 class="heading-main-1 text-center">WebAsha FAQs <span class="red-color">(Frequently Asked Questions)</span>
          </h2>
        </div>
        <div class="all-theme-accordion" id="content">
          <div class="accordion accordion-flush" id="coursefaqAccordionFlush">
            <!-- FAQ 1: Overview of the ECSA course -->
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq1" aria-expanded="false" aria-controls="flush-coursefaq1">What is included in the ECSA course?</button>
  </h2>
  <div id="flush-coursefaq1" class="accordion-collapse collapse show" data-bs-parent="#coursefaqAccordionFlush">
    <div class="accordion-body pt-0">
      <p class="description mb-0">The ECSA course covers penetration testing methodologies, advanced security analysis, and reporting, preparing for EC-Council certification.</p>
    </div>
  </div>
</div>

<!-- FAQ 2: Eligibility criteria -->
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq2" aria-expanded="false" aria-controls="flush-coursefaq2">Who can enroll in ECSA training?</button>
  </h2>
  <div id="flush-coursefaq2" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
    <div class="accordion-body pt-0">
      <p class="description mb-0">ECSA training is for ethical hackers and pen testers with CEH; suitable for security professionals.</p>
    </div>
  </div>
</div>

<!-- FAQ 3: Certification validity -->
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq3" aria-expanded="false" aria-controls="flush-coursefaq3">How long is the ECSA certification valid?</button>
  </h2>
  <div id="flush-coursefaq3" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
    <div class="accordion-body pt-0">
      <p class="description mb-0">The ECSA certification is valid for 3 years, renewable through ECE credits.</p>
    </div>
  </div>
</div>

<!-- FAQ 4: Exam format -->
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq4" aria-expanded="false" aria-controls="flush-coursefaq4">What is the format of the ECSA exam?</button>
  </h2>
  <div id="flush-coursefaq4" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
    <div class="accordion-body pt-0">
      <p class="description mb-0">ECSA exam requires submitting a practical penetration test report.</p>
    </div>
  </div>
</div>

<!-- FAQ 5: Passing score -->
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq5" aria-expanded="false" aria-controls="flush-coursefaq5">What is the passing score for ECSA?</button>
  </h2>
  <div id="flush-coursefaq5" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
    <div class="accordion-body pt-0">
      <p class="description mb-0">Minimum 70% based on report evaluation.</p>
    </div>
  </div>
</div>

<!-- FAQ 6: Exam languages -->
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq6" aria-expanded="false" aria-controls="flush-coursefaq6">In which languages is the ECSA exam available?</button>
  </h2>
  <div id="flush-coursefaq6" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
    <div class="accordion-body pt-0">
      <p class="description mb-0">The ECSA exam is in English.</p>
    </div>
  </div>
</div>

<!-- FAQ 7: Training duration -->
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq7" aria-expanded="false" aria-controls="flush-coursefaq7">How long does ECSA training take?</button>
  </h2>
  <div id="flush-coursefaq7" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
    <div class="accordion-body pt-0">
      <p class="description mb-0">Typically 5-7 days for intensive sessions.</p>
    </div>
  </div>
</div>

<!-- FAQ 8: Cost of certification -->
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq8" aria-expanded="false" aria-controls="flush-coursefaq8">What is the cost of the ECSA certification?</button>
  </h2>
  <div id="flush-coursefaq8" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
    <div class="accordion-body pt-0">
      <p class="description mb-0">Approximately ₹50,000 + 18% GST in India for training and exam.</p>
    </div>
  </div>
</div>

<!-- FAQ 9: Online vs in-person training -->
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq9" aria-expanded="false" aria-controls="flush-coursefaq9">What’s the difference between online and in-person ECSA training?</button>
  </h2>
  <div id="flush-coursefaq9" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
    <div class="accordion-body pt-0">
      <p class="description mb-0">Online provides virtual flexibility; in-person offers collaborative hands-on in Pune.</p>
    </div>
  </div>
</div>

<!-- FAQ 10: Prerequisites for exam -->
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq10" aria-expanded="false" aria-controls="flush-coursefaq10">Are there any prerequisites for the ECSA exam?</button>
  </h2>
  <div id="flush-coursefaq10" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
    <div class="accordion-body pt-0">
      <p class="description mb-0">CEH certification is required for the exam.</p>
    </div>
  </div>
</div>

<!-- FAQ 11: Recertification process -->
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq11" aria-expanded="false" aria-controls="flush-coursefaq11">How can I recertify for ECSA?</button>
  </h2>
  <div id="flush-coursefaq11" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
    <div class="accordion-body pt-0">
      <p class="description mb-0">Earn ECE credits or retake exam every 3 years.</p>
    </div>
  </div>
</div>

<!-- FAQ 12: Job opportunities -->
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq12" aria-expanded="false" aria-controls="flush-coursefaq12">What job roles can I pursue with ECSA?</button>
  </h2>
  <div id="flush-coursefaq12" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
    <div class="accordion-body pt-0">
      <p class="description mb-0">Security Analyst, Pen Tester, with salaries up to ₹22+ LPA.</p>
    </div>
  </div>
</div>

<!-- FAQ 13: Training locations -->
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq13" aria-expanded="false" aria-controls="flush-coursefaq13">Where is ECSA training offered?</button>
  </h2>
  <div id="flush-coursefaq13" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
    <div class="accordion-body pt-0">
      <p class="description mb-0">Online globally and in-person in Pune at WebAsha Technologies.</p>
    </div>
  </div>
</div>

<!-- FAQ 14: Study materials -->
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq14" aria-expanded="false" aria-controls="flush-coursefaq14">What study materials are provided for ECSA?</button>
  </h2>
  <div id="flush-coursefaq14" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
    <div class="accordion-body pt-0">
      <p class="description mb-0">E-books, lab manuals, access to iLabs, and online resources.</p>
    </div>
  </div>
</div>

<!-- FAQ 15: Exam retake policy -->
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq15" aria-expanded="false" aria-controls="flush-coursefaq15">What is the policy for retaking the ECSA exam?</button>
  </h2>
  <div id="flush-coursefaq15" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
    <div class="accordion-body pt-0">
      <p class="description mb-0">Retake after 14 days with additional fees per attempt.</p>
    </div>
  </div>
</div>

<!-- FAQ 16: Career support -->
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq16" aria-expanded="false" aria-controls="flush-coursefaq16">Does ECSA offer career support?</button>
  </h2>
  <div id="flush-coursefaq16" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
    <div class="accordion-body pt-0">
      <p class="description mb-0">Yes, including resume building, interview prep, and job guidance.</p>
    </div>
  </div>
</div>

<!-- FAQ 17: AI integration -->
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq17" aria-expanded="false" aria-controls="flush-coursefaq17">How does ECSA incorporate practical skills?</button>
  </h2>
  <div id="flush-coursefaq17" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
    <div class="accordion-body pt-0">
      <p class="description mb-0">Through methodology-based labs and report submission.</p>
    </div>
  </div>
</div>

<!-- FAQ 18: Accreditation -->
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq18" aria-expanded="false" aria-controls="flush-coursefaq18">Is ECSA accredited?</button>
  </h2>
  <div id="flush-coursefaq18" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
    <div class="accordion-body pt-0">
      <p class="description mb-0">Yes, by EC-Council, with DoD 8140 recognition.</p>
    </div>
  </div>
</div>

<!-- FAQ 19: Group discounts -->
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq19" aria-expanded="false" aria-controls="flush-coursefaq19">Are there group discounts for ECSA training?</button>
  </h2>
  <div id="flush-coursefaq19" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
    <div class="accordion-body pt-0">
      <p class="description mb-0">Yes, for groups of 3+; contact WebAsha for details.</p>
    </div>
  </div>
</div>

<!-- FAQ 20: Post-training support -->
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq20" aria-expanded="false" aria-controls="flush-coursefaq20">What support is offered after ECSA training?</button>
  </h2>
  <div id="flush-coursefaq20" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
    <div class="accordion-body pt-0">
      <p class="description mb-0">Lifetime updates, community access, and mentorship.</p>
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
      "name": "What is included in the ECSA course?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The ECSA course covers penetration testing methodologies, advanced security analysis, and reporting, preparing for EC-Council certification."
      }
    },
    {
      "@type": "Question",
      "name": "Who can enroll in ECSA training?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "ECSA training is for ethical hackers and pen testers with CEH; suitable for security professionals."
      }
    },
    {
      "@type": "Question",
      "name": "How long is the ECSA certification valid?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The ECSA certification is valid for 3 years, renewable through ECE credits."
      }
    },
    {
      "@type": "Question",
      "name": "What is the format of the ECSA exam?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "ECSA exam requires submitting a practical penetration test report."
      }
    },
    {
      "@type": "Question",
      "name": "What is the passing score for ECSA?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Minimum 70% based on report evaluation."
      }
    },
    {
      "@type": "Question",
      "name": "In which languages is the ECSA exam available?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The ECSA exam is in English."
      }
    },
    {
      "@type": "Question",
      "name": "How long does ECSA training take?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Typically 5-7 days for intensive sessions."
      }
    },
    {
      "@type": "Question",
      "name": "What is the cost of the ECSA certification?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Approximately ₹50,000 + 18% GST in India for training and exam."
      }
    },
    {
      "@type": "Question",
      "name": "What’s the difference between online and in-person ECSA training?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Online provides virtual flexibility; in-person offers collaborative hands-on in Pune."
      }
    },
    {
      "@type": "Question",
      "name": "Are there any prerequisites for the ECSA exam?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "CEH certification is required for the exam."
      }
    },
    {
      "@type": "Question",
      "name": "How can I recertify for ECSA?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Earn ECE credits or retake exam every 3 years."
      }
    },
    {
      "@type": "Question",
      "name": "What job roles can I pursue with ECSA?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Security Analyst, Pen Tester, with salaries up to ₹22+ LPA."
      }
    },
    {
      "@type": "Question",
      "name": "Where is ECSA training offered?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Online globally and in-person in Pune at WebAsha Technologies."
      }
    },
    {
      "@type": "Question",
      "name": "What study materials are provided for ECSA?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "E-books, lab manuals, access to iLabs, and online resources."
      }
    },
    {
      "@type": "Question",
      "name": "What is the policy for retaking the ECSA exam?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Retake after 14 days with additional fees per attempt."
      }
    },
    {
      "@type": "Question",
      "name": "Does ECSA offer career support?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, including resume building, interview prep, and job guidance."
      }
    },
    {
      "@type": "Question",
      "name": "How does ECSA incorporate practical skills?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Through methodology-based labs and report submission."
      }
    },
    {
      "@type": "Question",
      "name": "Is ECSA accredited?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, by EC-Council, with DoD 8140 recognition."
      }
    },
    {
      "@type": "Question",
      "name": "Are there group discounts for ECSA training?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, for groups of 3+; contact WebAsha for details."
      }
    },
    {
      "@type": "Question",
      "name": "What support is offered after ECSA training?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Lifetime updates, community access, and mentorship."
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
        <h2 class="heading-main text-center">Browse ECSA related Resources</h2>
        <?php include("include/related-resources.php"); ?>

      </div>
    </div>
  </div>
</section>
    <?php include("include/enquiry-modal.php"); ?>
    <?php include("include/syllabus-modal.php"); ?>
  </main>
    <!-- Footer --> <?php include("include/footer.php"); ?> <?php include("include/footerlink.php"); ?>
  </body>
</html>