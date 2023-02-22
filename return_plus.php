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
    <link rel="stylesheet" href="css/return_plus.css">
    <link rel="stylesheet" href="css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
    <header id="headerType2"> 
         <div>
            <p>환불계좌 등록</p>
            <div class="headerIcoWrap">
            <a href="./return_management.php " class="icoLeftArrow"><span class="hide">뒤로가기</span></a>
                <div class="headerIco">
                </div>
            </div>
        </div>
    </header>
    <div class="bankNameselect">
        <span>은행명</span>
        <div class="selectBox_type">
            <button class="label">선택</button>
            <ul class="optionItem_wrap" id="crops1">
                <li class="optionItem">국민</li>
                <li class="optionItem">우리</li>
                <li class="optionItem">기업</li>
                <li class="optionItem">농협</li>
                <li class="optionItem">신한</li>
                <li class="optionItem">기타</li>
            </ul>
        </div>
    </div>
    <div class="accountNum">
        <span>계좌번호</span>
        <label>
            <input type="number" placeholder="-없이 입력">
            <span class="error">올바른 계좌번호가 맞는지 확인해주세요</span>
            <button>
                <img src="./img/ic-close-fill-24px.png " alt="">
            </button>
        </label>
    </div>
    <div class="accountUserName">
        <span>예금주</span>
        <div class="inputBox">
            홍길동
        </div>
    </div>
    <div class="checkBoxWrap">
        <label>
            <input type="checkbox" id="check_btn">
            <p>개인정보 수집 및 이용에 대한 동의 <span>(필수)</span></p>
        </label> 
    </div>
    <div class="bottom">
        <a href="./return_management.php">등록</a><!-- 모두다 체크되면 addClass:on -->
    </div>
</body>
<script>
    $('.selectBox_type>.label').click(function(){
        $(this).toggleClass('on');
        $('.selectBox_type>.optionItem_wrap').toggleClass('on')
    })

    

    $('.selectBox_type>.optionItem_wrap>.optionItem').click(function(e){
        var text_change = $(this).text()
        $('.selectBox_type>.label').text(text_change).css("color","#222")
        $('.selectBox_type>.optionItem_wrap>.optionItem').css("background","none")
        $(this).css("background","#f5f5f5")
        $('.selectBox_type>.optionItem_wrap').removeClass('on')
        $('.selectBox_type>.label').removeClass('on')
        $('.selectBox_type_detail').css("display","block")
        
        var optionType = e.target.dataset.id;
        $('.optionList').css("display","none")
        $(`.optionList.${optionType}`).css('display','block');
       
        $('.selectBox_type>.optionItem_wrap').removeClass('on');
    })   
    
    $('input').on('input', function () {
        if ($('input').val() == '') {
            $('.accountNum>button').removeClass('on')
            $('.accountNum>label>button').css("display","none")
        } else {
            $('.accountNum>button').addClass('on')
            $('.accountNum>label>button').css("display","block")
        }
    });

    if($('input').hasClass('on')){
        $('.error').css("display","block")
    }else{
        $('.error').css("display","none")
    }
</script>
</html>