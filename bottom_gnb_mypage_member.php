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
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/mypage_member.css">
    <link rel="stylesheet" href="css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>

<body>
    <?php include("./common.php/btn_gotop.php");?>
    <nav id="bottom_gnb_active_my">
        <ul>
            <li>
                <a href="./bottom_gnb_menu.php" class="ico_menu">
                    <img src="./img/ic-menu.png" alt="하단메뉴아이콘">
                    <p>메뉴</p>
                </a>
            </li>
            <li>
                <a href="./index.php" class="ico_home">
                    <img src="./img/ic-home.png" alt="하단홈아이콘">
                    <p>홈</p>
                </a>
            </li>
            <li>
                <a href="./bottom_gnb_recent.php" class="ico_recent">
                    <img src="./img/ic-recent.png" alt="하단최근아이콘">
                    <p>최근 본</p>
                </a>
            </li>
            <li>
                <a href="./bottom_gnb_like.php" class="ico_like">
                    <img src="./img/ic-blike.png" alt="하단'좋아요'아이콘">
                    <p>찜</p>
                </a>
            </li>
            <li>
                <a href="#" class="ico_mypage">
                    <img src="./img/ic-my-active.png" alt="하단마이페이지아이콘">
                    <p>마이</p>
                </a>
            </li>
        </ul>
    </nav>
    <header id="header_type2">
        <div>
            <div class="header_ico_wrap">
            <a href="./index.php" class="ico_left_arrow"><span class="hide">뒤로가기</span></a>
                <div class="header_ico">
                    <a href="./alarm.php" class="ico_alarm"><span class="hide">알림</span></a>
                    <a href="./shoppingbag.php" class="ico_shoppingbag"><span class="hide">쇼핑백</span></a>
                </div>
            </div>
        </div>
    </header>
    <section id="member_top">
        <div class="member_top_left">
            <div class="membership bronze">
            </div>
            <div class="member_top_left_text">
                <div class="member_name">
                    <p>홍길동님</p>
                </div>
                <div class="membership_view">
                    <a href="membership_info.php">등급혜택보기</a>
                </div>
            </div>
        </div>
        <div class="member_top_right">
            <a href="">개인정보 수정</a>
        </div>
    </section>
    <section id="member_middle">
        <div class="member_middle_top">
            <div class="saving">
                <a href="">
                    <div class="saving_top">
                        <p>적립금</p>
                        <img src="./img/ic-arrow-right.png" alt="">
                    </div>
                    <div class="saving_bottom">
                        <p>0<span>원</span></p>
                    </div>
                </a>
            </div>
            <div class="sale-coupon">
                <a href="">
                    <div class="sale-coupon_top">
                        <p>적립금</p>
                        <img src="./img/ic-arrow-right.png" alt="">
                    </div>
                    <div class="sale-coupon_bottom">
                        <p>0</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="member_middle_bottom">
            <ul class="member_middle_bottom_container">
                <li>
                    <a href="./order_list.html">
                        <p class="text">주문내역</p>
                        <p class="number">0</p>
                    </a>
                </li>
                <li>
                    <a href="./mypage_review.html">
                        <p class="text">구매후기</p>
                        <p class="number">0</p>
                    </a>
                </li>
                <li>
                    <a href="./bottom_gnb_like.php">
                        <p class="text">찜한상품</p>
                        <p class="number">0</p>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section id="member_bottom">
        <ul>
            <h3>나의 활동</h3>
            <li><a href="./one_on_one.php">1:1 문의 내역</a></li>
            <li><a href="">상품 문의 내역</a></li>
            <li><a href="./bottom_gnb_recent.php">최근 본 상품</a></li>
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
    <section id="member_out">
        <ul>
            <li><a href="./bottom_gnb_mypage_non-member.php">로그아웃</a></li>
            <li><a href="">회원탈퇴</a></li>
        </ul>
    </section>
    <?php include("./common.php/footer.php");?>
</body>
<script>
    var FirstScroll = 0;
    var prevScrollTop = $(window).scrollTop(),
        tp = $(window).scrollTop();

    $(window).scroll(function (e) {
        tp = $(this).scrollTop();

        if (tp > prevScrollTop) {
            $('#bottom_gnb').addClass('active')
        } else if (tp < prevScrollTop) {
            $('#bottom_gnb').removeClass('active')
        }
        prevScrollTop = tp;
    });
</script>

</html>