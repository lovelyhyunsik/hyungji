<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/info_change.css">
    <link rel="stylesheet" href="./css/swiper.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
    <div id="infoChange">
        <div>
            <header id="headerType2">
                <div>
                    <p>정보 변경</p>
                    <div class="headerIcoWrap">
                        <a href="./order_page.php" class="icoLeftArrow"></a>
                    </div>
                </div>
            </header>
            <section id="userInfo">
                <div class="userName">
                    <p>이름</p>
                    <input type="text">
                </div>
                <div class="userEmail">
                    <p>이메일</p>
                    <input type="text"><span>@</span>
                    <div class="selectBoxType">
                        <button class="label"></button>
                        <ul class="optionItemWrap">
                            <li class="optionItem">naver.com</li>
                            <li class="optionItem">daum.net</li>
                            <li class="optionItem">kakao.com</li>
                            <li class="optionItem">google.com</li>
                            <li class="optionItem">직접입력</li>
                        </ul>
                        <input type="text" class="direct"><!-- 직접입력 클릭시 나타나게 -->
                    </div>
                </div>
                <div class="userNum">
                    <p>휴대전화</p>
                    <div class="phoneNumWrap">
                        <span>010</span>
                        <input type="text" class="phoneNum">
                    </div>
                </div>
            </section>
            <div id="bottom">
                <button class="cancel">취소</button>
                <button class="change">변경</button>
            </div>
        </div>
    </div>
</body>
<script>
    $('.selectBoxType>button').click(function(){
        $(this).toggleClass('on')
        $('.optionItemWrap').toggleClass('on')
    })//셀렉트 박스

    $('.optionItem').click(function(){
        var textChange = $(this).text();
        $('.label').text(textChange)
        $('.optionItemWrap').toggleClass('on')
        $('.selectBoxType>button').removeClass('on')
        $('.direct').css("display","none")
        $('.selectBoxType>.optionItemWrap>.optionItem').css("background","none")
        $(this).css("background","#f5f5f5")
    })

    $('.optionItem:last-child').click(function(){
        $('.direct').css("display","block")
    })//셀렉트 박스
</script>
</html>