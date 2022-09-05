
<?php get_header('post'); ?>



<!-- nacigaatio ylhäällä
<div class="navigaatio-top">
	<p><?php echo get_next_posts_link('Go to next page'); ?> </p>


		<?php $posts = query_posts($query_string); if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="navigation">
<h3><?php previous_post_link(); ?> | <?php next_post_link(); ?></h3>

		<?php endwhile; endif; ?>
</div>

	</div>

-->

<div>
			<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();

	get_template_part( 'content-single', get_post_format() );

endwhile; endif;

	?>

	<?php $posts = query_posts($query_string); if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="navigation">
	<ul>
<li><?php previous_post_link(); ?> </li> <li> <?php next_post_link(); ?></li>
</ul>
	<?php endwhile; endif; ?>
</div>

</div>


<?php get_footer(); ?>
