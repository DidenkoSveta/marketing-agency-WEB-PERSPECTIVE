<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="<?php bloginfo('template_url');?> ?>/assets/svg/favicon.ico">
   <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>

   <?php wp_head(); ?>
</head>
<body>
   <header>
      <div class="header__block">
         <div class="header__block-logo header__logo">
            <?php
            the_custom_logo();
            ?>
         </div>
         <button type="button" class="burger header__burger"></button>
         <nav class="navigation__header">
            <?php 
               wp_nav_menu( [
                  'menu'            => 'Main',
                  'container'       => false,
                  'menu_class'      => 'header__block-lists',
                  'echo'            => true,
                  'fallback_cb'     => 'wp_page_menu',
                  'items_wrap'      => '<ul class="header__block-lists">%3$s</ul>',
                  'depth'           => 2,
               ] );
            ?>
            <button type="button" class="close header__close"></button>
         </nav>
         <a class="button__feedback button__feedback-header" id="button-head" href="#">Обсудить проект</a>
      </div>
   </header>