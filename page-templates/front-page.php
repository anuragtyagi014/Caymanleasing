<?php

/**
 * Template Name: Front Page Template
 */

get_header(); ?>

<style type="text/css">
    .resource-btn-custom a {
        white-space: inherit;
        padding: 12px 10px;
    }

    h3.lease-title:after,
    h3.fleet-title:after {
        position: absolute;
        height: 7px;
        width: 65px;
        content: '';
        background: #e2e2e2;
        bottom: 0px;
        left: 0;
        right: 0;
        margin: auto;
    }

    section#lease-to-own .row {
        display: flex;
        flex-flow: wrap;
        justify-content: center;
    }

    h3.lease-title,
    h3.fleet-title {
        padding: 0 0 20px;
        margin: 0;
        text-align: center;
        font-size: 20px;
        color: #2c2f33;
        font-family: 'Raleway-Bold';
        position: relative;
        margin: 0 0 25px;
        width: 100%;
    }

    h3.fleet-title {
        padding: 60px 0 20px;
    }


    .pending_car {
        background-image: url("<?php echo get_template_directory_uri() . '/images/pending.png?sdfsdf'; ?>");
        position: absolute;
        opacity: .5;
        top: 0;
        height: 168px;
        width: 224px;
        left: 0;
        right: 0;
        margin: 0 auto;
    }

    .pending_car.sold_car {
        background-image: url(https://www.caymanleasing.com/wp-content/themes/caymanleasing/images/sold.png?esese);
        position: absolute;
        top: 0;
        height: 168px;
        width: 224px;
        left: 0;
        right: 0;
        margin: 0 auto;
        background-size: 100%;
        background-repeat: no-repeat;
        background-position: center;
        opacity: 0.6;
    }

    .pending_car.leased_cars {
        background-image: url(https://www.caymanleasing.com/wp-content/themes/caymanleasing/images/leased.png);
        position: absolute;
        top: 0;
        height: 168px;
        width: 224px;
        left: 0;
        right: 0;
        margin: 0 auto;
        background-size: 100%;
        background-repeat: no-repeat;
        background-position: center;
        opacity: 0.6;
    }

    .cars-content .price-refund ul {
        min-height: inherit !important;
    }

    .sale-boxes-home .cars-content .price-refund ul {
        min-height: inherit !important;
    }

    .sale_car {
        background-image: url("<?php echo get_template_directory_uri() . '/images/salenew.png?edrftgyh'; ?>");
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

    .modal-item-img {
        display: block;
        max-width: 100%;
        height: 427px;
        line-height: 1;
        width: 100%;
        vertical-align: middle;
        background-size: 100% !important;
        background-repeat: no-repeat !important;
    }

    p.notification-text {
        padding: 25px 15px;
        margin: 0;
    }

    .less-padding input[type="number"]#price_number::-webkit-input-placeholder,
    .less-padding input[type="number"]#price_number::-moz-input-placeholder,
    .less-padding input[type="number"]#price_number::-ms-input-placeholder {
        color: #909090;
    }

    .enq-form-new {
        padding: 0 15px;
    }

    .sale-boxes-home .cars-content .price-refund ul {
        min-height: inherit !important;
    }

    .description-area pre {
        overflow: inherit !important;
        width: 100% !important;
        box-sizing: border-box;
        white-space: pre-wrap;
        word-break: inherit;
    }


    /* new newsletter-banner */
    .schedule-area_new {
        background-color: #10417c;
        overflow: hidden;
    }

    .schedule-area_new .schedule-content::after {
        display: none;
    }

    .schedule-area_new .schedule {
        display: flex;
    }

    .schedule-area_new .schedule::after {
        display: none;
    }

    .schedule-area_new .schedule-img {
        float: none;
        width: 16%;
        align-self: center;
    }

    .schedule-area_new .schedule-content {
        width: 30%;
        padding-bottom: 0;
        padding-left: 20px;
    }

    .schedule-area_new .schedule-right-img {
        width: 14%;
        position: relative;
        margin-left: auto;
    }

    .schedule-area_new .schedule-form {
        width: 32%;
        padding-top: 20px;
        padding-right: 0px;
        padding-bottom: 20px;
    }

    .schedule-area_new .schedule-right-img img {
        position: absolute;
        width: 100%;
        top: 10px;
    }

    .schedule-area_new .schedule-form input {
        width: 100%;
        display: block;
    }

    .schedule-area_new .schedule-form input.cu-form-control {
        padding-left: 34px;
    }

    .schedule-area_new .schedule-form [data-name="email"] {
        position: relative;
    }

    .schedule-area_new .schedule-form [data-name="email"]::before {
        content: '';
        background-image: url(https://www.caymanleasing.com/wp-content/themes/caymanleasing/images/email.png);
        width: 20px;
        height: 20px;
        position: absolute;
        background-size: contain;
        background-repeat: no-repeat;
        top: 9px;
        left: 8px;
    }

    .schedule-area_new .schedule-content h5 {
        padding-top: 0;
        padding-bottom: 0;
        color: #97cfb6;
        font-size: 18px;
    }

    .schedule-area_new .schedule-content h5 span {
        background: #97cfb6;
        color: #fff;
        display: inline-block;
        padding: 2px 5px;
        font-size: 24px;
        border-radius: 4px;
        margin-left: 6px;
    }

    .schedule-area_new .schedule-content h3 {
        color: #fff;
        margin-top: 7px;
        font-weight: normal;
        font-size: 32px;
    }

    .schedule-area_new .schedule-form input.submit_btn {
        background: linear-gradient(-40deg, #7dbca0 0%, #97cfb5 100%);
        color: #fff;
        border: none;
        margin-top: 10px;
    }

    .schedule-area_new .schedule-form .wpcf7 form .wpcf7-response-output {
        margin: 0;
        margin-top: 10px;
        color: #fff;
        padding-left: 5px;
        padding-right: 5px;
    }

    .schedule-area_new .schedule-form .wpcf7 form.sent .wpcf7-response-output {
        border-color: #97cfb6;
    }

    .schedule-area_new .cu-form-group br {
        display: none;
    }

    .schedule-area_new .cu-form-group span.wpcf7-spinner {
        display: none;
    }

    .desktop-hide-heading {
        display: none;
    }

    h3.desktop-hide-heading {
        color: #FFF;
        font-size: 20px;
    }

    @media (max-width: 1199px) and (min-width: 991px) {
        .car-img {
            height: auto;
        }

        .schedule-area_new .schedule-content h5 {
            font-size: 14px;
        }

        .schedule-area_new .schedule-content h5 span {
            font-size: 18px;
        }

        .schedule-area_new .schedule-content h3 {
            font-size: 26px;
        }

        .schedule-content h5 {
            font-size: 18px;
        }
    }

    @media(max-width: 1023px) {

        .schedule-area_new .schedule-content,
        .schedule-area_new .schedule-form {
            width: 35%;
        }
    }

    @media (max-width: 767px) {
        #mobile-hidebox {
            display: none !important;
        }

        h3.lease-title,
        h3.fleet-title {
            padding: 30px 0 20px;
        }

        .description-area pre {
            overflow: inherit !important;
            width: 100% !important;
            box-sizing: border-box;
            white-space: pre-wrap;
            word-break: inherit;
        }

        .schedule-area_new .schedule-img {
            width: auto;
            max-width: 100%;
            margin-top: 10px;
        }

        .schedule-area_new .schedule {
            flex-wrap: wrap;
        }

        .schedule-area_new .schedule-content {
            width: 100%;
        }

        .schedule-area_new .schedule-form {
            width: 100%;
            padding-right: 0;
        }

        .schedule-area_new .schedule-right-img {
            width: 100%;
        }

        .schedule-area_new .schedule-right-img img {
            position: static;
            width: auto;
            max-width: 50%;
            margin: auto;
            display: block;
            margin-bottom: -60px;
        }
    }

    @media (max-width:480px) {
        .cars-gallery.cars_gallery .heading a {
            display: none;
        }

        .pending_car {
            background-image: url("<?php echo get_template_directory_uri() . '/images/pendingmobile.png'; ?>");
            position: absolute;
            top: 0;
            height: 100%;
            width: 351px;
            background-size: contain;
        }

        .desktop-hide-heading {
            display: block;
        }
    }

    @media (max-width: 400px) {
        .cars-gallery .modal-item-img {
            height: 224px !important;
            background-size: cover !important;
        }
    }
</style>

<!--banner-start-->
<div class="banner" id="home">
    <div class="banner_img">

        <?php $slider_image = get_field('slider_image');

        $slider_url = $slider_image['url'];

        if (!empty($slider_url)) { ?>

            <img src="<?php echo $slider_url; ?>" class="img-responsive">

        <?php } else { ?>

            <img src="<?php echo get_template_directory_uri(); ?>/images/banner-min.jpg" class="img-responsive">

        <?php } ?>

    </div>
    <div class="banner_content">
        <h3 class="desktop-hide-heading">Cayman Leasing Limited</h3>
        <ul class="address">
            <li class="heading__title"><b>Cayman Leasing Limited</b></li>
            <li><i class="fa fa-map-marker"></i> Cayman Leasing Address: 70 Hospital Road, George Town</li>
            <li><i class="fa fa-phone"></i> Call Cayman Leasing: <a href="tel:3459452211">345 945 2211</a></li>


        </ul>
        <ul>
            <li><a onclick="ShowHide()" class="browse_car">Browse Inventory</a></li>
        </ul>
    </div>
</div>

<section class="schedule-area_new" id="schedulearea">
    <div class="container">
        <div class="schedule_wrapper">
            <div class="schedule" id="drive">
                <div class="schedule-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/car_image.png" alt="" />
                </div>
                <div class="schedule-content">
                    <h5>Join Our <span>New Arrivals</span></h5>
                    <h3>Newsletter</h3>
                    <!-- <a href="javscript:;" data-toggle="modal" data-target="#bookNow"  class="schedule-btn">Request a Call Back</a> -->
                </div>
                <div class="schedule-form">
                    <?php echo do_shortcode('[contact-form-7 id="20667" title="Newsletter"]'); ?>
                </div>
                <div class="schedule-right-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/mascot.png" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<!--banner-end-->

<!--cars-gallery-->

<!-- Model Start for Pdf form-->
<div id="pdfform-submit" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Please provide some info and then your PDF download can begin</h4>
            </div>
            <div class="modal-body pdfform">
                <form action="<?php echo home_url('pdf'); ?>" id="downloadpdf" method="post">
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
                            <button type="button" onclick="return saveImage($('#model_id').val(), $('#pdfimage').val());">Submit</button>
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

<section class="cars-gallery cars_gallery" style="padding-top:60px;">
    <div class="container">
        <div class="row">
            <div class="heading">
                <a href="javascript:void(0);" class="inventory__btn" onclick="showhide()">Inventory</a>
                <!--<p class="notification-text">
					NEW STOCK ARRIVING SOON!! Thanks for attending our summer sale!!! -- We are closed for a much needed rest and reset!!! --- If you missed the sale and would like to be contacted about a vehicle when we reopen, please complete the below:
				</p>
				<div class="enq-form-new">
					<?php //echo do_shortcode('[contact-form-7 id="7" title="Contact Form"]'); 
                    ?>
				</div> -->
            </div>
        </div>
    </div>
</section>

<section class="cars-gallery" id="lease-to-own">
    <?php
    $args = array('posts_per_page' => -1, 'post_type' => 'lease-to-own',  'orderby' => 'post_date', 'order' => 'DESC', 'tax_query' => [
        [
            'taxonomy' => 'lease_category', //double check your taxonomy name in you dd 
            'field'    => 'slug',
            'terms'    => 'lease-to-own'
        ]
    ]);
    $postslist_v1 = get_posts($args);
    $post_chunk = array_chunk($postslist_v1, 8);
    foreach ($post_chunk as $postslist) : ?>
        <div class="container">
            <div class="row">
                <?php
                $count = 0;
                foreach ($postslist as $post) :
                    $count++;
                    setup_postdata($post);
                ?>
                    <div class="modal fade more-info" data-backdrop="static" data-keyboard="false" id="myModal<?php echo get_the_ID(); ?>" role="dialog">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div id="myCarousel<?php echo get_the_ID(); ?>" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">

                                            <?php for ($i = 1; $i <= 40; $i++) :

                                                $image =  get_field("image" . $i);

                                                if (!empty($image['url'])) : ?>

                                                    <div class="item <?php if ($i == 1) {
                                                                            echo 'active';
                                                                        } ?>">
                                                        <div class="modal-item-img" style="background: url('<?php echo $image['url']; ?>');"></div>

                                                    </div>

                                                <?php endif; ?>

                                            <?php endfor; ?>

                                        </div>

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

                                    <?php if ($post->post_title == "Pick your own!") { ?>

                                        <ul class="cal-popup">
                                            <li style="padding:8px 0;">
                                                <p>Price </p>
                                                <p><strong><input type="number" min="6000" placeholder="Enter Price" id="price_number"> </strong>
                                                    <span><button onclick="var price = $('#price_number').val(); if(price == ''){ $('#error_price').html('Price is required'); return false;}else{ $('#error_price').html(''); } if(price < 6000){ $('#error_price').html('Price must be $6000 or higher'); return false;}else{ $('#error_price').html(''); }  var total = <?php echo get_field('formula_12_month'); ?>; $('#show_number').html('$'+Math.ceil(total)+'/month'); var total24 = <?php echo get_field('formula_24_month'); ?>; $('#show_number24').html('$'+Math.ceil(total24)+'/month');">Calculate</button></span>
                                                </p>
                                                <div id="error_price" style="color: red; font-size: 10px;"></div>
                                            </li>
                                            <li style="padding:8px 0;">
                                                <p>12-Month Lease-to-Own <br><strong id="show_number">$</strong></p>
                                            </li>
                                            <li style="padding:8px 0;">
                                                <p>24-Month Lease-to-Own <br><strong id="show_number24">$</strong></p>
                                            </li>
                                        </ul>

                                    <?php } ?>

                                    <div class="pop-cars-btn">
                                        <a href="javscript:;" data-toggle="modal" data-target="#test-drive" onclick="$('#vehicle1').val('<?php the_title(); ?>'); <?php if ($post->post_title == " Pick your own! ") { ?> $('#program_choice_hide').hide(); $('#program_choice_show').show(); <?php } ?>">Request a Call Back</a>

                                    </div>
                                    <div class="pop-cars-btn">
                                        <div class="post_id" style="display: none;"><?php echo $post->ID; ?></div>
                                        <a href="javscript:;" value="<?php echo $post->ID; ?>" data-toggle="modal" data-target="#emailNow" class="email-info">EMAIL YOURSELF THIS INFORMATION</a>

                                    </div>
                                    <!--  <div class="pop-cars-btn">

                                    <?php if ($post->post_title == "Pick your own!") { ?>

                                    <a href="<?php the_field('pdf'); ?>" target="_blank">Download Application Form</a>

                                    <?php } else { ?>

                                   <button type="button" data-toggle="modal" onclick="$('#pdfimage').val('<?php echo $rand; ?>'); $('#post_id').val('<?php echo $post->ID; ?>'); $('#model_id').val('popoudiv<?php echo $rand; ?>');" data-target="#pdfform-submit">Download PDF</button>
                                    
                                    <?php } ?>
                               
                               </div> -->

                                    <button type="button" class="btn btn-default toggle-btn" data-dismiss="modal" style="margin-bottom:80px;">×</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xs-6 col-md-3 col-lg-3">
                        <div class="cars caritem-<?php echo get_the_ID(); ?>">
                            <div class="car-title">
                                <h5><?php the_title(); ?></h5>
                            </div>

                            <div class="car-img">

                                <?php if (get_field('status_pending')) {
                                    $thumb_class .= " car_pending";
                                } ?>

                                <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal<?php echo $post->ID; ?>">

                                    <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                                    <?php if (get_field('status_sold')) { ?>
                                        <div class="pending_car sold_car">&nbsp;</div>
                                    <?php } ?>
                                    <?php if (get_field('status_leased')) { ?>
                                        <div class="pending_car leased_cars">&nbsp;</div>
                                    <?php } ?>
                                    <?php if (get_field('status_pending')) { ?>

                                        <div class="pending_car">&nbsp;</div>

                                    <?php } ?>

                                    <?php if (get_field('car_sell')) { ?>

                                        <div class="sale_car">&nbsp;</div>

                                    <?php } ?>

                                    <ul>
                                        <li><i class="fa fa-arrow-circle-left"></i></li>
                                        <li><i class="fa fa-arrow-circle-right"></i></li>
                                    </ul>
                                    <div class="product-badge">
                                        <img src="/wp-content/uploads/2022/07/fleet-sale2.png" />
                                    </div>
                                </a>
                            </div>

                            <div class="cars-content">
                                <div class="price-refund">

                                    <?php if ($post->post_title == "Pick your own!") { ?>

                                        <ul class="less-padding">
                                            <li>
                                                <!--<p>Lease-to-Own</p>-->
                                                <p>Lease-to-Own <strong> $475/month</strong></p>
                                            </li>
                                        </ul>

                                    <?php } else { ?>

                                        <ul>

                                            <?php if (get_field('buy')) : ?>

                                                <li>
                                                    <!--<p>Buy </p>-->
                                                    <?php $price_color = get_field('car_sell'); ?>
                                                    <p <?php if ($price_color) {
                                                        } else { ?> class="price-color" <?php } ?>><strong><?php echo get_post_meta($post->ID, 'buy', true); ?></strong></p>
                                                </li>

                                            <?php endif; ?>

                                            <?php if (get_field('lease')) : ?>

                                                <li>
                                                    <p>Lease</p>
                                                    <p>Lease-to-Own <strong>$<?php echo get_post_meta($post->ID, 'lease', true); ?>/month</strong></p>
                                                </li>

                                            <?php endif; ?>

                                            <?php if (get_field('lease_to_own')) : ?>

                                                <li>
                                                    <!--<p>Lease-to-Own</p>-->
                                                    <p>Lease-to-Own<strong> $<?php echo get_post_meta($post->ID, 'lease_to_own', true); ?>/month</strong></p>
                                                </li>

                                            <?php endif; ?>

                                        </ul>

                                    <?php } ?>
                                </div>
                                <div class="drive-btn">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal<?php echo $post->ID; ?>" class="test-btn"><span><img src="<?php echo get_template_directory_uri(); ?>/images/car-icon.png" alt="" /></span> More Info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php if (!empty($postslist) && count($postslist) == 8) { ?>
            <section class="schedule-area" id="schedulearea">
                <div class="container">
                    <div class="row">
                        <div class="schedule col-xs-12" id="drive">
                            <div class="schedule-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/leas-car.jpg" alt="" />
                            </div>
                            <div class="schedule-content">
                                <h5>Request a Call Back from Cayman Leasing</h5>
                                <p>We’d love to put you behind the wheel!</p>
                                <a href="javscript:;" data-toggle="modal" data-target="#bookNow" class="schedule-btn">Request a Call Back</a>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <?php }
    endforeach; ?>


    <!--For Buy--->
    <?php
    $args = array('posts_per_page' => -1, 'post_type' => 'lease-to-own',  'orderby' => 'post_date', 'order' => 'DESC', 'tax_query' => [
        [
            'taxonomy' => 'lease_category', //double check your taxonomy name in you dd 
            'field'    => 'slug',
            'terms'    => 'buy'
        ]
    ]);
    $postslist = get_posts($args);
    if (!empty($postslist)) {
    ?>

        <?php
    }

    $count = 0;
    foreach ($postslist as $post) :
        $count++;
        setup_postdata($post);

        if ($count && $count % 9 == 0) { ?>

            <!--test-drive-->
            <section class="schedule-area" id="schedulearea">
                <div class="container">
                    <div class="row">
                        <div class="schedule" id="drive">
                            <div class="schedule-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/leas-car.jpg" alt="" />
                            </div>
                            <div class="schedule-content">
                                <h5>Request a Call Back from Cayman Leasing</h5>
                                <p>We’d love to put you behind the wheel!</p>
                                <a href="javscript:;" data-toggle="modal" data-target="#bookNow" class="schedule-btn">Request a Call Back</a>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--end-->
        <?php } ?>

        <div class="modal fade more-info" data-backdrop="static" data-keyboard="false" id="myModal<?php echo get_the_ID(); ?>" role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-body">
                        <div id="myCarousel<?php echo get_the_ID(); ?>" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">

                                <?php for ($i = 1; $i <= 40; $i++) :

                                    $image =  get_field("image" . $i);

                                    if (!empty($image['url'])) : ?>

                                        <div class="item <?php if ($i == 1) {
                                                                echo 'active';
                                                            } ?>">
                                            <div class="modal-item-img" style="background: url('<?php echo $image['url']; ?>');"></div>

                                        </div>

                                    <?php endif; ?>

                                <?php endfor; ?>

                            </div>

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

                        <?php if ($post->post_title == "Pick your own!") { ?>

                            <ul class="cal-popup">
                                <li style="padding:8px 0;">
                                    <p>Price </p>
                                    <p><strong><input type="number" min="6000" placeholder="Enter Price" id="price_number"> </strong>
                                        <span><button onclick="var price = $('#price_number').val(); if(price == ''){ $('#error_price').html('Price is required'); return false;}else{ $('#error_price').html(''); } if(price < 6000){ $('#error_price').html('Price must be $6000 or higher'); return false;}else{ $('#error_price').html(''); }  var total = <?php echo get_field('formula_12_month'); ?>; $('#show_number').html('$'+Math.ceil(total)+'/month'); var total24 = <?php echo get_field('formula_24_month'); ?>; $('#show_number24').html('$'+Math.ceil(total24)+'/month');">Calculate</button></span>
                                    </p>
                                    <div id="error_price" style="color: red; font-size: 10px;"></div>
                                </li>
                                <li style="padding:8px 0;">
                                    <p>12-Month Lease-to-Own <br><strong id="show_number">$</strong></p>
                                </li>
                                <li style="padding:8px 0;">
                                    <p>24-Month Lease-to-Own <br><strong id="show_number24">$</strong></p>
                                </li>
                            </ul>

                        <?php } ?>

                        <div class="pop-cars-btn">
                            <a href="javscript:;" data-toggle="modal" data-target="#test-drive" onclick="$('#vehicle1').val('<?php the_title(); ?>'); <?php if ($post->post_title == " Pick your own! ") { ?> $('#program_choice_hide').hide(); $('#program_choice_show').show(); <?php } ?>">Request a Call Back</a>

                        </div>
                        <div class="pop-cars-btn">
                            <div class="post_id" style="display: none;"><?php echo $post->ID; ?></div>
                            <a href="javscript:;" value="<?php echo $post->ID; ?>" data-toggle="modal" data-target="#emailNow" class="email-info">EMAIL YOURSELF THIS INFORMATION</a>

                        </div>


                        <button type="button" class="btn btn-default toggle-btn" data-dismiss="modal" style="margin-bottom:80px;">×</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-xs-6 col-md-3 col-lg-3 ">
            <div class="cars caritem-<?php echo get_the_ID(); ?>">
                <div class="car-title">
                    <h5><?php the_title(); ?></h5>
                </div>

                <div class="car-img">

                    <?php if (get_field('status_pending')) {
                        $thumb_class .= " car_pending";
                    } ?>

                    <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal<?php echo $post->ID; ?>">

                        <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                        <?php if (get_field('status_sold')) { ?>
                            <div class="pending_car sold_car">&nbsp;</div>
                        <?php } ?>
                        <?php if (get_field('status_leased')) { ?>
                            <div class="pending_car leased_cars">&nbsp;</div>
                        <?php } ?>
                        <?php if (get_field('status_pending')) { ?>

                            <div class="pending_car">&nbsp;</div>

                        <?php } ?>

                        <?php if (get_field('car_sell')) { ?>

                            <div class="sale_car">&nbsp;</div>

                        <?php } ?>

                        <ul>
                            <li><i class="fa fa-arrow-circle-left"></i></li>
                            <li><i class="fa fa-arrow-circle-right"></i></li>
                        </ul>
                        <div class="product-badge">
                            <img src="/wp-content/uploads/2022/07/fleet-sale2.png" />
                        </div>
                    </a>
                </div>

                <div class="cars-content">
                    <div class="price-refund">

                        <?php if ($post->post_title == "Pick your own!") { ?>

                            <ul class="less-padding">
                                <li>
                                    <!--<p>Lease-to-Own</p>-->
                                    <p> Starting at<strong> $475/month</strong></p>
                                </li>
                            </ul>

                        <?php } else { ?>

                            <ul>

                                <?php if (get_field('buy')) : ?>

                                    <li>
                                        <!--<p>Buy </p>-->
                                        <?php $price_color = get_field('car_sell'); ?>
                                        <p <?php if ($price_color) {
                                            } else { ?> class="price-color" <?php } ?>><strong><?php echo get_post_meta($post->ID, 'buy', true); ?></strong></p>
                                    </li>
                                    <li>

                                        <p>(PARTS RECOMMENDED)</p>
                                    </li>

                                <?php endif; ?>

                                <?php if (get_field('lease')) : ?>

                                    <li>
                                        <p>Lease</p>
                                        <p>Starting at <strong>$<?php echo get_post_meta($post->ID, 'lease', true); ?>/month</strong></p>
                                    </li>

                                <?php endif; ?>

                                <?php if (get_field('lease_to_own')) : ?>

                                    <li>
                                        <!--<p>Lease-to-Own</p>-->
                                        <p>Starting at<strong> $<?php echo get_post_meta($post->ID, 'lease_to_own', true); ?>/month</strong></p>
                                    </li>

                                <?php endif; ?>

                            </ul>

                        <?php } ?>
                    </div>
                    <div class="drive-btn">
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal<?php echo $post->ID; ?>" class="test-btn"><span><img src="<?php echo get_template_directory_uri(); ?>/images/car-icon.png" alt="" /></span> More Info</a>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>


    <!--End Buy-->

    </div>
    <!----For Buy--->
    </div>
