<?php 
/*
Template Name: Статья
 */
?>

<?php get_header();?>
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
   <main>
      <section class="publication">
         <div class="publication__block">
            <h1 class="publication__block-title">Преимущества разработки сайта на CMS WordPress</h1>
            <h5 class="publication__block-subtitle">Узнайте преимущества разработки сайта на CMS WordPress и кому
               подойдет данная CMS а кому нет.
            </h5>
            <div class="publication__block-date">
               <div class="publication__block-time"><time datetime="2023-02-01">1 февраля 2023</time></div>
               <nav>
                  <ul class="publication__block-tags">
                     <li> <a href="#" class="publication__block-tag">WordPress</a></li>
                     <li><a href="#" class="publication__block-tag">разработка сайта</a></li>
                     <li><a href="#" class="publication__block-tag">CMS</a></li>
                     <li><a href="#" class="publication__block-tag">преимущества</a></li>
                  </ul>
               </nav>
            </div>
            <hr class="publication-hr">
            <div class="publication__block-container">
               <div class="publication__block-img"></div>
               <p>WordPress - самая популярная система управления контентом, которая используется для создания и
                  разработки сайтов. В данной статье рассмотрим преимущества и особенности разработки сайта на WordPress
                  и кому подойдет данная система а кому нет.
               </p>
               <h4>Преимущества разработки на WordPress</h4>
               <ul>
                  <li>WordPress легко интегрируется со многими сервисами и сторонними сайтами, что позволяет расширить и
                     дополнить функциональность вашего сайта.</li>
                  <li>Простой и удобный интерфейс позволяет изменять и дополнять сайт без необходимости
                     программирования.
                  </li>
                  <li>Кросс-браузерная и мобильная поддержка.
                  </li>
                  <li>Большое количество плагинов и тем для быстрого и легкого изменения вида и функциональности сайта.
                  </li>
                  <li>Открытый исходный код для расширения и модификации функциональности.
                  </li>
               </ul>
               <h4>Для кого подходит WordPress
               </h4>
               <p>WordPress подходит для тех, кто хочет создать или разработать сайт без необходимости программирования.
                  Он идеально подходит для тех, кто хочет быстро и легко развивать и модифицировать функциональность
                  сайта.</p>
               <h4>Для кого не подходит WordPress</h4>
               <p>WordPress не подходит для тех, кто хочет создать сложный и масштабный сайт с постоянной необходимостью
                  программирования, без использования дополнительных плагинов и тем. Для таких случаев лучше
                  использовать другие системы управления контентом.
                  WordPress не имеет необходимых инструментов для создания лендингов. Для этого необходимы плагины
                  третьих лиц и дополнительные сторонние сервисы, которые не всегда поддерживаются и иногда бывают
                  дорогими. WordPress не имеет эффективных решений для A/B тестирования и не позволяет легко производить
                  тестирование и оптимизацию лендинг-страниц. Так что для того, чтобы создать эффективный лендинг,
                  WordPress не очень подходит. Также есть проблемы с интеграцией с некоторыми базами данных, например 1С.
               </p>
               <h4>Вывод </h4>
               <p>Таким образом, несмотря на все преимущества WordPress не является универсальным ответом на любой
                  запрос бизнеса. Выбирая инструменты для своего бизнеса в интернете необходимо тщательно оценить свои
                  потребности. Как это сделать мы обязательно расскажем в следующих статьях.</p>
            </div>
         </div>
      </section>
   </main>
   <?php get_footer();?>