<?php
/**
 * Template part for displaying Single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Akter_Hussain
 */

?>

<div class="col-xl-12">
	<article class="single-post">
		<header class="single-header">
			<h1 class="single-title"><?php the_title(); ?></h1>
			<h3 class="time-category">Posted on <span class="single-category"><?php the_category( ' | ' ); ?></span> category on
				<span class="single-time"><?php the_time('F j, Y'); ?></span>

			</h3>
		</header><!-- .single-header -->
		<div class="single-thumbnail"><?php the_post_thumbnail('post-image') ?></div><!-- .single-thumbnail -->
		<div class="single-content">
			<?php the_content(); ?>
		</div><!-- single-content -->
		<footer class="single-footer">
			<div class="tag-area">
				<?php the_tags(' ', ' | ', ' '); ?>
			</div><!-- tag-area -->
			<div class="conmment-area">
				<?php // If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif; ?>
			</div><!-- conmment-area -->
		</footer><!-- .entry-footer -->
	</article><!-- .single-post -->
</div><!-- .col-xl-12 -->