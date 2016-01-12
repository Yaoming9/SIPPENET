jQuery(document).ready(function($) {
	
	$('li').children('ul').removeClass('menu').addClass('submenu');
	$('li').removeClass('leaf').removeClass('expanded').removeClass('collapsed');
	
	$('.last').css('border','none');
	
	$('.submenu').hide();	
		
	$('.menu').children('li').hover(function () {
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
		$('#hamburger-menu').css('-webkit-transition', 'transform .5s');
		$('#hamburger-menu').css('transition', 'transform .5s');
		$('#hamburger-menu').css('-webkit-transform', 'rotate(90deg)');
		$('#hamburger-menu').css('-ms-transform', 'rotate(90deg)');
		$('#hamburger-menu').css('transform', 'rotate(90deg)');
		$(this).children('.submenu').stop(true, false).slideDown();
		},

		function () {
			$('#hamburger-menu').css('-webkit-transition', 'transform .5s');
			$('#hamburger-menu').css('transition', 'transform .5s');
			$('#hamburger-menu').css('-webkit-transform', 'rotate(0deg)');
			$('#hamburger-menu').css('-ms-transform', 'rotate(0deg)');
			$('#hamburger-menu').css('transform', 'rotate(0deg)');
			$(this).children('.submenu').stop(true, false).slideUp();
	});
});