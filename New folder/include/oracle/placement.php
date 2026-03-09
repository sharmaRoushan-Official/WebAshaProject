   <!-- Career Roadmap Section -->
  <div class="container timeline-wrap">
    <div class="section-header text-center">
          <span class="section-badge ">WebAsha Placements Process</span>
          </div>
  <h2 class="heading-main-1 text-white text-center">Turn Your <span class="red-color">Learning</span> Into a Career <span class="red-color">That You’re Proud Of</span></h2>

  <!-- Decorative Dotted Path -->
  <svg class="timeline-track" viewBox="0 0 1200 420" preserveAspectRatio="none" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
    <path d="M30,350 C180,50 420,50 540,350 C660,650 900,650 1170,350" fill="none"/>
    <circle cx="40" cy="340" r="6" fill="var(--dot)"></circle>
    <circle cx="1160" cy="340" r="6" fill="var(--dot)"></circle>
  </svg>

  <!-- Timeline Cards -->
  <div class="timeline-grid">
    <article class="step-card">
      <div class="step-number">01</div>
      <div class="step-icon"><i class="fa fa-book fa-lg text-danger"></i></div>
      <h3 class="step-title">Follow 3A</h3>
      <p class="step-desc">Attendance, Assignment & Assessment model ensuring consistency and success.</p>
    </article>

    <article class="step-card">
      <div class="step-number">02</div>
      <div class="step-icon"><i class="fa fa-cogs fa-lg text-danger"></i></div>
      <h3 class="step-title">Industry-Specific Skills</h3>
      <p class="step-desc">Hands-on expertise in tools & technologies for high-demand IT roles.</p>
    </article>

    <article class="step-card">
      <div class="step-number">03</div>
      <div class="step-icon"><i class="fa fa-user fa-lg text-danger"></i></div>
      <h3 class="step-title">Profile Building</h3>
      <p class="step-desc">Resume, LinkedIn & portfolio development to showcase your skills.</p>
    </article>

    <article class="step-card">
      <div class="step-number">04</div>
      <div class="step-icon"><i class="fa fa-pencil-alt fa-lg text-danger"></i></div>
      <h3 class="step-title">Exam</h3>
      <p class="step-desc">Final evaluation exam to test your readiness for real-world challenges.</p>
    </article>

    <article class="step-card">
      <div class="step-number">05</div>
      <div class="step-icon"><i class="fa fa-certificate fa-lg text-danger"></i></div>
      <h3 class="step-title">Global Certification</h3>
      <p class="step-desc">Earn globally recognized certifications that validate your expertise.</p>
    </article>

    <article class="step-card">
      <div class="step-number">06</div>
      <div class="step-icon"><i class="fa fa-graduation-cap fa-lg text-danger"></i></div>
      <h3 class="step-title">Integrated Internship</h3>
      <p class="step-desc">Apply knowledge in real projects & internships to build credibility.</p>
    </article>
  </div>

  <!-- Footer Labels -->
  <div class="timeline-foot">
    <div><span class="dot"></span> Start with</div>
    <div>Happy Ending <span class="dot"></span></div>
  </div>
  </div>


<!-- Timeline Scroll Animation -->
<script>
document.addEventListener('DOMContentLoaded', () => {
  const cards = document.querySelectorAll('.step-card');
  const io = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        io.unobserve(e.target);
      }
    });
  }, { threshold: 0.18 });
  cards.forEach(c => io.observe(c));
});
</script>
