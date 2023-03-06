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
add_theme_support( 'menus' );
add_theme_support( 'menus' );

add_theme_support( 'custom-logo' );

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
function filter_nav_menu_link_attributes($atts, $item, $args) {
   if ($args->menu === 'Main') {
      $atts['class'] = 'header__block-list';

      if ($item->current) {
         $atts['class'] = 'header__block-list-active';
      }
   };
   if ($args->menu === 'Menu-footer') {
      $atts['class'] = 'footer__block-list';
   };

   if ($args->menu === 'Menu-navigation') {
      $atts['class'] = 'footer__block-list';
   };

   return $atts;
};

add_theme_support( 'custom-logo' );


function my_customize_register( $wp_customize ) {
   $wp_customize->add_setting('footer__logo', array(
       'default' => '',
       'sanitize_callback' => 'absint',
   ));

   $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'footer__logo', array(
       'section' => 'title_tagline',
       'label' => 'Логотип подвала'
   )));

   $wp_customize->selective_refresh->add_partial('footer__logo', array(
       'selector' => '.footer__logo',
       'render_callback' => function() {
           $logo = get_theme_mod('footer__logo');
           $img = wp_get_attachment_image_src($logo, 'full');
           if ($img) {
               return '<img src="' . $img[0] . '" alt="">';
           } else {
               return '';
           }
       }
   ));
}
add_action( 'customize_register', 'my_customize_register' );
?>