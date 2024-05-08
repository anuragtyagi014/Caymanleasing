<?php

/**
 * The template for displaying Category pages
 */

get_header(); ?>


<section class="page-not-found-area">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
			<div class="col-md-8">

				<?php if (have_posts()) : ?>

					<header class="archive-header">
						<h1 class="archive-title"><?php printf(__('Category Archives: %s', 'twentytwelve'), '<span>' . single_cat_title('', false) . '</span>'); ?></h1>

						<?php if (category_description()) :  ?>

							<div class="archive-meta"><?php echo category_description(); ?></div>

						<?php endif; ?>

					</header>

					<?php

					while (have_posts()) : the_post();

						get_template_part('content', get_post_format());

					endwhile;

					twentytwelve_content_nav('nav-below');

					?>

				<?php else : ?>

					<?php get_template_part('content', 'none'); ?>

				<?php endif; ?>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>