<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="<?php bloginfo('template_url');?> ?>/assets/svg/favicon.ico">
   <title>WEB PERSPECTIVE</title>

   <?php wp_head(); ?>
</head>
<body>
   <header>
      <div class="header__block">
         <a class="header__block-logo" href="index.html"><img src="<?php bloginfo('template_url'); ?>/assets/svg/logo.svg" alt="logo"></a>
         <button type="button" class="burger header__burger"></button>
         <nav class="navigation__header">
            <button type="button" class="close header__close"></button>
            <ul class="header__block-lists navigation__menu">
               <li class="header__block-link"><a class="header__block-list" href="index.html">Главная</a></li>
               <li class="header__block-taplink"><a class="header__block-list" href="services.html">Услуги</a>
                  <ul class="header__block-underlists">
                     <li class="header__block-underlist"><a href="context.html">Контекстная реклама</a></li>
                     <li class="header__block-underlist"><a href="seo.html">SEO-продвижение</a></li>
                     <li class="header__block-underlist"><a href="development.html">Создание сайтов</a></li>
                     <li class="header__block-underlist"><a href="target.html">Таргетированная реклама</a></li>
                     <li class="header__block-underlist"><a href="complex.html">Комплексный маркетинг</a></li>
                     <li class="header__block-underlist"><a href="brand.html">Фирменный стиль</a></li>
               <li class="header__block-underlist"><a href="marketplace.html">Реклама на маркетплейсах</a></li>
               <li class="header__block-underlist"><a href="calling.html">Автоматизация продаж</a></li>
               <li class="header__block-underlist"><a href="email.html">Email маркетинг</a></li>
            </ul>
            </li>
            <li><a class="header__block-list" href="pricing.html">Стоимость</a></li>
            <li><a class="header__block-list" href="cases.html">Кейсы</a></li>
            <li><a class="header__block-list" href="blog.html">Блог</a></li>
            <li><a class="header__block-list" href="contacts.html">Контакты</a></li>
            </ul>
         </nav>
         <a class="button__feedback button__feedback-header" id="button-head" href="#">Обсудить проект</a>
      </div>
   </header>