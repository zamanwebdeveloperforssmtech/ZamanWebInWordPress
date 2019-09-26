<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="sidebar-wrap">
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Search</h4>
                            <div class="search-form">
                                <form action="<?php echo home_url('/'); ?>" method="get">
                                    <input class="search-field" placeholder="Search" value="" type="search" name="s">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Category</h4>
                            <ul>
                                <?php
                                    $args = array(
                                        'orderby' => 'slug',
                                        'parent' => 0
                                    );

                                    $categories = get_categories( $args );
                                    foreach ( $categories as $category ) {
                                        echo '<li><a href="' . get_category_link( $category->term_id ) . '" rel="bookmark"> <i class="glyphicon glyphicon-play"> '  . $category->name . '</i>' . '' . $category->description . '</a></li>';
                                     }
                                ?>
                            </ul>
                        </div>
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">ARCHIVES</h4>
                            <ul>
                                <?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 12,'order' => 'DESC' )); ?>
                            </ul>
                        </div>


                        <?php dynamic_sidebar('widget-home-one'); ?>

                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">RECENT NEWS</h4>
                            <div class="widget-news">
                                <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/resource/blog-1.jpg" alt=""></a>
                                <div class="news-text">
                                    <p>The Act makes provision for the interpretation of Acts of Parliament.</p>
                                    <a class="" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="widget-news">
                                <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/resource/blog-2.jpg" alt=""></a>
                                <div class="news-text">
                                    <p>The Act makes provision for the interpretation of Acts of Parliament.</p>
                                    <a class="" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="widget-news">
                                <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/resource/blog-3.jpg" alt=""></a>
                                <div class="news-text">
                                    <p>The Act makes provision for the interpretation of Acts of Parliament.</p>
                                    <a class="" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Tags</h4>
                            <ul class="tag-list">
                                <li><a class="active transition7s" href="#">HTML</a></li>
                                <li><a class="transition7s" href="#">CSS3</a></li>
                                <li><a class="transition7s" href="#">PHP</a></li>
                                <li><a class="transition7s" href="#">Wordpress</a></li>
                                <li><a class="transition7s" href="#">Joomla</a></li>
                            </ul>
                        </div>
                    </div>
                </div>