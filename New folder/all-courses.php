<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Include common header links / global meta / favicon / CSS / JS -->
    <?php include("include/headerlink.php"); ?>

    <!-- Page-specific metadata (All Courses Page) -->
    <?php
      $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
      $current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
    <title>All Courses | WebAsha Technologies - Training Institute in Pune</title>
    <meta name="description" content="Explore our comprehensive range of IT courses at WebAsha Technologies in Pune, including AWS, Google Cloud, Azure, Kubernetes, Cisco, EC-Council, and more.">
    <meta name="keywords" content="WebAsha Courses, IT Training Pune, AWS Certification, Google Cloud Training, Azure Certification, Kubernetes Training, Cisco CCNA, Ethical Hacking CEH">
    <meta property="og:title" content="All Courses | WebAsha Technologies - Training Institute in Pune">
    <meta property="og:description" content="Discover a wide variety of IT certification courses at WebAsha Technologies, designed to empower your career in cloud, networking, and cybersecurity.">
    <meta property="og:url" content="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <meta property="og:image" content="https://training.webasha.com/assets/img/courses/main-courses.webp">
    <meta property="og:image:alt" content="WebAsha Technologies Courses - IT Training in Pune">
    <meta name="twitter:title" content="All Courses | WebAsha Technologies - Training Institute in Pune">
    <meta name="twitter:description" content="Browse our IT certification courses, including AWS, Google Cloud, Azure, Kubernetes, Cisco, and EC-Council, offered at WebAsha Technologies in Pune.">
    <meta name="twitter:image" content="https://training.webasha.com/assets/img/courses/main-courses.webp">

    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "WebAsha Technologies",
        "url": "https://training.webasha.com/",
        "logo": "https://training.webasha.com/assets/img/logo.webp",
        "description": "Discover the full range of IT certification courses at WebAsha Technologies, including cloud, networking, and cybersecurity training in Pune."
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
            <h1 class="heading-main-1 mb-2 text-white">All Courses</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center mb-0" style="background:transparent;">
                <li class="breadcrumb-item">
                  <a href="/" class="text-decoration-none text-white" aria-label="Home">
                    <svg viewBox="0 0 20 18" xmlns="http://www.w3.org/2000/svg" width="15" height="12" role="img" aria-hidden="true">
                      <path d="M8 17.5V11.5H12V17.5H17V9.5H20L10 0.5L0 9.5h5V17.5H8Z" fill="currentColor" />
                    </svg>
                    <span class="ms-1">Home</span>
                  </a>
                </li>
                <li class="breadcrumb-item active text-white" aria-current="page">All Courses</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
