<div id="banner">
	<div class="wrapper">
		<?php if (is_front_page()) { ?>
			<div class="slider">
				<ul class="rslides">
					<li>
						<figure> <img src="<?= get_bloginfo('template_url') ?>/assets/images/slider/slider_img1.jpg" alt=""> </figure>
					</li>
					<li>
						<figure> <img src="<?= get_bloginfo('template_url') ?>/assets/images/slider/slider_img2.jpg" alt=""> </figure>
					</li>
					<li>
						<figure> <img src="<?= get_bloginfo('template_url') ?>/assets/images/slider/slider_img3.jpg" alt=""> </figure>
					</li>
					<li>
						<figure> <img src="<?= get_bloginfo('template_url') ?>/assets/images/slider/slider_img4.jpg" alt=""> </figure>
					</li>
				</ul>
				<div class="bnr_info">
					<?php dynamic_sidebar('bnr_info'); ?>
					<!-- <h1>AFFORDABLE, DEPENDABLE, FAST!</h1>
					<h2>Your Digital Shift <span>Starts Here</span></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
						sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</p> -->
				</div>
			</div>
		<?php } elseif (!is_home() || is_home()) { ?>
			<div class="inner-pages">
				<figure>
					<?php if (has_post_thumbnail()) { ?>
						<?php
						if (is_home() or is_single()) echo "<img src='" . get_bloginfo('template_url') . "/assets/images/banner/default.jpg'>";
						if (!is_home() and !is_single()) echo the_post_thumbnail();
						?>
					<?php } else { ?>
						<img src="<?= get_bloginfo('template_url') ?>/assets/images/banner/default.jpg" alt="">
					<?php }  ?>
				</figure>
				<div class="breadcrums">
					<?php if (function_exists('aioseo_breadcrumbs')) aioseo_breadcrumbs(); ?>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
<div class="clearfix"></div>