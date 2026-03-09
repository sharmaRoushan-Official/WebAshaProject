<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include common header links for meta, CSS, JS, and favicon -->
    <?php include("include/headerlink.php"); ?>
    <!-- Compute current URL for metadata -->
    <?php
      $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
      $current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
    <!-- Page-specific metadata for Red Hat Exam Offer -->
    <title>Red Hat Exam Offer <?php echo date("Y"); ?> in Pune | WebAsha Technologies</title>
    <meta name="description" content="Join WebAsha Technologies’ Red Hat Exam Offer <?php echo date("Y"); ?> in Pune. Access expert-led training, practice tests, and discounted exam vouchers for RHCSA, RHCE, and OpenShift certifications to excel in 2025.">
    <meta name="keywords" content="Red Hat Exam Offer Pune <?php echo date("Y"); ?>, RHCSA Certification Training, RHCE Exam Prep Pune, Red Hat OpenShift Certification, Red Hat Exam Vouchers, WebAsha Certification Training">
    <!-- Canonical URL to avoid duplicate content -->
    <link rel="canonical" href="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <!-- Page-specific Open Graph for social sharing -->
    <meta property="og:title" content="Red Hat Exam Offer <?php echo date("Y"); ?> in Pune | WebAsha Technologies">
    <meta property="og:description" content="Boost your career with WebAsha Technologies’ Red Hat Exam Offer in Pune. Get expert training, practice tests, and discounted vouchers for RHCSA, RHCE, and OpenShift certifications.">
    <meta property="og:url" content="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <meta property="og:image" content="https://training.webasha.com/assets/img/course/redhat/red-hat-exam.webp">
    <meta property="og:image:alt" content="Red Hat Exam Offer <?php echo date("Y"); ?> at WebAsha Technologies in Pune">
    <meta property="og:type" content="website">
    <!-- Page-specific Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Red Hat Exam Offer <?php echo date("Y"); ?> in Pune | WebAsha Technologies">
    <meta name="twitter:description" content="Excel in Red Hat certifications with WebAsha Technologies’ exam prep and discounted voucher offer in Pune for RHCSA, RHCE, and OpenShift in 2025.">
    <meta name="twitter:image" content="https://training.webasha.com/assets/img/course/redhat/red-hat-exam.webp">