</section>
<!--end-->

<!--leasing-->
<section class="leasing-programs-area" id="lease-program">
    <div class="container">
        <div class="row">
            <div class="leasing-heaidng">
                <h4>How Cayman Leasing Works</h4>
            </div>
            <div class="col-sm-6">
                <div class="leasing-programs">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/lease.png" alt="" />
                    </div>
                    <a onClick="leaseToOwn()" href="#lease-to-own">
                        <h5>Lease-to-Own</h5>
                    </a>
                    <p>
                        <?php echo get_post_meta(5, 'lease', true); ?>
                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="leasing-programs">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/leas-to-own.png" alt="" />
                    </div>
                    <a onClick="leaseToOwn()" href="#lease-to-own">
                        <h5>$100 Purchase Option</h5>
                    </a>
                    <p>
                        <?php echo get_post_meta(5, 'lease-to-own', true); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end-->

<!--test-drive-->
<!-- <section class="schedule-area">
	<div class="container">
		<div class="row">
			<div class="schedule" id="drive">
				<div class="schedule-img">
					<img src="<?php echo get_template_directory_uri(); ?>/images/leas-car.jpg" alt=""/>
				</div>
				<div class="schedule-content">
					<h5>Request a Call Back</h5>
					<p>We’d love to put you behind the wheel!</p>
					<a  href="javscript:;" data-toggle="modal" data-target="#bookNow"  class="schedule-btn">Request a Call Back</a>
				</div>
			</div>
		<div>
	</div>
