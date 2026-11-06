
    <!doctype html>
    <html lang="ko">
    <head>
        <meta charset="UTF-8">
        <title>역곡지구 하우스토리</title>
        <link rel="icon" href="/favicon.ico?v=1793923765" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta property="og:type" content="website" />
        <meta property="og:title" content="역곡지구 하우스토리" />
        <meta property="og:description" content="서울까지 단 1정거장 한 층 더 가까운 서울 라이프 - 역곡지구 하우스토리 | 문의 032-860-0976" />
        <meta property="og:image" content="./img/og_img_new2.jpg" />
        <meta property="og:url" content="https://www.xn--399a9js72an4ic7dr7a0yl59rz1h.com" />
        <meta property="og:site_name" content="역곡지구 하우스토리 공식 홈페이지" />
        <meta property="og:image:width" content="800" />
        <meta property="og:image:height" content="400" />
        <meta name="google" content="notranslate">
        <!--        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">-->

        <meta name="title" content="역곡지구 하우스토리" />
        <meta name="description" content="서울까지 단 1정거장 한 층 더 가까운 서울 라이프 - 역곡지구 하우스토리 | 문의 032-860-0976" />

        <!-- Chrome, Firefox OS and Opera -->
        <meta name="theme-color" content="#008672">
        <!-- Windows Phone -->
        <meta name="msapplication-navbutton-color" content="#008672">
        <!-- iOS Safari -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="apple-mobile-web-app-status-bar-style" content="">

        <!-- facivon -->
        <link rel="apple-touch-icon" sizes="57x57" href="./img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="./img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="./img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="./img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="./img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="./img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="./img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="./img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="./img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="./img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png">
        <link rel="manifest" href="./img/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="./img/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">


        <meta name="format-detection" content="telephone=no, address=no, email=no">




        <!-- viewport -->
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <!-- css -->
        <link rel="stylesheet" href="./css/font.css?1793923765">
        <link rel="stylesheet" href="./css/fontawesome.css">
        <link rel="stylesheet" href="./css/swiper.min.css">
        <link rel="stylesheet" href="./css/common.css?1793923765">
        <link rel="stylesheet" href="./css/style.css?1793923765">

        <style>
            /* 계약안내(6번째) 메뉴만 폭 넓힘 - PC */
            .header .nav li#m06,
            .header .drop_menu .drop > li:nth-child(6) {
                width: 190px;
            }

            .header .drop_menu .drop > li:nth-child(6) a {
                white-space: nowrap;
            }

            /* 방문예약(8번째) 메뉴 - PC */
            .header .nav li#m08,
            .header .drop_menu .drop > li:nth-child(8) {
                width: 190px;
            }

            .header .drop_menu .drop > li:nth-child(8) a {
                white-space: nowrap;
            }

            @media screen and (max-width: 1700px) {
                .header .nav li#m08,
                .header .drop_menu .drop > li:nth-child(8) {
                    width: 160px;
                }
            }

            @media screen and (max-width: 1700px) {
                .header .nav li#m06,
                .header .drop_menu .drop > li:nth-child(6) {
                    width: 160px;
                }
            }
        </style>

        <style>
            /* 옵션안내 강조 */

            /* 대메뉴 '세대안내' 옆 작은 점 : 은은하게 깜빡임 */
            .menu-dot {
                position: relative;
            }

            .menu-dot::after {
                content: "";
                position: absolute;
                top: -3px;
                right: -11px;
                width: 7px;
                height: 7px;
                border-radius: 50%;
                background: #ff6b00;
                animation: menuDotPulse 2.4s ease-in-out infinite;
            }

            @keyframes menuDotPulse {
                0%, 100% {
                    box-shadow: 0 0 0 0 rgba(255, 107, 0, 0.45);
                }
                50% {
                    box-shadow: 0 0 0 6px rgba(255, 107, 0, 0);
                }
            }

            /* 서브메뉴 '옵션안내' : 연한 네이비 알약 배경 */
            .menu-pill {
                display: inline-block !important;
                padding: 3px 14px;
                border-radius: 999px;
                background: #eef2f9;
                color: #003477 !important;
                font-weight: 600;
                line-height: 1.5;
            }

            .menu-pill:hover {
                background: #003477;
                color: #fff !important;
            }

            /* 모바일 메뉴 크기 보정 (750px 기준 화면) */
            .side-menu .menu-dot::after {
                top: 2px;
                right: -18px;
                width: 12px;
                height: 12px;
            }

            .side-menu .menu-pill {
                padding: 4px 16px;
                margin: -4px 0 -4px -16px;
            }

            /* 움직임 최소화 설정한 사용자는 깜빡임 끔 */
            @media (prefers-reduced-motion: reduce) {
                .menu-dot::after {
                    animation: none;
                }
            }
        </style>

        <!-- js -->
        <script  src="https://code.jquery.com/jquery-latest.min.js"></script>
        <script src="./js/vendor/prefixfree.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>

        <script src="./js/swiper.min.js"></script>
        <script src="./js/browser.js"></script>
        <script src="./js/common.js?1793923765"></script>

        <link rel="stylesheet" href="./css/jquery.mCustomScrollbar.css">
        <script src="./js/jquery.mCustomScrollbar.min.js"></script>

        <script src="./js/jquery.bpopup.min.js"></script>

        <link rel="stylesheet" href="./css/aos.css">
        <script src="./js/aos.js"></script>


        <script>
            if(navigator.userAgent.indexOf('MSIE')!==-1 || navigator.appVersion.indexOf('Trident/') > -1){
                window.location.href = 'microsoft-edge:' + window.location.href;
                setTimeout(function() {
                    window.opener='nothing';
                    window.open('','_parent','');
                    window.close();
                }, 3000);

            }
        </script>

        <script>
            const vh = window.innerHeight;
            document.documentElement.style.setProperty('--vh', `${vh}px`);

            $(window).resize(function(){
                const vh = window.innerHeight;
                document.documentElement.style.setProperty('--vh', `${vh}px`);
            });
        </script>

        <!-- 26. 05. 15. 구글 리타겟팅 코드 -->
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-18159770067"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'AW-18159770067');
        </script>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-WSKQQTLQ');</script>
        <!-- End Google Tag Manager -->


        <script type="text/javascript" src="//wcs.pstatic.net/wcslog.js"></script>
        <script type="text/javascript">
            if(!wcs_add) var wcs_add = {};
            wcs_add["wa"] = "a0d41d6414e2c0";
            if(window.wcs) {
                wcs_do();
            }
        </script>




        <!-- Danggeun Market Code -->
        <script src="https://karrot-pixel.business.daangn.com/karrot-pixel.js"></script>
        <script>
            window.karrotPixel.init('1779352019511983001');
            window.karrotPixel.track('ViewPage');
        </script>
        <!-- End Danggeun Market Code -->


        <!-- Meta Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1736936427654175');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=1736936427654175&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Meta Pixel Code -->


        <script type="text/javascript" charset="UTF-8" src="//t1.kakaocdn.net/kas/static/kp.js"></script>
        <script type="text/javascript">
            kakaoPixel('2670992171391667032').pageView('방문');
        </script>


    </head>

