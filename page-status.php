<?php get_header();

$block1 = get_field('block_1_status');
$block2 = get_field('block_2_status');

?>
<div class="status-block">
    <div class="container">
        <div class="status-block__wrapper">
            <div class="status-block__img">
                <img src="<?php echo $block1['left_image']['url'] ?>" alt="">
            </div>
            <div class="status-block__right">
                <div class="status-block__title mont">
                    <?php echo $block1['title'] ?>
                </div>
                <div  class="status-block__check mont">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/check2.svg" alt="">
                    <span>
                       <?php echo $block1['sub_title'] ?>
                    </span>
                </div>
                <a  href="<?php echo $block1['btn_link'] ?>" class="status-block__btn btn-orange">
                    <span><?php echo $block1['btn_name'] ?></span>
                    <svg>
                        <use xlink:href="<?php echo get_stylesheet_directory_uri() ?>/img/icons/icons.svg#whiteArrow"></use>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="nettec-boost">
    <div class="container">
        <div  data-aos="fade-down" class="nettec-boost__title mont">
            <?php echo $block2['title'] ?>
        </div>
        <div class="nettec-boost__wrapper">
            <section class="charts_orb">
                <?php foreach($block2['list'] as $key => $list): 

                    $class = 'progress';
                    if($key == 1)
                        $class ='progress2';

                    ?>
                    <article class="orb">
                    <div class="orb_graphic">
                        <svg>
                            <circle class="fill" r="50" cx="55" cy="55"></circle>
                            <circle class="<?php echo $class ?>" r="50" cx="55" cy="55"></circle>
                        </svg>
                        <div class="orb_value count mont"><?php echo $list['title'] ?></div>
                    </div>
                    <div class="orb_label ">
                        <?php echo $list['text'] ?>
                    </div>
                </article>
                <?php endforeach; ?>
            </section>
        </div>
    </div>
</div>

<?php get_footer() ?>