<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include common header links / global meta / favicon / CSS / JS -->
    <?php include("include/headerlink.php"); ?>
    <!-- Page-specific metadata (Student Feedback Page) -->
    <?php
      $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
      $current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
    <title>Student Feedback | WebAsha Technologies - IT Training in Pune</title>
    <meta name="description" content="Discover authentic student feedback and success stories from WebAsha Technologies in Pune. Learn how our IT training, expert instructors, and placement support transform careers.">
    <meta name="keywords" content="WebAsha Technologies Feedback, IT Training Testimonials Pune, Student Reviews, Course Feedback, Placement Success Stories, IT Training Pune">
    <!-- Canonical URL to avoid duplicate content -->
    <link rel="canonical" href="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <!-- Page-specific Open Graph for social sharing -->
    <meta property="og:title" content="Student Feedback | WebAsha Technologies - IT Training in Pune">
    <meta property="og:description" content="Read real student testimonials at WebAsha Technologies in Pune. Explore how our hands-on IT training and placement support lead to career success.">
    <meta property="og:url" content="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <meta property="og:image" content="https://training.webasha.com/assets/img/testimonials/main-testimonial.webp">
    <meta property="og:image:alt" content="Student Feedback and Testimonials at WebAsha Technologies in Pune">
    <meta property="og:type" content="website">
    <!-- Page-specific Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Student Feedback | WebAsha Technologies - IT Training in Pune">
    <meta name="twitter:description" content="Hear from WebAsha Technologies’ students about their IT training experience, hands-on projects, and job placement success in Pune.">
    <meta name="twitter:image" content="https://training.webasha.com/assets/img/testimonials/main-testimonial.webp">
    <!-- Page-specific JSON-LD: Organization schema for enhanced search visibility -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "WebAsha Technologies",
      "url": "https://training.webasha.com/",
      "logo": "https://training.webasha.com/assets/img/logo.webp",
      "description": "Explore student feedback and testimonials at WebAsha Technologies in Pune, highlighting our IT training quality, hands-on labs, and career placement support.",
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
</head>

  <body>
    <!-- Site header -->
    <?php include("include/header.php"); ?>

    <!-- Banner / Breadcrumb (black banner) -->
    <div class="breadcrumb-bar text-center">
      <div class="container">
        <div class="row align-items-center py-3">
          <div class="col-12">
            <h1 class="heading-main-1 mb-2 text-white">Student Feedback</h1>
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
                <li class="breadcrumb-item active text-white" aria-current="page">Student Feedback</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

     <!-- Main Section -->
    <section class="section-header text-center lazy-section mt-4 mb-5" aria-label="Training Videos and Student Feedback">
      <div class="container">
        <span class="section-badge">Feedback Videos</span>
        <h2 class="heading-main-1 text-center">Watch Our <span class="red-color">Student Reviews</span></h2>
        <p class="description mb-5">Explore official training videos and student testimonials from WebAsha Technologies. Click play to watch real experiences and course insights directly from our YouTube channel.</p>

        <div class="row g-4">
          <!-- Video 1 -->
          <div class="col-md-4 col-sm-6">
            <div class="recent-reviews-items">
              <div class="items-video">
                <img src="assets/img/testimonials/feedback.webp" alt="Student Feedback Video 1" />
                <div class="thumbnail-position">
                  <button type="button" class="btn play-video border-0 video-btn" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="IT7R756mMK0">
                    <img src="assets/imgs/video-play.png" alt="Play" />
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Video 2 -->
          <div class="col-md-4 col-sm-6">
            <div class="recent-reviews-items">
              <div class="items-video">
                <img src="assets/img/testimonials/feedback1.webp" alt="Student Feedback Video 2" />
                <div class="thumbnail-position">
                  <button type="button" class="btn play-video border-0 video-btn" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="dbqDEZsmaUc">
                    <img src="assets/imgs/video-play.png" alt="Play" />
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Video 3 -->
          <div class="col-md-4 col-sm-6">
            <div class="recent-reviews-items">
              <div class="items-video">
                <img src="assets/img/testimonials/feedback2.webp" alt="Training Session Preview" />
                <div class="thumbnail-position">
                  <button type="button" class="btn play-video border-0 video-btn" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="zI4G80v19pI">
                    <img src="assets/imgs/video-play.png" alt="Play" />
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Video 4 -->
          <div class="col-md-4 col-sm-6">
            <div class="recent-reviews-items">
              <div class="items-video">
                <img src="assets/img/testimonials/feedback3.webp" alt="Live Class Demo" />
                <div class="thumbnail-position">
                  <button type="button" class="btn play-video border-0 video-btn" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="YNmiLWqtN7E">
                    <img src="assets/imgs/video-play.png" alt="Play" />
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Video 5 -->
          <div class="col-md-4 col-sm-6">
            <div class="recent-reviews-items">
              <div class="items-video">
                <img src="assets/img/testimonials/feedback4.webp" alt="Cloud Training Video" />
                <div class="thumbnail-position">
                  <button type="button" class="btn play-video border-0 video-btn" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="g5L8iaj4nf4">
                    <img src="assets/imgs/video-play.png" alt="Play" />
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Video 6 -->
          <div class="col-md-4 col-sm-6">
            <div class="recent-reviews-items">
              <div class="items-video">
                <img src="assets/img/testimonials/feedback5.webp" alt="Red Hat Training Session" />
                <div class="thumbnail-position">
                  <button type="button" class="btn play-video border-0 video-btn" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="-dL8xYXF0Io">
                    <img src="assets/imgs/video-play.png" alt="Play" />
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="text-center mt-5">
          <a href="https://www.youtube.com/@WebAshaTechnologies" target="_blank" rel="noopener" class="btn btn-primary" aria-label="Visit WebAsha YouTube Channel">
            Visit Our YouTube Channel <i class="fa fa-arrow-right ms-2"></i>
          </a>
        </div>
      </div>
    </section>
    <!-- Main Feedback Section -->
    <section class="section-header lazy-section mt-4 mb-5" aria-label="Student feedback and testimonials">
      <div class="container">
        <span class="section-badge">Testimonials</span>
        <h2 class="heading-main-1">What Our Students Say</h2>
        <p class="description mb-4">Real feedback from learners who completed courses at WebAsha Technologies — about instructors, practical labs, career support and placement help.</p>

        <!-- Top highlight / summary -->
        <div class="row mb-4">
          <div class="col-md-8 mx-auto">
            <div class="card p-3">
              <div class="card-body">
                <h3 class="h5 mb-2">Trusted by hundreds of learners — trained & placed</h3>
                <p class="mb-0">We emphasize hands-on learning, interview readiness and direct employer engagement. Below are recent student testimonials and success snapshots.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Testimonials grid: 2 columns on md, 1 on sm -->
        <div class="row g-4" id="testimonialsGrid">
          <!-- Testimonial 1 -->
          <div class="col-md-6">
            <article class="testimonial card h-100">
              <div class="card-body">
                <h5 class="card-title">Abhishek Jadhav</h5>
                <p class="card-subtitle mb-2 text-muted">Cloud — Placed at Infosys (8.5 LPA)</p>
                <p class="card-text">"WebAsha's cloud course had the perfect mix of theory and labs. The placement team helped polish my resume and interview skills. Highly recommended."</p>
              </div>
              <div class="card-footer bg-transparent">
                <small class="text-muted">Joined: Jan 2024 — Rating: ★★★★★</small>
              </div>
            </article>
          </div>

          <!-- Testimonial 2 -->
          <div class="col-md-6">
            <article class="testimonial card h-100">
              <div class="card-body">
                <h5 class="card-title">Anjali Deshmukh</h5>
                <p class="card-subtitle mb-2 text-muted">Security — Placed at TCS (10.2 LPA)</p>
                <p class="card-text">"The security labs and mentorship at WebAsha were excellent. The mock interviews prepared me to perform confidently in the final rounds."</p>
              </div>
              <div class="card-footer bg-transparent">
                <small class="text-muted">Joined: Mar 2024 — Rating: ★★★★★</small>
              </div>
            </article>
          </div>

          <!-- Testimonial 3 -->
          <div class="col-md-6">
            <article class="testimonial card h-100">
              <div class="card-body">
                <h5 class="card-title">Rohit Patil</h5>
                <p class="card-subtitle mb-2 text-muted">DevOps — Placed at Accenture</p>
                <p class="card-text">"Hands-on CI/CD projects and 1:1 mentoring made a big difference. I was interview-ready and landed a DevOps role within weeks of course completion."</p>
              </div>
              <div class="card-footer bg-transparent">
                <small class="text-muted">Joined: Aug 2023 — Rating: ★★★★☆</small>
              </div>
            </article>
          </div>

          <!-- Testimonial 4 -->
          <div class="col-md-6">
            <article class="testimonial card h-100">
              <div class="card-body">
                <h5 class="card-title">Priya Kulkarni</h5>
                <p class="card-subtitle mb-2 text-muted">Networking — Placed at Cognizant</p>
                <p class="card-text">"Excellent trainers and lab infrastructure. The placement support was practical and supportive."</p>
              </div>
              <div class="card-footer bg-transparent">
                <small class="text-muted">Joined: Nov 2023 — Rating: ★★★★★</small>
              </div>
            </article>
          </div>

          <!-- Add more testimonial cards as needed -->
        </div>

        <!-- Optional: compact table of more feedback (accessible) -->
        <h2 class="heading-main mt-5">Summary of Recent Feedback</h2>
        <div class="table-responsive custom-table mb-4">
          <table class="table table-bordered align-middle">
            <thead class="table-light">
              <tr>
                <th scope="col">Student</th>
                <th scope="col">Course</th>
                <th scope="col">Feedback (short)</th>
                <th scope="col">Placement</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Vikas Sharma</td>
                <td>RHCE / Ansible</td>
                <td>Great labs and trainer support</td>
                <td>Yes — Automation Engineer</td>
              </tr>
              <tr>
                <td>Sneha More</td>
                <td>Cloud</td>
                <td>Practical, project-led learning</td>
                <td>Yes — Cloud Engineer</td>
              </tr>
              <!-- Add more rows as required -->
            </tbody>
          </table>
        </div>

        <!-- CTA -->
        <div class="text-center mt-4">
          <h3 class="mb-3">Ready to share your success story?</h3>
          <p class="mb-3">Join our next batch — get training, mentorship and placement support tailored to your goals.</p>
          <button type="button" class="btn btn-primary btn-width mx-auto d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-controls="enquiryModal" aria-label="Enroll Now at WebAsha Technologies">
            Enroll Now
            <i class="fa fa-arrow-right ms-2" aria-hidden="true"></i>
          </button>
        </div>
      </div>
    </section>

    <!-- Enquiry modal (keeps same include as your original) -->
    <?php include("include/enquiry-modal.php"); ?>

    <!-- Site footer -->
    <?php include("include/footer.php"); ?>
    <?php include("include/footerlink.php"); ?>
  </body>
</html>
