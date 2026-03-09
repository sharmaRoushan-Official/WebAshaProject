<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include common header links / global meta / favicon / CSS / JS -->
    <?php include("include/headerlink.php"); ?>
    <!-- Page-specific metadata (Contact Us) -->
    <?php
      $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
      $current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
    <title>Contact Us | WebAsha Technologies - Premier IT Training in Pune</title>
    <meta name="description" content="Reach out to WebAsha Technologies in Pune for inquiries about IT courses, admissions, and placement support. Connect via phone, email, or visit our center for Cloud, DevOps, Security, and Networking training.">
    <meta name="keywords" content="WebAsha Technologies Contact, IT Training Pune Contact, Course Inquiry Pune, WebAsha Support, Cloud DevOps Training Contact">
    <!-- Canonical URL to avoid duplicate content -->
    <link rel="canonical" href="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <!-- Page-specific Open Graph for social sharing -->
    <meta property="og:title" content="Contact Us | WebAsha Technologies - Premier IT Training in Pune">
    <meta property="og:description" content="Connect with WebAsha Technologies for expert guidance on IT training, course enrollment, demo sessions, and career placement support in Pune.">
    <meta property="og:url" content="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <meta property="og:image" content="https://training.webasha.com/assets/img/contact/main-contact.webp">
    <meta property="og:image:alt" content="Contact WebAsha Technologies - Premier IT Training in Pune">
    <meta property="og:type" content="website">
    <!-- Page-specific Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Contact Us | WebAsha Technologies - Premier IT Training in Pune">
    <meta name="twitter:description" content="Get in touch with WebAsha Technologies in Pune for course details, admissions, and placement assistance in Cloud, DevOps, Security, and Networking.">
    <meta name="twitter:image" content="https://training.webasha.com/assets/img/contact/main-contact.webp">
    <!-- Page-specific JSON-LD: LocalBusiness schema for enhanced search visibility -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "WebAsha Technologies",
      "url": "https://training.webasha.com/",
      "logo": "https://training.webasha.com/assets/img/logo.webp",
      "image": "https://training.webasha.com/assets/img/contact/main-contact.webp",
      "description": "WebAsha Technologies offers expert-led IT training in Pune, specializing in Cloud, DevOps, Cybersecurity, and Networking with comprehensive placement support.",
      "telephone": "+91-801-091-1256",
      "email": "info@webasha.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Office Address Line 1, Locality",
        "addressLocality": "Pune",
        "addressRegion": "Maharashtra",
        "postalCode": "4110XX",
        "addressCountry": "IN"
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
          "opens": "09:30",
          "closes": "19:00"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": "Saturday",
          "opens": "10:00",
          "closes": "16:00"
        }
      ],
      "sameAs": [
        "https://www.facebook.com/WebAshaTech/",
        "https://www.instagram.com/webashatech/",
        "https://x.com/ForteWebAsha",
        "https://www.linkedin.com/company/webasha-technologies",
        "https://in.pinterest.com/webasha",
        "https://www.youtube.com/@WebAshaTechnologies"
      ],
      "contactPoint": [
        {
          "@type": "ContactPoint",
          "telephone": "+91-20-XXXX-XXXX",
          "contactType": "customer service",
          "areaServed": "IN",
          "availableLanguage": ["English", "Hindi", "Marathi"]
        }
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
            <h1 class="heading-main-1 mb-2 text-white">Contact Us</h1>

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
                <li class="breadcrumb-item active text-white" aria-current="page">Contact</li>
              </ol>
            </nav>

          </div>
        </div>
      </div>
    </div>

        <!-- Contact Section -->
    <section class="py-5 bg-light">
      <div class="container">
        <div class="row g-4">

          <!-- LEFT COLUMN -->
          <div class="col-lg-7">
            <div class="row g-3">

              <!-- Registered Address -->
              <div class="col-md-6">
                <div class="card h-100 shadow-sm border-0">
                  <div class="card-body text-center">
                    <div class="mb-2 fs-1 text-danger">
                      <i class="bi bi-house-door-fill"></i>
                    </div>
                    <h5 class="card-title fw-semibold mb-2">Registered Address</h5>
                    <p class="card-text small text-muted">
                      First Floor, Laxmi Kunj (Beside Maha Nagar CO-Bank),<br>
                      Nagar Road, Chandan Nagar, Kharadi, Pune - 411014
                    </p>
                  </div>
                </div>
              </div>

              <!-- Email -->
              <div class="col-md-6">
                <div class="card h-100 shadow-sm border-0">
                  <div class="card-body text-center">
                    <div class="mb-2 fs-1 text-danger">
                      <i class="bi bi-envelope-fill"></i>
                    </div>
                    <h5 class="card-title fw-semibold mb-2">Email ID</h5>
                    <p class="card-text small text-muted mb-1">enquiry@webasha.com</p>
                    <p class="card-text small text-muted mb-1">training@webasha.com</p>
                    <p class="card-text small text-muted">info@webasha.com</p>
                  </div>
                </div>
              </div>

              <!-- Phone Cards -->
              <div class="col-md-6">
                <div class="card shadow-sm border-0">
                  <div class="card-body d-flex align-items-center">
                    <img src="https://flagcdn.com/w40/in.png" alt="India Flag" class="me-3 rounded" width="40">
                    <div>
                      <p class="fw-semibold mb-0">IND : +91 (801) 091-1256</p>
                      <small class="text-muted">General Enquiry</small>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="card shadow-sm border-0">
                  <div class="card-body d-flex align-items-center">
                    <img src="https://flagcdn.com/w40/in.png" alt="India Flag" class="me-3 rounded" width="40">
                    <div>
                      <p class="fw-semibold mb-0">IND : +91 (848) 584-7920</p>
                      <small class="text-muted">Admissions</small>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="card shadow-sm border-0">
                  <div class="card-body d-flex align-items-center">
                    <img src="https://flagcdn.com/w40/in.png" alt="India Flag" class="me-3 rounded" width="40">
                    <div>
                      <p class="fw-semibold mb-0">IND : +91 (977) 399-8597</p>
                      <small class="text-muted">Support</small>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="card shadow-sm border-0">
                  <div class="card-body d-flex align-items-center">
                    <img src="https://flagcdn.com/w40/us.png" alt="USA Flag" class="me-3 rounded" width="40">
                    <div>
                      <p class="fw-semibold mb-0">USA : +1 (929) 243-9565</p>
                      <small class="text-muted">International Enquiries</small>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- RIGHT COLUMN: Contact Form -->
          <div class="col-lg-5">
            <div class="card shadow border-0">
              <div class="card-body">
                <h4 class="card-title fw-semibold mb-3 text-center text-danger">Enquiry Form</h4>

                <iframe width="100%" height="550px" src="https://center.webasha.com/forms/wtl/5da88f1759099bb67f64c24d61fb2592" frameborder="0" sandbox="allow-top-navigation allow-forms allow-scripts allow-same-origin allow-popups" title="Career Counseling Form for CEH v13"></iframe>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
     <!-- Map + Directions -->
    <section class="section-header lazy-section mt-4 mb-4" aria-label="Contact WebAsha Technologies">
      <div class="container">
        <div class="row gy-4 align-items-center">
          <div class="col-lg-12">
            <h3 class="heading-main-1">Find us</h3>
            <p class="description">We are located in Pune. Use the map for directions or contact us to schedule an on-site visit.</p>
            <div class="shadow-sm rounded">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.256536118395!2d73.92683627515537!3d18.562469667893055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c13b19d251b1%3A0x811aff287e0aff85!2sWebAsha%20Technologies!5e0!3m2!1sen!2sin!4v1687081450745!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end Map + Directions -->

    <!-- Small CTA -->
    <section class="py-5 text-center lazy-section">
      <div class="container">
        <h2 class="heading-main-1">Want a callback?</h2>
        <p class="description mb-3">Provide a phone number in the form above and we'll call you back at a convenient time.</p>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-controls="enquiryModal">Request Callback</button>
      </div>
    </section>

    <!-- enquiry modal + footer includes -->
    <?php include("include/enquiry-modal.php"); ?>
    <?php include("include/footer.php"); ?>
    <?php include("include/footerlink.php"); ?>
  </body>
</html>
