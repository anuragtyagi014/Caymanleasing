<?php

/**
 * The template for displaying the footer
 */
// global $wp;
// $main_slug=trim(add_query_arg( array(),$wp->request),'/');
// if(stripos($main_slug,'upload')===false){
//     echo "Redirect";
// }

?>

<!--model-->
<div id="test-drive" class="modal fade test-drive" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <button type="button" class="close" data-target="#myModal<?php echo get_the_ID(); ?>" data-dismiss="modal">&times;</button>
        <div class="model">
            <form method="post" action="" id="second-form" class="request-form">
                <span id="sucess_drive"></span>
                <div id="bodyArea">
                    <h2>Request a Call Back</h2>
                    <div class="formpannel">
                        <p id="program_choice_show" style="display: none">
                            <input type="hidden" name="program_choice" id="" value="None" required="required">
                        </p>
                         <!--  <p id="program_choice_hide">
                            <label for="program_choice">Choose a program: *</label>
                            <select name="program_choice" id="program_choice3669" required="required">
                                <option value="">SELECT</option>
                                <option value="Buy">Buy</option>
                                <option value="Lease">Lease</option>
                                <option value="Lease-to-Own">Lease-to-Own</option>
                                <option value="Not sure yet">Not sure yet</option>
                            </select>
                        </p> -->
                        
                        <p>
                            <label for="vehicle">Vehicle: *</label>
                            <input type="text" name="vehicle" id="vehicle1" value="" required="required">
                        </p>

                        <p>
                            <label for="first_name">First Name: *</label>
                            <input type="text" name="first_name" id="first_name3669" required="required">
                        </p>
                        <p>
                            <label for="last_name">Last Name: *</label>
                            <input type="text" name="last_name" id="last_name3669" required="required">
                        </p>
                        <p>
                            <label for="contact_phone">Phone Number: *</label>
                            <input type="text" name="contact_phone" id="contact_phone3669" required="required">
                        </p>
                        <!-- <p>
                            <label for="email">Email Address: *</label>
                            <input type="email" name="email" id="email3669" required="required">
                        
                        </p> -->
                        <!-- 04-03-2021 commented-->
                        <!-- <p>
                            <div for="client">
                                <span class="client_exist">Are you an existing client?</span>
                                </br>
                                <span class="radio-button-yesno">
                                    <label for="">Yes</label>
                                    <input type="radio" name="clientradio" id="yes_click1" value="yes" checked>
                                </span>
                                <span class="radio-button-yesno">
                                    <label for="">No</label>
                                    <input type="radio" name="clientradio" value="no" id="no_click1">
                                </span>
                            </div>
                        </p>

                        <p class="lease_number1">
                            <label for="lease_number">Lease Number: *</label>
                            <input type="text" name="lease_number1" id="lease_number1">
                        </p> -->
                        <!-- comment end -->
                        <p>
                            <div class="g-recaptcha" data-sitekey="6LeW4NkZAAAAAK9I5RuQ1STU3QCobk4tShP0RGku"></div>
                        </p>
                        <!-- <p>
                            <label for="date_drive">Name of Employer: *</label>
                            <input type="text" name="emp_name" id="date_drive3669" required="required" name="date_drive">
                        </p> -->
                       <!--  <p>
                            <label for="time_drive">Job Title: *</label>
                            <input type="text" name="job_title" id="time_drive3669" required="required" name="time_drive">
                        </p> -->
                        <!-- <p>
                            <label for="other_note">Other Notes: </label>
                            <textarea name="other_note" id="other_note3669"></textarea>
                        </p> -->
                        
                        <p>
                            <input type="submit" name="button" value="Send">
                            <input type="reset" name="button2" value="Reset">
                        </p>

                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
<!--end-->

<!--footer-->
<footer id="footer">
    <div class="footer-links">
        <div class="container">
            <div class="row">
                <ul>
                        <li><a onClick="home()" href="#home">Home</a></li>
                        <li><a onClick="leaseToOwn()" href="#lease-to-own">Inventory</a></li>
                        <li><a onClick="leaseProgram()" href="#lease-program">How Leasing Works</a></li>
                        <li><a onClick="blog()" href="#blog">Posts</a></li>
                       <!-- <li><a onClick="client()" href="#client">Testimonials</a>-->
                        <li><a onClick="faqs()" href="#faq-area">FAQs</a></li>
                        <li><a onClick="contact()" href="#contact">Request a Call Back</a></li>
                        <!-- <li><a onClick="resource()" href="#resource">Resources</a></li> -->
                        <li><a onClick="uploaddoc()" href="#upload-doc-sec">Upload Document</a></li>
                    </ul>
            </div>
        </div>
    </div>
    <div class="copy-rights">
        <p>&copy;
            <?php echo date('Y'); ?> Cayman Leasing, ALL RIGHTS RESERVED</p>
    </div>
</footer>
<!--end-->
<!--email modal start-->
<div id="emailNow" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="model">
            <form method="post" action="" id="email-info-form" class="email-info-form">
                <span id="sucess_drive_3" style="color:green;"></span>
                <div id="bodyArea">
                    <h2> Get Car Info</h2>
                    <div class="formpannel">
                      
                        <input type="hidden" class="postid" name="postid" id="" value="">
                        <!--<p>
                            <label for="first_name">First Name: *</label>
                            <input type="text" name="first_name" id="first_name3669" >
                        </p>
                        <p>
                            <label for="last_name">Last Name: *</label>
                            <input type="text" name="last_name" id="last_name3669" >
                        </p>-->
                         <p>
                            <label for="email">Email: *</label>
                            <input type="email" name="email" id="email" >
                        </p>
                         
                        <p>
                            <div class="g-recaptcha" data-sitekey="6LeW4NkZAAAAAK9I5RuQ1STU3QCobk4tShP0RGku"></div>
                        </p> 
                         <p>   <input type="submit" value="Send">
                            <input type="reset" name="button2" value="Reset">
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--email modal end-->

