<?php
/* Template Name: page-dat-lich */
get_header(); ?>

<style>
/* ===== HEADER FORCE ===== */
.header .header-wrapper,
.header.transparent .header-main,
.header-main {
  background: var(--metta-bg) !important;
}
.header.transparent .nav-dark .nav > li > a,
.header .nav > li > a { color: #fff !important; }
.header-main { border-bottom: 1px solid rgba(244, 157, 33, 0.3); }

/* ===== BOOKING WIZARD ===== */
.metta-booking-wizard {
  max-width: 780px;
  margin: 0 auto;
  padding: 0 16px 60px;
}

/* --- Step Progress Bar --- */
.metta-steps {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0;
  margin: 36px 0 40px;
  position: relative;
}
.metta-step {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 8px;
  flex: 1;
  position: relative;
  z-index: 1;
}
.metta-step:not(:last-child)::after {
  content: '';
  position: absolute;
  top: 18px;
  left: 50%;
  width: 100%;
  height: 2px;
  background: #e0d5c8;
  z-index: 0;
}
.metta-step.done:not(:last-child)::after { background: var(--metta-main); }
.step-circle {
  width: 36px;
  height: 36px;
  border-radius: 50%;
  border: 2px solid #e0d5c8;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 700;
  font-size: 14px;
  background: #fff;
  color: #aaa;
  transition: all 0.3s;
  position: relative;
  z-index: 2;
}
.metta-step.active .step-circle {
  background: var(--metta-primary);
  border-color: var(--metta-primary);
  color: #fff;
  box-shadow: 0 2px 10px rgba(96,56,19,0.3);
}
.metta-step.done .step-circle {
  background: var(--metta-main);
  border-color: var(--metta-main);
  color: #fff;
}
.step-label {
  font-size: 11px;
  color: #aaa;
  text-align: center;
  font-weight: 500;
  white-space: nowrap;
}
.metta-step.active .step-label,
.metta-step.done .step-label { color: var(--metta-primary); }

/* --- Step Panels --- */
.metta-step-panel { display: none; }
.metta-step-panel.active { display: block; animation: fadeUp 0.4s ease; }
@keyframes fadeUp {
  from { opacity: 0; transform: translateY(20px); }
  to   { opacity: 1; transform: translateY(0); }
}

.panel-title {
  font-size: 1.4rem;
  font-weight: 700;
  color: var(--metta-primary);
  margin-bottom: 6px;
  font-family: inherit;
}
.panel-sub {
  color: #888;
  font-size: 0.9rem;
  margin-bottom: 24px;
}

/* --- Service Cards Grid --- */
.services-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  gap: 14px;
  margin-bottom: 28px;
}
.service-card {
  border: 2px solid #e8e0d5;
  border-radius: 12px;
  padding: 16px;
  cursor: pointer;
  transition: all 0.2s;
  background: #fff;
  position: relative;
}
.service-card:hover { border-color: var(--metta-main); transform: translateY(-2px); box-shadow: 0 4px 16px rgba(0,0,0,0.08); }
.service-card.selected { border-color: var(--metta-primary); background: #fdf8f5; }
.service-card.selected::after {
  content: '✓';
  position: absolute;
  top: 10px; right: 12px;
  color: var(--metta-primary);
  font-weight: 900;
  font-size: 16px;
}
.service-cat-badge {
  font-size: 10px;
  color: var(--metta-main);
  font-weight: 700;
  letter-spacing: 0.5px;
  text-transform: uppercase;
  margin-bottom: 6px;
}
.service-name { font-weight: 600; font-size: 14px; color: #333; margin-bottom: 4px; }
.service-detail { font-size: 12px; color: #888; }
.service-price { font-size: 13px; color: var(--metta-primary); font-weight: 700; margin-top: 8px; }

/* --- Calendar/Time --- */
.datetime-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
@media(max-width: 600px) { .datetime-grid { grid-template-columns: 1fr; } }

.metta-field-group { margin-bottom: 20px; }
.metta-label {
  display: block;
  font-size: 13px;
  font-weight: 600;
  color: var(--metta-primary);
  margin-bottom: 8px;
}
.metta-input, .metta-select, .metta-textarea {
  width: 100%;
  padding: 13px 16px;
  border: 1.5px solid #e0d5c8;
  border-radius: 10px;
  font-size: 15px;
  background: #fafafa;
  color: #333;
  transition: border 0.2s, box-shadow 0.2s;
  box-sizing: border-box;
  font-family: inherit;
  -webkit-appearance: none;
}
.metta-input:focus, .metta-select:focus, .metta-textarea:focus {
  outline: none;
  border-color: var(--metta-main);
  box-shadow: 0 0 0 3px rgba(244,157,33,0.12);
  background: #fff;
}

.time-slots {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin-top: 8px;
}
.time-slot {
  padding: 10px 18px;
  border: 1.5px solid #e0d5c8;
  border-radius: 8px;
  cursor: pointer;
  font-size: 14px;
  font-weight: 500;
  color: #555;
  background: #fff;
  transition: all 0.2s;
  white-space: nowrap;
}
.time-slot:hover { border-color: var(--metta-main); color: var(--metta-primary); }
.time-slot.selected { background: var(--metta-primary); color: #fff; border-color: var(--metta-primary); }

/* --- Review Panel --- */
.review-card {
  background: #fdf8f5;
  border-radius: 14px;
  border: 1.5px solid #e8d8c8;
  padding: 24px;
  margin-bottom: 20px;
}
.review-row {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  padding: 10px 0;
  border-bottom: 1px solid #f0e8dc;
  font-size: 14px;
}
.review-row:last-child { border-bottom: none; }
.review-label { color: #888; font-weight: 500; min-width: 120px; }
.review-value { color: #333; font-weight: 600; text-align: right; max-width: 60%; }

/* --- Note box --- */
.note-box {
  background: #fff8ed;
  border-left: 4px solid var(--metta-main);
  border-radius: 0 8px 8px 0;
  padding: 14px 18px;
  font-size: 13px;
  color: #666;
  margin-bottom: 24px;
  line-height: 1.6;
}

/* --- Navigation Buttons --- */
.wizard-nav {
  display: flex;
  gap: 12px;
  margin-top: 24px;
  justify-content: flex-end;
}
.btn-prev {
  padding: 14px 28px;
  border: 1.5px solid #ccc;
  border-radius: 8px;
  background: #fff;
  color: #666;
  font-size: 15px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.2s;
  font-family: inherit;
}
.btn-prev:hover { border-color: var(--metta-primary); color: var(--metta-primary); }
.btn-next, .btn-submit {
  padding: 14px 36px;
  border: none;
  border-radius: 8px;
  background: var(--metta-gradient-cta);
  color: #fff;
  font-size: 15px;
  font-weight: 700;
  cursor: pointer;
  transition: all 0.2s;
  letter-spacing: 0.5px;
  font-family: inherit;
  display: flex;
  align-items: center;
  gap: 8px;
}
.btn-next:hover, .btn-submit:hover { transform: translateY(-2px); box-shadow: 0 4px 16px rgba(156,84,50,0.3); }
.btn-next:disabled, .btn-submit:disabled { opacity: 0.6; cursor: not-allowed; transform: none; }

/* --- Loading spinner --- */
.spinner {
  width: 18px; height: 18px;
  border: 2px solid rgba(255,255,255,0.4);
  border-top-color: #fff;
  border-radius: 50%;
  animation: spin 0.7s linear infinite;
}
@keyframes spin { to { transform: rotate(360deg); } }

/* --- Success screen --- */
.success-screen {
  text-align: center;
  padding: 40px 20px;
}
.success-lotus {
  font-size: 60px;
  margin-bottom: 20px;
  animation: bloomIn 0.8s ease;
}
@keyframes bloomIn {
  from { transform: scale(0.5) rotate(-10deg); opacity: 0; }
  to   { transform: scale(1) rotate(0); opacity: 1; }
}
.success-screen h2 { color: var(--metta-primary); font-size: 1.8rem; margin-bottom: 10px; }
.success-screen p { color: #666; margin-bottom: 0; }
.success-booking-id {
  display: inline-block;
  background: #fdf8f5;
  border: 1.5px solid var(--metta-main);
  border-radius: 8px;
  padding: 10px 24px;
  font-weight: 700;
  color: var(--metta-primary);
  font-size: 16px;
  margin: 16px 0;
  letter-spacing: 1px;
}

/* --- Hero --- */
.booking-hero {
  background: var(--metta-gradient-dark);
  padding: 80px 20px 50px;
  text-align: center;
  color: #fff;
}
.booking-hero h1 {
  font-size: clamp(1.8rem, 4vw, 2.8rem);
  color: #fff;
  margin-bottom: 8px;
  letter-spacing: 2px;
}
.booking-hero p { color: rgba(255,255,255,0.75); font-size: 1rem; max-width: 500px; margin: 0 auto; }

/* --- Category filter tabs --- */
.cat-tabs {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
  margin-bottom: 20px;
}
.cat-tab {
  padding: 7px 16px;
  border-radius: 20px;
  border: 1.5px solid #e0d5c8;
  font-size: 13px;
  font-weight: 500;
  cursor: pointer;
  background: #fff;
  color: #666;
  transition: all 0.2s;
}
.cat-tab.active { background: var(--metta-primary); color: #fff; border-color: var(--metta-primary); }

@media(max-width: 480px) {
  .services-grid { grid-template-columns: 1fr 1fr; }
  .wizard-nav { flex-direction: column-reverse; }
  .btn-prev, .btn-next, .btn-submit { width: 100%; justify-content: center; }
}
</style>

<main id="main">

  <!-- HERO -->
  <div class="booking-hero">
    <h1>ĐẶT LỊCH DƯỠNG SINH</h1>
    <div class="is-divider" style="max-width:80px; height:3px; background:var(--metta-main); margin: 16px auto;"></div>
    <p>Chọn dịch vụ phù hợp và đặt lịch chỉ trong 2 phút</p>
  </div>

  <!-- WIZARD WRAPPER -->
  <div class="metta-booking-wizard" id="metta-wizard">

    <!-- Step Progress -->
    <div class="metta-steps" id="step-progress">
      <div class="metta-step active" data-step="1">
        <div class="step-circle">1</div>
        <span class="step-label">Dịch vụ</span>
      </div>
      <div class="metta-step" data-step="2">
        <div class="step-circle">2</div>
        <span class="step-label">Ngày &amp; Giờ</span>
      </div>
      <div class="metta-step" data-step="3">
        <div class="step-circle">3</div>
        <span class="step-label">Thông tin</span>
      </div>
      <div class="metta-step" data-step="4">
        <div class="step-circle">4</div>
        <span class="step-label">Xác nhận</span>
      </div>
    </div>

    <!-- ===== STEP 1: Choose Service ===== -->
    <div class="metta-step-panel active" id="panel-1">
      <div class="panel-title">Chọn dịch vụ</div>
      <p class="panel-sub">Chọn 1 hoặc nhiều dịch vụ bạn muốn trải nghiệm</p>

      <div class="cat-tabs" id="cat-tabs">
        <div class="cat-tab active" data-cat="all">Tất cả</div>
      </div>

      <div class="services-grid" id="services-grid">
        <div style="grid-column:1/-1; text-align:center; padding: 40px; color:#aaa;">
          <div class="spinner" style="margin: 0 auto 16px; border-color: rgba(0,0,0,0.15); border-top-color: var(--metta-primary);"></div>
          Đang tải dịch vụ...
        </div>
      </div>

      <div class="wizard-nav">
        <button class="btn-next" id="btn-1-next" onclick="goStep(2)" disabled>
          Tiếp theo <span>→</span>
        </button>
      </div>
    </div>

    <!-- ===== STEP 2: Date & Time ===== -->
    <div class="metta-step-panel" id="panel-2">
      <div class="panel-title">Chọn ngày &amp; giờ</div>
      <p class="panel-sub">Chọn thời gian thuận tiện cho bạn</p>

      <div class="datetime-grid">
        <div class="metta-field-group">
          <label class="metta-label" for="booking-date">📅 Ngày hẹn</label>
          <input type="date" id="booking-date" class="metta-input" required />
        </div>
        <div class="metta-field-group">
          <label class="metta-label" for="booking-branch">📍 Chi nhánh</label>
          <select id="booking-branch" class="metta-select" required>
            <option value="">Chọn chi nhánh...</option>
            <?php
            for($i=1; $i<=10; $i++) {
              $b_name = get_field("branch_{$i}_name", 54);
              $b_addr = get_field("branch_{$i}_address", 54);
              if($b_name) {
                $key = sanitize_title($b_name);
                echo "<option value=\"{$key}\" data-addr=\"" . esc_attr($b_addr) . "\">{$b_name}</option>";
              }
            }
            ?>
          </select>
        </div>
      </div>

      <div class="metta-field-group">
        <label class="metta-label">🕐 Giờ hẹn</label>
        <div class="time-slots" id="time-slots">
          <?php
          $slots = ['09:00','09:30','10:00','10:30','11:00','11:30',
                    '13:00','13:30','14:00','14:30','15:00','15:30',
                    '16:00','16:30','17:00','17:30','18:00','18:30'];
          foreach($slots as $s) {
            echo "<div class=\"time-slot\" data-time=\"{$s}\" onclick=\"selectTime(this)\">{$s}</div>";
          }
          ?>
        </div>
      </div>

      <div class="wizard-nav">
        <button class="btn-prev" onclick="goStep(1)">← Quay lại</button>
        <button class="btn-next" id="btn-2-next" onclick="goStep(3)" disabled>Tiếp theo →</button>
      </div>
    </div>

    <!-- ===== STEP 3: Customer Info ===== -->
    <div class="metta-step-panel" id="panel-3">
      <div class="panel-title">Thông tin của bạn</div>
      <p class="panel-sub">Chúng tôi sẽ liên hệ xác nhận lịch hẹn</p>

      <div class="datetime-grid">
        <div class="metta-field-group">
          <label class="metta-label" for="booking-name">👤 Họ &amp; tên *</label>
          <input type="text" id="booking-name" class="metta-input" placeholder="Nguyễn Văn A" required />
        </div>
        <div class="metta-field-group">
          <label class="metta-label" for="booking-phone">📱 Số điện thoại *</label>
          <input type="tel" id="booking-phone" class="metta-input" placeholder="0911 535 339" required />
        </div>
      </div>

      <div class="metta-field-group">
        <label class="metta-label" for="booking-email">✉️ Email (để nhận xác nhận)</label>
        <input type="email" id="booking-email" class="metta-input" placeholder="email@example.com" />
      </div>

      <div class="metta-field-group">
        <label class="metta-label" for="booking-note">💬 Ghi chú thêm</label>
        <textarea id="booking-note" class="metta-textarea" rows="3" placeholder="Tình trạng sức khỏe, yêu cầu đặc biệt..."></textarea>
      </div>

      <div class="wizard-nav">
        <button class="btn-prev" onclick="goStep(2)">← Quay lại</button>
        <button class="btn-next" id="btn-3-next" onclick="goStep(4)" disabled>Xem lại →</button>
      </div>
    </div>

    <!-- ===== STEP 4: Confirm & Submit ===== -->
    <div class="metta-step-panel" id="panel-4">
      <div class="panel-title">Xác nhận đặt lịch</div>
      <p class="panel-sub">Vui lòng kiểm tra lại thông tin trước khi gửi</p>

      <div class="review-card">
        <div class="review-row">
          <span class="review-label">Dịch vụ</span>
          <span class="review-value" id="rv-services">—</span>
        </div>
        <div class="review-row">
          <span class="review-label">Ngày hẹn</span>
          <span class="review-value" id="rv-date">—</span>
        </div>
        <div class="review-row">
          <span class="review-label">Giờ</span>
          <span class="review-value" id="rv-time">—</span>
        </div>
        <div class="review-row">
          <span class="review-label">Chi nhánh</span>
          <span class="review-value" id="rv-branch">—</span>
        </div>
        <div class="review-row">
          <span class="review-label">Họ tên</span>
          <span class="review-value" id="rv-name">—</span>
        </div>
        <div class="review-row">
          <span class="review-label">Điện thoại</span>
          <span class="review-value" id="rv-phone">—</span>
        </div>
        <div class="review-row" id="rv-email-row">
          <span class="review-label">Email</span>
          <span class="review-value" id="rv-email">—</span>
        </div>
      </div>

      <div class="note-box">
        🌿 Sau khi gửi, đội ngũ Metta sẽ liên hệ xác nhận lịch trong vòng <strong>1–2 tiếng</strong>. Nếu bạn cần hỗ trợ ngay: <strong>0911 535 339</strong>
      </div>

      <!-- reCAPTCHA v3 hidden -->
      <input type="hidden" id="g-recaptcha-response-booking" />

      <div class="wizard-nav">
        <button class="btn-prev" onclick="goStep(3)">← Sửa lại</button>
        <button class="btn-submit" id="btn-submit" onclick="submitBooking()">
          <span id="submit-label">Đặt lịch ngay 🌺</span>
          <div class="spinner" id="submit-spinner" style="display:none;"></div>
        </button>
      </div>
    </div>

    <!-- ===== SUCCESS PANEL ===== -->
    <div class="metta-step-panel" id="panel-success">
      <div class="success-screen">
        <div class="success-lotus">🪷</div>
        <h2>Đặt lịch thành công!</h2>
        <p>Cảm ơn bạn đã tin tưởng Metta Spa</p>
        <div class="success-booking-id" id="success-booking-id">—</div>
        <p style="font-size:14px; color:#888; margin-top: 8px;">
          Chúng tôi sẽ liên hệ xác nhận sớm nhất.<br>
          <span id="success-email-note"></span>
        </p>
        <div style="margin-top:32px;">
          <a href="<?php echo home_url('/'); ?>" class="btn-next" style="display:inline-flex; text-decoration:none;">
            ← Về trang chủ
          </a>
        </div>
      </div>
    </div>

  </div><!-- /.metta-booking-wizard -->
</main>

<script>
// ======================================================
// METTA BOOKING WIZARD v2.0
// ======================================================

const RECAPTCHA_SITE_KEY = '<?php echo esc_js(get_option("metta_recaptcha_site_key", "6Lf_XzMsAAAAAJV7yYXVS1fLUMdVgiwT9yngP9V6")); ?>';
const API_URL = 'https://api.mettaspadongy.vn';

// State
const state = {
  currentStep: 1,
  selectedServices: {},   // { _id: { name, categoryName, duration, price } }
  selectedDate: '',
  selectedTime: '',
  selectedBranch: '',
  selectedBranchName: '',
  selectedBranchAddr: '',
};

// ── Step Navigation ──────────────────────────────────────
function goStep(n) {
  // Validate before advancing
  if (n > state.currentStep) {
    if (!validateStep(state.currentStep)) return;
  }

  // Hide all panels
  document.querySelectorAll('.metta-step-panel').forEach(p => p.classList.remove('active'));
  document.getElementById(`panel-${n}`).classList.add('active');

  // Update progress indicators
  document.querySelectorAll('.metta-step').forEach(el => {
    const s = parseInt(el.dataset.step);
    el.classList.toggle('active', s === n);
    el.classList.toggle('done', s < n);
  });

  state.currentStep = n;

  if (n === 4) buildReview();
  window.scrollTo({ top: document.querySelector('.metta-booking-wizard').offsetTop - 80, behavior: 'smooth' });
}

function validateStep(step) {
  if (step === 1 && Object.keys(state.selectedServices).length === 0) {
    alert('Vui lòng chọn ít nhất 1 dịch vụ.');
    return false;
  }
  if (step === 2) {
    if (!state.selectedDate) { alert('Vui lòng chọn ngày hẹn.'); return false; }
    if (!state.selectedTime) { alert('Vui lòng chọn giờ hẹn.'); return false; }
    if (!state.selectedBranch) { alert('Vui lòng chọn chi nhánh.'); return false; }
  }
  if (step === 3) {
    const n = document.getElementById('booking-name').value.trim();
    const p = document.getElementById('booking-phone').value.trim();
    if (!n) { alert('Vui lòng nhập họ tên.'); return false; }
    if (!p || !/^0[0-9]{8,9}$/.test(p.replace(/\s/g, ''))) {
      alert('Số điện thoại không hợp lệ.'); return false;
    }
  }
  return true;
}

// ── Load Services from API ───────────────────────────────
async function loadServices() {
  try {
    const res = await fetch(`${API_URL}/services?limit=100`);
    const { data } = await res.json();
    renderServices(data?.list || []);
  } catch(e) {
    document.getElementById('services-grid').innerHTML =
      '<p style="color:#aaa; text-align:center; padding:40px;">Không tải được dịch vụ. Vui lòng thử lại.</p>';
  }
}

function renderServices(services, catFilter = 'all') {
  const grid = document.getElementById('services-grid');
  const filtered = catFilter === 'all' ? services : services.filter(s => s.categoryName === catFilter);

  if (!filtered.length) {
    grid.innerHTML = '<p style="color:#aaa;text-align:center;padding:40px;grid-column:1/-1;">Không có dịch vụ.</p>';
    return;
  }

  grid.innerHTML = filtered.map(s => {
    const sel = state.selectedServices[s._id] ? 'selected' : '';
    const dur = s.durationMinutes ? `${s.durationMinutes} phút` : '';
    const price = s.price ? `${s.price.toLocaleString('vi-VN')}đ` : '';
    return `
    <div class="service-card ${sel}" data-id="${s._id}" onclick="toggleService(this, ${JSON.stringify(JSON.stringify(s)).slice(1,-1)})">
      <div class="service-cat-badge">${s.categoryName || ''}</div>
      <div class="service-name">${s.name}</div>
      ${dur ? `<div class="service-detail">⏱ ${dur}</div>` : ''}
      ${price ? `<div class="service-price">${price}</div>` : ''}
    </div>`;
  }).join('');

  // Rebuild category tabs
  const allCats = [...new Set(services.map(s => s.categoryName).filter(Boolean))];
  const tabs = document.getElementById('cat-tabs');
  tabs.innerHTML = `<div class="cat-tab ${catFilter==='all'?'active':''}" data-cat="all" onclick="filterCat(this, services, 'all')">Tất cả</div>`
    + allCats.map(c =>
      `<div class="cat-tab ${catFilter===c?'active':''}" data-cat="${c}" onclick="filterCat(this, services, '${c}')">${c}</div>`
    ).join('');

  // Store for re-use
  grid._services = services;
}

function filterCat(tab, services, cat) {
  document.querySelectorAll('.cat-tab').forEach(t => t.classList.remove('active'));
  tab.classList.add('active');
  const allSvcs = document.getElementById('services-grid')._services || services;
  renderServices(allSvcs, cat);
}

function toggleService(card, svcJson) {
  let svc;
  try { svc = JSON.parse(svcJson); } catch(e) { return; }

  if (state.selectedServices[svc._id]) {
    delete state.selectedServices[svc._id];
    card.classList.remove('selected');
  } else {
    state.selectedServices[svc._id] = svc;
    card.classList.add('selected');
  }
  document.getElementById('btn-1-next').disabled = Object.keys(state.selectedServices).length === 0;
}

// ── Date / Time / Branch ─────────────────────────────────
document.addEventListener('DOMContentLoaded', () => {
  // Set min date to today
  const today = new Date().toISOString().split('T')[0];
  document.getElementById('booking-date').min = today;

  document.getElementById('booking-date').addEventListener('change', function() {
    state.selectedDate = this.value;
    updateStep2Btn();
  });

  document.getElementById('booking-branch').addEventListener('change', function() {
    const opt = this.options[this.selectedIndex];
    state.selectedBranch = this.value;
    state.selectedBranchName = opt.text;
    state.selectedBranchAddr = opt.dataset.addr || '';
    updateStep2Btn();
  });

  // Watch info fields
  ['booking-name','booking-phone'].forEach(id =>
    document.getElementById(id).addEventListener('input', () => {
      const n = document.getElementById('booking-name').value.trim();
      const p = document.getElementById('booking-phone').value.trim();
      document.getElementById('btn-3-next').disabled = !(n && p);
    })
  );

  loadServices();
});

function selectTime(el) {
  document.querySelectorAll('.time-slot').forEach(t => t.classList.remove('selected'));
  el.classList.add('selected');
  state.selectedTime = el.dataset.time;
  updateStep2Btn();
}

function updateStep2Btn() {
  document.getElementById('btn-2-next').disabled = !(state.selectedDate && state.selectedTime && state.selectedBranch);
}

// ── Build Review ─────────────────────────────────────────
function buildReview() {
  const svcs = Object.values(state.selectedServices);
  document.getElementById('rv-services').textContent = svcs.map(s => s.name).join(', ');

  const d = new Date(state.selectedDate + 'T00:00:00');
  document.getElementById('rv-date').textContent = d.toLocaleDateString('vi-VN', { weekday:'long', day:'numeric', month:'numeric', year:'numeric' });
  document.getElementById('rv-time').textContent = state.selectedTime;
  document.getElementById('rv-branch').textContent = state.selectedBranchName + (state.selectedBranchAddr ? `\n${state.selectedBranchAddr}` : '');
  document.getElementById('rv-name').textContent = document.getElementById('booking-name').value;
  document.getElementById('rv-phone').textContent = document.getElementById('booking-phone').value;

  const email = document.getElementById('booking-email').value;
  document.getElementById('rv-email-row').style.display = email ? 'flex' : 'none';
  document.getElementById('rv-email').textContent = email;
}

// ── Submit Booking ───────────────────────────────────────
async function submitBooking() {
  const btn = document.getElementById('btn-submit');
  const lbl = document.getElementById('submit-label');
  const spin = document.getElementById('submit-spinner');

  btn.disabled = true;
  lbl.style.display = 'none';
  spin.style.display = 'block';

  try {
    // reCAPTCHA v3
    let recaptchaToken = '';
    if (typeof grecaptcha !== 'undefined') {
      recaptchaToken = await new Promise(resolve =>
        grecaptcha.ready(() => grecaptcha.execute(RECAPTCHA_SITE_KEY, { action: 'guest_booking' }).then(resolve))
      );
    }

    const svcs = Object.values(state.selectedServices);
    const [h, m] = state.selectedTime.split(':');
    const dt = new Date(state.selectedDate);
    dt.setHours(parseInt(h), parseInt(m), 0, 0);

    const note = [
      `CN: ${state.selectedBranchName}`,
      state.selectedBranchAddr ? `Địa chỉ: ${state.selectedBranchAddr}` : '',
      document.getElementById('booking-note').value ? `Ghi chú: ${document.getElementById('booking-note').value}` : ''
    ].filter(Boolean).join(' | ');

    const payload = {
      recaptcha: recaptchaToken,
      telephone: document.getElementById('booking-phone').value.replace(/\s/g,''),
      fullname: document.getElementById('booking-name').value.trim(),
      email: document.getElementById('booking-email').value.trim() || undefined,
      note: note,
      timeStart: dt.toISOString(),
      services: svcs.map(s => ({ _id: s._id, quantity: 1 })),
    };

    const res = await fetch(`${API_URL}/guest/appointment`, {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(payload),
    });

    const data = await res.json();

    if (res.ok && data.success) {
      showSuccess(data.data);
    } else {
      const msg = data.message || 'Đặt lịch thất bại, vui lòng thử lại.';
      alert(msg);
      btn.disabled = false;
      lbl.style.display = '';
      spin.style.display = 'none';
    }
  } catch(e) {
    console.error(e);
    alert('Có lỗi kết nối. Vui lòng thử lại.');
    btn.disabled = false;
    lbl.style.display = '';
    spin.style.display = 'none';
  }
}

function showSuccess(data) {
  // Hide all step panels
  document.querySelectorAll('.metta-step-panel').forEach(p => p.classList.remove('active'));
  document.getElementById('panel-success').classList.add('active');

  // Update progress
  document.querySelectorAll('.metta-step').forEach(el => el.classList.add('done'));
  document.querySelectorAll('.metta-steps .metta-step').forEach(el => el.classList.remove('active'));

  // Show booking ID
  const bid = data?._id ? `#${data._id.slice(-8).toUpperCase()}` : `#${Date.now().toString(36).toUpperCase()}`;
  document.getElementById('success-booking-id').textContent = bid;

  const email = document.getElementById('booking-email').value.trim();
  if (email) {
    document.getElementById('success-email-note').textContent = `Email xác nhận sẽ được gửi tới ${email}`;
  }

  window.scrollTo({ top: 0, behavior: 'smooth' });
}
</script>

<!-- Load reCAPTCHA v3 -->
<script src="https://www.google.com/recaptcha/api.js?render=<?php echo esc_attr(get_option('metta_recaptcha_site_key','6Lf_XzMsAAAAAJV7yYXVS1fLUMdVgiwT9yngP9V6')); ?>" async defer></script>

<?php get_footer(); ?>
