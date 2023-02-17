<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard/dist/web/static/pretendard.css" />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/like.css">
    <link rel="stylesheet" href="css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>

<body>
    <?php include("./common.php/btn_gotop.php");?>
    <div id="main_page">
        <header id="header_type2">
            <div>
                <p>찜한 상품</p>
                <div class="header_ico_wrap">
                    <div class="header_ico">
                        <a href="#" class="ico_search"><span class="hide">검색</span></a>
                        <a href="" class="ico_shoppingbag"><span class="hide">쇼핑백</span></a>
                    </div>
                </div>
            </div>
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
                        <img src="./img/ic-like-active.png" alt="하단'좋아요'아이콘">
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
        <div class="tab_wrap">
            <div class="tab_container">
                <div class="tabnav">
                    <ul>
                        <li><a href="#tab01" class="on">상품 <span class="counting">0</span></a></li>
                        <li><a href="#tab02">브랜드 <span class="counting">0</span></a></li>
                    </ul>
                </div>
                <div class="tabcontent">
                    <div id="tab01" class="tab">
                        <section id="no_item"><!-- display:none -->
                            <p>최근 본 상품이 없습니다.</p>
                            <p>오늘의 베스트 상품에서 추가해 보세요.</p>
                            <a href="./best_section.php">베스트 상품 보러가기</a>
                        </section>
                        <section id="item">
                            <div class="checkFilter">
                                <label>
                                    <input type="checkbox" id="check_btn">
                                    <span>품절제외</span>
                                </label>
                                <div class="popup">
                                    <button class="sort">
                                        <p>인기순</p>
                                        <img src="./img/ic-sort.png" alt="">
                                    </button>
                                </div>
                            </div>
                            <div class="item_list_wrap">
                                <ul>
                                    <li class="soldOut">
                                        <div class="item_list">
                                            <div class="item_img">
                                                <div class="soldOut">SOLD OUT</div>
                                                <a href="">
                                                    <img src="./img/item_1.png" alt="">
                                                </a>
                                                <div class="item_like">
                                                    <button>
                                                        <img src="./img/ic-like.png" alt="" class="img_change">
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="item_list_text">
                                                <a href="">
                                                    <div class="item_list_text_container">
                                                        <div class="text_name">
                                                            <p>CHATELAINE</p>
                                                        </div>
                                                        <div class="text_sub">
                                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                                Deleniti
                                                                eius
                                                                praesentium a
                                                                quas, rem facilis maxime delectus ducimus nobis,
                                                                similique neque
                                                                expedita in
                                                                autem
                                                                quo. Dolores atque repellat recusandae minima!</p>
                                                        </div>
                                                        <div class="text_percentPrice">
                                                            <div class="percent">
                                                                <p>20<span>%</span></p>
                                                            </div>
                                                            <div class="price">
                                                                <p>215,000</p>
                                                            </div>
                                                            <div class="discount_price">
                                                                <p>215,000</p>
                                                            </div>
                                                        </div>
                                                        <div class="coupon">
                                                            <p>쿠폰</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item_list">
                                            <div class="item_img">
                                                <a href="">
                                                    <img src="./img/item_1.png" alt="">
                                                </a>
                                                <div class="item_like">
                                                    <button>
                                                        <img src="./img/ic-like.png" alt="" class="img_change">
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="item_list_text">
                                                <a href="">
                                                    <div class="item_list_text_container">
                                                        <div class="text_name">
                                                            <p>CHATELAINE</p>
                                                        </div>
                                                        <div class="text_sub">
                                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                                Deleniti
                                                                eius
                                                                praesentium a
                                                                quas, rem facilis maxime delectus ducimus nobis,
                                                                similique neque
                                                                expedita in
                                                                autem
                                                                quo. Dolores atque repellat recusandae minima!</p>
                                                        </div>
                                                        <div class="text_percentPrice">
                                                            <div class="percent">
                                                                <p>20<span>%</span></p>
                                                            </div>
                                                            <div class="price">
                                                                <p>215,000</p>
                                                            </div>
                                                            <div class="discount_price">
                                                                <p>215,000</p>
                                                            </div>
                                                        </div>
                                                        <div class="coupon">
                                                            <p>쿠폰</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item_list">
                                            <div class="item_img">
                                                <a href="">
                                                    <img src="./img/item_1.png" alt="">
                                                </a>
                                                <div class="item_like">
                                                    <button>
                                                        <img src="./img/ic-like.png" alt="" class="img_change">
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="item_list_text">
                                                <a href="">
                                                    <div class="item_list_text_container">
                                                        <div class="text_name">
                                                            <p>CHATELAINE</p>
                                                        </div>
                                                        <div class="text_sub">
                                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                                Deleniti
                                                                eius
                                                                praesentium a
                                                                quas, rem facilis maxime delectus ducimus nobis,
                                                                similique neque
                                                                expedita in
                                                                autem
                                                                quo. Dolores atque repellat recusandae minima!</p>
                                                        </div>
                                                        <div class="text_percentPrice">
                                                            <div class="percent">
                                                                <p>20<span>%</span></p>
                                                            </div>
                                                            <div class="price">
                                                                <p>215,000</p>
                                                            </div>
                                                            <div class="discount_price">
                                                                <p>215,000</p>
                                                            </div>
                                                        </div>
                                                        <div class="coupon">
                                                            <p>쿠폰</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item_list">
                                            <div class="item_img">
                                                <a href="">
                                                    <img src="./img/item_1.png" alt="">
                                                </a>
                                                <div class="item_like">
                                                    <button>
                                                        <img src="./img/ic-like.png" alt="" class="img_change">
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="item_list_text">
                                                <a href="">
                                                    <div class="item_list_text_container">
                                                        <div class="text_name">
                                                            <p>CHATELAINE</p>
                                                        </div>
                                                        <div class="text_sub">
                                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                                Deleniti
                                                                eius
                                                                praesentium a
                                                                quas, rem facilis maxime delectus ducimus nobis,
                                                                similique neque
                                                                expedita in
                                                                autem
                                                                quo. Dolores atque repellat recusandae minima!</p>
                                                        </div>
                                                        <div class="text_percentPrice">
                                                            <div class="percent">
                                                                <p>20<span>%</span></p>
                                                            </div>
                                                            <div class="price">
                                                                <p>215,000</p>
                                                            </div>
                                                            <div class="discount_price">
                                                                <p>215,000</p>
                                                            </div>
                                                        </div>
                                                        <div class="coupon">
                                                            <p>쿠폰</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <section id="sort_popup">
                            <div class="sort_body"></div>
                            <div class="sort_container">
                                <div class="touch_line_wrap">
                                    <div class="touch_line"></div>
                                </div>
                                <ul>
                                    <li class="active">
                                        <div class="check_list">
                                            <div class="check_img"></div>
                                            <p>인기순</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="check_list">
                                            <div class="check_img"></div>
                                            <p>최신순</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="check_list">
                                            <div class="check_img"></div>
                                            <p>할인율 높은순</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="check_list">
                                            <div class="check_img"></div>
                                            <p>낮은 가격순</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="check_list">
                                            <div class="check_img"></div>
                                            <p>높은 가격순</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div id="tab02" class="tab">
                        <section id="no_brand">
                            <p>찜한 브랜드가 없습니다.</p>
                        </section>
                        <section id="brand">
                            <ul>
                                <li>
                                    <a href="">
                                        <div class="brand_left">
                                            <div class="brand_thum">
                                                <img src="./img/like_brand_thum.png" alt="">
                                            </div>
                                            <div class="brand_name">
                                                <div class="en">CROCODILE LADIES</div>
                                                <div class="ko">크로커다일 레이디</div>
                                            </div>
                                        </div>
                                    </a>
                                    <button class="like_ic">
                                        <img src="./img/ic-like_pk.png" alt="">
                                    </button>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="brand_left">
                                            <div class="brand_thum">
                                                <img src="./img/like_brand_thum.png" alt="">
                                            </div>
                                            <div class="brand_name">
                                                <div class="en">CROCODILE LADIES</div>
                                                <div class="ko">크로커다일 레이디</div>
                                            </div>
                                        </div>
                                    </a>
                                    <button class="like_ic">
                                        <img src="./img/ic-like_pk.png" alt="">
                                    </button>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="brand_left">
                                            <div class="brand_thum">
                                                <img src="./img/like_brand_thum.png" alt="">
                                            </div>
                                            <div class="brand_name">
                                                <div class="en">CROCODILE LADIES</div>
                                                <div class="ko">크로커다일 레이디</div>
                                            </div>
                                        </div>
                                    </a>
                                    <button class="like_ic">
                                        <img src="./img/ic-like_pk.png" alt="">
                                    </button>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="brand_left">
                                            <div class="brand_thum">
                                                <img src="./img/like_brand_thum.png" alt="">
                                            </div>
                                            <div class="brand_name">
                                                <div class="en">CROCODILE LADIES</div>
                                                <div class="ko">크로커다일 레이디</div>
                                            </div>
                                        </div>
                                    </a>
                                    <button class="like_ic">
                                        <img src="./img/ic-like_pk.png" alt="">
                                    </button>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="brand_left">
                                            <div class="brand_thum">
                                                <img src="./img/like_brand_thum.png" alt="">
                                            </div>
                                            <div class="brand_name">
                                                <div class="en">CROCODILE LADIES</div>
                                                <div class="ko">크로커다일 레이디</div>
                                            </div>
                                        </div>
                                    </a>
                                    <button class="like_ic">
                                        <img src="./img/ic-like_pk.png" alt="">
                                    </button>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="brand_left">
                                            <div class="brand_thum">
                                                <img src="./img/like_brand_thum.png" alt="">
                                            </div>
                                            <div class="brand_name">
                                                <div class="en">CROCODILE LADIES</div>
                                                <div class="ko">크로커다일 레이디</div>
                                            </div>
                                        </div>
                                    </a>
                                    <button class="like_ic">
                                        <img src="./img/ic-like_pk.png" alt="">
                                    </button>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="brand_left">
                                            <div class="brand_thum">
                                                <img src="./img/like_brand_thum.png" alt="">
                                            </div>
                                            <div class="brand_name">
                                                <div class="en">CROCODILE LADIES</div>
                                                <div class="ko">크로커다일 레이디</div>
                                            </div>
                                        </div>
                                    </a>
                                    <button class="like_ic">
                                        <img src="./img/ic-like_pk.png" alt="">
                                    </button>
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </div>
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
    });

    $('.tabnav>ul>li>a').click(function () {
        $('.tab').hide().filter(this.hash).fadeIn();
        $('.tabnav>ul>li>a').removeClass('on');
        $(this).addClass('on');
        return false;
    }).filter(':eq(0)').click();//best_tab처리

    var num = 0;
    $(".img_change").click(function () {
        if (num == 0) {
            $(this).attr("src", "./img/ic-like_pk.png");
            num = 1;
        } else {
            $(this).attr("src", "./img/ic-like.png");
            num = 0;
        }
    });

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

    });//하단 gnb 스크롤에 따른 히든처리

    $(".sort").click(function () {
        $('body').addClass('hidden')
        $('#sort_popup>.sort_body').css({ "display": "block", "background": "rgba(0,0,0,0.5)" })
        $('#sort_popup>.sort_container').addClass('fixed')
    })
    $("#sort_popup>.sort_body").click(function () {
        $('body').removeClass('hidden')
        $('#sort_popup>.sort_body').css({ "display": "none", "background": "none" })
        $('#sort_popup>.sort_container').removeClass('fixed')
    })
    $(".touch_line_wrap").click(function () {
        $('body').removeClass('hidden')
        $('#sort_popup>.sort_body').css({ "display": "none", "background": "none" })
        $('#sort_popup>.sort_container').removeClass('fixed')
    })//sort_popup

    var li_active = $('.sort_container>ul>li')
    var p_active = $('.sort_container>ul>li>.check_list')
    $(li_active).click(function () {
        $(li_active).removeClass('active')
        $(this).addClass('active')
    })
    $(p_active).click(function () {
        var text_change = $(this).children('p').text()
        $('.sort>p').text(text_change)
    })//sort_popup 

    $('.like_ic').click(function(){
        $(this).parents('li').remove();
    })
</script>

</html>