<!--resource modal start-->
<div id="resourceModal1" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="model">
            <form method="post" action="" id="email-resource-form1" class="email-resource-form1">
                <span id="sucess_resource_1" style="color:green;"></span>
                <div id="bodyArea">
                    <!-- <h2> Get Car Info</h2> -->
                    <div class="formpannel">
                        <p>
                            <label for="first_name">First Name: *</label>
                            <input type="text" name="first_name1" id="first_name1" >
                        </p>
                        <p>
                            <label for="last_name">Last Name: *</label>
                            <input type="text" name="last_name1" id="last_name1" >
                        </p>
                         <p>
                            <label for="email">Email: *</label>
                            <input type="email" name="email1" id="email1" >
                        </p>
                       <!--  <p>
                            <label for="resources">Resources: *</label>
                            <span><input type="checkbox" name="resource[]" class="resources" value="https://www.caymanleasing.com/wp-content/uploads/2020/10/Form20-20New20Client20Application.pdf">New Client Application Form</span>
                            <span><input type="checkbox" name="resource[]" class="resources" value="https://www.caymanleasing.com/wp-content/uploads/2020/10/Form20-20Sample20Contract.pdf">Sample Contract Form</span>
                            <span><input type="checkbox" name="resource[]" class="resources" value="https://www.caymanleasing.com/wp-content/uploads/2020/10/Form-BritCay-Quote-1.pdf">Britcay Quote Form</span>
                            <span><input type="checkbox" name="resource[]" class="resources" value="https://www.caymanleasing.com/wp-content/uploads/2020/10/Form-Cash-Deposit-Information-1.pdf">Cash Deposit Form</span>
                        </p> -->
                        <!-- 
                        <p>
                            <div class="g-recaptcha" data-sitekey="6LeW4NkZAAAAAK9I5RuQ1STU3QCobk4tShP0RGku"></div>
                        </p> -->
                         <p>   <input type="submit" value="Send">
                            <input type="reset" name="button2" value="Reset">
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="resourceModal2" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="model">
            <form method="post" action="" id="email-resource-form2" class="email-resource-form2">
                <span id="sucess_resource_2" style="color:green;"></span>
                <div id="bodyArea">
                    <!-- <h2> Get Car Info</h2> -->
                    <div class="formpannel">
                        <p>
                            <label for="first_name">First Name: *</label>
                            <input type="text" name="first_name2" id="first_name2" >
                        </p>
                        <p>
                            <label for="last_name">Last Name: *</label>
                            <input type="text" name="last_name2" id="last_name2" >
                        </p>
                         <p>
                            <label for="email">Email: *</label>
                            <input type="email" name="email2" id="email2" >
                        </p>

                         <p>   <input type="submit" value="Send">
                            <input type="reset" name="button2" value="Reset">
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="resourceModal3" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="model">
            <form method="post" action="" id="email-resource-form3" class="email-resource-form3">
                <span id="sucess_resource_3" style="color:green;"></span>
                <div id="bodyArea">
                    <!-- <h2> Get Car Info</h2> -->
                    <div class="formpannel">
                        <p>
                            <label for="first_name">First Name: *</label>
                            <input type="text" name="first_name3" id="first_name3" >
                        </p>
                        <p>
                            <label for="last_name">Last Name: *</label>
                            <input type="text" name="last_name3" id="last_name3" >
                        </p>
                         <p>
                            <label for="email">Email: *</label>
                            <input type="email" name="email3" id="email3" >
                        </p>
                   
                         <p>   <input type="submit" value="Send">
                            <input type="reset" name="button2" value="Reset">
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="resourceModal4" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="model">
            <form method="post" action="" id="email-resource-form4" class="email-resource-form4">
                <span id="sucess_resource_4" style="color:green;"></span>
                <div id="bodyArea">
                    <!-- <h2> Get Car Info</h2> -->
                    <div class="formpannel">
                        <p>
                            <label for="first_name">First Name: *</label>
                            <input type="text" name="first_name4" id="first_name4" >
                        </p>
                        <p>
                            <label for="last_name">Last Name: *</label>
                            <input type="text" name="last_name4" id="last_name4" >
                        </p>
                         <p>
                            <label for="email">Email: *</label>
                            <input type="email" name="email4" id="email4" >
                        </p>
                     
                         <p>   <input type="submit" value="Send">
                            <input type="reset" name="button2" value="Reset">
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!--resource modal end-->



<!-- <div id="announcementmodal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <img src="/wp-content/uploads/2022/07/sale-banner1-min.jpg" alt="Popup Image">
                <button type="button" class="btn btn-default button-okay" data-dismiss="modal">Okay</button> 
            </div>
        </div>
    </div>
</div> -->

<div id="announcementmodal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="notice-box">
					<div class="notice-box-in">
						<div class="notice-box-text">
							<img src="https://www.caymanleasing.com/wp-content/uploads/2022/09/cayman-car-l.png" class="car-img">
							<h3>
								Join Our <span>New Arrivals</span>
							</h3>
							<h2>
								Newsetter
							</h2>
                            <div class="schedule-form">
                                <?php echo do_shortcode('[contact-form-7 id="20667" title="Newsletter"]'); ?>
                            </div>
							<?php // echo do_shortcode('[contact-form-7 id="20080" title="Contact Form Popup"]'); ?>
						</div>
						<div class="notice-box-img">
							<img src="https://www.caymanleasing.com/wp-content/uploads/2023/01/cayman-leasing-new-jan.png">
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>