</head>
  <!-- Starting page content -->
  <body>
    <!-- Including the site header -->
    <?php include("include/header.php"); ?>
    <!-- Creating banner section for Red Hat exam offer -->
    <section class="banner-course">
      <div class="container">
        <div class="row align-items-center">
          <!-- Left Column -->
          <div class="col-lg-8 col-sm-12">
            <!-- Breadcrumb Navigation -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="/" class="text-decoration-none" aria-label="Home">
                    <svg viewBox="0 0 20 18" xmlns="http://www.w3.org/2000/svg" width="20" height="18">
                      <path d="M8 17.5V11.5H12V17.5H17V9.5H20L10 0.5L0 9.5H3V17.5H8Z" fill="currentColor" />
                    </svg>
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Red Hat Exam Offer <?php echo date("Y"); ?></li>
              </ol>
            </nav>
            <!-- Banner Content -->
            <div class="banner-course-content">
              <!-- Course At-a-Glance -->
              <section class="at-a-glance text-light">
                <h1 class="heading-main-1 text-white">Red Hat Exam Offer <?php echo date("Y"); ?> in Pune - Ace Your Certification!</h1>
                <!-- Review Card -->
                <div class="banner-review-card" itemscope itemtype="https://schema.org/Organization">
                  <meta itemprop="name" content="WebAsha Technologies">
                  <meta itemprop="url" content="https://training.webasha.com">
                  <meta itemprop="logo" content="https://training.webasha.com/assets/img/logo.png">
                  <div class="enrolled-group d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700" viewBox="0 0 24 24" aria-hidden="true" role="img" class="me-2">
                      <path d="M16 11c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-8 0c1.7 0 3-1.3 3-3S9.7 5 8 5 5 6.3 5 8s1.3 3 3 3zm0 2c-2.3 0-7 1.2-7 3.5V20h14v-3.5C15 14.2 10.3 13 8 13zm8 0c-.3 0-.7 0-1 .1 1.2.8 2 2.1 2 3.4V20h6v-3.5c0-2.3-4.7-3.5-7-3.5z"/>
                    </svg>
                    <span>53,850 Participants Enrolled</span>
                  </div>
                  <div itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating" style="display:flex;align-items:center;gap:8px;">
                    <meta itemprop="bestRating" content="5">
                    <meta itemprop="worstRating" content="1">
                    <meta itemprop="ratingValue" content="4.9">
                    <meta itemprop="reviewCount" content="48765">
                    <!-- Visual 5-Star Image -->
                    <img itemprop="image" class="img-responsive" src="assets/img/five-stars-review.png" alt="4.9 Star Rating: Highly Recommended"
                        style="height:20px;width:auto;vertical-align:middle;" loading="lazy">
                    <!-- Visual Rating Text -->
                    <p style="margin:0;color:#fff;display:inline-block;">
                      <strong style="color:#fff;">4.9</strong> out of 5 Based on
                      <strong style="color:#fff;">48,765</strong> Reviews
                    </p>
                  </div>
                  <!-- Hidden Sample Review (for Schema completeness) -->
                  <div itemprop="review" itemscope itemtype="https://schema.org/Review" style="display:none;">
                    <span itemprop="author" itemscope itemtype="https://schema.org/Person">
                      <meta itemprop="name" content="CCSE Student">
                    </span>
                    <meta itemprop="reviewBody" content="WebAsha Technologies offers the best CCSE training in {city} with hands-on cloud labs, expert instructors, and real-world AWS/Azure/GCP security projects. Perfect for cloud security professionals!">
                  </div>
                  <!-- Social Platform Ratings (Visual) -->
                  <ul class="list-unstyled social-list mt-2">
                    <li>
                      <img src="assets/img/icons/google.svg" alt="Google Rating" width="20" height="20" loading="lazy">
                      <strong>4.9/5</strong>
                    </li>
                    <li>
                      <img src="assets/img/icons/facebook.svg" alt="Facebook Rating" width="24" height="24" loading="lazy">
                      <strong>4.9/5</strong>
                    </li>
                  </ul>
                </div>
                <!-- SEO-Friendly Content -->
                <p class="text-light mt-4">
                  Enroll in the <strong>Red Hat Exam Offer <?php echo date("Y"); ?></strong> at <span class="red-color">WebAsha Technologies</span> in Pune to prepare for RHCSA, RHCE, OpenStack, and OpenShift certifications. This exclusive offer provides expert-led training, hands-on labs, practice tests, and discounted exam vouchers to ensure you ace your Red Hat certification exams and advance your IT career.
                  <br><br>
                  Designed for IT professionals, this program offers comprehensive preparation aligned with Red Hat’s official exam objectives. With flexible online and offline training modes, access to official Red Hat study materials, and dedicated career guidance, WebAsha Technologies equips you to achieve globally recognized certifications. Whether you're aiming for system administration, automation, or cloud expertise, our tailored exam prep ensures success on your first attempt.
                  <br><br>
                  Take advantage of this limited-time offer to boost your career in Linux, DevOps, and cloud computing with a trusted training provider.
                </p>
                <div class="check-list-box">
                  <ul class="benefits-list mb-0">
                    <li>
                      <i class="fa-solid fa-square-check"></i> Discounted Red Hat Exam Vouchers
                    </li>
                    <li>
                      <i class="fa-solid fa-square-check"></i> Access to Practice Tests & Study Materials
                    </li>
                    <li>
                      <i class="fa-solid fa-square-check"></i> Expert-Led Training Sessions
                    </li>
                    <li>
                      <i class="fa-solid fa-square-check"></i> Flexible Online & Offline Modes
                    </li>
                    <li>
                      <i class="fa-solid fa-square-check"></i> Hands-On Labs for Exam Prep
                    </li>
                    <li>
                      <i class="fa-solid fa-square-check"></i> Career Guidance & Placement Support
                    </li>
                  </ul>
                </div>
                <table class="table table-dark table-bordered facts-table mt-3 mb-0">
                  <tbody>
                    <tr>
                      <td class="fw-semibold text-warning">Exam Duration:</td>
                      <td class="text-light">3-4 Hours</td>
                    </tr>
                    <tr>
                      <td class="fw-semibold text-warning">Mode:</td>
                      <td class="text-light">Online & In-Person</td>
                    </tr>
                    <tr>
                      <td class="fw-semibold text-warning">Certifications:</td>
                      <td class="text-light">RHCSA, RHCE, OpenStack, OpenShift</td>
                    </tr>
                    <tr>
                      <td class="fw-semibold text-warning">Institute:</td>
                      <td class="text-light">WebAsha Technologies, Pune</td>
                    </tr>
                    <tr>
                      <td class="fw-semibold text-warning">Includes:</td>
                      <td class="text-light">Practice Tests, Exam Vouchers, Hands-on Labs, Career Support</td>
                    </tr>
                  </tbody>
                </table>
              </section>
              <!-- Call-to-Action Buttons -->
              <div class="button-group mt-4 mb-4">
                <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20Red%20Hat%20Exam%20Offer" class="btn-whatsapp text-decoration-none" aria-label="Contact via WhatsApp">
                  <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
                <a href="#" class="btn-phone text-decoration-none" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">
                  <i class="fa fa-download me-2"></i> Download Syllabus
                </a>
              </div>
            </div>
          </div>
          <!-- Right Column -->
          <div class="col-lg-4 col-sm-12">
            <div class="ec-council">
              <div class="video-thumbnail position-relative">
                <picture>
                  <source srcset="assets/img/course/redhat/red-hat-exam.webp" type="image/webp">
                  <img src="assets/img/course/redhat/red-hat-exam.webp" alt="Red Hat Exam Offer Preview Thumbnail" width="360" height="220" loading="lazy" decoding="async" class="img-fluid rounded shadow-sm">
                </picture>
                <button type="button" class="video-btn position-absolute top-50 start-50 translate-middle" aria-label="Play Red Hat exam offer promo video" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="r8yHe7gZgmo">
                  <svg class="play-icon" viewBox="0 0 64 64" width="64" height="64" aria-hidden="true" focusable="false">
                    <circle cx="32" cy="32" r="32" fill="rgba(0,0,0,0.55)" />
                    <path d="M26 20 L45 32 L26 44 z" fill="#fff" />
                  </svg>
                </button>
              </div>
              <div class="pera-group">
                <p class="desc">Industry-Recognized Red Hat Exam Preparation</p>
                <p>Have Questions? Consult Our Experts</p>
              </div>
              <div class="button-group">
                <a href="#" class="animated-button1 mx-auto d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Red Hat Exam Offer">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span> Enroll Now <i class="fa fa-arrow-right ms-2"></i>
                </a>
              </div>
              <!-- Accreditation -->
              <div class="text-white mt-4 mb-4">
                <h5>Accredited By</h5>
                <a href="#" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Red Hat Exam Offer">
                  <picture>
                    <img src="assets/img/icons/partner/redhat.webp" alt="Red Hat Authorized Training Partner" height="146" width="180" loading="lazy">
                  </picture>
                </a>
              </div>
            </div>
          </div>
          <!-- Stats Section -->
          <div class="col-lg-12 col-sm-12">
            <div class="banner-course-card">
              <div class="banner-course-row">
                <div class="item">
                  <img src="assets/imgs/fi-1.png" alt="Professionals Trained" width="73" height="73" loading="lazy">
                  <div class="content">
                    <h2>1000+</h2>
                    <p>Professionals Trained</p>
                  </div>
                </div>
                <div class="item">
                  <img src="assets/imgs/fi-2.png" alt="Batches per Month" width="73" height="73" loading="lazy">
                  <div class="content">
                    <h2>8+</h2>
                    <p>Batches Every Month</p>
                  </div>
                </div>
                <div class="item">
                  <img src="assets/imgs/fi-3.png" alt="Countries" width="73" height="73" loading="lazy">
                  <div class="content">
                    <h2>20+</h2>
                    <p>Countries Served</p>
                  </div>
                </div>
                <div class="item">
                  <img src="assets/imgs/fi-4.png" alt="Corporate Clients" width="73" height="73" loading="lazy">
                  <div class="content">
                    <h2>1000+</h2>
                    <p>Corporate Clients</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- JSON-LD Breadcrumb Schema -->
      <script type="application/ld+json">
        { "@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [ { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://training.webasha.com/" }, { "@type": "ListItem", "position": 2, "name": "Red Hat Exam Offer <?php echo date("Y"); ?>", "item": "<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>" } ] }
      </script>
