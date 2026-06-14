<?php get_header(); ?>

<style>
/* ========================================================
   GLOBAL BACKGROUND: Ảnh nền Gemini với blur effect
   Áp dụng cho tất cả sections từng có nền trắng
======================================================== */

/* Fixed background image cho toàn trang */
body::before {
  content: '';
  position: fixed;
  inset: 0;
  z-index: -2;
  background: url('<?php echo get_template_directory_uri(); ?>/images/green_lotus_bg.png') center center / cover no-repeat;
  filter: brightness(0.72);
}

/* Overlay tối nhẹ để text dễ đọc */
body::after {
  content: '';
  position: fixed;
  inset: 0;
  z-index: -1;
  background: linear-gradient(110deg, rgba(7, 33, 23, 0.45) 0%, rgba(75, 35, 42, 0.55) 45%, rgba(90, 47, 56, 0.5) 65%, rgba(3, 15, 10, 0.78) 100%);
  pointer-events: none;
}

/* Remove nền trắng cũ của các sections */
#section_707428218 .section-bg,
#section_1996009872 .section-bg,
#section_219169141 .section-bg,
#section_1008654261 .section-bg,
#section_1005572536 .section-bg {
  display: none !important;
}

#section_707428218,
#section_1996009872,
#section_219169141,
#section_1008654261,
#section_1005572536 {
  background: transparent !important;
}

/* News section cũng transparent */
#section_news_home {
  background: transparent !important;
}

/* Section map/footer cũng transparent */
#main,
#wrapper,
.absolute-footer {
  background: transparent !important;
}

/* ========================================================
   SECTION NÂOU (hero, combo, review): Gemini bg với blur
======================================================== */
#section_2082777772 {
  position: relative;
  background: transparent !important;
}

/* Blur filter cho tất cả ảnh nền trong sections nâu */
#banner-1503614659 .banner-bg.fill img,
#section_2082777772 .banner-bg.fill img,
#section_467763596 .section-bg img {
  filter: blur(4px) brightness(0.65) !important;
  transform: scale(1.06) !important;
  transition: none !important;
}

#banner-1503614659,
#banner-1503614659 .banner-inner {
  position: relative;
  overflow: hidden;
}

#banner-1503614659 .banner-bg.blur {
  position: absolute !important;
  inset: 0 !important;
  height: auto !important;
  max-height: none !important;
  background-color: rgba(42, 18, 8, 0.6) !important;
  pointer-events: none;
}

#banner-1503614659 .hero-v2-container,
#banner-1503614659 .banner-layers {
  position: relative;
  z-index: 2;
}

#section_2082777772 .section-bg,
#section_2082777772 .banner-bg.fill {
  display: block !important;
  opacity: 1 !important;
  visibility: visible !important;
}
#section_2082777772 .banner-bg.blur {
  background-color: rgba(42, 18, 8, 0.6) !important;
  z-index: 1;
}

/* ========================================================
   COMBO CARDS: Vibrant dark glassmorphism style
   Giống reference design - nền tối, border vàng, glow
======================================================== */
#section_2082777772 .home-combo-col .col-inner {
  background: linear-gradient(135deg, rgba(30,12,3,0.88) 0%, rgba(80,40,8,0.82) 100%) !important;
  border: 1.5px solid rgba(244,157,33,0.6) !important;
  border-radius: 14px !important;
  box-shadow: 0 0 20px rgba(244,157,33,0.18), inset 0 0 30px rgba(0,0,0,0.3) !important;
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  transition: box-shadow 0.35s ease, transform 0.35s ease, border-color 0.35s ease !important;
}

#section_2082777772 .home-combo-col .col-inner:hover {
  box-shadow: 0 0 40px rgba(244,157,33,0.45), 0 8px 32px rgba(0,0,0,0.45) !important;
  border-color: var(--metta-main) !important;
  transform: translateY(-4px) scale(1.01);
}

/* Combo box-text: nền tối trong suốt */
#section_2082777772 .box-text[style*="background-color: rgb(255, 255, 255)"],
#section_2082777772 .box-text[style*="background-color:rgb(255, 255, 255)"],
#section_2082777772 .box-text[style] {
  background: transparent !important;
}

#section_2082777772 .box-text-inner p,
#section_2082777772 .box-text-inner p b,
#section_2082777772 .box-text-inner p strong {
  color: #f5e8cc !important;
}

#section_2082777772 .box-text-inner p[style*="color: black"],
#section_2082777772 .box-text-inner p[style*="color:black"] {
  color: #dfc49a !important;
}

#section_2082777772 .box-text-inner p strong {
  color: var(--metta-main) !important;
}

#section_2082777772 .box-text-inner p b {
  color: #fff !important;
  font-size: 0.95em;
  letter-spacing: 0.5px;
  text-shadow: 0 0 12px rgba(244,157,33,0.5);
}

/* Title: glow vàng */
#section_2082777772 .text.text-heading h2 {
  color: #fff !important;
  text-shadow: 0 0 30px rgba(244,157,33,0.6), 0 2px 8px rgba(0,0,0,0.5);
}

/* Desc text trắng */
#section_2082777772 #text-3264507689 p,
#section_2082777772 #text-3264507689 p * {
  color: #e8d5b0 !important;
}

/* Image trong combo: border vàng glow */
#section_2082777772 .box-image {
  position: relative;
}
#section_2082777772 .box-image::after {
  content: '';
  position: absolute;
  inset: 0;
  border-right: 2px solid rgba(244,157,33,0.4);
  pointer-events: none;
  z-index: 2;
}

/* ========================================================
   SECTIONS TRẮNG: Text màu sáng vì nền tối
======================================================== */
#section_707428218 .text-heading *,
#section_1996009872 .text-heading *,
#section_219169141 .text-heading *,
#section_1008654261 .text-heading * {
  text-shadow: 0 2px 10px rgba(0,0,0,0.4);
}

/* Branch items: glassmorphism nhẹ */
.branch-item {
  background: rgba(50,25,8,0.75) !important;
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
}

.branch-item > div[style*="background-color: white"],
.branch-item > div[style*="background-color:white"] {
  background: rgba(30,15,5,0.8) !important;
}

.branch-item .newest-title,
.branch-item p,
.branch-item span {
  color: #f5e8cc !important;
}

/* News cards: glassmorphism */
#section_news_home .branch-item {
  background: rgba(40,18,5,0.78) !important;
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  border: 1px solid rgba(244,157,33,0.3) !important;
  box-shadow: 0 4px 24px rgba(0,0,0,0.4) !important;
}

#section_news_home .branch-item > div[style] {
  background: transparent !important;
}

#section_news_home .newest-title,
#section_news_home .news-excerpt,
#section_news_home .news-date {
  color: #f5e8cc !important;
}

#section_news_home h2 {
  color: #fff !important;
  text-shadow: 0 0 20px rgba(244,157,33,0.5);
}

/* Intro content text trên nền tối */
#section_707428218 .text p,
#section_707428218 .intro-content-wrapper p,
#section_1996009872 .text p,
#section_219169141 .text p {
  color: #f0e0c0 !important;
}

/* Box text cũ trắng trong section why → transparent */
#section_1996009872 .home-why-image-box .box-text {
  background: rgba(30,12,3,0.82) !important;
}

/* ==============================================================
   MAP & LAST SECTION
============================================================== */
#section_1005572536 .section-content,
section.section:last-of-type {
  position: relative;
  z-index: 1;
}

/* Text on white/light backgrounds → dark readable  */
#section_1008654261 .text p,
#section_1008654261 .text h2 {
  color: #f5e8cc !important;
}

/* Gallery heading */
#section_1008654261 p[style*="color:#555"],
#section_1008654261 p[style*="color: #555"] {
  color: #d8c0a0 !important;
}
</style>

