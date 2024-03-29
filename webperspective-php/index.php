<?php 
/*
Template Name: Home
 */
?>
<?php get_header();?>
   <main>
      <section class="slogan">
         <div class="slogan__block">
            <div class="block__slogan-background">
               <div class="block__slogan">
                  <h1><span>Увеличиваем</span> прибыль бизнеса используя digital-решения</h1>
                     <nav class="block__slogan-menu">
                     <?php
                        wp_nav_menu( [
                           'menu'            => 'Menu-slogan',
                           'container'       => false,
                           'menu_class'      => 'block__slogan-text',
                           'echo'            => true,
                           'fallback_cb'     => 'wp_page_menu',
                           'items_wrap'      => '<ul class="block__slogan-text">%3$s</ul>',
                           'depth'           => 0,
                        ] );
                     ?>
                     </nav>
                     
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
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider/slide-1.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider/slide-2.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider/slide-3.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider/slide-4.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider/slide-5.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider/slide-6.png" alt="image slider" class="block__slider-img">
                  </div>
                  <div class="block__slider-right block__slider-card">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider/slide-7.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider/slide-8.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider/slide-9.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider/slide-10.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider/slide-11.png" alt="image slider" class="block__slider-img">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/slider/slide-12.png" alt="image slider" class="block__slider-img">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="service">
         <div class="service__block">
            <h2>Наши<span> Услуги</span></h2>
            <div class="service__block-grid">
            <div class="service__block-card">
                  <div class="card-face front"><img src="<?php bloginfo('template_url'); ?>/assets/svg/service/service1.svg" alt="service">Контекстная
                     реклама</div>
                  <div class="card-face back">Самый эффективный вид существующей рекламы
                     Объявления показываются горячим клиентам в поисковой выдаче Яндекса
                     <a class="detailed" href="<?php the_field('link_context',2);?>">Подробнее</a>
                  </div>
               </div>
               
               <div class="service__block-card">
                  <div class="card-face front"><img src="<?php bloginfo('template_url'); ?>/assets/svg/service/service2.svg" alt="service">SEO продвижение
                  </div>
                  <div class="card-face back">Выведем сайт в ТОП Яндекс и Google
                     Обеспечим рост целевых клиентов и продаж
                     <a class="detailed" href="<?php the_field('link_seo',2);?>">Подробнее</a>
                  </div>
               </div>
               <div class="service__block-card">
                  <div class="card-face front"><img src="<?php bloginfo('template_url'); ?>/assets/svg/service/service3.svg" alt="service">Создание сайтов
                  </div>
                  <div class="card-face back">Landing page,
                     Корпоративные сайты,
                     Интернет-магазины
                     <a class="detailed" href="<?php the_field('link_develop',2);?>">Подробнее</a>
                  </div>
               </div>
               <div class="service__block-card">
                  <div class="card-face front"><img src="<?php bloginfo('template_url'); ?>/assets/svg/service/service4.svg" alt="service">Таргетированная
                     реклама
                  </div>
                  <div class="card-face back">Реклама в социальных сетях (Вконтакте, Одноклассники и т.д.)<a
                        class="detailed" href="<?php the_field('link_target',2);?>">Подробнее</a>
                  </div>
               </div>
               <div class="service__block-card">
                  <div class="card-face front"><img src="<?php bloginfo('template_url'); ?>/assets/svg/service/service5.svg" alt="service">Комплексный
                     маркетинг
                  </div>
                  <div class="card-face back">Комплексный маркетинг
                     Настройка и автоматизация бизнес процессов.<a class="detailed" href="<?php the_field('link_complex',2);?>">Подробнее</a>
                  </div>
               </div>
               <div class="service__block-card">
                  <div class="card-face front"><img src="<?php bloginfo('template_url'); ?>/assets/svg/service/service6.svg" alt="service">Фирменный
                     стиль
                  </div>
                  <div class="card-face back">Уникальные логотипы визитки, баннеры, фирменные стили, всё чтобы
                     сделать Вашу компанию неповторимой и узнаваемой.<a class="detailed" href="<?php the_field('link_brand',2);?>">Подробнее</a>
                  </div>
               </div>
               <div class="service__block-card">
                  <div class="card-face front"><img src="<?php bloginfo('template_url'); ?>/assets/svg/service/service7.svg" alt="service">Реклама на
                     маркетплейсах
                  </div>
                  <div class="card-face back">Авито, 2ГИС,
                     Яндекс Услуги, и др <a class="detailed" href="<?php the_field('link_marketplace',2);?>">Подробнее</a></div>
               </div>
               <div class="service__block-card">
                  <div class="card-face front"><img src="<?php bloginfo('template_url'); ?>/assets/svg/service/service8.svg" alt="service">Автоматизация
                     продаж
                  </div>
                  <div class="card-face back">Изучение ниши, Составление скриптов. <a class="detailed"
                        href="<?php the_field('link_auto',2);?>">Подробнее</a><br></div>
               </div>
               <div class="service__block-card">
                  <div class="card-face front"><img src="<?php bloginfo('template_url'); ?>/assets/svg/service/service9.svg" alt="service">Email маркетинг
                  </div>
                  <div class="card-face back">Продвижение продуктов или сервисов через email рассылки. <a
                        class="detailed" href="<?php the_field('link_email',2);?>">Подробнее</a>
                  </div>
               </div>
            </div>
            <hr>
         </div>
      </section>
      <section class="cases">
         <div class="cases__block">
            <h2>Наши<span> Кейсы</span></h2>
            <h5 class="cases__block-subtitle">Реализовываем проекты любой сложности, помогая бизнесу и клиентам найти
               друг друга в интернете.</h5>
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
         </div>
      </section>
      <section class="about">
         <div class="about__block">
            <div class="about__block-company">
               <h2 class="about__block-title">Наша<span> Компания</span></h2>
               <h4 class="about__block-subtitle">Фокус на результат</h4>
               <p class="about__block-text">WEB PERSPECTIVE - это маркетинговое агентство, которое выросло от команды
                  фрилансеров до профессионалов международного уровня. Мы начинали, как объединение маркетологов и
                  программистов, завоевывали лояльность клиентов и увеличивали их число. На данный момент мы уверенно
                  стоим на ногах и можем предложить свой опыт и знания бизнесу!</p>
               <a class="button__feedback button__feedback-header" id="button-about" href="#">Обсудить проект</a>
            </div>
            <div class="about__block-grid">
               <div class="about__block-left">
                  <div class="about__block-card about__block-litlecard about__block-leftcard">
                     <p class="about__block-num">250+</p>
                     <p class="about__block-textcard">завершенных проектов</p>
                  </div>
                  <div class="about__block-card about__block-bigcard about__block-leftcard">
                     <p class="about__block-num">50+</p>
                     <p class="about__block-textcard">компаний на ежемесячном сопровождении</p>
                  </div>
               </div>
               <div class="about__block-right">
                  <div class="about__block-card about__block-bigcard about__block-rightcard">
                     <p class="about__block-num">20+</p>
                     <p class="about__block-textcard">помогли с автоматизацией продаж</p>
                  </div>
                  <div class="about__block-card about__block-litlecard about__block-rightcard">
                     <p class="about__block-num">100+</p>
                     <p class="about__block-textcard">работающих сайтов</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="trust">
         <div class="trust__block">
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
            <hr>
         </div>
      </section>
      <section class="privilege">
         <div class="privilege__block">
            <h2>Наши<span> Преимущества</span></h2>
            <h5 class="cases__block-subtitle">Предлагаем эффективные маркетинговые решения для вашего бизнеса</h5>
            <div class="privilege__block-grid">
               <div class="privilege__block-card">
                  <div class="privilege__block-incard">
                     <img src="<?php bloginfo('template_url'); ?>/assets/svg/privilege/privilege-1.svg" alt="privilege" class="privilege__block-img">
                     <p class="cases__block-name">1. Индивидуальный подход</p>
                  </div>
                  <p class="cases__block-text">Индивидуальный подход к каждому клиенту. Мы погружаемся в специфику
                     бизнеса клиента. Над проектом работает минимум 5 специалистов.</p>
               </div>
               <div class="privilege__block-card">
                  <div class="privilege__block-incard">
                     <img src="<?php bloginfo('template_url'); ?>/assets/svg/privilege/privilege-2.svg" alt="privilege" class="privilege__block-img">
                     <p class="cases__block-name">2. Работающие стратегии</p>
                  </div>
                  <p class="cases__block-text">Наш опыт продвижения сайтов в разных тематиках позволяет предложить вам
                     инструменты и стратегии, положительно зарекомендовавшие себя на практике.</p>
               </div>
               <div class="privilege__block-card">
                  <div class="privilege__block-incard">
                     <img src="<?php bloginfo('template_url'); ?>/assets/svg/privilege/privilege-3.svg" alt="privilege" class="privilege__block-img">
                     <p class="cases__block-name">3. Партнеры Яндекс</p>
                  </div>
                  <p class="cases__block-text">Официальные партнеры Google и Яндекса. Наши сотрудники являются
                     сертифицированными специалистами Google Ads, Google Analytics, Яндекс Директ, Яндекс Метрика.</p>
               </div>
               <div class="privilege__block-card">
                  <div class="privilege__block-incard">
                     <img src="<?php bloginfo('template_url'); ?>/assets/svg/privilege/privilege-4.svg" alt="privilege" class="privilege__block-img">
                     <p class="cases__block-name">4. Комплекс инструментов</p>
                  </div>
                  <p class="cases__block-text">Комплексный подход при продвижении вашего сайта в интернете. Мы
                     предлагаем комплекс услуг для того, чтобы достичь максимального эффекта.</p>
               </div>
               <div class="privilege__block-card">
                  <div class="privilege__block-incard">
                     <img src="<?php bloginfo('template_url'); ?>/assets/svg/privilege/privilege-5.svg" alt="privilege" class="privilege__block-img">
                     <p class="cases__block-name">5. Веб - аналитика</p>
                  </div>
                  <p class="cases__block-text">Аналитика - это наше второе "Я". Наш высокий уровень владения
                     инструментами веб-аналитики позволяет принимать оптимальные решения для увеличения прибыли вашего
                     бизнеса.</p>
               </div>
               <div class="privilege__block-card">
                  <div class="privilege__block-incard">
                     <img src="<?php bloginfo('template_url'); ?>/assets/svg/privilege/privilege-6.svg" alt="privilege" class="privilege__block-img">
                     <p class="cases__block-name">6. Эксперты в маркетинге</p>
                  </div>
                  <p class="cases__block-text">Эксперты в области интернет-маркетинга. Мы пишем профильные статьи и
                     кейсы, участвуем в конференциях по digital marketing.</p>
               </div>
            </div>
         </div>
      </section>
      <section class="contact__form">
         <div class="contact__form-block">
            <div class="contact__form-intitle">
               <div class="contact__form-title">Обсудим ваш проект</div>
               <h5 class="contact__form-subtitle">Заполните форму, мы свяжемся с вами в ближайшее время</h5>
            </div>
            <div class="container">
               <?php echo do_shortcode('[contact-form-7 id="492" title="Форма обратной связи, статичная"]'); ?>   
            </div>
            
         </div>
         <div class="empty-block"></div>
      </section>
      <section class="faq">
         <div class="faq__block">
            <h2>Часто задаваемые<span> Вопросы</span></h2>
            <div class="faq__block-grid">
               <div class="faq__block-card">
                  <button class="faq__block-accordion accordion faq__block-btn">Почему так дорого?</button>
                  <div class="faq__block-panel">
                     <p class="faq__block-text">Стоимость услуг зависит от квалификации специалиста и уровня
                        ответственности. Можно найти студента и нанять его за 20 тыс. рублей, и доверить ему управление
                        Вашим рекламным бюджетом. Можно найти специалиста с небольшим опытом, такой сотрудник будет
                        стоить от 50 тыс. руб., или сразу поднять планку и искать опытного специалиста, с оплатой от 150
                        тыс. руб., но со знаниями во многих областях (в контекстной и таргетированной рекламе, SEO
                        продвижении, создании сайтов с нуля не только на шаблонах, а со знанием PHP, HTML, CSS, опытом
                        работы в графических редакторах и знанием веб-дизайна).
                        Работая с нами Вы получаете все компетенции, в том объеме который необходим для Вашего бизнеса.
                        <span>И существенно дешевле рыночной стоимости.</span>
                     </p>
                  </div>
               </div>
               <div class="faq__block-card">
                  <button class="faq__block-accordion accordion faq__block-btn">Есть ли у Вас тестовый
                     период?</button>
                  <div class="faq__block-panel">
                     <p class="faq__block-text">Нет, тестовый период работ мы не предоставляем. Для того чтобы оценить
                        нашу квалификацию <span>ДО ОПЛАТЫ</span> мы выполним весь объем подготовительных работ:
                        <span>аудит, прогноз
                           бюджета, маркетинговые план, бриф и т.д.</span> Мы готовы детально обсудить все детали
                        предстоящей
                        работы, чтобы Вам не приходилось покупать “кота в мешке”.
                        В то же время, приступая к проекту, мы хотим спокойно погружаться в бизнес процессы, а не
                        торговаться с заказчиком об оплате. Это, в конечном счете, вредно для бизнеса.
                     </p>
                  </div>
               </div>
               <div class="faq__block-card">
                  <button class="faq__block-accordion accordion faq__block-btn">Вы гарантируете мне
                     продажи?</button>
                  <div class="faq__block-panel">
                     <p class="faq__block-text"><span>Маркетинг</span> - это часть бизнеса, <span>это донесение
                           торгового предложения до
                           потенциальной аудитории.</span>

                        <span>Мы можем гарантировать,</span> что в результате нашей работы о Вас узнает целевая
                        аудитория.

                        Мы не можем гарантировать, что Ваши товары и услуги им понравятся и окажутся лучше, чем у
                        конкурентов. Если, например, цена у конкурентов окажется ниже, персонал грамотнее и вежливее,
                        геолокация удобнее, то потенциальный клиент не купит у Вас услугу и нести ответственность за это
                        мы не можем.
                     </p>
                  </div>
               </div>
               <div class="faq__block-card">
                  <button class="faq__block-accordion accordion faq__block-btn">Что такое блог компании или
                     SMM?</button>
                  <div class="faq__block-panel">
                     <p class="faq__block-text">От англ. <span>social media marketing</span>. Это представительство
                        Вашей компании в социальных сетях.
                        Активность в социальных сетях сегодня используется в качестве источника привлечения целевого
                        трафика и
                        канала продаж. Суть работ состоит в освещении, интересующих Ваших потенциальных клиентов проблем
                        и
                        вопросов в виде публикации статей, анонсов и репостов интересного контента.</p>
                  </div>
               </div>
               <div class="faq__block-card">
                  <button class="faq__block-accordion accordion faq__block-btn">Что такое публикации на
                     сайт?</button>
                  <div class="faq__block-panel">
                     <p class="faq__block-text">Это контент, оптимизированный под нужные ключевые запросы. Это
                        специально написанная статья
                        или информационная публикация. <span>Постоянное обновление контента</span> - увеличивает Ваше
                        присутствие в
                        интернете, а его полезность и практическая польза для посетителей - <span>повышают авторитет
                           сайта.</span></p>
                  </div>
               </div>
               <div class="faq__block-card">
                  <button class="faq__block-accordion accordion faq__block-btn">Что такое Landing Page?</button>
                  <div class="faq__block-panel">
                     <p class="faq__block-text">Это так называемая <span>посадочная страница</span>. Это
                        <span>одностраничный сайт</span> с уникальным торговым
                        предложением, задача которого - получать лиды, т.е. <span>"ловить" обращения клиентов с
                           рекламных кампаний</span>.
                     </p>
                  </div>
               </div>
               <div class="faq__block-card">
                  <button class="faq__block-accordion accordion faq__block-btn">Что такое публикации на
                     площадках?</button>
                  <div class="faq__block-panel">
                     <p class="faq__block-text"><span>Это публикации уникальных и полезных статей</span>, информационных
                        вбросов на блогах и площадках по
                        нужной тематике. <span>Цель </span>- привлечение посетителей с этих площадок на Ваш сайт и
                        повышение цитируемости
                        сайта..</p>
                  </div>
               </div>
               <div class="faq__block-card">
                  <button class="faq__block-accordion accordion faq__block-btn">Что такое реклама или PPC?</button>
                  <div class="faq__block-panel">
                     <p class="faq__block-text">От англ. <span>pay per click</span>. Это создание и размещение
                        <span>рекламных кампаний в поисковых системах Яндекс,
                           Google и соцсетях VK, Facebook, Instagram</span>, с точной настройкой под показ рекламных
                        объявлений именно
                        Вашей целевой аудитории. В такой рекламе Вы платите за каждый клик, а не за размещение или
                        показы
                        объявлений. На сегодняшний день технологии позволяют достаточно точно сузить круг потенциальных
                        клиентов, как говорится "бить прямо в цель". <span>Такая реклама лучший способ быстро привлечь
                           трафик</span>,
                        разместив её сегодня, в этот же день Вы получаете переходы на нужную интернет - страницу.
                  </div>
               </div>
               <div class="faq__block-card">
                  <button class="faq__block-accordion accordion faq__block-btn">Что такое УТП?</button>
                  <div class="faq__block-panel">
                     <p class="faq__block-text"><span>Это уникальное торговое предложение</span>. По сути - это некая
                        <span>акция</span> с ограниченным сроком действия.
                        <span>Задача УТП</span> - заинтересовать и побудить посетителя произвести определённое действие
                        на посадочной
                        странице (оставить свой номер телефона, написать сообщение в контактной форме).
                     </p>
                  </div>
               </div>
               <div class="faq__block-card">
                  <button class="faq__block-accordion accordion faq__block-btn">Что такое ключевые
                     запросы?</button>
                  <div class="faq__block-panel">
                     <p class="faq__block-text">Это так называемое <span>"семантическое ядро"</span> - поисковые фразы,
                        по которым пользователи <span>находят Ваши
                           товары и услуги в поисковиках</span>. Количество ключевых запросов расширяется по мере
                        достижения высоких
                        показателей по ним и по сути не ограничивается тарифом. Плюс, неэффективные варианты запросов
                        заменяются или корректируются. <span>Наши тарифы устроены по количеству объёма работ</span>.
                        Больше запросов - больше контента и работы с сайтом, соответственно выше стоимость. Количество
                        запросов выбирается
                        исходя из тематики бизнеса и объёма задач. Если Вы продаёте один товар или услугу - подойдёт
                        тариф до 30
                        запросов, планируете продвигать несколько товаров или услуг, подойдет до 60, хотите продвигать
                        множество позиций выбирайте больший тариф.</p>
                  </div>
               </div>
            </div>
            <hr>
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
   