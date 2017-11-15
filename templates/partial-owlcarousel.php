        <div class="owl-carousel owl-theme home-carousel">
            
            <?php
            if( have_rows('slide') ):
                while ( have_rows('slide') ) : the_row();
            ?>
    
           <div class="item" style="background-image: url('<?php the_sub_field('image'); ?>');">
                <div class="uk-container">
                    <div class="blurb">
                        <h1><?php the_sub_field('text'); ?></h1>
                        <a href="<?php the_sub_field('link'); ?>" class="uk-button uk-button-primary"><?php the_sub_field('link_text'); ?></a>
                        <a href="<?php echo bloginfo('url'); ?>/donate" class="uk-button uk-button-primary">Donate</a>
                    </div>
                </div>
            </div>
            
            <?php
                endwhile;
            endif;
            ?>
            
        </div>
