<!-- NONE- Homepage -->
<?php get_template_part('includes/head'); ?>
<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/banner'); ?>
<div id="innerpage">
	<div class="wrapper">
		<main>
			<div class="content_area">
				<h1><?php the_title(); ?></h1>
				<?php get_template_part('templates/content', 'innerpage'); ?>
			</div>
		</main>
	</div>
</div>
<?php get_template_part('includes/footer'); ?>