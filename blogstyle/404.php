<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package blogstyle
 */

get_header(); ?>

<div class="bls-blog-section">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-12">
          <div id="primary" class="content-area">
              <div id="content" class="site-404-content" role="main">
 
                    <header class="page-header">
                        <h1 class="page-title"><?php esc_html_e( '404', 'blogstyle' ); ?></h1>
                    </header>
         
                    <div class="page-wrapper">
                        <div class="page-content">
                            <h2><?php esc_html_e( 'This is somewhat embarrassing, is it not?', 'blogstyle' ); ?></h2>
                            <p class="bls-pag-search"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'blogstyle' ); ?></p>
                                  <?php get_search_form(); ?>
                        </div>
                   </div>     
              </div>
            </div>
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

<?php
get_footer(); ?>