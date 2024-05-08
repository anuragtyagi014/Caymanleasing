<?php
/**
 * The Header template for our theme
 */
?>
<!DOCTYPE html>
<!-- <html class="ie ie7" <?php //language_attributes(); 
                            ?>>

<html class="ie ie8" <?php //language_attributes(); 
                        ?>> -->
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="description" content="Buy now or lease-to-own and buy for $100 at completion. Used car dealer in Cayman.">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon-new.ico">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/slick.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/leasstyle-20.css?<?php echo date('ms'); ?>" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/local.css?ver=<?php echo date('ms'); ?>" rel="stylesheet">

    <!-- Facebook pixel code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '589668384476157');
        fbq('track', 'PageView');
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 965363533 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-965363533"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-965363533');
    </script>
    <style type="text/css">
        @media (max-width: 749px) {

            section#lease-to-own,
            section#lease-program,
            section#schedulearea,
            section#blog,
            section#faq-area,
            section#resourcearea,
            section#upload-doc-sec,
            section#client,
            section#contact {
                display: none;
            }

        }
    </style>
    <style>
        .OuM0TYTNYMkONwjME1ADdmTxIZMTgDw {
            display: none !important;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let divc = document.querySelectorAll('div[style]');
            for (let i = 0, len = divc.length; i < len; i++) {
                let actdisplay = window.getComputedStyle(divc[i], null).display;
                let actclear = window.getComputedStyle(divc[i], null).clear;

                if (actdisplay == 'block' && actclear == 'both') {
                    divc[i].remove();
                }
            }
        });
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "Cayman Leasing",
            "url": "https://www.caymanleasing.com/",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "{search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Cayman Leasing",
            "url": "https://www.caymanleasing.com/",
            "logo": "https://www.caymanleasing.com/wp-content/themes/caymanleasing/images/logo.png",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "345-945-2211",
                "contactType": "customer service",
                "areaServed": "KY",
                "availableLanguage": "en"
            },
            "sameAs": [
                "https://www.facebook.com/caymanleasing/",
                "https://www.instagram.com/caymanleasing/"
            ]
        }
    </script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=589668384476157&ev=PageView&noscript=1" /></noscript>

    <!-- model for slider box here -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" id="abbb" role="listbox">
                            <div class="item active">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/blog_03.png" alt="Chania">
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/blog_05.png" alt="Chania">
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/blog_07.png" alt="Flower">
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/blog_09.png" alt="Flower">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <i class="fa fa-angel-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <i class="fa fa-angel-left" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End here -->

    <!--model-->
    <div id="see-avaa" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="model">
                <form method="post" action="" id="first-form" class="request-booking">
                    <span id="error_book"></span>
                    <span id="sucess_book"></span>
                    <div class="form-field">
                        <label for="contact_phone">First Name: *</label>
                        <input type="text" name="fname" id="fname">
                    </div>
                    <div class="form-field">
                        <label for="contact_phone">Last Name: *</label>
                        <input type="text" name="lname" id="lname" required="required">
                    </div>
                    <div class="form-field">
                        <label for="contact_phone">Email: *</label>
                        <input type="email" name="bookemail" id="bookemail" required="required">
                    </div>
                    <div class="form-field">
                        <label for="contact_phone">Phone Number: *</label>
                        <input type="text" name="phone" id="phone5" required="required">
                    </div>
                    <div class="form-field">
                        <label for="date_drive">Name of Employer: *</label>
                        <input type="text" name="emp_name" id="date_drive3669" required="required" name="date_drive">
                    </div>
                    <div class="form-field">
                        <label for="time_drive">Job Title: *</label>
                        <input type="text" name="job_title" id="time_drive3669" required="required" name="time_drive">
                    </div>
                    <div class="form-field">
                        <label for="contact_phone">Vehicle: *</label>
                        <input type="text" name="cat" id="category_id" required="required">
                    </div>
                    <!--  <div class="form-field">
                    <label for="other_note">Other Notes: </label>
                    <textarea name="other_note" id="other_note3669"></textarea>
                </div> -->
                    <div class="form-field">
                        <input type="submit" name="book_order" id="book_order" value="Send">
                        <input type="reset" name="button2" id="button2" value="Reset">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end-->

    <style type="text/css">
        #calcpopup .form-field label,
        #calcpopup .form-field a.btn {
            width: 47%;
            float: left;
            display: block;
            padding: 5px 0;
            font-size: 15px;
            margin: 10px 0 0 0;
        }

        #calcpopup .form-field a.btn {
            width: 200;
            display: inline-block;
        }

        #calcpopup .form-field {
            padding: 5px 0;
        }

        #calcpopup .form-field input[type="text"],
        #calcpopup .form-field input[type="date"] {
            width: 50%;
            text-align: right;
            padding-right: 20px;
            float: right;
            display: inline-block;
            background: #fff;
            color: #10417c;
            font-size: 16px;
            height: 40px;
            border: 2px solid #10417c;
            text-transform: uppercase;
            font-weight: bold;
            border-radius: 20px;
            margin: 5px 0 0 0;
        }

        #calcpopup .clear-fix {
            clear: both;
            float: none;
        }

        div#test-drive {
            background: rgba(0, 0, 0, 0.76);
        }

        div#test-drive .modal-dialog {
            left: 50%;
            top: 0%;
            right: auto;
            bottom: auto;
            transform: translate(-50%, -0%);
        }

        #test-drive .formpannel p input[type="email"],
        #test-drive .formpannel p textarea,
        #test-drive .formpannel p input[type="text"] {
            width: 100%
        }

        #calcpop .form-field input[disabled] {
            -webkit-text-fill-color: #10417c;
            -webkit-opacity: 1;
            background: #fff !important;
            border: 2px solid #10417c !important;
        }

        .calculationsec {
            background-color: #d8d8d8;
            padding: 20px;
        }

        a#calculate_results {
            background-color: #10417c;
            color: #FFF;
            font-size: 16px;
            transition: all .3s ease;
        }

        a#calculate_results:hover {
            color: #FFF !important;
            background-color: #667e8e !important;
        }

        a#calculate_results:after {
            display: none;
        }

        div#message_validate p {
            text-align: center;
            color: #ff2d00;
        }

        .disclaimer ul li {
            list-style: outside;
        }

        .dollorsign {
            float: left;
            width: 3%;
            padding-right: 5px;
            margin: 16px 0 0;
            text-align: right;
        }

        #calcpop .form-field label small {
            display: block;
            padding-top: 5px;
            width: 100%;
        }

        body.modal-open.calcOpen {
            position: fixed;
            width: 100%;
        }

        .client_exist {
            padding: 5px 0 10px 0px;
            font-size: 15px;
            font-weight: 700;
            float: left;
            width: 100%;
        }

        .radio-button-yesno {
            padding-right: 10px;
        }

        .notice-box-text h3 {
            color: #51cbd4;
            font-family: 'Raleway';
            font-size: 30px;
            margin: 0;
        }

        .notice-box-text h3 span {
            font-size: 36px;
            background: #51cbd4;
            color: #fff;
            display: inline-block;
            padding: 5px 10px;
            border-radius: 6px;
            font-weight: 600;
            margin-left: 3px;
            letter-spacing: 3px;
        }

        #announcementmodal .schedule-form input.cu-form-control {
            width: 100%;
            max-width: 360px;
            box-shadow: 0 0 8px rgb(0 0 0 / 15%);
            border: none;
            -webkit-appearance: none;
            -webkit-box-shadow: 0 0 8px rgb(0 0 0 / 15%);
        }

        #announcementmodal .schedule-form input.submit_btn {
            width: 100%;
            max-width: 360px;
            margin-top: 10px;
            background: linear-gradient(-40deg, #1b4993 0%, #2f63b5 100%);
            color: #fff;
            border: none;
        }

        #announcementmodal .schedule-form {
            margin-top: 20px;
        }

        #announcementmodal .wpcf7 form .wpcf7-response-output {
            margin-top: 10px;
            margin-bottom: 0;
            margin-left: 0;
        }

        .notice-box-text h2 {
            color: #3064b5;
            font-size: 45px;
            font-family: 'Raleway';
            margin: 0;
            margin-top: 10px;
            font-weight: 400;
        }

        .notice-box-text {
            text-align: left;
        }

        #announcementmodal .modal-body .notice-box-text img.car-img {
            max-width: 215px;
            height: auto !important;
            margin: 0 0 20px;
        }

        .notice-box-in {
            display: flex;
        }

        #announcementmodal .modal-body .notice-box-img img {
            height: 100%;
        }

        .form-box input {
            border: none !important;
            box-shadow: 0 9px 15px rgb(0 0 0 / 20%);
            padding: 15px 10px 14px 40px;
            border-radius: 8px;
            font-family: 'Raleway-Medium';
            font-size: 16px;
        }

        .form-box .form-box-row {
            display: flex;
        }

        .form-box .form-field {
            padding: 10px;
        }

        .send-btn input {
            background: #3064b5 !important;
            background: -moz-linear-gradient(left, #3064b5 0%, #1b4a93 100%) !important;
            background: -webkit-linear-gradient(left, #3064b5 0%, #1b4a93 100%) !important;
            background: linear-gradient(to right, #3064b5 0%, #1b4a93 100%) !important;
            box-shadow: none !important;
            width: calc(100% - 20px);
            height: 47.5px;
            line-height: 1;
            padding: 15px;
        }

        .notice-box-in .notice-box-text {
            width: 65%;
            padding: 30px 0 20px 40px;
            display: flex;
            flex-flow: column;
            justify-content: center;
        }

        div#announcementmodal .modal-dialog {
            height: calc(100vh - 20px);
            display: flex;
            align-items: center;
        }

        .notice-box-in .notice-box-img {
            width: 35%;
        }

        .form-box {
            max-width: 500px;
            margin: 5px 0 0;
        }

        .send-btn {
            padding: 10px 0 0;
        }

        .form-box .form-field {
            position: relative;
        }

        .form-box .form-field span:after {
            content: '';
            width: 18px;
            height: 18px;
            background-image: url(https://www.caymanleasing.com/wp-content/uploads/2022/09/user-img1.png);
            position: absolute;
            top: -1px;
            left: 10px;
            background-size: cover;
        }

        .form-box .form-field.phone-f span:after {
            content: '';
            background-image: url(https://www.caymanleasing.com/wp-content/uploads/2022/09/call-img1.png);
        }

        .form-box .form-field.email-f span:after {
            content: '';
            background-image: url(https://www.caymanleasing.com/wp-content/uploads/2022/09/mail-img1.png);
            height: 14px;
            top: 0;
        }

        @media (max-width:1200px) {
            .notice-box-text h2 {
                font-size: 80px;
            }

        }

        @media (max-width:991px) {
            .notice-box-text h2 {
                font-size: 65px;
            }

            .notice-box-text h3 {
                font-size: 24px;
            }

            .notice-box-in .notice-box-text {
                padding: 30px 0 10px 30px;
            }

        }

        @media (max-width: 767px) {
            .modal-dialog.modal-md {
                max-width: 600px !important;
                width: 100% !important;
            }

            .modal-item-img {
                height: 395px !important;
                background-size: cover !important;
            }

            .notice-box-in .notice-box-img {
                display: none;
            }

            .notice-box-in .notice-box-text {
                padding: 20px;
                width: 100%;
            }

            .notice-box-text h2 {
                font-size: 40px;
                text-align: center;
            }

            .notice-box-text h3 {
                font-size: 18px;
                text-align: center;
            }

            .form-box .form-box-row {
                display: block;
            }

            .form-box .form-field {
                padding: 10px 0;
            }

            .send-btn input {
                width: 100%;
            }

            #announcementmodal .modal-body .notice-box-text img.car-img {
                max-width: 175px;
                height: auto;
                margin: 0 auto 10px;
            }

            .send-btn span.wpcf7-spinner {
                display: none;
            }

            .notice-box-text h3 span {
                margin-top: 6px;
                font-size: 30px;
            }

            #announcementmodal .modal-body .close {
                color: #000;
            }
        }

        @media (max-width: 600px) {
            .modal-dialog.modal-md {
                max-width: 500px !important;
            }

            .modal-item-img {
                height: 321px !important;
            }
        }

        @media (max-width: 500px) {
            .modal-dialog.modal-md {
                max-width: 400px !important;
            }

            .modal-item-img {
                height: 246px !important;
            }

            #home.banner.current {
                display: none;
            }
        }

        @media (max-width: 400px) {
            .modal-dialog.modal-md {
                max-width: 97% !important;
            }

            .modal-item-img {
                height: 186px !important;
            }
        }
    </style>

    <!-- calculator popup -->
    <div id="calcpop" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="model">
                <div id="message_validate" style="display:none;"></div>
                <form action="#" method="post" action="" id="calcpopup" class="request-booking" autocomplete="off">
                    <span id="error_book"></span>
                    <div class="form-field">
                        <label for="contact_phone">Lease End Date : * <small>(You can find this answer on your lease agreement)</small></label>
                        <input type="text" name="leaseend_date" id="leaseend_date" required="required" autocomplete="off">
                        <div class="clear-fix"></div>
                    </div>
                    <div class="form-field">
                        <label for="contact_phone">Next Bill Date: *</label>
                        <input type="text" name="nextbill_date" id="nextbill_date" required="required" value="<?php echo date('m', strtotime('+1 month')) . '/01/' . date('Y', strtotime('+1 month')); ?>" readonly="readonly">
                        <div class="clear-fix"></div>
                    </div>
                    <div class="form-field">
                        <label for="contact_phone">Monthly Lease Payment: *<small>(You can find this answer on your lease agreement or monthly statement - the monthly lease payment does not include the monthly insurance plan payment unless you have been in an at-fault accident since renewal)</small></label>
                        <span class="dollorsign">$</span>
                        <input type="text" name="monthly_rate" id="monthly_rate" required="required" value="">
                        <div class="clear-fix"></div>
                    </div>
                    <div class="form-field">
                        <label for="contact_phone">Refundable Security Deposit: *<small>(Put in "-" sign. You can find this answer on your lease agreement)</small></label>
                        <span class="dollorsign">$</span>
                        <input type="text" name="refundable_security" id="refundable_security" placeholder="-" required="required" value="" onchange="checkvaluenegative(this);">
                        <div class="clear-fix"></div>
                    </div>
                    <div class="form-field">
                        <label for="date_drive">Current Balance: *<small>(Put in "-" sign if the account is in credit. You can find this answer by looking at the statement you were sent on the 1st of the month and subtracting any payments you have made since then.)</small></label>
                        <span class="dollorsign">$</span>
                        <input type="text" name="current_balance" id="current_balance" required="required">
                        <div class="clear-fix"></div>
                    </div>
                    <div class="form-field">
                        <label for="contact_phone">Purchase Option: </label>
                        <span class="dollorsign">$</span>
                        <input type="text" name="purchase_option" id="purchase_option" value="100" data-po="100" required="required" disabled="disabled">
                        <div class="clear-fix"></div>
                    </div>
                    <div class="form-field">
                        <label for="contact_phone">Transfer Appointment: </label>
                        <span class="dollorsign">$</span>
                        <input type="text" name="transfer_appointment" id="transfer_appointment" value="100" data-ta="100" required="required" disabled="disabled">
                        <div class="clear-fix"></div>
                    </div>
                    <div class="form-field">
                        <label for="contact_phone">Government Transfer Fee: </label>
                        <span class="dollorsign">$</span>
                        <input type="text" value="25" required="required" disabled="disabled" readonly>

                        <div class="clear-fix"></div>
                    </div>
                    <hr>
                    <div class="form-field" style="text-align: center;display: block;">
                        <a id="calculate_results" class="test-btn" onclick="calculateresults()">Calculate</a>
                    </div>
                    <br />
                    <div class="form-field" style="display: none;">
                        <label for="time_drive">Months Remaining: </label>
                        <div class="clear-fix"></div>
                    </div>
                    <div class="form-field" style="display: none;">
                        <label for="contact_phone">Lease Bills: </label>
                        <div class="clear-fix"></div>
                    </div>
                    <input type="hidden" name="months_remaining" id="months_remaining" disabled="disabled">
                    <input type="hidden" name="lease_bills" id="lease_bills" required="required" disabled="disabled">
                    <hr>
                    <div class="calculationsec">
                        <div class="form-field">
                            <label for="contact_phone">Total: </label>
                            <span class="dollorsign">$</span>
                            <input type="text" name="total_calc" id="total_calc" disabled="disabled">
                            <div class="clear-fix"></div>
                        </div>
                    </div>
                    <div class="form-field disclaimer">
                       
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- calculator end -->

    <!--model-->
    <div id="bookNow" class="modal fade test-drive" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="model">
                <form method="post" action="" id="third-form" class="request-form">
                    <span id="sucess_drive_1" style="color:green;"></span>
                    <div id="bodyArea">
                        <h2> Request a Call Back</h2>
                        <div class="formpannel">
                            <!--    <p>
                            <label for="program_choice">Program Choice: *</label>
                            <select name="program_choice" id="program_choice3669" required="required">
                                <option value="">SELECT</option>
                                <option value="Lease">Lease</option>
                                <option value="Lease-to-Own">Lease-to-Own</option>
                                <option value="Not sure yet">Not sure yet</option>
                                <option value="Buy">Buy</option>
                            </select>
                        </p> -->

                            <p>
                                <label for="first_name">First Name: *</label>
                                <input type="text" name="first_name" id="first_name3669" required="required">
                            </p>
                            <p>
                                <label for="last_name">Last Name: *</label>
                                <input type="text" name="last_name" id="last_name3669" required="required">
                            </p>
                            <!--   <p>
                            <label for="email">Email: *</label>
                            <input type="email" name="email" id="email" required="required">
                        </p> -->
                            <p>
                                <label for="contact_phone">Phone Number: *</label>
                                <input type="text" name="contact_phone" id="contact_phone3669" required="required">
                            </p>

                            <p>
                            <div for="client">
                                <span class="client_exist">Are you an existing Cayman Leasing client ?</span>
                                </br>
                                <span class="radio-button-yesno">
                                    <label for="">Yes</label>
                                    <input type="radio" name="clientradio" id="yes_click" value="yes" checked>
                                </span>
                                <span class="radio-button-yesno">
                                    <label for="">No</label>
                                    <input type="radio" name="clientradio" value="no" id="no_click">
                                </span>
                            </div>
                            </p>

                            <p class="lease_number">
                                <label for="lease_number">Lease Number: *</label>
                                <input type="text" name="lease_number" id="lease_number" onkeypress="return isNumber(event)" onpaste="return false">
                            </p>



                            <!-- <p>
                            <label for="email">Email Address: *</label>
                            <input type="email" name="email" id="email3669" required="required">
                        </p>
                        <p>
                            <label for="date_drive">Name of Employer: *</label>
                            <input type="text" name="emp_name" id="date_drive3669" required="required" name="date_drive">
                        </p>
                        <p>
                            <label for="time_drive">Job Title: *</label>
                            <input type="text" name="job_title" id="time_drive3669" required="required" name="time_drive">
                        </p>-->
                            <!-- <p>
                            <label for="other_note">Other Notes: </label>
                            <textarea name="other_note" id="other_note3669"></textarea>
                        </p> -->
                            <p>
                            <div class="g-recaptcha" data-sitekey="6LeW4NkZAAAAAK9I5RuQ1STU3QCobk4tShP0RGku"></div>
                            </p>
                            <p> <input type="submit" value="Send">
                                <input type="reset" name="button2" value="Reset">
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end-->



    <header>
        <div class="container">
            <div class="row">
                <div class="logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-responsive">
                    </a>
                </div>
                <div class="menu_area">
                    <nav>
                        <button class="toogle"><i class="fa fa-bars"></i></button>
                        <ul>
                            <li><a onClick="home()" href="#home">Home</a></li>
                            <li><a onClick="leaseToOwn()" href="#lease-to-own">Inventory</a></li>
                            <li><a onClick="leaseProgram()" href="#lease-program">How Leasing Works</a></li>
                            <li><a onClick="blog()" href="#blog">Posts</a></li>

                            <!-- <li><a onClick="client()" href="#client">Testimonials</a>-->
                            <li><a onClick="faqs()" href="#faq-area">FAQs</a></li>
                            <li><a onClick="contact()" href="#contact">Request a Call Back</a></li>
                            <!-- <li><a onClick="resource()" href="#resourcearea">Resources</a></li> -->
                            <li><a onClick="uploaddoc()" href="#upload-doc-sec">Upload Document</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>