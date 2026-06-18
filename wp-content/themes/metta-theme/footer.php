
    <footer id="footer" class="footer-wrapper">
      <section class="section dark" id="section_1305578020">
        <div class="section-bg fill">
          <img width="1920" height="1080"
            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAB4AAAAQ4AQMAAADSHVMAAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAARJJREFUGBntwQENAAAAwiD7p34PBwwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAOBU+OUAARAVzPEAAAAASUVORK5CYII="
            class="bg attachment-original size-original lazyload" alt="" decoding="async"
            data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/12/z7321243467496_f7d4cb3936392fd3897d465a35fcd2ed.jpg"
            data-eio-rwidth="1920" data-eio-rheight="1080" /><noscript><img width="1920" height="1080"
              src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/12/z7321243467496_f7d4cb3936392fd3897d465a35fcd2ed.jpg"
              class="bg attachment-original size-original" alt="" decoding="async" data-eio="l" /></noscript>
          <div class="section-bg-overlay absolute fill"></div>
        </div>

        <div class="section-content relative">
          <div id="gap-244141483" class="gap-element clearfix" style="display: block; height: auto">
            <style>
              #gap-244141483 {
                padding-top: 50px;
              }

              @media (min-width: 550px) {
                #gap-244141483 {
                  padding-top: 30px;
                }
              }
            </style>
          </div>

          <div class="row row-large" id="row-1511448033">
            <div id="col-351524360" class="col medium-12 small-12 large-4">
              <div class="col-inner">
                <div class="img" id="image_25393426">
                  <div class="img-inner dark">
                    <?php 
                    $f_id = get_option('page_on_front');
                    $f_logo = function_exists('metta_get_field') ? metta_get_field('site_logo', $f_id) : '';
                    $f_logo_url = !empty($f_logo) ? $f_logo : get_site_url() . '/wp-content/uploads/2025/12/logo_meta.svg';
                    ?>
                    <img src="<?php echo $f_logo_url; ?>" class="attachment-original size-original" alt="Metta Spa" style="max-height: 80px; width: auto;" />
                  </div>

                  <style>
                    #image_25393426 {
                      width: 40%;
                    }

                    @media (min-width: 550px) {
                      #image_25393426 {
                        width: 25%;
                      }
                    }

                    @media (min-width: 850px) {
                      #image_25393426 {
                        width: 35%;
                      }
                    }
                  </style>
                </div>

                <?php 
                $f_id = get_option('page_on_front');
                $g_phone = metta_get_with_fallback('global_phone', '0931.323.268');
                $g_email = metta_get_with_fallback('global_email', 'Mettaspadongy@gmail.com');
                $g_fb = metta_get_with_fallback('link_facebook', 'https://www.facebook.com/profile.php?id=61573332995547');
                $g_zalo = metta_get_with_fallback('link_zalo', 'https://zalo.me/0931323268');
                ?>
                <p>
                  <?php 
                  $footer_desc = metta_get_field('footer_about', $f_id);
                  echo !empty($footer_desc) ? $footer_desc : 'Metta đông y Spa – Metta Spa - cùng bạn xây dựng lối sống dưỡng sinh. chúng tôi mang đến liệu trình chuyên sâu giúp bạn tỏa sáng và tự tin mỗi ngày.'; 
                  ?>
                </p>
                <div class="social-icons follow-icons">
                  <a href="<?php echo $g_fb; ?>" target="_blank" data-label="Facebook"
                    class="icon button circle is-outline tooltip facebook" title="Theo dõi trên Facebook"
                    aria-label="Theo dõi trên Facebook" rel="noopener nofollow"><i class="icon-facebook"
                      aria-hidden="true"></i></a><a href="https://www.instagram.com/metta_spa/" target="_blank"
                    data-label="Instagram" class="icon button circle is-outline tooltip instagram"
                    title="Theo dõi trên Instagram" aria-label="Theo dõi trên Instagram" rel="noopener nofollow"><i
                      class="icon-instagram" aria-hidden="true"></i></a><a
                    href="https://www.tiktok.com/@metta_daotaoduongsinh?_r=1&_t=ZS-97ImBgciB1h" target="_blank" data-label="TikTok"
                    class="icon button circle is-outline tooltip tiktok" title="Theo dõi trên TikTok"
                    aria-label="Theo dõi trên TikTok" rel="noopener nofollow"><i class="icon-tiktok"
                      aria-hidden="true"></i></a>
                  <a href="<?php echo $g_zalo; ?>" target="_blank" class="icon button circle is-outline tooltip" title="Zalo"><i class="icon-phone"></i></a>
                </div>
              </div>
            </div>

            <div id="col-1783844505" class="col medium-4 small-12 large-3">
              <div class="col-inner">
                <div id="text-1453524000" class="text text-vip">
                  <p><strong>Liên hệ</strong></p>

                  <style>
                    #text-1453524000 {
                      font-size: 1.2rem;
                    }
                  </style>
                </div>

                <p>
                  Hotline: <?php echo $g_phone; ?> <br />Email:
                  <?php echo $g_email; ?><br />Fanpage: <a href="<?php echo $g_fb; ?>" target="_blank">𝐌𝐄𝐓𝐓𝐀 𝐒𝐏𝐀 𝐕𝐈𝐄𝐓 𝐍𝐀𝐌</a>
                </p>
              </div>
            </div>

            <div id="col-1968902255" class="col medium-4 small-12 large-2">
              <div class="col-inner">
                <div id="text-1810080021" class="text text-vip footer-section-title">
                  <p><strong>Liên kết nhanh</strong></p>
                </div>

                <?php if (has_nav_menu('footer_links')): ?>
                  <?php wp_nav_menu(array(
                    'theme_location' => 'footer_links',
                    'container'      => false,
                    'menu_class'     => 'footer-links-list',
                    'fallback_cb'    => false,
                    'items_wrap'     => '<ul class="footer-links-menu">%3$s</ul>',
                  )); ?>
                <?php else: ?>
                  <!-- Fallback hardcoded footer links -->
                  <ul class="footer-links-menu">
                    <li><a href="<?php echo home_url('/'); ?>"><?php echo metta_static('Trang Chủ'); ?></a></li>
                    <li><a href="<?php echo home_url('/gioi-thieu'); ?>"><?php echo metta_static('Giới thiệu'); ?></a></li>
                    <li><a href="<?php echo home_url('/dao-tao'); ?>"><?php echo metta_static('Đào tạo'); ?></a></li>
                    <li><a href="<?php echo home_url('/san-pham'); ?>"><?php echo metta_static('Sản phẩm'); ?></a></li>
                    <li><a href="<?php echo home_url('/chi-nhanh'); ?>"><?php echo metta_static('Chi Nhánh'); ?></a></li>
                    <li><a href="<?php echo home_url('/menu'); ?>"><?php echo metta_static('Bảng giá Menu'); ?></a></li>
                    <li><a href="<?php echo home_url('/tin-tuc'); ?>"><?php echo metta_static('Tin Tức'); ?></a></li>
                    <li><a href="<?php echo home_url('/lien-he'); ?>"><?php echo metta_static('Liên hệ'); ?></a></li>
                  </ul>
                <?php endif; ?>
              </div>
            </div>

            <div id="col-1468817730" class="col medium-4 small-12 large-3">
              <div class="col-inner">
                <div id="text-332569118" class="text text-vip footer-section-title">
                  <p><strong>Chính Sách</strong></p>
                </div>

                <ul class="footer-links-menu">
                  <li><a href="<?php echo home_url('/chinh-sach-bao-mat'); ?>">Chính sách bảo mật</a></li>
                  <li><a href="<?php echo home_url('/chinh-sach-thanh-vien'); ?>">Chính sách thành viên</a></li>
                </ul>
              </div>
            </div>

            <style>
              /* Footer Section Titles */
              .footer-section-title {
                font-size: 1.15rem !important;
                margin-bottom: 15px !important;
              }
              
              .footer-section-title p {
                margin: 0 !important;
                color: #fff !important;
              }
              
              .footer-section-title strong {
                color: var(--metta-main, #f49d21) !important;
                font-weight: 700 !important;
                letter-spacing: 0.5px;
              }
              
              /* Footer Links Menu */
              .footer-links-menu {
                list-style: none !important;
                padding: 0 !important;
                margin: 0 !important;
              }
              
              .footer-links-menu li {
                margin-bottom: 10px !important;
                padding-left: 0 !important;
              }
              
              .footer-links-menu li::before {
                display: none !important;
              }
              
              .footer-links-menu li a {
                display: inline-flex !important;
                align-items: center !important;
                color: rgba(255,255,255,0.85) !important;
                font-size: 0.95rem !important;
                text-decoration: none !important;
                transition: all 0.2s ease !important;
                padding: 4px 0 !important;
              }
              
              .footer-links-menu li a::before {
                content: '→' !important;
                margin-right: 8px !important;
                font-size: 0.8rem !important;
                color: var(--metta-main, #f49d21) !important;
                opacity: 0.7 !important;
                transition: all 0.2s ease !important;
              }
              
              .footer-links-menu li a:hover {
                color: var(--metta-main, #f49d21) !important;
                transform: translateX(3px) !important;
              }
              
              .footer-links-menu li a:hover::before {
                opacity: 1 !important;
                transform: translateX(2px) !important;
              }
              
              /* Mobile adjustments */
              @media (max-width: 849px) {
                .footer-section-title {
                  margin-top: 20px !important;
                  margin-bottom: 12px !important;
                }
                
                .footer-links-menu li {
                  margin-bottom: 8px !important;
                }
                
                .footer-links-menu li a {
                  font-size: 0.9rem !important;
                  padding: 3px 0 !important;
                }
              }
            </style>
          </div>
          <div id="text-370269866" class="text footer-copy">
            <p>
              <?php 
              $copyright = metta_get_field('footer_copyright', $f_id);
              echo !empty($copyright) ? $copyright : 'Copyright © 2025 Bản quyền thuộc về Metta Spa Đông Y';
              ?><br />Designed By <a href="/">Metta Spa</a>
            </p>

            <style>
              #text-370269866 {
                font-size: 0.75rem;
                text-align: center;
              }
            </style>
          </div>
        </div>

        <style>
          #section_1305578020 {
            padding-top: 0px;
            padding-bottom: 0px;
          }

          #section_1305578020 .section-bg-overlay {
            background-color: rgba(45, 20, 25, 0.82);
          }

          #section_1305578020 .section-bg img {
            object-position: 50% 88%;
          }
        </style>
      </section>

      <button type="button" id="top-link"
        class="back-to-top button icon invert plain fixed bottom z-1 is-outline circle hide-for-medium"
        aria-label="Lên đầu trang">
        <i class="icon-angle-up" aria-hidden="true"></i>
      </button>
    </footer>
  </div>

  <div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
      <div class="sidebar-menu-text">
        <ul class="nav-sidebar nav-vertical nav-uppercase">
          <?php metta_render_mobile_nav_menu_items(); ?>
        </ul>
      </div>
  </div>
  
  <!-- Mobile Submenu Styles -->
  <style>
    /* ============================================
       MOBILE SIDEBAR MENU STYLES - SOLID BACKGROUND
       Using high specificity to prevent overrides
       ============================================ */
    
    /* Base mobile sidebar styling - SOLID BACKGROUND */
    #main-menu.mobile-sidebar {
      background-color: var(--metta-bg-wine) !important;
      opacity: 1 !important;
      z-index: 999999 !important;
    }
    
    #main-menu.mobile-sidebar .sidebar-menu {
      background-color: var(--metta-bg-wine) !important;
      opacity: 1 !important;
    }
    
    /* Magnific Popup - DARK SOLID overlay */
    .mfp-bg {
      background-color: rgba(0, 0, 0, 0.95) !important;
      opacity: 1 !important;
      backdrop-filter: blur(5px) !important;
    }
    
    .mfp-wrap {
      z-index: 999998 !important;
    }
    
    .mfp-wrap #main-menu {
      opacity: 1 !important;
    }
    
    /* Override any Magnific Popup transparency */
    .mfp-ready #main-menu.mobile-sidebar,
    .mfp-ready .mobile-sidebar .sidebar-menu {
      opacity: 1 !important;
      background-color: var(--metta-bg-wine) !important;
    }
    
    #main-menu .nav-sidebar {
      padding: 20px 0;
      background-color: transparent !important;
    }
    
    #main-menu .nav-sidebar > li {
      border-bottom: 1px solid rgba(255,255,255,0.1);
      background-color: transparent !important;
    }
    
    #main-menu .nav-sidebar > li > a {
      display: flex !important;
      align-items: center;
      justify-content: space-between;
      padding: 15px 20px !important;
      color: #fff !important;
      font-weight: 600 !important;
      font-size: 1rem !important;
      text-transform: uppercase;
      background-color: transparent !important;
    }
    
    #main-menu .nav-sidebar > li > a:hover,
    #main-menu .nav-sidebar > li > a:focus {
      background: rgba(244, 157, 33, 0.1) !important;
      color: #f49d21 !important;
    }

    #main-menu .nav-sidebar > li.metta-booking-menu-item > a {
      display: flex !important;
      justify-content: center !important;
      margin: 10px 20px 0 !important;
      border-radius: 8px !important;
      background: var(--metta-gradient-cta) !important;
      color: #fff !important;
      font-weight: 700 !important;
      text-align: center !important;
    }

    #main-menu .nav-sidebar > li.metta-booking-menu-item > a:hover,
    #main-menu .nav-sidebar > li.metta-booking-menu-item > a:focus {
      color: #fff !important;
      filter: brightness(1.06);
    }
    
    /* Current/active menu item */
    #main-menu .nav-sidebar > li.current-menu-item > a,
    #main-menu .nav-sidebar > li.active > a,
    #main-menu .nav-sidebar > li.current_page_item > a {
      color: #f49d21 !important;
      background: rgba(244, 157, 33, 0.15) !important;
      border-left: 3px solid #f49d21 !important;
    }
    
    /* Submenu toggle arrow */
    #main-menu .nav-sidebar > li.menu-item-has-children > a::after {
      content: '+';
      font-size: 1.2rem;
      font-weight: 300;
      color: #f49d21 !important;
      transition: transform 0.3s ease;
    }
    
    #main-menu .nav-sidebar > li.menu-item-has-children.submenu-open > a::after {
      content: '−';
    }
    
    /* Mobile Submenu */
    #main-menu .nav-sidebar .sub-menu {
      display: none;
      position: relative !important; /* CRITICAL: Fixed to relative to push content down */
      top: auto !important;
      left: auto !important;
      width: 100% !important;
      list-style: none !important;
      padding: 0 !important;
      margin: 0 !important;
      background: rgba(0,0,0,0.2) !important;
      transform: none !important; /* Disable transform to avoid layer issues */
      opacity: 1 !important;
    }
    
    #main-menu .nav-sidebar .sub-menu li {
      border-bottom: 1px solid rgba(255,255,255,0.05);
      background-color: transparent !important;
    }
    
    #main-menu .nav-sidebar .sub-menu li:last-child {
      border-bottom: none;
    }
    
    #main-menu .nav-sidebar .sub-menu li a {
      display: block !important;
      padding: 12px 20px 12px 35px !important;
      color: rgba(255,255,255,0.85) !important;
      font-size: 0.9rem !important;
      font-weight: 400 !important;
      text-transform: none !important;
      border-left: 3px solid transparent;
      transition: all 0.2s ease;
      background-color: transparent !important;
    }
    
    #main-menu .nav-sidebar .sub-menu li a:hover,
    #main-menu .nav-sidebar .sub-menu li a:focus {
      background: rgba(244, 157, 33, 0.15) !important;
      color: #f49d21 !important;
      border-left-color: #f49d21 !important;
    }
    
    /* Nested submenu (level 3) */
    #main-menu .nav-sidebar .sub-menu .sub-menu li a {
      padding-left: 50px !important;
    }
    
    /* Animation for submenu open - REMOVED animation that causes overlap issues
       Using jQuery slideDown/Up instead for proper height calculation */
    #main-menu .nav-sidebar .sub-menu.submenu-visible {
      display: block !important;
      position: relative !important; /* Ensure it pushes content */
    }
    
    /* Override any external theme styles that may conflict */
    .mobile-sidebar .nav a,
    .mobile-sidebar .nav li a,
    .mobile-sidebar ul li a,
    .mfp-content .nav a {
      color: #fff !important;
    }
    
    .mobile-sidebar .nav a:hover,
    .mobile-sidebar .nav li a:hover,
    .mfp-content .nav a:hover {
      color: #f49d21 !important;
    }
  </style>
  
  <!-- Mobile Submenu Toggle Script -->
  <script>
    jQuery(document).ready(function($) {
      // Mobile submenu accordion
      // Unbind any previous events to prevent duplicates if this script runs multiple times
      $('#main-menu .nav-sidebar > li.menu-item-has-children > a').off('click');
      
      $('#main-menu .nav-sidebar > li.menu-item-has-children > a').on('click', function(e) {
        var $link = $(this);
        var $parent = $link.parent();
        var $submenu = $parent.find('> .sub-menu');
        
        // If clicking on a parent with submenu
        if ($submenu.length) {
          e.preventDefault();
          e.stopPropagation(); // Stop event bubbling
          
          // Toggle current submenu
          if ($parent.hasClass('submenu-open')) {
             $submenu.slideUp(300, function(){
                 $parent.removeClass('submenu-open');
                 $submenu.removeClass('submenu-visible');
                 $submenu.css('display', ''); // Clear inline display style after slideUp
             });
          } else {
             // Close other open submenus at the same level
             $parent.siblings('.submenu-open').removeClass('submenu-open').find('> .sub-menu').slideUp(300).removeClass('submenu-visible');
             
             $parent.addClass('submenu-open');
             $submenu.addClass('submenu-visible').slideDown(300);
          }
        }
      });
      
      // Allow clicking on submenu parent link icon to still toggle
      // But clicking on the text goes to the page - For nested levels if any
      $('#main-menu .nav-sidebar .sub-menu li.menu-item-has-children > a').on('click', function(e) {
         // Logic for deeper levels if needed, currently same behavior
         var $link = $(this);
         var $parent = $link.parent();
         var $submenu = $parent.find('> .sub-menu');

         if ($submenu.length) {
            e.preventDefault();
            e.stopPropagation();
            
            if ($parent.hasClass('submenu-open')) {
                 $submenu.slideUp(300, function(){
                     $parent.removeClass('submenu-open');
                     $submenu.removeClass('submenu-visible');
                     $submenu.css('display', '');
                 });
            } else {
                 $parent.addClass('submenu-open');
                 $submenu.addClass('submenu-visible').slideDown(300);
             }
          }
       });

      // Force parent menu items to navigate to their URL on desktop (>= 850px)
      $('.header-nav-main.nav > li.menu-item-has-children > a').on('click', function(e) {
        if ($(window).width() >= 850) {
          var href = $(this).attr('href');
          if (href && href !== '#' && href !== 'javascript:void(0);') {
            window.location.href = href;
          }
        }
      });
    });
  </script>
  <script type="speculationrules">
      {
        "prefetch": [
          {
            "source": "document",
            "where": {
              "and": [
                { "href_matches": "/*" },
                {
                  "not": {
                    "href_matches": [
                      "/wp-*.php",
                      "/wp-admin/*",
                      "<?php echo get_site_url(); ?>/wp-content/uploads/*",
                      "<?php echo get_site_url(); ?>/wp-content/*",
                      "*<?php echo get_site_url(); ?>/wp-content/plugins/*",
                      "<?php echo get_site_url(); ?>/wp-content/themes/metta-theme/vendor/flatsome-child/*",
                      "<?php echo get_site_url(); ?>/wp-content/themes/metta-theme/vendor/flatsome/*",
                      "/*\\?(.+)"
                    ]
                  }
                },
                { "not": { "selector_matches": "a[rel~=\"nofollow\"]" } },
                {
                  "not": { "selector_matches": ".no-prefetch, .no-prefetch a" }
                }
              ]
            },
            "eagerness": "conservative"
          }
        ]
      }
    </script>
  <style>
    style {
      display: none !important;
    }
  </style>
  <script src="<?php echo get_site_url(); ?>/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
  <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function () {
      do_parallax("parallax-1", 0.3);
      do_parallax("parallax-2", 0.1);
      do_parallax("parallax-3", 0.2);
      do_parallax("parallax-4", 0.3);

      function do_parallax(selector, depth) {
      let parallaxClasses = document.querySelectorAll("." + selector);

      parallaxClasses.forEach((parallaxClass) => {
        Array.from(parallaxClass.childNodes).forEach((child) => {
          if (
            child.nodeType === Node.ELEMENT_NODE &&
            child.tagName !== "STYLE"
          ) {
            child.setAttribute("data-depth", depth);
          }
        });

        let parallaxtext = new Parallax(parallaxClass, {
          relativeInput: true,
        });
      });
    }
      });
  </script>
  <script type="text/javascript" id="eio-lazy-load-js-before">
    /* <![CDATA[ */
    var eio_lazy_vars = {
      exactdn_domain: "",
      skip_autoscale: 0,
      threshold: 0,
      use_dpr: 1,
    };
    //# sourceURL=eio-lazy-load-js-before
    /* ]]> */
  </script>
  <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/plugins/ewww-image-optimizer/includes/lazysizes.min.js?ver=820"
    id="eio-lazy-load-js" async="async" data-wp-strategy="async"></script>
  <script type="text/javascript"
    src="<?php echo get_site_url(); ?>/wp-content/themes/metta-theme/vendor/flatsome/assets/js/extensions/flatsome-live-search.js?ver=3.32.0"
    id="flatsome-live-search-js"></script>
  <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-includes/js/hoverIntent.min.js?ver=1.10.2" id="hoverIntent-js"></script>
  <script type="text/javascript" id="flatsome-js-js-extra">
    /* <![CDATA[ */
    var flatsomeVars = {
      theme: { version: "3.20.0" },
      ajaxurl: "/wp-admin/admin-ajax.php",
      rtl: "",
      sticky_height: "70",
      stickyHeaderHeight: "0",
      scrollPaddingTop: "0",
      assets_url: "<?php echo get_site_url(); ?>/wp-content/themes/metta-theme/vendor/flatsome/assets/",
      lightbox: {
        close_markup:
          '\u003Cbutton title="%title%" type="button" class="mfp-close"\u003E\u003Csvg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"\u003E\u003Cline x1="18" y1="6" x2="6" y2="18"\u003E\u003C/line\u003E\u003Cline x1="6" y1="6" x2="18" y2="18"\u003E\u003C/line\u003E\u003C/svg\u003E\u003C/button\u003E',
        close_btn_inside: false,
      },
      user: { can_edit_pages: false },
      i18n: {
        mainMenu: "Menu ch\u00ednh",
        toggleButton: "Chuy\u1ec3n \u0111\u1ed5i",
      },
      options: {
        cookie_notice_version: "1",
        swatches_layout: false,
        swatches_disable_deselect: false,
        swatches_box_select_event: false,
        swatches_box_behavior_selected: false,
        swatches_box_update_urls: "1",
        swatches_box_reset: false,
        swatches_box_reset_limited: false,
        swatches_box_reset_extent: false,
        swatches_box_reset_time: 300,
        search_result_latency: "0",
        header_nav_vertical_fly_out_frontpage: 1,
      },
    };
    //# sourceURL=flatsome-js-js-extra
    /* ]]> */
  </script>
  <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/metta-theme/vendor/flatsome/assets/js/flatsome.js?ver=3.32.0"
    id="flatsome-js-js"></script>
  <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/metta-theme/vendor/flatsome/assets/libs/packery.pkgd.min.js?ver=3.32.0"
    id="flatsome-masonry-js-js"></script>
  <script id="wp-emoji-settings" type="application/json">
      {
        "baseUrl": "https://s.w.org/images/core/emoji/17.0.2/72x72/",
        "ext": ".png",
        "svgUrl": "https://s.w.org/images/core/emoji/17.0.2/svg/",
        "svgExt": ".svg",
        "source": {
          "concatemoji": "<?php echo get_site_url(); ?>/wp-includes/js/wp-emoji-release.min.js?ver=6.9"
        }
      }
    </script>
  <script type="module">
    /* <![CDATA[ */
    /*! This file is auto-generated */
    const a = JSON.parse(
      document.getElementById("wp-emoji-settings").textContent
    ),
      o = ((window._wpemojiSettings = a), "wpEmojiSettingsSupports"),
      s = ["flag", "emoji"];
    function i(e) {
      try {
        var t = { supportTests: e, timestamp: new Date().valueOf() };
        sessionStorage.setItem(o, JSON.stringify(t));
      } catch (e) { }
    }
    function c(e, t, n) {
      e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
      t = new Uint32Array(
        e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
      );
      e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0);
      const a = new Uint32Array(
        e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
      );
      return t.every((e, t) => e === a[t]);
    }
    function p(e, t) {
      e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
      var n = e.getImageData(16, 16, 1, 1);
      for (let e = 0; e < n.data.length; e++) if (0 !== n.data[e]) return !1;
      return !0;
    }
    function u(e, t, n, a) {
      switch (t) {
        case "flag":
          return n(
            e,
            "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f",
            "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f"
          )
            ? !1
            : !n(
              e,
              "\ud83c\udde8\ud83c\uddf6",
              "\ud83c\udde8\u200b\ud83c\uddf6"
            ) &&
            !n(
              e,
              "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
              "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
            );
        case "emoji":
          return !a(e, "\ud83e\u1fac8");
      }
      return !1;
    }
    function f(e, t, n, a) {
      let r;
      const o = (r =
        "undefined" != typeof WorkerGlobalScope &&
          self instanceof WorkerGlobalScope
          ? new OffscreenCanvas(300, 150)
          : document.createElement("canvas")).getContext("2d", {
            willReadFrequently: !0,
          }),
        s = ((o.textBaseline = "top"), (o.font = "600 32px Arial"), {});
      return (
        e.forEach((e) => {
          s[e] = t(o, e, n, a);
        }),
        s
      );
    }
    function r(e) {
      var t = document.createElement("script");
      (t.src = e), (t.defer = !0), document.head.appendChild(t);
    }
    (a.supports = { everything: !0, everythingExceptFlag: !0 }),
      new Promise((t) => {
        let n = (function () {
          try {
            var e = JSON.parse(sessionStorage.getItem(o));
            if (
              "object" == typeof e &&
              "number" == typeof e.timestamp &&
              new Date().valueOf() < e.timestamp + 604800 &&
              "object" == typeof e.supportTests
            )
              return e.supportTests;
          } catch (e) { }
          return null;
        })();
        if (!n) {
          if (
            "undefined" != typeof Worker &&
            "undefined" != typeof OffscreenCanvas &&
            "undefined" != typeof URL &&
            URL.createObjectURL &&
            "undefined" != typeof Blob
          )
            try {
              var e =
                "postMessage(" +
                f.toString() +
                "(" +
                [
                  JSON.stringify(s),
                  u.toString(),
                  c.toString(),
                  p.toString(),
                ].join(",") +
                "));",
                a = new Blob([e], { type: "text/javascript" });
              const r = new Worker(URL.createObjectURL(a), {
                name: "wpTestEmojiSupports",
              });
              return void (r.onmessage = (e) => {
                i((n = e.data)), r.terminate(), t(n);
              });
            } catch (e) { }
          i((n = f(s, u, c, p)));
        }
        t(n);
      }).then((e) => {
        for (const n in e)
          (a.supports[n] = e[n]),
            (a.supports.everything = a.supports.everything && a.supports[n]),
            "flag" !== n &&
            (a.supports.everythingExceptFlag =
              a.supports.everythingExceptFlag && a.supports[n]);
        var t;
        (a.supports.everythingExceptFlag =
          a.supports.everythingExceptFlag && !a.supports.flag),
          a.supports.everything ||
          ((t = a.source || {}).concatemoji
            ? r(t.concatemoji)
            : t.wpemoji && t.twemoji && (r(t.twemoji), r(t.wpemoji)));
      });
    //# sourceURL=<?php echo get_site_url(); ?>/wp-includes/js/wp-emoji-loader.min.js
    /* ]]> */
  </script>
  <?php if(function_exists('metta_get_field')) metta_the_field('footer_scripts', get_option('page_on_front')); ?>
<?php wp_footer(); ?>
</body>

</html>
