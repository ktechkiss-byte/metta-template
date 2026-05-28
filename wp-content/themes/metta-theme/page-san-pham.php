<?php
/* Template Name: page-san-pham */
get_header(); ?>

<style>
/* ====================================================
   TRANG SẢN PHẨM — Nền ấm nâu như trang chủ
==================================================== */

/* Background ảnh Gemini blur — đồng bộ với trang chủ */
body::before {
  content: '';
  position: fixed;
  inset: 0;
  z-index: -2;
  background: url('<?php echo get_site_url(); ?>/wp-content/uploads/2026/05/Gemini_Generated_Image_12ahia12ahia12ah-scaled.png') center center / cover no-repeat;
  filter: blur(3px) brightness(0.78);
  transform: scale(1.04);
}
body::after {
  content: '';
  position: fixed;
  inset: 0;
  z-index: -1;
  background: rgba(52, 22, 8, 0.5);
  pointer-events: none;
}
#wrapper, #main, #main.dark, body {
  background: transparent !important;
}

/* ====================================
   Layout chính
==================================== */
.sp-page-hero {
  padding: 60px 0 40px;
  background: transparent;
}

.sp-page-hero .row {
  align-items: center;
  gap: 0;
}

.sp-page-hero h2 {
  font-size: 2rem;
  color: var(--metta-main) !important;
  line-height: 1.3;
  margin-bottom: 12px;
  font-family: '1ftv-vip-medino';
  text-shadow: 0 2px 20px rgba(0,0,0,0.5);
}

.sp-page-hero .sp-divider {
  width: 60px;
  height: 3px;
  background: var(--metta-gold-dark);
  margin-bottom: 16px;
  border-radius: 2px;
}

.sp-page-hero p {
  color: #f0dfc0 !important;
  font-size: 1rem;
  line-height: 1.7;
}

/* Hero image — Indochine rectangular frame */
.sp-page-hero .sp-hero-img {
  position: relative;
  border-radius: 10px;
  border: 1.5px solid rgba(198,116,39,0.65);
  padding: 8px;
  background: rgba(30,12,3,0.3);
  box-shadow: 0 12px 40px rgba(0,0,0,0.4);
}

/* Corner ornaments */
.sp-page-hero .sp-hero-img::before,
.sp-page-hero .sp-hero-img::after {
  content: '';
  position: absolute;
  width: 22px;
  height: 22px;
  border-color: var(--metta-gold-dark);
  border-style: solid;
  z-index: 2;
}
.sp-page-hero .sp-hero-img::before {
  top: 4px; left: 4px;
  border-width: 2.5px 0 0 2.5px;
  border-top-left-radius: 3px;
}
.sp-page-hero .sp-hero-img::after {
  bottom: 4px; right: 4px;
  border-width: 0 2.5px 2.5px 0;
  border-bottom-right-radius: 3px;
}

.sp-page-hero .sp-hero-img img {
  width: 100%;
  display: block;
  border-radius: 6px;
  position: relative;
  z-index: 1;
}

/* Section tiêu đề danh sách */
.sp-listing-header {
  text-align: center;
  padding: 40px 0 10px;
}

.sp-listing-header h1 {
  color: var(--metta-main) !important;
  font-family: '1ftv-vip-medino';
  font-size: 2rem;
  margin-bottom: 8px;
  text-shadow: 0 2px 20px rgba(0,0,0,0.5);
}

.sp-listing-header p {
  color: #e0c8a0 !important;
  font-size: 1rem;
}

/* Grid sản phẩm */
.sp-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
  padding: 30px 0 60px;
}

@media (max-width: 900px) {
  .sp-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 560px) {
  .sp-grid { grid-template-columns: 1fr; }
}

/* Card sản phẩm */
.sp-card {
  background: rgba(30,12,3,0.85);
  border: 1px solid rgba(198,116,39,0.5);
  border-radius: 14px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
}

.sp-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 12px 40px rgba(198,116,39,0.3);
  border-color: var(--metta-main);
}

.sp-card-img {
  width: 100%;
  aspect-ratio: 4/3;
  overflow: hidden;
  background: rgba(0,0,0,0.2);
}

.sp-card-img a {
  display: block;
  width: 100%;
  height: 100%;
}

.sp-card-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.4s ease;
}

.sp-card:hover .sp-card-img img {
  transform: scale(1.04);
}

.sp-card-body {
  padding: 18px 20px 20px;
  display: flex;
  flex-direction: column;
  flex-grow: 1;
  gap: 8px;
}

.sp-card-name {
  font-size: 1.05rem;
  font-weight: 700;
  color: #fff !important;
  margin: 0;
  line-height: 1.4;
}

.sp-card-name a {
  color: inherit;
  text-decoration: none;
}

