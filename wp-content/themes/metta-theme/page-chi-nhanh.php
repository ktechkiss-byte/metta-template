<?php
/* Template Name: page-chi-nhanh */
get_header(); ?>


    <main id="main" class="">
      <div id="content" role="main" class="content-area">
        <section class="section" id="section_190891064">
          <div class="section-bg fill">
            <img width="2483" height="1002" src="<?php echo esc_url( metta_resolve_image_url( metta_get_field('branch_page_bg'), get_site_url().'/wp-content/uploads/2026/03/Frame-Metta-Moi.jpg' ) ); ?>"
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
	                    foreach(metta_get_branch_items() as $i => $branch):
	                        $b_img = metta_resolve_image_url($branch['image'], get_site_url() . '/wp-content/uploads/2025/12/z7321243434473_0b4c7065cbeea0b7a8817deed701d409.jpg');
	                        $b_name = $branch['name'];
	                        $b_hot = $branch['hotline'];
	                        $b_addr = $branch['address'];
	                        $b_link = !empty($branch['link']) ? $branch['link'] : '#';
	                    ?>
	                    <div class="col large-3">
	                        <div class="branch-item" style="cursor: pointer;">
	                          <div class="">
	                            <div class="img has-hover section-service-main-img-<?php echo esc_attr($i + 1); ?> x md-x lg-x y md-y lg-y">
	                              <div class="img-inner image-cover dark" style="padding-top: 56.25%">
	                                <img width="1414" height="812" src="<?php echo esc_url($b_img); ?>" class="attachment-original size-original" alt="<?php echo esc_attr($b_name); ?>" />
	                              </div>
	                            </div>
	                          </div>
	                          <div class="" style="padding: 1rem; background-color: white">
	                            <p class="newest-title text-center text-vip" style="font-size: 1.2rem; font-weight: bold; margin-bottom: 10px;">
	                              <?php echo esc_html($b_name); ?>
	                            </p>
	                            <p style="margin-bottom: 8px"><span style="font-weight: bold">Hotline:</span> <?php echo esc_html($b_hot); ?></p>
	                            <p style="min-height: 48px;"><span style="font-weight: bold">Địa chỉ:</span> <?php echo esc_html($b_addr); ?></p>
	                            <div class="branch-button" style="display: flex; align-items: center; justify-content: center; width: 100%; gap: 1rem;">
	                              <a href="<?php echo esc_url($b_link); ?>">
	                                <div class="button secondary is-small lowercase" style="border-radius: 99px"><span>Xem Chi tiết</span></div>
	                              </a>
	                              <a href="tel:<?php echo esc_attr($b_hot); ?>">
	                                <div class="button secondary is-small lowercase" style="border-radius: 99px"><span>Gọi Đặt Lịch</span></div>
	                              </a>
	                            </div>
	                          </div>
	                        </div>
	                    </div>
	                    <?php endforeach; ?>
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
