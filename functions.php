<?php
/**
 * Akter Hussain functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Akter_Hussain
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'akter_hussain_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function akter_hussain_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Akter Hussain, use a find and replace
		 * to change 'akter-hussain' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'akter-hussain', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size('post-image', 750, 422, true);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary_menu' => esc_html__( 'Primary Menu', 'akter-hussain' ),
				'footer_menu' => esc_html__( 'Footer Menu', 'akter-hussain' ),
				'category_menu' => esc_html__( 'Category Menu', 'akter-hussain' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'akter_hussain_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		//custom_excerpt_length
		function custom_excerpt_length( $length ) {
			return 30;
		}
		add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


		//custom_excerpt_ read more
		function my_theme_excerpt_more( $more ) {
			return false;
		}
		add_filter( 'excerpt_more', 'my_theme_excerpt_more' );

	}
endif;
add_action( 'after_setup_theme', 'akter_hussain_setup' );


//Popular Post
function count_post_visits() {
	if( is_single() ) {
		global $post;
		$views = get_post_meta( $post->ID, 'my_post_viewed', true );
		if( $views == '' ) {
			update_post_meta( $post->ID, 'my_post_viewed', '1' );	
		} else {
			$views_no = intval( $views );
			update_post_meta( $post->ID, 'my_post_viewed', ++$views_no );
		}
	}
}
add_action( 'wp_head', 'count_post_visits' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function akter_hussain_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'akter_hussain_content_width', 640 );
}
add_action( 'after_setup_theme', 'akter_hussain_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function akter_hussain_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'akter-hussain' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'akter-hussain' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'akter_hussain_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function akter_scripts() {

	wp_enqueue_style( 'akter-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.3.1', 'all' );
	wp_enqueue_style( 'akter-fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.all.min.css', array(), '5.10.2', 'all' );
	wp_enqueue_style( 'akter-css-circular-prog-bar', get_template_directory_uri() . '/assets/css/css-circular-prog-bar.css', array(), '5.10.2', 'all' );
	wp_enqueue_style( 'akter-style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'akter-modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.7.1.min.js', array(), '3.7.1', false );
	wp_enqueue_script( 'akter-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.3.1', true );
	wp_enqueue_script( 'akter-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '4.3.1', true );
	wp_enqueue_script( 'akter-plugins', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), '4.3.1', true );
	wp_enqueue_script( 'akter-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'akter_scripts' );


