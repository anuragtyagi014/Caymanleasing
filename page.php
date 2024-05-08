<?php

/**
 * The template for displaying all pages
 */

get_header(); ?>

<div id="primary" class="site-content">
	<div id="content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'page' ); ?>
			<?php comments_template( '', true ); ?>
		<?php endwhile; ?>

	</div>
</div>

<?php get_footer(); ?>