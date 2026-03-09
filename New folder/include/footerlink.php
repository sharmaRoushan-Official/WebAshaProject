    <!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true" style="backdrop-filter: blur(8px);">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent border-0">
      <div class="modal-header p-0 border-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <img id="imagePreview" src="" alt="Certification Image" class="img-fluid" />
        <div class="d-flex justify-content-between mt-3">
          <button type="button" class="btn btn-outline-light" id="prevImage">Prev</button>
          <button type="button" class="btn btn-outline-light" id="nextImage">Next</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script defer>
  document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll(".carousel-image");
    const modal = new bootstrap.Modal(document.getElementById("imageModal"));
    const preview = document.getElementById("imagePreview");
    const nextBtn = document.getElementById("nextImage");
    const prevBtn = document.getElementById("prevImage");
    let currentIndex = 0;

    function showImage(index) {
      if (index < 0) index = images.length - 1;
      if (index >= images.length) index = 0;
      currentIndex = index;
      preview.src = images[index].src;
      modal.show();
    }

    images.forEach((img, i) => {
      img.addEventListener("click", () => showImage(i));
    });

    nextBtn.addEventListener("click", () => showImage(currentIndex + 1));
    prevBtn.addEventListener("click", () => showImage(currentIndex - 1));
  });
</script>
    
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="assets/js/all.js"></script>
    <script type="text/javascript" src="assets/js/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.scrollbar.min.js"></script>
	<script type="text/javascript" src="assets/js/custom.js"></script>

<!-- content view more button -->
<script>
  function toggleContent(containerId, button) {
    const contentContainer = document.getElementById(containerId);

    contentContainer.classList.toggle('expanded');
    button.textContent = contentContainer.classList.contains('expanded') ? 'View Less' : 'View More';
  }
</script>
    <!-- JS files -->
    <script src="assets/js/lazy-reveal.js" defer></script>
    <!-- SEO fallback -->
    <noscript>
      <style>
        .lazy-section {
          opacity: 1 !important;
          transform: none !important;
        }
      </style>
    </noscript>

    <!-- JS: slide-up on load + show/hide on scroll + CTA animations -->
<script>
(function(){
  const footer = document.getElementById('webashaFooter');
  const whatsapp = document.getElementById('whatsappCTA');
  let lastScrollY = window.scrollY || 0;
  let ticking = false;
  let footerVisible = false;

  function showFooter() {
    if (!footer) return;
    footer.classList.add('visible');
    footer.classList.remove('hidden');
    footerVisible = true;

    // CTA entrance + wiggle setup
    if (whatsapp) {
      whatsapp.classList.add('entrance');
      // remove entrance after it finishes
      setTimeout(()=> whatsapp.classList.remove('entrance'), 700);
      // add low-intensity wiggle after a short delay to keep attention
      setTimeout(()=> whatsapp.classList.add('wiggle'), 1600);
    }
  }

  function hideFooter() {
    if (!footer) return;
    footer.classList.remove('visible');
    footer.classList.add('hidden');
    footerVisible = false;
  }

  // initial show after small delay for slide-up effect
  document.addEventListener('DOMContentLoaded', function(){
    // small delay so user notices page content first
    setTimeout(showFooter, 420);
  });

  // show/hide on scroll: hide when scrolling down, show when scrolling up
  window.addEventListener('scroll', function(){
    if (!ticking) {
      window.requestAnimationFrame(function(){
        const currentY = window.scrollY || 0;
        const delta = currentY - lastScrollY;
        // small threshold to avoid flicker
        if (Math.abs(delta) > 10) {
          if (delta > 0 && currentY > 120) {
            // scrolling down
            hideFooter();
          } else {
            // scrolling up
            showFooter();
          }
        }
        lastScrollY = currentY;
        ticking = false;
      });
      ticking = true;
    }
  }, { passive: true });

  // keyboard accessibility: Enter/Space opens link
  if (whatsapp) {
    whatsapp.addEventListener('keydown', function(e){
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        const anchor = whatsapp.querySelector('a');
        if (anchor) anchor.click();
      }
    });
  }

  // hide footer when virtual keyboard opens on mobile (input focus) to avoid overlap
  document.addEventListener('focusin', (e) => {
    if (e.target && /input|textarea|select/i.test(e.target.tagName)) hideFooter();
  });
  document.addEventListener('focusout', (e) => {
    // show again after small delay
    setTimeout(()=> showFooter(), 400);
  });

})();
</script>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const counters = [
    { id: "counter1", target: 120 }, // Certified Industry Experts
    { id: "counter2", target: 100 },  // Comprehensive Courses
    { id: "counter3", target: 50 },  // Labs & Facilities
    { id: "counter4", target: 100 }   // Countries
  ];

  const speed = 40; // lower = faster count speed
  let hasAnimated = false;

  function animateCounter(counter, target) {
    let count = 0;
    const increment = Math.ceil(target / speed);

    const update = () => {
      count += increment;
      if (count >= target) {
        count = target;
        clearInterval(interval);
      }
      counter.textContent = count;
    };

    const interval = setInterval(update, 30);
  }

  // Observe when the section is in view
  const section = document.querySelector(".experts-counting");

  if (section) {
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting && !hasAnimated) {
          hasAnimated = true;
          counters.forEach(item => {
            const el = document.getElementById(item.id);
            if (el) animateCounter(el, item.target);
          });
          obs.unobserve(section); // stop observing after animation
        }
      });
    }, { threshold: 0.4 });

    observer.observe(section);
  }
});
</script>
<!--Pure Chat Pulgin-->
<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '3494248d-2d24-4b7a-8abd-11763f44be35', f: true }); done = true; } }; })();</script>

