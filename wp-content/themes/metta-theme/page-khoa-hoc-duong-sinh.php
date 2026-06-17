<?php
/* Template Name: page-khoa-hoc-duong-sinh */
get_header();

$course_contact_url = 'https://www.facebook.com/people/METTA-SPA-VIET-NAM/61573332995547/';

$course_text = function($field_name, $default, $legacy_values = array()) {
  $value = function_exists('metta_get_field') ? metta_get_field($field_name) : '';
  $plain_value = is_string($value) ? preg_replace('/\s+/', ' ', trim(wp_strip_all_tags($value))) : '';
  $legacy_values = array_map(function($legacy_value) {
    return preg_replace('/\s+/', ' ', trim(wp_strip_all_tags($legacy_value)));
  }, $legacy_values);

  if ($plain_value === '' || in_array($plain_value, $legacy_values, true)) {
    return $default;
  }

  return $value;
};

$course_rows = function($field_name, $defaults, $required_key = 'title', $legacy_first_values = array()) {
  $rows = function_exists('metta_get_field') ? metta_get_field($field_name) : array();

  if (!is_array($rows) || empty($rows)) {
    return $defaults;
  }

  $rows = array_values(array_filter($rows, 'is_array'));
  if (count($rows) < count($defaults)) {
    return $defaults;
  }

  $first_value = '';
  foreach (array('title', 'name', 'content', 'desc') as $key) {
    if (!empty($rows[0][$key])) {
      $first_value = preg_replace('/\s+/', ' ', trim(wp_strip_all_tags($rows[0][$key])));
      break;
    }
  }
  $legacy_first_values = array_map(function($legacy_value) {
    return preg_replace('/\s+/', ' ', trim(wp_strip_all_tags($legacy_value)));
  }, $legacy_first_values);

  if ($first_value !== '' && in_array($first_value, $legacy_first_values, true)) {
    return $defaults;
  }

  $items = array();
  foreach ($rows as $index => $row) {
    $base = isset($defaults[$index]) ? $defaults[$index] : array();
    $clean_row = array();

    foreach ($row as $key => $value) {
      if ($value !== '' && $value !== null && $value !== false && !(is_array($value) && empty($value))) {
        $clean_row[$key] = $value;
      }
    }

    $item = array_merge($base, $clean_row);
    if ($required_key === '' || !empty($item[$required_key])) {
      $items[] = $item;
    }
  }

  return !empty($items) ? $items : $defaults;
};

$course_usp_items = $course_rows('course_usp_list', array(
  array(
    'icon_class' => 'fas fa-book-medical',
    'title' => 'Chương trình chuẩn Đông Y & Thực chiến',
    'desc' => 'Giáo trình được biên soạn bài bản, chắt lọc tinh hoa Y học cổ truyền, loại bỏ lý thuyết sáo rỗng, tập trung vào kỹ thuật trị liệu thực tế tại Spa.',
  ),
  array(
    'icon_class' => 'fas fa-hands-helping',
    'title' => 'Cầm tay chỉ việc - 1 kèm 1',
    'desc' => 'Không đào tạo đại trà. Giảng viên tại Metta sát sao chỉnh sửa từng tư thế đứng, từng lực đạo ngón tay để đảm bảo học viên làm đúng, làm chuẩn ngay từ đầu.',
  ),
  array(
    'icon_class' => 'fas fa-user-friends',
    'title' => 'Thực hành trên người thật (93%)',
    'desc' => 'Học viên được thực hành chéo và thực hành trên mẫu thật liên tục để rèn luyện cảm giác tay - yếu tố sống còn của một KTV giỏi.',
  ),
  array(
    'icon_class' => 'fas fa-lightbulb',
    'title' => 'Tư duy làm nghề & Kỹ năng mềm',
    'desc' => 'Không chỉ dạy kỹ thuật, Metta đào tạo tư duy phục vụ từ tâm (Metta), kỹ năng giao tiếp, xử lý tình huống và tư vấn khách hàng chuyên nghiệp.',
  ),
), 'title', array('Y Lý Bản Sắc'));

