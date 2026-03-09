<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include common header links / global meta / favicon / CSS / JS -->
    <?php include("include/headerlink.php"); ?>
    <!-- Page-specific metadata (Placed Students Page) -->
    <?php
      $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
      $current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
    <title>Placed Students | WebAsha Technologies - IT Training in Pune</title>
    <meta name="description" content="Explore success stories of WebAsha Technologies’ placed students in Pune. Our hands-on training and placement support secure top roles in DevOps, Cloud, Security, and Networking.">
    <meta name="keywords" content="WebAsha Technologies Placements, IT Job Placements Pune, Student Success Stories, DevOps Placements, Cloud Career Placements, Networking Jobs Pune">
    <!-- Canonical URL to avoid duplicate content -->
    <link rel="canonical" href="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <!-- Page-specific Open Graph for social sharing -->
    <meta property="og:title" content="Placed Students | WebAsha Technologies - IT Training in Pune">
    <meta property="og:description" content="Discover WebAsha Technologies’ placed students and their career achievements. Our expert-led training ensures success in IT roles across Pune’s top companies.">
    <meta property="og:url" content="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <meta property="og:image" content="https://training.webasha.com/assets/img/placements/main-placements.webp">
    <meta property="og:image:alt" content="WebAsha Technologies Placed Students - IT Training Success in Pune">
    <meta property="og:type" content="website">
    <!-- Page-specific Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Placed Students | WebAsha Technologies - IT Training in Pune">
    <meta name="twitter:description" content="Celebrate our students’ success at WebAsha Technologies. View their placements in leading IT firms, driven by practical training and dedicated support.">
    <meta name="twitter:image" content="https://training.webasha.com/assets/img/placements/main-placements.webp">
    <!-- Page-specific JSON-LD: Organization schema for enhanced search visibility -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "WebAsha Technologies",
      "url": "https://training.webasha.com/",
      "logo": "https://training.webasha.com/assets/img/logo.webp",
      "description": "Discover WebAsha Technologies’ placed students and their career success in Pune. Our IT training programs in DevOps, Cloud, Security, and Networking ensure top job placements.",
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
            <h1 class="heading-main-1 mb-2 text-white">Placed Students</h1>
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
                <li class="breadcrumb-item active text-white" aria-current="page">Placed Students</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <!-- Placed Students Section -->
    <section class="section-header lazy-section mt-4 mb-5" aria-label="Placed students list">
      <div class="container">
        <span class="section-badge">Placements</span>
        <h2 class="heading-main-1">Recent Placed Students</h2>
        <p class="description mb-4">Our placement team works closely with learners to prepare resumes, conduct mock interviews and connect with hiring partners. Below is a sample of students placed through WebAsha Technologies.</p>

        <!-- Quick stats -->
        <div class="row mb-4">
          <div class="col-md-4">
            <div class="card p-3 text-center">
              <div class="card-body">
                <h3 class="h1 mb-0">350+</h3>
                <p class="mb-0">Total Placements</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card p-3 text-center">
              <div class="card-body">
                <h3 class="h1 mb-0">8.9 LPA</h3>
                <p class="mb-0">Average Package</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card p-3 text-center">
              <div class="card-body">
                <h3 class="h1 mb-0">120+</h3>
                <p class="mb-0">Hiring Partners</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Placed students table -->
        <div class="table-responsive custom-table mb-4">
          <table class="table table-bordered align-middle">
            <thead class="table-light">
              <tr>
                <th scope="col">S.No.</th>
                <th scope="col">Student Name</th>
                <th scope="col">Course</th>
                <th scope="col">Role</th>
                <th scope="col">Company</th>
                <th scope="col">Package (LPA)</th>
                <th scope="col">Month/Year</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Abhishek Jadhav</td>
                <td>Cloud</td>
                <td>Cloud Engineer</td>
                <td>Infosys</td>
                <td>8.5</td>
                <td>Apr 2024</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Anjali Deshmukh</td>
                <td>Security</td>
                <td>Security Analyst</td>
                <td>TCS</td>
                <td>10.2</td>
                <td>Mar 2024</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Rohit Patil</td>
                <td>DevOps</td>
                <td>DevOps Engineer</td>
                <td>Accenture</td>
                <td>7.8</td>
                <td>Feb 2024</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Priya Kulkarni</td>
                <td>Networking</td>
                <td>Network Engineer</td>
                <td>Cognizant</td>
                <td>6.5</td>
                <td>Jan 2024</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Vikas Sharma</td>
                <td>Automation</td>
                <td>Automation Engineer</td>
                <td>Wipro</td>
                <td>6.3</td>
                <td>Dec 2023</td>
              </tr>
              <tr>
                <td>6</td>
                <td>Sneha More</td>
                <td>Cloud</td>
                <td>Cloud Engineer</td>
                <td>HCL</td>
                <td>7.2</td>
                <td>Nov 2023</td>
              </tr>
              <tr>
                <td>7</td>
                <td>Akash Gupta</td>
                <td>RHCE</td>
                <td>System Administrator</td>
                <td>IBM</td>
                <td>9.0</td>
                <td>Oct 2023</td>
              </tr>
              <tr>
                <td>8</td>
                <td>Meera Joshi</td>
                <td>Security</td>
                <td>Security Engineer</td>
                <td>Capgemini</td>
                <td>8.0</td>
                <td>Sep 2023</td>
              </tr>
              <!-- Add more rows or generate dynamically from your database -->
            </tbody>
          </table>
        </div>

        <!-- Company logos / employer carousel placeholder -->
        <h2 class="heading-main mt-4">Our Hiring Partners</h2>
        <div class="row align-items-center g-3 mb-4">
          <div class="col-auto"><img src="assets/img/companies/infosys.webp" alt="Infosys" class="img-fluid" style="max-height:48px;"></div>
          <div class="col-auto"><img src="assets/img/companies/tcs.webp" alt="TCS" class="img-fluid" style="max-height:48px;"></div>
          <div class="col-auto"><img src="assets/img/companies/accenture.webp" alt="Accenture" class="img-fluid" style="max-height:48px;"></div>
          <div class="col-auto"><img src="assets/img/companies/cognizant.webp" alt="Cognizant" class="img-fluid" style="max-height:48px;"></div>
          <div class="col-auto"><img src="assets/img/companies/wipro.webp" alt="Wipro" class="img-fluid" style="max-height:48px;"></div>
          <!-- Add more logos as needed -->
        </div>

        <!-- CTA -->
        <div class="text-center mt-4">
          <h3 class="mb-2">Want to be on this list?</h3>
          <p class="mb-3">Enroll in a course, build hands-on projects and let our placement team support your job search.</p>
          <button type="button" class="btn btn-primary btn-width mx-auto d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-controls="enquiryModal" aria-label="Apply for Training at WebAsha Technologies">
            Apply Now
            <i class="fa fa-arrow-right ms-2" aria-hidden="true"></i>
          </button>
        </div>
      </div>
    </section>

    <!-- Enquiry modal (reuse existing include) -->
    <?php include("include/enquiry-modal.php"); ?>

    <!-- Site footer -->
    <?php include("include/footer.php"); ?>
    <?php include("include/footerlink.php"); ?>
  </body>
</html>
