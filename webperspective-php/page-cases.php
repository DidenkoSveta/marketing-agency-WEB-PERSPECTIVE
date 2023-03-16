<?php 
/*
Template Name: Cases
 */
?>

<?php get_header();?>
   <main>
      <section class="casses">
         
         <div class="casses__block">
            <h1 class="casses__block-title">Наши<span> Кейсы</span></h1>
            <h5 class="casses__block-subtitle">Реализовываем проекты любой сложности, помогая бизнесу и клиентам найти
               друг друга в интернете.</h5>
            <div class="casses__block-img"></div>
            <div class="casses-hr"></div>
            <div class="cases__block-grid casses__block-grid">
               <?php 
                  $posts = get_posts( array(
                     'numberposts' => -1,
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
            <!-- <a class="button__feedback button__feedback-header" id="button-casses" href="#">Смотреть больше</a> -->
         </div>
      </section>
      <section class="contact__form casses-contact__form">
         <div class="contact__form-block">
            <div class="contact__form-intitle">
               <div class="contact__form-title">Обсудим ваш проект</div>
               <h5 class="contact__form-subtitle">Заполните форму, мы свяжемся с вами в ближайшее время</h5>
            </div>
            <div class="container">
            <?php echo do_shortcode('[contact-form-7 id="492" title="Форма обратной связи, статичная"]'); ?>   
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