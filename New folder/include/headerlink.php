<?php
// include/headerlink.php
// Common head includes for all pages (charset, viewport, robots, favicon, global OG/Twitter site values, canonical, common CSS/JS links)

// ensure $current_url exists (if not already defined in page)
if (!isset($current_url)) {
  $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
  $current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}
?>
<!-- Common Meta -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Robots & Author (site-wide) -->
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
<meta name="author" content="WebAsha Technologies">

<!-- Open Graph (site-level defaults — override on page if needed) -->
<meta property="og:locale" content="en_IN">
<meta property="og:type" content="website">
<meta property="og:site_name" content="WebAsha Technologies">

<!-- Twitter Card (site-level default) -->
<meta name="twitter:card" content="summary_large_image">

<!-- Favicon / Touch Icon -->
<link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="/assets/img/apple-touch-icon.png">

<!-- Dynamic Canonical -->
<link rel="canonical" href="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">

<!-- Common CSS Links -->      
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" />
<link rel="stylesheet" type="text/css" href="assets/css/slick.css" />
<link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css" />
<link rel="stylesheet" type="text/css" href="assets/css/jquery.scrollbar.css" />
<link rel="stylesheet" type="text/css" href="assets/css/custom.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<!--Google Search -->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70410492-1', 'auto');
  ga('send', 'pageview');

 </script> 
  
  <!-- Rewview Schema -->    
  <script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Product",
  "name": "WebAsha Technologies Training Institute",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "reviewCount": 98935
  }
}
</script>