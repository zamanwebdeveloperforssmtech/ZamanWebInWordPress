<?php 
/*
    Template Name: Full Width
*/
get_header(); 
?>
    <!-- Header area end -->
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <!-- News / Blog section  
    ============================================= -->
    <div id="news-area" class="section-gray news-section-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ftl">
                    <div class="single-page-details">
                        <h2><?php the_title(); ?> This is template-fluid</h2>
                        <?php the_content(); ?>                       
                    </div><p><?php the_tags(); ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- news table  -->
    <?php endwhile; ?>
    <?php endif; ?>

    <?php get_footer(); ?>