<?php
// ========================================================
// ẢNH NỀN SECTIONS NÂOU — Đọc từ ACF (fallback: Gemini)
// ========================================================
$_default_bg = get_site_url() . '/wp-content/uploads/2026/05/Gemini_Generated_Image_12ahia12ahia12ah-scaled.png';
$_hero_bg    = metta_get_field('hero_bg_image')   ?: $_default_bg;
$_combo_bg   = metta_get_field('combo_bg_image')  ?: $_default_bg;
$_review_bg  = metta_get_field('review_bg_image') ?: $_default_bg;
?>

    <main id="main" class="">
      <div id="content" role="main">
        <div class="banner has-hover" id="banner-1503614659">
          <div class="banner-inner fill">
            <div class="banner-bg fill">
              <img fetchpriority="high" decoding="async" width="2560" height="1707"
                src="<?php echo esc_url($_hero_bg); ?>"
                class="bg attachment-original size-original" alt="" style="filter: blur(4px) brightness(0.65); transform: scale(1.06);" />
            </div>
            <div class="hero-v2-container">
              <div class="hero-v2-text">
                <div class="hero-chip">
                  <span class="hero-chip-icon">✺</span>
                  <span><?php echo metta_get_with_fallback('hero_chip', 'Trải nghiệm dưỡng sinh cao cấp'); ?></span>
                </div>

                <h1 class="hero-title">
                  <span class="hero-title-main"><?php echo metta_get_with_fallback('hero_title_main', 'Metta cùng bạn xây dựng'); ?></span>
                  <span class="hero-title-sub"><?php echo metta_get_with_fallback('hero_title_sub', 'lối sống dưỡng sinh.'); ?></span>
                </h1>

                <p class="hero-desc">
                  <?php echo metta_get_with_fallback('hero_desc', 'Tái tạo sức khoẻ từ gốc – lan toả giá trị dưỡng sinh Đông Y. Chúng tôi chọn con đường chậm, tự nhiên, chân thật – để sức khoẻ trở về đúng bản chất.'); ?>
                </p>

                <?php 
                  $hero_link = metta_get_field('hero_booking_link');
                  if (empty($hero_link)) $hero_link = 'https://datlich.mettaspadongy.vn/';
                ?>
                <a href="<?php echo esc_url($hero_link); ?>" class="hero-booking-link" target="_blank">
                  <?php echo metta_get_with_fallback('hero_cta_text', 'Bắt đầu hành trình dưỡng sinh'); ?>
                </a>
              </div>

              <div class="hero-v2-image-card">
                <div class="swiper hero-swiper">
                  <div class="swiper-wrapper">
                    <?php 
                    $slides = array(
                        array('image' => metta_get_field('slide_1_image'), 'label' => metta_get_field('slide_1_label')),
                        array('image' => metta_get_field('slide_2_image'), 'label' => metta_get_field('slide_2_label')),
                        array('image' => metta_get_field('slide_3_image'), 'label' => metta_get_field('slide_3_label')),
                    );
                    $has_custom_slides = false;
                    foreach($slides as $slide) { if($slide['image']) $has_custom_slides = true; }

                    if($has_custom_slides): 
                        foreach($slides as $slide): if($slide['image']): ?>
                            <div class="swiper-slide hero-slide-item">
                              <img src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['label']; ?>" />
                              <div class="hero-image-label"><?php echo $slide['label']; ?></div>
                            </div>
                        <?php endif; endforeach; 
                    else: ?>
                        <div class="swiper-slide hero-slide-item">
                          <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/12/z7321243484732_2d1e46a5ab82dc922a8ed3862ffd0c98.jpg"
                            alt="Metta slide fallback" />
                          <div class="hero-image-label">Metta Spa Tên Lửa</div>
                        </div>
                        <div class="swiper-slide hero-slide-item">
                          <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/12/z7321243502543_d287f9b41171f1aa3b8ab4eca5f92808.jpg"
                            alt="Metta slide fallback" />
                          <div class="hero-image-label">Metta Spa Tên Lửa</div>
                        </div>
                        <div class="swiper-slide hero-slide-item">
                          <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/12/bienhoa_bg.webp" alt="Metta slide fallback" />
                          <div class="hero-image-label">Metta Spa Tên Lửa</div>
                        </div>
                    <?php endif; ?>
                  </div>
                  <!-- Add Pagination -->
                  <div class="swiper-pagination"></div>
                  <!-- Add Navigation -->
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
              </div>
            </div>

            <div class="banner-bg blur"></div>
            <div class="banner-layers container">
              <div class="fill banner-link"></div>
            </div>
          </div>

          <style>
            #banner-1503614659 {
              padding-top: 0 !important;
              height: auto !important;
            }
            #banner-1503614659 .banner-inner {
              position: relative !important;
              height: auto !important;
            }

            #banner-1503614659 .banner-bg img {
              object-position: 59% 29%;
            }
          </style>
        </div>



        <section class="section" id="section_707428218">
          <div class="section-bg fill">
            <img decoding="async" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              class="bg attachment-original size-original lazyload" alt=""
              data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2026/03/Frame-Metta-Moi.jpg" /><noscript><img decoding="async"
                src="<?php echo get_site_url(); ?>/wp-content/uploads/2026/03/Frame-Metta-Moi.jpg" class="bg attachment-original size-original" alt=""
                data-eio="l" /></noscript>
          </div>

          <div class="section-content relative">
            <div class="row row-large align-middle" id="row-1482899156">
              <div id="col-348628451" class="col medium-4 small-12 large-4" data-animate="fadeInLeft">
                <div class="col-inner">
                  <div class="img has-hover spa-img x md-x lg-x y md-y lg-y" id="image_1449128666">
                    <div class="img-inner image-cover dark" style="padding-top: 120%">
                      <?php $intro_img_left = metta_get_field('intro_img_left') ?: get_site_url() . '/wp-content/uploads/2025/12/z7321243467496_f7d4cb3936392fd3897d465a35fcd2ed.jpg'; ?>
                      <img decoding="async" width="1920" height="1280"
                        src="<?php echo $intro_img_left; ?>"
                        class="attachment-original size-original lazyload" alt="Intro left" />
                    </div>

                    <style>
                      #image_1449128666 {
                        width: 100%;
                      }
                    </style>
                  </div>
                </div>
              </div>

              <div id="col-148745418" class="col medium-4 small-12 large-4" data-animate="fadeInUp">
                <div class="col-inner text-center">
                  <div id="text-1490954131" class="text text-heading">
                    <h2><?php echo metta_get_with_fallback('intro_title', 'Metta Spa Đông Y'); ?></h2>

                    <style>
                      #text-1490954131 {
                        font-size: 1rem;
                        text-align: center;
                        color: var(--metta-primary);
                      }

                      #text-1490954131>* {
                        color: var(--metta-primary);
                      }

                      @media (min-width: 550px) {
                        #text-1490954131 {
                          font-size: 1rem;
                        }
                      }

                      @media (min-width: 850px) {
                        #text-1490954131 {
                          font-size: 1.5rem;
                        }
                      }
                    </style>
                  </div>

                  <div id="text-2564374111" class="text textjustify">
                    <div class="intro-content-wrapper">
                      <?php echo metta_get_with_fallback('intro_content', '<p>Metta đông y Spa là nơi tái hiện nghệ thuật làm đẹp truyền thống của người Á Đông – kết hợp tinh hoa dưỡng sinh cổ truyền với liệu pháp chăm sóc hiện đại, giúp thanh lọc cơ thể, làm đẹp từ sâu bên trong. Giữa nhịp sống tất bật, Metta Spa không chỉ giúp bạn thư giãn, phục hồi năng lượng, mà còn nâng niu làn da, cơ thể và tâm hồn theo cách tự nhiên, hài hòa – như cách ông bà ta xưa từng làm đẹp bằng thảo mộc và hơi ấm. Tại Metta Spa, làm đẹp là một hành trình trở về với bản thể an nhiên và trọn vẹn hơn.</p>'); ?>
                    </div>
                    <style>
                      #text-2564374111 {
                        font-size: 0.75rem;
                        text-align: left;
                      }

                      @media (min-width: 850px) {
                        #text-2564374111 {
                          font-size: 1rem;
                        }
                      }
                    </style>
                  </div>

                  <a href="<?php echo home_url("/gioi-thieu"); ?>" class="button primary is-link is-larger lowercase reveal-icon">
                    <span>Tìm hiểu thêm</span>
                    <i class="icon-angle-right" aria-hidden="true"></i></a>
                </div>
              </div>

              <div id="col-343336677" class="col medium-4 small-12 large-4" data-animate="fadeInRight">
                <div class="col-inner">
                  <div class="img has-hover spa-img x md-x lg-x y md-y lg-y" id="image_84487055">
                    <div class="img-inner image-cover dark" style="padding-top: 120%">
                      <?php $intro_img_right = metta_get_field('intro_img_right') ?: get_site_url() . '/wp-content/uploads/2025/12/z7321243502520_294b9d30c60547072537fd83423b6a57.jpg'; ?>
                      <img decoding="async" width="1920" height="1280"
                        src="<?php echo $intro_img_right; ?>"
                        class="attachment-original size-original lazyload" alt="Intro right" />
                    </div>

                    <style>
                      #image_84487055 {
                        width: 100%;
                      }
                    </style>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <style>
            #section_707428218 {
              padding-top: 30px;
              padding-bottom: 30px;
            }
          </style>
        </section>

        <section class="section" id="section_1996009872">
          <div class="section-bg fill">
            <img decoding="async" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              class="bg attachment-original size-original lazyload" alt=""
              data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2026/03/Frame-Metta-Moi.jpg" /><noscript><img decoding="async"
                src="<?php echo get_site_url(); ?>/wp-content/uploads/2026/03/Frame-Metta-Moi.jpg" class="bg attachment-original size-original" alt=""
                data-eio="l" /></noscript>
          </div>

          <div class="section-content relative">
            <div class="row align-middle align-center" id="row-1948048032">
              <div id="col-994053055" class="col medium-8 small-12 large-6" data-animate="fadeInUp">
                <div class="col-inner text-center">
                  <div id="text-277997965" class="text text-heading">
                    <h2><?php echo metta_get_with_fallback('metta_title', 'Tại Metta Spa Có gì'); ?></h2>

                    <style>
                      #text-277997965 {
                        font-size: 1rem;
                        text-align: center;
                        color: var(--metta-primary);
                      }

                      #text-277997965>* {
                        color: var(--metta-primary);
                      }

                      @media (min-width: 550px) {
                        #text-277997965 {
                          font-size: 1rem;
                        }
                      }

                      @media (min-width: 850px) {
                        #text-277997965 {
                          font-size: 1.5rem;
                        }
                      }
                    </style>
                  </div>

                  <div id="text-4125282314" class="text">
                    <p>
                      <?php echo metta_get_with_fallback('metta_desc', 'Metta đông y Spa – nơi chăm sóc sức khỏe và sắc đẹp từ gốc rễ. Với liệu trình dưỡng sinh chuẩn mực, thảo dược tinh chọn và đội ngũ tận tâm, chúng tôi giúp bạn thư giãn, phục hồi năng lượng và nuôi dưỡng vẻ đẹp bền lâu.'); ?><br />

                      <style>
                        #text-4125282314 {
                          font-size: 0.75rem;
                        }

                        @media (min-width: 850px) {
                          #text-4125282314 {
                            font-size: 1rem;
                          }
                        }
                      </style>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" id="row-1593894043">
              <div id="col-435996712" class="col medium-4 small-12 large-4" data-animate="fadeInUp">
                <div class="col-inner">
                  <div class="box has-hover home-why-image-box has-hover box-shade dark box-text-bottom">
                    <div class="box-image">
                      <div class="image-zoom image-cover" style="padding-top: 120%">
                        <?php $fea_1_img = metta_get_field('fea_1_img') ?: get_site_url() . '/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg'; ?>
                        <img src="<?php echo $fea_1_img; ?>" class="attachment-original size-original lazyload" alt="feature 1" />
                        <div class="shade"></div>
                      </div>
                    </div>

                    <div class="box-text text-left">
                      <div class="box-text-inner">
                        <div id="text-730975109" class="text text-vip">
                          <p>
                            <strong><?php echo metta_get_with_fallback('fea_1_title', 'Gội Đầu Dưỡng Sinh & Khai Thông Huyệt Đạo'); ?></strong><br />
                          </p>
                        </div>

                        <div id="gap-196662748" class="gap-element clearfix" style="display: block; height: auto"></div>

                        <div id="text-1945135082" class="text">
                          <p>
                            <i><?php echo metta_get_with_fallback('fea_1_sub', 'Hơn cả làm sạch, đó là liệu pháp "thay não" cho người bận rộn.'); ?></i><br />
                            <?php echo metta_get_with_fallback('fea_1_desc', 'Quy trình 75 phút kết hợp giữa nước gội thảo dược được nấu tươi mỗi ngày (Bồ kết, Hà thủ ô, Gừng...) và kỹ thuật Ấn - Vuốt - Miết độc quyền vào vùng Bách Hội. Liệu pháp giúp đả thông kinh lạc vùng đầu, đưa dưỡng chất thấm sâu vào nang tóc.'); ?>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php 
                    $fea_cta_link = metta_get_field('feature_cta_link');
                    if (empty($fea_cta_link)) $fea_cta_link = 'https://datlich.mettaspadongy.vn/';
                  ?>
                  <a href="<?php echo esc_url($fea_cta_link); ?>" class="btn-cta" target="_blank"> <?php echo metta_get_with_fallback('feature_cta_text', 'ĐẶT LỊCH'); ?> </a>
                </div>
              </div>

              <div id="col-1049207181" class="col medium-4 small-12 large-4" data-animate="fadeInUp">
                <div class="col-inner">
                  <div class="box has-hover home-why-image-box has-hover box-shade dark box-text-bottom">
                    <div class="box-image">
                      <div class="image-zoom image-cover" style="padding-top: 120%">
                        <?php $fea_2_img = metta_get_field('fea_2_img') ?: get_site_url() . '/wp-content/uploads/2025/12/z7321243484732_2d1e46a5ab82dc922a8ed3862ffd0c98.jpg'; ?>
                        <img src="<?php echo $fea_2_img; ?>" class="attachment-original size-original lazyload" alt="feature 2" />
                        <div class="shade"></div>
                      </div>
                    </div>

                    <div class="box-text text-left">
                      <div class="box-text-inner">
                        <div id="text-290984608" class="text text-vip">
                          <p>
                            <strong><?php echo metta_get_with_fallback('fea_2_title', 'Giải Phóng Tắc Nghẽn Cổ Vai Gáy'); ?></strong><br />
                          </p>
                        </div>

                        <div id="gap-417304955" class="gap-element clearfix" style="display: block; height: auto"></div>

                        <div id="text-1768467507" class="text">
                          <p>
                            <i><?php echo metta_get_with_fallback('fea_2_sub', 'Gỡ bỏ "tảng đá" trên vai – Trả lại sự linh hoạt vốn có.'); ?></i>
                            <br />
                            <?php echo metta_get_with_fallback('fea_2_desc', 'Sử dụng kỹ thuật day ấn sâu vào các huyệt đạo "vàng" (Phong Trì, Kiên Tỉnh, Đại Chùy) kết hợp với tinh dầu thảo dược ấm nóng. KTV Metta sẽ bóc tách từng bó cơ bị co cứng, giải phóng chèn ép dây thần kinh và khôi phục đường cong sinh lý.'); ?>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a href="<?php echo esc_url($fea_cta_link); ?>" class="btn-cta" target="_blank"> <?php echo metta_get_with_fallback('feature_cta_text', 'ĐẶT LỊCH'); ?> </a>
                </div>
              </div>

              <div id="col-474413904" class="col medium-4 small-12 large-4" data-animate="fadeInUp">
                <div class="col-inner">
                  <div class="box has-hover home-why-image-box has-hover box-shade dark box-text-bottom">
                    <div class="box-image">
                      <div class="image-zoom image-cover" style="padding-top: 120%">
                        <?php $fea_3_img = metta_get_field('fea_3_img') ?: get_site_url() . '/wp-content/uploads/2026/01/YAM01125.jpg'; ?>
                        <img src="<?php echo $fea_3_img; ?>" class="attachment-original size-original lazyload" alt="feature 3" />
                        <div class="shade"></div>
                      </div>
                    </div>

                    <div class="box-text text-left">
                      <div class="box-text-inner">
                        <div id="text-3734297951" class="text text-vip">
                          <p>
                            <strong><?php echo metta_get_with_fallback('fea_3_title', 'Dưỡng Sinh Tạng Phủ (Gan - Thận - Phổi)'); ?></strong><br />
                          </p>
                        </div>

                        <div id="gap-597401746" class="gap-element clearfix" style="display: block; height: auto"></div>

                        <div id="text-2221264951" class="text">
                          <p>
                            <i><?php echo metta_get_with_fallback('fea_3_sub', 'Thải độc tầng sâu – Hồi sinh năng lượng gốc.'); ?></i>
                            <br />
                            <?php echo metta_get_with_fallback('fea_3_desc', 'Liệu pháp độc quyền tập trung đả thông Kinh Bàng Quang (đường kinh lạc dài nhất cơ thể) và các huyệt Du vùng lưng. Kết hợp với chườm thảo dược và ngâm chân bài hàn, giúp đào thải độc tố tích tụ trong tạng phủ ra ngoài qua đường bài tiết.'); ?>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a href="<?php echo esc_url($fea_cta_link); ?>" class="btn-cta" target="_blank"> <?php echo metta_get_with_fallback('feature_cta_text', 'ĐẶT LỊCH'); ?> </a>
                </div>
              </div>
            </div>
            <div class="row row-collapse align-center" id="row-442928447">
              <div id="col-910727318" class="col small-12 large-12" data-animate="flipInX">
                <div class="col-inner text-center">
                  <a href="<?php echo home_url("/menu"); ?>" class="button primary is-link is-larger lowercase reveal-icon">
                    <span>Xem bảng giá</span>
                    <i class="icon-angle-right" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>

          <style>
            #section_1996009872 {
              padding-top: 30px;
              padding-bottom: 30px;
            }

            #section_1996009872 .section-bg img {
              object-position: 50% 47%;
            }
          </style>
        </section>

        <section class="section" id="section_2082777772">

          <div class="banner-bg blur" style="
    z-index: 1;