</section>
    <!-- Adding sticky navigation for exam sections -->
    <section class="sticky-main-header1" id="stickyheader" style="position: sticky; top: 0; z-index: 1000; background-color: white;">
      <div class="container">
        <div class="sticky-header-list">
          <ul class="list-unstyled mb-0">
            <li>
              <a href="#overview" class="btn btn-outline-primary text-decoration-none">Overview</a>
            </li>
            <li>
              <a href="#exam-tracks" class="btn btn-outline-primary text-decoration-none">Exam Tracks</a>
            </li>
            <li>
              <a href="#exam-prep" class="btn btn-outline-primary text-decoration-none">Exam Preparation</a>
            </li>
            <li>
              <a href="#our-instructor" class="btn btn-outline-primary text-decoration-none">Alumni</a>
            </li>
            <li>
              <a href="#exam-certification" class="btn btn-outline-primary text-decoration-none">Certification</a>
            </li>
            <li>
              <a href="#placement-reviews" class="btn btn-outline-primary text-decoration-none">Placement & Reviews</a>
            </li>
            <li>
              <a href="#faqs" class="btn btn-outline-primary text-decoration-none">FAQs</a>
            </li>
          </ul>
          <div class="button-group">
            <button type="button" class="btn btn-enroll" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Enroll Now</button>
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</button>
          </div>
        </div>
      </div>
    </section>
    <!-- Starting lazy-loaded sections -->
    <!-- Including brand partners -->
    <section class="our-learners section-header text-center lazy-section">
      <?php include("include/brands.php"); ?>
    </section>
    <!-- Displaying recent placement testimonials -->
    <section class="course-recent-reviews section-header text-center lazy-section">
      <span class="section-badge">Recent Placements Testimonials</span>
      <h2 class="heading-main-1 text-white text-center">Red Hat Exam Offer <?php echo date("Y"); ?> <span class="red-color">Recent Reviews</span></h2>
      <?php include("include/video-reviews.php"); ?>
    </section>
    <!-- Showing text-based reviews -->
    <section class="success-speaks-reviwe course-speaks section-header text-center lazy-section">
      <div class="container">
        <span class="section-badge">Recent Placements Testimonials</span>
        <h2 class="heading-main text-center mb-5">Red Hat Exam Offer <?php echo date("Y"); ?> <span class="red-color">Reviews</span></h2>
        <?php include("include/redhat/text-reviews.php"); ?>
      </div>
    </section>
    <!-- Highlighting placement success -->
    <section class="course-technologies-placement lazy-section" id="placement-reviews">
      <?php include("include/placement.php"); ?>
    </section>
    <!-- Listing key features of exam offer -->
    <section class="training-features section-header mt-5 lazy-section">
      <div class="container">
        <!-- Preloading critical image for performance -->
        <link rel="preload" href="https://i.ibb.co/5X09hRg/lab.gif" as="image" fetchpriority="high">
        <span class="section-badge">Training Key Features</span>
        <h2 class="heading-main-1 text-center">Red Hat Exam Offer <?php echo date("Y"); ?> <span class="red-color">Training Key Features</span></h2>
        <p class="text-muted text-center mb-5">Explore the unique benefits of our Red Hat Exam Offer designed for success in achieving Red Hat certifications.</p>
        <?php include("include/redhat/key-features.php"); ?>
    </section>
    <!-- Explaining why choose WebAsha -->
    <section class="py-5 course-comparison-section lazy-section">
      <?php include("include/why-webasha.php"); ?>
    </section>
    <!-- Starting main content -->
    <main>
      <!-- Exam Overview Section -->
      <div class="container">
        <div class="row">
          <!-- Main Content -->
          <div class="col-lg-8 col-sm-12" id="sticky-start-section2">
            <!-- Describing Red Hat exam preparation -->
            <section class="contentcard lazy-section" id="overview">
  <div class="content-container" id="contentContainer1" aria-expanded="false">
    <div class="summary-details text-center">
      <h2 class="heading-main">
        Here are the <strong>[2025]</strong> RHCSA (Red Hat Certified System Administrator) /
        RHCE (Red Hat Certified Engineer) / RHCA (Red Hat Certified Architect)
      </h2>
      <p class="text-muted mb-0">
        <strong>Red Hat Standard Exam Fee</strong> for RHCSA/RHCE : INR 16,500/- plus Service Tax, as applicable.<br>
        <strong>Red Hat Standard Exam Fee</strong> for any Course Exam (RHCA Module) : INR 16,500/- plus Service Tax, as applicable.
      </p>
    </div>

    <hr>

    <h5 class="bold-text mb-2 mt-3">What is the basic difference between an RHCSA and an RHCE?</h5>
    <p class="text-muted mb-0">
      An IT professional who becomes a <strong>Red Hat Certified System Administrator (RHCSA)</strong> is
      qualified to perform core system administration skills needed in Red Hat Enterprise Linux environments.
      The certification is earned after successfully passing the RHCSA examination (EX200).
    </p>
    <p class="text-muted mb-0 mt-2">
      A <strong>Red Hat Certified Engineer (RHCE)</strong> is an RHCSA who possesses additional skills required
      of a senior system administrator for Red Hat Enterprise Linux systems. The RHCE is attained after passing
      both the RHCSA (EX200) and the RHCE (EX294) exams (V10).
    </p>

    <hr>

    <h5 class="bold-text mb-2 mt-3">“Red Hat Retake / 2nd attempt Offer"</h5>
    <ul>
      <li>A retake / 2nd attempt on both RHCSA (EX200) & RHCE (EX294) at a special fee of Rs. 16,500/- plus service tax.</li>
      <li>A retake / 2nd attempt on any Red Hat course exam at a special fee of Rs.16,500/- plus service tax.</li>
      <li>Red Hat branded goodies offered in this scheme.</li>
    </ul>

    <h5 class="bold-text mb-2 mt-3">“Red Hat Upgrade Offer"</h5>
    <ul>
      <li>A single attempt on both RHCSA & RHCE at a special fee of Rs. 8,250/- plus service tax.</li>
      <li>A single attempt on any Red Hat upgrade exam at a special fee of Rs. 8,250/- plus service tax.</li>
      <li>No retake offers in this scheme.</li>
    </ul>

    <hr>

    <h5 class="bold-text mb-2 mt-3">“Red Hat Exams – Terms and Conditions"</h5>
    <ul>
      <li>Candidates who have not undergone authorised training at RHCTP or ERHCTP can attempt any Red Hat certification exam at 200% of MSRP and are not eligible for quarterly/annual scheme benefits.</li>
      <li>For EX200 & EX294 exams to be delivered, Red Hat requires a minimum of 8 first-attempt (fresh) candidates. For any COE exam to be delivered, Red Hat requires a minimum of 5 first-attempt (fresh) candidates.</li>
      <li>Free Red Hat gifts under the scheme are offered under a no-exchange/no-replacement policy and are dispatched to the exam centre only after all first-attempt exams under the scheme are completed.</li>
    </ul>

    <hr>

    <h5 class="bold-text mb-2 mt-3">“Mandatory Documents To Register & Attempt Examination"</h5>
    <ul>
      <li>Documentation required to attempt Red Hat Exam (except EX401, EX436 & EX442) – Discount Voucher Book Forms OR Red Hat issued Course Completion Certificate.</li>
      <li>On exam day, candidates must bring an original government-issued ID (Driving License, Passport, Voter ID, etc.).</li>
      <li>Already certified candidates upgrading need only provide a printed copy of the certificate instead of the book forms.</li>
      <li>Candidates must fill the Exam Admit Card completely and accurately.</li>
    </ul>

    <p class="text-muted mt-3">
      For further details, please contact us on:
      <strong>8485846227 / 8485847920</strong>
    </p>

    <hr>

    <h5 class="bold-text mb-2 mt-3">Discounted Price of Red Hat Learning Subscription (RHLS)</h5>
    <p class="text-muted mb-1"><strong>Types of RHLS</strong></p>
    <div class="table-responsive">
      <table class="table table-sm">
        <thead>
          <tr>
            <th>SKU</th>
            <th>Discounted Price</th>
            <th>Training Units</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>LS120</td><td>-</td><td>22</td></tr>
          <tr><td>LS120-100</td><td>-</td><td>880</td></tr>
          <tr><td>LS220</td><td>-</td><td>33</td></tr>
          <tr><td>LS220-100</td><td>-</td><td>1320</td></tr>
          <tr><td>LS300</td><td>-</td><td>17</td></tr>
          <tr><td>LS300-100</td><td>-</td><td>660</td></tr>
          <tr><td>LS520</td><td>-</td><td>44</td></tr>
          <tr><td>LS520-100</td><td>-</td><td>1760</td></tr>
        </tbody>
      </table>
    </div>

    <div class="gradient-overlay" aria-hidden="true"></div>
  </div>

  <button class="toggle-button btn btn-outline-primary mt-3" onclick="toggleContent('contentContainer1', this)" aria-controls="contentContainer1" aria-expanded="false">
    View More
  </button>
