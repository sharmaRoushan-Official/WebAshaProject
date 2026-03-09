<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include common header links / global meta / favicon / CSS / JS -->
    <?php include("include/headerlink.php"); ?>
    <!-- Page-specific metadata (Home Page) -->
    <?php
      $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
      $current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
    <title>WebAsha Technologies | RHCSA, RHCE, AWS, Python, DevOps & CCNA Training in Pune</title>
    <meta name="description" content="WebAsha Technologies is Pune's leading IT training institute for RHCSA, RHCE, AWS, Python, DevOps, CCNA, SEO, and Graphic Design. Offering hands-on courses, certified trainers, and official certification exams for career growth in 2025.">
    <meta name="keywords" content="RHCSA Training Pune, RHCE Certification, AWS Course Pune, Python Training, DevOps Institute Pune, CCNA Classes, Red Hat Exam Center, IT Training Pune, Graphic Design Course">
    <!-- Canonical URL to avoid duplicate content -->
    <link rel="canonical" href="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <!-- Page-specific Open Graph for social sharing -->
    <meta property="og:title" content="WebAsha Technologies | RHCSA, RHCE, AWS, Python, DevOps & CCNA Training in Pune">
    <meta property="og:description" content="Discover top IT training at WebAsha Technologies in Pune. Specializing in RHCSA, RHCE, AWS, Python, DevOps, CCNA, SEO, and Graphic Design with hands-on learning and certification support.">
    <meta property="og:url" content="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <meta property="og:image" content="https://training.webasha.com/assets/img/webasha-training.webp">
    <meta property="og:image:alt" content="WebAsha Technologies Training and Certification in Pune">
    <meta property="og:type" content="website">
    <!-- Page-specific Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="WebAsha Technologies | RHCSA, RHCE, AWS, Python, DevOps & CCNA Training in Pune">
    <meta name="twitter:description" content="Premier IT training in Pune for RHCSA, RHCE, AWS, Python, DevOps, CCNA, and more. Enroll for expert-led courses and certifications at WebAsha Technologies.">
    <meta name="twitter:image" content="https://training.webasha.com/assets/img/webasha-training.webp">
    <!-- Page-specific JSON-LD: EducationalOrganization schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "EducationalOrganization",
      "name": "WebAsha Technologies",
      "url": "https://training.webasha.com/",
      "logo": "https://training.webasha.com/assets/img/logo.webp",
      "description": "WebAsha Technologies offers comprehensive IT training in Pune, including RHCSA, RHCE, AWS, Python, DevOps, CCNA, SEO, and Graphic Design, with hands-on labs and official certification exams.",
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
      },
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "2nd Floor, Python Training Institute, SR/48, Nagar Rd, near Mahanagar Co-operative Bank, Sai Nagari, Mathura Nagar, Wadgaon Sheri",
        "addressLocality": "Pune",
        "addressRegion": "Maharashtra",
        "postalCode": "411014",
        "addressCountry": "IN"
      }
    }
    </script>
</head>

  <!-- ✅ Body Section Starts -->
  <body>
    <!-- Include Site Header -->
    <?php include("include/header.php"); ?>

    
   <!-- Banner-Start -->
<section class="banner" aria-label="WebAsha Technologies Hero Banner">
  <div class="container">
    <div class="banner-slider">

      <!-- Slide 1 -->
      <div class="banner-items">
        <div class="row align-items-center">
          <!-- Text Content -->
          <div class="col-lg-6 col-sm-12 col-12">
            <h1 class="banner-title">
              <span class="red-color">Upgrade</span> Your Skills
            </h1>
            <h2>with Hands-On IT Certification Courses</h2>

            <h4>Master Linux, Cloud, DevOps & Cybersecurity with Experts</h4>
            <p class="description">
              Join <strong>WebAsha Technologies</strong>, Pune’s trusted IT training institute, offering globally recognized certifications.
              Get hands-on experience through real-world labs and live projects designed to make you job-ready.
            </p>
            <a href="all-courses" class="btn btn-width btn-primary text-decoration-none">Explore Courses</a>

            <div class="reviews mt-3">
              <img src="assets/imgs/banner-review.png" class="rated-img" loading="lazy" alt="Student reviews of WebAsha Technologies" />
              <div class="rated-reviews mt-2">
                <p class="mb-0">Trusted by 15,000+ learners</p>
                <p class="desc">
                  <img src="assets/imgs/star-fill.png" class="icon" loading="lazy" alt="star rating" />
                  4.9/5 Overall Rating
                </p>
              </div>
            </div>
          </div>

          <!-- Image / Figure -->
          <div class="col-lg-6 col-sm-12 col-12">
            <div class="content mb-3">
              <h5>Real Projects. Real Skills.</h5>
              <p>Gain confidence by working on live projects and simulation labs guided by certified trainers.</p>
              <span class="red-color">4.9 ★</span>
            </div>
            <div class="banner-figure">
              <img src="assets/img/banner-thumbnail.png" loading="lazy" alt="WebAsha Technologies classroom training banner" />
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="banner-items">
        <div class="row align-items-center">
          <!-- Text Content -->
          <div class="col-lg-6 col-sm-12 col-12">
            <h1 class="banner-title">
              <span class="red-color">Learn</span> from the <br> Certified Instructors
            </h1>
            <h4>Advance Your Skills with Practical, Job-Oriented Training</h4>
            <p class="description">
              At <strong>WebAsha Technologies</strong>, we help you become a certified professional in Red Hat,
              EC-Council, OffSec, AWS, and DevOps. Experience an interactive learning environment built for real success.
            </p>
            <a href="about-us" class="btn btn-width btn-primary text-decoration-none">Know More</a>

            <div class="reviews mt-3">
              <img src="assets/imgs/banner-review.png" class="rated-img" loading="lazy" alt="Student satisfaction rating" />
              <div class="rated-reviews mt-2">
                <p class="mb-0">Recognized by Top IT Companies</p>
                <p class="desc">
                  <img src="assets/imgs/star-fill.png" class="icon" loading="lazy" alt="star rating" />
                  4.8/5 Satisfaction Score
                </p>
              </div>
            </div>
          </div>

          <!-- Image / Figure -->
          <div class="col-lg-6 col-sm-12 col-12">
            <div class="content mb-3">
              <h5>Hands-on Training Approach</h5>
              <p>Experience practical, lab-based learning that helps you apply concepts confidently in real environments.</p>
              <span class="red-color">4.9 ★</span>
            </div>
            <div class="banner-figure">
              <img src="assets/imgs/banner-thumbnail-1.png" loading="lazy" alt="WebAsha Technologies student learning banner" />
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- Banner-End -->


   <!-- Company-Start -->
