<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/one_on_one.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
</head>

<body>
    <div id="one_on_one_page">
        <div>
            <header id="header_type2">
                <div>
                    <p>1:1 문의 내역</p>
                    <div class="header_ico_wrap">
                        <a href="./one_on_one_write.php" class="ico_left_arrow"></a>
                        <div class="header_ico">
                            <a href="#" class="ico_search"><span class="hide">검색</span></a>
                            <a href="" class="ico_shoppingbag"><span class="hide">쇼핑백</span></a>
                        </div>
                    </div>
                </div>
            </header>
            <section id="answer_count">
                <ul>
                    <li>
                        <button class="all">
                            <p>전체</p>
                            <p class="all_count count">0</p>
                        </button>
                    </li>
                    <li>
                        <button>
                            <p>답변완료</p>
                            <p class="complete_count count">0</p>
                        </button>
                    </li>
                    <li>
                        <button>
                            <p>답변대기</p>
                            <p class="waiting_count count">0</p>
                        </button>
                    </li>
                </ul>
            </section>
            <section id="answer_list_wrap">
                <div class="answer_no_list"><!-- 문의 내역 없을경우 -->
                    <p>등록된 1:1 문의내역이 없습니다.</p>
                    <a href="">1:1 문의 접수</a>
                </div>
                <div class="answer_list">
                    <ul>
                        <li class="answer_waiting_list">
                            <a href="./one_on_one_detail.php">
                                <div class="answer_list_top">
                                    <div class="answer_category_tag">
                                        <span class="fitst_tag">상품문의</span><span class="grey_middle_dot"></span
                                            class="second_tag"><span>배송</span>
                                    </div>
                                    <div class="answer_button">
                                        <button class="answer_change">수정</button>
                                        <button class="answer_delete">삭제</button>
                                    </div>
                                </div>
                                <div class="answer_list_middle">
                                    <p class="answer_list_middle_title"> 배송상품이 다른 지역으로 갔습니다.</p>
                                </div>
                                <div class="answer_list_bottom">
                                    <div class="answer_waiting_text">답변대기</div>
                                    <div class="answer_date">22.10.01 14:06:24</div>
                                </div>
                            </a>
                        </li>
                        <li class="answer_complete_list">
                            <a href="./one_on_one_detail.php">
                                <div class="answer_list_top">
                                    <div class="answer_category_tag">
                                        <span class="fitst_tag">서비스</span><span class="grey_middle_dot"></span
                                            class="second_tag"><span>쿠폰/마일리지</span>
                                    </div>
                                    <div class="answer_button">
                                        <button class="answer_delete">삭제</button>
                                    </div>
                                </div>
                                <div class="answer_list_middle">
                                    <p class="answer_list_middle_title">쿠폰 적용 오류</p>
                                </div>
                                <div class="answer_list_bottom">
                                    <div class="answer_complete_text">답변완료</div>
                                    <div class="answer_date">22.10.01 14:06:24</div>
                                </div>
                            </a>
                        </li>
                        <li class="answer_complete_list">
                            <a href="./one_on_one_detail.php">
                                <div class="answer_list_top">
                                    <div class="answer_category_tag">
                                        <span class="fitst_tag">취소/환불/교환</span><span class="grey_middle_dot"></span
                                            class="second_tag"><span>교환</span>
                                    </div>
                                    <div class="answer_button">
                                        <button class="answer_delete">삭제</button>
                                    </div>
                                </div>
                                <div class="answer_list_middle">
                                    <p class="answer_middle_title">상품 품절</p>
                                </div>
                                <div class="answer_list_bottom">
                                    <div class="answer_complete_text">답변완료</div>
                                    <div class="answer_date">22.10.01 14:06:24</div>
                                </div>
                            </a>
                        </li>
                        <li class="answer_complete_list">
                            <a href="./one_on_one_detail.php">
                                <div class="answer_list_top">
                                    <div class="answer_category_tag">
                                        <span class="fitst_tag">취소/환불/교환</span><span class="grey_middle_dot"></span
                                            class="second_tag"><span>교환</span>
                                    </div>
                                    <div class="answer_button">
                                        <button class="answer_delete">삭제</button>
                                    </div>
                                </div>
                                <div class="answer_list_middle">
                                    <p class="answer_middle_title">
                                        쿠폰 적용 오류
                                    </p>
                                </div>
                                <div class="answer_list_bottom">
                                    <div class="answer_complete_text">답변완료</div>
                                    <div class="answer_date">22.10.01 14:06:24</div>
                                </div>
                            </a>
                        </li>
                        <li class="answer_waiting_list">
                            <a href="./one_on_one_detail.php">
                                <div class="answer_list_top">
                                    <div class="answer_category_tag">
                                        <span class="fitst_tag">상품문의</span><span class="grey_middle_dot"></span
                                            class="second_tag"><span>배송</span>
                                    </div>
                                    <div class="answer_button">
                                        <button class="answer_change">수정</button>
                                        <button class="answer_delete">삭제</button>
                                    </div>
                                </div>
                                <div class="answer_list_middle">
                                    <p class="answer_middle_title">배송상품이 다른 지역으로 갔습니다.</p>
                                </div>
                                <div class="answer_list_bottom">
                                    <div class="answer_waiting_text">답변대기</div>
                                    <div class="answer_date">22.10.01 14:06:24</div>
                                </div>
                            </a>
                        </li>
                        <li class="answer_complete_list">
                            <a href="./one_on_one_detail.php">
                                <div class="answer_list_top">
                                    <div class="answer_category_tag">
                                        <span class="fitst_tag">취소/환불/교환</span><span class="grey_middle_dot"></span
                                            class="second_tag"><span>교환</span>
                                    </div>
                                    <div class="answer_button">
                                        <button class="answer_delete">삭제</button>
                                    </div>
                                </div>
                                <div class="answer_list_middle">
                                    <p class="answer_middle_title">쿠폰 적용 오류</p>
                                </div>
                                <div class="answer_list_bottom">
                                    <div class="answer_complete_text">답변완료</div>
                                    <div class="answer_date">22.10.01 14:06:24</div>
                                </div>
                            </a>
                        </li>
                        <li class="answer_complete_list">
                            <a href="./one_on_one_detail.php">
                                <div class="answer_list_top">
                                    <div class="answer_category_tag">
                                        <span class="fitst_tag">취소/환불/교환</span><span class="grey_middle_dot"></span
                                            class="second_tag"><span>교환</span>
                                    </div>
                                    <div class="answer_button">
                                        <button class="answer_delete">삭제</button>
                                    </div>
                                </div>
                                <div class="answer_list_middle">
                                    <p class="answer_middle_title">쿠폰 적용 오류</p>
                                </div>
                                <div class="answer_list_bottom">
                                    <div class="answer_complete_text">답변완료</div>
                                    <div class="answer_date">22.10.01 14:06:24</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</body>
