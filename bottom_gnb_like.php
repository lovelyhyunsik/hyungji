<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard/dist/web/static/pretendard.css" />
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/swiper.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/like.css">
    <link rel="stylesheet" href="./css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>

<body>
    <?php include("./common.php/btn_gotop.php");?>
    <div id="mainPage">
        <header id="headerType2">
            <div>
                <p>찜한 상품</p>
                <div class="headerIcoWrap">
                    <div class="headerIco">
                        <a href="./search.php" class="icoSearch"><span class="hide">검색</span></a>
                        <a href="./shoppingbag.php" class="icoShoppingbag"><span class="hide">쇼핑백</span></a>
                    </div>
                </div>
            </div>
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
                        <img src="./img/ic-home.png" alt="하단홈아이콘">
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
                        <img src="./img/ic-like-active.png" alt="하단'좋아요'아이콘">
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
        <div class="tabWrap">
            <div class="tabContainer">
                <div class="tabNav">
                    <ul>
                        <li><a href="#tab01" class="on">상품 <span class="counting">0</span></a></li>
                        <li><a href="#tab02">브랜드 <span class="counting">0</span></a></li>
                    </ul>
                </div>
                <div class="tabContent">
                    <div id="tab01" class="tab">
                        <section id="noItem"><!-- display:none -->
                            <p>최근 본 상품이 없습니다.</p>
                            <p>오늘의 베스트 상품에서 추가해 보세요.</p>
                            <a href="./best_section.php">베스트 상품 보러가기</a>
                        </section>
                        <section id="yesItem">
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
                            <div class="itemListWrap">
                                <ul>
                                    <li class="item soldOut">
                                        <div class="itemList">
                                            <div class="itemImg">
                                                <div class="soldOut">SOLD OUT</div>
                                                <a href="">
                                                    <img src="./img/item_1.png" alt="">
                                                </a>
                                                <div class="itemLike">
                                                    <button class="likeIc">
                                                        <img src="./img/ic-like_pk.png" alt="" class="img_change">
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="itemListText">
                                                <a href="">
                                                    <div class="itemListTextContainer">
                                                        <div class="itemBrand">
                                                            <p>CHATELAINE</p>
                                                        </div>
                                                        <div class="itemName">
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
                                                        <div class="itemPrice">
                                                            <div class="salePrice">
                                                                <div class="percent">
                                                                    <p>20<span>%</span></p>
                                                                </div>
                                                                <div class="price">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                            <div class="noSalePrice">
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
                                    <li class="item">
                                        <div class="itemList">
                                            <div class="itemImg">
                                                <a href="">
                                                    <img src="./img/item_1.png" alt="">
                                                </a>
                                                <div class="itemLike">
                                                    <button class="likeIc">
                                                        <img src="./img/ic-like_pk.png" alt="" class="img_change">
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="itemListText">
                                                <a href="">
                                                    <div class="itemListTextContainer">
                                                        <div class="itemBrand">
                                                            <p>CHATELAINE</p>
                                                        </div>
                                                        <div class="itemName">
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
                                                        <div class="itemPrice">
                                                            <div class="salePrice">
                                                                <div class="percent">
                                                                    <p>20<span>%</span></p>
                                                                </div>
                                                                <div class="price">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                            <div class="noSalePrice">
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
                                    <li class="item">
                                        <div class="itemList">
                                            <div class="itemImg">
                                                <a href="">
                                                    <img src="./img/item_1.png" alt="">
                                                </a>
                                                <div class="itemLike">
                                                    <button class="likeIc">
                                                        <img src="./img/ic-like_pk.png" alt="" class="img_change">
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="itemListText">
                                                <a href="">
                                                    <div class="itemListTextContainer">
                                                        <div class="itemBrand">
                                                            <p>CHATELAINE</p>
                                                        </div>
                                                        <div class="itemName">
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
                                                        <div class="itemPrice">
                                                            <div class="salePrice">
                                                                <div class="percent">
                                                                    <p>20<span>%</span></p>
                                                                </div>
                                                                <div class="price">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                            <div class="noSalePrice">
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
                                    <li class="item">
                                        <div class="itemList">
                                            <div class="itemImg">
                                                <a href="">
                                                    <img src="./img/item_1.png" alt="">
                                                </a>
                                                <div class="itemLike">
                                                    <button class="likeIc">
                                                        <img src="./img/ic-like_pk.png" alt="" class="img_change">
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="itemListText">
                                                <a href="">
                                                    <div class="itemListTextContainer">
                                                        <div class="itemBrand">
                                                            <p>CHATELAINE</p>
                                                        </div>
                                                        <div class="itemName">
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
                                                        <div class="itemPrice">
                                                            <div class="salePrice">
                                                                <div class="percent">
                                                                    <p>20<span>%</span></p>
                                                                </div>
                                                                <div class="price">
                                                                    <p>215,000</p>
                                                                </div>
                                                            </div>
                                                            <div class="noSalePrice">
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
                        <section id="noBrand">
                            <p>찜한 브랜드가 없습니다.</p>
                        </section>
                        <section id="brand">
                            <ul>
                                <li>
                                    <a href="">
                                        <div class="brandLeft">
                                            <div class="brandThum">
                                                <img src="./img/like_brand_thum.png" alt="">
                                            </div>
                                            <div class="brandName">
                                                <div class="en">CROCODILE LADIES</div>
                                                <div class="ko">크로커다일 레이디</div>
                                            </div>
                                        </div>
                                    </a>
                                    <button class="likeIc">
                                        <img src="./img/ic-like_pk.png" alt="">
                                    </button>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="brandLeft">
                                            <div class="brandThum">
                                                <img src="./img/like_brand_thum.png" alt="">
                                            </div>
                                            <div class="brandName">
                                                <div class="en">CROCODILE LADIES</div>
                                                <div class="ko">크로커다일 레이디</div>
                                            </div>
                                        </div>
                                    </a>
                                    <button class="likeIc">
                                        <img src="./img/ic-like_pk.png" alt="">
                                    </button>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="brandLeft">
                                            <div class="brandThum">
                                                <img src="./img/like_brand_thum.png" alt="">
                                            </div>
                                            <div class="brandName">
                                                <div class="en">CROCODILE LADIES</div>
                                                <div class="ko">크로커다일 레이디</div>
                                            </div>
                                        </div>
                                    </a>
                                    <button class="likeIc">
                                        <img src="./img/ic-like_pk.png" alt="">
                                    </button>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="brandLeft">
                                            <div class="brandThum">
                                                <img src="./img/like_brand_thum.png" alt="">
                                            </div>
                                            <div class="brandName">
                                                <div class="en">CROCODILE LADIES</div>
                                                <div class="ko">크로커다일 레이디</div>
                                            </div>
                                        </div>
                                    </a>
                                    <button class="likeIc">
                                        <img src="./img/ic-like_pk.png" alt="">
                                    </button>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="brandLeft">
                                            <div class="brandThum">
                                                <img src="./img/like_brand_thum.png" alt="">
                                            </div>
                                            <div class="brandName">
                                                <div class="en">CROCODILE LADIES</div>
                                                <div class="ko">크로커다일 레이디</div>
                                            </div>
                                        </div>
                                    </a>
                                    <button class="likeIc">
                                        <img src="./img/ic-like_pk.png" alt="">
                                    </button>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="brandLeft">
                                            <div class="brandThum">
                                                <img src="./img/like_brand_thum.png" alt="">
                                            </div>
                                            <div class="brandName">
                                                <div class="en">CROCODILE LADIES</div>
                                                <div class="ko">크로커다일 레이디</div>
                                            </div>
                                        </div>
                                    </a>
                                    <button class="likeIc">
                                        <img src="./img/ic-like_pk.png" alt="">
                                    </button>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="brandLeft">
                                            <div class="brandThum">
                                                <img src="./img/like_brand_thum.png" alt="">
                                            </div>
                                            <div class="brandName">
                                                <div class="en">CROCODILE LADIES</div>
                                                <div class="ko">크로커다일 레이디</div>
                                            </div>
                                        </div>
                                    </a>
                                    <button class="likeIc">
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
    $('.tabNav>ul>li>a').click(function () {
        $('.tab').hide().filter(this.hash).fadeIn();
        $('.tabNav>ul>li>a').removeClass('on');
        $(this).addClass('on');
        return false;
    }).filter(':eq(0)').click();//best_tab처리

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

    $('.likeIc').click(function(){
        $(this).parents('li').remove();
    })//하트 클릭하면 그 아이템 목록 지워짐
</script>

</html>