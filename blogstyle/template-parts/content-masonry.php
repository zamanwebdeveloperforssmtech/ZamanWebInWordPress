<?php

/**

 * Template part for displaying posts in masonry view.

 *

 * @link https://codex.wordpress.org/Template_Hierarchy

 *

 * @package blogstyle

 */



?>



<div class="masonry-item col-md-6">

	<article id="post-<?php the_ID(); ?>"> 

		<div class="bls-single-blog">

			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>			

			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

			<img src="<?php echo $url; ?>" class="img-responsive blog-manso-one">

			<?php if ($url != '') { ?> <p class="blog-masonary-auther"><?php } else { ?><p class="blog-masonary-img-auther"><?php } ?> <i class="fa fa-user"></i> <?php $username = get_userdata( $post->post_author ); ?>    

			<a href="<?php echo get_author_posts_url( $post->post_author ); ?>"><?php echo $username->user_nicename; ?></a>

			<span class="bls-blog-cat"><i class="fa fa-folder"></i><?php the_category(', '); ?>

            </span>
            <span class="bls-blog-date masonry"><i class="fa fa-clock-o"></i><?php echo get_the_date(); ?></span>   
			</p>

			<p class="masonary-post-discription"><?php the_excerpt(); ?></p>

			<div class="bls-masonary-single-btn"><a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More', 'blogstyle' ); ?></a></div>

		</div> 

</article>

</div> 