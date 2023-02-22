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
    <link rel="stylesheet" href="css/shoppingbag.css">
    <link rel="stylesheet" href="css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
    <header id="header_type2"> 
        <div>
            <p>장바구니</p>
            <div class="header_ico_wrap">
                <a href="./index.php" class="ico_left_arrow"></a>
                <div class="header_ico">
                </div>
            </div>
        </div>
    </header>
    <nav id="bottom_gnb" style="display: none;"><!-- item이 없을때 나타나게 -->
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
                <a href="./bottom_gnb_mypage_non-member.php" class="ico_mypage">
                    <img src="./img/ic-my.png" alt="하단마이페이지아이콘">
                    <p>마이</p>
                </a>
            </li>
        </ul>
    </nav>
    <section id="no_item" style="display: none;"><!-- 아이템없을경우 display:none 처리해놨습니다. -->
        <p>장바구니가 비어있어요 <br>새로운 상품으로 채워주세요</p>
        <a href="./best_section.php">베스트 상품 보러가기</a>
    </section>
    <section id="item">
          <div class="itemWrapCheckDelete">
            <label>
                <input type="checkbox" id="check_btn">
                <span>상품 전체 선택(3/4)</span>
            </label>
            <button class="delete">삭제</button>
          </div>
          <ul>
            <div class="brandName">CHATELAINE</div>
            <li>
                <div class="itemCheckDelete">
                    <label>
                        <input type="checkbox" id="check_btn">
                        <span>라운드넥 아가일 니트 CLAWSW102CLAAAAAAA</span>
                    </label>
                    <button class="delete">
                        <img src="./img/ic-close_grey.png" alt="">
                    </button>
                </div>
                <div class="itemInfoWrap">
                    <div class="itemImg">
                        <a href="">
                            <img src="./img/brand_thum_test.png" alt="">
                            <div class="soldOut">
                                SOLD OUT
                            </div>
                        </a>
                    </div>
                    <div class="itemInfo">
                        <div class="itemName"><span class="color">네이비</span>/<span class="size">55</span>/<span class="count">1개</span></div>
                        <div class="itemPrice">127,000원</div>
                        <button class="optionChange">옵션/수량 변경</button>
                    </div>
                </div>
            </li>
            <li>
                <div class="itemCheckDelete">
                    <label>
                        <input type="checkbox" id="check_btn">
                        <span>라운드넥 아가일 니트 CLAWSW102CLAAAAAAA</span>
                    </label>
                    <button class="delete">
                        <img src="./img/ic-close_grey.png" alt="">
                    </button>
                </div>
                <div class="itemInfoWrap">
                    <a href="">
                        <img src="./img/brand_thum_test.png" alt="">
                    </a>
                    <div class="itemInfo">
                        <div class="itemName"><span class="color">네이비</span>/<span class="size">55</span>/<span class="count">1개</span></div>
                        <div class="itemPrice">127,000원</div>
                        <button class="optionChange">옵션/수량 변경</button>
                    </div>
                </div>
            </li>
          </ul>
          <ul>
            <div class="brandName">CROCODILE LADIES</div>
            <li>
                <div class="itemCheckDelete">
                    <label>
                        <input type="checkbox" id="check_btn">
                        <span>라운드넥 아가일 니트 CLAWSW102CLAAAAAAA</span>
                    </label>
                    <button class="delete">
                        <img src="./img/ic-close_grey.png" alt="">
                    </button>
                </div>
                <div class="itemInfoWrap">
                    <a href="">
                        <img src="./img/brand_thum_test.png" alt="">
                    </a>
                    <div class="itemInfo">
                        <div class="itemName"><span class="color">네이비</span>/<span class="size">55</span>/<span class="count">1개</span></div>
                        <div class="itemPrice">127,000원</div>
                        <button class="optionChange">옵션/수량 변경</button>
                    </div>
                </div>
            </li>
            <li>
                <div class="itemCheckDelete">
                    <label>
                        <input type="checkbox" id="check_btn">
                        <span>라운드넥 아가일 니트 CLAWSW102CLAAAAAAA</span>
                    </label>
                    <button class="delete">
                        <img src="./img/ic-close_grey.png" alt="">
                    </button>
                </div>
                <div class="itemInfoWrap">
                    <a href="">
                        <img src="./img/brand_thum_test.png" alt="">
                    </a>
                    <div class="itemInfo">
                        <div class="itemName"><span class="color">네이비</span>/<span class="size">55</span>/<span class="count">1개</span></div>
                        <div class="itemPrice">127,000원</div>
                        <button class="optionChange">옵션/수량 변경</button>
                    </div>
                </div>
            </li>
          </ul>
          <div class="finalPriceWrap">
            <h3>최종 결제 금액</h3>
            <div class="finalPriceContainer">
                <div class="finalPriceContainer_t">
                    <div class="allItemPrice">
                        <div class="allItemPrice_l">총 상품긍액</div>
                        <div class="allItemPrice_r">0원</div>
                    </div>
                    <div class="shippingPrice">
                        <div class="shippingPrice_l">배송비</div>
                        <div class="shippingPrice_r">0원</div>
                    </div>
                </div>
                <div class="finalPriceContainer_b">
                    <div class="finalPriceContainer_bl">총 결제 예정 금액</div>
                    <div class="finalPriceContainer_br">0원</div>
                </div>
            </div>
          </div>
          <div class="bottom">
            <a href="">총 0개 구매하기</a>
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
                     <div class="purchase_container_bottom_button">
                        <div class="cancel"><button>취소</button></div>
                        <div class="change"><a href="./item_detail.php">변경</a></div>
                     </div>
                </div>
            </div>
            </div>
        </section>
    </section>

</body>
<script>
    $('.itemCheckDelete>.delete').click(function(){
        $(this).parents('li').remove();
    })//아이템 x버튼 누르면 삭제

    $(".optionChange").click(function () {
        $('body').addClass('hidden')
        $('#purchase_popup>.purchase_body').css({ "display": "block", "background": "rgba(0,0,0,0.5)" })
        $('#purchase_popup>.purchase_container').addClass('fixed')
    })
    $("#purchase_popup>.purchase_body").click(function () {
        $('body').removeClass('hidden')
        $('#purchase_popup>.purchase_body').css({ "display": "none", "background": "none" })
        $('#purchase_popup>.purchase_container').removeClass('fixed')
    })
    $(".purchase_container_bottom_button>.cancel").click(function () {
        $('body').removeClass('hidden')
        $('#purchase_popup>.purchase_body').css({ "display": "none", "background": "none" })
        $('#purchase_popup>.purchase_container').removeClass('fixed')
    })
    $(".touch_line_wrap").click(function () {
        $('body').removeClass('hidden')
        $('#purchase_popup>.purchase_body').css({ "display": "none", "background": "none" })
        $('#purchase_popup>.purchase_container').removeClass('fixed')
    })//purchase_popup
</script>
</html>