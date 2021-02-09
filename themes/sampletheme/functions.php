<?php
/**
 * Sample Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sample_Theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'sampletheme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sampletheme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Sample Theme, use a find and replace
		 * to change 'sampletheme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'sampletheme', get_template_directory() . '/languages' );

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

		function sampletheme_menus() {

			$locations = array(
				'menu-primary'  => esc_html__( 'Desktop Horizontal Menu', 'sampletheme' ),
				'expanded' => esc_html__( 'Desktop Expanded Menu', 'sampletheme' ),
				'mobile'   => esc_html__( 'Mobile Menu', 'sampletheme' ),
				'footer'   => esc_html__( 'Footer Menu', 'sampletheme' ),
				'social'   => esc_html__( 'Social Menu', 'sampletheme' ),
			);
		
			register_nav_menus( $locations );
		}
		add_action( 'init', 'sampletheme_menus' );

		// This theme uses wp_nav_menu() in one location.
			// register_nav_menus(
			// 	array(
			// 		'menu-primary' => esc_html__( 'Primary', 'sampletheme' ),
			// 	),
			// 	array(
			// 		'footer'   => esc_html__( 'Footer Menu', 'sampletheme' ),
			// 	)
			// );

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
				'style',
				'script',
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

		/**
		 * Addd support for block style
		 */
		// add_theme_support( 'wp-block-styles' );
		add_theme_support( 'align-wide' );

		/**
		 * Add Colour Palette
		 */
		add_theme_support( 'editor-color-palette', array(
			array(
				'name' => esc_attr__( 'Pink', 'sampletheme' ),
				'slug' => 'pink',
				'color' => '#FCF0F0',
			),
			array(
				'name' => esc_attr__( 'Brown', 'sampletheme' ),
				'slug' => 'brown',
				'color' => '#615156',
			),
			array(
				'name' => esc_attr__( 'Pinkyish Brown', 'sampletheme' ),
				'slug' => 'pinkish brownn',
				'color' => '#564854',
			),
			array(
				'name' => esc_attr__( 'Rose Gold', 'sampletheme' ),
				'slug' => 'rose gold',
				'color' => '#e79d71',
			)
			
		) );

		/**
		 * Add support for font size
		 * 
		 */
		add_theme_support( 'editor-font-sizes', array(
			array(
				'name' => esc_attr__( 'Small', 'sampletheme' ),
				'size' => 12,
				'slug' => 'small'
			),
			array(
				'name' => esc_attr__( 'Regular', 'sampletheme' ),
				'size' => 16,
				'slug' => 'regular'
			),
			array(
				'name' => esc_attr__( 'Large', 'sampletheme' ),
				'size' => 36,
				'slug' => 'large'
			)
		) );
		/**
		 * Supporting custom line heights
		 */

		add_theme_support( 'custom-line-height' );

		/**
		 * Disabling the default block patterns
		 */
		remove_theme_support( 'core-block-patterns' );
		
		/**
		 * Responsive embedded content
		 */
		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'sampletheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sampletheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sampletheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'sampletheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sampletheme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'sampletheme' ),
			'id'            => 'sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'sampletheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'sampletheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
	function sampletheme_scripts() {

		$primary_style = 'sampletheme-style';

		wp_enqueue_style( $primary_style, get_stylesheet_uri(), array(), _S_VERSION );
		
		//Enqueue Foundation
		wp_enqueue_style( 'foundation-style', get_stylesheet_directory_uri() . '/assets/css/vender/foundation.css');
		wp_enqueue_script('foundation-script', get_stylesheet_directory_uri() . '/assets/js/vender/foundation.js', array(), false, true);
		// Enqueue custom css style sheet
		wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/assets/css/custom.css', array($primary_style));

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'sampletheme_scripts' );

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
 * Enqueinng block editor assets
 */
function sampletheme_enqueue_block_editor_assets() {
	wp_enqueue_script(
		'editor-script',
		get_template_directory_uri() . '/assets/js/editor.js',
		array(
			'wp-blocks',
			'wp-dom-ready', 
			'wp-edit-post'
		)
	);
}
add_action('enqueue_block_editor_assets','sampletheme_enqueue_block_editor_assets');

/**
 * Enqueinng block assets which will load on front-end and back-end 
 */

function sampletheme_enqueue_block_assets() {
	wp_enqueue_style(
		'blocks-style',
		get_template_directory_uri() . '/assets/css/blocks.css',
	);
}
add_action('enqueue_block_assets' , 'sampletheme_enqueue_block_assets');