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
                    <a href="./search.php" class="ico_search"><span class="hide">검색아이콘</span></a>
                    <a href="./alarm.php" class="ico_alarm"><span class="hide">알람아이콘</span><span class="number_tag">10</span></a>
                    <a href="./shoppingbag.php" class="ico_shoppingbag"><span class="hide">쇼핑백아이콘</span><span class="number_tag">10</span></a>
                </div>
            </div>
            <h2 class="hide">메인메뉴</h2>
            <nav class="header_gnb">
                <ul>
                    <li><a href="./index.php" class='on'>홈</a></li>
                    <li><a href="./best_section.php">베스트</a></li>
                    <li><a href="./exhibition_section.php">기획전/혜택</a></li>
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
            <section id="home_section">
                <div class="swiper first-slide auto-slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide_text_wrap">
                            <a href="">
                                <img src="./img/home_visual.png" alt="">
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
                                <img src="./img/home_visual.png" alt="">
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
                                <img src="./img/home_visual.png" alt="">
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
                <section id="home_section_quick_menu">
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
                <section id="home_section_best">
                    <h3>BEST</h3>
                    <section id="one_depth_tab">
                    <div class="category_tab">
                        <div class="category_tab_wrap">
                            <div class="category_tabnav">
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
                        <div class="category_tabcontent">
                            <div id="tab01" class="tab">
                                <ul>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_1.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>1</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_2.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>2</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_3.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>3</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_4.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>4</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab02" class="tab">
                                <ul>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_1.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>1</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_2.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>2</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_3.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>3</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_4.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>4</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab03" class="tab">
                                <ul>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_1.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>1</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_2.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>2</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_3.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>3</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_4.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>4</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab04" class="tab">
                                <ul>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_1.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>1</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_2.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>2</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_3.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>3</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_4.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>4</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab05" class="tab">
                                <ul>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_1.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>1</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_2.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>2</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_3.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>3</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_4.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>4</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab06" class="tab">
                                <ul>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_1.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>1</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_2.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>2</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_3.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>3</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_4.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>4</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab07" class="tab">
                                <ul>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_1.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>1</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_2.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>2</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_3.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>3</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_4.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>4</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab08" class="tab">
                                <ul>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_1.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>1</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_2.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>2</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_3.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>3</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_4.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>4</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab09" class="tab">
                                <ul>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_1.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>1</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_2.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>2</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_3.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>3</span></div>
                                        <div class="item_like">
                                            <button>
                                                <img src="./img/ic-like.png" alt="" class="img_change">
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="./item_detail.php">
                                            <div class="item_img">
                                                <img src="./img/item_4.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="sale_price">215,000</div>
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                            <div class="review_wrap">
                                                <ul class="star_review">
                                                    <li><img src="./img/review_star.png" alt=""></li>
                                                    <li>4.9</li>
                                                </ul>
                                                <div class="review_count">
                                                    <span class="review_text">리뷰</span>
                                                    <span class="review_count">30</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item_num"><span>4</span></div>
                                        <div class="item_like">
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
                    <div class="best_item_more">
                        <a href="./best_item_more.php">베스트 상품 더보기</a>
                    </div>
                    <div class="line_banner">
                        <img src="./img/line_banner.png" alt="">
                    </div>
                </section>
                <section id="home_section_rec_brand">
                    <h3>추천브랜드</h3>
                    <div class="swiper rec_brand_item">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="" class="rec_brand_item_banner_wrap">
                                    <div class="rec_brand_item_banner">
                                        <img src="./img/rec_brand_img.png" alt="">
                                        <div class="banner_text">
                                            <div class="banner_text_container">
                                                <p class="banner_title">OLIVIA HASSLER</p>
                                                <p class="banner_sub">트렌디한 감각고 세련된 스타일.올리비아 하슬러</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="rec_brand_item_list_wrap">
                                    <a href="./item_detail.php">
                                        <div class="rec_brand_item_list">
                                            <div class="rec_brand_item_list_img">
                                                <img src="./img/item_1.png" alt="">
                                            </div>
                                            <div class="rec_brand_item_list_text">
                                                <div class="text_name">
                                                    <p>Lorem ipsum dolor sit</p>
                                                </div>
                                                <div class="text_percentPrice">
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
                                        <div class="rec_brand_item_list">
                                            <div class="rec_brand_item_list_img">
                                                <img src="./img/item_1.png" alt="">
                                            </div>
                                            <div class="rec_brand_item_list_text">
                                                <div class="text_name">
                                                    <p>Lorem ipsum dolor sit</p>
                                                </div>
                                                <div class="text_percentPrice">
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
                                        <div class="rec_brand_item_list">
                                            <div class="rec_brand_item_list_img">
                                                <img src="./img/item_1.png" alt="">
                                            </div>
                                            <div class="rec_brand_item_list_text">
                                                <div class="text_name">
                                                    <p>Lorem ipsum dolor sit</p>
                                                </div>
                                                <div class="text_percentPrice">
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
                                        <div class="rec_brand_item_list">
                                            <div class="rec_brand_item_list_img">
                                                <img src="./img/item_1.png" alt="">
                                            </div>
                                            <div class="rec_brand_item_list_text">
                                                <div class="text_name">
                                                    <p>Lorem ipsum dolor sit</p>
                                                </div>
                                                <div class="text_percentPrice">
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
                                        <div class="rec_brand_item_list">
                                            <div class="rec_brand_item_list_img">
                                                <img src="./img/item_1.png" alt="">
                                            </div>
                                            <div class="rec_brand_item_list_text">
                                                <div class="text_name">
                                                    <p>Lorem ipsum dolor sit</p>
                                                </div>
                                                <div class="text_percentPrice">
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
                                <a href="" class="rec_brand_item_banner_wrap">
                                    <div class="rec_brand_item_banner">
                                        <img src="./img/rec_brand_img.png" alt="">
                                        <div class="banner_text">
                                            <div class="banner_text_container">
                                                <p class="banner_title">OLIVIA HASSLER</p>
                                                <p class="banner_sub">트렌디한 감각고 세련된 스타일.올리비아 하슬러</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="rec_brand_item_list_wrap">
                                    <a href="./item_detail.php">
                                        <div class="rec_brand_item_list">
                                            <div class="rec_brand_item_list_img">
                                                <img src="./img/item_2.png" alt="">
                                            </div>
                                            <div class="rec_brand_item_list_text">
                                                <div class="text_name">
                                                    <p>Lorem ipsum dolor sit</p>
                                                </div>
                                                <div class="text_percentPrice">
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
                                        <div class="rec_brand_item_list">
                                            <div class="rec_brand_item_list_img">
                                                <img src="./img/item_2.png" alt="">
                                            </div>
                                            <div class="rec_brand_item_list_text">
                                                <div class="text_name">
                                                    <p>Lorem ipsum dolor sit</p>
                                                </div>
                                                <div class="text_percentPrice">
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
                                        <div class="rec_brand_item_list">
                                            <div class="rec_brand_item_list_img">
                                                <img src="./img/item_2.png" alt="">
                                            </div>
                                            <div class="rec_brand_item_list_text">
                                                <div class="text_name">
                                                    <p>Lorem ipsum dolor sit</p>
                                                </div>
                                                <div class="text_percentPrice">
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
                                        <div class="rec_brand_item_list">
                                            <div class="rec_brand_item_list_img">
                                                <img src="./img/item_2.png" alt="">
                                            </div>
                                            <div class="rec_brand_item_list_text">
                                                <div class="text_name">
                                                    <p>Lorem ipsum dolor sit</p>
                                                </div>
                                                <div class="text_percentPrice">
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
                                        <div class="rec_brand_item_list">
                                            <div class="rec_brand_item_list_img">
                                                <img src="./img/item_2.png" alt="">
                                            </div>
                                            <div class="rec_brand_item_list_text">
                                                <div class="text_name">
                                                    <p>Lorem ipsum dolor sit</p>
                                                </div>
                                                <div class="text_percentPrice">
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
                                <a href="" class="rec_brand_item_banner_wrap">
                                    <div class="rec_brand_item_banner">
                                        <img src="./img/rec_brand_img.png" alt="">
                                        <div class="banner_text">
                                            <div class="banner_text_container">
                                                <p class="banner_title">OLIVIA HASSLER</p>
                                                <p class="banner_sub">트렌디한 감각고 세련된 스타일.올리비아 하슬러</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="rec_brand_item_list_wrap">
                                    <a href="./item_detail.php">
                                        <div class="rec_brand_item_list">
                                            <div class="rec_brand_item_list_img">
                                                <img src="./img/item_3.png" alt="">
                                            </div>
                                            <div class="rec_brand_item_list_text">
                                                <div class="text_name">
                                                    <p>Lorem ipsum dolor sit</p>
                                                </div>
                                                <div class="text_percentPrice">
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
                                        <div class="rec_brand_item_list">
                                            <div class="rec_brand_item_list_img">
                                                <img src="./img/item_3.png" alt="">
                                            </div>
                                            <div class="rec_brand_item_list_text">
                                                <div class="text_name">
                                                    <p>Lorem ipsum dolor sit</p>
                                                </div>
                                                <div class="text_percentPrice">
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
                                        <div class="rec_brand_item_list">
                                            <div class="rec_brand_item_list_img">
                                                <img src="./img/item_3.png" alt="">
                                            </div>
                                            <div class="rec_brand_item_list_text">
                                                <div class="text_name">
                                                    <p>Lorem ipsum dolor sit</p>
                                                </div>
                                                <div class="text_percentPrice">
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
                                        <div class="rec_brand_item_list">
                                            <div class="rec_brand_item_list_img">
                                                <img src="./img/item_3.png" alt="">
                                            </div>
                                            <div class="rec_brand_item_list_text">
                                                <div class="text_name">
                                                    <p>Lorem ipsum dolor sit</p>
                                                </div>
                                                <div class="text_percentPrice">
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
                                        <div class="rec_brand_item_list">
                                            <div class="rec_brand_item_list_img">
                                                <img src="./img/item_3.png" alt="">
                                            </div>
                                            <div class="rec_brand_item_list_text">
                                                <div class="text_name">
                                                    <p>Lorem ipsum dolor sit</p>
                                                </div>
                                                <div class="text_percentPrice">
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
                <section id="home_section_magazine">
                    <h3>매거진</h3>
                    <div class="swiper magazine-slide auto-slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide slide_text_wrap mag_slide_text_wrap">
                                <a href="">
                                    <img src="./img/magagine_main.png" alt="">
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
                                    <img src="./img/magagine_main.png" alt="">
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
                                    <img src="./img/magagine_main.png" alt="">
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
                    <div class="best_item_more">
                        <a href="./magazine_section.php">매거진 더보기</a>
                    </div>
                </section>
                <section id="home_section_brand">
                    <h3>브랜드</h3>
                    <ul>
                        <li><a href="./brand_page.php"><img src="./img/brand_1.png" alt=""></a></li>
                        <li><a href="./brand_page.php"><img src="./img/brand_2.png" alt=""></a></li>
                        <li><a href="./brand_page.php"><img src="./img/brand_3.png" alt=""></a></li>
                        <li><a href="./brand_page.php"><img src="./img/brand_4.png" alt=""></a></li>
                        <li><a href="./brand_page.php"><img src="./img/brand_4.png" alt=""></a></li>
                        <li><a href="./brand_page.php"><img src="./img/brand_5.png" alt=""></a></li>
                    </ul>
                </section>
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

    $('#home_section_best .category_tabnav>ul>li>a').click(function () {
        $('#home_section_best .category_tabcontent > div').hide().filter(this.hash).fadeIn();
        $('#home_section_best .category_tabnav>ul>li>a').removeClass('on');
        $(this).addClass('on');
        return false;
    }).filter(':eq(0)').click();//home섹션 안에 tab처리


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

    $('#home_section_brand>ul>li>button').click(function () {
        $("#brand_page").css("display", "block")
    })

    $(".ico_left_arrow").click(function () {
        $("#brand_page").css("display", "none")
    });//브랜드 페이지

    $('.quick_menu_item').click(function () {
        $("#quick-ic_page").css("display", "block")
    })

    $(".ico_left_arrow").click(function () {
        $("#quick-ic_page").css("display", "none")
    });//브랜드 페이지

    $('.footer_ask>.service_center>button').click(function () {
        $("#service_center_page").css("display", "block")
    })

    $(".ico_left_arrow").click(function () {
        $("#service_center_page").css("display", "none");
    });//고객센터 페이지
</script>

</html>