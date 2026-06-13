<?php
/**
 * The template for displaying all single posts.
 */

get_header(); ?>

<main id="main">
    <div id="content" class="blog-wrapper blog-single page-wrapper" style="padding-top: 130px; padding-bottom: 80px;">
        <div class="row row-large row-divided">
            <div class="large-9 col">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="article-inner">
                            <header class="entry-header">
                                <div class="entry-header-text entry-header-text-top text-left">
                                    <h6 class="entry-category is-xsmall"><?php the_category(', '); ?></h6>
                                    <h1 class="entry-title"><?php the_title(); ?></h1>
                                    <div class="entry-divider is-divider small"></div>
                                </div>
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="entry-image relative">
                                        <?php the_post_thumbnail('large', array('class' => 'attachment-large size-large')); ?>
                                    </div>
                                <?php endif; ?>
                            </header>

                            <div class="entry-content single-page">
                                <?php the_content(); ?>
                            </div>

                            <div class="blog-share text-center">
                                <div class="is-divider medium"></div>
                                <div class="social-icons share-icons share-row relative icon-style-outline">
                                    <a href="https://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" class="icon button circle is-outline facebook" target="_blank" rel="noopener nofollow"><i class="icon-facebook"></i></a>
                                    <a href="https://twitter.com/share?url=<?php echo urlencode(get_permalink()); ?>" class="icon button circle is-outline twitter" target="_blank" rel="noopener nofollow"><i class="icon-twitter"></i></a>
                                    <a href="mailto:?subject=<?php the_title(); ?>&body=<?php the_permalink(); ?>" class="icon button circle is-outline email" rel="nofollow"><i class="icon-envelop"></i></a>
                                    <a href="https://pinterest.com/pin/create/button?url=<?php echo urlencode(get_permalink()); ?>&media=<?php echo urlencode(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>&description=<?php the_title(); ?>" class="icon button circle is-outline pinterest" target="_blank" rel="noopener nofollow"><i class="icon-pinterest"></i></a>
                                </div>
                            </div>
                            
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
                <?php endwhile; endif; ?>
            </div>

            <div class="post-sidebar large-3 col">
                <div class="is-sticky-column">
                    <div class="is-sticky-column__inner">
                        <div id="secondary" class="widget-area" role="complementary">
                            <aside class="widget flatsome_recent_posts">
                                <span class="widget-title"><span>NỘI DUNG MỚI</span></span>
                                <div class="is-divider small"></div>
                                <ul>
                                    <?php
                                    $recent_posts = new WP_Query(array('posts_per_page' => 5, 'post_status' => 'publish'));
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
                                                        <span class="post_comments op-8 block is-xsmall"><span>Bình luận bị tắt</span></span>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php endwhile;
                                        wp_reset_postdata();
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
</main>

<?php get_footer(); ?>
