<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php the_title() ?></title>
    <?php wp_head() ?>
</head>
<body>
<div class="bg-overley"></div>
<div class="burger-menu-block js-burger-menu-block">
    <div class="burger-menu-block__exit js-burger-menu-block-exit">
        x
    </div>
    <div class="container">
        <div class="burger-menu-block__wrapper">
            <div class="burger-menu-block__title">
                Menu
            </div>
            <?php echo strip_tags(wp_nav_menu( [
                'theme_location' => 'footer',
                'container'       => false,
                'echo'            => false,
                'items_wrap'      => '%3$s',
                'depth'           => 0,
            ] ), '<a>'); ?>
        </div>
    </div>
</div>
<div class="header">
    <div class="container">
        <div  data-aos="fade-down"  class="header__wrapper">
            <a href="/" class="header__logo">
                <img src="<?php echo get_field('logo','options')['url'] ?>" alt="">
            </a>
            <div class="header__right">
                <span><?php echo the_field('advertorial','options') ?></span>
                <a href="" class="burger-menu js-burger-menu-block-btn">
                    <svg width="52px" height="52px" viewBox="0 0 52 52" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>09A831B0-8EE7-4639-BAE2-ADB1A3707700</title>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Home-Page" transform="translate(-1541.000000, -61.000000)">
                                <g id="menu-burger.4" transform="translate(1541.000000, 61.000000)">
                                    <g id="Group" stroke-linecap="round" stroke-linejoin="round" transform="translate(12.000000, 16.000000)" stroke="#000000" stroke-width="2">
                                        <line x1="0.0714285714" y1="10" x2="27.9285714" y2="10" id="Path"></line>
                                        <line x1="0.0714285714" y1="18.8" x2="27.9285714" y2="18.8" id="Path"></line>
                                        <line x1="0.0714285714" y1="1.2" x2="27.9285714" y2="1.2" id="Path"></line>
                                    </g>
                                    <rect id="Rectangle" x="0" y="0" width="52" height="52"></rect>
                                </g>
                            </g>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>