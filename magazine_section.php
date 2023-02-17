<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAUHAUS</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard/dist/web/static/pretendard.css" />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/brand_page.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/common.js"></script>

</head>

<body>
    <div id="main_page">
        <?php include("./common.php/btn_gotop.php");?>
        <header id="header">
            <div class="header_top">
                <h1 class="logo"><a href="./index.php"><span class="hide">바우하우스</span></a></h1>
                <div>
                    <a class="ico_search" href="./search.php"><span class="hide">검색아이콘</span></a>
                    <a class="ico_alarm" href="./alarm.php"><span class="hide">알람아이콘</span><span class="number_tag">10</span></a>
                    <a class="ico_shoppingbag" href="./shoppingbag.php"><span class="hide">쇼핑백아이콘</span><span class="number_tag">10</span></a>
                </div>
            </div>
            <h2 class="hide">메인메뉴</h2>
            <nav class="header_gnb">
                <ul>
                    <li><a href="./index.php">홈</a></li>
                    <li><a href="./best_section.php">베스트</a></li>
                    <li><a href="./exhibition_section.php">기획전/혜택</a></li>
                    <li><a href="./magazine_section.php" class='on'>매거진</a></li>
                </ul>
            </nav>
        </header>
        <nav id="bottom_gnb">
            <ul>
                <li>
                    <a href="./bottom_gnb_menu.php" class="ico_menu">
                        <img src="./img/ic-menu.png" alt="하단메뉴아이콘">
                        <p>메뉴</p>
                    </a>
                </li>
                <li>
                    <a href="./index.php" class="ico_home">
                        <img src="./img/ic-home-active .png" alt="하단홈아이콘">
                        <p>홈</p>
                    </a>
                </li>
                <li>
                    <a href="./bottom_gnb_recent.php" class="ico_recent">
                        <img src="./img/ic-recent.png" alt="하단최근아이콘">
                        <p>최근 본</p>
                    </a>
                </li>
                <li>
                    <a href="./bottom_gnb_like.php" class="ico_like">
                        <img src="./img/ic-blike.png" alt="하단'좋아요'아이콘">
                        <p>찜</p>
                    </a>
                </li>
                <li>
                    <a href="./bottom_gnb_mypage_member.php" class="ico_mypage">
                        <img src="./img/ic-my.png" alt="하단마이페이지아이콘">
                        <p>마이</p>
                    </a>
                </li>
            </ul>
        </nav>
        <div id="section_area">
            <section id="magazine_section">
                <div class="swiper first-slide auto-slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide_text_wrap">
                            <a href="">
                                <img src="./img/magazine_visual.png" alt="">
                                <div class="slide_text">
                                    <div class="slide_text_container">
                                        <div class="slide_text_middle">
                                            <p>에디터들의</p>
                                            <p>왓츠 인 마이 쇼핑백</p>
                                        </div>
                                        <div class="slide_text_bottom">
                                            <p>에디터들은 봄을 맞이해 어떤 아이템을 구매할까?</p>
                                            <p>그들의 장바구니를 살펴보자</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide slide_text_wrap">
                            <a href="">
                                <img src="./img/magazine_visual.png" alt="">
                                <div class="slide_text">
                                    <div class="slide_text_container">
                                        <div class="slide_text_middle">
                                            <p>에디터들의</p>
                                            <p>왓츠 인 마이 쇼핑백</p>
                                        </div>
                                        <div class="slide_text_bottom">
                                            <p>에디터들은 봄을 맞이해 어떤 아이템을 구매할까?</p>
                                            <p>그들의 장바구니를 살펴보자</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide slide_text_wrap">
                            <a href="">
                                <img src="./img/magazine_visual.png" alt="">
                                <div class="slide_text">
                                    <div class="slide_text_container">
                                        <div class="slide_text_middle">
                                            <p>에디터들의</p>
                                            <p>왓츠 인 마이 쇼핑백</p>
                                        </div>
                                        <div class="slide_text_bottom">
                                            <p>에디터들은 봄을 맞이해 어떤 아이템을 구매할까?</p>
                                            <p>그들의 장바구니를 살펴보자</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="magazine_category_tab">
                    <div class="magazine_category_tab_wrap">
                        <div class="magazine_category_tabnav">
                            <ul>
                                <li><a href="#tab01">라떼센스</a></li>
                                <li><a href="#tab02">써니라떼</a></li>
                                <li><a href="#tab03">LOOK BOOK</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="magazine_category_tabcontent">
                        <div id="tab01" class="tab">
                            <div class="mz_latte_box">
                                <a href="./mz_latte1.html">
                                    <div class="img_box">
                                        <img src="./img/mz_latte1.png" alt="">
                                        <div class="img_text">
                                            <div class="img_text_container">
                                                <p>#코디</p>
                                                <p>#스타일링</p>
                                                <p>#환절기</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text_box">
                                        <div class="text_top">
                                            <p>꽃샘추위에 대적할 환절기</p>
                                        </div>
                                        <div class="text_bottom">
                                            <div class="text_bottom_area">
                                                <p>따뜻함과 스타일, 모두 잡는 스타일링 비법</p>
                                            </div>
                                            <img src="./img/ic-arrow-right-20px.png" alt="">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <h3>JANUARY 2022</h3>
                            <div class="mz_latte_box">
                                <a href="">
                                    <div class="img_box">
                                        <img src="./img/mz_latte2.png" alt="">
                                        <div class="img_text">
                                            <div class="img_text_container">
                                                <p>#HOT</p>
                                                <p>#22 S/S</p>
                                                <p>#봄신상</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text_box">
                                        <div class="text_top">
                                            <p>편안함의 미학</p>
                                        </div>
                                        <div class="text_bottom">
                                            <div class="text_bottom_area">
                                                <p>따뜻해지는 날씨,편안하고 가벼운</p>
                                                <p>스니커즈로 준비해보세요</p>
                                            </div>
                                            <img src="./img/ic-arrow-right-20px.png" alt="">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="mz_latte_box">
                                <a href="">
                                    <div class="img_box">
                                        <img src="./img/mz_latte3.png" alt="">
                                        <div class="img_text">
                                            <div class="img_text_container">
                                                <p>#코디</p>
                                                <p>#스타일링</p>
                                                <p>#환절기</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text_box">
                                        <div class="text_top">
                                            <p>봄내음 가득한 샤트렌 신상 모음전</p>
                                        </div>
                                        <div class="text_bottom">
                                            <div class="text_bottom_area">
                                                <p>샤트렌이 이번에 선보인 봄코디 시리즈가</p>
                                                <p>주간랭킹에서 1위를 차지했다.</p>
                                            </div>
                                            <img src="./img/ic-arrow-right-20px.png" alt="">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="tab02" class="tab">
                            <div class="mz_sun_latte_box">
                                <a href="">
                                    <div class="img_box">
                                        <img src="./img/mz_sun_latte1.png" alt="">
                                    </div>
                                    <div class="text_box">
                                        <div class="D_day">
                                            <p>NOW</p>
                                        </div>
                                        <div class="text_top">
                                            <p>[써니라떼] LIVE X 블랙프라이데이</p>
                                        </div>
                                        <div class="text_middle">
                                            <p>2022.04.12 - 2022.08.31</p>
                                        </div>
                                        <div class="text_bottom">
                                            <p>할인</p>
                                            <p>스타일링</p>
                                            <p>기본템</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="mz_sun_latte_box">
                                <a href="">
                                    <div class="img_box">
                                        <img src="./img/mz_sun_latte2.png" alt="">
                                    </div>
                                    <div class="text_box">
                                        <div class="D_day">
                                            <p>D-3</p>
                                        </div>
                                        <div class="text_top">
                                            <p>[써니라떼] 샤트렌으로 근본코디 완성하기</p>
                                        </div>
                                        <div class="text_middle">
                                            <p>2022.04.12 - 2022.08.31</p>
                                        </div>
                                        <div class="text_bottom">
                                            <p>코디</p>
                                            <p>스타일링</p>
                                            <p>기본템</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="mz_sun_latte_box">
                                <a href="">
                                    <div class="img_box">
                                        <img src="./img/mz_sun_latte3.png" alt="">
                                    </div>
                                    <div class="text_box">
                                        <div class="D_day">
                                            <p class="grey">END</p>
                                        </div>
                                        <div class="text_top">
                                            <p>[써니라떼] 더 그레이스 모델 개인소장 모음집</p>
                                        </div>
                                        <div class="text_middle">
                                            <p>2022.04.12 - 2022.08.31</p>
                                        </div>
                                        <div class="text_bottom">
                                            <p>코디</p>
                                            <p>스타일링</p>
                                            <p>기본템</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="mz_sun_latte_box">
                                <a href="">
                                    <div class="img_box">
                                        <img src="./img/mz_sun_latte4.png" alt="">
                                    </div>
                                    <div class="text_box">
                                        <div class="D_day">
                                            <p class="grey">END</p>
                                        </div>
                                        <div class="text_top">
                                            <p>[써니라떼] 크로커다일 레이디와 함께하는 월동준비! 가성비 니트부터 차분한 무드의 데일리 겨울코디 7가지</p>
                                        </div>
                                        <div class="text_middle">
                                            <p>2022.04.12 - 2022.08.31</p>
                                        </div>
                                        <div class="text_bottom">
                                            <p>크로커다일 레이디</p>
                                            <p>스타일링</p>
                                            <p>겨울</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="tab03" class="tab">
                            <div class="mz_lookbook_tab_wrap">
                                <div class="mz_lookbook_tabnav">
                                    <ul>
                                        <li><a href="#tab03-01" class="on">ALL</a></li>
                                        <li><a href="#tab03-02">CHATELAINE</a></li>
                                        <li><a href="#tab03-03">CROCODILE LADY</a></li>
                                        <li><a href="#tab03-04">OLIVIA HASSLER </a></li>
                                    </ul>
                                </div>
                                <div class="mz_lookbook_tabcontent">
                                    <div id="tab03-01" class="tab">
                                        <div class="mz_lookbook_box">
                                            <a href="./mz_lookbook.html">
                                                <div class="mz_lookbook_big">
                                                    <div class="mz_lookbook_big_img">
                                                        <img src="./img/./mz_lb_main1 .png" alt="">
                                                    </div>
                                                    <div class="mz_lookbook_big_text_wrap">
                                                        <div class="mz_lookbook_big_text">
                                                            <div class="text_top">
                                                                <p>CHATELAINE</p>
                                                            </div>
                                                            <div class="text_middle">
                                                                <p>2022 S/S NO.1</p>
                                                            </div>
                                                            <div class="right_arrow">
                                                                <img src="./img/ic-arrow-right-20px.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="mz_lookbook_row_wrap">
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row1-1.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>WaistLineShirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row1-2.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>Waist Line Shirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row1-3.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>Waist Line Shirt baaaaaaaam</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mz_lookbook_box">
                                            <a href="">
                                                <div class="mz_lookbook_big">
                                                    <div class="mz_lookbook_big_img">
                                                        <img src="./img/mz_lb_main2.png" alt="">
                                                    </div>
                                                    <div class="mz_lookbook_big_text_wrap">
                                                        <div class="mz_lookbook_big_text">
                                                            <div class="text_top">
                                                                <p>CHATELAINE</p>
                                                            </div>
                                                            <div class="text_middle">
                                                                <p>2022 S/S NO.2</p>
                                                            </div>
                                                            <div class="right_arrow">
                                                                <img src="./img/ic-arrow-right-20px.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="mz_lookbook_row_wrap">
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row2-1.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>캐시미어 케이블 머플러</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>89,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row2-2.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>캐시미어 케이블 머플러</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>89,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row2-3.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>캐시미어 케이블 머플러</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>89,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mz_lookbook_box">
                                            <a href="">
                                                <div class="mz_lookbook_big">
                                                    <div class="mz_lookbook_big_img">
                                                        <img src="./img/mz_lb_main3.png" alt="">
                                                    </div>
                                                    <div class="mz_lookbook_big_text_wrap">
                                                        <div class="mz_lookbook_big_text">
                                                            <div class="text_top">
                                                                <p>CHATELAINE</p>
                                                            </div>
                                                            <div class="text_middle">
                                                                <p>2021 FW NO.2</p>
                                                            </div>
                                                            <div class="right_arrow">
                                                                <img src="./img/ic-arrow-right-20px.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="mz_lookbook_row_wrap">
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row3-1.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>WaistLineShirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row3-2.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>Waist Line Shirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row3-3.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>Waist Line Shirt baaaaaaaam</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="tab03-02" class="tab">
                                        <div class="mz_lookbook_box">
                                            <a href="">
                                                <div class="mz_lookbook_big">
                                                    <div class="mz_lookbook_big_img">
                                                        <img src="./img/./mz_lb_main1 .png" alt="">
                                                    </div>
                                                    <div class="mz_lookbook_big_text_wrap">
                                                        <div class="mz_lookbook_big_text">
                                                            <div class="text_top">
                                                                <p>CHATELAINE</p>
                                                            </div>
                                                            <div class="text_middle">
                                                                <p>2022 S/S NO.1</p>
                                                            </div>
                                                            <div class="right_arrow">
                                                                <img src="./img/ic-arrow-right-20px.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="mz_lookbook_row_wrap">
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row1-1.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>WaistLineShirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row1-2.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>Waist Line Shirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row1-3.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>Waist Line Shirt baaaaaaaam</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mz_lookbook_box">
                                            <a href="">
                                                <div class="mz_lookbook_big">
                                                    <div class="mz_lookbook_big_img">
                                                        <img src="./img/mz_lb_main2.png" alt="">
                                                    </div>
                                                    <div class="mz_lookbook_big_text_wrap">
                                                        <div class="mz_lookbook_big_text">
                                                            <div class="text_top">
                                                                <p>CHATELAINE</p>
                                                            </div>
                                                            <div class="text_middle">
                                                                <p>2022 S/S NO.2</p>
                                                            </div>
                                                            <div class="right_arrow">
                                                                <img src="./img/ic-arrow-right-20px.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="mz_lookbook_row_wrap">
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row2-1.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>캐시미어 케이블 머플러</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>89,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row2-2.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>캐시미어 케이블 머플러</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>89,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row2-3.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>캐시미어 케이블 머플러</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>89,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mz_lookbook_box">
                                            <a href="">
                                                <div class="mz_lookbook_big">
                                                    <div class="mz_lookbook_big_img">
                                                        <img src="./img/mz_lb_main3.png" alt="">
                                                    </div>
                                                    <div class="mz_lookbook_big_text_wrap">
                                                        <div class="mz_lookbook_big_text">
                                                            <div class="text_top">
                                                                <p>CHATELAINE</p>
                                                            </div>
                                                            <div class="text_middle">
                                                                <p>2021 FW NO.2</p>
                                                            </div>
                                                            <div class="right_arrow">
                                                                <img src="./img/ic-arrow-right-20px.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="mz_lookbook_row_wrap">
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row3-1.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>WaistLineShirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row3-2.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>Waist Line Shirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row3-3.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>Waist Line Shirt baaaaaaaam</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="tab03-03" class="tab">
                                        <div class="mz_lookbook_box">
                                            <a href="">
                                                <div class="mz_lookbook_big">
                                                    <div class="mz_lookbook_big_img">
                                                        <img src="./img/./mz_lb_main1 .png" alt="">
                                                    </div>
                                                    <div class="mz_lookbook_big_text_wrap">
                                                        <div class="mz_lookbook_big_text">
                                                            <div class="text_top">
                                                                <p>CHATELAINE</p>
                                                            </div>
                                                            <div class="text_middle">
                                                                <p>2022 S/S NO.1</p>
                                                            </div>
                                                            <div class="right_arrow">
                                                                <img src="./img/ic-arrow-right-20px.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="mz_lookbook_row_wrap">
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row1-1.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>WaistLineShirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row1-2.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>Waist Line Shirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row1-3.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>Waist Line Shirt baaaaaaaam</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mz_lookbook_box">
                                            <a href="">
                                                <div class="mz_lookbook_big">
                                                    <div class="mz_lookbook_big_img">
                                                        <img src="./img/mz_lb_main2.png" alt="">
                                                    </div>
                                                    <div class="mz_lookbook_big_text_wrap">
                                                        <div class="mz_lookbook_big_text">
                                                            <div class="text_top">
                                                                <p>CHATELAINE</p>
                                                            </div>
                                                            <div class="text_middle">
                                                                <p>2022 S/S NO.2</p>
                                                            </div>
                                                            <div class="right_arrow">
                                                                <img src="./img/ic-arrow-right-20px.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="mz_lookbook_row_wrap">
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row2-1.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>캐시미어 케이블 머플러</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>89,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row2-2.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>캐시미어 케이블 머플러</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>89,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row2-3.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>캐시미어 케이블 머플러</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>89,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mz_lookbook_box">
                                            <a href="">
                                                <div class="mz_lookbook_big">
                                                    <div class="mz_lookbook_big_img">
                                                        <img src="./img/mz_lb_main3.png" alt="">
                                                    </div>
                                                    <div class="mz_lookbook_big_text_wrap">
                                                        <div class="mz_lookbook_big_text">
                                                            <div class="text_top">
                                                                <p>CHATELAINE</p>
                                                            </div>
                                                            <div class="text_middle">
                                                                <p>2021 FW NO.2</p>
                                                            </div>
                                                            <div class="right_arrow">
                                                                <img src="./img/ic-arrow-right-20px.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="mz_lookbook_row_wrap">
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row3-1.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>WaistLineShirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row3-2.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>Waist Line Shirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row3-3.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>Waist Line Shirt baaaaaaaam</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="tab03-04" class="tab">
                                        <div class="mz_lookbook_box">
                                            <a href="">
                                                <div class="mz_lookbook_big">
                                                    <div class="mz_lookbook_big_img">
                                                        <img src="./img/./mz_lb_main1 .png" alt="">
                                                    </div>
                                                    <div class="mz_lookbook_big_text_wrap">
                                                        <div class="mz_lookbook_big_text">
                                                            <div class="text_top">
                                                                <p>CHATELAINE</p>
                                                            </div>
                                                            <div class="text_middle">
                                                                <p>2022 S/S NO.1</p>
                                                            </div>
                                                            <div class="right_arrow">
                                                                <img src="./img/ic-arrow-right-20px.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="mz_lookbook_row_wrap">
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row1-1.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>WaistLineShirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row1-2.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>Waist Line Shirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row1-3.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>Waist Line Shirt baaaaaaaam</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mz_lookbook_box">
                                            <a href="">
                                                <div class="mz_lookbook_big">
                                                    <div class="mz_lookbook_big_img">
                                                        <img src="./img/mz_lb_main2.png" alt="">
                                                    </div>
                                                    <div class="mz_lookbook_big_text_wrap">
                                                        <div class="mz_lookbook_big_text">
                                                            <div class="text_top">
                                                                <p>CHATELAINE</p>
                                                            </div>
                                                            <div class="text_middle">
                                                                <p>2022 S/S NO.2</p>
                                                            </div>
                                                            <div class="right_arrow">
                                                                <img src="./img/ic-arrow-right-20px.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="mz_lookbook_row_wrap">
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row2-1.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>캐시미어 케이블 머플러</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>89,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row2-2.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>캐시미어 케이블 머플러</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>89,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row2-3.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>캐시미어 케이블 머플러</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>89,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mz_lookbook_box">
                                            <a href="">
                                                <div class="mz_lookbook_big">
                                                    <div class="mz_lookbook_big_img">
                                                        <img src="./img/mz_lb_main3.png" alt="">
                                                    </div>
                                                    <div class="mz_lookbook_big_text_wrap">
                                                        <div class="mz_lookbook_big_text">
                                                            <div class="text_top">
                                                                <p>CHATELAINE</p>
                                                            </div>
                                                            <div class="text_middle">
                                                                <p>2021 FW NO.2</p>
                                                            </div>
                                                            <div class="right_arrow">
                                                                <img src="./img/ic-arrow-right-20px.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="mz_lookbook_row_wrap">
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row3-1.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>WaistLineShirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row3-2.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>Waist Line Shirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mz_lookbook_row">
                                                            <div class="mz_lookbook_row_img">
                                                                <img src="./img/mz_lb_row3-3.png" alt="">
                                                            </div>
                                                            <div class="mz_lookbook_row_text">
                                                                <div class="text_title">
                                                                    <p>Waist Line Shirt baaaaaaaam</p>
                                                                </div>
                                                                <div class="text_price">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include("./common.php/footer.php");?>
    </div>
