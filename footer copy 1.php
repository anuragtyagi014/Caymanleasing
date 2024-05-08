<?php

/**
 * The template for displaying the footer
 */

?>

<!--model-->
<div id="test-drive" class="modal fade test-drive" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <button type="button" class="close" data-target="#myModal<?php echo get_the_ID(); ?>" data-dismiss="modal">&times;</button>
        <div class="model">
            <form method="post" action="" id="second-form" class="request-form">
                <span id="sucess_drive"></span>
                <div id="bodyArea">
                    <h2>Contact Us</h2>
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
                        <p>
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
                        </p>
                        <p>
                            <label for="other_note">Other Notes: </label>
                            <textarea name="other_note" id="other_note3669"></textarea>
                        </p>
                        <p>
                            <label for="captcha">&nbsp;</label>
                            <div class="g-recaptcha" data-sitekey="6LcLtxQUAAAAAJshKaoDSD54oj2J_25YYPVRTzKy"></div>
                        </p>
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
                    <li><a href="#home">Home</a></li>
                    <li><a href="#lease-to-own">Inventory</a></li>
                    <li><a href="#lease-program">How Leasing Works</a></li>
                    <li><a href="#client">Testimonials</a></li>
                    <li><a href="#faq-area">FAQs</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact us</a></li>
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

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.2.4.min.js"></script>
<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.disableAutoFill.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/html2canvas.js"></script>

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
				alert(result);
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
				alert(result);
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
		//$('#book_order').attr("disabled", disable);  
		$.ajax({
			type: "POST",
			url: "<?php echo site_url(); ?>/ajaxsubmitdrive1.php",
			data: $( "#third-form" ).serialize(),
			cache: false,
			loder: 1,
			success: function(result){
			    alert(result);
				//$('#book_order').removeAttr("disabled");
				$('#sucess_drive_1').text(result);
				$('#third-form')[0].reset();
			}
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
</script>

<script type="text/javascript">

var width = $(window).width();

if (width < 750) {

	$('.menu_area nav ul li a').click(function(){						
		$(this).parents('ul').slideUp('fast');					
	});

	
	function testDrive() {
		
		/*faq*/
		document.getElementById('faq-area').style.display = "none";
		/*end*/
		
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
		
		/*drive*/
		document.getElementById('drive').style.display = "block";
		/*end*/
		
		/*blog-clients*/
		document.getElementById('man').style.opacity = "0";
		document.getElementById('slider').style.opacity = "0";
		/*end*/
	}	
	
	function faqs() {
		
		/*faq*/
		document.getElementById('faq-area').style.display = "block";
		/*end*/
		
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
		
		/*drive*/
		document.getElementById('drive').style.display = "none";
		/*end*/
		
		/*blog-clients*/
		document.getElementById('man').style.opacity = "0";
		document.getElementById('slider').style.opacity = "0";
		/*end*/
	}

	function leaseToOwn() {
		
		/*home*/
		document.getElementById('home').style.display = "none";
		/*end*/	
		
		/*lease-to-own*/
		document.getElementById('lease-to-own').style.display = "block";
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
		
		/*drive*/
		document.getElementById('drive').style.display = "none";
		/*end*/
		
		/*blog-clients*/
		document.getElementById('man').style.opacity = "0";
		document.getElementById('slider').style.opacity = "0";
		/*end*/
	}


	function home() {
			
		/*home*/
		document.getElementById('home').style.display = "block";
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
		
		/*faq*/
		document.getElementById('faq-area').style.display = "none";
		/*end*/

		/*blog*/
		document.getElementById('blog').style.display = "none";
		/*end*/		
		
		/*contact*/
		document.getElementById('contact').style.display = "none";
		/*end*/	

		/*drive*/
		document.getElementById('drive').style.display = "none";
		/*end*/
		
		/*blog-clients*/
		document.getElementById('man').style.opacity = "0";
		document.getElementById('slider').style.opacity = "0";
		/*end*/
		
	}


	function leaseProgram() {
		
		/*home*/
		
		document.getElementById('home').style.display = "none";
		
		/*end*/	
		
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

		/*drive*/
		document.getElementById('drive').style.display = "none";
		/*end*/
		
		/*blog-clients*/
		document.getElementById('man').style.opacity = "0";
		document.getElementById('slider').style.opacity = "0";
		/*end*/
	}


	function client() {
		
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

		/*drive*/
		document.getElementById('drive').style.display = "none";
		/*end*/
		
		/*blog-clients*/
		document.getElementById('slider').style.opacity = "0";
		/*end*/
	}

	function blog() {
		
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
		
		/*faq*/
		document.getElementById('faq-area').style.display = "none";
		/*end*/

		/*blog*/
		document.getElementById('blog').style.display = "block";
		
		setTimeout(function() {
		document.getElementById('slider').style.opacity = "1";
		}, 3500);
		
		/*end*/		
		
		/*contact*/
		document.getElementById('contact').style.display = "none";
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
		
		/*drive*/
		document.getElementById('drive').style.display = "none";
		/*end*/	

		/*blog-clients*/
		document.getElementById('man').style.opacity = "0";
		document.getElementById('slider').style.opacity = "0";
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
		var	leasebil=fp(rate)*fp(rem);
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
		var	month_rem=months_remaining_calc();
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
	$('#total_calc').val(''+fp(total));			
}

$(document).ready(function(){

	$('.calc_btn').click(function(){
		$('body').addClass('calcOpen');
	});

	$('.close').click(function(){
		$('body').removeClass('calcOpen');
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

</script>

<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "697134173714331", // Facebook page ID
            whatsapp: "+13453258347", // WhatsApp number
            email: "support@caymanleasing.com", // Email
            company_logo_url: "//storage.whatshelp.io/widget/0a/0a02/0a0224f18faf1222d0173cded8ebaaf1/10302695_712909105470171_6598409247324379384_n.png", // URL of company logo (png, jpg, gif)
            greeting_message: "Hey there, how may we help you? Just send us a message via Facebook Messenger, WhatsApp, or Email! Click your favorite one below. ", // Text of greeting message
            call_to_action: "Message us", // Call to action
            button_color: "#129BF4", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,whatsapp,email" // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->

</body>
</html>