"></div>
          <div class="banner-bg fill" style="
    z-index: 0;
">
            <img fetchpriority="high" decoding="async" width="2560" height="1707"
              src="<?php echo esc_url($_combo_bg); ?>"
              class="bg attachment-original size-original" alt=""
              style="filter: blur(4px) brightness(0.65); transform: scale(1.05);" />
          </div>
          <div class="section-content relative">
            <div class="row align-middle align-center" id="row-1771230752">
              <div id="col-1928535536" class="col medium-7 small-12 large-7" data-animate="fadeInUp">
                <div class="col-inner text-center">
                  <div id="text-2432248035" class="text text-heading">
                    <h2><?php echo metta_get_with_fallback('combo_title', 'Combo Nổi Bật'); ?></h2>

                    <style>
                      #text-2432248035 {
                        font-size: 1rem;
                        text-align: center;
                        color: var(--metta-primary);
                      }

                      #text-2432248035>* {
                        color: var(--metta-main)
                      }

                      @media (min-width: 550px) {
                        #text-2432248035 {
                          font-size: 1rem;
                        }
                      }

                      @media (min-width: 850px) {
                        #text-2432248035 {
                          font-size: 1.5rem;
                        }
                      }
                    </style>
                  </div>

                  <div id="text-3264507689" class="text">
                    <p>
                      <?php echo metta_get_with_fallback('combo_desc', 'Kết hợp hài hòa các liệu trình dưỡng sinh đặc trưng của Metta Spa, mang đến sự thư giãn toàn diện, phục hồi năng lượng và nuôi dưỡng vẻ đẹp từ gốc rễ.'); ?><br />

                      <style>
                        #text-3264507689 {
                          font-size: 1rem;
                        }
                      </style>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <?php $combo_items = metta_get_combo_items(); ?>
            <?php if (!empty($combo_items)): ?>
            <div class="row row-small align-equal align-center hoverzoom" id="row-643826839">
              <?php foreach ($combo_items as $index => $combo): ?>
              <div class="col home-combo-col medium-11 small-12 large-6" data-animate="fadeInUp">
                <div class="col-inner">
                  <div class="box has-hover has-hover box-vertical box-text-bottom">
                    <div class="box-image" style="width: 30%">
                      <div class="image-cover" style="padding-top: 100%">
                        <img src="<?php echo esc_url($combo['image']); ?>" class="attachment-original size-original lazyload" alt="<?php echo esc_attr($combo['title']); ?>" />
                      </div>
                    </div>

                    <div class="box-text text-left" style="background: transparent; padding: 20px;">
                      <div class="box-text-inner">
                        <div class="text">
                          <p><strong><?php echo esc_html($combo['title']); ?></strong></p>
                          <p style="color: black;">
                            <?php echo wp_kses_post($combo['desc']); ?>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
            <?php else: ?>
            <div class="row row-small align-equal align-center hoverzoom" id="row-643826839">
              <div id="col-1492201594" class="col home-combo-col medium-11 small-12 large-6" data-animate="fadeInUp">
                <div class="col-inner">
                  <div class="box has-hover has-hover box-vertical box-text-bottom">
                    <div class="box-image" style="width: 30%">
                      <div class="image-cover" style="padding-top: 100%">
                        <?php $combo_1_img = metta_get_field('combo_1_img') ?: get_site_url() . '/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg'; ?>
                        <img src="<?php echo $combo_1_img; ?>" class="attachment-original size-original lazyload" alt="combo 1" />
                      </div>
                    </div>

                    <div class="box-text text-left" style="background: transparent; padding: 20px;">
                      <div class="box-text-inner">
                        <div id="text-3249797218" class="text">
                          <p><b><?php echo metta_get_with_fallback('combo_1_title', 'GỘI ĐẦU THẢO DƯỢC DƯỠNG SINH'); ?></b></p>
                          <p style="color: black;">
                            <?php echo metta_get_with_fallback('combo_1_desc', 'Một liệu pháp dưỡng sinh - chăm sóc vùng đầu<br />Thang 1: Bài Độc (bạc hà,hương nhu, sả) <br />Thang 2: Kiện Tóc - Giảm Áp (ngải cứu, thục địa, hà thủ ô)<br />Thang 3: Hoạt huyết - Thư giãn (quế chỉ, gừng, bồ kết)'); ?>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div id="col-1255803829" class="col home-combo-col medium-11 small-12 large-6" data-animate="fadeInUp">
                <div class="col-inner">
                  <div class="box has-hover has-hover box-vertical box-text-bottom">
                    <div class="box-image" style="width: 30%">
                      <div class="image-cover" style="padding-top: 100%">
                        <?php $combo_2_img = metta_get_field('combo_2_img') ?: get_site_url() . '/wp-content/uploads/2025/12/co_vai_gay.png'; ?>
                        <img src="<?php echo $combo_2_img; ?>" class="attachment-original size-original lazyload" alt="combo 2" />
                      </div>
                    </div>

                    <div class="box-text text-left" style="background: transparent; padding: 20px;">
                      <div class="box-text-inner">
                        <div id="text-1494801713" class="text">
                          <p>
                            <strong><?php echo metta_get_with_fallback('combo_2_title', 'DƯỠNG SINH VAI – CỔ – GÁY CHUYÊN SÂU'); ?></strong>
                          </p>
                          <p style="color: black;">
                            <?php echo metta_get_with_fallback('combo_2_desc', 'Khai thông huyệt đạo vùng cổ vai gáy – giải phóng khí trệ, đưa máu lên nuôi não. <br /><strong>Giúp thư giãn tâm trí, giảm đau mỏi, cải thiện giấc ngủ và tinh thần sáng suốt.</strong>'); ?>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div id="col-428061361" class="col home-combo-col medium-11 small-12 large-6" data-animate="fadeInUp">
                <div class="col-inner">
                  <div class="box has-hover has-hover box-vertical box-text-bottom">
                    <div class="box-image" style="width: 30%">
                      <div class="image-cover" style="padding-top: 100%">
                        <?php $combo_3_img = metta_get_field('combo_3_img') ?: get_site_url() . '/wp-content/uploads/2025/12/duong_gan_gia_uat.png'; ?>
                        <img src="<?php echo $combo_3_img; ?>" class="attachment-original size-original lazyload" alt="combo 3" />
                      </div>
                    </div>

                    <div class="box-text text-left" style="background: transparent; padding: 20px;">
                      <div class="box-text-inner">
                        <div id="text-313603790" class="text">
                          <p><strong><?php echo metta_get_with_fallback('combo_3_title', 'DƯỠNG GAN GIẢI UẤT'); ?></strong></p>
                          <p style="color: black;">
                            <?php echo metta_get_with_fallback('combo_3_desc', 'Giải uất kết, thanh nhiệt, điều hòa cảm xúc. <br /><strong>Giúp giải tỏa nóng giận, mệt mỏi, mang lại sự bình hòa và sáng da, nhẹ người.</strong>'); ?>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div id="col-1156650155" class="col home-combo-col medium-11 small-12 large-6" data-animate="fadeInUp">
                <div class="col-inner">
                  <div class="box has-hover has-hover box-vertical box-text-bottom">
                    <div class="box-image" style="width: 30%">
                      <div class="image-cover" style="padding-top: 100%">
                        <?php $combo_4_img = metta_get_field('combo_4_img') ?: get_site_url() . '/wp-content/uploads/2025/12/duong_tim_an_than.png'; ?>
                        <img src="<?php echo $combo_4_img; ?>" class="attachment-original size-original lazyload" alt="combo 4" />
                      </div>
                    </div>

                    <div class="box-text text-left" style="background: transparent; padding: 20px;">
                      <div class="box-text-inner">
                        <div id="text-2137059101" class="text">
                          <p><strong><?php echo metta_get_with_fallback('combo_4_title', 'DƯỠNG TIM AN THẦN'); ?></strong></p>
                          <p style="color: black;">
                            <?php echo metta_get_with_fallback('combo_4_desc', 'Điều hòa khí huyết, an định thần trí. <br /><strong>Giúp giảm hồi hộp, lo âu, đưa tâm về trạng thái an nhiên – ngủ sâu giấc tự nhiên.</strong>'); ?>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div id="col-2049641740" class="col home-combo-col medium-11 small-12 large-6" data-animate="fadeInUp">
                <div class="col-inner">
                  <div class="box has-hover has-hover box-vertical box-text-bottom">
                    <div class="box-image" style="width: 30%">
                      <div class="image-cover" style="padding-top: 100%">
                        <?php $combo_5_img = metta_get_field('combo_5_img') ?: get_site_url() . '/wp-content/uploads/2025/12/cham_soc_phu_san.png'; ?>
                        <img src="<?php echo $combo_5_img; ?>" class="attachment-original size-original lazyload" alt="combo 5" />
                      </div>
                    </div>

                    <div class="box-text text-left" style="background: transparent; padding: 20px;">
                      <div class="box-text-inner">
                        <div id="text-2683001819" class="text">
                          <p><b><?php echo metta_get_with_fallback('combo_5_title', 'CHĂM SÓC PHỤ KHOA'); ?></b></p>
                          <p style="color: black;">
                            <?php echo metta_get_with_fallback('combo_5_desc', 'Cải thiện tình trạng khô rát , hàn lạnh tử cung lưu thông khí huyết, giảm đau bụng kinh, điều hòa kinh nguyệt , Tăng cường nội tiết'); ?>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div id="col-49980343" class="col home-combo-col medium-11 small-12 large-6" data-animate="fadeInUp">
                <div class="col-inner">
                  <div class="box has-hover has-hover box-vertical box-text-bottom">
                    <div class="box-image" style="width: 30%">
                      <div class="image-cover" style="padding-top: 100%">
                        <?php $combo_6_img = metta_get_field('combo_6_img') ?: get_site_url() . '/wp-content/uploads/2025/12/duong_than_an_nguyen.png'; ?>
                        <img src="<?php echo $combo_6_img; ?>" class="attachment-original size-original lazyload" alt="combo 6" />
                      </div>
                    </div>

                    <div class="box-text text-left" style="background: transparent; padding: 20px;">
                      <div class="box-text-inner">
                        <div id="text-1798232363" class="text">
                          <p><b><?php echo metta_get_with_fallback('combo_6_title', 'DƯỠNG THẬN AN NGUYÊN'); ?></b></p>
                          <p style="color: black;">
                            <?php echo metta_get_with_fallback('combo_6_desc', 'Thận là gốc của tiên thiên, sinh tinh , sinh tuỷ <br /><strong>Giúp ngủ sâu, cải thiện sinh lực – giữ gốc khỏe</strong>'); ?>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div id="col-992660562" class="col home-combo-col medium-11 small-12 large-6" data-animate="fadeInUp">
                <div class="col-inner">
                  <div class="box has-hover has-hover box-vertical box-text-bottom">
                    <div class="box-image" style="width: 30%">
                      <div class="image-cover" style="padding-top: 100%">
                        <img decoding="async" width="1920" height="1280"
                          src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAB4AAAAUAAQMAAACcQ910AAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAUJJREFUGBntwQENAAAAwiD7p34ON2AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwI0AtTwAAb3/K1kAAAAASUVORK5CYII="
                          class="attachment-original size-original lazyload" alt=""
                          data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/12/duong_phoi_ich_khi.png"
                          data-srcset="<?php echo get_site_url(); ?>/wp-content/uploads/2025/12/duong_phoi_ich_khi.png 1920w, <?php echo get_site_url(); ?>/wp-content/uploads/2025/12/duong_phoi_ich_khi.png 1024w, <?php echo get_site_url(); ?>/wp-content/uploads/2025/12/duong_phoi_ich_khi.png 768w, <?php echo get_site_url(); ?>/wp-content/uploads/2025/12/duong_phoi_ich_khi.png 1536w"
                          data-sizes="auto" data-eio-rwidth="1920" data-eio-rheight="1280" /><noscript><img
                            decoding="async" width="1920" height="1280"
                            src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/12/duong_phoi_ich_khi.png"
                            class="attachment-original size-original" alt="" srcset="
                                wp-content/uploads/2025/12/duong_phoi_ich_khi.png 1920w,
                                wp-content/uploads/2025/12/duong_phoi_ich_khi.png 1024w,
                                wp-content/uploads/2025/12/duong_phoi_ich_khi.png  768w,
                                wp-content/uploads/2025/12/duong_phoi_ich_khi.png 1536w
                              " sizes="(max-width: 1920px) 100vw, 1920px" data-eio="l" /></noscript>
                      </div>
                    </div>

                    <div class="box-text text-left" style="
                          background-color: rgb(255, 255, 255);
                          padding: 20px 20px 20px 20px;
                        ">
                      <div class="box-text-inner">
                        <div id="text-1726458294" class="text">
                          <p><b>DƯỠNG PHỔI ÍCH KHÍ</b></p>
                          <p style="
    color: black;
