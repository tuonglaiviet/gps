<?php
/**
 * Gwinnett PS functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Gwinnett_PS
 */

if ( ! function_exists( 'gwinnett_ps_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gwinnett_ps_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Gwinnett PS, use a find and replace
		 * to change 'gwinnett-ps' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gwinnett-ps', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'gwinnett-ps' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'gwinnett_ps_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'gwinnett_ps_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gwinnett_ps_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'gwinnett_ps_content_width', 640 );
}
add_action( 'after_setup_theme', 'gwinnett_ps_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gwinnett_ps_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'gwinnett-ps' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'gwinnett-ps' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'gwinnett_ps_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gwinnett_ps_scripts() {
	// wp_enqueue_style( 'gwinnett-ps-style', get_stylesheet_uri() );
	wp_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
    
	wp_enqueue_style('gwinnett-ps-style', get_theme_file_uri('/temp/css/main.css'), NULL, microtime());
	wp_enqueue_style('fancybox-style', get_theme_file_uri('/temp/css/jquery.fancybox.min.css'), NULL, microtime());
	/*wp_enqueue_script( 'boot1','https://code.jquery.com/jquery-3.3.1.slim.min.js', array('jquery'));*/
	wp_enqueue_script( 'boot1','https://code.jquery.com/jquery-3.4.1.min.js', array('jquery'));
	wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'));
	wp_enqueue_script( 'boot2','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array('jquery'));
	

	wp_enqueue_script('match-height-js', get_theme_file_uri('/js/jquery.matchHeight.js'), NULL, microtime() , true);
	wp_enqueue_script('gwinnett-ps-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime() , true);
	wp_enqueue_script('fancybox-js', get_theme_file_uri('/js/jquery.fancybox.min.js'), NULL, microtime() , true);
	

	wp_enqueue_script( 'gwinnett-ps-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'gwinnett-ps-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gwinnett_ps_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
show_admin_bar(false);
function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyBBHTA4GehSH_vtE6ildGWV8XBV7Z80YGc');
}

add_action('acf/init', 'my_acf_init');

add_image_size( 'our-success-thumb', 700, 370 );
add_image_size( 'our-success-mb-thumb', 280, 370 );
add_image_size( 'mb-thumb', 376, 467 );
add_image_size( 'mb-small-thumb', 375, 262 );