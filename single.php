<?php get_header(); ?>
<div class="container">
	<h2><?php the_title(); ?></h2>
	<div class="row">	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  	<?php the_content(); ?>
	  	

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>
	</div>
</div>


<?php get_footer(); ?>