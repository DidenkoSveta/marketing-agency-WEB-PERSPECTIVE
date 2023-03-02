<?php 
add_action( 'wp_enqueue_scripts', function() {

   wp_enqueue_style( 'gstatic', 'https://fonts.googleapis.com' );
   wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap' );
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
   wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );


	wp_enqueue_script( 'burger', get_template_directory_uri() . '/js/burger.js', array(), '1.0.0', true );
   wp_enqueue_script( 'animate', get_template_directory_uri() . '/js/animate.js', array(), '1.0.0', true );
   wp_enqueue_script( 'scroll', get_template_directory_uri() . '/js/scroll.js', array(), '1.0.0', true );
} );

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
?>