</body>
<script>
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('.btn_gotop').show();
        } else {
            $('.btn_gotop').hide();
        }
    });
    $('.btn_gotop').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 400);
        return false;
    });//스크롤탑버튼 기능

    $('.home_category_tabnav>ul>li>a').click(function () {
        $('.home_category_tabcontent > div').hide().filter(this.hash).fadeIn();
        $('.home_category_tabnav>ul>li>a').removeClass('on');
        $(this).addClass('on');
        return false;
    }).filter(':eq(0)').click();//home섹션 안에 tab처리

    /* $('.best_category_tab>ul>li>a').click(function () {
        $('.best_category_tab').hide().filter(this.hash).fadeIn();
        $('.best_category_tab>ul>li>a').removeClass('active');
        $(this).addClass('active');
    return false;
    }).filter(':eq(0)').click();//?? */

    $('.best_category_tabnav>ul>li>a').click(function () {
        $('.best_category_tabcontent > div').hide().filter(this.hash).fadeIn();
        $('.best_category_tabnav>ul>li>a').removeClass('on');
        $(this).addClass('on');
        return false;
    }).filter(':eq(0)').click();//베스트 큰 tab 기능

    $('.best_category_tabnav2>ul>li>a').click(function () {
        $('.best_category_tabcontent2 > div').hide().filter(this.hash).fadeIn();
        $('.best_category_tabnav2>ul>li>a').removeClass('on');
        $(this).addClass('on');
        return false;
    }).filter(':eq(0)').click();//베스트 큰tab 안에 작은tab 기능

    $('.mz_lookbook_tabnav>ul>li>a').click(function () {
        $('.mz_lookbook_tabcontent > div').hide().filter(this.hash).fadeIn();
        $('.mz_lookbook_tabnav>ul>li>a').removeClass('on');
        $(this).addClass('on');
        return false;
    }).filter(':eq(0)').click();//매거진 lookbook 안에 탭기능

    $('.exhibition_category_tabnav>ul>li>a').click(function () {
        $('.exhibition_category_tabcontent > div').hide().filter(this.hash).fadeIn();
        $('.exhibition_category_tabnav>ul>li>a').removeClass('on');
        $(this).addClass('on');
        return false;
    }).filter(':eq(0)').click();//exhibition섹션 안에 tab처리

    $('.magazine_category_tabnav>ul>li>a').click(function () {
        $('.magazine_category_tabcontent > div').hide().filter(this.hash).fadeIn();
        $('.magazine_category_tabnav>ul>li>a').removeClass('on');
        $(this).addClass('on');
        return false;
    }).filter(':eq(0)').click();//magazine섹션 안에 tab처리

    $('.ico_search').click(function () {
        $("#main_page").css("display", "none")
        $("#search_page").css("display", "block")
    })

    $(".arrow_left_img").click(function () {
        $("#main_page").css("display", "block")
        $("#search_page").css("display", "none")
    });//서치바

    var num = 0;
    $(".fold").click(function () {
        if (num == 0) {
            $("#home_section_rec_brand>.rec_brand_item>.swiper-wrapper>.swiper-slide>.rec_brand_item_list_wrap>a").css("display", "block")
            $(this).children("p").text("접기")
            $(this).children("img").attr("src", "./img/ic-fold_up.png")
            num = 1;
        } else {
            $("#home_section_rec_brand>.rec_brand_item>.swiper-wrapper>.swiper-slide>.rec_brand_item_list_wrap>a").siblings("a:nth-child(n+3)").css("display", "none")
            $(this).children("p").text("상품 더보기")
            $(this).children("img").attr("src", "./img/ic-fold_down.png")
            num = 0;
        }
    })//홈섹션 안에 추천브랜드 펼치기 버튼

    var num = 0;
    $(".img_change").click(function () {
        if (num == 0) {
            $(this).attr("src", "./img/ic-like_pk.png");
            num = 1;
        } else {
            $(this).attr("src", "./img/ic-like.png");
            num = 0;
        }
    });//하트 이미지 변경

    $('#home_section_brand>ul>li').click(function () {
        $("#main_page").css("display", "none")
        $("#brand_page").css("display", "block")
    })

    $(".ico_left_arrow").click(function () {
        $("#main_page").css("display", "block")
        $("#brand_page").css("display", "none")
    });//브랜드 페이지

    $('.footer_ask>.service_center>button').click(function () {
        $("#service_center_page").css("display", "block")
    })

    $(".ico_left_arrow").click(function () {
        $("#service_center_page").css("display", "none");
    });//고객센터 페이지
</script>

</html>