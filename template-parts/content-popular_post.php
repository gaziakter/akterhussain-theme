<?php
/**
 * Template part for displaying Pupolar posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Akter_Hussain
 */

?>

<section class="popular-post">
	<h2 class="popular-title">Popular Posts</h2>
	<div class="popular-post-area">
		<div class="row">
			<?php 
							// the query
			$sidebar_popular = new WP_Query( array(

				'post_type' => 'post',
				'posts_per_page' => 10,
				'meta_key' => 'my_post_viewed',
				'orderby' => 'meta_value_num',
				'order'=> 'DESC'

				)); ?>

				<?php if ( $sidebar_popular->have_posts() ) : ?>

					<!-- pagination here -->

					<!-- the loop -->
					<?php while ( $sidebar_popular->have_posts() ) : $sidebar_popular->the_post(); ?>
						<div class="col-12 col-sm-6 col-md-6 col-lg-12 col-xl-12">
							<div class="popular-post-content">
								<div class="popular-left">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-image'); ?></a>
								</div><!-- .popular-left -->
								<div class="popular-right">
									<h2 class="popular-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								</div><!-- .popular-right -->
							</div><!-- .popular-post-content -->
						</div><!-- .col-12 col-sm-6 col-md-6 col-lg-12 col-xl-12 -->
					<?php endwhile; ?>
					<!-- end of the loop -->

					<?php wp_reset_postdata(); ?>

				<?php else : ?>
					<p><?php _e( 'Sorry, Popular Post not available.', 'akter-hussain'); ?></p>
				<?php endif; ?>
		</div> <!-- row -->
	</div><!-- .popular-post-area -->
</section><!-- .popular-post -->

