<?php
/**
 * Template part for displaying pagination
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Akter_Hussain
 */

?>

<div class="akter-posts-pagination">
	<?php 
	the_posts_pagination( array(
		'screen_reader_text' => __( ' ' ),
		'mid_size' => 2,
		'prev_text' => __( '<i class="fas fa-chevron-left"></i>', 'akter-hussain' ),
		'next_text' => __( '<i class="fas fa-chevron-right"></i>', 'akter-hussain' ),
	) );  
	?>
</div><!-- akter-posts-pagination -->