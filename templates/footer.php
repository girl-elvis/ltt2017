<?php get_template_part('templates/partial', 'sponsors'); ?>

        <footer>

<?php if ( is_active_sidebar( 'sidebar-footer' ) ) : ?>
    <div id="" class="widget-area uk-child-width-1-3@m uk-text-muted" uk-grid role="complementary">
        <?php dynamic_sidebar( 'sidebar-footer' ); ?>
    </div><!-- #primary-sidebar -->
<?php endif; ?>

        </footer>
         