<section class="company lazy-section" aria-label="Authorized Training and Certification Partners of WebAsha Technologies">
  <div class="container">
    <div class="company-card text-center">
      <h2 class="mb-4">
        WebAsha Technologies is an <span class="red-color">Authorized Training & Certification Exam Center</span> for Leading Global IT Vendors
      </h2>

      <p class="description mb-4">
        We take pride in being recognized as an official training and certification partner of some of the most trusted
        names in the technology industry. Our authorized partnerships ensure that every learner receives
        vendor-aligned training, authentic course materials, and certification exams directly from accredited sources.
      </p>

      <div class="card-wraper d-flex flex-wrap justify-content-center align-items-center gap-2 mb-2">
        <div class="card-logo card p-2">
          <img src="assets/img/icons/home/1.png" loading="lazy" width="120" height="auto" alt="Red Hat Authorized Training Partner Logo" />
        </div>
        <div class="card-logo card p-2">
          <img src="assets/img/icons/home/2.png" loading="lazy" width="120" height="auto" alt="EC-Council Accredited Training Center Logo" />
        </div>
        <div class="card-logo card p-2">
          <img src="assets/img/icons/home/3.png" loading="lazy" width="120" height="auto" alt="OffSec Authorized Learning Partner Logo" />
        </div>
        <div class="card-logo card p-2">
          <img src="assets/img/icons/home/4.png" loading="lazy" width="120" height="auto" alt="CompTIA Training Partner Logo" />
        </div>
        <div class="card-logo card p-2">
          <img src="assets/img/icons/home/5.png" loading="lazy" width="120" height="auto" alt="Microsoft Learning Partner Logo" />
        </div>
        <div class="card-logo card p-2">
          <img src="assets/img/icons/home/6.png" loading="lazy" width="120" height="auto" alt="AWS Academy Training Partner Logo" />
        </div>
        <div class="card-logo card p-2">
          <img src="assets/img/icons/home/7.png" loading="lazy" width="120" height="auto" alt="Cisco Networking Academy Partner Logo" />
        </div>
        <div class="card-logo card p-2">
          <img src="assets/img/icons/home/8.png" loading="lazy" width="120" height="auto" alt="Google Cloud Training Partner Logo" />
        </div>
        <div class="card-logo card p-2">
          <img src="assets/img/icons/home/9.png" loading="lazy" width="120" height="auto" alt="Python Institute Partner Logo" />
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Company-End -->


<!-- Training-Provider-Start -->
<section class="training-provider lazy-section" aria-label="About WebAsha Technologies">
  <div class="container">
    <div class="row">
      <!-- Image Section -->
      <div class="col-lg-6 col-sm-12 col-12">
        <div class="figure">
          <img src="assets/imgs/training-provider.png" width="100%" loading="lazy" alt="WebAsha Technologies Training Institute in Pune" />
        </div>
      </div>

      <!-- Content Section -->
      <div class="col-lg-6 col-sm-12 col-12">
        <div class="content">
          <h2 class="heading-main-1 mb-3">
            Welcome to <span class="red-color">WebAsha Technologies</span>
          </h2>

          <h3>
            A Trusted Name in <strong>Linux, Cloud, and Cybersecurity Training</strong> Across India
          </h3>

          <p class="description">
            <strong>WebAsha Technologies</strong> is recognized as one of India’s most reliable and industry-driven IT
            training institutes. Our mission is to empower students and professionals with hands-on, job-oriented
            training that bridges the gap between academic learning and real-world IT careers.
          </p>

          <p class="description">
            We specialize in <em>Linux Administration, Cloud Computing, Ethical Hacking, Cybersecurity, and DevOps</em>.
            Each course is designed and delivered by certified experts with years of enterprise experience. Through
            practical, instructor-led sessions, we ensure learners not only gain deep technical knowledge but also the
            skills required to succeed in globally recognized <strong>vendor certification exams</strong>.
          </p>

          <p class="description">
            Whether you are a beginner exploring IT or a professional advancing your career, our
            <strong>customized learning paths, live virtual classes, corporate training programs</strong>, and
            <strong>real-time lab access</strong> make your learning journey effective and flexible. We focus on
            transforming learners into industry-ready professionals who can adapt to today’s fast-evolving technology
            landscape.
          </p>

          <p class="description">
            With a team of dedicated instructors and mentors having more than six years of practical experience,
            <strong>WebAsha Technologies</strong> is committed to providing world-class training quality that aligns
            with the latest industry standards and IT certifications.
          </p>

          <a href="about-us" class="btn btn-outline-primary btn-width text-decoration-none">
            View More
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Training-Provider-End -->


    <!-- Why-Choose-Start -->
