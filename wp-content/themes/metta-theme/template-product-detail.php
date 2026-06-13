<?php
/* Template Name: Product Detail Page */
get_header(); ?>

<main id="main" class="">
    <?php while ( have_posts() ) : the_post(); 
        // Get ACF fields
        $hero_img = metta_get_field('pd_hero_img') ?: get_the_post_thumbnail_url(get_the_ID(), 'full');
        $hero_title = metta_get_field('pd_hero_title') ?: get_the_title();
        $hero_sub = metta_get_field('pd_hero_sub');
        $content = metta_get_field('pd_main_content') ?: get_the_content();
        $price = metta_get_field('pd_price');
        $cta_link = metta_get_field('pd_cta_link');
    ?>

    <div id="content" class="blog-wrapper blog-single page-wrapper" style="padding-top: 130px; padding-bottom: 80px;">
        <div class="row row-large row-divided">
            <!-- Main Content Column -->
            <div class="large-9 col">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="article-inner">
                        <!-- Header / Hero -->
                        <header class="entry-header">
                            <div class="entry-header-text entry-header-text-top text-left">
                                <h6 class="entry-category is-xsmall"><a href="<?php echo get_site_url(); ?>/san-pham" rel="category tag">Sản phẩm</a></h6>
                                <h1 class="entry-title"><?php echo $hero_title; ?></h1>
                                <?php if($hero_sub): ?>
                                    <div class="entry-subtitle" style="margin-top: 10px; font-style: italic; color: #777;">
                                        <?php echo nl2br($hero_sub); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="entry-divider is-divider small"></div>
                            </div>

                            <?php if ($hero_img) : ?>
                                <div class="entry-image relative">
                                    <img src="<?php echo $hero_img; ?>" class="attachment-large size-large wp-post-image" alt="<?php echo $hero_title; ?>" style="width: 100%; height: auto;">
                                </div>
                            <?php endif; ?>
                        </header>

                        <!-- Product Pricing & Action (Optional placement) -->
                        <?php if($price || $cta_link): ?>
                        <div class="product-meta-action" style="background: #fffcf9; padding: 20px; border: 1px dashed #a87e09; border-radius: 10px; margin: 20px 0;">
                            <?php if($price): ?>
                                <p class="price" style="color: #a87e09; font-weight: bold; font-size: 1.5rem; margin-bottom: 10px;">
                                    Giá: <?php echo $price; ?>
                                </p>
                            <?php endif; ?>
                            
                            <?php if($cta_link): ?>
                                <a href="<?php echo $cta_link; ?>" class="button primary is-small lowercase" style="border-radius: 99px; background: linear-gradient(92deg, #9c4b00 1.53%, #c67427 93.65%); color: white; border: none; padding: 10px 30px; font-size: 1.1em;">
                                    <i class="icon-shopping-cart"></i> Đặt mua ngay
                                </a>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>

                        <!-- Main Content -->
                        <div class="entry-content single-page">
                            <?php 
                                // Render ACF Content or Default Content
                                if(function_exists('metta_get_field') && metta_get_field('pd_main_content')) {
                                    echo metta_get_field('pd_main_content');
                                } else {
                                    the_content(); 
                                }
                            ?>
                        </div>

                        <!-- Share Buttons -->
                        <div class="blog-share text-center">
                            <div class="is-divider medium"></div>
                            <div class="social-icons share-icons share-row relative icon-style-outline">
                                <a href="https://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" class="icon button circle is-outline facebook" target="_blank" rel="noopener nofollow"><i class="icon-facebook"></i></a>
                                <a href="https://twitter.com/share?url=<?php echo urlencode(get_permalink()); ?>" class="icon button circle is-outline twitter" target="_blank" rel="noopener nofollow"><i class="icon-twitter"></i></a>
                                <a href="mailto:?subject=<?php the_title(); ?>&body=<?php the_permalink(); ?>" class="icon button circle is-outline email" rel="nofollow"><i class="icon-envelop"></i></a>
                                <a href="https://pinterest.com/pin/create/button?url=<?php echo urlencode(get_permalink()); ?>&media=<?php echo urlencode($hero_img); ?>&description=<?php echo urlencode($hero_title); ?>" class="icon button circle is-outline pinterest" target="_blank" rel="noopener nofollow"><i class="icon-pinterest"></i></a>
                            </div>
                        </div>
                        
                        <!-- Navigation -->
                        <nav role="navigation" id="nav-below" class="navigation-post">
                            <div class="flex-row next-prev-nav bt bb">
                                <div class="flex-col flex-grow nav-prev text-left">
                                    <?php 
                                    $prev_post = get_previous_post();
                                    if($prev_post): ?>
                                        <a href="<?php echo get_permalink($prev_post->ID); ?>" rel="prev"><i class="icon-angle-left"></i> <?php echo get_the_title($prev_post->ID); ?></a>
                                    <?php endif; ?>
                                </div>
                                <div class="flex-col flex-grow nav-next text-right">
                                    <?php 
                                    $next_post = get_next_post();
                                    if($next_post): ?>
                                        <a href="<?php echo get_permalink($next_post->ID); ?>" rel="next"><?php echo get_the_title($next_post->ID); ?> <i class="icon-angle-right"></i></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </nav>
                    </div>
                </article>
            </div>

            <!-- Sidebar -->
            <div class="post-sidebar large-3 col">
                <div class="is-sticky-column">
                    <div class="is-sticky-column__inner">
                        <div id="secondary" class="widget-area" role="complementary">
                            <aside class="widget flatsome_recent_posts">
                                <span class="widget-title"><span>SẢN PHẨM KHÁC</span></span>
                                <div class="is-divider small"></div>
                                <ul>
                                    <?php
                                    // Query other pages using this template or just recent posts/products
                                    $recent_posts = new WP_Query(array('posts_per_page' => 5, 'post_status' => 'publish', 'post_type' => 'page', 'meta_key' => '_wp_page_template', 'meta_value' => 'template-product-detail.php', 'post__not_in' => array(get_the_ID())));
                                    if ($recent_posts->have_posts()) :
                                        while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                                            <li class="recent-blog-posts-li">
                                                <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                                                    <div class="flex-col mr-half">
                                                        <div class="badge post-date badge-circle">
                                                            <div class="badge-inner bg-fill" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>); border:0;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-col flex-grow">
                                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php endwhile;
                                        wp_reset_postdata();
                                    else:
                                        // Fallback to recent posts if no other product pages
                                        $fallback_posts = new WP_Query(array('posts_per_page' => 5, 'post_status' => 'publish'));
                                        while ($fallback_posts->have_posts()) : $fallback_posts->the_post(); ?>
                                            <li class="recent-blog-posts-li">
                                                <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                                                    <div class="flex-col mr-half">
                                                        <div class="badge post-date badge-circle">
                                                            <div class="badge-inner bg-fill" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>); border:0;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-col flex-grow">
                                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php endwhile; wp_reset_postdata();
                                    endif;
                                    ?>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
