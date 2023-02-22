<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/pw_change.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/common.js"></script>
</head>

<body>
    <header id="header_type2">
        <div>
            <p>비밀번호 변경</p>
            <div class="header_ico_wrap">
                <a href="./login.php" class="ico_left_arrow"></a>
                <div class="header_ico">
                </div>
            </div>
        </div>
    </header>
    <section id="inputList">
        <div class="idInput">
            <span>아이디</span>
            <div class="idBox">abcd0001</div>
        </div>
        <div class="currentPw">
            <span>현재 비밀번호</span>
            <label>
                <input type="password" placeholder="현재 비밀번호를 입력해주세요" class="textInput"><!-- 현재 비밀번호가 맞지 않으면 addClass:error -->
                <button class="inputTextDelete">
                    <img src="./img/ic-close-fill-24px.png" alt="">
                </button>
            </label>
            <p class="errorText">현재 비밀번호가 맞는지 다시 확인해주세요.</p>
        </div>
        <div class="newPw">
            <span>새 비밀번호</span>
            <label>
                <input type="password" placeholder="새 비밀번호를 입력해주세요" maxlength="16" class="textInput">
                <button class="inputTextDelete">
                    <img src="./img/ic-close-fill-24px.png" alt="">
                </button>
            </label>
            <div class="inputText">
                <div class="inputText_t">
                    <img src="./img/ic-check-s-grey.png" alt="">
                    <p>10자~16자 입력</p>
                </div>
                <div class="inputText_b">
                    <img src="./img/ic-check-s-grey.png" alt="">
                    <p>영어 대소문자/숫자/특수문자 중 2가지 이상 조합</p>
                </div>
            </div>
        </div>
        <div class="newPwCheck">
            <span>새 비밀번호 확인</span>
            <label>
                <input type="password" placeholder="새 비밀번호를 입력해주세요" maxlength="16" class="textInput">
                <button class="inputTextDelete">
                    <img src="./img/ic-close-fill-24px.png" alt="">
                </button>
            </label>
            <div class="inputText">
                <div class="inputText_t">
                    <img src="./img/ic-check-s-grey.png" alt="">
                    <p>동일한 비밀번호를 입력해 주세요.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="bottom">
        <button>비밀번호 변경</button>
    </div>
    <div class="popLayer">
        <div class="popContainer">
            <p>비밀번호 변경이 완료되었습니다.</p>
            <a href="./login.php">확인</a>
        </div>
    </div>
</body>
<script>
    if($('input').hasClass('error')){
       $('.errorText').css("display","block")
    }else{
        $('.errorText').css("display","none")
    };//input에 error떠서 border-color가 빨간색이 되면 input하단 텍스트 생성

    $('.newPw>label>input').click(function(){
        $('.newPw>.inputText').css("display","block")
    })//새 비밀번호 input클릭하면 하단 글씨 뜨게

    $('.newPw>label>input').on('input', function () {
        if ($('.newPw>label>input').val().length >= 10) {
            $('.newPw>.inputText>.inputText_t>p').css("color", "#34A854")
            $('.newPw>.inputText>.inputText_t>img').attr("src" , "./img/ic-check-s-green.png")
        } else {
            $('.newPw>.inputText>.inputText_t>p').css("color", "#969696")
            $('.newPw>.inputText>.inputText_t>img').attr("src" , "./img/ic-check-s-grey.png")
        }
    });//새 비밀번호 첫번째거 10자이상이면 색깔 바뀌게 능력부족으로 영어 대소문자/숫자/특수문자 그부분은 처리하지 못함

    $('.newPwCheck>label>input').click(function(){
        $('.newPwCheck>.inputText').css("display","block")
    })//새 비밀번호 확인 input클릭하면 하단 글씨 뜨게

    $('.newPwCheck>label>input').on('input', function () {
        if ($('.newPwCheck>label>input').val() == $('.newPw>label>input').val()) {
            $('.newPwCheck>.inputText>.inputText_t>img').attr("src" , "./img/ic-check-s-green.png")
            $('.newPwCheck>.inputText>.inputText_t>p').css("color", "#34A854")
        } else {
            $('.newPwCheck>.inputText>.inputText_t>img').attr("src" , "./img/ic-check-s-grey.png")
            $('.newPwCheck>.inputText>.inputText_t>p').css("color", "#969696")
        }
    });//새 비밀번호와 새 비밀번호 확인 텍스트 같으면 색깔 바뀌게

    $('.newPwCheck>label>input').on('input', function () {
        if ($('.newPwCheck>label>input').val() == "") {
            $('.bottom>button').removeClass('on')
        } else {
            $('.bottom>button').addClass('on')
        }
    });//모든input태그 입력되어야 bottom색깔 변해야하는데 능력부족으로 새 비밀번호 확인창 입력시 비밀번호 변경 버튼 addclass on 임시처리

    $('.bottom>button').click(function(){
        $('.popLayer').css("display","block")
    })//bottom 버튼 클릭시 뜨는 팝업 처리
</script>
</html>