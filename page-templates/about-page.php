<div class="banner" id="home">
    <div class="banner_img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg" class="img-responsive">
    </div>
    <div class="banner_content">
        <ul class="address">
            <li><i class="fa fa-map-marker"></i> Address: Cayman Falls Plaza, (Across from the Westin Hotel)</li>
            <li><i class="fa fa-phone"></i> Call us: <a href="callto:345 945 2211">345 945 2211</a></li>
        </ul>
        <h1>LEASE AND LEASE -TO- OWN SPECIALISTS</h1>
        <ul>
            <li><a href="#lease" class="browse_car">Browse Lease</a></li>
            <li><a href="#lease-to-own" class="browse_car">Browse Lease-to-Own</a></li>
        </ul>
    </div>
</div>
<!--banner-end-->
<section class="cars_on_leas" id="lease">
    <div class="container">
        <div class="row">
            <div class="heading">
                <a href="javascript:;">Lease</a>
            </div>
            <div class="col-sm-12">
                <div class="available-cars">
                    <div class="row">
                        <div class="col-sm-5 col-md-4">
                            <div class="available-cars-content">
                                <h4>Cars</h4>
                                <div class="price">
                                    <p>
                                        <sup>Starting at</sup>
                                        <span class="amount">$599</span>
                                        <span><b>.00</b><strong>Per Month</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7 col-md-8">
                            <div class="available-cars-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/av-cars.png" class="img-responsive" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="see-available-cars"><a href="javscript:;" data-toggle="modal" data-target="#see-ava"><span><img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png" alt=""/></span> see available cars </a></div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="available-cars">
                    <div class="row">
                        <div class="col-sm-5 col-md-4">
                            <div class="available-cars-content">
                                <h4>Suv's</h4>
                                <div class="price">
                                    <p>
                                        <sup>Starting at</sup>
                                        <span class="amount">$799</span>
                                        <span><b>.00</b><strong>Per Month</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7 col-md-8">
                            <div class="available-cars-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/sc-cars.png" class="img-responsive" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="see-available-cars"><a href="javscript:;" data-toggle="modal" data-target="#see-suv"><span>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png" alt=""/></span> see available Suv's </a></div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="platinum_vehicle">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/lease-banner.jpg" class="img-responsive" alt="" />
                    <div class="platinum-content">
                        <p>Leasing includes all insurance, maintenance, repairs and licensing costs.<strong>Just pay for gas!</strong></p>
                        <a href="javscript:;" class="white-btn">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="section_content">
                <h3>Do you have a question? Feel free to contact us</h3>
                <a class="contact_btn" href="#contact">Contact us</a>
            </div>
        </div>
    </div>
</section>
<!--end-->
<!--cars-gallery-->
<section class="cars-gallery" id="lease-to-own">
    <div class="container">
        <div class="row">
            <div class="heading">
                <a href="javascript:;">Lease-to-Own</a>
            </div>
            <?php 
            $args = array( 'posts_per_page' => -1, 'post_type' => 'lease-to-own',  'orderby' => 'post_date', 'order' =>'DESC');
            $postslist = get_posts( $args );
            foreach ( $postslist as $post ) :
            setup_postdata( $post ); 
            ?>
                <div class="col-sm-4">
                    <div class="cars">
                        <div class="car-title">
                            <h5><?php the_title(); ?></h5>
                        </div>
                        <div class="car-img">
                            <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                                <!-- <div class="cars-hover">
                            <a href="images/cars_03.jpg" data-toggle="lightbox" data-gallery="example-gallery"><i class="fa fa-eye"></i>
                            <p>Click for More Pictures</p></a>
                        </div> -->

                        </div>
                        <div class="cars-content">
                            <div class="months">
                                <ul>
                                    <li>
                                        <p>36 Months</p>
                                        <p><strong>$<?php echo get_post_meta($post->ID, '36_installments_price', true); ?></strong></p>
                                    </li>
                                    <li>
                                        <p>24 Months</p>
                                        <p><strong>$<?php echo get_post_meta($post->ID, '24_installments_price', true); ?></strong></p>
                                    </li>
                                    <li>
                                        <p>12 Months</p>
                                        <p><strong>$<?php echo get_post_meta($post->ID, '12_installments_price', true); ?></strong></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="price-refund">
                                <ul>
                                    <li>
                                        <p>Refundable
                                            <br> Security Deposit</p>
                                        <p><strong>$<?php echo get_post_meta($post->ID, 'refundable_security_deposit', true); ?></strong></p>
                                    </li>
                                    <li>
                                        <p>Cash
                                            <br> Price</p>
                                        <p><strong>$<?php echo get_post_meta($post->ID, 'cash_price', true); ?></strong></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="drive-btn">
                                <a href="javscript:;" data-toggle="modal" data-target="#test-drive" class="test-btn"><span><img src="<?php echo get_template_directory_uri(); ?>/images/car-icon.png" alt=""/></span> Test drive this vehicule</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
        </div>
    </div>
