        <div class="uk-slideshow" uk-slideshow="autoplay: true; pause-on-hover: true; autoplay-interval: 7000; ">
             <ul class="uk-slideshow-items">
            <?php
            if( have_rows('slide') ):
                while ( have_rows('slide') ) : the_row();
            ?>        
         <?php 
            // $video = get_sub_field('video');
            $image = get_sub_field('image');
            $size = 'homeslider'; // (thumbnail, medium, large, full or custom size)
            $printimage = wp_get_attachment_image_src( $image, $size );
            
                // if($video){

                //      echo '<li class=""><iframe src="'. $video . '" width="560" height="315" frameborder="0" allowfullscreen uk-cover></iframe>';
                // } else {
                     echo '<li class="item" style="background-image: url('. $printimage[0] . '); ">';
                     echo '<img src="'. $printimage[0] . '" alt="" uk-cover>'; 
                // }
            ?>

            
                
                   <div class="uk-position-bottom uk-position-large uk-overlay uk-overlay-primary uk-margin-remove-bottom">
                    <div class="uk-container">
                        <h1 class="uk-light"><?php the_sub_field('text'); ?></h1>
                        <a href="<?php the_sub_field('link'); ?>" class="uk-button uk-button-primary"><?php the_sub_field('link_text'); ?></a>
                        <a href="<?php echo bloginfo('url'); ?>/donate" class="uk-button uk-button-primary">Donate</a>
                    </div>
                </div>
            </li>
            
            <?php
                endwhile;
            endif;
            ?>

            </ul>
            <a class="uk-position-center-left uk-position-small uk-hidden-hover uk-light uk-slidenav-large" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover uk-light uk-slidenav-large" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
        </div>