<body class="" style="visibility:hidden; opacity:0">


    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WSKQQTLQ"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <header class="header new">
        <div class="row">
            <a href="./" class="logo" title="역곡지구 하우스토리"></a>
            <div class="right_box">
                <nav class="nav_wrap">
                    <ul class="nav">
                        <li id="m01"><a href="./business.php" title="사업안내" class="">사업안내</a></li>
                        <li id="m02"><a href="./premium.php" title="프리미엄" class="">프리미엄</a></li>
                        <li id="m03"><a href="./layout.php" title="단지안내" class="">단지안내</a></li>
                        <li id="m04"><a href="./unit.php" title="세대안내" class="menu-dot">세대안내</a></li>
                        <li id="m05"><a href="./schedule.php" title="분양안내" class="">분양안내</a></li>

                        <!-- 계약안내 대메뉴 -->
                        <li id="m06"><a href="./contract_guide.php" title="계약안내" class="">계약안내</a></li>
                        <li id="m07"><a href="./registration.php" title="홍보센터" class="">홍보센터</a></li>
                        

                    </ul>
                </nav>
                <!--                <div class="open_icon">-->
                <!--                    -->                <!--                        <p><em>7</em>월 <em>10</em>일(<em>금</em>) <em>GRAND OPEN</em>-->
                <!--                        </p>-->
                <!--                    -->                <!--                        <p>견본주택 개관중!</p>-->
                <!--                    -->                <!---->
                <!--                </div>-->
                <a href="javascript:void(0);" class="tel"></a>
            </div>

                        <div class="drop_menu new new2 new3">
                
                    <ul class="drop">
                        <li rel="m01">
                            <ul class="sub_menu">
                                <li><a href="./business.php" title="사업개요" class="">사업개요</a></li>
                                <!--                            <li><a href="./brand.php" title="브랜드소개" class="ready">브랜드소개</a></li>-->
                                <li><a href="./info.php" title="신혼희망타운이란?" class="">신혼희망타운이란?</a></li>
                                <li><a href="./position.php" title="입지환경" class="">입지환경</a></li>
                                <li><a href="./location.php" title="오시는길" class="">오시는길</a></li>
                            </ul>
                        </li>
                        <li rel="m02">
                            <ul class="sub_menu">
                                <li><a href="./premium.php" title="PREMIUM 6" class="">PREMIUM 6</a></li>
                                <li><a href="./landscape.php" title="LANDSCAPE & NATURE" class="">LANDSCAPE & NATURE</a></li>
                            </ul>
                        </li>
                        <li rel="m03">
                            <ul class="sub_menu">
                                <li><a href="./layout.php" title="단지배치도" class="">단지배치도</a></li>
                                <li><a href="./no_layout.php" title="동호수배치도" class="">동호수배치도</a></li>
                                <li><a href="./community.php" title="커뮤니티" class="">커뮤니티</a></li>
                                                                    <li><a href="./masterplan_vr.php" title="모형도VR" class="">모형도VR</a></li>
                                                                <li><a href="./telecom.php" title="구내용이동통신설비" class="">구내용이동통신설비</a></li>
                            </ul>
                        </li>
                        <li rel="m04">
                            <ul class="sub_menu">
                                <li><a href="./unit.php" title="옵션안내" class="menu-pill">옵션안내</a></li>
                                                                    <li><a href="./interior.php" title="인테리어" class="">인테리어</a></li>
                                    <li><a href="./modelhouse_vr.php" title="E-모델하우스" class="">E-모델하우스</a></li>
                                
                            </ul>
                        </li>
                        <li rel="m05">
                            <ul class="sub_menu">
                                <li><a href="./schedule.php" title="분양일정" class="">분양일정</a></li>
                                <li><a href="./rec_anc.php" title="모집공고" class="">모집공고</a></li>
                                <li><a href="./supply.php" title="공급안내" class="">공급안내</a></li>

                            </ul>
                        </li>
                        <!-- 계약안내 대메뉴 -->
                        <li rel="m06">
                            <ul class="sub_menu">
                                <li><a href="./contract_guide.php" title="정당계약 안내" class="">정당계약 안내</a></li>
                                <li><a href="./stamp_tax.php" title="인지세 납부안내" class="">인지세 납부안내</a></li>
                                <li><a href="./reserve_contract.php" title="예비당첨자 계약안내" class="">예비당첨자 계약안내</a></li>
                                <li><a href="./option_contract.php" title="유상옵션 계약안내" class="">유상옵션 계약안내</a></li>
                                <li><a href="./loan_guide.php" title="중도금 대출 안내" class="">중도금 대출 안내</a></li>
                            </ul>
                        </li>
                        <li rel="m07">
                            <ul class="sub_menu">
                                <li><a href="./registration.php" title="관심고객등록" class="">관심고객등록</a></li>
                                <li><a href="./news.php" title="언론보도" class="">언론보도</a></li>
                                <li><a href="./promotion.php" title="홍보영상" class="">홍보영상</a></li>
                            </ul>
                        </li>
                        

                    </ul>


                </div>
            </div>
    </header>






    <div class="floating pc" style="">




    </div>

