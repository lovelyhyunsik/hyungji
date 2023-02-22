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
    <link rel="stylesheet" href="css/non_member_check.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="./js/common.js"></script>
</head>
<body>
    <header id="headerType2">
        <div>
            <p>비회원 주문조회</p>
            <div class="headerIcoWrap">
                <a href="./login.php" class="icoLeftArrow"></a>
                <div class="headerIco">
                    <a href="" class="icoShoppingbag"><span class="hide">쇼핑백</span></a>
                </div>
            </div>
        </div>
    </header>
    <section id="main">
        <div class="orderUserName input">
            <span>주문자 명</span>
            <label>
                <input class="textInput" type="text" placeholder="주문자 명">
                <button class="inputTextDelete">
                    <img src="./img/ic-close-fill-24px.png" alt="">
                </button>
            </label>
        </div>
        <div class="orderNum input">
            <span>주문번호</span>
            <label>
                <input class="textInput" type="number" placeholder="주문번호">
                <button class="inputTextDelete">
                    <img src="./img/ic-close-fill-24px.png" alt="">
                </button>
            </label>
        </div>
        <button>주문 조회하기</button>
        <div class="forgetNum">
            <p>주문번호를 잊으셨나요?</p>
            <span>알림톡(SMS) 또는 이메일의 주문 번호를 확인 해 주세요.고객센터 0000-0000으로 문의해주세요</span>
        </div>
    </section>
    <?php include("./common.php/footer.php");?>
</body>
</html>