<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>

    <?php get_search_form(); ?>

    <h2>Archives by Month:</h2>
    <ul>
        <?php wp_get_archives('type=monthly'); ?>
    </ul>

    <h2>Archives by Subject:</h2>
    <ul>
         <?php wp_list_categories(); ?>
    </ul>

<?php endwhile; ?>
