<?php
/**
 * The template for displaying archive pages.
 */

get_header(); ?>

<main id="main">
  <div id="content" class="blog-wrapper blog-archive page-wrapper container" style="padding-top: 130px; padding-bottom: 80px;">
    <div class="row align-center">
      <div class="large-12 col">
        <header class="archive-header text-center" style="margin-bottom: 60px;">
            <h1 class="page-title" style="color: var(--primary-color); font-size: 3rem; font-weight: 800; text-transform: uppercase;">
                <?php
                if (is_category()) {
                    single_cat_title();
                } elseif (is_tag()) {
                    single_tag_title();
                } elseif (is_author()) {
                    the_author();
                } elseif (is_day()) {
                    echo 'Tin trong ngày: ' . get_the_date();
                } elseif (is_month()) {
                    echo 'Tin trong tháng: ' . get_the_date('F Y');
                } elseif (is_year()) {
                    echo 'Tin trong năm: ' . get_the_date('Y');
                } else {
                    echo 'Tin Tức & Sự Kiện';
                }
                ?>
            </h1>
            <div class="is-divider medium" style="background-color: var(--vang-dat); margin: 20px auto; width: 80px; height: 3px;"></div>
            <p style="color: #666; font-style: italic; font-size: 1.1rem;">Khám phá bí quyết chăm sóc sức khỏe và những câu chuyện từ Metta Spa</p>
        </header>

        <div id="post-list" class="row">
           <?php
           if (have_posts()) :
               while (have_posts()) : the_post(); ?>
                   <div class="col medium-6 large-4" style="margin-bottom: 40px;">
                       <article class="post-item-card" style="background: #fff; border-radius: 20px; overflow: hidden; display: flex; flex-direction: column; height: 100%; transition: all 0.4s ease; border: 1px solid rgba(168, 126, 9, 0.1); box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                           <?php if (has_post_thumbnail()) : ?>
                               <div class="post-image" style="height: 240px; overflow: hidden; position: relative;">
                                   <a href="<?php the_permalink(); ?>">
                                       <?php the_post_thumbnail('medium_large', array('style' => 'width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;')); ?>
                                   </a>
                                   <div class="post-date-badge" style="position: absolute; top: 15px; left: 15px; background: var(--vang-dat); color: #fff; padding: 5px 12px; border-radius: 8px; font-weight: bold; font-size: 0.8rem;">
                                       <?php echo get_the_date('d M, Y'); ?>
                                   </div>
                               </div>
                           <?php else: ?>
                               <div class="post-image" style="height: 240px; background: #f9f9f9; display: flex; align-items: center; justify-content: center;">
                                   <span style="color: rgba(168, 126, 9, 0.2); font-size: 4rem;">✺</span>
                               </div>
                           <?php endif; ?>
                           
                           <div class="post-inner-content" style="padding: 25px; flex-grow: 1; display: flex; flex-direction: column;">
                               <h3 class="post-title" style="font-size: 1.3rem; line-height: 1.4; margin-bottom: 15px; height: 2.8em; overflow: hidden;">
                                   <a href="<?php the_permalink(); ?>" style="color: var(--primary-color); transition: color 0.3s;"><?php the_title(); ?></a>
                               </h3>
                               <div class="post-excerpt" style="font-size: 0.95rem; color: #666; margin-bottom: 25px; line-height: 1.6; height: 4.8em; overflow: hidden;">
                                   <?php echo wp_trim_words(get_the_excerpt(), 22); ?>
                               </div>
                               <div style="margin-top: auto;">
                                   <a href="<?php the_permalink(); ?>" class="read-more-btn" style="color: var(--primary-color); font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; display: inline-flex; align-items: center; gap: 8px;">
                                       Đọc tiếp <span style="font-size: 1.2rem; transition: transform 0.3s;">&rarr;</span>
                                   </a>
                               </div>
                           </div>
                       </article>
                   </div>
               <?php endwhile;
               
               // Pagination
               echo '<div class="pagination col-12 text-center" style="margin-top: 50px; display: flex; justify-content: center; gap: 15px;">';
               echo paginate_links(array(
                   'prev_text' => '&laquo;',
                   'next_text' => '&raquo;',
                   'type' => 'plain'
               ));
               echo '</div>';
               
           else :
               echo '<div class="col-12 text-center" style="padding: 100px 0;"><h2 style="color: var(--vang-dat);">Chưa có bài viết nào.</h2><p>Vui lòng quay lại sau.</p></div>';
           endif;
           ?>
        </div>
      </div>
    </div>
  </div>
</main>

<style>
.post-item-card:hover {
    transform: translateY(-12px);
    border-color: var(--vang-dat);
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
}
.post-item-card:hover .post-image img {
    transform: scale(1.1);
}
.post-item-card:hover .read-more-btn span {
    transform: translateX(5px);
}
.post-title a:hover {
    color: var(--vang-dat) !important;
}

/* Pagination Styling */
.pagination span, .pagination a {
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #fff;
    color: #444;
    border-radius: 50%;
    text-decoration: none;
    transition: 0.3s;
    font-weight: bold;
    border: 1px solid #eee;
}
.pagination a:hover {
    background: var(--vang-dat);
    color: #fff;
    border-color: var(--vang-dat);
}
.pagination .current {
    background: var(--vang-dat);
    color: #fff;
    border-color: var(--vang-dat);
}
</style>

<?php get_footer(); ?>
