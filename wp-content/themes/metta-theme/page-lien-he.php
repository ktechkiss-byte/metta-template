<?php
/* Template Name: page-lien-he */
get_header(); ?>

<style>
/* ======================================================
   METTA CONTACT PAGE – PREMIUM SPA STYLE (Annam Inspired)
   ====================================================== */

/* Hero */
.mc-hero {
  position: relative;
  min-height: 100vh;
  display: flex;
  align-items: flex-end;
  overflow: hidden;
}
.mc-hero__bg {
  position: absolute; inset: 0;
  background: #1a2a1a;
}
.mc-hero__bg img {
  width: 100%; height: 100%;
  object-fit: cover;
  transform: scale(1.08);
  transition: transform 8s ease;
}
.mc-hero.is-visible .mc-hero__bg img {
  transform: scale(1);
}
.mc-hero__overlay {
  position: absolute; inset: 0;
  background: linear-gradient(
    to bottom,
    rgba(10,18,10,0.3) 0%,
    rgba(10,18,10,0.7) 60%,
    rgba(10,18,10,0.92) 100%
  );
}
.mc-hero__content {
  position: relative; z-index: 2;
  width: 100%;
  padding: 0 5% 100px;
  text-align: center;
}
.mc-hero__badge {
  display: inline-block;
  letter-spacing: 4px;
  font-size: 0.72rem;
  text-transform: uppercase;
  color: var(--metta-main, #c8a96e);
  border: 1px solid var(--metta-main, #c8a96e);
  padding: 5px 16px;
  margin-bottom: 24px;
  opacity: 0; transform: translateY(20px);
  transition: opacity 0.7s 0.2s ease, transform 0.7s 0.2s ease;
}
.mc-hero.is-visible .mc-hero__badge { opacity: 1; transform: none; }

.mc-hero__title {
  color: #fff;
  font-size: clamp(2.5rem, 6vw, 5rem);
  font-weight: 300;
  letter-spacing: 3px;
  line-height: 1.15;
  margin: 0 0 24px;
  text-transform: uppercase;
  opacity: 0; transform: translateY(30px);
  transition: opacity 0.8s 0.4s ease, transform 0.8s 0.4s ease;
}
.mc-hero.is-visible .mc-hero__title { opacity: 1; transform: none; }

.mc-hero__line {
  width: 60px; height: 2px;
  background: var(--metta-main, #c8a96e);
  margin: 0 auto 20px;
  opacity: 0; transform: scaleX(0);
  transition: opacity 0.6s 0.6s ease, transform 0.6s 0.6s ease;
}
.mc-hero.is-visible .mc-hero__line { opacity: 1; transform: scaleX(1); }

.mc-hero__sub {
  color: rgba(255,255,255,0.75);
  font-size: 1rem;
  max-width: 560px;
  margin: 0 auto;
  line-height: 1.7;
  opacity: 0; transform: translateY(20px);
  transition: opacity 0.7s 0.7s ease, transform 0.7s 0.7s ease;
}
.mc-hero.is-visible .mc-hero__sub { opacity: 1; transform: none; }

.mc-hero__scroll {
  position: absolute;
  bottom: 30px; left: 50%;
  transform: translateX(-50%);
  z-index: 3;
  display: flex; flex-direction: column; align-items: center; gap: 8px;
}
.mc-hero__scroll span {
  color: rgba(255,255,255,0.5);
  font-size: 0.68rem;
  letter-spacing: 3px;
  text-transform: uppercase;
}
.mc-hero__scroll-line {
  width: 1px; height: 50px;
  background: linear-gradient(to bottom, var(--metta-main,#c8a96e), transparent);
  animation: scrollLine 1.8s ease-in-out infinite;
}
@keyframes scrollLine {
  0%,100% { transform: scaleY(1); opacity:1; }
  50% { transform: scaleY(0.5); opacity:0.4; }
}

/* ---- Info Cards ---- */
.mc-cards {
  position: relative;
  z-index: 10;
  margin-top: -60px;
  padding: 0 5% 60px;
}
.mc-cards__grid {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 1px;
  background: var(--metta-main, #c8a96e);
  border: 1px solid var(--metta-main, #c8a96e);
  box-shadow: 0 20px 60px rgba(0,0,0,0.25);
}
.mc-card {
  background: var(--metta-bg, #fffcf9);
  padding: 28px 20px;
  text-align: center;
  transition: background 0.3s ease, transform 0.3s ease;
  opacity: 0; transform: translateY(30px);
  cursor: default;
}
.mc-card.is-visible { opacity:1; transform:none; }
.mc-card:hover { background: var(--metta-primary, #2d4a2d); }
.mc-card:hover .mc-card__icon,
.mc-card:hover .mc-card__label,
.mc-card:hover .mc-card__val { color: #fff !important; }
.mc-card__icon {
  font-size: 1.6rem;
  color: var(--metta-main, #c8a96e);
  margin-bottom: 12px;
  display: block;
  transition: color 0.3s;
}
.mc-card__label {
  font-size: 0.65rem;
  text-transform: uppercase;
  letter-spacing: 2px;
  color: #999;
  display: block;
  margin-bottom: 6px;
  transition: color 0.3s;
}
.mc-card__val {
  font-size: 0.88rem;
  color: var(--metta-primary, #2d4a2d);
  font-weight: 600;
  line-height: 1.5;
  transition: color 0.3s;
}
.mc-card__val a { color: inherit; text-decoration: none; }

/* ---- Map + Form Section ---- */
.mc-content {
  padding: 0 5% 80px;
}
.mc-content__grid {
  display: grid;
  grid-template-columns: 5fr 7fr;
  gap: 40px;
  align-items: start;
}
.mc-map-col {}
.mc-map-wrap {
  overflow: hidden;
  border: 1px solid rgba(200,169,110,0.3);
}
.mc-map-wrap iframe {
  display: block;
  width: 100%;
  height: 380px;
  filter: grayscale(20%);
  transition: filter 0.4s;
}
.mc-map-wrap:hover iframe { filter: grayscale(0); }

.mc-side-img {
  margin-top: 16px;
  overflow: hidden;
  position: relative;
}
.mc-side-img img {
  width: 100%;
  height: 220px;
  object-fit: cover;
  display: block;
  transition: transform 0.5s ease;
}
.mc-side-img:hover img { transform: scale(1.04); }

.mc-form-col {}
.mc-form-header {
  margin-bottom: 28px;
}
.mc-form-header__label {
  display: inline-block;
  font-size: 0.68rem;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: var(--metta-main, #c8a96e);
  margin-bottom: 10px;
}
.mc-form-header h2 {
  font-size: 1.9rem;
  font-weight: 400;
  color: var(--metta-primary, #2d4a2d);
  text-transform: uppercase;
  letter-spacing: 2px;
  margin: 0 0 12px;
}
.mc-form-header__line {
  width: 40px; height: 2px;
  background: var(--metta-main, #c8a96e);
  margin-bottom: 14px;
}
.mc-form-header p {
  color: #666; font-size: 0.92rem; line-height: 1.7; margin: 0;
}

/* Form fields */
.mc-form { display: flex; flex-direction: column; gap: 14px; }
.mc-form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
.mc-field {
  display: flex; flex-direction: column; gap: 5px;
}
.mc-field label {
  font-size: 0.7rem;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: #888;
  font-weight: 600;
}
.mc-field input,
.mc-field select,
.mc-field textarea {
  padding: 13px 14px;
  border: 1px solid #d8d0c8;
  background: #fff;
  font-size: 0.92rem;
  color: #333;
  outline: none;
  transition: border-color 0.3s ease, box-shadow 0.3s ease;
  border-radius: 0;
  -webkit-appearance: none;
  width: 100%;
  box-sizing: border-box;
}
.mc-field input:focus,
.mc-field select:focus,
.mc-field textarea:focus {
  border-color: var(--metta-main, #c8a96e);
  box-shadow: 0 0 0 3px rgba(200,169,110,0.12);
}
.mc-field textarea { resize: vertical; min-height: 110px; }

.mc-date-label {
  font-size: 0.7rem;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: #888;
  font-weight: 600;
  display: block;
  margin-bottom: 5px;
}

.mc-submit {
  margin-top: 8px;
}
.mc-submit-btn {
  display: flex; align-items: center; justify-content: center; gap: 10px;
  width: 100%;
  padding: 16px 24px;
  background: var(--metta-primary, #2d4a2d);
  color: #fff;
  font-size: 0.8rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 3px;
  border: 2px solid var(--metta-primary, #2d4a2d);
  cursor: pointer;
  transition: background 0.3s ease, color 0.3s ease, transform 0.2s ease;
  border-radius: 0;
}
.mc-submit-btn:hover {
  background: transparent;
  color: var(--metta-primary, #2d4a2d);
  transform: translateY(-2px);
}
.mc-submit-btn:active { transform: translateY(0); }
.mc-submit-btn i { font-size: 1rem; }

/* ---- Branch Section ---- */
.mc-branches {
  background: #ffffff;
  padding: 80px 5%;
  border-top: 1px solid rgba(200,169,110,0.2);
}
.mc-sec-head {
  text-align: center;
  margin-bottom: 48px;
}
.mc-sec-head__label {
  display: block;
  font-size: 0.68rem;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: var(--metta-main, #c8a96e);
  margin-bottom: 10px;
}
.mc-sec-head h2 {
  font-size: 2rem;
  font-weight: 400;
  color: var(--metta-primary, #2d4a2d);
  text-transform: uppercase;
  letter-spacing: 2px;
  margin: 0 0 16px;
}
.mc-sec-head__line {
  width: 50px; height: 2px;
  background: var(--metta-main, #c8a96e);
  margin: 0 auto;
}

.mc-branch-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 2px;
  background: rgba(200,169,110,0.2);
}
.mc-branch-item {
  background: #fff;
  padding: 32px 28px;
  opacity: 0; transform: translateY(24px);
  transition: opacity 0.5s ease, transform 0.5s ease, background 0.3s ease;
}
.mc-branch-item.is-visible { opacity:1; transform:none; }
.mc-branch-item:hover { background: var(--metta-primary, #2d4a2d); }
.mc-branch-item:hover .mc-branch-name,
.mc-branch-item:hover .mc-branch-addr,
.mc-branch-item:hover .mc-branch-num { color: #fff !important; }
.mc-branch-item:hover .mc-branch-icon { color: var(--metta-main,#c8a96e) !important; }
.mc-branch-num {
  font-size: 3rem;
  font-weight: 300;
  color: rgba(200,169,110,0.2);
  line-height: 1;
  margin-bottom: 12px;
  display: block;
  transition: color 0.3s;
}
.mc-branch-icon {
  font-size: 1.3rem;
  color: var(--metta-main, #c8a96e);
  margin-bottom: 14px;
  display: block;
  transition: color 0.3s;
}
.mc-branch-name {
  font-size: 1rem;
  font-weight: 700;
  color: var(--metta-primary, #2d4a2d);
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-bottom: 10px;
  display: block;
  transition: color 0.3s;
}
.mc-branch-addr {
  font-size: 0.85rem;
  color: #666;
  line-height: 1.6;
  transition: color 0.3s;
}

/* ---- CTA ---- */
.mc-cta {
  background: #ffffff;
  padding: 80px 5%;
  text-align: center;
  position: relative;
  overflow: hidden;
  border-top: 1px solid rgba(200,169,110,0.2);
}
.mc-cta::before { display: none; }
.mc-cta__label {
  display: block;
  font-size: 0.68rem;
  letter-spacing: 4px;
  text-transform: uppercase;
  color: var(--metta-main, #c8a96e);
  margin-bottom: 16px;
}
.mc-cta h2 {
  font-size: clamp(1.6rem, 3.5vw, 2.8rem);
  font-weight: 300;
  color: var(--metta-primary, #2d4a2d);
  text-transform: uppercase;
  letter-spacing: 3px;
  margin: 0 0 12px;
}
.mc-cta p {
  color: #666;
  font-size: 0.95rem;
  max-width: 480px;
  margin: 0 auto 36px;
  line-height: 1.7;
}
.mc-cta__btns {
  display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;
}
.mc-cta-btn {
  display: inline-flex; align-items: center; gap: 9px;
  padding: 14px 32px;
  font-size: 0.78rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  text-decoration: none;
  transition: all 0.3s ease;
  border-radius: 0;
}
.mc-cta-btn--gold {
  background: var(--metta-main, #c8a96e);
  color: #fff;
  border: 2px solid var(--metta-main, #c8a96e);
}
.mc-cta-btn--gold:hover { background: transparent; color: var(--metta-main, #c8a96e); }
.mc-cta-btn--outline {
  background: transparent;
  color: var(--metta-primary, #2d4a2d);
  border: 2px solid rgba(45,74,45,0.4);
}
.mc-cta-btn--outline:hover { border-color: var(--metta-primary,#2d4a2d); background: rgba(45,74,45,0.06); }

/* ---- Success Modal ---- */
.metta-modal {
  display: none;
  position: fixed; inset: 0; z-index: 9999;
  background: rgba(0,0,0,0.65);
  align-items: center; justify-content: center;
  backdrop-filter: blur(4px);
  opacity: 0; transition: opacity 0.3s ease;
}
.metta-modal.active { opacity: 1; }
.metta-modal-content {
  background: #fff;
  max-width: 460px; width: 90%;
  padding: 0;
  position: relative;
  transform: translateY(20px);
  transition: transform 0.3s ease;
  border-top: 4px solid var(--metta-main, #c8a96e);
}
.metta-modal.active .metta-modal-content { transform: none; }
.metta-modal-header {
  padding: 36px 36px 20px;
  text-align: center;
}
.success-icon {
  width: 56px; height: 56px;
  background: var(--metta-primary, #2d4a2d);
  color: #fff; font-size: 1.5rem;
  display: flex; align-items: center; justify-content: center;
  border-radius: 50%;
  margin: 0 auto 16px;
}
.metta-modal-header h2 { font-size: 1.3rem; color: var(--metta-primary,#2d4a2d); margin:0; }
.metta-modal-body { padding: 0 36px 20px; }
.metta-modal-body p { color: #555; font-size: 0.9rem; line-height: 1.6; margin: 0 0 14px; }
.modal-info { list-style: none; padding: 0; margin: 0 0 14px; }
.modal-info li { padding: 8px 0; border-bottom: 1px solid #f0ece6; font-size: 0.88rem; color: #444; }
.modal-footer-msg { font-size: 0.82rem !important; color: #999 !important; font-style: italic; }
.metta-modal-actions { padding: 0 36px 36px; }
.metta-modal-btn {
  width: 100%; padding: 13px;
  background: var(--metta-primary, #2d4a2d);
  color: #fff; border: none;
  font-size: 0.8rem; font-weight: 700;
  text-transform: uppercase; letter-spacing: 2px;
  cursor: pointer; transition: background 0.3s;
  border-radius: 0;
}
.metta-modal-btn:hover { background: var(--metta-main, #c8a96e); }

/* ---- Responsive ---- */
@media (max-width: 900px) {
  .mc-cards__grid { grid-template-columns: repeat(3, 1fr); }
  .mc-content__grid { grid-template-columns: 1fr; }
  .mc-branch-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 600px) {
  .mc-cards__grid { grid-template-columns: repeat(2, 1fr); }
  .mc-form-row { grid-template-columns: 1fr; }
  .mc-branch-grid { grid-template-columns: 1fr; }
  .mc-hero__content { padding-bottom: 80px; }
  .mc-cards { margin-top: -40px; }
}
@media (max-width: 380px) {
  .mc-cards__grid { grid-template-columns: 1fr; }
}

/* Force dark header on this page */
.header .header-wrapper,
.header.transparent .header-main,
.header-main {
  background: var(--metta-bg) !important;
}
.header.transparent .nav-dark .nav > li > a,
.header .nav > li > a { color: #fff !important; }
.header-main { border-bottom: 1px solid rgba(244,157,33,0.3); }

@media (prefers-reduced-motion: reduce) {
  * { animation: none !important; transition: none !important; }
}
</style>

<main id="main">

  <!-- ================================================
       SECTION 1: HERO
  ================================================== -->
  <section class="mc-hero" id="mc-hero">
    <div class="mc-hero__bg">
      <?php $hero_bg = metta_get_field('contact_hero_bg'); ?>
      <?php if($hero_bg): ?>
        <img src="<?php echo esc_url($hero_bg); ?>" alt="Metta Spa Liên Hệ" />
      <?php else: ?>
        <div style="background: linear-gradient(135deg, #1a2e1a 0%, #0e1e0e 100%); width:100%; height:100%;"></div>
      <?php endif; ?>
    </div>
    <div class="mc-hero__overlay"></div>

    <div class="mc-hero__content">
      <span class="mc-hero__badge"><?php echo esc_html(metta_get_with_fallback('contact_hero_badge', 'Metta Đông Y Spa')); ?></span>
      <h2 class="mc-hero__title">
        <?php echo metta_get_with_fallback('contact_hero_title', 'Liên Hệ<br>Với Chúng Tôi'); ?>
      </h2>
      <div class="mc-hero__line"></div>
      <p class="mc-hero__sub">
        <?php echo esc_html(metta_get_with_fallback('contact_hero_desc', 'Nơi tái tạo năng lượng và cân bằng cuộc sống. Hãy để chúng tôi chăm sóc bạn.')); ?>
      </p>
    </div>

    <div class="mc-hero__scroll">
      <span>Cuộn xuống</span>
      <div class="mc-hero__scroll-line"></div>
    </div>
  </section>

  <!-- ================================================
       SECTION 2: INFO CARDS
  ================================================== -->
  <?php
  $hl1 = metta_get_with_fallback('contact_hotline_1', '0911 535 339');
  $hl2 = metta_get_with_fallback('contact_hotline_2', '0938 431 234');
  $c_email = metta_get_with_fallback('contact_email', 'mettaspadongy@gmail.com');
  $c_addr = metta_get_with_fallback('contact_address', '378 Tên Lửa, Bình Tân, TP.HCM');
  $c_hours = metta_get_with_fallback('contact_hours', '08:00 – 21:00');
  $c_hours_note = metta_get_with_fallback('contact_hours_note', 'Tất cả các ngày');
  $c_fb_url = metta_get_with_fallback('contact_facebook_url', 'https://www.facebook.com/mettaspadongy');
  $c_fb_label = metta_get_with_fallback('contact_facebook_label', 'Facebook Metta');
  ?>
  <section class="mc-cards">
    <div class="mc-cards__grid">
      <div class="mc-card" data-delay="0">
        <i class="mc-card__icon icon-phone"></i>
        <span class="mc-card__label">Hotline</span>
        <div class="mc-card__val">
          <a href="tel:<?php echo esc_attr(preg_replace('/\s+/', '', $hl1)); ?>"><?php echo esc_html($hl1); ?></a><br>
          <a href="tel:<?php echo esc_attr(preg_replace('/\s+/', '', $hl2)); ?>"><?php echo esc_html($hl2); ?></a>
        </div>
      </div>
      <div class="mc-card" data-delay="100">
        <i class="mc-card__icon icon-envelop"></i>
        <span class="mc-card__label">Email</span>
        <div class="mc-card__val">
          <a href="mailto:<?php echo esc_attr($c_email); ?>"><?php echo esc_html($c_email); ?></a>
        </div>
      </div>
      <div class="mc-card" data-delay="200">
        <i class="mc-card__icon icon-map-pin-fill"></i>
        <span class="mc-card__label"><?php echo esc_html(metta_static('Cơ sở chính')); ?></span>
        <div class="mc-card__val"><?php echo esc_html($c_addr); ?></div>
      </div>
      <div class="mc-card" data-delay="300">
        <i class="mc-card__icon icon-calendar"></i>
        <span class="mc-card__label"><?php echo esc_html(metta_static('Giờ mở cửa')); ?></span>
        <div class="mc-card__val"><?php echo esc_html($c_hours); ?><br><?php echo esc_html($c_hours_note); ?></div>
      </div>
      <div class="mc-card" data-delay="400">
        <i class="mc-card__icon icon-facebook"></i>
        <span class="mc-card__label">Zalo / Fanpage</span>
        <div class="mc-card__val">
          <a href="<?php echo esc_url($c_fb_url); ?>" target="_blank" rel="noopener"><?php echo esc_html($c_fb_label); ?></a>
        </div>
      </div>
    </div>
  </section>

  <!-- ================================================
       SECTION 3: MAP + FORM
  ================================================== -->
  <section class="mc-content" id="mc-form-section">
    <div class="mc-content__grid">

      <!-- LEFT: Map + Side Image -->
      <div class="mc-map-col">
        <?php
        $map_url = metta_get_with_fallback('contact_map_url', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2965.382604705955!2d106.6118465!3d10.748561299999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752d6df82698c9%3A0xc3d6f2797c4e4ae5!2zTUVUVEEgU1BBIHwgRMaw4budbmcgU2luaCBFYXN0!5e0!3m2!1svi!2s!4v1741500000000');
        ?>
        <div class="mc-map-wrap">
          <iframe
            src="<?php echo esc_url($map_url); ?>"
            allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
        <?php $side_img = metta_get_field('contact_side_img'); ?>
        <?php if($side_img): ?>
        <div class="mc-side-img">
          <img src="<?php echo esc_url($side_img); ?>" alt="Metta Spa" loading="lazy" />
        </div>
        <?php endif; ?>

        <?php
        $social_title = metta_get_with_fallback('contact_social_title', 'Kết nối với chúng tôi');
        $ig_url = metta_get_with_fallback('contact_instagram_url', '');
        $yt_url = metta_get_with_fallback('contact_youtube_url', '');
        $zalo_url = metta_get_with_fallback('contact_zalo_url', '');
        ?>
        <div style="margin-top: 20px; padding: 24px; background: #fff; border: 1px solid rgba(200,169,110,0.25);">
          <div style="font-size:0.68rem; letter-spacing:3px; text-transform:uppercase; color:var(--metta-main,#c8a96e); margin-bottom:14px;"><?php echo esc_html($social_title); ?></div>
          <div style="display:flex; gap:12px; flex-wrap:wrap;">
            <a href="<?php echo esc_url($c_fb_url); ?>" target="_blank" rel="noopener"
               style="width:40px;height:40px;border:1px solid rgba(200,169,110,0.4);display:flex;align-items:center;justify-content:center;color:var(--metta-main,#c8a96e);text-decoration:none;transition:all 0.3s;"
               onmouseover="this.style.background='var(--metta-main,#c8a96e)';this.style.color='#fff'"
               onmouseout="this.style.background='transparent';this.style.color='var(--metta-main,#c8a96e)'">
               <i class="icon-facebook"></i>
            </a>
            <?php if($ig_url): ?>
            <a href="<?php echo esc_url($ig_url); ?>" target="_blank" rel="noopener"
               style="width:40px;height:40px;border:1px solid rgba(200,169,110,0.4);display:flex;align-items:center;justify-content:center;color:var(--metta-main,#c8a96e);text-decoration:none;transition:all 0.3s;"
               onmouseover="this.style.background='var(--metta-main,#c8a96e)';this.style.color='#fff'"
               onmouseout="this.style.background='transparent';this.style.color='var(--metta-main,#c8a96e)'">
               <i class="icon-instagram"></i>
            </a>
            <?php endif; ?>
            <?php if($yt_url): ?>
            <a href="<?php echo esc_url($yt_url); ?>" target="_blank" rel="noopener"
               style="width:40px;height:40px;border:1px solid rgba(200,169,110,0.4);display:flex;align-items:center;justify-content:center;color:var(--metta-main,#c8a96e);text-decoration:none;transition:all 0.3s;"
               onmouseover="this.style.background='var(--metta-main,#c8a96e)';this.style.color='#fff'"
               onmouseout="this.style.background='transparent';this.style.color='var(--metta-main,#c8a96e)'">
               <i class="icon-youtube"></i>
            </a>
            <?php endif; ?>
            <?php if($zalo_url): ?>
            <a href="<?php echo esc_url($zalo_url); ?>" target="_blank" rel="noopener"
               style="width:40px;height:40px;border:1px solid rgba(200,169,110,0.4);display:flex;align-items:center;justify-content:center;color:var(--metta-main,#c8a96e);text-decoration:none;transition:all 0.3s;font-weight:700;font-size:0.7rem;"
               onmouseover="this.style.background='var(--metta-main,#c8a96e)';this.style.color='#fff'"
               onmouseout="this.style.background='transparent';this.style.color='var(--metta-main,#c8a96e)'">
               Zalo
            </a>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <!-- RIGHT: Booking Form -->
      <div class="mc-form-col">
        <div class="mc-form-header">
          <span class="mc-form-header__label"><?php echo esc_html(metta_get_with_fallback('contact_form_label', 'Đặt lịch ngay')); ?></span>
          <h2><?php echo metta_get_with_fallback('contact_form_title', 'ĐẶT LỊCH HẸN'); ?></h2>
          <div class="mc-form-header__line"></div>
          <p><?php echo metta_get_with_fallback('contact_form_desc', 'Vui lòng để lại thông tin, Metta sẽ liên hệ xác nhận lịch hẹn sớm nhất.'); ?></p>
        </div>

        <form id="metta-booking-form" class="mc-form" data-formid="206" method="post" action="/lien-he/">
          <noscript class="wpforms-error-noscript">Vui lòng bật JavaScript để hoàn thành Form này.</noscript>

          <!-- Row 1: Name + Phone -->
          <div class="mc-form-row">
            <div class="mc-field">
              <label for="booking-name">Họ &amp; Tên <span style="color:#c8a96e">*</span></label>
              <input type="text" id="booking-name" name="name" placeholder="Nguyễn Văn A" required />
            </div>
            <div class="mc-field">
              <label for="booking-phone">Điện thoại <span style="color:#c8a96e">*</span></label>
              <input type="tel" id="booking-phone" name="phone" placeholder="0911 535 339" required />
            </div>
          </div>

          <!-- Row 2: Email + Branch -->
          <div class="mc-form-row">
            <div class="mc-field">
              <label for="booking-email">Email</label>
              <input type="email" id="booking-email" name="email" placeholder="email@example.com" />
            </div>
            <div class="mc-field">
              <label for="booking-branch">Chi nhánh <span style="color:#c8a96e">*</span></label>
              <select id="booking-branch" name="branch" required>
                <option value="" disabled selected>Chọn chi nhánh...</option>
                <?php
                for($i=1; $i<=10; $i++) {
                  $b_name = get_field("branch_{$i}_name", 54);
                  if($b_name) {
                    $key = '';
                    if(strpos(strtolower($b_name), 'quận 1') !== false) $key = 'quan-1';
                    else if(strpos(strtolower($b_name), 'tên lửa') !== false) $key = 'ten-lua';
                    else if(strpos(strtolower($b_name), 'biên hòa') !== false) $key = 'bien-hoa';
                    echo '<option value="' . ($key ?: sanitize_title($b_name)) . '">' . esc_html($b_name) . '</option>';
                  }
                }
                ?>
              </select>
            </div>
          </div>

          <!-- Row 3: Date + Time -->
          <div class="mc-form-row">
            <div class="mc-field">
              <label for="booking-date">Ngày đặt lịch <span style="color:#c8a96e">*</span></label>
              <input type="date" id="booking-date" name="date" required />
            </div>
            <div class="mc-field">
              <label for="booking-time">Giờ hẹn <span style="color:#c8a96e">*</span></label>
              <input type="time" id="booking-time" name="time" required />
            </div>
          </div>

          <!-- Message -->
          <div class="mc-field">
            <label for="booking-message">Lời nhắn hoặc dịch vụ quan tâm</label>
            <textarea id="booking-message" name="message" placeholder="Mô tả ngắn về dịch vụ hoặc vấn đề bạn muốn tư vấn..."></textarea>
          </div>

          <input type="hidden" name="wpforms[id]" value="206" />
          <input type="hidden" name="page_title" value="Liên hệ" />
          <input type="hidden" name="page_url" value="/lien-he/" />
          <input type="hidden" name="page_id" value="17" />
          <input type="hidden" name="wpforms[post_id]" value="17" />
          <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response" />

          <div class="mc-submit">
            <button id="metta-submit-btn" type="button" class="mc-submit-btn"
                    data-alt-text="Đang gửi..." data-submit-text="GỬI NGAY" aria-live="assertive">
              GỬI NGAY &nbsp;<i class="icon-angle-right"></i>
            </button>
          </div>
        </form>
      </div><!-- /.mc-form-col -->

    </div><!-- /.mc-content__grid -->
  </section>


  <!-- ================================================
       SECTION 4: BRANCHES
  ================================================== -->
  <?php
  $branches = array();
  for($i=1; $i<=10; $i++) {
    $b_name = get_field("branch_{$i}_name", 54);
    $b_addr = get_field("branch_{$i}_address", 54);
    if($b_name) $branches[] = array('name'=>$b_name, 'addr'=>$b_addr, 'num'=>$i);
  }
  if(!empty($branches)):
  ?>
  <section class="mc-branches" id="mc-branches">
    <div class="mc-sec-head">
      <span class="mc-sec-head__label"><?php echo esc_html(metta_get_with_fallback('contact_branch_label', 'Hệ thống chuỗi spa')); ?></span>
      <h2><?php echo metta_get_with_fallback('contact_branch_title', 'Khám Phá Các Chi Nhánh'); ?></h2>
      <div class="mc-sec-head__line"></div>
    </div>

    <div class="mc-branch-grid">
      <?php foreach($branches as $i => $branch): ?>
      <div class="mc-branch-item" data-delay="<?php echo $i * 100; ?>">
        <span class="mc-branch-num"><?php echo str_pad($branch['num'], 2, '0', STR_PAD_LEFT); ?></span>
        <i class="mc-branch-icon icon-map-pin-fill"></i>
        <span class="mc-branch-name"><?php echo esc_html($branch['name']); ?></span>
        <?php if($branch['addr']): ?>
          <p class="mc-branch-addr"><?php echo esc_html($branch['addr']); ?></p>
        <?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>
  </section>
  <?php endif; ?>

  <!-- ================================================
       SECTION 5: CTA
  ================================================== -->
  <?php
  $cta_label = metta_get_with_fallback('contact_cta_label', 'Metta Đông Y Spa');
  $cta_title = metta_get_with_fallback('contact_cta_title', 'Để Chúng Tôi Phục Vụ Bạn');
  $cta_desc = metta_get_with_fallback('contact_cta_desc', 'Trải nghiệm liệu pháp dưỡng sinh Đông Y truyền thống – nơi thân và tâm được chăm sóc toàn diện.');
  $cta_btn1_text = metta_get_with_fallback('contact_cta_btn1_text', 'Đặt Lịch Ngay');
  $cta_btn1_url = metta_get_with_fallback('contact_cta_btn1_url', 'https://datlich.mettaspadongy.vn/');
  $cta_btn2_text = metta_get_with_fallback('contact_cta_btn2_text', 'Gọi Ngay');
  $cta_btn2_url = metta_get_with_fallback('contact_cta_btn2_url', 'tel:0911535339');
  ?>
  <section class="mc-cta">
    <span class="mc-cta__label"><?php echo esc_html($cta_label); ?></span>
    <h2><?php echo esc_html($cta_title); ?></h2>
    <p><?php echo esc_html($cta_desc); ?></p>
    <div class="mc-cta__btns">
      <a href="<?php echo esc_url($cta_btn1_url); ?>" class="mc-cta-btn mc-cta-btn--gold" target="_blank">
        <i class="icon-calendar"></i> <?php echo esc_html($cta_btn1_text); ?>
      </a>
      <a href="<?php echo esc_attr($cta_btn2_url); ?>" class="mc-cta-btn mc-cta-btn--outline">
        <i class="icon-phone"></i> <?php echo esc_html($cta_btn2_text); ?>
      </a>
    </div>
  </section>

</main>

<!-- ================================================
     SUCCESS MODAL
================================================== -->
<div id="metta-success-modal" class="metta-modal">
  <div class="metta-modal-content">
    <div class="metta-modal-header">
      <div class="success-icon">✓</div>
      <h2>Đặt lịch thành công!</h2>
    </div>
    <div class="metta-modal-body">
      <p>Cảm ơn bạn đã chọn Metta. Thông tin lịch đặt:</p>
      <ul class="modal-info">
        <li><strong>Địa chỉ:</strong> <span id="info-address"></span></li>
        <li><strong>Ngày giờ:</strong> <span id="info-date"></span></li>
      </ul>
      <p class="modal-footer-msg">Chúng tôi sẽ liên hệ sớm để xác nhận lịch hẹn.</p>
    </div>
    <div class="metta-modal-actions">
      <button onclick="closeMettaModal()" class="metta-modal-btn">Đóng</button>
    </div>
  </div>
</div>

<!-- ================================================
     JAVASCRIPT
================================================== -->
<script>
(function(){
  // ---- Scroll Reveal ----
  function revealOnScroll() {
    var hero = document.getElementById('mc-hero');
    if(hero && !hero.classList.contains('is-visible')) {
      hero.classList.add('is-visible');
    }

    var cards = document.querySelectorAll('.mc-card:not(.is-visible)');
    cards.forEach(function(card) {
      var rect = card.getBoundingClientRect();
      if(rect.top < window.innerHeight - 60) {
        var delay = card.getAttribute('data-delay') || 0;
        setTimeout(function(){ card.classList.add('is-visible'); }, parseInt(delay));
      }
    });

    var items = document.querySelectorAll('.mc-branch-item:not(.is-visible)');
    items.forEach(function(item) {
      var rect = item.getBoundingClientRect();
      if(rect.top < window.innerHeight - 60) {
        var delay = item.getAttribute('data-delay') || 0;
        setTimeout(function(){ item.classList.add('is-visible'); }, parseInt(delay));
      }
    });
  }

  window.addEventListener('scroll', revealOnScroll, { passive: true });
  revealOnScroll();

  // ---- Smooth scroll for CTA ----
  document.querySelectorAll('a[href^="#"]').forEach(function(a) {
    a.addEventListener('click', function(e) {
      var target = document.querySelector(this.getAttribute('href'));
      if(target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

  // ---- Branch addresses for modal ----
  var branchAddresses = {
    <?php
    for($i=1; $i<=10; $i++) {
      $b_name = get_field("branch_{$i}_name", 54);
      $b_addr = get_field("branch_{$i}_address", 54);
      if($b_name) {
        $key = '';
        if(strpos(strtolower($b_name), 'quận 1') !== false) $key = 'quan-1';
        else if(strpos(strtolower($b_name), 'tên lửa') !== false) $key = 'ten-lua';
        else if(strpos(strtolower($b_name), 'biên hòa') !== false) $key = 'bien-hoa';
        if($key) echo "'$key': '" . addslashes($b_addr) . "',\n";
      }
    }
    ?>
  };

  // ---- Form Submission ----
  document.addEventListener('DOMContentLoaded', function() {
    var submitBtn = document.getElementById('metta-submit-btn');
    if(submitBtn) {
      submitBtn.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        submitAppointment();
      });
    }
  });

  async function submitAppointment() {
    var btn = document.getElementById('metta-submit-btn');
    var originalHTML = btn.innerHTML;
    btn.innerHTML = 'Đang gửi... <span style="display:inline-block;animation:spin 1s linear infinite;border:2px solid rgba(255,255,255,0.3);border-top-color:#fff;border-radius:50%;width:14px;height:14px;"></span>';
    btn.disabled = true;
    btn.style.opacity = '0.7';

    var name    = document.getElementById('booking-name').value.trim();
    var phone   = document.getElementById('booking-phone').value.trim();
    var branch  = document.getElementById('booking-branch').value;
    var date    = document.getElementById('booking-date').value;
    var time    = document.getElementById('booking-time').value;
    var message = document.getElementById('booking-message').value;
    var email   = document.getElementById('booking-email').value.trim();

    if(!name || !phone || !branch || !date || !time) {
      alert('Vui lòng điền đầy đủ thông tin bắt buộc (*).');
      btn.innerHTML = originalHTML;
      btn.disabled = false;
      btn.style.opacity = '1';
      return;
    }

    try {
      var token = await grecaptcha.execute('6Lf_XzMsAAAAAJV7yYXVS1fLUMdVgiwT9yngP9V6', { action: 'guest_appointment' });
      var SERVICE_ID = 'web' + Date.now();
      var combinedNote = 'CN: ' + branch + ' | Date: ' + date + ' ' + time + ' | Email: ' + email + ' | Note: ' + message;
      var timeStart = new Date().toISOString();
      if(date && time) {
        var d = new Date(date + 'T' + time);
        if(!isNaN(d.getTime())) timeStart = d.toISOString();
      }

      var payload = {
        recaptcha: token,
        telephone: phone,
        fullname: name,
        note: combinedNote,
        timeStart: timeStart,
        services: [{ _id: SERVICE_ID, quantity: 1 }]
      };

      var res = await fetch('https://api.mettaspadongy.vn/guest/appointment', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
        body: JSON.stringify(payload)
      });

      var data = await res.json();
      if(!res.ok) {
        alert('Đặt lịch thất bại. Vui lòng thử lại sau.');
      } else {
        showSuccessModal(branch, date, time);
        document.getElementById('metta-booking-form').reset();
      }
    } catch(err) {
      console.error(err);
      alert('Có lỗi xảy ra. Vui lòng thử lại.');
    } finally {
      btn.innerHTML = originalHTML;
      btn.disabled = false;
      btn.style.opacity = '1';
    }
  }

  function showSuccessModal(branchKey, date, time) {
    var address = branchAddresses[branchKey] || 'Chi nhánh đã chọn';
    var formattedDate = date.split('-').reverse().join('/') + ' ' + time;
    document.getElementById('info-address').textContent = address;
    document.getElementById('info-date').textContent = formattedDate;
    var modal = document.getElementById('metta-success-modal');
    modal.style.display = 'flex';
    setTimeout(function(){ modal.classList.add('active'); }, 10);
  }

  window.closeMettaModal = function() {
    var modal = document.getElementById('metta-success-modal');
    modal.classList.remove('active');
    setTimeout(function(){ modal.style.display = 'none'; }, 300);
  };

  window.addEventListener('keydown', function(e) {
    if(e.key === 'Escape') closeMettaModal();
  });
})();
</script>

<style>
@keyframes spin {
  to { transform: rotate(360deg); }
}
</style>

<?php get_footer(); ?>