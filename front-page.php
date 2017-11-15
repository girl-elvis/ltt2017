<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('templates/page', 'header'); 

		get_template_part('templates/content', 'frontpage'); 

   ?>
<?php endwhile; ?>
