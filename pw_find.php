<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/pw_find.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/common.js"></script>
</head>
<body>
    <header id="header_type2">
        <div>
            <p>비밀번호 찾기</p>
            <div class="header_ico_wrap">
                <a href="./login.php" class="ico_left_arrow"></a>
                <div class="header_ico">
                </div> 
            </div>
        </div>
    </header>
    <section id="pwFindInput">
        <div class="idInput"><!-- input에 on 하면 테두리 빨간색으로 바뀌고 p.error 태그 나타나게부탁드립니다. p태그는 display:none 시켰습니다. -->
            <span>아이디</span>
            <label>
                <input type="text" placeholder="아이디를 입력해주세요" class="textInput">
                <button class="inputTextDelete">
                    <img src="./img/ic-close-fill-24px.png" alt="">
                </button>
            </label>
            <p class="error">올바른 아이디를 입력해주세요.</p>
        </div>
        <div class="nameInput">
            <span>이름</span>
            <label>
                <input type="text" placeholder="이름" class="textInput">
                <button class="inputTextDelete">
                    <img src="./img/ic-close-fill-24px.png" alt="">
                </button>
            </label>
        </div>
        <div class="phoneInput">
            <span>휴대전화</span>
            <div class="inputBtn">
                <label>
                    <input type="number" placeholder="휴대전화" class="textInput">
                    <button class="inputTextDelete">
                        <img src="./img/ic-close-fill-24px.png" alt="">
                    </button>
                </label>
                <button class="certifiBtn" disabled="true">인증요청</button>
            </div>
            
        </div>
        <div class="certifiNum">
            <span>인증번호</span>
            <input type="number" placeholder="인증번호 입력">
            <div class="time">
                남은시간 <span>3:00</span>
            </div>
        </div>
    </section>
    <div class="bottom">
         <a href="./test_pw.php">임시 비밀번호 발급 </a>
    </div>
</body>
<script>
    $('.phoneInput>.inputBtn>label>input').on('input', function () {
        if ($('.phoneInput>.phoneBtn>input').val() == '') {
            $('.certifiBtn').attr("disabled", true)
        } else {
            $('.certifiBtn').attr("disabled", false)
            $('.certifiBtn').click(function(){
                $('.certifiNum').css("display","block")
                $(this).text("다시받기")
            })
        }
    });//휴대전화 인증요청 누르면 인증요청텍스트 -> 다시받기, 인증번호 입력창 나타내기

    $('.certifiNum>input').on('input', function () {
        if ($('.certifiNum>input').val() == '') {
            $('.bottom>a').removeClass('on')
        } else {
           $('.bottom>a').addClass('on ')
        }
    }); //모든input태그 입력되어야 bottom색깔 변해야하는데 능력부족으로 인증번호 입력하면 bottom 색깔 변함으로 임시처리
</script>
</html>