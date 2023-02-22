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
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/mypage_non-member.css">
    <link rel="stylesheet" href="./css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>

<body>
    <?php include("./common.php/btn_gotop.php");?>
    <nav id="bottomGnb">
        <ul>
            <li>
                <a href="./bottom_gnb_menu.php" class="icoMenu">
                    <img src="./img/ic-menu.png" alt="하단메뉴아이콘">
                    <p>메뉴</p>
                </a>
            </li>
            <li>
                <a href="./index.php" class="icoHome">
                    <img src="./img/ic-home.png" alt="하단홈아이콘">
                    <p>홈</p>
                </a>
            </li>
            <li>
                <a href="./bottom_gnb_recent.php" class="icoRecent">
                    <img src="./img/ic-recent.png" alt="하단최근아이콘">
                    <p>최근 본</p>
                </a>
            </li>
            <li>
                <a href="./bottom_gnb_like.php" class="icoLike">
                    <img src="./img/ic-blike.png" alt="하단'좋아요'아이콘">
                    <p>찜</p>
                </a>
            </li>
            <li>
                <a href="./bottom_gnb_mypage_non-member.php" class="icoMypage">
                    <img src="./img/ic-my-active.png" alt="하단마이페이지아이콘">
                    <p>마이</p>
                </a>
            </li>
        </ul>
    </nav>
    <header id="headerType2">
        <div>
            <div class="headerIcoWrap">
                <div class="headerIco">
                    <a href="#" class="icoAlarm"><span class="hide">알림</span></a>
                    <a href="" class="icoShoppingbag"><span class="hide">쇼핑백</span></a>
                </div>
            </div>
        </div>
    </header>
    <section id="nonMemberTop">
        <div>
            <p>아직 회원이 아니신가요?</p>
            <p>바우하우스 회원이 되어 <br> 다양한 서비스를 경험해보세요.</p>
        </div>
        <a href="./login.php">로그인/회원가입</a>
    </section>
    <section id="nonMemberMiddle">
        <ul>
            <h3>나의 활동</h3>
            <li><a href="">1:1 문의 내역</a></li>
            <li><a href="">상품 문의 내역</a></li>
            <li><a href="">최근 본 상품</a></li>
        </ul>
        <ul>
            <h3>정보</h3>
            <li><a href="">결제 카드 관리</a></li>
            <li><a href="">환불정보 관리</a></li>
            <li><a href="">배송지 관리</a></li>
            <li><a href="">SNS 계정 관리</a></li>
        </ul>
        <ul>
            <h3>앱 설정</h3>
            <li><a href="">알림설정</a></li>
        </ul>
        <ul>
            <h3>서비스</h3>
            <li><a href="">고객센터</a></li>
            <li><a href="">매장안내</a></li>
        </ul>
    </section>
    <?php include("./common.php/footer.php");?>
</body>
<script>
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('.btn_gotop').show();
        } else {
            $('.btn_gotop').hide();
        }
    });
    $('.btn_gotop').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 400);
        return false;
    });

    var FirstScroll = 0;
    var prevScrollTop = $(window).scrollTop(),
        tp = $(window).scrollTop();

    $(window).scroll(function (e) {
        tp = $(this).scrollTop();

        if (tp > prevScrollTop) {
            $('#bottomGnb').addClass('active')
        } else if (tp < prevScrollTop) {
            $('#bottomGnb').removeClass('active')
        }
        prevScrollTop = tp;
    });
</script>

</html>