<link rel="stylesheet" href="./css/sub.css?1793923765">
<script src="./js/sub.js?1793923765"></script>



<div class="parallax">
	<div class="bg"></div>
		<div class="row">
            <div class="story-center">
                <p class="story-title">부천의 중심에서 가장 빛나는</p>
                <p class="story-title2">우리의 첫집 스토리</p>

                <div class="story-logo">
                    <img src="./img/sub/logo_story_n3.png" alt="우리의 첫집 스토리 로고">
                </div>
            </div>
        </div>
</div>

<div class="route_menu_wrap">
	<ul class="route_menu">

		<li class="home">
			<a href="./" title="홈으로가기"><img src="./img/sub/icon_home_n.png?new" alt="홈"></a>
		</li>

		<li class="rmenu">
			<a>분양안내</a>
			
			<ul class="rsub_menu">
				<li><a href="./business.php" class="">사업안내</a></li>
				<li><a href="./premium.php" class="">프리미엄</a></li>
				<li><a href="./layout.php" class="">단지안내</a></li>
				<li><a href="./unit.php" class="">세대안내</a></li>
                <li><a href="./schedule.php" class="">분양안내</a></li>
                <li><a href="./contract_guide.php" class="">계약안내</a></li>
                <!-- 계약안내 추가로 대메뉴 7개 -->
                <li><a href="./registration.php" class="">홍보센터</a></li>
                
			</ul>
			<span class="arrow"></span>
		</li>

		<li class="rmenu">
			<a>분양일정</a>

			<ul class="rsub_menu">
									<li><a href="./schedule.php" class="">분양일정</a></li>
					                                            <li><a href="./rec_anc.php" class="">모집공고</a></li>
                    
										<li><a href="./supply.php" class="">공급안내</a></li>
								</ul>
			<span class="arrow"></span>
		</li>

	</ul>
