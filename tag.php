<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Moni_Recipe
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="page-main-section">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
					<?php if ( have_posts() ) : ?>

						<header class="page-header">
						    <h1 class="catagory-title"><?php single_tag_title(); ?></h1>
						</header><!-- .page-header -->

						<div class="row">
							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();
								?>
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
								<?php
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
				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
					<?php get_template_part( 'template-parts/content', 'monisidebar' ); ?>
				</div>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
