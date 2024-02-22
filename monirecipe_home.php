<?php
/**
 * Template Name: Moni Recipe Home
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Moni_Recipe
 */

get_header();
?>

<main class="main-section">
	<section class="hero-section" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/bg2.jpg);">

		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<div class="hero-blog-area">
						<div class="one-time">

							<?php 
							// the query
							$hero_post = new WP_Query( array(

								'post_type' => 'post',
								'posts_per_page' => 10,

								)); ?>

								<?php if ( $hero_post->have_posts() ) : ?>

									<!-- pagination here -->

									<!-- the loop -->
									<?php while ( $hero_post->have_posts() ) : $hero_post->the_post(); ?>

										<div class="hero-slider-content">
											<h2><?php the_title(); ?></h2>
											<?php the_excerpt(); ?>
											<a class="moni-btn" href="<?php the_permalink(); ?>">Read More</a>
										</div>

									<?php endwhile; ?>
									<!-- end of the loop -->

									<!-- pagination here -->

									<?php wp_reset_postdata(); ?>

								<?php else : ?>
									<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
								<?php endif; ?>

							</div><!-- hero-slider -->
						</div><!-- hero-blog-area -->
					</div><!-- col-xl-6 -->
				</div><!-- /row -->
				<div class="row">
					<div class="col-lg-4 offset-lg-8">
						<div class="hero-social">
							<ul>
								<li><a target="_blank" href="https://www.facebook.com/monirecipe/"><i class="fab fa-facebook-f"></i></a></li>
								<li><a target="_blank" href="#"><i class="fab fa-instagram"></i></a></li>
								<li><a target="_blank" href="https://twitter.com/MoniRecipe"><i class="fab fa-twitter"></i></a></li>
								<li><a target="_blank" href="https://www.pinterest.com/monirecipe/"><i class="fab fa-pinterest-p"></i></a></li>
								<li><a target="_blank" href="#"><i class="fab fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div><!-- /containern -->
		</section><!-- /hero-section -->

		<section class="recent-post-section section-padding">
			<div class="container">

				<div class="row">		
					<?php 
							// the query
					$recent_post = new WP_Query( array(

						'post_type' => 'post',
						'posts_per_page' => 8,

						)); ?>

						<?php if ( $recent_post->have_posts() ) : ?>

							<!-- pagination here -->

							<!-- the loop -->
							<?php while ( $recent_post->have_posts() ) : $recent_post->the_post(); ?>


								<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
									<div class="post-content">
										<div class="img-hover-zoom">
											<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post_img_size'); ?></a>
										</div>
										<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
										<div class="content-option">
											<span class="option content-admin"><i class="fas fa-user"></i><a href=""><?php the_author(); ?></a>
											</span>
											<span class="option content-date"><i class="fas fa-calendar-alt"></i> <a href="<?php the_permalink(); ?>"> <?php the_time('M j, Y'); ?></a></span>

											
											<span class="option category"><i class="fas fa-clipboard-list"></i>
												<?php the_category( ' | ' ); ?></span>
											</div>
											<?php the_excerpt(); ?>
											<a class="btn-marzin moni-btn" href="<?php the_permalink(); ?>">Read More</a>

										</div>
									</div>

								<?php endwhile; ?>
								<!-- end of the loop -->

								<!-- pagination here -->

								<?php wp_reset_postdata(); ?>

							<?php else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
							<?php endif; ?>

						</div>
					</div>
				</section>

				<section class="post-gallery-section section-padding">
					<div class="container">
						<div class="row">
							<div class="col-xl-12">


								<?php 
							// the query
								$image_gallery = new WP_Query( array(

									'post_type' => 'post',
									'posts_per_page' => 8,

									)); ?>

									<?php if ( $image_gallery->have_posts() ) : ?>

										<!-- pagination here -->

										<!-- the loop -->
										<?php while ( $image_gallery->have_posts() ) : $image_gallery->the_post(); ?>

											<div class="image-gallery">
												<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post_img_size'); ?></a>
											</div>

										<?php endwhile; ?>
										<!-- end of the loop -->

										<!-- pagination here -->

										<?php wp_reset_postdata(); ?>

									<?php else : ?>
										<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
									<?php endif; ?>

								</div>
							</div>
						</div>
					</section>

					<section class="pupolar-post-section section-padding">
						<div class="container">
							<div class="row">



								<?php 
							// the query
								$popular_post = new WP_Query( array(

									'post_type' => 'post',
									'posts_per_page' => 8,
									'meta_key' => 'my_post_viewed',
									'orderby' => 'meta_value_num',
									'order'=> 'DESC'

									)); ?>

									<?php if ( $popular_post->have_posts() ) : ?>

										<!-- pagination here -->

										<!-- the loop -->
										<?php while ( $popular_post->have_posts() ) : $popular_post->the_post(); ?>


											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
												<div class="post-content">
													<div class="img-hover-zoom">
														<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post_img_size'); ?></a>
													</div>
													<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
													<div class="content-option">
														<span class="option content-admin"><i class="fas fa-user"></i><a href=""><?php the_author(); ?></a>
														</span>
														<span class="option content-date"><i class="fas fa-calendar-alt"></i> <a href="<?php the_permalink(); ?>"> <?php the_time('M j, Y'); ?></a></span>

														
														<span class="option category"><i class="fas fa-clipboard-list"></i>
															<?php the_category( ' | ' ); ?></span>
														</div>
														<?php the_excerpt(); ?>
														<a class="btn-marzin moni-btn" href="<?php the_permalink(); ?>">Read More</a>

													</div>
												</div>

											<?php endwhile; ?>
											<!-- end of the loop -->

											<!-- pagination here -->

											<?php wp_reset_postdata(); ?>

										<?php else : ?>
											<p><?php _e( 'Sorry, no posts matched your criteria.', 'akterhussain' ); ?></p>
										<?php endif; ?>

									</div>
								</div>
							</section>

						</main><!-- main-section -->

						<?php
						get_footer();
