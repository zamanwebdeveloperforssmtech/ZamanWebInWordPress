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