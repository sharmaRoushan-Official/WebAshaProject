<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include common header links / global meta / favicon / CSS / JS -->
    <?php include("include/headerlink.php"); ?>
    <!-- Page-specific metadata (Web Design Training) -->
    <?php
      $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
      $current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
    <title>Web Design Training in Pune | Responsive Web Design Certification Course - WebAsha Technologies</title>
    <meta name="description" content="Join WebAsha Technologies for Web Design Training in Pune. Master HTML, CSS, JavaScript, and responsive design with hands-on projects, expert mentorship, and preparation for professional certification in 2025.">
    <meta name="keywords" content="Web Design Training Pune, Responsive Web Design Course, HTML CSS JavaScript Certification, Front-End Development Training, UI/UX Design Course Pune, Web Design Certification">
    <!-- Canonical URL to avoid duplicate content -->
    <link rel="canonical" href="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <!-- Page-specific Open Graph for social sharing -->
    <meta property="og:title" content="Web Design Training in Pune | Responsive Web Design Certification Course - WebAsha Technologies">
    <meta property="og:description" content="Advance your web design career with WebAsha Technologies’ Web Design Training in Pune. Learn responsive design and front-end development through practical projects for certification success.">
    <meta property="og:url" content="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <meta property="og:image" content="https://training.webasha.com/assets/img/course/webdesign/webdesign.webp">
    <meta property="og:image:alt" content="Web Design Training - Responsive Web Design Certification Course in Pune">
    <meta property="og:type" content="website">
    <!-- Page-specific Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Web Design Training in Pune | Responsive Web Design Certification Course - WebAsha Technologies">
    <meta name="twitter:description" content="Become certified in web design with WebAsha Technologies in Pune. Hands-on training in HTML, CSS, and JavaScript for a thriving career in 2025.">
    <meta name="twitter:image" content="https://training.webasha.com/assets/img/course/webdesign/webdesign.webp">
    <!-- Page-specific JSON-LD: Course schema for enhanced search visibility -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Course",
      "name": "Web Design and Responsive Web Design Certification Training",
      "description": "Develop advanced web design skills with WebAsha Technologies in Pune. This course offers hands-on projects in HTML, CSS, JavaScript, and responsive design, expert instruction, and comprehensive certification preparation for 2025.",
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
                  <a href="/" class="text-decoration-none" aria-label="Home">
                    <svg viewBox="0 0 20 18" xmlns="http://www.w3.org/2000/svg" width="20" height="18">
                      <path d="M8 17.5V11.5H12V17.5H17V9.5H20L10 0.5L0 9.5H3V17.5H8Z" fill="currentColor" />
                    </svg>
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Web Design Training</li>
              </ol>
            </nav>
            <!-- Banner Content -->
            <div class="banner-course-content">
              <!-- Course At-a-Glance -->
              <section class="at-a-glance text-light">
                <h1 class="heading-main-1 text-white">Web Design Training with Certification: Responsive Web Design</h1>
                <!-- Review Card -->
                <div class="banner-review-card">
                  <div class="enrolled-group d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700" viewBox="0 0 24 24" aria-hidden="true" role="img" class="me-2">
                      <path d="M16 11c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-8 0c1.7 0 3-1.3 3-3S9.7 5 8 5 5 6.3 5 8s1.3 3 3 3zm0 2c-2.3 0-7 1.2-7 3.5V20h14v-3.5C15 14.2 10.3 13 8 13zm8 0c-.3 0-.7 0-1 .1 1.2.8 2 2.1 2 3.4V20h6v-3.5c0-2.3-4.7-3.5-7-3.5z" />
                    </svg>
                    <span>5,100 Participants Enrolled</span>
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
                  The <strong>Web Design Training with Certification: Responsive Web Design</strong> at
                  <span class="red-color">WebAsha Technologies</span> in Pune provides comprehensive, hands-on training for aspiring web designers and developers. This course covers HTML, CSS, JavaScript, responsive layouts, UI/UX principles, and front-end development techniques to create user-friendly, modern websites optimized for all devices.
                  <br><br>
                  The Web Design certification is a valuable credential for professionals seeking to excel in creating responsive, visually appealing websites. With expert-led instruction, real-world projects, and practical training aligned with industry standards, this course ensures you are well-prepared to build professional websites and achieve career growth. Whether you're advancing your web design skills or pursuing a career in front-end development, WebAsha Technologies provides the tools and mentorship to succeed.
                  <br><br>
                  Enroll now to master responsive web design and elevate your career in web development with a trusted training provider.
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
                      <td class="text-light">Web Design Certification</td>
                    </tr>
                    <tr>
                      <td class="fw-semibold text-warning">Institute:</td>
                      <td class="text-light">WebAsha Technologies, Pune</td>
                    </tr>
                    <tr>
                      <td class="fw-semibold text-warning">Includes:</td>
                      <td class="text-light">Hands-on Projects, Real-World Web Design Tools, Practical Training</td>
                    </tr>
                  </tbody>
                </table>
              </section>
              <!-- Buttons -->
              <div class="button-group mt-4 mb-4">
                <a href="https://api.whatsapp.com/send?phone=+91-8010911256&text=Hello%20WebAsha,%20I%20want%20Web%20Design%20Info" class="btn-whatsapp text-decoration-none" aria-label="Contact via WhatsApp">
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
                  <source srcset="assets/img/course/webdesign/webdesign.webp" type="image/webp">
                  <img src="assets/img/course/webdesign/webdesign.webp" alt="Web Design Training Course Preview Thumbnail" width="360" height="220" loading="lazy" decoding="async" class="img-fluid rounded shadow-sm">
                </picture>
                <button type="button" class="video-btn position-absolute top-50 start-50 translate-middle" aria-label="Play Web Design course promo video" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="ERtp4zua0-s">
                  <svg class="play-icon" viewBox="0 0 64 64" width="64" height="64" aria-hidden="true" focusable="false">
                    <circle cx="32" cy="32" r="32" fill="rgba(0,0,0,0.55)" />
                    <path d="M26 20 L45 32 L26 44 z" fill="#fff" />
                  </svg>
                </button>
              </div>
              <div class="pera-group">
                <p class="desc">Leading Global Web Design Training Platform</p>
                <p>Have Questions? Consult Our Experts</p>
              </div>
              <div class="button-group">
                <a href="#" class="animated-button1 mx-auto d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Web Design Course">
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
        { "@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [ { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://training.webasha.com/" }, { "@type": "ListItem", "position": 2, "name": "Web Design Training with Certification: Responsive Web Design", "item": "<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>" } ] }
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
        <section class="our-learners section-header text-center lazy-section">
            <?php include("include/programming/brands.php"); ?>
        </section>
        <!-- Recent Placements Video Testimonials Section -->
        <section class="course-recent-reviews section-header text-center lazy-section" id="sticky-sidebar2">
            <span class="section-badge">Recent Placements Testimonials</span>
            <h2 class="heading-main-1 text-white text-center">Responsive Web Design <span class="red-color">Recent Reviews</span>
      </h2>
            <?php include("include/programming/video-reviews.php"); ?>
        </section>
        <!-- Testimonials -->
        <section class="success-speaks-reviwe course-speaks section-header text-center lazy-section">
            <div class="container">
                <span class="section-badge">Recent Placements Testimonials</span>
                <h2 class="heading-main text-center mb-5">Responsive Web Design <span class="red-color">Reviews</span>
        </h2>
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
                    <!-- Preload critical image for LCP -->
                    <link rel="preload" href="https://i.ibb.co/5X09hRg/lab.gif" as="image" fetchpriority="high">
                    <span class="section-badge">Training Key Features</span>
                    <h2 class="heading-main-1 text-center">Web Design Course <span class="red-color">Training Key Features</span>
          </h2>
                    <p class="description text-center mb-5">Explore the fundamental advantages of our Web Design preparation courses designed for certification accomplishment in Pune’s vibrant digital sector.</p>
                    <?php include("include/programming/key-features.php"); ?>
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
                            <?php include("include/programming/slider/webdesign.php"); ?>
                        </section>
                        <!-- Course Prerequisites Start -->
                        <section class="contentcard lazy-section">
                            <div class="content-container" id="contentContainer1">
                                <div class="summary-details">
                                    <h2 class="heading-main text-center"> Responsive Web Design <span class="red-color"> Training Overview</span>
                  </h2>
                                    <p class="description mb-0"> Kickstart your digital career with our <b>Classroom and Online Responsive Web Design Training</b> at <b>WebAsha Technologies</b>. This program is crafted to provide <b>hands-on, project-based skills</b> for creating
                                        modern, responsive websites. Whether you're a novice or seeking certification, this course prepares you to excel in <b>web design certification</b> and advance your front-end development career in <b>2025 and beyond</b>.
                                        </p>
                                </div>
                                <h5 class="bold-text mb-2 mt-2">Responsive Web Design Training Overview:</h5>
                                <p class="description mb-0"> The <b>Web Design Training</b> emphasizes building expertise in <b>creating device-adaptive websites</b>. Through practical projects and real-world examples, participants learn to use HTML, CSS, JavaScript, and frameworks
                                    like Bootstrap to design responsive layouts, implement interactive elements, and ensure cross-browser compatibility. The course prioritizes applied learning for certification and professional web design. </p>
                                <h5 class="bold-text mb-2 mt-2">Intended Audience:</h5>
                                <p class="description mb-0"> This course is perfect for <b>aspiring web designers, front-end developers, and creative professionals</b> aiming to certify their design skills. It's also suitable for <b>students, career switchers, and specialists in Pune</b>                                    looking to enter web design. Whether new to coding or with basic HTML/CSS knowledge, this training guides you from fundamentals to advanced responsive techniques. </p>
                                <h5 class="bold-text mb-2 mt-2">Topics Covered:</h5>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>Web Fundamentals:</b> Introduction to HTML structure and semantics.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>CSS Styling:</b> Advanced CSS for layouts, animations, and effects.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>Responsive Design:</b> Media queries and flexible grids for multi-device compatibility.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>JavaScript Basics:</b> Add interactivity with DOM manipulation and events.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>Bootstrap Framework:</b> Use Bootstrap for rapid responsive development.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>UI/UX Principles:</b> Design user-centered interfaces with accessibility in mind.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>Version Control:</b> Manage code with Git and GitHub.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>Performance Optimization:</b> Optimize sites for speed and SEO.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>Testing and Deployment:</b> Test cross-browser and deploy to hosting platforms.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>Advanced Tools:</b> Integrate Sass, jQuery, and modern frameworks.
                                    </li>
                                </ul>
                                <h5 class="bold-text mb-2 mt-2">Requirements:</h5>
                                <p class="description mb-0"> No prior experience needed, but basic computer skills are helpful. For online sessions, a <b>stable internet connection</b> and <b>laptop</b> are required for coding and projects. The course features <b>hands-on assignments</b>                                    essential for building web design proficiency. </p>
                                <h5 class="bold-text mb-2 mt-2">Pre-Requisites:</h5>
                                <p class="description mb-0"> Basic familiarity with computers and the internet is recommended. No coding background required, as the course starts from fundamentals. </p>
                                <h5 class="bold-text mb-2 mt-2">Career Benefits:</h5>
                                <p class="description mb-0"> Gaining a <b>Web Design certification</b> opens opportunities in front-end development. Certified designers often secure roles like <b>Web Designer, Front-End Developer, or UI Specialist</b>. In Pune and India, web designers
                                    earn <b>₹3 LPA to ₹10 LPA</b>, with prospects for global freelance and agency work. </p>
                                <div class="gradient-overlay"></div>
                            </div>
                            <button class="toggle-button" onclick="toggleContent('contentContainer1', this)">View More</button>
                        </section>
                        <!-- Web Design Track Start -->
                        <section class="contentcard lazy-section">
                            <?php include("include/programming/webdesign-track.php"); ?>
                        </section>
                        <!-- Web Design Track End -->
                        <!-- Course Syllabus Start -->
                        <section class="course-top-curriculum lazy-section" id="syllabus">
                            <div class="contentcard">
                                <h2 class="heading-main text-center mb-2">Curriculum <span class="red-color">Web Design</span></h2>
                                <div class="content-container" id="contentContainer3">
                                    <div class="accordion-curriculum mb-5">
                                        <div class="top-curriculum-header">
                                            <p class="desc">Responsive Web Design syllabus</p>
                                            <a href="#" class="btn btn-white" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">
                                                <svg viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.625 11.375C0.79076 11.375 0.949732 11.4408 1.06694 11.5581C1.18415 11.6753 1.25 11.8342 1.25 12V15.125C1.25 15.4565 1.3817 15.7745 1.61612 16.0089C1.85054 16.2433 2.16848 16.375 2.5 16.375H17.5C17.8315 16.375 18.1495 16.2433 18.3839 16.0089C18.6183 15.7745 18.75 15.4565 18.75 15.125V12C18.75 11.8342 18.8158 11.6753 18.9331 11.5581C19.0503 11.4408 19.2092 11.375 19.375 11.375C19.5408 11.375 19.6997 11.4408 19.8169 11.5581C19.9342 11.6753 20 11.8342 20 12V15.125C20 15.788 19.7366 15.4239 19.2678 16.8928C18.7989 17.3616 18.163 17.625 17.5 17.625H2.5C1.83696 17.625 1.20107 17.3616 0.732233 16.8928C0.263392 16.4239 0 15.788 0 15.125V12C0 11.8342 0.065848 11.6753 0.183058 11.5581C0.300269 11.4408 0.45924 11.375 0.625 11.375Z"
                                                    />
                                                    <path d="M9.55829 13.8175C9.61635 13.8757 9.68532 13.9219 9.76125 13.9534C9.83718 13.9849 9.91858 14.0011 10.0008 14.0011C10.083 14.0011 10.1644 13.9849 10.2403 13.9534C10.3163 13.9219 10.3852 13.8757 10.4433 13.8175L14.1933 10.0675C14.3106 9.95014 14.3766 9.79097 14.3766 9.625C14.3766 9.45903 14.3106 9.29986 14.1933 9.1825C14.0759 9.06514 13.9168 8.99921 13.7508 8.99921C13.5848 8.99921 13.4256 9.06514 13.3083 9.1825L10.6258 11.8663V0.875C10.6258 0.70924 10.5599 0.550268 10.4427 0.433058C10.3255 0.315848 10.1666 0.25 10.0008 0.25C9.83503 0.25 9.67606 0.315848 9.55885 0.433058C9.44164 0.550268 9.37579 0.70924 9.37579 0.875V11.8663L6.69329 9.1825C6.57593 9.06514 6.41676 8.99921 6.25079 8.99921C6.08482 8.99921 5.92565 9.06514 5.80829 9.1825C5.69093 9.29986 5.625 9.45903 5.625 9.625C5.625 9.79097 5.69093 9.95014 5.80829 10.0675L9.55829 13.8175Z"
                                                    />
                                                </svg>
                                                Download Syllabus
                                            </a>
                                        </div>
                                        <div class="accordion accordion-flush" id="curriculumAccordionFlush">
                                            <!-- Module 1: HTML Fundamentals -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading-curriculum-1">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-1" aria-expanded="false" aria-controls="flush-curriculum-1">
                <div class="curriculum-number"><span>1.</span> HTML Fundamentals</div>
              </button>
            </h2>
                                                <div id="flush-curriculum-1" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-1" data-bs-parent="#curriculumAccordionFlush">
                                                    <ul class="accordion-body description mb-0">
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>HTML structure and tags.</li>
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Semantic HTML for accessibility.</li>
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Forms and multimedia elements.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Module 2: CSS Styling -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading-curriculum-2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-2" aria-expanded="false" aria-controls="flush-curriculum-2">
                <div class="curriculum-number"><span>2.</span> CSS Styling and Layouts</div>
              </button>
            </h2>
                                                <div id="flush-curriculum-2" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-2" data-bs-parent="#curriculumAccordionFlush">
                                                    <ul class="accordion-body description mb-0">
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Selectors, properties, and values.</li>
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Flexbox and Grid layouts.</li>
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Animations and transitions.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Module 3: Responsive Design -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading-curriculum-3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-3" aria-expanded="false" aria-controls="flush-curriculum-3">
                <div class="curriculum-number"><span>3.</span> Responsive Web Design</div>
              </button>
            </h2>
                                                <div id="flush-curriculum-3" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-3" data-bs-parent="#curriculumAccordionFlush">
                                                    <ul class="accordion-body description mb-0">
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Media queries for device adaptation.</li>
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Mobile-first design principles.</li>
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Viewport and flexible images.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Module 4: JavaScript Basics -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading-curriculum-4">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-4" aria-expanded="false" aria-controls="flush-curriculum-4">
                <div class="curriculum-number"><span>4.</span> JavaScript for Interactivity</div>
              </button>
            </h2>
                                                <div id="flush-curriculum-4" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-4" data-bs-parent="#curriculumAccordionFlush">
                                                    <ul class="accordion-body description mb-0">
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Variables, functions, and events.</li>
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>DOM manipulation techniques.</li>
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Basic form validation.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Module 5: Bootstrap -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading-curriculum-5">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-5" aria-expanded="false" aria-controls="flush-curriculum-5">
                <div class="curriculum-number"><span>5.</span> Bootstrap Framework</div>
              </button>
            </h2>
                                                <div id="flush-curriculum-5" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-5" data-bs-parent="#curriculumAccordionFlush">
                                                    <ul class="accordion-body description mb-0">
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Grid system and components.</li>
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Responsive navigation bars.</li>
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Customizing Bootstrap themes.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Module 6: UI/UX Principles -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading-curriculum-6">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-6" aria-expanded="false" aria-controls="flush-curriculum-6">
                <div class="curriculum-number"><span>6.</span> UI/UX Design Principles</div>
              </button>
            </h2>
                                                <div id="flush-curriculum-6" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-6" data-bs-parent="#curriculumAccordionFlush">
                                                    <ul class="accordion-body description mb-0">
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Accessibility standards (WCAG).</li>
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Color theory and typography.</li>
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>User-centered design basics.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Module 7: Version Control -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading-curriculum-7">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-7" aria-expanded="false" aria-controls="flush-curriculum-7">
                <div class="curriculum-number"><span>7.</span> Version Control with Git</div>
              </button>
            </h2>
                                                <div id="flush-curriculum-7" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-7" data-bs-parent="#curriculumAccordionFlush">
                                                    <ul class="accordion-body description mb-0">
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Git basics and commands.</li>
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Collaborating on GitHub.</li>
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Branching and merging workflows.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Module 8: Optimization -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading-curriculum-8">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-8" aria-expanded="false" aria-controls="flush-curriculum-8">
                <div class="curriculum-number"><span>8.</span> Performance Optimization and SEO</div>
              </button>
            </h2>
                                                <div id="flush-curriculum-8" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-8" data-bs-parent="#curriculumAccordionFlush">
                                                    <ul class="accordion-body description mb-0">
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Minifying CSS/JS files.</li>
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Image optimization techniques.</li>
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Basic SEO best practices.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Module 9: Testing -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading-curriculum-9">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-9" aria-expanded="false" aria-controls="flush-curriculum-9">
                <div class="curriculum-number"><span>9.</span> Testing and Cross-Browser Compatibility</div>
              </button>
            </h2>
                                                <div id="flush-curriculum-9" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-9" data-bs-parent="#curriculumAccordionFlush">
                                                    <ul class="accordion-body description mb-0">
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Browser developer tools usage.</li>
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Responsive testing on devices.</li>
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Fixing compatibility issues.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Module 10: Deployment -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading-curriculum-10">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-curriculum-10" aria-expanded="false" aria-controls="flush-curriculum-10">
                <div class="curriculum-number"><span>10.</span> Website Deployment and Maintenance</div>
              </button>
            </h2>
                                                <div id="flush-curriculum-10" class="accordion-collapse collapse" aria-labelledby="heading-curriculum-10" data-bs-parent="#curriculumAccordionFlush">
                                                    <ul class="accordion-body description mb-0">
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Hosting platforms like GitHub Pages.</li>
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Domain registration basics.</li>
                                                        <li><i class="fa-solid fa-angles-right text-danger me-2"></i>Site maintenance best practices.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end accordion -->
                                    </div>
                                    <!-- end accordion-curriculum -->
                                    <div class="gradient-overlay"></div>
                                </div>
                                <!-- end content-container -->
                                <button class="toggle-button" onclick="toggleContent('contentContainer3', this)">View More</button>
                            </div>
                        </section>
                        <!-- Trainer Profile Start -->
                        <section class="contentcard lazy-section" id="our-instructor">
                            <h2 class="heading-main text-center">Meet Our <span class="red-color">Expert Trainers</span>
              </h2>
                            <p class="description text-center"> At <b>WebAsha Training Institute</b>, our <b>experienced web design trainers</b> combine creative expertise with technical skills in every session. These professionals, skilled in modern web tools, guide learners to master
                                responsive design. </p>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                    <b>Focused Methodology:</b> Trainers use a practical approach aligned with certification goals, teaching web design through structured projects.
                                </li>
                                <li>
                                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                    <b>Realistic Projects:</b> Build <b>responsive websites</b> that simulate industry tasks, practicing HTML, CSS, and JavaScript.
                                </li>
                                <li>
                                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                    <b>Tailored Guidance:</b> Personalized support addresses individual needs for design proficiency.
                                </li>
                                <li>
                                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                    <b>Certification Prep:</b> Share strategies for project management in exams.
                                </li>
                                <li>
                                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                    <b>Industry Background:</b> Draw from designing sites for businesses and agencies.
                                </li>
                                <li>
                                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                    <b>Qualified Experts:</b> Hold relevant web design certifications.
                                </li>
                                <li>
                                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                    <b>Applied Knowledge:</b> Connect training to real web projects.
                                </li>
                                <li>
                                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                    <b>Success History:</b> Guide over 1,000 students yearly to goals.
                                </li>
                                <li>
                                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                    <b>Partnerships:</b> Ties with firms like <b>Google, Infosys</b> keep content current.
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
                            <h2 class="heading-main text-center mb-0">Web Design <span class="red-color">Certification Bootcamp</span>
              </h2>
                            <p class="description mb-0">Web Design certification confirms your skills in creating responsive sites, recognized for front-end proficiency worldwide.</p>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                    <b>Respected Credential:</b> Boosts your portfolio with standard certification.
                                </li>
                                <li>
                                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                    <b>Project-Oriented:</b> Assesses real design abilities.
                                </li>
                                <li>
                                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                    <b>Core for Designers:</b> Prepares for web roles.
                                </li>
                                <li>
                                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                    <b>Prerequisites:</b> Basic computer skills suggested.
                                </li>
                                <li>
                                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                    <b>Validity:</b> Lifetime generally.
                                </li>
                                <li>
                                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                    <b>Practical Exam:</b> Project-based evaluation.
                                </li>
                                <li>
                                    <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                    <b>Languages:</b> English.
                                </li>
                            </ul>
                        </section>
                        <!-- Certified Candidates -->
                        <section class="course-certified-candidates lazy-section" id="exam-certification">
                            <?php include("include/programming/cert/webdesign.php"); ?>
                        </section>
                        <!-- Exam Info -->
                        <section class="course-exam-information lazy-section">
                            <h2 class="heading-main text-center">Web Design Certification <span class="red-color">Details and Format</span>
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
                                            <td>Professional Web Designer Certification</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Exam Duration</strong>
                                            </td>
                                            <td>2 Hours</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Number of Questions</strong>
                                            </td>
                                            <td>Multiple-choice and project tasks</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Exam Fee</strong>
                                            </td>
                                            <td>Varies (approx ₹5,000-₹10,000 in India)</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Validity</strong>
                                            </td>
                                            <td>Lifetime</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Exam Code</strong>
                                            </td>
                                            <td>Varies by provider</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Exam Format</strong>
                                            </td>
                                            <td>Online Test/Project</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Passing Score</strong>
                                            </td>
                                            <td>70% or higher</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Eligibility / Prerequisite</strong>
                                            </td>
                                            <td>Basic computer skills</td>
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
                                            <td>Online</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        <!-- Passing Score -->
                        <section class="course-ceh-group lazy-section">
                            <h4 class="text-center mb-0">Passing Criteria for Web Design Certification</h4>
                            <p class="description text-center mb-0">To earn Web Design certification, score 70% or higher on the exam (2 hours). Offered by WebAsha in Pune, it tests design skills. Fees approx ₹5,000-₹10,000 in India, lifetime validity. Conducted online in English. Train with
                                WebAsha for mastery. </p>
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
                                <h2 class="heading-main text-center">Job Roles and Salary Outlook After <span class="red-color">Web Design Certification</span>
                </h2>
                                <p class="description text-center">Gaining Web Design certification enables front-end roles in India's digital growth for 2025.</p>
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
                                                    <strong>Web Designer</strong>
                                                </td>
                                                <td>Create responsive layouts.</td>
                                                <td>Fresher: ₹3–5 LPA
                                                    <br>Experienced: ₹6–10 LPA </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Front-End Developer</strong>
                                                </td>
                                                <td>Implement HTML/CSS/JS.</td>
                                                <td>Fresher: ₹3.5–6 LPA
                                                    <br>Experienced: ₹7–12 LPA </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>UI Designer</strong>
                                                </td>
                                                <td>Design user interfaces.</td>
                                                <td>Fresher: ₹3–5 LPA
                                                    <br>Experienced: ₹6–11 LPA </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>UX Specialist</strong>
                                                </td>
                                                <td>Focus on user experience.</td>
                                                <td>Fresher: ₹4–6 LPA
                                                    <br>Experienced: ₹8–13 LPA </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Freelance Designer</strong>
                                                </td>
                                                <td>Build custom websites.</td>
                                                <td>Fresher: ₹3–5 LPA
                                                    <br>Experienced: ₹6–12 LPA </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Digital Marketer</strong>
                                                </td>
                                                <td>Create landing pages.</td>
                                                <td>Fresher: ₹3.5–5 LPA
                                                    <br>Experienced: ₹7–11 LPA </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Content Creator</strong>
                                                </td>
                                                <td>Design blogs/sites.</td>
                                                <td>Fresher: ₹3–4.5 LPA
                                                    <br>Experienced: ₹5–9 LPA </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>E-commerce Designer</strong>
                                                </td>
                                                <td>Optimize online stores.</td>
                                                <td>Fresher: ₹4–6 LPA
                                                    <br>Experienced: ₹8–13 LPA </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>SEO Specialist</strong>
                                                </td>
                                                <td>Design SEO-friendly sites.</td>
                                                <td>Fresher: ₹3.5–5 LPA
                                                    <br>Experienced: ₹6–10 LPA </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Web Consultant</strong>
                                                </td>
                                                <td>Advise on design strategies.</td>
                                                <td>Fresher: ₹4–6 LPA
                                                    <br>Experienced: ₹8–12 LPA </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <p class="description">
                                    <b>Note:</b> Salaries vary by experience, location, and company; Web Design certification boosts potential in 2025.
                                </p>
                                <p class="description">India's digital economy forecasts numerous design jobs by 2025.</p>
                                <div class="gradient-overlay"></div>
                            </div>
                            <button class="toggle-button" onclick="toggleContent('contentContainer4', this)">View More</button>
                        </section>
                        <section class="contentcard lazy-section">
                            <div class="content-container" id="contentContainer5">
                                <h2 class="heading-main text-center">Career Benefits of <span class="red-color">Web Design Certification</span>
                </h2>
                                <p class="description text-center"> In the <b>digital-first world of 2025</b>, <b>Web Design certification</b> is crucial for professionals creating engaging online experiences. Web Design training at <b>WebAsha Technologies</b> provides <b>practical design skills</b>                                    to build responsive websites — abilities highly sought in agencies, e-commerce, and digital marketing. </p>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>Growing Demand:</b> With online presence essential, certified designers are needed for responsive sites.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>Competitive Pay:</b> Certified web designers earn <b>₹3 LPA to ₹10 LPA</b> in design roles.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>Progression Paths:</b> Base for advanced certifications in UI/UX or full-stack development.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>Global Opportunities:</b> Skills applicable internationally in digital hubs.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>Immediate Use:</b> Project-focused for direct application in work.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>Broad Coverage:</b> Includes HTML, CSS, responsive techniques for versatility.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>Career Growth:</b> Advance to senior design or UI roles.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>Freelance Options:</b> Design websites for global clients.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>Creative Impact:</b> Build engaging, user-friendly digital experiences.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>Future-Ready:</b> Aligns with trends in mobile-first design.
                                    </li>
                                </ul>
                                <div class="gradient-overlay"></div>
                            </div>
                            <button class="toggle-button" onclick="toggleContent('contentContainer5', this)">View More</button>
                        </section>
                        <!-- Why Choose Us -->
                        <section class="contentcard lazy-section">
                            <div class="content-container" id="contentContainer6">
                                <h2 class="heading-main text-center"> Why Choose Web Design Training at <span class="red-color">WebAsha Technologies in Pune</span>
                </h2>
                                <p class="description text-center"> Prepare for <b>Web Design certification</b> with <b>WebAsha Technologies</b>, one of Pune’s leading institutes for front-end development. Our program is crafted for aspiring designers to master <b>responsive web skills</b>                                    with hands-on projects aligned to industry needs. With skilled trainers, practical focus, and support, WebAsha makes your web design certification path effective and career-oriented. </p>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>Skilled Trainers:</b> Learn from <b>experienced web designers</b> with industry backgrounds, guiding through real projects.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>Full Curriculum:</b> Covers all essential web design topics — from HTML/CSS to Bootstrap — leaving no gap.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>Project Labs:</b> Create <b>responsive websites</b> using modern tools for practical confidence.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>Flexible Batches:</b> Weekday/weekend options to fit your schedule.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>Modern Facilities:</b> Equipped labs with latest design software.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>Trusted Institute:</b> Known as <b>Pune’s top web design provider</b> for results.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>Community Network:</b> Connect with Pune's digital professionals.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>Certification Emphasis:</b> Tailored for exam success with projects.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>Key Skills:</b> Master responsive design for job readiness.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angles-right text-danger me-2"></i>
                                        <b>Alumni Success:</b> Graduates at agencies and firms like <b>Google, Infosys</b>.
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
            <h2 class="heading-main-1 text-center">Explore Alumni with Profiles <span class="red-color">Like Yours</span>
      </h2>
            <p class="desc text-center">Discover their journeys, specialties, and achievements.</p>
            <?php include("include/programming/alumni.php"); ?>
        </section>
        <!-- Related Courses -->
        <section class="course-related-courses lazy-section visible">
            <div class="section-header text-center mb-4">
                <span class="section-badge">Related Courses</span>
                <h2 class="heading-main-1 text-center">Explore <span class="red-color">Related Courses</span>
        </h2>
                <p class="desc text-center">Identify complementary courses to enhance your skills and career.</p>
            </div>
            <?php include("include/programming/related-courses.php"); ?>
        </section>
        <!-- FAQs -->
        <section class="course-webasha-faq lazy-section" id="faqs">
            <div class="container mt-4 mb-4">
                <div class="section-header text-center mb-4">
                    <span class="section-badge">FAQs</span>
                    <h2 class="heading-main-1 text-center">Web Design Training FAQs <span class="red-color">(Frequently Asked Questions)</span>
          </h2>
                </div>
                <div class="all-theme-accordion" id="content">
                    <div class="accordion accordion-flush" id="coursefaqAccordionFlush">
                        <!-- FAQ 1: Overview of the Web Design training -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq1" aria-expanded="false" aria-controls="flush-coursefaq1">What is included in the Web Design training?</button>
              </h2>
                            <div id="flush-coursefaq1" class="accordion-collapse collapse show" data-bs-parent="#coursefaqAccordionFlush">
                                <div class="accordion-body pt-0">
                                    <p class="description mb-0">The Web Design training at WebAsha Technologies covers essential skills for creating responsive websites, including HTML structure, CSS styling, JavaScript interactivity, Bootstrap frameworks, UI/UX principles, version
                                        control with Git, performance optimization, SEO basics, cross-browser testing, and deployment. The course emphasizes hands-on projects and real-world simulations to prepare for professional certification and practical
                                        web design.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 2: Eligibility criteria -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq2" aria-expanded="false" aria-controls="flush-coursefaq2">Who can enroll in Web Design training?</button>
              </h2>
                            <div id="flush-coursefaq2" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                                <div class="accordion-body pt-0">
                                    <p class="description mb-0">This course is ideal for aspiring web designers, front-end developers, creative professionals, students, and career changers with basic computer skills. It’s suitable for beginners or those with some HTML/CSS knowledge
                                        aiming to specialize in responsive web design. No coding background is required, as it starts from fundamentals.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 3: Certification validity -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq3" aria-expanded="false" aria-controls="flush-coursefaq3">How long is the Web Design certification valid?</button>
              </h2>
                            <div id="flush-coursefaq3" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                                <div class="accordion-body pt-0">
                                    <p class="description mb-0">Web Design certifications typically have lifetime validity, though some providers may suggest updates with new technologies. Continuous learning is recommended to stay current with web standards.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 4: Exam format -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq4" aria-expanded="false" aria-controls="flush-coursefaq4">What is the format of the Web Design certification exam?</button>
              </h2>
                            <div id="flush-coursefaq4" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                                <div class="accordion-body pt-0">
                                    <p class="description mb-0">The exam usually includes multiple-choice questions and project tasks, assessing skills in creating responsive websites, conducted online or in a practical environment.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 5: Passing score -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq5" aria-expanded="false" aria-controls="flush-coursefaq5">What is the passing score for Web Design certification?</button>
              </h2>
                            <div id="flush-coursefaq5" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                                <div class="accordion-body pt-0">
                                    <p class="description mb-0">A passing score is typically 70% or higher, varying by provider. Focus on project accuracy during preparation.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 6: Exam languages -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq6" aria-expanded="false" aria-controls="flush-coursefaq6">In which languages is the Web Design certification exam available?</button>
              </h2>
                            <div id="flush-coursefaq6" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                                <div class="accordion-body pt-0">
                                    <p class="description mb-0">The exam is primarily in English. Some providers offer multilingual support; confirm with the certification body.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 7: Training duration -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq7" aria-expanded="false" aria-controls="flush-coursefaq7">How long does Web Design training take?</button>
              </h2>
                            <div id="flush-coursefaq7" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                                <div class="accordion-body pt-0">
                                    <p class="description mb-0">The course typically spans 4-6 weeks for intensive batches, with flexible options for part-time learners.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 8: Cost of certification -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq8" aria-expanded="false" aria-controls="flush-coursefaq8">What is the cost of Web Design certification?</button>
              </h2>
                            <div id="flush-coursefaq8" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                                <div class="accordion-body pt-0">
                                    <p class="description mb-0">Certification fees range from ₹5,000 to ₹10,000 in India. Inquire with WebAsha for training costs.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 9: Online vs in-person training -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq9" aria-expanded="false" aria-controls="flush-coursefaq9">What’s the difference between online and in-person Web Design training?</button>
              </h2>
                            <div id="flush-coursefaq9" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                                <div class="accordion-body pt-0">
                                    <p class="description mb-0">Online offers flexibility with virtual tools; in-person in Pune provides collaborative interaction. Both cover the same content.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 10: Prerequisites for exam -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq10" aria-expanded="false" aria-controls="flush-coursefaq10">Are there any prerequisites for the Web Design certification exam?</button>
              </h2>
                            <div id="flush-coursefaq10" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                                <div class="accordion-body pt-0">
                                    <p class="description mb-0">Basic computer skills are recommended; no prior coding needed.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 11: Recertification process -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq11" aria-expanded="false" aria-controls="flush-coursefaq11">Is recertification required for Web Design?</button>
              </h2>
                            <div id="flush-coursefaq11" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                                <div class="accordion-body pt-0">
                                    <p class="description mb-0">Generally lifetime; updates suggested for new trends.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 12: Job opportunities -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq12" aria-expanded="false" aria-controls="flush-coursefaq12">What job roles can I pursue with Web Design certification?</button>
              </h2>
                            <div id="flush-coursefaq12" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                                <div class="accordion-body pt-0">
                                    <p class="description mb-0">Web Designer, Front-End Developer, with ₹3-10 LPA.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 13: Training locations -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq13" aria-expanded="false" aria-controls="flush-coursefaq13">Where is Web Design training offered?</button>
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
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq14" aria-expanded="false" aria-controls="flush-coursefaq14">What study materials are provided for Web Design?</button>
              </h2>
                            <div id="flush-coursefaq14" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                                <div class="accordion-body pt-0">
                                    <p class="description mb-0">Guides, templates, practice projects.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 15: Exam retake policy -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq15" aria-expanded="false" aria-controls="flush-coursefaq15">What is the policy for retaking the Web Design exam?</button>
              </h2>
                            <div id="flush-coursefaq15" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                                <div class="accordion-body pt-0">
                                    <p class="description mb-0">Allowed with fees; per provider policies.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 16: Career support -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq16" aria-expanded="false" aria-controls="flush-coursefaq16">Does Web Design training offer career support?</button>
              </h2>
                            <div id="flush-coursefaq16" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                                <div class="accordion-body pt-0">
                                    <p class="description mb-0">Yes, resume, interviews, placements.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 17: Practical skills -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq17" aria-expanded="false" aria-controls="flush-coursefaq17">How does Web Design training incorporate practical skills?</button>
              </h2>
                            <div id="flush-coursefaq17" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                                <div class="accordion-body pt-0">
                                    <p class="description mb-0">Through projects building responsive sites.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 18: Accreditation -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq18" aria-expanded="false" aria-controls="flush-coursefaq18">Is Web Design training accredited?</button>
              </h2>
                            <div id="flush-coursefaq18" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                                <div class="accordion-body pt-0">
                                    <p class="description mb-0">Aligns with industry standards for credibility.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 19: Group discounts -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq19" aria-expanded="false" aria-controls="flush-coursefaq19">Group discounts for Web Design training?</button>
              </h2>
                            <div id="flush-coursefaq19" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                                <div class="accordion-body pt-0">
                                    <p class="description mb-0">Yes, for 3+; inquire at WebAsha.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 20: Post-training support -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq20" aria-expanded="false" aria-controls="flush-coursefaq20">Support after Web Design training?</button>
              </h2>
                            <div id="flush-coursefaq20" class="accordion-collapse collapse" data-bs-parent="#coursefaqAccordionFlush">
                                <div class="accordion-body pt-0">
                                    <p class="description mb-0">Lifetime materials, community access.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script type="application/ld+json">
            { "@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{ "@type": "Question", "name": "What is included in the Web Design training?", "acceptedAnswer": { "@type": "Answer", "text": "The Web Design training at WebAsha Technologies covers
            essential skills for creating responsive websites, including HTML structure, CSS styling, JavaScript interactivity, Bootstrap frameworks, UI/UX principles, version control with Git, performance optimization, SEO basics, cross-browser testing,
            and deployment. The course emphasizes hands-on projects and real-world simulations to prepare for professional certification and practical web design." } }, { "@type": "Question", "name": "Who can enroll in Web Design training?", "acceptedAnswer":
            { "@type": "Answer", "text": "This course is ideal for aspiring web designers, front-end developers, creative professionals, students, and career changers with basic computer skills. It’s suitable for beginners or those with some HTML/CSS
            knowledge aiming to specialize in responsive web design. No coding background is required, as it starts from fundamentals." } }, { "@type": "Question", "name": "How long is the Web Design certification valid?", "acceptedAnswer": { "@type":
            "Answer", "text": "Web Design certifications typically have lifetime validity, though some providers may suggest updates with new technologies. Continuous learning is recommended to stay current with web standards." } }, { "@type": "Question",
            "name": "What is the format of the Web Design certification exam?", "acceptedAnswer": { "@type": "Answer", "text": "The exam usually includes multiple-choice questions and project tasks, assessing skills in creating responsive websites, conducted
            online or in a practical environment." } }, { "@type": "Question", "name": "What is the passing score for Web Design certification?", "acceptedAnswer": { "@type": "Answer", "text": "A passing score is typically 70% or higher, varying by provider.
            Focus on project accuracy during preparation." } }, { "@type": "Question", "name": "In which languages is the Web Design certification exam available?", "acceptedAnswer": { "@type": "Answer", "text": "The exam is primarily in English. Some
            providers offer multilingual support; confirm with the certification body." } }, { "@type": "Question", "name": "How long does Web Design training take?", "acceptedAnswer": { "@type": "Answer", "text": "The course typically spans 4-6 weeks
            for intensive batches, with flexible options for part-time learners." } }, { "@type": "Question", "name": "What is the cost of Web Design certification?", "acceptedAnswer": { "@type": "Answer", "text": "Certification fees range from ₹5,000
            to ₹10,000 in India. Inquire with WebAsha for training costs." } }, { "@type": "Question", "name": "What’s the difference between online and in-person Web Design training?", "acceptedAnswer": { "@type": "Answer", "text": "Online offers flexibility
            with virtual tools; in-person in Pune provides collaborative interaction. Both cover the same content." } }, { "@type": "Question", "name": "Are there any prerequisites for the Web Design certification exam?", "acceptedAnswer": { "@type":
            "Answer", "text": "Basic computer skills are recommended; no prior coding needed." } }, { "@type": "Question", "name": "Is recertification required for Web Design?", "acceptedAnswer": { "@type": "Answer", "text": "Generally lifetime; updates
            suggested for new trends." } }, { "@type": "Question", "name": "What job roles can I pursue with Web Design certification?", "acceptedAnswer": { "@type": "Answer", "text": "Web Designer, Front-End Developer, with ₹3-10 LPA." } }, { "@type":
            "Question", "name": "Where is Web Design training offered?", "acceptedAnswer": { "@type": "Answer", "text": "Online and in-person in Pune at WebAsha." } }, { "@type": "Question", "name": "What study materials are provided for Web Design?",
            "acceptedAnswer": { "@type": "Answer", "text": "Guides, templates, practice projects." } }, { "@type": "Question", "name": "What is the policy for retaking the Web Design exam?", "acceptedAnswer": { "@type": "Answer", "text": "Allowed with
            fees; per provider policies." } }, { "@type": "Question", "name": "Does Web Design training offer career support?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, resume, interviews, placements." } }, { "@type": "Question", "name": "How
            does Web Design training incorporate practical skills?", "acceptedAnswer": { "@type": "Answer", "text": "Through projects building responsive sites." } }, { "@type": "Question", "name": "Is Web Design training accredited?", "acceptedAnswer":
            { "@type": "Answer", "text": "Aligns with industry standards for credibility." } }, { "@type": "Question", "name": "Group discounts for Web Design training?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, for 3+; inquire at WebAsha."
            } }, { "@type": "Question", "name": "Support after Web Design training?", "acceptedAnswer": { "@type": "Answer", "text": "Lifetime materials, community access." } }] }
        </script>
        <!-- Other Courses -->
        <section class="other-course-kubernetes lazy-section">
            <div class="container">
                <div class="course-kubernetes-wraper">
                    <div class="course-kubernetes">
                        <h2 class="heading-main text-center">Browse Web Design related Resources</h2>
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