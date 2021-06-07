<?php get_header() ?>
<div class="text-page">
    <div class="container">
        <div class="text-page__wrapper">
            <h1><?php echo get_the_title() ?></h1>
           <?php echo apply_filters('the_content',get_the_content()) ?>
        </div>
    </div>
</div>

<?php get_footer() ?>