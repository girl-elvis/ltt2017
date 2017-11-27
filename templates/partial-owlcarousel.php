<div class="owl-carousel owl-theme carousel">
      <?php
            if( have_rows('slide') ):
                while ( have_rows('slide') ) : the_row();
                       $image = get_sub_field('image');
                       $size = (is_front_page() ? 'homeslider' : 'pagetop'); // different size slider on homepage
            if( $image ) {
                $printimage = wp_get_attachment_image_src( $image, $size );
                //print_r($printimage[0]);
                //$printimage = wp_get_attachment_image( $image, $size );
            }
            ?>
    
<div class="item" style="background-image: url('<?php echo $printimage[0]; ?>') ">
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
<!--    <div class="uk-padding uk-background-primary uk-width-1-6 uk-position-small uk-position-bottom-right"><span uk-icon="icon: chevron-down; ratio: 3.5"></span></div> -->