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
                    <a href="./search.php" class="icoSearch"><span class="hide">검색아이콘</span></a>
                    <a href="./alarm.php" class="icoAlarm"><span class="hide">알람아이콘</span><span class="numberTag">10</span></a>
                    <a href="./shoppingbag.php" class="icoShoppingbag"><span class="hide">쇼핑백아이콘</span><span class="numberTag">10</span></a>
                </div>
            </div>
            <h2 class="hide">메인메뉴</h2>
            <nav class="headerGnb">
                <ul>
                    <li><a href="./index.php" class='on'>홈</a></li>
                    <li><a href="./best_section.php">베스트</a></li>
                    <li><a href="./exhibition_section.php">기획전/혜택</a></li>
                    <li><a href="./magazine_section.php">매거진</a></li>
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
                    <a href="./bottom_gnb_recent.php" class="icoLike">
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
            <section id="homeSection">
                <div class="swiper first-slide auto-slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide_text_wrap">
                            <a href="">
                                <img src="./img/slide/home_visual.png" alt="">
                                <div class="slide_text">
                                    <div class="slide_text_container">
                                        <div class="slide_text_top">
                                            <p>NEW</p>
                                        </div>
                                        <div class="slide_text_middle">
                                            <p>22F/W WINTER</p>
                                            <p>COLLECTION</p>
                                        </div>
                                        <div class="slide_text_bottom">
                                            <p>추운 겨울 속 따뜻함을 더할 윈터 컬렉션</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide slide_text_wrap">
                            <a href="">
                                <img src="./img/slide/home_visual.png" alt="">
                                <div class="slide_text">
                                    <div class="slide_text_container">
                                        <div class="slide_text_top">
                                            <p>NEW</p>
                                        </div>
                                        <div class="slide_text_middle">
                                            <p>22F/W WINTER</p>
                                            <p>COLLECTION</p>
                                        </div>
                                        <div class="slide_text_bottom">
                                            <p>추운 겨울 속 따뜻함을 더할 윈터 컬렉션</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide slide_text_wrap">
                            <a href="">
                                <img src="./img/slide/home_visual.png" alt="">
                                <div class="slide_text">
                                    <div class="slide_text_container">
                                        <div class="slide_text_top">
                                            <p>NEW</p>
                                        </div>
                                        <div class="slide_text_middle">
                                            <p>22F/W WINTER</p>
                                            <p>COLLECTION</p>
                                        </div>
                                        <div class="slide_text_bottom">
                                            <p>추운 겨울 속 따뜻함을 더할 윈터 컬렉션</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <section id="homeSectionQuickMenu">
                    <ul class="quickMenuFive">
                        <li class="quickMenuItem">
                            <a href="./quick-ic_page.php">
                                <span>
                                    <img src="./img/category/outer.png" alt="아우터아이콘">
                                </span>
                                <p>아우터</p>
                            </a>
                        </li>
                        <li class="quickMenuItem">
                            <a href="./quick-ic_page.php">
                                <span>
                                    <img src="./img/category/top.png" alt="상의아이콘">
                                </span>
                                <p>상의</p>
                            </a>
                        </li>
                        <li class="quickMenuItem">
                            <a href="./quick-ic_page.php">
                                <span>
                                    <img src="./img/category/bottom.png" alt="하의아이콘">
                                </span>
                                <p>하의</p>
                            </a>
                        </li>
                        <li class="quickMenuItem">
                            <a href="./quick-ic_page.php">
                                <span>
                                    <img src="./img/category/dress.png" alt="원피스아이콘">
                                </span>
                                <p>원피스</p>
                            </a>
                        </li>
                        <li class="quickMenuItem">
                            <a href="./quick-ic_page.php">
                                <span>
                                    <img src="./img/category/skirt.png" alt="스커트아이콘">
                                </span>
                                <p>스커트</p>
                            </a>
                        </li>
                        <li class="quickMenuItem">
                            <a href="./quick-ic_page.php">
                                <span>
                                    <img src="./img/category/golf-wear.png" alt="골프웨어아이콘">
                                </span>
                                <p>골프웨어</p>
                            </a>
                        </li>
                        <li class="quickMenuItem">
                            <a href="./quick-ic_page.php">
                                <span>
                                    <img src="./img/category/bag.png" alt="가방아이콘">
                                </span>
                                <p>가방</p>
                            </a>
                        </li>
                        <li class="quickMenuItem">
                            <a href="./quick-ic_page.php">
                                <span>
                                    <img src="./img/category/hat.png" alt="모자아이콘">
                                </span>
                                <p>모자</p>
                            </a>
                        </li>
                        <li class="quickMenuItem">
                            <a href="./quick-ic_page.php">
                                <span>
                                    <img src="./img/category/shoes.png" alt="신발아이콘">
                                </span>
                                <p>신발</p>
                            </a>
                        </li>
                    </ul>
                </section>
                <section id="homeSectionBest">
                    <h3>BEST</h3>
                    <section id="oneDepthTab">
                    <div class="categoryTab">
                        <div class="categoryTabWrap">
                            <div class="categoryTabnav">
                                <ul>
                                    <li><a href="#tab01" class='on'>전체</a></li>
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
                        <div class="categoryTabcontent">
                            <div id="tab01" class="tab">
                                <ul>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <div class="soldOut">SOLD OUT</div>
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>1</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>2</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>3</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>4</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab02" class="tab">
                                <ul>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>1</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>2</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>3</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>4</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab03" class="tab">
                                <ul>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>1</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>2</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>3</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>4</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab04" class="tab">
                                <ul>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>1</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>2</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>3</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>4</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab05" class="tab">
                                <ul>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>1</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>2</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>3</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>4</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab06" class="tab">
                                <ul>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>1</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>2</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>3</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>4</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab07" class="tab">
                                <ul>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>1</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>2</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>3</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>4</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab08" class="tab">
                                <ul>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>1</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>2</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>3</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>4</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab09" class="tab">
                                <ul>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>1</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>2</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>3</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="./item_detail.php">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="tabItem">
                                                <P class="itemBrand">CHALI</P>
                                                <P class="itemName">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="itemPrice">
                                                <div class="noSalePrice">215,000</div>
                                                <div class="salePrice">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="reviewWrap">
                                                <ul class="starReview">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="reviewCount">
                                                    <span class="reviewText">리뷰</span>
                                                    <span class="reviewCount">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="itemNum"><span>4</span></div>
                                        <div class="itemLike">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </section>
                    <div class="bestItemMore">
                        <a href="./best_item_more.php">베스트 상품 더보기</a>
                    </div>
                    <div class="lineBanner">
                        <img src="./img/line_banner.png" alt="">
                    </div>
                </section>
                <section id="homeSectionRecBrand">
                    <h3>추천브랜드</h3>
                    <div class="swiper recBrandItem">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="" class="recBrandItemBannerWrap">
                                    <div class="recBrandItemBanner">
                                        <img src="./img/slide/rec_brand_img.png" alt="">
                                        <div class="bannerText">
                                            <div class="bannerTextContainer">
                                                <p class="bannerTitle">OLIVIA HASSLER</p>
                                                <p class="bannerSub">트렌디한 감각고 세련된 스타일.올리비아 하슬러</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="recBrandItemListWrap">
                                    <a href="./item_detail.php">
                                        <div class="item">
                                            <div class="itemImg">
                                                <div class="soldOut">
                                                    SOLD OUT
                                                </div>
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="itemText">
                                                <div class="itemName">
                                                    <p>Lorem ipsum dolor sit</p>
                                                </div>
                                                <div class="noSalePrice">
                                                    215,000
                                                </div>
                                                <div class="salePrice">
                                                    <div class="percent">
                                                        <p>20<span>%</span></p>
                                                    </div>
                                                    <div class="price">
                                                        <p>215,000</p>
                                                    </div>
                                                </div>
                                                <div class="coupon">
                                                    <p>쿠폰</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="./item_detail.php">
                                        <div class="item">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="itemText">
                                                <div class="itemName">
                                                    <p>Lorem ipsum dolor sit</p>
                                                </div>
                                                <div class="noSalePrice">
                                                    215,000
                                                </div>
                                                <div class="salePrice">
                                                    <div class="percent">
                                                        <p>20<span>%</span></p>
                                                    </div>
                                                    <div class="price">
                                                        <p>215,000</p>
                                                    </div>
                                                </div>
                                                <div class="coupon">
                                                    <p>쿠폰</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="./item_detail.php">
                                        <div class="item">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="itemText">
                                                <div class="itemName">
                                                    <p>Lorem ipsum dolor sit</p>
                                                </div>
                                                <div class="noSalePrice">
                                                    215,000
                                                </div>
                                                <div class="salePrice">
                                                    <div class="percent">
                                                        <p>20<span>%</span></p>
                                                    </div>
                                                    <div class="price">
                                                        <p>215,000</p>
                                                    </div>
                                                </div>
                                                <div class="coupon">
                                                    <p>쿠폰</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="./item_detail.php">
                                        <div class="item">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="itemText">
                                                <div class="itemName">
                                                    <p>Lorem ipsum dolor sit</p>
                                                </div>
                                                <div class="noSalePrice">
                                                    215,000
                                                </div>
                                                <div class="salePrice">
                                                    <div class="percent">
                                                        <p>20<span>%</span></p>
                                                    </div>
                                                    <div class="price">
                                                        <p>215,000</p>
                                                    </div>
                                                </div>
                                                <div class="coupon">
                                                    <p>쿠폰</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <a href="" class="recBrandItemBannerWrap">
                                    <div class="recBrandItemBanner">
                                        <img src="./img/slide/rec_brand_img.png" alt="">
                                        <div class="bannerText">
                                            <div class="bannerTextContainer">
                                                <p class="bannerTitle">OLIVIA HASSLER</p>
                                                <p class="bannerSub">트렌디한 감각고 세련된 스타일.올리비아 하슬러</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="recBrandItemListWrap">
                                    <a href="./item_detail.php">
                                        <div class="item">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="itemText">
                                                <div class="itemName">
                                                    <p>Lorem ipsum dolor sit</p>
                                                </div>
                                                <div class="noSalePrice">
                                                    215,000
                                                </div>
                                                <div class="salePrice">
                                                    <div class="percent">
                                                        <p>20<span>%</span></p>
                                                    </div>
                                                    <div class="price">
                                                        <p>215,000</p>
                                                    </div>
                                                </div>
                                                <div class="coupon">
                                                    <p>쿠폰</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="./item_detail.php">
                                        <div class="item">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="itemText">
                                                <div class="itemName">
                                                    <p>Lorem ipsum dolor sit</p>
                                                </div>
                                                <div class="noSalePrice">
                                                    215,000
                                                </div>
                                                <div class="salePrice">
                                                    <div class="percent">
                                                        <p>20<span>%</span></p>
                                                    </div>
                                                    <div class="price">
                                                        <p>215,000</p>
                                                    </div>
                                                </div>
                                                <div class="coupon">
                                                    <p>쿠폰</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="./item_detail.php">
                                        <div class="item">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="itemText">
                                                <div class="itemName">
                                                    <p>Lorem ipsum dolor sit</p>
                                                </div>
                                                <div class="noSalePrice">
                                                    215,000
                                                </div>
                                                <div class="salePrice">
                                                    <div class="percent">
                                                        <p>20<span>%</span></p>
                                                    </div>
                                                    <div class="price">
                                                        <p>215,000</p>
                                                    </div>
                                                </div>
                                                <div class="coupon">
                                                    <p>쿠폰</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="./item_detail.php">
                                        <div class="item">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="itemText">
                                                <div class="itemName">
                                                    <p>Lorem ipsum dolor sit</p>
                                                </div>
                                                <div class="noSalePrice">
                                                    215,000
                                                </div>
                                                <div class="salePrice">
                                                    <div class="percent">
                                                        <p>20<span>%</span></p>
                                                    </div>
                                                    <div class="price">
                                                        <p>215,000</p>
                                                    </div>
                                                </div>
                                                <div class="coupon">
                                                    <p>쿠폰</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <a href="" class="recBrandItemBannerWrap">
                                    <div class="recBrandItemBanner">
                                        <img src="./img/slide/rec_brand_img.png" alt="">
                                        <div class="bannerText">
                                            <div class="bannerTextContainer">
                                                <p class="bannerTitle">OLIVIA HASSLER</p>
                                                <p class="bannerSub">트렌디한 감각고 세련된 스타일.올리비아 하슬러</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="recBrandItemListWrap">
                                    <a href="./item_detail.php">
                                        <div class="item">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="itemText">
                                                <div class="itemName">
                                                    <p>Lorem ipsum dolor sit</p>
                                                </div>
                                                <div class="noSalePrice">
                                                    215,000
                                                </div>
                                                <div class="salePrice">
                                                    <div class="percent">
                                                        <p>20<span>%</span></p>
                                                    </div>
                                                    <div class="price">
                                                        <p>215,000</p>
                                                    </div>
                                                </div>
                                                <div class="coupon">
                                                    <p>쿠폰</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="./item_detail.php">
                                        <div class="item">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="itemText">
                                                <div class="itemName">
                                                    <p>Lorem ipsum dolor sit</p>
                                                </div>
                                                <div class="noSalePrice">
                                                    215,000
                                                </div>
                                                <div class="salePrice">
                                                    <div class="percent">
                                                        <p>20<span>%</span></p>
                                                    </div>
                                                    <div class="price">
                                                        <p>215,000</p>
                                                    </div>
                                                </div>
                                                <div class="coupon">
                                                    <p>쿠폰</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="./item_detail.php">
                                        <div class="item">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="itemText">
                                                <div class="itemName">
                                                    <p>Lorem ipsum dolor sit</p>
                                                </div>
                                                <div class="noSalePrice">
                                                    215,000
                                                </div>
                                                <div class="salePrice">
                                                    <div class="percent">
                                                        <p>20<span>%</span></p>
                                                    </div>
                                                    <div class="price">
                                                        <p>215,000</p>
                                                    </div>
                                                </div>
                                                <div class="coupon">
                                                    <p>쿠폰</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="./item_detail.php">
                                        <div class="item">
                                            <div class="itemImg">
                                                <img src="./img/item_img/item_1.png" alt="">
                                            </div>
                                            <div class="itemText">
                                                <div class="itemName">
                                                    <p>Lorem ipsum dolor sit</p>
                                                </div>
                                                <div class="noSalePrice">
                                                    215,000
                                                </div>
                                                <div class="salePrice">
                                                    <div class="percent">
                                                        <p>20<span>%</span></p>
                                                    </div>
                                                    <div class="price">
                                                        <p>215,000</p>
                                                    </div>
                                                </div>
                                                <div class="coupon">
                                                    <p>쿠폰</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="fold">
                        <p>상품 더보기</p>
                        <img src="./img/ic-fold_down.png" alt="">
                    </button>
                </section>
                <section id="homeSectionMagazine">
                    <h3>매거진</h3>
                    <div class="swiper magazine-slide auto-slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide slide_text_wrap mag_slide_text_wrap">
                                <a href="">
                                    <img src="./img/slide/magagine_main.png" alt="">
                                    <div class="slide_text">
                                        <div class="slide_text_container">
                                            <div class="slide_text_top">
                                                <p>라떼센스</p>
                                            </div>
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
                            <div class="swiper-slide slide_text_wrap mag_slide_text_wrap">
                                <a href="">
                                    <img src="./img/slide/magagine_main.png" alt="">
                                    <div class="slide_text">
                                        <div class="slide_text_container">
                                            <div class="slide_text_top">
                                                <p>라떼센스</p>
                                            </div>
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
                            <div class="swiper-slide slide_text_wrap mag_slide_text_wrap">
                                <a href="">
                                    <img src="./img/slide/magagine_main.png" alt="">
                                    <div class="slide_text">
                                        <div class="slide_text_container">
                                            <div class="slide_text_top">
                                                <p>라떼센스</p>
                                            </div>
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
                    <div class="magazineMore">
                        <a href="./magazine_section.php">매거진 더보기</a>
                    </div>
                </section>
                <section id="homeSectionBrand">
                    <h3>브랜드</h3>
                    <ul>
                        <li><a href="./brand_page.php"><img src="./img/brand/brand_1.png" alt=""></a></li>
                        <li><a href="./brand_page.php"><img src="./img/brand/brand_2.png" alt=""></a></li>
                        <li><a href="./brand_page.php"><img src="./img/brand/brand_3.png" alt=""></a></li>
                        <li><a href="./brand_page.php"><img src="./img/brand/brand_4.png" alt=""></a></li>
                        <li><a href="./brand_page.php"><img src="./img/brand/brand_5.png" alt=""></a></li>
                        <li><a href="./brand_page.php"><img src="./img/brand/brand_5.png" alt=""></a></li>
                    </ul>
                </section>
            </section>
        </div>
        <?php include("./common.php/footer.php");?>
    </div>
