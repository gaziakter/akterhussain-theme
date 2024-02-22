<?php
/**
 * Template Name: My Service
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
								<h1 class="page-title">My Sercive</h1>
							</header><!-- page-header -->
						</div><!-- col-xl-12 -->
					</div><!-- .row -->	
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
							<div class="skill-img">
								<img class="service-photo" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/web_development.png" alt="web development">
							</div><!-- Skill Image -->
						</div><!-- col-xl-6 -->
						<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
							<div class="service-text">
								<ul>
									<li><i class="fas fa-angle-double-right"></i>WordPress Theme Development</li>
									<li><i class="fas fa-angle-double-right"></i>PHP Web Application</li>
									<li><i class="fas fa-angle-double-right"></i>WordPress Theme Customization</li>
									<li><i class="fas fa-angle-double-right"></i>HTML5 and CSS3 Template Design</li>
									<li><i class="fas fa-angle-double-right"></i>WordPress Template Design</li>
									<li><i class="fas fa-angle-double-right"></i>Redesign the WordPress Website</li>
									<li><i class="fas fa-angle-double-right"></i>Redesign of PHP Website</li>
									<li><i class="fas fa-angle-double-right"></i>Website Design and Development</li>
									<li><i class="fas fa-angle-double-right"></i>Responsive Website Design</li>

								</ul>
							</div><!-- Skill text -->
						</div><!-- col-xl-6 -->
					</div><!-- .row -->		
				</main><!-- .main-section -->
			</div><!-- col-cl-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .content-section -->

<?php
get_footer();
