<div id="nav_area">
	<!-- <php wp_nav_menu( array( 'container_class' => 'nav-menu', 'theme_location' => 'primary', 'after' => '<span></span>') ); ?> -->

	<!-- DESKTOP MENU -->
	<div id="desktop_nav">
		<?php wp_nav_menu(array('container_class' => 'nav-menu', 'theme_location' => 'primary', 'after' => '<span></span>')); ?>
	</div>

	<div class="nav_toggle_button">
		<div class="logo_wrap"></div>
		<div class="toggle_holder">
			<div class="hamburger hamburger--spin-r">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>

	<div class="toggle_right_nav">
		<nav class="page_nav">
			<!-- MOBILE MENU-->
			<div class="menu_slide_right">
				<a class="logo_slide_right" href="https://web2.ph">
					<figure><img src="<?= get_bloginfo('template_url') ?>/assets/images/main-logo.png" alt="Web2.ph"></figure>
				</a>
				<div class="toggle_holder">
					<div class="hamburger hamburger--spin-r">
						<div class="hamburger-box">
							<div class="hamburger-inner"></div>
						</div>
					</div>
					<small>Close</small>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="header_info_holder"></div>
			<!-- <div class="header_menu_holder"></div> -->
			<div class="wrapper">
				<!-- <php wp_nav_menu( array( 'container_class' => 'nav-menu', 'theme_location' => 'primary', 'after' => '<span><i class="fa fa-2x">&nbsp;&nbsp;&nbsp;&nbsp;</i></span>') ); ?> -->
				<!-- <div class="nav-menu">
					<ul id="menu-main-menu" class="menu">
						<li id="menu-item-23" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-23"><a href="https://web2.ph/">Home</a><span><i class="fa fa-1x fa-plus">&nbsp;&nbsp;&nbsp;&nbsp;</i></span></li>
						<li id="menu-item-18" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18"><a href="https://web2.ph/custom-about-us">About Us</a><span><i class="fa fa-1x fa-plus">&nbsp;&nbsp;&nbsp;&nbsp;</i></span></li>
						<li id="menu-item-74" class="serv menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-74"><a>Services</a><span><i class="fa fa-1x fa-plus">&nbsp;&nbsp;&nbsp;&nbsp;</i></span>
							<ul class="ub-msenu">
								<li id="menu-item-177" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-177"><a href="https://web2.ph/custom-websites">Websites</a><span><i class="fa fa-1x fa-plus">&nbsp;&nbsp;&nbsp;&nbsp;</i></span></li>
								<li id="menu-item-175" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-175"><a href="https://web2.ph/custom-seo">SEO</a><span><i class="fa fa-1x fa-plus">&nbsp;&nbsp;&nbsp;&nbsp;</i></span></li>
								<li id="menu-item-176" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-176"><a href="https://web2.ph/custom-social-media">Social Media</a><span><i class="fa fa-1x fa-plus">&nbsp;&nbsp;&nbsp;&nbsp;</i></span></li>
								<li id="menu-item-184" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-184"><a href="https://web2.ph/custom-web-hosting">Web Hosting</a><span><i class="fa fa-1x fa-plus">&nbsp;&nbsp;&nbsp;&nbsp;</i></span></li>
								<li id="menu-item-183" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-183"><a href="https://web2.ph/custom-web-maintenance">Web Maintenance</a><span><i class="fa fa-1x fa-plus">&nbsp;&nbsp;&nbsp;&nbsp;</i></span></li>
							</ul>
						</li>
						<li id="menu-item-19" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19"><a href="https://web2.ph/custom-portfolio">Our Portfolio</a><span><i class="fa fa-1x fa-plus">&nbsp;&nbsp;&nbsp;&nbsp;</i></span></li>
						<li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20"><a href="https://web2.ph/custom-reviews">Reviews</a><span><i class="fa fa-1x fa-plus">&nbsp;&nbsp;&nbsp;&nbsp;</i></span></li>
						<li id="menu-item-22" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22"><a href="https://web2.ph/custom-contact-us">Contact Us</a><span><i class="fa fa-1x fa-plus">&nbsp;&nbsp;&nbsp;&nbsp;</i></span></li>
					</ul>
				</div> -->
				<?php wp_nav_menu(array('container_class' => 'nav-menu', 'theme_location' => 'primary', 'after' => '<span><i class="fa fa-1x fa-plus">&nbsp;&nbsp;&nbsp;&nbsp;</i></span>')); ?>
			</div>
		</nav>
		<div class="toggle_nav_close"></div>
	</div>
</div>