</section> -->
<!--end-->

<!--test-drive-->
<section class="schedule-area_new" id="schedulearea">
    <div class="container">
        <div class="schedule_wrapper">
            <div class="schedule" id="drive">
                <div class="schedule-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/car_image.png" alt="" />
                </div>
                <div class="schedule-content">
                    <h5>Join Our <span>New Arrivals</span></h5>
                    <h3>Newsletter</h3>
                    <!-- <a href="javscript:;" data-toggle="modal" data-target="#bookNow"  class="schedule-btn">Request a Call Back</a> -->
                </div>
                <div class="schedule-form">
                    <?php echo do_shortcode('[contact-form-7 id="20667" title="Newsletter"]'); ?>
                </div>
                <div class="schedule-right-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/mascot.png" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<!--end-->
<!--leasing-->
<section class="leasing-programs-area" id="mobile-hidebox">
    <div class="container">
        <div class="row">
            <div class="how-it-work" style="padding-top:80px;">
                <div class="col-sm-3">
                    <div class="slelct-car">
                        <div class="icon">
                            <!-- <img src="<?php //echo get_template_directory_uri(); 
                                            ?>/images/slelect-car.png" alt=""/> -->
                            <img src="<?php echo get_template_directory_uri(); ?>/images/slelect-car-new.png" alt="" />
                        </div>
                        <h4>Select</h4>
                        <?php echo get_post_meta(5, 'select_a_car', true); ?>
                        <?php the_field('select_a_car'); ?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="slelct-car apply">
                        <div class="icon">
                            <!-- <img src="<? php // echo get_template_directory_uri(); 
                                            ?>/images/apply.png" alt=""/> -->
                            <img src="<?php echo get_template_directory_uri(); ?>/images/apply-new.png" alt="" />
                        </div>
                        <h4>Apply</h4>
                        <?php echo get_post_meta(5, 'apply', true); ?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="slelct-car apply apply_pay">
                        <div class="icon">
                            <!-- <img src="<?php // echo get_template_directory_uri(); 
                                            ?>/images/drive-aways.png" alt=""/> -->
                            <img src="<?php echo get_template_directory_uri(); ?>/images/drive-aways-new-new1.png" alt="" />
                        </div>
                        <h4>Pay</h4>
                        <?php echo get_post_meta(5, 'drive_away', true); ?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="slelct-car apply apply_new">
                        <div class="icon">
                            <!-- <img src="<?php // echo get_template_directory_uri(); 
                                            ?>/images/applys.png" alt=""/> -->
                            <img src="<?php echo get_template_directory_uri(); ?>/images/applys-new.png" alt="" />
                        </div>
                        <h4>Sign</h4>
                        <?php echo get_post_meta(5, 'apply', true); ?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="slelct-car">
                        <div class="icon">
                            <!-- <img src="<?php // echo get_template_directory_uri(); 
                                            ?>/images/drive-aways.png" alt=""/> -->
                            <img src="<?php echo get_template_directory_uri(); ?>/images/drive-aways-new.png" alt="" />
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
<section class="blog" id="blog">
    <div class="facebook_post">
        <div class="container">
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-ca9700c6-4de2-4948-ac13-5cdce221afeb"></div>
        </div>
    </div>