</section>


            <!-- Highlighting certified candidates -->
            <section class="course-certified-candidates lazy-section" id="exam-certification">
              <?php include("include/redhat/cert/rhcsa.php"); ?>
            </section>
          </div>
          <!-- Sidebar for exam subscription -->
          <div class="col-lg-4 col-sm-12 col-12 sticky-sidebar1 lazy-section" id="sticky-sidebar2">
            <div class="course-subsciption sticky-sidebar-container">
              <?php include("include/course-sidebar2.php"); ?>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Continuing lazy-loaded sections -->
    <!-- Listing Red Hat exam tracks -->
    <section class="training-features py-5 bg-light lazy-section visible" id="exam-tracks">
      <div class="container">
        <div class="text-center section-header">
          <span class="section-badge">Red Hat Exam Tracks</span>
          <h2 class="heading-main">Red Hat Exam Offer <span class="red-color"><?php echo date("Y"); ?> in Pune</span></h2>
        </div>
        <p class="text-muted text-center">Join <b>WebAsha Technologies’ Red Hat Exam Offer <?php echo date("Y"); ?></b> to prepare for RHCSA, RHCE, and OpenShift certifications with expert-led training and discounted vouchers.</p>
        <div class="row g-4 mt-4">
          <!-- Card: RHCSA Exam Prep -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="assets/img/course/redhat/rhcsa.webp" class="card-img-top rounded-top" alt="RHCSA Exam Preparation" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2">Red Hat Certified System Administrator <span class="red-color">(RHCSA)</span></h5>
                <p class="text-muted small">Prepare for the RHCSA (EX200) exam with hands-on labs on Linux administration, file systems, and user management.</p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Duration:</b> 4–6 Weeks
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Certification:</b> RHCSA Voucher + Training Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Topics:</b> System Configuration, User Management, Security
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Tools:</b> RHEL, Bash, Ansible
                  </li>
                </ul>
                <p class="small mt-3 text-muted">Ideal for IT students and professionals aiming for Linux administration roles.</p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="rhcsa1" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20RHCSA%20Exam%20Offer" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card: RHCE Exam Prep -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="assets/img/course/redhat/rhce.webp" class="card-img-top rounded-top" alt="RHCE Exam Preparation" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2">Red Hat Certified Engineer <span class="red-color">(RHCE)</span></h5>
                <p class="text-muted small">Master advanced Linux automation (EX294) with Ansible, scripting, and system management for the RHCE exam.</p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Duration:</b> 4–6 Weeks
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Certification:</b> RHCE Voucher + Training Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Topics:</b> Automation, Ansible, Security
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Tools:</b> RHEL, Ansible, Bash
                  </li>
                </ul>
                <p class="small mt-3 text-muted">Perfect for RHCSA holders seeking advanced DevOps skills.</p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="rhce" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20RHCE%20Exam%20Offer" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card: OpenShift Exam Prep -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="contentcard h-100 border-0 shadow-sm">
              <img src="assets/img/course/redhat/do280.webp" class="card-img-top rounded-top" alt="OpenShift Exam Preparation" loading="lazy">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-2">Red Hat OpenShift <span class="red-color">Certification</span></h5>
                <p class="text-muted small">Prepare for OpenShift certifications with training in containerization and Kubernetes orchestration.</p>
                <ul class="list-unstyled small mt-3">
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Duration:</b> 4–6 Weeks
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Mode:</b> Classroom / Online / Hybrid
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Certification:</b> OpenShift Voucher + Training Certificate
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Topics:</b> Containers, Kubernetes, OpenShift
                  </li>
                  <li>
                    <i class="fa-solid fa-angles-right text-danger me-2"></i><b>Tools:</b> OpenShift, Docker, Kubernetes
                  </li>
                </ul>
                <p class="small mt-3 text-muted">Ideal for professionals targeting cloud-native roles.</p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                  <a href="red-hat-openshift" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Apply Now</a>
                  <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="Download Syllabus">View Syllabus</a>
                  <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20Apply%20for%20OpenShift%20Exam%20Offer" class="btn btn-success btn-sm">Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Detailing exam preparation resources -->
    <section class="training-features py-5 bg-light lazy-section visible" id="exam-prep">
      <div class="container">
        <div class="text-center section-header mb-4">
          <span class="section-badge">Red Hat Exam Preparation</span>
          <h2 class="heading-main">Red Hat Exam Offer <span class="red-color"><?php echo date("Y"); ?> – Your Path to Certification</span></h2>
          <p class="text-muted text-center">Prepare with WebAsha Technologies’ comprehensive Red Hat exam resources, including practice tests, study guides, and expert-led training.</p>
        </div>
       <div class="card shadow-sm border-0 p-4">
  <h4 class="fw-bold mb-3 text-center">Top Red Hat Certification Exams in India</h4>
  <p class="text-muted">
    <strong>WebAsha Technologies</strong> offers the <b>best Red Hat certification training and exam preparation in Pune, India</b> — 
    covering globally recognized certifications like <b>RHCSA (EX200)</b>, <b>RHCE (EX294)</b>, and <b>Red Hat OpenShift (DO280 / EX280)</b>. 
    Our official <b>Red Hat–authorized courses</b> are designed to help IT professionals build real-world expertise in <b>Linux system administration, automation, and container management</b>.
  </p>

  <p class="text-muted">
    Each <b>Red Hat certification track</b> includes <b>hands-on lab sessions</b>, <b>performance-based exam simulations</b>, and <b>discounted global exam vouchers</b> 
    to ensure that learners are fully prepared to pass their <b>Red Hat exams on the first attempt</b>. 
    With expert mentorship and live practical training, candidates gain the skills required for high-demand roles in <b>DevOps, cloud administration, and system engineering</b>.
  </p>

  <p class="text-muted mb-0">
    Choose your certification pathway — <b>RHCSA Exam Preparation (EX200)</b> to master foundational Linux skills, 
    <b>RHCE Exam Preparation (EX294)</b> for advanced automation using Ansible, or 
    <b>Red Hat OpenShift Certification Prep (DO280 / EX280)</b> to excel in container orchestration and hybrid cloud environments. 
    At <strong>WebAsha Technologies</strong>, we ensure every learner receives practical, industry-ready training aligned with the latest <b>Red Hat Enterprise Linux (RHEL)</b> standards.
  </p>