$course_curr_items = $course_rows('course_curr_list', array(
  array(
    'title' => 'MODULE 1: NỀN TẢNG Y LÝ ĐÔNG Y',
    'content' => '<ul><li>Học thuyết Âm Dương - Ngũ Hành ứng dụng trong dưỡng sinh.</li><li>Hệ thống Kinh lạc & Huyệt đạo cơ bản trên cơ thể người.</li><li>Cách chẩn đoán sức khỏe sơ bộ qua quan sát và sờ nắn (Vọng - Văn - Vấn - Thiết).</li></ul>',
  ),
  array(
    'title' => 'MODULE 2: KỸ THUẬT TRỊ LIỆU CƠ BẢN & CHUYÊN SÂU',
    'content' => '<ul><li>Kỹ thuật Massage bấm huyệt: Các thủ thuật xoa, xát, day, ấn, bấm chuẩn Đông Y.</li><li>Trị liệu Cổ Vai Gáy: Phác đồ đả thông kinh lạc vùng cổ vai gáy (Dịch vụ "quốc dân" tại mọi Spa).</li><li>Trị liệu Thắt lưng & Cột sống: Kỹ thuật giải cơ, giảm đau mỏi thắt lưng eo.</li><li>Gội đầu Dưỡng sinh Đông y: Quy trình gội, massage đầu, bấm huyệt vùng mặt - đầu giúp thư giãn sâu.</li></ul>',
  ),
  array(
    'title' => 'MODULE 3: CÁC LIỆU PHÁP BỔ TRỢ',
    'content' => '<ul><li>Giác hơi, cạo gió, hỏa liệu pháp đúng kỹ thuật và an toàn.</li><li>Cách sử dụng các loại dược liệu, tinh dầu Metta trong trị liệu.</li></ul>',
  ),
  array(
    'title' => 'MODULE 4: QUẢN TRỊ & VẬN HÀNH (Dành cho khóa chủ Spa)',
    'content' => '<ul><li>Quy trình đón tiếp và tư vấn khách hàng.</li><li>Setup phòng, giường và không gian trị liệu chuẩn.</li></ul>',
  ),
  array(
    'title' => 'MODULE 5: DƯỠNG SINH CHUYÊN SÂU THEO TẠNG PHỦ',
    'content' => '<p>Học viên sẽ nắm vững kỹ thuật tác động sâu vào hệ thống tạng phủ, giúp khách hàng phục hồi gốc rễ sức khỏe, cân bằng âm dương:</p><ul><li>Trị liệu Vai - Cổ - Gáy chuyên sâu</li><li>Dưỡng Gan Giải Uất: Thao tác bài độc, thanh nhiệt, giúp khách hàng thư thái, giảm nóng giận.</li><li>Dưỡng Tim An Thần</li><li>Dưỡng Phổi Ích Khí</li><li>Dưỡng Tỳ Vị (Dạ dày): Kỹ thuật xoa bóp vùng bụng giúp điều hòa tiêu hóa, hấp thu dinh dưỡng.</li><li>Dưỡng Thận An Nguyên</li><li>Chăm sóc Phụ Khoa (Bảo dưỡng Tử cung)</li></ul>',
  ),
  array(
    'title' => 'MODULE 6: TƯ DUY KINH DOANH - MARKETING & SETUP SPA',
    'content' => '<p>Không chỉ dạy nghề, Metta trao cho bạn công thức vận hành spa thành công đã được kiểm chứng:</p><ul><li>Tư vấn Setup & Vận hành</li><li>Marketing Thực Chiến (Dành cho người không chuyên)</li><li>Kỹ năng Chốt Sale & Giữ chân khách</li></ul>',
  ),
), 'title', array('CHƯƠNG 1: LÝ THUYẾT NỀN TẢNG'));