<!-- Main Content -->
 <section class="py-5 lazy-section">
    <!-- Red Hat Courses Section -->
    <div class="container my-4 mb-5">
        <h2 class="heading-main-1 text-center mb-4">Red Hat <span class="red-color">Courses</span></h2>
        <div class="row g-3">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="contentcard visible card-hover">
                    <img src="assets/img/course/redhat/rhce.webp" class="card-img-top" alt="Red Hat Certified Engineer Course" loading="lazy" />
                    <div class="card-inner">
                        <div class="card-wraper">
                            <h5 class="card-title mb-4 mt-3">RHCE | Red Hat Certified Engineer</h5>
                        </div>
                        <p class="description mb-0">Master advanced Linux system administration with the <strong>Red Hat Certified Engineer (RHCE)</strong> certification, focusing on automation, configuration, and troubleshooting.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24" class="me-1">
                                    <path d="M16 11c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-8 0c1.7 0 3-1.3 3-3S9.7 5 8 5 5 6.3 5 8s1.3 3 3 3zm0 2c-2.3 0-7 1.2-7 3.5V20h14v-3.5C15 14.2 10.3 13 8 13zm8 0c-.3 0-.7 0-1 .1 1.2.8 2 2.1 2 3.4V20h6v-3.5c0-2.3-4.7-3.5-7-3.5z"/>
                                </svg>
                                1,900 students
                            </span>
                            <span class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFD700" viewBox="0 0 24 24" class="me-1">
                                    <path d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.782 1.401 8.178L12 18.897l-7.335 3.856 1.401-8.178L.132 9.21l8.2-1.192z"/>
                                </svg>
                                4.8
                            </span>
                        </div>
                        <div class="button-group mt-3">
                            <a href="rhce-online-training-institute-certification-exam-center" class="btn btn-outline-primary" aria-label="Learn More">
                                Explore More <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="contentcard lazy-section visible card-hover">
                    <img src="assets/img/course/redhat/rhcsa.webp" class="card-img-top" alt="Red Hat Certified System Administrator Course" loading="lazy" />
                    <div class="card-inner">
                        <div class="card-wraper">
                            <h5 class="card-title mb-4 mt-3">RHCSA | Red Hat Certified System Administrator</h5>
                        </div>
                        <p class="description mb-0">Gain foundational Linux administration skills with the <strong>Red Hat Certified System Administrator (RHCSA)</strong> certification, focusing on system configuration and management.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24" class="me-1">
                                    <path d="M16 11c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-8 0c1.7 0 3-1.3 3-3S9.7 5 8 5 5 6.3 5 8s1.3 3 3 3zm0 2c-2.3 0-7 1.2-7 3.5V20h14v-3.5C15 14.2 10.3 13 8 13zm8 0c-.3 0-.7 0-1 .1 1.2.8 2 2.1 2 3.4V20h6v-3.5c0-2.3-4.7-3.5-7-3.5z"/>
                                </svg>
                                2,200 students
                            </span>
                            <span class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFD700" viewBox="0 0 24 24" class="me-1">
                                    <path d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.782 1.401 8.178L12 18.897l-7.335 3.856 1.401-8.178L.132 9.21l8.2-1.192z"/>
                                </svg>
                                4.7
                            </span>
                        </div>
                        <div class="button-group mt-3">
                            <a href="rhcsa-online-training-institute-certification-exam-center" class="btn btn-outline-primary" aria-label="Learn More">
                                Explore More <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="contentcard lazy-section visible card-hover">
                    <img src="assets/img/course/redhat/rhca.webp" class="card-img-top" alt="Red Hat Certified Architect Course" loading="lazy" />
                    <div class="card-inner">
                        <div class="card-wraper">
                            <h5 class="card-title mb-4 mt-3">RHCA | Red Hat Certified Architect</h5>
                        </div>
                        <p class="description mb-0">Achieve expert-level skills with the <strong>Red Hat Certified Architect (RHCA)</strong> certification, focusing on advanced Red Hat enterprise solutions and architecture.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24" class="me-1">
                                    <path d="M16 11c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-8 0c1.7 0 3-1.3 3-3S9.7 5 8 5 5 6.3 5 8s1.3 3 3 3zm0 2c-2.3 0-7 1.2-7 3.5V20h14v-3.5C15 14.2 10.3 13 8 13zm8 0c-.3 0-.7 0-1 .1 1.2.8 2 2.1 2 3.4V20h6v-3.5c0-2.3-4.7-3.5-7-3.5z"/>
                                </svg>
                                1,200 students
                            </span>
                            <span class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFD700" viewBox="0 0 24 24" class="me-1">
                                    <path d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.782 1.401 8.178L12 18.897l-7.335 3.856 1.401-8.178L.132 9.21l8.2-1.192z"/>
                                </svg>
                                4.6
                            </span>
                        </div>
                        <div class="button-group mt-3">
                            <a href="rhca-online-training-institute-certification-exam-center" class="btn btn-outline-primary" aria-label="Learn More">
                                Explore More <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- AWS Courses Section -->
    <div class="container my-4 mb-5">
        <h2 class="heading-main-1 text-center mb-4">AWS <span class="red-color">Courses</span></h2>
        <div class="row g-3">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="contentcard visible card-hover">
                    <img src="assets/img/course/aws/solutions-architect.webp" class="card-img-top" alt="AWS Certified Solutions Architect Course" loading="lazy" />
                    <div class="card-inner">
                        <div class="card-wraper">
                            <h5 class="card-title mb-4 mt-3">AWS Certified Solutions Architect</h5>
                        </div>
                        <p class="description mb-0">Design scalable cloud solutions with the <strong>AWS Certified Solutions Architect</strong> certification, focusing on architecting and deploying secure AWS applications.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24" class="me-1">
                                    <path d="M16 11c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-8 0c1.7 0 3-1.3 3-3S9.7 5 8 5 5 6.3 5 8s1.3 3 3 3zm0 2c-2.3 0-7 1.2-7 3.5V20h14v-3.5C15 14.2 10.3 13 8 13zm8 0c-.3 0-.7 0-1 .1 1.2.8 2 2.1 2 3.4V20h6v-3.5c0-2.3-4.7-3.5-7-3.5z"/>
                                </svg>
                                2,200 students
                            </span>
                            <span class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFD700" viewBox="0 0 24 24" class="me-1">
                                    <path d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.782 1.401 8.178L12 18.897l-7.335 3.856 1.401-8.178L.132 9.21l8.2-1.192z"/>
                                </svg>
                                4.9
                            </span>
                        </div>
                        <div class="button-group mt-3">
                            <a href="aws-solutions-architect-professional-online-training-institute-certification-exam-center" class="btn btn-outline-primary" aria-label="Learn More">
                                Explore More <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="contentcard lazy-section visible card-hover">
                    <img src="assets/img/course/aws/sysops-administrator.webp" class="card-img-top" alt="AWS Certified SysOps Administrator Course" loading="lazy" />
                    <div class="card-inner">
                        <div class="card-wraper">
                            <h5 class="card-title mb-4 mt-3">AWS Certified SysOps Administrator</h5>
                        </div>
                        <p class="description mb-0">Manage and operate AWS systems with the <strong>AWS Certified SysOps Administrator</strong> certification, focusing on deployment, management, and operations on AWS.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24" class="me-1">
                                    <path d="M16 11c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-8 0c1.7 0 3-1.3 3-3S9.7 5 8 5 5 6.3 5 8s1.3 3 3 3zm0 2c-2.3 0-7 1.2-7 3.5V20h14v-3.5C15 14.2 10.3 13 8 13zm8 0c-.3 0-.7 0-1 .1 1.2.8 2 2.1 2 3.4V20h6v-3.5c0-2.3-4.7-3.5-7-3.5z"/>
                                </svg>
                                1,800 students
                            </span>
                            <span class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFD700" viewBox="0 0 24 24" class="me-1">
                                    <path d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.782 1.401 8.178L12 18.897l-7.335 3.856 1.401-8.178L.132 9.21l8.2-1.192z"/>
                                </svg>
                                4.7
                            </span>
                        </div>
                        <div class="button-group mt-3">
                            <a href="aws-certified-sysops-administrator-associate-online-training-institute-certification-exam-center" class="btn btn-outline-primary" aria-label="Learn More">
                                Explore More <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="contentcard lazy-section visible card-hover">
                    <img src="assets/img/course/aws/devops-engineer.webp" class="card-img-top" alt="AWS Certified DevOps Engineer Course" loading="lazy" />
                    <div class="card-inner">
                        <div class="card-wraper">
                            <h5 class="card-title mb-4 mt-3">AWS Certified DevOps Engineer</h5>
                        </div>
                        <p class="description mb-0">Implement DevOps practices on AWS with the <strong>AWS Certified DevOps Engineer</strong> certification, focusing on automation and continuous delivery.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24" class="me-1">
                                    <path d="M16 11c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-8 0c1.7 0 3-1.3 3-3S9.7 5 8 5 5 6.3 5 8s1.3 3 3 3zm0 2c-2.3 0-7 1.2-7 3.5V20h14v-3.5C15 14.2 10.3 13 8 13zm8 0c-.3 0-.7 0-1 .1 1.2.8 2 2.1 2 3.4V20h6v-3.5c0-2.3-4.7-3.5-7-3.5z"/>
                                </svg>
                                1,300 students
                            </span>
                            <span class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFD700" viewBox="0 0 24 24" class="me-1">
                                    <path d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.782 1.401 8.178L12 18.897l-7.335 3.856 1.401-8.178L.132 9.21l8.2-1.192z"/>
                                </svg>
                                4.7
                            </span>
                        </div>
                        <div class="button-group mt-3">
                            <a href="aws-certified-devops-engineer-professional-online-training-institute-certification-exam-center" class="btn btn-outline-primary" aria-label="Learn More">
                                Explore More <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Azure Courses Section -->
    <div class="container my-4 mb-5">
        <h2 class="heading-main-1 text-center mb-4">Azure <span class="red-color">Courses</span></h2>
        <div class="row g-3">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="contentcard visible card-hover">
                    <img src="assets/img/course/azure/az-305.webp" class="card-img-top" alt="Microsoft Azure Solutions Architect Course" loading="lazy" />
                    <div class="card-inner">
                        <div class="card-wraper">
                            <h5 class="card-title mb-4 mt-3">Microsoft Azure Solutions Architect | AZ-305</h5>
                        </div>
                        <p class="description mb-0">Design scalable cloud solutions with the <strong>Microsoft Azure Solutions Architect (AZ-305)</strong> certification, focusing on architecting secure and efficient Azure infrastructures.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24" class="me-1">
                                    <path d="M16 11c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-8 0c1.7 0 3-1.3 3-3S9.7 5 8 5 5 6.3 5 8s1.3 3 3 3zm0 2c-2.3 0-7 1.2-7 3.5V20h14v-3.5C15 14.2 10.3 13 8 13zm8 0c-.3 0-.7 0-1 .1 1.2.8 2 2.1 2 3.4V20h6v-3.5c0-2.3-4.7-3.5-7-3.5z"/>
                                </svg>
                                1,800 students
                            </span>
                            <span class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFD700" viewBox="0 0 24 24" class="me-1">
                                    <path d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.782 1.401 8.178L12 18.897l-7.335 3.856 1.401-8.178L.132 9.21l8.2-1.192z"/>
                                </svg>
                                4.7
                            </span>
                        </div>
                        <div class="button-group mt-3">
                            <a href="azure-solutions-architect-az305-online-training-institute-certification-exam-center" class="btn btn-outline-primary" aria-label="Learn More">
                                Explore More <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="contentcard lazy-section visible card-hover">
                    <img src="assets/img/course/azure/az-400.webp" class="card-img-top" alt="Microsoft Azure DevOps Engineer Course" loading="lazy" />
                    <div class="card-inner">
                        <div class="card-wraper">
                            <h5 class="card-title mb-4 mt-3">Microsoft Azure DevOps Engineer | AZ-400</h5>
                        </div>
                        <p class="description mb-0">Implement DevOps practices with the <strong>Microsoft Azure DevOps Engineer (AZ-400)</strong> certification, focusing on automation, CI/CD, and collaboration on Azure.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24" class="me-1">
                                    <path d="M16 11c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-8 0c1.7 0 3-1.3 3-3S9.7 5 8 5 5 6.3 5 8s1.3 3 3 3zm0 2c-2.3 0-7 1.2-7 3.5V20h14v-3.5C15 14.2 10.3 13 8 13zm8 0c-.3 0-.7 0-1 .1 1.2.8 2 2.1 2 3.4V20h6v-3.5c0-2.3-4.7-3.5-7-3.5z"/>
                                </svg>
                                1,600 students
                            </span>
                            <span class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFD700" viewBox="0 0 24 24" class="me-1">
                                    <path d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.782 1.401 8.178L12 18.897l-7.335 3.856 1.401-8.178L.132 9.21l8.2-1.192z"/>
                                </svg>
                                4.6
                            </span>
                        </div>
                        <div class="button-group mt-3">
                            <a href="azure-devops-engineer-az400-online-training-institute-certification-exam-center" class="btn btn-outline-primary" aria-label="Learn More">
                                Explore More <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="contentcard lazy-section visible card-hover">
                    <img src="assets/img/course/azure/az-500.webp" class="card-img-top" alt="Microsoft Azure Security Engineer Course" loading="lazy" />
                    <div class="card-inner">
                        <div class="card-wraper">
                            <h5 class="card-title mb-4 mt-3">Microsoft Azure Security Engineer | AZ-500</h5>
                        </div>
                        <p class="description mb-0">Secure Azure environments with the <strong>Microsoft Azure Security Engineer (AZ-500)</strong> certification, focusing on advanced security practices and compliance.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24" class="me-1">
                                    <path d="M16 11c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-8 0c1.7 0 3-1.3 3-3S9.7 5 8 5 5 6.3 5 8s1.3 3 3 3zm0 2c-2.3 0-7 1.2-7 3.5V20h14v-3.5C15 14.2 10.3 13 8 13zm8 0c-.3 0-.7 0-1 .1 1.2.8 2 2.1 2 3.4V20h6v-3.5c0-2.3-4.7-3.5-7-3.5z"/>
                                </svg>
                                1,400 students
                            </span>
                            <span class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFD700" viewBox="0 0 24 24" class="me-1">
                                    <path d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.782 1.401 8.178L12 18.897l-7.335 3.856 1.401-8.178L.132 9.21l8.2-1.192z"/>
                                </svg>
                                4.6
                            </span>
                        </div>
                        <div class="button-group mt-3">
                            <a href="azure-security-engineer-az500-online-training-institute-certification-exam-center" class="btn btn-outline-primary" aria-label="Learn More">
                                Explore More <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Google Cloud (GCP) Courses Section -->
    <div class="container my-4 mb-5">
        <h2 class="heading-main-1 text-center mb-4">Google Cloud <span class="red-color">Courses</span></h2>
        <div class="row g-3">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="contentcard visible card-hover">
                    <img src="assets/img/course/gcp/professional-cloud-architect.webp" class="card-img-top" alt="Google Cloud Professional Cloud Architect Course" loading="lazy" />
                    <div class="card-inner">
                        <div class="card-wraper">
                            <h5 class="card-title mb-4 mt-3">Google Cloud Professional Cloud Architect</h5>
                        </div>
                        <p class="description mb-0">Design scalable cloud solutions with the <strong>Google Cloud Professional Cloud Architect</strong> certification, focusing on architecting secure and efficient GCP infrastructures.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24" class="me-1">
                                    <path d="M16 11c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-8 0c1.7 0 3-1.3 3-3S9.7 5 8 5 5 6.3 5 8s1.3 3 3 3zm0 2c-2.3 0-7 1.2-7 3.5V20h14v-3.5C15 14.2 10.3 13 8 13zm8 0c-.3 0-.7 0-1 .1 1.2.8 2 2.1 2 3.4V20h6v-3.5c0-2.3-4.7-3.5-7-3.5z"/>
                                </svg>
                                2,000 students
                            </span>
                            <span class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFD700" viewBox="0 0 24 24" class="me-1">
                                    <path d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.782 1.401 8.178L12 18.897l-7.335 3.856 1.401-8.178L.132 9.21l8.2-1.192z"/>
                                </svg>
                                4.9
                            </span>
                        </div>
                        <div class="button-group mt-3">
                            <a href="gcp-professional-cloud-architect-online-training-institute-certification-exam-center" class="btn btn-outline-primary" aria-label="Learn More">
                                Explore More <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="contentcard lazy-section visible card-hover">
                    <img src="assets/img/course/gcp/professional-devops-engineer.webp" class="card-img-top" alt="Google Cloud Professional DevOps Engineer Course" loading="lazy" />
                    <div class="card-inner">
                        <div class="card-wraper">
                            <h5 class="card-title mb-4 mt-3">Google Cloud Professional DevOps Engineer</h5>
                        </div>
                        <p class="description mb-0">Implement DevOps practices with the <strong>Google Cloud Professional DevOps Engineer</strong> certification, focusing on automation, CI/CD, and site reliability on GCP.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24" class="me-1">
                                    <path d="M16 11c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-8 0c1.7 0 3-1.3 3-3S9.7 5 8 5 5 6.3 5 8s1.3 3 3 3zm0 2c-2.3 0-7 1.2-7 3.5V20h14v-3.5C15 14.2 10.3 13 8 13zm8 0c-.3 0-.7 0-1 .1 1.2.8 2 2.1 2 3.4V20h6v-3.5c0-2.3-4.7-3.5-7-3.5z"/>
                                </svg>
                                1,600 students
                            </span>
                            <span class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFD700" viewBox="0 0 24 24" class="me-1">
                                    <path d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.782 1.401 8.178L12 18.897l-7.335 3.856 1.401-8.178L.132 9.21l8.2-1.192z"/>
                                </svg>
                                4.7
                            </span>
                        </div>
                        <div class="button-group mt-3">
                            <a href="gcp-professional-devops-engineer-online-training-institute-certification-exam-center" class="btn btn-outline-primary" aria-label="Learn More">
                                Explore More <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="contentcard lazy-section visible card-hover">
                    <img src="assets/img/course/gcp/professional-data-engineer.webp" class="card-img-top" alt="Google Cloud Professional Data Engineer Course" loading="lazy" />
                    <div class="card-inner">
                        <div class="card-wraper">
                            <h5 class="card-title mb-4 mt-3">Google Cloud Professional Data Engineer</h5>
                        </div>
                        <p class="description mb-0">Design and manage data solutions with the <strong>Google Cloud Professional Data Engineer</strong> certification, focusing on data processing and analytics on GCP.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24" class="me-1">
                                    <path d="M16 11c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-8 0c1.7 0 3-1.3 3-3S9.7 5 8 5 5 6.3 5 8s1.3 3 3 3zm0 2c-2.3 0-7 1.2-7 3.5V20h14v-3.5C15 14.2 10.3 13 8 13zm8 0c-.3 0-.7 0-1 .1 1.2.8 2 2.1 2 3.4V20h6v-3.5c0-2.3-4.7-3.5-7-3.5z"/>
                                </svg>
                                1,400 students
                            </span>
                            <span class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFD700" viewBox="0 0 24 24" class="me-1">
                                    <path d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.782 1.401 8.178L12 18.897l-7.335 3.856 1.401-8.178L.132 9.21l8.2-1.192z"/>
                                </svg>
                                4.6
                            </span>
                        </div>
                        <div class="button-group mt-3">
                            <a href="gcp-professional-data-engineer-online-training-institute-certification-exam-center" class="btn btn-outline-primary" aria-label="Learn More">
                                Explore More <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 lazy-section">
