<!-- WORKING Course Offer Section (Bootstrap 5) -->
<!-- <style>
    /* Fix for vertical text / letter-stacking if some theme sets writing-mode */
      .course-we-offer, .course-we-offer * {
        writing-mode: horizontal-tb !important;
        text-orientation: mixed !important;
        -webkit-text-orientation: mixed !important;
        transform: none !important;
        white-space: normal !important;
        word-break: normal !important;
        overflow-wrap: break-word !important;
      }
    
      /* Layout niceties */
      .course-we-offer .card { height: 100%; display:flex; flex-direction:column; }
      .card-inner { padding: 1rem; flex:1; display:flex; flex-direction:column; justify-content:space-between; }
      .card-img-top { width:100%; height:200px; object-fit:cover; display:block; }
      .card-title { font-size:1.05rem; margin-bottom:.25rem; }
      .description { color:#666; font-size:.95rem; }
      .button-group { margin-top:.75rem; }
      .filter-select { max-width:720px; margin:1.25rem auto; }
      .sub-title { font-size:.95rem; color:#1f2d3d; margin-top:1rem; }
      .heading-main .red-color { color:#e10b13; }
</style> -->

<!-- Defining the course offer section -->
<div class="course-we-offer">
    <!-- Wrapping content in a container for centering -->
    <div class="container">
        <!-- Displaying the section subtitle -->
        <div class="sub-title text-center">We are Offer</div>
        <!-- Highlighting the main heading with a red-colored span -->
        <h2 class="heading-main text-center">Featured <span class="red-color">Courses</span></h2>
        <!-- Creating a tab navigation for course-related categories -->
        <div class="theme-nav-pills">
            <!-- Listing tab buttons for course, voucher, and assessment categories -->
            <ul class="nav nav-pills mx-auto" id="pills-tab" role="tablist">
                <!-- Defining the Course Categories tab button -->
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="we-offer1-tab" data-bs-toggle="pill" data-bs-target="#we-offer1" type="button" role="tab" aria-controls="we-offer1" aria-selected="true">Course Categories</button>
                </li>
                <!-- Defining the Voucher Categories tab button -->
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="we-offer2-tab" data-bs-toggle="pill" data-bs-target="#we-offer2" type="button" role="tab" aria-controls="we-offer2" aria-selected="false" tabindex="-1">Voucher Categories</button>
                </li>
                <!-- Defining the Assessment Categories tab button -->
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="we-offer3-tab" data-bs-toggle="pill" data-bs-target="#we-offer3" type="button" role="tab" aria-controls="we-offer3" aria-selected="false" tabindex="-1">Assessment Categories</button>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <!-- ========== COURSE CATEGORIES (active) ========== -->
                <div class="tab-pane fade show active" id="we-offer1" role="tabpanel" aria-labelledby="we-offer1-tab">
                    <div class="course-we-offer-content">

                        <!-- Select that filters course cards by data-category (1,2,3 or empty for all) -->
                        <div class="filter-select">
                            <select id="courseFilterSelect" class="form-select" aria-label="Filter courses by sub-category">
                                <option value="" selected> Select Sub category (All)</option>
                                <option value="1"> 1 — Azure Admin</option>
                                <option value="2"> 2 — DevOps</option>
                                <option value="3"> 3 — Security</option>
                            </select>
                        </div>

                        <!-- Grid of course cards (use data-category for filtering) -->
                        <div class="row g-4">
                            <!-- Course (category 1) -->
                            <div class="col-sm-6 col-md-4">
                                <div class="card card-hover" data-category="2">
                                    <img src="assets/img/course/eccouncil/ceh.webp" class="card-img-top" alt="DevOps Course">
                                    <div class="card-inner">
                                        <div>
                                            <h5 class="card-title">DevOps Fundamentals</h5>
                                            <p class="description mb-2">Learn CI/CD, containers, and automation for modern delivery pipelines.</p>
                                        </div>

                                        <div>
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <small class="text-muted">1,024 students</small>
                                                <small class="text-muted">4.6</small>
                                            </div>
                                            <div class="button-group d-flex">
                                                <a href="#" class="btn btn-outline-primary btn-sm">Learn More</a>
                                                <a href="#" class="btn btn-danger btn-sm ms-2">Enroll Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Course (category 2) -->
                            <div class="col-sm-6 col-md-4">
                                <div class="card" data-category="2">
                                    <img src="assets/img/course/eccouncil/ceh.webp" class="card-img-top" alt="DevOps Course">
                                    <div class="card-inner">
                                        <div>
                                            <h5 class="card-title">DevOps Fundamentals</h5>
                                            <p class="description mb-2">Learn CI/CD, containers, and automation for modern delivery pipelines.</p>
                                        </div>

                                        <div>
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <small class="text-muted">1,024 students</small>
                                                <small class="text-muted">4.6</small>
                                            </div>
                                            <div class="button-group d-flex">
                                                <a href="#" class="btn btn-outline-primary btn-sm">Learn More</a>
                                                <a href="#" class="btn btn-danger btn-sm ms-2">Enroll Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Course (category 3) -->
                            <div class="col-sm-6 col-md-4">
                                <div class="card" data-category="3">
                                    <img src="assets/img/course/eccouncil/ceh.webp" class="card-img-top" alt="Security Course">
                                    <div class="card-inner">
                                        <div>
                                            <h5 class="card-title">Security Essentials</h5>
                                            <p class="description mb-2">Core security concepts, threat modeling and hands-on labs.</p>
                                        </div>

                                        <div>
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <small class="text-muted">780 students</small>
                                                <small class="text-muted">4.7</small>
                                            </div>
                                            <div class="button-group d-flex">
                                                <a href="#" class="btn btn-outline-primary btn-sm">Learn More</a>
                                                <a href="#" class="btn btn-danger btn-sm ms-2">Enroll Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Another example in category 1 -->
                            <div class="col-sm-6 col-md-4">
                                <div class="card" data-category="1">
                                    <img src="assets/img/course/eccouncil/ceh.webp" class="card-img-top" alt="Azure Advanced">
                                    <div class="card-inner">
                                        <div>
                                            <h5 class="card-title">Azure Advanced Networking</h5>
                                            <p class="description mb-2">Deep-dive into Azure networking, VNets, Firewall, and ExpressRoute.</p>
                                        </div>
                                        <div>
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <small class="text-muted">920 students</small>
                                                <small class="text-muted">4.5</small>
                                            </div>
                                            <div class="button-group d-flex">
                                                <a href="#" class="btn btn-outline-primary btn-sm">Learn More</a>
                                                <a href="#" class="btn btn-danger btn-sm ms-2">Enroll Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- add more cards as needed, with data-category="1"|"2"|"3" -->
                        </div>

                        <div class="text-center mt-4">
                            <a href="#" class="btn btn-outline-primary">View All</a>
                        </div>
                    </div>
                </div>

                <!-- ========== VOUCHER CATEGORIES (placeholder) ========== -->
                <div class="tab-pane fade" id="we-offer2" role="tabpanel" aria-labelledby="we-offer2-tab">
                    <div class="p-4 text-center text-muted">Voucher categories content — copy pattern from Course Categories above</div>
                </div>

                <!-- ========== ASSESSMENT CATEGORIES (placeholder) ========== -->
                <div class="tab-pane fade" id="we-offer3" role="tabpanel" aria-labelledby="we-offer3-tab">
                    <div class="p-4 text-center text-muted">Assessment categories content — copy pattern from Course Categories above</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Filter logic for Course Categories select
      (function(){
        const select = document.getElementById('courseFilterSelect');
        if(!select) return;
        const container = document.querySelector('#we-offer1 .row');
        const cards = container ? Array.from(container.querySelectorAll('.card')) : [];
    
        function applyFilter() {
          const val = select.value; // "" | "1" | "2" | "3"
          cards.forEach(card => {
            const cat = card.getAttribute('data-category') || '';
            if(!val || val === cat) {
              card.closest('.col-sm-6, .col-md-4').style.display = ''; // show
            } else {
              card.closest('.col-sm-6, .col-md-4').style.display = 'none'; // hide
            }
          });
        }
    
        select.addEventListener('change', applyFilter);
        // initialize
        applyFilter();
      })();
</script>