<?php

/**
 * The template for displaying 404 pages (Not Found)
 */
header($_SERVER["SERVER_PROTOCOL"] . " 410 Gone");
get_header(); ?>

<style type="text/css">
.error-page-content h1 {
    font-size: 280px;
    line-height: 220px;
    margin: 0;
    font-family: 'Montserrat-Bold';
    color: #10417c;
}
.error-page-content h3 {
    word-spacing: 3px;
    letter-spacing: 1px;
    font-family: 'Montserrat-Bold';
    margin: 15px 0;
    color: #333333;
}
.error-page-content a {
    background: #3064b5 !important;
    background: -moz-linear-gradient(left, #3064b5 0%, #1b4a93 100%) !important;
    background: -webkit-linear-gradient(left, #3064b5 0%,#1b4a93 100%) !important;
    background: linear-gradient(to right, #3064b5 0%,#1b4a93 100%) !important;
    padding: 12px 60px;
    display: inline-block;
    margin: 30px 0 0;
    color: #FFF;
    border-radius: 100px;
}
.error-page-content {
    display: flex;
    flex-flow: column;
    align-items: center;
    justify-content: center;
    min-height: 75vh;
	padding:30px 0;
}
	
	@media (max-width: 767px){
		.error-page-content h1 {
			font-size: 120px;
			line-height: 100px;
		}
		.error-page-content h3 {
			word-spacing: 1px;
			letter-spacing: 1px;
			font-size: 16px;
		}
	}	
</style>

<section class="page-not-found-area">
	<div class="container">
        <div class="row">
        	<div class="col-md-12">
				<div class="error-page-content">
					<h1>
						404
					</h1>
					<h3>
						OOPS! PAGE NOT FOUND
					</h3>
					<p>
						It seems we can’t find what you’re looking for.
					</p>
					<a href="/">Back to Home</a>
				</div>
<!--         		<article id="post-0" class="post error404 no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'twentytwelve' ); ?></h1>
					</header>
					<div class="entry-content">
						<p><?php //_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentytwelve' ); ?></p>
						<?php //get_search_form(); ?>
					</div>
				</article> -->
        	</div>
        </div>
   	</div>
</section>

<?php get_footer(); ?>