<section class="why-choose lazy-section" aria-label="Why Choose WebAsha Technologies">
  <div class="container">
    <h2 class="heading-main-1 text-center mb-5">
      <span class="red-color">Why Choose</span> WebAsha Technologies?
    </h2>

    <div class="row">
      <!-- Expert Trainers -->
      <div class="col-lg-3 col-sm-6 col-12">
        <div class="card text-center">
          <img src="assets/imgs/why-choose-icon-1.png" loading="lazy" class="card-icon mb-3 mx-auto" width="53" alt="Expert Trainers at WebAsha Technologies" />
          <div class="card-body">
            <h5 class="card-title">Expert Trainers</h5>
            <p class="card-text">
              Learn directly from certified professionals with years of industry experience. Our trainers bring real-world insights, making complex concepts easy to understand.
            </p>
          </div>
        </div>
      </div>

      <!-- Flexible Schedule -->
      <div class="col-lg-3 col-sm-6 col-12">
        <div class="card text-center">
          <img src="assets/imgs/why-choose-icon-2.png" loading="lazy" class="card-icon mb-3 mx-auto" width="53" alt="Flexible Schedule" />
          <div class="card-body">
            <h5 class="card-title">Flexible Schedule</h5>
            <p class="card-text">
              We understand your time matters. Choose from weekday or weekend batches that fit your study, work, or personal schedule.
            </p>
          </div>
        </div>
      </div>

      <!-- Hands-on Training -->
      <div class="col-lg-3 col-sm-6 col-12">
        <div class="card text-center">
          <img src="assets/imgs/why-choose-icon-3.png" loading="lazy" class="card-icon mb-3 mx-auto" width="53" alt="Hands-on Training" />
          <div class="card-body">
            <h5 class="card-title">Hands-on Training</h5>
            <p class="card-text">
              Every course includes practical assignments and real-world lab exercises to build confidence and prepare you for on-the-job challenges.
            </p>
          </div>
        </div>
      </div>

      <!-- Full Day Lab Support -->
      <div class="col-lg-3 col-sm-6 col-12">
        <div class="card text-center">
          <img src="assets/imgs/why-choose-icon-4.png" loading="lazy" class="card-icon mb-3 mx-auto" width="53" alt="Full Day Lab Support" />
          <div class="card-body">
            <h5 class="card-title">Full Day Lab Support</h5>
            <p class="card-text">
              Access our labs all day long for additional practice and experimentation. Our technical team is available to assist you whenever you need help.
            </p>
          </div>
        </div>
      </div>

      <!-- Affordable Fee -->
      <div class="col-lg-3 col-sm-6 col-12">
        <div class="card text-center">
          <img src="assets/imgs/why-choose-icon-5.png" loading="lazy" class="card-icon mb-3 mx-auto" width="53" alt="Affordable Fee Structure" />
          <div class="card-body">
            <h5 class="card-title">Affordable Fee</h5>
            <p class="card-text">
              Quality training doesn’t have to be expensive. We offer competitive pricing and flexible payment options for students and professionals alike.
            </p>
          </div>
        </div>
      </div>

      <!-- Post Training Support -->
      <div class="col-lg-3 col-sm-6 col-12">
        <div class="card text-center">
          <img src="assets/imgs/why-choose-icon-6.png" loading="lazy" class="card-icon mb-3 mx-auto" width="53" alt="Post Training Support" />
          <div class="card-body">
            <h5 class="card-title">Post-Training Support</h5>
            <p class="card-text">
              Even after course completion, we offer mentorship, career guidance, and doubt-clearing sessions to help you succeed in your professional journey.
            </p>
          </div>
        </div>
      </div>

      <!-- Global Certification -->
      <div class="col-lg-3 col-sm-6 col-12">
        <div class="card text-center">
          <img src="assets/imgs/why-choose-icon-7.png" loading="lazy" class="card-icon mb-3 mx-auto" width="53" alt="Global Certification Preparation" />
          <div class="card-body">
            <h5 class="card-title">Global Certification</h5>
            <p class="card-text">
              Our training programs are aligned with globally recognized certifications, enhancing your credibility and career prospects worldwide.
            </p>
          </div>
        </div>
      </div>

      <!-- Interview & Placement -->
      <div class="col-lg-3 col-sm-6 col-12">
        <div class="card text-center">
          <img src="assets/imgs/why-choose-icon-8.png" loading="lazy" class="card-icon mb-3 mx-auto" width="53" alt="Interview and Placement Assistance" />
          <div class="card-body">
            <h5 class="card-title">Interview & Placement</h5>
            <p class="card-text">
              Get resume-building assistance, mock interviews, and placement opportunities with our partnered IT companies to kickstart your career.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Why-Choose-End -->
 
