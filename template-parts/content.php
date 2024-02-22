<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Moni_Recipe
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		the_title( '<h1 class="single-title">', '</h1>' );
		?>
		<div class="single-option">
			<span class="single-date"> Post on <a href="<?php the_permalink(); ?>"> <?php the_time('F j, Y'); ?></a></span>
			<span class="single-content-admin"> by <a href=""><?php the_author(); ?></a></span>
			<span class="single-category"> in <?php the_category(' , '); ?> category</span>
		</div>
	</header><!-- .entry-header -->

	<?php moni_recipe_post_thumbnail(); ?>
	
	<div class="single-content disableselect">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	<?php the_tags(' ', ' | ', ' '); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
