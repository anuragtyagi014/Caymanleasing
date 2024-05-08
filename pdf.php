<?php
/**
 * Template Name: Pdf
 */
 
?>

<?php

if ( ! empty($_POST['id']) ) {

$post = get_post($_POST['id']); 

setup_postdata( $post ); 

$image = site_url()."/wp-content/themes/caymanleasing/newimage/".$_POST['image'].".png";

$image1 = get_field('image1', $_POST['id']);

$image1 = $image1['url'];

$image2 = get_field('image3', $_POST['id']);
$image2 = $image2['url'];

$image3 = get_field('image5', $_POST['id']);
$image3 = $image3['url'];

$image4 = get_field('image7', $_POST['id']);
$image4 = $image4['url'];

$image5 = get_field('image9', $_POST['id']);
$image5 = $image5['url'];

$image6 = get_field('image11', $_POST['id']);
$image6 = $image6['url'];

$image7 = get_field('image7', $_POST['id']);
$image7 = $image7['url'];

$image8 = get_field('image8', $_POST['id']);
$image8 = $image8['url'];

$lease = get_field('lease', $_POST['id']);

$buy = get_field('buy', $_POST['id']);

$title = $post->post_title;

$des = $post->post_content;

list($width, $height) = getimagesize($image);

if ($height >=1020) {

	$height = 1020;

} else {

    $height = $height;	
}

$con ="<div style='margin: 0 auto; padding: 10px 20px 15px; background: #28396c; text-align:left; width:680px; height:1060px;'>
			<table style='width: 100%; padding:10px 0 0;'>
				<tr>
					<td style='width: 30%; padding:10px 0 10px 10px;'>
						<div style='text-align:center; background:#fff; border-radius:10px; padding:10px 0;'>
						<img src='".get_template_directory_uri()."/images/logo.png' width='120' height='auto' alt=''/>
						<p style='margin:10px 0'>134 532 58347</p>
						</div>
					</td>
					<td style='width: 69%; padding:10px 0 10px 10px;'>
						<div style='text-align:center; background:#fff; border-radius:10px; padding:28px 0;'>
						<p style='font-size: 18px; margin: 0; padding:0 10px; font-weight: 700; color: #28396c;'><strong>".$title."</strong> </p>
						</div>
						
					</td>
				</tr>
			</table>
			<table style='width: 100%; padding:10px 0' >
				<tr>
					<td style='width: 33%; padding:0 5px 0 0;'>
					    <div style='text-align:left; background:#fff; border-radius:10px; padding:10px;'>";

				if ( ! empty(get_field('years', $_POST['id'])) ) {

					$con .="<p style='margin: 0; padding: 5px'><strong style='padding: 0 5px; width: 130px; display: inline-block'>Year:  </strong> ".get_field('years', $_POST['id'])." </p>";
				}

				if ( ! empty(get_field('make', $_POST['id'])) ) {

					$con .="<p style='margin: 0; padding: 5px'><strong style='padding: 0 5px; width: 130px; display: inline-block'>Make:  </strong> ".get_field('make', $_POST['id'])."</p>";
				}

				if ( ! empty(get_field('model', $_POST['id'])) ) {

					$con .="<p style='margin: 0; padding: 5px'><strong style='padding: 0 5px; width: 130px; display: inline-block'>Model:  </strong> ".get_field('model', $_POST['id'])."</p>";
				}

					$con .="</div>
					</td>
					<td style='width:33%; padding:0 0'>
						<div style='text-align:left; background:#fff; border-radius:10px; padding:10px;'>";

			    if ( ! empty(get_field('engine_size', $_POST['id'])) ) {

					$con .="<p style='margin: 0; padding: 5px'><strong style='padding: 0 5px; width: 130px; display: inline-block'>Engine Size:  </strong>".get_field('engine_size', $_POST['id'])."</p>";
				}

				if ( ! empty(get_field('exterior_colour', $_POST['id'])) ) {

					$con .="<p style='margin: 0; padding: 5px'><strong style='padding: 0 5px; width: 130px; display: inline-block'>Exterior Colour:  </strong>".get_field('exterior_colour', $_POST['id'])."</p>";
				}

				if ( ! empty(get_field('interior_colour', $_POST['id'])) ) {

					$con .="<p style='margin: 0; padding: 5px'><strong style='padding: 0 5px; width: 130px; display: inline-block'>Interior Colour:  </strong>".get_field('interior_colour', $_POST['id'])."</p>";
				}

					$con .="</div>
					</td>
					<td style='width: 33%; padding:0 0 0 5px;'>
						<div style='text-align:left; background:#fff; border-radius:10px; padding:10px;'>";

				if ( ! empty(get_field('transmission', $_POST['id'])) ) {
						
					$con .="<p style='margin: 0; padding: 5px'><strong style='padding: 0 5px; width: 130px; display: inline-block'>Transmission:  </strong>".get_field('transmission', $_POST['id'])."</p>";
				}

				if ( ! empty(get_field('driving_side', $_POST['id'])) ) {

					$con .="<p style='margin: 0; padding: 5px'><strong style='padding: 0 5px; width: 130px; display: inline-block'>Driving side:  </strong>".get_field('driving_side', $_POST['id'])."</p>";
				}

				if ( ! empty(get_field('mileage', $_POST['id'])) ) {

					$con .="<p style='margin: 0; padding: 5px'><strong style='padding: 0 5px; width: 130px; display: inline-block'>Mileage:  </strong>".get_field('mileage', $_POST['id'])."</p>";
				}

					$con .="</div>
					</td>
				</tr>
			</table>
			<div style='position:relative; width:100%; padding:20px 0;'>
				<div style='width: 40%; text-align:left; padding:0 10px 0 0; position:absolute; left:0;'>";
                
            if ( ! empty($image1) ) {

                $con .="<div style='text-align: left; width: 100%; background:#fff; padding:10px; border-radius:10px;'><img src='".$image1."' width='310'/></div><br />";
            }

            if ( ! empty($image2) ) {

				$con .="<div style='text-align: left; width: 100%; background:#fff; padding:10px; border-radius:10px;'><img src='".$image2."' width='310'/></div><br />";
			}

			if ( ! empty($image3) ) {

				$con .="<div style='text-align: left; width: 100%; background:#fff; padding:10px; border-radius:10px;'><img src='".$image3."' width='310'/></div><br />";
			}

		    $con .="</div>";

            $con .="<div style='width: 40%; text-align:left; padding:0 10px 0 0; position:absolute; right:0;'>";

            if ( ! empty($image4) ) {

				$con .="<div style='text-align: left; width: 100%; background:#fff; padding:10px; border-radius:10px;'><img src='".$image4."' width='310'/></div><br />";
			}

			if ( ! empty($image5) ) {

				$con .="<div style='text-align: left; width: 100%; background:#fff; padding:10px; border-radius:10px;'><img src='".$image5."' width='310'/></div><br />";
			}

			if ( ! empty($image6) ) {

				$con .="<div style='text-align: left; width: 100%; background:#fff; padding:10px; border-radius:10px;'><img src='".$image6."' width='310'/></div>";
			}

		    $con .="</div>
			</div>
        </div>
	<style>
		.description-area p {line-height: 1.714285714; color: #444; margin:0; padding:0 20px;}
	</style>
    <div style='margin: 0 auto; padding:20px; background: #28396c; text-align:left; width:680px; height:1030px;'>
		<table style='width:100%;'>
			<tr>
			<td style='background:#fff; border-radius:10px; width:100%; text-align:center; margin:0 auto' class='description-area'>
				<img width='568' style='margin:0 auto; display:block;' height='".$height."' src='".$image."'>
			</td>
			</tr>
		</table>
   </div>";

require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');

$pdfname = $title.rand();

$path = $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/caymanleasing/newpdf/'.$pdfname.'.pdf';

$path2 = $_SERVER['DOCUMENT_ROOT'].'/create-pdf/'.$pdfname.'.pdf';

$path3 = site_url().'/create-pdf/'.$pdfname.'.pdf';

$html2pdf = new HTML2PDF('P','A4','fr');

$html2pdf->WriteHTML($con);

ob_clean();

$html2pdf->Output($path, 'F');

$html2pdf->Output($path2, 'F');

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$message = '<html><body>';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr><td><strong>First Name:</strong> </td><td>" . strip_tags($fname) . "</td></tr>";
$message .= "<tr><td><strong>Last Name:</strong> </td><td>" . strip_tags($lname) . "</td></tr>";
$message .= "<tr><td><strong>Email Address:</strong> </td><td>" . strip_tags($email) . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";
// $to = 'dev.team2080@gmail.com';
$to = 'sales@caymanleasing.com';


$headers = 'From: Caymanleasing <info@caymanleasing.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$mail = wp_mail( $to, $title.' Download Request', $message, $headers, $path );

if ($mail) { ?>

<?php get_header(); ?>

<center class="mid-responce">
  <div class="responce" style="font-size: 20px;" >An email has been sent with the Download PDF link. You can also directly download by clicking<span><a href="<?php echo $path3; ?>" target="_blank"> Download PDF</a><br>
  <a href="<?php echo site_url(); ?>">Go to home Page</a></span></div>
</center>

<?php get_footer(); ?>

<?php }  } ?>

