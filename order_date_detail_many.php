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
    <link rel="stylesheet" href="css/order_date_detail_many.css">
    <link rel="stylesheet" href="css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head> 
<body>
    <header id="header_type2"> 
        <div>
            <p>주문상세</p>
            <div class="header_ico_wrap">
            <a href="./bottom_gnb_mypage_member.php" class="ico_left_arrow"><span class="hide">뒤로가기</span></a>
                <div class="header_ico">
                    <a href="./search.php" class="ico_search"><span class="hide">검색아이콘</span></a>
                    <a href="./shoppingbag.php" class="ico_shoppingbag"><span class="hide">쇼핑백아이콘</span></a>
                </div>
            </div>
        </div>
    </header> 
    <section id="orderItemWrap">
        <div class="orderDetailTop">
            <p>주문번호 123456789</p>
            <span class="itemDate">결제 날짜 2022.11.20 오후 11:27</span>
        </div>
        <ul>
            <div class="orderItemTitle">샤트렌 배송상품 <span class="count">2</span>개</div><!-- 상품이 2개이상일경우만 나타나게   -->
            <li>
                <a href="">
                    <img src="./img/Frame 2642.png" alt="">
                    <div class="itemText">
                       <div class="state">
                           결제완료<span>12.01 (목) 도착</span>
                       </div>
                       <div class="brandItemName">
                           <span class="brandName">CHATELAINE</span><span class="itemName">브러쉬 립조직 하이넥 티셔츠</span>
                       </div>
                       <div class="itemOpt">
                           <span class="color">네이비</span>/<span class="size">55</span>/<span class="count">1개</span>
                       </div>
                       <div class="itemPrice">147,000원</div>
                    </div>
                </a>
                <div class="btnWrap">
                    <div class="btnContainer">
                        <a href="./order_cancel.php" class="cancelRequest">취소요청</a>
                        <a href="./shipping_tracking.php" class="tracking">배송조회</a>
                    </div>
                </div>
                <div class="tel">
                    <span>1234-5678</span>
                    <a href="1234-5678">문의하기</a>
                </div>
            </li>
            <li>
                <a href="">
                    <img src="./img/Frame 2642.png" alt="">
                    <div class="itemText">
                       <div class="state">
                            상품 준비중<span>12.01 (목) 도착</span>
                       </div>
                       <div class="brandItemName">
                           <span class="brandName">CHATELAINE</span><span class="itemName">브러쉬 립조직 하이넥 티셔츠</span>
                       </div>
                       <div class="itemOpt">
                           <span class="color">네이비</span>/<span class="size">55</span>/<span class="count">1개</span>
                       </div>
                       <div class="itemPrice">147,000원</div>
                    </div>
                </a>
                <div class="btnWrap">
                    <div class="btnContainer">
                        <a class="cancelRequest">취소요청</a>
                        <a href="./shipping_tracking.php" class="tracking">배송조회</a>
                    </div>
                </div>
                <div class="tel">
                    <span>1234-5678</span>
                    <a href="1234-5678">문의하기</a>
                </div>
            </li>
            <li class="shipping"><!-- 배송중:shipping , 구매확정:confirm ,배송완료:complete-->
                <a href="">
                    <img src="./img/Frame 2642.png" alt="">
                    <div class="itemText">
                       <div class="state ">
                           배송중<span>12.01 (목) 도착예정</span>
                       </div>
                       <div class="brandItemName">
                           <span class="brandName">CHATELAINE</span><span class="itemName">브러쉬 립조직 하이넥 티셔츠</span>
                       </div>
                       <div class="itemOpt">
                           <span class="color">네이비</span>/<span class="size">55</span>/<span class="count">1개</span>
                       </div>
                       <div class="itemPrice">147,000원</div>
                    </div>
                </a>
                <div class="btnWrap">
                    <div class="btnContainer">
                        <a class="buyConfirm">구매확정</a>
                        <a href="./shipping_tracking.php" class="tracking">배송조회</a>
                    </div>
                </div>
                <div class="tel">
                    <span>1234-5678</span>
                    <a href="1234-5678">문의하기</a>
                </div>
            </li>
        </ul>
        <ul>
            <div class="orderItemTitle">크로커다일레이디 배송상품 <span class="count">2</span>개</div>
            <li class="complete">
                <a href="">
                    <img src="./img/Frame 2642.png" alt="">
                    <div class="itemText">
                       <div class="state">
                           배송완료<span>12.01 (목) 도착</span>
                       </div>
                       <div class="brandItemName">
                           <span class="brandName">CHATELAINE</span><span class="itemName">브러쉬 립조직 하이넥 티셔츠</span>
                       </div>
                       <div class="itemOpt">
                           <span class="color">네이비</span>/<span class="size">55</span>/<span class="count">1개</span>
                       </div>
                       <div class="itemPrice">147,000원</div>
                    </div>
                </a>
                <div class="btnWrap">
                    <div class="greyBtn">
                        <a href="./buy_confirm.php">구매확정하고 후기 쓰기</a>
                    </div>
                    <div class="btnContainer">
                        <a href="./change_return.php" class="changeRequest">교환 / 반품 요청</a>
                        <a href="./shipping_tracking.php" class="tracking">배송조회</a>
                    </div>
                </div>
                <div class="tel">
                    <span>1234-5678</span>
                    <a href="1234-5678">문의하기</a>
                </div>
            </li>
            <li class="confirm">
                <a href="">
                    <img src="./img/Frame 2642.png" alt="">
                    <div class="itemText">
                       <div class="state">
                            구매확정<span>12.01 (목) 도착</span>
                       </div>
                       <div class="brandItemName">
                           <span class="brandName">CHATELAINE</span><span class="itemName">브러쉬 립조직 하이넥 티셔츠</span>
                       </div>
                       <div class="itemOpt">
                           <span class="color">네이비</span>/<span class="size">55</span>/<span class="count">1개</span>
                       </div>
                       <div class="itemPrice">147,000원</div>
                    </div>
                </a>
                <div class="btnWrap">
                    <div class="greyBtn">
                        <a href="">구매후기 쓰기</a>
                    </div>
                    <div class="btnContainer">
                        <a href="./shipping_tracking.php" class="tracking">배송조회</a>
                    </div>
                </div>
                <div class="tel">
                    <span>1234-5678</span>
                    <a href="1234-5678">문의하기</a>
                </div>
            </li>
        </ul>
    </section>
    <section id="info">
        <div class="orderUserInfo">
            <div class="orderUserInfoTop">
                <p>주문자 정보</p>
                <img src="./img/ic-arrow-up-24.png" alt="">
            </div>
            <div class="orderUserInfoBottom">
                <div class="orderUserName">
                    <span class="orderUserName_l">이름</span>
                    <span class="orderUserName_r">홍길동</span>
                </div>
                <div class="orderUserEmail">
                    <span class="orderUserEmail_l">이메일</span>
                    <span class="orderUserEmail_r">abc123@naver.com</span>
                </div>
                <div class="orderUserPhone">
                    <span class="orderUserPhone_l">휴대전화</span>
                    <span class="orderUserPhone_r">010-2244--8686</span>
                </div>
            </div>
        </div>
        <div class="payInfo">
            <div class="payInfoTop">
                <p>결제 정보</p>
                <img src="./img/ic-arrow-up-24.png" alt="">
            </div>
            <div class="payInfoBottom">
                <div class="payMethod">
                    <span class="payMethod_l">결제방법</span>
                    <span class="payMethod_r">카드결제</span>
                </div>
                <div class="itemPrice">
                    <span class="itemPrice_l">상품금액</span>
                    <span class="itemPrice_r">522,100원</span>
                </div>
                <div class="couponSale">
                    <span class="couponSale_l">쿠폰할인</span>
                    <span class="couponSale_r">0원</span>
                </div>
                <div class="pointSale">
                    <span class="pointSale_l">포인트할인</span>
                    <span class="pointSale_r">0원</span>
                </div>
                <div class="shippingFee">
                    <span class="shippingFee_l">배송비</span>
                    <span class="shippingFee_r">0원</span>
                </div>
            </div>
            <div class="finalPayPriceWrap">
                <div class="finalPayPrice">
                    <div class="finalPayPrice_l">총 결제금액</div>
                    <div class="finalPayPrice_r">522,100원</div>
                </div>
                <div class="savingPoint">총 적립예정 금액 <span class="point">2,700</span>원</div>
            </div>
        </div>
        <div class="shippingInfo">
            <div class="shippingInfoTop">
                <p>배송 정보</p>
                <img src="./img/ic-arrow-up-24.png" alt="">
            </div>
            <div class="shippingInfoText">
                <div class="recipientName">
                    <span class="recipientName_l">받는분</span>
                    <span class="recipientName_r">홍길동</span>
                </div>
                <div class="recipientPhone">
                    <span class="recipientPhone_l">휴대전화</span>
                    <span class="recipientPhone_r">010-2244-8686</span>
                </div>
                <div class="recipientAddress">
                    <span class="recipientAddress_l">주소</span>
                    <span class="recipientAddress_r">(06249) 서울 특별시 강남구 역삼로 156 (태광빌딩) 5층 커머스랩</span>
                </div>
            </div>
        </div>
         <div class="orderListDelete">
            <div class="delete">
                <button>주문내역 삭제</button>
            </div>
         </div>
    </section>
</body>
</html>