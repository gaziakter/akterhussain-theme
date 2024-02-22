<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Moni_Recipe
 */

?>

<article class="search-content-area">
	<div class="search-img img-hover-zoom">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post_img_size'); ?></a>
	</div>
	<div class="search-text">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<span class="search-category"><i class="fas fa-clipboard-list"></i> <?php the_category( ' | ' ); ?></span>
		<a class="search-paragraph" href="<?php the_permalink(); ?>"><?php
		$content = get_the_content();
		echo wp_trim_words( $content , '20' ); ?></a>
	</div>
</article>
