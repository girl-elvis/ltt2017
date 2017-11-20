<?php
// Partial, loop of blocks
// 
// ?>

              <div class="uk-grid-match uk-grid block_features">

                <?php 
                $i = 0;
                    
                if( have_rows('section_1_blocks_block') ):
                    while ( have_rows('section_1_blocks_block') ) : the_row();
                    
                    $col = get_sub_field('colour');               
                    $post_id = get_sub_field('block_link');
                    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'boxtop' );
                    $url = $src[0];
                    
                    $permalink = get_post_permalink($post_id);
                
                ?>
                <div class="uk-width-1-1 uk-width-1-2@s uk-width-1-3@m">
                    <div class="uk-card uk-card-default uk-margin-bottom" style="background-color: <?php echo $col ?>">
                        <div class="uk-card-media-top uk-position-relative">
                            <img src="<?php echo $url; ?>" alt="">
                            <a href="<?php echo $permalink; ?>" class="uk-position-cover" >
                            <h3 class="uk-position-bottom uk-light uk-padding-small uk-margin-remove" style=""><?php the_sub_field('block_title'); ?></h3></a>
                        </div>
                        <div class="uk-card-body uk-padding-small uk-margin-bottom">
                            <h4 sty><?php the_sub_field('block_text'); ?></h4>
                            <a href="<?php echo $permalink; ?>" class="uk-position-cover" >
                           <a href="<?php echo $permalink; ?>" class="uk-position-small uk-position-bottom-right " >Find out more</a>
                           <div></div>
                        </div>

                    </div>  
                </div>
                <?php
                    endwhile;
                endif;
                ?>

                </div>