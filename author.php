<?php

/**
 * The template for displaying Author Archive pages
 */

get_header(); ?>

<section class="page-not-found-area">
	<div class="container">
        <div class="row">
        	<div class="col-md-4">
		    	<?php get_sidebar(); ?>
		    </div>
        	<div class="col-md-8">

				<?php if ( have_posts() ) : the_post(); ?>

					<header class="archive-header">
						<h1 class="archive-title"><?php printf( __( 'Author Archives: %s', 'twentytwelve' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h1>
					</header>

					<?php rewind_posts(); ?>

					<?php twentytwelve_content_nav( 'nav-above' ); ?>

					<?php
					
					if ( get_the_author_meta( 'description' ) ) : ?>

					<div class="author-info">
						<div class="author-avatar">
						<?php
							
							$author_bio_avatar_size = apply_filters( 'twentytwelve_author_bio_avatar_size', 68 );

							echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );

						?>
						</div>
						<div class="author-description">
							<h2><?php printf( __( 'About %s', 'twentytwelve' ), get_the_author() ); ?></h2>
							<p><?php the_author_meta( 'description' ); ?></p>
						</div>
					</div>
					<?php endif; ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', get_post_format() ); ?>

					<?php endwhile; ?>

					<?php twentytwelve_content_nav( 'nav-below' ); ?>

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>
					
				<?php endif; ?>

			</div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
