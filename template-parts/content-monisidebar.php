<?php
/**
 * Template part for Single sidebar
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Moni_Recipe
 */

?>

<aside class="single-sidebar">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>

	<!-- Recent Posts -->
	<div class="recent-side-area">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-xl-12">
				<h2 class="side-post-title"> Recent Posts</h2>
			</div>
		</div>
		<div class="row">
			<?php 
							// the query
			$sidebar_recent = new WP_Query( array(

				'post_type' => 'post',
				'posts_per_page' => 5,

				)); ?>

				<?php if ( $sidebar_recent->have_posts() ) : ?>

					<!-- pagination here -->

					<!-- the loop -->
					<?php while ( $sidebar_recent->have_posts() ) : $sidebar_recent->the_post(); ?>
						<div class="col-12 col-sm-6 col-md-6 col-lg-12 col-xl-12">
							<div class="side-recent-content">

								<div class="sideimage img-hover-zoom">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post_img_size'); ?></a>
								</div>
								<h2 class="skideimage-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							</div>
						</div>
					<?php endwhile; ?>
					<!-- end of the loop -->



					<?php wp_reset_postdata(); ?>

				<?php else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>

			</div>

		</div>


		<!-- Popular Posts -->
		<div class="recent-side-area">
			<div class="row">
				<div class="col-12 col-sm-6 col-md-6 col-xl-12">
					<h2 class="side-post-title"> Popular Posts</h2>
				</div>
			</div>
			<div class="row">

				<?php 
							// the query
				$sidebar_popular = new WP_Query( array(

					'post_type' => 'post',
					'posts_per_page' => 5,
					'meta_key' => 'my_post_viewed',
					'orderby' => 'meta_value_num',
					'order'=> 'DESC'

					)); ?>

					<?php if ( $sidebar_popular->have_posts() ) : ?>

						<!-- pagination here -->

						<!-- the loop -->
						<?php while ( $sidebar_popular->have_posts() ) : $sidebar_popular->the_post(); ?>
							<div class="col-12 col-sm-6 col-md-6 col-lg-12 col-xl-12">
								<div class="side-recent-content">

									<div class="sideimage img-hover-zoom">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post_img_size'); ?></a>
									</div>
									<h2 class="skideimage-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
		</aside>

