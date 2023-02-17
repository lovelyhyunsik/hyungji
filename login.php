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
    <link rel="stylesheet" href="css/login.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/common.js"></script>
</head>
<body>
    <header id="header_type2">
        <div>
            <p>로그인</p>
            <div class="header_ico_wrap">
                <a href="./bottom_gnb_mypage_non-member.php" class="ico_left_arrow"></a>
                <div class="header_ico">
                    <a href="" class="ico_shoppingbag"><span class="hide">쇼핑백</span></a>
                </div>
            </div>
        </div>
    </header>
    <div class="loginBanner">
        <div class="loginBanner_container">
            <div class="couponImg">
                <div class="downIc">
                    <img src="./img/ic_logindownload.png" alt="">
                </div>
            </div>
            <div class="loginBanner_text">
                <div class="loginBanner_text_t">BAUHAUS OPEN</div>
                <div class="loginBanner_text_b">회원가입하고 쿠폰 받아가세요</div>
            </div>
        </div>
    </div>
    <form class="login">
        <input type="text" placeholder="아이디">
        <input type="password" placeholder="비밀번호">
        <p>
            <label>
                <input type="checkbox" id="check_btn">
                <span>아이디저장</span>
            </label>
            <label>
                <input type="checkbox" id="check_btn">
                <span>자동로그인</span>
            </label>
        </p>
        <button>로그인</button>
        <a href="./non_member_check.php">비회원 주문조회</a>
        <div class="joinFind">
            <div class="join">
                <a href="./join_banner.php">회원가입</a>
            </div>
            <div class="find">
                <a href="./id_find.php" class="idFind">아이디 찾기</a>
                <a href="./pw_find.php" class="pwFind">비밀번호 찾기</a>
            </div>
        </div>
        <div class="snsLogin">
            <p>SNS 간편 로그인</p>
            <ul>
                <li class="kakao">
                    <a href="">
                        <img src="./img/kakao.png" alt="">
                    </a>
                </li>
                <li class="naver">
                    <a href="">
                        <img src="./img/naver.png" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </form>
</body>
</html>