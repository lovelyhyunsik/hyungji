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
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/recent.css">
    <link rel="stylesheet" href="./css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="./js/common.js"></script>
</head>

<body>
    <div id="mainPage">
        <?php include("./common.php/btn_gotop.php");?>
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
                        <img src="./img/ic-recent-active.png" alt="하단최근아이콘">
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
        <header id="headerType2">
            <div>
                <p>최근 본 상품</p>
                <div class="headerIcoWrap">
                    <div class="headerIco">
                        <a href="./search.php" class="icoSearch"><span class="hide">검색</span></a>
                        <a href="./shoppingbag.php" class="icoShoppingbag"><span class="hide">쇼핑백</span></a>
                    </div>
                </div>
            </div>
        </header>
        <section id="noItem" style="display: none;">
            <p>최근 본 상품이 없습니다.</p>
            <p>오늘의 베스트 상품에서 추가해 보세요.</p>
            <a href="">베스트 상품 보러가기</a>
        </section>
        <section id="itemGroup">
            <button class="allRemove">
                <p>전체삭제</p>
            </button>
            <section id="item">
                <div class="itemListWrap">
                    <p>2022.12.09</p>
                    <ul>
                        <li class="item">
                            <div class="itemList">
                                <div class="itemImg">
                                    <div class="soldOut">
                                        SOLD OUT
                                    </div>
                                    <a href="">
                                        <img src="./img/item_1.png" alt="">
                                    </a>
                                    <div class="itemLike">
                                        <button>
                                            <img src="./img/ic-like.png" alt="" class="img_change">
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
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti
                                                    eius
                                                    praesentium a
                                                    quas, rem facilis maxime delectus ducimus nobis, similique neque
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
                                    <div class="itemClose">
                                        <button>
                                            <img src="./img/ic-close_grey.png" alt="">
                                        </button>
                                    </div>
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
                                        <button>
                                            <img src="./img/ic-like.png" alt="" class="img_change">
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
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti
                                                    eius
                                                    praesentium a
                                                    quas, rem facilis maxime delectus ducimus nobis, similique neque
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
                                    <div class="itemClose">
                                        <button>
                                            <img src="./img/ic-close_grey.png" alt="">
                                        </button>
                                    </div>
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
                                        <button>
                                            <img src="./img/ic-like.png" alt="" class="img_change">
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
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti
                                                    eius
                                                    praesentium a
                                                    quas, rem facilis maxime delectus ducimus nobis, similique neque
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
                                    <div class="itemClose">
                                        <button>
                                            <img src="./img/ic-close_grey.png" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <section id="item">
                <div class="itemListWrap">
                    <p>2022.12.09</p>
                    <ul>
                        <li class="item">
                            <div class="itemList">
                                <div class="itemImg">
                                    <a href="">
                                        <img src="./img/item_1.png" alt="">
                                    </a>
                                    <div class="itemLike">
                                        <button>
                                            <img src="./img/ic-like.png" alt="" class="img_change">
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
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti
                                                    eius
                                                    praesentium a
                                                    quas, rem facilis maxime delectus ducimus nobis, similique neque
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
                                    <div class="itemClose">
                                        <button>
                                            <img src="./img/ic-close_grey.png" alt="">
                                        </button>
                                    </div>
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
                                        <button>
                                            <img src="./img/ic-like.png" alt="" class="img_change">
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
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti
                                                    eius
                                                    praesentium a
                                                    quas, rem facilis maxime delectus ducimus nobis, similique neque
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
                                    <div class="itemClose">
                                        <button>
                                            <img src="./img/ic-close_grey.png" alt="">
                                        </button>
                                    </div>
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
                                        <button>
                                            <img src="./img/ic-like.png" alt="" class="img_change">
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
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti
                                                    eius
                                                    praesentium a
                                                    quas, rem facilis maxime delectus ducimus nobis, similique neque
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
                                    <div class="itemClose">
                                        <button>
                                            <img src="./img/ic-close_grey.png" alt="">
                                        </button>
                                    </div>
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
                                        <button>
                                            <img src="./img/ic-like.png" alt="" class="img_change">
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
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti
                                                    eius
                                                    praesentium a
                                                    quas, rem facilis maxime delectus ducimus nobis, similique neque
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
                                    <div class="itemClose">
                                        <button>
                                            <img src="./img/ic-close_grey.png" alt="">
                                        </button>
                                    </div>
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
                                        <button>
                                            <img src="./img/ic-like.png" alt="" class="img_change">
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
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti
                                                    eius
                                                    praesentium a
                                                    quas, rem facilis maxime delectus ducimus nobis, similique neque
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
                                    <div class="itemClose">
                                        <button>
                                            <img src="./img/ic-close_grey.png" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </section>
    </div>
</body>
<script>
    
    $(".allRemove").click(function () {
        $("#itemGroup").css("display", "none");
        $("#noItem").css("display", "block");
    })

    $(".itemClose").click(function () {
        $(this).parents("li").remove();
    });
</script>

</html>