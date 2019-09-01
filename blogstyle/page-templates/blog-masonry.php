<?php
/**
*
* Template Name: Masonry
*
* The template for displaying content from pagebuilder.
*
* This is the template that displays pages without title in fullwidth layout. Suitable for use with Pagebuilder.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package blogstyle
*/

get_header();
?>

<div class="bls-content-area">
<div class="bls-blog-section">
<div class="container">
  <div class="row">
    <div class="col-md-8">
    <div class="blog-maonry">
    <?php
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $args = array( 
          'post_type' => 'post',
          'posts_per_page' => 3,
          'paged' => $paged 
      );

    $the_query = new WP_Query( $args );
    ?>
    <?php if ( $the_query->have_posts() ) : ?>
     
        <!-- start of the secondary loop -->
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <?php get_template_part( 'template-parts/content', 'masonry' ); ?>

    <?php endwhile; ?>

    </div>

    <div class="bls-pagination">
        <?php 
                $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;
                the_posts_pagination( array(
                   'screen_reader_text' => ' ', 
                   'mid_size' => 1,
                   'prev_text' => __( 'Previous', 'blogstyle' ),
                   'next_text' => __( 'Next', 'blogstyle' ),
                   
                ) ); ?>
    </div>

    </div>

  <div class="col-md-4 col-sm-12 blog-right-sidebar">

  <div class="bls-blog-side-bar">

  <?php dynamic_sidebar('blogstyle_right_sidebar'); ?>

  </div>

  </div>

  <?php endif; ?>

  </div>

</div>
</div>

</div>
<?php get_footer(); ?>