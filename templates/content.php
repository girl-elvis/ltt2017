<?php
$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
?>
                    

<div class="uk-width-1-1 uk-width-1-3@m">
    <div class="uk-margin-bottom">
        <div class="content">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <br />
            <small><?php the_date(); ?></small>
            <p><?php the_excerpt(); ?></p>
        </div>
        <a href="<?php the_permalink(); ?>" class="uk-icon-button" uk-icon="icon: chevron-right"></a>
    </div>
</div>   