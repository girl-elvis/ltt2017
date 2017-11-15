<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'news'); ?>
  <?php get_template_part('templates/content', 'stories'); ?>
  <?php get_template_part('templates/content', 'press'); ?>
  <?php get_template_part('templates/content', 'sponsors'); ?>
<?php endwhile; ?>
