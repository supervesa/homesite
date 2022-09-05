


<div class="content-container">


	<div class="gradientti" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">




	</div>

	<div class="sidebar">
			<?php get_sidebar(); ?>
	</div>
	<div class="otsikko">
		<h2 class="blog-post-title"><?php the_title(); ?></h2>

	</div>
<div class="artikkeli">
		<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
<p>	<?php the_content(); ?> </p>
</div>

</div>


<!--
<div class="gradientti"
<img> <?php if ( has_post_thumbnail() ) {
the_post_thumbnail();
} ?> </img>
</div>
-->
