<?php
/**
 * Template Name: Contact Me
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package akter_hussain
 */

get_header();
?>

<div class="content-section extra-padding contact-overflow">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<main class="main-section">
					<div class="row">
						<div class="col-xl-12">
							<header class="page-header">
								<h1 class="page-title">Contact Me</h1>
							</header><!-- page-header -->
						</div><!-- col-xl-12 -->
					</div><!-- .row -->	
					<div class="row">
							<div class="col-12 col-sm-12 col-md-8 offset-md-2 offset-lg-0 col-lg-6 col-xl-6">

							<div class="contact-content">
								<form class="" action="">
									<div class="form-group">
										<label class="yourname" for=""><input type="text" placeholder="Your Name"></label>
									</div>
									<div class="form-group">
										<label class="youremail" for=""><input type="email" placeholder="Email Addres"></label>
									</div>
									<div class="form-group">
										<label class="yoursubject" for=""><input type="text" placeholder="Subject"></label>
									</div>
									<div class="form-group">
										<label class="textarea" for=""><textarea name="" id="" cols="30" rows="10" placeholder="Your Massage ...."></textarea></label>
									</div>
									  <div class="submit-area">
									  <button type="submit" class="btn btn-primary">Submit</button>	
									  </div>
								</form>
							</div><!-- contact-content -->
						</div><!-- col-xl-6 -->

						<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
							<div class="contact-over">
							<div class="contact-icon">
								<ul>
								<li><i class="fas fa-envelope"></i><a href="mailto:info@akterhussain.com"> info@akterhussain.com</a></li>
								<li><i class="fas fa-phone"></i><a href="tel:008801783-943225"> ++8801783-943225</a></li>
								<li><i class="fab fa-skype"></i><a href="skype:live:ff5d02fbce4dd5b8?chat">akterhussain2025@gmail.com</a></li>
								<li class="con-address"><i class="fas fa-map-marker-alt"></i><span class="con-add-text">Gazi Bari, Dhampti Dakhin Khar, Debidwar, Cumilla - 5333, Bangladesh</span></li>
							</ul>
							</div><!-- contact-icon -->
							</div>
						</div><!-- col-xl-6 -->
					</div><!-- .row -->		
				</main><!-- .main-section -->
			</div><!-- col-cl-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .content-section -->

<?php
get_footer();