.sp-card-name a:hover {
  color: var(--metta-main) !important;
}

.sp-card-desc {
  font-size: 0.85rem;
  color: #d4b896 !important;
  line-height: 1.55;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
  margin: 0;
}

.sp-card-price {
  font-size: 1rem;
  font-weight: 700;
  color: var(--metta-main) !important;
  margin: 4px 0 0;
}

.sp-card-cta {
  margin-top: auto;
  padding-top: 14px;
}

.sp-card-btn {
  display: inline-block;
  padding: 9px 24px;
  border-radius: 99px;
  background: var(--metta-gradient-cta);
  color: #fff !important;
  font-size: 0.9rem;
  font-weight: 600;
  text-decoration: none;
  transition: opacity 0.2s ease, transform 0.2s ease;
  border: 1px solid rgba(198,116,39,0.4);
}

.sp-card-btn:hover {
  opacity: 0.88;
  transform: translateY(-1px);
  color: #fff !important;
}
</style>

<main id="main" class="">
  <div id="content" role="main" class="content-area">

    <!-- Hero intro section -->
    <section class="sp-page-hero section">
      <div class="section-content relative">
        <div class="row row-large align-middle">
          <div class="col medium-6 small-12 large-6">
            <div class="col-inner">
              <div class="text text-heading">
                <h2><?php echo nl2br(metta_get_with_fallback('product_page_title', 'Bảo Trì Sức Khoẻ Cùng Metta Spa')); ?></h2>
              </div>
              <div class="sp-divider"></div>
              <div class="text">
                <p><?php echo metta_get_with_fallback('product_page_intro', 'Metta Spa cung cấp các sản phẩm chăm sóc sức khỏe chủ động từ thảo dược thiên nhiên, được tinh chế dựa trên nền tảng Đông y dưỡng sinh.'); ?></p>
              </div>
            </div>
          </div>
          <div class="col medium-6 small-12 large-6">
            <div class="col-inner">
              <div class="sp-hero-img">
                <img src="<?php echo metta_get_field('product_page_img') ?: get_site_url().'/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg'; ?>"
                  alt="Metta Spa Products">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Listing header -->
    <div class="container">
      <div class="sp-listing-header">
        <h1><?php echo metta_get_with_fallback('product_listing_title', 'Sản Phẩm Của Chúng Tôi'); ?></h1>
        <p><?php echo metta_get_with_fallback('product_listing_subtitle', 'Giải pháp chăm sóc sức khỏe & sắc đẹp từ thiên nhiên'); ?></p>
      </div>

      <!-- Product grid — chỉ hiện sp có tên -->
      <div class="sp-grid">
        <?php
        $btn_label = metta_get_with_fallback('product_btn_label', 'Xem chi tiết');

        for ($i = 1; $i <= 6; $i++):
            $p_name = metta_get_field('sp'.$i.'_name');
            if (empty($p_name)) continue; // Bỏ qua slot trống

            $p_img   = metta_get_field('sp'.$i.'_img');
            $p_price = metta_get_field('sp'.$i.'_price');
            $p_link  = metta_get_field('sp'.$i.'_link') ?: '#';
            $p_desc  = metta_get_field('sp'.$i.'_desc');
        ?>
        <div class="sp-card">
          <div class="sp-card-img">
            <a href="<?php echo esc_url($p_link); ?>" <?php echo ($p_link !== '#') ? 'target="_blank"' : ''; ?>>
              <?php if ($p_img): ?>
                <img src="<?php echo esc_url($p_img); ?>" alt="<?php echo esc_attr($p_name); ?>">
              <?php else: ?>
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg"
                  alt="<?php echo esc_attr($p_name); ?>">
              <?php endif; ?>
            </a>
          </div>

          <div class="sp-card-body">
            <h3 class="sp-card-name">
              <a href="<?php echo esc_url($p_link); ?>" <?php echo ($p_link !== '#') ? 'target="_blank"' : ''; ?>>
                <?php echo esc_html($p_name); ?>
              </a>
            </h3>

            <?php if ($p_desc): ?>
            <p class="sp-card-desc"><?php echo esc_html($p_desc); ?></p>
            <?php endif; ?>

            <?php if ($p_price): ?>
            <p class="sp-card-price"><?php echo esc_html($p_price); ?></p>
            <?php endif; ?>

            <div class="sp-card-cta">
              <a href="<?php echo esc_url($p_link); ?>"
                class="sp-card-btn"
                <?php echo ($p_link !== '#') ? 'target="_blank"' : ''; ?>>
                <?php echo esc_html($btn_label); ?>
              </a>
            </div>
          </div>
        </div>
        <?php endfor; ?>
      </div>

    </div>

  </div>
</main>
<?php get_footer(); ?>