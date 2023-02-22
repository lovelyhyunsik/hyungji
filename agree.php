<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard/dist/web/static/pretendard.css" />
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/agree.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="./js/common.js"></script>
</head>
<body>
    <header id="headerType2">
        <div>
            <p>회원가입</p>
            <div class="headerIcoWrap">
                <a href="./join_banner.php" class="icoLeftArrow"></a>
                <div class="headerIco">
                    <a href="./login.php" class="icoClose"><span class="hide">클로즈</span></a>
                </div>
            </div>
        </div>
    </header>
    <section id="agree">
        <h3>약관동의</h3>
        <div class="agreeContainer">
            <div class="allAgreeBtn">
                <label>
                    <input type="checkbox" id="check_btn">
                    <span>전체동의</span>
                </label>
            </div>
            <div class="checkBtnList">
                <label>
                    <input type="checkbox" id="check_btn" class="normal" checked>
                    <span>서비스 이용약관 (필수) </span>
                </label>
                <label>
                    <input type="checkbox" id="check_btn" class="normal" checked>
                    <span>개인정보 취급방침 (필수)</span>
                </label> 
                <label>
                    <input type="checkbox" id="check_btn" class="normal" checked>
                    <span>멤버십 이용약관 (필수)</span>
                </label> 
                <label>
                    <input type="checkbox" id="check_btn" class="normal" checked>
                    <span>개인정보 수집 및 활용 동의 (필수)</span>
                </label> 
                <label>
                    <input type="checkbox" id="check_btn" class="normal">
                    <span>마케팅 활용 동의 (선택)</span>
                </label> 
                <label>
                    <input type="checkbox" id="check_btn" class="normal">
                    <span>개인정보 제3자 제공에 대한 동의 선택</span>
                </label> 
            </div>
        </div>
    </section>
    <section id="certifi">
        <h3>실명인증</h3>
        <div class="cetifiContainer">
            <p>휴대폰 본인인증 <br>본인 명의의 휴대폰을 이용하여 인증을 진행합니다.</p>
        </div>
    </section>
    <div class="twoBtn">
        <a href="./join_banner.php" class="beforeBtn">이전</a>
        <a href="./essential_info.php" class="certifiBtn">인증하기</a>
    </div>
</body>
</html>