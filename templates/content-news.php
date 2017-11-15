        <!-- News -->
        <div class="uk-section news bg_grey bg_squiggle_alt">
            <div class="uk-container">
            
                <h1>News</h1>
                
                <div class="uk-grid-match uk-grid news_items">
                    
                    <?php 

                    $args = array(
                        'posts_per_page'   => -1,
                        'offset'           => 0,
                        'category_name'    => 'News',
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
                            <a href="#" class="uk-margin-bottom uk-display-block">
                                <div class="feature" style="background-image: url('<?php echo $imgsrc[0]; ?>');">&nbsp;</div>
                            </a>
                            <div class="content">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                <small><?php the_date(); ?></small>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="uk-align-right">Read more</a>
                        </div>
                    </div>
                    
                    
                    <?php
                        endwhile;
                    endif;
                    wp_reset_query();
                    ?>
                    
                </div>
            
            </div>
        </div>
        <!-- END News -->