</div>

<script>
    window.addEventListener("load", function () {
        const center = document.querySelector(".story-center");
        const title1 = document.querySelector(".story-title");
        const title2 = document.querySelector(".story-title2");
        const logo = document.querySelector(".story-logo");

        if (!center || !title1 || !title2 || !logo) return;

        gsap.set(center, { opacity: 1 });

        // 위 문장: 조용히 내려앉음
        gsap.set(title1, {
            opacity: 0,
            y: -14,
            filter: "blur(6px)"
        });

        // 메인 문장: 자간이 모이면서 또렷해짐
        gsap.set(title2, {
            opacity: 0,
            letterSpacing: "0.32em",
            filter: "blur(8px)"
        });

        // 로고: 아래에서 올라오는 게 아니라, 작게 열리듯 등장
        gsap.set(logo, {
            opacity: 0,
            scale: 0.88,
            clipPath: "inset(0 50% 0 50%)"
        });

        const tl = gsap.timeline({ delay: 0.25 });

        tl.to(title1, {
            opacity: 1,
            y: 0,
            filter: "blur(0px)",
            duration: 0.75,
            ease: "power3.out"
        })

            .to(title2, {
                opacity: 1,
                letterSpacing: "0.16em",
                filter: "blur(0px)",
                duration: 1.15,
                ease: "expo.out"
            }, "-=0.25")

            .to(logo, {
                opacity: 1,
                scale: 1,
                clipPath: "inset(0 0% 0 0%)",
                duration: 0.95,
                ease: "power4.out"
            }, "-=0.35");
    });

    $(window).on('scroll', function () {
        const scrollTop = $(this).scrollTop();

        if (scrollTop > 0) {
            $('.header').addClass('w');
        } else {
            $('.header').removeClass('w');
        }
    });
</script>

