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
    <link rel="stylesheet" href="./css/mypage_coupon_plus.css">
    <link rel="stylesheet" href="./css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
    <header id="headerType2">
        <div>
            <p>쿠폰등록</p>
            <div class="headerIcoWrap">
                <a href="./mypage_coupon.php" class="icoLeftArrow"><span class="hide">뒤로가기</span></a>
                <div class="headerIco">
                </div>
            </div>
        </div>
    </header>
    <div class="couponNum">
        <span>쿠폰번호</span>
        <label>
            <input  type="number" placeholder="-없이 10-35자 일련번호 입력"><!-- 쿠폰 번호 오입력시 addClass:on -->
            <span class="error">확인되지 않은 쿠폰번호입니다. 시리얼 쿠폰번호를 확인해 주세요.</span><!-- 쿠폰번호 오입력시 나오는 input밑에 텍스트 -->
            <button  type="reset">
                <img src="./img/ic-close-fill-24px.png" alt="">
            </button>
        </label>
        <button>등록</button><!-- input번호 입력되면 addClass:on  -->
    </div>
     <div class="notice">
        <div class="noticeTitle">
            <div class="noticeTitle_l">
                <img src="./img/ic-notice.png" alt="">
                <span>유의사항</span>
            </div>
            <div class="noticeTitle_r">
                <img src="./img/ic-arrow-up-24.png" alt="">
            </div>
        </div>
        <div class="noticeContent">
            <p>- 쿠폰번호 등록시 쇼핑몰에서 발행한 종이쿠폰/시리얼쿠폰/모바일쿠폰 등의 인증번호를 등록하시면 온라인 쿠폰으로 발급되어 사용이 가능합니다.</p>
            <p>- 쿠폰은 주문 시 1회에 한해 적용되며, 1회 사용 시 재사용이 불가능합니다.</p>
            <p>- 쿠폰은 적용 가능한 상품이 따로 적용되어 있는 경우 해당 상품 구매 시에만 사용이 가능합니다.</p>
            <p>- 특정한 종이쿠폰/시리얼쿠폰/모바일쿠폰의 경우 단 1회만 사용이 가능할 수 있습니다.</p>
        </div>
     </div>
</body>
<script>
    $('input').on('input', function () {
        if ($('input').val() == '') {
            $('.couponNum>button').removeClass('on')
            $('.couponNum>label>button').css("display","none")
        } else {
            $('.couponNum>button').addClass('on')
            $('.couponNum>label>button').css("display","block")
        }
    });

    if($('input').hasClass('on')){
        $('.error').css("display","block")
    }else{
        $('.error').css("display","none")
    }
</script>
</html>