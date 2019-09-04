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

add_image_size( 'myFituredImage', 480, 480, true );