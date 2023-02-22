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
    <link rel="stylesheet" href="./css/address_management.css">
    <link rel="stylesheet" href="./css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
    <header id="headerType2"> 
        <div>
            <p>배송지 관리</p>
            <div class="headerIcoWrap">
            <a href="./bottom_gnb_mypage_member.php" class="icoLeftArrow"><span class="hide">뒤로가기</span></a>
                <div class="headerIco">
                </div>
            </div>
        </div>
    </header>
    <div class="plusAddress">
        <div class="plusAddressContainer">
            <a href="">
                <img src="./img/ic-plus.png" alt="">
                <span>배송지 추가</span>
            </a>
        </div>
    </div>
    <div class="main">
        <div class="noAddress">
            <p>등록된 배송지가 없습니다.</p>
        </div>
        <div class="yesAddress">
            <ul>
                <li>
                    <div class="defaultTag">기본배송지</div>
                    <div class="userInfo">
                        <span class="userName">홍길동</span>
                        <span class="userNum">010-8648-2460</span>
                    </div>
                    <div class="userAddress">
                        <p class="addressText"><span class="zipCode">[14046]</span>서울특별시 강남구 역삼동 역삼로 156 태광빌딩 5층</p>
                    </div>
                    <div class="btnWrap">
                        <a href="" class="changeBtn">수정</a>
                        <button class="delete">삭제</button>
                    </div>
                </li>
                <li>
                    <div class="userInfo">
                        <span class="userName">홍길동</span>
                        <span class="userNum">010-8648-2460</span>
                    </div>
                    <div class="userAddress">
                        <p class="addressText"><span class="zipCode">[14046]</span>서울특별시 강남구 역삼동 역삼로 156 태광빌딩 5층</p>
                    </div>
                    <div class="btnWrap">
                        <a href="" class="changeBtn">수정</a>
                        <button class="delete">삭제</button>
                    </div>
                </li>
                <li>
                    <div class="userInfo">
                        <span class="userName">홍길동</span>
                        <span class="userNum">010-8648-2460</span>
                    </div>
                    <div class="userAddress">
                        <p class="addressText"><span class="zipCode">[14046]</span>서울특별시 강남구 역삼동 역삼로 156 태광빌딩 5층</p>
                    </div>
                    <div class="btnWrap">
                        <a href="" class="changeBtn">수정</a>
                        <button class="delete">삭제</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>