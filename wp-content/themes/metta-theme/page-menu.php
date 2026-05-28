<?php
/* Template Name: page-menu */
get_header(); ?>


    <main id="main" class="">
      <div id="content" role="main" class="content-area">
        <div class="banner has-hover" id="banner-404179995">
          <div class="banner-inner fill">
            <div class="banner-bg fill">
              <div class="overlay"></div>
            </div>

            <div class="banner-layers container">
              <div class="fill banner-link"></div>
              <div id="text-box-1484395460" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                <div class="text-box-content text dark">
                  <div class="text-inner text-center">
                    <div id="text-4153475628" class="text text-vip">
                      <p><?php echo metta_get_with_fallback('menu_page_title', 'Bảng giá dịch vụ'); ?></p>

                      <style>
                        #text-4153475628 {
                          font-size: 1.45rem;
                        }

                        @media (min-width: 550px) {
                          #text-4153475628 {
                            font-size: 2rem;
                          }
                        }
                      </style>
                    </div>
                  </div>
                </div>

                <style>
                  #text-box-1484395460 {
                    width: 82%;
                  }

                  #text-box-1484395460 .text-box-content {
                    font-size: 100%;
                  }

                  @media (min-width: 550px) {
                    #text-box-1484395460 {
                      width: 60%;
                    }
                  }
                </style>
              </div>
            </div>
          </div>

          <style>
            #banner-404179995 {
              padding-top: 120px;
            }

            #banner-404179995 .overlay {
              background-color: rgba(31, 14, 0, 0.744);
            }

            @media (min-width: 550px) {
              #banner-404179995 {
                padding-top: 150px;
              }
            }
          </style>
        </div>

        <?php 
          $menu_pdf_url = metta_get_field('menu_pdf_url') ?: get_site_url().'/wp-content/uploads/2026/04/Ban-sao-cua-MENU-Metta-hoan-chinh-1208.pdf';
        ?>
        <section class="section" id="section_274755941">
          <div class="section-bg fill"></div>

          <div class="section-content relative">
            <div class="row" id="row-557572387">
              <div id="col-1361081068" class="col small-12 large-12">
                <div class="col-inner">
                  
                  <!-- Flipbook Viewer -->
                  <div id="metta-flipbook-wrap">
                    <!-- Toolbar -->
                    <div id="metta-fb-toolbar">
                      <div class="metta-fb-toolbar-group">
                        <button id="metta-fb-prev" title="Trang trước" aria-label="Trang trước" disabled>
                          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
                        </button>
                        <span id="metta-fb-page-info"><span id="metta-fb-current">-</span> / <span id="metta-fb-total">-</span></span>
                        <button id="metta-fb-next" title="Trang sau" aria-label="Trang sau" disabled>
                          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </button>
                      </div>
                      <div class="metta-fb-toolbar-group">
                        <button id="metta-fb-fullscreen" title="Toàn màn hình" aria-label="Toàn màn hình">
                          <svg id="metta-fb-fs-icon-enter" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                          <svg id="metta-fb-fs-icon-exit" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:none"><path d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3"></path></svg>
                        </button>
                        <a href="<?php echo $menu_pdf_url; ?>" download class="metta-fb-btn" title="Tải PDF" aria-label="Tải PDF">
                          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                        </a>
                      </div>
                    </div>

                    <!-- Flipbook Container -->
                    <div id="metta-fb-container">
                      <div id="metta-fb-loading">
                        <div class="metta-fb-spinner"></div>
                        <p id="metta-fb-loading-text">Đang tải bảng giá...</p>
                      </div>
                      <div id="metta-fb-book"></div>
                    </div>

                    <!-- Fullscreen Close Button (only visible in fullscreen) -->
                    <button id="metta-fb-close-fs" title="Thoát toàn màn hình" aria-label="Thoát toàn màn hình">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </section>

        <style>
          #section_274755941 {
            padding-top: 30px;
            padding-bottom: 30px;
          }

          /* ================================================
             FLIPBOOK VIEWER STYLES
             ================================================ */
          #metta-flipbook-wrap {
            position: relative;
            max-width: 1100px;
            margin: 0 auto;
            background: #2a1a1b;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 40px rgba(74, 45, 46, 0.25);
          }

          /* --- Toolbar --- */
          #metta-fb-toolbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 8px 16px;
            background: #4a2d2e;
            color: #e5d3bd;
            z-index: 10;
            position: relative;
          }

          .metta-fb-toolbar-group {
            display: flex;
            align-items: center;
            gap: 6px;
          }

          #metta-fb-toolbar button,
          .metta-fb-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 34px;
            height: 34px;
            border: 1px solid rgba(229,211,189,0.2);
            border-radius: 8px;
            background: rgba(255,255,255,0.06);
            color: #e5d3bd;
            cursor: pointer;
            transition: all 0.2s;
            padding: 0;
            text-decoration: none;
          }

          #metta-fb-toolbar button:hover,
          .metta-fb-btn:hover {
            background: rgba(244,157,33,0.2);
            border-color: #f49d21;
            color: #f49d21;
          }

          #metta-fb-toolbar button:disabled {
            opacity: 0.3;
            cursor: not-allowed;
            pointer-events: none;
          }

          #metta-fb-page-info {
            font-size: 0.8rem;
            font-weight: 600;
            color: #f49d21;
            min-width: 55px;
            text-align: center;
            user-select: none;
          }

          /* --- Book Container --- */
          #metta-fb-container {
            position: relative;
            width: 100%;
            min-height: 450px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #1a0f10 0%, #2d1c1d 50%, #1a0f10 100%);
            overflow: hidden;
            padding: 20px 0;
          }

          #metta-fb-book {
            position: relative;
          }

          /* Page flip shadow effects */
          .metta-fb-page {
            background: #fff;
          }

          .metta-fb-page img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: block;
          }

          .metta-fb-page-cover {
            background: linear-gradient(135deg, #4a2d2e 0%, #6b3a3c 30%, #4a2d2e 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #f49d21;
            font-family: '1ftv-vip-medino', serif;
            font-size: 1.4rem;
            text-align: center;
            padding: 20px;
          }

          /* --- Loading --- */
          #metta-fb-loading {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: rgba(42,26,27,0.95);
            z-index: 20;
            transition: opacity 0.4s;
          }

          #metta-fb-loading.hidden {
            opacity: 0;
            pointer-events: none;
          }

          .metta-fb-spinner {
            width: 44px;
            height: 44px;
            border: 3px solid rgba(229,211,189,0.15);
            border-top-color: #f49d21;
            border-radius: 50%;
            animation: metta-fb-spin 0.7s linear infinite;
          }

          @keyframes metta-fb-spin {
            to { transform: rotate(360deg); }
          }

          #metta-fb-loading p {
            margin-top: 14px;
            color: #e5d3bd;
            font-size: 0.85rem;
          }

          /* --- Close Fullscreen Button --- */
          #metta-fb-close-fs {
            display: none;
            position: absolute;
            top: 12px;
            right: 12px;
            z-index: 100;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid rgba(244,157,33,0.5);
            background: rgba(74,45,46,0.9);
            color: #f49d21;
            cursor: pointer;
            align-items: center;
            justify-content: center;
            transition: all 0.2s;
            padding: 0;
            backdrop-filter: blur(8px);
          }

          #metta-fb-close-fs:hover {
            background: #4a2d2e;
            border-color: #f49d21;
            transform: scale(1.1);
          }

          /* ================================================
             FULLSCREEN MODE
             ================================================ */
          #metta-flipbook-wrap.is-fullscreen {
            position: fixed;
            inset: 0;
            z-index: 999999;
            border-radius: 0;
            max-width: 100%;
            display: flex;
            flex-direction: column;
          }

          #metta-flipbook-wrap.is-fullscreen #metta-fb-toolbar {
            flex-shrink: 0;
          }

          #metta-flipbook-wrap.is-fullscreen #metta-fb-container {
            flex: 1;
            min-height: 0;
            padding: 10px 0;
          }

          #metta-flipbook-wrap.is-fullscreen #metta-fb-close-fs {
            display: inline-flex;
          }

          /* Swap fullscreen icons */
          #metta-flipbook-wrap.is-fullscreen #metta-fb-fs-icon-enter { display: none; }
          #metta-flipbook-wrap.is-fullscreen #metta-fb-fs-icon-exit { display: block; }

          /* --- Hint overlay for touch/click --- */
          .metta-fb-hint {
            position: absolute;
            bottom: 16px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(74,45,46,0.85);
            color: #e5d3bd;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 0.78rem;
            z-index: 15;
            pointer-events: none;
            opacity: 1;
            transition: opacity 0.5s;
            backdrop-filter: blur(4px);
            white-space: nowrap;
          }

          .metta-fb-hint.fade-out {
            opacity: 0;
          }

          /* ================================================
             RESPONSIVE
             ================================================ */
          @media (max-width: 768px) {
            #metta-flipbook-wrap {
              border-radius: 8px;
            }

            #metta-fb-toolbar {
              padding: 6px 10px;
            }

            #metta-fb-toolbar button,
            .metta-fb-btn {
              width: 30px;
              height: 30px;
            }

            #metta-fb-toolbar button svg,
            .metta-fb-btn svg {
              width: 15px;
              height: 15px;
            }

            #metta-fb-page-info {
              font-size: 0.72rem;
              min-width: 45px;
            }

            #metta-fb-container {
              min-height: 350px;
              padding: 10px 0;
            }

            .metta-fb-page-cover {
              font-size: 1rem;
            }
          }

          @media (max-width: 480px) {
            #metta-fb-container {
              min-height: 280px;
            }
          }
        </style>

        <!-- PDF.js + PageFlip from CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/page-flip@2.0.7/dist/js/page-flip.browser.js"></script>
        <script>
        (function() {
          'use strict';

          var PDF_URL = '<?php echo $menu_pdf_url; ?>';
          pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

          var bookEl = document.getElementById('metta-fb-book');
          var loadingEl = document.getElementById('metta-fb-loading');
          var loadingText = document.getElementById('metta-fb-loading-text');
          var wrapEl = document.getElementById('metta-flipbook-wrap');
          var containerEl = document.getElementById('metta-fb-container');
          var flipBook = null;
          var totalPages = 0;

          // Calculate book dimensions based on container
          function getBookSize() {
            var isFullscreen = wrapEl.classList.contains('is-fullscreen');
            var containerW, containerH;

            if (isFullscreen) {
              containerW = window.innerWidth;
              containerH = window.innerHeight - 50; // toolbar height
            } else {
              containerW = containerEl.offsetWidth;
              containerH = containerEl.offsetHeight || 500;
            }

            var isMobile = window.innerWidth <= 768;
            var pageW, pageH;

            if (isMobile) {
              // Single page mode on mobile
              pageW = Math.min(containerW - 20, 400);
              pageH = Math.round(pageW * 1.414); // A4 ratio
              if (pageH > containerH - 20) {
                pageH = containerH - 20;
                pageW = Math.round(pageH / 1.414);
              }
            } else {
              // Double page on desktop - each page is half
              pageH = Math.min(containerH - 40, 650);
              pageW = Math.round(pageH / 1.414);
              // Each page width shouldn't exceed half the container
              if (pageW * 2 > containerW - 60) {
                pageW = Math.round((containerW - 60) / 2);
                pageH = Math.round(pageW * 1.414);
              }
            }

            return { width: pageW, height: pageH, isMobile: isMobile };
          }

          // Render a single PDF page to a data URL
          function renderPageToImage(pdfDoc, pageNum, width, height) {
            return pdfDoc.getPage(pageNum).then(function(page) {
              var canvas = document.createElement('canvas');
              var viewport = page.getViewport({ scale: 1 });

              // Scale to fit desired dimensions
              var scaleW = width / viewport.width;
              var scaleH = height / viewport.height;
              var scale = Math.min(scaleW, scaleH) * 2; // 2x for sharpness

              var scaledViewport = page.getViewport({ scale: scale });
              canvas.width = scaledViewport.width;
              canvas.height = scaledViewport.height;

              var ctx = canvas.getContext('2d');
              return page.render({ canvasContext: ctx, viewport: scaledViewport }).promise.then(function() {
                var dataUrl = canvas.toDataURL('image/jpeg', 0.85);
                canvas = null; // free memory
                return dataUrl;
              });
            });
          }

          // Update page counter
          function updatePageInfo() {
            if (!flipBook) return;
            var current = flipBook.getCurrentPageIndex();
            var isMobile = window.innerWidth <= 768;

            // In double page mode, show spread info
            if (!isMobile && totalPages > 1) {
              var leftPage = current + 1;
              var rightPage = Math.min(current + 2, totalPages);
              if (leftPage === rightPage) {
                document.getElementById('metta-fb-current').textContent = leftPage;
              } else {
                document.getElementById('metta-fb-current').textContent = leftPage + '-' + rightPage;
              }
            } else {
              document.getElementById('metta-fb-current').textContent = current + 1;
            }

            document.getElementById('metta-fb-prev').disabled = (current <= 0);
            document.getElementById('metta-fb-next').disabled = (current >= totalPages - 1);
          }

          // Initialize the flipbook
          function initFlipBook(pages) {
            var size = getBookSize();

            // Clear previous
            bookEl.innerHTML = '';

            // Create page elements
            pages.forEach(function(dataUrl, idx) {
              var pageDiv = document.createElement('div');
              pageDiv.className = 'metta-fb-page';

              var img = document.createElement('img');
              img.src = dataUrl;
              img.alt = 'Trang ' + (idx + 1);
              img.draggable = false;

              pageDiv.appendChild(img);
              bookEl.appendChild(pageDiv);
            });

            // Initialize PageFlip
            flipBook = new St.PageFlip(bookEl, {
              width: size.width,
              height: size.height,
              size: 'fixed',
              minWidth: 200,
              maxWidth: 800,
              minHeight: 280,
              maxHeight: 1000,
              showCover: false,
              mobileScrollSupport: false,
              usePortrait: size.isMobile,
              drawShadow: true,
              flippingTime: 800,
              startPage: 0,
              startZIndex: 0,
              autoSize: false,
              maxShadowOpacity: 0.6,
              showPageCorners: true,
              disableFlipByClick: false
            });

            flipBook.loadFromHTML(bookEl.querySelectorAll('.metta-fb-page'));

            flipBook.on('flip', function() {
              updatePageInfo();
            });

            // Initial page info
            updatePageInfo();

            // Enable nav buttons
            document.getElementById('metta-fb-prev').disabled = false;
            document.getElementById('metta-fb-next').disabled = false;
            updatePageInfo();

            // Show hint
            showHint();
          }

          // Show usage hint
          function showHint() {
            var hint = document.createElement('div');
            hint.className = 'metta-fb-hint';
            hint.textContent = window.innerWidth <= 768 
              ? '👆 Vuốt hoặc chạm để lật trang' 
              : '👆 Kéo góc trang hoặc dùng nút ◀ ▶ để lật';
            containerEl.appendChild(hint);

            setTimeout(function() {
              hint.classList.add('fade-out');
              setTimeout(function() { hint.remove(); }, 600);
            }, 4000);
          }

          // Load PDF and render all pages
          pdfjsLib.getDocument(PDF_URL).promise.then(function(pdf) {
            totalPages = pdf.numPages;
            document.getElementById('metta-fb-total').textContent = totalPages;
            loadingText.textContent = 'Đang tải trang 1/' + totalPages + '...';

            var size = getBookSize();
            var promises = [];

            for (var i = 1; i <= totalPages; i++) {
              promises.push(renderPageToImage(pdf, i, size.width, size.height));
            }

            // Render pages with progress
            var loaded = 0;
            var results = [];

            function renderSequential(idx) {
              if (idx > totalPages) {
                // All done
                loadingEl.classList.add('hidden');
                initFlipBook(results);
                return;
              }

              renderPageToImage(pdf, idx, size.width, size.height).then(function(dataUrl) {
                results.push(dataUrl);
                loaded++;
                loadingText.textContent = 'Đang tải trang ' + loaded + '/' + totalPages + '...';
                renderSequential(idx + 1);
              });
            }

            renderSequential(1);

          }).catch(function(err) {
            console.error('PDF load error:', err);
            loadingEl.innerHTML = '<p style="color:#e5d3bd;">Không thể tải PDF. <a href="' + PDF_URL + '" style="color:#f49d21; text-decoration:underline;" download>Tải xuống tại đây</a></p>';
          });

          // --- Controls ---

          // Previous
          document.getElementById('metta-fb-prev').addEventListener('click', function() {
            if (flipBook) flipBook.flipPrev();
          });

          // Next
          document.getElementById('metta-fb-next').addEventListener('click', function() {
            if (flipBook) flipBook.flipNext();
          });

          // Fullscreen toggle
          function toggleFullscreen() {
            var isFS = wrapEl.classList.toggle('is-fullscreen');

            if (isFS) {
              document.body.style.overflow = 'hidden';
            } else {
              document.body.style.overflow = '';
            }

            // Rebuild flipbook with new dimensions
            if (flipBook) {
              var size = getBookSize();
              flipBook.updateFromHtml(bookEl.querySelectorAll('.metta-fb-page'));
              try {
                flipBook.setting.width = size.width;
                flipBook.setting.height = size.height;
                flipBook.setting.usePortrait = size.isMobile;
                flipBook.update();
              } catch(e) {
                // Some versions may need full rebuild - pages already exist
              }
            }
          }

          document.getElementById('metta-fb-fullscreen').addEventListener('click', toggleFullscreen);
          document.getElementById('metta-fb-close-fs').addEventListener('click', toggleFullscreen);

          // Keyboard navigation
          document.addEventListener('keydown', function(e) {
            if (!flipBook) return;
            if (e.key === 'ArrowLeft') flipBook.flipPrev();
            else if (e.key === 'ArrowRight') flipBook.flipNext();
            else if (e.key === 'Escape' && wrapEl.classList.contains('is-fullscreen')) {
              toggleFullscreen();
            }
          });

          // Handle window resize for fullscreen
          var resizeTimer;
          window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
              if (flipBook && wrapEl.classList.contains('is-fullscreen')) {
                var size = getBookSize();
                try {
                  flipBook.setting.width = size.width;
                  flipBook.setting.height = size.height;
                  flipBook.setting.usePortrait = size.isMobile;
                  flipBook.update();
                } catch(e) {}
              }
            }, 250);
          });

        })();
        </script>
      </div>
    </main>
<?php get_footer(); ?>