</body>
<script>
    $('#homeSectionBest .categoryTabnav>ul>li>a').click(function () {
        $('#homeSectionBest .categoryTabcontent > div').hide().filter(this.hash).fadeIn();
        $('#homeSectionBest .categoryTabnav>ul>li>a').removeClass('on');
        $(this).addClass('on');
        return false;
    }).filter(':eq(0)').click();//home섹션 안에 tab처리

    var num = 0;
    $(".fold").click(function () {
        if (num == 0) {
            $("#homeSectionRecBrand>.recBrandItem>.swiper-wrapper>.swiper-slide>.recBrandItemListWrap>a").css("display", "block")
            $(this).children("p").text("접기")
            $(this).children("img").attr("src", "./img/ic-fold_up.png")
            num = 1;
        } else {
            $("#homeSectionRecBrand>.recBrandItem>.swiper-wrapper>.swiper-slide>.recBrandItemListWrap>a").siblings("a:nth-child(n+3)").css("display", "none")
            $(this).children("p").text("상품 더보기")
            $(this).children("img").attr("src", "./img/ic-fold_down.png")
            num = 0;
        }
    })//홈섹션 안에 추천브랜드 펼치기 버튼

    var swiper = new Swiper(".recBrandItem", {
    loop: true,
    slidesPerView:1.12,
    spaceBetween: 20
    });//스와이퍼 슬라이드 index.php 개별적용된부분
</script>

</html>