<!-- Experts-Counting-Start -->
<section class="experts-counting lazy-section" aria-label="WebAsha Technologies Global Achievements">
  <div class="container">
    <div class="card py-4">
      <div class="row">
        
        <!-- Industry Experts -->
        <div class="col-lg-3 col-sm-6 col-12">
          <div class="content text-center">
            <h2><span id="counter1">0</span>+</h2>
            <p class="desc">Certified <br> Industry Experts</p>
          </div>
        </div>

        <!-- Comprehensive Courses -->
        <div class="col-lg-3 col-sm-6 col-12">
          <div class="content text-center">
            <h2><span id="counter2">0</span>+</h2>
            <p class="desc">Comprehensive <br> Job-Oriented Courses</p>
          </div>
        </div>

        <!-- Lab & Learning Facilities -->
        <div class="col-lg-3 col-sm-6 col-12">
          <div class="content text-center">
            <h2><span id="counter3">0</span>+</h2>
            <p class="desc">Hands-on Labs & <br> Learning Facilities</p>
          </div>
        </div>

        <!-- Global Presence -->
        <div class="col-lg-3 col-sm-6 col-12">
          <div class="content text-center">
            <h2><span id="counter4">0</span>+</h2>
            <p class="desc">Countries <br> & Growing Reach</p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- Experts-Counting-End -->

   <!-- Our-Choose-Start -->