$course_benefit_items = $course_rows('course_benefit_list', array(
  array(
    'icon_class' => 'fas fa-certificate',
    'title' => 'Chứng nhận',
    'desc' => 'Được cấp chứng nhận hoàn thành khóa học có giá trị hành nghề.',
  ),
  array(
    'icon_class' => 'fas fa-briefcase',
    'title' => 'Việc làm',
    'desc' => 'Cơ hội được giữ lại làm việc tại hệ thống Metta Spa hoặc giới thiệu việc làm tại các đối tác uy tín với mức thu nhập hấp dẫn.',
  ),
  array(
    'icon_class' => 'fas fa-redo-alt',
    'title' => 'Bảo hành',
    'desc' => 'Được học lại miễn phí nếu chưa vững tay nghề. Hỗ trợ cập nhật kiến thức mới trọn đời.',
  ),
  array(
    'icon_class' => 'fas fa-toolbox',
    'title' => 'Dụng cụ',
    'desc' => 'Được hỗ trợ đầy đủ dược liệu, khăn, áo đồng phục trong quá trình học.',
  ),
  array(
    'icon_class' => 'fas fa-home',
    'title' => 'Có Ký Túc Xá Cho Học Viên',
    'desc' => 'Nếu bạn ở xa hay tỉnh khác, Metta chuẩn bị nơi ở chỉnh chu để đảm bảo quá trình học của bạn chất lượng nhất.',
  ),
), 'title', array('Chứng chỉ nghề'));

$course_target_items = $course_rows('course_target_list', array(
  array(
    'icon_class' => 'fas fa-user-plus',
    'content' => 'Người mới bắt đầu, muốn tìm một nghề ổn định, thu nhập tốt và nhân văn.',
  ),
  array(
    'icon_class' => 'fas fa-spa',
    'content' => 'KTV Spa muốn nâng cao tay nghề, học thêm về Đông y trị liệu chuyên sâu.',
  ),
  array(
    'icon_class' => 'fas fa-store',
    'content' => 'Chủ Spa muốn chuẩn hóa quy trình kỹ thuật cho cơ sở của mình.',
  ),
  array(
    'icon_class' => 'fas fa-heart',
    'content' => 'Người muốn học để tự chăm sóc sức khỏe cho bản thân và gia đình.',
  ),
  array(
    'icon_class' => 'fas fa-plane-departure',
    'content' => 'Các anh chị đi định cư NƯỚC NGOÀI muốn mở 1 tiệm dưỡng sinh thu hút khách quốc tế.',
  ),
), 'content', array('Người mới bắt đầu muốn tìm kiếm một nghề nghiệp ổn định, nhân văn.'));

