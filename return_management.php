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
    <link rel="stylesheet" href="css/return_management.css">
    <link rel="stylesheet" href="css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
    <header id="header_type2"> 
        <div>
            <p>환불정보 관리</p>
            <div class="header_ico_wrap">
            <a href="./bottom_gnb_mypage_member.php" class="ico_left_arrow"><span class="hide">뒤로가기</span></a>
                <div class="header_ico">
                </div>
            </div>
        </div>
    </header>
    <div class="main">
        <div class="noReturn">
            <div class="plusReturn">
                <div class="plusReturnContainer">
                    <a href="">
                        <span>환불계좌 등록</span>
                    </a>
                </div>
            </div>
            <p>등록된 환불계좌가 없습니다.</p>
        </div>
        <div class="yesReturn">
             <div class="returnAccount">
                <div class="bankName">우리</div>
                <div class="accountNum">1000159689***</div>
                <div class="accountUserName">홍길*</div>
             </div>
             <div class="btnWrap">
                <a href="./return_plus.php">수정</a>
                <button>삭제</button>
            </div>
        </div>
    </div>
</body>
<script>
    $('.btnWrap>button').click(function(){
        $('.yesReturn').css("display","none")
        $('.noReturn').css("display","block")
    })
</script>
</html>