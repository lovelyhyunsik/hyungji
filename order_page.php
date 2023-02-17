<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/order_page.css">
    <link rel="stylesheet" href="./css/swiper.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
    <div id="oreder_page">
        <div>
            <header id="header_type2">
                <div>
                    <p>주문서</p>
                    <div class="header_ico_wrap">
                        <a href="./item_detail.php" class="ico_left_arrow"></a>
                    </div>
                </div>
            </header>
            <section id="order_item_wrap">
                <h3>주문상품<span class="count">2</span></h3>
                <div class="order_item_container">
                    <div class="brand_name">CHATELAINE</div>
                    <div class="order_item_container_b">
                        <div class="order_item_img">
                            <img src="./img/item_2.png" alt="">
                        </div>
                        <div class="order_item_container_bl">
                            <p class="item_name">라운드넥 아가일 니트</p>
                            <p class="item_orderNumber">CLAWSW102</p>
                            <div class="item_option">
                                <p class="item_color">네이비</p>
                                <p class="item_size">55</p>
                                <p class="item_count">1개</p>
                            </div>
                            <p class="item_price"><span class="item_priceNum">1000</span>원</p>
                        </div>
                    </div>
                </div>
                <div class="order_item_container">
                    <div class="brand_name">CHATELAINE</div>
                    <div class="order_item_container_b">
                        <div class="order_item_img">
                            <img src="./img/item_2.png" alt="">
                        </div>
                        <div class="order_item_container_bl">
                            <p class="item_name">라운드넥 아가일 니트</p>
                            <p class="item_orderNumber">CLAWSW102</p>
                            <div class="item_option">
                                <p class="item_color">네이비</p>
                                <p class="item_size">55</p>
                                <p class="item_count">1개</p>
                            </div>
                            <p class="item_price"><span class="item_priceNum">2000</span>원</p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="order_user_wrap">
                <div class="order_user_t">
                    <h3>주문자</h3>
                    <a href="./info_change.php"><p>정보 변경</p></a>
                </div>
                <div class="order_user_b">
                    <div class="user_name"><span>이름</span>홍길동</div>
                    <div class="user_e-mail"><span>이메일</span>abc123@naver.com</span></div>
                    <div class="user_number"><span>휴대전화</span>010-2244-8686</div>
                </div>
            </section>
            <section id="shippingInfo">
                <h3>배송정보</h3>
                <button class="spotInput"><p>배송지 입력</p></button>
                <div class="spotInputAfter" style="display: none;"><!-- 배송지 입력 후에 나타나는 화면 display:none 처리 해놨습니다 -->
                    <button class="spotChange"><p>배송지 변경</p></button>
                    <div class="shippingInfo_container">
                        <div class="reciveUser">
                            <div class="reciveUser_r"><span class="reciveUserName">홍길동</span>/<span class="reciveUserNum">010-8646-2460</span></div>
                        </div>
                        <div class="reciveSpot">
                            <div class="reciveSpot_r">[<span class="reciveSpotNum">14046</span>]<span class="reciveSpotAddress">서울특별시 강남구 역삼동 역삼로 156 태광빌딩 5층</span></div>
                        </div>
                        <div class="selectBoxType">
                            <button class="label">배송시 요청사항을 선택해 주세요</button>
                            <ul class="optionItemWrap">
                                <li class="optionItem">부재시 문앞에 놓아주세요.</li>
                                <li class="optionItem">부재시 경비실에 맡겨 주세요.</li>
                                <li class="optionItem">부재시 전화 또는 문자 주세요.</li>
                                <li class="optionItem">택배함에 넣어 주세요.</li>
                                <li class="optionItem">파손위험이 있으니 배송시 주의해주세요.</li>
                                <li class="optionItem">배송 전에 연락주세요.</li>
                                <li class="optionItem">직접 입력</li>
                            </ul>
                            <input type="text" class="direct" placeholder="내용을 입력해주세요. (50자 내외)">
                        </div>
                    </div>
                </div>
            </section>
            <section id="discount_benefit">
                <h3>할인혜택</h3>
                <div class="coupon">
                    <div class="noneCoupon_wrap">
                        <h4>쿠폰</h4>
                        <p class="noCoupon">적용 가능한 쿠폰이 없습니다.</p>
                    </div><!-- 쿠폰 없을 때 화면 -->
                    <div class="someCoupon_wrap" style="display: none;">
                        <div class="someCoupon_l">
                            <h4>쿠폰</h4>
                            <p class="someCoupon">적용 가능한 쿠폰이 <span><span class="couponNum">1</span>개</span> 있습니다.</p>
                        </div>
                        <a href="./coupon_apply_page.php">적용하기</a>
                    </div><!-- 쿠폰이 있는데 적용하기 전 화면 display:none 처리 해놨습니다.-->
                    <div class="applyCoupon_wrap">
                        <div class="applyCoupon_l">
                            <h4>쿠폰 <span class="applyCouponNum">1</span>장 적용</h4>
                            <p class="applyPrice">-<span class="applyPriceNum">25400</span>원</p>
                        </div>
                        <a href="./coupon_apply_page.php">적용하기</a>
                    </div>
                </div>
                <div class="saving">
                    <h4>적립금</h4>
                    <div class="saving_t">
                        <input type="number" placeholder="0">
                        <button class="allUse">모두사용</button>
                    </div>
                    <div class="saving_b">
                        <p>사용 가능한 적립금 <span class="savingUseNum">5000</span><span>원</span></p>
                    </div>
                </div>
            </section>
            <section id="payMathod">
                <h3>결제 수단</h3>
            </section>
            <section id="finalPrice_wrap">
                <h3>최종 결제 금액</h3>
                <div class="priceHistory">
                    <div class="allItemPirce">
                        <p>총 상품금액</p>
                        <span><span class="num">250000</span>원</span>
                    </div>
                    <div class="shippingPrice">
                        <p>배송비</p>
                        <span><span class="num">3000</span>원</span>
                    </div>
                    <div class="discountCouponUse">
                        <p>할인쿠폰 사용</p>
                        <span><span class="num">8000</span>원</span>
                    </div>
                    <div class="savingUse">
                        <p>적립금 사용</p>
                        <span><span class="num">0</span>원</span>
                    </div>
                </div>
                <div class="finalPrice">
                    <div class="finalPrice_t">
                        <p>총 결제 예정금액</p>
                        <span><span class="finalPriceNum">127000</span>원</span>
                    </div>
                    <div class="finalPrice_b">
                        <p>총 적립예정 금액<span class="savingNum">2700</span>원</p>
                    </div>
                </div>
            </section>
            <div id="bottom">
                <div class="finalBuyBtn">
                    <a href="./order_complete.php">122,000원 결제</a>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    var savingNumText = $('.savingUseNum').text()
    $('.allUse').click(function(){
        $('.saving_t>input').val( $('.saving_t>input').val() + savingNumText);
        $('.savingUse>span>.num').text("-" + savingNumText)
        $('.saving_b>p>span').css("color","#222")
    })//모두 사용 버튼 클릭시 적용

    if(savingNumText === "0"){
        $('.allUse').removeClass('on')
    }else{
        $('.allUse').addClass('on')
    }//모두 사용 버튼 적립금에 따라 color값 변동

    $('.selectBoxType>button').click(function(){
        $(this).toggleClass('on')
        $(this).siblings('.optionItemWrap').toggleClass('on')
    })

    $('.optionItem').click(function(){
        var textChange = $(this).text();
        var targetLabel = $(this).closest('.selectBoxType').children('.label');
        var targetDiscount = $(this).closest('.selectBoxType').siblings('.discountPrice')
        targetLabel.text(textChange);

        $(this).parent('.optionItemWrap').toggleClass('on')
        $(targetLabel).removeClass('on')
        $(targetLabel).css("color","#222")
        $('.selectBoxType>.optionItemWrap>.optionItem').css("background","none")
        $(this).css("background","#f5f5f5") 
    })
    $('.optionItem:last-child').click(function(){
        $('.direct').css("display","block")
    })
</script>
</html>