<?php get_template_part('templates/page', 'header'); ?>

<div class="uk-section story_main bg_squiggle_bottom_left">
    <div class="uk-container">
        <div class="alert alert-warning">
            <h4><?php _e('Sorry, but the page you were trying to view does not exist.', 'sage'); ?></h4>
        </div>
        
        <div id="search" clas="uk-flex-top">
            <form action="/" method="get">
                <input type="text" name="s" class="uk-input uk-margin-small-bottom" placeholder="Search for something" value="<?php the_search_query(); ?>">
                <button type="submit" class="uk-button uk-button-primary">Search</button>
            </form>
        </div>
    </div>
</div>