<?php if ( is_front_page() ) { ?>
<div id="timingmodal" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="timing-modal-img">
                    <img src="/wp-content/uploads/2021/11/cayman-leasing-popup.png">
                </div>
            </div>
        </div>
    </div>
</div> 
<?php } ?>

<style type="text/css">
.modal.fade.in {
    display: block;
}
    
.timing-modal-img img {
    width: 100%;
    height: auto;
}
div#timingmodal { display: none !important;
    background-color: rgb(0 0 0 / 41%);
}
div#timingmodal .modal-dialog {
    max-width: 495px;
}
div#timingmodal button.close {
    position: absolute;
    right: 0;
    top: 0;
    width: 35px;
    height: 35px;
    text-align: center;
    padding: 0 !important;
    background-color: #ed1616 !important;
    text-shadow: none;
    font-weight: 100;
}
/* div#timingmodal .modal-dialog {
    position: absolute;
    bottom: 25px !important;
    top: inherit !important;
    display: flex;
    align-items: flex-end;
    justify-content: flex-end;
    left: inherit !important;
    right: 25px !important;
    margin: 0 0 0 auto;
} */

@media (max-width: 767px){
   div#timingmodal .modal-body {padding: 0;}
div#timingmodal .modal-dialog {padding: 10px;}
	
/* div#timingmodal .modal-dialog {bottom: 20px !important;right: 0 !important;margin: 0 auto;} */
}
</style>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.2.4.min.js"></script>
<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.disableAutoFill.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/html2canvas.js"></script>
<script type="text/javascript">
     function isNumber(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode != 35 && (charCode < 48 || charCode > 57) ) {
            return false;
        }
        return true;
    }

    $(document).ready(function() {
        $("#timingmodal").addClass("in");
        $("body").addClass("modal-open");
    });
    
    $("#timingmodal .close").click(function(){
        $("body").removeClass("modal-open");
        $("#timingmodal").removeClass("in");
    });
</script>
<script>

function showhide() {
  var x = document.getElementById("lease-to-own");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function ShowHide() {
  var x = document.getElementById("lease-to-own");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
// $('.banner').on('click', function(){
//     $('.browse_car.current').removeClass('current');
//     $(this).addClass('current');
// });
    
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

    var element = $('#downloadpdf').find('#model_id').val();

    html2canvas($('#'+element), {
        onrendered: function(canvas) {
            var data = canvas.toDataURL('image/png');
            var data2 = $('#pdfimage').val();
            $.ajax({
                method: 'POST',
                url: "<?php echo site_url(); ?>/save_image.php",
                data: {
                    img: data,
                    img_name: data2
                }
            }).done(function(res) {
                if (res != '') {
                    $('.modal').css('position', 'fixed');
                    $('#successpdf').html('Successfully Submitted - Download will start momentarily.');
                    $('#downloadpdf').submit();
                    // $('#downloadpdf')[0].reset();
                }
            });

        }
    });
}

</script>
<script type="text/javascript">

    var array = ["02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22", "23","24","25","26","27","28","29","30","31"];

   jQuery("#leaseend_date").datepicker({ minDate: new Date('<?php echo date('Y', strtotime('+1 month')) .'/'. date('m', strtotime('+1 month')) . '/02' ;?>') });

</script>
<script type="text/javascript">

new WOW().init();

$("#man").slick({
        dots: false,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
     
$("#slider").slick({
        dots: false,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});


$(document).ready(function() {  
    $('.toogle').click(function() { 
        $('.menu_area nav ul').stop().slideToggle('fast');   
    }); 

    
});
            
</script>

<script type="text/javascript">

$('.menu_area nav ul li a, .footer-links ul li a').click(function(){
    $('html, body').animate({
         scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});

</script>

<?php wp_footer(); ?>

<script type="text/javascript">

$('#first-form').validate({
    rules: {
         fname: {
            required: true,
        },
         lname: {
            required: true,
        },
        email: {
            required: true,
            email: true
        }
    },
    submitHandler: function (form) {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url(); ?>/ajaxsubmit.php",
            data: $("#first-form").serialize(),
            cache: false,
            loder: 1,
            success: function(result){
                //alert(result);
                $('#sucess_book').text(result);
                $('.request-booking')[0].reset();
            }
        });
        return false;
    }
});
    
$('#second-form').validate({
    rules: {
         fname: {
            required: true,
        },
         lname: {
            required: true,
        },
        email: {
            required: true,
            email: true
        }
    },
    submitHandler: function (form) {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url(); ?>/ajaxsubmitdrive.php",
            data: $( "#second-form" ).serialize(),
            cache: false,
            loder: 1,
            success: function(result){
                //alert(result);
                $('#sucess_drive').text(result);
                $('#second-form')[0].reset();
            }
        });

        return false;
    }
}); 
    
$('#third-form').validate({
     
    rules: {
         fname: {
            required: true,
        },
         lname: {
            required: true,
        },
        email: {
            required: true,
            email: true
        }
    },
    submitHandler: function (form) { 
        $.ajax({
            type: "POST",
            url: "<?php echo site_url(); ?>/ajaxsubmitdrive1.php",
            data: $( "#third-form" ).serialize(),
            cache: false,
            loder: 1,
            success: function(result){
                //alert(result);
                //$('#book_order').removeAttr("disabled");
                $('#sucess_drive_1').text(result);
                $('#third-form')[0].reset();
            }
        });

        return false;
    }
});

$('#email-info-form').validate({
     
    rules: {
       /*  first_name: {
            required: true,
        },
         last_name: {
            required: true,
        },*/
        email: {
            required: true,
            email: true
        }
    },
    submitHandler: function (form) {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url(); ?>/ajaxpostcontent.php",
            data: $( "#email-info-form" ).serialize(),
            cache: false,
            success: function(result){
                //console.log(data);
                //$('#book_order').removeAttr("disabled");
                 $('#sucess_drive_3').text(result);
                $('#email-info-form')[0].reset();
            }
        });

        return false;
    }
});

    
$('#email-resource-form1').validate({
     
    rules: {
         first_name1: {
            required: true,
        },
         last_name1: {
            required: true,
        },
        email1: {
            required: true,
            email: true
        }
    },
    submitHandler: function (form) {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url(); ?>/ajaxsubmitpdf1.php",
            data: $( "#email-resource-form1" ).serialize(),
            cache: false,
            success: function(result){
                //console.log(data);
                //$('#book_order').removeAttr("disabled");
                 $('#sucess_resource_1').text(result);
                $('#email-resource-form1')[0].reset();
            }
        });

        return false;
    }
});