">
                            Thanh phế, bổ khí, khai thông hô hấp.
                            <br />
                            <strong>
                              Giúp nhẹ ngực, cải thiện hô hấp.
                            </strong>
                          </p>

                          <style>
                            #text-1726458294 {
                              font-size: 1rem;
                            }
                          </style>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div id="col-955075894" class="col home-combo-col medium-11 small-12 large-6" data-animate="fadeInUp">
                <div class="col-inner">
                  <div class="box has-hover has-hover box-vertical box-text-bottom">
                    <div class="box-image" style="width: 30%">
                      <div class="image-cover" style="padding-top: 100%">
                        <img decoding="async" width="1920" height="1280"
                          src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAB4AAAAUAAQMAAACcQ910AAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAUJJREFUGBntwQENAAAAwiD7p34ON2AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwI0AtTwAAb3/K1kAAAAASUVORK5CYII="
                          class="attachment-original size-original lazyload" alt=""
                          data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/12/duong_ty_vi_metta.png"
                          data-srcset="<?php echo get_site_url(); ?>/wp-content/uploads/2025/12/duong_ty_vi_metta.png 1920w, <?php echo get_site_url(); ?>/wp-content/uploads/2025/12/duong_ty_vi_metta.png 1024w, <?php echo get_site_url(); ?>/wp-content/uploads/2025/12/duong_ty_vi_metta.png 768w, <?php echo get_site_url(); ?>/wp-content/uploads/2025/12/duong_ty_vi_metta.png 1536w"
                          data-sizes="auto" data-eio-rwidth="1920" data-eio-rheight="1280" /><noscript><img
                            decoding="async" width="1920" height="1280"
                            src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/12/duong_ty_vi_metta.png"
                            class="attachment-original size-original" alt="" srcset="
                                wp-content/uploads/2025/12/duong_ty_vi_metta.png 1920w,
                                wp-content/uploads/2025/12/duong_ty_vi_metta.png 1024w,
                                wp-content/uploads/2025/12/duong_ty_vi_metta.png  768w,
                                wp-content/uploads/2025/12/duong_ty_vi_metta.png 1536w
                              " sizes="(max-width: 1920px) 100vw, 1920px" data-eio="l" /></noscript>
                      </div>
                    </div>

                    <div class="box-text text-left" style="
                          background-color: rgb(255, 255, 255);
                          padding: 20px 20px 20px 20px;
                        ">
                      <div class="box-text-inner">
                        <div id="text-2466836940" class="text">
                          <p><b>DƯỠNG TỲ VỊ METTA</b></p>
                          <p style="
    color: black;
