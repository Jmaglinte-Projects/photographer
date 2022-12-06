<?php

/**
 * Registers a stylesheet.
 */
function load_css()
{

	wp_register_style('mystyle', get_template_directory_uri() . '/assets/css/styles.css', array(), null);
	wp_enqueue_style('mystyle');

	wp_register_style('mediaStyle', get_template_directory_uri() . '/assets/css/media.css', array(), null);
	wp_enqueue_style('mediaStyle');

	wp_register_style('penBlog', get_template_directory_uri() . '/assets/css/blog/blog.css', array(), null);
	wp_enqueue_style('penBlog');

	wp_register_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), null);
	wp_enqueue_style('font-awesome');

	wp_register_style('hamburgers', get_template_directory_uri() . '/assets/css/hamburgers.css', array(), null);
	wp_enqueue_style('hamburgers');
}
// Register style sheet.
add_action('wp_enqueue_scripts', 'load_css');


/**
 * Registers a javascript.
 */
function load_js()
{
	wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr-custom-v2.7.1.min.js', array(), null);
	wp_enqueue_script('modernizr');

	wp_enqueue_script("jquery");

	wp_register_script('calcheight', get_template_directory_uri() . '/assets/js/calcheight.min.js', array(), null);
	wp_enqueue_script('calcheight');

	wp_register_script('jquery-skitter', get_template_directory_uri() . '/assets/js/jquery.skitter.min.js', array(), null);
	wp_enqueue_script('jquery-skitter');

	wp_register_script('responsiveslides', get_template_directory_uri() . '/assets/js/responsiveslides.min.js', array(), null);
	wp_enqueue_script('responsiveslides');

	wp_register_script('scripts', get_template_directory_uri() . '/assets/js/script.js', array(), null);
	wp_enqueue_script('scripts');
}
// Register javascript.
add_action('wp_enqueue_scripts', 'load_js');

//Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');

// Menus
register_nav_menus(
	array(
		'primary' => 'Primary',
	)
);


// deactivate new block editor
function phi_theme_support()
{
	remove_theme_support('widgets-block-editor');
}
add_action('after_setup_theme', 'phi_theme_support');

// REGISTER WIDGETS HERE

function twentytwentyone_widgets_init()
{

	register_sidebar(

		array(
			'name'          => __('Banner Information', 'twentytwentyone'),
			'id'            => 'bnr_info',
			'description' => __('The primary widget area', 'twentytwentyone'),
			'before_widget' => '<div class="widget-container %2$s">',
			'after_widget' => '</div>',
			'before_title' => '',
			'after_title' => '',
		)
	);
}
add_action('widgets_init', 'twentytwentyone_widgets_init');

// Remove auto elements
add_filter('the_content', 'remove_empty_p', 20, 1);
function remove_empty_p($content)
{
	$content = force_balance_tags($content);
	return preg_replace('#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content);
}
