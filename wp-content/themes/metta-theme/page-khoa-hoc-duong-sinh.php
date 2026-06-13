<?php
/* Template Name: page-khoa-hoc-duong-sinh */
get_header(); ?>

<main id="main" class="">
  <div id="content" role="main">
    <div class="banner has-hover" id="banner-1503614659">
      <div class="banner-inner fill">
        <div class="banner-bg fill">
          <img fetchpriority="high" decoding="async" width="2560" height="1707"
            src="https://mettaspadongy.vn/wp-content/uploads/2025/12/z7321243434473_0b4c7065cbeea0b7a8817deed701d409.jpg"
            class="bg attachment-original size-original" alt="" />
        </div>
        <div class="hero-v2-container">
          <div class="hero-v2-text">
            <div class="hero-chip">
              <span class="hero-chip-icon">✺</span>
              <span><?php echo metta_get_with_fallback('course_hero_chip', 'TINH HOA DƯỠNG SINH VIỆT'); ?></span>
            </div>

            <h1 class="hero-title">
              <span class="hero-title-main"><?php echo metta_get_with_fallback('course_hero_h1', 'Khởi đầu sự nghiệp'); ?></span>
              <span class="hero-title-sub"><?php echo metta_get_with_fallback('course_hero_h1_sub', 'vững chắc tại Metta'); ?></span>
            </h1>

            <p class="hero-desc">
              <?php echo metta_get_with_fallback('course_hero_sub', '"Trao nghề từ Tâm – Dựng nghiệp từ Tầm"<br>Văn hóa Tây Nguyên hòa quyện tinh hoa Đông Y trong từng bài giảng.'); ?>
            </p>

            <a href="<?php echo metta_get_with_fallback('course_hero_cta_link', '#register'); ?>" class="hero-booking-link">
              <?php echo metta_get_with_fallback('course_hero_cta_text', 'Nhận lộ trình tư vấn'); ?>
            </a>
          </div>

          <div class="hero-v2-image-card">
            <div class="swiper hero-swiper">
              <div class="swiper-wrapper">
                <?php 
                $intro_img = metta_get_field('course_intro_img');
                if(is_numeric($intro_img)) $intro_img = wp_get_attachment_url($intro_img);
                if(!$intro_img) $intro_img = get_site_url().'/wp-content/uploads/2025/12/course_intro_img.png';
                ?>
                <div class="swiper-slide hero-slide-item">
                  <img src="<?php echo $intro_img; ?>" alt="Khóa học Dưỡng sinh" />
                  <div class="hero-image-label">Metta Academy</div>
                </div>
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
          padding-top: 99.99%;
        }

        #banner-1503614659 .banner-bg img {
          object-position: 59% 29%;
        }

      </style>
    </div>

    <!-- CONTENT SECTIONS -->
    <!-- 2. GIỚI THIỆU -->
    <section class="section section-padding" style="background: #fffcf9; padding-top: 80px; padding-bottom: 80px;">
      <div class="container relative">
        <div class="row align-middle col-equal-box">
          <div class="col medium-6 small-12">
            <div class="col-inner">
              <div class="intro-badge" style="color: var(--vang-dat); font-weight: 700; letter-spacing: 2px; margin-bottom: 15px; font-size: 0.9rem;">
                <?php echo metta_get_with_fallback('course_intro_badge', 'VỀ CHÚNG TÔI'); ?>
              </div>
              <div class="text-heading" style="text-align: left;">
                <h2 style="color: var(--primary-color); font-size: 2.8rem; margin-bottom: 25px;">
                  <?php echo metta_get_with_fallback('course_intro_title', 'SỨ MỆNH ĐÀO TẠO TỪ TÂM'); ?>
                </h2>
              </div>
              <div class="is-divider" style="background-color: var(--vang-dat); width: 80px; height: 4px; margin-bottom: 35px;"></div>
              
              <div class="content-body" style="color: #444; font-size: 1.1rem; line-height: 1.9;">
                <?php echo metta_get_field('course_intro_content') ?: '<p>Nội dung đang cập nhật...</p>'; ?>
              </div>
            </div>
          </div>
          <div class="col medium-6 small-12">
            <?php 
            $intro_img = metta_get_field('course_intro_img');
            if(is_numeric($intro_img)) $intro_img = wp_get_attachment_url($intro_img);
            if(!$intro_img) $intro_img = get_site_url().'/wp-content/uploads/2025/12/course_intro_img.png';
            ?>
            <div class="col-inner">
              <div class="img has-hover" style="border-radius: 40px; overflow: hidden; box-shadow: 0 25px 50px rgba(96, 56, 19, 0.2); border: 1px solid var(--vang-dat);">
                <img src="<?php echo $intro_img; ?>" alt="Giới thiệu Metta" style="width: 100%; display: block;" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 3. USP -->
    <section class="section section-padding" style="background: #fff; padding: 80px 0;">
      <div class="container">
        <div class="text-center mb-50">
          <div class="text-heading">
            <h2 style="color: var(--primary-color);"><?php echo metta_get_with_fallback('course_usp_title', 'ĐIỂM KHÁC BIỆT TẠI METTA'); ?></h2>
          </div>
          <div class="is-divider small mx-auto" style="background-color: var(--vang-dat);"></div>
        </div>
        <div class="row" style="margin-top: 50px;">
          <?php if(have_rows('course_usp_list')): while(have_rows('course_usp_list')): the_row(); ?>
          <div class="col medium-6 large-3 mb-30">
            <div class="usp-card text-center" style="padding: 30px; background: #fffcf9; border-radius: 20px; border: 1px solid #eee; transition: all 0.3s ease; height: 100%;">
              <div class="icon-box" style="margin-bottom: 25px;">
                <i class="<?php echo get_sub_field('icon_class'); ?>" style="font-size: 3rem; color: var(--vang-dat);"></i>
              </div>
              <h3 style="color: var(--primary-color); font-size: 1.3rem; margin-bottom: 15px;"><?php echo get_sub_field('title'); ?></h3>
              <p style="color: #777; font-size: 0.95rem; line-height: 1.6;"><?php echo get_sub_field('desc'); ?></p>
            </div>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </section>
    
    <!-- 4. LỘ TRÌNH -->
    <section class="section section-padding" style="background: #fdfaf7; padding: 100px 0;">
      <div class="container relative">
        <div class="text-center mb-50">
          <div class="text-heading">
            <h2 style="color: var(--primary-color);"><?php echo metta_get_with_fallback('course_curr_title', 'LỘ TRÌNH PHÁT TRIỂN TOÀN DIỆN'); ?></h2>
          </div>
          <div class="is-divider small mx-auto" style="background-color: var(--vang-dat);"></div>
        </div>
        <div class="row" style="margin-top: 50px;">
          <?php if(have_rows('course_curr_list')): while(have_rows('course_curr_list')): the_row(); ?>
          <div class="col medium-4 mb-30">
            <div class="module-item" style="background: #fff; border-radius: 20px; padding: 40px; border-left: 6px solid var(--vang-dat); box-shadow: 0 15px 40px rgba(0,0,0,0.05); height: 100%;">
              <h4 style="color: var(--primary-color); margin-bottom: 20px; font-weight: 700; font-size: 1.25rem;"><?php echo get_sub_field('title'); ?></h4>
              <div class="module-body" style="color: #666; font-size: 1rem; line-height: 1.8;">
                <?php echo get_sub_field('content'); ?>
              </div>
            </div>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </section>

    <!-- 5. BENEFITS -->
    <section class="section section-padding bg-white" style="padding: 100px 0;">
      <div class="container">
        <div class="row align-middle">
          <div class="col medium-6 mb-30">
            <div class="text-heading" style="text-align: left;">
              <h2 style="color: var(--primary-color);"><?php echo metta_get_with_fallback('course_benefit_title', 'QUYỀN LỢI ĐẶC QUYỀN'); ?></h2>
            </div>
            <div class="is-divider small" style="background-color: var(--vang-dat);"></div>
            <div class="benefit-list" style="margin-top: 40px;">
              <?php if(have_rows('course_benefit_list')): while(have_rows('course_benefit_list')): the_row(); ?>
              <div style="display: flex; margin-bottom: 30px;">
                <div style="width: 55px; height: 55px; background: #fffcf9; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 25px; flex-shrink: 0; border: 1px solid #ebd9c5;">
                  <i class="<?php echo get_sub_field('icon_class'); ?>" style="color: var(--vang-dat); font-size: 1.5rem;"></i>
                </div>
                <div>
                  <h4 style="margin: 0 0 8px; color: var(--primary-color); font-size: 1.2rem;"><?php echo get_sub_field('title'); ?></h4>
                  <p style="color: #666; margin: 0; font-size: 1rem; line-height: 1.6;"><?php echo get_sub_field('desc'); ?></p>
                </div>
              </div>
              <?php endwhile; endif; ?>
            </div>
          </div>
          <div class="col medium-6">
            <?php 
            $ben_img = metta_get_field('course_benefit_img');
            if(is_numeric($ben_img)) $ben_img = wp_get_attachment_url($ben_img);
            if(!$ben_img) $ben_img = get_site_url().'/wp-content/uploads/2025/12/course_benefit_img.png';
            ?>
            <div class="img-inner" style="border-radius: 40px; overflow: hidden; box-shadow: 0 30px 70px rgba(0,0,0,0.15); border: 1px solid var(--vang-dat);">
              <img src="<?php echo $ben_img; ?>" alt="Thực hành nghề" style="width: 100%; display: block;">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 6. TARGET -->
    <?php if(have_rows('course_target_list')): ?>
    <section class="section section-padding" style="background: var(--metta-bg); color: #fff; padding: 100px 0;">
      <div class="container text-center">
        <div class="text-heading-light">
          <h2 style="color: var(--metta-main); font-size: 2.8rem; margin-bottom: 60px;"><?php echo metta_get_with_fallback('course_target_title', 'KHÓA HỌC DÀNH CHO AI?'); ?></h2>
        </div>
        <div class="row">
          <?php while(have_rows('course_target_list')): the_row(); ?>
          <div class="col medium-4 mb-30">
            <div style="background: rgba(255,255,255,0.04); padding: 50px 30px; border-radius: 25px; border: 1px solid rgba(255,255,255,0.08); height: 100%; transition: all 0.3s ease;">
              <i class="<?php echo get_sub_field('icon_class'); ?>" style="font-size: 3.5rem; color: var(--metta-main); margin-bottom: 30px;"></i>
              <div style="font-size: 1.15rem; line-height: 1.7; font-weight: 400;"><?php echo get_sub_field('content'); ?></div>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <!-- 7. TESTIMONIALS -->
    <?php if(have_rows('course_testi_list')): ?>
    <section class="section section-padding" style="background: #fffcf9; padding: 100px 0;">
      <div class="container">
        <div class="text-center mb-60">
          <div class="text-heading">
            <h2 style="color: var(--primary-color);"><?php echo metta_get_with_fallback('course_testi_title', 'CHIA SẺ TỪ HÀNH TRÌNH HỌC VIÊN'); ?></h2>
          </div>
          <div class="is-divider small mx-auto" style="background-color: var(--vang-dat);"></div>
        </div>
        <div class="row align-center">
          <?php while(have_rows('course_testi_list')): the_row(); ?>
          <div class="col medium-5 mb-30">
            <div class="testimonial-card"
              style="background: #fff; padding: 50px; border-radius: 30px; box-shadow: 0 25px 60px rgba(96, 56, 19, 0.08); position: relative; height: 100%; border: 1px solid #efefef;">
              <i class="fas fa-quote-left" style="position: absolute; top: 30px; left: 30px; font-size: 2.5rem; color: var(--metta-main); opacity: 0.15;"></i>
              <p style="font-style: italic; margin-bottom: 35px; color: #555; font-size: 1.1rem; line-height: 1.8; position: relative; z-index: 2;">"<?php echo get_sub_field('content'); ?>"</p>
              <div style="display: flex; align-items: center;">
                <?php if($img = get_sub_field('image')): ?>
                <img src="<?php echo $img; ?>" style="width: 70px; height: 70px; border-radius: 50%; margin-right: 20px; object-fit: cover; border: 2px solid var(--metta-main);">
                <?php endif; ?>
                <div>
                  <strong style="color: var(--primary-color); font-size: 1.25rem;"><?php echo get_sub_field('name'); ?></strong><br>
                  <small style="color: #999; font-weight: 500; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1px;"><?php echo get_sub_field('role'); ?></small>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <!-- 8. FORM -->
    <section id="register" class="section section-padding" style="background: #fff; padding: 120px 0;">
      <div class="container">
        <div class="reg-wrapper" style="background: var(--metta-bg); border-radius: 40px; overflow: hidden; padding: 80px 60px; position: relative; box-shadow: 0 30px 80px rgba(0,0,0,0.4);">
          <div class="row align-middle relative" style="z-index: 2;">
            <div class="col medium-6 text-white" style="color: white; padding-right: 40px;">
              <div class="text-heading-light" style="text-align: left;">
                <h2 style="color: var(--metta-main); font-size: 3.2rem; margin-bottom: 25px; line-height: 1.1;">
                  <?php echo metta_get_with_fallback('course_reg_title', 'GHI DANH HÔM NAY'); ?>
                </h2>
              </div>
              <h3 style="color: #fff; margin-bottom: 35px; font-weight: 300; font-size: 1.8rem; opacity: 0.9;">
                <?php echo metta_get_with_fallback('course_reg_sub', 'NHẬN ƯU ĐÃI ĐẾN 30%'); ?>
              </h3>
              <p style="font-size: 1.15rem; opacity: 0.8; margin-bottom: 50px; line-height: 1.8;">Đừng bỏ lỡ cơ hội thay đổi sự nghiệp của bạn với bí quyết dưỡng sinh độc quyền từ Metta. Hỗ trợ việc làm sau khóa học!</p>
              <div style="font-weight: 600; font-size: 1.1rem;">
                <p style="margin-bottom: 15px; display: flex; align-items: center;"><i class="fas fa-phone-alt" style="color: var(--metta-main); margin-right: 20px; font-size: 1.3rem;"></i> 0931.323.268</p>
                <p style="display: flex; align-items: center;"><i class="fas fa-envelope" style="color: var(--metta-main); margin-right: 20px; font-size: 1.3rem;"></i> Mettaspadongy@gmail.com</p>
              </div>
            </div>
            <div class="col medium-6">
              <form class="bg-vip-form" style="background: rgba(255,255,255,0.08); padding: 50px; border-radius: 30px; border: 1px solid rgba(255,255,255,0.15); backdrop-filter: blur(10px);">
                <div style="margin-bottom: 20px;">
                  <label style="display:block; color:#fff; margin-bottom: 8px; font-size: 0.9rem;">Họ và tên học viên *</label>
                  <input type="text" placeholder="Nguyễn Văn A" style="width: 100%; border:none; background: #fff; padding: 18px; border-radius: 12px; color: #333;">
                </div>
                <div style="margin-bottom: 20px;">
                  <label style="display:block; color:#fff; margin-bottom: 8px; font-size: 0.9rem;">Số điện thoại liên hệ *</label>
                  <input type="tel" placeholder="090x xxx xxx" style="width: 100%; border:none; background: #fff; padding: 18px; border-radius: 12px; color: #333;">
                </div>
                <div style="margin-bottom: 35px;">
                  <label style="display:block; color:#fff; margin-bottom: 8px; font-size: 0.9rem;">Khóa học quan tâm</label>
                  <select style="width: 100%; border:none; background: #fff; padding: 18px; border-radius: 12px; color: #333; appearance: none; -webkit-appearance: none;">
                    <option value="">Chọn khóa học...</option>
                    <option value="k1">Chuyên gia Dưỡng sinh Đông Y</option>
                    <option value="k2">Kỹ thuật viên Gội đầu Dưỡng sinh</option>
                  </select>
                </div>
                <button type="button" class="button primary expand"
                  style="width: 100%; border-radius: 12px; font-weight: 700; font-size: 1.2rem; background: var(--metta-main) !important; padding: 15px; border: 0; text-transform: uppercase;"
                  onclick="alert('Cảm ơn bạn! Metta sẽ liên hệ tư vấn trong 24h tới.')">
                  ĐĂNG KÝ TƯ VẤN NGAY
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
</main>

<?php get_footer(); ?>