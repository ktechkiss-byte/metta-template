<?php
/* Template Name: page-gioi-thieu */
if ( ! function_exists( 'metta_about_image_url' ) ) {
  function metta_about_image_url( $field_name, $fallback = '' ) {
    $image = metta_get_field( $field_name );

    if ( is_array( $image ) && ! empty( $image['url'] ) ) {
      return $image['url'];
    }

    if ( is_numeric( $image ) ) {
      $image_url = wp_get_attachment_image_url( (int) $image, 'full' );
      return $image_url ?: $fallback;
    }

    return $image ?: $fallback;
  }
}
get_header(); ?>
  <style type="text/css" id="gioi-thieu-css">
	    /* ============================================
	       PAGE-SPECIFIC CSS: page-gioi-thieu
	       Global rules are in style.css
	       ============================================ */

	    /* Global background image and overlay are handled by style.css */

	    #wrapper,
	    #main,
	    #content,
	    #main.dark,
	    body {
	      background: transparent !important;
	    }

	    #content > .section:not(#section_1967216007):not(#section_467763596):not(#section_1684955892) > .section-bg {
	      background: transparent !important;
	    }

	    #section_1007473846 #text-3395665156 h2 {
	      color: #ffe2a0 !important;
	      -webkit-text-fill-color: #ffe2a0 !important;
	      font-size: clamp(2rem, 4vw, 3.2rem);
	      font-weight: 700;
	      line-height: 1.08;
	      letter-spacing: 0;
	      opacity: 1 !important;
	      filter: none !important;
	      mix-blend-mode: normal !important;
	      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.95), 0 8px 28px rgba(0, 0, 0, 0.9);
	    }

	    #section_1007473846 #text-3395665156 h2::before {
	      content: none !important;
	      display: none !important;
	    }

	    #section_1007473846 #text-3850920384 p {
	      color: #ffffff !important;
	      -webkit-text-fill-color: #ffffff !important;
	      font-weight: 700;
	      line-height: 1.75;
	      opacity: 1 !important;
	      filter: none !important;
	      mix-blend-mode: normal !important;
	      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.95), 0 8px 26px rgba(0, 0, 0, 0.88);
	    }

	    #section_1007473846 #text-3395665156,
	    #section_1007473846 #text-3850920384,
	    .metta-belief-heading {
	      width: fit-content;
	      max-width: 100%;
	      padding: 12px 16px;
	      margin-left: -16px;
	      background: linear-gradient(90deg, rgba(20, 6, 2, 0.9), rgba(20, 6, 2, 0.58), rgba(20, 6, 2, 0));
	      border-radius: 8px;
	    }

    /* Contact / booking form */
    .wpforms-submit {
      background: var(--metta-green) !important;
      color: white !important;
      padding: 0.5rem 2rem !important;
    }

    #wpforms-form-206 input,
    #wpforms-form-206 textarea {
      background: none;
      border: 1px solid var(--metta-gold-dark) !important;
    }

    #wpforms-form-206 input::placeholder,
    #wpforms-form-206 textarea::placeholder {
      color: #361b01;
    }

    .contact-img img {
      border-radius: var(--metta-radius-sm);
      border: 1px solid var(--metta-gold-dark);
    }

    .contact-left-col > .col-inner {
      background: rgba(255, 255, 255, 0.5);
      backdrop-filter: blur(5px);
      border-radius: var(--metta-radius-sm) !important;
    }

    .contact-left-col .is-border {
      border-radius: var(--metta-radius-sm) !important;
    }

    .contact-img,
    .contact-img .img-inner {
      height: 100%;
    }

    /* Blog image borders */
    .post-item img {
      border-radius: var(--metta-radius-lg);
      border: 1px solid var(--metta-gold-dark);
    }

    .blog-wrapper.blog-single.page-wrapper .entry-content img {
      border-radius: var(--metta-radius-sm);
      border: 1px solid var(--metta-gold-dark);
      margin: 0.5em 0;
    }

    .entry-image {
      border-radius: var(--metta-radius-sm);
      border: 1px solid var(--metta-gold-dark);
      overflow: hidden;
    }

    /* About-specific image layouts */
    .about-img-box .box-image {
      border-radius: var(--metta-radius-arch);
      border: 1px solid var(--metta-gold-dark);
      padding: 0.5rem;
      overflow: visible;
      position: relative;
      z-index: 0;
    }

    .about-img-box .box-text {
      position: relative;
      z-index: 10;
    }

    .spa-img::before,
    .about-img-box .box-image::before {
      content: url("<?php echo get_site_url(); ?>data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg'/%3E");
      top: -3%;
      position: absolute;
      left: 50%;
      transform: translatex(-50%);
    }

    .about-img-box .overlay {
      border-radius: var(--metta-radius-arch);
      background: linear-gradient(180deg, rgba(99, 73, 0, 0) 27.19%, rgba(80, 59, 0, 0.86) 71.41%, #402f00 100%);
      z-index: 1;
      position: absolute;
    }

    /* About page-specific image styles */
    .about-first-img img {
      border-radius: 175px 18px 10px 10px;
      border: 1px solid var(--metta-gold-dark);
    }

    .about-second-img img {
      border-radius: 156px 156px 10px 10px;
      border: 10px solid #fff;
    }

    /* About intro section — arch shape like the main arch cards */
    .about-intro-img .img-inner,
    .about-intro-img img,
    .about-intro-img .img-inner img {
      border-radius: 500px 500px 10px 10px !important;
      border: 1px solid var(--metta-gold-dark);
    }

    /* Spa image arch — used in About section small image blocks */
    .spa-img,
    .spa-img .img-inner {
      border-radius: 500px 500px 10px 10px;
      border: 1px solid var(--metta-gold-dark);
      overflow: hidden;
    }

    /* About Vu chuong toi — overlapping images section */
    /* First/main image: tall arch (top-rounded) */
    .about-first-img .img-inner {
      border-radius: 175px 175px 10px 10px !important;
      overflow: hidden;
      border: 1px solid var(--metta-gold-dark);
    }

    /* Second image: small square with white border */
    .about-second-img .img-inner {
      border-radius: 80px 80px 10px 10px !important;
      overflow: hidden;
      border: 6px solid #fff;
      box-shadow: 0 4px 20px rgba(0,0,0,0.15);
    }

    .about-end-banner,
    .about-end-banner .banner-bg {
      border-radius: 0 94px 10px 0;
      border: 1px solid var(--metta-gold-dark);
    }

    .about-end-banner .overlay {
      background: linear-gradient(180deg, rgba(55, 41, 0, 0) 0%, #372900 100%);
      border-radius: 0 94px 10px 0;
    }

    /* Cot loi section */
    .about-cot-loi-col .is-border {
      border-radius: var(--metta-radius-arch);
    }

    .about-cot-loi-col .col-inner {
      box-shadow: 0 2px 20px 0 rgb(0 0 0 / 18%);
      border-radius: var(--metta-radius-arch);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
    }

    /* Big banner text box */
    .home-big-banner-textbox > div {
      border-radius: 30px 30px 0 0;
      border: 1px solid var(--metta-gold-dark);
      background: linear-gradient(180deg, #4d3400 20.54%, rgb(77 52 0 / 85%) 52.95%, rgb(77 52 0 / 58%) 76.68%, rgb(77 52 0 / 0%) 94.94%);
    }

    /* Sticky header override (page-specific gradient) */
    .header.transparent.has-transparent.has-sticky.sticky-jump .header-wrapper {
      background: linear-gradient(0deg, rgba(96, 56, 19, 0.1) 0%, rgba(96, 56, 19, 0.5) 100%);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
    }

    /* Video play button — override Flatsome is-outline which renders transparent/white */
    .bannergioithieu .video-button-wrapper a,
    .bannergioithieu .button.is-outline.open-video {
      border: 2px solid var(--metta-cream) !important;
      background: linear-gradient(180deg, var(--metta-primary) 0%, var(--metta-gold) 100%) !important;
      height: 50px;
      width: 50px;
      color: #fff !important;
    }
    .bannergioithieu .icon-play {
      line-height: 48px;
      color: #fff !important;
    }

    @media (max-width: 600px) {
      .video-button-wrapper {
        font-size: 150% !important;
      }
    }

    .bannergioithieu .video-button-wrapper a::after,
    .bannergioithieu .video-button-wrapper a::before {
      position: absolute;
      content: "";
      bottom: -7px;
      top: -7px;
      left: -7px;
      right: -7px;
      background-color: transparent;
      border-radius: 50%;
      border: 4px solid #fff;
      margin: 0;
      transform-origin: center;
    }

    .bannergioithieu .video-button-wrapper a::after {
      opacity: 1;
      animation: anim 800ms linear infinite;
    }

    .bannergioithieu .video-button-wrapper a::before {
      opacity: 0.8;
      animation: anim 800ms linear 400ms infinite;
    }

    /* Branch button */
    .branch-button * {
      width: 100%;
    }

    @media (max-width: 600px) {
      .branch-button {
        flex-wrap: wrap;
      }
    }

    /* Sliderow slider */
    .sliderow .slider-style-container .flickity-slider > :not(.is-selected) {
      opacity: 1;
    }

    .sliderow .col {
      padding: 2em;
    }

    /* Banner grid overlay */
    .banner-grid::before {
      content: "";
      background: linear-gradient(0deg, rgba(255, 252, 249, 0) 0%, rgba(255, 252, 249, 0.6) 60%, rgba(255, 252, 249, 0.9) 85%, var(--metta-cream) 100%);
      position: absolute;
      top: 0;
      width: 100%;
      height: 10%;
      z-index: 1;
    }

    .banner-grid::after {
      content: "";
      background: linear-gradient(0deg, var(--metta-cream) 0%, rgba(255, 252, 249, 0.9) 15%, rgba(255, 252, 249, 0.6) 40%, rgba(255, 252, 249, 0) 100%);
      position: absolute;
      bottom: 19px;
      width: 100%;
      height: 10%;
      z-index: 1;
    }

    /* Blog archive */
    .blog-archive .image-cover {
      height: 350px;
    }

    @media (max-width: 600px) {
      .blog-archive .image-cover {
        height: 270px;
      }
    }

    .home-slide-section .flickity-page-dots {
      bottom: -10px;
    }

    /* Footer copy */
    .footer-copy {
      border-top: 1px dashed #ffffff7a;
      padding-top: 1rem;
    }

    /* Video slider */
    .videocs {
      margin-top: 1em;
    }

    .videocs .slider-style-container .flickity-slider > :not(.is-selected) {
      opacity: 1;
    }

    .videocs .col {
      margin-right: 1em;
    }

    .videocs .flickity-page-dots .dot {
      background: var(--metta-gradient-cta);
      border: unset;
    }

    /* wpforms-container reset */
    .wpforms-container {
      margin: 0 !important;
    }

	    .metta-belief-section {
	      padding: 58px 15px 48px;
	    }

	    .metta-belief-section + .metta-belief-section {
	      padding-top: 18px;
	    }

	    .metta-belief-inner {
	      max-width: 1040px;
	      margin: 0 auto;
	    }

	    .metta-belief-heading {
	      max-width: 940px;
	      margin: 0 auto 28px;
	      text-align: left;
	    }

	    .metta-belief-title {
	      display: flex;
	      align-items: center;
	      gap: 13px;
	      margin: 0 0 14px;
	      color: #ffe2a0 !important;
	      -webkit-text-fill-color: #ffe2a0 !important;
	      font-size: clamp(2rem, 4vw, 3.2rem);
	      font-weight: 700;
	      line-height: 1.08;
	      letter-spacing: 0;
	      text-transform: uppercase;
	      opacity: 1 !important;
	      filter: none !important;
	      mix-blend-mode: normal !important;
	      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.95), 0 8px 28px rgba(0, 0, 0, 0.9);
	    }

	    .metta-belief-desc {
	      max-width: 900px;
	      margin: 0;
	      color: #ffffff !important;
	      -webkit-text-fill-color: #ffffff !important;
	      font-size: 1.08rem;
	      font-weight: 700;
	      line-height: 1.75;
	      opacity: 1 !important;
	      filter: none !important;
	      mix-blend-mode: normal !important;
	      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.95), 0 8px 26px rgba(0, 0, 0, 0.88);
	    }

	    .metta-belief-gallery {
	      display: grid;
	      grid-template-columns: repeat(3, minmax(0, 1fr));
	      gap: 28px;
	      max-width: 940px;
	      margin: 0 auto;
	    }

	    .metta-belief-image {
	      aspect-ratio: 1.32 / 1;
	      overflow: hidden;
	      border: 1px solid var(--metta-gold-dark);
	      border-radius: 999px 999px 8px 8px;
	      background: rgba(31, 12, 4, 0.68);
	      box-shadow: 0 18px 38px rgba(0, 0, 0, 0.34);
	    }

	    .metta-belief-image img {
	      width: 100%;
	      height: 100%;
	      display: block;
	      object-fit: cover;
	    }

	    @media (max-width: 768px) {
	      .metta-belief-section {
	        padding: 38px 18px 34px;
	      }

	      .metta-belief-section + .metta-belief-section {
	        padding-top: 8px;
	      }

	      .metta-belief-heading {
	        margin-bottom: 22px;
	      }

	      .metta-belief-title {
	        align-items: flex-start;
	        gap: 9px;
	        font-size: 1.72rem;
	      }

	      .metta-belief-desc {
	        font-size: 0.98rem;
	      }

	      .metta-belief-gallery {
	        grid-template-columns: repeat(3, minmax(0, 1fr));
	        gap: 10px;
	      }
	    }

	    /* Custom CSS to fix overlapping/invisible text colors */
	    #text-3903669978 h2,
	    #text-3274210281 h2,
	    #text-3698214354 h2,
	    #text-2119337678 h2 {
	      color: #ffe2a0 !important;
	      -webkit-text-fill-color: #ffe2a0 !important;
	      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.95), 0 8px 28px rgba(0, 0, 0, 0.9);
	    }

	    #text-3274210281,
	    #text-3274210281 p,
	    #text-3274210281 li,
	    #text-3274210281 strong {
	      color: #ffffff !important;
	      -webkit-text-fill-color: #ffffff !important;
	      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.95), 0 8px 26px rgba(0, 0, 0, 0.88);
	    }

	    #text-2255748326,
	    #text-167888686,
	    #text-1539258129,
	    #text-2674399885,
	    #text-2255748326 *,
	    #text-167888686 *,
	    #text-1539258129 *,
	    #text-2674399885 * {
	      color: #ffe2a0 !important;
	      -webkit-text-fill-color: #ffe2a0 !important;
	      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.95);
	    }

	    #col-896907260 > .col-inner > p,
	    #col-896907260 > .col-inner > p *,
	    #col-764234197 > .col-inner > p,
	    #col-764234197 > .col-inner > p *,
	    #col-144272533 > .col-inner > p,
	    #col-144272533 > .col-inner > p *,
	    #col-476970206 > .col-inner > p,
	    #col-476970206 > .col-inner > p * {
	      color: #ffffff !important;
	      -webkit-text-fill-color: #ffffff !important;
	      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.95);
	    }
	  </style>
    <main id="main" class="">
      <div id="content" role="main" class="content-area">
        <section class="section" id="section_1007473846">
          <div class="section-bg fill">
          </div>

          <div class="section-content relative">
            <div class="row row-large align-middle" id="row-179865794">
              <div id="col-222256718" class="col medium-6 small-12 large-6" data-animate="fadeInUp">
                <div class="col-inner text-left">
                  <div id="text-3395665156" class="text text-heading">
                    <h2><?php echo nl2br(metta_get_field('about_hero_title')) ?: 'Bảo Dưỡng Sức Khoẻ<br />Ghé Metta Spa!'; ?></h2>

                    <style>
                      #text-3395665156 {
                        font-size: 1.5rem;
                        text-align: left;
                      }
                    </style>
                  </div>

                  <div id="text-3850920384" class="text">
                    <p>
                      <?php echo metta_get_with_fallback('about_hero_desc', 'Metta đông y Spa là nơi tái hiện nghệ thuật làm đẹp truyền thống của người Á Đông – kết hợp tinh hoa dưỡng sinh cổ truyền với liệu pháp chăm sóc hiện đại, giúp thanh lọc cơ thể, làm đẹp từ sâu bên trong và bão dưỡng sức khoẻ cho khách hàng chất lượng nhất.'); ?>
                    </p>

                    <style>
                      #text-3850920384 {
                        text-align: left;
                      }
                    </style>
                  </div>

                  <div class="row row-small" id="row-28564405">
                    <div id="col-866746777" class="col medium-4 small-4 large-4">
                      <div class="col-inner">
                        <div class="img has-hover about-intro-img x md-x lg-x y md-y lg-y" id="image_1811577849">
                          <div class="img-inner image-cover dark" style="padding-top: 75%">
                            <img width="1920" height="1280" src="<?php echo esc_url( metta_about_image_url('about_img_1', get_site_url().'/wp-content/uploads/2026/05/metta_spa_zen_corner.png') ); ?>" class="attachment-original size-original" />
                          </div>

                          <style>
                            #image_1811577849 {
                              width: 100%;
                            }
                          </style>
                        </div>
                      </div>
                    </div>

                    <div id="col-1089840025" class="col medium-4 small-4 large-4">
                      <div class="col-inner">
                        <div class="img has-hover about-intro-img x md-x lg-x y md-y lg-y" id="image_935462736">
                          <div class="img-inner image-cover dark" style="padding-top: 75%">
                            <img width="1920" height="1280" src="<?php echo esc_url( metta_about_image_url('about_img_2', get_site_url().'/wp-content/uploads/2026/05/metta_spa_tea_lounge.png') ); ?>" class="attachment-original size-original" />
                          </div>

                          <style>
                            #image_935462736 {
                              width: 100%;
                            }
                          </style>
                        </div>
                      </div>
                    </div>

                    <div id="col-1342100607" class="col medium-4 small-4 large-4">
                      <div class="col-inner">
                        <div class="img has-hover about-intro-img x md-x lg-x y md-y lg-y" id="image_496264494">
                          <div class="img-inner image-cover dark" style="padding-top: 75%">
                            <?php $about_img_3 = esc_url( metta_about_image_url('about_img_3', get_site_url() . '/wp-content/uploads/2026/05/metta_spa_empty_room.png') ); ?>
                            <img decoding="async" width="1920" height="1536"
                              src="<?php echo $about_img_3; ?>"
                              class="attachment-original size-original" alt=""
                              style="width:100%;height:100%;object-fit:cover;" /><noscript><img
                                decoding="async" width="1920" height="1536"
                                src="<?php echo $about_img_3; ?>"
                                 class="attachment-original size-original" alt="" srcset="
                                     <?php echo $about_img_3; ?> 1536w
                                   " sizes="(max-width: 1920px) 100vw, 1920px" data-eio="l" /></noscript>
                          </div>

                          <style>
                            #image_496264494 {
                              width: 100%;
                            }
                          </style>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div id="col-80649759" class="col medium-6 small-12 large-6 small-col-first" data-animate="fadeInRight">
                <div class="col-inner">
                  <div class="banner has-hover bannergioithieu" id="banner-263170302">
                    <div class="banner-inner fill">
                      <div class="banner-bg fill"></div>

                      <div class="banner-layers container">
                        <div class="fill banner-link"></div>
                        <div class="img has-hover spa-img x0 md-x95 lg-x95 y5 md-y0 lg-y0" id="image_1944115804">
                          <div class="img-inner image-cover dark" style="padding-top: 110%">
                            <img decoding="async" width="1440" height="1920"
  src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/12/z7321243434473_0b4c7065cbeea0b7a8817deed701d409.jpg"
  class="attachment-original size-original" alt=""
  style="width:100%;height:100%;object-fit:cover;" />
                          </div>

                          <style>
                            #image_1944115804 {
                              width: 100%;
                            }

                            @media (min-width: 550px) {
                              #image_1944115804 {
                                width: 72%;
                              }
                            }
                          </style>
                        </div>

                        <div id="text-box-1950848280"
                          class="text-box banner-layer x50 md-x15 lg-x15 y50 md-y20 lg-y20 res-text">
                          <div class="text-box-content text dark">
                            <div class="text-inner text-center">
                              <div class="video-button-wrapper" style="font-size: 200%">
                                <a href="https://www.youtube.com/watch?v=tES7aNg_5Qw"
                                  class="button open-video icon circle is-outline is-xlarge" role="button"
                                  aria-label="Open video in lightbox" data-flatsome-role-button=""><i class="icon-play"
                                    aria-hidden="true" style="font-size: 1.5em"></i></a>
                              </div>
                            </div>
                          </div>

                          <style>
                            #text-box-1950848280 {
                              width: 40%;
                            }

                            #text-box-1950848280 .text-box-content {
                              font-size: 100%;
                            }

                            @media (min-width: 550px) {
                              #text-box-1950848280 {
                                width: 20%;
                              }
                            }
                          </style>
                        </div>
                      </div>
                    </div>

                    <style>
                      #banner-263170302 {
                        padding-top: 462px;
                        background-color: rgba(0, 0, 0, 0);
                      }

                      @media (min-width: 550px) {
                        #banner-263170302 {
                          padding-top: 539px;
                        }
                      }
                    </style>
                  </div>
                </div>
              </div>
            </div>

            <div class="metta-belief-section metta-mission-section" data-animate="fadeInUp">
              <div class="metta-belief-inner">
                <div class="metta-belief-heading">
                  <h2 class="metta-belief-title">
                    <?php echo metta_get_field('about_mission_title') ?: 'SỨ MỆNH METTA SPA'; ?>
                  </h2>
                  <p class="metta-belief-desc">
                    <?php echo metta_get_field('about_mission_desc') ?: 'Giúp cộng đồng thoát khỏi những cơn đau mỏi thể xác và áp lực tinh thần bằng liệu pháp tự nhiên, an toàn, cùng lòng từ bi và sự tử tế chân thành.'; ?>
                  </p>
                </div>

                <div class="metta-belief-gallery">
                  <div class="metta-belief-image">
                    <img src="<?php echo esc_url( metta_about_image_url( 'about_mission_img_1', metta_about_image_url( 'about_img_1', get_site_url() . '/wp-content/uploads/2026/05/metta_spa_zen_corner.png' ) ) ); ?>" alt="Không gian dưỡng sinh Metta Spa" loading="lazy" decoding="async" />
                  </div>
                  <div class="metta-belief-image">
                    <img src="<?php echo esc_url( metta_about_image_url( 'about_mission_img_2', metta_about_image_url( 'about_img_2', get_site_url() . '/wp-content/uploads/2026/05/metta_spa_tea_lounge.png' ) ) ); ?>" alt="Không gian trị liệu Metta Spa" loading="lazy" decoding="async" />
                  </div>
                  <div class="metta-belief-image">
                    <img src="<?php echo esc_url( metta_about_image_url( 'about_mission_img_3', metta_about_image_url( 'about_img_3', get_site_url() . '/wp-content/uploads/2026/05/metta_spa_empty_room.png' ) ) ); ?>" alt="Phòng trị liệu Metta Spa" loading="lazy" decoding="async" />
                  </div>
                </div>
              </div>
            </div>
          </div>

          <style>
            #section_1007473846 {
              padding-top: 30px;
              padding-bottom: 30px;
            }

            #section_1007473846 .section-bg img {
              object-position: 1% 25%;
            }

            @media (min-width: 550px) {
              #section_1007473846 {
                padding-top: 60px;
                padding-bottom: 60px;
              }
            }
          </style>
        </section>

        <section class="section" id="section_1400089298">
          <div class="section-bg fill">
          </div>

          <div class="section-content relative">
            <div class="row row-large align-middle" id="row-231262402">
              <div id="col-308405556" class="col medium-6 small-12 large-6" data-animate="fadeInLeft">
                <div class="col-inner">
                  <div class="banner has-hover" id="banner-1171623003">
                    <div class="banner-inner fill">
                      <div class="banner-bg fill"></div>

                      <div class="banner-layers container">
                        <div class="fill banner-link"></div>
                        <?php 
                        $about_intro_img1 = esc_url( metta_about_image_url('about_intro_img1', get_site_url() . '/wp-content/uploads/2025/12/481078375_961583879444009_7732675770945397832_n.jpg') );
                        $about_intro_img2 = esc_url( metta_about_image_url('about_intro_img2', get_site_url() . '/wp-content/uploads/2025/12/z7321243484732_2d1e46a5ab82dc922a8ed3862ffd0c98.jpg') );
                        $about_intro_img3 = esc_url( metta_about_image_url('about_intro_img3') );
                        ?>
                        <div class="img has-hover about-first-img x50 md-x0 lg-x0 y0 md-y0 lg-y0" id="image_1474311785">
                          <div class="img-inner image-cover dark" style="padding-top: 75%">
                            <img decoding="async" width="2560" height="1707"
                              src="<?php echo $about_intro_img1; ?>"
                              class="attachment-original size-original" alt=""
                              style="width:100%;height:100%;object-fit:cover;" />
                          </div>

                          <style>
                            #image_1474311785 {
                              width: 100%;
                            }

                            @media (min-width: 550px) {
                              #image_1474311785 {
                                width: 81%;
                              }
                            }
                          </style>
                        </div>

                        <?php if ( ! empty( $about_intro_img3 ) ) : ?>
                        <div class="img has-hover x50 md-x0 lg-x0 y95 md-y100 lg-y100" id="image_298351937">
                          <div class="img-inner dark">
                            <img decoding="async"
                              src="<?php echo $about_intro_img3; ?>"
                              class="attachment-original size-original" alt=""
                              style="width:100%;height:100%;object-fit:cover;" />
                          </div>

                          <style>
                            #image_298351937 {
                              width: 100%;
                            }

                            @media (min-width: 550px) {
                              #image_298351937 {
                                width: 65%;
                              }
                            }
                          </style>
                        </div>
                        <?php endif; ?>

                        <div
                          class="img has-hover about-second-img hide-for-small x100 md-x95 lg-x95 y85 md-y100 lg-y100"
                          id="image_1626772419">
                          <div class="img-inner image-cover dark" style="padding-top: 100%">
                            <img decoding="async" width="1920" height="1280"
                              src="<?php echo $about_intro_img2; ?>"
                              class="attachment-original size-original" alt=""
                              style="width:100%;height:100%;object-fit:cover;" />
                          </div>

                          <style>
                            #image_1626772419 {
                              width: 30%;
                            }
                          </style>
                        </div>
                      </div>
                    </div>

                    <style>
                      #banner-1171623003 {
                        padding-top: 350px;
                        background-color: rgba(0, 0, 0, 0);
                      }

                      @media (min-width: 550px) {
                        #banner-1171623003 {
                          padding-top: 472px;
                        }
                      }
                    </style>
                  </div>
                </div>
              </div>

              <div id="col-636720991" class="col medium-6 small-12 large-6" data-animate="fadeInUp">
                <div class="col-inner text-left">
                  <div id="text-3903669978" class="text text-heading">
                    <h2><?php echo metta_get_field('about_intro_title') ?: 'Về chúng tôi'; ?></h2>

                    <style>
                      #text-3903669978 {
                        font-size: 1.5rem;
                        text-align: left;
                      }
                    </style>
                  </div>

                  <div id="text-3274210281" class="text">
                    <?php echo metta_get_field('about_intro_desc') ?: '<p>
                      <strong>
                        "Metta" không chỉ là một cái tên, đó là một lời cam
                        kết.</strong>
                      Trong tiếng Phạn, Metta có nghĩa là "Lòng Từ Bi". Tại
                      Metta Spa, chúng tôi không chỉ làm nghề chăm sóc sức
                      khỏe, chúng tôi thực hành sự tử tế trong từng thao tác
                      ấn huyệt, từng bát thảo dược ấm nồng.
                    </p>
                    <p>
                      Được dẫn dắt bởi <strong> Ông Chú Metta </strong> – một
                      người Mentor kiên định với triết lý "Sống bằng tâm ý",
                      Metta Spa đã và đang trở thành điểm tựa sức khỏe cho
                      hàng ngàn khách hàng tại TP.HCM, Biên Hòa và là cái nôi
                      khởi nghiệp cho hàng trăm học viên mỗi năm.
                    </p>'; ?>

                    <style>
                      #text-3274210281 {
                        text-align: left;
                      }
                    </style>
                  </div>

                  <div class="row row-large" id="row-1386884519">
                    <div id="col-896907260" class="col medium-3 small-6 large-3">
                      <div class="col-inner text-center">
                        <div id="text-2255748326" class="text mb-0">
                          <p>
                            <strong><span><?php echo metta_get_field('about_stat_1_num') ?: '2'; ?></span></strong>
                          </p>

                          <style>
                            #text-2255748326 {
                              font-size: 2.8rem;
                            }
                          </style>
                        </div>

                        <p><strong><?php echo metta_get_field('about_stat_1_text') ?: 'Chi Nhánh'; ?></strong></p>
                      </div>
                    </div>

                    <div id="col-764234197" class="col medium-3 small-6 large-3">
                      <div class="col-inner text-center">
                        <div id="text-167888686" class="text mb-0">
                          <p>
                            <strong><span><?php echo metta_get_field('about_stat_2_num') ?: '50+'; ?></span></strong>
                          </p>

                          <style>
                            #text-167888686 {
                              font-size: 2.8rem;
                            }
                          </style>
                        </div>

                        <p><strong><?php echo metta_get_field('about_stat_2_text') ?: 'Trị liệu viên'; ?></strong></p>
                      </div>
                    </div>

                    <div id="col-144272533" class="col medium-3 small-6 large-3">
                      <div class="col-inner text-center">
                        <div id="text-1539258129" class="text mb-0">
                          <p>
                            <strong><span><?php echo metta_get_field('about_stat_3_num') ?: '500k'; ?></span></strong>
                          </p>

                          <style>
                            #text-1539258129 {
                              font-size: 2.8rem;
                            }
                          </style>
                        </div>

                        <p><strong><?php echo metta_get_field('about_stat_3_text') ?: 'Khách hàng'; ?></strong></p>
                      </div>
                    </div>

                    <div id="col-476970206" class="col medium-3 small-6 large-3">
                      <div class="col-inner text-center">
                        <div id="text-2674399885" class="text mb-0">
                          <p>
                            <strong><span><?php echo metta_get_field('about_stat_4_num') ?: '1000k'; ?></span></strong>
                          </p>

                          <style>
                            #text-2674399885 {
                              font-size: 2.8rem;
                            }
                          </style>
                        </div>

                        <p><strong>Khách hài lòng</strong></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <style>
            #section_1400089298 {
              padding-top: 0px;
              padding-bottom: 0px;
            }

            #section_1400089298 .section-bg img {
              object-position: 84% 54%;
            }

            @media (min-width: 550px) {
              #section_1400089298 {
                padding-top: 30px;
                padding-bottom: 30px;
              }
            }
          </style>
        </section>

        <section class="section" id="section_442555628">
          <div class="section-bg fill"></div>

          <div class="section-content relative">
            <div class="row row-collapse row-full-width" id="row-151866286">
              <div id="col-317613279" class="col medium-6 small-12 large-6" data-animate="fadeInLeft">
                <div class="col-inner">
                  <div class="banner has-hover about-end-banner" id="banner-1729592799">
                    <div class="banner-inner fill">
                      <div class="banner-bg fill">
                        <img decoding="async" width="2560" height="1706"
                          src="<?php echo esc_url( metta_about_image_url('about_why_bg', get_site_url() . '/wp-content/uploads/2025/12/z7321243450674_8d3238bb894d1985ed7e8f5af7ed3638.jpg') ); ?>"
                          class="attachment-original size-original" alt=""
                          style="width:100%;height:100%;object-fit:cover;" />
                        <div class="overlay"></div>
                      </div>

                      <div class="banner-layers container">
                        <div class="fill banner-link"></div>
                        <div id="text-box-1901029386"
                          class="text-box banner-layer x50 md-x85 lg-x85 y90 md-y80 lg-y80 res-text">
                          <div class="text-box-content text dark">
                            <div class="text-inner text-left">
                              <div id="text-3760712084" class="text text-heading-light">
                                <h2><?php echo metta_get_field('about_why_title') ?: 'Vì sao Chọn Chúng Tôi'; ?></h2>
                              </div>

                              <div id="text-460083011" class="text">
                                <p>
                                  <?php echo metta_get_field('about_why_desc') ?: '<em>Tiên phong trong việc kết hợp tinh hoa y
                                    học cổ truyền và công nghệ hiện đại, mang
                                    lại sức khỏe toàn diện và vẻ đẹp tự nhiên
                                    cho khách hàng. Tấm mang đến trải nghiệm
                                    chăm sóc sức khỏe và sắc đẹp an toàn, hiệu
                                    quả, cá nhân hóa cho từng khách hàng, giúp
                                    cơ thể được phục hồi, tâm trí thư giãn và
                                    tinh thần tái tạo năng lượng.</em>'; ?>
                                </p>

                                <style>
                                  #text-460083011 {
                                    font-size: 1rem;
                                  }

                                  @media (min-width: 550px) {
                                    #text-460083011 {
                                      font-size: 1rem;
                                    }
                                  }
                                </style>
                              </div>
                            </div>
                          </div>

                          <style>
                            #text-box-1901029386 {
                              width: 77%;
                              position: relative;
                              z-index: 10;
                            }

                            #text-box-1901029386 .text-box-content {
                              font-size: 100%;
                            }

                            @media (min-width: 550px) {
                              #text-box-1901029386 {
                                width: 60%;
                              }
                            }

                            /* Fix z-index: banner-layers above overlay */
                            #banner-1729592799 .banner-layers {
                              position: relative;
                              z-index: 5;
                            }
                            #banner-1729592799 .banner-bg {
                              z-index: 1;
                            }
                          </style>
                        </div>

                        <?php 
                        $about_why_img_float = esc_url( metta_about_image_url('about_why_img_float') );
                        if ( ! empty( $about_why_img_float ) ) :
                        ?>
                        <div class="img has-hover x0 md-x0 lg-x0 y100 md-y100 lg-y100" id="image_654226472">
                          <div class="img-inner dark">
                            <img decoding="async"
                              src="<?php echo $about_why_img_float; ?>"
                              class="attachment-original size-original" alt=""
                              style="width:100%;height:100%;object-fit:cover;" />
                          </div>

                          <style>
                            #image_654226472 {
                              width: 33%;
                            }

                            @media (min-width: 550px) {
                              #image_654226472 {
                                width: 24%;
                              }
                            }
                          </style>
                        </div>
                        <?php endif; ?>
                      </div>
                    </div>

                    <style>
                      #banner-1729592799 {
                        padding-top: 511.89px;
                      }

                      #banner-1729592799 .overlay {
                        background-color: rgba(0, 0, 0, 0);
                      }

                      @media (min-width: 550px) {
                        #banner-1729592799 {
                          padding-top: 520px;
                        }
                      }
                    </style>
                  </div>
                </div>

                <style>
                  #col-317613279>.col-inner {
                    padding: 0px 10px 0px 0px;
                  }
                </style>
              </div>

              <div id="col-1696002998" class="col medium-6 small-12 large-6" data-animate="fadeInUp">
                <div class="col-inner">
                  <div class="row" id="row-807166794">
                    <div id="col-953690504" class="col small-12 large-12">
                      <div class="col-inner">
                        <div class="slider-wrapper relative sliderow videocs" id="slider-1373166469">
                          <div
                            class="slider slider-nav-simple slider-nav-large slider-nav-light slider-style-container slider-show-nav"
                            data-flickity-options='{
            "cellAlign": "left",
            "imagesLoaded": true,
            "lazyLoad": 1,
            "freeScroll": false,
            "wrapAround": true,
            "autoPlay": 6000,
            "pauseAutoPlayOnHover" : true,
            "prevNextButtons": true,
            "contain" : true,
            "adaptiveHeight" : true,
            "dragThreshold" : 10,
            "percentPosition": true,
            "pageDots": true,
            "rightToLeft": false,
            "draggable": true,
            "selectedAttraction": 0.1,
            "parallax" : 0,
            "friction": 0.6        }'>
                            <div class="row" id="row-1923884262">
                              <div id="col-1782196275" class="col small-12 large-12">
                                <div class="col-inner">
                                  <div class="box has-hover about-img-box has-hover box-overlay dark box-text-bottom">
                                    <div class="box-image">
                                      <div class="image-cover" style="padding-top: 150%">
                                        <?php $about_why_item1_img = esc_url( metta_about_image_url('about_why_item1_img', get_site_url() . '/wp-content/uploads/2025/12/z7321244112065_aa7062f58e5722d9955707e8b0c43090.jpg') ); ?>
                                        <img decoding="async" width="1920" height="1920"
                                          src="<?php echo $about_why_item1_img; ?>"
                                          class="attachment-original size-original" alt=""
                                          style="width:100%;height:100%;object-fit:cover;" /><noscript><img decoding="async" width="1920"
                                            height="1920"
                                            src="<?php echo $about_why_item1_img; ?>"
                                            class="attachment-original size-original" alt="" srcset="
                                                <?php echo $about_why_item1_img; ?>           1920w,
                                                <?php echo $about_why_item1_img; ?> 1024w,
                                                <?php echo $about_why_item1_img; ?>    768w,
                                                <?php echo $about_why_item1_img; ?> 1536w
                                              " sizes="(max-width: 1920px) 100vw, 1920px" data-eio="l" /></noscript>
                                        <div class="overlay" style="background-color: #3729007a"></div>
                                      </div>
                                    </div>

                                    <div class="box-text text-left">
                                      <div class="box-text-inner">
                                        <div id="text-1789850063" class="text text-vip">
                                          <p><?php echo metta_get_field('about_why_item1_title') ?: 'ĐÀO TẠO DƯỠNG SINH'; ?></p>

                                          <style>
                                            #text-1789850063 {
                                              font-size: 1.2rem;
                                            }
                                          </style>
                                        </div>

                                        <p>
                                          <?php echo metta_get_field('about_why_item1_desc') ?: 'Dưỡng sinh Đông y không chỉ là một cái nghề, đó là nghệ thuật chữa lành bằng sự thấu hiểu cơ thể...'; ?>
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row" id="row-1059216224">
                              <div id="col-797077812" class="col small-12 large-12">
                                <div class="col-inner">
                                  <div class="box has-hover about-img-box has-hover box-overlay dark box-text-bottom">
                                    <div class="box-image">
                                      <div class="image-cover" style="padding-top: 150%">
                                        <?php $about_why_item2_img = esc_url( metta_about_image_url('about_why_item2_img', get_site_url() . '/wp-content/uploads/2025/12/vn-11134207-820l4-meo2lbllybk2c1.webp') ); ?>
                                        <img decoding="async" width="1666" height="1920"
                                          src="<?php echo $about_why_item2_img; ?>"
                                          class="attachment-original size-original" alt=""
                                          style="width:100%;height:100%;object-fit:cover;" /><noscript><img decoding="async" width="1666"
                                            height="1920"
                                            src="<?php echo $about_why_item2_img; ?>"
                                            class="attachment-original size-original" alt="" srcset="
                                                <?php echo $about_why_item2_img; ?>           1666w,
                                                <?php echo $about_why_item2_img; ?>   889w,
                                                <?php echo $about_why_item2_img; ?>    768w,
                                                <?php echo $about_why_item2_img; ?> 1333w
                                              " sizes="(max-width: 1666px) 100vw, 1666px" data-eio="l" /></noscript>
                                        <div class="overlay" style="background-color: #3729007a"></div>
                                      </div>
                                    </div>

                                    <div class="box-text text-left">
                                      <div class="box-text-inner">
                                        <div id="text-3674499485" class="text text-vip">
                                          <p><?php echo metta_get_field('about_why_item2_title') ?: 'DƯỢC LIỆU METTA – TINH HOA THẢO MỘC VIỆT'; ?></p>

                                          <style>
                                            #text-3674499485 {
                                              font-size: 1.2rem;
                                            }
                                          </style>
                                        </div>

                                        <p>
                                          <?php echo metta_get_field('about_why_item2_desc') ?: 'Được chọn lọc khắt khe từ những vùng nguyên liệu sạch, sản phẩm dược liệu của Metta giữ trọn vẹn "nhựa sống" của cỏ cây để phục vụ trị liệu và dưỡng sinh. Hãy trải nghiệm sức mạnh chữa lành từ thiên nhiên cùng Metta!'; ?>
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row" id="row-425123059">
                              <div id="col-1414941105" class="col small-12 large-12">
                                <div class="col-inner">
                                  <div class="box has-hover about-img-box has-hover box-overlay dark box-text-bottom">
                                    <div class="box-image">
                                      <div class="image-cover" style="padding-top: 150%">
                                        <img decoding="async" width="1920" height="1280"
  src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/12/z7321243484732_2d1e46a5ab82dc922a8ed3862ffd0c98.jpg"
  class="attachment-original size-original" alt=""
  style="width:100%;height:100%;object-fit:cover;" /><noscript><img decoding="async" width="1920"
                                            height="1280"
                                            src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/12/z7321243484732_2d1e46a5ab82dc922a8ed3862ffd0c98.jpg"
                                            class="attachment-original size-original" alt="" srcset="
                                                <?php echo get_site_url(); ?>/wp-content/uploads/2025/12/z7321243484732_2d1e46a5ab82dc922a8ed3862ffd0c98.jpg           1920w,
                                                <?php echo get_site_url(); ?>/wp-content/uploads/2025/12/z7321243484732_2d1e46a5ab82dc922a8ed3862ffd0c98.jpg  1024w,
                                                <?php echo get_site_url(); ?>/wp-content/uploads/2025/12/z7321243484732_2d1e46a5ab82dc922a8ed3862ffd0c98.jpg    768w,
                                                <?php echo get_site_url(); ?>/wp-content/uploads/2025/12/z7321243484732_2d1e46a5ab82dc922a8ed3862ffd0c98.jpg 1536w
                                              " sizes="(max-width: 1920px) 100vw, 1920px" data-eio="l" /></noscript>
                                        <div class="overlay" style="background-color: #3729007a"></div>
                                      </div>
                                    </div>

                                    <div class="box-text text-left">
                                      <div class="box-text-inner">
                                        <div id="text-3575440852" class="text text-vip">
                                          <p>
                                            <?php echo metta_get_field('about_why_item3_title') ?: 'TRỊ LIỆU TỪ TÂM – NÂNG TẦM SỨC KHỎE'; ?>
                                          </p>

                                          <style>
                                            #text-3575440852 {
                                              font-size: 1.2rem;
                                            }
                                          </style>
                                        </div>

                                        <p>
                                          <?php echo metta_get_field('about_why_item3_desc') ?: 'Tại Metta, mỗi KTV là một người thợ lành nghề, kết hợp nhuần nhuyễn giữa kỹ thuật bấm huyệt chính xác và y lý Đông y cổ truyền...'; ?>
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="loading-spin dark large centered"></div>

                          <style>
                            /* === Slider Cards: match gioi-thieu_bak CSS exactly === */

                            /* Card max-width (same as backup) */
                            #slider-1373166469 .flickity-slider > * {
                              max-width: 405px !important;
                            }

                            /* Sliderow col padding - from .sliderow .col rule in backup */
                            #slider-1373166469 .col {
                              padding: 2em;
                              margin-right: 1em;
                            }

                            /* Box-image: arch shape + border + inside padding (overflow visible for ::before decor) */
                            #slider-1373166469 .about-img-box .box-image {
                              border-radius: 500px 500px 5px 5px;
                              border: 1px solid var(--metta-gold-dark, #a87e09);
                              padding: 0.5rem;
                              overflow: visible;
                            }

                            /* Decor SVG at top of each card arch */
                            #slider-1373166469 .about-img-box .box-image::before {
                              content: url("<?php echo get_site_url(); ?>data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg'/%3E");
                              top: -3%;
                              position: absolute;
                              left: 50%;
                              transform: translateX(-50%);
                            }

                            /* Image inside arch */
                            #slider-1373166469 .about-img-box img {
                              border-radius: 500px 500px 5px 5px;
                              border: 1px solid var(--metta-gold-dark, #a87e09);
                            }

                            /* Overlay gradient: dark from middle to bottom */
                            #slider-1373166469 .about-img-box .overlay {
                              border-radius: 500px 500px 5px 5px;
                              background: linear-gradient(
                                180deg,
                                rgba(99, 73, 0, 0) 27.19%,
                                rgba(80, 59, 0, 0.86) 71.41%,
                                #402f00 100%
                              ) !important;
                              background-color: transparent !important;
                            }

                            /* FORCE TEXT BÊN TRONG hình (overlay) */
                            #slider-1373166469 .about-img-box {
                              position: relative;
                            }
                            #slider-1373166469 .about-img-box .box-text {
                              position: absolute !important;
                              bottom: 0 !important;
                              left: 0 !important;
                              right: 0 !important;
                              top: auto !important;
                              z-index: 10 !important;
                              padding: 1rem !important;
                              background: transparent !important;
                            }

                            /* WHITE TEXT — giống style "Giá Trị Cốt Lõi" */
                            #slider-1373166469 .about-img-box .box-text,
                            #slider-1373166469 .about-img-box .box-text p,
                            #slider-1373166469 .about-img-box .box-text-inner > p,
                            #slider-1373166469 .about-img-box .text-vip p {
                              color: white !important;
                            }

                            /* Title: font vip-medino + bold, giống cột lõi */
                            #slider-1373166469 .about-img-box .text-vip {
                              font-size: 1.2rem;
                              font-family: "1ftv-vip-medino" !important;
                            }

                            /* Description: italic nhẹ nhàng */
                            #slider-1373166469 .about-img-box .box-text-inner > p {
                              font-size: 0.85rem;
                              font-style: italic;
                              opacity: 0.9;
                            }

                            /* Dots style */
                            #slider-1373166469 .flickity-page-dots .dot {
                              background: linear-gradient(92deg, #9c4b00 1.53%, #c67427 93.65%);
                              border: unset;
                            }

                            /* Non-selected cards fully visible */
                            #slider-1373166469 .slider-style-container .flickity-slider > :not(.is-selected) {
                              opacity: 1;
                            }
                          </style>
                        </div>
                      </div>

                      <style>
                        #col-953690504>.col-inner {
                          margin: 0px 0px 0px 0px;
                        }

                        @media (min-width: 550px) {
                          #col-953690504>.col-inner {
                            margin: -15px 0px 0px 0px;
                          }
                        }
                      </style>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <style>
            #section_442555628 {
              padding-top: 30px;
              padding-bottom: 30px;
            }
          </style>
        </section>

        <section class="section about-cot-loi-section" id="section_1967216007">
          <div class="section-bg fill">
            <img decoding="async" width="2560" height="1707"
  src="<?php echo metta_get_field('about_core_bg') ?: get_site_url() . '/wp-content/uploads/2025/12/z7321243434473_0b4c7065cbeea0b7a8817deed701d409.jpg'; ?>"
  class="attachment-original size-original" alt=""
  style="width:100%;height:100%;object-fit:cover;" />
            <div class="section-bg-overlay absolute fill"></div>
          </div>

          <div class="section-content relative">
            <div class="row" id="row-1055284021">
              <div id="col-901361912" class="col small-12 large-12" data-animate="fadeInUp">
                <div class="col-inner text-center">
                  <div id="text-2919559352" class="text text-heading">
                    <h2><?php echo metta_get_field('about_core_title') ?: 'Giá Trị Cốt Lõi'; ?></h2>

                    <style>
                      #text-2919559352 h2 {
                        color: var(--metta-main);
                      }

                      #text-2919559352 {
                        font-size: 1.5rem;
                      }
                    </style>
                  </div>
                </div>
              </div>
            </div>
            <div class="row row-large align-equal" id="row-317605118">
              <div id="col-595511480" class="col about-cot-loi-col medium-4 small-12 large-4">
                <div class="col-inner">
                  <div class="is-border" style="
                        border-color: rgb(168, 126, 9);
                        border-width: 1px 1px 1px 1;
                      "></div>

                  <div class="icon-box featured-box icon-box-center text-center">
                    <div class="icon-box-img" style="width: 60px">
                      <div class="icon">
                        <div class="icon-inner">
                          <img decoding="async"
  src="<?php echo metta_get_field('about_core_1_icon') ?: ''; ?>"
  class="attachment-original size-original" alt=""
  style="width:100%;height:100%;object-fit:cover;" />
                        </div>
                      </div>
                    </div>
                    <div class="icon-box-text last-reset">
                      <div id="text-1691817592" class="text text-vip mb-0">
                        <p>
                          <strong><?php echo metta_get_field('about_core_1_title') ?: 'Tận tâm &amp; Thấu hiểu'; ?></strong>
                        </p>

                        <style>
                          #text-1691817592 {
                            font-size: 1.2rem;
                          }
                        </style>
                      </div>

                      <div id="gap-1804095612" class="gap-element clearfix" style="display: block; height: auto">
                        <style>
                          #gap-1804095612 {
                            padding-top: 8px;
                          }
                        </style>
                      </div>

                      <p>
                        Đội ngũ chuyên viên giàu kinh nghiệm, tận tâm trong
                        từng thao tác, luôn lắng nghe nhu cầu và đồng hành để
                        mang lại trải nghiệm cá nhân hóa, đầy an yên cho từng
                        khách hàng.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div id="col-1644531814" class="col about-cot-loi-col medium-4 small-12 large-4">
                <div class="col-inner">
                  <div class="is-border" style="
                        border-color: rgb(168, 126, 9);
                        border-width: 1px 1px 1px 1;
                      "></div>

                  <div class="icon-box featured-box icon-box-center text-center">
                    <div class="icon-box-img" style="width: 60px">
                      <div class="icon">
                        <div class="icon-inner">
                          <img decoding="async"
  src="<?php echo metta_get_field('about_core_2_icon') ?: ''; ?>"
  class="attachment-original size-original" alt=""
  style="width:100%;height:100%;object-fit:cover;" />
                        </div>
                      </div>
                    </div>
                    <div class="icon-box-text last-reset">
                      <div id="text-1405538694" class="text text-vip mb-0">
                        <p>
                          <strong><?php echo metta_get_field('about_core_2_title') ?: 'An toàn &amp; Chất lượng'; ?></strong>
                        </p>

                        <style>
                          #text-1405538694 {
                            font-size: 1.2rem;
                          }
                        </style>
                      </div>

                      <div id="gap-2144603054" class="gap-element clearfix" style="display: block; height: auto">
                        <style>
                          #gap-2144603054 {
                            padding-top: 8px;
                          }
                        </style>
                      </div>

                      <p>
                        Mọi liệu trình tại Metta đông y Spa đều được xây dựng
                        theo chuẩn dưỡng sinh, sử dụng thảo dược tinh chọn và
                        phương pháp an toàn, giúp khách hàng yên tâm tuyệt đối
                        trong quá trình chăm sóc.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div id="col-740178877" class="col about-cot-loi-col medium-4 small-12 large-4">
                <div class="col-inner">
                  <div class="is-border" style="
                        border-color: rgb(168, 126, 9);
                        border-width: 1px 1px 1px 1;
                      "></div>

                  <div class="icon-box featured-box icon-box-center text-center">
                    <div class="icon-box-img" style="width: 60px">
                      <div class="icon">
                        <div class="icon-inner">
                          <img decoding="async"
  src="<?php echo metta_get_field('about_core_3_icon') ?: ''; ?>"
  class="attachment-original size-original" alt=""
  style="width:100%;height:100%;object-fit:cover;" />
                        </div>
                      </div>
                    </div>
                    <div class="icon-box-text last-reset">
                      <div id="text-3297103681" class="text text-vip mb-0">
                        <p><?php echo metta_get_field('about_core_3_title') ?: 'Metta đông y Spa là nơi'; ?></p>

                        <style>
                          #text-3297103681 {
                            font-size: 1.2rem;
                          }
                        </style>
                      </div>

                      <div id="gap-348891340" class="gap-element clearfix" style="display: block; height: auto">
                        <style>
                          #gap-348891340 {
                            padding-top: 8px;
                          }
                        </style>
                      </div>

                      <p>
                        <em>Metta đông y Spa là nơi tái hiện nghệ thuật làm đẹp
                          truyền thống của người Á Đông – kết hợp tinh hoa
                          dưỡng sinh cổ truyền với liệu pháp chăm sóc hiện
                          đại, giúp thanh lọc cơ thể, làm đẹp từ sâu bên
                          trong. Giữa nhịp sống tất bật</em>
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <style>
                #row-317605118>.col>.col-inner {
                  padding: 100px 30px 100px 30px;
                  background-color: rgba(45, 20, 25, 0.68);
                  backdrop-filter: blur(10px);
                  -webkit-backdrop-filter: blur(10px);
                  border: 1px solid rgba(200, 155, 60, 0.22);
                  color: white;
                }
                /* White text for all descriptions in Giá Trị Cốt Lõi cards */
                #row-317605118>.col>.col-inner p,
                #row-317605118>.col>.col-inner em,
                #row-317605118>.col>.col-inner span {
                  color: white !important;
                }
              </style>
            </div>
          </div>

          <style>
            #section_1967216007 {
              padding-top: 0px;
              padding-bottom: 0px;
            }

            #section_1967216007 .section-bg-overlay {
              background-color: rgba(7, 33, 23, 0.69);
            }

            @media (min-width: 550px) {
              #section_1967216007 {
                padding-top: 50px;
                padding-bottom: 50px;
              }
            }
          </style>
        </section>

        <section class="section" id="section_1127819252">
          <div class="section-bg fill">
          </div>

          <div class="section-content relative">
            <div class="row" id="row-156138293">
              <div id="col-883075985" class="col small-12 large-12">
                <div class="col-inner">
                  <div id="text-3698214354" class="text text-heading">
                    <h2><?php echo metta_get_field('about_gallery_title') ?: 'Hình ảnh'; ?></h2>

                    <style>
                      #text-3698214354 {
                        font-size: 1.5rem;
                        text-align: center;
                      }
                    </style>
                  </div>
                </div>
              </div>
            </div>
            <div class="banner-grid-wrapper">
              <div id="banner-grid-417500648" class="banner-grid row row-grid row-small" data-packery-options="">
                <div class="col grid-col large-3 grid-col-1">
                  <div class="col-inner">
                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_552148750">
                      <div class="img-inner image-cover dark" style="padding-top: 100%">
                        <img decoding="async" width="1280" height="1920"
  src="<?php echo metta_get_field('about_gal_1') ?: get_site_url() . '/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg'; ?>"
  class="attachment-original size-original" alt=""
  style="width:100%;height:100%;object-fit:cover;" /><noscript><img
                            decoding="async" width="1280" height="1920"
                            src="<?php echo metta_get_field('about_gal_1') ?: get_site_url() . '/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg'; ?>"
                            class="attachment-original size-original" alt="" srcset="
                                <?php echo metta_get_field('about_gal_1') ?: get_site_url() . '/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg'; ?>           1280w,
                                <?php echo get_site_url(); ?>/wp-content/uploads/2025/12/z7321243502519_c0d2e952ab16d47afb000e48667dbdd2.jpg   683w,
                                <?php echo get_site_url(); ?>/wp-content/uploads/2025/12/z7321243502519_c0d2e952ab16d47afb000e48667dbdd2.jpg   768w,
                                <?php echo get_site_url(); ?>/wp-content/uploads/2025/12/z7321243502519_c0d2e952ab16d47afb000e48667dbdd2.jpg 1024w
                              " sizes="(max-width: 1280px) 100vw, 1280px" data-eio="l" /></noscript>
                      </div>

                      <style>
                        #image_552148750 {
                          width: 100%;
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col grid-col large-3 grid-col-1-2">
                  <div class="col-inner">
                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2056187539">
                      <div class="img-inner image-cover dark" style="padding-top: 100%">
                        <img decoding="async" width="1920" height="1536"
  src="<?php echo metta_get_field('about_gal_2') ?: get_site_url() . '/wp-content/uploads/2026/03/z7321243484745_fbb90f387993aac5596753ef14adf2dd.jpg'; ?>"
  class="attachment-original size-original" alt=""
  style="width:100%;height:100%;object-fit:cover;" />
                      </div>

                      <style>
                        #image_2056187539 {
                          width: 100%;
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col grid-col large-3 grid-col-1">
                  <div class="col-inner">
                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1578574722">
                      <div class="img-inner image-cover dark" style="padding-top: 100%">
                        <img decoding="async" width="1280" height="1920"
  src="<?php echo metta_get_field('about_gal_3') ?: get_site_url() . '/wp-content/uploads/2026/01/YAM01125.jpg'; ?>"
  class="attachment-original size-original" alt=""
  style="width:100%;height:100%;object-fit:cover;" />
                      </div>

                      <style>
                        #image_1578574722 {
                          width: 100%;
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col grid-col large-3 grid-col-1-2">
                  <div class="col-inner">
                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1297626852">
                      <div class="img-inner image-cover dark" style="padding-top: 100%">
                        <img decoding="async" width="1280" height="1920"
  src="<?php echo metta_get_field('about_gal_4') ?: get_site_url() . '/wp-content/uploads/2026/03/z7321243484744_de99b6c945834e80d926b1f02a195256.jpg'; ?>"
  class="attachment-original size-original" alt=""
  style="width:100%;height:100%;object-fit:cover;" />
                      </div>

                      <style>
                        #image_1297626852 {
                          width: 100%;
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col grid-col large-3 grid-col-1-2">
                  <div class="col-inner">
                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_775375094">
                      <div class="img-inner image-cover dark" style="padding-top: 100%">
                        <img decoding="async" width="1920" height="1280"
  src="<?php echo metta_get_field('about_gal_5') ?: get_site_url() . '/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg'; ?>"
  class="attachment-original size-original" alt=""
  style="width:100%;height:100%;object-fit:cover;" /><noscript><img
                            decoding="async" width="1920" height="1280"
                            src="<?php echo metta_get_field('about_gal_5') ?: get_site_url() . '/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg'; ?>"
                            class="attachment-original size-original" alt="" srcset="
                                <?php echo metta_get_field('about_gal_5') ?: get_site_url() . '/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg'; ?>           1920w,
                                <?php echo metta_get_field('about_gal_5') ?: get_site_url() . '/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg'; ?>  1024w,
                                <?php echo metta_get_field('about_gal_5') ?: get_site_url() . '/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg'; ?>    768w,
                                <?php echo metta_get_field('about_gal_5') ?: get_site_url() . '/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg'; ?> 1536w
                              " sizes="(max-width: 1920px) 100vw, 1920px" data-eio="l" /></noscript>
                      </div>

                      <style>
                        #image_775375094 {
                          width: 100%;
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col grid-col large-3 grid-col-1-2">
                  <div class="col-inner">
                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2060124709">
                      <div class="img-inner image-cover dark" style="padding-top: 100%">
                        <img decoding="async" width="1920" height="1280"
  src="<?php echo metta_get_field('about_gal_5') ?: get_site_url() . '/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg'; ?>"
  class="attachment-original size-original" alt=""
  style="width:100%;height:100%;object-fit:cover;" /><noscript><img
                            decoding="async" width="1920" height="1280"
                            src="<?php echo metta_get_field('about_gal_5') ?: get_site_url() . '/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg'; ?>"
                            class="attachment-original size-original" alt="" srcset="
                                <?php echo metta_get_field('about_gal_5') ?: get_site_url() . '/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg'; ?>    1920w,
                                <?php echo get_site_url(); ?>/wp-content/uploads/2025/12/z7321243484724_b19209a250c378be5a9319c0e1ea40e4.jpg 1024w,
                                <?php echo get_site_url(); ?>/wp-content/uploads/2026/03/z7321244104166_d5f483d125730f143fbd2d4124c88633-768x512.jpg                                    768w,
                                <?php echo get_site_url(); ?>/wp-content/uploads/2026/03/z7321244104166_d5f483d125730f143fbd2d4124c88633.jpg                                 1536w
                              " sizes="(max-width: 1920px) 100vw, 1920px" data-eio="l" /></noscript>
                      </div>

                      <style>
                        #image_2060124709 {
                          width: 100%;
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col grid-col large-3 grid-col-1-2">
                  <div class="col-inner">
                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1051070990">
                      <div class="img-inner image-cover dark" style="padding-top: 100%">
                        <img decoding="async" width="1920" height="1280"
  src="<?php echo metta_get_field('about_gal_6') ?: get_site_url() . '/wp-content/uploads/2025/12/z7321243484732_2d1e46a5ab82dc922a8ed3862ffd0c98.jpg'; ?>"
  class="attachment-original size-original" alt=""
  style="width:100%;height:100%;object-fit:cover;" /><noscript><img
                            decoding="async" width="1920" height="1280"
                            src="<?php echo metta_get_field('about_gal_6') ?: get_site_url() . '/wp-content/uploads/2025/12/z7321243484732_2d1e46a5ab82dc922a8ed3862ffd0c98.jpg'; ?>"
                            class="attachment-original size-original" alt="" srcset="
                                <?php echo metta_get_field('about_gal_6') ?: get_site_url() . '/wp-content/uploads/2025/12/z7321243484732_2d1e46a5ab82dc922a8ed3862ffd0c98.jpg'; ?>           1920w,
                                <?php echo metta_get_field('about_gal_6') ?: get_site_url() . '/wp-content/uploads/2025/12/z7321243484732_2d1e46a5ab82dc922a8ed3862ffd0c98.jpg'; ?>  1024w,
                                <?php echo metta_get_field('about_gal_6') ?: get_site_url() . '/wp-content/uploads/2025/12/z7321243484732_2d1e46a5ab82dc922a8ed3862ffd0c98.jpg'; ?>    768w,
                                <?php echo metta_get_field('about_gal_6') ?: get_site_url() . '/wp-content/uploads/2025/12/z7321243484732_2d1e46a5ab82dc922a8ed3862ffd0c98.jpg'; ?> 1536w
                              " sizes="(max-width: 1920px) 100vw, 1920px" data-eio="l" /></noscript>
                      </div>

                      <style>
                        #image_1051070990 {
                          width: 100%;
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col grid-col large-3 grid-col-1">
                  <div class="col-inner">
                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_456224253">
                      <div class="img-inner image-cover dark" style="padding-top: 100%">
                        <img decoding="async" width="1920" height="1536"
  src="<?php echo metta_get_field('about_gal_7') ?: get_site_url() . '/wp-content/uploads/2026/03/z7321244104193_8316d0cd67c89088c05256e053a20b1d.jpg'; ?>"
  class="attachment-original size-original" alt=""
  style="width:100%;height:100%;object-fit:cover;" />
                      </div>

                      <style>
                        #image_456224253 {
                          width: 100%;
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col grid-col large-3 grid-col-1-2">
                  <div class="col-inner">
                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1400607389">
                      <div class="img-inner image-cover dark" style="padding-top: 100%">
                        <img decoding="async" width="1920" height="1280"
  src="<?php echo metta_get_field('about_gal_8') ?: get_site_url() . '/wp-content/uploads/2026/03/z7321244104166_d5f483d125730f143fbd2d4124c88633.jpg'; ?>"
  class="attachment-original size-original" alt=""
  style="width:100%;height:100%;object-fit:cover;" />
                      </div>

                      <style>
                        #image_1400607389 {
                          width: 100%;
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col grid-col large-3 grid-col-1">
                  <div class="col-inner">
                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_965396434">
                      <div class="img-inner image-cover dark" style="padding-top: 100%">
                        <img decoding="async" width="1280" height="1920"
  src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg"
  class="attachment-original size-original" alt=""
  style="width:100%;height:100%;object-fit:cover;" /><noscript><img
                            decoding="async" width="1280" height="1920"
                            src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg"
                            class="attachment-original size-original" alt="" srcset="
                                <?php echo get_site_url(); ?>/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg           1280w,
                                <?php echo get_site_url(); ?>/wp-content/uploads/2025/12/z7321243502519_c0d2e952ab16d47afb000e48667dbdd2.jpg   683w,
                                <?php echo get_site_url(); ?>/wp-content/uploads/2025/12/z7321243502519_c0d2e952ab16d47afb000e48667dbdd2.jpg   768w,
                                <?php echo get_site_url(); ?>/wp-content/uploads/2025/12/z7321243502519_c0d2e952ab16d47afb000e48667dbdd2.jpg 1024w
                              " sizes="(max-width: 1280px) 100vw, 1280px" data-eio="l" /></noscript>
                      </div>

                      <style>
                        #image_965396434 {
                          width: 100%;
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col grid-col large-3 grid-col-1-2">
                  <div class="col-inner">
                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_851970473">
                      <div class="img-inner image-cover dark" style="padding-top: 100%">
                        <img decoding="async" width="1920" height="1280"
  src="<?php echo metta_get_field('about_gal_9') ?: get_site_url() . '/wp-content/uploads/2026/03/z7321244104193_8316d0cd67c89088c05256e053a20b1d.jpg'; ?>"
  class="attachment-original size-original" alt=""
  style="width:100%;height:100%;object-fit:cover;" />
                      </div>

                      <style>
                        #image_851970473 {
                          width: 100%;
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col grid-col large-3 grid-col-1-2">
                  <div class="col-inner">
                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_649537172">
                      <div class="img-inner image-cover dark" style="padding-top: 100%">
                        <img decoding="async" width="1920" height="1280"
  src="<?php echo metta_get_field('about_gal_10') ?: get_site_url() . '/wp-content/uploads/2026/03/z7321244104166_d5f483d125730f143fbd2d4124c88633.jpg'; ?>"
  class="attachment-original size-original" alt=""
  style="width:100%;height:100%;object-fit:cover;" />
                      </div>

                      <style>
                        #image_649537172 {
                          width: 100%;
                        }
                      </style>
                    </div>
                  </div>
                </div>
              </div>
              <style>
                #banner-grid-417500648 .grid-col-1 {
                  height: 500px;
                }

                #banner-grid-417500648 .grid-col-1-2 {
                  height: 250px;
                }

                #banner-grid-417500648 .grid-col-1-3 {
                  height: 166.66666666667px;
                }

                #banner-grid-417500648 .grid-col-2-3 {
                  height: 333.33333333333px;
                }

                #banner-grid-417500648 .grid-col-1-4 {
                  height: 125px;
                }

                #banner-grid-417500648 .grid-col-3-4 {
                  height: 375px;
                }
              </style>
            </div>
          </div>

          <style>
            #section_1127819252 {
              padding-top: 50px;
              padding-bottom: 50px;
            }
          </style>
        </section>

        <section class="section" id="section_1684955892">
          <div class="section-bg fill">
          </div>

          <div class="section-content relative">
            <div class="row align-middle align-center" id="row-1313385645">
              <div id="col-733732348" class="col small-12 large-12" data-animate="fadeInUp">
                <div class="col-inner text-center">
                  <div id="text-2119337678" class="text text-heading">
                    <h2><?php echo metta_get_field('about_branch_title') ?: 'Khám phá Chi Nhánh'; ?></h2>

                    <style>
                      #text-2119337678 {
                        font-size: 1.5rem;
                        text-align: center;
                      }
                    </style>
                  </div>

                  <div id="gap-2089277897" class="gap-element clearfix" style="display: block; height: auto">
                    <style>
                      #gap-2089277897 {
                        padding-top: 30px;
                      }
                    </style>
                  </div>

	                  <div id="text-3314873065" class="text">
                      <?php $about_branches = metta_get_branch_items('about_branch_items', 'about_branch'); ?>
                      <?php if (!empty($about_branches)): ?>
                      <div class="row align-middle align-center branchs">
                        <?php foreach ($about_branches as $branch): ?>
                        <?php $branch_link = !empty($branch['link']) ? $branch['link'] : '#'; ?>
                        <div class="col large-3">
                            <div class="branch-item">
                              <div class="">
                                <div class="img has-hover section-service-main-img-1 x md-x lg-x y md-y lg-y">
                                  <div class="img-inner image-cover dark" style="padding-top: 56.25%">
                                    <img decoding="async"
                                      src="<?php echo esc_url($branch['image']); ?>"
                                      class="attachment-original size-original"
                                      alt="<?php echo esc_attr($branch['name']); ?>"
                                      style="width:100%;height:100%;object-fit:cover;" />
                                  </div>
                                </div>
                              </div>
                              <div class="" style="padding: 1rem; background-color: white">
                                <p class="newest-title text-center text-vip" style="font-size: 1.2rem; font-weight: bold; margin-bottom: 10px;">
                                  <?php echo esc_html($branch['name']); ?>
                                </p>
                                <p class="" style="margin-bottom: 8px">
                                  <span style="font-weight: bold">Hotline:</span>
                                  <?php echo esc_html($branch['hotline']); ?>
                                </p>
                                <p>
                                  <span style="font-weight: bold">Địa chỉ:</span>
                                  <?php echo esc_html($branch['address']); ?>
                                </p>
                                <div class="branch-button" style="display: flex; align-items: center; justify-content: center; width: 100%; gap: 1rem;">
                                  <a href="<?php echo esc_url($branch_link); ?>">
                                    <div class="button secondary is-small lowercase" style="border-radius: 99px">
                                      <span>Xem Chi tiết</span>
                                    </div>
                                  </a>
                                  <a href="tel:<?php echo esc_attr($branch['hotline']); ?>">
                                    <div class="button secondary is-small lowercase" style="border-radius: 99px">
                                      <span>Gọi Đặt Lịch</span>
                                    </div>
                                  </a>
                                </div>
                              </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                      </div>
                      <?php else: ?>
	                    <div class="row align-middle align-center branchs">
                      <div class="col large-3">
                        <a href="/chi-nhanh/metta-spa-ten-lua">
                          <div class="branch-item">
                            <div class="">
                              <div class="img has-hover section-service-main-img-1 x md-x lg-x y md-y lg-y"
                                id="image_1666817933">
                                <div class="img-inner image-cover dark" style="padding-top: 56.25%">
                                  <img decoding="async" width="1414" height="812"
                                    src="<?php echo esc_url( metta_about_image_url('about_branch_1_img', get_site_url() . '/wp-content/uploads/2025/12/z7321243434473_0b4c7065cbeea0b7a8817deed701d409.jpg') ); ?>"
                                    class="attachment-original size-original" alt=""
                                    style="width:100%;height:100%;object-fit:cover;" />
                                </div>

                                <style>
                                  #image_1666817933 {
                                    width: 100%;
                                  }
                                </style>
                              </div>
                            </div>
                            <div class="" style="padding: 1rem; background-color: white">
                              <p class="newest-title text-center text-vip" style="
                                    font-size: 1.2rem;
                                    font-weight: bold;
                                    margin-bottom: 10px;
                                  ">
                                <?php echo metta_get_field('about_branch_1_name') ?: 'Metta Spa Tên Lửa'; ?>
                              </p>
                              <p class="" style="margin-bottom: 8px">
                                <span style="font-weight: bold">Hotline:</span>
                                <?php echo metta_get_field('about_branch_1_hotline') ?: '0938431234'; ?>
                              </p>
                              <p>
                                <span style="font-weight: bold">Địa chỉ:</span>
                                378 Tên Lửa, P. Bình Trị Đông B, Q. Bình Tân,
                                TP. HCM
                              </p>
                              <div class="branch-button" style="
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    width: 100%;
                                    gap: 1rem;
                                  ">
                                <div class="button secondary is-small lowercase" style="border-radius: 99px">
                                  <span>Xem Chi tiết</span>
                                </div>
                                <a href="tel:<?php echo metta_get_field('about_branch_1_hotline') ?: '0938431234'; ?>">
                                  <div class="button secondary is-small lowercase" style="border-radius: 99px">
                                    <span>Gọi Đặt Lịch</span>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="col large-3">
                        <a href="/chi-nhanh/metta-spa-bien-hoa">
                          <div class="branch-item">
                            <div class="">
                              <div class="img has-hover section-service-main-img-1 x md-x lg-x y md-y lg-y"
                                id="image_984473400">
                                <div class="img-inner image-cover dark" style="padding-top: 56.25%">
                                  <img decoding="async" width="1413" height="812"
                                    src="<?php echo esc_url( metta_about_image_url('about_branch_2_img', get_site_url() . '/wp-content/uploads/2026/03/z7321244104166_d5f483d125730f143fbd2d4124c88633.jpg') ); ?>"
                                    class="attachment-original size-original" alt=""
                                    style="width:100%;height:100%;object-fit:cover;" />
                                </div>

                                <style>
                                  #image_984473400 {
                                    width: 100%;
                                  }
                                </style>
                              </div>
                            </div>
                            <div class="" style="padding: 1rem; background-color: white">
                              <p class="newest-title text-center text-vip" style="
                                    font-size: 1.2rem;
                                    font-weight: bold;
                                    margin-bottom: 10px;
                                  ">
                                <?php echo metta_get_field('about_branch_2_name') ?: 'Metta Spa Biên Hòa'; ?>
                              </p>
                              <p class="" style="margin-bottom: 8px">
                                <span style="font-weight: bold">Hotline:</span>
                                <?php echo metta_get_field('about_branch_2_hotline') ?: '0911535339'; ?>
                              </p>
                              <p>
                                <span style="font-weight: bold">Địa chỉ:</span>
                                LK23 Đường N1, KDC Bửu Long, Biên Hòa, Đồng
                                Nai
                              </p>
                              <div class="branch-button" style="
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    width: 100%;
                                    gap: 1rem;
                                  ">
                                <div class="button secondary is-small lowercase" style="border-radius: 99px">
                                  <span>Xem Chi tiết</span>
                                </div>
                                <a href="tel:<?php echo metta_get_field('about_branch_2_hotline') ?: '0911535339'; ?>">
                                  <div class="button secondary is-small lowercase" style="border-radius: 99px">
                                    <span>Gọi Đặt Lịch</span>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                        </a>
	                      </div>
	                    </div>
                      <?php endif; ?>

	                    <style>
                      #text-3314873065 {
                        text-align: center;
                        color: rgb(0, 0, 0);
                      }

                      #text-3314873065>* {
                        color: rgb(0, 0, 0);
                      }
                    </style>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <style>
            #section_1684955892 {
              padding-top: 30px;
              padding-bottom: 30px;
            }

            #section_1684955892 .section-bg img {
              object-position: 0% 0%;
            }
          </style>
        </section>
      </div>
    </main>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
  <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function () {
      do_parallax("parallax-1", 0.3);
      do_parallax("parallax-2", 0.1);
      do_parallax("parallax-3", 0.2);
      do_parallax("parallax-4", 0.3);

      function do_parallax(className, depth) {
        let parallaxClasses = document.querySelectorAll("." + className);

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

  <?php
  // Explicitly load Flickity CSS from CDN for custom template slider support
  // (flatsome's chunk.slider.js is a webpack bundle and does NOT expose Flickity globally)
  ?>
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script>
  // Initialize all Flatsome-style Flickity sliders found in this custom template
  document.addEventListener('DOMContentLoaded', function() {
    function initSliders() {
      var sliders = document.querySelectorAll('[data-flickity-options]');
      sliders.forEach(function(el) {
        if (el.classList.contains('flickity-enabled')) return;
        try {
          var opts = JSON.parse(el.getAttribute('data-flickity-options'));
          new Flickity(el, opts);
        } catch(e) {
          console.warn('Slider init error:', e, el);
        }
      });
    }

    // Run after a short delay to allow lazyload images to settle
    setTimeout(initSliders, 300);
  });
  </script>

<?php get_footer(); ?>