</div>

        <div class="card shadow-sm border-0 p-4 mt-4">
  <h4 class="fw-bold mb-3 text-center">Red Hat Exam Preparation Resources</h4>
  <p class="text-muted">
    Gain exclusive access to <b>Red Hat practice tests</b>, <b>official study guides</b>, and <b>interactive hands-on lab environments</b> — all mapped directly to the latest <b>Red Hat certification exam objectives</b>. 
    Each resource is designed to help candidates prepare efficiently for <b>RHCSA (EX200)</b>, <b>RHCE (EX294)</b>, and <b>OpenShift (DO280 / EX280)</b> exams through <b>real-world tasks, live demonstrations,</b> and <b>expert-led sessions</b>.
  </p>

  <p class="text-muted mb-0">
    At <strong>WebAsha Technologies</strong>, learners receive <b>personalized feedback</b> from Red Hat Certified Instructors (RHCIs) to strengthen command-line proficiency, troubleshooting, and automation skills. 
    We also offer <b>discounted Red Hat exam vouchers</b> and flexible scheduling options, making globally recognized certifications like <b>RHCSA</b>, <b>RHCE</b>, and <b>OpenShift Administrator</b> more accessible and affordable for every IT professional.
  </p>
</div>

        <div class="card shadow-sm border-0 p-4 mt-4">
  <h4 class="fw-bold mb-3 text-center">Why Prepare for Red Hat Certifications with WebAsha Technologies?</h4>
  <ul class="list-unstyled ps-2 small">
    <li>
      <i class="fa-solid fa-angles-right text-danger me-2"></i>
      <b>Certified Red Hat Instructors (RHCIs):</b> Learn directly from <strong>Red Hat Certified Experts</strong> with years of enterprise experience in <b>Linux administration, automation, and OpenShift</b>.
    </li>
    <li>
      <i class="fa-solid fa-angles-right text-danger me-2"></i>
      <b>Hands-On Labs & Real Exam Simulations:</b> Gain practical experience through <b>live Red Hat lab environments</b> that mirror <b>EX200, EX294, and EX280 exam scenarios</b> to ensure exam readiness and skill confidence.
    </li>
    <li>
      <i class="fa-solid fa-angles-right text-danger me-2"></i>
      <b>Mock Tests & Performance Evaluation:</b> Attempt <b>timed mock exams</b> designed according to <b>Red Hat’s performance-based format</b> and receive instant feedback to improve weak areas before the real test.
    </li>
    <li>
      <i class="fa-solid fa-angles-right text-danger me-2"></i>
      <b>Comprehensive Study Resources:</b> Access official <b>Red Hat study materials, video tutorials, eBooks, and quick reference guides</b> to cover every objective of the <b>RHCSA, RHCE, and OpenShift exams</b>.
    </li>
    <li>
      <i class="fa-solid fa-angles-right text-danger me-2"></i>
      <b>Placement Assistance & Career Support:</b> Get 100% placement assistance, resume-building sessions, and job interview preparation after completing your <b>Red Hat certification training</b> from <strong>WebAsha Technologies</strong>.
    </li>
  </ul>
