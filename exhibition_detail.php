
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
    <link rel="stylesheet" href="css/exhibition_detail.css">
    <link rel="stylesheet" href="css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/common.js"></script>
</head>
<body>
    <div id="exhibition_detail">
        <div>
            <header id="header_type2">
                <div>
                    <a href="./index.php" class="ico_left_arrow"><span class="hide">뒤로가기</span></a>
                    <a href="" class="ico_share"><span class="hide">공유</span></a>
                </div>
            </header>
            <div class="exhibition_detail_title">
                <h3>인기상품 단독 프리오더 15% 세일!</h3>
                <p>2022.04.13 ~ 2022.08.31</p>
            </div>
            <section id="img">
                <img src="./img/exhibition_detail_img1.png" alt="">
                <img src="./img/exhibition_detail_img2.png" alt="">
            </section>
            <section id="coupon_wrap">
                <p class="coupon_number">혜택 01</p>
                <div class="coupon_name">전상품 20% 할인 쿠폰</div>
                <div class="coupon">
                    <p class="coupon_percent">20%</p>
                    <p class="coupon_text">COUPON</p>
                    <div class="coupon_download">
                        <button>
                            <img src="./img/ic_download.png" alt="">
                        </button>
                    </div>
                </div>
                <div class="coupon_description">
                    <ul>
                        <li>쿠폰은 해당 브랜드 상품 리스트에 한해 사용 가능</li>
                        <li>쿠폰은 기획전 기간 (2022.02.22 ~ 2022.04.22)에만 사용이 가능하며, 사전 고지 없이 변경 또는 종료될 수 있음</li>
                    </ul>
                </div>
            </section>
            <section id="shop_now">
                <img src="./img/shop_now.png" alt="">
                <div class="shop_now_text">
                    <p>CHATELAINE</p>
                    <a href="">
                        <div class="shop_now_btn">
                            <p>SHOP NOW</p>
                            <img src="./img/ic_right_arrow.png" alt="">
                        </div>
                    </a>
                </div>
            </section>
            <section id="one_depth_tab">
                <h3>#기획전ITEM</h3>
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
                                    <a href="">
                                        <div class="item_img">
                                            <img src="./img/item_img1.png" alt="">
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
                                    <div class="item_like">
                                        <button>
                                            <img src="./img/ic-like.png" alt="" class="img_change">
                                        </button>
                                    </div>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="item_img">
                                            <img src="./img/item_img2.png" alt="">
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
                                    <div class="item_like">
                                        <button>
                                            <img src="./img/ic-like.png" alt="" class="img_change">
                                        </button>
                                    </div>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="item_img">
                                            <img src="./img/item_img3.png" alt="">
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
                                    <div class="item_like">
                                        <button>
                                            <img src="./img/ic-like.png" alt="" class="img_change">
                                        </button>
                                    </div>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="item_img">
                                            <img src="./img/item_img4.png" alt="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
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
        </div>
    </div>
</body>
<script>
    $('#exhibition_detail .category_tabnav>ul>li>a').click(function () {
        $('#exhibition_detail .category_tabcontent > div').hide().filter(this.hash).fadeIn();
        $('#exhibition_detail .category_tabnav>ul>li>a').removeClass('on');
        $(this).addClass('on');
        return false;
    }).filter(':eq(0)').click();

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
</script>
</html>
