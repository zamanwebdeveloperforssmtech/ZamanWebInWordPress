<?php
/*
* Registering Menu Support
*/

function myWebsiteMenu(){
	if(function_exists('register_nav_menu')){
		register_nav_menu( 'header_top_menu', __( 'Header Menu', 'ZamanWebDeveloper' ) );
		register_nav_menu( 'footer_menu', __( 'Footer Menu', 'ZamanWebDeveloper' ) );
	}
}
add_action('init','myWebsiteMenu');

/**
 * Featured Image Support
 */
add_theme_support( 'post-thumbnails', array( 'post', 'page') );
set_post_thumbnail_size( 200, 200, true );

add_image_size( 'myFituredImage', 300, 300, true );
add_image_size( 'onlywidthimage', 300, true );

/**
 * Widget Support
 */
function my_widgets_sidebar(){
		register_sidebar( array(
		'name'          => esc_html__( 'Home Page Sidebar One', 'zamanwebdeveloper' ),
		'description'   => esc_html__( 'This is Sidebar One description ....', 'zamanwebdeveloper' ),
		'id'            => 'widget-home-one',
		'before_widget' => '<div class="siderbar-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="sidebar-widget-title">',
		'after_title'   => '</h4>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'Footer Contact Widget', 'zamanwebdeveloper' ),
		'description'   => esc_html__( 'This is Footer Contact Widget description ....', 'zamanwebdeveloper' ),
		'id'            => 'footer-contact',
		'before_widget' => '<div class="emergency-call mrb-50">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget', 'zamanwebdeveloper' ),
		'description'   => esc_html__( 'This is Footer Widget description ....', 'zamanwebdeveloper' ),
		'id'            => 'footer-widget',
		'before_widget' => '<div class="col-md-3 col-sm-6 col-xs-12"><div class="footer-widget">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		/*register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Two', 'zamanwebdeveloper' ),
		'description'   => esc_html__( 'This is Footer Widget Two description ....', 'zamanwebdeveloper' ),
		'id'            => 'footer-two',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Three', 'zamanwebdeveloper' ),
		'description'   => esc_html__( 'This is Footer Widget Three description ....', 'zamanwebdeveloper' ),
		'id'            => 'footer-three',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Four', 'zamanwebdeveloper' ),
		'description'   => esc_html__( 'This is Footer Widget Four description ....', 'zamanwebdeveloper' ),
		'id'            => 'footer-four',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );*/
}
add_action( 'widgets_init', 'my_widgets_sidebar' );

// How to move comment text or any field to bottom in wordpress

function zaman_webdeveloper_move_comment_field_to_bottom( $fields ) {
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;
return $fields;
}
 
add_filter( 'comment_form_fields', 'zaman_webdeveloper_move_comment_field_to_bottom' );

// How to move comment text or any field to bottom in wordpress

function zaman_webdeveloper_any_field_from_wordpress( $fields ) {
	// unset( $fields['author'] );
	// unset( $fields['email'] );
	// unset( $fields['url'] );
	// unset( $fields['comment'] );
	return $fields;
}
 
add_filter( 'comment_form_fields', 'zaman_webdeveloper_any_field_from_wordpress' );