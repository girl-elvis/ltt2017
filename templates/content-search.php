<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'thumbnail_size' );
$url = $src[0];
?>

<div class="uk-width-1-1 uk-width-1-4@s">
    <a href="<?php the_permalink(); ?>">
        <img src="<?php echo $url; ?>" style="width: 100%; height: auto;" class="uk-margin-bottom">
    </a>
</div>
<div class="uk-width-1-1 uk-width-3-4@s uk-margin-large-bottom">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <br />
    <small><?php the_date(); ?></small>
    <p><?php the_excerpt(); ?></p>
    <a href="<?php the_permalink(); ?>" class="uk-icon-button" uk-icon="icon: chevron-right"></a>
</div>
