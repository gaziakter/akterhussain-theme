<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
						if ( have_posts() ) : ?>

						<div class="col-xl-12">
							<header class="page-header">
								<h1 class="page-title">
									<?php
									/* translators: %s: search query. */
									printf( esc_html__( 'Search Results for : %s', 'akter-hussain' ), '<span>' . get_search_query() . '</span>' );
									?>
								</h1>
							</header><!-- .page-header -->
						</div>
					</div>
					<div class="row">

						<?php
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
