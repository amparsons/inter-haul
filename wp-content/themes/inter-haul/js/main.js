jQuery(document).ready(function($) {
	
	$( '.mainmenu li:has(ul)' ).doubleTapToGo();
	
	$( '.slideshow' ).cycle();
	
	$('.mainmenu li a').each(function() {
		$(this).prepend('<span></span>');
	});
	$('.holder li a').each(function() {
		$(this).prepend('<span></span>');
	});	
	
	// Mobile toggle menu
	$('.toggle').click(function () {
		if (!$("nav.mobile").is(":visible"))
			$('.toggle').addClass('active');
		$('nav.mobile').slideToggle('2000',"swing", function () {
			 if (!$("nav.mobile").is(":visible"))
			 $('.toggle').removeClass('active');
		});
	});	
	
});