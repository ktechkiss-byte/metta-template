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
          $menu_pdf_url = metta_get_field('menu_pdf_url');

          if (!is_string($menu_pdf_url) || trim($menu_pdf_url) === '' || trim($menu_pdf_url) === '0') {
            $menu_pdf_url = get_site_url() . '/wp-content/uploads/2026/01/menu-metta-web-20260612.pdf';
          }

          $menu_pdf_embed_url = $menu_pdf_url . '#toolbar=1&navpanes=0&view=FitH';
          $menu_has_flipbook = file_exists(WP_CONTENT_DIR . '/plugins/3d-flipbook-dflip-lite/assets/js/dflip.min.js');
        ?>
        <section class="section" id="section_274755941">
          <div class="section-bg fill"></div>

          <div class="section-content relative">
            <div class="row" id="row-557572387">
              <div id="col-1361081068" class="col small-12 large-12">
                <div class="col-inner">
	                  <div class="metta-menu-viewer <?php echo $menu_has_flipbook ? 'metta-menu-viewer-flipbook' : 'metta-menu-viewer-native'; ?>" aria-label="Bảng giá dịch vụ Metta Spa">
                    <div class="metta-menu-actions">
                      <a class="metta-menu-btn metta-menu-btn-primary" href="<?php echo esc_url($menu_pdf_url); ?>" target="_blank" rel="noopener">Mở PDF</a>
                      <a class="metta-menu-btn" href="<?php echo esc_url($menu_pdf_url); ?>" download>Tải PDF</a>
                    </div>

                    <?php if ($menu_has_flipbook): ?>
                      <div class="metta-menu-flipbook">
                        <?php
                          $menu_book_id = 'metta-menu-flipbook';
                        ?>
                        <div class="_df_book df-lite" id="<?php echo esc_attr($menu_book_id); ?>" data-title="bang-gia-dich-vu" wpoptions="true" thumbtype="" source="<?php echo esc_url($menu_pdf_url); ?>" height="760" webgl="true"></div>
                      </div>
                    <?php else: ?>
                      <div class="metta-menu-frame">
                        <iframe
                          title="Bảng giá dịch vụ Metta Spa"
                          src="<?php echo esc_url($menu_pdf_embed_url); ?>"
                          loading="lazy">
                        </iframe>
                      </div>
                    <?php endif; ?>
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

          .metta-menu-viewer {
            max-width: 1120px;
            margin: 0 auto;
            overflow: hidden;
            border: 1px solid rgba(74, 45, 46, 0.16);
            border-radius: 8px;
            background: #fff;
            box-shadow: 0 8px 32px rgba(74, 45, 46, 0.12);
          }

          .metta-menu-actions {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 8px;
            padding: 10px 12px;
            background: var(--metta-bg);
          }

          .metta-menu-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 38px;
            padding: 0 16px;
            border: 1px solid rgba(229, 211, 189, 0.26);
            border-radius: 6px;
            background: rgba(255, 255, 255, 0.08);
            color: #e5d3bd;
            font-size: 0.86rem;
            font-weight: 600;
            line-height: 1.2;
            text-decoration: none;
            transition: background-color 0.2s, border-color 0.2s, color 0.2s;
          }

          .metta-menu-btn:hover {
            border-color: #f49d21;
            background: rgba(244, 157, 33, 0.16);
            color: #f49d21;
            text-decoration: none;
          }

          .metta-menu-btn-primary {
            border-color: #f49d21;
            background: #f49d21;
            color: #2a1a1b;
          }

          .metta-menu-btn-primary:hover {
            background: #e58e13;
            color: #2a1a1b;
          }

          .metta-menu-frame {
            height: min(82vh, 900px);
            min-height: 640px;
            background: #f7f3ee;
          }

          .metta-menu-flipbook {
            min-height: 640px;
            background: #f7f3ee;
          }

          .metta-menu-flipbook ._df_book {
            height: min(82vh, 900px) !important;
            min-height: 640px;
            background: #f7f3ee;
          }

          .metta-menu-flipbook .df-container {
            background: #f7f3ee;
          }

          .metta-menu-frame iframe {
            display: block;
            width: 100%;
            height: 100%;
            border: 0;
            background: #f7f3ee;
          }

          @media (max-width: 768px) {
            #section_274755941 {
              padding-top: 18px;
              padding-bottom: 26px;
            }

            .metta-menu-viewer {
              border-radius: 8px;
            }

            .metta-menu-actions {
              align-items: stretch;
              justify-content: stretch;
              padding: 8px;
            }

            .metta-menu-btn {
              flex: 1 1 140px;
              min-height: 42px;
              padding: 0 12px;
              font-size: 0.82rem;
            }

            .metta-menu-frame {
              height: 72vh;
              min-height: 460px;
            }

            .metta-menu-flipbook,
            .metta-menu-flipbook ._df_book {
              height: 72vh !important;
              min-height: 460px;
            }
          }

          @media (max-width: 480px) {
            .metta-menu-frame {
              height: 68vh;
              min-height: 390px;
            }

            .metta-menu-flipbook,
            .metta-menu-flipbook ._df_book {
              height: 68vh !important;
              min-height: 390px;
            }
          }
        </style>
      </div>
    </main>
<?php get_footer(); ?>