</section>
<!--what-our-client-says-->
<section class="what-clietn-says" id="client" style="padding:0;">
    <!--<div class="container">
    	<div class="row">
        	<div class="leasing-heaidng"><h4>what our clients say about us</h4></div>
        	    <div id="man" class="slider">
        		<?php $args = array(
                    'post_type' => 'testimonials',
                    'posts_per_page' => -1,
                    'orderby' => 'post_date',
                    'order' => 'DESC'
                );

                $postslist = get_posts($args);

                foreach ($postslist as $post) :

                    setup_postdata($post); ?> 
            
	            	<div class="clients-testimonial">
	                	<div class="icon">
	                        <img  src="<?php the_post_thumbnail_url(); ?>" class="img-responsive img-circle wp-post-image" alt="" >	
	                    </div>
	                    <h4><?php the_title(); ?><span><?php echo get_field("testimonial_name", get_the_ID()); ?></span></h4>
	                    <p><i class="fa fa-quote-left"></i> <?php the_content(); ?><i class="fa fa-quote-right"></i></p>
	                </div>
	              
	            <?php endforeach; ?>

            </div>
        </div>
    </div>-->
</section>
<!--end-->

<!--test-drive-->
<section class="schedule-area" id="schedulearea">
    <div class="container">
        <div class="row">
            <div class="schedule" id="drive">
                <div class="schedule-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/leas-car.jpg" alt="">
                </div>
                <div class="schedule-content">
                    <h5>Request a Call Back from Cayman Leasing</h5>
                    <p>We’d love to put you behind the wheel!</p>
                    <a href="javscript:;" data-toggle="modal" data-target="#bookNow" class="schedule-btn">Request a Call Back</a>
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
                <h4>Cayman Leasing FAQ’s</h4>
            </div>
            <?php global $post;

            $args = array(
                'post_type'              => 'faq',
                'post_status'          => 'publish',
                'ignore_sticky_posts' => 1,
                'posts_per_page'       => 28,
                'orderby'             => 'post_date',
                'order'               => 'ASC'
            );

            $custom_query = get_posts($args);

            $chunked_posts = array_chunk($custom_query, 11);

            foreach ($chunked_posts as $custom_post) : ?>

                <div class="col-sm-6">
                    <div class="faq">
                        <?php foreach ($custom_post as $post) : setup_postdata($post); ?>
                            <h4><?php the_title(); ?></h4>
                            <?php the_content(); ?>
                        <?php endforeach; ?>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>
