<?php get_header(); ?>

<div class="container mx-auto p-24">
 <div class="p-12">
  <?php $post_date = get_the_date( 'D M Y' ); echo $post_date; ?>
 </div>

 <?php the_content(); ?>

</div>


<?php get_footer(); ?>