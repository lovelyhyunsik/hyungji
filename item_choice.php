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
    <link rel="stylesheet" href="./css/item_choice.css">
    <link rel="stylesheet" href="./css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
    <header id="headerType2">
        <div>
            <p>문의 상품 선택</p>
            <div class="headerIcoWrap">
                <a href="./one_on_one_write.php" class="icoLeftArrow"><span class="hide">뒤로가기</span></a>
                <div class="headerIco">
                </div>
            </div>
        </div>
    </header>
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
    <div class="itemList">
        <ul>
            <li>
                <div class="orderNum">
                    <div class="orderNum_l">
                        <button></button>
                        <div class="orderNumText">
                            주문번호 2226668880000
                        </div>
                    </div>
                    <div class="date">
                        2022.07.28
                    </div>
                </div>
                <div class="item">
                    <div class="itemImg">
                        <img src="./img/test.png" alt="">
                    </div>
                    <div class="itemText">
                        <div class="itemBrand">CHATELAINE</div>
                        <div class="itemName">라운드넥 아가일 니트 CLAWSW102</div>
                        <div class="itemOpt">
                            <p><span class="color">네이비</span>/<span class="size">55</span>/<span class="count">1개</span></p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="orderNum">
                    <div class="orderNum_l">
                        <button></button>
                        <div class="orderNumText">
                            주문번호 2226668880000
                        </div>
                    </div>
                    <div class="date">
                        2022.07.28
                    </div>
                </div>
                <div class="item">
                    <div class="itemImg">
                        <img src="./img/test.png" alt="">
                    </div>
                    <div class="itemText">
                        <div class="itemBrand">CHATELAINE</div>
                        <div class="itemName">라운드넥 아가일 니트 CLAWSW102</div>
                        <div class="itemOpt">
                            <p><span class="color">네이비</span>/<span class="size">55</span>/<span class="count">1개</span></p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="orderNum">
                    <div class="orderNum_l">
                        <button></button>
                        <div class="orderNumText">
                            주문번호 2226668880000
                        </div>
                    </div>
                    <div class="date">
                        2022.07.28
                    </div>
                </div>
                <div class="item">
                    <div class="itemImg">
                        <img src="./img/test.png" alt="">
                    </div>
                    <div class="itemText">
                        <div class="itemBrand">CHATELAINE</div>
                        <div class="itemName">라운드넥 아가일 니트 CLAWSW102</div>
                        <div class="itemOpt">
                            <p><span class="color">네이비</span>/<span class="size">55</span>/<span class="count">1개</span></p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="orderNum">
                    <div class="orderNum_l">
                        <button></button>
                        <div class="orderNumText">
                            주문번호 2226668880000
                        </div>
                    </div>
                    <div class="date">
                        2022.07.28
                    </div>
                </div>
                <div class="item">
                    <div class="itemImg">
                        <img src="./img/test.png" alt="">
                    </div>
                    <div class="itemText">
                        <div class="itemBrand">CHATELAINE</div>
                        <div class="itemName">라운드넥 아가일 니트 CLAWSW102</div>
                        <div class="itemOpt">
                            <p><span class="color">네이비</span>/<span class="size">55</span>/<span class="count">1개</span></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="bottom">
        <button>선택</button><!-- 선택되면 addClass:on -->
    </div>
</body>
<script>
    $('.dateBtn>button').click(function(){
        $('.dateBtn>button').removeClass('on')
        $(this).addClass('on')
        $(this).parent('.dateBtn').siblings('.selectBoxWrap').css("display","none")
    })//기간조회했을때 나오는 셀렉트박스 처리

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
    
    $('.itemList>ul>li').click(function(){
        $(this).find('button').toggleClass('on')
    })
</script>
</html>