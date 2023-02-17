<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/item_detail.css">
    <link rel="stylesheet" href="./css/swiper.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>

<body>
    <div class="basket_animate">장바구니에 상품을 담았습니다.</div>
    <div id="item_detail">
        <div>
            <header id="header_type2">
                <div>
                    <div class="header_ico_wrap">
                        <a href="./index.php" class="ico_left_arrow"></a>
                        <div class="header_ico">
                            <a href="./search.php" class="ico_search"><span class="hide">검색</span></a>
                            <a href="" class="ico_shoppingbag"><span class="hide">쇼핑백</span></a>
                        </div>
                    </div>
                </div>
            </header>
            <div id="bottom">
                <div class="item_like">
                    <button>
                        <img src="./img/ic-like-gr.png" alt="" class="img_change">
                    </button>
                </div>
                <div class="purchase">
                    <button>구매하기</button>
                </div>
            </div>
            <div class="swiper item_detail_swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"><img src="./img/item_detail_main.png" alt=""></div>
                    <div class="swiper-slide"><img src="./img/item_detail_main.png" alt=""></div>
                    <div class="swiper-slide"><img src="./img/item_detail_main.png" alt=""></div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
            <section id="purchase_popup">
                <div class="purchase_body"></div>
                <div class="purchase_container">
                    <div class="touch_line_wrap">
                        <div class="touch_line"></div>
                    </div>
                    <h3>옵션</h3>
                    <div class="select_box_wrap">
                        <div class="select_box_container">
                            <div class="selectBox_type">
                                <button class="label">색상</button>
                                <ul class="optionList" id="crops1">
                                    <li class="optionItem"><span class="color_circle"></span><p>네이비</p></li>
                                    <li class="optionItem"><span class="color_circle"></span><p>레드</p></li>
                                    <li class="optionItem"><span class="color_circle"></span><p>카멜</p></li>
                                    <li class="optionItem"><span class="color_circle"></span><p>엘로우</p></li>
                                    <li class="optionItem"><span class="color_circle"></span><p>그린</p></li>
                                    <li class="optionItem"><span class="color_circle"></span><p>오렌지</p></li>
                                </ul>
                            </div>
                            <div class="selectBox_size">
                                <button class="label">사이즈</button>
                                <ul class="optionList" id="crops1">
                                    <li class="optionItem"><p class="size">55</p></li>
                                    <li class="optionItem"><p class="size">66</p></li>
                                    <li class="optionItem"><p class="size">77</p></li> 
                                    <li class="optionItem"><p class="size">88</p></li>
                                </ul>
                            </div>
                            <div class="purchase_item_wrap">
                                <div class="purchase_item_container">
                                    <div class="delete_btn"><img src="./img/ic-close_grey.png" alt=""></div>
                                    <div class="purchase_item_container_opt">
                                        <span class="color_circle"></span>
                                        <p>네이비</p>
                                        <span class="slash">/</span>
                                        <p class="size">55</p>
                                    </div>
                                    <div class="quantity">
                                        <div class="quantity_container">
                                            <div class="minus"><img src="./img/ic-minus.png" alt=""></div>
                                            <div class="num">1</div>
                                            <div class="plus"><img src="./img/ic-plus.png" alt=""></div>
                                        </div>
                                        <div class="item_price">
                                            <span class="price_num">127000</span><span>원</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- 상품 2개시 넘쳐서 안보이는거 밍댈한테 확인 --> 
                    <div class="purchase_container_bottom">
                        <div class="purchase_container_bottom_top">
                            <p>총 1개 상품</p>
                            <p class="total_price">127000원</p>
                        </div>
                         <div class="purchase_container_bottom_button">
                            <div class="basket_btn"><button>장바구니</button></div>
                            <div class="buyNow_btn"><a href="./order_page.php">바로구매</a></div>
                         </div>
                    </div>
                </div>
                </div>
            </section>
            <section id="item_detail_info">
                <div class="brand_name">CROCODILE LADIES</div>
                <div class="item_name">라운드넥 아가일 니트 CLAWSW102</div>
                <div class="item_price">
                    <div class="no_sale_price">
                        <div class="percent">20<span>%</span></div>
                        <div class="price">215,000</div>
                    </div>
                    <div class="sale_price">215,000</div>
                </div>
                <a href="./coupon_page.php"><p>쿠폰 발급 받기</p><img src="./img/ic-download-bk.png" alt=""></a>
            </section>
            <section id="shippingSaving">
                <div class="shipping_info">
                    <div class="shipping_info_grey">배송안내</div>
                    <div class="shipping_info_black">무료</div>
                </div>
                <div class="saving_point">
                    <div class="saving_point_grey">적립금</div>
                    <div class="saving_point_black">최대 1,270원 적립</div>
                </div>
            </section>
            <section id="review_wrap">
                <h3>BEST 후기</h3>
                <div class="best_review">
                    <div class="best_tag">BEST</div>
                    <div class="user_container">
                        <div class="review_star">
                            <img src="./img/ic-review point-gr.png" alt="">
                            <img src="./img/ic-review point-gr.png" alt="">
                            <img src="./img/ic-review point-gr.png" alt="">
                            <img src="./img/ic-review point-gr.png" alt="">
                            <img src="./img/ic-review point-gr.png" alt="">
                        </div>
                        <div class="user_container_right">
                            <div class="userId">abc*****</div>
                            <div class="date">22.10.01</div>
                        </div>
                    </div>
                    <div class="purchase_opt">
                        구매옵션 : <span class="color">핑크</span>/<span class="opt_right">비공개</span>
                    </div>
                    <div class="review_content">
                        158/60 상체 골격이 튼튼한 편인데 1사이즈도 널널해요! 두터운 니트 껴입고 입을 수 있는데, 패딩치고는 조금 얇긴 해요~ 빵빵하고 막 따수운 패딩은 아닌데 겨울에
                        편하게 입고다닐 정도? 키 작으시면 1사이즈 구매하세요~
                    </div>
                    <div class="review_img_wrap">
                        <img src="./img/Frame 2642.png" alt="">
                        <img src="./img/Frame 2642.png" alt="">
                        <img src="./img/Frame 2642.png" alt="">
                        <img src="./img/Frame 2642.png" alt="">
                        <img src="./img/Frame 2642.png" alt="">
                        <img src="./img/Frame 2642.png" alt="">
                    </div>
                    <div class="good_btn">
                        <button><img src="./img/ic-good.png" alt="" class="good_img_change"></button>
                        <span>1024</span>
                    </div>
                </div>
                <div class="allReview_btn">
                    <a href="#item_detail_tab2">후기 전체보기</a>
                </div>
            </section>
            <section id="item_detail_tab_wrap">
                <div class="item_detail_tabnav">
                    <div class="item_detail_tabnav_container">
                        <ul>
                            <li><a href="#item_detail_tab1" class="on">상품정보</a></li>
                            <li><a href="#item_detail_tab2">후기<span class="review_count">68</span></a></li>
                            <li><a href="#item_detail_tab3">Q&A<span class="qa_count">20</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="item_detail_tab_content">
                    <div id="item_detail_tab1" class="tab">
                        <div class="item_detail_tab1_img">
                            <img src="./img/item_detail_scroll.png" alt="">
                        </div>
                        <div class="fold_btn">
                            <button>
                                <p>상품정보 더보기</p>
                                <img src="./img/ic-arrow-down-24.png" alt="">
                            </button>
                        </div>
                        <div class="item_info_fold_wrap">
                            <ul>
                                <li>
                                    <button>
                                        <p>상세정보</p>
                                        <img src="./img/ic-arrow-down-24.png" alt="">
                                    </button>
                                </li>
                                <li>
                                    <button>
                                        <p>상품정보 제공고시</p>
                                        <img src="./img/ic-arrow-down-24.png" alt="">
                                    </button>
                                </li>
                                <li>
                                    <button>
                                        <p>결제/배송/반품 안내</p>
                                        <img src="./img/ic-arrow-down-24.png" alt="">
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="relation_item">
                            <div class="cody_item">
                                <h3>코디된 상품</h3>
                                <ul>
                                    <li>
                                        <button>
                                            <div class="item_img">
                                                <img src="./img/item_2.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                        </button>
                                    </li>
                                    <li>
                                        <button>
                                            <div class="item_img">
                                                <img src="./img/item_2.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="soldOut">
                                                <p>SOLD OUT</p>
                                            </div>
                                        </button>
                                    </li>
                                    <li>
                                        <button>
                                            <div class="item_img">
                                                <img src="./img/item_2.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                        </button>
                                    </li>
                                    <li>
                                        <button>
                                            <div class="item_img">
                                                <img src="./img/item_2.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="together_item">
                                <h3>이 상품과 함께 본 상품</h3>
                                <ul>
                                    <li>
                                        <button>
                                            <div class="item_img">
                                                <img src="./img/item_2.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                        </button>
                                    </li>
                                    <li>
                                        <button>
                                            <div class="item_img">
                                                <img src="./img/item_2.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                        </button>
                                    </li>
                                    <li>
                                        <button>
                                            <div class="item_img">
                                                <img src="./img/item_2.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                        </button>
                                    </li>
                                    <li>
                                        <button>
                                            <div class="item_img">
                                                <img src="./img/item_2.png" alt="">
                                            </div>
                                            <div class="tab_item">
                                                <P class="title">CHALI</P>
                                                <P class="caption">Lorem ipsum dolor
                                                    sit,ametconsecteturddddddddddddddddddddddddddddddd</P>
                                            </div>
                                            <div class="item_price">
                                                <div class="no_sale_price">
                                                    <div class="percent">20<span>%</span></div>
                                                    <div class="price">215,000</div>
                                                </div>
                                            </div>
                                            <div class="coupon">
                                                <p>쿠폰</p>
                                            </div>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="item_detail_tab2" class="tab">
                        <div id="review_grade">
                            <div class="review_grade_container">
                                <div class="star_grade_wrap">
                                    <div class="ic_star_wrap">
                                        <img src="./img/ic-review point.png" alt="">
                                    </div>
                                    <span>4.7</span>
                                </div>
                                <div class="gauge_grade_wrap">
                                    <ul>
                                        <li>
                                            <p class="gauge_grade_text">아주 좋아요</p>
                                            <div class="gauge_grade_bar">
                                                <div class="gauge_grade_bar_gauge"></div>
                                            </div>
                                            <p class="gauge_grade_count">2233</p>
                                        </li>
                                        <li>
                                            <p class="gauge_grade_text">맘에 들어요</p>
                                            <div class="gauge_grade_bar">
                                                <div class="gauge_grade_bar_gauge"></div>
                                            </div>
                                            <p class="gauge_grade_count">2233</p>
                                        </li>
                                        <li>
                                            <p class="gauge_grade_text">보통이에요</p>
                                            <div class="gauge_grade_bar">
                                                <div class="gauge_grade_bar_gauge"></div>
                                            </div>
                                            <p class="gauge_grade_count">2233</p>
                                        </li>
                                        <li>
                                            <p class="gauge_grade_text">그냥 그래요</p>
                                            <div class="gauge_grade_bar">
                                                <div class="gauge_grade_bar_gauge"></div>
                                            </div>
                                            <p class="gauge_grade_count">2233</p>
                                        </li>
                                        <li>
                                            <p class="gauge_grade_text">별로에요</p>
                                            <div class="gauge_grade_bar">
                                                <div class="gauge_grade_bar_gauge"></div>
                                            </div>
                                            <p class="gauge_grade_count">2232</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="review_list_wrap">
                            <h3>구매후기</h3>
                            <div class="checkBox_sort">
                                <div class="checkBox">
                                    <label>
                                        <input type="checkbox" id="check_btn">
                                        <span>포토리뷰만 보기</span>
                                    </label>
                                </div>
                                <div class="sort_wrap">
                                    <button class="sort">
                                        <p>최신순</p>
                                        <img src="./img/ic-sort.png" alt="">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="best_review">
                                <div class="user_container">
                                    <div class="review_star">
                                        <div class="best_tag">BEST</div>
                                        <img src="./img/ic-review point-rd (small).png" alt="">
                                        <img src="./img/ic-review point-rd (small).png" alt="">
                                        <img src="./img/ic-review point-rd (small).png" alt="">
                                        <img src="./img/ic-review point-rd (small).png" alt="">
                                        <img src="./img/ic-review point-rd (small).png" alt="">
                                    </div>
                                    <div class="user_container_right">
                                        <div class="userId">abc*****</div>
                                        <div class="date">22.10.01</div>
                                    </div>
                                </div>
                                <div class="purchase_opt">
                                    구매옵션 : <span class="color">핑크</span>/<span class="opt_right">비공개</span>
                                </div>
                                <div class="review_content">
                                    158/60 상체 골격이 튼튼한 편인데 1사이즈도 널널해요! 두터운 니트 껴입고 입을 수 있는데, 패딩치고는 조금 얇긴 해요~ 빵빵하고 막 따수운 패딩은 아닌데 겨울에
                                    편하게 입고다닐 정도? 키 작으시면 1사이즈 구매하세요~
                                </div>
                                <div class="review_img_wrap">
                                    <img src="./img/Frame 2642.png" alt="">
                                    <img src="./img/Frame 2642.png" alt="">
                                    <img src="./img/Frame 2642.png" alt="">
                                    <img src="./img/Frame 2642.png" alt="">
                                    <img src="./img/Frame 2642.png" alt="">
                                    <img src="./img/Frame 2642.png" alt="">
                                </div>
                                <div class="good_btn">
                                    <button><img src="./img/ic-good.png" alt="" class="good_img_change"></button>
                                    <span>1024</span>
                                </div>
                            </div>
                            <div class="best_review">
                                <div class="user_container">
                                    <div class="review_star">
                                        <div class="best_tag">BEST</div>
                                        <img src="./img/ic-review point-rd (small).png" alt="">
                                        <img src="./img/ic-review point-rd (small).png" alt="">
                                        <img src="./img/ic-review point-rd (small).png" alt="">
                                        <img src="./img/ic-review point-rd (small).png" alt="">
                                        <img src="./img/ic-review point-rd (small).png" alt="">
                                    </div>
                                    <div class="user_container_right">
                                        <div class="userId">abc*****</div>
                                        <div class="date">22.10.01</div>
                                    </div>
                                </div>
                                <div class="purchase_opt">
                                    구매옵션 : <span class="color">핑크</span>/<span class="opt_right">비공개</span>
                                </div>
                                <div class="review_content">
                                    158/60 상체 골격이 튼튼한 편인데 1사이즈도 널널해요! 두터운 니트 껴입고 입을 수 있는데, 패딩치고는 조금 얇긴 해요~ 빵빵하고 막 따수운 패딩은 아닌데 겨울에
                                    편하게 입고다닐 정도? 키 작으시면 1사이즈 구매하세요~
                                </div>
                                <div class="review_img_wrap">
                                    <img src="./img/Frame 2642.png" alt="">
                                    <img src="./img/Frame 2642.png" alt="">
                                    <img src="./img/Frame 2642.png" alt="">
                                    <img src="./img/Frame 2642.png" alt="">
                                    <img src="./img/Frame 2642.png" alt="">
                                    <img src="./img/Frame 2642.png" alt="">
                                </div>
                                <div class="good_btn">
                                    <button><img src="./img/ic-good.png" alt="" class="good_img_change"></button>
                                    <span>1024</span>
                                </div>
                            </div>
                            <div class="best_review">
                                <div class="user_container">
                                    <div class="review_star">
                                        <div class="best_tag">BEST</div>
                                        <img src="./img/ic-review point-rd (small).png" alt="">
                                        <img src="./img/ic-review point-rd (small).png" alt="">
                                        <img src="./img/ic-review point-rd (small).png" alt="">
                                        <img src="./img/ic-review point-rd (small).png" alt="">
                                        <img src="./img/ic-review point-rd (small).png" alt="">
                                    </div>
                                    <div class="user_container_right">
                                        <div class="userId">abc*****</div>
                                        <div class="date">22.10.01</div>
                                    </div>
                                </div>
                                <div class="purchase_opt">
                                    구매옵션 : <span class="color">핑크</span>/<span class="opt_right">비공개</span>
                                </div>
                                <div class="review_content">
                                    158/60 상체 골격이 튼튼한 편인데 1사이즈도 널널해요! 두터운 니트 껴입고 입을 수 있는데, 패딩치고는 조금 얇긴 해요~ 빵빵하고 막 따수운 패딩은 아닌데 겨울에
                                    편하게 입고다닐 정도? 키 작으시면 1사이즈 구매하세요~
                                </div>
                                <div class="review_img_wrap">
                                    <img src="./img/Frame 2642.png" alt="">
                                    <img src="./img/Frame 2642.png" alt="">
                                    <img src="./img/Frame 2642.png" alt="">
                                    <img src="./img/Frame 2642.png" alt="">
                                    <img src="./img/Frame 2642.png" alt="">
                                    <img src="./img/Frame 2642.png" alt="">
                                </div>
                                <div class="good_btn">
                                    <button><img src="./img/ic-good.png" alt="" class="good_img_change"></button>
                                    <span>1024</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="item_detail_tab3" class="tab">
                        <div class="item_question_btn">
                            <a href="">상품 문의하기</a>
                        </div>
                        <div class="qa_list_wrap">
                            <h3>Q&A<span class="qa_count">40</span></h3>
                            <div class="qa_no_list_container">
                                <p>아직 등록된 Q&A가 없어요.</p>
                            </div>
                            <div class="qa_list_container">
                                <ul>
                                    <li>
                                        <div class="unfold_box">
                                            <div class="question_type">
                                                <p class="question_type_text">기타문의</p>
                                                <img src="./img/closed.png" alt="">
                                            </div>
                                            <div class="answer_user">
                                                <div class="answer_user_left">
                                                    <div class="answer_state">답변대기</div>
                                                    <div class="user_id">abc*****</div>
                                                    <div class="date">22.10.01</div>
                                                </div>
                                                <div class="delete_btn">
                                                    <button>삭제</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fold_box">
                                            <div class="fold_box_question">
                                                <div class="fold_box_question_left">문의</div>
                                                <div class="fold_box_question_right">배송이 얼마나 걸릴까요?</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unfold_box">
                                            <div class="question_type">
                                                <p class="question_type_text">기타문의</p>
                                                <img src="./img/closed.png" alt="">
                                            </div>
                                            <div class="answer_user">
                                                <div class="answer_user_left">
                                                    <div class="answer_state">답변대기</div>
                                                    <div class="user_id">abc*****</div>
                                                    <div class="date">22.10.01</div>
                                                </div>
                                                <div class="delete_btn">
                                                    <button>삭제</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fold_box">
                                            <div class="fold_box_question">
                                                <div class="fold_box_question_left">문의</div>
                                                <div class="fold_box_question_right">배송이 얼마나 걸릴까요?</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unfold_box">
                                            <div class="question_type">
                                                <p class="question_type_text">기타문의</p>
                                                <img src="./img/closed.png" alt="">
                                            </div>
                                            <div class="answer_user">
                                                <div class="answer_user_left">
                                                    <div class="answer_state">답변대기</div>
                                                    <div class="user_id">abc*****</div>
                                                    <div class="date">22.10.01</div>
                                                </div>
                                                <div class="delete_btn">
                                                    <button>삭제</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fold_box">
                                            <div class="fold_box_question">
                                                <div class="fold_box_question_left">문의</div>
                                                <div class="fold_box_question_right">배송이 얼마나 걸릴까요?</div>
                                            </div>
                                            <div class="fold_box_answer">
                                                <div class="fold_box_answer_container">
                                                    <div class="fold_box_answer_left">답변</div>
                                                    <div class="fold_box_answer_right">네 고객님 해당상품 목요일 or 금요일 출고 예정입니다.기다리시는 상품 빠르게 전달드릴 수 있도록 노력하겠습니다.</div>
                                                </div>
                                                <div class="fold_box_answer_user">
                                                    <div class="user_brand">크로커다일레이디</div>
                                                    <div class="date">22.10.01<span class="time">11:29</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>  
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>
<script>
    var swiper = new Swiper('.item_detail_swiper', {
        pagination: {
            el: ".swiper-pagination",
            type: "fraction",
        }
    });

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

    var num = 0;
    $(".good_img_change").click(function () {
        if (num == 0) {
            $(this).attr("src", "./img/ic-good-active.png");
            num = 1;
        } else {
            $(this).attr("src", "./img/ic-good.png");
            num = 0;
        }
    });//이미지 변경

    $('.item_detail_tabnav_container>ul>li>a').click(function () {
        $('.item_detail_tab_content > div').hide().filter(this.hash).fadeIn();
        $('.item_detail_tabnav_container>ul>li>a').removeClass('on');
        $(this).addClass('on');
        return false;
    }).filter(':eq(0)').click();

    $('.fold_btn').click(function () {
        $(this).css('display', 'none')
        $(this).siblings('.item_detail_tab1_img').css({ "height": "100%", "oveflow": "visible" })
    })

    var offset = $('.item_detail_tabnav').offset();
    $(window).scroll(function () {
        if ($(window).scrollTop() > offset.top) {
            $('.item_detail_tabnav').addClass('on');
        } else {
            $('.item_detail_tabnav').removeClass('on');
        }
    });

    $('.selectBox_type>.label').click(function(){
        $(this).toggleClass('on')
        $('.selectBox_type>.optionList').toggleClass('on')
        $('.selectBox_type>.optionList>.optionItem').click(function(){
            var text_change = $(this).text()
            $('.selectBox_type>.label').text(text_change).css("color","#222")
            $('.selectBox_type>.optionList>.optionItem').css("background","none")
            $(this).css("background","#f5f5f5")
            $('.selectBox_type>.optionList').removeClass('on')
            $('.selectBox_type>.label').removeClass('on')
            $('.selectBox_type_detail').css("display","block")
        })
    })

    $('.selectBox_size>.label').click(function(){
        $(this).toggleClass('on')
        $('.selectBox_size>.optionList').toggleClass('on')
        $('.selectBox_size>.optionList>.optionItem').click(function(){
            var text_change = $(this).text()
            $('.selectBox_size>.label').text(text_change).css("color","#222")
            $('.selectBox_size>.optionList>.optionItem').css("background","none")
            $(this).css("background","#f5f5f5")
            $('.selectBox_size>.optionList').removeClass('on')
            $('.selectBox_size>.label').removeClass('on')
            $('.selectBox_size_detail').css("display","block")
        })
    })

    $(".purchase>button").click(function () {
        $('body').addClass('hidden')
        $('#purchase_popup>.purchase_body').css({ "display": "block", "background": "rgba(0,0,0,0.5)" })
        $('#purchase_popup>.purchase_container').addClass('fixed')
    })
    $("#purchase_popup>.purchase_body").click(function () {
        $('body').removeClass('hidden')
        $('#purchase_popup>.purchase_body').css({ "display": "none", "background": "none" })
        $('#purchase_popup>.purchase_container').removeClass('fixed')
    })
    $(".touch_line_wrap").click(function () {
        $('body').removeClass('hidden')
        $('#purchase_popup>.purchase_body').css({ "display": "none", "background": "none" })
        $('#purchase_popup>.purchase_container').removeClass('fixed')
    })//purchase_popup

    $(".basket_btn").click(function () {
        $('body').removeClass('hidden')
        $('#purchase_popup>.purchase_body').css({ "display": "none", "background": "none" })
        $('#purchase_popup>.purchase_container').removeClass('fixed')
        $('.basket_animate').fadeIn(1500)
        $('.basket_animate').fadeOut(1500)
    })//장바구니클릭버튼

    var count=1;
    var itemPrice= $('.price_num').text()
    $('.plus').click(function(){
        count=count+1;
        $('.num').text(count)
        $('.price_num').text(itemPrice*count)
    })//구매하기 안에 플러스 버튼

    $('.minus').click(function(){
        if(count < 2){
            return false;
        }else{
            count -= 1;
            $('.num').text(count)
            $('.price_num').text(itemPrice*count)
        }
    })//구매하기 안에 마이너스 버튼

    $('.delete_btn').click(function(){
        $(this).parents('.purchase_item_wrap').remove()
    })//구매하기 안에 x버튼
    
    $('.allReview_btn').click(function(){
        $('.item_detail_tabnav_container>ul>li>a').removeClass('on');
        $('.item_detail_tabnav_container>ul>li:nth-child(2)>a').addClass('on')
        $('.tab').css('display','none')
        $('#item_detail_tab2').css("display","block")
    })

    $('.unfold_box .delete_btn').click(function(){
        $(this).parents('li').remove()

        lalal();
    })

    $('.unfold_box').click(function(){
        $(this).siblings('.fold_box').toggleClass('on')
    })

    var reviewCount = $('.tab .best_review').length;
    $('.review_count').text(reviewCount)//후기카운트

    function lalal () {
        var qaCount = $('.qa_list_container>ul>li').length;
        $('.qa_count').text(qaCount)
    }

    lalal();

    // var qaCount = $('.qa_list_container>ul>li').length;
    // $('.qa_count').text(qaCount)
</script>

</html>