</div>

        <div class="card shadow-sm border-0 p-4 mt-4">
  <h4 class="fw-bold mb-3 text-center">Take the First Step Toward Red Hat Certification Success</h4>
  <p class="text-muted">
    Start your journey to becoming a <b>Red Hat Certified Professional</b> with <strong>WebAsha Technologies</strong> — 
    India’s leading <b>Red Hat Authorized Training Partner</b>. 
    Our <b>exam-focused RHCSA (EX200)</b>, <b>RHCE (EX294)</b>, and <b>OpenShift (DO280 / EX280)</b> programs are designed to help learners gain 
    <b>hands-on Linux administration, DevOps automation, and container management skills</b> required for real-world success.
  </p>

  <p class="text-muted">
    Take advantage of <b>exclusive Red Hat exam voucher discounts</b>, <b>expert mentorship</b>, and <b>24/7 lab access</b> to prepare effectively and confidently.
    Whether you're a fresher, IT professional, or DevOps engineer, <strong>WebAsha Technologies</strong> helps you 
    <b>pass your Red Hat exams on the first attempt</b> and advance your career with globally recognized credentials.
  </p>

  <p class="text-muted mb-0">
    Enroll in the <b>Red Hat Exam Offer <?php echo date("Y"); ?></b> in Pune today and take your first step toward 
    becoming a <b>Red Hat Certified System Administrator, Engineer, or OpenShift Specialist</b>. 
    Build your career in <b>Linux, Cloud, and DevOps</b> with structured training, exam guidance, and placement support from <strong>WebAsha Technologies</strong>.
  </p>
