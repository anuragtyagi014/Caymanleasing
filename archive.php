<?php

/**
 * The template for displaying Archive pages
 */

get_header(); ?>

<section class="page-not-found-area">
	<div class="container">
        <div class="row">
        	<div class="col-md-4">
		    	<?php get_sidebar(); ?>
		    </div>
        	<div class="col-md-8">

				<?php if ( have_posts() ) : ?>
					<header class="archive-header">
						<h1 class="archive-title"><?php
							if ( is_day() ) :
								printf( __( 'Daily Archives: %s', 'twentytwelve' ), '<span>' . get_the_date() . '</span>' );
							elseif ( is_month() ) :
								printf( __( 'Monthly Archives: %s', 'twentytwelve' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'twentytwelve' ) ) . '</span>' );
							elseif ( is_year() ) :
								printf( __( 'Yearly Archives: %s', 'twentytwelve' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'twentytwelve' ) ) . '</span>' );
							else :
								_e( 'Archives', 'twentytwelve' );
							endif;
						?></h1>
					</header>

					<?php 

					while ( have_posts() ) : the_post();

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
