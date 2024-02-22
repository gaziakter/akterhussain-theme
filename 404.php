<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Moni_Recipe
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main class="page-main-section">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
						<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="result-notfound"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'akterhussain' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'akterhussain' ); ?></p>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
					</div>
					<div class="col-12 col-sm-12 col-lg-4 col-xl-4">
						<?php get_template_part( 'template-parts/content', 'monisidebar' ); ?>
					</div>
				</div>
			</div>

			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
