<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include common header links / global meta / favicon / CSS / JS -->
    <?php include("include/headerlink.php"); ?>
    <!-- Page-specific metadata (Python Training) -->
    <?php
      $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
      $current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
    <title>Python Programming Training in Pune | Python Certification Course - WebAsha Technologies</title>
    <meta name="description" content="Join WebAsha Technologies for Python Training in Pune. Master Python programming, data analysis, and web development with hands-on projects, expert mentorship, and preparation for professional certification in 2025.">
    <meta name="keywords" content="Python Training Pune, Python Certification Course, Python Programming Training, Data Analysis Course, Web Development with Python, Python Certification Pune">
    <!-- Canonical URL to avoid duplicate content -->
    <link rel="canonical" href="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <!-- Page-specific Open Graph for social sharing -->
    <meta property="og:title" content="Python Programming Training in Pune | Python Certification Course - WebAsha Technologies">
    <meta property="og:description" content="Advance your programming career with WebAsha Technologies’ Python Training in Pune. Gain expertise in Python through practical projects and expert guidance for certification success.">
    <meta property="og:url" content="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <meta property="og:image" content="https://training.webasha.com/assets/img/course/python/python.webp">
    <meta property="og:image:alt" content="Python Programming Training - Python Certification Course in Pune">
    <meta property="og:type" content="website">
    <!-- Page-specific Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Python Programming Training in Pune | Python Certification Course - WebAsha Technologies">
    <meta name="twitter:description" content="Become Python certified with WebAsha Technologies in Pune. Hands-on training in programming, data analysis, and web development for a thriving career in 2025.">
    <meta name="twitter:image" content="https://training.webasha.com/assets/img/course/python/python.webp">
    <!-- Page-specific JSON-LD: Course schema for enhanced search visibility -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Course",
      "name": "Python Programming and Certification Training",
      "description": "Develop advanced Python programming skills with WebAsha Technologies in Pune. This course offers hands-on projects in data analysis and web development, expert instruction, and comprehensive certification preparation for 2025.",
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
                  <a href="index.html" class="text-decoration-none" aria-label="Home">
                    <svg viewBox="0 0 20 18" xmlns="http://www.w3.org/2000/svg" width="20" height="18">
                      <path d="M8 17.5V11.5H12V17.5H17V9.5H20L10 0.5L0 9.5H3V17.5H8Z" fill="currentColor" />
                    </svg>
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Python Training with Certification</li>
              </ol>
            </nav>
            <!-- Banner Content -->
            <div class="banner-course-content">
              <h1 class="heading-main-1 text-white">Python Training with Certification: Python Programming</h1>
              <!-- Review Card -->
              <div class="banner-review-card">
                <div class="enrolled-group d-flex align-items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700" viewBox="0 0 24 24" aria-hidden="true" role="img" class="me-2">
                    <path d="M16 11c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-8 0c1.7 0 3-1.3 3-3S9.7 5 8 5 5 6.3 5 8s1.3 3 3 3zm0 2c-2.3 0-7 1.2-7 3.5V20h14v-3.5C15 14.2 10.3 13 8 13zm8 0c-.3 0-.7 0-1 .1 1.2.8 2 2.1 2 3.4V20h6v-3.5c0-2.3-4.7-3.5-7-3.5z" />
                  </svg>
                  <span>5,500 Participants Enrolled</span>
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
              <!-- Description -->
              <p class="desc">Python certification validates your programming skills, covering scripting, data analysis, and web development for professional software projects.</p>
              <p class="desc">Earn Python certification through hands-on training in programming fundamentals, libraries, and real-world applications.</p>
              <!-- Buttons -->
              <div class="button-group">
                <a href="#" class="btn-whatsapp text-decoration-none" aria-label="Contact via WhatsApp">
                  <i class="fab fa-whatsapp"></i> WhatsApp </a>
                <a href="#" class="btn-phone text-decoration-none" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">
                  <i class="fa fa-download me-2"></i> Download Syllabus </a>
              </div>
            </div>
            <!-- Accreditation -->
            <div class="text-white mt-4 mb-4">
              <h5>Accredited By</h5>
              <a href="#" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">
                <picture>
                  <img src="assets/img/icons/partner/python.webp" alt="Authorised Training Partner" height="146" width="180" loading="lazy">
                </picture>
              </a>
            </div>
          </div>
          <!-- Right Column -->
          <div class="col-lg-4 col-sm-12">
            <div class="ec-council">
              <div class="video-thumbnail position-relative">
                <picture>
                  <source srcset="assets/img/course/python/python.webp" type="image/webp">
                  <img src="assets/img/course/python/python.webp" alt="Python Training Course Preview Thumbnail" width="360" height="220" loading="lazy" decoding="async" class="img-fluid rounded shadow-sm">
                </picture>
                <button type="button" class="video-btn position-absolute top-50 start-50 translate-middle" aria-label="Play course promo video" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="ERtp4zua0-s">
                  <svg class="play-icon" viewBox="0 0 64 64" width="64" height="64" aria-hidden="true" focusable="false">
                    <circle cx="32" cy="32" r="32" fill="rgba(0,0,0,0.55)" />
                    <path d="M26 20 L45 32 L26 44 z" fill="#fff" />
                  </svg>
                </button>
              </div>
              <div class="pera-group">
                <p class="desc">Leading Global Programming Training and Certification Platform</p>
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
    <section class="our-learners section-header text-center lazy-section"> <?php include("include/programming/brands.php"); ?> </section>
    <!-- Recent Placements Video Testimonials Section -->
    <section class="course-recent-reviews section-header text-center lazy-section" id="sticky-sidebar2">
      <span class="section-badge">Recent Placements Testimonials</span>
      <h2 class="heading-main-1 text-white text-center">Python Programming <span class="red-color">Recent Reviews</span>
      </h2> <?php include("include/programming/video-reviews.php"); ?>
    </section>
    <!-- Testimonials -->
    <section class="success-speaks-reviwe course-speaks section-header text-center lazy-section">
      <div class="container">
        <span class="section-badge">Recent Placements Testimonials</span>
        <h2 class="heading-main text-center mb-5">Python Programming <span class="red-color">Reviews</span>
        </h2> <?php include("include/programming/text-reviews.php"); ?>
      </div>
    </section>
    <!-- Career Roadmap -->
    <section class="course-technologies-placement lazy-section" id="placement-reviews"> <?php include("include/programming/placement.php"); ?> </section>
    <!-- Key Features -->
    <section class="lazy-section">
      <div class="training-features section-header text-center mt-5 lazy-section">
        <div class="container">
          <!-- Preload critical image for LCP -->
          <link rel="preload" href="https://i.ibb.co/5X09hRg/lab.gif" as="image" fetchpriority="high">
          <span class="section-badge">Training Key Features</span>
          <h2 class="heading-main-1 text-center">Python Course <span class="red-color">Training Key Features</span>
          </h2>
          <p class="description text-center mb-5">Explore the fundamental advantages of our Python training courses designed for certification success in Pune’s thriving tech sector.</p> <?php include("include/programming/key-features.php"); ?>
    </section>
    <!-- Why Choose Us -->
    <section class="py-5 course-comparison-section lazy-section"> <?php include("include/programming/why-webasha.php"); ?> </section>
    <!-- Training Calendar -->
    <section class="py-5 lazy-section" id="training-options"> <?php include("include/programming/batchschedule.php"); ?> </section>
    <!-- Main Course Content -->
    <main>
      <div class="container">
        <div class="row">
          <!-- Left -->
          <div class="col-lg-8 col-12" id="sticky-start-section1">
            <!-- Course Overview Start -->
            <section class="course-training-overview lazy-section" id="overview"> <?php include("include/programming/slider/python.php"); ?> </section>
            <!-- Course Prerequisites Start -->
            <section class="contentcard lazy-section">
              <div class="content-container" id="contentContainer1">
                <div class="summary-details">
                  <h2 class="heading-main text-center"> Python Programming <span class="red-color"> Training Overview</span>
                  </h2>
                  <p class="description mb-0"> Kickstart your programming career with our <b>Classroom and Online Python Training</b> at <b>WebAsha Technologies</b>. This program is crafted to provide <b>hands-on, project-based skills</b> for mastering Python programming. Whether you're a novice or seeking certification, this course prepares you to excel in <b>Python certification</b> and advance your software development career in <b>2025 and beyond</b>. </p>
                </div>
                <h5 class="bold-text mb-2 mt-2">Python Training Overview:</h5>
                <p class="description mb-0"> The <b>Python Training</b> emphasizes building expertise in <b>programming fundamentals, data analysis, and web development</b>. Through practical projects and real-world examples, participants learn Python syntax, libraries like Pandas and Flask, and automation techniques. The course prioritizes applied learning for certification and professional programming. </p>
                <h5 class="bold-text mb-2 mt-2">Intended Audience:</h5>
                <p class="description mb-0"> This course is perfect for <b>aspiring developers, data analysts, and IT enthusiasts</b> aiming to certify their Python skills. It’s also suitable for <b>students, career switchers, and professionals in Pune</b> looking to enter software development or data science. No prior coding experience is required, as the course starts from basics. </p>
                <h5 class="bold-text mb-2 mt-2">Topics Covered:</h5>
                <ul>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Python Fundamentals:</b> Syntax, variables, and data types.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Control Structures:</b> Loops, conditionals, and functions.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Data Structures:</b> Lists, dictionaries, and tuples.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>File Handling:</b> Read/write operations and file management.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Libraries:</b> Use Pandas, NumPy, and Matplotlib for data analysis.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Web Development:</b> Build apps with Flask or Django.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Automation:</b> Script repetitive tasks with Python.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Version Control:</b> Manage code with Git and GitHub.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Testing:</b> Write unit tests with pytest.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Projects:</b> Develop real-world applications like data dashboards.
                  </li>
                </ul>
                <h5 class="bold-text mb-2 mt-2">Requirements:</h5>
                <p class="description mb-0"> No prior coding experience needed, but basic computer skills are helpful. For online sessions, a <b>stable internet connection</b> and <b>laptop</b> are required for coding and projects. The course features <b>hands-on assignments</b> essential for building Python proficiency. </p>
                <h5 class="bold-text mb-2 mt-2">Pre-Requisites:</h5>
                <p class="description mb-0"> Basic familiarity with computers and logic is recommended. No coding background required, as the course starts from fundamentals. </p>
                <h5 class="bold-text mb-2 mt-2">Career Benefits:</h5>
                <p class="description mb-0"> Gaining a <b>Python certification</b> opens opportunities in software development and data science. Certified Python developers often secure roles like <b>Python Developer, Data Analyst, or Automation Engineer</b>. In Pune and India, Python professionals earn <b>₹4 LPA to ₹12 LPA</b>, with prospects for global tech and freelance work. </p>
                <div class="gradient-overlay"></div>
              </div>
              <button class="toggle-button" onclick="toggleContent('contentContainer1', this)">View More</button>
            </section>
            <!-- Python Track Start -->
            <section class="contentcard lazy-section"> <?php include("include/programming/python-track.php"); ?> </section>
            <!-- Python Track End -->
            <!-- Course Syllabus Start -->
            <section class="course-top-curriculum lazy-section" id="syllabus">
              <div class="contentcard">
                <h2 class="heading-main text-center mb-2">Curriculum <span class="red-color">Python</span></h2>
                <div class="content-container" id="contentContainer3">
                  <div class="accordion-curriculum mb-5">
                    <div class="top-curriculum-header">
                      <p class="desc">Python Programming syllabus</p>
                      <a href="#" class="btn btn-white" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">
                        <svg viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M0.625 11.375C0.79076 11.375 0.949732 11.4408 1.06694 11.5581C1.18415 11.6753 1.25 11.8342 1.25 12V15.125C1.25 15.4565 1.3817 15.7745 1.61612 16.0089C1.85054 16.2433 2.16848 16.375 2.5 16.375H17.5C17.8315 16.375 18.1495 16.2433 18.3839 16.0089C18.6183 15.7745 18.75 15.4565 18.75 15.125V12C18.75 11.8342 18.8158 11.6753 18.9331 11.5581C19.0503 11.4408 19.2092 11.375 19.375 11.375C19.5408 11.375 19.6997 11.4408 19.8169 11.5581C19.9342 11.6753 20 11.8342 20 12V15.125C20 15.788 19.7366 15.4239 19.2678 16.8928C18.7989 17.3616 18.163 17.625 17.5 17.625H2.5C1.83696 17.625 1.20107 17.3616 0.732233 16.8928C0.263392 16.4239 0 15.788 0 15.125V12C0 11.8342 0.065848 11.6753 0.183058 11.5581C0.300269 11.4408 0.45924 11.375 0.625 11.375Z" />
                          <path d="M9.55829 13.8175C9.61635 13.8757 9.68532 13.9219 9.76125 13.9534C9.83718 13.9849 9.91858 14.0011 10.0008 14.0011C10.083 14.0011 10.1644 13.9849 10.2403 13.9534C10.3163 13.9219 10.3852 13.8757 10.4433 13.8175L14.1933 10.0675C14.3106 9.95014 14.3766 9.79097 14.3766 9.625C14.3766 9.45903 14.3106 9.29986 14.1933 9.1825C14.0759 9.06514 13.9168 8.99921 13.7508 8.99921C13.5848 8.99921 13.4256 9.06514 13.3083 9.1825L10.6258 11.8663V0.875C10.6258 0.70924 10.5599 0.550268 10.4427 0.433058C10.3255 0.315848 10.1666 0.25 10.0008 0.25C9.83503 0.25 9.67606 0.315848 9.55885 0.433058C9.44164 0.550268 9.37579 0.70924 9.37579 0.875V11.8663L6.69329 9.1825C6.57593 9.06514 6.41676 8.99921 6.25079 8.99921C6.08482 8.99921 5.92565 9.06514 5.80829 9.1825C5.69093 9.29986 5.625 9.45903 5.625 9.625C5.625 9.79097 5.69093 9.95014 5.80829 10.0675L9.55829 13.8175Z" />
                        </svg>
                        Download Syllabus
                      </a>
                    </div>
                    <div class="accordion accordion-flush" id="curriculumAccordionFlush">
                      <!-- Module 1: Python Basics -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-1">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-1" aria-expanded="false" aria-controls="flush-curriculum-1">
                            <div class="curriculum-number"><span>1.</span> Python Fundamentals</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-1" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-1" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Python syntax and structure.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Variables and data types.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Basic input/output.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 2: Control Structures -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-2">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-2" aria-expanded="false" aria-controls="flush-curriculum-2">
                            <div class="curriculum-number"><span>2.</span> Control Structures and Functions</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-2" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-2" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Loops and conditionals.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Defining functions.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Scope and arguments.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 3: Data Structures -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-3">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-3" aria-expanded="false" aria-controls="flush-curriculum-3">
                            <div class="curriculum-number"><span>3.</span> Data Structures</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-3" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-3" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Lists, tuples, and sets.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Dictionaries and comprehensions.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Data manipulation techniques.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 4: File Handling -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-4">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-4" aria-expanded="false" aria-controls="flush-curriculum-4">
                            <div class="curriculum-number"><span>4.</span> File Handling and Modules</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-4" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-4" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Reading and writing files.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Using built-in modules.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Creating custom modules.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 5: Libraries -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-5">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-5" aria-expanded="false" aria-controls="flush-curriculum-5">
                            <div class="curriculum-number"><span>5.</span> Python Libraries</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-5" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-5" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Pandas for data analysis.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>NumPy for numerical operations.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Matplotlib for visualization.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 6: Web Development -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-6">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-6" aria-expanded="false" aria-controls="flush-curriculum-6">
                            <div class="curriculum-number"><span>6.</span> Web Development with Python</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-6" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-6" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Flask for web applications.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>REST API integration.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Basic Django setup.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 7: Automation -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-7">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-7" aria-expanded="false" aria-controls="flush-curriculum-7">
                            <div class="curriculum-number"><span>7.</span> Automation with Python</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-7" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-7" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Scripting repetitive tasks.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Using libraries like pyautogui.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>File and folder automation.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 8: Version Control -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-8">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-8" aria-expanded="false" aria-controls="flush-curriculum-8">
                            <div class="curriculum-number"><span>8.</span> Version Control with Git</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-8" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-8" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Git basics and commands.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Collaborating on GitHub.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Branching and merging workflows.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 9: Testing -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-9">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-9" aria-expanded="false" aria-controls="flush-curriculum-9">
                            <div class="curriculum-number"><span>9.</span> Testing in Python</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-9" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-9" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Writing unit tests with pytest.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Test-driven development basics.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Debugging techniques.</li>
                          </ul>
                        </div>
                      </div>
                      <!-- Module 10: Projects -->
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-curriculum-10">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-10" aria-expanded="false" aria-controls="flush-curriculum-10">
                            <div class="curriculum-number"><span>10.</span> Real-World Python Projects</div>
                          </button>
                        </h2>
                        <div id="flush-curriculum-10" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-10" data-bs-parent="#curriculumAccordionFlush">
                          <ul class="accordion-body description mb-0">
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Building data dashboards.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Creating web applications.</li>
                            <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Automating workflows.</li>
                          </ul>
                        </div>
                      </div>
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
              <p class="description text-center"> At <b>WebAsha Training Institute</b>, our <b>experienced Python trainers</b> combine programming expertise with industry insights, guiding students to master Python and certification. </p>
              <ul>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Practical Approach:</b> Trainers use project-based methods for certification goals, teaching coding through hands-on tasks.
                </li>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Real Projects:</b> Build applications like dashboards and web apps.
                </li>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Personalized Support:</b> Individual guidance for Python proficiency.
                </li>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Certification Prep:</b> Strategies for coding assessments.
                </li>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Industry Background:</b> From work in tech and data science.
                </li>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Certified Experts:</b> Hold relevant Python certifications.
                </li>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Practical Insights:</b> Connect training to real-world coding projects.
                </li>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Success Record:</b> Guide over 1,000 students yearly to success.
                </li>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Partnerships:</b> Ties with firms like <b>Google, Infosys</b> ensure relevance.
                </li>
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
              <h2 class="heading-main text-center mb-0">Python <span class="red-color">Certification Bootcamp</span></h2>
              <p class="description mb-0">Python certification validates your ability to develop professional software, recognized globally for programming expertise.</p>
              <ul>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Valued Credential:</b> Enhances your resume with industry-standard certification.
                </li>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Project-Based:</b> Tests real coding skills through practical tasks.
                </li>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Key for Developers:</b> Prepares for programming roles.
                </li>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Prerequisites:</b> Basic computer skills recommended.
                </li>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Validity:</b> Lifetime for most Python certifications.
                </li>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Practical Exam:</b> Coding-based evaluation.
                </li>
                <li>
                  <i class="fa-solid fa-angles-right text-danger me-2"></i>
                  <b>Languages:</b> English.
                </li>
              </ul>
            </section>
            <!-- Certified Candidates -->
            <section class="course-certified-candidates lazy-section" id="exam-certification"> 
              <?php include("include/programming/cert/python.php"); ?> 
            </section>
            <!-- Exam Info -->
            <section class="course-exam-information lazy-section">
              <h2 class="heading-main text-center">Python Certification <span class="red-color">Details and Format</span></h2>
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
                      <td>Python Institute Certified Associate in Python Programming (PCAP)</td>
                    </tr>
                    <tr>
                      <td><strong>Exam Duration</strong></td>
                      <td>65 Minutes</td>
                    </tr>
                    <tr>
                      <td><strong>Number of Questions</strong></td>
                      <td>40 (Multiple-choice and coding tasks)</td>
                    </tr>
                    <tr>
                      <td><strong>Exam Fee</strong></td>
                      <td>Varies (approx ₹10,000-₹15,000 in India)</td>
                    </tr>
                    <tr>
                      <td><strong>Validity</strong></td>
                      <td>Lifetime</td>
                    </tr>
                    <tr>
                      <td><strong>Exam Code</strong></td>
                      <td>PCAP-31-03</td>
                    </tr>
                    <tr>
                      <td><strong>Exam Format</strong></td>
                      <td>Online/Proctored</td>
                    </tr>
                    <tr>
                      <td><strong>Passing Score</strong></td>
                      <td>70% or higher</td>
                    </tr>
                    <tr>
                      <td><strong>Eligibility / Prerequisite</strong></td>
                      <td>Basic computer skills</td>
                    </tr>
                    <tr>
                      <td><strong>Exam Languages</strong></td>
                      <td>English</td>
                    </tr>
                    <tr>
                      <td><strong>Exam Mode</strong></td>
                      <td>Online/In-Person</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>
            <!-- Passing Score -->
            <section class="course-ceh-group lazy-section">
              <h4 class="text-center mb-0">Passing Criteria for Python Certification</h4>
              <p class="description text-center mb-0">Earn certification by scoring 70% or higher on the PCAP exam (65 minutes). Offered by WebAsha in Pune, it tests Python programming skills. Fees approx ₹10,000-₹15,000 in India, lifetime validity. Proctored online or in-person in English. Train with WebAsha for success.</p>
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
                <h2 class="heading-main text-center">Job Roles and Salary Outlook After <span class="red-color">Python Certification</span></h2>
                <p class="description text-center">Gaining Python certification enables programming roles in India's tech sector for 2025.</p>
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
                        <td><strong>Python Developer</strong></td>
                        <td>Develop software applications.</td>
                        <td>Fresher: ₹4–6 LPA <br>Experienced: ₹8–12 LPA </td>
                      </tr>
                      <tr>
                        <td><strong>Data Analyst</strong></td>
                        <td>Analyze data with Python libraries.</td>
                        <td>Fresher: ₹4–6 LPA <br>Experienced: ₹7–10 LPA </td>
                      </tr>
                      <tr>
                        <td><strong>Automation Engineer</strong></td>
                        <td>Automate tasks and workflows.</td>
                        <td>Fresher: ₹4–6 LPA <br>Experienced: ₹8–12 LPA </td>
                      </tr>
                      <tr>
                        <td><strong>Web Developer</strong></td>
                        <td>Build web apps with Flask/Django.</td>
                        <td>Fresher: ₹3.5–5 LPA <br>Experienced: ₹6–10 LPA </td>
                      </tr>
                      <tr>
                        <td><strong>Data Scientist</strong></td>
                        <td>Use Python for data modeling.</td>
                        <td>Fresher: ₹5–7 LPA <br>Experienced: ₹10–15 LPA </td>
                      </tr>
                      <tr>
                        <td><strong>Machine Learning Engineer</strong></td>
                        <td>Develop ML models with Python.</td>
                        <td>Fresher: ₹5–8 LPA <br>Experienced: ₹12–20 LPA </td>
                      </tr>
                      <tr>
                        <td><strong>Backend Developer</strong></td>
                        <td>Create server-side applications.</td>
                        <td>Fresher: ₹4–6 LPA <br>Experienced: ₹8–12 LPA </td>
                      </tr>
                      <tr>
                        <td><strong>DevOps Engineer</strong></td>
                        <td>Automate infrastructure with Python.</td>
                        <td>Fresher: ₹5–7 LPA <br>Experienced: ₹10–15 LPA </td>
                      </tr>
                      <tr>
                        <td><strong>Freelance Developer</strong></td>
                        <td>Work on client coding projects.</td>
                        <td>Fresher: ₹3–5 LPA <br>Experienced: ₹6–10 LPA </td>
                      </tr>
                      <tr>
                        <td><strong>Software Engineer</strong></td>
                        <td>Develop scalable software solutions.</td>
                        <td>Fresher: ₹4–6 LPA <br>Experienced: ₹8–14 LPA </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <p class="description">
                  <b>Note:</b> Salaries vary by experience, location, and company; Python certification boosts potential in 2025.
                </p>
                <p class="description">India's tech industry projects numerous programming roles by 2025.</p>
                <div class="gradient-overlay"></div>
              </div>
              <button class="toggle-button" onclick="toggleContent('contentContainer4', this)">View More</button>
            </section>
            <section class="contentcard lazy-section">
              <div class="content-container" id="contentContainer5">
                <h2 class="heading-main text-center">Career Benefits of <span class="red-color">Python Certification</span></h2>
                <p class="description text-center"> In the <b>tech-driven industry of 2025</b>, <b>Python certification</b> is crucial for professionals in software development and data science. Python training at <b>WebAsha Technologies</b> provides <b>practical programming skills</b> for scripting, data analysis, and web development — competencies valued in tech firms, startups, and data-driven industries. </p>
                <ul>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Growing Demand:</b> Python developers are sought for diverse tech roles.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Competitive Salaries:</b> Certified developers earn <b>₹4 LPA to ₹12 LPA</b>.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Career Pathways:</b> Foundation for advanced certifications in data science or AI.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Global Opportunities:</b> Skills applicable in international tech markets.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Immediate Application:</b> Project-based for real-world coding.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Broad Coverage:</b> Includes data analysis, web development, and automation.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Career Advancement:</b> Progress to senior developer or data scientist roles.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Freelance Potential:</b> Offer coding services on platforms like Upwork.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Tech Impact:</b> Build solutions that drive innovation.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Future-Ready:</b> Aligns with trends in AI and automation.
                  </li>
                </ul>
                <div class="gradient-overlay"></div>
              </div>
              <button class="toggle-button" onclick="toggleContent('contentContainer5', this)">View More</button>
            </section>
            <!-- Why Choose Us -->
            <section class="contentcard lazy-section">
              <div class="content-container" id="contentContainer6">
                <h2 class="heading-main text-center"> Why Choose Python Training at <span class="red-color">WebAsha Technologies in Pune</span></h2>
                <p class="description text-center"> Prepare for <b>Python certification</b> with <b>WebAsha Technologies</b>, a leading institute in Pune for programming training. Our program is crafted for aspiring developers to master <b>Python skills</b> with hands-on projects aligned to industry needs. </p>
                <ul>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Expert Trainers:</b> Learn from <b>certified Python developers</b> with industry experience.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Full Curriculum:</b> Covers programming, data analysis, and web development.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Practical Labs:</b> Code real-world applications like dashboards.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Flexible Batches:</b> Weekday/weekend options for convenience.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Modern Facilities:</b> Labs with Python and development tools.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Trusted Institute:</b> Top Python training provider in Pune.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Tech Network:</b> Connect with Pune’s tech community.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Certification Emphasis:</b> Tailored for exam success with projects.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Key Skills:</b> Focus on coding and data analysis for job readiness.
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                    <b>Alumni Success:</b> Graduates at firms like <b>Google, Infosys</b>.
                  </li>
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
    </main>
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
      <p class="desc text-center">Discover their journeys, specialties, and achievements.</p> 
      <?php include("include/programming/alumni.php"); ?>
    </section>
    <!-- Related Courses -->
    <section class="course-related-courses lazy-section visible">
      <div class="section-header text-center mb-4">
        <span class="section-badge">Related Courses</span>
        <h2 class="heading-main-1 text-center">Explore <span class="red-color">Related Courses</span></h2>
        <p class="desc text-center">Find complementary courses to enhance your skills and career.</p>
      </div> 
      <?php include("include/programming/related-courses.php"); ?>
    </section>
    <!-- FAQs -->
    <section class="course-webasha-faq lazy-section" id="faqs">
      <div class="container mt-4 mb-4">
        <div class="section-header text-center mb-4">
          <span class="section-badge">FAQs</span>
          <h2 class="heading-main-1 text-center">Python Training FAQs <span class="red-color">(Frequently Asked Questions)</span></h2>
        </div>
        <div class="all-theme-accordion" id="content">
          <div class="accordion accordion-flush" id="coursefaqAccordionFlush">
            <!-- FAQ 1: Overview of the Python training -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq1" aria-expanded="false" aria-controls="flush-coursefaq1">What is included in the Python training?</button>
              </h2>
              <div id="flush-coursefaq1" class="accordion-collapse collapse show" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0">
                  <p class="description mb-0">The Python training at WebAsha Technologies covers essential skills for professional programming, including Python fundamentals, control structures, data structures, file handling, libraries like Pandas and NumPy, web development with Flask/Django, automation, version control with Git, testing with pytest, and real-world projects like data dashboards.</p>
                </div>
              </div>
            </div>
            <!-- FAQ 2: Eligibility criteria -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq2" aria-expanded="false" aria-controls="flush-coursefaq2">Who can enroll in Python training?</button>
              </h2>
              <div id="flush-coursefaq2" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0">
                  <p class="description mb-0">This course is ideal for aspiring developers, data analysts, IT enthusiasts, students, and career changers with basic computer skills. It’s suitable for beginners or those with some programming knowledge aiming to specialize in Python. No prior coding experience is required, as it starts from fundamentals.</p>
                </div>
              </div>
            </div>
            <!-- FAQ 3: Certification validity -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq3" aria-expanded="false" aria-controls="flush-coursefaq3">How long is the Python certification valid?</button>
              </h2>
              <div id="flush-coursefaq3" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0">
                  <p class="description mb-0">Python certifications, such as PCAP from Python Institute, typically have lifetime validity. Continuous learning is recommended to stay updated with new Python versions and libraries.</p>
                </div>
              </div>
            </div>
            <!-- FAQ 4: Exam format -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq4" aria-expanded="false" aria-controls="flush-coursefaq4">What is the format of the Python certification exam?</button>
              </h2>
              <div id="flush-coursefaq4" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0">
                  <p class="description mb-0">The exam includes multiple-choice questions and coding tasks, assessing skills in Python programming, conducted in a proctored online or in-person environment.</p>
                </div>
              </div>
            </div>
            <!-- FAQ 5: Passing score -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq5" aria-expanded="false" aria-controls="flush-coursefaq5">What is the passing score for Python certification?</button>
              </h2>
              <div id="flush-coursefaq5" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0">
                  <p class="description mb-0">A passing score is typically 70% or higher for Python certifications like PCAP. Focus on coding accuracy and problem-solving during preparation.</p>
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
            "name": "What is included in the Python training?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The Python training at WebAsha Technologies covers essential skills for professional programming, including Python fundamentals, control structures, data structures, file handling, libraries like Pandas and NumPy, web development with Flask/Django, automation, version control with Git, testing with pytest, and real-world projects like data dashboards."
            }
          },
          {
            "@type": "Question",
            "name": "Who can enroll in Python training?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "This course is ideal for aspiring developers, data analysts, IT enthusiasts, students, and career changers with basic computer skills. It’s suitable for beginners or those with some programming knowledge aiming to specialize in Python. No prior coding experience is required, as it starts from fundamentals."
            }
          },
          {
            "@type": "Question",
            "name": "How long is the Python certification valid?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Python certifications, such as PCAP from Python Institute, typically have lifetime validity. Continuous learning is recommended to stay updated with new Python versions and libraries."
            }
          },
          {
            "@type": "Question",
            "name": "What is the format of the Python certification exam?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The exam includes multiple-choice questions and coding tasks, assessing skills in Python programming, conducted in a proctored online or in-person environment."
            }
          },
          {
            "@type": "Question",
            "name": "What is the passing score for Python certification?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "A passing score is typically 70% or higher for Python certifications like PCAP. Focus on coding accuracy and problem-solving during preparation."
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
            <h2 class="heading-main text-center">Browse Python related Resources</h2> 
            <?php include("include/programming/related-resources.php"); ?>
          </div>
        </div>
      </div>
    </section> 
    <?php include("include/programming/enquiry-modal.php"); ?> 
    <?php include("include/programming/syllabus-modal.php"); ?> 
    </main>
    <!-- Footer --> 
    <?php include("include/footer.php"); ?> 
    <?php include("include/footerlink.php"); ?>
  </body>
</html>