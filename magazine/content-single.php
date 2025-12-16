<div class="post">
	<h1><?php the_title(); ?></h1>
	
	<h4><?php the_time('F j Y'); ?></h4>

	<?php 
		if(has_post_thumbnail()) {
			the_post_thumbnail();
		} 
	?>
	
	<p><?php the_content(); ?></p>
</div>