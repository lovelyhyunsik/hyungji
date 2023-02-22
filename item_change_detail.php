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
    <link rel="stylesheet" href="./css/item_change_detail.css">
    <link rel="stylesheet" href="./css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
    <header id="headerType2">
        <div>
            <p>취소 / 교환 / 반품 상세</p>
            <div class="headerIcoWrap">
                <a href="./bottom_gnb_mypage_member.php" class="icoLeftArrow"><span class="hide">뒤로가기</span></a>
                <div class="header_ico">
                    <a href="./search.php" class="icoSearch"><span class="hide">검색아이콘</span></a>
                    <a href="./shoppingbag.php" class="icoShoppingbag"><span class="hide">쇼핑백아이콘</span></a>
                </div>
            </div>
        </div>
    </header>
    <div class="itemErrorTitle">
        <h3></h3>
    </div>
    <div class="itemWrap changeConfirm"><!-- 교환요청:changeRequest  , 교환접수:changeReceipt , 교환승인:changeConfirm , 교환완료:changeComplete , 교환보류:changeHold -->
        <div class="itemThum">
            <a href="">
                <img src="./img/Frame 2642.png" alt="">
            </a>
            <div class="itemText">
                <div class="state"></div>
                <span class="arriveDate">12.01 (목) 도착</span>
                <div class="brandItemName">
                    <span class="brandName">CHATELAINE</span><span class="itemName">브러쉬 립조직 하이넥 티셔츠</span>
                </div>
                <div class="itemOpt">
                    <span class="color">네이비</span> / <span class="size">66</span> / <span class="count">1개</span>
                </div>
                <div class="changeitemOpt">
                    <div class="lineArrow">
                        <span></span>
                    </div>
                    <span class="changeColor">소라</span> / <span class="changeSize">55</span> / <span class="changeCount">1개</span>
                </div>
                <div class="itemPrice">147,000원</div>
            </div>
        </div>
        <div class="greyBtn">
            <a href="">구매후기 쓰기</a>
        </div>
        <button></button>
        <div class="cancelReason">
            <p>교환사유 </p>
            <span>Lorem ipsum dolor sit amet consectetur. Tristique posuere cras odio diam consequat dignissim </span>
        </div>
    </div>
    <div class="changeInfo">
        <div class="changeInfoTitle">
            <h3>교환정보</h3>
            <span class="ic_arrow"></span>
        </div>
        <div class="changeInfoContent">
            <div class="pickMethod direct"><!-- 자동회수 class:auto , 직접회수 class:direct -->
                <span class="pickMethod_l">회수방법</span>
                <span class="pickMethod_r"></span>
            </div>
            <div class="pickNum">
                <span class="pickNum_l">반송장번호</span>
                <span class="pickNum_r">012345678910</span>
            </div>
            <div class="shippingPay">
                <span class="shippingPay_l">배송비</span>
                <span class="shippingPay_r">2,500원</span>
            </div>
        </div>
    </div>
    <div class="userInfo">
        <div class="userInfoTitle">
            <h3>주문자 정보</h3>
            <span class="ic_arrow"></span>
        </div>
        <div class="userInfoContent">
            <div class="userName">
                <span class="userName_l">이름</span>
                <span class="userName_r">홍길동</span>
            </div>
            <div class="userEmail">
                <span class="userEmail_l">이메일</span>
                <span class="userEmail_r">abc123@naver.com</span>
            </div>
            <div class="userNum">
                <span class="userNum_l">휴대전화</span>
                <span class="userNum_r">010-2244-8686</span>
            </div>
        </div>
    </div>
    <div class="payInfo">
        <div class="payInfoTitle">
            <h3>환불금액</h3>
            <span class="ic_arrow"></span>
        </div>
        <div class="payInfoContent">
            <div class="payInfoContentTop">
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
                    <span class="couponSale_r ">0원</span>
                </div>
                <div class="savingPoint">
                    <span class="savingPoint_l">포인트할인</span>
                    <span class="savingPoint_r">0원</span>
                </div>
                <div class="shippingPay">
                    <span class="shippingPay_l">배송비</span>
                    <span class="shippingPay_r">0원</span>
                </div>
            </div>
            <div class="payInfoContentBottom">
                <div class="finalPrice">
                    <div class="finalPrice_l">총 결제금액</div>
                    <div class="finalPrice_r">
                        <span class="finalPriceNum">522,100원</span>
                        <span class="finalSavingPoint">총 적립예정 금액 2,700원</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shippingInfo">
        <div class="shippingInfoTop">
            <h3>배송 정보</h3>
            <span class="ic_arrow"></span>
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
            <p>- 결제 완료 이후 품절/결품이 발생한 경우, 고객님께 문자 서비스를 통해 품절/결품 안내를 드리고 있으며, '마이페이지 > 주문배송조회'에서도 품절/결품 여부를 확인하실 수 있습니다.</p>
            <p>- 품절/결품된 주문상품은 품절/결품 문자 서비스 안내 후 자동취소해 드리며, 재결제가 필요한 경우 추가 안내 드립니다.</p>
        </div>
    </div> 
</body>
<script>
    $('.changeRequest').siblings('.itemErrorTitle').children('h3').text("교환요청")
    $('.changeRequest').find('.state').text("교환요청")
    $('.changeRequest').find('button').css("display","none")
    $('.changeRequest').find('.greyBtn').css("display","none")
    $('.changeRequest').find('.arriveDate').css("display","none")//교환요청
    

    $('.changeReceipt').siblings('.itemErrorTitle').children('h3').text("교환접수")
    $('.changeReceipt').find('.state').text("교환접수")
    $('.changeReceipt').find('button').text('배송조회')
    $('.changeReceipt').find('.greyBtn').css("display","none")
    $('.changeReceipt').find('.arriveDate').css("display","none") //교환접수

    $('.changeConfirm').siblings('.itemErrorTitle').children('h3').text("교환승인")
    $('.changeConfirm').find('.state').text("교환승인")
    $('.changeConfirm').find('button').text('배송조회')
    $('.changeConfirm').find('.greyBtn').css("display","none")
     //교환승인

    $('.changeComplete').siblings('.itemErrorTitle').children('h3').text("교환완료")
    $('.changeComplete').find('.state').text("교환완료")
    $('.changeComplete').find('button').text('배송조회')//교환완료

    $('.changeHold').siblings('.itemErrorTitle').children('h3').text("교환보류")
    $('.changeHold').find('.state').text("교환보류")
    $('.changeHold').find('button').text('문의하기')
    $('.changeHold').find('.greyBtn').css("display","none")
    $('.changeHold').find('.arriveDate').css("display","none")//교환보류

    $('.auto>.pickMethod_r').text("자동회수")
    $('.auto').siblings('.pickNum').css("display","none")

    $('.direct>.pickMethod_r').text("직접회수")
</script>
</html>