$course_testi_items = $course_rows('course_testi_list', array(
  array(
    'name' => 'Nguyễn Thúy',
    'role' => 'Khóa K12',
    'content' => 'Trước khi đến Metta, mình rất sợ học không vào vì không biết gì về huyệt đạo. Nhưng giáo viên dạy rất nhiệt tình, cầm tay chỉ huyệt từng chút một. Giờ mình đã tự tin đi làm và có thu nhập ổn định.',
    'image' => '',
  ),
  array(
    'name' => 'Minh Tuấn',
    'role' => 'Chủ Spa tại Bình Dương',
    'content' => 'Khóa học giúp mình hệ thống lại toàn bộ kiến thức để về đào tạo lại cho nhân viên. Quy trình tại Metta rất chuẩn và thực tế.',
    'image' => '',
  ),
), 'content');
?>

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
              <span class="hero-title-main"><?php echo esc_html($course_text('course_hero_h1', 'KHỞI ĐẦU SỰ NGHIỆP VỮNG CHẮC', array('KHỞI ĐẦU SỰ NGHIỆP'))); ?></span>
              <span class="hero-title-sub"><?php echo esc_html($course_text('course_hero_h1_sub', 'CÙNG NGHỀ DƯỠNG SINH ĐÔNG Y', array('VỮNG CHẮC TẠI METTA', 'vững chắc tại Metta'))); ?></span>
            </h1>

            <p class="hero-desc">
              <?php echo wp_kses_post($course_text('course_hero_sub', '"Trao nghề từ Tâm - Dựng nghiệp từ Tầm". Metta Spa cam kết đào tạo KTV chuyên nghiệp với 80% thời lượng thực hành thực chiến.', array('"Trao nghề từ Tâm – Dựng nghiệp từ Tầm" Văn hóa Tây Nguyên hòa quyện tinh hoa Đông Y trong từng bài giảng.'))); ?>
            </p>

            <div style="display: flex; gap: 16px; flex-wrap: wrap; align-items: center;">
              <a href="<?php echo esc_url($course_contact_url); ?>" class="hero-booking-link" target="_blank" rel="noopener">
                <?php echo esc_html($course_text('course_hero_cta_text', 'ĐĂNG KÝ TƯ VẤN LỘ TRÌNH', array('NHẬN LỘ TRÌNH TƯ VẤN', 'Nhận lộ trình tư vấn'))); ?>
              </a>
              <a href="<?php echo esc_url($course_contact_url); ?>" class="hero-booking-link" target="_blank" rel="noopener" style="background: rgba(255,255,255,0.16); border: 1px solid rgba(255,255,255,0.55);">
                <?php echo esc_html($course_text('course_hero_cta_2_text', 'NHẬN ƯU ĐÃI KHÓA HỌC', array('NHẬN ƯU ĐÃI LÊN ĐẾN 30% HỌC PHÍ'))); ?>
              </a>
            </div>
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

        @media (min-width: 550px) {
          #banner-1503614659 {
            padding-top: 0 !important;
            height: auto !important;
          }
          #banner-1503614659 .banner-inner {
            position: relative !important;
            height: auto !important;
          }
        }

      </style>
    </div>

    <!-- CONTENT SECTIONS -->
    <!-- 2. GIỚI THIỆU -->
    <section class="section section-padding bg-cream" style="padding-top: 80px; padding-bottom: 80px;">
      <div class="container relative">
        <div class="row align-middle col-equal-box">
          <div class="col medium-6 small-12">
            <div class="col-inner">
              <div class="intro-badge" style="color: var(--vang-dat); font-weight: 700; letter-spacing: 2px; margin-bottom: 15px; font-size: 0.9rem;">
                <?php echo metta_get_with_fallback('course_intro_badge', 'VỀ CHÚNG TÔI'); ?>
              </div>
              <div class="text-heading" style="text-align: left;">
                <h2 style="color: var(--primary-color); font-size: 2.8rem; margin-bottom: 25px;">
                  <?php echo esc_html($course_text('course_intro_title', 'TẠI SAO NGHỀ DƯỠNG SINH LÀ "CHÌA KHÓA VÀNG" TRONG THỜI ĐẠI MỚI?', array('SỨ MỆNH ĐÀO TẠO TỪ TÂM'))); ?>
                </h2>
              </div>
              <div class="is-divider" style="background-color: var(--vang-dat); width: 80px; height: 4px; margin-bottom: 35px;"></div>
              
              <div class="content-body" style="color: #444; font-size: 1.1rem; line-height: 1.9;">
                <?php echo wp_kses_post($course_text('course_intro_content', '<p>Sức khỏe tự nhiên đang là xu hướng toàn cầu. Khi con người ngày càng tìm về các phương pháp chữa lành không dùng thuốc, nhu cầu về nhân lực ngành Dưỡng sinh Đông y tăng trưởng mạnh mẽ hơn bao giờ hết.</p><p>Tại Học viện Đào tạo Metta, chúng tôi không chỉ dạy bạn một cái nghề để mưu sinh, mà còn truyền trao một sứ mệnh: <strong>Sứ mệnh chăm sóc sức khỏe cộng đồng bằng đôi bàn tay và y lý cổ truyền.</strong></p>', array('Tại Metta Spa, chúng tôi coi mỗi học viên là một viên ngọc quý cần được mài dũa. Không chỉ là kỹ thuật, chúng tôi truyền dạy cái Đạo của người làm nghề y – sự tận tâm, thấu cảm và lòng trắc ẩn. Với không gian đậm chất Tây Nguyên Đại Ngàn, khóa học mang đến trải nghiệm học tập an nhiên và sâu sắc.'))); ?>
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
    <section class="section section-padding bg-white" style="padding: 80px 0;">
      <div class="container">
        <div class="text-center mb-50">
          <div class="text-heading">
            <h2 style="color: var(--primary-color);"><?php echo esc_html($course_text('course_usp_title', 'ĐIỂM KHÁC BIỆT CỦA CHƯƠNG TRÌNH ĐÀO TẠO TẠI METTA', array('ĐIỂM KHÁC BIỆT TẠI METTA'))); ?></h2>
          </div>
          <div class="is-divider small mx-auto" style="background-color: var(--vang-dat);"></div>
        </div>
        <div class="row" style="margin-top: 50px;">
          <?php foreach($course_usp_items as $usp): ?>
          <div class="col medium-6 large-3 mb-30">
            <div class="usp-card text-center" style="padding: 30px; background: #fffcf9; border-radius: 20px; border: 1px solid #eee; transition: all 0.3s ease; height: 100%;">
              <div class="icon-box" style="margin-bottom: 25px;">
                <i class="<?php echo esc_attr($usp['icon_class']); ?>" style="font-size: 3rem; color: var(--vang-dat);"></i>
              </div>
              <h3 style="color: var(--primary-color); font-size: 1.3rem; margin-bottom: 15px;"><?php echo esc_html($usp['title']); ?></h3>
              <p style="color: #777; font-size: 0.95rem; line-height: 1.6;"><?php echo esc_html($usp['desc']); ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    
    <!-- 4. LỘ TRÌNH -->
    <section class="section section-padding bg-light-cream" style="padding: 100px 0;">
      <div class="container relative">
        <div class="text-center mb-50">
          <div class="text-heading">
            <h2 style="color: var(--primary-color);"><?php echo esc_html($course_text('course_curr_title', 'LỘ TRÌNH ĐÀO TẠO CHI TIẾT', array('LỘ TRÌNH PHÁT TRIỂN TOÀN DIỆN'))); ?></h2>
          </div>
          <div class="is-divider small mx-auto" style="background-color: var(--vang-dat);"></div>
        </div>
        <div class="row" style="margin-top: 50px;">
          <?php foreach($course_curr_items as $module): ?>
          <div class="col medium-4 mb-30">
            <div class="module-item" style="background: #fff; border-radius: 20px; padding: 40px; border-left: 6px solid var(--vang-dat); box-shadow: 0 15px 40px rgba(0,0,0,0.05); height: 100%;">
              <h4 style="color: var(--primary-color); margin-bottom: 20px; font-weight: 700; font-size: 1.25rem;"><?php echo esc_html($module['title']); ?></h4>
              <div class="module-body" style="color: #666; font-size: 1rem; line-height: 1.8;">
                <?php echo wp_kses_post($module['content']); ?>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- 5. BENEFITS -->
    <section class="section section-padding bg-white" style="padding: 100px 0;">
      <div class="container">
        <div class="row align-middle">
          <div class="col medium-6 mb-30">
            <div class="text-heading" style="text-align: left;">
              <h2 style="color: var(--primary-color);"><?php echo esc_html($course_text('course_benefit_title', 'QUYỀN LỢI CỦA HỌC VIÊN', array('QUYỀN LỢI ĐẶC QUYỀN'))); ?></h2>
            </div>
            <div class="is-divider small" style="background-color: var(--vang-dat);"></div>
            <div class="benefit-list" style="margin-top: 40px;">
              <?php foreach($course_benefit_items as $benefit): ?>
              <div style="display: flex; margin-bottom: 30px;">
                <div style="width: 55px; height: 55px; background: #fffcf9; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 25px; flex-shrink: 0; border: 1px solid #ebd9c5;">
                  <i class="<?php echo esc_attr($benefit['icon_class']); ?>" style="color: var(--vang-dat); font-size: 1.5rem;"></i>
                </div>
                <div>
                  <h4 style="margin: 0 0 8px; color: var(--primary-color); font-size: 1.2rem;"><?php echo esc_html($benefit['title']); ?></h4>
                  <p style="color: #666; margin: 0; font-size: 1rem; line-height: 1.6;"><?php echo esc_html($benefit['desc']); ?></p>
                </div>
              </div>
              <?php endforeach; ?>
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
    <section class="section section-padding bg-dark-moss" style="color: #fff; padding: 100px 0;">
      <div class="container text-center">
        <div class="text-heading-light">
          <h2 style="color: var(--metta-main); font-size: 2.8rem; margin-bottom: 60px;"><?php echo esc_html($course_text('course_target_title', 'ĐỐI TƯỢNG PHÙ HỢP', array('KHÓA HỌC DÀNH CHO AI?'))); ?></h2>
        </div>
        <div class="row">
          <?php foreach($course_target_items as $target): ?>
          <div class="col medium-4 mb-30">
            <div style="background: rgba(255,255,255,0.04); padding: 50px 30px; border-radius: 25px; border: 1px solid rgba(255,255,255,0.08); height: 100%; transition: all 0.3s ease;">
              <i class="<?php echo esc_attr($target['icon_class']); ?>" style="font-size: 3.5rem; color: var(--metta-main); margin-bottom: 30px;"></i>
              <div style="font-size: 1.15rem; line-height: 1.7; font-weight: 400;"><?php echo esc_html($target['content']); ?></div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- 7. TESTIMONIALS -->
    <section class="section section-padding bg-cream" style="padding: 100px 0;">
      <div class="container">
        <div class="text-center mb-60">
          <div class="text-heading">
            <h2 style="color: var(--primary-color);"><?php echo esc_html($course_text('course_testi_title', 'CẢM NHẬN HỌC VIÊN', array('CHIA SẺ TỪ HÀNH TRÌNH HỌC VIÊN'))); ?></h2>
          </div>
          <div class="is-divider small mx-auto" style="background-color: var(--vang-dat);"></div>
        </div>
        <div class="row align-center">
          <?php foreach($course_testi_items as $testimonial): ?>
          <div class="col medium-5 mb-30">
            <div class="testimonial-card"
              style="background: #fff; padding: 50px; border-radius: 30px; box-shadow: 0 25px 60px rgba(96, 56, 19, 0.08); position: relative; height: 100%; border: 1px solid #efefef;">
              <i class="fas fa-quote-left" style="position: absolute; top: 30px; left: 30px; font-size: 2.5rem; color: var(--metta-main); opacity: 0.15;"></i>
              <p style="font-style: italic; margin-bottom: 35px; color: #555; font-size: 1.1rem; line-height: 1.8; position: relative; z-index: 2;">"<?php echo esc_html($testimonial['content']); ?>"</p>
              <div style="display: flex; align-items: center;">
                <?php if(!empty($testimonial['image'])): ?>
                <img src="<?php echo esc_url($testimonial['image']); ?>" style="width: 70px; height: 70px; border-radius: 50%; margin-right: 20px; object-fit: cover; border: 2px solid var(--metta-main);">
                <?php endif; ?>
                <div>
                  <strong style="color: var(--primary-color); font-size: 1.25rem;"><?php echo esc_html($testimonial['name']); ?></strong><br>
                  <small style="color: #999; font-weight: 500; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1px;"><?php echo esc_html($testimonial['role']); ?></small>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- 8. FORM -->
    <section id="register" class="section section-padding bg-white" style="padding: 120px 0;">
      <div class="container">
        <div class="reg-wrapper" style="background: var(--metta-bg); border-radius: 40px; overflow: hidden; padding: 80px 60px; position: relative; box-shadow: 0 30px 80px rgba(0,0,0,0.4);">
          <div class="row align-middle relative" style="z-index: 2;">
            <div class="col medium-6 text-white" style="color: white; padding-right: 40px;">
              <div class="text-heading-light" style="text-align: left;">
                <h2 style="color: var(--metta-main); font-size: 3.2rem; margin-bottom: 25px; line-height: 1.1;">
                  <?php echo esc_html($course_text('course_reg_title', 'ĐỪNG BỎ LỠ CƠ HỘI TRỞ THÀNH "BÀN TAY VÀNG" TRONG LÀNG DƯỠNG SINH', array('GHI DANH HÔM NAY'))); ?>
                </h2>
              </div>
              <h3 style="color: #fff; margin-bottom: 35px; font-weight: 300; font-size: 1.8rem; opacity: 0.9;">
                Liên hệ tư vấn lộ trình học qua fanpage Metta Spa
              </h3>
              <p style="font-size: 1.15rem; opacity: 0.8; margin-bottom: 50px; line-height: 1.8;">Đừng bỏ lỡ cơ hội thay đổi sự nghiệp của bạn với bí quyết dưỡng sinh độc quyền từ Metta. Hỗ trợ việc làm sau khóa học!</p>
              <div style="font-weight: 600; font-size: 1.1rem;">
                <p style="margin-bottom: 15px; display: flex; align-items: center;"><i class="fas fa-phone-alt" style="color: var(--metta-main); margin-right: 20px; font-size: 1.3rem;"></i> 0931.323.268</p>
                <p style="display: flex; align-items: center;"><i class="fas fa-envelope" style="color: var(--metta-main); margin-right: 20px; font-size: 1.3rem;"></i> Mettaspadongy@gmail.com</p>
                <div style="margin-top: 35px; padding-top: 25px; border-top: 1px solid rgba(255,255,255,0.15);">
                  <h4 style="color: #fff; font-size: 1.05rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 18px;">Địa điểm đào tạo:</h4>
                  <p style="margin-bottom: 12px; display: flex; align-items: flex-start;"><i class="fas fa-map-marker-alt" style="color: var(--metta-main); margin-right: 20px; font-size: 1.2rem; margin-top: 4px;"></i><span><strong style="color: var(--metta-main);">Cơ sở 1: Metta Tên Lửa</strong><br>Bình Tân, TP. HCM</span></p>
                  <p style="display: flex; align-items: flex-start;"><i class="fas fa-map-marker-alt" style="color: var(--metta-main); margin-right: 20px; font-size: 1.2rem; margin-top: 4px;"></i><span><strong style="color: var(--metta-main);">Cơ sở 2: Metta Biên Hòa</strong><br>Đồng Nai</span></p>
                </div>
              </div>
            </div>
            <div class="col medium-6">
              <div class="bg-vip-form" style="background: rgba(255,255,255,0.08); padding: 50px; border-radius: 30px; border: 1px solid rgba(255,255,255,0.15); backdrop-filter: blur(10px);">
                <div style="width: 78px; height: 78px; border-radius: 24px; background: rgba(244,157,33,0.16); display: flex; align-items: center; justify-content: center; margin-bottom: 28px;">
                  <i class="fas fa-comments" style="color: var(--metta-main); font-size: 2.4rem;"></i>
                </div>
                <h3 style="color: #fff; font-size: 2rem; line-height: 1.25; margin-bottom: 18px;">Nhắn tin để được tư vấn khóa học</h3>
                <p style="color: rgba(255,255,255,0.78); font-size: 1rem; line-height: 1.8; margin-bottom: 34px;">Metta sẽ tư vấn lộ trình học nghề, khóa nâng cao hoặc hướng mở tiệm phù hợp với nhu cầu của bạn.</p>
                <a href="<?php echo esc_url($course_contact_url); ?>" target="_blank" rel="noopener" class="button primary expand"
                  style="width: 100%; border-radius: 12px; font-weight: 700; font-size: 1.1rem; background: var(--metta-main) !important; padding: 15px; border: 0; text-transform: uppercase; text-align: center;">
                  NHẮN TIN FANPAGE
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
</main>

<?php get_footer(); ?>
