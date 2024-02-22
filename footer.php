<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Akter_Hussain
 */

?>

<footer class="footer-section">
	<section class="top-footer">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
					<div class="footer-content">
						<h2 class="footer-title">About Me</h2>
						<div class="footer-content-area">
							<img class="logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo_black.png" alt="akter hussain">
							<h4 class="tagline">Experienced full-stack developer</h4>
							<p class="short-dris">I'm an experienced full-stack developer specializing in PHP, SQL, MySQL, WordPress, Boostrap, RESPONSIVE HTML, web apps, Photoshop Design, Illustrator arts, javaScript, jQuery, HTML5 and CSS3.</p>
						</div>
					</div>	
				</div><!-- .col-xl-3 -->
				<div class="col-12 col-sm-6 col-md-6 col-lg-2 col-xl-2">
					<div class="footer-content">
						<h2 class="footer-title">Learn More</h2>
						<div class="footer-content-area">
							<nav class="footer-menu">
								<?php
								wp_nav_menu( array(
									'theme_location' => 'footer_menu'
								) );
								?>
							</nav>
						</div>
					</div>	
				</div><!-- .col-xl-3 -->
				<div class="col-12 col-sm-5 col-md-6 col-lg-2 col-xl-2">
					<div class="footer-content">
						<h2 class="footer-title">Read More</h2>
						<div class="footer-content-area">
							<nav class="footer-menu">
								<?php
								wp_nav_menu( array(
									'theme_location' => 'category_menu'
								) );
								?>
							</nav>
						</div>
					</div>	
				</div><!-- .col-xl-3 -->
				<div class="col-12 col-sm-7 col-md-6 col-lg-4 col-xl-4">
					<div class="footer-content">
						<h2 class="footer-title">Contact Me</h2>
						<div class="footer-content-area">
							<nav class="contact-manu">
							<ul>
								<li><i class="fas fa-envelope"></i><a href="mailto:info@akterhussain.com"> info@akterhussain.com</a></li>
								<li><i class="fas fa-phone"></i><a href="tel:008801783-943225"> ++8801783-943225</a></li>
								<li><i class="fab fa-skype"></i><a href="skype:live:ff5d02fbce4dd5b8?chat">akterhussain2025@gmail.com</a></li>
								<li class="li-address"><i class="fas fa-map-marker-alt"></i><span class="address">Gazi Bari, Dhampti Dakhin Khar, Debidwar, Cumilla - 5333, Bangladesh</span></li>
							</ul>
							</nav>
						</div>
					</div>	
				</div><!-- .col-xl-3 -->

				
			</div><!-- Row -->
		</div><!-- .container -->
	</section><!-- .top-footer -->

	<section class="button-footer">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-6 col-xl-6">
					<nav class="footer-social">
						<ul>
							<li><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a target="_blank" href="#"><i class="fab fa-github"></i></a></li>
							<li><a target="_blank" href="#"><i class="fab fa-youtube"></i></a></li>
						</ul>
					</nav>
				</div><!-- .col-xl-6 -->
				<div class="col-12 col-sm-12 col-md-6 col-xl-6">
					<div class="copyright-text">
						<p>Copyright &copy; <?php echo (date('Y')); ?> <a href="">akterhussain.com</a></p>
					</div><!-- .copyright-text -->
				</div><!-- .col-xl-6 -->
			</div><!-- Row -->
			
		</div><!-- .container -->
	</section><!-- .button-footer -->
</footer><!-- .footer-section -->

<?php wp_footer(); ?>

</body>
</html>
