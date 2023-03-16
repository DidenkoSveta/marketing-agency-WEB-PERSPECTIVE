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
               <div class="publication__block-img"></div>
            <hr>

         </div>
      </section>
      <section class="note">
         <div class="note__block">
            <div class="note__block-grid">
            <?php 
                  $posts = get_posts( array(
                     'numberposts' => -1,
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
            <!-- <a class="button__feedback button__feedback-header" id="button-note" href="#">Смотреть больше</a> -->
         </div>
      </section>
   </main>

   <?php get_footer();?>