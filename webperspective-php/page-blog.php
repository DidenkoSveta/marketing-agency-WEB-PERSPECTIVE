<?php 
/*
Template Name: Blog
 */
?>

<?php get_header();?>
   <main>
      <section class="publication">
         <div class="publication__block">
            <h1 class="publication__block-title">Наши <span>Статьи</span></h1>
            <h5 class="publication__block-subtitle">Реализовываем сайты разной сложности помогая<br> бизнесу представить
               себя в интернете.</h5>
            <hr>
            <div class="publication__block-subscription">
               <h5 class="publication__block-text">Подпишитесь на еженедельные полезные статьи от агентства WEB
                  ПЕРСПЕКТИВА:</h5>
               <div class="subscription-container">
                  <img src="<?php bloginfo('template_url'); ?>/assets/svg/subscription.svg" alt="subscription">
                  <form class="publication__block-example" action="action_block-subscription.php">
                     <input class="publication__block-input" type="text" placeholder="email - адресс" name="email">
                     <button class="button__feedback button__feedback-header" id="button-subscription"
                        type="submit">Подписаться</button>
                  </form>
               </div>
            </div>
            <hr>
            <nav>
               <ul class="publication__block-sorting">
                  <li> <a href="#" class="publication__block-link">Все</a></li>
                  <li><a href="#" class="publication__block-link">Контекстная реклама</a></li>
                  <li><a href="#" class="publication__block-link">SMM</a></li>
                  <li><a href="#" class="publication__block-link">Разработка сайтов</a></li>
                  <li><a href="#" class="publication__block-link">UX/UI дизайн</a></li>
                  <li><a href="#" class="publication__block-link">Таргетированная реклама</a></li>
                  <li><a href="#" class="publication__block-link">Холодный обзвон</a></li>
                  <li><a href="#" class="publication__block-link">B2B</a></li>
                  <li><a href="#" class="publication__block-link">Комплексный маркетинг</a></li>
                  <li><a href="#" class="publication__block-link">Поисковая оптимизация</a></li>
                  <li><a href="#" class="publication__block-link">Email-маркетинг</a></li>
                  <li><a href="#" class="publication__block-link">SEO</a></li>
               </ul>
            </nav>

         </div>
      </section>
      <section class="note">
         <div class="note__block">
            <div class="note__block-grid">
               <a href="publication.html">
                  <div class="articles__block-card">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/articles/articles-1.png" alt="articles" class="articles__block-img">
                     <div class="articles__block-incard">
                        <h6 class="articles__block-subtitle">Как UI дизайн помогает настроить на покупку</h6>
                        <p class="articles__block-text">12 дней назад</p>
                     </div>
                  </div>
               </a>
               <a href="publication.html">
                  <div class="articles__block-card">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/articles/articles-2.png" alt="articles" class="articles__block-img">
                     <div class="articles__block-incard">
                        <h5 class="articles__block-subtitle">Топ 15 SEO расширений для Chrome</h5>
                        <p class="articles__block-text">12 дней назад</p>
                     </div>
                  </div>
               </a>
               
               <a href="publication.html">
                  <div class="articles__block-card">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/articles/articles-3.png" alt="articles" class="articles__block-img">
                     <div class="articles__block-incard">
                        <h5 class="articles__block-subtitle">Увеличение лидов, через SEO</h5>
                        <p class="articles__block-text">12 дней назад</p>
                     </div>
                  </div>
               </a>
               <a href="publication.html">
                  <div class="articles__block-card">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/articles/articles-1.png" alt="articles" class="articles__block-img">
                     <div class="articles__block-incard">
                        <h5 class="articles__block-subtitle">Как UI дизайн помогает настроить на покупку</h5>
                        <p class="articles__block-text">12 дней назад</p>
                     </div>
                  </div>
               </a>
               <a href="publication.html">
                  <div class="articles__block-card">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/articles/articles-2.png" alt="articles" class="articles__block-img">
                     <div class="articles__block-incard">
                        <h5 class="articles__block-subtitle">Топ 15 SEO расширений для Chrome</h5>
                        <p class="articles__block-text">12 дней назад</p>
                     </div>
                  </div>
               </a>
               <a href="publication.html">
                  <div class="articles__block-card">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/articles/articles-3.png" alt="articles" class="articles__block-img">
                     <div class="articles__block-incard">
                        <h5 class="articles__block-subtitle">Увеличение лидов, через SEO</h5>
                        <p class="articles__block-text">12 дней назад</p>
                     </div>
                  </div>
               </a>
               <a href="publication.html">
                  <div class="articles__block-card">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/articles/articles-1.png" alt="articles" class="articles__block-img">
                     <div class="articles__block-incard">
                        <h5 class="articles__block-subtitle">Как UI дизайн помогает настроить на покупку</h5>
                        <p class="articles__block-text">12 дней назад</p>
                     </div>
                  </div>
               </a>
               <a href="publication.html">
                  <div class="articles__block-card">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/articles/articles-2.png" alt="articles" class="articles__block-img">
                     <div class="articles__block-incard">
                        <h5 class="articles__block-subtitle">Топ 15 SEO расширений для Chrome</h5>
                        <p class="articles__block-text">12 дней назад</p>
                     </div>
                  </div>
               </a>
               <a href="publication.html">
                  <div class="articles__block-card">
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/articles/articles-3.png" alt="articles" class="articles__block-img">
                     <div class="articles__block-incard">
                        <h5 class="articles__block-subtitle">Увеличение лидов, через SEO</h5>
                        <p class="articles__block-text">12 дней назад</p>
                     </div>
                  </div>
               </a>
            </div>
            <!-- <a class="button__feedback button__feedback-header" id="button-note" href="#">Смотреть больше</a> -->
         </div>
      </section>
   </main>

   <?php get_footer();?>