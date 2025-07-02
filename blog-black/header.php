<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>
	<body>
		<div class="container">
			<div class="header">
				<div class="info">
					<h1 class="heading"><a href="<?php bloginfo('wpurl'); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
					<p class="description"><?php echo get_bloginfo('description'); ?></p>
				</div>
				<div class="nav">
					<ul>
						<?php $pages = get_pages(); ?>

						<?php foreach ($pages as $page): ?>
							<li><a href="<?php echo get_page_link($page->ID); ?>"><?php echo $page->post_title; ?></a></li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>