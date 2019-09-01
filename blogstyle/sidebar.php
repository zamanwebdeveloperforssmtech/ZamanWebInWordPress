<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blogstyle
 * 
 */

if ( ! is_active_sidebar( 'blogstyle_right_sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'blogstyle_right_sidebar' ); ?>
</aside>