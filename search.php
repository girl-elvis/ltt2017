<?php get_template_part('templates/page', 'header'); ?>

<div class="uk-section-small story_main bg_squiggle_bottom_left">
    <div class="uk-container">

        <div class="uk-grid">
            
            <?php if (!have_posts()) : ?>
              <div class="alert alert-warning">
                <?php _e('Sorry, no results were found.', 'sage'); ?>
              </div>
              <?php get_search_form(); ?>
            <?php endif; ?>

            <?php while (have_posts()) : the_post(); ?>
              <?php get_template_part('templates/content', 'search'); ?>
            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>
            
        </div>
        
    </div>
</div>
