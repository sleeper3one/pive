<?php 

/*
 Template Name: Słodka Galeria
*/

?>

<?php get_header(); ?>


<?php
  $args = array(
   'post_per_page' => -1,
   'post_type' => 'sodkagaleria',
   'tag' => $post_tag,
   'orderby' => 'date',
   'order' => 'ASC'
  );
  
  $candys = new WP_Query( $args ); 

  if ( $candys -> have_posts() ) : 
 ?>

<div id="post-area" class="container mx-auto px-10 py-6">

 <?php while ( $candys -> have_posts()) : $candys -> the_post(); ?>

 <div class="post filter drop-shadow-xl border-4 border-white">
  <a href="<?php the_permalink(); ?>">
   <?php if( has_post_thumbnail() ) : ?>
   <?php echo get_the_post_thumbnail( $page->ID, 'medium' ); ?>
 </div>
 <?php endif; ?>

 <?php endwhile; wp_reset_query(); ?>
 <?php endif; ?>
 </a>


</div>
<?php get_footer(); ?>