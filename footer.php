<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moni_Recipe
 */

?>



<footer>
	<section class="top-footer-section section-padding">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
					<div class="footer-title">
						<h2>All Categories</h2>
					</div>
					<nav class="catatory-menu">
						<?php 
						wp_nav_menu( array(
							'theme_location' => 'category_menu'
						) );

						?>
					</nav>
				</div>
				<div class="col-12 col-sm-6 col-md-6 col-lg-2 col-xl-2">
					<div class="footer-title">
						<h2>Learn More</h2>
					</div>
					<nav class="footer-menu">
						<?php 
						wp_nav_menu( array(
							'theme_location' => 'main_menu'
						) );

						?>
					</nav>
				</div>
				<div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="footer-title">
						<h2>Subscribe</h2>
					</div>
					<div class="subscribe-form">
						<p>To get new update post subscribe here</p>
						<form action="">
							<label for="" class="search-email">
								<input type="email" placeholder="Email Address">
								<button class="search-submit"><i class="fas fa-paper-plane"></i></button>
							</label>
							
							
						</form>
					</div>
					<nav class="footer-social">
						<ul>
							<li><a target="_blank" href="https://www.facebook.com/monirecipe/"><i class="fab fa-facebook-f"></i></a></li>
							<li><a target="_blank" href="#"><i class="fab fa-instagram"></i></a></li>
							<li><a target="_blank" href="https://twitter.com/MoniRecipe"><i class="fab fa-twitter"></i></a></li>
							<li><a target="_blank" href="https://www.pinterest.com/monirecipe/"><i class="fab fa-pinterest-p"></i></a></li>
							<li><a target="_blank" href="#"><i class="fab fa-youtube"></i></a></li>
						</ul>
					</nav>

				</div>
			</div>
		</div>
	</section>

	<section id="stop" class="scrollTop">
		<a href=""><i class="fas fa-arrow-up"></i></a>
	</section>

	<section class="botton-footer">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="copyright-text">
						<p>Copyright &copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"> akterhussain.com </a> All Rights Reserved</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</footer>


<?php wp_footer(); ?>

</body>
</html>
