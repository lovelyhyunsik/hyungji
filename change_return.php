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
    <link rel="stylesheet" href="./css/swiper-bu ndle.min.css" />
    <link rel="stylesheet" href="./css/swiper.css">
    <link rel="stylesheet" href="./css/change_return.css">
    <link rel="stylesheet" href="./css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>

<body>
    <header id="headerType2">
        <div>
            <p>교환/반품</p>
            <div class="headerIcoWrap">
                <a href="./bottom_gnb_mypage_member.php" class="icoLeftArrow"><span class="hide">뒤로가기</span></a>
                <div class="headerIco">
                    <a href="./search.php" class="icoSearch"><span class="hide">검색아이콘</span></a>
                    <a href="./shoppingbag.php" class="icoShoppingbag"><span class="hide">쇼핑백아이콘</span></a>
                </div>
            </div>
        </div>
    </header>
    <div class="changeReturnTop">
        <span>상품 준비 중에는 배송상태에 따라 <br>승인 되지 않을 수 있습니다</span>
    </div>
    <div class="tab_wrap">
        <div class="tab_nav">
            <ul>
                <li><a href="#tab1" class="on">교환</a></li>
                <li><a href="#tab2">반품</a></li>
            </ul>
        </div>
        <div class="tab_content">
            <div id="tab1" class="tab">
                <div class="itemThum">
                    <img src="./img/Frame 2642.png" alt="">
                    <div class="itemThumText">
                        <div class="brandName">CHATELAINE</div>
                        <div class="itemName">브러쉬 립조직 하이넥 티셔츠HCAWTS103</div>
                        <div class="itemOpt">
                            <span class="color">블랙</span>ㅣ<span class="size">S</span>
                        </div>
                    </div>
                </div>
                <div class="changeOpt">
                    <span>교환옵션</span>
                    <div class="popBox">
                        <button class="label">사유를 선택해주세요</button>
                    </div>
                </div>
                <div class="reason">
                    <span>교환 / 반품 사유</span>
                    <div class="selectBox_type">
                        <button class="label">사유를 선택해주세요</button>
                        <ul class="optionItem_wrap" id="crops1">
                            <li class="optionItem">단순변심</li>
                            <li class="optionItem">상품불량</li>
                            <li class="optionItem">배송지연</li>
                            <li class="optionItem">배송사고</li>
                            <li class="optionItem">기타</li>
                        </ul>
                    </div>
                </div>
                <span class="textfiledTitle">상세사유를 입력해주세요</span>
                <div id="textfiled">
                    <textarea id="textBox" placeholder="사유를 입력해주세요"></textarea>
                    <span id="reCount">0/100</span>
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
                                        <li class="optionItem"><span class="color_circle"></span>
                                            <p>네이비</p>
                                        </li>
                                        <li class="optionItem"><span class="color_circle"></span>
                                            <p>레드</p>
                                        </li>
                                        <li class="optionItem"><span class="color_circle"></span>
                                            <p>카멜</p>
                                        </li>
                                        <li class="optionItem"><span class="color_circle"></span>
                                            <p>엘로우</p>
                                        </li>
                                        <li class="optionItem"><span class="color_circle"></span>
                                            <p>그린</p>
                                        </li>
                                        <li class="optionItem"><span class="color_circle"></span>
                                            <p>오렌지</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="selectBox_size">
                                    <button class="label">사이즈</button>
                                    <ul class="optionList" id="crops1">
                                        <li class="optionItem">
                                            <p class="size">55</p>
                                        </li>
                                        <li class="optionItem">
                                            <p class="size">66</p>
                                        </li>
                                        <li class="optionItem">
                                            <p class="size">77</p>
                                        </li>
                                        <li class="optionItem">
                                            <p class="size">88</p>
                                        </li>
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
                                <div class="cancel"><button>취소</button></div>
                                <div class="select"><button>선택</button></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div id="tab2" class="tab">
                <div class="itemThum">
                    <img src="./img/Frame 2642.png" alt="">
                    <div class="itemThumText">
                        <div class="brandName">CHATELAINE</div>
                        <div class="itemName">브러쉬 립조직 하이넥 티셔츠HCAWTS103</div>
                        <div class="itemOpt">
                            <span class="color">블랙</span>ㅣ<span class="size">S</span>
                        </div>
                    </div>
                </div>
                <div class="reason">
                    <span>교환 / 반품 사유</span>
                    <div class="selectBox_type">
                        <button class="label">사유를 선택해주세요</button>
                        <ul class="optionItem_wrap" id="crops1">
                            <li class="optionItem">단순변심</li>
                            <li class="optionItem">상품불량</li>
                            <li class="optionItem">배송지연</li>
                            <li class="optionItem">배송사고</li>
                            <li class="optionItem">기타</li>
                        </ul>
                    </div>
                </div>
                <span class="textfiledTitle">상세사유를 입력해주세요</span>
                <div id="textfiled">
                    <textarea id="textBox" placeholder="사유를 입력해주세요"></textarea>
                    <span id="reCount">0/100</span>
                </div>
                <div class="refundPrice">
                    <div class="refundTitle">
                        <h3>환불금액</h3>
                        <span class="ic_arrow"></span>
                    </div>
                    <div class="refundContent">
                        <div class="refundContentTop">
                            <div class="allItemPrice">
                                <div class="allItemPrice_l">총 상품금액</div>
                                <div class="allItemPrice_r">127,000원</div>
                            </div>
                            <div class="shippingPay">
                                <div class="shippingPay_l">배송비</div>
                                <div class="shippingPay_r">0원</div>
                            </div>
                            <div class="couponSale">
                                <div class="couponSale_l">할인쿠폰 사용</div>
                                <div class="couponSale_r ">-5,000원</div>
                            </div>
                            <div class="savingPoint">
                                <div class="savingPoint_l">적립금 사용</div>
                                <div class="savingPoint_r">0원</div>
                            </div>
                        </div>
                        <div class="refundContentBottom">
                            <div class="finalPrice">
                                <div class="finalPrice_l">총 환불금액</div>
                                <div class="finalPrice_r">
                                    <span class="finalPriceNum">122,000원</span>
                                    <span class="finalSavingPoint">총 적립예정 금액 2,700원</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="refundMethod">
                    <div class="refundMethodTitle">
                        <h3>환불수단</h3>
                        <span class="ic_arrow"></span>
                    </div>
                    <div class="refundMethodContent">
                        <div class="refundMethodContent_l">총 환불금액</div>
                        <div class="refundMethodContent_r">
                            <span class="refundMethodContent_r_t">환불예정일</span>
                            <span class="refundMethodContent_r_b">반품 완료 후 영업일 기준 3~5일</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="notice">
        <div class="noticeTitle">
            <div class="noticeTitle_l">
                <img src="./img/ic-notice.png" alt="">
                <p>취소/반품/교환 안내</p>
            </div>
            <div class="noticeTitle_r">
                <span class="ic_arrow"></span>
            </div>
        </div>
        <div class="noticeGreyBox">
            <p>- 결제 완료 이후 품절/결품이 발생한 경우, 고객님께 문자 서비스를 통해 품절/결품 안내를 드리고 있으며, '마이페이지 > 주문배송조회'에서도 품절/결품 여부를 확인하실 수 있습니다.
            </p>
            <p>- 품절/결품된 주문상품은 품절/결품 문자 서비스 안내 후 자동취소해 드리며, 재결제가 필요한 경우 추가 안내 드립니다.</p>
        </div>
    </div>
    <div class="bottom">
        <div class="bottomContainer">
            <a href="./change_return_method.php">다음</a><!-- 셀렉트박스 체크되고 textBox에 텍스트 기입시 class='on' 추가 -->
        </div>
    </div>