<section class="our-choose" aria-label="Explore Top IT Training Domains at WebAsha Technologies">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h2 class="heading-main text-white mb-3">
          Choose From 25+ In-Demand IT Domains
        </h2>
        <p class="description text-white">
          Explore career-focused courses in <strong>Cloud Computing, Cybersecurity, Data Science, AI, Linux,</strong> and more.
          Build job-ready skills through structured learning paths designed by industry-certified professionals.
        </p>
      </div>
    </div>
  </div>

  <!-- Left Slider -->
  <div class="our-choose-wrapper our-choose-slider-left">
    <div class="our-choose-item">
      <div class="our-choose-items">
        <div class="icon">
          <img src="assets/imgs/programming-icon-1.png" width="64" loading="lazy" alt="Cybersecurity Training Icon" />
        </div>
        <div class="content">
          <h5>Cybersecurity</h5>
          <a href="cybersecurity-courses" class="text-decoration-none">
            Explore
            <img src="assets/imgs/arrow-back.png" width="12" alt="arrow" loading="lazy" />
          </a>
        </div>
      </div>
    </div>

    <div class="our-choose-item">
      <div class="our-choose-items">
        <div class="icon">
          <img src="assets/imgs/programming-icon-2.png" width="64" loading="lazy" alt="Cloud Computing Icon" />
        </div>
        <div class="content">
          <h5>Cloud Computing</h5>
          <a href="cloud-computing-courses" class="text-decoration-none">
            Explore
            <img src="assets/imgs/arrow-back.png" width="12" alt="arrow" loading="lazy" />
          </a>
        </div>
      </div>
    </div>

    <div class="our-choose-item">
      <div class="our-choose-items">
        <div class="icon">
          <img src="assets/imgs/programming-icon-3.png" width="64" loading="lazy" alt="Data Science Icon" />
        </div>
        <div class="content">
          <h5>Data Science</h5>
          <a href="data-science-courses" class="text-decoration-none">
            Explore
            <img src="assets/imgs/arrow-back.png" width="12" alt="arrow" loading="lazy" />
          </a>
        </div>
      </div>
    </div>

    <div class="our-choose-item">
      <div class="our-choose-items">
        <div class="icon">
          <img src="assets/imgs/programming-icon-1.png" width="64" loading="lazy" alt="DevOps Training Icon" />
        </div>
        <div class="content">
          <h5>DevOps</h5>
          <a href="devops-courses" class="text-decoration-none">
            Explore
            <img src="assets/imgs/arrow-back.png" width="12" alt="arrow" loading="lazy" />
          </a>
        </div>
      </div>
    </div>

    <div class="our-choose-item">
      <div class="our-choose-items">
        <div class="icon">
          <img src="assets/imgs/programming-icon-2.png" width="64" loading="lazy" alt="Artificial Intelligence Icon" />
        </div>
        <div class="content">
          <h5>Artificial Intelligence</h5>
          <a href="ai-courses" class="text-decoration-none">
            Explore
            <img src="assets/imgs/arrow-back.png" width="12" alt="arrow" loading="lazy" />
          </a>
        </div>
      </div>
    </div>

    <div class="our-choose-item">
      <div class="our-choose-items">
        <div class="icon">
          <img src="assets/imgs/programming-icon-3.png" width="64" loading="lazy" alt="Linux Training Icon" />
        </div>
        <div class="content">
          <h5>Linux Administration</h5>
          <a href="linux-courses" class="text-decoration-none">
            Explore
            <img src="assets/imgs/arrow-back.png" width="12" alt="arrow" loading="lazy" />
          </a>
        </div>
      </div>
    </div>
    <div class="our-choose-item">
      <div class="our-choose-items">
        <div class="icon">
          <img src="assets/imgs/programming-icon-3.png" width="64" loading="lazy" alt="Linux Training Icon" />
        </div>
        <div class="content">
          <h5>Linux Administration</h5>
          <a href="linux-courses" class="text-decoration-none">
            Explore
            <img src="assets/imgs/arrow-back.png" width="12" alt="arrow" loading="lazy" />
          </a>
        </div>
      </div>
    </div>
    <div class="our-choose-item">
      <div class="our-choose-items">
        <div class="icon">
          <img src="assets/imgs/programming-icon-3.png" width="64" loading="lazy" alt="Linux Training Icon" />
        </div>
        <div class="content">
          <h5>Linux Administration</h5>
          <a href="linux-courses" class="text-decoration-none">
            Explore
            <img src="assets/imgs/arrow-back.png" width="12" alt="arrow" loading="lazy" />
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Right Slider -->
  <div class="our-choose-wrapper our-choose-slider-right" dir="rtl">
    <div class="our-choose-item">
      <div class="our-choose-items">
        <div class="icon">
          <img src="assets/imgs/programming-icon-1.png" width="64" loading="lazy" alt="Networking Training Icon" />
        </div>
        <div class="content">
          <h5>Networking</h5>
          <a href="networking-courses" class="text-decoration-none">
            Explore
            <img src="assets/imgs/arrow-back.png" width="12" alt="arrow" loading="lazy" />
          </a>
        </div>
      </div>
    </div>

    <div class="our-choose-item">
      <div class="our-choose-items">
        <div class="icon">
          <img src="assets/imgs/programming-icon-2.png" width="64" loading="lazy" alt="Ethical Hacking Icon" />
        </div>
        <div class="content">
          <h5>Ethical Hacking</h5>
          <a href="ethical-hacking-courses" class="text-decoration-none">
            Explore
            <img src="assets/imgs/arrow-back.png" width="12" alt="arrow" loading="lazy" />
          </a>
        </div>
      </div>
    </div>

    <div class="our-choose-item">
      <div class="our-choose-items">
        <div class="icon">
          <img src="assets/imgs/programming-icon-3.png" width="64" loading="lazy" alt="Python Full Stack Icon" />
        </div>
        <div class="content">
          <h5>Full Stack with Python</h5>
          <a href="full-stack-python" class="text-decoration-none">
            Explore
            <img src="assets/imgs/arrow-back.png" width="12" alt="arrow" loading="lazy" />
          </a>
        </div>
      </div>
    </div>

    <div class="our-choose-item">
      <div class="our-choose-items">
        <div class="icon">
          <img src="assets/imgs/programming-icon-1.png" width="64" loading="lazy" alt="Machine Learning Icon" />
        </div>
        <div class="content">
          <h5>Machine Learning</h5>
          <a href="machine-learning-courses" class="text-decoration-none">
            Explore
            <img src="assets/imgs/arrow-back.png" width="12" alt="arrow" loading="lazy" />
          </a>
        </div>
      </div>
    </div>

    <div class="our-choose-item">
      <div class="our-choose-items">
        <div class="icon">
          <img src="assets/imgs/programming-icon-2.png" width="64" loading="lazy" alt="Cloud Security Icon" />
        </div>
        <div class="content">
          <h5>Cloud Security</h5>
          <a href="cloud-security-courses" class="text-decoration-none">
            Explore
            <img src="assets/imgs/arrow-back.png" width="12" alt="arrow" loading="lazy" />
          </a>
        </div>
      </div>
    </div>

    <div class="our-choose-item">
      <div class="our-choose-items">
        <div class="icon">
          <img src="assets/imgs/programming-icon-3.png" width="64" loading="lazy" alt="Data Analytics Icon" />
        </div>
        <div class="content">
          <h5>Data Analytics</h5>
          <a href="data-analytics-courses" class="text-decoration-none">
            Explore
            <img src="assets/imgs/arrow-back.png" width="12" alt="arrow" loading="lazy" />
          </a>
        </div>
      </div>
    </div>
        <div class="our-choose-item">
      <div class="our-choose-items">
        <div class="icon">
          <img src="assets/imgs/programming-icon-3.png" width="64" loading="lazy" alt="Data Analytics Icon" />
        </div>
        <div class="content">
          <h5>Data Analytics</h5>
          <a href="data-analytics-courses" class="text-decoration-none">
            Explore
            <img src="assets/imgs/arrow-back.png" width="12" alt="arrow" loading="lazy" />
          </a>
        </div>
      </div>
    </div>
        <div class="our-choose-item">
      <div class="our-choose-items">
        <div class="icon">
          <img src="assets/imgs/programming-icon-3.png" width="64" loading="lazy" alt="Data Analytics Icon" />
        </div>
        <div class="content">
          <h5>Data Analytics</h5>
          <a href="data-analytics-courses" class="text-decoration-none">
            Explore
            <img src="assets/imgs/arrow-back.png" width="12" alt="arrow" loading="lazy" />
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Explore All -->
  <div class="d-flex align-items-center justify-content-center">
    <a href="courses" class="btn btn-width btn-white mt-3">Explore All Courses</a>
  </div>