$('#email-resource-form2').validate({

     
    rules: {
         first_name2: {
            required: true,
        },
         last_name2: {
            required: true,
        },
        email2: {
            required: true,
            email: true
        }
    },
    submitHandler: function (form) { 
        $.ajax({
            type: "POST",
            url: "<?php echo site_url(); ?>/ajaxsubmitpdf2.php",
            data: $( "#email-resource-form2" ).serialize(),
            cache: false,
            success: function(result){
                //console.log(data);
                //$('#book_order').removeAttr("disabled");
                 $('#sucess_resource_2').text(result);
                $('#email-resource-form2')[0].reset();
            }
        });

        return false;
    }
});

$('#email-resource-form3').validate({

     
    rules: {
         first_name3: {
            required: true,
        },
         last_name3: {
            required: true,
        },
        email3: {
            required: true,
            email: true
        }
    },
    submitHandler: function (form) {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url(); ?>/ajaxsubmitpdf3.php",
            data: $( "#email-resource-form3" ).serialize(),
            cache: false,
            success: function(result){
                //console.log(data);
                //$('#book_order').removeAttr("disabled");
                 $('#sucess_resource_3').text(result);
                $('#email-resource-form3')[0].reset();
            }
        });

        return false;
    }
});

$('#email-resource-form4').validate({

     
    rules: {
         first_name4: {
            required: true,
        },
         last_name4: {
            required: true,
        },
        email4: {
            required: true,
            email: true
        }
    },
    submitHandler: function (form) {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url(); ?>/ajaxsubmitpdf4.php",
            data: $( "#email-resource-form4" ).serialize(),
            cache: false,
            success: function(result){
                //console.log(data);
                //$('#book_order').removeAttr("disabled");
                 $('#sucess_resource_4').text(result);
                $('#email-resource-form4')[0].reset();
            }
        });

        return false;
    }
});

$('#email_resource_form').validate({

     
    rules: {
         first_name: {
            required: true,
        },
         last_name: {
            required: true,
        },
        email: {
            required: true,
            email: true
        }
    },
    submitHandler: function (form) {
// 		console.log("Okay",$('#email_resource_form').serialize());
// 		debugger;
        $.ajax({
            url: 'https://www.caymanleasing.com/pdf_mailer.php',
            type: 'POST',
            dataType: 'text',
            data: $('#email_resource_form').serialize(),
        })
        .done(function(response) {
			
            $("#sucess_resource_output").html(response);
            $("#email_resource_form").trigger('reset');
        })
        .fail(function() {
				
            $("#sucess_resource_output").html("Some error occured.");
            $("#email_resource_form").trigger('reset');  
        })
        .always(function() {
				
            $("#email_resource_form").trigger('reset');  
        });

        return false;
    }
});


</script>

<script type="text/javascript">
    
$(document).ready(function(){
    $('.carousel').carousel( {
        interval: false
    }); 

     
});
$('.email-info').click(function(){
        $('#sucess_drive_3').text('');
        var postid = $(this).closest('div').find('.post_id').text();
       //alert(postid);
        $('.postid').val(postid);
    });
$('.close').click(function(){
        $('#sucess_drive_3').text('');
    });
</script>

<script type="text/javascript">

var width = $(window).width();

