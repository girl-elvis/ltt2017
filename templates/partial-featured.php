        <!-- News -->
        <div class="uk-section news bg_grey bg_squiggle_alt">
            <div class="uk-container">
                
                <div class="uk-grid-match uk-grid news_items">
                    
                    <?php 

                    $args = array('posts_per_page' => 1,'category_name' =>  'Featured');
                    $featuredposts = get_posts( $args );
                    $args = array('posts_per_page' => 1,'category_name' => 'Field notes');
                    $blogposts = get_posts( $args );
                    $args = array('posts_per_page' => 1,'category_name' => 'Newsletter');
                    $newslettersposts = get_posts( $args );
 // print_r($featuredposts);
                    $myposts = array_merge($featuredposts, $blogposts,$newslettersposts);
                    // echo(count($myposts));
                 foreach ( $myposts as $post ) : setup_postdata( $post ); 
                            $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "boxtop");
                    ?>
                                
                <div class="uk-width-1-1 uk-width-1-2@s uk-width-1-3@m">
                        <div class="uk-card uk-card-default uk-margin-bottom" >
                            <div class="uk-card-media-top uk-position-relative">
                                <img src="<?php echo $imgsrc[0]; ?>" alt="">
                                <a href="<?php the_permalink(); ?>" class="uk-position-cover" >
                                <h3 class="uk-position-bottom uk-light uk-padding-small uk-margin-remove" style=""><?php the_title(); ?></h3></a>
                            </div>
                            <div class="uk-card-body uk-padding-small uk-margin-bottom">
                                 <h4 ><?php the_excerpt(); ?></h4>

                                 <a href="<?php the_permalink(); ?>" class="uk-position-cover" ></a>
                              <!--  <a href="<?php the_permalink(); ?>" class="uk-position-small uk-position-bottom-right " >Find out more</a> -->
                                          <div></div>
                            </div>
                        </div>  
                </div>
                        
                <?php endforeach; 
                wp_reset_postdata();?>
                    
                </div>
            
            </div>
        </div>
        <!-- END News -->