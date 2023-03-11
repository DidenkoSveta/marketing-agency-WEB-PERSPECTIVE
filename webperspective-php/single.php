<?php 
/*
Template Name: Single
 */
?>
<?php get_header();?>

      <main>
      <section class="case">
         <div class="case__block">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; 
		?>
      </div>
   </section>

		</main>

   
    <?php get_footer();?>