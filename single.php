<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Akter_Hussain
 */

get_header();
?>

<div class="content-section">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
				<main class="main-section">
					<div class="row">

						<?php
						while ( have_posts() ) :
							the_post();

							// Template for Single post content
							get_template_part( 'template-parts/content', 'single' ); 

						endwhile; // End of the loop.
						?>

					</div><!-- .row -->
				</main><!-- .main-section -->

					<?php 
						// Template for Sidebar Related post
						get_template_part( 'template-parts/content', 'related_post' ); 
					?>

			</div><!-- col-xl-8 -->
			<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
				<aside class="home-sidebar">

					<?php 
						// Template for Sidebar Popular post
						get_template_part( 'template-parts/content', 'popular_post' );
					?>

				</aside><!-- .home-sidebar -->
			</div><!-- col-xl-4 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .content-section -->

<?php
get_footer();
