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
    <link rel="stylesheet" href="./css/sns_management.css">
    <link rel="stylesheet" href="./css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
    <header id="headerType2"> 
        <div>
            <p>SNS 계정 관리</p>
            <div class="headerIcoWrap">
            <a href="./bottom_gnb_mypage_member.php" class="icoLeftArrow"><span class="hide">뒤로가기</span></a>
                <div class="headerIco">
                </div>
            </div>
        </div>
    </header>
     <div class="snsList">
        <div class="naverSns">
            <label>
                <span>네이버</span>
                <input type="checkbox" role="switch">
            </label>
            
        </div>
        <div class="kakaoSns">
            <label>
                <span>카카오톡</span>
                <input type="checkbox" role="switch">
            </label>
        </div>
     </div>
     <div class="popLayer">
        <div class="popLayerContainer">
            <p>네이버 계정 연동을 하시겠습니까?</p>
            <div class="btnWrap">
                <button class="cancel">취소</button>
                <button class="check">확인</button>
            </div>
        </div>
     </div>
</body>
<script>
    $('.snsList>div>label').click(function(){
        $('.popLayer').css("display","block")
    })

    $('.cancel').click(function(){

    })

    $('.check').click(function(){
        $('.popLayer').css("display","none")
    })
</script>
</html>