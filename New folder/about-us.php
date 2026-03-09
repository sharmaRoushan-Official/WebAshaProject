<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Include common header links / global meta / favicon / CSS / JS -->
    <?php include("include/headerlink.php"); ?>

    <?php
      $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
      $current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
    <title>About Us | WebAsha Technologies - Training Institute in Pune</title>
    <meta name="description" content="Learn about WebAsha Technologies — a Pune-based IT training institute delivering practical, industry-aligned courses in Cloud, DevOps, Security and Networking with strong placement support.">
    <meta name="keywords" content="WebAsha About, WebAsha Technologies, IT Training Pune, DevOps Training, Cloud Training, Cybersecurity Training, Student Placements Pune">
    <meta property="og:title" content="About Us | WebAsha Technologies - Training Institute in Pune">
    <meta property="og:description" content="WebAsha Technologies provides hands-on IT training, certification prep and placement support in Pune. See our mission, team, milestones and impact.">
    <meta property="og:url" content="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <meta property="og:image" content="https://training.webasha.com/assets/img/about/main-about.webp">
    <meta property="og:image:alt" content="About WebAsha Technologies - IT Training Institute Pune">
    <meta name="twitter:title" content="About Us | WebAsha Technologies">
    <meta name="twitter:description" content="Discover WebAsha's story, mission, training approach and placement success. Join our practical IT courses in Pune.">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "WebAsha Technologies",
      "url": "https://training.webasha.com/",
      "logo": "https://training.webasha.com/assets/img/logo.webp",
      "description": "WebAsha Technologies - Practical IT training in Pune with certification and placement support."
    }
    </script>

    <style>
      /* tiny inline helpers to keep page tidy until main CSS loads */
      .breadcrumb-bar { background: #000; }
      .breadcrumb-bar .heading-main-1 { margin: 0; padding: 0; }
    </style>
  </head>

  <body>
    <!-- site header -->
    <?php include("include/header.php"); ?>

    <!-- Banner / Breadcrumb -->
    <div class="breadcrumb-bar text-center">
      <div class="container">
        <div class="row align-items-center py-3">
          <div class="col-12">
            <h1 class="heading-main-1 mb-2 text-white">About Us</h1>

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
                <li class="breadcrumb-item active text-white" aria-current="page">About Us</li>
              </ol>
            </nav>

          </div>
        </div>
      </div>
    </div>

    <!-- About intro -->
    <section class="section-header lazy-section mt-4 mb-4" aria-label="About WebAsha Technologies">
      <div class="container">
        <div class="row align-items-center gy-4">
          <div class="col-lg-6">
            <h2 class="heading-main-1">We build real skills that lead to real jobs</h2>
            <p class="description mb-3">
              WebAsha Technologies is a Pune-based IT training institute specialising in hands-on courses for Cloud, DevOps, Linux, Security and Networking.
              Since our founding, we have focused on practical labs, exam-aligned preparation and strong placement support to ensure learners are job-ready.
            </p>
            <p class="description mb-0">
              Our instructors are industry practitioners and certified trainers who emphasise project-based learning, real-world scenarios and continuous mentoring.
            </p>
          </div>

          <div class="col-lg-6">
            <picture>
              <source srcset="assets/img/about/about-hero.webp" type="image/webp">
              <img src="assets/img/about/about-hero.jpg" alt="WebAsha Technologies classroom and lab" class="img-fluid rounded shadow-sm" loading="lazy">
            </picture>
          </div>
        </div>
      </div>
    </section>

    <!-- Mission / Vision / Approach -->
    <section class="lazy-section py-4">
      <div class="container">
        <div class="row gy-4">
          <div class="col-md-4">
            <h3 class="heading-main">Our Mission</h3>
            <p class="description">To empower learners with industry-relevant skills and certifications through practical, mentor-led training and real-world labs.</p>
          </div>
          <div class="col-md-4">
            <h3 class="heading-main">Our Vision</h3>
            <p class="description">To be a centre of excellence for applied IT education in India — bridging the skills gap between academia and industry.</p>
          </div>
          <div class="col-md-4">
            <h3 class="heading-main">Our Approach</h3>
            <p class="description">Hands-on labs, small cohorts, performance-based assessments, and a placement-driven curriculum validated by hiring partners.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Quick stats -->
    <section class="lazy-section py-4 bg-light">
      <div class="container">
        <div class="row text-center gy-3">
          <div class="col-6 col-md-3">
            <h4 class="mb-1">+5,000</h4>
            <p class="mb-0 small">Students Trained</p>
          </div>
          <div class="col-6 col-md-3">
            <h4 class="mb-1">92%</h4>
            <p class="mb-0 small">Pass / Success Rate</p>
          </div>
          <div class="col-6 col-md-3">
            <h4 class="mb-1">+300</h4>
            <p class="mb-0 small">Hiring Partners</p>
          </div>
          <div class="col-6 col-md-3">
            <h4 class="mb-1">10 yrs</h4>
            <p class="mb-0 small">Industry Experience</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Team highlight -->
    <section class="lazy-section py-5">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h2 class="heading-main-1 mb-0">Meet the Team</h2>
          <a href="team.php" class="text-decoration-none">View full team →</a>
        </div>

        <div class="row g-3">
          <div class="col-sm-6 col-md-3 text-center">
            <img src="assets/img/team/ceo.webp" alt="Founder & CEO" class="img-fluid rounded-circle mb-2" width="120" height="120" loading="lazy">
            <h5 class="mb-0">Asha Kulkarni</h5>
            <small class="text-muted d-block">Founder & CEO</small>
          </div>

          <div class="col-sm-6 col-md-3 text-center">
            <img src="assets/img/team/lead-trainer.webp" alt="Lead Trainer" class="img-fluid rounded-circle mb-2" width="120" height="120" loading="lazy">
            <h5 class="mb-0">Rohit Patil</h5>
            <small class="text-muted d-block">Head - DevOps & Cloud</small>
          </div>

          <div class="col-sm-6 col-md-3 text-center">
            <img src="assets/img/team/placement-head.webp" alt="Placement Head" class="img-fluid rounded-circle mb-2" width="120" height="120" loading="lazy">
            <h5 class="mb-0">Sneha Kulkarni</h5>
            <small class="text-muted d-block">Head - Placements</small>
          </div>

          <div class="col-sm-6 col-md-3 text-center">
            <img src="assets/img/team/instructor-security.webp" alt="Security Instructor" class="img-fluid rounded-circle mb-2" width="120" height="120" loading="lazy">
            <h5 class="mb-0">Vikram Joshi</h5>
            <small class="text-muted d-block">Security Trainer</small>
          </div>
        </div>
      </div>
    </section>

    <!-- Timeline / milestones -->
    <section class="lazy-section py-5 bg-light">
      <div class="container">
        <h2 class="heading-main-1">Milestones</h2>
        <div class="row g-3 mt-3">
          <div class="col-md-4">
            <h5>2014</h5>
            <p class="mb-0">WebAsha founded — started with Linux & networking courses.</p>
          </div>
          <div class="col-md-4">
            <h5>2017</h5>
            <p class="mb-0">Expanded to cloud and DevOps training; first corporate partnerships.</p>
          </div>
          <div class="col-md-4">
            <h5>2021</h5>
            <p class="mb-0">Launched placement cell and remote labs; 1000+ students trained that year.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials CTA -->
    <section class="lazy-section py-5">
      <div class="container text-center">
        <h2 class="heading-main-1">What Our Students Say</h2>
        <p class="description mb-4">Real feedback from learners who transitioned to careers after training with us.</p>
        <a href="student-feedback.php" class="btn btn-outline-primary">Read Student Feedback</a>
      </div>
    </section>

    <!-- Call to action -->
    <section class="py-5 course-comparison-section lazy-section visible">
      <div class="container text-center">
        <h2 class="heading-main-1">Join WebAsha — Upskill with Confidence</h2>
        <p class="description mb-3">Enroll in practical courses, get certified and start your IT career with our placement support.</p>
        <button type="button" class="btn btn-primary btn-width mx-auto d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-controls="enquiryModal" aria-label="Get in touch / Enroll">
          Enroll Now
          <i class="fa fa-arrow-right ms-2" aria-hidden="true"></i>
        </button>
      </div>
    </section>

    <!-- enquiry modal + footer includes -->
    <?php include("include/enquiry-modal.php"); ?>
    <?php include("include/footer.php"); ?>
    <?php include("include/footerlink.php"); ?>
  </body>
</html>
