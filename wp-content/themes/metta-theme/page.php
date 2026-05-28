<?php
/**
 * The template for displaying all pages.
 */

get_header(); ?>

<main id="main">
  <section class="section">
    <div class="section-content relative">
      <div id="content" class="page-wrapper container" style="padding-top: 130px; padding-bottom: 80px;">
        <div class="row align-center">
          <div class="large-10 col">
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php if ( ! is_front_page() ) : ?>
                    <header class="entry-header text-center" style="margin-bottom: 40px;">
                        <h1 class="entry-title" style="color: var(--primary-color); font-size: 2.5rem;"><?php the_title(); ?></h1>
                        <div class="is-divider medium" style="background-color: var(--vang-dat); margin: 20px auto; width: 60px; height: 3px;"></div>
                    </header>
                    <?php endif; ?>

                    <div class="entry-content" style="line-height: 1.8; font-size: 1.1rem; color: #333;">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<style>
.entry-content p {
    margin-bottom: 1.5em;
}
.entry-content img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
    margin: 20px 0;
}
.entry-content h2, .entry-content h3 {
    color: var(--primary-color);
    margin-top: 1.5em;
    margin-bottom: 0.8em;
}
</style>

<?php get_footer(); ?>
