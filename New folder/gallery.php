<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include common header links / global meta / favicon / CSS / JS -->
    <?php include("include/headerlink.php"); ?>
    <!-- Page-specific metadata (Gallery Page) -->
    <?php
      $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
      $current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
    <title>Gallery | WebAsha Technologies - IT Training in Pune</title>
    <meta name="description" content="Explore the WebAsha Technologies gallery in Pune, showcasing vibrant classrooms, student events, certification ceremonies, and hands-on IT training sessions.">
    <meta name="keywords" content="WebAsha Technologies Gallery, IT Training Pune Photos, Classroom Training Images, Student Events Pune, Certification Ceremony Gallery">
    <!-- Canonical URL to avoid duplicate content -->
    <link rel="canonical" href="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <!-- Page-specific Open Graph for social sharing -->
    <meta property="og:title" content="Gallery | WebAsha Technologies - IT Training in Pune">
    <meta property="og:description" content="Discover the vibrant learning environment at WebAsha Technologies through our gallery, featuring training sessions, student achievements, and events in Pune.">
    <meta property="og:url" content="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <meta property="og:image" content="https://training.webasha.com/assets/img/gallery/main-gallery.webp">
    <meta property="og:image:alt" content="WebAsha Technologies Gallery - IT Training and Events in Pune">
    <meta property="og:type" content="website">
    <!-- Page-specific Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Gallery | WebAsha Technologies - IT Training in Pune">
    <meta name="twitter:description" content="View captivating photos from WebAsha Technologies, highlighting our IT training programs, student success stories, and community events in Pune.">
    <meta name="twitter:image" content="https://training.webasha.com/assets/img/gallery/main-gallery.webp">
    <!-- Page-specific JSON-LD: Organization schema for enhanced search visibility -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "WebAsha Technologies",
      "url": "https://training.webasha.com/",
      "logo": "https://training.webasha.com/assets/img/logo.webp",
      "description": "Browse the WebAsha Technologies gallery, showcasing state-of-the-art training facilities, student events, and certification milestones in Pune.",
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
      }
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
            <h1 class="heading-main-1 mb-2 text-white">Gallery</h1>
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
                <li class="breadcrumb-item active text-white" aria-current="page">Gallery</li>
              </ol>
            </nav>

          </div>
        </div>
      </div>
    </div>

    <!-- Animated 4-column Gallery (Bootstrap 5) -->
    <section class="section-header text-center lazy-section mt-4 mb-5" aria-label="Gallery of WebAsha Technologies">
      <div class="container">
        <span class="section-badge">Our Gallery</span>
        <h2 class="heading-main-1 text-center">
          Explore Moments from <span class="red-color">WebAsha Technologies</span>
        </h2>
        <p class="description text-center mb-5">
          Our gallery captures classroom sessions, workshops and student achievements.
          Click any image to open the popup. Use Prev / Next or Left / Right keys to navigate.
        </p>

        <!-- Grid container - thumbnails injected by JS -->
        <div class="row g-3" id="galleryGrid" aria-live="polite"></div>

        <!-- Load more -->
        <div class="text-center mt-4">
          <button class="btn btn-primary" id="load-more" type="button">Load More Images</button>
        </div>
      </div>
    </section>

    <!-- Modal viewer with prev/next -->
    <div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content bg-transparent border-0">
          <div class="modal-body p-0 d-flex align-items-center justify-content-center position-relative">
            <button type="button" class="btn btn-icon nav-prev position-absolute start-0 ms-2" id="galleryPrev" aria-label="Previous">‹</button>

            <figure class="mb-0 text-center viewer-wrap" role="group" aria-label="Image viewer">
              <img id="galleryModalImage" src="" alt="" class="img-fluid rounded viewer-img" />
              <figcaption id="galleryModalCaption" class="text-white mt-3"></figcaption>
              <div id="viewerIndex" class="text-white small mt-1" aria-live="polite"></div>
            </figure>

            <button type="button" class="btn btn-icon nav-next position-absolute end-0 me-2" id="galleryNext" aria-label="Next">›</button>

            <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                    data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        </div>
      </div>
    </div>

    <!-- JS: gallery injection and modal navigation -->
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        // CONFIG: increase quantity to 60 (50+)
        const TOTAL_IMAGES = 60;
        // Template for image path. Replace {n} with file number. Adjust as needed.
        const IMAGE_PATH_TEMPLATE = 'assets/img/gallery/{n}.webp';

        // create imagesData programmatically (no long static array)
        const imagesData = Array.from({ length: TOTAL_IMAGES }, (_, i) => {
          const n = i + 1;
          return {
            src: IMAGE_PATH_TEMPLATE.replace('{n}', n),
            caption: 'WebAsha Gallery — ' + n
          };
        });

        const batchSize = 12; // how many thumbnails to append per click
        let nextIndex = 0;

        const grid = document.getElementById('galleryGrid');
        const loadMoreBtn = document.getElementById('load-more');

        const modalEl = document.getElementById('galleryModal');
        const modalImage = document.getElementById('galleryModalImage');
        const modalCaption = document.getElementById('galleryModalCaption');
        const viewerIndex = document.getElementById('viewerIndex');
        const prevBtn = document.getElementById('galleryPrev');
        const nextBtn = document.getElementById('galleryNext');

        if (!grid) return;
        let currentIndex = -1;

        function escapeHtml(text) {
          return String(text || '')
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;')
            .replace(/'/g, '&#039;');
        }

        function createThumbElement(itemIndex, item) {
          const col = document.createElement('div');
          col.className = 'col-lg-3 col-md-4 col-sm-6';

          col.innerHTML = `
            <figure class="gallery-card">
              <button class="gallery-thumb" type="button"
                      data-index="${itemIndex}"
                      data-image="${item.src}"
                      data-caption="${escapeHtml(item.caption)}"
                      aria-label="Open image: ${escapeHtml(item.caption)}">
                <img src="${item.src}" alt="${escapeHtml(item.caption)}" loading="lazy" class="img-fluid rounded" />
                <figcaption class="caption">${escapeHtml(item.caption)}</figcaption>
                <span class="zoom-icon" aria-hidden="true">🔍</span>
              </button>
            </figure>
          `;
          return col;
        }

        function renderNextBatch() {
          const end = Math.min(nextIndex + batchSize, imagesData.length);
          for (let i = nextIndex; i < end; i++) {
            const el = createThumbElement(i, imagesData[i]);
            grid.appendChild(el);
          }
          nextIndex = end;

          if (loadMoreBtn) {
            if (nextIndex >= imagesData.length) {
              loadMoreBtn.disabled = true;
              loadMoreBtn.textContent = 'No more images';
              loadMoreBtn.classList.remove('btn-primary');
              loadMoreBtn.classList.add('btn-secondary');
            } else {
              loadMoreBtn.disabled = false;
              loadMoreBtn.textContent = 'Load More Images';
            }
          }
        }

        // Delegated click for thumbnails
        grid.addEventListener('click', function (e) {
          const btn = e.target.closest('.gallery-thumb');
          if (!btn) return;
          const idx = parseInt(btn.getAttribute('data-index'), 10);
          if (Number.isNaN(idx)) return;
          openModalAt(idx);
        });

        // Keyboard activation (Enter/Space)
        grid.addEventListener('keydown', function (e) {
          const btn = e.target.closest('.gallery-thumb');
          if (!btn) return;
          if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            btn.click();
          }
        });

        function openModalAt(index) {
          if (index < 0 || index >= imagesData.length) return;
          currentIndex = index;
          showAt(currentIndex);
          if (typeof bootstrap !== 'undefined') {
            const bs = bootstrap.Modal.getOrCreateInstance(modalEl);
            bs.show();
          }
        }

        function showAt(index) {
          if (index < 0) index = imagesData.length - 1;
          if (index >= imagesData.length) index = 0;
          currentIndex = index;

          modalImage.style.opacity = 0;
          setTimeout(() => {
            modalImage.src = imagesData[currentIndex].src;
            modalImage.alt = imagesData[currentIndex].caption || '';
            modalCaption.textContent = imagesData[currentIndex].caption || '';
            if (viewerIndex) viewerIndex.textContent = (currentIndex + 1) + ' / ' + imagesData.length;
            modalImage.style.opacity = 1;
          }, 80);
        }

        if (prevBtn) prevBtn.addEventListener('click', () => showAt(currentIndex - 1));
        if (nextBtn) nextBtn.addEventListener('click', () => showAt(currentIndex + 1));

        // Keyboard navigation during modal
        document.addEventListener('keydown', (e) => {
          if (!modalEl.classList.contains('show')) return;
          if (e.key === 'ArrowLeft') { e.preventDefault(); showAt(currentIndex - 1); }
          if (e.key === 'ArrowRight') { e.preventDefault(); showAt(currentIndex + 1); }
        });

        // Clear modal on hide
        modalEl.addEventListener('hidden.bs.modal', () => {
          modalImage.src = '';
          modalCaption.textContent = '';
          if (viewerIndex) viewerIndex.textContent = '';
          currentIndex = -1;
        });

        if (loadMoreBtn) {
          loadMoreBtn.addEventListener('click', function () {
            renderNextBatch();
            // focus first of newly added thumbnails for accessibility
            const newlyAddedIdx = Math.max(nextIndex - batchSize, 0);
            const newly = grid.querySelector(`.gallery-thumb[data-index="${newlyAddedIdx}"]`);
            if (newly) newly.focus();
          });
        }

        // Initial render (first batch)
        renderNextBatch();
      });
    </script>

    <!-- Site footer -->
    <?php include("include/footer.php"); ?>
    <?php include("include/footerlink.php"); ?>
  </body>
</html>
