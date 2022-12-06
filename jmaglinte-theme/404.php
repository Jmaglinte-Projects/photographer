<?php

/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
		<div class="error">
			<div class="error-content">
				<div class="page-header">
					<h1 class="page-title"><?php _e('The Page You Are Looking Is Not Found', 'twentythirteen'); ?></h1>
				</div>

				<div class="page-wrapper">
					<div class="page-content">
						<div class="error-bg">404</div>
						<p><?php _e('The page you are looking for does not exist. It may have been moved, or removed altogether. Perhaps you can return back to the site\'s homepage and see if you can find what you are looking for.', 'twentythirteen'); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .page-content -->
				</div><!-- .page-wrapper -->
			</div>

		</div>


	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>