<!--end-->
<!--Resources section-->
<!--<section class="resource-area-sec" id="resourcearea">
    <div class="container">
        <div class="leasing-heaidng"><h4>Cayman Leasing Resources</h4></div>
            <div class="resource text-center" id="resource">
                <div class="row">
					<div class="col-sm-3 resource-pad resource-btn-custom">
                      <a  href="javscript:;" data-toggle="modal" data-target="#resourceModal2" class="btn btn-primary btn-resource" >Sample Contract</a>
                    </div>
                    <div class="col-sm-3 resource-pad resource-btn-custom">
                      <a  href="javscript:;" data-toggle="modal" data-target="#resourceModal4" class="btn btn-primary btn-resource" >Cash Deposit Example </a>
                    </div>

                    <?php global $post;

                    $args = array(
                        'post_type'           => 'resources',
                        'post_status'         => 'publish',
                        // 'ignore_sticky_posts' => 1,
                        'posts_per_page'      => -1,
                        'orderby'             => 'post_date',
                        'order'               => 'ASC'
                    );

                    $custom_query = get_posts($args);

                    foreach ($custom_query as $custom_post) :
                        //print_r($custom_post->post_title);
                    ?>
            					<div class="col-sm-6 resource-pad resource-btn-custom">
            						<a href="javscript:;" data-toggle="modal" data-target="#resource_Modal" class="btn btn-primary btn-resource open_pdf_form_modal" data-value="<?php echo get_field('upload_file', $custom_post->ID); ?>"><?php echo $custom_post->post_title; ?></a>
            					</div>
                            <?php endforeach; ?>    
 </div>
            </div>
    </div>
