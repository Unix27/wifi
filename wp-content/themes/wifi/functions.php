<?php


add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts() {
	wp_enqueue_style( 'style.min', get_stylesheet_directory_uri() . '/css/style.min.css' );
	wp_enqueue_style( 'jquery.fullpage.min', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.css' );
	wp_enqueue_style( 'fonts', "https://fonts.gstatic.com");
	wp_enqueue_style( 'display=swap', "https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" );
	wp_enqueue_style( 'swiper-bundle', "https://unpkg.com/swiper/swiper-bundle.css" );

	wp_enqueue_script( 'jquery',"https://code.jquery.com/jquery-3.5.1.min.js", true );
	wp_enqueue_script( 'swiper-bundle',  'https://unpkg.com/swiper/swiper-bundle.js', true );
	wp_enqueue_script( 'swiper-bundle.min',"https://unpkg.com/swiper/swiper-bundle.min.js", true );
	wp_enqueue_script( 'script',get_stylesheet_directory_uri() ."/js/script.js", true );

}

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();
}

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
    register_nav_menu( 'footer', 'Footer Menu' );
    register_nav_menu( 'burger-menu', 'Burger Menu' );
}

