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
    <link rel="stylesheet" href="./css/mypage_review.css">
    <link rel="stylesheet" href="./css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="./js/common.js"></script>
</head>
<body>
    <header id="headerType2"> 
        <div>
            <p>구매후기</p>
            <div class="headerIcoWrap">
            <a href="./bottom_gnb_mypage_member.php" class="icoLeftArrow"><span class="hide">뒤로가기</span></a>
                <div class="headerIco">
                </div>
            </div>
        </div>
    </header>
    <div class="tab_wrap">
        <div class="tab_container">
            <div class="tabnav">
                <ul>
                    <li><a href="#tab01" class="on">작성 가능 <span class="counting">0</span></a></li>
                    <li><a href="#tab02">작성 완료 <span class="counting">0</span></a></li>
                </ul>
            </div>
            <div class="tabcontent">
                <div id="tab01" class="tab">
                    <section id="no_item"><!-- display:none -->
                        <p>작성 가능한 상품이 없습니다.</p>
                    </section>
                    <section id="item">
                         <div class="notice">
                            <div class="noticeContainer">
                                <p>후기 작성은 구매확정일로부터 90일 이내 가능합니다.</p>
                            </div>
                         </div>
                         <ul>
                            <li>
                                <div class="itemInfo">
                                    <img src="./img/Frame 2642.png" alt="">
                                    <div class="itemInfoText">
                                        <div class="brandName">CHATELAINE</div>
                                        <div class="itemName">브러쉬 립조직 하이넥 CAWTS103</div>
                                        <div class="itemOpt"><span class="color">블랙</span>ㅣ<span class="size">S</span></div>
                                    </div>
                                </div>
                                <a href="">구매후기 작성</a>
                            </li>
                            <li>
                                <div class="itemInfo">
                                    <img src="./img/Frame 2642.png" alt="">
                                    <div class="itemInfoText">
                                        <div class="brandName">CHATELAINE</div>
                                        <div class="itemName">브러쉬 립조직 하이넥 CAWTS103</div>
                                        <div class="itemOpt"><span class="color">블랙</span>ㅣ<span class="size">S</span></div>
                                    </div>
                                </div>
                                <a href="">구매후기 작성</a>
                            </li>
                         </ul>
                    </section> 
                </div>
                <div id="tab02" class="tab">
                    <section id="no_review"><!-- display:none -->
                        <p>작성된 후기가 없습니다.</p>
                    </section>
                    <section id="reviewWrap">
                        <ul>
                            <li>
                                <div class="itemInfo">
                                    <img src="./img/Frame 2642.png" alt="">
                                    <div class="itemInfoText">
                                        <div class="brandName">CHATELAINE 1</div>
                                        <div class="itemName">브러쉬 립조직 하이넥 CAWTS103</div>
                                        <div class="date">2022.10.01</div>
                                    </div>
                                    <button class="delete">삭제</button>
                                </div>
                                <div class="review">
                                    <div class="user_container">
                                        <div class="review_star">
                                            <img src="./img/ic-review point-rd (small).png" alt="">
                                            <img src="./img/ic-review point-rd (small).png" alt="">
                                            <img src="./img/ic-review point-rd (small).png" alt="">
                                            <img src="./img/ic-review point-rd (small).png" alt="">
                                            <img src="./img/ic-review point-rd (small).png" alt="">
                                        </div>
                                    </div>
                                    <div class="purchase_opt">
                                        구매옵션 : <span class="color">핑크</span>/<span class="opt_right">비공개</span>
                                    </div>
                                    <div class="review_content">
                                        158/60 상체 골격이 튼튼한 편인데 1사이즈도 널널해요! 두터운 니트 껴입고 입을 수 있는데, 패딩치고는 조금 얇긴 해요~ 빵빵하고 막 따수운 패딩은 아닌데 겨울에
                                        편하게 입고다닐 정도? 키 작으시면 1사이즈 구매하세요~
                                    </div>
                                    <div class="good_btn">
                                        <button><img src="./img/ic-good.png" alt="" class="good_img_change"></button>
                                        <p>도움돼요<span>1</span></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="itemInfo">
                                    <img src="./img/Frame 2642.png" alt="">
                                    <div class="itemInfoText">
                                        <div class="brandName">CHATELAINE 2</div>
                                        <div class="itemName">브러쉬 립조직 하이넥 CAWTS103</div>
                                        <div class="date">2022.10.01</div>
                                    </div>
                                    <button class="delete">삭제</button>
                                </div>
                                <div class="review">
                                    <div class="user_container">
                                        <div class="review_star">
                                            <div class="best_tag">BEST</div>
                                            <img src="./img/ic-review point-rd (small).png" alt="">
                                            <img src="./img/ic-review point-rd (small).png" alt="">
                                            <img src="./img/ic-review point-rd (small).png" alt="">
                                            <img src="./img/ic-review point-rd (small).png" alt="">
                                            <img src="./img/ic-review point-rd (small).png" alt="">
                                        </div>
                                    </div>
                                    <div class="purchase_opt">
                                        구매옵션 : <span class="color">핑크</span>/<span class="opt_right">비공개</span>
                                    </div>
                                    <div class="review_content">
                                        158/60 상체 골격이 튼튼한 편인데 1사이즈도 널널해요! 두터운 니트 껴입고 입을 수 있는데, 패딩치고는 조금 얇긴 해요~ 빵빵하고 막 따수운 패딩은 아닌데 겨울에
                                        편하게 입고다닐 정도? 키 작으시면 1사이즈 구매하세요~
                                    </div>
                                    <div class="review_img_wrap">
                                        <img src="./img/Frame 2642.png" alt="">
                                        <img src="./img/Frame 2642.png" alt="">
                                        <img src="./img/Frame 2642.png" alt="">
                                        <img src="./img/Frame 2642.png" alt="">
                                        <img src="./img/Frame 2642.png" alt="">
                                        <img src="./img/Frame 2642.png" alt="">
                                    </div>
                                    <div class="good_btn">
                                        <button><img src="./img/ic-good.png" alt="" class="good_img_change"></button>
                                        <p>도움돼요<span>1</span></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="itemInfo">
                                    <img src="./img/Frame 2642.png" alt="">
                                    <div class="itemInfoText">
                                        <div class="brandName">CHATELAINE 3</div>
                                        <div class="itemName">브러쉬 립조직 하이넥 CAWTS103</div>
                                        <div class="date">2022.10.01</div>
                                    </div>
                                    <button class="delete">삭제</button>
                                </div>
                                <div class="review">
                                    <div class="user_container">
                                        <div class="review_star">
                                            <div class="best_tag">BEST</div>
                                            <img src="./img/ic-review point-rd (small).png" alt="">
                                            <img src="./img/ic-review point-rd (small).png" alt="">
                                            <img src="./img/ic-review point-rd (small).png" alt="">
                                            <img src="./img/ic-review point-rd (small).png" alt="">
                                            <img src="./img/ic-review point-rd (small).png" alt="">
                                        </div>
                                    </div>
                                    <div class="purchase_opt">
                                        구매옵션 : <span class="color">핑크</span>/<span class="opt_right">비공개</span>
                                    </div>
                                    <div class="review_content">
                                        158/60 상체 골격이 튼튼한 편인데 1사이즈도 널널해요! 두터운 니트 껴입고 입을 수 있는데, 패딩치고는 조금 얇긴 해요~ 빵빵하고 막 따수운 패딩은 아닌데 겨울에
                                        편하게 입고다닐 정도? 키 작으시면 1사이즈 구매하세요~
                                    </div>
                                    <div class="review_img_wrap">
                                        <img src="./img/Frame 2642.png" alt="">
                                        <img src="./img/Frame 2642.png" alt="">
                                        <img src="./img/Frame 2642.png" alt="">
                                        <img src="./img/Frame 2642.png" alt="">
                                        <img src="./img/Frame 2642.png" alt="">
                                        <img src="./img/Frame 2642.png" alt="">
                                    </div>
                                    <div class="good_btn">
                                        <button><img src="./img/ic-good.png" alt="" class="good_img_change"></button>
                                        <p>도움돼요<span>1</span></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="itemInfo">
                                    <img src="./img/Frame 2642.png" alt="">
                                    <div class="itemInfoText">
                                        <div class="brandName">CHATELAINE 4</div>
                                        <div class="itemName">브러쉬 립조직 하이넥 CAWTS103</div>
                                        <div class="date">2022.10.01</div>
                                    </div>
                                    <button class="delete">삭제</button>
                                </div>
                                <div class="review">
                                    <div class="user_container">
                                        <div class="review_star">
                                            <div class="best_tag">BEST</div>
                                            <img src="./img/ic-review point-rd (small).png" alt="">
                                            <img src="./img/ic-review point-rd (small).png" alt="">
                                            <img src="./img/ic-review point-rd (small).png" alt="">
                                            <img src="./img/ic-review point-rd (small).png" alt="">
                                            <img src="./img/ic-review point-rd (small).png" alt="">
                                        </div>
                                    </div>
                                    <div class="purchase_opt">
                                        구매옵션 : <span class="color">핑크</span>/<span class="opt_right">비공개</span>
                                    </div>
                                    <div class="review_content">
                                        158/60 상체 골격이 튼튼한 편인데 1사이즈도 널널해요! 두터운 니트 껴입고 입을 수 있는데, 패딩치고는 조금 얇긴 해요~ 빵빵하고 막 따수운 패딩은 아닌데 겨울에
                                        편하게 입고다닐 정도? 키 작으시면 1사이즈 구매하세요~
                                    </div>
                                    <div class="review_img_wrap">
                                        <img src="./img/Frame 2642.png" alt="">
                                        <img src="./img/Frame 2642.png" alt="">
                                        <img src="./img/Frame 2642.png" alt="">
                                        <img src="./img/Frame 2642.png" alt="">
                                        <img src="./img/Frame 2642.png" alt="">
                                        <img src="./img/Frame 2642.png" alt="">
                                    </div>
                                    <div class="good_btn">
                                        <button><img src="./img/ic-good.png" alt="" class="good_img_change"></button>
                                        <p>도움돼요<span>1</span></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="deletePop">
        <div class="deletePopContainer">
            <p>삭제 후 다시 작성할 수 없습니다.<br>정말 삭제 하시겠어요?</p>
            <div class="btn">
                <button class="cancel">취소</button>
                <button class="popDelete">삭제</button>
            </div>
        </div>
    </div>
</body>
<script>
    $('.tabnav>ul>li>a').click(function () {
        $('.tab').hide().filter(this.hash).fadeIn();
        $('.tabnav>ul>li>a').removeClass('on');
        $(this).addClass('on');
        return false;
    }).filter(':eq(0)').click();//best_tab처리

    var good = 0;
    $(".good_img_change").click(function () {
        if (good == 0) {
            $(this).attr("src", "./img/ic-good-active.png");
            good = 1;
        } else {
            $(this).attr("src", "./img/ic-good.png");
            good = 0;
        }
    });//따봉이미지 변경

    var selectedIndex = 0;

    $('.delete').click(function(){
        $('body').addClass('hidden')
        $('.deletePop').css("display","block")
        
        selectedIndex = $(this).closest('li').index();
    })

    $('.popDelete').click(function(){
        $('#reviewWrap li').eq(selectedIndex).remove();
        $('.deletePop').css("display","none")
        $('body').removeClass('hidden')
    });

    $('.btn>.cancel').click(function(){
        $('body').removeClass('hidden')
        $('.deletePop').css("display","none")
    })//작성완료에서 삭제 눌렀을때 팝업

</script>
</html>