</section>


    <!-- Related Courses -->
    <section class="course-related-courses lazy-section visible">
      <div class="section-header text-center mb-4 mt-4">
        <span class="section-badge">Popular Courses</span>
        <h2 class="heading-main-1 text-center">Popular Training & <span class="red-color">Certification Courses</span>
        </h2>
        <p class="desc text-center">Find additional courses to boost your career and skills.</p>
      </div> <?php include("include/related-courses.php"); ?>
    </section>
    <!-- Related Courses End -->
<!-- Our-Choose-End -->
    <!-- Our-Expert-Services-Start -->
    <div class="our-expert-services lazy-section" aria-label="Our Expert Services">
      <div class="container">
        <div class="section-header text-center mb-4">
        <span class="section-badge">Expert Services</span>
        <div class="row align-items-center">
          <div class="col-lg-5 col-sm-12 col-12">
            <div class="content">
              <h2 class="text-white">Accelerate Your Career with Our Expert Services</h2>
              <p class="description text-white">Our immersive courses in booming fields like Data Science, AI, and Cloud Computing provide you with the practical knowledge and experience you need to succeed in the ever-evolving job market. Don't just learn, get future-ready with upGrad KnowledgeHut.</p>
            </div>
          </div>
          <div class="col-lg-7 col-sm-12 col-12">
            <div class="our-expert-wraper">
              <div class="our-expert-card border-one">
                <div class="icon">
                  <img src="assets/imgs/our-expert-icon-1.png" alt="our-expert-icon" />
                </div>
                <div class="card-content">
                  <h3 class="red-color">Personalized Career Coaching</h3>
                  <p class="description">Network with 450,000+ Alumni</p>
                </div>
              </div>
              <div class="our-expert-card border-two">
                <div class="icon">
                  <img src="assets/imgs/our-expert-icon-2.png" alt="our-expert-icon" />
                </div>
                <div class="card-content">
                  <h3 class="red-color">Personalized Career Coaching</h3>
                  <p class="description">1:1 Mentorship by Experts</p>
                </div>
              </div>
            </div>
            <div class="our-expert-wraper">
              <div class="our-expert-card border-two">
                <div class="icon">
                  <img src="assets/imgs/our-expert-icon-3.png" alt="our-expert-icon" />
                </div>
                <div class="card-content">
                  <h3 class="red-color">Global Alumni Network</h3>
                  <p class="description">1:1 Mentorship by Experts</p>
                </div>
              </div>
              <div class="our-expert-card border-one">
                <div class="icon">
                  <img src="assets/imgs/our-expert-icon-4.png" alt="our-expert-icon" />
                </div>
                <div class="card-content">
                  <h3 class="red-color">Dedicated Job Support</h3>
                  <p class="description">1:1 Mentorship by Experts</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     </div>
    <!-- Our-Expert-Services-End -->

    <!-- Success-Speaks-Start -->
    <div class="success-speaks">
      <div class="container">
        <h2 class="heading-main-1 text-center mb-4"><span class="red-color">Success</span> Speaks Volume</h2>
        <div class="success-speaks-video">
          <img src="assets/imgs/success-speaks.png" alt="">
          <div class="thumbnail-position">
            <!-- Button-Video-modal -->
            <button type="button" class="btn play-video border-0" data-bs-toggle="modal" data-bs-target="#videoModal">
              <img src="assets/imgs/video-play.png" alt="video-play" />
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Success-Speaks-End -->

    <!-- Video-Modal -->
    <div class="play-video-modal modal fade" id="videoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content bg-transparent border-0">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="fa-solid fa-xmark"></i>
          </button>
          <iframe id="youtubeVideo" width="100%" height="100%" src="https://www.youtube.com/embed/463xAeaE9Qo?si=5VYG770Z4Qn13fSb?enablejsapi=1&autoplay=1&mute=0" title="YouTube video" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    
    <!-- Career-Straight-Start -->
    <div class="career-straight">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-sm-12 col-12">
            <h2 class="text-white">Screenshorts: Straight From The Heart</h2>
            <p class="desc text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <div class="career-straight-slider">
              <div class="career-straight-item">
                <div class="cs-slider-item">
                  <img src="assets/imgs/career-straight-logo-1.png" alt="career-straight-logo" />
                </div>
              </div>
              <div class="career-straight-item">
                <div class="cs-slider-item">
                  <img src="assets/imgs/career-straight-logo-2.png" alt="career-straight-logo" />
                </div>
              </div>
              <div class="career-straight-item">
                <div class="cs-slider-item">
                  <img src="assets/imgs/career-straight-logo-2.png" alt="career-straight-logo" />
                </div>
              </div>
              <div class="career-straight-item">
                <div class="cs-slider-item">
                  <img src="assets/imgs/career-straight-logo-2.png" alt="career-straight-logo" />
                </div>
              </div>
              <div class="career-straight-item">
                <div class="cs-slider-item">
                  <img src="assets/imgs/career-straight-logo-2.png" alt="career-straight-logo" />
                </div>
              </div>
              <div class="career-straight-item">
                <div class="cs-slider-item">
                  <img src="assets/imgs/career-straight-logo-4.png" alt="career-straight-logo" />
                </div>
              </div>
              <div class="career-straight-item">
                <div class="cs-slider-item">
                  <img src="assets/imgs/career-straight-logo-5.png" alt="career-straight-logo" />
                </div>
              </div>
              <div class="career-straight-item">
                <div class="cs-slider-item">
                  <img src="assets/imgs/career-straight-logo-1.png" alt="career-straight-logo" />
                </div>
              </div>
              <div class="career-straight-item">
                <div class="cs-slider-item">
                  <img src="assets/imgs/career-straight-logo-2.png" alt="career-straight-logo" />
                </div>
              </div>
              <div class="career-straight-item">
                <div class="cs-slider-item">
                  <img src="assets/imgs/career-straight-logo-4.png" alt="career-straight-logo" />
                </div>
              </div>
              <div class="career-straight-item">
                <div class="cs-slider-item">
                  <img src="assets/imgs/career-straight-logo-5.png" alt="career-straight-logo" />
                </div>
              </div>
            </div>
            <a href="#" class="btn btn-width btn-white mx-auto mt-3" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Get Free Career Counselling">Get Free Career Counselling</a>
          </div>
          <div class="col-lg-4 col-sm-12 col-12">
            <div class="career-straight-cover">
              <img id="right-column-img" src="assets/img/feedback.png" alt="career-straight" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Career-Straight-End --> 
     
    <!-- Testimonials -->
    <section class="success-speaks-reviwe course-speaks section-header text-center lazy-section">
      <div class="container">
        <span class="section-badge">Recent Placements Testimonials</span>
        <h2 class="heading-main text-center mb-5">Certified Ethical Hacker v13 AI <span class="red-color">Reviews</span>
        </h2> <?php include("include/text-reviews.php"); ?>
      </div>
    </section>


    <!-- Brands -->
    <section class="our-learners section-header text-center lazy-section"> <?php include("include/brands.php"); ?> </section>

    <!-- Learn-Experts-Start -->
