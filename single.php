<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
					<div class="moni-single-content">
						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', get_post_type() );

							

			// If comments are open or we have at least one comment, load up the comment template.
				//			if ( comments_open() || get_comments_number() ) :
				//				comments_template();
				//			endif;

		endwhile; // End of the loop.
		?>
		
	</div>
	<div class="related-post-content">
		<h2 class="related-first-title"><?php _e('Related Posts', 'akterhussain'); ?></h2>
		<div class="row">
			<?php

			$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
			if( $related ) foreach( $related as $post ) {
				setup_postdata($post); ?>

				<div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
					<div class="related-content">
						<div class="img-hover-zoom">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post_img_size'); ?></a>
						</div>
						<h2 class="related-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

					</div><!-- related-content -->
				</div><!-- col-xl-6 -->   

				<?php }
				wp_reset_postdata(); ?>
			</div><!-- row -->	
		</div><!-- related-post-content  -->

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
