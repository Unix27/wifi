<div class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__left">
                <?php echo the_field('copyright','options') ?>
            </div>
            <div class="footer__right">
                <?php echo strip_tags(wp_nav_menu( [
                        'theme_location' => 'burger-menu',
                        'container'       => false,
                        'echo'            => false,
                        'items_wrap'      => '%3$s',
                        'depth'           => 0,
                ] ), '<a>'); ?>
            </div>
        </div>
    </div>
</div>

 <?php wp_footer() ?>

</body>
</html>