<!-- Schedule section -->
<div class="container my-4 mb-5">
<h2 class="heading-main-1 text-center mb-4">EC-Council &amp;<span class="red-color"> Course</span></h2>
  <div class="row g-3">
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="contentcard  visible card-hover">
            <img src="assets/img/course/eccouncil/ceh-v13-ai.webp" class="card-img-top" alt="Certified Ethical Hacker Course" loading="lazy" />
            <div class="card-inner">
                <div class="card-wraper">
                    <h5 class="card-title mb-4 mt-3">CEH v13 AI | Certified Ethical Hacker</h5>
                </div>
                <p class="description mb-0">Master ethical hacking techniques with the <strong>Certified Ethical Hacker (CEH) v13 AI</strong> certification, focusing on AI-driven penetration testing and cybersecurity defense.</p>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <span class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24" class="me-1">
                            <path d="M16 11c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-8 0c1.7 0 3-1.3 3-3S9.7 5 8 5 5 6.3 5 8s1.3 3 3 3zm0 2c-2.3 0-7 1.2-7 3.5V20h14v-3.5C15 14.2 10.3 13 8 13zm8 0c-.3 0-.7 0-1 .1 1.2.8 2 2.1 2 3.4V20h6v-3.5c0-2.3-4.7-3.5-7-3.5z"/>
                        </svg>
                        2,500 students
                    </span>
                    <span class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFD700" viewBox="0 0 24 24" class="me-1">
                            <path d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.782 1.401 8.178L12 18.897l-7.335 3.856 1.401-8.178L.132 9.21l8.2-1.192z"/>
                        </svg>
                        4.8
                    </span>
                </div>
                <div class="button-group mt-3">
                    <a href="ethical-hacking-ceh-cyber-security-training-institute-certification-exam-center" class="btn btn-outline-primary" aria-label="Learn More">
                        Explore More <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="contentcard lazy-section visible card-hover">
            <img src="assets/img/course/eccouncil/chfi.webp" class="card-img-top" alt="Computer Hacking Forensic Investigator Course" loading="lazy" />
            <div class="card-inner">
                <div class="card-wraper">
                    <h5 class="card-title mb-4 mt-3">CHFI v11 | Computer Hacking Forensic Investigator</h5>
                </div>
                <p class="description mb-0">Master digital forensics with the <strong>Computer Hacking Forensic Investigator (CHFI) v11</strong> certification, focusing on investigating cybercrimes and evidence collection.</p>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <span class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24" class="me-1">
                            <path d="M16 11c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-8 0c1.7 0 3-1.3 3-3S9.7 5 8 5 5 6.3 5 8s1.3 3 3 3zm0 2c-2.3 0-7 1.2-7 3.5V20h14v-3.5C15 14.2 10.3 13 8 13zm8 0c-.3 0-.7 0-1 .1 1.2.8 2 2.1 2 3.4V20h6v-3.5c0-2.3-4.7-3.5-7-3.5z"/>
                        </svg>
                        1,800 students
                    </span>
                    <span class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFD700" viewBox="0 0 24 24" class="me-1">
                            <path d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.782 1.401 8.178L12 18.897l-7.335 3.856 1.401-8.178L.132 9.21l8.2-1.192z"/>
                        </svg>
                        4.7
                    </span>
                </div>
                <div class="button-group mt-3">
                    <a href="computer-hacking-forensic-investigator-chfi-online-training-institute-certification-exam-center" class="btn btn-outline-primary" aria-label="Learn More">
                        Explore More <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="contentcard lazy-section visible card-hover">
            <img src="assets/img/course/eccouncil/cnd.webp" class="card-img-top" alt="Certified Network Defender Course" loading="lazy" />
            <div class="card-inner">
                <div class="card-wraper">
                    <h5 class="card-title mb-4 mt-3">CND | Certified Network Defender</h5>
                </div>
                <p class="description mb-0">Protect networks with the <strong>Certified Network Defender (CND)</strong> certification, focusing on network security, threat detection, and response strategies.</p>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <span class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24" class="me-1">
                            <path d="M16 11c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-8 0c1.7 0 3-1.3 3-3S9.7 5 8 5 5 6.3 5 8s1.3 3 3 3zm0 2c-2.3 0-7 1.2-7 3.5V20h14v-3.5C15 14.2 10.3 13 8 13zm8 0c-.3 0-.7 0-1 .1 1.2.8 2 2.1 2 3.4V20h6v-3.5c0-2.3-4.7-3.5-7-3.5z"/>
                        </svg>
                        1,500 students
                    </span>
                    <span class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFD700" viewBox="0 0 24 24" class="me-1">
                            <path d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.782 1.401 8.178L12 18.897l-7.335 3.856 1.401-8.178L.132 9.21l8.2-1.192z"/>
                        </svg>
                        4.6
                    </span>
                </div>
                <div class="button-group mt-3">
                    <a href="certified-network-defender-cnd-online-training-institute-certification-exam-center" class="btn btn-outline-primary" aria-label="Learn More">
                        Explore More <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

    <!-- Site footer -->
    <?php include("include/footer.php"); ?>
    <?php include("include/footerlink.php"); ?>
  </body>
</html>