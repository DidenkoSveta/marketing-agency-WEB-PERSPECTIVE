<?php 
/*
Template Name: Website development
 */
?>

<?php get_header();?>
   <main>
      <section class="slogan">
         <div class="slogan__block">
            <div class="block__slogan-background">
               <div class="block__slogan">
                  <h1 class="block__slogan-title"><span>Создание сайтов</span> для любого бизнеса!</h1>
                  <div class="block__slogan-subtitle">Вы хотите получить современный, функциональный и привлекательный
                     сайт? У нас есть идеальное решение для Вас!<br><br>Мы предлагаем сайты разной сложности и
                     стоимости. От дорогих и уникальных до недорогих шаблонных решений. Наши высококлассные разработчики
                     обеспечат надежность, безопасность и наилучшие результаты Вашему бизнесу.
                  </div>
                  <div class="block__slogan-btns">
                     <a class="button__feedback button__feedback-header" id="button-slogan" href="#">Обсудить проект</a>
                     <a href="<?php the_field('down-presentation', 2);?>" class="block__slogan-btn" target="_blank"> <img src="<?php bloginfo('template_url'); ?>/assets/svg/download.svg" alt="download">Скачать
                        презентацию</a>
                  </div>
               </div>
            </div>
            <div class="slider">
               <div class="block__slider">
                  <div class="block__slider-left block__slider-card">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider-development/slide-1.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider-development/slide-2.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider-development/slide-3.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider-development/slide-4.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider-development/slide-5.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider-development/slide-6.png" alt="image slider" class="block__slider-img">
                  </div>
                  <div class="block__slider-right block__slider-card">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider-development/slide-7.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider-development/slide-8.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider-development/slide-9.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider-development/slide-10.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider-development/slide-11.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider-development/slide-12.png" alt="image slider" class="block__slider-img">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="privilege">
         <div class="privilege__block privilege__block-service">
            <div class="privilege__block-grid quality__block-grid">
               <div class="privilege__block-card quality-card">
                  <div class="quality-card-incard">
                     <img src="<?php bloginfo('template_url'); ?>/assets/svg/quality/quality-1.svg" alt="privilege" class="privilege__block-img">
                     <h6 class="cases__block-name">Уникальный дизайн</h6>
                  </div>
                  <p class="quality-card-text">Уникальный дизайн: создаем индивидуальный дизайн сайта, который привлечет
                     внимание посетителей.</p>
               </div>
               <div class="privilege__block-card quality-card">
                  <div class="quality-card-incard">
                     <img src="<?php bloginfo('template_url'); ?>/assets/svg/quality/quality-3.svg" alt="privilege" class="privilege__block-img">
                     <h6 class="cases__block-name">Посадочные страницы</h6>
                  </div>
                  <p class="quality-card-text">Создаем лендинги: делаем легко читаемые и понятные посадочные страницы,
                     увеличивающие эффективность продаж.</p>
               </div>
               <div class="privilege__block-card quality-card">
                  <div class="quality-card-incard">
                     <img src="<?php bloginfo('template_url'); ?>/assets/svg/quality/quality-2.svg" alt="privilege" class="privilege__block-img">
                     <h6 class="cases__block-name">Корпоративные сайты</h6>
                  </div>
                  <p class="quality-card-text">Корпоративные сайты: создаем профессиональные сайты для бизнеса,
                     повышающие доверие к вашему бренду.</p>
               </div>
               <div class="privilege__block-card quality-card">
                  <div class="quality-card-incard">
                     <img src="<?php bloginfo('template_url'); ?>/assets/svg/quality/quality-4.svg" alt="privilege" class="privilege__block-img">
                     <h6 class="cases__block-name">CMS WordPress</h6>
                  </div>
                  <p class="quality-card-text">Работаем с CMS WordPress: разрабатываем качественные сайты на движке
                     WordPress с простым администрированием и широкими возможностями.</p>
               </div>
               <div class="privilege__block-card quality-card">
                  <div class="quality-card-incard">
                     <img src="<?php bloginfo('template_url'); ?>/assets/svg/quality/quality-5.svg" alt="privilege" class="privilege__block-img">
                     <h6 class="cases__block-name">Битрикс</h6>
                  </div>
                  <p class="quality-card-text">Интернет-магазины на Битрикс: делаем интернет-магазины на Битрикс с
                     интеграцией с 1с, позволяющие быстро и удобно управлять товарами и продавать их онлайн</p>
               </div>
            </div>
            <hr class="quality-hr">
         </div>
      </section>
      <section class="quality">
         <div class="quality__block">
            <h2>Разработка<span> сайтов</span></h2>
            <h5 class="quality__block-subtitle">Вы ищете компанию, которая поможет вам создать ваш
               интернет-проект?</h5>
            <h5 class="quality__block-subtitle quality__block-subtitle2">Мы используем самые современные инструменты и технологии, чтобы достичь
               максимального
               эффекта при разработке вашего сайта. У нас Вы получите индивидуальный и профессиональный дизайн, а также
               простое и интуитивно понятное администрирование сайта. Наши специалисты помогут Вам реализовать Ваши идеи
               и добиться успеха в вашем бизнесе.</h5>
            <h5 class="quality__block-subtitle">Свяжитесь с нами для более детального обсуждения вашего проекта!</h5>
            <!-- <a class="button__feedback button__feedback-header" id="button-brif" href="brif.html">Заполнить бриф</a> -->
            <hr class="quality-hr">
         </div>
      </section>
      <section class="cases">
         <div class="cases__block">
            <h2>Примеры наших<span> Работ</span></h2>
            <div class="cases__block-grid">
            <?php 
                  $posts = get_posts( array(
                     'numberposts' => 6,
                     'category_name'    => 'cases',
                     'orderby'     => 'date',
                     'order'       => 'DESC',
                     'post_type'   => 'post',
                     'suppress_filters' => true, 
                  ) );

                  foreach( $posts as $post ){
                     setup_postdata( $post );
                     ?>
                        <a href="<?php echo get_permalink();?>" class="cases__block-card" style="background-repeat: no-repeat; border-radius: 20px; background-size: 100%; background-image: url(<?php
                        if(has_post_thumbnail()) {
                         the_post_thumbnail_url(); 
                        } else {
                           echo get_template_directory_uri() .'/assets/img/not-image.png';
                        }
                         ?>)">
                              <p class="cases__block-name"><?php the_field('title-my_cases');?></p>
                              <p class="cases__block-text"><?php the_field('work-my_cases');?></p>
                     </a>
                     <?php
                  }
                  wp_reset_postdata(); 
               ?>
            </div>
            <a class="cases__block-btn" id="button-cases" href="<?php the_field('cases-more', 2);?>">Смотреть все кейсы</a>
            <hr class="quality-hr">
         </div>
      </section>
      <section class="steps">
         <div class="steps__block">
            <h2>Этапы создания сайта в компании<span><br> WEB PERSPECTIVE</span></h2>
            <div class="steps__block-grid">
               <div class="steps__block-card">
                  <div class="steps__block-incard">
                     <div class="steps__block-number">1</div>
                     <p class="steps__block-name">Анализ тематики и целевой аудитории</p>
                  </div>
                  <ul>
                     <li class="steps__block-list">Анализ целей и задач клиента</li>
                     <li class="steps__block-list">Анализ конкурентной среды</li>
                     <li class="steps__block-list">Определение целевой аудитории сайта</li>
                     <li class="steps__block-list">Определение стратегии сайта</li>
                  </ul>
               </div>
               <div class="steps__block-card">
                  <div class="steps__block-incard">
                     <div class="steps__block-number">2</div>
                     <p class="steps__block-name">Разработка дизайна</p>
                  </div>
                  <ul>
                     <li class="steps__block-list">Создание общей концепции дизайна</li>
                     <li class="steps__block-list">Разработка дизайна главной страницы</li>
                     <li class="steps__block-list">Разработка дизайна других страниц сайта</li>
                     <li class="steps__block-list">Создание макета дизайна</li>
                  </ul>
               </div>
               <div class="steps__block-card">
                  <div class="steps__block-incard">
                     <div class="steps__block-number">3</div>
                     <p class="steps__block-name">Разработка функционала сайта</p>
                  </div>
                  <ul>
                     <li class="steps__block-list">Создание структуры сайта</li>
                     <li class="steps__block-list">Разработка функций для разделов сайта</li>
                     <li class="steps__block-list">Разработка системы управления контентом</li>
                     <li class="steps__block-list"> Разработка системы управления медиа - контентом</li>
                  </ul>
               </div>
               <div class="steps__block-card" >
                  <div class="steps__block-incard">
                     <div class="steps__block-number">4</div>
                     <p class="steps__block-name">Разработка технической части сайта</p>
                  </div>
                  <ul>
                     <li class="steps__block-list">Разработка и настройка сервера</li>
                     <li class="steps__block-list">Настройка и проверка подключения к серверу</li>
                     <li class="steps__block-list">Настройка и программирование базы данных</li>
                     <li class="steps__block-list">Настройка и программирование интерфейса сайта</li>
                  </ul>
               </div>
               <div class="steps__block-card" >
                  <div class="steps__block-incard">
                     <div class="steps__block-number">5</div>
                     <p class="steps__block-name">Тестирование сайта</p>
                  </div>
                  <ul>
                     <li class="steps__block-list">Проверка функциональности сайта</li>
                     <li class="steps__block-list">Проверка дизайна сайта</li>
                     <li class="steps__block-list">Проверка отображения сайта в разных браузерах</li>
                     <li class="steps__block-list">Проверка безопасности сайта</li>
                  </ul>
               </div>
               <div class="steps__block-card" >
                  <div class="steps__block-incard">
                     <div class="steps__block-number">6</div>
                     <p class="steps__block-name">Размещение сайта онлайн</p>
                  </div>
                  <ul>
                     <li class="steps__block-list">Загрузка сайта на сервер</li>
                     <li class="steps__block-list">Настройка и проверка домена сайта</li>
                     <li class="steps__block-list">Настройка системы мониторинга доступности сайта</li>
                  </ul>
               </div>
               <div class="steps__block-card" >
                  <div class="steps__block-incard">
                     <div class="steps__block-number">7</div>
                     <p class="steps__block-name">Продвижение сайта</p>
                  </div>
                  <ul>
                     <li class="steps__block-list">Разработка и размещение ключевых слов и мета - тегов</li>
                     <li class="steps__block-list">Разработка стратегии SEO-продвижения</li>
                     <li class="steps__block-list">Продвижение сайта в социальных сетях</li>
                     <li class="steps__block-list">Разработка интернет - рекламы</li>
                     <li class="steps__block-list">Организация и анализ продвижения сайта</li>

                  </ul>
               </div>
            </div>
            <hr>
         </div>
      </section>
      <section class="trust">
         <div class="trust__block" id="trust-block-services">
            <h2>Нам<span> Доверяют</span></h2>
            <h5 class="cases__block-subtitle">Помогаем бизнесу и брендам достигать отличных результатов</h5>
            <div class="trust__block-slider">
               <div class="trust__block-slide" id="trust__slide-1">
                  <div class="trust__block-card">
                     <div><img src="<?php bloginfo('template_url'); ?>/assets/img/trust/trust-1.png" alt="client" class="grayscale"></div>
                  </div>
                  <div class="trust__block-card"><img src="<?php bloginfo('template_url'); ?>/assets/img/trust/trust-2.png" alt="client" class="grayscale">
                  </div>
                  <div class="trust__block-card"><img src="<?php bloginfo('template_url'); ?>/assets/img/trust/trust-3.png" alt="client" class="grayscale">
                  </div>
                  <div class="trust__block-card"><img src="<?php bloginfo('template_url'); ?>/assets/img/trust/trust-4.png" alt="client" class="grayscale">
                  </div>
                  <div class="trust__block-card"><img src="<?php bloginfo('template_url'); ?>/assets/img/trust/trust-5.png" alt="client" class="grayscale">
                  </div>
                  <div class="trust__block-card"><img src="<?php bloginfo('template_url'); ?>/assets/img/trust/trust-6.png" alt="client" class="grayscale">
                  </div>
                  <div class="trust__block-card"><img src="<?php bloginfo('template_url'); ?>/assets/img/trust/trust-7.png" alt="client" class="grayscale">
                  </div>
                  <div class="trust__block-card"><img src="<?php bloginfo('template_url'); ?>/assets/img/trust/trust-8.png" alt="client" class="grayscale">
                  </div>
               </div>
               <div class="trust__block-slide" id="trust__slide-2">
                  <div class="trust__block-card"><img src="<?php bloginfo('template_url'); ?>/assets/img/trust/trust-10.png" alt="client"
                        class="grayscale"></div>
                  <div class="trust__block-card"><img src="<?php bloginfo('template_url'); ?>/assets/img/trust/trust-11.png" alt="client"
                        class="grayscale"></div>
                  <div class="trust__block-card"><img src="<?php bloginfo('template_url'); ?>/assets/img/trust/trust-12.png" alt="client"
                        class="grayscale"></div>
                  <div class="trust__block-card"><img src="<?php bloginfo('template_url'); ?>/assets/img/trust/trust-13.png" alt="client"
                        class="grayscale"></div>
                  <div class="trust__block-card"><img src="<?php bloginfo('template_url'); ?>/assets/img/trust/trust-14.png" alt="client"
                        class="grayscale"></div>
                  <div class="trust__block-card"><img src="<?php bloginfo('template_url'); ?>/assets/img/trust/trust-15.png" alt="client"
                        class="grayscale"></div>
                  <div class="trust__block-card"><img src="<?php bloginfo('template_url'); ?>/assets/img/trust/trust-8.png" alt="client" class="grayscale">
                  </div>
                  <div class="trust__block-card"><img src="<?php bloginfo('template_url'); ?>/assets/img/trust/trust-9.png" alt="client" class="grayscale">
                  </div>
               </div>
               <div class="trust__block-slide" id="trust__slide-3">
                  <div class="trust__block-card"><img src="<?php bloginfo('template_url'); ?>/assets/img/trust/trust-17.png" alt="client"
                        class="grayscale"></div>
                  <div class="trust__block-card"><img src="<?php bloginfo('template_url'); ?>/assets/img/trust/trust-18.png" alt="client"
                        class="grayscale"></div>
                  <div class="trust__block-card"><img src="<?php bloginfo('template_url'); ?>/assets/img/trust/trust-19.png" alt="client"
                        class="grayscale"></div>
                  <div class="trust__block-card"><img src="<?php bloginfo('template_url'); ?>/assets/img/trust/trust-20.png" alt="client"
                        class="grayscale"></div>
                  <div class="trust__block-card"><img src="<?php bloginfo('template_url'); ?>/assets/img/trust/trust-21.png" alt="client"
                        class="grayscale"></div>
                  <div class="trust__block-card"><img src="<?php bloginfo('template_url'); ?>/assets/img/trust/trust-22.png" alt="client"
                        class="grayscale"></div>
                  <div class="trust__block-card"><img src="<?php bloginfo('template_url'); ?>/assets/img/trust/trust-15.png" alt="client"
                        class="grayscale"></div>
                  <div class="trust__block-card"><img src="<?php bloginfo('template_url'); ?>/assets/img/trust/trust-16.png" alt="client"
                        class="grayscale"></div>
               </div>
            </div>
         </div>
      </section>

      <section class="contact__form">
         <div class="contact__form-block" id="contact__form-services">
            <div class="contact__form-intitle">
               <div class="contact__form-title">Обсудим ваш проект</div>
               <h5 class="contact__form-subtitle">Заполните форму, мы свяжемся с вами в ближайшее время</h5>
            </div>
            <div class="container">
            <?php echo do_shortcode('[contact-form-7 id="492" title="Форма обратной связи, статичная"]'); ?>   
            </div>
         </div>
      </section>
      <section class="articles">
         <div class="articles__block">
            <h2>Последние<span> Статьи</span></h2>
            <div class="articles__block-grid">
            <?php 
                  $posts = get_posts( array(
                     'numberposts' => 3,
                     'category_name'    => 'blog',
                     'orderby'     => 'date',
                     'order'       => 'DESC',
                     'post_type'   => 'post',
                     'suppress_filters' => true, 
                  ) );

                  foreach( $posts as $post ){
                     setup_postdata( $post );
                     ?>
                        <a href="<?php echo get_permalink();?>" class="articles__block-card" style="background-repeat: no-repeat; border-radius: 20px; background-size: 100%; background-image: url(<?php
                        if(has_post_thumbnail()) {
                         the_post_thumbnail_url(); 
                        } else {
                           echo get_template_directory_uri() .'/assets/img/not-image.png';
                        }
                         ?>)">
                           <div class="articles__block-incard">
                              <h5 class="articles__block-subtitle"><?php the_field('title-blog');?></h5>
                              <p class="articles__block-text"><?php the_field('data_blog');?></p>
                           </div>
                     </a>
                     <?php
                  }
                  wp_reset_postdata(); 
               ?>
            </div>
         </div>
      </section>
   </main>
   <?php get_footer();?>