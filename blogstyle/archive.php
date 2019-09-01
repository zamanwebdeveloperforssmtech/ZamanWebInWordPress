<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blogstyle
 */

get_header(); ?>

<div class="bls-content-area">

<div class="bls-blog-section">

<div class="container">

<div class="row">

<div class="col-md-8">

<?php if ( have_posts() ) : ?>
 
    <!-- start of the secondary loop -->
    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

<?php endwhile; ?>

<!-- Blogstyle pagination -->

<div class="row">

<div class="col-md-12">
 
 <div class="bls-pagination">

	<?php the_posts_pagination( array(
		'screen_reader_text' => ' ', 
		'mid_size' => 2,
		'prev_text' => __( 'Previous', 'blogstyle' ),
	    'next_text' => __( 'Next', 'blogstyle' ),
	) ); ?>

  </div>	
<?php wp_reset_postdata(); ?>
<?php else:  ?>
 
   	<?php get_template_part( 'template-parts/content', 'none' ); ?>
 
<?php endif; ?>

</div>

</div>

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