<section class="learn-experts lazy-section" aria-label="Learn from Industry Experts at WebAsha Technologies">
  <div class="container">
    <div class="section-header text-center mb-4">
        <span class="section-badge">Our Experts</span>
    <h2 class="heading-main text-center mb-5">
      <span class="red-color">Learn From Experts</span> with Real Industry Experience
    </h2>

    <div class="row">
      <!-- Expert 1 -->
      <div class="col-lg-3 col-sm-6 col-12">
        <div class="learn-experts-items">
          <div class="thumbnail-cover">
            <img src="assets/img/trainer/satyendra-pal.png" loading="lazy" alt="Cybersecurity Expert Trainer - WebAsha Technologies" />
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Satyendra Pal</h5>
              <p class="card-desc">Senior Consultant</p>
              <p class="card-text">
                With 14+ years of enterprise experience, Satyendra has guided hundreds of professionals in mastering
                <strong>Linux, DevOps, and OpenShift, Cybersecurity certifications</strong>.
              </p>
              <div class="wraper-icon d-flex align-items-center justify-content-between">
                <div class="single-img">
                  <img src="assets/img/trainer/webasha-icon.webp" class="card-logo" loading="lazy" alt="WebAsha Technologies Logo" />
                </div>
                <div class="img-group">
                  <img src="assets/imgs/google.png" class="card-logo" loading="lazy" alt="Google" />
                  <img src="assets/imgs/linkdin.png" class="card-logo" loading="lazy" alt="LinkedIn" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Expert 2 -->
      <div class="col-lg-3 col-sm-6 col-12">
        <div class="learn-experts-items">
          <div class="thumbnail-cover">
            <img src="assets/img/trainer/chaand.png" loading="lazy" alt="Ethical Hacking Trainer - WebAsha Technologies" />
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Abhijeet Sir</h5>
              <p class="card-desc">Cybersecurity & Ethical Hacking Expert</p>
              <p class="card-text">
                A certified <strong>EC-Council Instructor</strong> with practical experience in SOC operations and
                penetration testing, helping students clear CEH, VAPT, WAPT, SOC Analyst and CPENT exams.
              </p>
              <div class="wraper-icon d-flex align-items-center justify-content-between">
                <div class="single-img">
                  <img src="assets/img/trainer/webasha-icon.webp" class="card-logo" loading="lazy" alt="WebAsha Technologies Logo" />
                </div>
                <div class="img-group">
                  <img src="assets/imgs/google.png" class="card-logo" loading="lazy" alt="Google" />
                  <img src="assets/imgs/linkdin.png" class="card-logo" loading="lazy" alt="LinkedIn" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Expert 3 -->
      <div class="col-lg-3 col-sm-6 col-12">
        <div class="learn-experts-items">
          <div class="thumbnail-cover">
            <img src="assets/img/trainer/chaand.png" loading="lazy" alt="Cloud Computing Trainer - WebAsha Technologies" />
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Chaand Sir</h5>
              <p class="card-desc">Cloud & OpenShift Engineer</p>
              <p class="card-text">
                Red Hat Certified Instructor who mentors learners to gain cloud-native skills and pass
                <strong>CCNA, Azure, RHCSA, RHCE, DO280 & EX280 certifications</strong>.
              </p>
              <div class="wraper-icon d-flex align-items-center justify-content-between">
                <div class="single-img">
                  <img src="assets/img/trainer/webasha-icon.webp" class="card-logo" loading="lazy" alt="WebAsha Technologies Logo" />
                </div>
                <div class="img-group">
                  <img src="assets/imgs/google.png" class="card-logo" loading="lazy" alt="Google" />
                  <img src="assets/imgs/linkdin.png" class="card-logo" loading="lazy" alt="LinkedIn" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Expert 4 -->
      <div class="col-lg-3 col-sm-6 col-12">
        <div class="learn-experts-items">
          <div class="thumbnail-cover">
            <img src="assets/img/trainer/sharma.png" loading="lazy" alt="Data Science Instructor - WebAsha Technologies" />
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Roushan Sharma</h5>
              <p class="card-desc">Data Science & AI Trainer</p>
              <p class="card-text">
                A skilled data analyst and AI educator who helps learners master <strong>Python, ML models,</strong> and
                real-time data visualization tools.
              </p>
              <div class="wraper-icon d-flex align-items-center justify-content-between">
                <div class="single-img">
                  <img src="assets/img/trainer/webasha-icon.webp" class="card-logo" loading="lazy" alt="WebAsha Technologies Logo" />
                </div>
                <div class="img-group">
                  <img src="assets/imgs/google.png" class="card-logo" loading="lazy" alt="Google" />
                  <img src="assets/imgs/linkdin.png" class="card-logo" loading="lazy" alt="LinkedIn" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- Learn-Experts-End -->

