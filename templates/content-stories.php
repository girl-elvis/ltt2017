        <!-- Stories -->
        <div class="uk-section stories bg_squiggle_mid">
            <div class="uk-container">
            
                <div class="uk-flex">
                    <div class="uk-width-1-2@m">
                        <h1>Stories</h1>
                    </div>
                    <div class="uk-width-1-2@m uk-align-right">
                        <a href="#" class="uk-align-right">View more</a>
                    </div>
                </div>
                
                
                <div class="uk-grid-match uk-grid news_items">
                    
                    <?php 

                    $args = array(
                        'posts_per_page'   => -1,
                        'offset'           => 0,
                        'category_name'    => 'story',
                        'orderby'          => 'date',
                        'order'            => 'DESC',
                        'post_status'      => 'publish',
                        'suppress_filters' => true
                    );

                    $the_query = new WP_Query( $args );

                    if ( $the_query->have_posts() ):
                        while ( $the_query->have_posts() ):
                            $the_query->the_post();

                            $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
                    ?>
                    
                    
                    <div class="uk-width-1-1 uk-width-1-3@m">
                        <div class="uk-margin-bottom">
                            <a href="<?php the_permalink(); ?>" class="uk-margin-bottom uk-display-block">
                                <div class="feature" style="background-image: url('<?php echo $imgsrc[0]; ?>');">&nbsp;</div>
                            </a>
                            <div class="content">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                        </div>
                    </div>

                    <?php
                        endwhile;
                    endif;
                    wp_reset_query();
                    ?>
                    
                </div>
            
            </div>
            
            <div class="fade">&nbsp;</div>
        </div>
        <!-- END Stories -->