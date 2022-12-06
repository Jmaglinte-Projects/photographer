<?php if (have_posts()) {
	$counter = 1;
	while (have_posts()) {
		the_post(); ?>

		<?php
		$args = array(
			'post_type' => 'post',
			'orderby'    => 'ID',
			'post_status' => 'publish',
			'order'    => 'DESC',
			'posts_per_page' => -1 // this will retrive all the post that is published
		);
		$result = new WP_Query($args);

		if ($result->have_posts()) :
			$imageUrl = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
			$class = '';
			if ($counter % 2 == 0) $class = 'alt';
		?>
			<div class="blog-card <?= $class ?>">
				<div class="meta">
					<div class="photo" style="background-image: url(
						<?php if (has_post_thumbnail()) {
							echo $imageUrl[0];
						} else { ?> <?php bloginfo('template_directory'); ?>/assets/images/blog/default.jpg <?php } ?>
						)"></div>
					<ul class="details">
						<li class="author"><a href="#"><?= get_the_author_meta('display_name'); ?></a></li>
						<li class="date"><?= get_the_date('M. d, Y'); ?></li>
						<li class="tags">
							<ul>
								<?php
								$posttags = get_the_tags();
								if ($posttags) {
									foreach ($posttags as $tag) {
										echo "<li><a href='#'>$tag->name</a></li>";
									}
								}
								?>
							</ul>
						</li>
					</ul>
				</div>
				<div class="description">
					<h1><?= the_title() ?></h1>
					<!-- <h2>SAMPLE SUB TITLE</h2> -->
					<?= the_excerpt() ?>
					<p class="read-more">
						<a href="<?= the_permalink() ?>">Read More</a>
					</p>
				</div>
			</div>
		<?php
		endif;
		$counter++;
		wp_reset_postdata(); ?>
		<?php while ($result->have_posts()) : $result->the_post(); ?>
		<?php endwhile; ?>
<?php }
} ?>