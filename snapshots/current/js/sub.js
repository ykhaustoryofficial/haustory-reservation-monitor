$(function(){
	 $(document).ready(function($) {
			const isTouchDevice = 'ontouchstart' in window || navigator.msMaxTouchPoints;

			if (!isTouchDevice) {
			 $('.route_menu li.rmenu').on('touchstart click', function(){
				//event.preventDefault();
				$(this).addClass('active');
				$(this).children('.rsub_menu').slideDown(400);
			});

			$('.route_menu li').mouseleave(function(){
				$(this).removeClass('active');
				$(this).children('.rsub_menu').slideUp(400);
			});
		}
	});

	$('.route_menu > li.rmenu .rsub_menu li a:empty').parent('li').remove();
	
	$('.right_wingbanner .top').on('click',() => {
		$('body, html').animate({ scrollTop: 0 }, 700); return false; 
	});

	//$('.header').addClass('w');
});