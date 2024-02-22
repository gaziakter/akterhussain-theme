<?php
/**
 * Template part for displaying page content in page.php
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
		</header><!-- .single-header -->
		<div class="single-content">
			<?php the_content(); ?>
		</div><!-- single-content -->
		<footer class="single-footer">
			
		</footer><!-- .entry-footer -->
	</article><!-- .single-post -->
</div><!-- .col-xl-12 -->