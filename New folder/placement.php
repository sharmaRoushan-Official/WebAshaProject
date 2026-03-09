<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include common header links / global meta / favicon / CSS / JS -->
    <?php include("include/headerlink.php"); ?>
    <!-- Page-specific metadata (Placements Page) -->
    <?php
      $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
      $current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
    <title>Placements | WebAsha Technologies - IT Training in Pune</title>
    <meta name="description" content="Discover WebAsha Technologies’ placement success stories in Pune. Our robust training and placement support secure top roles in DevOps, Cloud, Cybersecurity, and Networking at leading companies.">
    <meta name="keywords" content="WebAsha Technologies Placements, IT Job Placements Pune, DevOps Career Success, Cloud Computing Placements, Cybersecurity Jobs Pune, Networking Careers">
    <!-- Canonical URL to avoid duplicate content -->
    <link rel="canonical" href="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <!-- Page-specific Open Graph for social sharing -->
    <meta property="og:title" content="Placements | WebAsha Technologies - IT Training in Pune">
    <meta property="og:description" content="Explore WebAsha Technologies’ placement achievements in Pune. Our expert-led IT training ensures students land high-paying jobs at top companies like Infosys and TCS.">
    <meta property="og:url" content="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <meta property="og:image" content="https://training.webasha.com/assets/img/placements/main-placements.webp">
    <meta property="og:image:alt" content="WebAsha Technologies Placements - IT Career Success in Pune">
    <meta property="og:type" content="website">
    <!-- Page-specific Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Placements | WebAsha Technologies - IT Training in Pune">
    <meta name="twitter:description" content="See how WebAsha Technologies transforms careers with placements in top IT firms. Discover our students’ success in DevOps, Cloud, and more in Pune.">
    <meta name="twitter:image" content="https://training.webasha.com/assets/img/placements/main-placements.webp">
    <!-- Page-specific JSON-LD: Organization schema for enhanced search visibility -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "WebAsha Technologies",
      "url": "https://training.webasha.com/",
      "logo": "https://training.webasha.com/assets/img/logo.webp",
      "description": "Explore WebAsha Technologies’ placement success stories in Pune. Our IT training programs in DevOps, Cloud, Cybersecurity, and Networking ensure top job placements.",
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
  <!-- page content starts here -->
  <body>
    <!-- Including the site header --> <?php include("include/header.php"); ?>
    <!-- Banner / Breadcrumb (black banner) -->
    <div class="breadcrumb-bar text-center">
      <div class="container">
        <div class="row align-items-center py-3">
          <div class="col-12">
            <h1 class="heading-main-1 mb-2 text-white">Our Placement</h1>
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
                <li class="breadcrumb-item active text-white" aria-current="page">Our Placement</li>
              </ol>
            </nav>

          </div>
        </div>
      </div>
    </div>
    

    <!-- Main Placements Section -->
    <section class="section-header lazy-section mt-4 mb-5" aria-label="Placement Success Stories at WebAsha Technologies">
      <div class="container">
        <span class="section-badge">Placements</span>
        <h2 class="heading-main-1">Our Placement Success Stories</h2>
        <p class="description mb-4">At WebAsha Technologies in Pune, we take pride in our robust placement assistance program that has helped numerous candidates secure high-paying roles at leading companies like Infosys, TCS, Accenture, and more. Our training in DevOps, Cloud Computing, Security, and Networking equips you with the skills and certifications needed to excel in the IT industry.</p>

        <h2 class="heading-main">Our Commitment to Your Career</h2>
        <p class="description mb-4">We offer personalized career counseling, resume-building workshops, mock interviews, and direct connections to our network of hiring partners to ensure you land your dream job.</p>
        
        <h2 class="heading-main">Placement Highlights</h2>
        <p class="description mb-4">Our candidates have secured positions with competitive salary packages ranging from 6.3 LPA to 16.1 LPA across various domains, including Cloud Computing, Security, DevOps, and Networking.</p>
        
        <h2 class="heading-main">Recent Placements</h2>
        <div class="table-responsive custom-table mb-4">
          <table class="table table-bordered align-middle">
            <thead class="table-light">
              <tr>
                <th scope="col">Candidate Name</th>
                <th scope="col">Course</th>
                <th scope="col">Package (LPA)</th>
                <th scope="col">Company Name</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Abhishek Jadhav</td>
                <td>Cloud</td>
                <td>8.5</td>
                <td>Infosys</td>
              </tr>
              <tr>
                <td>Anjali Deshmukh</td>
                <td>Security</td>
                <td>10.2</td>
                <td>TCS</td>
              </tr>
              <!-- Add more rows as needed for additional placements -->
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <!-- Recent Placements Video Testimonials Section -->
    <section class="course-recent-reviews section-header text-center lazy-section" id="sticky-sidebar2">
      <span class="section-badge">Recent Placements Testimonials</span>
      <h2 class="heading-main-1 text-white text-center">EC-Council Disaster Recovery Professional <span class="red-color">Recent Reviews</span>
      </h2> <?php include("include/video-reviews.php"); ?>
    </section>
    <!-- Career Roadmap -->
    <section class="course-technologies-placement lazy-section" id="placement-reviews"> <?php include("include/placement.php"); ?> </section>
    <!-- Call to Action -->
    <section class="py-5 course-comparison-section lazy-section visible">
      <div class="container">
        <h2 class="heading-main-1">Ready to Start Your Success Story?</h2>
        <p class="description">Enroll in our courses today and take the first step towards a rewarding IT career with our expert guidance and placement support.</p>
        <button type="button" class="btn btn-primary btn-width mx-auto d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-controls="enquiryModal" aria-label="Enroll Now at WebAsha Technologies">
        Enroll Now
        <i class="fa fa-arrow-right ms-2" aria-hidden="true"></i>
      </button>
      </div>
    </section>
    <?php include("include/enquiry-modal.php"); ?>
    <!-- Footer --> <?php include("include/footer.php"); ?> <?php include("include/footerlink.php"); ?>
  </body>
</html>