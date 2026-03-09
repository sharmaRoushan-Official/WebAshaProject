<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include common header links / global meta / favicon / CSS / JS -->
    <?php include("include/headerlink.php"); ?>
    <!-- Page-specific metadata (Gallery Page) -->
    <?php
      $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
      $current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
    <title>Gallery | WebAsha Technologies - IT Training in Pune</title>
    <meta name="description" content="Explore the WebAsha Technologies gallery in Pune, showcasing vibrant classrooms, student events, certification ceremonies, and hands-on IT training sessions.">
    <meta name="keywords" content="WebAsha Technologies Gallery, IT Training Pune Photos, Classroom Training Images, Student Events Pune, Certification Ceremony Gallery">
    <!-- Canonical URL to avoid duplicate content -->
    <link rel="canonical" href="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <!-- Page-specific Open Graph for social sharing -->
    <meta property="og:title" content="Gallery | WebAsha Technologies - IT Training in Pune">
    <meta property="og:description" content="Discover the vibrant learning environment at WebAsha Technologies through our gallery, featuring training sessions, student achievements, and events in Pune.">
    <meta property="og:url" content="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <meta property="og:image" content="https://training.webasha.com/assets/img/gallery/main-gallery.webp">
    <meta property="og:image:alt" content="WebAsha Technologies Gallery - IT Training and Events in Pune">
    <meta property="og:type" content="website">
    <!-- Page-specific Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Gallery | WebAsha Technologies - IT Training in Pune">
    <meta name="twitter:description" content="View captivating photos from WebAsha Technologies, highlighting our IT training programs, student success stories, and community events in Pune.">
    <meta name="twitter:image" content="https://training.webasha.com/assets/img/gallery/main-gallery.webp">
    <!-- Page-specific JSON-LD: Organization schema for enhanced search visibility -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "WebAsha Technologies",
      "url": "https://training.webasha.com/",
      "logo": "https://training.webasha.com/assets/img/logo.webp",
      "description": "Browse the WebAsha Technologies gallery, showcasing state-of-the-art training facilities, student events, and certification milestones in Pune.",
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
            <h1 class="heading-main-1 mb-2 text-white">EX200</h1>
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
                <li class="breadcrumb-item active text-white" aria-current="page">EX200</li>
              </ol>
            </nav>

          </div>
        </div>
      </div>
    </div>



    <!-- Site footer -->
    <?php include("include/footer.php"); ?>
    <?php include("include/footerlink.php"); ?>
  </body>
</html>
