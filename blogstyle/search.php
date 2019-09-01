<?php
/** 
 * The template for displaying search results pages.
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result 
 *
 * @package blogstyle 
 */
 ?>
 
<?php get_header(); ?>
 
<div class="bls-content-area">

<div class="bls-blog-section">

<div class="container">

<div class="row">

<div class="col-md-8">

<?php if (have_posts() ) : ?>

 <h1><?php esc_html_e( 'Search Results:', 'blogstyle' ); ?> </h1>
    
    <?php while ( have_posts() ) : the_post(); ?>
	
	      <?php get_template_part( 'template-parts/content', 'search' ); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

<?php else:  ?>
 
   	<?php get_template_part( 'template-parts/content', 'none' ); ?>
 
<?php endif; ?>



</div>

<div class="col-md-4">

<div class="bls-blog-side-bar">

<?php get_sidebar(); ?>

</div>

</div>
</div>

</div>

</div>
</div>

<?php get_footer(); ?>