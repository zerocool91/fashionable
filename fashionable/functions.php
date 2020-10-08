<?php

add_theme_support( 'custom-logo', [
	'height'      => 91,
	'width'       => 9999
] );

add_action( 'after_setup_theme', function(){
	register_nav_menus( [
		'header_menu' => 'Header menu'
	] );
} );

add_action( 'wp_enqueue_scripts', 'jquery_script_method' );
function jquery_script_method() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js' );
	wp_enqueue_script( 'jquery' );
}

add_action( 'wp_enqueue_scripts', 'fashionable_scripts' );
function fashionable_scripts() {
	wp_enqueue_style( 'slick-slider-style', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
	wp_enqueue_style( 'fancy-box-style', '//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css' );
	wp_enqueue_style( 'foundation-style', '//cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css' );
	wp_enqueue_style( 'slick-nav-style', '//cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/slicknav.min.css' );
	wp_enqueue_style( 'fashionable-style', get_template_directory_uri() . '/assets/styles/style.css' );
	wp_enqueue_style('main-style', get_stylesheet_uri() );

	wp_enqueue_script( 'slick-slider-script', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js' );
	wp_enqueue_script( 'fancybox-script', '//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js' );
	wp_enqueue_script('slick-nav-script', '//cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/jquery.slicknav.min.js');
	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/main.js' );
}

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page( array(
		'page_title' => 'Header options',
		'menu_title' => 'Header'
	) );

}
add_filter( 'wpcf7_autop_or_not', '__return_false' );

if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'header-slider-image', 99999, 858, true );
	add_image_size('header-logo-image', 471, 216, true);
	add_image_size('thumbnail', 9999, 280);
	add_image_size('small', 164, 9999);
	add_image_size('large', 9999, 600);
}
?>