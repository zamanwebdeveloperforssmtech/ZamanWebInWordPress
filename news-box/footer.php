<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package News_Box
 */
$footer_text = get_theme_mod('footer_text');
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php if ( is_active_sidebar( 'footer-widget' ) ) : ?>
		<div class="footer-top bg-dark">
			<div class="container">
				<div class="row">
					<?php dynamic_sidebar( 'footer-widget' ); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="site-info">
			  <?php if($footer_text): 
								echo wp_kses_post($footer_text);
					else:
							?>
							<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'news-box' ) ); ?>">
								<?php
								/* translators: %s: CMS name, i.e. WordPress. */
								printf( esc_html__( 'Proudly powered by %s', 'news-box' ), 'WordPress' );
								?>
							</a>
							<span class="sep"> | </span>
								<?php
								/* translators: 1: Theme name, 2: Theme author. */
								printf( esc_html__( 'Theme: %1$s by %2$s.', 'news-box' ), 'news-box', '<a href="'.esc_url('https://wpthemespace.com/product/news-box/').'">'.esc_html__('wpthemespace.com', 'news-box').'</a>' );
								?>
				<?php endif; ?>
						</div><!-- .site-info -->
					</div>
				</div>
			</div>
		</div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
