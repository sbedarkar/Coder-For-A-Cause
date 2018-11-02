<div class="container">
	<h3><?php the_title(); ?></h3>
	
	<small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
		<?php if( has_post_thumbnail() ): ?>
		
		<div class="thumbnail thumbnail-style"><?php the_post_thumbnail('thumbnail'); ?></div>

	<?php endif; ?>
	
	<p><?php the_content(); ?></p>
	
	<hr>
</div>