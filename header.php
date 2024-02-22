<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Akter_Hussain
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-6 col-xl-4">
					<div class="site-branding">
						<?php the_custom_logo(); ?>
					</div><!-- .site-branding -->
				</div><!-- .col-xl-4 -->
				<div class="col-6 col-xl-8">
					<div class="primary-menu">
						<nav class="akter-navigation">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'primary_menu'
							) );
							?>
						</nav><!-- .akter-navigation -->
					</div><!-- rimary-menu -->
					<div class="search-area">
						<button class="menu-option"><i class="fas fa-bars"></i></button>
						<div class="mobiile-menu-area">
							<nav class="mobile-menu">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'primary_menu'
							) );
							?>
						</nav><!-- mobile-menu -->
						<div class="menu-hide"></div>
						</div><!-- mobiile-menu-area -->
						<button class="search-option"><i class="fas fa-search"></i></button>
						<div class="search-content">
							<form action="<?php echo home_url('/'); ?>" method="get">
								<input class="input-search-text" type="search" placeholder="Search keyword..." name="s">
								<input type="submit" name="" value="Search">
							</form>
							<div class="search-hide"></div>
						</div>
						</div><!-- search-content -->
					</div><!--search-area -->
				</div><!-- .col-xl-8 -->
			</div><!-- .row -->
		</div><!-- .container -->
	</header><!-- .header-section -->