			<div class="footer">
				<div class="search">
					<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
						<label>
							<input type="search"
										 class="search-field"
										 placeholder="<?php echo esc_attr_x('Search', 'placeholder'); ?>"
										 value="<?php echo get_search_query(); ?>"
										 name="s"
										 title="<?php echo esc_attr_x('Search for:', 'label'); ?>">
							<input type="submit" class="search-submit" value="Search">
						</label>
					</form>
				</div>

				<div class="archive">
					<h4>Archives</h4>

					<ul>
						<?php wp_get_archives('type=yearly'); ?>
					</ul>
				</div>
				
				<p>&copy; <?php echo get_bloginfo('name'); ?> <?php echo date('Y'); ?></p>
			</div>

			<?php wp_footer(); ?>
		</div>
	</body>
</html>