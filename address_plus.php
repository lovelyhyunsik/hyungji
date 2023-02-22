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
    <link rel="stylesheet" href="./css/address_plus.css">
    <link rel="stylesheet" href="./css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
    <header id="headerType2"> 
        <div>
            <p>배송지 추가</p>
            <div class="headerIcoWrap">
            <a href="./bottom_gnb_mypage_member.php" class="icoLeftArrow"><span class="hide">뒤로가기</span></a>
                <div class="headerIco">
                </div>
            </div>
        </div>
    </header>
    <div class="inputWrap">
        <div class="userNameInput">
            <span>이름</span>
            <input type="text" placeholder="수령인 이름">
        </div>
        <div class="userNumInput">
            <span>휴대전화</span>
            <input type="number" placeholder="-없이 입력">
        </div>
        <div class="addressInput">
            <span>우편번호</span>
            <div class="zipCode">
                <input type="number" placeholder="우편 번호를 검색하세요">
                <a href="">주소찾기</a>
            </div>
            <div class="addressMain">
                <input type="text" placeholder="우편번호 검색 후, 자동입력 됩니다">
            </div>
            <div class="addressDetail">
                <input type="text" placeholder="상세주소 입력">
            </div>
            <label>
                <input type="checkbox" id="check_btn" class="normal">
                <span>기본 배송지로 지정</span>
            </label>
        </div>
    </div>
    <div class="bottom">
        <a href="">완료</a><!-- 모든 input 입력되면 addClass:on -->
    </div>
</body>
</html>