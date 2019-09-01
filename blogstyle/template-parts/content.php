<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blogstyle
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


<div class="row">  

<div class="col-md-12">

<div class="bls-single-blog">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<figure>
    <?php the_post_thumbnail( 'full' ); ?>
</figure>

<div class="bls-blog-meta">
<span class="bls-blog-user"><i class="fa fa-user"></i><?php $username = get_userdata( $post->post_author ); ?>    
<a href="<?php echo esc_url( get_author_posts_url( $post->post_author ) ); ?>"><?php echo $username->user_nicename; ?></a></span>
<span class="bls-blog-date"><i class="fa fa-clock-o"></i><?php echo get_the_date(); ?></span>
</div>

<p class="post-discription"><?php the_excerpt(); ?></p>

<p class="blog-single-btn"><a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More', 'blogstyle' ); ?></a></p>

<div class="bls-blog-line"><p></p></div>

<div class="bls-blog-comments">

<span class="bls-blog-cat"><i class="fa fa-folder"></i><?php the_category(', '); ?>
</span>

<span class="bls-blog-cmnt"><i class="fa fa-comment"></i><a href="<?php comments_link(); ?>" target="_blank"><?php esc_html_e( 'Leave a Comment', 'blogstyle' ); ?>
</a></span>

</div>

</div>

</div>

</div>

</article><!-- #post-## -->