<?php
/**
 * Template part for displaying related post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Akter_Hussain
 */

?>

<div class="related-post-content">
	<h2 class="related-title"><?php _e('Related Posts', 'akter-hussain'); ?></h2>
	<div class="row">
		<?php

		$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
		if( $related ) foreach( $related as $post ) {
			setup_postdata($post); ?>

			<div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="related-content">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-image') ?></a>
					<h2 class="related-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				</div><!-- related-content -->
			</div><!-- col-xl-6 -->   

			<?php } 
			else{
				_e ("<h4 class='not-post'>Related Post Not Available</h4>", "akter-hussain");
			}
			wp_reset_postdata(); ?>
		</div><!-- row -->	
</div><!-- related-post-content  -->