if (width < 750) {

    $('.menu_area nav ul li a').click(function(){                       
        $(this).parents('ul').slideUp('fast');                  
    });
    
    $(document).ready(function() {
    $('#lease-to-own, #lease-program, #blog, #client, #faq-area, #contact, #resourcearea,#upload-doc-sec').hide();
}); 

    
    function testDrive() {
        
        /*faq*/
        document.getElementById('faq-area').style.display = "none";
        /*end*/
        
        //document.getElementById('schedulearea').style.display = "none";
        
        /*home*/
        document.getElementById('home').style.display = "none";
        /*end*/ 
        
        /*lease-to-own*/
        document.getElementById('lease-to-own').style.display = "none";
        /*end*/ 
        
        /*lease-program*/
        document.getElementById('lease-program').style.display = "none";
        /*lease-program*/   
        
        /*client*/
        document.getElementById('client').style.display = "none";
        /*client*/  
        
        /*blog*/
        document.getElementById('blog').style.display = "none";
        /*end*/     
        
        /*contact*/
        document.getElementById('contact').style.display = "none";
        /*end*/ 

        /*resource*/
        //document.getElementById('resourcearea').style.display = "none";
        /*end*/ 
        
        /*drive*/
        document.getElementById('drive').style.display = "block";
        /*end*/
        
        document.getElementById('upload-doc-sec').style.display = "none";   
        
        /*blog-clients*/
        document.getElementById('man').style.opacity = "0";
        //document.getElementById('slider').style.opacity = "0";
        /*end*/
    }   
    
    function uploaddoc() {
        
        /*faq*/
        document.getElementById('faq-area').style.display = "none";
        /*end*/
        
        //document.getElementById('schedulearea').style.display = "none";
        
        /*home*/
        document.getElementById('home').style.display = "none";
        /*end*/ 
        
        /*lease-to-own*/
        document.getElementById('lease-to-own').style.display = "none";
        /*end*/ 
        
        /*lease-program*/
        document.getElementById('lease-program').style.display = "none";
        /*lease-program*/   
        
        /*client*/
        document.getElementById('client').style.display = "none";
        /*client*/  
        
        /*blog*/
        document.getElementById('blog').style.display = "none";
        /*end*/     
        
        /*contact*/
        document.getElementById('contact').style.display = "none";
        /*end*/ 

        /*resource*/
        //document.getElementById('resourcearea').style.display = "none";
        /*end*/ 

        /*drive*/
        document.getElementById('drive').style.display = "none";
        /*end*/
        
        /*drive*/
        document.getElementById('upload-doc-sec').style.display = "block";
        /*end*/
        
        /*blog-clients*/
        document.getElementById('man').style.opacity = "0";
        //document.getElementById('slider').style.opacity = "0";
        /*end*/
    }
    
    function faqs() {
        
        /*faq*/
        document.getElementById('faq-area').style.display = "block";
        /*end*/
        
        //document.getElementById('schedulearea').style.display = "none";
        
        /*home*/
        document.getElementById('home').style.display = "none";
        /*end*/ 
        
        /*lease-to-own*/
        document.getElementById('lease-to-own').style.display = "none";
        /*end*/ 
        
        /*lease-program*/
        document.getElementById('lease-program').style.display = "none";
        /*lease-program*/   
        
        /*client*/
        document.getElementById('client').style.display = "none";
        /*client*/  
        
        /*blog*/
        document.getElementById('blog').style.display = "none";
        /*end*/     
        
        /*contact*/
        document.getElementById('contact').style.display = "none";
        /*end*/ 
        
        /*resource*/
        //document.getElementById('resourcearea').style.display = "none";
        /*end*/ 

        /*drive*/
        document.getElementById('drive').style.display = "none";
        /*end*/
        
        document.getElementById('upload-doc-sec').style.display = "none";
        
        /*blog-clients*/
        document.getElementById('man').style.opacity = "0";
        //document.getElementById('slider').style.opacity = "0";
        /*end*/
    }

    function leaseToOwn() {
        
        /*home*/
        document.getElementById('home').style.display = "none";
        /*end*/ 
        
        /*lease-to-own*/
        document.getElementById('lease-to-own').style.display = "block";
        /*end*/ 
        
        //document.getElementById('schedulearea').style.display = "block";
        
        /*lease-program*/
        document.getElementById('lease-program').style.display = "none";
        /*lease-program*/   
        
        /*client*/
        document.getElementById('client').style.display = "none";
        /*client*/  
        
        /*faq*/
        document.getElementById('faq-area').style.display = "none";
        /*end*/

        /*blog*/
        document.getElementById('blog').style.display = "none";
        /*end*/     
        
        /*contact*/
        document.getElementById('contact').style.display = "none";
        /*end*/ 

        /*resource*/
        //document.getElementById('resourcearea').style.display = "none";
        /*end*/ 
        
        /*drive*/
        document.getElementById('drive').style.display = "none";
        /*end*/
        
        document.getElementById('upload-doc-sec').style.display = "none";
        
        /*blog-clients*/
        document.getElementById('man').style.opacity = "0";
        //document.getElementById('slider').style.opacity = "0";
        /*end*/
    }


    function home() {
            
        /*home*/
        document.getElementById('home').style.display = "block";
        /*end*/ 
        
        //document.getElementById('schedulearea').style.display = "none";
        
        /*lease-to-own*/
        document.getElementById('lease-to-own').style.display = "none";
        /*end*/ 
        
        /*lease-program*/
        document.getElementById('lease-program').style.display = "none";
        /*lease-program*/   
        
        /*client*/
        document.getElementById('client').style.display = "none";
        /*client*/  
        
        /*faq*/
        document.getElementById('faq-area').style.display = "none";
        /*end*/

        /*blog*/
        document.getElementById('blog').style.display = "none";
        /*end*/     
        
        /*contact*/
        document.getElementById('contact').style.display = "none";
        /*end*/ 

        /*resource*/
        //document.getElementById('resourcearea').style.display = "none";
        /*end*/ 

        /*drive*/
        document.getElementById('drive').style.display = "none";
        /*end*/
        
        document.getElementById('upload-doc-sec').style.display = "none";
        
        /*blog-clients*/
        document.getElementById('man').style.opacity = "0";
        //document.getElementById('slider').style.opacity = "0";
        /*end*/
        
    }


    function leaseProgram() {
        
        /*home*/
        
        document.getElementById('home').style.display = "none";
        
        /*end*/
        
        //document.getElementById('schedulearea').style.display = "none";
        
        /*lease-to-own*/
        
        document.getElementById('lease-to-own').style.display = "none";
        
        /*end*/ 
        
        /*lease-program*/
        
        document.getElementById('lease-program').style.display = "block";
        
        /*lease-program*/   
        
        /*client*/
        
        document.getElementById('client').style.display = "none";
        
        /*client*/  
        
        /*faq*/
        
        document.getElementById('faq-area').style.display = "none";
        
        /*end*/

        /*blog*/
        
        document.getElementById('blog').style.display = "none";
        
        /*end*/     
        
        /*contact*/
        
        document.getElementById('contact').style.display = "none";
        
        /*end*/ 

        /*resource*/
        //document.getElementById('resourcearea').style.display = "none";
        /*end*/ 

        /*drive*/
        document.getElementById('drive').style.display = "none";
        /*end*/
        
        document.getElementById('upload-doc-sec').style.display = "none";
        
        /*blog-clients*/
        document.getElementById('man').style.opacity = "0";
        //document.getElementById('slider').style.opacity = "0";
        /*end*/
    }


    function client() {
        
        /*home*/
        document.getElementById('home').style.display = "none";
        /*end*/ 
        
        //document.getElementById('schedulearea').style.display = "none";
        
        /*lease-to-own*/
        document.getElementById('lease-to-own').style.display = "none";
        /*end*/ 
        
        /*lease-program*/
        document.getElementById('lease-program').style.display = "none";
        /*lease-program*/   
        
        /*client*/
        document.getElementById('client').style.display = "block";
        setTimeout(function() {
        document.getElementById('man').style.opacity = "1";
        }, 3500);
        /*client*/
        
        /*faq*/
        document.getElementById('faq-area').style.display = "none";
        /*end*/

        /*blog*/
        document.getElementById('blog').style.display = "none";
        /*end*/     
        
        /*contact*/
        document.getElementById('contact').style.display = "none";
        /*end*/ 

        /*resource*/
        //document.getElementById('resourcearea').style.display = "none";
        /*end*/ 

        /*drive*/
        document.getElementById('drive').style.display = "none";
        /*end*/
        
        document.getElementById('upload-doc-sec').style.display = "none";
        
        /*blog-clients*/
        document.getElementById('slider').style.opacity = "0";
        /*end*/
    }

    function blog() {
        
        /*home*/
        document.getElementById('home').style.display = "none";
        /*end*/ 
        
        //document.getElementById('schedulearea').style.display = "none";
        
        /*lease-to-own*/
        document.getElementById('lease-to-own').style.display = "none";
        /*end*/ 
        
        /*lease-program*/
        document.getElementById('lease-program').style.display = "none";
        /*lease-program*/   
        
        /*client*/
        document.getElementById('client').style.display = "none";
        /*client*/  
        
        /*faq*/
        document.getElementById('faq-area').style.display = "none";
        /*end*/
        
        document.getElementById('upload-doc-sec').style.display = "none";

        /*blog*/
        document.getElementById('blog').style.display = "block";
        
        setTimeout(function() {
        document.getElementById('slider').style.opacity = "1";
        }, 3500);
        
        /*end*/     
        
        /*contact*/
        document.getElementById('contact').style.display = "none";
        /*end*/ 

        /*resource*/
        //document.getElementById('resourcearea').style.display = "none";
        /*end*/ 
        
        /*drive*/
        document.getElementById('drive').style.display = "none";
        /*end*/

        /*blog-clients*/
        document.getElementById('man').style.opacity = "0";
        /*end*/
    }

    function contact() {
        
        /*home*/
        document.getElementById('home').style.display = "none";
        /*end*/ 
        
        //document.getElementById('schedulearea').style.display = "none";
        
        /*lease-to-own*/
        document.getElementById('lease-to-own').style.display = "none";
        /*end*/ 
        
        /*lease-program*/
        document.getElementById('lease-program').style.display = "none";
        /*lease-program*/   
        
        /*client*/
        document.getElementById('client').style.display = "none";
        /*client*/  
        
        /*faq*/
        document.getElementById('faq-area').style.display = "none";
        /*end*/

        /*blog*/
        document.getElementById('blog').style.display = "none";
        /*end*/     
        
        /*contact*/
        document.getElementById('contact').style.display = "block";
        /*end*/ 

        /*resource*/
        //document.getElementById('resourcearea').style.display = "none";
        /*end*/ 
        
        /*drive*/
        document.getElementById('drive').style.display = "none";
        /*end*/ 
        
        document.getElementById('upload-doc-sec').style.display = "none";

        /*blog-clients*/
        document.getElementById('man').style.opacity = "0";
        //document.getElementById('slider').style.opacity = "0";
        /*end*/
    }


    function resource() {
        
        /*home*/
        document.getElementById('home').style.display = "none";
        /*end*/ 
        
        //document.getElementById('schedulearea').style.display = "none";
        
        /*lease-to-own*/
        document.getElementById('lease-to-own').style.display = "none";
        /*end*/ 
        
        /*lease-program*/
        document.getElementById('lease-program').style.display = "none";
        /*lease-program*/   
        
        /*client*/
        document.getElementById('client').style.display = "none";
        /*client*/  
        
        /*faq*/
        document.getElementById('faq-area').style.display = "none";
        /*end*/

        /*blog*/
        document.getElementById('blog').style.display = "none";
        /*end*/     
        
        /*contact*/
        //document.getElementById('resourcearea').style.display = "block";
        /*end*/ 
        
        /*drive*/
        document.getElementById('drive').style.display = "none";
        /*end*/ 
        
        document.getElementById('upload-doc-sec').style.display = "none";

        /*blog-clients*/
        document.getElementById('man').style.opacity = "0";
        //document.getElementById('slider').style.opacity = "0";
        /*end*/
    }
}

