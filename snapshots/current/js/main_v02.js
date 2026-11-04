$(function () {


	const ua = navigator.userAgent;

	const isIpadSafari =
		(
			/iPad/i.test(ua) ||
			(/Macintosh/i.test(ua) && navigator.maxTouchPoints > 1)
		) &&
		/Safari/i.test(ua) &&
		!/NAVER|CriOS|FxiOS|Whale|SamsungBrowser|KAKAOTALK/i.test(ua);

	if (isIpadSafari) {
		document.body.classList.add('ipad-safari-pc');
	}




	function isMobileMain() {

		const ua = navigator.userAgent;

		const isTabletNaver =
			/NAVER/i.test(ua) &&
			(/SM-T/i.test(ua) || /SM-X/i.test(ua) || /Galaxy Tab/i.test(ua));

		if (isTabletNaver) {
			return false;
		}

		return window.matchMedia('(max-width: 768px)').matches;
	}




	let introDone = false;


	let mobileIntroScrollReady = false;

	function lockMobileIntroScroll() {
		if (!isMobileMain()) return;

		document.documentElement.classList.add('m-intro-scroll-lock');
		document.body.classList.add('m-intro-scroll-lock');

		window.addEventListener('wheel', preventMobileIntroScroll, { passive: false });
		window.addEventListener('touchmove', preventMobileIntroScroll, { passive: false });
	}

	function unlockMobileIntroScroll() {
		if (!isMobileMain()) return;

		mobileIntroScrollReady = true;

		document.documentElement.classList.remove('m-intro-scroll-lock');
		document.body.classList.remove('m-intro-scroll-lock');

		window.removeEventListener('wheel', preventMobileIntroScroll);
		window.removeEventListener('touchmove', preventMobileIntroScroll);
	}

	function preventMobileIntroScroll(e) {
		if (!isMobileMain()) return;
		if (mobileIntroScrollReady) return;

		e.preventDefault();
		e.stopPropagation();
	}


	function lockFullpageScroll() {
		if (window.fullpage_api) {
			fullpage_api.setAllowScrolling(false);
			fullpage_api.setKeyboardScrolling(false);
		}
	}

	function unlockFullpageScroll() {
		introDone = true;

		if (window.fullpage_api) {
			fullpage_api.setAllowScrolling(true);
			fullpage_api.setKeyboardScrolling(true);
		}
	}

	lockMobileIntroScroll();


	const header = document.querySelector(".header");
	const mainVideo = document.getElementById("mainVideo");
	const introVideo = document.getElementById("introVideo");




	if (header) {
		header.classList.remove("is-show");
	}

	if (mainVideo) {
		mainVideo.muted = true;
		mainVideo.setAttribute('muted', '');
		mainVideo.setAttribute('playsinline', '');
		mainVideo.setAttribute('webkit-playsinline', '');
		mainVideo.preload = 'auto';
		mainVideo.playbackRate = 0.85;

		mainVideo.load();

		mainVideo.play().then(function () {
			mainVideo.pause();
			mainVideo.currentTime = 0;
		}).catch(function () {
			mainVideo.load();
		});
	}

	if (introVideo) {
		introVideo.pause();
		introVideo.currentTime = 0;
		introVideo.load();
	}

	function playIntroVideoWhenReady() {
		if (!introVideo) return;

		function startIntroVideo() {
			introVideo.classList.add('is-ready');
			introVideo.currentTime = 0;

			introVideo.play().catch(function (err) {
				console.log("introVideo play error:", err);
			});
		}

		if (introVideo.readyState >= 3) {
			startIntroVideo();
		} else {
			introVideo.addEventListener('canplay', startIntroVideo, { once: true });
			introVideo.load();
		}
	}

	setTimeout(function () {
		playIntroVideoWhenReady();
	}, 1350);

	let introMainTimer = null;

	function startMainSectionAfterIntro(isSkip) {
		clearTimeout(introMainTimer);

		if (introDone) return;

		const $mainSection = $('.main_intro_section');

		if (isSkip) {
			$mainSection.addClass('is-intro-skipped');
		}

		if (introVideo) {
			introVideo.pause();
		}

		if (header) {
			header.classList.add("is-show");

			if (isMobileMain()) {
				header.classList.remove("ww");
				header.style.backgroundColor = "transparent";
			}
		}

		$('.m_fixed_wrap').addClass('show');

		if (mainVideo) {
			mainVideo.pause();
			mainVideo.currentTime = 0;

			mainVideo.play().catch(function (err) {
				console.log("mainVideo play error:", err);
			});
		}

		/* 글자 모션 처음부터 다시 시작 */
		$mainSection.removeClass('is-main-text-play');
		$mainSection[0].offsetHeight;
		$mainSection.addClass('is-main-text-play');

		unlockFullpageScroll();
		unlockMobileIntroScroll();

		window.dispatchEvent(new Event('introFinished'));

	}

	introMainTimer = setTimeout(function () {
		startMainSectionAfterIntro(false);
	}, 7200);

	$(document).on('click', '.intro-wrapper', function (e) {
		if ($(e.target).closest('a, button').length) return;

		startMainSectionAfterIntro(true);
	});

	$(document).on('click', '.intro-skip-mobile', function (e) {
		e.preventDefault();
		e.stopPropagation();

		startMainSectionAfterIntro(true);
	});

	$(window).on('mousemove', function(e) {
		$('.intro-skip-cursor').css({
			left: e.clientX + 'px',
			top: e.clientY + 'px'
		});
	});


	(function () {
		const $section = $('#section_map');
		const $wrap = $('.haus-location');

		if (!$section.length || !$wrap.length) return;

		const premiumData = [
			{
				num: '01',
				title: '직주근접 <strong>교통망</strong>',
				desc: '1호선 역곡역 · 7호선 까치울역과 경인고속도로 등<br>서울 주요 업무지구로 출퇴근이 편리한 광역 교통망'
			},
			{
				num: '02',
				title: '편리한 <strong>생활인프라</strong>',
				desc: '단지 앞 근린생활시설(예정)부터 홈플러스,<br>부천성모병원, CGV, 도서관 등 가까운 생활편의시설'
			},
			{
				num: '03',
				title: '분양가 상한제 <strong>혜택단지</strong>',
				desc: '시세 대비 합리적인 가격대 형성으로<br>부담없이 시작하는 분양가 상한제 적용 단지'
			},
			{
				num: '04',
				title: '한걸음 <strong>안심학세권</strong>',
				desc: '안전한 유·초교(예정) 통학과<br>도보권 역곡초·중·고로 우수한 교육 환경'
			},
			{
				num: '05',
				title: '다채로운 <strong>커뮤니티</strong>',
				desc: '다목적체육관, 게스트하우스, 작은도서관,<br>피트니스센터, 골프연습장 등 다양한 커뮤니티 라이프'
			},
			{
				num: '06',
				title: '고품격 <strong>스카이라운지</strong>',
				desc: '희소가치가 높은 단지 내 스카이라운지 설계로<br>살아갈수록 높아지는 품격과 자부심'
			}
		];

		let step = 0;
		let premiumIndex = 0;
		let lock = false;
		const maxStep = 2;
		const premiumMax = premiumData.length - 1;

		function isMapActive() {
			return $('#section_map').hasClass('active') || $('#section_map').hasClass('fp-completely');
		}

		function lockMove(time) {
			lock = true;

			clearTimeout(window.hausWheelLockTimer);

			window.hausWheelLockTimer = setTimeout(function () {
				lock = false;
			}, time || 1850);
		}

		function showPremiumText(index) {
			const item = premiumData[index];
			const $copy = $('.premium-copy');

			$copy.removeClass('is-show');

			setTimeout(function () {
				$copy.find('.premium-num').text(item.num);
				$copy.find('h3').html(item.title);
				$copy.find('p').html(item.desc);

				$copy[0].offsetHeight;

				$copy.addClass('is-show');
			}, 520);
		}

		function showPremiumImage(index, dir) {
			const $imgs = $('.premium-img');
			const $current = $imgs.filter('.active');
			const $next = $imgs.eq(index);

			if (!$next.length || $next.hasClass('active')) return;

			const leaveClass = dir === 'up' ? 'to-right' : 'to-left';

			$imgs.removeClass('is-under is-zoom-in is-leaving to-left to-right prev');

			$next
				.addClass('is-under')
				.css({
					transition: 'none',
					transform: 'scale(1.1)',
					opacity: 1,
					clipPath: 'inset(0 0 0 0)',
					filter: 'blur(0)'
				});

			$next[0].offsetHeight;

			$next.css({
				transition: '',
				transform: '',
				opacity: '',
				clipPath: '',
				filter: ''
			}).addClass('is-zoom-in');

			$current.addClass('is-leaving ' + leaveClass);

			setTimeout(function () {
				$current.removeClass('active is-leaving to-left to-right');
				$next.removeClass('is-under is-zoom-in').addClass('active');
			}, 850);
		}





		window.setTitleAlign = function (currentStep, instant) {
			const title = document.querySelector('.haus-fixed-title');
			if (!title) return;

			/* 모바일에서는 PC용 줄 정렬 계산 금지 */
			if (isMobileMain()) {
				title.querySelectorAll('.title-line-wrap').forEach(function (line) {
					line.style.transition = '';
					line.style.removeProperty('--align-x');
					line.style.transform = '';
				});
				return;
			}

			const titleWidth = title.offsetWidth;
			const lines = title.querySelectorAll('.title-line-wrap');

			lines.forEach(function (line) {
				const lineWidth = line.scrollWidth;
				let x = 0;

				if (currentStep === 0) {
					x = titleWidth - lineWidth;
				} else if (currentStep === 1) {
					x = (titleWidth - lineWidth) / 2;
				} else {
					x = 0;
				}

				if (instant) {
					line.style.transition = 'none';
					line.style.setProperty('--align-x', x + 'px');
					line.offsetHeight;
					line.style.transition = '';
				} else {
					line.style.setProperty('--align-x', x + 'px');
				}
			});
		};





		window.updateMapHeaderState = function (step) {


			if (isMobileMain()) {
				const section = window.fullpage_api ? fullpage_api.getActiveSection().index : 0;

				if (section === 0) {
					// 섹션1 (인트로 + 메인)
					$('.header')
						.removeClass('ww')
						.addClass('is-show')
						.css('background-color', 'transparent');
				} else {
					// 섹션2~4
					$('.header')
						.removeClass('ww')
						.addClass('is-show')
						.css('background-color', '#003577');
				}

				return;
			}


			const $header = $('.header');
			const $topBtn = $('.top-btn');

			if (step === 2) {
				$header.addClass('is-show ww');
				$header.css('background-color', '#fff');
				$topBtn.addClass('is-show is-premium'); // ← 변경
				return;
			}

			if (step === 0) {
				$header.addClass('ww is-show').css('background-color', '');
				$topBtn.removeClass('is-premium').addClass('is-show');
			} else {
				$header.removeClass('ww').addClass('is-show').css('background-color', '');
				$topBtn.removeClass('is-premium').addClass('is-show');
			}

		};
		function setStep(nextStep) {
			const $title = $('.haus-fixed-title');

			$title.removeClass('is-align-center');
			$wrap.removeClass('is-rail-visible');
			step = nextStep;
			$('.haus-fixed-title > .title-desc').css({
				transition: 'transform 1.65s cubic-bezier(0.77, 0, 0.175, 1), color 1.65s cubic-bezier(0.77, 0, 0.175, 1)'
			});
			$wrap.attr('data-step', step);

			window.setTitleAlign(step, false);


			window.updateMapHeaderState(step);

			if (step === 1) {
				setTimeout(function () {
					if (step === 1) {
						$wrap.addClass('is-rail-visible');
					}
				}, 950);
			}

			if (step === 2) {
				$('.premium-copy').removeClass('is-show');

				setTimeout(function () {
					if (step !== 2) return;

					showPremiumText(premiumIndex);

					const $imgs = $('.premium-img');
					$imgs.removeClass('active prev is-under is-zoom-in is-leaving to-left to-right');
					$imgs.eq(premiumIndex)
						.addClass('is-under')
						.css({
							transition: 'none',
							transform: 'scale(1.1)',
							opacity: 1,
							clipPath: 'inset(0 0 0 0)',
							filter: 'blur(0)'
						});

					$imgs.eq(premiumIndex)[0].offsetHeight;

					$imgs.eq(premiumIndex)
						.css({
							transition: '',
							transform: '',
							opacity: '',
							clipPath: '',
							filter: ''
						})
						.addClass('is-zoom-in active');

					setTimeout(function () {
						$imgs.eq(premiumIndex).removeClass('is-under is-zoom-in');
					}, 850);
				}, 420);



			}



		}

		function goDown() {
			if (step < maxStep) {
				setStep(step + 1);
				lockMove(1900);
				return;
			}

			// 프리미엄 슬라이드 이동
			if (step === 2 && premiumIndex < premiumMax) {
				premiumIndex++;
				showPremiumImage(premiumIndex, 'down');
				showPremiumText(premiumIndex);
				lockMove(1700);
				return;
			}

			// 마지막 슬라이드일 때
			if (step === 2 && premiumIndex === premiumMax) {
				// 한 번 더 스크롤해야 넘어가게
				lockMove(500);
				fullpage_api.setAllowScrolling(true);
				fullpage_api.moveSectionDown();
				return;
			}
		}

		function goUp() {
			if (step === 2 && premiumIndex > 0) {
				premiumIndex--;
				showPremiumImage(premiumIndex, 'up');
				showPremiumText(premiumIndex);
				lockMove(1700);
				return;
			}

			if (step > 0) {
				setStep(step - 1);
				lockMove(1900);
				return;
			}

			fullpage_api.setAllowScrolling(true);
			fullpage_api.moveSectionUp();
		}

		let lastHausWheelTime = 0;
		let hausWheelAccum = 0;

		$section.off('wheel.hausMap').on('wheel.hausMap', function (e) {
			if (!isMapActive()) return;

			e.preventDefault();
			e.stopPropagation();

			const oe = e.originalEvent;
			const delta = oe.deltaY || 0;
			const now = Date.now();

			if (lock) return;

			if (now - lastHausWheelTime < 1900) {
				return;
			}

			hausWheelAccum += delta;

			if (Math.abs(hausWheelAccum) < 160) {
				return;
			}

			lastHausWheelTime = now;

			if (hausWheelAccum > 0) {
				goDown();
			} else {
				goUp();
			}

			hausWheelAccum = 0;

			lock = true;
			clearTimeout(window.hausWheelLockTimer);
			window.hausWheelLockTimer = setTimeout(function () {
				lock = false;
			}, 1800);
		});


		let touchStartY = 0;

		$section.on('touchstart', function (e) {
			if (!isMapActive()) return;
			touchStartY = e.originalEvent.touches[0].clientY;
		});

		$section.on('touchmove', function (e) {
			if (!isMapActive()) return;

			e.preventDefault();

			if (lock) return;

			const touchY = e.originalEvent.touches[0].clientY;
			const diff = touchStartY - touchY;

			if (Math.abs(diff) < 45) return;

			if (diff > 0) {
				goDown();
			} else {
				goUp();
			}

			touchStartY = touchY;
		});


		let mobilePremiumTimer = null;

		function mobilePremiumNext() {
			if (!isMobileMain()) return;
			if (step !== 2) return;

			premiumIndex = (premiumIndex + 1) % premiumData.length;
			showPremiumImage(premiumIndex, 'down');
			showPremiumText(premiumIndex);
		}

		function mobilePremiumPrev() {
			if (!isMobileMain()) return;
			if (step !== 2) return;

			premiumIndex = (premiumIndex - 1 + premiumData.length) % premiumData.length;
			showPremiumImage(premiumIndex, 'up');
			showPremiumText(premiumIndex);
		}





		$(document).on('click', '.m-premium-arrow.next', function () {
			mobilePremiumNext();
		});

		$(document).on('click', '.m-premium-arrow.prev', function () {
			mobilePremiumPrev();
		});



		window.resetHausLocation = function () {
			step = 0;
			premiumIndex = 0;
			lock = false;

			$wrap.removeClass('is-enter is-rail-visible');
			$wrap.attr('data-step', 0);

			$('.premium-img')
				.removeClass('active prev is-under is-zoom-in is-leaving to-left to-right')
				.eq(0)
				.addClass('active');

			$('.premium-copy').removeClass('is-show');

			if (window.setTitleAlign) {
				window.setTitleAlign(0, true);
			}
		};



		window.prepareHausLocationFirst = function () {
			step = 0;
			premiumIndex = 0;
			lock = true;

			$wrap.removeClass('is-enter is-rail-visible');

			$('.haus-horizontal').css('transition', 'none');
			$('.haus-fixed-title').css('transition', 'none');
			$('.haus-map-bg').css('transition', 'none');
			$('.haus-map-circle').css('transition', 'none');
			$('.haus-bg-word.location').css('transition', 'none');

			$wrap.attr('data-step', 0);

			$('.premium-img')
				.removeClass('active prev is-under is-zoom-in is-leaving to-left to-right')
				.eq(0)
				.addClass('active');

			$('.premium-copy').removeClass('is-show');

			if (window.setTitleAlign) {
				window.setTitleAlign(0, true);
			}

			$wrap[0].offsetHeight;

			setTimeout(function () {
				$('.haus-horizontal').css('transition', '');
				$('.haus-fixed-title').css('transition', '');
				$('.haus-map-bg').css('transition', '');
				$('.haus-map-circle').css('transition', '');
				$('.haus-bg-word.location').css('transition', '');
			}, 50);
		};





		window.enterHausLocationFromDown = function () {
			if (window.prepareHausLocationFirst) {
				window.prepareHausLocationFirst();
			}

			$wrap[0].offsetHeight;

			setTimeout(function () {
				$wrap.addClass('is-enter');

				setTimeout(function () {
					lock = false;

					fullpage_api.setAllowScrolling(false);
					fullpage_api.setKeyboardScrolling(false);
				}, 1200);
			}, 80);
		};



	})();













	$(function () {
		let mainFullpage = null;

		let section1ReplayTimers = [];

		function clearSection1ReplayTimers() {
			section1ReplayTimers.forEach(function (timer) {
				clearTimeout(timer);
			});
			section1ReplayTimers = [];
		}

		function prepareSection1Replay() {
			const section = document.querySelector('.main_intro_section');
			const mainVideo = document.getElementById('mainVideo');

			if (!section) return;

			clearSection1ReplayTimers();

			section.classList.remove(
				'is-ready-replay',
				'is-main-text-play',
				'is-p1',
				'is-p2',
				'is-p3',
				'is-move',
				'is-right'
			);

			if (mainVideo) {
				mainVideo.pause();
				mainVideo.currentTime = 0;
			}
		}

		function playSection1Replay() {
			clearSection1ReplayTimers();

			const section = document.querySelector('.main_intro_section');
			const mainVideo = document.getElementById('mainVideo');

			if (!section) return;

			section.classList.remove(
				'is-ready-replay',
				'is-main-text-play',
				'is-p1',
				'is-p2',
				'is-p3',
				'is-move',
				'is-right'
			);

			section.offsetHeight;

			if (mainVideo) {
				mainVideo.pause();
				mainVideo.currentTime = 0;
				mainVideo.play().catch(function (err) {
					console.log('mainVideo replay error:', err);
				});
			}

			section.classList.add('is-main-text-play');
		}


		function lockFullpageScroll() {
			if (window.fullpage_api) {
				fullpage_api.setAllowScrolling(false);
				fullpage_api.setKeyboardScrolling(false);
			}
		}

		function unlockFullpageScroll() {
			if (window.fullpage_api) {
				fullpage_api.setAllowScrolling(true);
				fullpage_api.setKeyboardScrolling(true);
			}
		}











		(function () {
			const $section = $('#section_story');
			const $story = $('.story-section');

			if (!$section.length || !$story.length) return;

			let storyStep = 0;
			const maxStoryStep = 7;
			let storyLock = false;
			let storyWheelBlockUntil = 0;


			function isStoryActive() {
				return $('#section_story').hasClass('active') || $('#section_story').hasClass('fp-completely');
			}

			function lockStory(time) {
				storyLock = true;
				setTimeout(function () {
					storyLock = false;
				}, time || 1200);
			}

			let storyAutoTimer = null;

			function setStoryStep(nextStep, autoText) {
				clearTimeout(storyAutoTimer);

				storyStep = nextStep;
				$story.attr('data-story-step', storyStep);

				updateStoryHeaderState(storyStep);

				if (nextStep === 3 && autoText === true) {
					lockStory(2400);

					storyAutoTimer = setTimeout(function () {
						if (storyStep !== 3) return;

						storyStep = 4;
						$story.attr('data-story-step', 4);
					}, 1500);

					return;
				}


				if (nextStep === 6 && autoText === true) {
					lockStory(2400);

					storyAutoTimer = setTimeout(function () {
						if (storyStep !== 6) return;

						storyStep = 7;
						$story.attr('data-story-step', 7);
					}, 250);

					return;
				}



				lockStory(1450);
			}

			window.resetStorySection = function () {
				storyStep = 0;
				storyLock = false;

				$story
					.removeClass('is-enter')
					.attr('data-story-step', 0);
			};

			window.enterStorySection = function (fromContact) {
				clearTimeout(storyAutoTimer);
				storyWheelBlockUntil = Date.now() + 2200;
				storyStep = 0;
				storyLock = true;

				$story
					.removeClass('is-enter')
					.attr('data-story-step', 0);

				$story[0].offsetHeight;

				$story.addClass('is-enter');

				setTimeout(function () {
					storyLock = false;
				}, fromContact ? 1700 : 1200);
			};
			window.prepareStorySectionFirst = function () {
				window.storyPreparedBeforeEnter = true;
				storyWheelBlockUntil = Date.now() + 2200;
				clearTimeout(storyAutoTimer);

				storyStep = 0;
				storyLock = true;

				$story.find('.story-pink-mask, .story-life-reveal, .story-nature-bg, .story-intro-text .line span, .story-text, .story-text h3, .story-text p')
					.css('transition', 'none');

				$story
					.removeClass('is-enter')
					.attr('data-story-step', 0);

				$story[0].offsetHeight;

				setTimeout(function () {
					$story.find('.story-pink-mask, .story-life-reveal, .story-nature-bg, .story-intro-text .line span, .story-text, .story-text h3, .story-text p')
						.css('transition', '');

					setTimeout(function () {
						$story.addClass('is-enter');
					}, 80);

					setTimeout(function () {
						storyLock = false;
					}, 1200);
				}, 50);
			};

			function storyDown() {
				if (isMobileMain() && storyStep === 0) {
					setStoryStep(4, false);
					lockStory(2600);
					return;
				}

				if (storyStep < maxStoryStep) {
					setStoryStep(storyStep + 1, true);
					return;
				}

				fullpage_api.setAllowScrolling(true);
				fullpage_api.setKeyboardScrolling(true);
				fullpage_api.moveSectionDown();
			}

			function storyUp() {
				if (storyStep > 0) {
					clearTimeout(storyAutoTimer);

					setStoryStep(0, false);
					return;
				}

				window.isStoryToMap = true;
				window.blockMapToIntroUntil = Date.now() + 1800;

				if (window.prepareHausLocationFirst) {
					window.prepareHausLocationFirst();
				}

				fullpage_api.setAllowScrolling(false);
				fullpage_api.setKeyboardScrolling(false);
				fullpage_api.moveSectionUp();
			}

			$section.on('wheel DOMMouseScroll mousewheel', function (e) {
				if (!isStoryActive()) return;

				e.preventDefault();
				e.stopPropagation();

				if (storyLock || Date.now() < storyWheelBlockUntil) return;

				const oe = e.originalEvent;
				const delta = oe.deltaY || -oe.wheelDelta || oe.detail;

				if (delta > 0) {
					storyDown();
				} else if (delta < 0) {
					storyUp();
				}
			});

			let touchStartY = 0;

			$section.on('touchstart', function (e) {
				if (!isStoryActive()) return;
				touchStartY = e.originalEvent.touches[0].clientY;
			});

			$section.on('touchmove', function (e) {
				if (!isStoryActive()) return;

				e.preventDefault();

				if (storyLock || Date.now() < storyWheelBlockUntil) return;

				const touchY = e.originalEvent.touches[0].clientY;
				const diff = touchStartY - touchY;

				if (Math.abs(diff) < 45) return;

				if (diff > 0) {
					storyDown();
				} else {
					storyUp();
				}

				touchStartY = touchY;
			});
		})();









		function updateStoryHeaderState(step) {
			const $header = $('.header');

			/* 인트로/핑크배경만 ww */
			if (step <= 2) {
				$header.addClass('ww');
			} else {
				$header.removeClass('ww');
			}

			/* 배경색 강제 제거 */
			$header.css('background-color', '');

			if (isMobileMain()) {
				$header.addClass('is-show');
			}
		}



		$('.top-btn').on('click', function () {
			if (window.fullpage_api) {
				fullpage_api.moveTo(1);
			}
		});







		if ($('#fullpage').length) {
			mainFullpage = new fullpage('#fullpage', {
				licenseKey: "71CA45A0-62C04DD0-9D84A874-AEE9817C",
				autoScrolling: true,
				fitToSection: true,
				scrollingSpeed: 900,
				navigation: false,
				scrollOverflow: false,
				normalScrollElements: '.footer, footer',

				afterRender: function () {
					if (!introDone) {
						lockFullpageScroll();
					}
				},

				afterLoad: function(origin, destination, direction) {

					if (isMobileMain()) {
						if (destination.index === 0) {
							if (introDone) {
								$('.header')
									.removeClass('ww')
									.addClass('is-show')
									.css('background-color', 'transparent');
							} else {
								$('.header')
									.removeClass('is-show ww')
									.css('background-color', 'transparent');
							}
						} else {
							$('.header')
								.removeClass('ww')
								.addClass('is-show')
								.css('background-color', '#003577');
						}
					}






					if (destination.index === 0) {
						$('.top-btn').removeClass('is-show');

						if (!isMobileMain()) {
							if (introDone) {
								$('.header')
									.removeClass('ww')
									.addClass('is-show')
									.css('background-color', '');
							} else {
								$('.header')
									.removeClass('is-show ww')
									.css('background-color', '');
							}
						}
					} else {
						$('.top-btn').addClass('is-show');
					}



					if (!introDone) {
						lockFullpageScroll();
						return;
					}

					if (destination.item && destination.item.id === 'section_map') {
						window.updateMapHeaderState(0);

						const $wrap = $('.haus-location');

						if (window.isStoryToMap) {
							window.isStoryToMap = false;

							if (window.enterHausLocationFromDown) {
								window.enterHausLocationFromDown();
							}
						} else {
							if (window.resetHausLocation) {
								window.resetHausLocation();
							}

							$wrap[0].offsetHeight;

							window.setTitleAlign(0, true);

							$wrap[0].offsetHeight;

							$wrap.addClass('is-enter');
						}

						fullpage_api.setAllowScrolling(false);
						fullpage_api.setKeyboardScrolling(false);
					}
					else if (destination.item && destination.item.id === 'section_story') {
						if (!window.storyPreparedBeforeEnter && window.enterStorySection) {
							window.enterStorySection(false);
						}

						window.storyPreparedBeforeEnter = false;

						updateStoryHeaderState(0);

						fullpage_api.setAllowScrolling(false);
						fullpage_api.setKeyboardScrolling(false);
					}
					else if (destination.item && destination.item.id === 'section_contact') {

						if (!isMobileMain()) {
							$('.header')
								.addClass('ww')
								.css('background-color', '');
						}

						const contactSection = document.querySelector('#section_contact');
						const contact = document.querySelector('.contact-section');

						if (contactSection) {
							contactSection.style.height = '100vh';
							contactSection.style.minHeight = '100vh';
						}

						if (contact) {
							contact.style.height = '100vh';
							contact.style.minHeight = '100vh';

							contact.classList.remove('is-enter');
							contact.offsetHeight;
							contact.classList.add('is-enter');
						}

						if (window.fullpage_api) {
							fullpage_api.reBuild();
						}

						fullpage_api.setAllowScrolling(false);
						fullpage_api.setKeyboardScrolling(false);

						setTimeout(function () {
							fullpage_api.setAllowScrolling(true);
							fullpage_api.setKeyboardScrolling(true);
						}, 2200);
					}
					else {
						if (
							destination.item &&
							destination.item.classList.contains('footer')
						) {

							if (!isMobileMain()) {
								$('.header')
									.addClass('ww')
									.css('background-color', '#fff');
							}

						} else if (
							destination.item &&
							destination.item.id === 'section_contact'
						) {
							$('.header')
								.addClass('ww')
								.css('background-color', '');

						} else {
							$('.header')
								.removeClass('ww')
								.css('background-color', '');
						}

						fullpage_api.setAllowScrolling(true);
						fullpage_api.setKeyboardScrolling(true);
					}

					if (
						destination.index === 0 &&
						origin &&
						origin.index !== 0
					) {
						playSection1Replay();
					}

					if (
						destination.item &&
						(destination.item.id === 'section_contact' || destination.item.classList.contains('footer'))
					) {

					} else {

					}

				},

				onLeave: function(origin, destination, direction) {

					if (
						origin.item &&
						origin.item.id === 'section_map' &&
						destination.index === 0 &&
						window.blockMapToIntroUntil &&
						Date.now() < window.blockMapToIntroUntil
					) {
						fullpage_api.setAllowScrolling(false);
						fullpage_api.setKeyboardScrolling(false);
						return false;
					}



					if (origin.index === 0) {
						prepareSection1Replay();
					}
					if (origin.item && origin.item.id === 'section_map') {


						if (
							origin.item &&
							origin.item.id === 'section_map' &&
							destination.item &&
							destination.item.id === 'section_story'
						) {
							if (window.prepareStorySectionFirst) {
								window.prepareStorySectionFirst();
							}
						}


						const $wrap = $('.haus-location');

						/* 완전 초기화 */
						if (window.resetHausLocation) {
							window.resetHausLocation();
						}

						$('.premium-img').removeClass('active prev').eq(0).addClass('active');
						$('.premium-copy').removeClass('is-show');

						if (!(destination.item && destination.item.id === 'section_story')) {
							fullpage_api.setAllowScrolling(true);
							fullpage_api.setKeyboardScrolling(true);
						}
					}

					if (origin.item && origin.item.id === 'section_story') {
						if (window.resetStorySection) {
							window.resetStorySection();
						}

						if (!window.isStoryToMap) {
							fullpage_api.setAllowScrolling(true);
							fullpage_api.setKeyboardScrolling(true);
						}
					}

					if (origin.item && origin.item.id === 'section_contact') {
						const contact = document.querySelector('.contact-section');

						// 컨택트 → 스토리로 올라갈 때,
						// 프리미엄에서 스토리로 내려온 것처럼 스토리 첫 화면부터 시작
						if (direction === 'up') {
							if (window.prepareStorySectionFirst) {
								window.prepareStorySectionFirst();
							}

							if (contact) {
								contact.classList.remove('is-enter');
							}
							return;
						}

						// 컨택트 → 푸터로 내려갈 때는 내용 유지
						if (direction === 'down') {
							return;
						}
					}

				}
			});
		}
	});


});


