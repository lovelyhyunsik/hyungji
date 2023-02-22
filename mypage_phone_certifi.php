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
    <link rel="stylesheet" href="./css/phone_certifi.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/common.js"></script>
</head>

<body>
    <header id="headerType2">
        <div>
            <p>개인정보 수정</p>
            <div class="headerIcoWrap">
                <a href="./mypage_info_change_detail.php" class="icoLeftArrow"></a>
                <div class="headerIco">
                    <a href="./mypage_info_change_detail.php" class="icoClose"><span class="hide">클로즈</span></a>
                </div>
            </div>
        </div>
    </header>
    <section id="infoInput">
        <h3>필수 정보 입력</h3>
        <div class="phoneInput">
            <span>휴대전화</span>
            <div class="phoneBtn">
                <input type="number" placeholder="휴대전화">
                <button class="certifiBtn" disabled="true">인증요청</button>
            </div>
        </div>
        <div class="cetifiNumInput">
            <span>인증번호</span>
            <input type="number" placeholder="인증번호 입력">
            <div class="time">
                남은시간 <span>3:00</span>
            </div>
        </div>
    </section>
    <div class="bottom">
        <a href="./mypage_info_change_detail.php">확인</a>
    </div>
</body>
<script>

    $('.phoneInput>.phoneBtn>input').on('input', function () {
        if ($('.phoneInput>.phoneBtn>input').val() == '') {
            $('.certifiBtn').attr("disabled", true)
        } else {
            $('.certifiBtn').attr("disabled", false)
            if ($('.certifiBtn').attr("disabled", false)) {
                $('.certifiBtn').click(function () {
                    $(this).text('다시받기')
                    $('.time').css("display", "block")
                    $('.cetifiNumInput>input').on('input', function () {
                        if ($('.cetifiNumInput>input').val() == '') {
                            $('.bottom>a').removeClass('on')
                        } else {
                            $('.bottom>a').addClass('on')
                        }
                    })
                });

            }
        }
    });
</script>

</html>