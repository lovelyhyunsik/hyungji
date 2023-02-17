<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard/dist/web/static/pretendard.css" />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/agree.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/common.js"></script>
</head>
<body>
    <header id="header_type2">
        <div>
            <p>회원가입</p>
            <div class="header_ico_wrap">
                <a href="./join_banner.php" class="ico_left_arrow"></a>
                <div class="header_ico">
                    <a href="./login.php" class="ico_close"><span class="hide">클로즈</span></a>
                </div>
            </div>
        </div>
    </header>
    <section id="agree">
        <h3>약관동의</h3>
        <div class="agreeContainer">
            <div class="allAgreeBtn">
                <label>
                    <input type="checkbox" id="check_btn">
                    <span>전체동의</span>
                </label>
            </div>
            <div class="checkBtnList">
                <label>
                    <input type="checkbox" id="check_btn" class="normal" checked>
                    <span>서비스 이용약관 (필수) </span>
                </label>
                <label>
                    <input type="checkbox" id="check_btn" class="normal" checked>
                    <span>개인정보 취급방침 (필수)</span>
                </label> 
                <label>
                    <input type="checkbox" id="check_btn" class="normal" checked>
                    <span>멤버십 이용약관 (필수)</span>
                </label> 
                <label>
                    <input type="checkbox" id="check_btn" class="normal" checked>
                    <span>개인정보 수집 및 활용 동의 (필수)</span>
                </label> 
                <label>
                    <input type="checkbox" id="check_btn" class="normal">
                    <span>마케팅 활용 동의 (선택)</span>
                </label> 
                <label>
                    <input type="checkbox" id="check_btn" class="normal">
                    <span>개인정보 제3자 제공에 대한 동의 선택</span>
                </label> 
            </div>
        </div>
    </section>
    <section id="certifi">
        <h3>실명인증</h3>
        <div class="cetifiContainer">
            <p>휴대폰 본인인증 <br>본인 명의의 휴대폰을 이용하여 인증을 진행합니다.</p>
        </div>
    </section>
    <div class="twoBtn">
        <a href="./join_banner.php" class="beforeBtn">이전</a>
        <a href="./phone_certifi.php" class="certifiBtn">인증하기</a>
    </div>
</body>
<script>
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