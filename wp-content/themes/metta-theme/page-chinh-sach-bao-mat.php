<?php
/* Template Name: page-chinh-sach-bao-mat */
get_header(); ?>

<main id="main" class="">
	<div id="content" class="content-area page-wrapper" role="main">
		<div class="row row-main" style="padding-top: 130px; padding-bottom: 80px;">
			<div class="large-10 col" style="margin: 0 auto;">
				<div class="col-inner">

					<?php while ( have_posts() ) : the_post(); ?>
					<header class="entry-header" style="margin-bottom: 40px;">
						<h1 style="color: var(--metta-primary, #2d4a2d); font-size: 2rem; text-align: center;"><?php the_title(); ?></h1>
						<div style="width: 60px; height: 3px; background: var(--metta-main, #c8a96e); margin: 20px auto;"></div>
					</header>

					<div class="entry-content" style="line-height: 1.8; font-size: 1.05rem; color: #333;">
						<?php the_content(); ?>
					</div>
					<?php endwhile; ?>

				</div>
			</div>
		</div>
	</div>
</main>

<style>
.entry-content p { margin-bottom: 1.2em; }
.entry-content h2 { color: var(--metta-primary, #2d4a2d); margin-top: 1.5em; margin-bottom: 0.8em; font-size: 1.4rem; }
.entry-content ul { margin-left: 1.5em; margin-bottom: 1.2em; }
.entry-content li { margin-bottom: 0.5em; }
.entry-content strong { color: var(--metta-primary, #2d4a2d); }
</style>

<?php get_footer(); ?>