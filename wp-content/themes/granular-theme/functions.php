<?php
/**
 * launchframe functions and definitions
 *
 * @package launchframe
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

function dev_env(){
	global $devenv;
	return $devenv == false;
}

if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'launchframe_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
add_image_size( 'staff', 250, 300, true ); // (cropped)
function launchframe_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on _s, use a find and replace
	 * to change 'launchframe' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'launchframe', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'launchframe' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'launchframe_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // launchframe_setup
add_action( 'after_setup_theme', 'launchframe_setup' );
add_action( 'after_setup_theme', 'baw_theme_setup' );
function baw_theme_setup() {
  add_image_size( 'hero-img', 1440, 600, true ); // 300 pixels wide (and unlimited height)
  add_image_size( 'thumbnail', 300, 250, true ); // (cropped)
}
/**
 * Register widgetized area and update sidebar with default widgets
 */
function launchframe_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'launchframe' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'launchframe_widgets_init' );


function my_init()   
{  
    if (!is_admin())   
    {  
        wp_deregister_script('jquery');  
    }  
}  
add_action('init', 'my_init');  

/**
 * Enqueue scripts and styles
 */
function launchframe_scripts() {
	// Theme definition
	wp_enqueue_style( 'launchframe-style', get_stylesheet_uri() );

	if (dev_env()){
		wp_enqueue_style( 'launchframe-style-custom', get_template_directory_uri() . "/assets/dist/css/style.css"  );
		wp_enqueue_script( 'buildjs', get_template_directory_uri() . '/assets/dist/js/script.js', array( 'jquery' ), '201301.2', true );
	} else {
		wp_enqueue_style( 'launchframe-style-custom', get_template_directory_uri() . "/assets/dist/css/style.min.css"  );
		wp_enqueue_script( 'buildjs', get_template_directory_uri() . '/assets/dist/js/script.min.js', array( 'jquery' ), '201301.2', true );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'launchframe_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/custom-post-types.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

function return_imgix($url, $width, $height, $quality, $format = 'jpq', $echo = true) {
	$url_endpoint = parse_url($url);
	$url_endpoint = $url_endpoint['path'];
	if ($height) {
		$image_string = 'https://chelseasalon.imgix.net'.$url_endpoint.'?w='.$width.'&h='.$height.'&q='.$quality.'&fm='.$format;
	} else {
		$image_string = 'https://chelseasalon.imgix.net'.$url_endpoint.'?w='.$width.'&q='.$quality.'&fm='.$format;
	}
	if ($echo) {
		echo $image_string;
	} else {
		return $image_string;
	}
}