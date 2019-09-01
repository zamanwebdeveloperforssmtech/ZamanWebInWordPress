<?php
/**
 * blogstyle functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blogstyle
 */
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
if ( ! isset( $content_width ) ) $content_width = 640;

function blogstyle_setup()  {
    /*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on blogstyle Theme, use a find and replace
	 */
	load_theme_textdomain( 'blogstyle', get_template_directory() . '/languages' );

    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'automatic-feed-links' );

    // Add theme support for Custom Header
    $args = array(
    'flex-width'    => true,
    'width'         => 980,
    'flex-height'   => true,
    'height'        => 200,
    'default-image' => get_template_directory_uri() . '/assets/images/banner.jpg',
    );
    add_theme_support( 'custom-header', $args );
	
	// Add theme support for Custom Background
	$background_args = array(
		'default-color'          => '#cccccc',
		'default-image' 		 => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-background', $background_args );
   
    // Add theme support for Custom Logo
	$defaults = array(
        'height'      => 71,
        'width'       => 255,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );

    /*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

    // This theme uses wp_nav_menu() in one location. 
    register_nav_menus(
    array(
      'header-menu' => esc_html__( 'Header Menu', 'blogstyle' ),
      )
    );

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
}

add_action( 'after_setup_theme', 'blogstyle_setup' );


// wp enque script and style
function blogstyle_scripts() {
    // blogstyle styles
    wp_enqueue_style( 'blogstyle-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', true, '', 'all' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', false, '', 'all' );
	wp_enqueue_style( 'blogstyle-styles', get_template_directory_uri() . '/assets/css/styles.css', false, '', 'all' );
	wp_enqueue_style( 'blogstyle-responsive', get_template_directory_uri() . '/assets/css/responsive.css', false, '', 'all' );
	wp_enqueue_style( 'meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.min.css', false, '', 'all' );
	wp_enqueue_style( 'blogstyle-pagination', get_template_directory_uri() . '/assets/css/pagination.css', false, '', 'all' );
	wp_enqueue_style( 'blogstyle-google-font', '//fonts.googleapis.com/css?family=Pacifico|Roboto:400,500,700', false, '', 'all' );

    // blogstyle scripts
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array( 'jquery' ), '', true ); 
	wp_enqueue_script( 'jquery-meanmenu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.js', array( 'jquery' ), '', true ); 
	wp_enqueue_script( 'jquery-flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', array( 'jquery' ), '', true ); 
	wp_enqueue_script( 'menu-jquery', get_template_directory_uri() . '/assets/js/menu-jquery.js', array( 'jquery' ), '', true );  
	wp_enqueue_script( 'nav-jquery', get_template_directory_uri() . '/assets/js/nav.jquery.js', array( 'jquery' ), '', true );	 
	wp_enqueue_script( 'blogstyle-main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '', true );
	// Pull Masonry from the core of WordPress
    wp_enqueue_script( 'masonry' ); 
 
    //Pull Masonry from a cdn
    wp_enqueue_script( 'masonry', '//cdnjs.cloudflare.com/ajax/libs/masonry/3.1.2/masonry.pkgd.js' );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts', 'blogstyle_scripts');



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function blogstyle_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'blogstyle_content_width', 640 );
}
add_action( 'after_setup_theme', 'blogstyle_content_width', 0 );

// blogstyle Register widget
function blogstyle_widgets_init() {
	// Right Sidebar
	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'blogstyle' ),
		'id'            => 'blogstyle_right_sidebar',
		'description'   => esc_html__( 'Add widgets here for right sidebar.', 'blogstyle' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	// Left Sidebar
	register_sidebar( array(
		'name'          => esc_html__( 'Left Sidebar', 'blogstyle' ),
		'id'            => 'blogstyle_left_sidebar',
		'description'   => esc_html__( 'Add widgets here for left sidebar.', 'blogstyle' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	// Footer 1
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 1', 'blogstyle' ),
		'id'            => 'blogstyle_footer_sidebar1',
		'description'   => esc_html__( 'Add widgets here for footer sidebar 1.', 'blogstyle' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	// Footer 2
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 2', 'blogstyle' ),
		'id'            => 'blogstyle_footer_sidebar2',
		'description'   => esc_html__( 'Add widgets here for footer sidebar 2.', 'blogstyle' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	// Footer 3
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 3', 'blogstyle' ),
		'id'            => 'blogstyle_footer_sidebar3',
		'description'   => esc_html__( 'Add widgets here for footer sidebar 3.', 'blogstyle' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'blogstyle_widgets_init' );

// blogstyle register nav walker
require get_template_directory() . '/wp_bootstrap_navwalker.php';

// blogstyle excerpt length for posts
function blogstyle_excerpt_length( $length ) {
        return 20;
    }
add_filter( 'excerpt_length', 'blogstyle_excerpt_length', 999 );

// blogstyle register customizer
require get_template_directory() . '/inc/customizer.php';