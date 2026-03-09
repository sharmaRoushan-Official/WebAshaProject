<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include common header links / global meta / favicon / CSS / JS -->
    <?php include("include/headerlink.php"); ?>
    <!-- Page-specific metadata (PHP Training) -->
    <?php
      $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
      $current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
    <title>PHP Programming Training in Pune | Job Oriented Course - WebAsha Technologies</title>
    <meta name="description" content="Join WebAsha Technologies for PHP Training in Pune. Master PHP programming and web development with hands-on labs, expert mentorship, and preparation for certifications like Zend Certified PHP Engineer in 2025.">
    <meta name="keywords" content="PHP Training Pune, Job Oriented Course, Zend Certified PHP Engineer, Web Development Course, PHP Exam Prep Pune, PHP Programming Training">
    <!-- Canonical URL to avoid duplicate content -->
    <link rel="canonical" href="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <!-- Page-specific Open Graph for social sharing -->
    <meta property="og:title" content="PHP Programming Training in Pune | Job Oriented Course - WebAsha Technologies">
    <meta property="og:description" content="Advance your web development career with WebAsha Technologies’ PHP Training in Pune. Build expertise through practical labs and expert guidance for Zend Job Oriented success.">
    <meta property="og:url" content="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <meta property="og:image" content="https://training.webasha.com/assets/img/course/web-development/php.webp">
    <meta property="og:image:alt" content="PHP Programming Training - Job Oriented Course in Pune">
    <meta property="og:type" content="website">
    <!-- Page-specific Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="PHP Programming Training in Pune | Job Oriented Course - WebAsha Technologies">
    <meta name="twitter:description" content="Become a Zend Certified PHP Engineer with WebAsha Technologies in Pune. Hands-on PHP training and exam prep for a thriving web development career in 2025.">
    <meta name="twitter:image" content="https://training.webasha.com/assets/img/course/web-development/php.webp">
    <!-- Page-specific JSON-LD: Course schema for enhanced search visibility -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Course",
      "name": "PHP Programming and Certification Training",
      "description": "Develop advanced PHP programming and web development skills with WebAsha Technologies in Pune. This course offers hands-on labs, expert instruction, and comprehensive preparation for certifications like Zend Certified PHP Engineer in 2025.",
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
    <!-- Banner Section: Showcasing PHP course introduction -->
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
                <li class="breadcrumb-item active" aria-current="page">PHP Training</li>
              </ol>
            </nav>
            <!-- Banner Content -->
            <div class="banner-course-content">
              <!-- Course At-a-Glance -->
              <section class="at-a-glance text-light">
                <h1 class="heading-main-1 text-white">PHP Training: Job Oriented Course</h1>
                <!-- Review Card -->
                <div class="banner-review-card">
                  <div class="enrolled-group d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700" viewBox="0 0 24 24" aria-hidden="true" role="img" class="me-2">
                      <path d="M16 11c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-8 0c1.7 0 3-1.3 3-3S9.7 5 8 5 5 6.3 5 8s1.3 3 3 3zm0 2c-2.3 0-7 1.2-7 3.5V20h14v-3.5C15 14.2 10.3 13 8 13zm8 0c-.3 0-.7 0-1 .1 1.2.8 2 2.1 2 3.4V20h6v-3.5c0-2.3-4.7-3.5-7-3.5z" />
                    </svg>
                    <span>2,500 Participants Enrolled</span>
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
                      <p>4.9 out of 5 Based on 56,988 Reviews</p>
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
                  The <strong>PHP Training: Job Oriented Course</strong> at
                  <span class="red-color">WebAsha Technologies</span> in Pune provides comprehensive, hands-on training for aspiring web developers. This course covers core PHP, object-oriented programming, MySQL integration, MVC frameworks like Laravel, API development, and secure coding practices using tools such as XAMPP, Composer, and PHPUnit to build dynamic web applications.
                  <br><br>
                  The Job Oriented is a valuable credential for professionals seeking to excel in web development. With expert-led instruction, real-world projects, and practical training aligned with industry standards, this course ensures you are well-prepared to develop robust web applications and achieve career growth. Whether you're advancing your web development skills or pursuing a career in backend development, WebAsha Technologies provides the tools and mentorship to succeed.
                  <br><br>
                  Enroll now to master PHP programming and elevate your career in web development with a trusted training provider.
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
                      <td class="text-light">Job Oriented</td>
                    </tr>
                    <tr>
                      <td class="fw-semibold text-warning">Institute:</td>
                      <td class="text-light">WebAsha Technologies, Pune</td>
                    </tr>
                    <tr>
                      <td class="fw-semibold text-warning">Includes:</td>
                      <td class="text-light">Hands-on Projects, Real-World PHP Tools, Practical Training</td>
                    </tr>
                  </tbody>
                </table>
              </section>
              <!-- Buttons -->
              <div class="button-group mt-4 mb-4">
                <a href="https://api.whatsapp.com/send?phone=+91-8010911256&text=Hello%20WebAsha,%20I%20want%20PHP%20Info" class="btn-whatsapp text-decoration-none" aria-label="Contact via WhatsApp">
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
                  <source srcset="assets/img/course/web-development/php.webp" type="image/webp">
                  <img src="assets/img/course/web-development/php.webp" alt="PHP Course Preview Thumbnail" width="360" height="220" loading="lazy" decoding="async" class="img-fluid rounded shadow-sm">
                </picture>
                <button type="button" class="video-btn position-absolute top-50 start-50 translate-middle" aria-label="Play PHP course promo video" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="ERtp4zua0-s">
                  <svg class="play-icon" viewBox="0 0 64 64" width="64" height="64" aria-hidden="true" focusable="false">
                    <circle cx="32" cy="32" r="32" fill="rgba(0,0,0,0.55)" />
                    <path d="M26 20 L45 32 L26 44 z" fill="#fff" />
                  </svg>
                </button>
              </div>
              <div class="pera-group">
                <p class="desc">Leading Web Development Training Platform</p>
                <p>Have Questions? Consult Our Experts</p>
              </div>
              <div class="button-group">
                <a href="#" class="animated-button1 mx-auto d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in PHP Course">
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
                    <h2>2,500+</h2>
                    <p>Professionals Trained</p>
                  </div>
                </div>
                <div class="item">
                  <img src="assets/imgs/fi-2.png" alt="Batches per Month" width="73" height="73" loading="lazy">
                  <div class="content">
                    <h2>10+</h2>
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
                    <h2>600+</h2>
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
        { "@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [ { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://training.webasha.com/" }, { "@type": "ListItem", "position": 2, "name": "PHP Training: Job Oriented Course", "item": "<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>" } ] }
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
            <button type="button" class="btn btn-enroll" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in PHP Course">Enroll Now</button>
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download PHP Syllabus">View Syllabus</button>
          </div>
        </div>
      </div>
    </section>
    <!-- Lazy Sections Start -->
    <!-- Brands -->
    <section class="our-learners section-header text-center lazy-section">
      <?php include("include/programming/brands.php"); ?>
    </section>
    <!-- Recent Placements Video Testimonials Section -->
    <section class="course-recent-reviews section-header text-center lazy-section" id="sticky-sidebar2">
      <span class="section-badge">Recent Placements Testimonials</span>
      <h2 class="heading-main-1 text-white text-center">PHP Programming <span class="red-color">Recent Reviews</span></h2>
      <?php include("include/programming/video-reviews.php"); ?>
    </section>
    <!-- Testimonials -->
    <section class="success-speaks-reviwe course-speaks section-header text-center lazy-section">
      <div class="container">
        <span class="section-badge">Recent Placements Testimonials</span>
        <h2 class="heading-main text-center mb-5">PHP Programming <span class="red-color">Reviews</span></h2>
        <?php include("include/programming/text-reviews.php"); ?>
      </div>
    </section>
    <!-- Career Roadmap -->
    <section class="course-technologies-placement lazy-section" id="placement-reviews">
      <?php include("include/programming/placement.php"); ?>
    </section>
    <!-- Key Features -->
    <section class="lazy-section">
      <div class="training-features section-header text-center mt-5 lazy-section">
        <div class="container">
          <link rel="preload" href="https://i.ibb.co/5X09hRg/lab.gif" as="image" fetchpriority="high">
          <span class="section-badge">Training Key Features</span>
          <h2 class="heading-main-1 text-center">PHP Course <span class="red-color">Training Key Features</span></h2>
          <p class="description text-center mb-5">Explore the unique benefits of our PHP courses designed for success in Pune’s web development sector.</p>
          <?php include("include/programming/key-features.php"); ?>
        </div>
      </div>
    </section>
    <!-- Why Choose Us -->
    <section class="py-5 course-comparison-section lazy-section">
      <?php include("include/programming/why-webasha.php"); ?>
    </section>
    <!-- Training Calendar -->
    <section class="py-5 lazy-section" id="training-options">
      <?php include("include/programming/batchschedule.php"); ?>
    </section>
    <!-- Main Course Content -->
    <main>
      <div class="container">
        <div class="row">
          <!-- Left -->
          <div class="col-lg-8 col-12" id="sticky-start-section1">
            <!-- Course Overview Start -->
            <section class="course-training-overview lazy-section" id="overview">
              <?php include("include/programming/slider/php.php"); ?>
            </section>
            <!-- Course Prerequisites Start -->
            <section class="contentcard lazy-section">
              <div class="content-container" id="contentContainer1">
                <div class="summary-details">
                  <h2 class="heading-main text-center">PHP Programming <span class="red-color">Training Overview</span></h2>
                  <p class="description mb-0">Advance your <b>web development expertise</b> with our <b>Classroom / Online PHP Training</b> at <b>WebAsha Technologies</b>. Gain <b>hands-on mastery</b> in PHP programming and prepare for <b>industry-recognized certifications</b> like Zend Certified PHP Engineer to excel in 2025's web development landscape.</p>
                </div>
                <h5 class="bold-text mb-2 mt-2">PHP Training Overview:</h5>
                <p class="description mb-0">The <b>PHP Training</b> provides comprehensive training in PHP programming, emphasizing dynamic web application development, database integration, MVC frameworks, and API creation. This program prepares you for certifications and real-world web development challenges.</p>
                <h5 class="bold-text mb-2 mt-2">Intended Audience:</h5>
                <p class="description mb-0">Targeted at <b>web developers, programmers, and IT professionals</b> seeking advanced PHP skills. Perfect for those with basic programming knowledge aiming for certification in Pune.</p>
                <h5 class="bold-text mb-2 mt-2">Topics Covered:</h5>
                <ul>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Introduction to PHP and Web Development</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Core PHP Programming</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Object-Oriented Programming in PHP</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Database Integration with MySQL</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i>MVC Frameworks (Laravel, CodeIgniter)</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i>API Development and RESTful Services</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Secure Coding Practices</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i>PHP Testing with PHPUnit</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Content Management Systems (WordPress, Drupal)</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Job Oriented Preparation</li>
                </ul>
                <h5 class="bold-text mb-2 mt-2">Requirements:</h5>
                <p class="description mb-0">Learners should have <b>basic programming knowledge</b> (e.g., HTML, CSS, or JavaScript). A stable internet connection and a suitable computer for coding labs are essential.</p>
                <h5 class="bold-text mb-2 mt-2">Pre-Requisites:</h5>
                <p class="description mb-0">Basic understanding of web development or programming recommended; no strict requirements for training.</p>
                <h5 class="bold-text mb-2 mt-2">Career Benefits:</h5>
                <p class="description mb-0">Pursue roles like <b>PHP Developer, Web Developer, Backend Developer</b> with salaries from ₹4-12+ LPA. Job Oriented demonstrates advanced skills, opening doors to high-demand positions.</p>
                <div class="gradient-overlay"></div>
              </div>
              <button class="toggle-button" onclick="toggleContent('contentContainer1', this)">View More</button>
            </section>
            <!-- PHP Tools Covered Start -->
            <section class="contentcard lazy-section">
              <div class="content-container" id="contentContainer2">
                <div class="summary-details">
                  <h2 class="heading-main text-center">PHP Course Training <span class="red-color">Tools Covered</span></h2>
                  <img src="https://training.webasha.com/assets/img/course/web-development/php-tools.webp" alt="PHP Course Training Tools Overview" width="900" height="400" class="img-fluid mb-3 rounded shadow-sm" loading="lazy">
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
                        <td><strong>Development Environments</strong></td>
                        <td>XAMPP, WAMP, MAMP, Laravel Homestead</td>
                      </tr>
                      <tr>
                        <td><strong>Frameworks</strong></td>
                        <td>Laravel, CodeIgniter, Symfony, CakePHP</td>
                      </tr>
                      <tr>
                        <td><strong>Package Managers</strong></td>
                        <td>Composer, Packagist</td>
                      </tr>
                      <tr>
                        <td><strong>Testing Tools</strong></td>
                        <td>PHPUnit, Codeception, Behat</td>
                      </tr>
                      <tr>
                        <td><strong>Content Management Systems</strong></td>
                        <td>WordPress, Drupal, Joomla</td>
                      </tr>
                      <tr>
                        <td><strong>Database Tools</strong></td>
                        <td>MySQL Workbench, phpMyAdmin, HeidiSQL</td>
                      </tr>
                      <tr>
                        <td><strong>API Development Tools</strong></td>
                        <td>Postman, Swagger, Insomnia</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="gradient-overlay"></div>
              </div>
              <button class="toggle-button" onclick="toggleContent('contentContainer2', this)">View More</button>
            </section>
            <!-- PHP Tools Covered End -->
            <!-- Course Syllabus Start -->
            <section class="course-top-curriculum lazy-section" id="syllabus">
              <div class="contentcard">
                <h2 class="heading-main text-center mb-2">Curriculum <span class="red-color">PHP</span></h2>
                <div class="content-container" id="contentContainer3">
                  <div class="accordion-curriculum mb-5">
                    <div class="top-curriculum-header">
                      <p class="desc">PHP Programming Curriculum</p>
                      <a href="#" class="btn btn-white" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">
                        <svg viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M0.625 11.375C0.79076 11.375 0.949732 11.4408 1.06694 11.5581C1.18415 11.6753 1.25 11.8342 1.25 12V15.125C1.25 15.4565 1.3817 15.7745 1.61612 16.0089C1.85054 16.2433 2.16848 16.375 2.5 16.375H17.5C17.8315 16.375 18.1495 16.2433 18.3839 16.0089C18.6183 15.7745 18.75 15.4565 18.75 15.125V12C18.75 11.8342 18.8158 11.6753 18.9331 11.5581C19.0503 11.4408 19.2092 11.375 19.375 11.375C19.5408 11.375 19.6997 11.4408 19.8169 11.5581C19.9342 11.6753 20 11.8342 20 12V15.125C20 15.788 19.7366 15.4239 19.2678 16.8928C18.7989 17.3616 18.163 17.625 17.5 17.625H2.5C1.83696 17.625 1.20107 17.3616 0.732233 16.8928C0.263392 16.4239 0 15.788 0 15.125V12C0 11.8342 0.065848 11.6753 0.183058 11.5581C0.300269 11.4408 0.45924 11.375 0.625 11.375Z" />
                          <path d="M9.55829 13.8175C9.61635 13.8757 9.68532 13.9219 9.76125 13.9534C9.83718 13.9849 9.91858 14.0011 10.0008 14.0011C10.083 14.0011 10.1644 13.9849 10.2403 13.9534C10.3163 13.9219 10.3852 13.8757 10.4433 13.8175L14.1933 10.0675C14.3106 9.95014 14.3766 9.79097 14.3766 9.625C14.3766 9.45903 14.3106 9.29986 14.1933 9.1825C14.0759 9.06514 13.9168 8.99921 13.7508 8.99921C13.5848 8.99921 13.4256 9.06514 13.3083 9.1825L10.6258 11.8663V0.875C10.6258 0.70924 10.5599 0.550268 10.4427 0.433058C10.3255 0.315848 10.1666 0.25 10.0008 0.25C9.83503 0.25 9.67606 0.315848 9.55885 0.433058C9.44164 0.550268 9.37579 0.70924 9.37579 0.875V11.8663L6.69329 9.1825C6.57593 9.06514 6.41676 8.99921 6.25079 8.99921C6.08482 8.99921 5.92565 9.06514 5.80829 9.1825C5.69093 9.29986 5.625 9.45903 5.625 9.625C5.625 9.79097 5.69093 9.95014 5.80829 10.0675L9.55829 13.8175Z" />
                        </svg>
                        Download Syllabus
                      </a>
                    </div>
                    <div class="accordion accordion-flush" id="curriculumAccordionFlush">
                      <!-- Module 1 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-1">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-1" aria-expanded="false" aria-controls="flush-curriculum-1">
                            <div class="curriculum-number"><span>1.</span> Introduction to PHP</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-1" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-1" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Overview of PHP and its role in web development.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Setting up development environments (XAMPP, WAMP).</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Basic syntax and variables.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Lab: Creating a simple PHP webpage.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 2 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-2">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-2" aria-expanded="false" aria-controls="flush-curriculum-2">
                            <div class="curriculum-number"><span>2.</span> Core PHP Programming</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-2" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-2" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Control structures (if, loops, switch).</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Functions and arrays.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Form handling and validation.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Lab: Building a form processing script.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 3 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-3">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-3" aria-expanded="false" aria-controls="flush-curriculum-3">
                            <div class="curriculum-number"><span>3.</span> Object-Oriented Programming in PHP</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-3" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-3" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Classes, objects, and inheritance.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Encapsulation and polymorphism.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Namespaces and autoloading.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Lab: Creating an OOP-based PHP application.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 4 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-4">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-4" aria-expanded="false" aria-controls="flush-curriculum-4">
                            <div class="curriculum-number"><span>4.</span> Database Integration with MySQL</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-4" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-4" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Connecting PHP to MySQL databases.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>CRUD operations with PDO and MySQLi.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Database security practices.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Lab: Building a database-driven application.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 5 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-5">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-5" aria-expanded="false" aria-controls="flush-curriculum-5">
                            <div class="curriculum-number"><span>5.</span> MVC Frameworks</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-5" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-5" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Introduction to MVC architecture.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Working with Laravel and CodeIgniter.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Routing and controllers.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Lab: Developing a Laravel application.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 6 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-6">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-6" aria-expanded="false" aria-controls="flush-curriculum-6">
                            <div class="curriculum-number"><span>6.</span> API Development and RESTful Services</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-6" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-6" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Building RESTful APIs with PHP.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Handling JSON and XML responses.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>API authentication and security.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Lab: Creating a REST API with Laravel.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 7 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-7">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-7" aria-expanded="false" aria-controls="flush-curriculum-7">
                            <div class="curriculum-number"><span>7.</span> Secure Coding Practices</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-7" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-7" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Preventing SQL injection and XSS attacks.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Implementing input validation and sanitization.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Secure session management.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Lab: Securing a PHP application.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 8 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-8">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-8" aria-expanded="false" aria-controls="flush-curriculum-8">
                            <div class="curriculum-number"><span>8.</span> PHP Testing with PHPUnit</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-8" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-8" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Unit testing with PHPUnit.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Test-driven development (TDD) principles.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Writing and running test cases.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Lab: Creating a test suite for a PHP app.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 9 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-9">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-9" aria-expanded="false" aria-controls="flush-curriculum-9">
                            <div class="curriculum-number"><span>9.</span> Content Management Systems</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-9" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-9" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Developing with WordPress and Drupal.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Customizing themes and plugins.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>CMS security and optimization.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Lab: Building a WordPress plugin.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 10 -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-10">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-10" aria-expanded="false" aria-controls="flush-curriculum-10">
                            <div class="curriculum-number"><span>10.</span> Job Oriented Preparation</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-10" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-10" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Review of certification objectives (Zend, PHP Institute).</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Mock exams simulating certification scenarios.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Strategies for time management and exam success.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Lab: Practicing PHP coding for certification.</li>
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
              <p class="description text-center">At WebAsha Technologies, our PHP instructors are certified professionals committed to providing hands-on, career-oriented education.</p>
              <ul>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Simplified Instruction:</b> Break down complex PHP concepts into clear lessons.</li>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Hands-On Training:</b> Engage in practical projects like building web applications.</li>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Personalized Support:</b> Benefit from tailored one-on-one guidance to meet your goals.</li>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Career & Project Guidance:</b> Receive assistance with projects and interview preparation.</li>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Industry Expertise:</b> Leverage trainers’ extensive experience in web development.</li>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Certified Professionals:</b> Learn from experts holding Zend Certified PHP Engineer or similar credentials.</li>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Operational Experience:</b> Gain insights from active PHP project development.</li>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Proven Success:</b> Join over 2,500 students trained annually.</li>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Corporate Collaboration:</b> Benefit from trainers’ work with firms like TCS, Infosys, and Wipro.</li>
              </ul>
            </section>
          </div>
          <!-- Sidebar 1 -->
          <?php include("include/programming/course-sidebar1.php"); ?>
        </div>
      </div>
      <!-- Newsletter -->
      <section class="newsletter course-newsletter lazy-section" id="sticky-end-section1">
        <?php include("include/programming/self-assessment.php"); ?>
      </section>
      <div class="container">
        <div class="row">
          <!-- Main Content -->
          <div class="col-lg-8 col-sm-12" id="sticky-start-section2">
            <!-- Bootcamp -->
            <section class="lazy-section">
              <h2 class="heading-main text-center mb-0">PHP <span class="red-color">Certification Bootcamp</span></h2>
              <p class="description mb-0">Job Orienteds from Zend and PHP Institute validate advanced programming skills with global recognition.</p>
              <ul>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Globally Recognized Certification:</b> Elevates your professional profile.</li>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Multiple-Choice Exams:</b> Tests PHP programming and framework proficiency.</li>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Valuable for Job Seekers:</b> Demonstrates expertise in web development.</li>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Prerequisites:</b> Basic programming knowledge recommended.</li>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Validity:</b> Non-expiring, with continuous learning recommended.</li>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Exam Delivered Online:</b> Flexible, multiple-choice format.</li>
                <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Language Support:</b> English primary.</li>
              </ul>
            </section>
            <!-- Certified Candidates -->
            <section class="course-certified-candidates lazy-section" id="exam-certification">
              <?php include("include/programming/cert/php.php"); ?>
            </section>
            <!-- Exam Info -->
            <section class="course-exam-information lazy-section">
              <h2 class="heading-main text-center">PHP Exam <span class="red-color">Details and Format</span></h2>
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
                      <td>Zend Certified PHP Engineer, PHP Institute Certifications</td>
                    </tr>
                    <tr>
                      <td><strong>Exam Duration</strong></td>
                      <td>1–2 Hours</td>
                    </tr>
                    <tr>
                      <td><strong>Number of Questions</strong></td>
                      <td>70–90 Multiple-choice questions</td>
                    </tr>
                    <tr>
                      <td><strong>Exam Fee</strong></td>
                      <td>₹10,000–₹25,000 in India (varies by provider)</td>
                    </tr>
                    <tr>
                      <td><strong>Validity</strong></td>
                      <td>Non-expiring</td>
                    </tr>
                    <tr>
                      <td><strong>Exam Format</strong></td>
                      <td>Online or In-Person, Multiple-Choice</td>
                    </tr>
                    <tr>
                      <td><strong>Passing Score</strong></td>
                      <td>70% (varies by provider)</td>
                    </tr>
                    <tr>
                      <td><strong>Eligibility / Prerequisite</strong></td>
                      <td>None, basic PHP knowledge recommended</td>
                    </tr>
                    <tr>
                      <td><strong>Exam Languages</strong></td>
                      <td>English</td>
                    </tr>
                    <tr>
                      <td><strong>Exam Mode</strong></td>
                      <td>Online or In-Person</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>
            <!-- Passing Score -->
            <section class="course-ceh-group lazy-section">
              <h4 class="text-center mb-0">Passing Criteria for Job Orienteds</h4>
              <p class="description text-center mb-0">To pass <b>Job Oriented exams</b>, achieve at least <b>70%</b> on online or in-person, multiple-choice tests, offered by <b>WebAsha Technologies</b>. These <b>1–2 hour</b> exams require proficiency in PHP programming, evaluated in <b>English</b>. Start with <b>WebAsha</b> in <b>Pune</b> for expert preparation.</p>
              <div class="button-group">
                <a href="https://api.whatsapp.com/send?phone=+91-8010911256&text=Hello%20WebAsha,%20I%20want%20PHP%20Discounted%20Exam%20Voucher" target="_blank" rel="noopener" aria-label="Chat on WhatsApp" class="btn-whatsapp text-decoration-none">
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
                <h2 class="heading-main text-center">Job Roles and Salary Outlook After <span class="red-color">PHP</span></h2>
                <p class="description text-center">Completing Job Oriented opens doors to high-demand web development roles in the IT sector.</p>
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
                        <td><strong>PHP Developer</strong></td>
                        <td>Develop dynamic web applications.</td>
                        <td>Fresher: ₹3–5 LPA <br>Experienced: ₹6–12 LPA</td>
                      </tr>
                      <tr>
                        <td><strong>Web Developer</strong></td>
                        <td>Build and maintain websites.</td>
                        <td>Fresher: ₹3–6 LPA <br>Experienced: ₹7–15 LPA</td>
                      </tr>
                      <tr>
                        <td><strong>Backend Developer</strong></td>
                        <td>Manage server-side logic and APIs.</td>
                        <td>Fresher: ₹4–7 LPA <br>Experienced: ₹8–18 LPA</td>
                      </tr>
                      <tr>
                        <td><strong>Full Stack Developer</strong></td>
                        <td>Handle front-end and back-end development.</td>
                        <td>Fresher: ₹5–8 LPA <br>Experienced: ₹10–20 LPA</td>
                      </tr>
                      <tr>
                        <td><strong>CMS Developer</strong></td>
                        <td>Customize WordPress or Drupal solutions.</td>
                        <td>Fresher: ₹3–5 LPA <br>Experienced: ₹6–12 LPA</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <p class="description"><b>Note:</b> Salaries vary based on experience and company size, with certifications boosting earning potential.</p>
                <p class="description">The global demand for PHP developers continues to grow, with many roles still unfilled.</p>
                <div class="gradient-overlay"></div>
              </div>
              <button class="toggle-button" onclick="toggleContent('contentContainer4', this)">View More</button>
            </section>
            <section class="contentcard lazy-section">
              <div class="content-container" id="contentContainer5">
                <h2 class="heading-main text-center">Career Benefits of <span class="red-color">PHP</span></h2>
                <p class="description text-center">In today’s web-driven landscape, PHP programming skills are essential for building dynamic and scalable web applications.</p>
                <ul>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>High Industry Demand:</b> Develop robust web solutions for businesses.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Excellent Salary Potential:</b> Access lucrative roles in web development.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Multiple Career Paths:</b> Pursue web development, backend, or full-stack roles.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Global Opportunities:</b> Open doors to international positions.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Fast Application of Skills:</b> Apply PHP techniques immediately.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Wide-Reaching Impact:</b> Build websites, CMS, and APIs.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Career Advancement:</b> Progress to senior developer roles.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Freelance & Consulting Options:</b> Offer expert PHP development services.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Startup & Innovation Potential:</b> Develop innovative web solutions.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Future-Proof Expertise:</b> Stay ahead with in-demand PHP skills.</li>
                </ul>
                <div class="gradient-overlay"></div>
              </div>
              <button class="toggle-button" onclick="toggleContent('contentContainer5', this)">View More</button>
            </section>
            <section class="contentcard lazy-section">
              <div class="content-container" id="contentContainer6">
                <h2 class="heading-main text-center">Why Choose PHP Training at <span class="red-color">WebAsha Technologies in Pune</span></h2>
                <p class="description text-center">Advance your web development career with PHP training at WebAsha Technologies in Pune, a web development excellence center.</p>
                <ul>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Expert Training:</b> Learn from certified PHP professionals.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Comprehensive Curriculum:</b> Cover core PHP, frameworks, and APIs.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Hands-On Projects:</b> Practice building real-world web applications.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Flexible Schedule:</b> Choose timings that suit you.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Modern Infrastructure:</b> Use state-of-the-art development tools.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Statewide Recognition:</b> Trusted in Maharashtra.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Tech Hub Location:</b> Benefit from Pune’s IT ecosystem.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Career Ready:</b> Prepare for high-demand PHP jobs.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Specialized Skills:</b> Master frameworks, CMS, and secure coding.</li>
                  <li><i class="fa-solid fa-angles-right text-danger me-2"></i><b>Proven Results:</b> Join successful alumni.</li>
                </ul>
                <div class="gradient-overlay"></div>
              </div>
              <button class="toggle-button" onclick="toggleContent('contentContainer6', this)">View More</button>
            </section>
          </div>
          <!-- Sidebar -->
          <div class="col-lg-4 col-sm-12 col-12 sticky-sidebar1 lazy-section" id="sticky-sidebar2">
            <div class="course-subsciption sticky-sidebar-container">
              <?php include("include/programming/course-sidebar2.php"); ?>
            </div>
          </div>
        </div>
      </div>
      <!-- Screenshots -->
      <section class="career-straight lazy-section">
        <?php include("include/programming/career-straight.php"); ?>
      </section>
      <!-- Alumni -->
      <section class="course-discover-profile lazy-section">
        <div class="section-header text-center">
          <span class="section-badge">Recent Career Success Stories</span>
        </div>
        <h2 class="heading-main-1 text-center">Explore Alumni with Profiles <span class="red-color">Like Yours</span></h2>
        <p class="desc text-center">Learn about their career paths, PHP specialties, and accomplishments.</p>
        <?php include("include/programming/alumni.php"); ?>
      </section>
      <!-- Related Courses -->
      <section class="course-related-courses lazy-section visible">
        <div class="section-header text-center mb-4">
          <span class="section-badge">Related Courses</span>
          <h2 class="heading-main-1 text-center">Explore <span class="red-color">Related Courses</span></h2>
          <p class="desc text-center">Find additional courses to boost your web development career and skills.</p>
        </div>
        <?php include("include/programming/related-courses.php"); ?>
      </section>
      <!-- FAQs -->
      <section class="course-webasha-faq lazy-section" id="faqs">
        <div class="container mt-4 mb-4">
          <div class="section-header text-center mb-4">
            <span class="section-badge">FAQs</span>
            <h2 class="heading-main-1 text-center">PHP FAQs <span class="red-color">(Frequently Asked Questions)</span></h2>
          </div>
          <div class="all-theme-accordion" id="content">
            <div class="accordion accordion-flush" id="coursefaqAccordionFlush">
              <!-- FAQ 1: Overview of the PHP course -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq1" aria-expanded="false" aria-controls="flush-coursefaq1">What is included in the PHP course?</button>
                </h2>
                <div id="flush-coursefaq1" class="accordion-collapse collapse show" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">The PHP course covers core PHP, object-oriented programming, database integration, MVC frameworks, and API development, preparing for certifications like Zend Certified PHP Engineer.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 2: Eligibility criteria -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq2" aria-expanded="false" aria-controls="flush-coursefaq2">Who can enroll in PHP training?</button>
                </h2>
                <div id="flush-coursefaq2" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">Web developers, programmers, and IT professionals; basic programming knowledge (e.g., HTML, CSS) is recommended.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 3: Certification validity -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq3" aria-expanded="false" aria-controls="flush-coursefaq3">How long are Job Orienteds valid?</button>
                </h2>
                <div id="flush-coursefaq3" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">Job Orienteds like Zend Certified PHP Engineer do not expire, but staying updated with PHP versions is recommended.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 4: Exam format -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq4" aria-expanded="false" aria-controls="flush-coursefaq4">What is the format of Job Oriented exams?</button>
                </h2>
                <div id="flush-coursefaq4" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">PHP exams are 1–2 hour online or in-person, multiple-choice tests with 70–90 questions, depending on the provider.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 5: Passing score -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq5" aria-expanded="false" aria-controls="flush-coursefaq5">What is the passing score for Job Orienteds?</button>
                </h2>
                <div id="flush-coursefaq5" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">Minimum 70%, depending on the provider (e.g., Zend, PHP Institute).</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 6: Exam languages -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq6" aria-expanded="false" aria-controls="flush-coursefaq6">In which languages are Job Oriented exams available?</button>
                </h2>
                <div id="flush-coursefaq6" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">Exams are primarily in English.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 7: Training duration -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq7" aria-expanded="false" aria-controls="flush-coursefaq7">How long does PHP training take?</button>
                </h2>
                <div id="flush-coursefaq7" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">PHP training spans 4–8 weeks of intensive sessions.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 8: Cost of certification -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq8" aria-expanded="false" aria-controls="flush-coursefaq8">What is the cost of Job Orienteds?</button>
                </h2>
                <div id="flush-coursefaq8" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">Ranges from ₹10,000 to ₹25,000 in India, depending on the provider.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 9: Online vs in-person training -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq9" aria-expanded="false" aria-controls="flush-coursefaq9">What’s the difference between online and in-person PHP training?</button>
                </h2>
                <div id="flush-coursefaq9" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">Online offers flexibility with virtual coding labs; in-person provides direct interaction and hands-on workshops in Pune.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 10: Prerequisites for exam -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq10" aria-expanded="false" aria-controls="flush-coursefaq10">Are there any prerequisites for Job Oriented exams?</button>
                </h2>
                <div id="flush-coursefaq10" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">No formal prerequisites; basic programming knowledge recommended.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 11: Recertification process -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq11" aria-expanded="false" aria-controls="flush-coursefaq11">Is recertification required for Job Orienteds?</button>
                </h2>
                <div id="flush-coursefaq11" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">Job Orienteds do not expire, but continuous learning is recommended.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 12: Job opportunities -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq12" aria-expanded="false" aria-controls="flush-coursefaq12">What job roles can I pursue with Job Oriented?</button>
                </h2>
                <div id="flush-coursefaq12" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">PHP Developer, Web Developer, Backend Developer, with salaries up to ₹12+ LPA.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 13: Training locations -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq13" aria-expanded="false" aria-controls="flush-coursefaq13">Where is PHP training offered?</button>
                </h2>
                <div id="flush-coursefaq13" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">Online and in-person in Pune at WebAsha.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 14: Study materials -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq14" aria-expanded="false" aria-controls="flush-coursefaq14">What study materials are provided for PHP training?</button>
                </h2>
                <div id="flush-coursefaq14" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">Comprehensive PHP guides, code samples, lab exercises, and practice exams.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 15: Exam retake policy -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq15" aria-expanded="false" aria-controls="flush-coursefaq15">What is the policy for retaking Job Oriented exams?</button>
                </h2>
                <div id="flush-coursefaq15" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">Retake policies vary by provider; Zend allows retakes after a 7-day waiting period with additional fees. Check the specific provider’s website for details on retake policies and costs.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 16: Career support -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq16" aria-expanded="false" aria-controls="flush-coursefaq16">Does WebAsha offer career support for Job Oriented?</button>
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
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq17" aria-expanded="false" aria-controls="flush-coursefaq17">How does PHP training enhance practical skills?</button>
                </h2>
                <div id="flush-coursefaq17" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">Training includes hands-on projects like building dynamic web applications, integrating databases, and developing APIs, ensuring practical experience aligned with real-world development tasks.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 18: Accreditation -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq18" aria-expanded="false" aria-controls="flush-coursefaq18">Are Job Orienteds accredited?</button>
                </h2>
                <div id="flush-coursefaq18" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">Yes, certifications like Zend Certified PHP Engineer and PHP Institute certifications are industry-recognized and valued by employers worldwide for PHP expertise.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ 19: Group discounts -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq19" aria-expanded="false" aria-controls="flush-coursefaq19">Are there group discounts for PHP training?</button>
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
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq20" aria-expanded="false" aria-controls="flush-coursefaq20">What support is offered after PHP training?</button>
                </h2>
                <div id="flush-coursefaq20" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                  <div class="accordion-body pt-0">
                    <p class="description mb-0">Post-training support includes access to coding resources, project templates, community forums, and instructor-led doubt-clearing sessions. Specific benefits depend on the package—check with admissions.</p>
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
            "name": "What is included in the PHP training?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The PHP training covers core PHP, object-oriented programming, database integration, MVC frameworks, and API development, preparing for certifications like Zend Certified PHP Engineer."
            }
          },
          {
            "@type": "Question",
            "name": "Who can enroll in PHP training?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Web developers, programmers, and IT professionals; basic programming knowledge (e.g., HTML, CSS) is recommended."
            }
          },
          {
            "@type": "Question",
            "name": "How long are Job Orienteds valid?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Job Orienteds like Zend Certified PHP Engineer do not expire, but staying updated with PHP versions is recommended."
            }
          },
          {
            "@type": "Question",
            "name": "What is the format of Job Oriented exams?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "PHP exams are 1–2 hour online or in-person, multiple-choice tests with 70–90 questions, depending on the provider."
            }
          },
          {
            "@type": "Question",
            "name": "What is the passing score for Job Orienteds?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Minimum 70%, depending on the provider (e.g., Zend, PHP Institute)."
            }
          },
          {
            "@type": "Question",
            "name": "In which languages are Job Oriented exams available?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Exams are primarily in English."
            }
          },
          {
            "@type": "Question",
            "name": "How long does PHP training take?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "PHP training spans 4–8 weeks of intensive sessions."
            }
          },
          {
            "@type": "Question",
            "name": "What is the cost of Job Orienteds?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Ranges from ₹10,000 to ₹25,000 in India, depending on the provider."
            }
          },
          {
            "@type": "Question",
            "name": "What’s the difference between online and in-person PHP training?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Online offers flexibility with virtual coding labs; in-person provides direct interaction and hands-on workshops in Pune."
            }
          },
          {
            "@type": "Question",
            "name": "Are there any prerequisites for Job Oriented exams?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "No formal prerequisites; basic programming knowledge recommended."
            }
          },
          {
            "@type": "Question",
            "name": "Is recertification required for Job Orienteds?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Job Orienteds do not expire, but continuous learning is recommended."
            }
          },
          {
            "@type": "Question",
            "name": "What job roles can I pursue with Job Oriented?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "PHP Developer, Web Developer, Backend Developer, with salaries up to ₹12+ LPA."
            }
          },
          {
            "@type": "Question",
            "name": "Where is PHP training offered?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Online and in-person in Pune at WebAsha."
            }
          },
          {
            "@type": "Question",
            "name": "What study materials are provided for PHP training?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Comprehensive PHP guides, code samples, lab exercises, and practice exams."
            }
          },
          {
            "@type": "Question",
            "name": "What is the policy for retaking Job Oriented exams?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Retake after a 7-day waiting period with fees, depending on the provider."
            }
          },
          {
            "@type": "Question",
            "name": "Does WebAsha offer career support for Job Oriented?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, resume reviews, mock interviews, and job placement assistance."
            }
          },
          {
            "@type": "Question",
            "name": "How does PHP training enhance practical skills?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Through hands-on projects like building web applications and APIs."
            }
          },
          {
            "@type": "Question",
            "name": "Are Job Orienteds accredited?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, by providers like Zend and PHP Institute."
            }
          },
          {
            "@type": "Question",
            "name": "Are there group discounts for PHP training?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, group discounts for three or more participants."
            }
          },
          {
            "@type": "Question",
            "name": "What support is offered after PHP training?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Access to coding resources, project templates, forums, and doubt-clearing sessions."
            }
          }
        ]
      }
      </script>
      <!-- Other Courses -->
      <section class="other-course-web-development lazy-section">
        <div class="container">
          <div class="course-web-development-wraper">
            <div class="course-web-development">
              <h2 class="heading-main text-center">Browse PHP-Related Resources</h2>
              <?php include("include/programming/related-resources.php"); ?>
            </div>
          </div>
        </div>
      </section>
      <!-- Modals -->
      <?php include("include/programming/enquiry-modal.php"); ?>
      <?php include("include/programming/syllabus-modal.php"); ?>
      <?php include("include/programming/popup/auto-popup-modal.php"); ?>
    </main>
    <!-- Footer -->
    <?php include("include/footer.php"); ?>
    <?php include("include/footerlink.php"); ?>
  </body>
</html>