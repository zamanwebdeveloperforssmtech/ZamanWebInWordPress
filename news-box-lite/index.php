<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package News_Box
 */

 $news_box_lite_view_set = get_theme_mod( 'view_set','grid' );

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
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) :
						?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
						<?php
					endif;
				// loop for grid
				if( $news_box_lite_view_set == 'grid' && !is_single()):
				?>
				<div class="row">
				<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', 'grid' );
						
					endwhile;
				?>
				</div>
				<?php
			else: //loop for others

					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', get_post_type() );
						
					endwhile;
			endif;
					// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => esc_html__( 'Previous', 'news-box-lite' ),
				'next_text'          => esc_html__( 'Next', 'news-box-lite' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'news-box-lite' ) . ' </span>',
			) );
				else :
					get_template_part( 'template-parts/content', 'none' );
				endif;
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
