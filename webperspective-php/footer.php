<footer>
      <div class="footer__block">
         <a href="#" id="toTop"><img src="<?php bloginfo('template_url'); ?>/assets/svg/up-arrow.svg" alt="toTop"></a>
         <div class="footer-block-name">
            <div class="footer__block-logo footer__logo" id="footer-logo">
            <a href="<?php the_field('foot-link',2);?>" class="header-logo">
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
            <p class="footer__block-title">Услуги</p>
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
            <p class="footer__block-title">Навигация</p>
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
            <a href="tel:<?php the_field('call', 2);?>" class="footer__block-list"><?php the_field('tel', 2);?></a>
            <a href="mailto:<?php the_field('mail', 2);?>" class="footer__block-list"><?php the_field('mail', 2);?></a>
            <div class="footer__block-social">
               <a href="https://wa.me/<?php the_field('call', 2);?>" class="footer__block-link"><img src="<?php bloginfo('template_url'); ?>/assets/svg/social/whatsapp.svg"
                     alt="whatsapp"></a>
               <a href="https://t.me/<?php the_field('telegram', 2);?>" class="footer__block-link"><img
                     src="<?php bloginfo('template_url'); ?>/assets/svg/social/telegram.svg" alt="telegram"></a>
               <a href="viber://chat?number=<?php the_field('call', 2);?>" class="footer__block-link"><img
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