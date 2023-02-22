<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/one_on_one_detail.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
</head>
<body>
    <div id="oneOnOneDetailPage">
        <div>
            <header id="headerType2">
                <div>
                    <p>1:1 문의 내역</p>
                    <div class="headerIcoWrap">
                        <a href="./one_on_one.php" class="icoLeftArrow"></a>
                        <div class="header_ico">
                            <a href="#" class="icoSearch"><span class="hide">검색</span></a>
                            <a href="" class="icoShoppingbag"><span class="hide">쇼핑백</span></a>
                        </div>
                    </div>
                </div>
            </header>
            <section id="answerItemWrap"><!-- 문의상품선택 -->
                <img src="./img/brand_2.png" alt="">
                <div class="answerItem">
                    <div class="itemName">
                        라운드넥 아가일 니트 CLAWSW102dddddddd
                    </div>
                    <div class="orderNum">
                        주문번호 012345678910
                    </div>
                </div>
            </section><!-- 문의상품선택 -->
            <section>
                <div class="answerList">
                    <ul>
                        <li class="answerWaitingList">
                            <div class="answerListTop">
                                <div class="answerCategoryTag">
                                    <span class="fitstTag">상품문의</span><span class="greyMiddleDot"></span class="secondTag"><span>배송</span>
                                </div>
                                <div class="answerButton">
                                    <button class="answerChange">수정</button>
                                    <button class="answerDelete">삭제</button>
                                </div>
                            </div>
                            <div class="answerListMiddle">
                                <p class="answerListMiddleTitle">배송상품이 다른 지역으로 갔습니다.</p>
                                <div class="imgAttach">
                                    <img src="./img/brand_3.png" alt="">
                                    <img src="./img/brand_3.png" alt="">
                                    <img src="./img/brand_3.png" alt="">
                                </div>
                            </div>
                            <div class="answerListBottom">
                                <div class="answerCompleteText">답변완료</div>
                                <div class="answerDate">22.10.01 14:06:24</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <section id="operatorAnswerWrap">
                <div class="arrowBox"></div>
                <div class="operatorAnswer">
                    <p>안녕하세요 고객님, 불편을 드려 죄송합니다.해당 상품은 빠르게 다시 배송해드리겠습니다.</p>
                    <p class="operatorAnswerDate">22.10.01 11:29</p>
                </div>
            </section>
        </div>
    </div>
</body>
</html>