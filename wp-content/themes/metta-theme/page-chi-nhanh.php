<?php
/* Template Name: page-chi-nhanh */
get_header(); ?>


    <main id="main" class="">
      <div id="content" role="main" class="content-area">
        <section class="section" id="section_190891064">
          <div class="section-bg fill">
            <img width="2483" height="1002" src="<?php echo metta_get_field('branch_page_bg') ?: get_site_url().'/wp-content/uploads/2026/03/Frame-Metta-Moi.jpg'; ?>"
              class="bg attachment- size-" alt="" decoding="async" fetchpriority="high" />
          </div>

          <div class="section-content relative">
            <div class="row" id="row-2009327956">
              <div id="col-1413699001" class="col small-12 large-12">
                <div class="col-inner">
                  <div id="text-2058327646" class="text text-heading">
                    <h2><?php echo metta_get_with_fallback('branch_page_title', 'Chọn Chi Nhánh'); ?></h2>

                    <style>
                      #text-2058327646 {
                        text-align: center;
                      }
                    </style>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" id="row-98360059">
              <div id="col-683057664" class="col small-12 large-12">
                <div class="col-inner">
                  <div class="row align-middle align-center branchs">
                    <?php 
                    for($i=1; $i<=4; $i++): 
                        $b_img = metta_get_field("branch_{$i}_img");
                        $b_name = metta_get_field("branch_{$i}_name");
                        $b_hot = metta_get_field("branch_{$i}_hotline");
                        $b_addr = metta_get_field("branch_{$i}_address");
                        
                        // Default fallbacks for 1 & 2
                        if(!$b_name && $i == 1) {
                            $b_img = get_site_url().'/wp-content/uploads/2025/12/z7321243434473_0b4c7065cbeea0b7a8817deed701d409.jpg';
                            $b_name = 'Metta Spa Tên Lửa';
                            $b_hot = '0938431234';
                            $b_addr = '378 Tên Lửa, P. Bình Trị Đông B, Q. Bình Tân, TP. HCM';
                        }
                        if(!$b_name && $i == 2) {
                            $b_img = get_site_url().'/wp-content/uploads/2026/03/z7321244104166_d5f483d125730f143fbd2d4124c88633.jpg';
                            $b_name = 'Metta Spa Biên Hòa';
                            $b_hot = '0911535339';
                            $b_addr = 'LK23 Đường N1, KDC Bửu Long, Biên Hòa, Đồng Nai';
                        }

                        if($b_name):
                    ?>
                    <div class="col large-3">
                        <div class="branch-item" style="cursor: pointer;">
                          <div class="">
                            <div class="img has-hover section-service-main-img-<?php echo $i; ?> x md-x lg-x y md-y lg-y">
                              <div class="img-inner image-cover dark" style="padding-top: 56.25%">
                                <img width="1414" height="812" src="<?php echo $b_img; ?>" class="attachment-original size-original" />
                              </div>
                            </div>
                          </div>
                          <div class="" style="padding: 1rem; background-color: white">
                            <p class="newest-title text-center text-vip" style="font-size: 1.2rem; font-weight: bold; margin-bottom: 10px;">
                              <?php echo $b_name; ?>
                            </p>
                            <p style="margin-bottom: 8px"><span style="font-weight: bold">Hotline:</span> <?php echo $b_hot; ?></p>
                            <p style="min-height: 48px;"><span style="font-weight: bold">Địa chỉ:</span> <?php echo $b_addr; ?></p>
                            <div class="branch-button" style="display: flex; align-items: center; justify-content: center; width: 100%; gap: 1rem;">
                              <div class="button secondary is-small lowercase" style="border-radius: 99px"><span>Xem Chi tiết</span></div>
                              <a href="tel:<?php echo $b_hot; ?>">
                                <div class="button secondary is-small lowercase" style="border-radius: 99px"><span>Gọi Đặt Lịch</span></div>
                              </a>
                            </div>
                          </div>
                        </div>
                    </div>
                    <?php endif; endfor; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <style>
            #section_190891064 {
              padding-top: 30px;
              padding-bottom: 30px;
            }
          </style>
        </section>
      </div>
    </main>
<?php get_footer(); ?>