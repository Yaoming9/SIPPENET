jQuery(document).ready(function($) {
	$('.submenu').hide();	
	$('.menu-item').hover(function () {
		$(this).css('background-color', '#446CB3');
		$(this).css('cursor', 'pointer');
		$(this).children('a').css('color', 'white');
		$(this).children('.submenu').stop(true, false).slideDown();
		},

		function () {
			$(this).css('background-color', 'white');
			$(this).children('a').css('color', 'black');
			$(this).children('.submenu').stop(true, false).slideUp();
	});
	
	$('.menu-item-mobile').hover(function () {
		$(this).children('.submenu').stop(true, false).slideDown();
		},

		function () {
			$(this).children('.submenu').stop(true, false).slideUp();
	});
});