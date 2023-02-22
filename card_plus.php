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
    <link rel="stylesheet" href="./css/swiper-bu ndle.min.css" />
    <link rel="stylesheet" href="./css/swiper.css">
    <link rel="stylesheet" href="./css/card_plus.css">
    <link rel="stylesheet" href="./css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
    <header id="headerType2"> 
        <div>
            <p>카드 등록</p>
            <div class="headerIcoWrap">
            <a href="./bottom_gnb_mypage_member.php" class="icoLeftArrow"><span class="hide">뒤로가기</span></a>
                <div class="headerIco">
                </div>
            </div>
        </div>
    </header>
    <div class="main">
        <button>
            <img src="./img/ic-scan.png" alt="">
            <span>카드스캔</span>
        </button>
        <div class="cardNumInputWrap">
            <span>카드번호</span>
            <div class="cardNumInput">
                <input type="text" pattern="\d*" maxlength="4" placeholder="1234">
                <span>-</span>
                <input type="text" pattern="\d*" maxlength="4" placeholder="5678">
                <span>-</span>
                <input type="password" pattern="\d*" size="2rem" maxlength="4" placeholder="2345">
                <span>-</span>
                <input type="password" pattern="\d*" maxlength="4" placeholder="6789">
            </div>
        </div>
        <div class="cardInfoInputWrap"><!-- 카드번호 입력되면 나타나게 -->
            <div class="expiryDateInput">
                <span>유효기간</span>
                <input type="password" placeholder="MM/YY">
            </div>
            <div class="twoPwInput">
                <span>비밀번호 앞 2자리</span>
                <input type="password" placeholder="2자리 숫자">
            </div>
        </div>
        <div class="cvcNum"><!-- 카드번호,유효기간,비밀번호 앞 2자리  입력되면 나타나게 -->
            <span>CVC</span>
            <input type="password" placeholder="카드 뒷면 3자리" maxlength="3" >
        </div>
    </div>
    <div class="bottom"><!-- input 태그 다 입력시 addClass:on -->
        <button>등록</button>
    </div>
    <section id="popLayer">
        <div class="popLayerBody"></div>
        <div class="popLayerContainer">
            <div class="touch_line_wrap">
                <div class="touch_line"></div>
            </div>
            <div class="popLayerCheck">
                <div class="allAgreeBtn">
                    <label>
                        <input type="checkbox" id="check_btn">
                        <span>전체동의</span>
                    </label>
                </div>
                <div class="checkBtnList">
                    <ul>
                        <li>
                            <label>
                                <input type="checkbox" id="check_btn" class="normal">
                                <span>전자금융거래 이용약관 동의(필수)</span>
                            </label>
                            <button>
                                <img src="./img/ic-arrow-right.png" alt="">
                            </button>
                        </li>
                        <li>
                            <label>
                                <input type="checkbox" id="check_btn" class="normal">
                                <span>개인정보 수집 및 이용동의 (필수)</span>
                            </label>
                            <button>
                                <img src="./img/ic-arrow-right.png" alt="">
                            </button> 
                        </li>
                        <li>
                            <label>
                                <input type="checkbox" id="check_btn" class="normal">
                                <span>개인정보 제공 및 위탁동의 (필수)</span>
                            </label>
                            <button>
                                <img src="./img/ic-arrow-right.png" alt="">
                            </button> 
                        </li>
                        <li>
                            <label>
                                <input type="checkbox" id="check_btn" class="normal">
                                <span>개인정보 수집 및 활용 동의 (필수)</span>
                            </label>
                            <button>
                                <img src="./img/ic-arrow-right.png" alt="">
                            </button> 
                        </li>
                    </ul>
                </div>
            </div>
            <div class="popBottom">
                <a href="">확인</a>
            </div>
        </div>
    </section>
</body>
<script>
    $('.bottom>button').click(function(){
        $('.popLayerBody').css("display","block");
        $('.popLayerBody').css("background","rgba(0, 0, 0, 0.5)")
        $('.popLayerContainer').addClass('fixed')
        $('body').addClass('hidden')
    })

     // 체크박스 전체 선택
     $(".allAgreeBtn").on("click", "#check_btn", function () {
      var checked = $(this).is(":checked");

      if(checked){
      	$(this).parents(".allAgreeBtn").siblings('.checkBtnList').find('input').prop("checked", true);
        $(this).parents('.popLayerCheck').siblings('.popBottom').children('a').addClass('on')
        $(this).parents('.popLayerCheck').siblings('.popBottom').children('a').text("모두 동의합니다.")
      } else {
      	$(this).parents(".allAgreeBtn").siblings('.checkBtnList').find('input').prop("checked", false);
        $(this).parents('.popLayerCheck').siblings('.popBottom').children('a').removeClass('on')
        $(this).parents('.popLayerCheck').siblings('.popBottom').children('a').text("확인")
      }
    });

    $(".checkBtnList").on("click", ".normal", function() {
        var checked = $(this).is(":checked");

        if (!checked) {
        	$(".allAgreeBtn>label>#check_btn").prop("checked", false);
        }
    });

    // 체크박스 개별 선택
    $(".checkBtnList").on("click", ".normal", function() {
        var is_checked = true;

        $(".checkBtnList .normal").each(function(){
            is_checked = is_checked && $(this).is(":checked");
        });

        $(".allAgreeBtn>label>#check_btn").prop("checked", is_checked);
    });
</script>
</html>