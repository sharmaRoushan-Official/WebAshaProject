<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include common header links / global meta / favicon / CSS / JS -->
    <?php include("include/headerlink.php"); ?>
    <!-- Page-specific metadata (Results Page) -->
    <?php
      $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
      $current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
    <title>Results | WebAsha Technologies - IT Training in Pune</title>
    <meta name="description" content="Explore WebAsha Technologies’ exam and course results in Pune. View student certification outcomes, pass rates, and top performers in IT training programs.">
    <meta name="keywords" content="WebAsha Technologies Results, IT Certification Results Pune, Student Exam Outcomes, Course Pass Rates, Certification Toppers Pune">
    <!-- Canonical URL to avoid duplicate content -->
    <link rel="canonical" href="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <!-- Page-specific Open Graph for social sharing -->
    <meta property="og:title" content="Results | WebAsha Technologies - IT Training in Pune">
    <meta property="og:description" content="Discover student achievements at WebAsha Technologies in Pune. Check exam results, certification pass rates, and top performers from our IT training programs.">
    <meta property="og:url" content="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <meta property="og:image" content="https://training.webasha.com/assets/img/results/main-results.webp">
    <meta property="og:image:alt" content="WebAsha Technologies Results and Student Achievements in Pune">
    <meta property="og:type" content="website">
    <!-- Page-specific Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Results | WebAsha Technologies - IT Training in Pune">
    <meta name="twitter:description" content="View the latest exam results and certification successes from WebAsha Technologies’ IT training programs in Pune, showcasing student excellence.">
    <meta name="twitter:image" content="https://training.webasha.com/assets/img/results/main-results.webp">
    <!-- Page-specific JSON-LD: Organization schema for enhanced search visibility -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "WebAsha Technologies",
      "url": "https://training.webasha.com/",
      "logo": "https://training.webasha.com/assets/img/logo.webp",
      "description": "Explore WebAsha Technologies’ exam results and student achievements in Pune. Our IT training programs ensure high certification pass rates and career success.",
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
    <style>
      /* tiny inline helpers - keep major styling in your main CSS */
      .breadcrumb-bar { background: #000; }
    </style>
</head>

  <body>
    <!-- Site header -->
    <?php include("include/header.php"); ?>

    <!-- Banner / Breadcrumb (black banner) -->
    <div class="breadcrumb-bar text-center">
      <div class="container">
        <div class="row align-items-center py-3">
          <div class="col-12">
            <h1 class="heading-main-1 mb-2 text-white">Results</h1>

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
                <li class="breadcrumb-item active text-white" aria-current="page">Results</li>
              </ol>
            </nav>

          </div>
        </div>
      </div>
    </div>

    <!-- Results Section -->
    <section class="section-header lazy-section mt-4 mb-5" aria-label="Exam and Course Results">
      <div class="container">
        <span class="section-badge">Results</span>
        <h2 class="heading-main-1">Latest Results & Certification Outcomes</h2>
        <p class="description mb-4">
          Below are recent exam and certification results for students trained at WebAsha Technologies. Click any row to view details or download certificates where available.
        </p>

        <!-- Filters / quick info -->
        <div class="row mb-3">
          <div class="col-md-8">
            <p class="mb-0"><strong>Latest batch:</strong> March 2025 &nbsp; | &nbsp; <strong>Overall pass rate:</strong> 92%</p>
          </div>
          <div class="col-md-4 text-md-end mt-2 mt-md-0">
            <a href="download-results-csv.php" class="btn btn-outline-secondary btn-sm" aria-label="Download full results CSV">Download CSV</a>
            <a href="certificates" class="btn btn-primary btn-sm ms-2" aria-label="View certificates">View Certificates</a>
          </div>
        </div>

        <!-- Results table -->
        <div class="table-responsive custom-table mb-4">
          <table class="table table-bordered align-middle">
            <thead class="table-light">
              <tr>
                <th scope="col">S.No</th>
                <th scope="col">Candidate Name</th>
                <th scope="col">Course / Exam</th>
                <th scope="col">Result</th>
                <th scope="col">Score / Remarks</th>
                <th scope="col">Certificate</th>
              </tr>
            </thead>
            <tbody>
              <!-- Example rows — replace with dynamic server-side data if available -->
              <tr>
                <td>1</td>
                <td>Abhishek Jadhav</td>
                <td>RHCSA (EX200)</td>
                <td><span class="badge bg-success text-white">Passed</span></td>
                <td>88%</td>
                <td><a href="certificates/abhishek-jadhav.pdf" class="text-decoration-none" target="_blank" rel="noopener">Download</a></td>
              </tr>
              <tr>
                <td>2</td>
                <td>Anjali Deshmukh</td>
                <td>RHCE (EX294)</td>
                <td><span class="badge bg-success text-white">Passed</span></td>
                <td>82%</td>
                <td><a href="certificates/anjali-deshmukh.pdf" target="_blank" rel="noopener">Download</a></td>
              </tr>
              <tr>
                <td>3</td>
                <td>Rohit Patil</td>
                <td>Offensive Security (OSCP)</td>
                <td><span class="badge bg-success text-white">Passed</span></td>
                <td>Merit</td>
                <td><a href="certificates/rohit-patil.pdf" target="_blank" rel="noopener">Download</a></td>
              </tr>
              <tr>
                <td>4</td>
                <td>Sneha Kulkarni</td>
                <td>Cloud (AWS Certified)</td>
                <td><span class="badge bg-warning text-dark">Awaiting</span></td>
                <td>Results Pending</td>
                <td>—</td>
              </tr>
              <!-- Add additional rows or generate dynamically -->
            </tbody>
          </table>
        </div>

        <!-- Pagination / load more if needed -->
        <div class="d-flex justify-content-between align-items-center">
          <div>
            <small class="text-muted">Showing 1–10 of 45 results</small>
          </div>
          <div>
            <nav aria-label="Results pagination">
              <ul class="pagination pagination-sm mb-0">
                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a></li>
                <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
            </nav>
          </div>
        </div>

      </div>
    </section>

    <!-- CTA -->
    <section class="py-5 course-comparison-section lazy-section visible">
      <div class="container text-center">
        <h2 class="heading-main-1">Want Your Name Here?</h2>
        <p class="description mb-3">Join our next batch — get hands-on training, exam preparation and placement assistance included.</p>
        <button type="button" class="btn btn-primary btn-width mx-auto d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-controls="enquiryModal" aria-label="Apply Now">
          Apply Now
          <i class="fa fa-arrow-right ms-2" aria-hidden="true"></i>
        </button>
      </div>
    </section>

    <!-- Enquiry modal + footer includes -->
    <?php include("include/enquiry-modal.php"); ?>
    <?php include("include/footer.php"); ?>
    <?php include("include/footerlink.php"); ?>
  </body>
</html>
