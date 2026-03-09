<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include common header links / global meta / favicon / CSS / JS -->
    <?php include("include/headerlink.php"); ?>
    
    <?php
      $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
      $current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
    <title>Payment Details | WebAsha Technologies - Secure Fee Payment Options</title>
    <meta name="description" content="Pay your course fees securely at WebAsha Technologies via Bank Transfer, International SWIFT, PayPal, Wise, or Remitly. Fast, safe, and hassle-free payment methods.">
    <meta name="keywords" content="WebAsha payment methods, pay course fees online, bank transfer WebAsha, PayPal payment, international payment Pune, UPI payment training">

    <link rel="canonical" href="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">

    <!-- Open Graph -->
    <meta property="og:title" content="Payment Methods | WebAsha Technologies">
    <meta property="og:description" content="Multiple secure payment options: Bank Transfer, International SWIFT, PayPal, Wise/Remitly. Enroll today with confidence!">
    <meta property="og:url" content="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <meta property="og:image" content="https://training.webasha.com/assets/img/payment/payment-banner.webp">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Payment Methods | WebAsha Technologies">
    <meta name="twitter:description" content="Pay your IT training fees easily via UPI, Bank Transfer, PayPal, or International Transfer.">
    <meta name="twitter:image" content="https://training.webasha.com/assets/img/payment/payment-banner.webp">

    <!-- JSON-LD Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "WebAsha Technologies",
      "url": "https://training.webasha.com/",
      "logo": "https://training.webasha.com/assets/img/logo.webp",
      "description": "Secure payment options for IT training courses in Pune - Bank Transfer, PayPal, International SWIFT, Wise, Remitly.",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+91-8010911256",
        "contactType": "Customer Service"
      }
    }
    </script>
</head>

<body>

<?php include("include/header.php"); ?>

<!-- Black Breadcrumb Banner -->
<div class="breadcrumb-bar text-center">
  <div class="container">
    <div class="row align-items-center py-3">
      <div class="col-12">
        <h1 class="heading-main-1 mb-2 text-white">Payment Details</h1>
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
            <li class="breadcrumb-item active text-white" aria-current="page">Payment Details</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>

<!-- Payment Options Section -->
<section class="section-header lazy-section mt-5 mb-5">
  <div class="container">

    <!-- Main Heading -->
    <div class="text-center mb-5">
      <span class="section-badge">Secure Payment</span>
      <h2 class="heading-main-1 mb-3">Choose Your Preferred Payment Method</h2>
      <p class="description">Fast, secure & hassle-free payment options for Indian and international students.</p>
    </div>

    <!-- ==================== SECTION 1: PAYMENTS FROM INDIA (UPI + Bank + Online) ==================== -->
    <div class="mb-5">
  <h2 class="heading-main text-center mb-4"> Indian Payments  <span class="red-color">(UPI / NEFT / RTGS / IMPS / Card)</span></h2>
  <p class="text-center mt-4 text-success fw-bold fs-5">
    Instant confirmation • Zero charges on UPI/NEFT/IMPS
  </p>

  <div class="row g-4 justify-content-center">

    <!-- Column 1 -->
    <div class="col-lg-4 col-md-6">
      <div class="card h-100 border-0 shadow-sm">
        <div class="card-header bg-success text-white text-center py-3">
          <h5 class="mb-0">Google Pay / PhonePe / Paytm</h5>
        </div>
        <div class="card-body p-4 text-center">

  <!-- Left & Right QR Codes -->
  <div class="d-flex justify-content-between align-items-center mb-3">
    <img src="assets/img/open.webp" alt="QR Left" class="img-fluid" style="height:300px;">
    <h6 class="fw-bold mb-0">UPI IDs:</h6>
    <img src="assets/img/forte.webp" alt="QR Right" class="img-fluid" style="height:300px;">
  </div>

  <p class="text-muted small mb-3">
    Name: <strong>Forte Webasha Technology Pvt. Ltd.</strong><br>
    or <strong>openwebcloud Pvt. Ltd.</strong>
  </p>

  <hr>

  <h6 class="fw-bold text-primary">Direct Number:</h6>
  <h5 class="text-success">8130506408</h5>
  <p class="small text-muted">Works on GPay • PhonePe • Paytm</p>

</div>

      </div>
    </div>

    <!-- Column 2 -->
    <div class="col-lg-4 col-md-6">
      <div class="card h-100 border-0 shadow-sm">
        <div class="card-header bg-danger text-white text-center py-3">
          <h5 class="mb-0">Kotak Mahindra Bank</h5>
        </div>
        <div class="card-body p-4">
          <ul class="list-unstyled mb-3">
            <li class="mb-2"><strong>A/c Name:</strong> WebAsha Technologies</li>
            <li class="mb-2"><strong>A/c No:</strong> 8485847920</li>
            <li class="mb-2"><strong>IFSC:</strong> KKBK0001769</li>
            <li class="mb-2"><strong>Branch:</strong> Pune</li>
            <li class="mb-2"><strong>UPI ID:</strong> webasha@kotak</li>
          </ul>
          <div class="text-center text-success small">Instant • Zero Charges</div>
        </div>
      </div>
    </div>

    <!-- Column 3 -->
    <div class="col-lg-4 col-md-6">
      <div class="card h-100 border-0 shadow-sm text-center">
        <div class="card-header bg-warning text-dark text-center py-3">
          <h5 class="mb-0">Credit / Debit Card</h5>
        </div>
        <div class="card-body p-5">
          <i class="fas fa-credit-card fa-3x text-primary mb-3"></i>
          <h5>Pay Online Securely</h5>
          <p class="text-muted small">100% Safe • Instant Confirmation</p>
          <a href="https://easebuzz.in/pay/WebAshaTraining" target="_blank" class="btn btn-success btn-lg mt-3 px-4">
            Pay with Card Now
          </a>
        </div>
      </div>
    </div>

  </div>

  
