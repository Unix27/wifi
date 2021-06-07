<?php get_header();

$block1 = get_field('block_1');


$block2 = get_field('block_2');

$block3 = get_field('block_3');

$block6 = get_field('block_6');

$block4 = get_field('block_4');

$block5 = get_field('block_5');

$block7 = get_field('block_7');

$block8 = get_field('block_8');

?>
<div class="homepage-header">
    <div class="container">
        <div class="homepage-header__wrapper">
            <div class="homepage-header__img">
                <img src="<?php echo $block1['image']['url'] ?>" alt="">
                

            </div>
            <div class="homepage-header__title mont">
                <?php echo $block1['title'] ?>
            </div>
            <div class="homepage-header__subtitle">
                <?php echo $block1['subtitle'] ?>
            </div>
            <a href="<?php echo $block1['btn_link'] ?>" class="btn-orange homepage-header__btn">
                <span>
                    <?php echo $block1['btn_name'] ?>
                        
                    </span>
                <svg>
                    <use xlink:href="img/icons/icons.svg#whiteArrow"></use>
                </svg>
            </a>
        </div>
    </div>
</div>
<div class="introducing-block">
    <div class="container">
        <div class="introducing-block__wrapper">
            <div class="introducing-block__left">
                <img src="<?php echo $block2['image']['url'] ?>" alt="">
            </div>
            <div class="introducing-block__right">
                <div class="introducing-block__title mont">
                    <?php echo $block2['title'] ?>
                    
                </div>
                <div class="introducing-block__text">
                    <?php echo apply_filters('the_content',$block2['description']) ?>
                    
                </div>
            </div>

        </div>
    </div>
</div>
<div class="home-grey-block">
    <div class="container">
        <div class="home-grey-block__wrapper">
            <div class="home-grey-block__text">
                <p>
                    <?php echo $block2['block_left'] ?>
                </p>
                
                <p>
                    <?php echo $block2['block_right'] ?>
                </p>
            </div>
            <a href="<?php echo $block2['btn_link'] ?>" class="btn-orange home-grey-block__btn">
                <span>
                    <?php echo $block2['btn_name'] ?></span>           
                <svg>
                    <use xlink:href="img/icons/icons.svg#whiteArrow"></use>
                </svg>
            </a>
        </div>
    </div>
</div>
<div class="slider-home">
    <div class="container">
        <div class="slider-home__title mont">
            <?php echo $block3['title'] ?>
        </div>
        <div class="slider-home__subtitle">
            <?php echo $block3['subtitle'] ?>
        </div>
    </div>
    <div class="slider-home__wrapper ">
        <div class="swiper-container js-slider-home">
            <div class="swiper-wrapper">
                <?php foreach ($block3['benefits'] as $key => $val){  ?>
                    <div class="swiper-slide">
                        <div class="slider-home-item">
                            <div class="slider-home-item__icon">
                                <img src="<?php echo $val['image']['url'] ?>" alt="">
                            </div>
                            <div class="slider-home-item__text">
                                <?php echo $val['text'] ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <!-- Add Arrows -->
            <div class="slider-home__arrows">

                <div class="swiper-button-prev js-slider-home-right">
                    <svg>
                        <use xlink:href="img/icons/icons.svg#whiteArrow"></use>
                    </svg>
                </div>
                <div class="swiper-button-next js-slider-home-left">
                    <svg>
                        <use xlink:href="img/icons/icons.svg#whiteArrow"></use>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="order-block">
    <div class="container">
        <div class="order-block__wrapper">
            <div class="order-block__img">
                <img src="<?php echo $block4['image']['url'] ?>" alt="">
            </div>
            <div class="order-block__right">
                <div class="order-block__text mont">
                    <?php echo $block4['text'] ?>
                </div>
                <a href="<?php echo $block4['btn_link'] ?>" class="btn-orange order-block__btn">
                    <span>
                        <?php echo $block4['btn_name'] ?>
                    </span>
                    <svg>
                        <use xlink:href="img/icons/icons.svg#whiteArrow"></use>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="work-block">
    <div class="container">
        <div class="work-block__title mont">
            <?php echo $block5['title'] ?>
        </div>
        <div class="work-block__wrapper">
            <div class="how-block">
                <div class="how-block__text">
                    <?php echo apply_filters('the_content',$block5['text']) ?>
                </div>
                <div class="how-block__img">
                    <img src="<?php echo $block5['image']['url'] ?>" alt="">
                </div>
            </div>
            <div class="work-block__center-text">
                <?php echo $block5['subtitle'] ?>

                
            </div>
            <div class="boost-block">
                <div class="boost-block__title mont">
                    <?php echo $block6['title'] ?>
                </div>
                <div class="boost-block__wrapper">
                    <div class="boost-block__img">
                        <img src="<?php echo $block6['image']['url'] ?>" alt="">
                    </div>
                    <div class="boost-block__list">
                        <?php foreach ($block6['list'] as $key => $val){  ?>
                        <div class="boost-block__list-item">
                           <?php echo $val['text'] ?>
                        </div>
                       <?php } ?>
                    </div>
                </div>
                <a href="<?php echo $block6['btn_link'] ?>" class="boost-block__btn btn-orange">
                    <span>
                        <?php echo $block6['btn_name'] ?>
                    </span>
                    <svg>
                        <use xlink:href="img/icons/icons.svg#whiteArrow"></use>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="how-much">
    <div class="how-much__wrapper">
        <div class="how-much__left">
            <div class="how-much__title mont">
                <?php echo $block7['title'] ?>
            </div>
            <div class="how-much__text">
                <?php echo apply_filters('the_content',$block7['text']) ?>
            </div>
        </div>
        <div class="how-much__img">
            <img src="<?php echo $block7['image']['url'] ?>" alt="">
        </div>
    </div>
</div>
<div class="boost-nettec">
    <div class="container">
        <div class="boost-nettec__wrapper">
            <div class="boost-nettec__img">
                <img src="<?php echo $block8['image']['url'] ?>" alt="">

            </div>
            <div class="boost-nettec__right">
                <div class="boost-nettec__title mont">
                    <?php echo $block8['title'] ?>

                </div>
                <div class="boost-nettec__text">
                    <?php echo apply_filters('the content', $block8['text']) ?>
                    <p>                       
                    </p>
                </div>
                <a href="<?php echo $block8['btn_kink'] ?>" class="boost-nettec__btn btn-orange">
                    <span><?php echo $block8['btn_name'] ?>
                    </span>
                    <svg>
                        <use xlink:href="img/icons/icons.svg#whiteArrow"></use>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>