<?php
/**
 * Template Name: About Me
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

<div class="content-section extra-padding">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<main class="main-section">
					<div class="row">
						<div class="col-xl-12">
							<header class="page-header">
								<h1 class="page-title">About Me</h1>
							</header><!-- page-header -->
						</div><!-- col-xl-12 -->
					</div><!-- .row -->	
					<div class="row">
						<div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 offset-lg-1 col-xl-3 offset-xl-1">
							<div class="about-image">
								<img class="about-photo" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/akter_hussain.jpg" alt="akter hussain">
								<img class="about-logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo_black.png" alt="akter hussain">
							</div><!-- about-image -->
						</div><!-- col-xl-6 -->
						<div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
							<div class="about-text">
								<h2 class="about-title">Who Am I?</h2>
								<p class="about-para">I'm an experienced full-stack developer specializing in PHP, SQL, MySQL, WordPress, Boostrap, RESPONSIVE HTML, web apps, Photoshop Design, Illustrator arts, javaScript, jQuery, HTML5 and CSS3. I have more than 6 years of exprience in web development.</p>
								<h2 class="about-title">What do I do?</h2>
								<p class="about-para">
									I primary focus is to ensure that customers succeed in their goals with my special service of WordPress Theme Development, PHP Web Application, WordPress Theme Customization, HTML5 and CSS3,  Template Design, WordPress Template Design, Redesign WordPress Website, Redesign PHP Website, Website Design and Development, and Responsive Website Design. My success measurement criteria are based on customers. I believe that in order to understand customer's business we must partner with them. As partners, I exposed to the same issues our customers are faced with. This partnership throttles us into a commanding position to lay out a plan which addresses our customer's concerns and puts them on track for getting increased productivity while saving cost.
								</p>
							</div><!-- about-text -->
						</div><!-- col-xl-6 -->
					</div><!-- .row -->
					<div class="row">
						<div class="col-xl-12">
							<footer class="page-footer">
								<nav class="about-menu">
									<ul>
										<li><a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a target="_blank" href="#"><i class="fab fa-github"></i></a></li>
										<li><a target="_blank" href="#"><i class="fab fa-youtube"></i></a></li>
									</ul>
								</nav><!-- about-menu -->
							</footer><!-- page-header -->
						</div><!-- col-xl-12 -->
					</div><!-- .row -->				
				</main><!-- .main-section -->
			</div><!-- col-cl-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .content-section -->

<?php
get_footer();
