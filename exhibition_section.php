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
                    <li><a href="./exhibition_section.php" class='on'>기획전/혜택</a></li>
                    <li><a href="./magazine_section.php">매거진</a></li>
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
            <section id="exhibition_section">
                <div class="swiper first-slide auto-slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide_text_wrap">
                            <a href="">
                                <img src="./img/exhibition_visual.png" alt="">
                                <div class="slide_text">
                                    <div class="slide_text_container">
                                        <div class="slide_text_middle">
                                            <p>2022</p>
                                            <p>스프링 컬렉션</p>
                                        </div>
                                        <div class="slide_text_bottom">
                                            <p>바우하우스 단독할인 + 10% 쿠폰</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide slide_text_wrap">
                            <a href="">
                                <img src="./img/exhibition_visual.png" alt="">
                                <div class="slide_text">
                                    <div class="slide_text_container">
                                        <div class="slide_text_middle">
                                            <p>2022</p>
                                            <p>스프링 컬렉션</p>
                                        </div>
                                        <div class="slide_text_bottom">
                                            <p>바우하우스 단독할인 + 10% 쿠폰</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide slide_text_wrap">
                            <a href="">
                                <img src="./img/exhibition_visual.png" alt="">
                                <div class="slide_text">
                                    <div class="slide_text_container">
                                        <div class="slide_text_middle">
                                            <p>2022</p>
                                            <p>스프링 컬렉션</p>
                                        </div>
                                        <div class="slide_text_bottom">
                                            <p>바우하우스 단독할인 + 10% 쿠폰</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="exhibition_category_tab">
                    <div class="exhibition_category_tab_wrap">
                        <div class="exhibition_category_tabnav">
                            <ul>
                                <li><a href="#tab01">전체</a></li>
                                <li><a href="#tab02">아우터</a></li>
                                <li><a href="#tab03">상의</a></li>
                                <li><a href="#tab04">하의</a></li>
                                <li><a href="#tab05">스커트</a></li>
                                <li><a href="#tab06">골프웨어</a></li>
                                <li><a href="#tab07">가방</a></li>
                                <li><a href="#tab08">모자</a></li>
                                <li><a href="#tab09">신발</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="exhibition_category_tabcontent">
                        <div id="tab01" class="tab">
                            <div class="exh_content_box">
                                <a href="">
                                    <img src="./img/exhibition_tab_img1.png" alt="">
                                    <div class="text_box">
                                        <div class="text_top">CHATELAINE</div>
                                        <div class="text_middle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="text_bottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exh_content_box">
                                <a href="">
                                    <img src="./img/exhibition_tab_img2.png" alt="">
                                    <div class="text_box">
                                        <div class="text_top">CHATELAINE</div>
                                        <div class="text_middle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="text_bottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exh_content_box">
                                <a href="">
                                    <img src="./img/exhibition_tab_img3.png" alt="">
                                    <div class="text_box">
                                        <div class="text_top">CHATELAINE</div>
                                        <div class="text_middle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="text_bottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="tab02" class="tab">
                            <div class="exh_content_box">
                                <a href="">
                                    <img src="./img/exhibition_tab_img1.png" alt="">
                                    <div class="text_box">
                                        <div class="text_top">CHATELAINE</div>
                                        <div class="text_middle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="text_bottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exh_content_box">
                                <a href="">
                                    <img src="./img/exhibition_tab_img2.png" alt="">
                                    <div class="text_box">
                                        <div class="text_top">CHATELAINE</div>
                                        <div class="text_middle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="text_bottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exh_content_box">
                                <a href="">
                                    <img src="./img/exhibition_tab_img3.png" alt="">
                                    <div class="text_box">
                                        <div class="text_top">CHATELAINE</div>
                                        <div class="text_middle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="text_bottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="tab03" class="tab">
                            <div class="exh_content_box">
                                <a href="">
                                    <img src="./img/exhibition_tab_img1.png" alt="">
                                    <div class="text_box">
                                        <div class="text_top">CHATELAINE</div>
                                        <div class="text_middle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="text_bottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exh_content_box">
                                <a href="">
                                    <img src="./img/exhibition_tab_img2.png" alt="">
                                    <div class="text_box">
                                        <div class="text_top">CHATELAINE</div>
                                        <div class="text_middle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="text_bottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exh_content_box">
                                <a href="">
                                    <img src="./img/exhibition_tab_img3.png" alt="">
                                    <div class="text_box">
                                        <div class="text_top">CHATELAINE</div>
                                        <div class="text_middle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="text_bottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="tab04" class="tab">
                            <div class="exh_content_box">
                                <a href="">
                                    <img src="./img/exhibition_tab_img1.png" alt="">
                                    <div class="text_box">
                                        <div class="text_top">CHATELAINE</div>
                                        <div class="text_middle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="text_bottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exh_content_box">
                                <a href="">
                                    <img src="./img/exhibition_tab_img2.png" alt="">
                                    <div class="text_box">
                                        <div class="text_top">CHATELAINE</div>
                                        <div class="text_middle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="text_bottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exh_content_box">
                                <a href="">
                                    <img src="./img/exhibition_tab_img3.png" alt="">
                                    <div class="text_box">
                                        <div class="text_top">CHATELAINE</div>
                                        <div class="text_middle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="text_bottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="tab05" class="tab">
                            <div class="exh_content_box">
                                <a href="">
                                    <img src="./img/exhibition_tab_img1.png" alt="">
                                    <div class="text_box">
                                        <div class="text_top">CHATELAINE</div>
                                        <div class="text_middle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="text_bottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exh_content_box">
                                <a href="">
                                    <img src="./img/exhibition_tab_img2.png" alt="">
                                    <div class="text_box">
                                        <div class="text_top">CHATELAINE</div>
                                        <div class="text_middle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="text_bottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exh_content_box">
                                <a href="">
                                    <img src="./img/exhibition_tab_img3.png" alt="">
                                    <div class="text_box">
                                        <div class="text_top">CHATELAINE</div>
                                        <div class="text_middle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="text_bottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="tab06" class="tab">
                            <div class="exh_content_box">
                                <a href="">
                                    <img src="./img/exhibition_tab_img1.png" alt="">
                                    <div class="text_box">
                                        <div class="text_top">CHATELAINE</div>
                                        <div class="text_middle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="text_bottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exh_content_box">
                                <a href="">
                                    <img src="./img/exhibition_tab_img2.png" alt="">
                                    <div class="text_box">
                                        <div class="text_top">CHATELAINE</div>
                                        <div class="text_middle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="text_bottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exh_content_box">
                                <a href="">
                                    <img src="./img/exhibition_tab_img3.png" alt="">
                                    <div class="text_box">
                                        <div class="text_top">CHATELAINE</div>
                                        <div class="text_middle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="text_bottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="tab07" class="tab">
                            <div class="exh_content_box">
                                <a href="">
                                    <img src="./img/exhibition_tab_img1.png" alt="">
                                    <div class="text_box">
                                        <div class="text_top">CHATELAINE</div>
                                        <div class="text_middle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="text_bottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exh_content_box">
                                <a href="">
                                    <img src="./img/exhibition_tab_img2.png" alt="">
                                    <div class="text_box">
                                        <div class="text_top">CHATELAINE</div>
                                        <div class="text_middle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="text_bottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exh_content_box">
                                <a href="">
                                    <img src="./img/exhibition_tab_img3.png" alt="">
                                    <div class="text_box">
                                        <div class="text_top">CHATELAINE</div>
                                        <div class="text_middle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="text_bottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="tab08" class="tab">
                            <div class="exh_content_box">
                                <a href="">
                                    <img src="./img/exhibition_tab_img1.png" alt="">
                                    <div class="text_box">
                                        <div class="text_top">CHATELAINE</div>
                                        <div class="text_middle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="text_bottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exh_content_box">
                                <a href="">
                                    <img src="./img/exhibition_tab_img2.png" alt="">
                                    <div class="text_box">
                                        <div class="text_top">CHATELAINE</div>
                                        <div class="text_middle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="text_bottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exh_content_box">
                                <a href="">
                                    <img src="./img/exhibition_tab_img3.png" alt="">
                                    <div class="text_box">
                                        <div class="text_top">CHATELAINE</div>
                                        <div class="text_middle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="text_bottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="tab09" class="tab">
                            <div class="exh_content_box">
                                <a href="">
                                    <img src="./img/exhibition_tab_img1.png" alt="">
                                    <div class="text_box">
                                        <div class="text_top">CHATELAINE</div>
                                        <div class="text_middle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="text_bottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exh_content_box">
                                <a href="">
                                    <img src="./img/exhibition_tab_img2.png" alt="">
                                    <div class="text_box">
                                        <div class="text_top">CHATELAINE</div>
                                        <div class="text_middle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="text_bottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exh_content_box">
                                <a href="">
                                    <img src="./img/exhibition_tab_img3.png" alt="">
                                    <div class="text_box">
                                        <div class="text_top">CHATELAINE</div>
                                        <div class="text_middle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="text_bottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
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