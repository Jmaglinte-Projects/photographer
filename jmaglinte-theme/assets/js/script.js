
jQuery(document).ready(function ($) {

	// Global Variables

	var toggle_primary_button = $('.nav_toggle_button'),
		toggle_primary_icon = $('.nav_toggle_button i'),
		toggle_secondary_button = $('nav.page_nav li span'),
		toggle_secondary_icon = $('nav.page_nav li span i'),
		primary_menu = $('nav'),
		secondary_menu = $('nav ul ul'),
		webHeight = $(document).height(),
		window_width = $(window).width();

	// Company name and phone number on content area
	$("main * :not('h1')").each(function () {
		var regex1 = /(?![^<]+>)((\+\d{1,2}[\s.-])?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{6})/g;
		var regex2 = /(?![^<]+>)((\+\d{1,2}[\s.-])?\(?\d{3}\)?[\s.-]?\d{4}[\s.-]?\d{4})/g;
		var regex = /(?![^<]+>)((\+\d{1,2}[\s.-])?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4})/g;
		$(this).html(
			$(this).html()
				.replace(/Web2.ph/g, "<mark class='comp'>$&</mark>")
				.replace(/Web2/g, "<mark class='comp'>$&</mark>")
				.replace(regex1, "<mark class='main_phone'>$&</mark>").replace(regex2, "<mark class='main_phone'>$&</mark>").replace(regex, "<mark class='main_phone'>$&</mark>"));
	});

	$('.blog_wrapper h2').each(function () {
		$(this).html($(this).html().replace(/\(([^)]+)\)/, "<span>$&</span>"));
	});

	$("main a[href]").each(function () {
		var newHref = $(this).attr('href').replace("<mark class='comp'>", "").replace("</mark>", "");
		$(this).attr('href', newHref);
	});

	// Add class to tab having drop down
	$("nav.page_nav li:has(ul)").find('span i').addClass("fa-plus");
	// $( ".header_menu li:has(ul)").find('span i').addClass("fa-plus");

	// $('.header_menu').clone().appendTo('.serv');
	// $('.serv').find('span i').addClass("fa-plus");
	// $('.header_info').clone().appendTo('.header_info_holder');



	//Multi-line Tab

	toggle_secondary_button.click(function () {
		$(this).parent('li').siblings('li').children('ul').slideUp(400, function () {
			$(this).removeAttr('style');
		});

		$(this).parent('li').siblings('li').find('.fa').removeClass("fa-minus").addClass("fa-plus");

		$(this).parent('li').children('ul').slideToggle();
		$(this).children().toggleClass("fa-minus").toggleClass("fa-plus");
	});

	// $('.header_menu ul li span').click(function(){
	// 	$(this).parent('li').siblings('li').children('ul').slideUp(400, function() {
	// 		$(this).removeAttr('style');
	// 	});
	//
	// 	$(this).parent('li').siblings('li').find('.fa').removeClass("fa-minus").addClass("fa-plus");
	//
	// 	$(this).parent('li').children('ul').slideToggle();
	// 	$(this).children().toggleClass("fa-minus").toggleClass("fa-plus");
	// });
	//
	// $('.serv > span').click(function(){
	// 	$('.serv .header_menu').slideToggle();
	// });

	// function upd() {
	// 	var height1 = $('.header_nav').height();
	// 	var height2 = $('.toggle_right_nav').height();
	//
	// 	$('.bnr_form_container').css({'top': (height1+height2)});
	// }

	// Basic functionality for nav_toggle_button
	var hamburger = $(".hamburger");
	hamburger.click(function () {
		primary_menu.addClass('toggle_right_style');
		$('.toggle_right_nav').addClass('toggle_right_cont');
		$(".nav_toggle_button").toggleClass('active');
		$(".hamburger").toggleClass("is-active");
		$('.header_nav').removeClass('fixed');
		$('.dummyWrapper').removeClass('dummyHeight');
		$("body").toggleClass('active');
		// $('.body_move').toggleClass("body_move_left");
		// $('.header_menu ul.sub-menu').detach();
		// $('.header_dropdown_holder').hide();
		// upd();
	});

	$('.toggle_nav_close, .menu_slide_right .hamburger').click(function () {
		primary_menu.removeClass('toggle_right_style')
		$('.toggle_right_nav').removeClass('toggle_right_cont');
		$(".nav_toggle_button").removeClass('active');
		$(".hamburger").removeClass("is-active");
		$("body").removeClass('active');
		// $('.serv .header_menu, .nav-menu .header_menu ul ul').hide();
		// $('.serv span i, nav.page_nav ul li.menu-item-has-children > span i').removeClass("fa-minus").addClass("fa-plus");
		// $('.body_move').removeClass("body_move_left");
	});

	function myFunction() {
		if (window_width <= 800) {
			$('.main_logo').insertAfter('.logo_wrap');
			$('#nav_area').insertBefore('header');
			$('.head_info').insertAfter('.logo_wrap');
		} else {
			$('.main_logo').insertBefore('.head_info');
			$('#nav_area').insertAfter('header');
			$('.header_con').append($('.head_info'));
		}
	}

	myFunction(); //execute function when page load

	// Reset all configs when width > 760
	$(window).resize(function () {

		window_width = $(this).width();
		myFunction();

		if (window_width > 800) {
			$(".nav_toggle_button").removeClass('active');
			$(".hamburger").removeClass("is-active");
			secondary_menu.removeAttr('style');
			toggle_secondary_button.children().removeClass("fa-minus").addClass("fa-plus");
			$('.header_menu ul li span').children().removeClass("fa-minus").addClass("fa-plus");
			primary_menu.removeClass('toggle_right_style');
			$('.toggle_right_nav').removeClass('toggle_right_cont');

		}

		// $('.serv .header_menu, .nav-menu .header_menu ul ul').hide();
		// $('.serv span i, nav.page_nav ul li.menu-item-has-children > span i').removeClass("fa-minus").addClass("fa-plus");

		// secondary_menu.slideUp(400, function() {
		// 	$(this).removeAttr('style');
		// });
		// toggle_secondary_icon.removeClass("fa-minus").addClass("fa-plus");

	});

	$('.pagination-tabs ul li a').click(function () {
		var tab = $(this).attr('data-id');
		var tab1 = $(this).attr('data-id');

		$('.pagination-tabs ul li a').removeClass('current-tab');
		$(this).addClass('current-tab');



		$('.pagination-contents .pagecont').each(function () {
			if ($(this).attr('id') == tab) {
				$('.pagecont').removeClass('current');
				$(this).addClass('current');
			};
		});

		$('.pagination-tabs1 ul li a').each(function () {
			if ($(this).attr('id') == tab1) {
				$('.pagination-tabs1 ul li a').removeClass('current-tab1');
				$(this).addClass('current-tab1');
			};
		});
	});


	$('.pagination-tabs1 ul li a').click(function () {
		var tab = $(this).attr('data-id');
		var tab2 = $(this).attr('data-id');

		$('.pagination-tabs1 ul li a').removeClass('current-tab1');
		$(this).addClass('current-tab1');

		$('.pagination-contents .pagecont').each(function () {
			if ($(this).attr('id') == tab) {
				$('.pagecont').removeClass('current');
				$(this).addClass('current');
			};
		});

		$('.pagination-tabs ul li a').each(function () {
			if ($(this).attr('id') == tab2) {
				$('.pagination-tabs ul li a').removeClass('current-tab');
				$(this).addClass('current-tab');
			};
		});

	});

	$('.rslides').responsiveSlides({
		speed: 100,
		timeout: 3500
	});

	$('.back_top').click(function () { // back to top
		$("html, body").animate({
			scrollTop: 0
		}, 900);
		return false;
	});

	$(window).scroll(function () {  // fade in fade out button
		var windowScroll = $(this).scrollTop();

		if (windowScroll > (webHeight * 0.4) && window_width <= 600) {
			$(".back_top").fadeIn();
		} else {
			$(".back_top").fadeOut()
		};

		var headerHeight = $('.header_nav').height();

		if (windowScroll >= headerHeight) {
			$('.header_nav').addClass('fixed');
			$('.dummyWrapper').addClass('dummyHeight');

		} else {
			$('.header_nav').removeClass('fixed');
			$('.dummyWrapper').removeClass('dummyHeight');
		}

		// For (AddThis) Plugins
		if ($('body #at-share-dock').hasClass('at-share-dock')) {
			$('.back_top').addClass('withAddThis_plugins');
			$('.footer_btm').addClass('withAddThis_ftr_btm');
		} else {
			$('.back_top').removeClass('withAddThis_plugins');
			$('.footer_btm').removeClass('withAddThis_ftr_btm');
		}
		// End (AddThis) Plugins
	});


});