(function () {
	const ua = navigator.userAgent;

	const isTabletNaver =
		/NAVER/i.test(ua) &&
		(/SM-T/i.test(ua) || /SM-X/i.test(ua) || /Galaxy Tab/i.test(ua));

	const mq = {
		matches: !isTabletNaver && window.matchMedia('(max-width: 768px)').matches
	};



	function getMobileHeight() {
		return window.visualViewport ? window.visualViewport.height : window.innerHeight;
	}

	function setStableMobileHeight() {
		if (!mq.matches) return;

		document.documentElement.style.setProperty('--app-height', getMobileHeight() + 'px');

		if (window.fullpage_api) {
			clearTimeout(window.__fpRebuildTimer);
			window.__fpRebuildTimer = setTimeout(function () {
				fullpage_api.reBuild();
			}, 250);
		}
	}

	setStableMobileHeight();

	window.addEventListener('load', setStableMobileHeight);
	window.addEventListener('resize', setStableMobileHeight);
	window.addEventListener('orientationchange', function () {
		setTimeout(setStableMobileHeight, 500);
	});

	if (window.visualViewport) {
		window.visualViewport.addEventListener('resize', setStableMobileHeight);
		window.visualViewport.addEventListener('scroll', setStableMobileHeight);
	}

	window.mobilePremiumSliderMode = true;
})();


