        <!-- Sponsors -->
        <div class="uk-section sponsors">
            <div class="uk-container">
            
                <div class="uk-grid uk-grid-small uk-flex uk-flex-middle" uk-grid>
                    
                    <?php 
                    if( have_rows('partner', 'option') ): 
                        while( have_rows('partner', 'option') ): the_row(); 
                        $image = get_sub_field('logo');
                       $size = 'thumbnail';
                       $printimage = wp_get_attachment_image_src( $image, $size );
                      
                    ?>
                        <div class="uk-padding-small">
                            <a href="<?php the_sub_field('link'); ?>">
                                <img src="<?php echo $printimage[0]; ?>" alt="<?php the_sub_field('name'); ?>">
                            </a>
                        </div>
                    <?php 
                        endwhile; 
                    endif; 
                    ?>

                </div>
            
            </div>
        </div>