<script>

    $(".answer_delete").click(function () {

        $(this).closest(".answer_list>ul>li").remove()
        visibliAllCount();
        visibleAnswerNoList1();
        visibliCompleteCount();
        visibleAnswerNoList2();
        visibliWaitingCount();
        visibleAnswerNoList3();
    })//삭제 버튼

    function visibliAllCount() {
        var all_length = $(".answer_list>ul>li").length;
        $(".all_count").text(all_length)
    }

    $(function () {
        var all_length = $(".answer_list>ul>li").length;
        $(".all_count").text(all_length)
    })

    function visibleAnswerNoList1() {
        if ($(".answer_list>ul>li").length > 0) {
            $(".answer_no_list").css("display", "none");
            $('.all_count').addClass('on')
        } else {
            $(".answer_no_list").css("display", "block");
            $('.all_count').removeClass('on')
        }
    }

    if ($(".answer_list>ul>li").length > 0) {
        $(".answer_no_list").css("display", "none");
        $('.all_count').addClass('on')
    } else {
        $(".answer_no_list").css("display", "block");
        $('.all_count').removeClass('on')
    }//전체 카운트

    function visibliCompleteCount() {
        var complete_length = $(".answer_list>ul>.answer_complete_list").length;
        $(".complete_count").text(complete_length)
    }

    $(function () {
        var complete_length = $(".answer_list>ul>.answer_complete_list").length;
        $(".complete_count").text(complete_length)
    })

    function visibleAnswerNoList2() {
        if ($(".answer_list>ul>.answer_complete_list").length > 0) {
            $('.complete_count').addClass('on')
        } else {
            $('.complete_count').removeClass('on')
        }
    }

    if ($(".answer_list>ul>.answer_complete_list").length > 0) {
        $('.complete_count').addClass('on')
    } else {
        $('.complete_count').removeClass('on')
    }//답변완료 카운트


    function visibliWaitingCount() {
        var waiting_length = $(".answer_list>ul>.answer_waiting_list").length;
        $(".waiting_count").text(waiting_length)
    }

    $(function () {
        var waiting_length = $(".answer_list>ul>.answer_waiting_list").length;
        $(".waiting_count").text(waiting_length)
    })

    function visibleAnswerNoList3() {
        if ($(".answer_list>ul>.answer_waiting_list").length > 0) {
            $('.waiting_count').addClass('on')
        } else {
            $('.waiting_count').removeClass('on')
        }
    }

    if ($(".answer_list>ul>.answer_waiting_list").length > 0) {
        $('.waiting_count').addClass('on')
    } else {
        $('.waiting_count').removeClass('on')
    }//답변대기 카운트

    $('.answer_list>ul>li').click(function () {
        $(this).find('.answer_list_middle>.img_attach').toggleClass('on')
    })





</script>

</html>