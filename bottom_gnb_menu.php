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
    <link rel="stylesheet" href="./css/swiper.css">
    <link rel="stylesheet" href="./css/bottom_gnb_menu.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>

<body>
    <?php include("./common.php/btn_gotop.php");?>
    <div id="main_page">
        <header id="header">
            <div class="header_top">
                <h1 class="logo_bk"><a href="./index.php"><span class="hide"> 바우하우스</span></a></h1>
                <div>
                    <a href="./search.php" class="ico_search"><span class="hide">검색아이콘</span></a>
                    <a href="" class="ico_shoppingbag"><span class="hide">쇼핑백아이콘</span> <span class="number_tag">10</span></a>
                </div>
            </div>
            <h2 class="hide">메인메뉴</h2>
        </header>
        <nav id="bottom_gnb">
            <ul>
                <li>
                    <a href="./bottom_gnb_menu.php" class="ico_menu">
                        <img src="./img/ic-menu-active.png" alt="하단메뉴아이콘">
                        <p>메뉴</p>
                    </a>
                </li>
                <li>
                    <a href="./index.php" class="ico_home">
                        <img src="./img/ic-home.png" alt="하단홈아이콘">
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
        <div class="menu_tab_wrap">
            <div class="menu_tab_nav">
                <ul>
                    <li><a href="#menu_tab1" class="on">카테고리</a></li>
                    <li><a href="#menu_tab2">브랜드</a></li>
                </ul>
            </div>
            <div class="menu_tab_content">
                <div id="menu_tab1" class="tab">
                    <section id="quick_menu_wrap">
                        <ul class="quick_menu_five">
                            <li class="quick_menu_item">
                                <a href="./quick-ic_page.php">
                                    <span>
                                        <img src="./img/outer.png" alt="아우터아이콘">
                                    </span>
                                    <p>아우터</p>
                                </a>
                            </li>
                            <li class="quick_menu_item">
                                <a href="./quick-ic_page.php">
                                    <span>
                                        <img src="./img/top.png" alt="상의아이콘">
                                    </span>
                                    <p>상의</p>
                                </a>
                            </li>
                            <li class="quick_menu_item">
                                <a href="./quick-ic_page.php">
                                    <span>
                                        <img src="./img/bottom.png" alt="하의아이콘">
                                    </span>
                                    <p>하의</p>
                                </a>
                            </li>
                            <li class="quick_menu_item">
                                <a href="./quick-ic_page.php">
                                    <span>
                                        <img src="./img/dress.png" alt="원피스아이콘">
                                    </span>
                                    <p>원피스</p>
                                </a>
                            </li>
                            <li class="quick_menu_item">
                                <a href="./quick-ic_page.php">
                                    <span>
                                        <img src="./img/skirt.png" alt="스커트아이콘">
                                    </span>
                                    <p>스커트</p>
                                </a>
                            </li>
                            <li class="quick_menu_item">
                                <a href="./quick-ic_page.php">
                                    <span>
                                        <img src="./img/golf wear.png" alt="골프웨어아이콘">
                                    </span>
                                    <p>골프웨어</p>
                                </a>
                            </li>
                            <li class="quick_menu_item">
                                <a href="./quick-ic_page.php">
                                    <span>
                                        <img src="./img/bag.png" alt="가방아이콘">
                                    </span>
                                    <p>가방</p>
                                </a>
                            </li>
                            <li class="quick_menu_item">
                                <a href="./quick-ic_page.php">    
                                    <span>
                                        <img src="./img/hat.png" alt="모자아이콘">
                                    </span>
                                    <p>모자</p>
                                </a>
                            </li>
                            <li class="quick_menu_item">
                                <a href="./quick-ic_page.php">
                                    <span>
                                        <img src="./img/shoes.png" alt="신발아이콘">
                                    </span>
                                    <p>신발</p>
                                </a>
                            </li>
                        </ul>
                    </section>
                    <section id="menu_exhibition">
                        <ul>
                            <li>
                                <h3>기획전</h3>
                            </li>
                            <li><a href="./exhibition_section.php">전체보기</a></li>
                        </ul>
                        <div class="exhibition_content">
                            <ul>
                                <li>
                                    <a href="./exhibition_detail.php">
                                        <div class="img_area"><img src="./img/menu_ex_img1.png" alt=""></div>
                                        <div class="text_area">
                                            <div class="text_top">
                                                <p>22SS 겨울 신상 컬렉션!!!!!!!!!!!!!!!</p>
                                            </div>
                                            <div class="text_bottom">
                                                <P>그들의 장바구니를 살펴보 그들의 장바구니를 살펴보기</P>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="./exhibition_detail.php">
                                        <div class="img_area"><img src="./img//menu_ex_img2.png" alt=""></div>
                                        <div class="text_area">
                                            <div class="text_top">
                                                <p>22SS 겨울 신상 컬렉션!</p>
                                            </div>
                                            <div class="text_bottom">
                                                <P>그들의 장바구니를 살펴보 그들의 장바구니를 살펴보기</P>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="./exhibition_detail.php">
                                        <div class="img_area"><img src="./img/menu_ex_img1.png" alt=""></div>
                                        <div class="text_area">
                                            <div class="text_top">
                                                <p>22SS 겨울 신상 컬렉션!</p>
                                            </div>
                                            <div class="text_bottom">
                                                <P>그들의 장바구니를 살펴보 그들의 장바구니를 살펴보기</P>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <section id="menu_magazine">
                        <ul>
                            <li>
                                <h3>매거진</h3>
                            </li>
                            <li><a href="./magazine_section.php">전체보기</a></li>
                        </ul>
                        <div class="magazine_content">
                            <a href="./mz_latte1.php">
                                <div class="magazine_list">
                                    <img src="./img/manu_magazine_img1.png" alt="">
                                    <div class="magazine_text">
                                        <div class="text_top">
                                            <p>라떼센스</p>
                                        </div>
                                        <div class="text_middle">
                                            <p>에디터들의 왓츠 인 마이쇼쇼쇼쇼쇼쇼</p>
                                        </div>
                                        <div class="text_bottom">
                                            <p>그들의 장바구니를 살펴보자아 그들의 장바구니를 살펴보자자자자자</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="./mz_latte1.php">
                                <div class="magazine_list">
                                    <img src="./img/manu_magazine_img2.png" alt="">
                                    <div class="magazine_text">
                                        <div class="text_top">
                                            <p>라떼센스</p>
                                        </div>
                                        <div class="text_middle">
                                            <p>에디터들의 왓츠 인 마이쇼쇼쇼쇼쇼쇼</p>
                                        </div>
                                        <div class="text_bottom">
                                            <p>그들의 장바구니를 살펴보자아 그들의 장바구니를 살펴보자자자자자</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="./mz_latte1.php">
                                <div class="magazine_list">
                                    <img src="./img/manu_magazine_img3.png" alt="">
                                    <div class="magazine_text">
                                        <div class="text_top">
                                            <p>라떼센스</p>
                                        </div>
                                        <div class="text_middle">
                                            <p>에디터들의 왓츠 인 마이쇼쇼쇼쇼쇼쇼</p>
                                        </div>
                                        <div class="text_bottom">
                                            <p>그들의 장바구니를 살펴보자아 그들의 장바구니를 살펴보자자자자자</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </section>
                    <section id="footer">
                        <ul class="footer_ask">
                            <li class="service_center"><a href="./service_center_page.php"><span>고객센터</span></a></li>
                            <li class="one_inquiry"><a href="./one_on_one_write.php"><span>1:1 문의</span></a></li>
                            <li class="find_IdPw"><a href="./id_find.php"><span>ID/PW 찾기</span></a></li>
                        </ul>
                    </section>
                </div>
                <div id="menu_tab2" class="tab">
                    <section id="brand_img_wrap">
                        <ul>
                            <li><a href="./brand_page.php"><img src="./img/brand_1.png" alt=""></a></li>
                            <li><a href="./brand_page.php"><img src="./img/brand_2.png" alt=""></a></li>
                            <li><a href="./brand_page.php"><img src="./img/brand_3.png" alt=""></a></li>
                            <li><a href="./brand_page.php"><img src="./img/brand_4.png" alt=""></a></li>
                            <li><a href="./brand_page.php"><img src="./img/brand_4.png" alt=""></a></li>
                            <li><a href="./brand_page.php"><img src="./img/brand_5.png" alt=""></a></li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $('.menu_tab_nav>ul>li>a').click(function () {
        $('.menu_tab_content > div').hide().filter(this.hash).fadeIn();
        $('.menu_tab_nav>ul>li>a').removeClass('on');
        $(this).addClass('on');
        return false;
    }).filter(':eq(0)').click();

    var FirstScroll = 0;
    var prevScrollTop = $(window).scrollTop(),
        tp = $(window).scrollTop();

    $(window).scroll(function (e) {
        tp = $(this).scrollTop();

        if (tp > prevScrollTop) {
            $('#bottom_gnb').addClass('active')
        } else if (tp < prevScrollTop) {
            $('#bottom_gnb').removeClass('active')
        }
        prevScrollTop = tp;

    });
    
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
});//스크롤 탑 기능

    $('.ico_search').click(function () {
        $("#main_page").css("display", "none")
        $("#search_page").css("display", "block")
    })

    $(".arrow_left_img").click(function () {
        $("#main_page").css("display", "block")
        $("#search_page").css("display", "none")
    })//서치바

    $('#brand_img_wrap>ul>li>button').click(function () {
        $("#brand_page").css("display", "block")
    })

    $(".ico_left_arrow").click(function () {
        $("#brand_page").css("display", "none");
    });//브랜드 페이지

    $('.quick_menu_item>button').click(function () {
        $("#quick-ic_page").css("display", "block")
    })

    $(".ico_left_arrow").click(function () {
        $("#quick-ic_page").css("display", "none");
    });//퀵아이콘 페이지

    $('.exhibition_content>ul>li>button').click(function () {
        $("#exhibition_detail").css("display", "block")
    })

    $(".ico_left_arrow").click(function () {
        $("#exhibition_detail").css("display", "none");
    });//기획전 페이지

    $('.magazine_content>button').click(function () {
        $("#mz_latte1").css("display", "block")
    })

    $(".ico_left_arrow").click(function () {
        $("#mz_latte1").css("display", "none");
    });//매거진 페이지


    $('.footer_ask>.service_center>button').click(function () {
        $("#service_center_page").css("display", "block")
    })

    $(".ico_left_arrow").click(function () {
        $("#service_center_page").css("display", "none");
    });//고객센터 페이지
</script>

</html>