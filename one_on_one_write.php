<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/one_on_one_write.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery-chained/1.0.1/jquery.chained.min.js'></script>
</head>
<body>
    <div id="one_on_one_write">
        <div>
            <header id="header_type2">
                <div>
                    <p>1:1 문의</p>
                    <div class="header_ico_wrap">
                        <a href="./service_center_page.php" class="ico_left_arrow"></a>
                    </div>
                </div>
            </header>
        </div>
        <section id="one_on_one_type">
            <h4>문의 유형</h4>
            <div class="selectBox_type">
                <button class="label">문의 유형을 선택해주세요</button>
                <ul class="optionItem_wrap" id="crops1">
                    <li class="optionItem" data-id="option-cancel" value="a">취소/반품/교환</li>
                    <li class="optionItem" data-id="option-order" value="b">주문/결제</li>
                    <li class="optionItem" data-id="option-item" value="c">상품</li>
                    <li class="optionItem" data-id="option-service" value="d">서비스</li>
                    <li class="optionItem" data-id="option-userInfo" value="e">화원정보</li>
                    <li class="optionItem" data-id="option-add" value="f">기타</li>
                </ul>
            </div>
            <div class="selectBox_type_detail">
                <button class="label">상세 유형을 선택해주세요</button>
                <ul class="optionList option-cancel">
                    <li class="optionItem a">취소</li>
                    <li class="optionItem a">반품</li>
                    <li class="optionItem a">교환</li>
                </ul>
                <ul class="optionList option-order">
                    <li class="optionItem b">주문</li>
                    <li class="optionItem b">결제수단/방법</li>
                    <li class="optionItem b">가상계좌</li>
                </ul>
                <ul class="optionList option-item">
                    <li class="optionItem c">사이즈</li>
                    <li class="optionItem c">배송</li>
                    <li class="optionItem c">재입고</li>
                </ul>
                <ul class="optionList option-service">
                    <li class="optionItem d">회원제도</li>
                    <li class="optionItem d" >이벤트</li>
                    <li class="optionItem d">쿠폰/마일리지</li>
                </ul>
                <ul class="optionList option-userInfo">
                    <li class="optionItem e">가입</li>
                    <li class="optionItem e">로그인</li>
                    <li class="optionItem e">정보</li>
                    <li class="optionItem e">탈퇴</li>
                    <li class="optionItem e">기타</li>
                </ul>
            </div>
        </section>
        <section id="one_on_one_write_title">
            <h3>문의내용</h3>
            <input type="text" placeholder="제목을 입력해주세요">
        </section>
        <section id="one_on_one_write_content">
            <textarea id="textBox" placeholder="문의내용을 입력해주세요"></textarea>
            <span id="reCount">0/100</span>
        </section>
        <section id="imgAttach">
            <label for="file">
                <div class="btn_attach">사진 첨부</div>
            </label>
            <input type="file" name="file" id="file" accept="image/">
            <span>최대 3장 업로드 가능합니다.</span>
        </section>
        <section id="contact">
            <p>답변받을 연락수단</p>
            <div class="contact_device">
                <div class="phone">
                    <label>
                        <input type="checkbox" id="check_btn">
                        <span>휴대폰</span>
                    </label>
                </div>
                <div class="e-mail">
                    <label>
                        <input type="checkbox" id="check_btn">
                        <span>이메일</span>
                    </label>
                </div>
            </div>
        </section>

        <!-- 등록어떻게 처리할지 2번쨰 셀렉트박스 못함 -->
        <div id="bottom">
            <div class="enroll">
                <a href="./one_on_one.php">등록</a><!-- 문의 유형 다선택되면 addClass="on " -->
            </div>
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

    $('.selectBox_type_detail>.label').click(function(){
        $(this).toggleClass('on');
        $('.selectBox_type>.optionItem_wrap').removeClass('on');
        /* $('.selectBox_type_detail>.optionList').toggleClass('on') */
    })


    $('.optionList>.optionItem').click(function(){
        var text_change2 = $(this).text()
        $('.selectBox_type_detail>.label').text(text_change2).css("color","#222")
        $('.selectBox_type_detail>.optionList>.optionItem').css("background","none")
        $(this).css("background","#f5f5f5")
        $('.selectBox_type_detail>.optionList').css("display","none")
        $('.selectBox_type_detail>.label').removeClass('on')
    })

    $(document).ready(function(){
        $('#textBox').on('keyup',function(){
            $('#reCount').html(""+$(this).val().length+"/100")

            if($(this).val().length > 100) {
                $(this).val($(this).val().substring(0, 100));
                $('#reCount').html("100/100");
            }
        })
    })
</script>
</html>