<?php 
/*
Template Name: Target
 */
?>

<?php get_header();?>
   <main>
      <section class="slogan">
         <div class="slogan__block">
            <div class="block__slogan-background">
               <div class="block__slogan">
                  <h1 class="block__slogan-title"><span>Таргетированная реклама myTarget,</span> найдите своего клиента
                     в соц сетях!</h1>
                  <div class="block__slogan-subtitle">myTarget - это мощный инструмент для рекламы, который позволяет
                     вам достичь желаемых результатов быстро и эффективно. С myTarget вы можете таргетировать рекламу
                     конкретным аудиториям и достигать идеальной конверсии.
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
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider-context/slide-1.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider-context/slide-2.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider-context/slide-3.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider-context/slide-4.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider-context/slide-5.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider-context/slide-6.png" alt="image slider" class="block__slider-img">
                  </div>
                  <div class="block__slider-right block__slider-card">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider-context/slide-7.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider-context/slide-8.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider-context/slide-9.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider-context/slide-10.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider-context/slide-11.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider-context/slide-12.png" alt="image slider" class="block__slider-img">
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
                     <h6 class="cases__block-name">Точная настройка аудитории</h6>
                  </div>
                  <p class="quality-card-text">myTarget позволяет вам точно настраивать вашу рекламу для конкретных
                     аудиторий.</p>
               </div>
               <div class="privilege__block-card quality-card">
                  <div class="quality-card-incard">
                     <img src="<?php bloginfo('template_url'); ?>/assets/svg/quality/quality-2.svg" alt="privilege" class="privilege__block-img">
                     <h6 class="cases__block-name">Гибкость в настройке кампании</h6>
                  </div>
                  <p class="quality-card-text">myTarget предлагает вам множество инструментов и опций для настройки
                     рекламы, что делает ее максимально эффективной.</p>
               </div>
               <div class="privilege__block-card quality-card">
                  <div class="quality-card-incard">
                     <img src="<?php bloginfo('template_url'); ?>/assets/svg/quality/quality-3.svg" alt="privilege" class="privilege__block-img">
                     <h6 class="cases__block-name">Высокая эффективность в достижении результатов</h6>
                  </div>
                  <p class="quality-card-text"> с myTarget вы можете достигать высоких результатов и высокой конверсии,
                     увеличивая эффективность рекламы</p>
               </div>
            </div>
            <hr class="quality-hr">
         </div>
      </section>
      <section class="quality">
         <div class="quality__block">
            <h2><span>My Target</span> предлагает рекламные возможности в популярных соцсетях:</h2>
            <div class="quality__block-lists target-grid">
               <ul>
                  <li class="quality__block-list">Одноклассники</li>
                  <li class="quality__block-list">Вконтакте</li>
                  <li class="quality__block-list">Мой мир</li>
               </ul>
               <ul>
                  <li class="quality__block-list quality__block-name">Кроме того, My Target также включает ряд
                     дополнительных платформ, таких как:</li>
                  <li class="quality__block-list">Mail.ru, мобильные сервисы и почта</li>
                  <li class="quality__block-list">MyTarget рекламная сеть, сотрудничающая с партнерами вроде Литрес, Viber, Rovio и т.д.</li>
                  <li class="quality__block-list">Видеохостинг COUB</li>
                  <li class="quality__block-list">Видеосеть Native Roll</li>
               </ul>
            </div>
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
            <h2>Настройка таргетированной рекламы в компании<span><br> WEB PERSPECTIVE</span></h2>
            <h5 class="steps__block-subtitle">Начиная с минимальных затрат, мы достигаем желаемых результатов и
               постепенно усиливаем маркетинговую активность: запускаем кампании, добавляем поисковые запросы, расширяем
               границы целевой аудитории.</h5>
            <div class="steps__block-grid">
               <div class="steps__block-card">
                  <div class="steps__block-incard">
                     <div class="steps__block-number">1</div>
                     <p class="steps__block-name">Определение целевой аудитории</p>
                  </div>
                  <ul>
                     <li class="steps__block-list">Анализ демографических данных потенциальных клиентов (возраст, пол, местожительство, интересы)</li>
                     <li class="steps__block-list">Определение предпочтений аудитории в онлайн-коммуникациях (социальные сети, видеохостинги, почтовые сервисы)</li>
                  </ul>
               </div>
               <div class="steps__block-card">
                  <div class="steps__block-incard">
                     <div class="steps__block-number">2</div>
                     <p class="steps__block-name">Создание рекламных кампаний</p>
                  </div>
                  <ul>
                     <li class="steps__block-list">Разработка креативов (баннеры, видеоролики, посты в социальных сетях)</li>
                     <li class="steps__block-list">Настройка таргетинга для каждой кампании (указание целевой аудитории, временной диапазон, геолокации)</li>
                     <li class="steps__block-list">Настройка бюджета и ставок для каждой кампании</li>
                  </ul>
               </div>
               <div class="steps__block-card">
                  <div class="steps__block-incard">
                     <div class="steps__block-number">3</div>
                     <p class="steps__block-name">Мониторинг эффективности кампаний</p>
                  </div>
                  <ul>
                     <li class="steps__block-list">Отслеживание показателей качества трафика (CTR, CR, CPA)</li>
                     <li class="steps__block-list">Анализ данных о действиях пользователей (клики, просмотры, конверсии)</li>
                     <li class="steps__block-list">Регулярные отчеты об эффективности кампании</li>
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