">
                            Bổ trung ích khí, điều hóa tiêu hóa – hấp thu.
                            <br />
                            <strong>
                              Giúp cơ thể khỏe từ ruột, da hồng hào, tinh thần
                              minh mẫn và tăng miễn dịch.
                            </strong>
                          </p>

                          <style>
                            #text-2466836940 {
                              font-size: 1rem;
                            }
                          </style>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endif; ?>
            <div class="row row-collapse align-center" id="row-1679077685">
              <div id="col-1429906400" class="col small-12 large-12" data-animate="flipInX">
                <div class="col-inner text-center">
                  <a href="<?php echo home_url("/menu"); ?>" class="button primary is-link is-larger lowercase reveal-icon">
                    <span style="
    color: var(--metta-main);
">Xem bảng giá</span>
                    <i class="icon-angle-right" aria-hidden="true"></i></a>
                </div>

                <style>
                  #col-1429906400>.col-inner {
                    margin: 0px 0px 30px 0px;
                  }
                </style>
              </div>
            </div>
          </div>

          <style>
            #section_2082777772 {
              padding-top: 30px;
              padding-bottom: 30px;
            }

            #section_2082777772 .section-bg img {
              object-position: 52% 51%;
            }
          </style>
        </section>


        <section class="section" id="section_219169141">
          <div class="section-bg fill">
            <img decoding="async" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              class="bg attachment-original size-original lazyload" alt=""
              data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2026/03/Frame-Metta-Moi.jpg" /><noscript><img decoding="async"
                src="<?php echo get_site_url(); ?>/wp-content/uploads/2026/03/Frame-Metta-Moi.jpg" class="bg attachment-original size-original" alt=""
                data-eio="l" /></noscript>
          </div>

          <div class="section-content relative">
            <div class="row align-middle align-center" id="row-1161211132">
              <div id="col-970571642" class="col small-12 large-12" data-animate="fadeInUp">
                <div class="col-inner text-center">
                  <div id="text-1654905506" class="text text-heading">
                    <h2><?php echo metta_get_with_fallback('branch_title', 'Khám phá Chi Nhánh'); ?></h2>

                    <style>
                      #text-1654905506 {
                        font-size: 1rem;
                        text-align: center;
                        color: var(--metta-primary);
                      }

                      #text-1654905506>* {
                        color: var(--metta-primary);
                      }

                      @media (min-width: 550px) {
                        #text-1654905506 {
                          font-size: 1rem;
                        }
                      }

                      @media (min-width: 850px) {
                        #text-1654905506 {
                          font-size: 1.5rem;
                        }
                      }
                    </style>
                  </div>

                  <div id="gap-1030811025" class="gap-element clearfix" style="display: block; height: auto">
                    <style>
                      #gap-1030811025 {
                        padding-top: 30px;
                      }
                    </style>
                  </div>

                  <div id="text-3794665322" class="text">
                    <div class="row align-middle align-center branchs">
                      <div class="col large-3">
                        <a href="chi-nhanh/metta-spa-ten-lua">
                          <div class="branch-item">
                            <div class="">
                              <div class="img has-hover section-service-main-img-1 x md-x lg-x y md-y lg-y"
                                id="image_1666817933">
                                <div class="img-inner image-cover dark" style="padding-top: 56.25%">
                                  <img decoding="async" width="1414" height="812"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABYYAAAMsAQMAAADaj+SFAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAKNJREFUGBntwTEBAAAAwiD7p14Hb2AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKcANLYAAVdRCGgAAAAASUVORK5CYII="
                                    class="attachment-original size-original lazyload" alt=""
                                    data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/12/z7321243434473_0b4c7065cbeea0b7a8817deed701d409.jpg"
                                    data-srcset="<?php echo get_site_url(); ?>/wp-content/uploads/2025/12/z7321243434473_0b4c7065cbeea0b7a8817deed701d409.jpg 1414w, <?php echo get_site_url(); ?>/wp-content/uploads/2025/12/z7321243434473_0b4c7065cbeea0b7a8817deed701d409.jpg 1024w, <?php echo get_site_url(); ?>/wp-content/uploads/2025/12/z7321243434473_0b4c7065cbeea0b7a8817deed701d409.jpg 768w"
                                    data-sizes="auto" data-eio-rwidth="1414" data-eio-rheight="812" /><noscript><img
                                      decoding="async" width="1414" height="812"
                                      src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/12/z7321243434473_0b4c7065cbeea0b7a8817deed701d409.jpg"
                                      class="attachment-original size-original" alt="" srcset="
                                          wp-content/uploads/2025/12/z7321243434473_0b4c7065cbeea0b7a8817deed701d409.jpg 1414w,
                                          wp-content/uploads/2025/12/z7321243434473_0b4c7065cbeea0b7a8817deed701d409.jpg 1024w,
                                          wp-content/uploads/2025/12/z7321243434473_0b4c7065cbeea0b7a8817deed701d409.jpg  768w
                                        " sizes="(max-width: 1414px) 100vw, 1414px" data-eio="l" /></noscript>
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
                                Metta Spa Tên Lửa
                              </p>
                              <p class="" style="margin-bottom: 8px">
                                <span style="font-weight: bold">Hotline:</span>
                                0938431234
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
                                <a href="tel:0938431234">
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
                        <a href="chi-nhanh/metta-spa-bien-hoa">
                          <div class="branch-item">
                            <div class="">
                              <div class="img has-hover section-service-main-img-1 x md-x lg-x y md-y lg-y"
                                id="image_984473400">
                                <div class="img-inner image-cover dark" style="padding-top: 56.25%">
                                  <img decoding="async" width="1413" height="812"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABYUAAAMsAQMAAAAxuF+GAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAKNJREFUGBntwTEBAAAAwiD7p14Hb2AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKcANLYAAVdRCGgAAAAASUVORK5CYII="
                                    class="attachment-original size-original lazyload" alt=""
                                    data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2026/03/z7321244104166_d5f483d125730f143fbd2d4124c88633.jpg"
                                    data-srcset="<?php echo get_site_url(); ?>/wp-content/uploads/2026/03/z7321244104166_d5f483d125730f143fbd2d4124c88633.jpg 1413w, <?php echo get_site_url(); ?>/wp-content/uploads/2025/12/bienhoa_bg.webp 1024w, <?php echo get_site_url(); ?>/wp-content/uploads/2025/12/bienhoa_bg.webp 768w"
                                    data-sizes="auto" data-eio-rwidth="1413" data-eio-rheight="812" /><noscript><img
                                      decoding="async" width="1413" height="812"
                                      src="<?php echo get_site_url(); ?>/wp-content/uploads/2026/03/z7321244104166_d5f483d125730f143fbd2d4124c88633.jpg"
                                      class="attachment-original size-original" alt="" srcset="
                                          wp-content/uploads/2026/03/z7321244104166_d5f483d125730f143fbd2d4124c88633.jpg 1413w,
                                          wp-content/uploads/2025/12/bienhoa_bg.webp 1024w,
                                          wp-content/uploads/2025/12/bienhoa_bg.webp  768w
                                        " sizes="(max-width: 1413px) 100vw, 1413px" data-eio="l" /></noscript>
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
                                Metta Spa Biên Hòa
                              </p>
                              <p class="" style="margin-bottom: 8px">
                                <span style="font-weight: bold">Hotline:</span>
                                0911535339
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
                                <a href="tel:0911535339">
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

                    <style>
                      #text-3794665322 {
                        text-align: center;
                        color: rgb(0, 0, 0);
                      }

                      #text-3794665322>* {
                        color: rgb(0, 0, 0);
                      }
                    </style>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <style>
            #section_219169141 {
              padding-top: 30px;
              padding-bottom: 30px;
            }

            #section_219169141 .section-bg img {
              object-position: 49% 0%;
            }
          </style>
        </section>

        <section class="section home-slide-section dark has-parallax" id="section_467763596">
          <div class="section-bg fill" data-parallax-container=".section" data-parallax-background=""
            data-parallax="-6">
            <img decoding="async" width="2560" height="1707"
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAB4AAAAUAAQMAAACcQ910AAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAUJJREFUGBntwQENAAAAwiD7p34ON2AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwI0AtTwAAb3/K1kAAAAASUVORK5CYII="
              class="bg attachment-original size-original lazyload" alt=""
              data-src="<?php echo esc_url($_review_bg); ?>"
              style="filter: blur(4px) brightness(0.65); transform: scale(1.05);"
              data-eio-rwidth="2560" data-eio-rheight="1707" /><noscript><img decoding="async" width="2560"
                height="1707" src="<?php echo esc_url($_review_bg); ?>"
                class="bg attachment-original size-original" alt="" data-eio="l" /></noscript>
            <div class="section-bg-overlay absolute fill"></div>
          </div>

          <div class="section-content relative">
            <div class="row" id="row-1160728791">
              <div id="col-1852136973" class="col small-12 large-12">
                <div class="col-inner">
                  <div id="text-3180206833" class="text text-heading-light">
                    <h2><?php echo metta_get_with_fallback('feedback_title', 'Khách Hàng Nói Về Metta Spa'); ?></h2>

                    <style>
                      #text-3180206833 {
                        font-size: 1.3rem;
                        text-align: center;
                      }

                      @media (min-width: 550px) {
                        #text-3180206833 {
                          font-size: 1rem;
                        }
                      }

                      @media (min-width: 850px) {
                        #text-3180206833 {
                          font-size: 1.5rem;
                        }
                      }
                    </style>
                  </div>
                </div>
              </div>
            </div>
            <div class="row align-center" id="row-231102944">
              <div id="col-943092741" class="col medium-11 small-12 large-8">
                <div class="col-inner">
                  <div class="slider-wrapper relative" id="slider-1240932340">
                    <!-- Elfsight Google Reviews | METTA GG REVIEW -->
                    <script src="https://elfsightcdn.com/platform.js" async></script>
                    <div class="elfsight-app-56b223a1-6180-4df3-8649-454da4bf3893" data-elfsight-app-lazy></div>

                    <div class="loading-spin dark large centered"></div>
                  </div>
                </div>

                <style>
                  #col-943092741>.col-inner {
                    padding: 0px 0px 0px 0px;
                  }

                  @media (min-width: 550px) {
                    #col-943092741>.col-inner {
                      padding: 0px 0px 0px 0px;
                    }
                  }

                  @media (min-width: 850px) {
                    #col-943092741>.col-inner {
                      padding: 0px 50px 0px 50px;
                    }
                  }
                </style>
              </div>
            </div>
          </div>

          <style>
            #section_467763596 {
              padding-top: 60px;
              padding-bottom: 60px;
            }

            #section_467763596 .section-bg-overlay {
              background-color: rgba(7, 33, 23, 0.69);
            }

            #section_467763596 .section-bg img {
              object-position: 57% 26%;
            }

            @media (min-width: 550px) {
              #section_467763596 {
                padding-top: 81px;
                padding-bottom: 81px;
              }
            }
          </style>
        </section>

        <section class="section" id="section_1008654261">
          <div class="section-bg fill">
            <img decoding="async" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              class="bg attachment-original size-original lazyload" alt=""
              data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2026/03/Frame-Metta-Moi.jpg" /><noscript><img decoding="async"
                src="<?php echo get_site_url(); ?>/wp-content/uploads/2026/03/Frame-Metta-Moi.jpg" class="bg attachment-original size-original" alt=""
                data-eio="l" /></noscript>
          </div>

          <div class="section-content relative">
            <div class="row" id="row-363550593">
              <div id="col-967543403" class="col small-12 large-12">
                <div class="col-inner">
                  <div id="text-3992125249" class="text text-heading">
                    <h2><?php echo metta_get_with_fallback('gallery_title', 'Hình ảnh'); ?></h2>

                    <?php
                    $gal_desc = metta_get_with_fallback('gallery_desc', 'Không phải lời nói Đây là những trải nghiệm thật tại Metta — Đừng để cơ thể mệt mỏi thêm nữa Hãy dành cho mình một khoảng thời gian để được chăm sóc đúng cách');
                    $gal_cta_text = metta_get_with_fallback('gallery_cta_text', 'Đặt lịch trải nghiệm ngay');
                    $gal_cta_url = metta_get_with_fallback('gallery_cta_url', 'https://datlich.mettaspadongy.vn/');
                    ?>
                    <?php if($gal_desc): ?>
                    <p style="max-width:700px; margin:12px auto 0; font-size:0.95rem; line-height:1.7; color:#d4a96a; font-weight:400;">
                      <?php echo esc_html($gal_desc); ?>
                    </p>
                    <?php endif; ?>
                    <?php if($gal_cta_text && $gal_cta_url): ?>
                    <div style="margin-top:20px;">
                      <a href="<?php echo esc_url($gal_cta_url); ?>" class="button is-small lowercase btn-gold-outline" target="_blank">
                        <span>👉 <?php echo esc_html($gal_cta_text); ?></span>
                      </a>
                    </div>
                    <?php endif; ?>

                    <style>
                      #text-3992125249 {
                        font-size: 1rem;
                        text-align: center;
                        color: var(--metta-primary);
                      }

                      #text-3992125249>* {
                        color: var(--metta-primary);
                      }

                      @media (min-width: 850px) {
                        #text-3992125249 {
                          font-size: 1.5rem;
                        }
                      }
                    </style>
                  </div>
                </div>
              </div>
            </div>
            <div class="banner-grid-wrapper">
              <div id="banner-grid-933305648" class="banner-grid row row-grid row-small" data-packery-options="">
