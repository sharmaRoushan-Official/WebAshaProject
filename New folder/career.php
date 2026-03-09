<!DOCTYPE html>
<html lang="en">
<head>
    <!-- common head (meta, bootstrap, fonts, etc.) -->
    <?php include("include/headerlink.php"); ?>
    <!-- Page-specific metadata (Careers) -->
    <?php
      $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
      $current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
    <title>Careers | WebAsha Technologies - Work With Us</title>
    <meta name="description" content="Explore career opportunities at WebAsha Technologies. View open roles in DevOps, Cloud, Security and Training. Apply online with your resume.">
    <meta name="keywords" content="WebAsha Careers, DevOps Jobs Pune, Cloud Computing Jobs, Cybersecurity Careers, IT Training Jobs, WebAsha Technologies Recruitment">
    <!-- Page-specific Open Graph (override site defaults if needed) -->
    <meta property="og:title" content="Careers | WebAsha Technologies">
    <meta property="og:description" content="Join WebAsha Technologies and explore exciting career opportunities in DevOps, Cloud, Security, and Training. Apply online with your resume.">
    <meta property="og:url" content="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <meta property="og:image" content="https://training.webasha.com/assets/img/careers/webasha-careers.webp">
    <meta property="og:image:alt" content="Careers at WebAsha Technologies - Work With Us">
    <!-- Page-specific Twitter -->
    <meta name="twitter:title" content="Careers | WebAsha Technologies - Work With Us">
    <meta name="twitter:description" content="Discover job opportunities at WebAsha Technologies in Pune. Open roles in DevOps, Cloud, Security, and Training. Apply now!">
    <meta name="twitter:image" content="https://training.webasha.com/assets/img/careers/webasha-careers.webp">
    <!-- Page-specific JSON-LD: Organization schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "WebAsha Technologies",
      "url": "https://training.webasha.com/",
      "description": "WebAsha Technologies offers career opportunities in DevOps, Cloud, Security, and IT Training. Join our team in Pune and grow with us.",
      "hiringOrganization": {
        "@type": "Organization",
        "name": "WebAsha Technologies",
        "url": "https://training.webasha.com/"
      }
    }
    </script>
    <style>
      /* tiny layout helpers — move to real stylesheet if required */
      .hero { background: linear-gradient(180deg,#111 0,#222 100%); color:#fff; padding:4.5rem 0; }
      .job-card:hover { transform: translateY(-6px); transition: transform .18s ease; }
      .badge-role { font-size:.75rem; padding:.35rem .6rem; }
      /* keep resume preview small */
      .file-name { font-size:.875rem; color:#444; }
    </style>
</head>

  <body>
    <?php include("include/header.php"); ?>

    <!-- HERO -->
    <header class="hero text-center">
      <div class="container">
        <h1 class="display-5 fw-bold">Careers at WebAsha Technologies</h1>
        <p class="lead mb-4">Grow with us — we build experts in Cloud, DevOps, Security and Enterprise Training. See open roles and apply online.</p>
        <a href="#open-positions" class="btn btn-outline-light me-2">View Open Positions</a>
        <a href="#apply" class="btn btn-danger">Apply Now</a>
      </div>
    </header>

    <!-- WHY WORK WITH US (Quick highlights) -->
    <section class="py-5 bg-white">
      <div class="container">
        <div class="row text-center g-3">
          <div class="col-md-3">
            <div class="p-3">
              <h5 class="fw-semibold">Competitive Pay</h5>
              <p class="small text-muted mb-0">Market-aligned packages & performance bonuses.</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="p-3">
              <h5 class="fw-semibold">Training & Certifications</h5>
              <p class="small text-muted mb-0">Access to official vendor training and exam vouchers.</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="p-3">
              <h5 class="fw-semibold">Flexible Hours</h5>
              <p class="small text-muted mb-0">Work-life balance with hybrid and remote options.</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="p-3">
              <h5 class="fw-semibold">Growth Path</h5>
              <p class="small text-muted mb-0">Clear career ladders: Engineer → Senior → Lead → Architect.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- OPEN POSITIONS -->
    <section id="open-positions" class="py-5">
      <div class="container">
        <div class="d-flex align-items-center justify-content-between mb-4">
          <h2 class="h3 mb-0">Open Positions</h2>

          <!-- simple filter -->
          <div class="d-flex align-items-center">
            <label class="me-2 small mb-0">Filter:</label>
            <select id="roleFilter" class="form-select form-select-sm">
              <option value="all">All Departments</option>
              <option value="devops">DevOps</option>
              <option value="cloud">Cloud</option>
              <option value="security">Security</option>
              <option value="training">Training</option>
              <option value="sales">Sales/Support</option>
            </select>
          </div>
        </div>

        <div class="row g-3" id="jobsList" aria-live="polite">
          <!-- jobs will be injected by JS -->
        </div>

        <!-- pagination/load more if many jobs -->
        <div class="text-center mt-4">
          <button id="loadMoreJobs" class="btn btn-outline-primary">Load more positions</button>
        </div>
      </div>
    </section>

    <!-- WHY JOIN / BENEFITS -->
    <section class="py-5 bg-light">
      <div class="container">
        <h3>Benefits & Culture</h3>
        <ul>
          <li>Paid training & certification reimbursements.</li>
          <li>Health & wellness support (where applicable).</li>
          <li>Mentorship program and internal knowledge-sharing sessions.</li>
          <li>Inclusive, diverse, and meritocratic workplace.</li>
        </ul>
      </div>
    </section>

    <!-- APPLY / QUICK FORM -->
    <section id="apply" class="py-5">
      <div class="container">
        <h3 class="mb-3">Apply Now</h3>
        <div class="row">
          <div class="col-lg-7">
            <div class="card shadow-sm">
              <div class="card-body">
                <form id="careerForm" enctype="multipart/form-data" novalidate>
                  <div class="mb-3">
                    <label for="fullName" class="form-label">Full Name *</label>
                    <input id="fullName" name="fullName" type="text" class="form-control" required>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="email" class="form-label">Email *</label>
                      <input id="email" name="email" type="email" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="phone" class="form-label">Phone *</label>
                      <input id="phone" name="phone" type="tel" class="form-control" placeholder="+91 9XXXXXXXXX" required>
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="position" class="form-label">Position applying for *</label>
                    <select id="position" name="position" class="form-select" required>
                      <option value="">Choose a position...</option>
                      <!-- filled by JS with open positions so it always matches -->
                    </select>
                  </div>

                  <div class="mb-3">
                    <label for="experience" class="form-label">Total Experience (years)</label>
                    <input id="experience" name="experience" type="number" min="0" step="0.1" class="form-control">
                  </div>

                  <div class="mb-3">
                    <label for="resume" class="form-label">Upload Resume (PDF / DOC) *</label>
                    <input id="resume" name="resume" type="file" accept=".pdf,.doc,.docx" class="form-control" required>
                    <div class="mt-2 file-name" id="resumeName"></div>
                  </div>

                  <div class="mb-3">
                    <label for="message" class="form-label">Message / Cover note</label>
                    <textarea id="message" name="message" rows="4" class="form-control"></textarea>
                  </div>

                  <div class="form-check mb-3">
                    <input id="consent" class="form-check-input" type="checkbox" required>
                    <label class="form-check-label" for="consent">I confirm that the information provided is accurate.</label>
                  </div>

                  <div class="d-grid">
                    <button type="submit" class="btn btn-danger">Submit Application</button>
                  </div>
                </form>

                <div class="alert alert-success mt-3 d-none" id="applySuccess">Thank you — your application was submitted.</div>
              </div>
            </div>
          </div>

          <aside class="col-lg-5">
            <div class="card border-0 shadow-sm mb-3">
              <div class="card-body">
                <h5 class="card-title">Recruitment Process</h5>
                <ol class="small mb-0">
                  <li>CV shortlisting by HR</li>
                  <li>Technical interview with the team</li>
                  <li>Managerial interview</li>
                  <li>Offer & onboarding</li>
                </ol>
              </div>
            </div>

            <div class="card border-0 shadow-sm">
              <div class="card-body">
                <h5 class="card-title">Need help?</h5>
                <p class="small mb-1">Email: <a href="mailto:careers@webasha.com">careers@webasha.com</a></p>
                <p class="small mb-0">Phone: +91 (801) 091-1256</p>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </section>

    <?php include("include/footer.php"); ?>
    <?php include("include/footerlink.php"); ?>

    <!-- Minimal JS: job data + form handling (replace with real server calls) -->
    <script>
      (function () {
        // sample data for open positions (in real site this comes from server)
        const jobsData = [
          { id: 1, title: "DevOps Engineer", dept: "devops", location: "Pune, India", exp: "2-5 yrs", type: "Full-time" },
          { id: 2, title: "Senior Cloud Engineer (AWS)", dept: "cloud", location: "Remote / Pune", exp: "4-8 yrs", type: "Full-time" },
          { id: 3, title: "Security Analyst", dept: "security", location: "Pune, India", exp: "1-4 yrs", type: "Full-time" },
          { id: 4, title: "Red Hat Trainer (RHCSA/RHCE)", dept: "training", location: "Pune, India", exp: "3+ yrs", type: "Contract" },
          { id: 5, title: "Sales Executive (Training)", dept: "sales", location: "Pune, India", exp: "1-3 yrs", type: "Full-time" },
          { id: 6, title: "Cloud Support Engineer", dept: "cloud", location: "Pune, India", exp: "2+ yrs", type: "Full-time" },
          { id: 7, title: "Automation Engineer (Ansible)", dept: "devops", location: "Remote / Pune", exp: "2-6 yrs", type: "Full-time" },
          { id: 8, title: "Technical Content Writer", dept: "training", location: "Remote", exp: "1-4 yrs", type: "Part-time" },
          { id: 9, title: "Security Researcher", dept: "security", location: "Pune, India", exp: "3-7 yrs", type: "Full-time" },
          { id: 10, title: "HR & Recruiter", dept: "sales", location: "Pune, India", exp: "2-4 yrs", type: "Full-time" }
        ];

        const jobsList = document.getElementById('jobsList');
        const roleFilter = document.getElementById('roleFilter');
        const loadMoreBtn = document.getElementById('loadMoreJobs');

        // rendering / pagination
        const pageSize = 4;
        let rendered = 0;
        let activeFilter = 'all';

        function renderJobCard(job) {
          const div = document.createElement('div');
          div.className = 'col-lg-6';
          div.innerHTML = `
            <article class="card job-card h-100 border-0 shadow-sm p-3">
              <div class="card-body d-flex flex-column">
                <div class="d-flex align-items-start justify-content-between mb-2">
                  <div>
                    <h5 class="mb-1">${escapeHTML(job.title)}</h5>
                    <div class="small text-muted">${escapeHTML(job.location)} • ${escapeHTML(job.type)}</div>
                  </div>
                  <div class="text-end">
                    <span class="badge bg-light text-dark badge-role">${escapeHTML(job.exp)}</span>
                    <div class="small text-muted mt-1">${escapeHTML(job.dept.toUpperCase())}</div>
                  </div>
                </div>
                <p class="small text-muted mb-3">We are looking for a ${escapeHTML(job.title)} to join our ${escapeHTML(job.dept)} team. Apply if you are passionate about building reliable infrastructure and mentoring others.</p>

                <div class="mt-auto d-flex gap-2">
                  <button class="btn btn-outline-primary btn-sm btn-view-details" data-id="${job.id}">View</button>
                  <button class="btn btn-danger btn-sm btn-apply-now" data-id="${job.id}">Apply</button>
                </div>
              </div>
            </article>
          `;
          return div;
        }

        function escapeHTML(str) {
          return String(str || '').replace(/[&<>"']/g, function (m) {
            return { '&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;' }[m];
          });
        }

        function clearJobs() {
          jobsList.innerHTML = '';
          rendered = 0;
        }

        function loadJobs() {
          const filtered = jobsData.filter(j => activeFilter === 'all' ? true : j.dept === activeFilter);
          const end = Math.min(rendered + pageSize, filtered.length);
          for (let i = rendered; i < end; i++) {
            jobsList.appendChild(renderJobCard(filtered[i]));
          }
          rendered = end;
          // toggle load more visibility
          loadMoreBtn.style.display = rendered < filtered.length ? 'inline-block' : 'none';

          // update #position select in form
          populatePositionSelect(filtered);
        }

        function populatePositionSelect(filtered = jobsData) {
          const sel = document.getElementById('position');
          // keep existing chosen option if possible
          const current = sel.value;
          sel.innerHTML = '<option value="">Choose a position...</option>';
          filtered.forEach(j => {
            const opt = document.createElement('option');
            opt.value = j.title;
            opt.textContent = `${j.title} — ${j.location}`;
            sel.appendChild(opt);
          });
          if (current) sel.value = current;
        }

        // initial load
        function init() {
          clearJobs();
          activeFilter = roleFilter.value;
          loadJobs();
        }

        roleFilter.addEventListener('change', function () {
          activeFilter = this.value;
          clearJobs();
          loadJobs();
        });

        loadMoreBtn.addEventListener('click', function () {
          loadJobs();
        });

        // delegate apply/view button clicks
        jobsList.addEventListener('click', function (e) {
          const viewBtn = e.target.closest('.btn-view-details');
          const applyBtn = e.target.closest('.btn-apply-now');
          if (viewBtn) {
            const id = parseInt(viewBtn.getAttribute('data-id'), 10);
            const job = jobsData.find(j => j.id === id);
            if (job) alert(job.title + '\n\nLocation: ' + job.location + '\nExperience: ' + job.exp + '\n\n' + 'Please apply using the form on this page.');
          }
          if (applyBtn) {
            const id = parseInt(applyBtn.getAttribute('data-id'), 10);
            const job = jobsData.find(j => j.id === id);
            if (job) {
              // preselect position in apply form & scroll to it.
              const sel = document.getElementById('position');
              sel.value = job.title;
              document.getElementById('fullName').focus();
              window.scrollTo({ top: document.getElementById('apply').offsetTop - 20, behavior: 'smooth' });
            }
          }
        });

        // form handling (client-side demo)
        const careerForm = document.getElementById('careerForm');
        const resumeInput = document.getElementById('resume');
        const resumeName = document.getElementById('resumeName');
        const applySuccess = document.getElementById('applySuccess');

        resumeInput.addEventListener('change', function () {
          const f = this.files && this.files[0];
          resumeName.textContent = f ? f.name + ' (' + Math.round(f.size/1024) + ' KB)' : '';
        });

        careerForm.addEventListener('submit', function (e) {
          e.preventDefault();
          if (!careerForm.checkValidity()) {
            careerForm.classList.add('was-validated');
            return;
          }
          // In production: submit via fetch()/XHR to server endpoint
          applySuccess.classList.remove('d-none');
          careerForm.reset();
          resumeName.textContent = '';
          setTimeout(() => applySuccess.classList.add('d-none'), 6000);
        });

        // start
        init();

      })();
    </script>

  </body>
</html>
