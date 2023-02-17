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
    <link rel="stylesheet" href="css/essntial_info.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/common.js"></script>
</head>
<body>
    <header id="header_type2">
        <div>
            <p>회원가입</p>
            <div class="header_ico_wrap">
                <a href="./phone_certifi.php" class="ico_left_arrow"></a>
                <div class="header_ico">
                    <a href="./login.php" class="ico_close"><span class="hide">클로즈</span></a>
                </div>
            </div>
        </div>
    </header>
     <section id="infoInput">
        <h3>필수 정보 입력</h3>
        <div class="nameInput">
            <span>이름</span>
            <input type="text" placeholder="이름">
        </div>
        <div class="idInput">
            <span>아이디</span>
            <div class="inputBtn">
                <input type="text" placeholder="이름">
                <button>중복확인</button>
            </div>
        </div>
        <div class="pwInput">
            <span>비밀번호</span>
            <input type="password" placeholder="비밀번호 ">
        </div>
        <div class="pwCheckInput">
            <span>비밀번호 확인</span>
            <input type="password" placeholder="비밀번호 확인">
        </div>
        <div class="birthInput">
            <span>생년월일</span>
            <div class="inputlist">
                <input type="number" placeholder="출생년도" class="year">
                <input type="number" placeholder="월" class="mon">
                <input type="number" placeholder="일 " class="day">
            </div>
            <ul>
                <li>
                    <label>
                        <input type="radio" name="birth" checked>
                        <span>양력</span>
                    </label>
                </li>
                <li>
                    <label> 
                        <input type="radio" name="birth">
                        <span>음력</span>
                    </label>
                </li>
            </ul>
        </div>
        <div class="gender">
            <span>성별</span>
            <div class="genderBtn">
                <button class="woman on">여자</button>
                <button class="man">남자</button>
            </div>
        </div>
        <div class="addressInput">
            <span>우편번호</span>
            <div class="addressBtn">
                <input type="text" placeholder="이름">
                <button>주소찾기</button>
            </div>
            <input type="text" class="address" placeholder="주소">
            <input type="text" class="addressDetail" placeholder="상세주소">
        </div>
     </section>
     <div class="bottom">
        <a href="./choice_info.php ">다음</a>
    </div>
</body>
<script>
    $('.genderBtn>button').click(function(){
        $('.genderBtn>button').removeClass('on')
        $(this).addClass('on')
    })
</script>
</html>