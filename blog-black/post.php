<div class="post">
	<h1 class="title"><?php the_title(); ?></h1>

	<h4><?php the_time('F j Y'); ?></h4>

	<?php 
		if(has_post_thumbnail()) {
			the_post_thumbnail();
		} 
	?>

	<p><?php the_content(); ?></p>
	
	<div class="post-navigation">
		<?php the_post_navigation(array(
			'prev_text' => __( '&#x2190; Previous Post: %title' ),
			'next_text' => __( 'Next Post: %title &#x2192;' ),
		)); ?>
	</div>
</div>