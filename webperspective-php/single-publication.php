<?php 
/*
Template Name: Мой шаблон для статей
Template Post Type: post, blog
 */
?>
<?php get_header();?>





<main>
      <section class="publication">
         <div class="publication__block">
            <h1 class="publication__block-title"><?php the_field('title-blog');?></h1>
            <h5 class="publication__block-subtitle"><?php the_field('subtitle-blog');?></h5>
            <div class="publication__block-date">
               <div class="publication__block-time"><?php the_field('data_blog');?></div>
               <nav>
                  <ul class="publication__block-tags">
                     <?php $posttags = get_the_tags();
                        if( $posttags ){
                           foreach( $posttags as $tag ){
                              echo $tag->name . ' ';
                           }
                        } ?>
                     <li> <a href="#" class="publication__block-tag">WordPress</a></li>
                     <li><a href="#" class="publication__block-tag">разработка сайта</a></li>
                     <li><a href="#" class="publication__block-tag">CMS</a></li>
                     <li><a href="#" class="publication__block-tag">преимущества</a></li>
                  </ul>
               </nav>
            </div>
            <hr class="publication-hr">
            <div class="publication__block-container">
               <img src="<?php the_field('img_blog');?>" class="publication__block-image">
               <p><?php the_field('text_blog1');?></p>
               <h4><?php the_field('subtitle-blog2');?></h4>
               <ul><?php the_field('text_blog2');?></ul>
               <h4><?php the_field('subtitle-blog3');?></h4>
               <p><?php the_field('text_blog3');?></p>
               <h4><?php the_field('subtitle-blog4');?></h4>
               <p><?php the_field('text_blog4');?></p>
               <h4><?php the_field('subtitle-blog5');?></h4>
               <p><?php the_field('text_blog5');?></p>
            </div>
         </div>
      </section>
   </main>


<?php
while ( have_posts() ) :
   the_post();

   // get_template_part( 'template-parts/content', get_post_type() );

endwhile; 
?>



<?php get_footer();?>