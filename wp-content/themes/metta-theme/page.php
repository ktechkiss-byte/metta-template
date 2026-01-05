<?php
/**
 * The template for displaying all pages.
 */

get_header(); ?>

<div id="content" role="main" class="content-area container" style="padding-top: 30px; padding-bottom: 30px;">
    <?php
    while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php if ( ! is_front_page() ) : ?>
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>
            <?php endif; ?>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; // End of the loop. ?>
</div>

<?php get_footer(); ?>
