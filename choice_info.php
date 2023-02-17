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
    <link rel="stylesheet" href="css/choice_info.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/common.js"></script>
</head>
<body>
    <header id="header_type2">
        <div>
            <p>회원가입</p>
            <div class="header_ico_wrap">
                <a href="./essential_info.php" class="ico_left_arrow"></a>
                <div class="header_ico">
                    <a href="./search.php" class="ico_search"><span class="hide">검색</span></a>
                    <a href="" class="ico_shoppingbag"><span class="hide">쇼핑백 </span></a>
                </div>
            </div>
        </div>
    </header>
    <section id="choiceInput">
        <h3>선택 정보 입력</h3>
        <div class="emailInputWrap">
            <span>이메일</span>
            <div class="emailInput">
                <input type="text">
                <span>@</span>
                <input type="text" class="domain">
            </div>
            <div class="selectBoxType">
                <button class="label">직접입력</button>
                <ul class="optionItemWrap" id="crops1">
                    <li class="optionItem">naver.com</li>
                    <li class="optionItem">daum.net</li>
                    <li class="optionItem">kakao.com</li>
                    <li class="optionItem">google.com</li>
                </ul>
            </div>
        </div>
        <div class="accountInputWrap">
            <span>환불계좌</span>
            <div class="accountInput">
                <div class="selectBoxType">
                    <button class="label">은행선택</button>
                    <ul class="optionItemWrap" id="crops1">
                        <li class="optionItem">국민은행</li>
                        <li class="optionItem">신한은행</li>
                        <li class="optionItem">우리은행</li>
                        <li class="optionItem">농협</li>
                    </ul>
                </div>
            </div>
            <input type="num">
        </div>
    </section>
    <section id="reception">
        <h3>이벤트 정보 수신</h3>
        <div class="checkBoxForm">
            <div class="allAgreeBtn">
                <label>
                    <input type="checkbox" id="check_btn">
                    <span>전체동의</span>
                </label>
            </div>
            <div class="checkBtnList">
                <label>
                    <input type="checkbox" id="check_btn" class="normal">
                    <span>문자 (선택)</span>
                </label>
                <label>
                    <input type="checkbox" id="check_btn" class="normal">
                    <span>이메일 (선택)</span>
                </label> 
                <label>
                    <input type="checkbox" id="check_btn" class="normal">
                    <span>카카오톡 (선택)</span>
                </label> 
            </div>
        </div>
        <p>다양한 이벤트 및 혜택에 대한 수신동의 여부를 선택해주세요.수신 동의 시 고객님을 위한 다양한 혜택정보를 제공합니다.</p>
    </section>
    <div class="bottom">
        <a href="./essential_info.php" class="before">이전</a>
        <a href="./join_complete.php" class="after">다음 </a>
    </div>
</body>
<script>
    $('.emailInputWrap>.selectBoxType>button').click(function(){
        $(this).toggleClass('on')
        $('.emailInputWrap>.selectBoxType>.optionItemWrap').toggleClass('on')
    })

    $('.emailInputWrap>.selectBoxType>.optionItemWrap>.optionItem').click(function(){
        var textChange = $(this).text();
        $('.domain').val(textChange)
        $('.emailInputWrap>.selectBoxType>.label').text(textChange)
        $('.emailInputWrap>.selectBoxType>.optionItemWrap').toggleClass('on')
        $('.emailInputWrap>.selectBoxType>button').removeClass('on')
        $('.direct').css("display","none")
        $('.emailInputWrap>.selectBoxType>.optionItemWrap>.optionItem').css("background","none")
        $(this).css("background","#f5f5f5")
    })//이메일 드롭박스

    $('.accountInput>.selectBoxType>button').click(function(){
        $(this).toggleClass('on')
        $('.accountInput>.selectBoxType>.optionItemWrap').toggleClass('on')
    })

    $('.accountInput>.selectBoxType>.optionItemWrap>.optionItem').click(function(){
        var textChange = $(this).text();
        $('.accountInput>.selectBoxType>.label').text(textChange)
        $('.accountInput>.selectBoxType>.label').css("color","#222")
        $('.accountInput>.selectBoxType>.optionItemWrap').toggleClass('on')
        $('.accountInput>.selectBoxType>button').removeClass('on')
        $('.accountInput>.selectBoxType>.optionItemWrap>.optionItem').css("background","none")
        $(this).css("background","#f5f5f5")
    })//은행 드롭박스

     // 체크박스 전체 선택
     $(".allAgreeBtn").on("click", "#check_btn", function () {
      var checked = $(this).is(":checked");

      if(checked){
      	$(this).parents(".allAgreeBtn").siblings('.checkBtnList').find('input').prop("checked", true);
      } else {
      	$(this).parents(".allAgreeBtn").siblings('.checkBtnList').find('input').prop("checked", false);
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