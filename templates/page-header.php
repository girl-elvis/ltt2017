<?php use Roots\Sage\Titles; ?>

<?php if(!is_home() && !is_front_page()): ?>
<div class="uk-section-small subpage_head">
    <div class="uk-container">

        <?php
        if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb('
        <p id="breadcrumbs" style="margin-bottom: 5px;">','</p>
        ');
        }
        ?>

        <h1><?= Titles\title(); ?></h1>
    </div>
</div>
<?php endif; ?>