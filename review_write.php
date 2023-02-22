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
    <link rel="stylesheet" href="css/review_write.css">
    <link rel="stylesheet" href="css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
    <header id="header_type2">
        <div>
            <p>구매후기</p>
            <div class="header_ico_wrap">
                <a href="./bottom_gnb_mypage_member.php" class="ico_left_arrow"><span class="hide">뒤로가기</span></a>
                <div class="header_ico">
                    <a href="./search.php" class="ico_search"><span class="hide">검색아이콘</span></a>
                    <a href="./shoppingbag.php" class="ico_shoppingbag"><span class="hide">쇼핑백아이콘</span></a>
                </div>
            </div>
        </div>
    </header>
    <div class="itemThum">
        <a href="">
            <img src="./img/Frame 2642.png" alt="">
            <div class="itemText">
                <div class="brandItemName">
                    <span class="brandName">CHATELAINE</span>
                </div>
                <div class="itemName">브러쉬 립조직 하이넥 티셔츠HCAWTS103</div>
                <div class="itemOpt">
                    <span class="color">블랙</span>ㅣ<span class="size">S</span>
                </div>
            </div>
        </a>
    </div>
    <div class="starReview">
        <h3>상품은 만족하셨나요?</h3>
        <div class="starpoint_wrap">
            <div class="starpoint_box">
              <label for="starpoint_1" class="label_star" title="0.5"><span class="blind">0.5점</span></label>
              <label for="starpoint_2" class="label_star" title="1"><span class="blind">1점</span></label>
              <label for="starpoint_3" class="label_star" title="1.5"><span class="blind">1.5점</span></label>
              <label for="starpoint_4" class="label_star" title="2"><span class="blind">2점</span></label>
              <label for="starpoint_5" class="label_star" title="2.5"><span class="blind">2.5점</span></label>
              <label for="starpoint_6" class="label_star" title="3"><span class="blind">3점</span></label>
              <label for="starpoint_7" class="label_star" title="3.5"><span class="blind">3.5점</span></label>
              <label for="starpoint_8" class="label_star" title="4"><span class="blind">4점</span></label>
              <label for="starpoint_9" class="label_star" title="4.5"><span class="blind">4.5점</span></label>
              <label for="starpoint_10" class="label_star" title="5"><span class="blind">5점</span></label>
              <input type="radio" name="starpoint" id="starpoint_1" class="star_radio">
              <input type="radio" name="starpoint" id="starpoint_2" class="star_radio">
              <input type="radio" name="starpoint" id="starpoint_3" class="star_radio">
              <input type="radio" name="starpoint" id="starpoint_4" class="star_radio">
              <input type="radio" name="starpoint" id="starpoint_5" class="star_radio">
              <input type="radio" name="starpoint" id="starpoint_6" class="star_radio">
              <input type="radio" name="starpoint" id="starpoint_7" class="star_radio">
              <input type="radio" name="starpoint" id="starpoint_8" class="star_radio">
              <input type="radio" name="starpoint" id="starpoint_9" class="star_radio">
              <input type="radio" name="starpoint" id="starpoint_10" class="star_radio">
              <span class="starpoint_bg"></span>
            </div>
        </div>
        <span class="starText">별점을 선택해주세요</span>
    </div>
    
    <div class="textReview">
        <h3>어떤점이 좋았나요?</h3>
        <div class="textareaWrap">
            <textarea id="textBox" placeholder="최소 10 자 이상 입력해주세요" maxlength="3000"></textarea>
            <span id="reCount">0/3,000</span>
        </div>
        <label class="inputImgBtn" for="inputImg">
            <img src="./img/ic-camera.png" alt="">
            <span>사진 업로드</span>
        </label>
        <input type="file" name="inputImg" id="inputImg" accept="image/">
        <span>상품과 무관한 사진을 첨부할 경우 통보 없이 리뷰가 <br>삭제 및 적립 혜택이 취소 될 수 있습니다.</span>
    </div>
    <div class="bottom">
        <button>등록하기</button><!-- 별점 선택되고 textarea 10자 이상 입력되면 버튼 활성화 class='on' -->
    </div>
</body>
<script>
    $(document).ready(function(){
        $('#textBox').on('keyup',function(){
            $('#reCount').html(""+$(this).val().length+"/3000")

            if($(this).val().length > 3000) {
                $(this).val($(this).val().substring(0, 3000));
                $('#reCount').html("3000/3000");
            }
        })
    })

    $('.label_star').eq(0).click(function(){
        $('.starText').text('0.5점 (별로에요)')
        $('.starText').css("color","#e31616")
    })


    $('.label_star').eq(1).click(function(){
        $('.starText').text('1.0점 (별로에요)')
        $('.starText').css("color","#e31616")
    })

    $('.label_star').eq(2).click(function(){
        $('.starText').text('1.5점 (별로에요)')
        $('.starText').css("color","#e31616")
    })

    $('.label_star').eq(3).click(function(){
        $('.starText').text('2점 (그저그래요)')
        $('.starText').css("color","#e31616")
    })

    $('.label_star').eq(4).click(function(){
        $('.starText').text('2.5점 (그저그래요)')
        $('.starText').css("color","#e31616")
    })

    $('.label_star').eq(5).click(function(){
        $('.starText').text('3점 (괜찮아요)')
        $('.starText').css("color","#e31616")
    })

    $('.label_star').eq(6).click(function(){
        $('.starText').text('3.5점 (괜찮아요)')
        $('.starText').css("color","#e31616")
    })

    $('.label_star').eq(7).click(function(){
        $('.starText').text('4점 (좋아요)')
        $('.starText').css("color","#e31616")
    })

    $('.label_star').eq(8).click(function(){
        $('.starText').text('4.5점 (좋아요)')
        $('.starText').css("color","#e31616")
    })


    $('.label_star').eq(9).click(function(){
        $('.starText').text('5점 (아주 좋아요)')
        $('.starText').css("color","#e31616")
    })
</script>
</html>