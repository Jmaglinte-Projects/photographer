<?php get_template_part('includes/head'); ?>
<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/banner'); ?>
<div id="main_area">
	<div class="wrapper">
		<main>
			<h1><?php the_title(); ?></h1>
			<?php get_template_part('templates/content', 'front-page'); ?>
		</main>
	</div>
</div>
<?php get_template_part('includes/middle'); ?>
<?php get_template_part('includes/bottom'); ?>
<?php get_template_part('includes/footer'); ?>