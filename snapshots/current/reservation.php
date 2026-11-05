
    <!doctype html>
    <html lang="ko">
    <head>
        <meta charset="UTF-8">
        <title>역곡지구 하우스토리</title>
        <link rel="icon" href="/favicon.ico?v=1793863887" />
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
        <link rel="stylesheet" href="./css/font.css?1793863887">
        <link rel="stylesheet" href="./css/fontawesome.css">
        <link rel="stylesheet" href="./css/swiper.min.css">
        <link rel="stylesheet" href="./css/common.css?1793863887">
        <link rel="stylesheet" href="./css/style.css?1793863887">

        <style>
            /* 계약안내(6번째) 메뉴만 폭 넓힘 - PC */
            .header .nav li#m06,
            .header .drop_menu .drop > li:nth-child(6) {
                width: 190px;
            }

            .header .drop_menu .drop > li:nth-child(6) a {
                white-space: nowrap;
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
        <script src="./js/common.js?1793863887"></script>

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

<link rel="stylesheet" href="./css/sub.css?1793863887">
<script src="./js/sub.js?1793863887"></script>



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
			<a>방문예약</a>
			
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
			<a>방문예약</a>

			<ul class="rsub_menu">
									<li><a href="./reservation_winner1345.php" class="">당첨자 서류제출 방문예약</a></li>
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
    .res_time_inner {
        border: 1px solid #ddd;
        min-height: 240px;
        height: 100%;
        /*overflow-y: auto;*/
    }

    .res_time_date {
        height: 60px;
        border-bottom: 1px solid #ddd;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        position: relative;
    }

    .res_time_date span {
        font-size: 12px;
        color: #555;
    }

    .res_time_date strong {
        font-size: 16px;
        color: #333;
    }

    .time_refresh {
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        border: 0;
        background: none;
        font-size: 20px;
        cursor: pointer;
    }

    .res_time_box {
        width: 550px;
        height: 376px;
    }
    .res_time_cont {
        min-height: 315px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: #333;
        line-height: 1.7;
    }

    .time_list {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
        padding: 20px;
    }

    .time_list li a {
        display: block;
        width: 90px;
        height: 38px;
        line-height: 38px;
        border: 1px solid #ddd;
        text-align: center;
    }

    .time_list li a:hover {
        background: #0D2144;
        color: #fff;
    }
    .time_list li a.active {
        background: #0D2144;
        color: #fff;
    }

    .calendar td.skip span,
    .calendar td.skip .skipday {
        color: #bbb;
    }

    .res_check_box {
        margin: 30px 0;
        padding: 40px 20px;
        background: #f7f7f7;
        text-align: center;
        line-height: 1.8;
    }

    .res_check_box .res_check_date {
        display: inline-block;
        margin-top: 25px;
        padding: 18px 60px;
        background: #fff;
        border-radius: 40px;
    }

    .res_check_box .res_check_date strong {
        margin-left: 15px;
        color: #003477;
    }

    .res_check_btns {
        margin-top: 40px;
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .res_check_btns .btn_res {
        margin: unset;
    }

    .btn_res_line {
        background: #fff !important;
        color: #003477 !important;
        border: 1px solid #003477;
    }

    .time_list {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px 60px;
        justify-content: center;
        height: 310px;
    }

    .time_list li a {
        width: auto;
        height: auto;
        line-height: 1.4;
        border: 0;
        color: #999;
        display: flex;
        align-items: center;
        gap: 14px;
        font-size: 18px;
    }

    .time_list li a:before {
        content: "";
        width: 24px;
        height: 24px;
        border: 2px solid #ddd;
        border-radius: 50%;
        background: #f1f1f1;
        box-sizing: border-box;
    }

    .time_list li a:hover,
    .time_list li a.active {
        background: none;
        color: #0D2144;
    }

    .time_list li a.active:before {
        border: 0px solid #0D2144;
        background: #fff;
        box-shadow: inset 0 0 0 8px #0D2144;
    }

    .agree_box {
        line-height: 1.45;
    }

    .agree_box h4 {
        margin: 8px 0 4px;
        font-weight: 700;
    }

    .agree_box p {
        margin: 0;
    }

    .agree_box ul {
        margin: 0;
        padding-left: 0;
    }

    .agree_box ul ul {
        padding-left: 20px;
    }

    .agree_box li {
        list-style: none;
    }

    .agree_table {
        width: 100%;
        margin-top: 15px;
        border-collapse: collapse;
        font-size: 13px;
        text-align: center;
    }

    .agree_table th,
    .agree_table td {
        border: 1px solid #ddd;
        padding: 12px 10px;
    }

    .agree_table th {
        background: #f5f5f5;
        font-weight: 500;
    }


    .time_list li a {
        color: #000;
    }

    .time_list li a:before {
        border: 2px solid #000;
        background: #fff;
    }

    .time_list li a:hover,
    .time_list li a.active {
        background: none;
        color: #000;
    }

    .time_list li a.active:before {
        background: #000;
        box-shadow: inset 0 0 0 6px #fff;
    }

    /* 마감 시간 */
    .time_list li a.is_done {
        color: #aaa;
        cursor: default;
        pointer-events: none;
    }

    .time_list li a.is_done:before {
        border-color: #ddd;
        background: #f1f1f1;
    }

    @media screen and (max-width: 768px) {
        .time_list {
            grid-template-columns: 1fr;
            gap: 20px;
            padding: 30px;
        }

        .time_list li a {
            font-size: 24px;
        }
    }

    @media screen and (max-width: 768px) {
        .res_time_inner {
            min-height: 220px;
        }

        .res_check_box {
            margin: 25px 0;
            padding: 30px 15px;
            font-size: 24px;
        }

        .res_check_box .res_check_date {
            display: block;
            padding: 15px 10px;
            border-radius: 30px;
            font-size: 24px;
        }

        .res_check_box .res_check_date strong {
            display: block;
            margin-left: 0;
            margin-top: 5px;
        }

        .res_check_btns {
            flex-direction: column;
            gap: 10px;
        }

        .res_check_btns .btn_res {
            width: 100%;
        }

        .time_list li a {
            width: 100px;
            height: 45px;
            line-height: 45px;
        }
        .res_time_box {
            width: 100%;
            height: 460px;
        }
        .res_time_date span {
            font-size: 22px;
        }
        .res_time_date strong {
            font-size: 24px;
        }
        .res_time_cont {
            font-size: 24px;
        }
    }

    @media screen and (max-width: 768px) {
        .res_time_cont {
            min-height: auto;
            padding: 30px 0;
            font-size: inherit;
            display: flex;
            align-items: center;
            height: calc(100% - 100px);
        }

        .time_list {
            width: 100%;
            max-width: 360px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px 28px;
            padding: 0 25px;
            box-sizing: border-box;
        }

        .time_list li a {
            width: auto;
            height: auto;
            line-height: 1.4;
            font-size: 24px;
            justify-content: flex-start;
            gap: 10px;
        }



        .time_list li a.active:before {
            box-shadow: inset 0 0 0 6px #0D2144;
        }
    }
</style>
<link rel="stylesheet" type="text/css" href="./paymentloan/css/document.css" />
<div class="container sub">
    <div class="row">
<!--        <h6>--><!--</h6>-->
        <h6>사전청약자 대상<br>
            견본주택 관람 방문 예약
        </h6>
    </div>

    <div class="tab_container res_container">
        <!-- Tab -->
        <ul class="tabs">
            <li rel="tab1" class="active"><a>방문예약 신청</a></li>
            <li rel="tab2"><a>예약 확인 및 취소</a></li>
        </ul>
        <!-- //Tab -->

        <!-- Tab Container 1-->
        <div id="tab1" class="tab_content">
            <form id="reserve_frm" name="reserve_frm" method="post" action="javascript:void(0);">
                <input type="hidden" name="mode" value="regist">
                <input type="hidden" name="sangdate" id="sangdate" value="">
                <input type="hidden" name="scheduleseq" id="scheduleseq" value="">

                <div class="tab_box">
                    <div class="res_request">
                        <!-- 개인정보동의 -->
                        <div class="agree_wrap">
                            <div class="agree_box">

                                <p>
                                    역곡지구 하우스토리는 고객님의 개인정보를 중요시하며, 정보통신망 이용촉진 및 정보보호에 관한 법률을 준수하고 있습니다.
                                </p>

                                <h4>개인정보 수집 및 이용에 대한 동의</h4>
                                <p>상담, 서비스 신청 등을 위해 아래와 같은 개인정보를 수집하고 있습니다.</p>

                                <ul>
                                    <li>
                                        <p>(1) 수집하는 개인정보 항목</p>
                                        <ul>
                                            <li>- 수집항목 : 이름, 연락처, 방문예약 일시, 사전청약자 접수번호</li>
                                            <li>- 개인정보 수집방법 : 방문예약 신청, 예약 확인 및 취소</li>
                                        </ul>
                                    </li>

                                    <li>
                                        <p style="margin-bottom: 0 !important;">(2) 개인정보의 수집 및 이용 목적</p>
                                        <p style="margin-top: 0 !important;">수집한 개인정보를 다음의 목적으로 이용합니다.</p>
                                        <ul>
                                            <li>- 방문예약 신청, 예약 확인 및 취소, 사전청약자 본인 확인, 방문 및 분양 상담 안내</li>
                                        </ul>
                                    </li>

                                    <li>
                                        <p>(3) 개인정보의 보유 및 이용기간</p>
                                        <ul>
                                            <li>- 역곡지구 하우스토리 분양 종료시까지</li>
                                            <li>- 개인정보 수집 및 이용목적이 달성되거나 고객의 철회 요청이 있을 시에는 지체없이 파기합니다.</li>
                                        </ul>
                                    </li>

                                    <li>
                                        <p style="margin-bottom: 0 !important;">(4) 거부할 권리</p>
                                        <p style="margin-top: 0 !important;">고객께서는 정보 수집 및 이용에 대한 동의를 거부할 권리가 있습니다. 다만, 동의 해야만 방문예약신청이 완료 됩니다.</p>
                                    </li>
                                </ul>

                                <h4>개인정보 취급 위탁 동의</h4>

                                <table class="agree_table">
                                    <thead>
                                    <tr>
                                        <th>개인정보 취급을 받는자(수탁자)</th>
                                        <th>개인정보 취급 위탁을 하는 업무 내용</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>LH, 남광토건 컨소시엄</td>
                                        <td>분양사업 시행 및 고객관리</td>
                                    </tr>
                                    <tr>
                                        <td>남광토건 컨소시엄</td>
                                        <td>시공 및 분양 관련 업무</td>
                                    </tr>
                                    <tr>
                                        <td>㈜국진</td>
                                        <td>분양대행 및 상담 업무</td>
                                    </tr>
                                    <tr>
                                        <td>㈜애딩커뮤니케이션</td>
                                        <td>광고·마케팅 및 홈페이지 운영</td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                            <div class="agree_radio">
                                <span class="">※ (필수) 개인정보취급방침에</span>
                                <label class="checkradio-box">
                                    <input type="radio" name="agree" id="agree01" value="Y" checked>
                                    <span class="radio-icon"></span>
                                    <span class="radio-text">동의합니다.</span>
                                </label>
                                <label class="checkradio-box">
                                    <input type="radio" name="agree" id="agree02" value="N">
                                    <span class="radio-icon"></span>
                                    <span class="radio-text">동의하지 않습니다.</span>
                                </label>
                            </div>
                        </div>
                        <!-- //개인정보동의 -->
                        <!-- 날짜 시간 선택 -->
                        <div class="res_choice">
                                <div class="res_choice_in">
                                    <div class="rese_cal_wrap">
                                        <h4 class="res_tit">STEP.1 예약 날짜 선택</h4>
                                        <!-- STEP 1 -->
                                        <div id="rese_cal" class="res_cal_box">
                                            <div class="calendar_box">
                                                <div class="calendar_tlt">
                                                    <a href="javascript:;" class="calendar_prev" onclick="changeMonth(-1)">‹</a>
                                                    <strong id="calTitle">2026.06</strong>
                                                    <a href="javascript:;" class="calendar_next" onclick="changeMonth(1)">›</a>
                                                </div>

                                                <table class="calendar">
                                                    <caption>예약 달력</caption>
                                                    <thead>
                                                    <tr>
                                                        <th>일</th>
                                                        <th>월</th>
                                                        <th>화</th>
                                                        <th>수</th>
                                                        <th>목</th>
                                                        <th>금</th>
                                                        <th>토</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="calendarBody"></tbody>
                                                </table>
                                            </div>

                                            <p class="choice_list">
                                                <span class="nemo_select"></span> 선택
                                                <span class="nemo_doing"></span> 예약가능
                                                <span class="nemo_done"></span> 예약마감
                                            </p>
                                        </div>
                                    </div>
                                    <div class="rese_cal_time_wrap">
                                        <h4 class="res_tit">STEP.2 예약 시간 선택</h4>
                                        <!-- STEP 2 -->
                                        <div id="rese_cal_time" class="res_time_box">
                                            <div class="res_time_inner">
                                                <div class="res_time_date">
                                                    <span>선택 날짜</span>
                                                    <strong id="selectedDateText">2026.07.01 (수)</strong>
                                                    <button type="button" class="time_refresh">↻</button>
                                                </div>

                                                <div class="res_time_cont" id="timeList">
                                                    <p>
                                                        방문 예약 기간이 아닙니다.<br>
                                                        왼쪽 달력에서 원하시는 방문 날짜를<br>
                                                        클릭하시기 바랍니다.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //날짜 시간 선택 -->
                                </div>
                            <div class="res_choice_in res_choice_in02">
                                <!-- 예약자 정보 입력 -->
                                <div class="res_info">
                                    <h4 class="res_tit">STEP.3 예약자 정보 입력</h4>
                                    <table class="board_write" style="margin-top: 10px;">
                                        <tr>
                                            <th><label for="">예약일시</label></th>
                                            <td><div id='result1'></div></td>
                                            <!--<td><input type="text" id='result1' class="form-basic w250" value=""></td>-->
                                        </tr>

                                        <tr>
                                            <th><label for="sanname">이름</label></th>
                                            <td><input type="text" name="sanname" id="sanname" class="form-basic w250" value=""></td>
                                        </tr>
                                        <!--<tr>
                                            <th><label for="sanyear">생년월일</label></th>
                                            <td><input type="text" name="sanyear" maxlength="6" id="sanyear" class="form-basic w250" placeholder="생년월일 6자를 입력해 주세요"></td>
                                        </tr>-->
                                        <tr>
                                            <th><label for="sanphone_1">휴대전화</label></th>
                                            <td>
                                                <div class="input_phone">
                                                    <input type="tel" name="sanphone_1" id="sanphone_1" hpinput="true" class="form-basic w70" maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="010" readonly>
                                                    <span class="hypen">-</span>
                                                    <input type="tel" name="sanphone_2" id="sanphone_2" hpinput="true" class="form-basic w70" maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  value="" >
                                                    <span class="hypen">-</span>
                                                    <input type="tel" name="sanphone_3" id="sanphone_3" hpinput="true" class="form-basic w70" maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  value="" >
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="sanreceipt">사전청약자 접수번호</label></th>
                                            <td>
                                                <input type="text" name="sanreceipt" id="sanreceipt" class="form-basic w250" value="">
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
<!--                                    <span class="warn" style="color:#ff0000;">※ 추후 방문 가능 시간이 변경될 수 있습니다.</span ><br>-->
                                    <span class="warn" style="color:#ff0000;">
                                        ※ 방문 예약은 1회만 신청 가능하며, 예약 취소 시에는 재 신청 가능합니다.(방문예약 관련 문의는 대표번호로 문의 바랍니다.)<br>
                                        ※ 접수번호는 6월 22일 LH에서 사전청약자 대상 발송한 문자 메시지를 확인하시기 바랍니다.<br>
                                        ※ 견본주택 방문 시 입장 10분 전 도착 바랍니다.<br>
                                        ※ 방문 예약 시간 외 견본주택 관람은 상황에 따라 불가할 수 있습니다.<br>
                                    </span>

                                </div>
                            </div>
                        </div>

                        <div class="button_line">
                            <a href="Javascript:On_Booking();" id="btn_res_01" class="btn_res">예약 신청하기</a>
                            <!--<button type="submit" class="btn_res">예약 신청하기</button>-->
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- //Tab Container 1-->

        <!-- Tab Container 2-->
        <div id="tab2" class="tab_content">
            <form id="frmWrite" name="frmWrite" method="post" action="javascript:void(0);">
                <input type="hidden" name="mode" value="setresck">

                <div class="tab_box">
                    <div class="res_result">
<!--                        <h3 class="res_tit">방문 예약 확인 및 취소</h3>-->
                        <h4 class="res_tit">예약자 정보 입력</h4>
                        <table class="board_write mb40">
                            <tr>
                                <th><label for="c_b_name">이름</label></th>
                                <td>
                                    <input type="text" name="c_b_name" id="c_b_name" class="form-basic w250">
                                </td>
                            </tr>

                            <tr>
                                <th><label for="c_b_phone">휴대전화</label></th>
                                <td>
                                    <div class="input_phone">
                                        <input type="tel" name="c_b_phone_1" id="c_b_phone_1" class="form-basic w70" value="010" readonly>
                                        <span class="hypen">-</span>
                                        <input type="tel" name="c_b_phone_2" id="c_b_phone_2" class="form-basic w70">
                                        <span class="hypen">-</span>
                                        <input type="tel" name="c_b_phone_3" id="c_b_phone_3" class="form-basic w70">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th><label for="c_b_num">사전청약자 접수번호</label></th>
                                <td>
                                    <input type="text" name="c_b_num" id="c_b_num" class="form-basic w250">
                                </td>
                            </tr>



                        </table>
                    </div>
                    <div id="div_document_chk"></div>

                    <div class="button_line">
                        <a href="javascript:On_Booking_Search();" id="a_booking_ok" class="btn_res">방문예약 확인</a>
                    </div>
                </div>
            </form>
        </div>
        <!-- //Tab Container 2-->
    </div>

</div>



<script>
    $(".tab_content").hide();
    $(".tab_content:first").show();

    $("ul.tabs li").click(function () {

        // 방문예약 신청 탭 초기화
        $("#reserve_frm")[0].reset();
        $("#sanphone_1").val("010");

        $("#sangdate").val("");
        $("#scheduleseq").val("");
        $("#result1").html("");
        $("#selectedDateText").text(currentYear + "." + pad(currentMonth) + ".01");
        $("#timeList").html(
            "<p>방문 예약 기간이 아닙니다.<br>왼쪽 달력에서 원하시는 방문 날짜를<br>클릭하시기 바랍니다.</p>"
        );

        // 예약확인 탭 초기화
        $("#frmWrite")[0].reset();
        $("#c_b_phone_1").val("010");
        $("#div_document_chk").empty();
        $("#a_booking_ok").show();

        $("ul.tabs li").removeClass("active");
        $(this).addClass("active");
        $(".tab_content").hide();

        var activeTab = $(this).attr("rel");
        $("#" + activeTab).fadeIn();

        selectedDate = "";
        renderCalendar();
    });

    var currentYear = 2026;
    //var currentMonth = //;
    var currentMonth = 7;
    var selectedDate = "";

    var weekNames = ["일", "월", "화", "수", "목", "금", "토"];

    /*var availableDates = {
        "2026-06-26": [
            "10:00", "10:30", "11:00", "11:30",
            "12:00", "12:30", "13:00", "13:30",
            "14:00", "14:30", "15:00", "15:30",
            "16:00", "16:30", "17:00"
        ],
        "2026-06-27": [
            "10:00", "10:30", "11:00", "11:30",
            "12:00", "12:30", "13:00", "13:30",
            "14:00", "14:30", "15:00", "15:30",
            "16:00", "16:30", "17:00"
        ],
        "2026-06-28": [
            "10:00", "10:30", "11:00", "11:30",
            "12:00", "12:30", "13:00", "13:30",
            "14:00", "14:30", "15:00", "15:30",
            "16:00", "16:30", "17:00"
        ],
        "2026-06-29": [
            "10:00", "10:30", "11:00", "11:30",
            "12:00", "12:30", "13:00", "13:30",
            "14:00", "14:30", "15:00", "15:30",
            "16:00", "16:30", "17:00"
        ]
    };*/
	var availableDates = [];

    var doneDates = [];

    function pad(num) {
        return String(num).padStart(2, "0");
    }

    function getDateKey(year, month, date) {
        return year + "-" + pad(month) + "-" + pad(date);
    }

    function renderCalendar() {
        var firstDay = new Date(currentYear, currentMonth - 1, 1);
        var lastDate = new Date(currentYear, currentMonth, 0).getDate();
        var prevLastDate = new Date(currentYear, currentMonth - 1, 0).getDate();
        var startDay = firstDay.getDay();
		
		const params = new URLSearchParams({ year: currentYear, month: currentMonth });
		//console.log(params);
		fetch('/proxy/visitors/json/getstate', {
			method: 'POST',
			headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
			body: params
		}).then(
			response => response.text()
		).then(text => {
			//console.log('getstate response text:', text);
			const data = JSON.parse(text);
			availableDates = data;
			
			var html = "";
			var date = 1;
			var nextDate = 1;

			$("#calTitle").text(currentYear + "." + pad(currentMonth));

			for (var row = 0; row < 6; row++) {
				html += "<tr>";

				for (var col = 0; col < 7; col++) {
					var cellNum = row * 7 + col;
					var cls = "base";
					var text = "";
					var dateKey = "";

					if (cellNum < startDay) {
						text = pad(prevLastDate - startDay + cellNum + 1);
						cls += " skip";
						html += "<td class='" + cls + "'><span class='skipday'>" + text + "</span></td>";
					} else if (date > lastDate) {
						text = pad(nextDate++);
						cls += " skip";
						html += "<td class='" + cls + "'><span class='skipday'>" + text + "</span></td>";
					} else {
						text = pad(date);
						dateKey = getDateKey(currentYear, currentMonth, date);
						
						let isdone = true;
						if (availableDates[dateKey]) {
							//console.log('availableDates:', availableDates[dateKey]);
							for (let i = 0; i < availableDates[dateKey].length; i++) {
								if (!availableDates[dateKey][i].done) {
									isdone = false;
								}
							}
							//console.log('day:', isdone);
							//console.log('done:', isdone);
						}
						else {
							isdone = false;
						}

						if (selectedDate === dateKey) {
							cls += " select";
						}

						if (isdone !== true && availableDates[dateKey]) {
							cls += " doing";
						}

						//if (doneDates.indexOf(dateKey) > -1) {
						//	cls += " done";
						//}
						if (isdone === true) {
							cls += " done";
						}

						html += "<td class='" + cls + "'>";
						html += "<span><a href='javascript:;' onclick=\"selectReserveDate('" + dateKey + "')\">" + text + "</a></span>";
						html += "</td>";

						date++;
					}
				}

				html += "</tr>";

				if (date > lastDate && nextDate > 7) {
					break;
				}
			}

			$("#calendarBody").html(html);
		}).catch(error => {
			console.error('처리하는 중 오류 발생:', error.message);
		});
    }

    function changeMonth(dir) {
        currentMonth += dir;

        if (currentMonth < 1) {
            currentMonth = 12;
            currentYear--;
        }

        if (currentMonth > 12) {
            currentMonth = 1;
            currentYear++;
        }

        selectedDate = "";
        $("#sangdate").val("");
        $("#scheduleseq").val("");
        $("#result1").html("");
        $("#selectedDateText").text(currentYear + "." + pad(currentMonth) + ".01");
        $("#timeList").html(
            "<p>방문 예약 기간이 아닙니다.<br>왼쪽 달력에서 원하시는 방문 날짜를<br>클릭하시기 바랍니다.</p>"
        );

        renderCalendar();
    }
	
	$('.time_refresh').click(function() {
		if (selectedDate) {
			selectReserveDate(selectedDate);
		}
	});

    function selectReserveDate(dateKey) {
        selectedDate = dateKey;

        var d = new Date(dateKey);
        var dateText = d.getFullYear() + "." + pad(d.getMonth() + 1) + "." + pad(d.getDate()) + " (" + weekNames[d.getDay()] + ")";

        $("#selectedDateText").text(dateText);
        $("#sangdate").val("");
        $("#scheduleseq").val("");
        $("#result1").html("");
		$('#timeList').html('');
		
		const params = new URLSearchParams({ date: dateKey });
		//console.log(params);
		fetch('/proxy/visitors/json/gettimes', {
			method: 'POST',
			headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
			body: params
		}).then(
			response => response.text()
		).then(text => {
			//console.log('gettimes response text:', text);
			const data = JSON.parse(text);
			availableDates[dateKey] = data;
			

			if (!availableDates[dateKey] || !availableDates[dateKey].length) {
				$("#timeList").html(
					"<p>방문 예약 기간이 아닙니다.<br>왼쪽 달력에서 원하시는 방문 날짜를<br>클릭하시기 바랍니다.</p>"
				);
			} else {
				var html = "<ul class='time_list'>";
				availableDates[dateKey].forEach(function (v) {
					let seq = 0;
					let time = '';
					let maxuser = 0;
					let users = 0;
					if (typeof v === 'object') {
						seq = v.seq;
						time = v.time;
						maxuser = v.maxuser;
						users = v.users;
					}
					else {
						time = v;
					}
                    if (v.done) {
                        html += `<li><a href="javascript:;" class="is_done">${time}(${users}/${maxuser})</a></li>`;
                    } else {
                        html += `<li><a href="javascript:;" onclick="selectReserveTime('${seq}', '${dateKey}', '${time}', this)">${time}(${users}/${maxuser})</a></li>`;
                    }

				});
				html += "</ul>";
				$("#timeList").html(html);
			}

			renderCalendar();
		}).catch(error => {
			console.error('처리하는 중 오류 발생:', error.message);
		});
    }

    function selectReserveTime(seq, dateKey, time, el) {
        var d = new Date(dateKey);
        var dateText = d.getFullYear() + "년 " + pad(d.getMonth() + 1) + "월 " + pad(d.getDate()) + "일 " + time;

        $(".time_list li a").removeClass("active");
        $(el).addClass("active");
		
		//console.log(dateKey);
        $("#sangdate").val(dateKey);
        $("#scheduleseq").val(seq);
        $("#result1").html(dateText);
    }

    function On_Booking() {
        var frm = document.reserve_frm;

        if ($(":radio[name='agree']:checked").val() != "Y") {
            alert("※(필수)개인정보취급방침에 동의바랍니다.\n미 동의시 예약이 불가능합니다.");
            return;
        }

        if ($("#sangdate").val() == "") {
            alert("예약날짜 및 시간을 선택해 주세요.");
            return;
        }

        var sanname = $.trim($("#sanname").val());

        if (!/^[가-힣]{2,}$/.test(sanname)) {
            alert("이름은 한글 두 글자 이상 입력해 주세요.");
            $("#sanname").focus();
            return;
        }


        if (!/^\d{4}$/.test($("#sanphone_2").val()) ||
            !/^\d{4}$/.test($("#sanphone_3").val())) {
            alert("휴대폰번호를 정확히 입력해 주세요.");
            return;
        }

        if ($.trim($("#sanreceipt").val()) == "") {
            alert("사전청약자 접수번호를 입력해 주세요.");
            $("#sanreceipt").focus();
            return;
        }

		const params = new URLSearchParams({
			agree: $(":radio[name='agree']:checked").val(),
			scheduleseq: $('#scheduleseq').val(),
            name: sanname,
			contact1: $("#sanphone_1").val(),
			contact2: $("#sanphone_2").val(),
			contact3: $("#sanphone_3").val(),
			receiptnumber: $("#sanreceipt").val()
		});
		console.log('params:', params);
		fetch('/proxy/visitors/json/reservation', {
			method: 'POST',
			headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
			body: params
		}).then(
			response => response.text()
		).then(text => {
			//console.log('checkreceiptnumber response text:', text);
			const data = JSON.parse(text);
			//console.log('data', data);
			if (data.success) {
				alert('예약 접수가 완료되었습니다.');
				location.reload();
			}
			else {
				if (data.error) {
					alert(data.error);
				}
				else {
					alert('알 수 없는 오류가 발생하였습니다.');
				}
			}
		}).catch(error => {
			console.error('처리하는 중 오류 발생:', error.message);
		});

        //alert("퍼블리싱 확인용입니다. 실제 예약 저장은 백엔드 연결 후 동작합니다.");
    }

    function On_Booking_Search() {
        var name = $("#c_b_name").val();
        var phone1 = $("#c_b_phone_1").val();
        var phone2 = $("#c_b_phone_2").val();
        var phone3 = $("#c_b_phone_3").val();

        name = $.trim(name);

        if (!/^[가-힣]{2,}$/.test(name)) {
            alert("이름은 한글 두 글자 이상 입력해 주세요.");
            $("#c_b_name").focus();
            return;
        }

        if (!/^\d{4}$/.test(phone2) ||
            !/^\d{4}$/.test(phone3)) {
            alert("휴대폰번호를 정확히 입력해 주세요.");
            return;
        }

        var receiptNo = $("#c_b_num").val();

        if($.trim(receiptNo) == ""){
            alert("사전청약자 접수번호를 입력해 주세요.");
            $("#c_b_num").focus();
            return;
        }

		const params = new URLSearchParams({
			name: name,
			contact: phone1 +'-'+ phone2 +'-'+ phone3,
			receiptnumber: receiptNo
		});
		fetch('/proxy/visitors/json/userexists', {
			method: 'POST',
			headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
			body: params
		}).then(
			response => response.text()
		).then(text => {
			//console.log('userexists response text:', text);
			const data = JSON.parse(text);
			//console.log('data', data);
			if (!data.error) {
				// 테스트용입니다.
				if (data.exists) {
					$("#div_document_chk").html(`
						<div class="res_check_box">
							<p><strong>${name}</strong> 님<br>방문 예약이 완료되었습니다.</p>
							<div class="res_check_date">방문 예약 일시 <strong>${data.visitdate} ${data.visittime}</strong></div>
							<div class="res_check_btns">
								<a href="/" class="btn_res">메인으로</a>
								<a href="javascript:;" onclick="On_Booking_Del();" class="btn_res btn_res_line">취소하기</a>
							</div>
						</div>
					`);
				} else {
					$("#div_document_chk").html(`
						<div class="res_check_box no_result">
							<p><strong>${name}</strong> 님<br>방문예약 기록이 없습니다.</p>
							<p>아래 <strong>'방문예약 신청'</strong> 버튼을 클릭하시면 방문예약 신청이 가능합니다.</p>
							<div class="res_check_btns">
								<a href="javascript:;" onclick="goReserveTab();" class="btn_res">방문예약 신청</a>
							</div>
						</div>
					`);
				}
				$("#a_booking_ok").hide();

			}
			else {
				if (data.error) {
					alert(data.error);
				}
				else {
					alert('알 수 없는 오류가 발생하였습니다.');
				}
			}
		}).catch(error => {
			console.error('처리하는 중 오류 발생:', error.message);
		});
    }

    function goReserveTab() {
        $("ul.tabs li").removeClass("active");
        $("ul.tabs li[rel='tab1']").addClass("active");
        $(".tab_content").hide();
        $("#tab1").fadeIn();
    }

    function On_Booking_Del() {
		const params = new URLSearchParams({});
		fetch('/proxy/visitors/json/cancel', {
			method: 'POST',
			headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
			body: params
		}).then(
			response => response.text()
		).then(text => {
			//console.log('cancel response text:', text);
			const data = JSON.parse(text);
			//console.log('data', data);
			if (data.success) {
				alert('정상적으로 취소처리 되었습니다.');
				location.reload();
			}
			else {
				if (data.error) {
					alert(data.error);
				}
				else {
					alert('알 수 없는 오류가 발생하였습니다.');
				}
			}
		}).catch(error => {
			console.error('처리하는 중 오류 발생:', error.message);
		});
        //alert("퍼블리싱 확인용입니다. 실제 예약 취소는 백엔드 연결 후 동작합니다.");
    }



    // 입력 제한 제거
    // 모바일 천지인 자판 한글 조합 문제 방지를 위해
    // 입력 중에는 값을 강제로 replace 하지 않음

    $("#sanphone_2, #sanphone_3, #c_b_phone_2, #c_b_phone_3").attr("maxlength", "4").on("input", function () {
        if ($(this).val().length === 4) {
            if (this.id === "sanphone_2") $("#sanphone_3").focus();
            if (this.id === "c_b_phone_2") $("#c_b_phone_3").focus();
        }
    });



    // renderCalendar();
    selectedDate = "2026-07-01";
    renderCalendar();

    setTimeout(function () {
        selectReserveDate("2026-07-01");
    }, 300);

    window.addEventListener("pageshow", function () {
        if (performance.getEntriesByType("navigation")[0]?.type === "back_forward") {
            return;
        }

        $("#reserve_frm")[0].reset();
        $("#frmWrite")[0].reset();
        $("#sanphone_1, #c_b_phone_1").val("010");
    });
</script>



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
