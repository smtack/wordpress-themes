<div class="post">
	<h1><a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

	<h4><?php the_time('F j Y'); ?></h4>

	<?php 
		if(has_post_thumbnail()) {
			the_post_thumbnail();
		} 
	?>

	<p><?php the_excerpt('...'); ?></p>
	
	<p>
		<a class="comments-link" href="<?php comments_link(); ?>">
			<?php printf(_nx('1 Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain'), number_format_i18n(get_comments_number())); ?>
		</a>
	</p>
</div>