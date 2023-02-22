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
    <link rel="stylesheet" href="./css/card_management.css">
    <link rel="stylesheet" href="./css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
    <header id="headerType2"> 
        <div>
            <p>결제 카드 관리</p>
            <div class="headerIcoWrap">
            <a href="./bottom_gnb_mypage_member.php" class="icoLeftArrow"><span class="hide">뒤로가기</span></a>
                <div class="headerIco">
                </div>
            </div>
        </div>
    </header>
    <div class="plusCard">
        <div class="plusCardContainer">
            <a href="">
                <img src="./img/ic-plus.png" alt="">
                <span>카드 등록</span>
            </a>
        </div>
    </div>
     <section id="main">
        <div class="noCard">
            <p>등록된 결제 카드가 없습니다.</p>
        </div>
        <div class="yesCard">
            <p>등록된 카드 <span class="count">3</span></p>
            <ul>
                <li>
                    <div class="cardThum">
                        <div class="cardThum_l">
                            <img src="./img/84card2.png" alt="">
                            <div class="cardName">
                                <span class="cardName_t">카카오카드 (3670)</span>
                                <span class="cardName_b">카드의 정석 POINT 주거래</span>
                            </div>
                        </div>
                        <button>삭제</button>
                    </div>
                </li>
                <li>
                    <div class="cardThum">
                        <div class="cardThum_l">
                            <img src="./img/84card.png" alt="">
                            <div class="cardName">
                                <span class="cardName_t">우리카드 (3670)</span>
                                <span class="cardName_b">카드의 정석 POINT 주거래</span>
                            </div>
                        </div>
                        <button>삭제</button>
                    </div>
                </li> 
            </ul>
        </div>
     </section>
</body>
</html>