</section>--->
<!--end-->

<section class="upload-doc-sec" id="upload-doc-sec">
    <div class="container">
        <div class="leasing-heaidng">
            <h4>Upload Document to Cayman Leasing</h4>
        </div>
        <div class="upload-form">
            <?php echo do_shortcode('[contact-form-7 id="15025" title="Upload Document"]'); ?>
        </div>
    </div>
</section>

<!--blog-->


<!-- <section class="blog" id="blog">
    <div class="leasing-heaidng">
        <h4>Blog</h4>
    </div>
    <div id="slider">
    <?php

    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'blog',
        'orderby' => 'post_date',
        'order' => 'DESC'
    );

    $postslist = get_posts($args);

    foreach ($postslist as $post) :

        setup_postdata($post); ?>

        <div class="blog-item">
		    <div class="blog-img">
		        <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
		    </div>
		    <h5><?php the_title(); ?></h5>
		    <p>
		        <?php $excerpt = get_the_excerpt();
                echo string_limit_words($excerpt, 30); ?>
		    </p>
		    <a href="javscript:;" data-toggle="modal" data-target="#see-blog<?php echo $post->ID; ?>">Read More</a>
		</div>

    <?php endforeach;
    wp_reset_postdata(); ?>

    </div>
</section> -->

<section class="schedule-area_new" id="schedulearea">
    <div class="container">
        <div class="schedule_wrapper">
            <div class="schedule" id="drive">
                <div class="schedule-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/car_image.png" alt="" />
                </div>
                <div class="schedule-content">
                    <h5>Join Our <span>New Arrivals</span></h5>
                    <h3>Newsletter</h3>
                    <!-- <a href="javscript:;" data-toggle="modal" data-target="#bookNow"  class="schedule-btn">Request a Call Back</a> -->
                </div>
                <div class="schedule-form">
                    <?php echo do_shortcode('[contact-form-7 id="20667" title="Newsletter"]'); ?>
                </div>
                <div class="schedule-right-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/mascot.png" alt="" />
                </div>
            </div>
            <div>
            </div>
