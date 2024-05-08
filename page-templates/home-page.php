<?php

/**
 * Template Name: temp Page Template
 */
 
 get_header(); ?>
     <style>
        .pending_car {
            background-image: url("<?php echo get_template_directory_uri().'/images/pending.png'; ?>");
            position: absolute;
            top: 0;
            height: 168px;
            width: 224px;
        }
        
        @media (max-width:480px) {
            .pending_car {
                background-image: url("<?php echo get_template_directory_uri().'/images/pendingmobile.png'; ?>");
                position: absolute;
                top: 0;
                height: 100%;
                width: 351px;
                background-size: contain;
            }
        }
        
        .sale_car {
            background-image: url("<?php echo get_template_directory_uri().'/images/salenew.png'; ?>");
            position: absolute;
            bottom: 0;
            height: 50px;
            width: 130px;
            left: -28px;
        }
        
        .less-padding p {
            display: flow-root;
        }
        
        .less-padding input#price_number {
            float: left;
            width: 56%;
            margin-right: 4%;
            color: #667e8e;
        }
        
        .less-padding span {
            float: left;
            width: 40%;
            display: block;
        }
        
        .less-padding button {
            width: 100%;
            height: 32px;
        }
        
        ul.less-padding {
            padding: 0 10px !important;
        }
        
        .less-padding li {
            display: inline-block;
        }
        
        .less-padding input[type="number"]#price_number::-webkit-input-placeholder,
        .less-padding input[type="number"]#price_number::-moz-input-placeholder,
        .less-padding input[type="number"]#price_number::-ms-input-placeholder {
            color: #909090;
        }
    </style>

 <div class="banner" id="home">
        <div class="banner_img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/banner-min.jpg" class="img-responsive">
        </div>
        <div class="banner_content">
            <ul class="address">
                <li><i class="fa fa-map-marker"></i> Address: 70 Hospital Road, George Town</li>
                <li><i class="fa fa-phone"></i> Call us: <a href="callto:345 945 2211">345 945 2211</a></li>
            </ul>
            <!--   	<h1>Inventory</h1> -->
            <ul>
                <li><a onClick="leaseToOwn()" href="#lease-to-own" class="browse_car">Browse Inventory</a></li>
            </ul>
        </div>
    </div>
 <!--banner-end-->
    <!--end-->
    <!--cars-gallery-->
    <!-- Model Start for Pdf form-->
    <div id="pdfform-submit" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center">Please provide some info and then your PDF download can begin</h4>
                </div>
                <div class="modal-body pdfform">
                    <form action="<?php echo site_url();?>/pdf" id="downloadpdf" method="post">
                        <div id="successpdf" class="text-center bg-success"></div>
                        <div id="pdfsuccesshidden">
                            <div class="form-filed">
                                <label>First Name: *</label>
                                <input type="text" name="first_name" id="first_name">
                                <label id="first_name_error" class="error" for="first_name"></label>
                            </div>
                            <div class="form-filed">
                                <label>Last Name: *</label>
                                <input type="text" name="last_name" id="last_name">
                                <label id="last_name_error" class="error" for="last_name"></label>
                            </div>
                            <div class="form-filed">
                                <label>Email: *</label>
                                <input type="email" name="email" id="email">
                                <label id="email_error" class="error" for="email"></label>
                            </div>
                            <div class="form-filed">
                                <label for="captcha">&nbsp;</label>
                                <div class="g-recaptcha" data-sitekey="6LcLtxQUAAAAAJshKaoDSD54oj2J_25YYPVRTzKy"></div>
                            </div>
                            <input type="hidden" name="image" id="pdfimage">
                            <input type="hidden" name="id" id="post_id">
                            <input type="hidden" id="model_id">
                            <div class="form-filed">
                                <button type="button" onclick="return saveImage($('#model_id').val(),$('#pdfimage').val());">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Model end-->
     <section class="cars-gallery" id="lease-to-own">
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.2.4.min.js"></script>
        <div class="container">
            <div class="row">
                <div class="heading">
                    <a href="javascript:;">Inventory</a>
                </div>
                  
               <div class="modal fade more-info" data-backdrop="static" data-keyboard="false" id="myModal<?php echo get_the_ID(); ?>" role="dialog">
                  <div class="modal-dialog modal-md">
                      <!-- Modal content-->
                        <div class="modal-content">
                         <div class="modal-body">
                           <div id="myCarousel<?php echo get_the_ID(); ?>" class="carousel slide" data-ride="carousel">
                              <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">

                                          <?php  for($i=1; $i<= 40; $i++): ?>
                                                <?php $image =  get_field( "image".$i );  if(!empty($image['url'])): ?>
                                                    <div class="item <?php echo ($i == 1)?'active':'';?>">
                                                        <img src="<?php echo $image['url']; ?>">
                                                    </div>
                                                <?php endif; ?>
                                          <?php endfor; ?>

                                        </div>

                                        <!-- Left and right controls -->
                                          <a class="left carousel-control" onClick="$('#myCarousel<?php echo $post->ID; ?>').carousel( $(this).data());" href="#myCarousel<?php echo $post->ID; ?>" role="button" data-slide="prev">
                                            <i class="fa fa-arrow-left"></i>
                                        </a>
                                        <a class="right carousel-control" onClick="$('#myCarousel<?php echo $post->ID; ?>').carousel( $(this).data());" href="#myCarousel<?php echo $post->ID; ?>" role="button" data-slide="next">
                                            <i class="fa fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                        <div class="modal-footer">
                            <?php $rand = rand(); ?>
                            <div id="popoudiv<?php echo $rand; ?>" style="width:100%; height: 100%;">
                              <div class="description-area">
                              <?php the_content(); ?>
                              </div>
                            </div>
                            <?php if($post->post_title == "Pick your own!"){ ?>
                                <ul class="cal-popup">
                                  <li style="padding:8px 0;">
                                    <p>Price </p>
                                      <p><strong><input type="number" min="6000" placeholder="Enter Price" id="price_number"> </strong>
                                        <span><button onclick="var price = $('#price_number').val(); if(price == ''){ $('#error_price').html('Price is required'); return false;}else{ $('#error_price').html(''); } if(price < 6000){ $('#error_price').html('Price must be $6000 or higher'); return false;}else{ $('#error_price').html(''); }  var total = <?php echo get_field('formula_12_month');?>; $('#show_number').html('$'+Math.ceil(total)+'/month'); var total24 = <?php echo get_field('formula_24_month');?>; $('#show_number24').html('$'+Math.ceil(total24)+'/month');">Calculate</button> </span>
                                     </p>
                                  <div id="error_price" style="color: red; font-size: 10px;"></div>
                                 </li>
                                 <li style="padding:8px 0;"><p>12-Month Lease-to-Own </br><strong id="show_number">$</strong></p>
                                 </li>
                                 <li style="padding:8px 0;"><p>24-Month Lease-to-Own </br><strong id="show_number24">$</strong></p>
                                 </li>
                                </ul>
                                <?php } ?>
                                <div class="pop-cars-btn">
                                    <a href="javscript:;" data-toggle="modal" data-target="#test-drive" onclick="$('#vehicle1').val('<?php the_title(); ?>'); <?php if($post->post_title == " Pick your own! "){?> $('#program_choice_hide').hide(); $('#program_choice_show').show(); <?php } ?>">Contact us</a>
                                </div>
                                <div class="pop-cars-btn">
                                    <?php if($post->post_title == "Pick your own!"){ ?>
                                     <a href="<?php the_field('pdf'); ?>" target="_blank">Download Application Form</a>
                                    <?php }else{ ?>
                                  <button type="button" data-toggle="modal" onclick="$('#pdfimage').val('<?php echo $rand; ?>');$('#post_id').val('<?php echo $post->ID; ?>');$('#model_id').val('popoudiv<?php echo $rand; ?>');" data-target="#pdfform-submit">Download PDF</button>
                                <?php } ?>
                                </div>  
                                <button type="button" onClick="stopVideo();" class="btn btn-default toggle-btn" data-dismiss="modal" style="margin-bottom:80px;">×</button>  
                        </div>
                    </div>
                  </div>
               </div>
                <!-- End here -->

                    <div class="col-xs-6 col-md-4">
                        <div class="cars caritem-<?php echo get_the_ID(); ?>">
                            <div class="car-title">
                                <h5><?php the_title(); ?></h5>
                            </div>

                            <div class="car-img">
                                <?php //$thumb_class="img-responsive"; ?>
                                    <?php if(get_field('status_pending')) { ?>
                                        <?php $thumb_class.=" car_pending"; ?>
                                            <?php } ?>
                                                <a href="javascript:;" data-toggle="modal" data-target="#myModal<?php echo $post->ID; ?>">
                                                    <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                                                        <?php if(get_field('status_pending')) { ?>
                                                            <div class="pending_car">&nbsp;</div>
                                                            <?php } ?>
                                                                <?php if(get_field('car_sell')) { ?>
                                                                    <div class="sale_car">&nbsp;</div>
                                                                    <?php } ?>
                                                                        <ul>
                                                                            <li><i class="fa fa-arrow-circle-left"></i></li>
                                                                            <li><i class="fa fa-arrow-circle-right"></i></li>
                                                                        </ul>
                                                </a>
                            </div>

                            <div class="cars-content">
                                <!--<div class="months">
                            <ul>
                                <li><p>36 Months</p><p><strong>$<?php //echo get_post_meta($post->ID, '36_installments_price', true); ?></strong></p></li>
                                <li><p>24 Months</p><p><strong>$<?php //echo get_post_meta($post->ID, '24_installments_price', true); ?></strong></p></li>
                                <li><p>12 Months</p><p><strong>$<?php //echo get_post_meta($post->ID, '12_installments_price', true); ?></strong></p></li>
                            </ul>
                        </div>-->
                                <div class="price-refund">
                                    <?php if($post->post_title == "Pick your own!"){ ?>
                                        <ul class="less-padding">
                                            <li>
                                                <p>Lease-to-Own</p>
                                                <p> Starting at<strong> $475/month</strong></p>
                                            </li>
                                        </ul>
                                        <?php }else{ ?>
                                            <ul>
                                                <?php if( get_field('buy') ): ?>
                                                    <li>
                                                        <p>Buy </p>
                                                        <p><strong>$<?php echo get_post_meta($post->ID, 'buy', true); ?></strong></p>
                                                    </li>
                                                    <?php endif; ?>
                                                        <?php if( get_field('lease') ): ?>
                                                            <li>
                                                                <p>Lease</p>
                                                                <p>Starting at <strong>$<?php echo get_post_meta($post->ID, 'lease', true); ?>/month</strong></p>
                                                            </li>
                                                            <?php endif; ?>
                                                                <?php if( get_field('lease_to_own') ): ?>
                                                                    <li>
                                                                        <p>Lease-to-Own</p>
                                                                        <p>Starting at<strong> $<?php echo get_post_meta($post->ID, 'lease_to_own', true); ?>/month</strong></p>
                                                                    </li>
                                                                    <?php endif; ?>
                                            </ul>
                                            <?php } ?>
                                </div>

                                <div class="drive-btn">
                                    <a href="javascript:;" data-toggle="modal" data-target="#myModal<?php echo $post->ID; ?>" class="test-btn"><span><img src="<?php echo get_template_directory_uri(); ?>/images/car-icon.png" alt=""/></span> More Info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
            </div>
         </div>

     </section>  
     <!--leasing-->
    <section class="leasing-programs-area" id="lease-program">
        <div class="container">
            <div class="row">
                <div class="leasing-heaidng">
                    <h4>How Leasing Works</h4></div>
                <div class="col-sm-6">
                    <div class="leasing-programs">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/lease.png" alt="" />
                        </div>
                        <a onClick="leaseToOwn()" href="#lease-to-own"><h5>Lease-to-Own</h5></a>
                        <p>
                            <?php echo get_post_meta(5, 'lease', true); ?>
                        </p>
                        <!-- <a href="javscript:;">Read More</a> -->
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="leasing-programs">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/leas-to-own.png" alt="" />
                        </div>
                        <a onClick="leaseToOwn()" href="#lease-to-own"><h5>$100 Purchase Option</h5></a>
                        <p>
                            <?php echo get_post_meta(5, 'lease-to-own', true); ?>
                        </p>
                        <!-- <a href="javscript:;">Read More</a> -->
                    </div>
                </div>
            </div>
        </div>
        <!--test-drive-->
        <section class="schedule-area">
            <div class="container">
                <div class="row">
                    <div class="schedule" id="drive">
                        <div class="schedule-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/leas-car.jpg" alt="" />
                        </div>
                        <div class="schedule-content">
                            <h5>Contact Us</h5>
                            <p>We’d love to put you behind the wheel!
                                <!-- Please contact us to proceed -->
                            </p>
                            <a href="javscript:;" data-toggle="modal" data-target="#bookNow" class="schedule-btn">Contact Us</a>
                        </div>
                    </div>
                    <div>
                    </div>
        </section>
        <!--end-->
        <div class="container">
            <div class="row">
                <div class="how-it-work" style="padding-top:80px;">
                    <!-- <h5>Here is how it works</h5> -->
                    <div class="col-sm-4">
                        <div class="slelct-car">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/slelect-car.png" alt="" />
                            </div>
                            <h4>Select</h4>
                            <?php echo get_post_meta(5, 'select_a_car', true); ?>
                                <?php the_field('select_a_car'); ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="slelct-car apply">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/applys.png" alt="" />
                            </div>
                            <h4>Sign</h4>
                            <?php echo get_post_meta(5, 'apply', true); ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="slelct-car">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/drive-aways.png" alt="" />
                            </div>
                            <h4>Drive</h4>
                            <?php echo get_post_meta(5, 'drive_away', true); ?>
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
                <div id="man" class="slider">
                    <?php 
            $args = array( 'posts_per_page' => -1, 'post_type' => 'testimonials', 'orderby' => 'post_date', 'order' =>'DESC');
            $postslist = get_posts( $args );
            foreach ( $postslist as $post ) :
            setup_postdata( $post ); 
            ?>

                        <div class="clients-testimonial">
                            <div class="icon">
                                <img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive img-circle wp-post-image" alt="">
                                <?php // the_post_thumbnail('full', array('class' => 'img-responsive img-circle')); ?>

                            </div>
                            <h4><?php the_title();?><span><?php echo get_field( "testimonial_name", get_the_ID() );?></span></h4>
                            <p><i class="fa fa-quote-left"></i>
                                <?php the_content();?><i class="fa fa-quote-right"></i></p>
                        </div>

                        <?php endforeach;?>
                </div>

            </div>
        </div>
    </section>
    <!--end-->
    <!--test-drive--> 
      <section class="schedule-area">
        <div class="container">
            <div class="row">
                <div class="schedule" id="drive">
                    <div class="schedule-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/leas-car.jpg" alt="" />
                    </div>
                    <div class="schedule-content">
                        <h5>Contact Us</h5>
                        <p>We’d love to put you behind the wheel!
                            <!-- Please contact us to proceed -->
                        </p>
                        <a href="javscript:;" data-toggle="modal" data-target="#bookNow" class="schedule-btn">Contact Us</a>
                    </div>
                </div>
                <div>
                </div>
    </section>
    <!--end-->
    <!--faq-->
    <section class="faq-area" id="faq-area">
        <div class="container">
            <div class="row">
                <div class="leasing-heaidng">
                    <h4>FAQ&#39;S</h4></div>
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
                $chunked_posts = array_chunk( $custom_query, 6 );
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
     <?php 
            $args = array( 'posts_per_page' => -1, 'post_type' => 'blog', 'orderby' => 'post_date', 'order' =>'DESC');
            $postslist = get_posts( $args );
            foreach ( $postslist as $post ) :
            setup_postdata( $post ); 
        ?>
       <div id="see-blog<?php echo $post->ID;?>" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="model">
                    <div class="row">
                        <div id="title-blog">
                            <h5><?php the_title(); ?></h5>
                        </div>
                        <div id="description-blog">
                            <p>
                                <?php the_content(); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach;  wp_reset_postdata(); ?>

            <section class="blog" id="blog">
                <div class="leasing-heaidng">
                    <h4>Blog</h4></div>
                <div id="slider">
                    <?php 
            $args = array( 'posts_per_page' => -1, 'post_type' => 'blog', 'orderby' => 'post_date', 'order' =>'DESC');
            $postslist = get_posts( $args );
            foreach ( $postslist as $post ) :
            setup_postdata( $post ); 
        ?>

                        <div class="blog-item">
                            <div class="blog-img">
                                <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                            </div>
                            <h5><?php the_title(); ?></h5>
                            <p>
                                <?php  $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,30); ?>
                            </p>
                            <a href="javscript:;" data-toggle="modal" data-target="#see-blog<?php echo $post->ID;?>">Read More</a>
                        </div>

                        <?php
            endforeach; 
            wp_reset_postdata();
        ?>
                </div>
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
                            <div class="col-sm-3">
                                <div class="contact-detail-item">
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/phone.png" alt="" />
                                    </div>
                                    <p>Phone Number <a href="javascript:;">345-945-2211</a></p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="contact-detail-item">
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/envolope.png" alt="" />
                                    </div>
                                    <p>Sales Team Inbox <a href="mailto:sales@caymanleasing.com">sales@caymanleasing.com</a></p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="contact-detail-item">
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/envolope.png" alt="" />
                                    </div>
                                    <p>Support Team Inbox <a href="mailto:support@caymanleasing.com">support@caymanleasing.com</a></p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="contact-detail-item">
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/map-marker.png" alt="" />
                                    </div>
                                    <p>Address <a href="javascript:;">70 Hospital Road,<br /> George Town <!-- Cayman Falls Plaza, <br>(Across from the Westin Hotel) --></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="follow-us">
                        <ul>
                            <li><a href="https://www.facebook.com/caymanleasing/" target="_blank" class="facebook"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/caymanleasing/" target="_blank" class="google"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- <script src="http://html2canvas.hertzen.com/build/html2canvas.js"></script> -->
                <!--<script src="http://html2canvas.hertzen.com/dist/html2canvas.js"></script> -->
                <script src="<?php echo get_template_directory_uri(); ?>/js/html2canvas.js"></script>

                <script>
                    function codedecode1(price) {
                        $.ajax({
                            type: "POST",
                            url: "http://www.caymanleasing.com/ajaxcode.php",
                            data: dataString,
                            cache: false,
                            success: function(result) {
                                $('#show_number').html('$' + Math.ceil(result))

                                total24
                            }
                        });
                    }

                    function saveImage(varr, idd) {
                        var error = 0;
                        if ($('#first_name').val() == "") {
                            $('#first_name').val('');
                            $('#first_name_error').html('First Name is Required !').css('display', 'inline-block');
                            $('#first_name').addClass('error');
                            $('#first_name').focus();
                            error = 1;
                        }

                        if ($('#last_name').val() == "") {
                            $('#last_name').val('');
                            $('#last_name_error').html('Last Name is Required !').css('display', 'inline-block');
                            $('#last_name').addClass('error');
                            $('#last_name').focus();
                            error = 1;
                        }

                        if ($('#email').val() == "") {
                            $('#email').val('');
                            $('#email_error').html('Email is Required !').css('display', 'inline-block');
                            $('#email').addClass('error');
                            $('#email').focus();
                            error = 1;
                        }
                        if (error == 1) {
                            return false;
                        }

                        $('.modal').css('position', 'static');
                        html2canvas([document.getElementById(varr)], {
                            onrendered: function(canvas) {
                                var data = canvas.toDataURL('image/svg');
                                var data2 = $('#pdfimage').val();
                                $.ajax({
                                    type: "POST",
                                    url: "http://www.caymanleasing.com/save_image.php",
                                    data: {
                                        img: data,
                                        img_name: data2
                                    }
                                }).done(function(o) {
                                    $('.modal').css('position', 'fixed');
                                    $('#successpdf').html('Successfully Submitted - Download will start momentarily.');
                                    $('#downloadpdf').submit();
                                    return true;
                                    $('#downloadpdf')[0].reset();
                                });

                            }
                        });

                    }
                </script>   
               <?php get_footer(); ?>