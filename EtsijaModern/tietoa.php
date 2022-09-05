<?php /* Template Name: Tietoa */ ?>
<?php get_header('tietoa'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();

  if( $post->ID == $do_not_duplicate ) continue; //This is the Magic Line

 ?>
   <!-- Do stuff... -->
  <?php endwhile; endif; ?>

<div class='artikkeli'>
<div class="Otsikko">
  <h1>  <?php the_title(); ?> </h1>
</div>

<div class="artikkeli">
  <?php the_content(); ?>
</div>

</div>
