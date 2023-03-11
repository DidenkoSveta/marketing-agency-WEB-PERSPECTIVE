<?php 
/*
Template Name: Contacts-us
 */
?>

<?php get_header();?>
   <main>
      <section class="subheader">
         <div class="subheader__block">
            <h1 class="subheader__block-title"><span>Контакты</span> интернет - агентства</h1>
            <div class="subheader__block-subtitle">Ответим на все интересующие Вас вопросы <br>по телефону или по e-mail
            </div>
            <div class="subheader__block-form">
               <div class="subheader__block-grid">
                  <div class="subheader__block-card"><img src="<?php bloginfo('template_url'); ?>/assets/svg/contacts/tel.svg" alt="phone">
                     <div class="subheader__block-incard">
                        <p class="subheader__incard-title">Телефон</p>
                        <a href="tel:<?php the_field('call', 2);?>"
                           class="subheader__incard-text subheader__incard-link"><?php the_field('tel', 2);?></a>
                     </div>
                  </div>
                  <div class="subheader__block-card"><img src="<?php bloginfo('template_url'); ?>/assets/svg/contacts/mail.svg" alt="email">
                     <div class="subheader__block-incard">
                        <p class="subheader__incard-title">Email</p>
                        <a href="mailto:<?php the_field('mail', 2);?>"
                           class="subheader__incard-text subheader__incard-link"><?php the_field('mail', 2);?></a>
                     </div>

                  </div>
                  <div class="subheader__block-card"><img src="<?php bloginfo('template_url'); ?>/assets/svg/contacts/time.svg" alt="time">
                     <div class="subheader__block-incard">
                        <p class="subheader__incard-title">Время работы:</p>
                        <p class="subheader__incard-text">пн. - пт. с 9:00 до 18:00 ч.</p>
                     </div>
                  </div>
                  <div class="subheader__block-card"><img src="<?php bloginfo('template_url'); ?>/assets/svg/contacts/mess.svg" alt="messengers">
                     <div class="subheader__block-incard">
                        <p class="subheader__incard-title">Мессенджеры</p>
                        <div class="messengers">
                           <a href="https://wa.me/<?php the_field('call', 2);?>"> <img src="<?php bloginfo('template_url'); ?>/assets/svg/contacts/whatsap.svg"
                                 alt="whatsap"></a>
                           <a href="https://t.me/<?php the_field('telegram', 2);?>"><img src="<?php bloginfo('template_url'); ?>/assets/svg/contacts/telegram.svg" alt="telegram"></a>
                           <a href="viber://chat?number=<?php the_field('call', 2);?>"> <img src="<?php bloginfo('template_url'); ?>/assets/svg/contacts/viber.svg"
                                 alt="viber"></a>

                        </div>
                     </div>

                  </div>
               </div>
               <div class="subheader__block-container">
                  <div class="subheader__form-title">Обсудим ваш проект</div>
                  <h5 class="subheader__form-subtitle">Заполните форму, мы свяжемся с вами в ближайшее время</h5>
                  <form action="action_page.php" enctype="multipart/form-data" method="post">

                     <div class="subheader__form-grid">
                        <input type="text" id="subheader-name" name="contactname" autocomplete="on"
                           placeholder="Ваше имя">
                        <label for="subheader-name"></label>

                        <input type="text" id="subheader-tel" name="contacttel" autocomplete="on"
                           placeholder="Номер телефона">
                        <label for="subheader-tel"></label>

                        <input type="text" id="subheader-site" name="contactsite" autocomplete="on"
                           placeholder="Адрес сайта">
                        <label for="subheader-site"></label>
                     </div>
                     <textarea id="subheader-subject" name="subject" placeholder="Комментарий"></textarea>
                     <label for="subheader-subject"></label>
                     <input class="button__feedback button__contact" id="button__subheader" type="submit"
                        value="Отправить" name="submitform">
                  </form>
               </div>
            </div>
         </div>
      </section>

   </main>
   <?php get_footer();?>