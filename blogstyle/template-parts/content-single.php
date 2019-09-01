<?php
/**
 * Template part for displaying post details.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blogstyle
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		
<div class="entry-thumbnail">
	<figure>
		<?php the_post_thumbnail( 'full' ); ?>
	</figure>
</div>
  
  <p class="blog-cat"><i class="fa fa-user"></i><?php $username = get_userdata( $post->post_author ); ?>    
    <a href="<?php echo esc_url( get_author_posts_url( $post->post_author ) ); ?>"><?php echo $username->user_nicename; ?></a>
  <span class="bls-blog-cat"><i class="fa fa-folder"></i>  <?php the_category(', '); ?></span>
   <?php $tags_list = the_tags(' ',' , '); if ( $tags_list ) { ?> <span class="bls-blog-cat"><i class="fa fa-folder"></i>  <?php //echo $tags_list;  ?>
   </span><?php } ?></p>

	<div class="entry-content">
		
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>
		
	</div><!-- .entry-content -->

</article><!-- #post-## -->