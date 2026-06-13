<?php
/* Template Name: page-dao-tao */
get_header(); ?>

<main id="main" class="">
  <div id="content" role="main">
    
    <!-- HERO BANNER -->
    <div class="banner has-hover" id="banner-1503614659">
      <div class="banner-inner fill">
        <div class="banner-bg fill">
          <?php 
          $hero_bg = metta_get_field('training_hero_bg');
          if(!$hero_bg) $hero_bg = get_site_url() . '/wp-content/uploads/2025/12/z7321243434473_0b4c7065cbeea0b7a8817deed701d409.jpg';
          ?>
          <img fetchpriority="high" decoding="async" width="2560" height="1707"
            src="<?php echo $hero_bg; ?>"
            class="bg attachment-original size-original" alt="Training Banner" />
        </div>
        
        <div class="hero-v2-container">
          <div class="hero-v2-text">
            <h1 class="hero-title">
              <span class="hero-title-main"><?php echo metta_get_with_fallback('training_hero_title_main', 'KHỞI ĐẦU SỰ NGHIỆP'); ?></span>
              <span class="hero-title-sub"><?php echo metta_get_with_fallback('training_hero_title_sub', 'VỮNG CHẮC CÙNG NGHỀ DƯỠNG SINH ĐÔNG Y'); ?></span>
            </h1>

            <p class="hero-desc">
              <?php echo metta_get_with_fallback('training_hero_subtitle', '"Trao nghề từ Tâm – Dựng nghiệp từ Tầm". Metta Spa cam kết đào tạo KTV chuyên nghiệp với 80% thời lượng thực hành thực chiến.'); ?>
            </p>

            <div style="display: flex; gap: 20px; flex-wrap: wrap; margin-top: 40px;">
              <a href="<?php echo metta_get_with_fallback('training_hero_cta_1_link', '#register'); ?>" class="hero-booking-link">
                <?php echo metta_get_with_fallback('training_hero_cta_1_text', 'ĐĂNG KÝ TƯ VẤN LỘ TRÌNH'); ?>
              </a>
              <?php if($cta2_text = metta_get_field('training_hero_cta_2_text')): ?>
              <a href="<?php echo metta_get_with_fallback('training_hero_cta_2_link', '#register'); ?>" 
                 class="hero-booking-link" style="background: rgba(255,255,255,0.15); border: 2px solid #fff;">
                <?php echo $cta2_text; ?>
              </a>
              <?php endif; ?>
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

    <!-- WAVE DIVIDER -->
    <div class="row row-collapse row-full-width">
      <div class="col small-12 large-12">
        <div class="col-inner">
          <div class="img has-hover">
            <div class="img-inner dark">
              <img decoding="async" src="<?php echo get_site_url(); ?>/wp-content/uploads/2026/03/Group-39711-2.png" 
                   class="attachment-original size-original" alt="" />
            </div>
            <style>
              .img-inner { width: 100%; }
            </style>
          </div>
        </div>
        <style>
          .col-inner { margin: -9% 0px 0px 0px; }
          @media (min-width: 550px) {
            .col-inner { margin: -8% 0px 0px 0px; }
          }
        </style>
      </div>
    </div>

    <!-- CONTENT SECTIONS -->
    <!-- 2. GIỚI THIỆU -->
    <section class="section section-padding" style="background: #fffcf9; padding-top: 80px; padding-bottom: 80px;">
      <div class="container relative">
        <div class="row align-middle col-equal-box">
          <div class="col medium-6 small-12">
            <div class="col-inner">
              <div class="intro-badge" style="color: var(--vang-dat); font-weight: 700; letter-spacing: 2px; margin-bottom: 15px; font-size: 0.9rem;">
                <?php echo metta_get_with_fallback('training_intro_badge', 'VỀ CHÚNG TÔI'); ?>
              </div>
              <div class="text-heading" style="text-align: left;">
                <h2 style="color: var(--primary-color); font-size: 2.8rem; margin-bottom: 25px;">
                  <?php echo metta_get_with_fallback('training_intro_title', 'SỨ MỆNH ĐÀO TẠO TỪ TÂM'); ?>
                </h2>
              </div>
              <div class="is-divider" style="background-color: var(--vang-dat); width: 80px; height: 4px; margin-bottom: 35px;"></div>
              
              <div class="content-body" style="color: #444; font-size: 1.1rem; line-height: 1.9;">
                <?php echo metta_get_field('training_intro_content') ?: '<p>Nội dung đang cập nhật...</p>'; ?>
              </div>
            </div>
          </div>
          <div class="col medium-6 small-12">
            <?php 
            $intro_img = metta_get_field('training_intro_img');
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

    <!-- 3. USP - Fixed items instead of repeater -->
    <section class="section section-padding" style="background: #fff; padding: 80px 0;">
      <div class="container">
        <div class="text-center mb-50">
          <div class="text-heading">
            <h2 style="color: var(--primary-color);"><?php echo metta_get_with_fallback('training_usp_title', 'ĐIỂM KHÁC BIỆT TẠI METTA'); ?></h2>
          </div>
          <div class="is-divider small mx-auto" style="background-color: var(--vang-dat);"></div>
        </div>
        <div class="row" style="margin-top: 50px;">
          <?php 
          // USP Items - Fixed 4 items with proper fallback icons
          $default_icons = array('fas fa-award', 'fas fa-hands-helping', 'fas fa-certificate', 'fas fa-briefcase');
          $usps = array(
            array('title' => metta_get_field('usp_1_title'), 'icon' => metta_get_field('usp_1_icon'), 'desc' => metta_get_field('usp_1_desc')),
            array('title' => metta_get_field('usp_2_title'), 'icon' => metta_get_field('usp_2_icon'), 'desc' => metta_get_field('usp_2_desc')),
            array('title' => metta_get_field('usp_3_title'), 'icon' => metta_get_field('usp_3_icon'), 'desc' => metta_get_field('usp_3_desc')),
            array('title' => metta_get_field('usp_4_title'), 'icon' => metta_get_field('usp_4_icon'), 'desc' => metta_get_field('usp_4_desc')),
          );
          $usp_index = 0;
          foreach($usps as $usp):
            if(empty($usp['title'])) { $usp_index++; continue; }
            // Validate icon class - only use if it starts with 'fa'
            $icon_class = $usp['icon'];
            if(empty($icon_class) || strpos($icon_class, 'fa') !== 0) {
              $icon_class = $default_icons[$usp_index] ?? 'fas fa-star';
            }
            $usp_index++;
          ?>
          <div class="col medium-6 large-3 mb-30">
            <div class="usp-card text-center" style="padding: 30px 20px; background: linear-gradient(145deg, #fffcf9 0%, #fff8f2 100%); border-radius: 20px; border: 1px solid rgba(212,175,55,0.15); transition: all 0.3s ease; height: 100%; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
              <div class="icon-box" style="margin-bottom: 20px; width: 70px; height: 70px; background: linear-gradient(135deg, rgba(212,175,55,0.15) 0%, rgba(212,175,55,0.05) 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-left: auto; margin-right: auto;">
                <i class="<?php echo esc_attr($icon_class); ?>" style="font-size: 1.8rem; color: var(--vang-dat);"></i>
              </div>
              <h3 class="usp-title" style="color: var(--primary-color); font-size: 1.15rem; margin-bottom: 12px; font-weight: 700; line-height: 1.35;">
                <?php echo esc_html($usp['title']); ?>
              </h3>
              <p class="usp-desc" style="color: #666; font-size: 0.9rem; line-height: 1.65; margin: 0;">
                <?php echo esc_html($usp['desc']); ?>
              </p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    
    <!-- 4. LỘ TRÌNH - Fixed 3 modules -->
    <section class="section section-padding" style="background: #fdfaf7; padding: 100px 0;">
      <div class="container relative">
        <div class="text-center mb-50">
          <div class="text-heading">
            <h2 style="color: var(--primary-color);"><?php echo metta_get_with_fallback('training_curriculum_title', 'LỘ TRÌNH PHÁT TRIỂN TOÀN DIỆN'); ?></h2>
          </div>
          <div class="is-divider small mx-auto" style="background-color: var(--vang-dat);"></div>
        </div>
        <div class="row" style="margin-top: 50px;">
          <?php 
          // Modules - Fixed 3 modules with proper icon fallbacks
          $module_default_icons = array('fas fa-seedling', 'fas fa-spa', 'fas fa-user-tie');
          $modules = array(
            array('num' => metta_get_field('module_1_number'), 'title' => metta_get_field('module_1_title'), 'icon' => metta_get_field('module_1_icon'), 'content' => metta_get_field('module_1_content')),
            array('num' => metta_get_field('module_2_number'), 'title' => metta_get_field('module_2_title'), 'icon' => metta_get_field('module_2_icon'), 'content' => metta_get_field('module_2_content')),
            array('num' => metta_get_field('module_3_number'), 'title' => metta_get_field('module_3_title'), 'icon' => metta_get_field('module_3_icon'), 'content' => metta_get_field('module_3_content')),
          );
          $module_index = 0;
          foreach($modules as $module):
            if(empty($module['title'])) { $module_index++; continue; }
            // Validate icon class
            $module_icon = $module['icon'];
            if(empty($module_icon) || strpos($module_icon, 'fa') !== 0) {
              $module_icon = $module_default_icons[$module_index] ?? 'fas fa-book';
            }
            $module_index++;
          ?>
          <div class="col medium-4 mb-30">
            <div class="module-item" style="background: #fff; border-radius: 20px; padding: 35px 28px; border-left: 5px solid var(--vang-dat); box-shadow: 0 10px 35px rgba(0,0,0,0.06); height: 100%; position: relative; overflow: hidden;">
              <?php if($module['num']): ?>
              <div class="module-number" style="position: absolute; top: 15px; right: 18px; color: var(--vang-dat); font-weight: 800; font-size: 0.75rem; opacity: 0.4;"><?php echo esc_html($module['num']); ?></div>
              <?php endif; ?>
              
              <div class="module-header" style="display: flex; align-items: center; margin-bottom: 18px;">
                <div style="width: 42px; height: 42px; min-width: 42px; background: linear-gradient(135deg, rgba(212,175,55,0.15) 0%, rgba(212,175,55,0.05) 100%); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-right: 14px;">
                  <i class="<?php echo esc_attr($module_icon); ?>" style="color: var(--vang-dat); font-size: 1.1rem;"></i>
                </div>
                <h4 style="color: var(--primary-color); margin: 0; font-weight: 700; font-size: 1.15rem; line-height: 1.35;"><?php echo esc_html($module['title']); ?></h4>
              </div>

              <div class="module-body" style="color: #666; font-size: 0.95rem; line-height: 1.75;">
                <?php if($module['content']): 
                  // Split content by newlines into bullet points
                  $items = array_filter(explode("\n", $module['content']));
                  if(!empty($items)):
                ?>
                <ul style="list-style: none; padding: 0; margin: 0;">
                  <?php foreach($items as $item): $item = trim($item); if(empty($item)) continue; ?>
                  <li style="padding: 6px 0; display: flex; align-items: flex-start;">
                    <i class="fas fa-check" style="color: var(--vang-dat); margin-right: 10px; font-size: 0.75rem; margin-top: 5px;"></i>
                    <span><?php echo esc_html($item); ?></span>
                  </li>
                  <?php endforeach; ?>
                </ul>
                <?php endif; endif; ?>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- 5. BENEFITS - Fixed 4 items -->
    <section class="section section-padding bg-white" style="padding: 100px 0;">
      <div class="container">
        <div class="row align-middle">
          <div class="col medium-6 mb-30">
            <div class="text-heading" style="text-align: left;">
              <h2 style="color: var(--primary-color);"><?php echo metta_get_with_fallback('training_benefits_title', 'QUYỀN LỢI ĐẶC QUYỀN'); ?></h2>
            </div>
            <div class="is-divider small" style="background-color: var(--vang-dat);"></div>
            <div class="benefit-list" style="margin-top: 40px;">
              <?php 
              // Benefits with proper Font Awesome fallbacks
              $benefit_default_icons = array('fas fa-check-circle', 'fas fa-graduation-cap', 'fas fa-handshake', 'fas fa-gift');
              $benefits = array(
                array('icon' => metta_get_field('benefit_1_icon'), 'title' => metta_get_field('benefit_1_title'), 'desc' => metta_get_field('benefit_1_desc')),
                array('icon' => metta_get_field('benefit_2_icon'), 'title' => metta_get_field('benefit_2_title'), 'desc' => metta_get_field('benefit_2_desc')),
                array('icon' => metta_get_field('benefit_3_icon'), 'title' => metta_get_field('benefit_3_title'), 'desc' => metta_get_field('benefit_3_desc')),
                array('icon' => metta_get_field('benefit_4_icon'), 'title' => metta_get_field('benefit_4_title'), 'desc' => metta_get_field('benefit_4_desc')),
              );
              $benefit_index = 0;
              foreach($benefits as $benefit):
                if(empty($benefit['title'])) { $benefit_index++; continue; }
                // Get proper icon - if it's an emoji or invalid, use Font Awesome
                $benefit_icon = $benefit['icon'];
                $use_fa_icon = (empty($benefit_icon) || strpos($benefit_icon, 'fa') === 0);
                if(empty($benefit_icon) || !$use_fa_icon) {
                  $benefit_icon = $benefit_default_icons[$benefit_index] ?? 'fas fa-check-circle';
                  $use_fa_icon = true;
                }
                $benefit_index++;
              ?>
              <div class="benefit-item" style="display: flex; margin-bottom: 25px; align-items: flex-start;">
                <div style="width: 50px; height: 50px; min-width: 50px; background: linear-gradient(135deg, rgba(212,175,55,0.15) 0%, rgba(212,175,55,0.08) 100%); border-radius: 14px; display: flex; align-items: center; justify-content: center; margin-right: 20px; border: 1px solid rgba(212,175,55,0.2);">
                  <?php if($use_fa_icon): ?>
                    <i class="<?php echo esc_attr($benefit_icon); ?>" style="font-size: 1.3rem; color: var(--vang-dat);"></i>
                  <?php else: ?>
                    <span style="font-size: 1.3rem;"><?php echo $benefit_icon; ?></span>
                  <?php endif; ?>
                </div>
                <div style="flex: 1;">
                  <h4 style="margin: 0 0 6px; color: var(--primary-color); font-size: 1.1rem; font-weight: 600; line-height: 1.35;"><?php echo esc_html($benefit['title']); ?></h4>
                  <p style="color: #666; margin: 0; font-size: 0.95rem; line-height: 1.6;"><?php echo esc_html($benefit['desc']); ?></p>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="col medium-6">
            <?php 
            $ben_img = metta_get_field('training_benefit_img');
            if(is_numeric($ben_img)) $ben_img = wp_get_attachment_url($ben_img);
            if(!$ben_img) $ben_img = get_site_url().'/wp-content/uploads/2025/12/course_benefit_img.png';
            ?>
            <div class="img-inner" style="border-radius: 40px; overflow: hidden; box-shadow: 0 30px 70px rgba(0,0,0,0.15); border: 1px solid var(--vang-dat);">
              <img src="<?php echo $ben_img; ?>" alt="Thực hành nghề Dưỡng sinh Đông Y - Metta Spa" style="width: 100%; display: block;" loading="lazy">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 6. TARGET - Fixed 3 items -->
    <?php 
    // Target audience with proper icon fallbacks
    $target_default_icons = array('fas fa-user-graduate', 'fas fa-users', 'fas fa-heart');
    $targets = array(
      array('icon' => metta_get_field('target_1_icon'), 'desc' => metta_get_field('target_1_desc')),
      array('icon' => metta_get_field('target_2_icon'), 'desc' => metta_get_field('target_2_desc')),
      array('icon' => metta_get_field('target_3_icon'), 'desc' => metta_get_field('target_3_desc')),
    );
    $has_targets = false;
    foreach($targets as $t) { if(!empty($t['desc'])) { $has_targets = true; break; } }
    if($has_targets): 
    ?>
    <section class="section section-padding target-audience-section" style="background: var(--metta-bg); color: #fff; padding: 80px 0;">
      <div class="container text-center">
        <div class="text-heading-light">
          <h2 style="color: var(--metta-main); font-size: 2.4rem; margin-bottom: 50px; font-weight: 700;"><?php echo metta_get_with_fallback('training_target_title', 'KHÓA HỌC DÀNH CHO AI?'); ?></h2>
        </div>
        <div class="row">
          <?php 
          $target_index = 0;
          foreach($targets as $target): 
            if(empty($target['desc'])) { $target_index++; continue; }
            // Validate icon
            $target_icon = $target['icon'];
            if(empty($target_icon) || strpos($target_icon, 'fa') !== 0) {
              $target_icon = $target_default_icons[$target_index] ?? 'fas fa-user';
            }
            $target_index++;
          ?>
          <div class="col medium-4 mb-30">
            <div class="target-card" style="background: rgba(255,255,255,0.05); padding: 40px 25px; border-radius: 20px; border: 1px solid rgba(255,255,255,0.1); height: 100%; transition: all 0.3s ease;">
              <div style="width: 70px; height: 70px; background: rgba(244,157,33,0.15); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px;">
                <i class="<?php echo esc_attr($target_icon); ?>" style="font-size: 1.8rem; color: var(--metta-main);"></i>
              </div>
              <div style="font-size: 1.05rem; line-height: 1.65; font-weight: 400; color: rgba(255,255,255,0.9);"><?php echo esc_html($target['desc']); ?></div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <!-- 7. TESTIMONIALS - Fixed 2 items -->
    <?php 
    $testimonials = array(
      array('name' => metta_get_field('testi_1_name'), 'class' => metta_get_field('testi_1_class'), 'photo' => metta_get_field('testi_1_photo'), 'content' => metta_get_field('testi_1_content')),
      array('name' => metta_get_field('testi_2_name'), 'class' => metta_get_field('testi_2_class'), 'photo' => metta_get_field('testi_2_photo'), 'content' => metta_get_field('testi_2_content')),
    );
    $has_testi = false;
    foreach($testimonials as $t) { if(!empty($t['content'])) { $has_testi = true; break; } }
    if($has_testi): 
    ?>
    <section class="section section-padding" style="background: #fffcf9; padding: 100px 0;">
      <div class="container">
        <div class="text-center mb-60">
          <div class="text-heading">
            <h2 style="color: var(--primary-color);"><?php echo metta_get_with_fallback('training_testimonials_title', 'CHIA SẺ TỪ HÀNH TRÌNH HỌC VIÊN'); ?></h2>
          </div>
          <div class="is-divider small mx-auto" style="background-color: var(--vang-dat);"></div>
        </div>
        <div class="row align-center">
          <?php foreach($testimonials as $testi): if(empty($testi['content'])) continue; ?>
          <div class="col medium-5 mb-30">
            <div class="testimonial-card"
              style="background: #fff; padding: 50px; border-radius: 30px; box-shadow: 0 25px 60px rgba(96, 56, 19, 0.08); position: relative; height: 100%; border: 1px solid #efefef;">
              <i class="fas fa-quote-left" style="position: absolute; top: 30px; left: 30px; font-size: 2.5rem; color: var(--metta-main); opacity: 0.15;"></i>
              <p style="font-style: italic; margin-bottom: 35px; color: #555; font-size: 1.1rem; line-height: 1.8; position: relative; z-index: 2;">"<?php echo $testi['content']; ?>"</p>
              <div style="display: flex; align-items: center;">
                <?php if($testi['photo']): ?>
                <img src="<?php echo $testi['photo']; ?>" style="width: 70px; height: 70px; border-radius: 50%; margin-right: 20px; object-fit: cover; border: 2px solid var(--metta-main);">
                <?php endif; ?>
                <div>
                  <strong style="color: var(--primary-color); font-size: 1.25rem;"><?php echo $testi['name']; ?></strong><br>
                  <small style="color: #999; font-weight: 500; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1px;"><?php echo $testi['class']; ?></small>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
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
                  <?php echo metta_get_with_fallback('training_form_title', 'GHI DANH HÔM NAY'); ?>
                </h2>
              </div>
              <h3 style="color: #fff; margin-bottom: 35px; font-weight: 300; font-size: 1.8rem; opacity: 0.9;">
                <?php echo metta_get_with_fallback('training_form_subtitle', 'NHẬN ƯU ĐÃI ĐẾN 30%'); ?>
              </h3>
              <p style="font-size: 1.15rem; opacity: 0.8; margin-bottom: 50px; line-height: 1.8;">Đừng bỏ lỡ cơ hội thay đổi sự nghiệp của bạn với bí quyết dưỡng sinh độc quyền từ Metta. Hỗ trợ việc làm sau khóa học!</p>
              <div style="font-weight: 600; font-size: 1.1rem; margin-top: 30px;">
                <p style="margin-bottom: 15px; display: flex; align-items: center;"><i class="fas fa-phone-alt" style="color: var(--metta-main); margin-right: 20px; font-size: 1.3rem;"></i> <?php echo metta_get_with_fallback('training_hotline', '0931.323.268'); ?></p>
                <p style="display: flex; align-items: center; margin-bottom: 25px;"><i class="fas fa-envelope" style="color: var(--metta-main); margin-right: 20px; font-size: 1.3rem;"></i> Mettaspadongy@gmail.com</p>
                
                <?php 
                $locations = array(
                  array('name' => metta_get_field('location_1_name'), 'address' => metta_get_field('location_1_address')),
                  array('name' => metta_get_field('location_2_name'), 'address' => metta_get_field('location_2_address')),
                );
                $has_locations = false;
                foreach($locations as $l) { if(!empty($l['name'])) { $has_locations = true; break; } }
                if($has_locations): 
                ?>
                <div class="training-locations" style="margin-top: 30px; border-top: 1px solid rgba(255,255,255,0.15); padding-top: 25px;">
                  <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 1px;">Địa điểm đào tạo:</h4>
                  <?php foreach($locations as $loc): if(empty($loc['name'])) continue; ?>
                  <div style="margin-bottom: 20px; display: flex; align-items: flex-start;">
                    <i class="fas fa-map-marker-alt" style="color: var(--metta-main); margin-right: 20px; font-size: 1.2rem; margin-top: 5px;"></i>
                    <div style="font-size: 0.95rem; line-height: 1.6; opacity: 0.9;">
                      <strong style="color: var(--metta-main); display: block; margin-bottom: 4px;"><?php echo $loc['name']; ?></strong>
                      <?php echo $loc['address']; ?>
                    </div>
                  </div>
                  <?php endforeach; ?>
                </div>
                <?php endif; ?>
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
                    <option value="k1"> Chuyên gia Dưỡng sinh Đông Y</option>
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

    <!-- MOBILE OPTIMIZATION STYLES -->
    <style>
      /* Mobile optimizations for Training page */
      @media (max-width: 849px) {
        /* Hero section mobile fixes */
        #banner-1503614659 {
          padding-top: 110% !important;
        }
        
        .hero-v2-container {
          padding: 25px 20px !important;
          padding-top: 100px !important; /* Account for fixed header */
          max-width: 100% !important;
          display: flex;
          align-items: flex-start;
          height: 100%;
        }
        
        .hero-v2-text {
          max-width: 100% !important;
        }
        
        .hero-title {
          margin-bottom: 12px !important;
        }
        
        .hero-title-main {
          font-size: 1.6rem !important;
          line-height: 1.25 !important;
          display: block !important;
          margin-bottom: 8px !important;
          font-weight: 700;
        }
        
        .hero-title-sub {
          font-size: 1.15rem !important;
          line-height: 1.35 !important;
          display: block !important;
          font-weight: 500;
        }
        
        .hero-desc {
          font-size: 0.95rem !important;
          line-height: 1.6 !important;
          margin-top: 12px !important;
          margin-bottom: 20px !important;
        }
        
        .hero-v2-text > div[style*="display: flex"] {
          margin-top: 20px !important;
          gap: 12px !important;
        }
        
        .hero-booking-link {
          font-size: 0.85rem !important;
          padding: 12px 22px !important;
          white-space: nowrap !important;
          border-radius: 50px !important;
          font-weight: 600;
          box-shadow: 0 3px 8px rgba(0,0,0,0.15);
        }

        /* Section padding adjustments */
        .section.section-padding {
          padding-top: 35px !important;
          padding-bottom: 35px !important;
        }
        
        /* Container padding */
        .container {
          padding-left: 18px !important;
          padding-right: 18px !important;
        }

        /* Introduction section mobile */
        .intro-badge {
          font-size: 0.75rem !important;
          margin-bottom: 12px !important;
          letter-spacing: 1.8px !important;
        }
        
        .text-heading h2 {
          font-size: 1.75rem !important;
          line-height: 1.3 !important;
          margin-bottom: 18px !important;
          font-weight: 700;
        }
        
        .is-divider {
          width: 60px !important;
          height: 3px !important;
          margin-bottom: 18px !important;
        }
        
        .content-body {
          font-size: 1rem !important;
          line-height: 1.7 !important;
        }
        
        .col.medium-6 {
          margin-bottom: 25px !important;
        }
        
        /* Image wrapper mobile */
        .img.has-hover[style*="border-radius"] {
          border-radius: 20px !important;
          margin-top: 15px;
        }

        /* Section headers mobile */
        .text-center.mb-50,
        .text-center.mb-60 {
          margin-bottom: 30px !important;
        }
        
        .text-center h2 {
          font-size: 1.65rem !important;
          line-height: 1.35 !important;
          padding: 0 10px;
          font-weight: 700;
        }

        /* USP cards mobile */
        .col.medium-3,
        .col.large-3 {
          margin-bottom: 15px !important;
        }
        
        .usp-card {
          padding: 22px 16px !important;
          margin-bottom: 0 !important;
          border-radius: 16px !important;
          height: auto !important;
          min-height: auto;
          display: flex !important;
          flex-direction: column !important;
          justify-content: flex-start !important;
          box-shadow: 0 3px 12px rgba(0,0,0,0.06) !important;
        }
        
        .usp-card .icon-box {
          width: 56px !important;
          height: 56px !important;
          margin: 0 auto 15px !important;
          border-radius: 50% !important;
        }
        
        .usp-card .icon-box i {
          font-size: 1.4rem !important;
        }
        
        .usp-card h3 {
          font-size: 1.05rem !important;
          margin-bottom: 8px !important;
          line-height: 1.35 !important;
          font-weight: 600;
        }
        
        .usp-card p {
          font-size: 0.85rem !important;
          line-height: 1.55 !important;
        }

        /* Curriculum modules mobile */
        .module-item {
          padding: 25px 20px !important;
          margin-bottom: 15px !important;
          border-radius: 16px !important;
          border-left-width: 4px !important;
        }
        
        .module-header {
          margin-bottom: 15px !important;
        }
        
        .module-header > div:first-child {
          width: 38px !important;
          height: 38px !important;
          min-width: 38px !important;
          margin-right: 12px !important;
          border-radius: 8px !important;
        }
        
        .module-header > div:first-child i {
          font-size: 1rem !important;
        }
        
        .module-item h4 {
          font-size: 1.05rem !important;
          line-height: 1.35 !important;
        }
        
        .module-body ul li {
          padding: 5px 0 !important;
          font-size: 0.9rem !important;
          line-height: 1.5 !important;
        }
        
        .module-body ul li i {
          font-size: 0.7rem !important;
          margin-top: 4px !important;
        }

        /* Benefits section mobile */
        .benefit-item {
          margin-bottom: 18px !important;
        }
        
        .benefit-item > div:first-child {
          width: 44px !important;
          height: 44px !important;
          min-width: 44px !important;
          margin-right: 14px !important;
          border-radius: 12px !important;
        }
        
        .benefit-item > div:first-child i {
          font-size: 1.1rem !important;
        }
        
        .benefit-item h4 {
          font-size: 1rem !important;
          margin-bottom: 4px !important;
        }
        
        .benefit-item p {
          font-size: 0.9rem !important;
          line-height: 1.55 !important;
        }

        /* Target audience mobile */
        .target-audience-section {
          padding: 50px 0 !important;
        }
        
        .target-audience-section h2 {
          font-size: 1.6rem !important;
          margin-bottom: 35px !important;
        }
        
        .target-card {
          padding: 28px 20px !important;
          border-radius: 16px !important;
          margin-bottom: 15px !important;
        }
        
        .target-card > div:first-child {
          width: 56px !important;
          height: 56px !important;
          margin-bottom: 18px !important;
        }
        
        .target-card > div:first-child i {
          font-size: 1.4rem !important;
        }
        
        .target-card > div:last-child {
          font-size: 0.95rem !important;
          line-height: 1.55 !important;
        }

        /* Testimonials mobile */
        .testimonial-card {
          padding: 35px 25px !important;
          border-radius: 20px !important;
        }
        
        .testimonial-card p {
          font-size: 1rem !important;
          margin-bottom: 25px !important;
        }

        /* Registration form mobile */
        #register {
          padding: 50px 0 !important;
        }
        
        #register .reg-wrapper {
          padding: 35px 22px !important;
          border-radius: 25px !important;
        }
        
        #register .col.medium-6:first-child {
          padding-right: 0 !important;
          margin-bottom: 25px !important;
        }
        
        #register h2 {
          font-size: 1.6rem !important;
          margin-bottom: 12px !important;
          line-height: 1.25 !important;
        }
        
        #register h3 {
          font-size: 1.15rem !important;
          margin-bottom: 18px !important;
        }
        
        #register p {
          font-size: 0.95rem !important;
          margin-bottom: 25px !important;
          line-height: 1.7 !important;
        }
        
        #register .col.medium-6 > div[style*="font-weight: 600"] {
          margin-bottom: 30px !important;
        }
        
        #register .col.medium-6 > div[style*="font-weight: 600"] p {
          font-size: 1rem !important;
          margin-bottom: 12px !important;
        }
        
        .bg-vip-form {
          padding: 25px 20px !important;
          border-radius: 20px !important;
          background: rgba(255,255,255,0.08) !important;
          backdrop-filter: blur(15px) !important;
          border: 1px solid rgba(255,255,255,0.2) !important;
        }
        
        .bg-vip-form label {
          font-size: 0.85rem !important;
          margin-bottom: 6px !important;
          opacity: 0.95;
          font-weight: 500;
        }
        
        .bg-vip-form input,
        .bg-vip-form select {
          padding: 12px 18px !important;
          font-size: 0.95rem !important;
          border-radius: 50px !important;
          background: rgba(255,255,255,0.98) !important;
          border: 2px solid rgba(255,255,255,0.3) !important;
          margin-bottom: 0 !important;
          height: auto !important;
          box-shadow: 0 3px 8px rgba(0,0,0,0.08) !important;
          transition: all 0.3s ease;
        }
        
        .bg-vip-form input:focus,
        .bg-vip-form select:focus {
          border-color: var(--metta-main) !important;
          box-shadow: 0 4px 12px rgba(0,0,0,0.12) !important;
          outline: none;
        }
        
        .bg-vip-form > div {
          margin-bottom: 15px !important;
        }
        
        .bg-vip-form button {
          font-size: 1rem !important;
          padding: 14px 24px !important;
          border-radius: 50px !important;
          margin-top: 15px !important;
          width: 100% !important;
          background: linear-gradient(135deg, #D4AF37, #C89F2D) !important;
          box-shadow: 0 6px 20px rgba(212, 175, 55, 0.4) !important;
          font-weight: 700;
          letter-spacing: 0.5px;
          transition: all 0.3s ease;
        }
        
        .bg-vip-form button:hover {
          transform: translateY(-2px);
          box-shadow: 0 8px 25px rgba(212, 175, 55, 0.5) !important;
        }
      }

      /* Phone Adjustments - Extra small screens */
      @media (max-width: 549px) {
        #banner-1503614659 {
          padding-top: 120% !important;
        }
        
        .hero-v2-container {
          padding: 20px 15px !important;
          padding-top: 90px !important; /* Account for fixed header */
        }
        
        .hero-title-main {
          font-size: 1.4rem !important;
        }
        
        .hero-title-sub {
          font-size: 1.05rem !important;
        }
        
        .hero-booking-link {
          font-size: 0.8rem !important;
          padding: 10px 18px !important;
        }
        
        .text-heading h2 {
          font-size: 1.5rem !important;
        }
        
        .text-center h2 {
          font-size: 1.45rem !important;
        }
        
        #register h2 {
          font-size: 1.4rem !important;
        }
        
        .bg-vip-form {
          padding: 20px 15px !important;
        }
        
        .bg-vip-form input,
        .bg-vip-form select {
          padding: 10px 16px !important;
          font-size: 0.9rem !important;
        }
        
        .bg-vip-form button {
          font-size: 0.95rem !important;
          padding: 12px 20px !important;
        }
      }
      
      /* === MOBILE ICON & TEXT OVERLAP FIXES === */
      
      /* Ensure Font Awesome icons display correctly */
      .usp-card i,
      .module-item i,
      .benefit-list i,
      .section-padding[style*="var(--metta-bg)"] i,
      .fa, .fas, .fab, .far, .fal, .fad {
        font-family: "Font Awesome 6 Free", "Font Awesome 6 Brands", -apple-system, BlinkMacSystemFont, Arial, sans-serif !important;
        font-style: normal !important;
        display: inline-block !important;
        min-width: 1em !important;
        text-align: center !important;
      }
      
      .fas {
        font-weight: 900 !important;
      }
      
      .far {
        font-weight: 400 !important;
      }
      
      .fab {
        font-family: "Font Awesome 6 Brands" !important;
      }
      
      /* Fix USP card icon boxes on mobile */
      @media (max-width: 549px) {
        .usp-card {
          padding: 20px 15px !important;
          min-height: auto !important;
        }
        
        .usp-card .icon-box {
          height: auto !important;
          min-height: 50px !important;
          margin-bottom: 15px !important;
        }
        
        .usp-card .icon-box i {
          font-size: 2.2rem !important;
          line-height: 1.2 !important;
          width: auto !important;
          color: var(--vang-dat) !important;
        }
        
        .usp-card h3 {
          font-size: 1.1rem !important;
          line-height: 1.4 !important;
          margin-bottom: 8px !important;
          word-wrap: break-word !important;
          overflow-wrap: break-word !important;
          hyphens: auto !important;
        }
        
        .usp-card p {
          font-size: 0.85rem !important;
          line-height: 1.55 !important;
        }
        
        /* Fix module cards text overlap */
        .module-item {
          padding: 25px 18px !important;
        }
        
        .module-item h4 {
          font-size: 1.1rem !important;
          line-height: 1.35 !important;
          word-wrap: break-word !important;
        }
        
        .module-item i {
          font-size: 1.3rem !important;
          margin-right: 12px !important;
          flex-shrink: 0 !important;
        }
        
        .module-body ul li {
          font-size: 0.9rem !important;
          line-height: 1.5 !important;
          padding: 6px 0 !important;
        }
        
        /* Fix benefit icons */
        .benefit-list > div > div:first-child {
          width: 45px !important;
          height: 45px !important;
          min-width: 45px !important;
          margin-right: 15px !important;
        }
        
        .benefit-list > div > div:first-child span {
          font-size: 1.2rem !important;
        }
        
        .benefit-list h4 {
          font-size: 1.05rem !important;
          line-height: 1.3 !important;
        }
        
        .benefit-list p {
          font-size: 0.9rem !important;
          line-height: 1.5 !important;
        }
        
        /* Fix target audience section icons */
        .section-padding[style*="var(--metta-bg)"] .col.medium-4 > div {
          padding: 25px 18px !important;
        }
        
        .section-padding[style*="var(--metta-bg)"] .col.medium-4 > div i {
          font-size: 2.2rem !important;
          margin-bottom: 15px !important;
          color: var(--metta-main) !important;
        }
        
        .section-padding[style*="var(--metta-bg)"] .col.medium-4 > div > div {
          font-size: 1rem !important;
          line-height: 1.55 !important;
        }
        
        /* Fix registration form contact icons */
        #register .col.medium-6 p i {
          color: var(--metta-main) !important;
          font-size: 1.1rem !important;
          width: 20px !important;
          margin-right: 12px !important;
        }
        
        .training-locations i {
          font-size: 1rem !important;
          margin-top: 3px !important;
        }
      }
    </style>

  </div>
</main>

<?php get_footer(); ?>
