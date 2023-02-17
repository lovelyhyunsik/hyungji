<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/order_complete.css">
    <link rel="stylesheet" href="./css/swiper.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
    <div id="order_complete">
        <div>
            <header id="header_type2">
                <div>
                    <p>주문완료</p>
                    <div class="header_ico_wrap">
                        <a href="./order_page.php" class="ico_left_arrow"></a>
                    </div>
                </div>
            </header>
            <section id="orderCompleteMain">
                <img src="./img/order_complete.png" alt="">
                <h2>주문의 완료되었습니다.</h2>
                <p>주문번호<span class="orderNum">20221121000000000</span></p>
            </section>
            <section id="shippingInfo">
                <h3>배송정보</h3>
                <div class="shippingInfo_container">
                    <div class="reciveUser">
                        <div class="reciveUser_l">받는분</div>
                        <div class="reciveUser_r"><span class="reciveUserName">홍길동</span>/<span class="reciveUserNum">010-8646-2460</span></div>
                    </div>
                    <div class="reciveSpot">
                        <div class="reciveSpot_l">배송지</div>
                        <div class="reciveSpot_r">[<span class="reciveSpotNum">14046</span>]<span class="reciveSpotAddress">서울특별시 강남구 역삼동 역삼로 156 태광빌딩 5층</span></div>
                    </div>
                    <div class="requests">
                        <div class="requests_l">요청사항</div>
                        <div class="requests_r">문 앞에 놓아 주세요.</div>
                    </div>
                </div>
            </section>
            <div class="finalPrice">
                <p class="finalPrice_l">결제금액</p>
                <p><span class="finalPriceNum">122000</span>원 </p>
            </div>
            <div id="bottom">
                <button>주문 상세보기</button>
                <a href="./index.php">쇼핑 계속하기</a>
            </div>
        </div>
    </div>
</body>
</html>