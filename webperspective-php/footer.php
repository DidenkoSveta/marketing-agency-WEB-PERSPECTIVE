<footer>
      <div class="footer__block">
         <a href="#" id="toTop"><img src="<?php bloginfo('template_url'); ?>/assets/svg/up-arrow.svg" alt="toTop"></a>
         <div class="footer-block-name">
            <div class="footer__block-logo footer__logo" id="footer-logo">
            <a href="" class="header-logo">
               <?php
                  $footer__logo = get_theme_mod('footer__logo');
                  $img = wp_get_attachment_image_src($footer__logo, 'full');
                  if ($img) :
                     ?>
                     <img src="<?php echo $img[0]; ?>" alt="">
               <?php endif; ?>
            </a>
            </div>

            <a class="button__feedback button__feedback-header" id="button-footer" href="#">Обсудить проект</a>
         </div>
         <nav class="navigation__footer footer__block-service">
            <?php
                  wp_nav_menu( [
                     'menu'            => 'Menu-footer',
                     'container'       => false,
                     'menu_class'      => 'footer__block-lists',
                     'echo'            => true,
                     'fallback_cb'     => 'wp_page_menu',
                     'items_wrap'      => '<ul class="footer__block-lists">%3$s</ul>',
                     'depth'           => 2,
                  ] );
            ?>
         </nav>

         <nav class="navigation__footer footer__block-navigation">
         <?php
                  wp_nav_menu( [
                     'menu'            => 'Menu-navigation',
                     'container'       => false,
                     'menu_class'      => 'footer__block-lists',
                     'echo'            => true,
                     'fallback_cb'     => 'wp_page_menu',
                     'items_wrap'      => '<ul class="footer__block-lists">%3$s</ul>',
                     'depth'           => 2,
                  ] );
            ?>
         </nav>
         <div class="footer__block-contacts">
            <a href="#" class="footer__block-title">Контакты</a>
            <a href="tel:+79991131045" class="footer__block-list">+7(999)-113-10-45</a>
            <a href="mailto:sales@webperspective.ru" class="footer__block-list">sales@webperspective.ru</a>
            <div class="footer__block-social">
               <a href="https://wa.me/+79991131045" class="footer__block-link"><img src="<?php bloginfo('template_url'); ?>/assets/svg/social/whatsapp.svg"
                     alt="whatsapp"></a>
               <a href="https://t.me/WebPerspective" class="footer__block-link"><img
                     src="<?php bloginfo('template_url'); ?>/assets/svg/social/telegram.svg" alt="telegram"></a>
               <a href="viber://chat?number=+79991131045" class="footer__block-link"><img
                     src="<?php bloginfo('template_url'); ?>/assets/svg/social/viber.svg" alt="viber"></a>
            </div>
         </div>
      </div>
      <hr class="hr-footer">
      <div class="footer__block-copyright">
         <p>&copy; 2023 «WEB PERSPECTIVE». Все права защищены</p>
      </div>

   </footer>
   <?php wp_footer() ?>
</body>

</html>