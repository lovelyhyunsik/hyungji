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
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/membership_info.css">
    <link rel="stylesheet" href="css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
    <header id="header_type2">
        <div>
            <div class="header_ico_wrap">
            <a href="./index.php" class="ico_left_arrow"><span class="hide">뒤로가기</span></a>
                <div class="header_ico">
                    <a href="./alarm.php" class="ico_alarm"><span class="hide">알림</span></a>
                    <a href="./shoppingbag.php" class="ico_shoppingbag"><span class="hide">쇼핑백</span></a>
                </div>
            </div>
        </div>
    </header>
    <section id="main">
        <div class="userMembership">
            <p><span class="name">홍길동</span>님의 <br> 이번달 등급과 혜택</p>
        </div>
        <div class="membership bronze">
            <div>
                <div class="membershipLogo"></div>
                <div class="membershipLogo_s"></div>
            </div>
        </div>
        <div class="greyBoxWrap">
            <div class="greyBoxContainer">
                <p><span class="price">7,900원</span> 추가 구매 시 <br><span class="membershipClass">BRONZE</span> 등급 달성</p>
                <div class="accumulate">
                     <div class="accumulateCount">
                        누적구매건수 : <span class="count">0</span>건
                     </div>
                     <div class="accumulatePrice">
                        누적구매금액 : <span class="price">0</span>원
                     </div>
                </div>
            </div>
        </div>
        <div class="benefitDetail">
            <div class="newTag">NEW</div>
            <h3>혜택 자세히 보기</h3>
            <img src="./img/Frame 3105.png" alt="">
            <img src="./img/Frame 3105.png" alt="">
        </div>
        <div class="membershipBenefitDetail">
            <h3>회원등급 혜택 자세히 보기</h3>
            <ul>
                <li>
                    <img src="./img/membership+text-new.png" alt="">
                    <p>신규입 혹은 구매경험 없는 고객</p>
                    <p>10% 할인쿠폰 2매</p>
                </li>
                <li>
                    <img src="./img/membership+text-bronze.png" alt="">
                    <p>주문금액 30만원 미만</p>
                    <p>매월 10% 할인쿠폰 2매, 교환/반품 무료 1회</p>
                </li>
                <li>
                    <img src="./img/membership+text-silver.png" alt="">
                    <p>주문금액 30만원 이상 100만원 미만</p>
                    <p>매월 10% 할인쿠폰 4매, 교환/반품 무료 2회</p>
                </li>
                <li>
                    <img src="./img/membership+text-gold.png" alt="">
                    <p>주문금액 100만원 이상 200만원 미만</p>
                    <p>매월 15% 할인쿠폰 4매, 교환/반품 무료 3회</p>
                </li>
                <li>
                    <img src="./img/membership+text-vip.png" alt="">
                    <p>주문금액 200만원 이상</p>
                    <p>매월 20% 할인쿠폰 4매</p>
                </li>
                <li class="family">
                    <img src="./img/membership+text-family.png" alt="">
                    <p>형지 임직원 분들을 위한 등급</p>
                    <p>매월 10% 할인쿠폰 2매, 교환/반품 무료 1회</p>
                </li>
            </ul>
        </div>
        <div class="membership_footer">
            <p>멤버십 기준 안내</p>
            <span>- 매월 1일, 최근 6개월 동안 구매확전된 누적 실 결제 금액을 기준으로 새로운 등급이 부여됩니다. <br> *예시) 2021년 10월 등급은 2021.6.1~2021.11.30 기간 동안 구매 확정된 누적 실 결제 금액 기준 <br>*구매확정 : 직접 구매확정과 자동 구매확정(배송 완료+10영업일) 모두 포함</span>
            <span>-실 결제 금액은 포인트, 쿠폰 등 할인 금액을 제외한 결제금액입니다.</span>
        </div>
    </section>
</body>
<script>
    if($('.membership').hasClass('family')){
        $('.family').css("display","block")
    }else{
        $('.family').css("display","none")
    }//일반회원일경우 family등급 안내 히든처리
</script>
</html>