<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Akter_Hussain
 */

get_header();
?>

<div class="content-section">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
				<main class="main-section">
					<div class="row">
						<div class="col-xl-12">
							<header class="page-header">
								<h1 class="not-title"><?php esc_html_e( 'Oops! That can&rsquo;t be found.', 'akter-hussain' ); ?></h1>
							</header><!-- .page-header -->
							<div class="not-content">
								<p><?php esc_html_e( 'It looks like nothing was found at this location. Try it out with the right keyword from search.', 'akter-hussain' ); ?></p>
								<?php 

								// Template for not found any post
								get_template_part( 'template-parts/content', 'search_form' );

								?>
							</div><!-- not-content -->
						</div>
					</div>
					
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