</script>

<script type="text/javascript">

function monthDiff(d1, d2) {

    var months;
    if(d1!=d2)
    {
        months = (d2.getFullYear() - d1.getFullYear()) * 12;
        months -= d1.getMonth()+1;
        months += d2.getMonth();
        console.log(months);
        return months <= 0 ? 0 : months;
    }    
    else{
        return 0;
    }

}

function fp(val){
    return Number(parseFloat(val).toFixed(2));
}

function leasebillcal(){
    if($('#monthly_rate').val()!='')
    {
        var rate=$('#monthly_rate').val();      
        var rem=$('#months_remaining').val();   
        var leasebil=fp(rate)*fp(rem);
        $('#lease_bills').val(fp(leasebil));    
    }
}

function monthremaining(){
    if($('#leaseend_date').val()=='')
    {
        $('#leaseend_date').focus();
    }
    else if($('#nextbill_date').val()=='')
    {
        $('#nextbill_date').focus();
    }
    else{
        var month_rem=months_remaining_calc();
        $('#months_remaining').val(fp(month_rem));  
    }
}

function months_remaining_calc(){
    var end=new Date($('#leaseend_date').val());
    
    var start=new Date($('#nextbill_date').val());
    
    var day1 = start.getDate();
    var day2 = end.getDate();
    var mm1 = start.getMonth();
    var mm2 = end.getMonth();
    var yy1 = start.getFullYear();
    var yy2 = end.getFullYear();
    var uncounted_days;
    var month_rem;
    
    if(yy1==yy2){
        if(mm1==mm2){
        month_rem=(day2-day1)/30;
        console.log('Same Month Days Count: '+(day2-day1));
        console.log('Same Month: '+month_rem);
        return month_rem;                   
        }
        else if((mm1+1)==mm2){
            
        uncounted_days=(30-day1)+day2+1;                            
        month_rem=uncounted_days/30;
        console.log('Next Month: '+ month_rem);
        return month_rem;
        }               
        else{
        month_rem=mm2-(mm1+1);
        uncounted_days=(30-day1)+day2+1;                            
        month_rem+=uncounted_days/30;
        console.log('Other Months : '+ month_rem);
        return month_rem;
        }           
    }
    else{
        month_rem = (yy2 - yy1) * 12;
        month_rem -= mm1+1;
        month_rem += mm2;
        uncounted_days=(30-day1)+day2+1;                            
        month_rem+=uncounted_days/30;
        console.log('Diff Years : '+ month_rem);
        return month_rem;
    }           
}

