<?php 
while (have_posts()) : the_post(); 
$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
?>

    
<div class="story_head" style="background-image: url('<?php echo $imgsrc[0]; ?>');" uk-parallax="bgy: -400">
    <div class="uk-container">
        <div class="titling">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
</div>

 <?php get_template_part('templates/partial', 'breadcrumb'); ?>

    <!-- Story Main -->

    <div class="uk-section-small story_main bg_squiggle_bottom_left">
        <div class="uk-container">

           <h6>
                <?php 
                if(is_singular( 'post' )) {
                    get_template_part('templates/entry-meta');
                }

                 ?>

                </h6> 
     
            
            <?php the_content(); ?>

        </div>

        <div class="fade">&nbsp;</div>
    </div> <!-- END Story Main -->


    <?php //comments_template('/templates/comments.php'); ?>
    <?php //get_template_part('templates/stories'); ?>

    <?php 
   if(is_singular( 'post' )) {
        get_template_part('templates/content', 'related');
    }
    ?>

<?php endwhile; ?>
