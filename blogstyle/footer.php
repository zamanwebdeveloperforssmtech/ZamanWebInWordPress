<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package blogstyle
 */
?>

	</div><!-- #content -->
<footer>
<div class="bls-footer-section">
 <div class="container"> 
 	<div class="row">
		<div class="col-md-4">
			<?php if(is_active_sidebar('blogstyle_footer_sidebar1')){
			dynamic_sidebar('blogstyle_footer_sidebar1');
			} ?>
		</div>
		<div class="col-md-4">
			<?php if(is_active_sidebar('blogstyle_footer_sidebar2')){
			dynamic_sidebar('blogstyle_footer_sidebar2');
			} ?>
		</div>
		<div class="col-md-4">
			<?php if(is_active_sidebar('blogstyle_footer_sidebar3')){
			dynamic_sidebar('blogstyle_footer_sidebar3');
			} ?>
		</div>
   </div>   
</div>
 <div class="bls-footer-top-section">
<div class="container">
<div class="row">

</div>
</div>
</div>
    <div class="bls-footer-bottom">
    <div class="container">
    <div class="row">
    <div class="col-md-8">
    <p><?php esc_html_e( 'Proudly powered by WordPress | Theme: BlogStyle', 'blogstyle' ); ?></p> 
    </div>
    <div class="col-md-4">
	    <ul class="footer-social-icons">	
		<?php if( get_theme_mod( 'blogstyle_facebook_icon' ) == '1') { ?> 
		<li><a href="<?php echo esc_url( get_theme_mod( 'blogstyle_facebook_link' ), 'blogstyle' ); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>	    <?php } ?> 
	    <?php if( get_theme_mod( 'blogstyle_twitter_icon' ) == '1') { ?>
		<li><a href="<?php echo esc_url( get_theme_mod( 'blogstyle_twitter_link' ), 'blogstyle' ); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		<?php } ?>
	    <?php if( get_theme_mod( 'blogstyle_google_icon' ) == '1') { ?>
		<li><a href="<?php echo esc_url( get_theme_mod( 'blogstyle_google_link' ), 'blogstyle' ); ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>	    <?php } ?>
	    <?php if( get_theme_mod( 'blogstyle_instagram_icon' ) == '1') { ?>
		<li><a href="<?php echo esc_url( get_theme_mod( 'blogstyle_instagram_link' ), 'blogstyle' ); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>	    <?php } ?>
	    <?php if( get_theme_mod( 'blogstyle_linked_icon' ) == '1') { ?>
		<li><a href="<?php echo esc_url( get_theme_mod( 'blogstyle_linked_link' ), 'blogstyle' ); ?>" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>	 <?php } ?>
	    <?php if( get_theme_mod( 'blogstyle_youtube_icon' ) == '1') { ?>
		<li><a href="<?php echo esc_url( get_theme_mod( 'blogstyle_youtube_link' ), 'blogstyle' ); ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
	    <?php } ?>

		</ul>
	</div>
    </div>
    </div>
    </div>
</div>

</footer>
</div>

<!-- blogstyle Wraper -->
<?php wp_footer(); ?>
</body>
</html>