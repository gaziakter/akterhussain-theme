<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moni_Recipe
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
<meta name="google-site-verification" content="pyZQ0HYVitEeB_Ki6ZhsbuQy6_L2RnZ5rcOMqih_OJQ" />	
	
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150975605-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-150975605-1');
</script>

</head>

<body <?php body_class(); ?>>

	<header class="forallpage header-section">
		<div class="container">
			<div class="row">
				<div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="logo-area">
						<?php the_custom_logo(); ?>
					</div><!-- Logo area -->
				</div><!-- col-xl-3 -->
				<div class="col-6 col-sm-6 col-md-6 col-lg-7 col-xl-6">
									<div class="mobile-header">
						<button class="search-mobile"><i class="fas fa-search"></i></button>
						<div class="mobile-search-content">
							<form action="<?php echo home_url('/'); ?>" method="get">
								<input class="input-search-text" type="search" placeholder="Search keyword..." name="s">
								<input type="submit" name="" value="Search">
							</form>
						</div>
						<button class="category-mobile"><i class="fas fa-list-ul"></i></button>
						<div class="mobile-category-content">
							<h2 class="top-catagories-title">All Categories</h2>
							<nav class="mobile-cate-menu">
								<?php 
							wp_nav_menu( array(
								'theme_location' => 'category_menu'
							) );

							?>
							</nav>
						</div>

						<button class="menu-mobile"><i class="fas fa-bars"></i></button>
						<nav class="mobile-main-menu">
							<?php 
							wp_nav_menu( array(
								'theme_location' => 'main_menu'
							) );

							?>
						</nav>
					</div>
					<div class="category-search-area">
						<button id="" class="categories-btn" type="">All Categories <i class="fas fa-chevron-down"></i></button>
						<form action="<?php echo home_url('/'); ?>" method="get">
							<input class="search-text" type="search" placeholder="Search keyword..." name="s">
							<input type="submit" name="" value="Search">
						</form>
					</div>

					<div class="category-content">
						<h2 class="top-catagories-title">All Categories</h2>
						<div class="close-btn">+</div>
						<nav class="header-catagories-menu">
							<?php 
							wp_nav_menu( array(
								'theme_location' => 'category_menu'
							) );

							?>
						</nav>
					</div>
				</div><!-- col-xl-8 -->
				<div class="col-lg-2 col-xl-3">
					<div class="main-menu-area">
						<button class="main-menu-btn" type=""><i class="fas fa-bars"></i></button>
						<nav class="main-menu-content">
							<?php 
							wp_nav_menu( array(
								'theme_location' => 'main_menu'
							) );

							?>
						</nav>
					</div>
				</div><!-- col-xl-1 -->
			</div><!-- Row -->
		</div><!-- Container -->

	</header><!-- header-section -->