<style>
    .btn-top {
        position: fixed;
        right: 50px;
        bottom: 50px;
        z-index: 9999;


        opacity: 0;
        pointer-events: none;
        transform: translateY(10px);

        transition: all 0.3s ease;
    }

    .btn-top img {
        width: 100%;
        height: 100%;
        display: block;
    }

    /* 보일 때 */
    .btn-top.active {
        opacity: 1;
        pointer-events: auto;
        transform: translateY(0);
    }

    @media screen and (max-width: 1000px) {
        .btn-top {
            width: 60px;
        }
    }

</style>
<a href="#" class="btn-top">
    <img src="./img/top_btn_n.png" alt="TOP">
</a>

<script>
    const btnTop = document.querySelector('.btn-top');

    // 스크롤 시 나타나기
    window.addEventListener('scroll', () => {
        if (window.scrollY > 200) {
            btnTop.classList.add('active');
        } else {
            btnTop.classList.remove('active');
        }
    });

    // 클릭 시 맨 위로
    btnTop.addEventListener('click', (e) => {
        e.preventDefault();

        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>


<style>
        .position-section {
            width: 100%;
            padding: 0 0 70px;
        }

        .position-visual {
            position: relative;
            width: 100%;
        }

        .position-copy {
            padding-top: 10px;
            text-align: center;
            opacity: 0;
            transform: translateY(35px);
            transition:
                    opacity 1s cubic-bezier(0.22, 1, 0.36, 1),
                    transform 1s cubic-bezier(0.22, 1, 0.36, 1);
        }

        .position-copy.show {
            opacity: 1;
            transform: translateY(0);
        }

        .position-copy-sub {
            font-family:'Paperlogy-4Regular';
            font-size: 35px;
            color: #555;
        }

        .position-copy-title {
            margin-bottom: 14px;
            font-size: 55px;
            color: #111;
            letter-spacing: -3px;
            font-family:'Paperlogy-6SemiBold';
        }

        .position-copy-title span {
            color: #003974;
        }

        .position-copy-desc {
            font-family:'Paperlogy-4Regular';
            font-size: 26px;
            color: #333;
            line-height: 1.5;
        }
        .position-copy-desc em {
            font-weight: bold;
        }

        .position-map-wrap {
            position: relative;
            margin-top: 55px;
        }

        .position-map {
            opacity: 0;
            transform: scale(1.04) translateY(40px);
            transition:
                    opacity 1.3s cubic-bezier(0.22, 1, 0.36, 1),
                    transform 1.3s cubic-bezier(0.22, 1, 0.36, 1);
        }

        .position-map.show {
            opacity: 1;
            transform: scale(1) translateY(0);
        }


        .position-side-logo {
            position: absolute;
            top: -246px;
            right: 3px;
            opacity: 0;
            transform: translateX(30px);
            transition:
                    opacity 0.9s ease,
                    transform 0.9s ease;
            transition-delay: 0.4s;
        }

        .position-side-logo.show {
            opacity: 1;
            transform: translateX(0);
        }

        .position-side-logo img {
            width: 100%;
            display: block;
        }

        .position-circle {
            position: absolute;
            left: -10px;
            bottom: -55px;
            width: 240px;
            opacity: 0;
            transform: translateY(40px);
            transition:
                    opacity 1s cubic-bezier(0.22, 1, 0.36, 1),
                    transform 1s cubic-bezier(0.22, 1, 0.36, 1);
            transition-delay: 0.25s;
        }

        .position-circle.show {
            opacity: 1;
            transform: translateY(0);
        }

        .position-circle img {
            width: 100%;
            display: block;
        }
        .img-mo {
            display: none;
        }

        @media screen and (max-width: 768px) {

            .img-pc {
                display: none !important;
            }

            .img-mo {
                display: block !important;
            }
        }
        @media screen and (max-width: 768px) {

            .position-section {
                padding: 0 0 40px;
            }

            .position-copy {
                padding-top: 0;
            }


            .position-copy-title {
                font-size: 50px;
                line-height: 1.2;
                margin-bottom: 30px;
            }
            .position-copy-title span {
                line-height: 1.1;
            }

            .position-map-wrap {
                margin-top: 60px;
            }

            .position-side-logo {
                right: 0;
            }

            .position-circle {
                left: -5px;
                bottom: -28px;
                width: 120px;
            }
        }
    </style>
    <div class="container">
        <div class="row">
            <h6>분양일정</h6>

                            <img src="./img/sub/schedule_n.png">
            
            <!--<div class="sub_f">
                <dl>
                    <dt>※</dt>
                    <dd>상기 개발 계획은 국토교통부 및 지방자치단체 등 유관 기관의 발표 자료를 인용한 것으로, 실제 사업 추진 시 인·허가 조건의 이행 여부나
                        관계 기관과의 협의, 상위 계획의 수정 등에 따라 변경, 취소 혹은 지연될 수 있습니다.</dd>
                </dl>
                <dl>
                    <dt>※</dt>
                    <dd>상기 학교 및 유치원 예정 부지의 위치는 ‘부천역곡 공공주택지구 지구계획(2차)’ 토지이용계획도를 기준으로 배치되었으며,
                        향후 실시계획 및 개교 일정 변경, 학생 수용 여건 미비 등으로 관할 기관의 판단에 따라 조정되거나 해제될 수 있으며 당사와 무관합니다.</dd>
                </dl>
                <dl>
                    <dt>※</dt>
                    <dd>상기 교통망 계획(GTX-B: 국토부 고시 제2024-373호 / 광명서울고속도로: 국토부 고시 제2024-262호)은 현재 승인된
                        실시계획을 기준으로 작성되었으며, 변경·취소·지연될 수 있고 당사와 무관합니다.</dd>
                </dl>

            </div>-->
        </div>
    </div>


<footer class="section footer fp-auto-height">
    <div class="row footer_row">
        <div class="footer_left">
            <div class="footer_top">
                <img src="./img/footer_logo_n3.png?new" alt="역곡지구 하우스토리" class="footer_logo">
                <span class="footer_line"></span>
                <span class="footer_tel"><img src="./img/footer_tel_n2.png"></span>
            </div>


                            <p class="footer_info">
                    시행&nbsp;&nbsp;<em>LH, 남광토건 컨소시엄 </em>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    시공&nbsp;&nbsp;<em>남광토건 컨소시엄</em><br>

                   <!-- 시행&nbsp;&nbsp;<em>남광토건 주식회사 </em>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    시공&nbsp;&nbsp;<em>남광토건 컨소시엄</em>


                <dl>(사업자등록번호 : 120-81-01995 / 대표자 : 김종수, 이동철)</dl><br>-->



                    견본주택 주소&nbsp;&nbsp;<em>경기도 부천시 원미구 상동 529-38</em>


                </p>
                        <p class="footer_copy">
                COPYRIGHT © 2026.역곡지구 하우스토리.ALL RIGHTS RESERVED.
            </p>
        </div>

        <div class="footer_right">
            <p>※ 본 홈페이지의 CG 및 이미지는 소비자의 이해를 돕기 위해 제작된 것으로 실제와 다를 수 있습니다.</p>
            <p>※ 본 홈페이지의 일부 영상 및 이미지는 AI 기술을 활용해 제작된 것으로 실제와 다를 수 있습니다.</p>
            <p>※ 1,464세대 중 금번 공공분양 976세대 이외 잔여 488세대는 행복주택으로 추후 공급될 예정입니다.</p>
            <p>※ 제작, 편집 과정상 오탈자 등의 오류가 있을 수 있으니, 반드시 견본주택 관계자에게 문의하시기 바랍니다.</p>
        </div>
    </div>
</footer>
<div class="Rel m_fixed_wrap">
	<ul class="m_fixed">
		<li class="regi"><a href="/registration.php" title="관심고객등록 바로가기">관심고객등록</a></li>
        <!--            <li class="open" title="">-->
<!--                견본주택 개관중!-->
<!--            </li>-->
        
	</ul>
</div>

<script src="https://mattstow.com/experiment/responsive-image-maps/jquery.rwdImageMaps.min.js"></script> 
<script>
AOS.init({});
$('img[usemap]').rwdImageMaps();

$('.ready').on('click', function(e){
    e.preventDefault();
    alert('준비중입니다');
});
</script>
</body>
</html>