<?php get_header('main'); ?>

<div>
			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
			endwhile;  endif; ?>

			<nav>
				<ul class="pager">
					<li><p><?php next_posts_link( 'Uudet' ); ?></p></li>
					<li><p><?php previous_posts_link( 'Vanhat' ); ?></p></li>
				</ul>
			</nav>

</div>
<?php get_footer(); ?>
