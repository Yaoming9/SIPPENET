jQuery(document).ready(function($) {	
	$('li').children('ul').each(function(){
		$(this).hide();
		$(this).css('position','absolute');
		$(this).css('color','white');
		$(this).width($(this).parent().width());
		
		var pos = $(this).parent().position();
		$(this).css('left', pos.left + 10);
		$(this).css('top', pos.top+ 42);
		$(this).css('font-size', '14px');
	});	
	
	
	/*$('li').children('a').hover(function () {
		$(this).parent().children('ul').stop(true, false).slideDown();
		},

		function () {
			$(this).parent().children('ul').stop(true, false).slideUp();
	});*/
});