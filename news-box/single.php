<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package News_Box
 */
if ( is_active_sidebar( 'sidebar-1' ) ) {
	$news_box_grid_number = 9 ;
}else{
	$news_box_grid_number = 12 ;
}
get_header();
?>
<div class="container">
	<div class="row">
		<div class="col-lg-<?php echo esc_attr( $news_box_grid_number ); ?>">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

			</main><!-- #main -->
		</div><!-- #primary -->	
		</div>
	<?php if ( is_active_sidebar( 'sidebar-1' ) ): ?>
		<div class="col-lg-3">
			<div class="news-box-sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
	<?php endif; ?>
	</div>
</div>

<?php
get_footer();