<?php 
                // Define classes and default fallback images (10 items to match Giới Thiệu layout)
                $gallery_items = array(
                    1  => array('class' => 'grid-col-1',   'default' => get_site_url() . '/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg'),
                    2  => array('class' => 'grid-col-1-2', 'default' => get_site_url() . '/wp-content/uploads/2025/12/z7321243484732_2d1e46a5ab82dc922a8ed3862ffd0c98.jpg'),
                    3  => array('class' => 'grid-col-1',   'default' => get_site_url() . '/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg'),
                    4  => array('class' => 'grid-col-1-2', 'default' => get_site_url() . '/wp-content/uploads/2026/03/z7321244104166_d5f483d125730f143fbd2d4124c88633.jpg'),
                    5  => array('class' => 'grid-col-1-2', 'default' => get_site_url() . '/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg'),
                    6  => array('class' => 'grid-col-1-2', 'default' => get_site_url() . '/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg'),
                    7  => array('class' => 'grid-col-1-2', 'default' => get_site_url() . '/wp-content/uploads/2025/12/z7321243484732_2d1e46a5ab82dc922a8ed3862ffd0c98.jpg'),
                    8  => array('class' => 'grid-col-1',   'default' => get_site_url() . '/wp-content/uploads/2026/03/z7321244104193_8316d0cd67c89088c05256e053a20b1d.jpg'),
                    9  => array('class' => 'grid-col-1-2', 'default' => get_site_url() . '/wp-content/uploads/2026/03/z7321244104166_d5f483d125730f143fbd2d4124c88633.jpg'),
                    10 => array('class' => 'grid-col-1',   'default' => get_site_url() . '/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg'),
                );

                foreach($gallery_items as $index => $item): 
                    // Try to get image from ACF field first
                    $img_url = metta_get_field('gal_img_' . $index);
                    
                    // Fallback to default if empty
                    if(empty($img_url)) {
                        $img_url = $item['default'];
                    }
                ?>
                    <div class="col grid-col large-3 <?php echo $item['class']; ?>">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y">
                                <div class="img-inner image-cover dark" style="padding-top: 100%">
                                    <img src="<?php echo $img_url; ?>" class="attachment-original size-original lazyload" alt="Gallery Image <?php echo $index; ?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
              </div>
              <style>
                #banner-grid-933305648 .grid-col-1 {
                  height: 500px;
                }

                #banner-grid-933305648 .grid-col-1-2 {
                  height: 250px;
                }

                #banner-grid-933305648 .grid-col-1-3 {
                  height: 166.66666666667px;
                }

                #banner-grid-933305648 .grid-col-2-3 {
                  height: 333.33333333333px;
                }

                #banner-grid-933305648 .grid-col-1-4 {
                  height: 125px;
                }

                #banner-grid-933305648 .grid-col-3-4 {
                  height: 375px;
                }
              </style>
            </div>
          </div>

          <style>
            #section_1008654261 {
              padding-top: 50px;
              padding-bottom: 50px;
            }

            #section_1008654261 .section-bg img {
              object-position: 1% 0%;
            }
          </style>
        </section>

        <!-- ================================================
             SECTION: TIN TỨC VỀ METTA (4 bài post mới nhất)
        ================================================== -->
        <?php
        $news_query = new WP_Query(array(
          'post_type'      => 'post',
          'post_status'    => 'publish',
          'posts_per_page' => 4,
          'orderby'        => 'date',
          'order'          => 'DESC',
        ));
        if ($news_query->have_posts()):
        ?>
        <style>
          #section_news_home {
            padding: 60px 0 70px;
            background: transparent;
          }
          #section_news_home .branch-item {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 24px rgba(0,0,0,0.4);
            transition: box-shadow 0.3s ease, transform 0.3s ease;
            background: rgba(40,18,5,0.78);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(244,157,33,0.3);
          }
          #section_news_home .branch-item:hover {
            box-shadow: 0 12px 40px rgba(244,157,33,0.3);
            transform: translateY(-4px);
          }
          #section_news_home .news-excerpt {
            font-size: 0.85rem;
            color: #777;
            line-height: 1.6;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            margin-bottom: 16px;
          }
          #section_news_home .news-date {
            font-size: 0.72rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: var(--metta-main, #c8a96e);
            display: block;
            margin-bottom: 6px;
          }
          #section_news_home .news-xem-them {
            text-align: center;
            margin-top: 40px;
          }
        </style>
        <div id="section_news_home">
          <div class="section-content relative">
            <div class="row align-middle align-center">
              <div class="col small-12 large-12" data-animate="fadeInUp">
                <div class="col-inner text-center">
                  <div class="text text-heading">
                    <h2 style="font-size:1.5rem; color:var(--metta-primary); text-align:center;">Tin Tức Về Metta</h2>
                  </div>
                  <div style="padding-top: 30px;"></div>

                  <div class="row align-middle align-center branchs">
                    <?php $card_i = 0; while ($news_query->have_posts()): $news_query->the_post(); $card_i++; ?>
                    <div class="col large-3 medium-6 small-12">
                      <a href="<?php the_permalink(); ?>">
                        <div class="branch-item">
                          <!-- Thumbnail -->
                          <div class="img has-hover section-service-main-img-1 x md-x lg-x y md-y lg-y">
                            <div class="img-inner image-cover dark" style="padding-top: 56.25%; border-radius: 16px 16px 0 0; overflow:hidden;">
                              <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('medium_large', array(
                                  'loading' => 'lazy',
                                  'style'   => 'position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;',
                                )); ?>
                              <?php else: ?>
                                <div style="position:absolute;inset:0;background:linear-gradient(135deg,#e8f0e8,#f5f0e0);display:flex;align-items:center;justify-content:center;">
                                  <span style="font-size:2.5rem;color:#c8a96e;">✦</span>
                                </div>
                              <?php endif; ?>
                            </div>
                          </div>
                          <!-- Body -->
                          <div style="padding: 1rem; background-color: white;">
                            <span class="news-date"><?php echo get_the_date('d/m/Y'); ?></span>
                            <p class="newest-title text-center text-vip" style="font-size:1rem;font-weight:bold;margin-bottom:8px;line-height:1.4;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">
                              <?php the_title(); ?>
                            </p>
                            <p class="news-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                  </div>

                  <div class="news-xem-them">
                    <?php 
                      $news_link = metta_get_field('news_cta_link');
                      if (empty($news_link)) $news_link = home_url('/tin-tuc');
                      elseif (strpos($news_link, 'http') !== 0) $news_link = home_url($news_link);
                    ?>
                    <a href="<?php echo esc_url($news_link); ?>" class="button is-small lowercase btn-gold-outline">
                      <?php echo metta_get_with_fallback('news_cta_text', 'Xem thêm tin tức'); ?>
                    </a>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endif; ?>

        <section class="section" id="section_1005572536">
          <div class="section-bg fill">
            <img decoding="async" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              class="bg attachment-original size-original lazyload" alt=""
              data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2026/03/Frame-Metta-Moi.jpg" /><noscript><img decoding="async"
                src="<?php echo get_site_url(); ?>/wp-content/uploads/2026/03/Frame-Metta-Moi.jpg" class="bg attachment-original size-original" alt=""
                data-eio="l" /></noscript>
          </div>

          <style>
            #section_1005572536 {
              padding-top: 30px;
              padding-bottom: 30px;
            }

            #section_1005572536 .section-bg img {
              object-position: 0% 0%;
            }
          </style>
        </section>
        <section class="section" style="display: flex; flex-direction: column; text-align: center">
          <div class="row" id="row-363550593">
            <div id="col-967543403" class="col small-12 large-12">
              <div class="col-inner">
                <div id="text-3992125249" class="text text-heading">
                  <h2>Cơ sở chính</h2>

                  <style>
                    #text-3992125249 {
                      font-size: 1rem;
                      text-align: center;
                      color: var(--metta-primary);
                    }

                    #text-3992125249>* {
                      color: var(--metta-primary);
                    }

                    @media (min-width: 850px) {
                      #text-3992125249 {
                        font-size: 1.5rem;
                      }
                    }
                  </style>
                </div>
              </div>
            </div>
          </div>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2965.382604705955!2d106.6118465!3d10.748561299999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752d6df82698c9%3A0xc3d6f2797c4e4ae5!2zTUVUVEEgU1BBIHwgRMav4bugTkcgU0lOSCDEkMOUTkcgWSBCw4xOSCBUw4JOIHwgxJDDgE8gVOG6oE8gRMav4bugTkcgU0lOSCBCw4xOSCBUw4JOIHw!5e1!3m2!1sen!2s!4v1765905974058!5m2!1sen!2s"
            style="border: 0" height="300px" width="100%" allowfullscreen="true" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
      </div>
    </main>

<?php get_footer(); ?>
