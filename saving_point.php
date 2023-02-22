<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard/dist/web/static/pretendard.css" />
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/swiper.css">
    <link rel="stylesheet" href="./css/saving_point.css">
    <link rel="stylesheet" href="./css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
    <header id="headerType2">
        <div>
            <p>적립금</p>
            <div class="headerIcoWrap">
                <a href="./bottom_gnb_mypage_member.php" class="icoLeftArrow"><span class="hide">뒤로가기</span></a>
                <div class="headerIco">
                </div>
            </div>
        </div>
    </header>
     <div class="greyBox">
        <div class="greyBoxContainer">
            <div class="presentPoint">
                <div class="presentPoint_l">현재 적립금</div>
                <div class="presentPoint_r"><span class="pointNum">0</span>원</div>
            </div>
            <div class="savingExpect">
                <div class="savingExpect_l">적립예정</div>
                <div class="savingExpect_r"><span class="pointNum">0</span>원</div>
            </div>
            <div class="deleteExpect">
                <div class="deleteExpect_l">소멸예정</div>
                <div class="deleteExpect_r"><span class="pointNum">0</span>원</div>
            </div>
            <div class="useComplete">
                <div class="useComplete_l">사용완료</div>
                <div class="useComplete_r"><span class="pointNum">0</span>원</div>
            </div>
        </div>
    </div>
    <div class="dateBtn">
        <button class="on">최근 1개월</button>
        <button>11월</button>
        <button>10월</button>
        <button>기간조회</button>
    </div>
    <div class="selectBoxWrap">
        <div class="selectBox_type">
            <button class="label">기간선택</button>
            <ul class="optionItem_wrap" id="crops1">
                <li class="optionItem">2022년 9월</li>
                <li class="optionItem">2022년 8월</li>
                <li class="optionItem">2022년 7월</li>
                <li class="optionItem">2022년 6월</li>
                <li class="optionItem">2022년 5월</li>
            </ul>
        </div> 
    </div>
    <div class="pointList">
        <div class="pointListNav">
            <button class="on">전체</button>
            <button>적립</button>
            <button>소멸</button>
            <button>예정</button>
        </div>
        <div class="pointListContent">
            <div class="noSavingListWrap"><!-- display:none 처리 해놨습니다. -->
                <p>적립금 내역이 없습니다.</p>
            </div>
            <div class="yesSavingListWrap">
                <ul>
                    <li class="yesSavingList">
                        <div class="yesSavingList_l">
                            <span class="date">2022/12/12/23</span>
                            <span class="stateText">구매적립</span>
                        </div>
                        <div class="yesSavingList_r plus">
                            +200원
                        </div>
                    </li>
                    <li class="yesSavingList">
                        <div class="yesSavingList_l">
                            <span class="date">2022/12/12/23</span>
                            <span class="stateText">구매 사용 차감</span>
                        </div>
                        <div class="yesSavingList_r minus">
                            -200원
                        </div>
                    </li>
                    <li class="yesSavingList">
                        <div class="yesSavingList_l">
                            <span class="date">2022/12/12/23</span>
                            <span class="stateText">구매적립</span>
                        </div>
                        <div class="yesSavingList_r plus">
                            +200원
                        </div>
                    </li>
                    <li class="yesSavingList">
                        <div class="yesSavingList_l">
                            <span class="date">2022/12/12/23</span>
                            <span class="stateText">구매적립</span>
                        </div>
                        <div class="yesSavingList_r plus">
                            +200원
                        </div>
                    </li>
                    <li class="yesSavingList">
                        <div class="yesSavingList_l">
                            <span class="date">2022/12/12/23</span>
                            <span class="stateText">구매적립</span>
                        </div>
                        <div class="yesSavingList_r plus">
                            +200원
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
<script>
    $('.dateBtn>button').click(function(){
        $('.dateBtn>button').removeClass('on')
        $(this).addClass('on')
        $(this).parent('.dateBtn').siblings('.selectBoxWrap').css("display","none")
    })

    $('.dateBtn>button:last-child').click(function(){
       $(this).parent('.dateBtn').siblings('.selectBoxWrap').css("display","block")
    })

    $('.selectBox_type>.label').click(function(){
        $(this).toggleClass('on');
        $('.selectBox_type>.optionItem_wrap').toggleClass('on')
    })

    $('.pointListNav>button').click(function(){
        $('.pointListNav>button').removeClass('on')
        $(this).addClass('on')
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