</body>
<script>
    $('.selectBox_type>.label').click(function () {
        $(this).toggleClass('on');
        $('.selectBox_type>.optionItem_wrap').toggleClass('on')
    })



    $('.selectBox_type>.optionItem_wrap>.optionItem').click(function (e) {
        var text_change = $(this).text()
        $('.selectBox_type>.label').text(text_change).css("color", "#222")
        $('.selectBox_type>.optionItem_wrap>.optionItem').css("background", "none")
        $(this).css("background", "#f5f5f5")
        $('.selectBox_type>.optionItem_wrap').removeClass('on')
        $('.selectBox_type>.label').removeClass('on')
        $('.selectBox_type_detail').css("display", "block")

        var optionType = e.target.dataset.id;
        $('.optionList').css("display", "none")
        $(`.optionList.${optionType}`).css('display', 'block');

        $('.selectBox_type>.optionItem_wrap').removeClass('on');
    })

    $('.selectBox_type_detail>.label').click(function () {
        $(this).toggleClass('on');
        $('.selectBox_type>.optionItem_wrap').removeClass('on');
        /* $('.selectBox_type_detail>.optionList').toggleClass('on') */
    })

    $('.selectBox_type>.label').click(function () {
        $(this).toggleClass('on')
        $('.selectBox_type>.optionList').toggleClass('on')
        $('.selectBox_type>.optionList>.optionItem').click(function () {
            var text_change = $(this).text()
            $('.selectBox_type>.label').text(text_change).css("color", "#222")
            $('.selectBox_type>.optionList>.optionItem').css("background", "none")
            $(this).css("background", "#f5f5f5")
            $('.selectBox_type>.optionList').removeClass('on')
            $('.selectBox_type>.label').removeClass('on')
            $('.selectBox_type_detail').css("display", "block")
        })
    })

    $('.selectBox_size>.label').click(function () {
        $(this).toggleClass('on')
        $('.selectBox_size>.optionList').toggleClass('on')
        $('.selectBox_size>.optionList>.optionItem').click(function () {
            var text_change = $(this).text()
            $('.selectBox_size>.label').text(text_change).css("color", "#222")
            $('.selectBox_size>.optionList>.optionItem').css("background", "none")
            $(this).css("background", "#f5f5f5")
            $('.selectBox_size>.optionList').removeClass('on')
            $('.selectBox_size>.label').removeClass('on')
            $('.selectBox_size_detail').css("display", "block")
        })
    })

    $('.tab_nav>ul>li>a').click(function () {
        $('.tab_content > div').hide().filter(this.hash).fadeIn();
        $('.tab_nav>ul>li>a').removeClass('on');
        $(this).addClass('on');
        return false;
    }).filter(':eq(0)').click();

    $('.noticeTitle_r>.ic_arrow').click(function () {
        $(this).toggleClass('on');
        $('.notice>.noticeGreyBox').toggleClass('on')
    })

    $(".popBox>.label").click(function () {
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

    var count = 1;
    var itemPrice = $('.price_num').text()
    $('.plus').click(function () {
        count = count + 1;
        $('.num').text(count)
        $('.price_num').text(itemPrice * count)
    })//구매하기 안에 플러스 버튼

    $('.minus').click(function () {
        if (count < 2) {
            return false;
        } else {
            count -= 1;
            $('.num').text(count)
            $('.price_num').text(itemPrice * count)
        }
    })//구매하기 안에 마이너스 버튼

    $('.delete_btn').click(function () {
        $(this).parents('.purchase_item_wrap').remove()
    })//구매하기 안에 x버튼
</script>

</html>