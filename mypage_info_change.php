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
    <link rel="stylesheet" href="./css/mypage_info_change.css">
    <link rel="stylesheet" href="./css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
    <header id="headerType2">
        <div>
            <p>개인정보 수정</p>
            <div class="headerIcoWrap">
                <a href="./bottom_gnb_mypage_member.php" class="icoLeftArrow"><span class="hide">뒤로가기</span></a>
                <div class="headerIco">
                </div>
            </div>
        </div>
    </header>
    <div class="mypageInfoChangeMain">
        <h3>비밀번호 확인</h3>
        <div class="greyBox">
            <p>회원님의 정보를 안전하게 보호하기 위한 본인 확인 절차입니다.</p>
        </div>
        <div class="pwCheck">
            <p>비밀번호<span>*</span></p>
            <input type="password" placeholder="비밀번호를 입력해주세요">
        </div>
    </div> 
    <div class="bottom">
        <a href="" class="cancel">취소</a>
        <a href="./mypage_info_change_detail.php" class="check">확인</a>
    </div>
    <div class="popLayer">
        <div class="popLayerContainer"><!-- 비밀번호 잘못입력할시 나타나는 팝업 display:none 시켜놨습니다.-->
            <p>올바른 비밀번호를 다시 입력해주세요.</p>
            <button>확인</button>
        </div>
    </div>
</body>
<script>
    $('.popLayerContainer>button').click(function(){
        $('.popLayer').css("display","none")
    })
</script>
</html>