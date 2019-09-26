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
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>                       
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="related_post_area">
                                <h3>Related Posts</h3>
                                <?php
                                    // echo $post->ID;

                                    $tags = wp_get_post_tags($post->ID);

                                    if ($tags) {
                                        $first_tag = $tags[0]->term_id;
                                        
                                        $my_query = new WP_Query(array(
                                            'tag__in' => array($first_tag),
                                            'post__not_in' => array($post->ID),
                                            'posts_per_page'=>5,
                                            'caller_get_posts'=>1
                                        ));
                                        
                                        
                                        if( $my_query->have_posts() ) {
                                        while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                        <!--Your html code here-->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="related_post_item">
                                            <?php the_post_thumbnail('myFeaturedImage', array('class' => 'my-post-thumb')); ?>                                          
                                                <h2><a href=""><?php the_title(); ?></a></h2>
                                                <?php the_excerpt();?>
                                            </div>
                                        </div>
                                        
                                         
                                        <?php
                                        endwhile;
                                        }
                                        wp_reset_query();
                                    }
                                ?>
                                    
                               
                                        
                                        
                                    
                                        
                                                                        
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="comment-area">
                                <h2 class="page-header">Comments</h2>
                                <?php comments_template( '', true ); ?>                               
                            </div>
                        </div>
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