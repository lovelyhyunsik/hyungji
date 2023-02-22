<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAUHAUS</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard/dist/web/static/pretendard.css" />
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/brand_page.css">
    <link rel="stylesheet" href="./css/swiper.css">
    <link rel="stylesheet" href="./css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="./js/common.js"></script>

</head>

<body>
    <div id="mainPage">
        <?php include("./common.php/btn_gotop.php");?>
        <header id="header">
            <div class="headerTop">
                <h1 class="logo"><a href="./index.php"><span class="hide">바우하우스</span></a></h1>
                <div>
                    <a class="icoSearch" href="./search.php"><span class="hide">검색아이콘</span></a>
                    <a class="icoAlarm" href="./alarm.php"><span class="hide">알람아이콘</span><span class="numberTag">10</span></a>
                    <a class="icoShoppingbag" href="./shoppingbag.php"><span class="hide">쇼핑백아이콘</span><span class="numberTag">10</span></a>
                </div>
            </div>
            <h2 class="hide">메인메뉴</h2>
            <nav class="headerGnb">
                <ul>
                    <li><a href="./index.php">홈</a></li>
                    <li><a href="./best_section.php">베스트</a></li>
                    <li><a href="./exhibition_section.php">기획전/혜택</a></li>
                    <li><a href="./magazine_section.php" class='on'>매거진</a></li>
                </ul>
            </nav>
        </header>
        <nav id="bottomGnb">
            <ul>
                <li>
                    <a href="./bottom_gnb_menu.php" class="icoMenu">
                        <img src="./img/ic-menu.png" alt="하단메뉴아이콘">
                        <p>메뉴</p>
                    </a>
                </li>
                <li>
                    <a href="./index.php" class="icoHome">
                        <img src="./img/ic-home-active .png" alt="하단홈아이콘">
                        <p>홈</p>
                    </a>
                </li>
                <li>
                    <a href="./bottom_gnb_recent.php" class="icoRecent">
                        <img src="./img/ic-recent.png" alt="하단최근아이콘">
                        <p>최근 본</p>
                    </a>
                </li>
                <li>
                    <a href="./bottom_gnb_like.php" class="icoLike">
                        <img src="./img/ic-blike.png" alt="하단'좋아요'아이콘">
                        <p>찜</p>
                    </a>
                </li>
                <li>
                    <a href="./bottom_gnb_mypage_member.php" class="icoMypage">
                        <img src="./img/ic-my.png" alt="하단마이페이지아이콘">
                        <p>마이</p>
                    </a>
                </li>
            </ul>
        </nav>
        <div id="sectionArea">
            <section id="magazineSection">
                <div class="swiper first-slide auto-slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide_text_wrap">
                            <a href="">
                                <img src="./img/slide/magazine_visual.png" alt="">
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
                                <img src="./img/slide/magazine_visual.png" alt="">
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
                                <img src="./img/slide/magazine_visual.png" alt="">
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
                <div class="magazineCategoryTab">
                    <div class="magazineCategoryTabWrap">
                        <div class="magazineCategoryTabnav">
                            <ul>
                                <li><a href="#tab01">라떼센스</a></li>
                                <li><a href="#tab02">써니라떼</a></li>
                                <li><a href="#tab03">LOOK BOOK</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="magazineCategoryTabcontent">
                        <div id="tab01" class="tab">
                            <div class="mzLatteBox">
                                <a href="./mz_latte1.php">
                                    <div class="imgBox">
                                        <img src="./img/mz_latte1.png" alt="">
                                        <div class="imgText">
                                            <div class="imgTextContainer">
                                                <p>#코디</p>
                                                <p>#스타일링</p>
                                                <p>#환절기</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="textBox">
                                        <div class="textTop">
                                            <p>꽃샘추위에 대적할 환절기</p>
                                        </div>
                                        <div class="textBottom">
                                            <div class="textBottomArea">
                                                <p>따뜻함과 스타일, 모두 잡는 스타일링 비법</p>
                                            </div>
                                            <img src="./img/ic-arrow-right-20px.png" alt="">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <h3>JANUARY 2022</h3>
                            <div class="mzLatteBox">
                                <a href="">
                                    <div class="imgBox">
                                        <img src="./img/mz_latte2.png" alt="">
                                        <div class="imgText">
                                            <div class="imgTextContainer">
                                                <p>#HOT</p>
                                                <p>#22 S/S</p>
                                                <p>#봄신상</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="textBox">
                                        <div class="textTop">
                                            <p>편안함의 미학</p>
                                        </div>
                                        <div class="textBottom">
                                            <div class="textBottomArea">
                                                <p>따뜻해지는 날씨,편안하고 가벼운</p>
                                                <p>스니커즈로 준비해보세요</p>
                                            </div>
                                            <img src="./img/ic-arrow-right-20px.png" alt="">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="mzLatteBox">
                                <a href="">
                                    <div class="imgBox">
                                        <img src="./img/mz_latte3.png" alt="">
                                        <div class="imgText">
                                            <div class="imgTextContainer">
                                                <p>#코디</p>
                                                <p>#스타일링</p>
                                                <p>#환절기</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="textBox">
                                        <div class="textTop">
                                            <p>봄내음 가득한 샤트렌 신상 모음전</p>
                                        </div>
                                        <div class="textBottom">
                                            <div class="textBottomArea">
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
                            <div class="mzSunLatteBox">
                                <a href="./mz_imgText.php">
                                    <div class="imgBox">
                                        <img src="./img/mz_sun_latte1.png" alt="">
                                    </div>
                                    <div class="textBox">
                                        <div class="Dday">
                                            <p>NOW</p>
                                        </div>
                                        <div class="textTop">
                                            <p>[써니라떼] LIVE X 블랙프라이데이</p>
                                        </div>
                                        <div class="textMiddle">
                                            <p>2022.04.12 - 2022.08.31</p>
                                        </div>
                                        <div class="textBottom">
                                            <p>할인</p>
                                            <p>스타일링</p>
                                            <p>기본템</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="mzSunLatteBox">
                                <a href="./mz_imgText.php">
                                    <div class="imgBox">
                                        <img src="./img/mz_sun_latte2.png" alt="">
                                    </div>
                                    <div class="textBox">
                                        <div class="Dday">
                                            <p>D-3</p>
                                        </div>
                                        <div class="textTop">
                                            <p>[써니라떼] 샤트렌으로 근본코디 완성하기</p>
                                        </div>
                                        <div class="textMiddle">
                                            <p>2022.04.12 - 2022.08.31</p>
                                        </div>
                                        <div class="textBottom">
                                            <p>코디</p>
                                            <p>스타일링</p>
                                            <p>기본템</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="mzSunLatteBox">
                                <a href="./mz_imgText.php">
                                    <div class="imgBox">
                                        <img src="./img/mz_sun_latte3.png" alt="">
                                    </div>
                                    <div class="textBox">
                                        <div class="Dday">
                                            <p class="grey">END</p>
                                        </div>
                                        <div class="textTop">
                                            <p>[써니라떼] 더 그레이스 모델 개인소장 모음집</p>
                                        </div>
                                        <div class="textMiddle">
                                            <p>2022.04.12 - 2022.08.31</p>
                                        </div>
                                        <div class="textBottom">
                                            <p>코디</p>
                                            <p>스타일링</p>
                                            <p>기본템</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="mzSunLatteBox">
                                <a href="./mz_imgText.php">
                                    <div class="imgBox">
                                        <img src="./img/mz_sun_latte4.png" alt="">
                                    </div>
                                    <div class="textBox">
                                        <div class="Dday">
                                            <p class="grey">END</p>
                                        </div>
                                        <div class="textTop">
                                            <p>[써니라떼] 크로커다일 레이디와 함께하는 월동준비! 가성비 니트부터 차분한 무드의 데일리 겨울코디 7가지</p>
                                        </div>
                                        <div class="textMiddle">
                                            <p>2022.04.12 - 2022.08.31</p>
                                        </div>
                                        <div class="textBottom">
                                            <p>크로커다일 레이디</p>
                                            <p>스타일링</p>
                                            <p>겨울</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="tab03" class="tab">
                            <div class="mzLookbookTabWrap">
                                <div class="mzLookbookTabnav">
                                    <ul>
                                        <li><a href="#tab03-01" class="on">ALL</a></li>
                                        <li><a href="#tab03-02">CHATELAINE</a></li>
                                        <li><a href="#tab03-03">CROCODILE LADY</a></li>
                                        <li><a href="#tab03-04">OLIVIA HASSLER </a></li>
                                    </ul>
                                </div>
                                <div class="mzLookbookTabcontent">
                                    <div id="tab03-01" class="tab">
                                        <div class="mzLookbookBox">
                                            <a href="./mz_lookbook.php">
                                                <div class="mzLookbookBig">
                                                    <div class="mzLookbookBigImg">
                                                        <img src="./img/./mz_lb_main1 .png" alt="">
                                                    </div>
                                                    <div class="mzLookbookBigTextWrap">
                                                        <div class="mzLookbookBigText">
                                                            <div class="textTop">
                                                                <p>CHATELAINE</p>
                                                            </div>
                                                            <div class="textMiddle">
                                                                <p>2022 S/S NO.1</p>
                                                            </div>
                                                            <div class="rightArrow">
                                                                <img src="./img/ic-arrow-right-20px.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="mzLookbookRowWrap">
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row1-1.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>WaistLineShirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row1-2.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>Waist Line Shirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row1-3.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>Waist Line Shirt baaaaaaaam</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mzLookbookBox">
                                            <a href="">
                                                <div class="mzLookbookBig">
                                                    <div class="mzLookbookBigImg">
                                                        <img src="./img/mz_lb_main2.png" alt="">
                                                    </div>
                                                    <div class="mzLookbookBigTextWrap">
                                                        <div class="mzLookbookBigText">
                                                            <div class="textTop">
                                                                <p>CHATELAINE</p>
                                                            </div>
                                                            <div class="textMiddle">
                                                                <p>2022 S/S NO.2</p>
                                                            </div>
                                                            <div class="rightArrow">
                                                                <img src="./img/ic-arrow-right-20px.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="mzLookbookRowWrap">
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row2-1.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>캐시미어 케이블 머플러</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>89,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row2-2.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>캐시미어 케이블 머플러</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>89,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row2-3.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>캐시미어 케이블 머플러</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>89,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mzLookbookBox">
                                            <a href="">
                                                <div class="mzLookbookBig">
                                                    <div class="mzLookbookBigImg">
                                                        <img src="./img/mz_lb_main3.png" alt="">
                                                    </div>
                                                    <div class="mzLookbookBigTextWrap">
                                                        <div class="mzLookbookBigText">
                                                            <div class="textTop">
                                                                <p>CHATELAINE</p>
                                                            </div>
                                                            <div class="textMiddle">
                                                                <p>2021 FW NO.2</p>
                                                            </div>
                                                            <div class="rightArrow">
                                                                <img src="./img/ic-arrow-right-20px.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="mzLookbookRowWrap">
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row3-1.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>WaistLineShirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row3-2.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>Waist Line Shirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row3-3.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>Waist Line Shirt baaaaaaaam</p>
                                                                </div>
                                                                <div class="textPrice">
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
                                        <div class="mzLookbookBox">
                                            <a href="">
                                                <div class="mzLookbookBig">
                                                    <div class="mzLookbookBigImg">
                                                        <img src="./img/./mz_lb_main1 .png" alt="">
                                                    </div>
                                                    <div class="mzLookbookBigTextWrap">
                                                        <div class="mzLookbookBigText">
                                                            <div class="textTop">
                                                                <p>CHATELAINE</p>
                                                            </div>
                                                            <div class="textMiddle">
                                                                <p>2022 S/S NO.1</p>
                                                            </div>
                                                            <div class="rightArrow">
                                                                <img src="./img/ic-arrow-right-20px.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="mzLookbookRowWrap">
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row1-1.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>WaistLineShirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row1-2.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>Waist Line Shirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row1-3.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>Waist Line Shirt baaaaaaaam</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mzLookbookBox">
                                            <a href="">
                                                <div class="mzLookbookBig">
                                                    <div class="mzLookbookBigImg">
                                                        <img src="./img/mz_lb_main2.png" alt="">
                                                    </div>
                                                    <div class="mzLookbookBigTextWrap">
                                                        <div class="mzLookbookBigText">
                                                            <div class="textTop">
                                                                <p>CHATELAINE</p>
                                                            </div>
                                                            <div class="textMiddle">
                                                                <p>2022 S/S NO.2</p>
                                                            </div>
                                                            <div class="rightArrow">
                                                                <img src="./img/ic-arrow-right-20px.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="mzLookbookRowWrap">
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row2-1.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>캐시미어 케이블 머플러</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>89,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row2-2.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>캐시미어 케이블 머플러</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>89,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row2-3.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>캐시미어 케이블 머플러</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>89,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mzLookbookBox">
                                            <a href="">
                                                <div class="mzLookbookBig">
                                                    <div class="mzLookbookBigImg">
                                                        <img src="./img/mz_lb_main3.png" alt="">
                                                    </div>
                                                    <div class="mzLookbookBigTextWrap">
                                                        <div class="mzLookbookBigText">
                                                            <div class="textTop">
                                                                <p>CHATELAINE</p>
                                                            </div>
                                                            <div class="textMiddle">
                                                                <p>2021 FW NO.2</p>
                                                            </div>
                                                            <div class="rightArrow">
                                                                <img src="./img/ic-arrow-right-20px.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="mzLookbookRowWrap">
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row3-1.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>WaistLineShirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row3-2.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>Waist Line Shirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row3-3.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>Waist Line Shirt baaaaaaaam</p>
                                                                </div>
                                                                <div class="textPrice">
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
                                        <div class="mzLookbookBox">
                                            <a href="">
                                                <div class="mzLookbookBig">
                                                    <div class="mzLookbookBigImg">
                                                        <img src="./img/./mz_lb_main1 .png" alt="">
                                                    </div>
                                                    <div class="mzLookbookBigTextWrap">
                                                        <div class="mzLookbookBigText">
                                                            <div class="textTop">
                                                                <p>CHATELAINE</p>
                                                            </div>
                                                            <div class="textMiddle">
                                                                <p>2022 S/S NO.1</p>
                                                            </div>
                                                            <div class="rightArrow">
                                                                <img src="./img/ic-arrow-right-20px.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="mzLookbookRowWrap">
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row1-1.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>WaistLineShirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row1-2.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>Waist Line Shirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row1-3.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>Waist Line Shirt baaaaaaaam</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mzLookbookBox">
                                            <a href="">
                                                <div class="mzLookbookBig">
                                                    <div class="mzLookbookBigImg">
                                                        <img src="./img/mz_lb_main2.png" alt="">
                                                    </div>
                                                    <div class="mzLookbookBigTextWrap">
                                                        <div class="mzLookbookBigText">
                                                            <div class="textTop">
                                                                <p>CHATELAINE</p>
                                                            </div>
                                                            <div class="textMiddle">
                                                                <p>2022 S/S NO.2</p>
                                                            </div>
                                                            <div class="rightArrow">
                                                                <img src="./img/ic-arrow-right-20px.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="mzLookbookRowWrap">
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row2-1.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>캐시미어 케이블 머플러</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>89,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row2-2.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>캐시미어 케이블 머플러</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>89,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row2-3.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>캐시미어 케이블 머플러</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>89,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mzLookbookBox">
                                            <a href="">
                                                <div class="mzLookbookBig">
                                                    <div class="mzLookbookBigImg">
                                                        <img src="./img/mz_lb_main3.png" alt="">
                                                    </div>
                                                    <div class="mzLookbookBigTextWrap">
                                                        <div class="mzLookbookBigText">
                                                            <div class="textTop">
                                                                <p>CHATELAINE</p>
                                                            </div>
                                                            <div class="textMiddle">
                                                                <p>2021 FW NO.2</p>
                                                            </div>
                                                            <div class="rightArrow">
                                                                <img src="./img/ic-arrow-right-20px.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="mzLookbookRowWrap">
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row3-1.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>WaistLineShirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row3-2.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>Waist Line Shirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row3-3.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>Waist Line Shirt baaaaaaaam</p>
                                                                </div>
                                                                <div class="textPrice">
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
                                        <div class="mzLookbookBox">
                                            <a href="">
                                                <div class="mzLookbookBig">
                                                    <div class="mzLookbookBigImg">
                                                        <img src="./img/mz_lb_main1 .png" alt="">
                                                    </div>
                                                    <div class="mzLookbookBigTextWrap">
                                                        <div class="mzLookbookBigText">
                                                            <div class="textTop">
                                                                <p>CHATELAINE</p>
                                                            </div>
                                                            <div class="textMiddle">
                                                                <p>2022 S/S NO.1</p>
                                                            </div>
                                                            <div class="rightArrow">
                                                                <img src="./img/ic-arrow-right-20px.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="mzLookbookRowWrap">
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row1-1.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>WaistLineShirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row1-2.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>Waist Line Shirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row1-3.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>Waist Line Shirt baaaaaaaam</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mzLookbookBox">
                                            <a href="">
                                                <div class="mzLookbookBig">
                                                    <div class="mzLookbookBigImg">
                                                        <img src="./img/mz_lb_main2.png" alt="">
                                                    </div>
                                                    <div class="mzLookbookBigTextWrap">
                                                        <div class="mzLookbookBigText">
                                                            <div class="textTop">
                                                                <p>CHATELAINE</p>
                                                            </div>
                                                            <div class="textMiddle">
                                                                <p>2022 S/S NO.2</p>
                                                            </div>
                                                            <div class="rightArrow">
                                                                <img src="./img/ic-arrow-right-20px.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="mzLookbookRowWrap">
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row2-1.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>캐시미어 케이블 머플러</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>89,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row2-2.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>캐시미어 케이블 머플러</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>89,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row2-3.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>캐시미어 케이블 머플러</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>89,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mzLookbookBox">
                                            <a href="">
                                                <div class="mzLookbookBig">
                                                    <div class="mzLookbookBigImg">
                                                        <img src="./img/mz_lb_main3.png" alt="">
                                                    </div>
                                                    <div class="mzLookbookBigTextWrap">
                                                        <div class="mzLookbookBigText">
                                                            <div class="textTop">
                                                                <p>CHATELAINE</p>
                                                            </div>
                                                            <div class="textMiddle">
                                                                <p>2021 FW NO.2</p>
                                                            </div>
                                                            <div class="rightArrow">
                                                                <img src="./img/ic-arrow-right-20px.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="mzLookbookRowWrap">
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row3-1.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>WaistLineShirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row3-2.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>Waist Line Shirtbaaaaaaaam</p>
                                                                </div>
                                                                <div class="textPrice">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="mzLookbookRow">
                                                            <div class="mzLookbookRowImg">
                                                                <img src="./img/mz_lb_row3-3.png" alt="">
                                                            </div>
                                                            <div class="mzLookbookRowText">
                                                                <div class="textTitle">
                                                                    <p>Waist Line Shirt baaaaaaaam</p>
                                                                </div>
                                                                <div class="textPrice">
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
    $('.magazineCategoryTabnav>ul>li>a').click(function () {
        $('.magazineCategoryTabcontent > div').hide().filter(this.hash).fadeIn();
        $('.magazineCategoryTabnav>ul>li>a').removeClass('on');
        $(this).addClass('on');
        return false;
    }).filter(':eq(0)').click();//magazine섹션 안에 tab처리

    $('.mzLookbookTabnav>ul>li>a').click(function () {
        $('.mzLookbookTabcontent > div').hide().filter(this.hash).fadeIn();
        $('.mzLookbookTabnav>ul>li>a').removeClass('on');
        $(this).addClass('on');
        return false;
    }).filter(':eq(0)').click();//매거진 lookbook 안에 탭기능
</script>

</html>