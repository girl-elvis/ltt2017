        <!-- Sponsors -->
        <div class="uk-section sponsors">
            <div class="uk-container">
            
                <div class="uk-grid uk-grid-small uk-child-width-1-2@s uk-child-width-1-6@m" uk-grid>
                    
                    <?php 
                    if( have_rows('partner', 'option') ): 
                        while( have_rows('partner', 'option') ): the_row(); 
                    ?>
                        <div class="">
                            <a href="<?php the_sub_field('link'); ?>">
                                <img src="<?php the_sub_field('logo'); ?>" alt="<?php the_sub_field('name'); ?>">
                            </a>
                        </div>
                    <?php 
                        endwhile; 
                    endif; 
                    ?>

                </div>
            
            </div>
        </div>