</section>
<!--end-->
<!--leasing-->
<section class="leasing-programs-area" id="lease-program">
    <div class="container">
        <div class="row">
            <div class="leasing-heaidng">
                <h4>Leasing Programs</h4></div>
            <div class="col-sm-6">
                <div class="leasing-programs">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/lease.png" alt="" />
                    </div>
                    <h5>Lease</h5>
                    <p>Your all-in monthly payment includes insurance, repairs, servicing, and all government licensing charges. At the end of the term you can either return the vehicle to us, renew the lease, or convert to a lease-to-own agreement. You will be required to pay your first month payment, and a refundable security deposit to get behind the wheel. Rates vary by vehicle so check out the Lease section above. Leases rates are quoted over 6-month term minimums. Pricing can be locked in for up to 24-months.</p>
                    <!-- <a href="javscript:;">Read More</a> -->
                </div>
            </div>
            <div class="col-sm-6">
                <div class="leasing-programs">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/leas-to-own.png" alt="" />
                    </div>
                    <h5>Lease-to-own</h5>
                    <p>The vehicle is yours to keep after term completion! This is our most popular program. You will be responsible for the cost of insurance, repairs, licensing and maintenance throughout. To get behind the wheel you will be required to pay your first month and refundable security deposit. Initial costs vary by vehicle and can be viewed in our Lease-to-Own section above. Available over 12, 24, or, 36-Month terms. </p>
                    <!-- <a href="javscript:;">Read More</a> -->
                </div>
            </div>
            <div class="schedule">
                <div class="schedule-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/leas-car.jpg" alt="" />
                </div>
                <div class="schedule-content">
                    <h5>Schedule a Test Drive</h5>
                    <p>We’d love to put you behind the wheel! Simply click on the button</p>
                    <a href="javscript:;" class="schedule-btn">Schedule Now</a>
                </div>
            </div>
            <div class="how-it-work">
                <h5>Here is how it works</h5>
                <div class="col-sm-4">
                    <div class="slelct-car">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/slelect-car.png" alt="" />
                        </div>
                        <h4>Select a Car</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc rutrum lectus efficitur rutrum vulputate. </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="slelct-car apply">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/apply.png" alt="" />
                        </div>
                        <h4>Apply</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc rutrum lectus efficitur rutrum vulputate. </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="slelct-car">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/drive-away.png" alt="" />
                        </div>
                        <h4>Drive Away</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc rutrum lectus efficitur rutrum vulputate. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end-->
