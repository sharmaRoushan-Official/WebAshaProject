<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include common header links / global meta / favicon / CSS / JS -->
    <?php include("include/headerlink.php"); ?>
    <!-- Page-specific metadata (Media Page) -->
    <?php
      $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
      $current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
    <title>Media | WebAsha Technologies - IT Training in Pune</title>
    <meta name="description" content="Explore WebAsha Technologies' media hub in Pune, featuring videos, articles, podcasts, and resources highlighting our IT training programs, events, and student achievements.">
    <meta name="keywords" content="WebAsha Technologies Media, IT Training Videos Pune, WebAsha Podcasts, Training Institute News, Student Success Stories, IT Training Resources">
    <!-- Canonical URL to avoid duplicate content -->
    <link rel="canonical" href="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <!-- Page-specific Open Graph for social sharing -->
    <meta property="og:title" content="Media | WebAsha Technologies - IT Training in Pune">
    <meta property="og:description" content="Discover a rich collection of media at WebAsha Technologies, including videos, podcasts, articles, and resources showcasing our training programs and student success in Pune.">
    <meta property="og:url" content="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <meta property="og:image" content="https://training.webasha.com/assets/img/media/main-media.webp">
    <meta property="og:image:alt" content="WebAsha Technologies Media - Videos, Articles, and Resources in Pune">
    <meta property="og:type" content="website">
    <!-- Page-specific Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Media | WebAsha Technologies - IT Training in Pune">
    <meta name="twitter:description" content="Access engaging media from WebAsha Technologies, featuring videos, podcasts, and articles on IT training, events, and student achievements in Pune.">
    <meta name="twitter:image" content="https://training.webasha.com/assets/img/media/main-media.webp">
    <!-- Page-specific JSON-LD: Organization schema for enhanced search visibility -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "WebAsha Technologies",
      "url": "https://training.webasha.com/",
      "logo": "https://training.webasha.com/assets/img/logo.webp",
      "description": "Explore WebAsha Technologies' media resources, including videos, podcasts, articles, and guides showcasing our IT training programs and student success in Pune.",
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
            <h1 class="heading-main-1 mb-2 text-white">Media</h1>
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
                <li class="breadcrumb-item active text-white" aria-current="page">Media</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Media Section -->
    <section class="section-header lazy-section mt-4 mb-5" aria-label="Media resources at WebAsha Technologies">
      <div class="container">
        <span class="section-badge">Media</span>
        <h2 class="heading-main-1">Latest from WebAsha — Videos, Press & Resources</h2>
        <p class="description mb-4">Welcome to the WebAsha media hub. Here you'll find recordings of workshops, product demos, interviews, blog highlights, press releases and downloadable resources to help you learn and choose the right training path.</p>

        <!-- Featured Video -->
        <div class="row align-items-center mb-5">
          <div class="col-lg-7 mb-3">
            <div class="ratio ratio-16x9">
              <!-- Replace src with your YouTube/Vimeo embed -->
              <iframe src="https://www.youtube.com/embed/463xAeaE9Qo?" title="WebAsha - Campus Tour & Training Highlights" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-lg-5">
            <h3 class="heading-main">Featured: Campus Tour & Training Highlights</h3>
            <p class="description">Take a quick tour of our Pune campus, see classroom sessions in action and hear from alumni about their experience at WebAsha.</p>
            <p class="small text-muted">Published: May 2024 • Duration: 6:12</p>
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll after watching media">Enroll After Watching</a>
          </div>
        </div>

        <!-- Latest Articles / Press Releases -->
        <h3 class="heading-main">Press & Articles</h3>
        <div class="row g-3 mb-4">
          <div class="col-md-6">
            <article class="card h-100 p-3">
              <div class="d-flex align-items-start">
                <img src="assets/img/media/article-1.webp" alt="WebAsha Partners with Local Industry" class="img-fluid me-3" style="width:100px; height:auto;">
                <div>
                  <h4 class="h6 mb-1">WebAsha Partners with Local Industry to Bridge Skill Gaps</h4>
                  <p class="small mb-1 text-muted">June 2024 • News</p>
                  <p class="description mb-2">WebAsha announces partnerships with local employers to provide live projects and internships for students.</p>
                  <a href="media/article-webasha-partners.php" class="stretched-link" aria-label="Read full article">Read more</a>
                </div>
              </div>
            </article>
          </div>

          <div class="col-md-6">
            <article class="card h-100 p-3">
              <div class="d-flex align-items-start">
                <img src="assets/img/media/article-2.webp" alt="Alumni Success Story" class="img-fluid me-3" style="width:100px; height:auto;">
                <div>
                  <h4 class="h6 mb-1">Alumni Success Story: From Classroom to Cloud Engineer</h4>
                  <p class="small mb-1 text-muted">May 2024 • Blog</p>
                  <p class="description mb-2">Read how our alumni transitioned into a Cloud Engineer role and the steps they took during the course.</p>
                  <a href="media/alumni-success-cloud.php" class="stretched-link" aria-label="Read alumni story">Read more</a>
                </div>
              </div>
            </article>
          </div>
        </div>

        <!-- Podcasts / Interviews -->
        <h3 class="heading-main">Podcasts & Interviews</h3>
        <div class="row g-3 mb-4">
          <div class="col-md-4">
            <div class="card p-3 h-100">
              <h5 class="h6 mb-2">Industry Talk: DevOps Trends 2024</h5>
              <p class="small text-muted mb-2">Host: WebAsha • 34 min</p>
              <audio controls preload="none" aria-label="Play podcast: DevOps Trends 2024">
                <source src="assets/media/podcasts/devops-trends-2024.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card p-3 h-100">
              <h5 class="h6 mb-2">Career Paths in Cyber Security</h5>
              <p class="small text-muted mb-2">Host: WebAsha • 28 min</p>
              <audio controls preload="none" aria-label="Play podcast: Career Paths in Cyber Security">
                <source src="assets/media/podcasts/security-career-paths.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card p-3 h-100">
              <h5 class="h6 mb-2">Student Spotlight: Hands-on Projects</h5>
              <p class="small text-muted mb-2">Host: WebAsha • 22 min</p>
              <audio controls preload="none" aria-label="Play podcast: Student Spotlight">
                <source src="assets/media/podcasts/student-spotlight.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            </div>
          </div>
        </div>

        <!-- Resource Downloads -->
        <h3 class="heading-main">Downloadable Resources</h3>
        <div class="row g-3 mb-4">
          <div class="col-md-4">
            <div class="card p-3 h-100">
              <h5 class="h6">Course Catalogue 2024 (PDF)</h5>
              <p class="small text-muted mb-2">Updated: Apr 2024 • 2.1 MB</p>
              <a href="assets/docs/course-catalogue-2024.pdf" class="btn btn-outline-primary" download aria-label="Download course catalogue PDF">Download PDF</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card p-3 h-100">
              <h5 class="h6">Interview Prep Checklist</h5>
              <p class="small text-muted mb-2">Quick checklist for technical interviews</p>
              <a href="assets/docs/interview-checklist.pdf" class="btn btn-outline-primary" download aria-label="Download interview checklist">Download PDF</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card p-3 h-100">
              <h5 class="h6">Free Lab Exercises</h5>
              <p class="small text-muted mb-2">Hands-on labs to practice at home</p>
              <a href="assets/docs/free-labs.zip" class="btn btn-outline-primary" download aria-label="Download free lab exercises">Download ZIP</a>
            </div>
          </div>
        </div>

        <!-- Media Gallery Thumbnails -->
        <h3 class="heading-main">Media Gallery</h3>
        <p class="description mb-3">Snapshots from workshops, events and certification ceremonies. Click to enlarge.</p>
        <div class="row g-3">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <a href="assets/img/media/gallery-1.webp" data-bs-toggle="modal" data-bs-target="#mediaLightbox" data-bs-image="assets/img/media/gallery-1.webp" data-bs-caption="Workshop — Container Basics" class="d-block text-decoration-none media-thumb">
              <img src="assets/img/media/gallery-1-thumb.webp" alt="Workshop — Container Basics" class="img-fluid rounded">
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <a href="assets/img/media/gallery-2.webp" data-bs-toggle="modal" data-bs-target="#mediaLightbox" data-bs-image="assets/img/media/gallery-2.webp" data-bs-caption="Certification Ceremony" class="d-block text-decoration-none media-thumb">
              <img src="assets/img/media/gallery-2-thumb.webp" alt="Certification Ceremony" class="img-fluid rounded">
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <a href="assets/img/media/gallery-3.webp" data-bs-toggle="modal" data-bs-target="#mediaLightbox" data-bs-image="assets/img/media/gallery-3.webp" data-bs-caption="Guest Lecture" class="d-block text-decoration-none media-thumb">
              <img src="assets/img/media/gallery-3-thumb.webp" alt="Guest Lecture" class="img-fluid rounded">
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <a href="assets/img/media/gallery-4.webp" data-bs-toggle="modal" data-bs-target="#mediaLightbox" data-bs-image="assets/img/media/gallery-4.webp" data-bs-caption="Hands-on Lab" class="d-block text-decoration-none media-thumb">
              <img src="assets/img/media/gallery-4-thumb.webp" alt="Hands-on Lab" class="img-fluid rounded">
            </a>
          </div>
        </div>

        <!-- Lightbox Modal (reusable) -->
        <div class="modal fade" id="mediaLightbox" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-transparent border-0">
              <div class="modal-body p-0 text-center position-relative">
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
                <img id="mediaLightboxImage" src="" alt="" class="img-fluid rounded" style="max-height:75vh; width:auto;">
                <p id="mediaLightboxCaption" class="text-white mt-3"></p>
              </div>
            </div>
          </div>
        </div>

        <!-- CTA -->
        <div class="text-center mt-5">
          <h3 class="mb-2">Want to feature in our media?</h3>
          <p class="mb-3">Attend events, present projects and share your journey — we will help amplify your success.</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Contact us for media opportunities">Contact Us</button>
        </div>
      </div>
    </section>

    <!-- Enquiry modal (reuse existing include) -->
    <?php include("include/enquiry-modal.php"); ?>

    <!-- Site footer -->
    <?php include("include/footer.php"); ?>
    <?php include("include/footerlink.php"); ?>

    <!-- Small JS to populate the media lightbox from clicked thumbnails -->
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const mediaLightbox = document.getElementById('mediaLightbox');
        const imgEl = document.getElementById('mediaLightboxImage');
        const capEl = document.getElementById('mediaLightboxCaption');

        if (!mediaLightbox) return;

        mediaLightbox.addEventListener('show.bs.modal', function (event) {
          const trigger = event.relatedTarget;
          if (!trigger) return;
          const src = trigger.getAttribute('data-bs-image') || trigger.href;
          const caption = trigger.getAttribute('data-bs-caption') || trigger.title || '';
          imgEl.src = src;
          imgEl.alt = caption;
          capEl.textContent = caption;
        });

        mediaLightbox.addEventListener('hidden.bs.modal', function () {
          imgEl.src = '';
          imgEl.alt = '';
          capEl.textContent = '';
        });
      });
    </script>
  </body>
</html>