</section>

<section class="contect-area" id="contact">

    <section class="schedule-area schedule-area-for-mobile" style="display:none;">
        <div class="container">
            <div class="row">
                <div class="schedule" id="drive">
                    <div class="schedule-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/leas-car.jpg" alt="" />
                    </div>
                    <div class="schedule-content">
                        <h5>Request a Call Back from Cayman Leasing</h5>
                        <p>We’d love to put you behind the wheel!</p>
                        <a href="javscript:;" data-toggle="modal" data-target="#bookNow" class="schedule-btn">Request a Call Back</a>
                    </div>
                </div>
                <div>
                </div>
    </section>

    <div class="container">

        <div class="contact-detail">
            <div class="row">
                <div class="col-xs-12">
                    <div class="leasing-heaidng">
                        <h4>Cayman Leasing Limited</h4>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-detail-item">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/phone.png" alt="" />
                        </div>
                        <p>Cayman Leasing Phone Number <a href="tel:345-945-2211">345-945-2211</a></p>
                    </div>
                </div>
                <!-- <div class="col-sm-3">
                    <div class="contact-detail-item">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/envolope.png" alt="" />
                        </div>
                        <p>Sales Team Inbox <a href="mailto:sales@caymanleasing.com">sales@caymanleasing.com</a></p>
                    </div>
                </div> -->
                <div class="col-sm-4">
                    <!-- <div class="contact-detail-item">
                        <div class="icon">
                            <img src="<?php //echo get_template_directory_uri(); 
                                        ?>/images/envolope.png" alt="" />
                        </div>
                        <p>Support Team Inbox <a href="mailto:support@caymanleasing.com">support@caymanleasing.com</a></p>
                    </div>-->
                </div>
                <div class="col-sm-4">
                    <div class="contact-detail-item">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/map-marker.png" alt="" />
                        </div>
                        <p>Cayman Leasing Address <a href="https://goo.gl/maps/9rBRJHavpnumnu1n8" target="_blank">70 Hospital Road,<br /> George Town</a></p>
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
</section>


<!-- resources modal  -->
<div id="resource_Modal" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false" style="display: none;">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <div class="model">
            <form method="post" action="" id="email_resource_form" class="email-resource-form" novalidate="novalidate" autocomplete="off">
                <span id="sucess_resource_output" style="color:green;"></span>
                <div id="bodyArea">
                    <div class="formpannel">
                        <input type="hidden" value="" id="pdf_name" name="pdf_name">
                        <p>
                            <label for="first_name">First Name: *</label>
                            <input type="text" name="first_name">
                        </p>
                        <p>
                            <label for="last_name">Last Name: *</label>
                            <input type="text" name="last_name">
                        </p>
                        <p>
                            <label for="email">Email: *</label>
                            <input type="email" name="email">
                        </p>
                        <p>
                            <input type="submit" value="Send">
                            <input type="reset" name="button2" value="Reset">
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php get_footer();

// print_r($post_chunk);
?>