<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) :
								the_post(); 

								// Template for main content
								get_template_part( 'template-parts/content', 'main' );
								
							endwhile; 

								// Template for main pagination
								get_template_part( 'template-parts/content', 'pagination' );

							else :

								// Template for not found any post
								get_template_part( 'template-parts/content', 'none' );

						endif; 
							?>
						
					</div><!-- .row -->
				</main><!-- .main-section -->
			</div><!-- col-cl-8 -->
			<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
				<aside class="home-sidebar">
					<?php 
						// Template for Sidebar Popular post
						get_template_part( 'template-parts/content', 'popular_post' );
					?>
				</aside><!-- .home-sidebar -->
			</div><!-- col-cl-4 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .content-section -->

<?php
get_footer();