</div>


    <!-- ==================== SECTION 2: INTERNATIONAL PAYMENTS ==================== -->
<div class="mb-5 bg-light rounded-4 py-5"> 
  <h2 class="heading-main text-center mb-4"> International Fast &  <span class="red-color">Trusted Options</span></h2>

  <div class="row g-4 justify-content-center">

    <!-- 1st Column – Remitly / Wire Transfer -->
    <div class="col-lg-4 col-md-6">
      <div class="card h-100 border-0 shadow-sm">
        <div class="card-header bg-primary text-white text-center py-3">
          <h5 class="mb-0">Remitly / Wire Transfer</h5>
        </div>
        <div class="card-body p-4 small">
          <p class="text-center mb-2">
            <strong>Use:</strong> 
            <a href="https://www.remitly.com" target="_blank" rel="nofollow">www.remitly.com</a>
          </p>
          <hr>
          <ul class="list-unstyled mb-0">
            <li><strong>Name:</strong> MAYANK RAJ</li>
            <li><strong>Account Number:</strong> 881028099444</li>
            <li><strong>MMID:</strong> 9641452</li>
            <li><strong>Bank:</strong> DBS Bank</li>
            <li><strong>IFSC:</strong> DBSS0IN0811</li>
            <li class="mt-2"><strong>VPA/UPI:</strong> rajmayank@dbs</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- 2nd Column – PayPal -->
    <div class="col-lg-4 col-md-6">
      <div class="card h-100 border-0 shadow-sm text-center">
        <div class="card-body p-5">
          <i class="fab fa-paypal fa-4x text-info mb-4"></i>
          <h4 class="card-title">Pay with PayPal</h4>
          <p class="text-muted">Credit/Debit Card Accepted • Instant</p>

          <!-- 5% Extra Note -->
          <p class="text-danger small fw-bold">
            Note: If you are using PayPal, you have to pay 5% extra as a platform charge on the discussed fee.
          </p>

          <hr class="w-50 mx-auto">

          <a href="https://paypal.me/webasha" target="_blank" class="btn btn-outline-primary btn-lg mt-3 px-4">
            paypal.me/webasha
          </a>

          <p class="small text-muted mt-2">
            Name: <strong>WebAsha Technologies / Mayank Raj</strong>
          </p>
        </div>
      </div>
    </div>

    <!-- 3rd Column – USA Bank Account -->
    <div class="col-lg-4 col-md-6">
      <div class="card h-100 border-0 shadow-sm">
        <div class="card-header bg-dark text-white text-center py-3">
          <h5 class="mb-0">USA Bank Account (USD)</h5>
        </div>
        <div class="card-body p-4 small">
          <ul class="list-unstyled mb-0">
            <li><strong>Holder:</strong> FORTE WEBASHA TECHNOLOGIES PRIVATE LIMITED</li>
            <li><strong>Bank:</strong> Community Federal Savings Bank</li>
            <li><strong>A/c No:</strong> 8337550312</li>
            <li><strong>ACH Routing:</strong> 026073150</li>
            <li><strong>Fedwire:</strong> 026073008</li>
            <li><strong>Address:</strong> New York, NY, USA</li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</div>


    <!-- ==================== SECTION 3: AFTER PAYMENT INSTRUCTIONS ==================== -->
    <div class="mb-5">
      <div class="alert alert-info rounded-4 p-5 text-center shadow-lg border-0">
        <h4 class="alert-heading text-primary mb-4">
          After Payment – Send Screenshot
        </h4>
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <p class="fs-5 mb-4">
              <i class="fab fa-whatsapp text-success fs-3"></i>
              <a href="https://wa.me/918010911256" target="_blank" class="fw-bold text-success fs-4 mx-2">
                +91-8010911256
              </a>
            </p>
            <p class="fs-5 mb-4">
              <i class="fas fa-envelope text-primary fs-3"></i>
              <a href="mailto:training@webasha.com" class="fw-bold mx-2">training@webasha.com</a>
            </p>
            <hr class="w-50 mx-auto">
            <p class="mb-0 text-dark fw-bold fs-5">
              Please share: Name • Course • Contact • Transaction Screenshot
            </p>
            <p class="text-success mt-3 fs-5">
              Instant Enrollment Confirmation!
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Final CTA -->
    <div class="text-center mt-5">
  <a 
    href="https://api.whatsapp.com/send?phone=+918010911256&text=Hello%20WebAsha,%20I%20need%20help%20with%20payment" 
    target="_blank" 
    class="btn btn-success btn-lg px-5 d-inline-flex align-items-center shadow"
  >
    Need Help?
    <i class="fab fa-whatsapp ms-3"></i>
  </a>
</div>


  </div>
</section>

<?php include("include/enquiry-modal.php"); ?>
<?php include("include/footer.php"); ?>
<?php include("include/footerlink.php"); ?>

</body>
</html>