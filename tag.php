<?php

/**
 * The template for displaying Tag pages
 */

get_header(); ?>

<section class="page-archieves-area">
	<div class="container">
        <div class="row">
        	<div class="col-md-4">
		    	<?php get_sidebar(); ?>
		    </div>
        	<div class="col-md-8">

			<?php if ( have_posts() ) : ?>

				<header class="archive-header">
					<h1 class="archive-title"><?php printf( __( 'Tag Archives: %s', 'twentytwelve' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></h1>

				<?php if ( tag_description() ) : ?>

					<div class="archive-meta"><?php echo tag_description(); ?></div>

				<?php endif; ?>

				</header>

				<?php while ( have_posts() ) : the_post();

					get_template_part( 'content', get_post_format() );

				endwhile;

				twentytwelve_content_nav( 'nav-below' );

				?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

			</div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
