<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Moni_Recipe
 */
get_header();
?>

<section id="primary" class="content-area">
	<main class="page-main-section">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">

					<?php if ( have_posts() ) : ?>

						<header class="page-header">
							<h1 class="result-title">
								<?php
								/* translators: %s: search query. */
								printf( esc_html__( 'Search Results for : %s', 'akterhussain' ), '<span class="search-key">' . get_search_query() . '</span>' );
								?>
							</h1>
						</header><!-- .page-header -->	
		
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
					

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );
				
				endwhile;

				the_posts_pagination( array(
					'screen_reader_text' => __( ' ' ),
					'mid_size' => 2,
					'prev_text' => __( '<i class="fas fa-chevron-left"></i>', 'akterhussain' ),
					'next_text' => __( '<i class="fas fa-chevron-right"></i>', 'akterhussain' ),
				) ); 

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>


</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
	<?php get_template_part( 'template-parts/content', 'monisidebar' ); ?>

</div>



</div>
</div>

</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