</div>

        <div class="text-center mt-4">
          <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll Now">Enroll Now</a>
          <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#syllabusModalLabel" aria-label="View Syllabus">View Syllabus</a>
          <a href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20Sir,%20I%20want%20to%20know%20more%20about%20Red%20Hat%20Exam%20Offer%20<?php echo date("Y"); ?>" target="_blank" class="btn btn-success btn-sm">
            <i class="fa-brands fa-whatsapp me-1"></i> Whatsapp
          </a>
        </div>
      </div>
    </section>
    <!-- Showcasing career paths -->
    <section class="career-straight lazy-section">
      <?php include("include/career-straight.php"); ?>
    </section>
    <!-- Highlighting Red Hat certified alumni -->
    <section class="course-discover-profile lazy-section" id="our-instructor">
      <div class="section-header text-center">
        <span class="section-badge">Recent Career Success Stories</span>
      </div>
      <h2 class="heading-main-1 text-center">Explore Alumni with Profiles <span class="red-color">Like Yours</span></h2>
      <p class="desc text-center">Learn about their career paths, specialties, and accomplishments in Red Hat certifications.</p>
      <?php include("include/alumni.php"); ?>
    </section>
    <!-- Providing FAQs for Red Hat exam offer -->
    <section class="course-webasha-faq lazy-section" id="faqs">
      <div class="container mt-4 mb-4">
        <div class="section-header text-center mb-5">
          <span class="section-badge">FAQs</span>
          <h2 class="heading-main-1 text-center">Red Hat Exam Offer <?php echo date("Y"); ?> <span class="red-color">FAQs</span></h2>
        </div>
        <div class="all-theme-accordion" id="content">
          <div class="accordion accordion-flush" id="coursefaqAccordionFlush">
            <!-- FAQ 1 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq1" aria-expanded="true" aria-controls="flush-coursefaq1">
                  What is included in the Red Hat Exam Offer?
                </button>
              </h2>
              <div id="flush-coursefaq1" class="accordion-collapse collapse show" aria-labelledby="flush-heading-1" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0 text-muted">
                  The offer includes expert-led training, hands-on labs, practice tests, study guides, discounted exam vouchers, and a training certificate.
                </div>
              </div>
            </div>
            <!-- FAQ 2 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq2" aria-expanded="false" aria-controls="flush-coursefaq2">
                  Who is eligible for the Red Hat Exam Offer?
                </button>
              </h2>
              <div id="flush-coursefaq2" class="accordion-collapse collapse" aria-labelledby="flush-heading-2" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0 text-muted">
                  IT professionals, B.Tech, MCA, BCA, and Diploma students with basic Linux knowledge. RHCE candidates need RHCSA or equivalent experience.
                </div>
              </div>
            </div>
            <!-- FAQ 3 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq3" aria-expanded="false" aria-controls="flush-coursefaq3">
                  What are the durations of the exam prep programs?
                </button>
              </h2>
              <div id="flush-coursefaq3" class="accordion-collapse collapse" aria-labelledby="flush-heading-3" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0 text-muted">
                  Programs range from 4–6 weeks for RHCSA, RHCE, and OpenShift prep, with flexible online/offline schedules.
                </div>
              </div>
            </div>
            <!-- FAQ 4 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq4" aria-expanded="false" aria-controls="flush-coursefaq4">
                  Are classes online, offline, or hybrid?
                </button>
              </h2>
              <div id="flush-coursefaq4" class="accordion-collapse collapse" aria-labelledby="flush-heading-4" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0 text-muted">
                  We offer classroom (offline), live online instructor-led, and hybrid modes, depending on the batch.
                </div>
              </div>
            </div>
            <!-- FAQ 5 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq5" aria-expanded="false" aria-controls="flush-coursefaq5">
                  Will I receive a certificate after training?
                </button>
              </h2>
              <div id="flush-coursefaq5" class="accordion-collapse collapse" aria-labelledby="flush-heading-5" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0 text-muted">
                  Yes, you receive a WebAsha training certificate. Official Red Hat certifications are awarded upon passing the exams.
                </div>
              </div>
            </div>
            <!-- FAQ 6 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-6">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq6" aria-expanded="false" aria-controls="flush-coursefaq6">
                  Are exam vouchers included in the offer?
                </button>
              </h2>
              <div id="flush-coursefaq6" class="accordion-collapse collapse" aria-labelledby="flush-heading-6" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0 text-muted">
                  Yes, discounted vouchers for RHCSA, RHCE, and OpenShift exams are included, based on the track.
                </div>
              </div>
            </div>
            <!-- FAQ 7 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-7">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq7" aria-expanded="false" aria-controls="flush-coursefaq7">
                  What is the format of Red Hat exams?
                </button>
              </h2>
              <div id="flush-coursefaq7" class="accordion-collapse collapse" aria-labelledby="flush-heading-7" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0 text-muted">
                  Red Hat exams are performance-based, requiring hands-on tasks in a live Linux environment, lasting 2–3 hours.
                </div>
              </div>
            </div>
            <!-- FAQ 8 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-8">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq8" aria-expanded="false" aria-controls="flush-coursefaq8">
                  How long are exam vouchers valid?
                </button>
              </h2>
              <div id="flush-coursefaq8" class="accordion-collapse collapse" aria-labelledby="flush-heading-8" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0 text-muted">
                  Vouchers are typically valid for one year from purchase. Confirm with admissions for exact terms.
                </div>
              </div>
            </div>
            <!-- FAQ 9 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-9">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq9" aria-expanded="false" aria-controls="flush-coursefaq9">
                  Does WebAsha provide placement assistance?
                </button>
              </h2>
              <div id="flush-coursefaq9" class="accordion-collapse collapse" aria-labelledby="flush-heading-9" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0 text-muted">
                  Yes, we offer resume workshops, mock interviews, and hiring partner connections for certified candidates.
                </div>
              </div>
            </div>
            <!-- FAQ 10 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-10">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coursefaq10" aria-expanded="false" aria-controls="flush-coursefaq10">
                  How do I enroll in the Red Hat Exam Offer?
                </button>
              </h2>
              <div id="flush-coursefaq10" class="accordion-collapse collapse" aria-labelledby="flush-heading-10" data-bs-parent="#coursefaqAccordionFlush">
                <div class="accordion-body pt-0 text-muted">
                  Apply via the enquiry form, call/WhatsApp +91 8010911256, or follow the registration steps provided by admissions.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Adding JSON-LD for FAQ schema -->
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "What is included in the Red Hat Exam Offer?",
            "acceptedAnswer": { "@type": "Answer", "text": "The offer includes expert-led training, hands-on labs, practice tests, study guides, discounted exam vouchers, and a training certificate."}
          },
          {
            "@type": "Question",
            "name": "Who is eligible for the Red Hat Exam Offer?",
            "acceptedAnswer": { "@type": "Answer", "text": "IT professionals, B.Tech, MCA, BCA, and Diploma students with basic Linux knowledge. RHCE candidates need RHCSA or equivalent experience."}
          },
          {
            "@type": "Question",
            "name": "What are the durations of the exam prep programs?",
            "acceptedAnswer": { "@type": "Answer", "text": "Programs range from 4–6 weeks for RHCSA, RHCE, and OpenShift prep, with flexible online/offline schedules."}
          },
          {
            "@type": "Question",
            "name": "Are classes online, offline, or hybrid?",
            "acceptedAnswer": { "@type": "Answer", "text": "We offer classroom (offline), live online instructor-led, and hybrid modes, depending on the batch."}
          },
          {
            "@type": "Question",
            "name": "Will I receive a certificate after training?",
            "acceptedAnswer": { "@type": "Answer", "text": "Yes, you receive a WebAsha training certificate. Official Red Hat certifications are awarded upon passing the exams."}
          },
          {
            "@type": "Question",
            "name": "Are exam vouchers included in the offer?",
            "acceptedAnswer": { "@type": "Answer", "text": "Yes, discounted vouchers for RHCSA, RHCE, and OpenShift exams are included, based on the track."}
          },
          {
            "@type": "Question",
            "name": "What is the format of Red Hat exams?",
            "acceptedAnswer": { "@type": "Answer", "text": "Red Hat exams are performance-based, requiring hands-on tasks in a live Linux environment, lasting 2–3 hours."}
          },
          {
            "@type": "Question",
            "name": "How long are exam vouchers valid?",
            "acceptedAnswer": { "@type": "Answer", "text": "Vouchers are typically valid for one year from purchase. Confirm with admissions for exact terms."}
          },
          {
            "@type": "Question",
            "name": "Does WebAsha provide placement assistance?",
            "acceptedAnswer": { "@type": "Answer", "text": "Yes, we offer resume workshops, mock interviews, and hiring partner connections for certified candidates."}
          },
          {
            "@type": "Question",
            "name": "How do I enroll in the Red Hat Exam Offer?",
            "acceptedAnswer": { "@type": "Answer", "text": "Apply via the enquiry form, call/WhatsApp +91 8010911256, or follow the registration steps provided by admissions."}
          }
        ]
      }
    </script>
    <!-- Including related Red Hat resources -->
    <section class="other-course-kubernetes lazy-section">
      <div class="container">
        <div class="course-kubernetes-wraper">
          <div class="course-kubernetes">
            <h2 class="heading-main text-center">Browse Red Hat Exam Offer <?php echo date("Y"); ?> related Resources</h2>
            <?php include("include/related-resources.php"); ?>
          </div>
        </div>
      </div>
    </section>
    <!-- Including modals and footer -->
    <?php include("include/enquiry-modal.php"); ?>
    <?php include("include/syllabus-modal.php"); ?>
    <!-- Footer -->
    <?php include("include/footer.php"); ?>
    <?php include("include/footerlink.php"); ?>
  </body>
</html>