<?php get_header(); ?>
    <!-- Header area end -->
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

    <!-- News / Blog section  
    ============================================= -->
    <div id="news-area" class="section-gray news-section-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ftl">
                    <div class="single-page-details">
                        <h2><?php the_title(); ?> This is page.php</h2>
                        <?php the_content(); ?>                       
                    </div>
                </div>
                <?php get_template_part("sidebar"); ?>
            </div>
        </div>
    </div>
    <!-- /news table  -->
    <?php endwhile; ?>
    <?php endif; ?>

    <?php get_footer(); ?>