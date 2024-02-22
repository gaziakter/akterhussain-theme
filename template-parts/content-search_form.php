<?php
/**
 * Template part for displaying search form
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Akter_Hussain
 */

?>

<div class="search-home">
	<form action="<?php echo home_url('/'); ?>" method="get">
		<input class="input-search-text" type="search" placeholder="Search keyword..." name="s">
		<input type="submit" name="" value="Search">
	</form>
</div>