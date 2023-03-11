<?php 
/*
Template Name: Мой шаблон кейса
 */
?>

<?php get_header();?>
   <main>
      <section class="case">
         <div class="case__block">
            <div class="case__block-container">
               <div>
                  <p class="case__block-text"><?php the_field('case_company');?></p>
                  <h1 class="case__block-title"> <span>Космосити. <br></span><?php the_field('title_case');?></h1>
                  <h5 class="case__block-subtitle">Продажа корейской косметики оптом<br>
                     514 целевых заявок <br>
                     789 руб. цена целевой заявки <br>
                     5 заявок в день</h5>
                  <a class="button__feedback button__case-link" href="#">Посетить сайт</a>
               </div>
               <img src="<?php bloginfo('template_url'); ?>/assets/img/case/case-1.png" alt="case" class="case__block-img">
            </div>
         </div>
      </section>
      <section class="initial">
         <div class="initial__block">
            <hr>
            <h2 class="initial__block-title">Исходные данные</h2>
            <p class="initial__block-text">Инструмент продвижения: <span>Отсутствуют</span></p>
            <p class="initial__block-text">Тематика: <span>«Онлайн - поставщик корейской и тайской косметики»</span></p>
            <p class="initial__block-text">Регион: <span>Россия</span></p>
            <p class="initial__block-text">Отдел продаж: <span>есть. Есть CRM (1С)</span></p>
            <p class="initial__block-text">Клиент: <span>Компания «Космосити». Занимается оптовой продажей корейской и
                  тайской косметики</span></p>
            <div class="initial__block-img">
               <img src="<?php bloginfo('template_url'); ?>/assets/img/case/screen-page.png" alt="screen-page">
               <p class="initial__block-sign">Клиент «Космосити»</p>
            </div>
            <h2 class="initial__block-title">Задачи</h2>
            <div class="initial__block-lists">
               <p class="initial__block-list">Получение целевых заявок на продажу косметики оптом.</p>
               <p class="initial__block-list">Установленные KPI: Цена конверсии не более 1 тыс. руб.</p>
            </div>
            <hr>
            <h2 class="initial__block-title">Текущая ситуация</h2>
            <p class="initial__block-situation">
               Клиент пришел к нам по рекомендации. <br><br>
               Реклама уже запускалась. Велась 2 месяца. Результатом работы Заказчик был недоволен <br><br>
               По словам клиента, за время работы рекламы приходило по 5 заявок в неделю, было 0 продаж.Клиент пришел к
               нам через hh. <br><br>
               Необходимо было доработать интеграцию 1С и сайта на Битриксе (выгружать свойства).
            </p>
            <hr>
         </div>
      </section>
      <section class="realized">
         <div class="realized__block">
            <h2 class="realized__block-title">Перед началом работ</h2>
            <div class="realized__block-grid">
               <ol class="realized__block-lists">
                  <li class="realized__block-list">Проанализировали текущие инструменты продвижения
                     <ol>
                        <li>Собрали семантическое ядро</li>
                        <li>Аудит сайта показал, что
                           <ul>
                              <li>Урезан функционал в шаблоне Битрикса (не работало заполнение мета - тегов)</li>
                              <li>Отсутствует трафик по SEO, позиции дальше 10й страницы</li>
                              <li>Проблема с индексацией сайта</li>
                           </ul>
                        </li>
                        <li>Прогноз бюджета в Яндекс.Директ</li>
                     </ol>
                  </li>
                  <li class="realized__block-list">Проанализировали рынок и конкурентов </li>
                  <li class="realized__block-list">Разработали стратегию и тактику продвижения
                     <ol>
                        <li>Согласовали помесячный план работ</li>
                        <li>Подобрали инструменты продвижения</li>
                     </ol>
                  </li>
                  <li class="realized__block-list">Нашли точки роста, такие как:
                     <ol>
                        <li>Онлайн-консультант</li>
                        <li>Квиз</li>
                        <li>FAQ</li>
                        <li>Видео - презентация о компании</li>
                        <li>SEO - продвижение</li>
                        <li>И так далее</li>
                     </ol>
                  </li>
               </ol>
               <div class="realized__block-cart">
                  <p class="realized__block-list">5. Подготовили ментальную карту продвижения </p>
                  <figure tabindex="1"> <img class="realized__block-focus" src="<?php bloginfo('template_url'); ?>/assets/img/case/screen-4.png"
                        alt="screen-scheme"></figure>
               </div>
            </div>
            <hr>
         </div>
      </section>
      <section class="mediaplan">
         <div class="mediaplan__block">
            <h2 class="realized__block-title">Медиаплан</h2>
            <div class="mediaplan__block-grid">
               <div class="mediaplan__block-card">
                  <p class="mediaplan__block-subtitle">Яндекс.Директ</p>
                  <p>Регион: Россия</p>
                  <p>Заявленный бюджет в месяц: 40 000 руб</p>
                  <p>Количество кликов на эту сумму: 700</p>
                  <p>Средняя цена клика: 30 руб.</p>
               </div>

               <div class="mediaplan__block-card">
                  <p class="mediaplan__block-subtitle">Реклама в Яндекс.Директ</p>
                  <p>В Яндекс.Директ были настроены следующие рекламные кампании:</p>
                  <p>1. Поисковые РК (брендовая, косметика корея, корейская косметика и т.д.).</p>
                  <p>2. РСЯ.</p>
                  <p>3. Ретаргетинг</p>
               </div>
               <div class="mediaplan__block-card">
                  <p class="mediaplan__block-subtitle">SEO</p>
                  <p>Копирайтинг и ссылки в месяц: 10 000 руб</p>
               </div>
            </div>
            <hr>
         </div>
      </section>
      <section class="order">
         <div class="order__block">
            <h2 class="realized__block-title">Порядок работы</h2>
            <ul>
               <li>Было проведено маркетинговое исследование тематики для данного региона (Россия).
                  <ol class="order__block-lists">
                     <li>Анализ конкурентов. Анализ рекламы с помощью сервиса Keys.so и SpyWords. Выгрузка и анализ
                        запросов в контекстной рекламе.</li>
                     <li>Сбор и сегментация ключевых запросов.</li>
                     <li>Создание и настройка рекламы.</li>
                     <li>Запуск рекламных кампаний.</li>
                     <li>Оптимизация и масштабирование рекламы.</li>
                  </ol>
               </li>
            </ul>
            <div class="order__block-grid">
               <div class="order__block-card">
                  <p>Поисковая рекламная кампания</p>
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/case/screen-1.png" alt="screen case" class="order__block-img">
                  <p class="initial__block-sign">Поисковая РК</p>
               </div>
               <div class="order__block-card">
                  <p>Рекламная кампания в РСЯ</p>
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/case/screen-2.png" alt="screen case" class="order__block-img">
               </div>
               <div class="order__block-card">
                  <p>Рекламная кампания в РСЯ — ретаргетинг</p>
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/case/screen-3.png" alt="screen case" class="order__block-img">
               </div>
            </div>
         </div>
      </section>
      <div class="statistics">
         <div class="statistics__block">
            <div class="realized__block-grid">
               <ol class="realized__block-lists">
                  <li class="realized__block-list">Общая статистика кампаний в Яндекс.Директ за первую неделю
                     <ol>
                        <li>Целевые конверсии: 19 шт.</li>
                        <li>Цена конверсии: 1010 руб.</li>
                        <li>Ср. цена клика: 30,08 руб.</li>
                        <li>CTR: 2,87%</li>
                        <li>CR: 2,21% *</li>
                        <li>*Учитывали только целевые конверсии.</li>
                     </ol>
                  </li>
                  <li class="realized__block-list">Основные работы по ведению и оптимизации рекламы
                     <ol>
                        <li>Регулярное проведение CPA - анализа и на его основе отключение неэффективных/дорогих ключей.
                        </li>
                        <li>Запуск и работа с А/Б - тестированием стратегий показов из-за введения новой стратегии
                           показов:
                           <ul>
                              <li>Максимум кликов;</li>
                              <li>Оптимизация конверсий (также показывает лучшие результаты);</li>
                              <li>Оплата за конверсии;</li>
                              <li>Ручное управление ставками.</li>
                           </ul>
                        </li>
                        <li>Запуск и работа с А/Б - тестированием объявлений.</li>
                        <li>Актуализировали ставки в сторону более конверсионных кампаний/ключевых слов.</li>
                        <li>Расширяли списки минус - слов/площадок (раз в 3-4 дня), чтобы избежать показы по нерелевантным
                           запросам</li>
                     </ol>
                  </li>

                  <li class="realized__block-list">Изменение позиций в выдаче ПС
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/case/screen-5.png" alt="screen position">
                  </li>
                  <li class="realized__block-list">Общие результат работы
                     <ol>
                        <li>Получено 183 конверсии.</li>
                        <li>Средняя цена конверсии – 104 рубля.</li>
                        <li>Обращения: 6 заявок в день.</li>
                     </ol>
                  </li>
               </ol>
            </div>
            <hr>
         </div>
      </div>
      <section class="output">
         <div class="output__block">
            <h2 class="output__block-title">Вывод</h2>
            <p>По результатам работы рекламы вышли на необходимые KPI — цена заявки меньше 1000 руб., 6 целевых заявок в
               день.</p>
            <h2 class="output__block-title">Планы на будущее</h2>
            <ol class="output__block-lists">
               <li>Вывод сайта в ТОП-10 в поисковых системах</li>
               <li>Регистрация на тематических каталогах и площадках</li>
               <li>Создание видео - презентации о компании</li>
               <li>Детальное наполнение карточек товаров</li>
            </ol>
            <p class="initial__block-sign">Благодарю за изучение кейса</p>
         </div>
      </section>
      <section class="contact__form">
         <div class="contact__form-block case__form-block">
            <div class="contact__form-intitle">
               <div class="contact__form-title">Обсудим ваш проект</div>
               <h5 class="contact__form-subtitle">Заполните форму, мы свяжемся с вами в ближайшее время</h5>
            </div>
            <div class="container">
               <form action="action_page.php" enctype="multipart/form-data" method="post">

                  <div class="contact__form-grid">
                     <input type="text" id="contact-name" name="contactname" autocomplete="on" placeholder="Ваше имя">
                     <label for="contact-name"></label>

                     <input type="text" id="contact-tel" name="contacttel" autocomplete="on"
                        placeholder="Номер телефона">
                     <label for="contact-tel"></label>

                     <input type="text" id="contact-site" name="contactsite" autocomplete="on"
                        placeholder="Адрес сайта">
                     <label for="contact-site"></label>
                  </div>
                  <textarea id="subject" name="subject" placeholder="Комментарий"></textarea>
                  <label for="subject"></label>
                  <input class="button__feedback button__contact" id="button__contact" type="submit" value="Отправить"
                     name="submitform">
               </form>
            </div>
         </div>
      </section>
      <section class="cases">
         <div class="cases__block case__block-cases">
            <h2>Больше<span> Проектов</span></h2>
            <h5 class="cases__block-subtitle">Реализовываем проекты любой сложности, помогая бизнесу и клиентам найти
               друг друга в интернете.</h5>
            <div class="cases__block-grid">
               <div class="cases__block-card">
                  <a href="case.html" class="cases__block-link">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/cases/case-1.png" alt="case" class="cases__block-img">
                     <p class="cases__block-name">PALTO.RU - интернет-магазин пальто</p>
                     <p class="cases__block-text">Создание интернет-магазина</p>
                  </a>
               </div>
               <div class="cases__block-card">
                  <a href="case.html" class="cases__block-link">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/cases/case-2.png" alt="case" class="cases__block-img">
                     <p class="cases__block-name">NAHODU - интернет- магазин автозапчастей</p>
                     <p class="cases__block-text">Создание интернет-магазина, контекстная реклама, seo - оптимизация</p>
                  </a>
               </div>
               <div class="cases__block-card">
                  <a href="case.html" class="cases__block-link">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/cases/case-3.png" alt="case" class="cases__block-img">
                     <p class="cases__block-name">COFER- бренд термопосуды</p>
                     <p class="cases__block-text">Комплексное продвижение интернет магазина </p>
                  </a>
               </div>
            </div>
         </div>
      </section>
   </main>

   <?php get_footer();?>