function calculateresults(){

    var monthly_rate=$('#monthly_rate').val();
    var refundable_security=$('#refundable_security').val();
    var current_balance=$('#current_balance').val();
    if(!$('#current_balance').val()){current_balance=0}
    var lease_bills=$('#lease_bills').val();
    var purchase_option=$('#purchase_option').val();
    var transfer_appointment=$('#transfer_appointment').val();
    var leaseend_date = $("#leaseend_date").val();
    var nextbill_date = $("#nextbill_date").val();

     if(leaseend_date ==""){
        document.getElementById("message_validate").innerHTML = "<p>Please pick lease end date.</p>";
        $("#message_validate").fadeIn(200);
        // $("#leaseend_date").focus();
        setTimeout(function(){$("#message_validate").fadeOut(200);},5000);
    }else if(monthly_rate == ""){
        document.getElementById("message_validate").innerHTML = "<p>Please fill monthly rate.</p>";
        $("#message_validate").fadeIn(200);
        // $("#monthly_rate").focus();
        setTimeout(function(){$("#message_validate").fadeOut(200);},5000)
    }else if(refundable_security == ""){
        document.getElementById("message_validate").innerHTML = "<p>Please fill refundable security.</p>";
        $("#message_validate").fadeIn(200);
        // $("#refundable_security").focus();
        setTimeout(function(){$("#message_validate").fadeOut(200);},5000)
    }else if(current_balance == ""){
        document.getElementById("message_validate").innerHTML = "<p>Please fill current balance.</p>";
        $("#message_validate").fadeIn(200);
        // $("#current_balance").focus();
        setTimeout(function(){$("#message_validate").fadeOut(200);},5000)
    }else{
        
        // $("#total_calc").focus();
    }

    var month_rem=months_remaining_calc();
    $('#months_remaining').val(fp(month_rem));
    $('#lease_bills').val(fp(fp(month_rem)*fp(monthly_rate)));
    var total=(fp(month_rem)*fp(monthly_rate))+fp(refundable_security)+fp(current_balance)+fp(purchase_option)+fp(transfer_appointment);
    total=total+25;
    $('#total_calc').val(''+fp(total));         
}

$(document).ready(function(){

    $('.calc_btn').click(function(){
        $('body').addClass('calcOpen');
    });

    $('.close').click(function(){
        $('body').removeClass('calcOpen');
    });

    $('.lease_number input').attr('required', 'required');
    $('.lease_number1 input').attr('required', 'required');
    
    $('#no_click').click(function(){
        $('.lease_number').css("display", "none");
        $('.lease_number input').removeAttr('required');
    });
    $('#yes_click').click(function(){
        $('.lease_number').css("display", "block");
        $('.lease_number input').attr('required', 'required');
    });

    $('#no_click1').click(function(){
        $('.lease_number1').css("display", "none");
        $('.lease_number1 input').removeAttr('required');
    });
    $('#yes_click1').click(function(){
        $('.lease_number1').css("display", "block");
        $('.lease_number1 input').attr('required', 'required');
    });
        
});

function checkvaluenegative(ele) {

    if($(ele).val() > 0) {

        $(ele).val(0 - $(ele).val());
    }
}
    
