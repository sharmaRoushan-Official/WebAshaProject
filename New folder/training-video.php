<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include common header links / global meta / favicon / CSS / JS -->
    <?php include("include/headerlink.php"); ?>
    <!-- Page-specific metadata (Training Videos Page) -->
    <?php
      $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
      $current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
    <title>Training Videos | WebAsha Technologies - IT Training in Pune</title>
    <meta name="description" content="Explore WebAsha Technologies’ training videos in Pune, featuring course previews, live sessions, and student feedback for Red Hat, DevOps, Cloud, and Cybersecurity programs on our YouTube channel.">
    <meta name="keywords" content="WebAsha Technologies Training Videos, IT Course Previews Pune, Student Feedback Videos, RHCSA Training Videos, DevOps Course Videos, WebAsha YouTube Channel">
    <!-- Canonical URL to avoid duplicate content -->
    <link rel="canonical" href="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <!-- Page-specific Open Graph for social sharing -->
    <meta property="og:title" content="Training Videos | WebAsha Technologies - IT Training in Pune">
    <meta property="og:description" content="Watch WebAsha Technologies’ official training videos, course demos, and student testimonials in Pune. Explore our YouTube channel for Red Hat, DevOps, and Cloud content.">
    <meta property="og:url" content="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <meta property="og:image" content="https://training.webasha.com/assets/img/testimonials/feedback.webp">
    <meta property="og:image:alt" content="WebAsha Technologies Training Videos and Student Feedback in Pune">
    <meta property="og:type" content="website">
    <!-- Page-specific Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Training Videos | WebAsha Technologies - IT Training in Pune">
    <meta name="twitter:description" content="Discover WebAsha Technologies’ training videos, including course previews and student reviews, on our YouTube channel for IT programs in Pune.">
    <meta name="twitter:image" content="https://training.webasha.com/assets/img/testimonials/feedback.webp">
    <!-- Page-specific JSON-LD: Organization schema for enhanced search visibility -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "WebAsha Technologies",
      "url": "https://training.webasha.com/",
      "logo": "https://training.webasha.com/assets/img/logo.webp",
      "description": "Explore WebAsha Technologies’ official training videos, course previews, and student feedback in Pune, showcasing IT programs like Red Hat, DevOps, Cloud, and Cybersecurity.",
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
    <!-- Header -->
    <?php include("include/header.php"); ?>

    <!-- Breadcrumb / Banner -->
    <div class="breadcrumb-bar text-center">
      <div class="container">
        <div class="row align-items-center py-3">
          <div class="col-12">
            <h1 class="heading-main-1 mb-2 text-white">Training Videos</h1>
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
                <li class="breadcrumb-item active text-white" aria-current="page">Training Videos</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Section -->
    <section class="section-header text-center lazy-section mt-4 mb-5" aria-label="Training Videos and Student Feedback">
      <div class="container">
        <span class="section-badge">Videos</span>
        <h2 class="heading-main-1 text-center">Watch Our <span class="red-color">Training & Student Reviews</span></h2>
        <p class="description mb-5">Explore official training videos and student testimonials from WebAsha Technologies. Click play to watch real experiences and course insights directly from our YouTube channel.</p>

        <div class="row g-4">
          <!-- Video 1 -->
          <div class="col-md-4 col-sm-6">
            <div class="recent-reviews-items">
              <div class="items-video">
                <img src="assets/img/testimonials/feedback.webp" alt="Student Feedback Video 1" />
                <div class="thumbnail-position">
                  <button type="button" class="btn play-video border-0 video-btn" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="Rw6U1hb6fzs">
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
                <img src="assets/img/testimonials/feedback.webp" alt="Student Feedback Video 2" />
                <div class="thumbnail-position">
                  <button type="button" class="btn play-video border-0 video-btn" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="ERtp4zua0-s">
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
                <img src="assets/img/testimonials/feedback.webp" alt="Training Session Preview" />
                <div class="thumbnail-position">
                  <button type="button" class="btn play-video border-0 video-btn" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="ZzT9LMn1Bk8">
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
                <img src="assets/img/testimonials/feedback.webp" alt="Live Class Demo" />
                <div class="thumbnail-position">
                  <button type="button" class="btn play-video border-0 video-btn" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="o9r8T5hZLUE">
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
                <img src="assets/img/testimonials/feedback.webp" alt="Cloud Training Video" />
                <div class="thumbnail-position">
                  <button type="button" class="btn play-video border-0 video-btn" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="DLX62G4lc44">
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
                <img src="assets/img/testimonials/feedback.webp" alt="Red Hat Training Session" />
                <div class="thumbnail-position">
                  <button type="button" class="btn play-video border-0 video-btn" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="0g7YwFX3R7U">
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

    <!-- Video Modal (existing in your code) -->
    <?php include("include/enquiry-modal.php"); ?>
    <?php include("include/footer.php"); ?>
    <?php include("include/footerlink.php"); ?>
  </body>
</html>
