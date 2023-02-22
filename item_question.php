<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/item_question.css">
    <link rel="stylesheet" href="./css/swiper.css">
    <link rel="stylesheet" href="./css/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
    <header id="headerType2">
        <div>
            <p>상품 문의</p>
            <div class="headerIcoWrap">
                <a href="./item_detail.php" class="icoLeftArrow"></a>
            </div>
        </div>
    </header>
    <div class="item">
        <div class="itemImg">
            <img src="./img/item img.png" alt="">
        </div>
        <div class="itemName">
            라운드넥 아가일 니트 CLAWSW102
        </div>
    </div>
    <div class="questionType">
        <span>문의유형</span>
        <div class="selectBox_type">
            <button class="label">문의 유형을 선택해주세요</button>
            <ul class="optionItem_wrap" id="crops1">
                <li class="optionItem">사이즈</li>
                <li class="optionItem">배송</li>
                <li class="optionItem">재입고</li>
                <li class="optionItem">기타</li>
            </ul>
        </div>
    </div>
    <div class="questionText">
        <span>내용</span>
        <textarea placeholder="문의내용을 입력해주세요"></textarea>
    </div>
    <div class="secret">
        <label>
            <input type="checkbox" id="check_btn">
            <span>비공개</span>
        </label>
    </div>
    <div class="notice">
        주민번호, 연락처, 주소, 계좌번호 등의 정보는 타인에게 노출될 경
        우 개인정보 도용의 위험이 있으니 작성에 주의해 주시기 바랍니다.
    </div>
    <div class="bottom">
        <div class="bottomContainer">
            <a href="">등록</a>
        </div>
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
</script>
</html>