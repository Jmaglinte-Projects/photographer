<!DOCTYPE html>
<!--[if lt IE 8]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en-US">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

	<title><?php //echo get_bloginfo('name');
			?>CompanyName</title>

	<?php if (!is_front_page()) { ?>
		<link rel='stylesheet' href="<?= get_bloginfo('template_url') ?>/assets/css/nonhome.css">
	<?php } ?>
	<?php wp_head(); ?>
</head>

<body>
	<div class="protect-me">
		<div class="clearfix">