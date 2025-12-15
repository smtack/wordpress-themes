<?php get_header(); ?>

	<div class="page">
		<?php
			if (have_posts()) : while (have_posts()) : the_post();
				get_template_part('post', get_post_format());
		?>
				<ul class="pagination">
					<li id="prev"><?php previous_post_link('%link', '&#x2190; %title'); ?></li>
					<li id="next"><?php next_post_link('%link', '%title &#x2192;'); ?></li>
				</ul>
		<?php
				if (comments_open() || get_comments_number()) : comments_template();
				endif;

				$posts = wp_get_recent_posts(array(
					'numberposts' => 5
				));
		?>
			<div class="more">
				<h2>More Posts</h2>

				<ul>
					<?php foreach($posts as $post): ?>	
						<li>
							<span id="more-title">
								<a href="<?php echo get_permalink($post['ID']) ?>">
									<?php echo $post['post_title'] ?>
								</a>
							</span>
							<span id="more-date">
								<a href="<?php echo get_permalink($post['ID']) ?>">
									<?php echo date('F j Y', strtotime($post['post_date'])) ?>
								</a>
							</span>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>

		<?php
			endwhile;
			endif;
		?>
	</div>

<?php get_footer(); ?>