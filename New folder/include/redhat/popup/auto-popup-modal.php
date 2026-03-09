<!-- CEH Modal — Left image + Right ENROLL CTA → Form (Bootstrap 5) -->
<div class="modal fade" id="cehAutoPopupModal" tabindex="-1" aria-labelledby="cehAutoPopupLabel" aria-hidden="true" style="backdrop-filter: blur(6px);">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content shadow border-0 overflow-hidden">

      <!-- Header -->
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold" id="cehAutoPopupLabel">ENROLL NOW</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Body: two-column layout -->
      <div class="modal-body p-0">
        <div class="row g-0 align-items-stretch">

          <!-- LEFT: Image panel -->
          <div class="col-12 col-md-5 order-1 order-md-0">
            <div class="left-image-panel h-100 d-flex flex-column justify-content-between text-white p-4">
              <picture>
                <!-- use the provided sandbox image path or replace with your production path -->
                <source srcset="assets/img/register.webp" type="image/webp" />
                <img src="assets/img/register.webp"
                     alt="Begin your journey — CEH v13 AI course highlights"
                     class="img-cover w-100 rounded-start" loading="lazy">
              </picture>

              <!-- optional little footer content that appears on image panel -->
              <div class="mt-3 small text-white-50">
                Trusted by industry • Hands-on labs • NASSCOM & Red Hat aligned
              </div>
            </div>
          </div>

          <!-- RIGHT: CTA then form (swap views) -->
          <div class="col-12 col-md-7 order-0 order-md-1">
            <div class="right-panel p-4 d-flex flex-column h-100">

              <!-- VIEW A: initial enroll CTA -->
              <div id="cehViewCTA" class="view-cta">
                <h3 class="heading-main-1">ENROLL NOW</h3>
                <p class="text-muted mb-3">Enter your email and phone number to reserve a seat. Our advisor will call you shortly.</p>

                <div class="d-grid gap-2" style="max-width:420px;">
                  <button id="cehEnrollBtn" type="button" class="btn btn-primary btn-lg">
                    <i class="fa-solid fa-user-plus me-2" aria-hidden="true"></i> Enroll Now
                  </button>

                  <a href="tel:+918485847920" class="btn btn-outline-secondary">
                    <i class="fa-solid fa-phone me-2" aria-hidden="true"></i> Call +91 8485847920
                  </a>
                </div>

                <ul class="list-unstyled mt-4 small text-muted">
				  <li>• Live Instructor-led sessions</li>
				  <li>• Hands-on labs & projects</li>
				  <li>• Course aligned with Red Hat curriculum</li>
				  <li>• Access to real exam-like practice environment</li>
				  <li>• Expert mentorship and personalized guidance</li>
				  <li>• Industry-recognized certification preparation</li>
                </ul>
              </div>

              <!-- VIEW B: form (hidden initially) -->
              <div id="cehViewForm" class="view-form" style="display:none;">
                <h4 class="mb-2">Quick Enroll — Fill Details</h4>
                <p class="small text-muted mb-3">One of our advisors will connect with you shortly.</p>

                <!-- Fallback inline form (submit to your endpoint if available) -->
                <form id="cehInlineForm" class="row g-2" action="#" method="post" novalidate>
                  

                  <div class="col-12 d-flex justify-content-between align-items-center mt-2">
                    <div class="form-check">
                      <input id="cehWhatsapp" class="form-check-input" type="checkbox">
                      <label for="cehWhatsapp" class="form-check-label small text-muted">Connect on WhatsApp</label>
                    </div>

                    <div>
                      <button type="button" id="cehBackBtn" class="btn btn-link me-2">Back</button>
                      <button type="submit" class="btn btn-success">Continue</button>
                    </div>
                  </div>
                </form>

                <!-- External iframe form (keeps your external form intact) -->
                <div class="ratio ratio-4x3 mt-2" style="max-width:100%;">
                  <iframe id="cehLeadIframe"
                          src="https://center.webasha.com/forms/wtl/5da88f1759099bb67f64c24d61fb2592"
                          title="Career Counseling Form for CEH v13"
                          loading="lazy"
                          sandbox="allow-forms allow-scripts allow-same-origin allow-popups allow-top-navigation"
                          style="border:0; width:100%; height:100%;">
                  </iframe>
                </div>
              </div>

            </div> <!-- /.right-panel -->
          </div> <!-- /.col -->
        </div> <!-- /.row -->
      </div> <!-- /.modal-body -->

      <!-- Footer (small) -->
      <div class="modal-footer justify-content-center">
        <small class="text-muted">Privacy assured — we will never share your info.</small>
      </div>
    </div>
  </div>
</div>

<!-- Styles (move to your stylesheet) -->
<style>
  .left-image-panel { background:#fff; min-height:360px; position:relative; }
  .left-image-panel .img-cover { display:block; width:100%; height:100%; object-fit:cover; border-radius:0; }
  .left-image-panel .mt-3 { opacity:.9; }

  .right-panel { padding:2rem; }
  .view-cta h3 { letter-spacing:.4px; }
  .view-form { max-width:720px; }

  /* Responsive adjustments */
  @media (max-width: 767.98px) {
    .modal-dialog { max-width: 95%; margin: 1.5rem auto; }
    .left-image-panel { display:block; height:200px; }
    .left-image-panel img { height:100%; }
  }
</style>

<!-- Script: auto-open every page load & swap CTA→Form -->
<script>
  (function () {
    const modalEl = document.getElementById('cehAutoPopupModal');
    if (!modalEl) return;

    const enrollBtn = document.getElementById('cehEnrollBtn');
    const backBtn = document.getElementById('cehBackBtn');
    const viewCTA = document.getElementById('cehViewCTA');
    const viewForm = document.getElementById('cehViewForm');

    function showForm() {
      viewCTA.style.display = 'none';
      viewForm.style.display = '';
      // focus first required input
      const firstInput = viewForm.querySelector('input[name="name"], iframe');
      setTimeout(() => firstInput && firstInput.focus && firstInput.focus(), 250);
    }
    function showCTA() {
      viewForm.style.display = 'none';
      viewCTA.style.display = '';
      const btn = document.getElementById('cehEnrollBtn');
      btn && btn.focus();
    }

    enrollBtn?.addEventListener('click', showForm);
    backBtn?.addEventListener('click', showCTA);

    // If using Bootstrap 5
    document.addEventListener('DOMContentLoaded', function () {
      if (typeof bootstrap === 'undefined' || !bootstrap.Modal) return;
      const modal = new bootstrap.Modal(modalEl, { keyboard: true, backdrop: 'static' });
      // Auto open every page load
      modal.show();
      // ensure CTA shown initially
      showCTA();
    });

    // Accessibility: ensure CTA shows when modal is opened programmatically
    modalEl.addEventListener && modalEl.addEventListener('show.bs.modal', showCTA);
  }());
</script>
