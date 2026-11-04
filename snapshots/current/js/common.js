$(function(){

	//load
	$(window).load(function(){
		$('body').css({
				'visibility':'visible', 'opacity':1
		});
	});




	//header menu
	$(document).ready(function($) {
		var hasHover = window.matchMedia && window.matchMedia('(hover: hover) and (pointer: fine)').matches;
		var isTouchDevice = (('ontouchstart' in window) || navigator.msMaxTouchPoints > 0 || navigator.maxTouchPoints > 0) && !hasHover;

		if (isTouchDevice) {

			/* --------------------------------------------------
			   터치기기 + PC헤더(스탠바이미) 대응
			-------------------------------------------------- */
			if ($('.header .nav').length && $('.drop_menu').length) {

				// 초기에는 드롭다운 숨김
				$('.drop_menu').hide();
				$('.drop_menu .drop > li').hide();

				// 대메뉴 탭: 링크 이동 막고 해당 서브메뉴만 노출
				$('.header .nav > li > a').on('click', function(e){
					var $link = $(this);
					var $parentLi = $link.parent('li');

					// 준비중 메뉴는 이동만 막음
					if ($link.hasClass('ready')) {
						e.preventDefault();
						return;
					}

					// 이미 열린 메뉴를 한 번 더 탭하면 해당 페이지로 이동
					if ($parentLi.hasClass('on')) {
						return;
					}

					e.preventDefault();
					e.stopPropagation();

					$('.header .nav li').removeClass('on');
					$parentLi.addClass('on');

					$('.header').addClass('w');   // 흰 배경 + 검은 글씨로 전환

					$('.drop_menu').stop(true, true).fadeIn(200);
					$('.drop_menu .drop > li').hide()
						.filter('[rel="' + $parentLi.attr('id') + '"]').show();
				});
				// 드롭다운 영역 자체 클릭은 닫히지 않게
				$('.drop_menu').on('click', function(e){
					e.stopPropagation();
				});

				// 소메뉴 a 클릭은 정상 이동
				$('.drop_menu a').on('click', function(e){
					e.stopPropagation();
				});

				// 헤더 바깥 클릭 시 닫기
				$(document).on('click', function(e){
					if ($(e.target).closest('.header').length === 0 &&
						$(e.target).closest('.drop_menu').length === 0) {
						$('.drop_menu').stop(true, true).fadeOut(200);
						$('.drop_menu .drop > li').hide();
						$('.header .nav li').removeClass('on');

						if ($(window).scrollTop() <= 0) {   // ← 추가
							$('.header').removeClass('w');
						}

						
					}
				});

			} else {

				/* --------------------------------------------------
				   기존 모바일 메뉴 로직 유지
				-------------------------------------------------- */
				$('.header .m_menu_btn').click(function(){

					if ($('.header .m_menu_btn').hasClass('active') == false){
						$(this).addClass('active');
						$('.aside, .bg_black').addClass('active');
						$('.header').stop(false, false).addClass('w').addClass('open');
						$("body, html, .bg_black, .aside").on('scroll touchmove mousewheel', function(event) {
							event.preventDefault();
							event.stopPropagation();
							return false;
						});

					} else {
						$(this).removeClass('active');
						$('.header').stop(false, false).removeClass('open');
						$('.aside, .bg_black').removeClass('active');
						$("body,html, .bg_black, .aside").off('scroll touchmove mousewheel');
					}
				});

				$('.bg_black').click(function(){
					$('.header .m_menu_btn').removeClass('active');
					$(this).removeClass('active');
					$('.aside').removeClass('open');
					$("body,html, .bg_black, .aside").off('scroll touchmove mousewheel');
				});

				// MOBILE MENU SUBMENU CONTROL
				$(".aside li").on("click", function() {
					if ($(this).hasClass("active")) {
						$(this).removeClass("active");
						$(this).next(".aside .sub_menu").slideUp(300);
					} else {
						$(".aside li").removeClass("active");
						$(this).addClass("active");
						$(".aside .sub_menu").slideUp(300);
						$(this).next(".aside .sub_menu").slideDown(300);
					}
				});
			}

		} else {

			/* --------------------------------------------------
			   기존 PC 로직 유지
			-------------------------------------------------- */
			$('.header').on('mouseenter', function(){
				$(".drop_menu").stop().fadeIn(300);
				$(this).addClass('w');
			});

			$('.header').on('mouseleave', function(){
				$(".drop_menu").stop().fadeOut(300);

				if ($(window).scrollTop() > 0) {
					$(this).addClass('w');
				} else {
					$(this).removeClass('w');
				}
			});

			$(".header .nav li").mouseover(function(){
				$('.header .nav li').removeClass('on');
				$(this).addClass('on');
			});

			$(".header .drop_menu .drop > li").mouseover(function () {
				$(".header .nav li").removeClass("on");
				$(this).addClass("on");
				var activemenu = $(this).attr("rel");
				$("#" + activemenu).addClass('on');
			});

			$(".header").mouseleave(function(){
				$(".header .nav li").removeClass("on");
			});

			$(function () {
				function openSideMenu() {
					$('#sideMenuPanel').addClass('open');
					$('#sideMenuDim').addClass('open');
					$('body').addClass('menu-open');
				}

				function closeSideMenu() {
					$('#sideMenuPanel').removeClass('open');
					$('#sideMenuDim').removeClass('open');
					$('body').removeClass('menu-open');
					$('.side-menu-nav').removeClass('is-hovering');
					$('.side-menu-nav .menu-item').removeClass('hovered');
				}

				$('#menuOpenBtn').on('click', function (e) {
					e.preventDefault();
					e.stopPropagation();
					openSideMenu();
				});

				$('#menuCloseBtn').on('click', function (e) {
					e.preventDefault();
					e.stopPropagation();
					closeSideMenu();
				});

				$('#sideMenuDim').on('click', function (e) {
					e.preventDefault();
					closeSideMenu();
				});

				$('#sideMenuPanel').on('click', function (e) {
					e.stopPropagation();
				});

				$('.side-menu-nav .menu-item').on('mouseenter', function () {
					$('.side-menu-nav').addClass('is-hovering');
					$('.side-menu-nav .menu-item').removeClass('hovered');
					$(this).addClass('hovered');
				});

				$('.side-menu-nav').on('mouseleave', function () {
					$('.side-menu-nav').removeClass('is-hovering');
					$('.side-menu-nav .menu-item').removeClass('hovered');
				});
			});

		}
	});

	//backtop
	$(window).scroll(function(){
		var WT = $(window).scrollTop(),
			Wh = $(window).height(),
			Dh = $(document).height(),
			Fh = $(".footer").innerHeight();

		// header scroll 클래스
		if (WT > 0) {
			$('.header').addClass('ww');
		} else {
			$('.header').removeClass('ww');
		}

		// back-top 위치 제어
		if (WT > Dh-Wh-Fh) {
			$(".back-top span").removeClass('fixed');
		} else {
			$(".back-top span").addClass('fixed');
		}

		// back-top 노출
		if (WT > 100) {
			$('.back-top span').addClass("show");
		} else {
			$('.back-top span').removeClass("show");
		}
	});

	$('.back-top').click(function(){
			$('body, html').animate({ scrollTop: 0 }, 700); return false; 
	});


});