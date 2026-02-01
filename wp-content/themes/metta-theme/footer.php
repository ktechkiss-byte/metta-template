
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
                $g_fb = metta_get_with_fallback('link_facebook', 'https://www.facebook.com/mettaspadongy');
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
                    href="https://www.tiktok.com/@mettaspavietnam.official" target="_blank" data-label="TikTok"
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
                  <?php echo $g_email; ?><br />Fanpage: Spa Metta Spa
                </p>
              </div>
            </div>

            <div id="col-1968902255" class="col medium-4 small-12 large-2">
              <div class="col-inner">
                <div id="text-1810080021" class="text text-vip">
                  <p><strong>Liên kết nhanh</strong></p>

                  <style>
                    #text-1810080021 {
                      font-size: 1.2rem;
                    }
                  </style>
                </div>

                <?php
                wp_nav_menu(array(
                  'theme_location' => 'footer_links',
                  'container'      => false,
                  'menu_class'     => 'footer-links-list',
                  'fallback_cb'    => false,
                  'items_wrap'     => '<div class="footer-links-wrap">%3$s</div>',
                ));
                ?>
                <style>
                    .footer-links-wrap a { display: block; margin-bottom: 5px; color: #fff; }
                    .footer-links-wrap a:hover { color: var(--metta-main); }
                </style>
              </div>
            </div>

            <div id="col-1468817730" class="col medium-4 small-12 large-3">
              <div class="col-inner">
                <div id="text-332569118" class="text text-vip">
                  <p><strong>Chính Sách</strong></p>

                  <style>
                    #text-332569118 {
                      font-size: 1.2rem;
                    }
                  </style>
                </div>

                <p>
                  <a href="chinh-sach-bao-mat">Chính sách bảo mật</a><br />Chính sách thành viên
                </p>
              </div>
            </div>
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
            background-color: #4a2d2eb0;
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
    <div class="sidebar-menu no-scrollbar">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'mobile',
        'container'      => false,
        'menu_class'     => 'nav nav-sidebar nav-vertical nav-uppercase',
        'fallback_cb'    => false,
      ));
      ?>
    </div>
  </div>
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
                      "<?php echo get_site_url(); ?>/wp-content/themes/flatsome-child/*",
                      "<?php echo get_site_url(); ?>/wp-content/themes/flatsome/*",
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
  <script data-cfasync="false">
    var dFlipLocation =
      "<?php echo get_site_url(); ?>/wp-content/plugins/3d-flipbook-dflip-lite/assets/";
    var dFlipWPGlobal = {
      text: {
        toggleSound: "Turn on\/off Sound",
        toggleThumbnails: "Toggle Thumbnails",
        toggleOutline: "Toggle Outline\/Bookmark",
        previousPage: "Previous Page",
        nextPage: "Next Page",
        toggleFullscreen: "Toggle Fullscreen",
        zoomIn: "Zoom In",
        zoomOut: "Zoom Out",
        toggleHelp: "Toggle Help",
        singlePageMode: "Single Page Mode",
        doublePageMode: "Double Page Mode",
        downloadPDFFile: "Download PDF File",
        gotoFirstPage: "Goto First Page",
        gotoLastPage: "Goto Last Page",
        share: "Share",
        mailSubject: "I wanted you to see this FlipBook",
        mailBody: "Check out this site {{url}}",
        loading: "DearFlip: Loading ",
      },
      viewerType: "flipbook",
      moreControls: "download,pageMode,startPage,endPage,sound",
      hideControls: "",
      scrollWheel: "false",
      backgroundColor: "#777",
      backgroundImage: "",
      height: "auto",
      paddingLeft: "20",
      paddingRight: "20",
      controlsPosition: "bottom",
      duration: 800,
      soundEnable: "true",
      enableDownload: "true",
      showSearchControl: "false",
      showPrintControl: "false",
      enableAnnotation: false,
      enableAnalytics: "false",
      webgl: "true",
      hard: "none",
      maxTextureSize: "1600",
      rangeChunkSize: "524288",
      zoomRatio: 1.5,
      stiffness: 3,
      pageMode: "0",
      singlePageMode: "0",
      pageSize: "0",
      autoPlay: "false",
      autoPlayDuration: 5000,
      autoPlayStart: "false",
      linkTarget: "2",
      sharePrefix: "flipbook-",
    };
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
    src="<?php echo get_site_url(); ?>/wp-content/themes/flatsome/assets/js/extensions/flatsome-live-search.js?ver=3.32.0"
    id="flatsome-live-search-js"></script>
  <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/plugins/3d-flipbook-dflip-lite/assets/js/dflip.min.js?ver=2.3.75"
    id="dflip-script-js"></script>
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
      assets_url: "<?php echo get_site_url(); ?>/wp-content/themes/flatsome/assets/",
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
  <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/flatsome/assets/js/flatsome.js?ver=3.32.0"
    id="flatsome-js-js"></script>
  <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/flatsome/assets/libs/packery.pkgd.min.js?ver=3.32.0"
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