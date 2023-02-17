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
    <link rel="stylesheet" href="css/alarm.css">
    <link rel="stylesheet" href="css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
    <header id="header_type2"> 
        <div>
            <p>알림 </p>
            <div class="header_ico_wrap">
                <a href="./index.php" class="ico_left_arrow"></a>
                <div class="header_ico">
                </div>
            </div>
        </div>
    </header> 
    <nav id="bottom_gnb">
        <ul>
            <li>
                <a href="./bottom_gnb_menu.php" class="ico_menu">
                    <img src="./img/ic-menu.png" alt="하단메뉴아이콘">
                    <p>메뉴</p>
                </a>
            </li>
            <li>
                <a href="./index.php" class="ico_home">
                    <img src="./img/ic-home-active .png" alt="하단홈아이콘">
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
                <a href="./bottom_gnb_mypage_non-member.php" class="ico_mypage">
                    <img src="./img/ic-my.png" alt="하단마이페이지아이콘">
                    <p>마이</p>
                </a>
            </li>
        </ul>
    </nav>
    <div class="tab_wrap">
        <div class="tab_container">
            <div class="tabnav">
                <ul>
                    <li><a href="#tab01" class="on"><span class="redDot">주문&middot;문의</span></a></li>
                    <li><a href="#tab02"><span>혜택&middot;기능</span></a></li>
                </ul>
            </div>
            <div class="tabcontent">
                <div id="tab01" class="tab">
                    <ul>
                        <li>
                            <a href="">
                                <div class="alarmTitle complete">
                                    <img src="./img/alarm_sipping_complete.png" alt="">
                                    <span>배송완료</span>
                                </div>
                                <div class="alarmContent">
                                    <div class="alarmText">
                                        <p>주문하신 상품이 도착했어요</p>
                                        <span>배송이 완료되었어요. 상품을 받으셨다면 구매 확정 후 리뷰를 남겨주세요.</span>
                                    </div>
                                    <div class="alarmContentImg">
                                        <img src="./img/alarm_test.png" alt="">
                                    </div>
                                </div>
                                <div class="alarmDate">
                                    12월 24일
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="alarmTitle start">
                                    <img src="./img/alarm_sipping_complete.png" alt="">
                                    <span>배송시작</span>
                                </div>
                                <div class="alarmContent">
                                    <div class="alarmText">
                                        <p>주문하신 상품이 발송되었어요</p>
                                        <span>[기장선택] 랭쓰 오버 와이드 코튼 데님 팬츠 상품이 발송되었어요</span>
                                    </div>
                                    <div class="alarmContentImg">
                                        <img src="./img/alarm_test.png" alt="">
                                    </div>
                                </div>
                                <div class="alarmDate">
                                    12월 24일
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="alarmTitle cancel">
                                    <img src="./img/alarm_order_cancel.png" alt="">
                                    <span>주문취소</span>
                                </div>
                                <div class="alarmContent">
                                    <div class="alarmText">
                                        <p>주문이 취소되었어요</p>
                                        <span>주문이 취소되어 환불요청이 승인되었어요.결제한 카드로 1/5일(목) 이내 환불 예정이에요.</span>
                                    </div>
                                    <div class="alarmContentImg">
                                        <img src="./img/alarm_test.png" alt="">
                                    </div>
                                </div>
                                <div class="alarmDate">
                                    12월 24일
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="alarmTitle question">
                                    <img src="./img/alarm_order_cancel.png" alt="">
                                    <span>문의</span>
                                </div>
                                <div class="alarmContent">
                                    <div class="alarmText">
                                        <p>내 문의에 답변이 완료되었어요</p>
                                        <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo, ullam reiciendis.</span>
                                    </div>
                                    <div class="alarmContentImg">
                                        <img src="./img/alarm_test.png" alt="">
                                    </div>
                                </div>
                                <div class="alarmDate">
                                    12월 24일
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div id="tab02" class="tab">
                    <ul>
                        <li>
                            <a href="">
                                <div class="alarmTitle question">
                                    <img src="./img/alarm_coupon.png" alt="">
                                    <span>쿠폰</span>
                                </div>
                                <div class="alarmContent">
                                    <div class="alarmText">
                                        <p>5% 할인쿠폰이 24시간 내로 만료됩니다</p>
                                        <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo, ullam reiciendis.</span>
                                    </div>
                                    <div class="alarmContentImg">
                                        <img src="./img/alarm_test.png" alt="">
                                    </div>
                                </div>
                                <div class="alarmDate">
                                    12월 24일
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="alarmTitle question">
                                    <img src="./img/alarm_coupon.png" alt="">
                                    <span>쿠폰</span>
                                </div>
                                <div class="alarmContent">
                                    <div class="alarmText">
                                        <p>5% 할인쿠폰이 24시간 내로 만료됩니다</p>
                                        <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo, ullam reiciendis.</span>
                                    </div>
                                    <div class="alarmContentImg">
                                        <img src="./img/alarm_test.png" alt="">
                                    </div>
                                </div>
                                <div class="alarmDate">
                                    12월 24일
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="alarmTitle question">
                                    <img src="./img/alarm_event.png" alt="">
                                    <span>이벤트</span>
                                </div>
                                <div class="alarmContent">
                                    <div class="alarmText">
                                        <p>홍길동 님이 좋아한 상품이 할인중이에요</p>
                                        <span>오늘까지 15% 할인!</span>
                                    </div>
                                    <div class="alarmContentImg">
                                        <img src="./img/alarm_test.png" alt="">
                                    </div>
                                </div>
                                <div class="alarmDate">
                                    12월 24일
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="alarmTitle question">
                                    <img src="./img/alarm_event.png" alt="">
                                    <span>이벤트</span>
                                </div>
                                <div class="alarmContent">
                                    <div class="alarmText">
                                        <p>홍길동 님이 좋아한 상품이 할인중이에요</p>
                                        <span>오늘까지 15% 할인!</span>
                                    </div>
                                    <div class="alarmContentImg">
                                        <img src="./img/alarm_test.png" alt="">
                                    </div>
                                </div>
                                <div class="alarmDate">
                                    12월 24일
                                </div>
                            </a>
                        </li> 
                    </ul>
                </div>
            </div>
        </div>
    </div> 
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

    $('.tabnav>ul>li>a').click(function () {
        $('.tab').hide().filter(this.hash).fadeIn();
        $('.tabnav>ul>li>a').removeClass('on');
        $(this).addClass('on');
        return false;
    }).filter(':eq(0)').click();//best_tab처리

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

    });//하단 gnb 스크롤에 따른 히든처리
</script>
</html>