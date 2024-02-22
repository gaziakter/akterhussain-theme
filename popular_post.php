<?php
/**
 * Template Name: Popular Post
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Moni_Recipe
 */
get_header();


?>

<main class="page-main-section">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
				<div class="popular-page-content">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<?php the_title( '<h1 class="catagory-title">', '</h1>' ); ?>
						</div>
					</div>
					<div class="row">
						
						<?php
						$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
						$args = array(
							'post_per_page' => 10,
							'paged'         => $paged,
							'meta_key' => 'my_post_viewed',
							'orderby' => 'meta_value_num',
							'order'=> 'DESC'
						);
						$the_query = new WP_Query( $args );

						global $wp_query;
// Put default query object in a temp variable
						$tmp_query = $wp_query;
// Now wipe it out completely
						$wp_query = null;
// Re-populate the global with our custom query
						$wp_query = $the_query;

						if ($the_query->have_posts()) : 
							while ($the_query->have_posts()) : $the_query->the_post(); ?>

							<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<div class="post-content">
									<div class="img-hover-zoom">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post_img_size'); ?></a>
									</div>
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<div class="content-option">
										<span class="cate-style option content-date"><i class="fas fa-calendar-alt"></i> <a href="<?php the_permalink(); ?>"> <?php the_time('M j, Y'); ?></a></span>
										<span class="cate-style option category"><i class="fas fa-clipboard-list"></i><?php the_category( ' | ' ); ?></span>

									</div>
									<?php the_excerpt(); ?>
									<a class="btn-marzin moni-btn" href="<?php the_permalink(); ?>">Read More</a>
								</div>
							</div>


						<?php  endwhile;
						?>
							<div class="col-xl-12">
								<div class="pagination-content">

									<?php
									previous_posts_link('<i class="fas fa-long-arrow-alt-left"></i> Previous posts'); ?>  <?php
									next_posts_link( 'Next posts <i class="fas fa-long-arrow-alt-right"></i>', $the_query->max_num_pages );
									wp_reset_postdata();
									?>
								</div><!-- pagination-content -->
							</div>

						<?php
					else :
    // no post found code 
					endif;

// Restore original query object
					$wp_query = null;
					$wp_query = $tmp_query;



					?>

				</div>
			</div>
		</div>
		<div class=" col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
			<?php get_template_part( 'template-parts/content', 'monisidebar' ); ?>
		</div>
	</div>
</div>

</main><!-- #main -->

<?php
get_footer();
