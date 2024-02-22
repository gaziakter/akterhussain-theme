<?php
/**
 * Template part for displaying main content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Akter_Hussain
 */

?>

<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
	<article class="blog-post">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-image') ?></a>
		<div class="blog-text">
			<h4 class="post-titme"><?php the_time('F j, Y'); ?></h4>
			<h2 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_excerpt(); ?>
			<div class="cate-read">
				<?php the_category( ' | ' ); ?>
			</div><!-- .cate-read -->
		</div><!-- blog-text -->
		<a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
	</article><!-- .blog-post -->
</div><!-- .col-xl-6 -->