$("form").attr('autocomplete', 'off');

$(function(){
  $('#calcpopup').disableAutoFill();
});

window.onload = function() {
    var $recaptcha = document.querySelector('#g-recaptcha-response');

    if($recaptcha) {
        $recaptcha.setAttribute("required", "required");
    }
};
</script>
<script type="text/javascript">
    $(document).ready(function(){ 
		
// 		setTimeout(()=> {
//     $('#announcementmodal').modal('show')
// } , 7000)
		
//         $('#announcementmodal').modal('show')
        
        $("#yesbox").click(function(){
    $("#lease-number").addClass("active");
});

$("#nobox").click(function(){
    $("#lease-number").removeClass("active");
});
        
    });
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- GetButton.io widget -->
<!-- <script>

  var div = document.createElement('div');

  div.className = 'fb-customerchat';

  div.setAttribute('page_id', '697134173714331');

  div.setAttribute('ref', '');

  document.body.appendChild(div);

  window.fbMessengerPlugins = window.fbMessengerPlugins || {

    init: function () {

      FB.init({

        appId            : '1678638095724206',

        autoLogAppEvents : true,

        xfbml            : true,

        version          : 'v3.3'

      });

    }, callable: []

  };

  window.fbAsyncInit = window.fbAsyncInit || function () {

    window.fbMessengerPlugins.callable.forEach(function (item) { item(); });

    window.fbMessengerPlugins.init();

  };

  setTimeout(function () {

    (function (d, s, id) {

      var js, fjs = d.getElementsByTagName(s)[0];

      if (d.getElementById(id)) { return; }

      js = d.createElement(s);

      js.id = id;

      js.src = "//connect.facebook.net/en_US/sdk/xfbml.customerchat.js";

      fjs.parentNode.insertBefore(js, fjs);

    }(document, 'script', 'facebook-jssdk'));

  }, 0);
    
    


</script> -->


<!--<script type="text/javascript">
(function () {
var options = {
facebook: "697134173714331", // Facebook page ID
email: "support@caymanleasing.com", // Email
call: "345-945-2211", // Call phone number
company_logo_url: "//storage.getbutton.io/widget/90/907d/907d015c8cb52a2f66f8e5d30289cd79/logo.jpg", // URL of company logo (png, jpg, gif)
greeting_message: "Hello, how may we help you? Just send us a message now to get assistance.", // Text of greeting message
call_to_action: "Message us", // Call to action
button_color: "#00b2df", // Color of button
position: "right", // Position may be 'right' or 'left'
order: "facebook,email,call", // Order of buttons
ga: true, // Google Analytics enabled
branding: false, // Show branding string
mobile: true, // Mobile version enabled
desktop: true, // Desktop version enabled
greeting: true, // Greeting message enabled
shift_vertical: 0, // Vertical position, px
shift_horizontal: 0, // Horizontal position, px
domain: "caymanleasing.com", // site domain
key: "RM8SNMiIQS62YMd-REEY-Q", // pro-widget key
};
var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
})();
</script>-->
<!-- /GetButton.io widget -->

<script>

    // GET ALL THE TABS BUTTON
let tabsButton = document.querySelectorAll('.tabs-container ul li');

// GET ALL THE TABS CONTENT CONTAINER 
let tabsContentContainer = document.querySelectorAll('.tabs-detail-container');

// LOOP THROUGH ALL THE TABS BUTTON AND ATTACH AN CLICK EVENT
tabsButton.forEach(function(button,index){
  button.addEventListener('click', function(e){
  
    // REMOVE ACTIVE CLASS FROM TABS BUTTON
    tabsButton.forEach(button => button.classList.remove('active'));
    
    // REMOVE ACTIVE CLASS FROM TABS DETAIL CONTAINER 
    tabsContentContainer.forEach(tab => tab.classList.remove('active'));
    
    // ADD ACTIVE CLASS ON CURRENT CLICKED TAB BUTTON
    this.classList.add('active');
    
    // ADD ACTIVE CLASS ON TABS DETAIL CONTAINER
    tabsContentContainer[index].classList.add('active');
    
    
  })
});
    
</script>
<script>
	jQuery(document).ready(function(){
	setTimeout(function(){
		 //var tag_new = jQuery("template").eq(38).attr("id");
		 var tag_new = jQuery("template").last().attr("id");
		 console.log(tag_new);
		 //alert(tag_new);
		 jQuery("#" + tag_new).css("display", "none");
		 jQuery("#" + tag_new).next().next().css("display", "none");
         jQuery("."+tag_new).hide();
	}, 1);
	});
</script>
<script>
    $(".open_pdf_form_modal").click(function() {
        $("#pdf_name").val($(this).attr('data-value'));
        $('#email_resource_form').validate().resetForm();
        $('#email_resource_form input').removeClass("error");
    });
    // $("#email_resource_form").submit(function(event) {
    //     event.preventDefault();
    //     // alert("hii")
    //     $.ajax({
    //         url: 'https://www.caymanleasing.com/pdf_mailer.php',
    //         type: 'POST',
    //         dataType: 'text',
    //         data: $(this).serialize(),
    //     })
    //     .done(function(response) {
    //         $("#sucess_resource_output").html(response);
    //         $("#email_resource_form").trigger('reset');
    //     })
    //     .fail(function() {
    //         $("#sucess_resource_output").html("Some error occured.");
    //         $("#email_resource_form").trigger('reset');  
    //     })
    //     .always(function() {
    //         $("#email_resource_form").trigger('reset');  
    //     });
        
    // });
</script>
</body>
</html>