<!--what-our-client-says-->
<section class="what-clietn-says" id="client">
    <div class="container">
        <div class="row">
            <div class="leasing-heaidng">
                <h4>what our clients say about us</h4></div>
            <?php 
            $args = array( 'posts_per_page' => 3, 'post_type' => 'testimonials', 'orderby' => 'post_date', 'order' =>'DESC');
            $postslist = get_posts( $args );
            foreach ( $postslist as $post ) :
            setup_postdata( $post ); 
            ?>
                <div class="col-sm-4">
                    <div class="clients-testimonial">
                        <div class="icon">
                            <?php the_post_thumbnail('full', array('class' => 'img-responsive img-circle')); ?>
                        </div>
                        <h4><?php the_title();?><span><?php echo get_field( "testimonial_name", get_the_ID() );?></span></h4>
                        <p><i class="fa fa-quote-left"></i>
                            <?php the_content();?><i class="fa fa-quote-right"></i></p>
                    </div>
                </div>
                <?php endforeach;?>
                    <div class="schedule" id="drive">
                        <div class="schedule-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/leas-car.jpg" alt="" />
                        </div>
                        <div class="schedule-content">
                            <h5>Schedule a Test Drive</h5>
                            <p>We’d love to put you behind the wheel! Simply click on the button</p>
                            <a href="javscript:;" class="schedule-btn">Schedule Now</a>
                        </div>
                    </div>
        </div>
    </div>
</section>
<!--end-->
<!--faq-->
<section class="faq-area" id="faq">
    <div class="container">
        <div class="row">
            <div class="leasing-heaidng">
                <h4>FAQ'S</h4></div>

            <?php 
$args = array(
    'post_type'     => 'faq',
    'post_status'       => 'publish',
    'ignore_sticky_posts'   => 1,
    'posts_per_page'    => 24,
    'orderby' => 'post_date', 
    'order' =>'ASC'
);

global $post;
$custom_query = get_posts($args ); 
$chunked_posts = array_chunk( $custom_query, 5 );
?>

                <?php foreach ( $chunked_posts as $custom_post ) : ?>
                    <div class="col-sm-6">
                        <div class="faq">

                            <?php foreach( $custom_post as $post ) : setup_postdata( $post ); ?>
                                <h4><?php the_title(); ?></h4>
                                <?php the_content();?>

                                    <?php endforeach; ?>
                        </div>
                    </div>

                    <?php endforeach; ?>

        </div>
    </div>
</section>
<!--end-->
<!--blog-->
<section class="blog" id="blog">
    <div class="leasing-heaidng">
        <h4>Blog</h4></div>
    <ul class="bxslider">
        <?php 
            $args = array( 'posts_per_page' => -1, 'post_type' => 'blog', 'orderby' => 'post_date', 'order' =>'DESC');
            $postslist = get_posts( $args );
            foreach ( $postslist as $post ) :
            setup_postdata( $post ); 
        ?>
            <li>
                <div class="blog-item">
                    <div class="blog-img">
                        <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                    </div>
                    <h5><?php the_title(); ?></h5>
                    <p>
                        <?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,30); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>">Read More</a>
                </div>
            </li>
            <?php
            endforeach; 
            wp_reset_postdata();
        ?>
    </ul>
    <span id="prev"><img src="<?php echo get_template_directory_uri(); ?>/images/prev.jpg" alt=""/></span>
    <span id="next"><img src="<?php echo get_template_directory_uri(); ?>/images/prev.jpg" alt=""/></span>
</section>
<!--end-->

<section class="contect-area" id="contact">
    <div class="container">
        <div class="leasing-heaidng">
            <h4>Get in Touch with us</h4></div>
        <div class="contant-form">
            <?php echo do_shortcode( '[contact-form-7 id="7" title="Contact form"]' ); ?>
        </div>
        <div class="contact-detail">
            <div class="row">
                <div class="col-sm-4">
                    <div class="contact-detail-item">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/phone.png" alt="" />
                        </div>
                        <p>Phone Number <a href="javascript:;">345-945-2211</a></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-detail-item">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/envolope.png" alt="" />
                        </div>
                        <p>Sales Team Inbox <a href="mailto:sales@caymanleasing.com">sales@caymanleasing.com</a></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-detail-item">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/map-marker.png" alt="" />
                        </div>
                        <p>Address <a href="javascript:;">Cayman Falls Plaza, <br>(Across from the Westin Hotel)</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="follow-us">
            <ul>
                <li><a href="javscript:;" class="twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="javscript:;" class="facebook"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="javscript:;" class="google"><i class="fa fa-google-plus"></i></a></li>
            </ul>
        </div>
    </div>
</section>