<!-- Learn-Free-Courses-Start -->
<section class="learn-free-courses lazy-section" aria-label="Learn Free with WebAsha Technologies App">
  <div class="container">
    <div class="section-header text-center mb-4">
        <span class="section-badge">Our LMS</span>
    <div class="row align-items-center">

      <!-- Text & App Links -->
      <div class="col-lg-6 col-sm-12 col-12">
        <h2 class="heading-main-1 mb-2">
          Learn Free on Our <span class="red-color">LMS App</span>
        </h2>
        <p class="description mb-0">
          Access free lessons, tutorials, and certification previews anytime.  
          Study on the go with the <strong>WebAsha Technologies Learning App</strong>.
        </p>

        <div class="learn-free-courses-items text-center mt-4">
          <img src="assets/img/qr-lms.webp" loading="lazy" alt="QR code to download WebAsha Technologies learning app" />
          <div class="btn-img mt-3 d-flex justify-content-center gap-2">
            <a href="#" aria-label="Download on App Store">
              <img src="assets/imgs/app-store.png" loading="lazy" alt="App Store download button" />
            </a>
            <a href="#" aria-label="Get it on Google Play">
              <img src="assets/imgs/google-play.png" loading="lazy" alt="Google Play download button" />
            </a>
          </div>
        </div>
      </div>

      <!-- App Preview Image -->
      <div class="col-lg-6 col-sm-12 col-12">
        <div class="bg-thumbnail text-center">
          <img src="assets/img/lms-app.png" loading="lazy" width="100%" alt="Mobile view of WebAsha Technologies free learning app" />
        </div>
      </div>

    </div>
  </div>
  </div>
</section>
<!-- Learn-Free-Courses-End -->

<!-- Newsletter-Start -->
<section class="newsletter" aria-label="Book Free Counselling at WebAsha Technologies">
  <div class="container">
    <div class="row align-items-center">

      <!-- Text Content -->
      <div class="col-lg-8 col-sm-12 col-12">
        <div class="content">
          <h3>Book Your <span class="red-color">Free Counselling Session</span> Today</h3>
          <p class="desc">
            Have questions about career paths, certification exams, or course selection?  
            Talk directly with our <strong>expert mentors</strong> for personalized guidance.
          </p>
          <a href="#" class="btn btn-width btn-white text-decoration-none" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Request a Call Back">
            Request a Call Back
          </a>
        </div>
      </div>

      <!-- Image -->
      <div class="col-lg-4 col-sm-12 col-12">
        <div class="bg-thumbnail text-center">
          <img src="assets/imgs/newsletter-img.png" loading="lazy" width="100%" alt="Student counselling session illustration - WebAsha Technologies" />
        </div>
      </div>

    </div>
  </div>
</section>
<!-- Newsletter-End -->

<?php include("include/enquiry-modal.php"); ?>
<?php include("include/syllabus-modal.php"); ?>

<!-- footer --> 
<?php include ("include/footer.php") ?>

<!-- Back to top button -->
<a id="button"></a>

<!-- footerlink --> 
<?php include ("include/footerlink.php") ?>
<!-- footerlink -->
 
	
	  </body>
</html>