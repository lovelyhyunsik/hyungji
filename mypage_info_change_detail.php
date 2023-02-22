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
    <link rel="stylesheet" href="./css/mypage_info_change_detail.css">
    <link rel="stylesheet" href="./css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
    <header id="headerType2">
        <div>
            <p>개인정보 수정</p> 
            <div class="headerIcoWrap">
                <a href="./bottom_gnb_mypage_member.php" class="icoLeftArrow"><span class="hide">뒤로가기</span></a>
                <div class="headerIco">
                </div>
            </div>
        </div>
    </header>
    <section id="infoInput">
        <h3>기본정보</h3>
        <div class="nameInput">
            <span>이름</span>
            <input type="text" placeholder="이름"><!-- 회원가입시 입력했던 이름 기본값으로 설정. 변경 가능 -->
        </div>
        <div class="idInput">
            <span>아이디</span>
            <div class="idBox">abcd0001</div><!-- 회원가입시 입력했던 아이디 기본값으로 설정. 변경 불가능 -->
        </div>
        <div class="pwInput">
            <span>비밀번호</span>
            <div class="pwInputBtn">
                <input type="password" placeholder="비밀번호"><!-- 회원가입시 입력했던 비밀번호 기본값으로 설정. 변경 가능 -->
                <button>변경</button>
            </div>
        </div>
        <div class="birthInput">
            <span>생년월일</span>
            <div class="inputlist"><!-- 회원가입시 입력했던 생년월일 기본값으로 설정. 변경 가능  -->
                <input type="number" placeholder="출생년도" class="year">
                <input type="number" placeholder="월" class="mon">
                <input type="number" placeholder="일 " class="day">
            </div>
            <ul>
                <li>
                    <label>
                        <input type="radio" name="birth" checked>
                        <span>양력</span>
                    </label>
                </li>
                <li>
                    <label> 
                        <input type="radio" name="birth">
                        <span>음력</span>
                    </label>
                </li>
            </ul>
        </div>
        <div class="gender">
            <span>성별</span>
            <div class="genderBtn">
                <button class="woman on">여자</button>
                <button class="man">남자</button>
            </div>
        </div>
        <div class="addressInput">
            <span>우편번호</span><!-- 회원가입시 입력했던 우편번호 기본값으로 설정. 변경 가능  -->
            <div class="addressBtn">
                <input type="number" placeholder="이름">
                <button>주소찾기</button>
            </div>
            <input type="text" class="address" placeholder="주소">
            <input type="text" class="addressDetail" placeholder="상세주소">
        </div>
        <div class="phoneNum">
            <span>휴대전화</span>
            <div class="phoneNumBtn">
                <div class="phoneNumBox">01012345678</div><!-- 회원가입시 입력했던 휴대전화 기본값으로 설정. 변경버튼누르면 변경할수있는 페이지로 넘어감  -->
                <a href="./mypage_phone_certifi.php">변경</a>
            </div>
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
        <button>회원탈퇴</button>
    </section>
    <div class="bottom">
         <button>수정하기</button>
    </div>
    <div class="popLayer">
        <div class="popLayerContainer"><!-- 수정하기 버튼 누르면 나타나는 팝업 display:none 시켜놨습니다.-->
            <p>개인정보 변경이 완료되었습니다.</p>
            <button>확인</button>
        </div>
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

    $('.bottom>button').click(function(){
        $('body').addClass('hidden')
        $('.popLayer').css("display","block")
    })

    $('.popLayerContainer>button').click(function(){
        $('body').removeClass('hidden')
        $('.popLayer').css("display","none")
    })
</script>
</html>