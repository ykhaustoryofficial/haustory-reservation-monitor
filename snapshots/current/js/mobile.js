$(function(){
	$(window).load(function(){
		const WT = $(window).scrollTop(),
			Wh = $(window).height(),
			Dh = $(document).height(),
			Fh = $(".footer").innerHeight();

		if (WT > Dh-Wh-Fh) {
			$(".m_fixed").removeClass('fixed');
		} else {
			$(".m_fixed").addClass('fixed');
		}
	 });
	
	$(window).load(function(){
		$('.m-menu-btn').click(function(){
			if ($('.m-menu-btn').hasClass("active")) {
				$('.m-menu-btn').removeClass('active');
				$('.side-menu').fadeOut();
			} else {
				$('.m-menu-btn').addClass('active');
				$('.side-menu').fadeIn();
			}
		});
	});

	$('.m_close_btn').click(function(){
		$('.m-menu-btn').removeClass('active');
		$('.side-menu').fadeOut();
	});

	$(".side-menu-in li").on("click", function() {
		if ($(this).hasClass("active")) {
		  $(this).removeClass("active");
		  $(this).next(".side-menu .sub-menu").slideUp(300);
		} else { $(".side-menu-in li").removeClass("active");
		//  $(".side-menu-in li").removeClass("active");
		  $(this).addClass("active");
		  $(".side-menu .sub-menu").slideUp(300);
		  $(this).next(".side-menu .sub-menu").slideDown(300);
		}
	 });

	 $(window).scroll(function(){
		const WT = $(window).scrollTop(),
			Wh = $(window).height(),
			Dh = $(document).height(),
			Fh = $(".footer").innerHeight();

		if (WT > Dh-Wh-Fh) {
			$(".m_fixed").removeClass('fixed');
		} else {
			$(".m_fixed").addClass('fixed');
		}
	});

	$('.route_menu li.rmenu').on('click', function(){
		if ($(this).hasClass('active') == true){
			$(this).removeClass('active');
			$(this).children('.rsub_menu').slideUp(400);
		} else {
			$(this).addClass('active');
			$(this).children('.rsub_menu').slideDown(400);
		}
	});
});