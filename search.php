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
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/common.js"></script>
</head>

<body>
    <div id="searchPage">
        <div class="searchPageHeader">
            <div class="arrowLeftImg">
                <a href="./index.php"><img src="./img/ic-arrow-left.png" alt=""></a>
            </div>
            <label>
                <input type="text" class="searchArea textInput" placeholder="브랜드,상품명 등 입력해주세요">
                <button class="inputTextDelete">
                    <img src="./img/ic-close-fill-24px.png" alt="">
                </button>
            </label>
        </div>
        <div class="searchPageContent">
            <div class="recentSearch">
                <div class="recentSearchHeader">
                    <h3>최근 검색어</h3>
                    <button>검색기록 모두 삭제</button>
                </div>
                <div class="recentSearchContent">
                    <div class="noSearch" style="display:none"><!--최근검색어가 없을때 뜨는 텍스트  display:none처리해놨습니다. -->
                        <p>최근 검색어가 없습니다.</p>
                    </div>
                    <div class="yesSearch">
                        <ul>
                            <li>
                                <p class="searchName">롱패딩</p>
                                <button>
                                    <img src="./img/ic-close_grey.png" alt="">
                                </button>
                            </li>
                            <li>
                                <p class="searchName">캐시미어 목도리</p>
                                <button>
                                    <img src="./img/ic-close_grey.png" alt="">
                                </button>
                            </li>
                            <li>
                                <p class="searchName">하프코트</p>
                                <button>
                                    <img src="./img/ic-close_grey.png" alt="">
                                </button>
                            </li>
                            <li>
                                <p class="searchName">바시티 자켓</p>
                                <button>
                                    <img src="./img/ic-close_grey.png" alt="">
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="hotSearch">
                <div class="hotSearchHeader">
                    <h3>인기 검색어</h3>
                    <p class="update">
                        16:00 업데이트
                    </p>
                </div>
                <div class="hotSearchContent">
                    <ul class="leftLine">
                        <li>
                            <div class="lankNumber">
                                <p>1</p>
                            </div>
                            <div class="brandName">
                                <p>크로커다일레이디</p>
                            </div>
                            <div class="changeLank upLank">
                            </div>
                        </li>
                        <li>
                            <div class="lankNumber">
                                <p>2</p>
                            </div>
                            <div class="brandName">
                                <p>롱코트</p>
                            </div>
                            <div class="changeLank upLank">
                            </div>
                        </li>
                        <li>
                            <div class="lankNumber">
                                <p>3</p>
                            </div>
                            <div class="brandName">
                                <p>연말룩</p>
                            </div>
                            <div class="changeLank downLank">
                            </div>
                        </li>
                        <li>
                            <div class="lankNumber">
                                <p>4</p>
                            </div>
                            <div class="brandName">
                                <p>목도리</p>
                            </div>
                            <div class="changeLank downLank">
                            </div>
                        </li>
                        <li>
                            <div class="lankNumber">
                                <p>5</p>
                            </div>
                            <div class="brandName">
                                <p>캐시미어 니트</p>
                            </div>
                            <div class="changeLank upLank">
                            </div>
                        </li>
                    </ul>
                    <ul class="rightLine">
                        <li>
                            <div class="lankNumber">
                                <p>6</p>
                            </div>
                            <div class="brandName">
                                <p>알파카코트</p>
                            </div>
                            <div class="changeLank upLank">
                            </div>
                        </li>
                        <li>
                            <div class="lankNumber">
                                <p>7</p>
                            </div>
                            <div class="brandName">
                                <p>하프코트</p>
                            </div>
                            <div class="changeLank sameLank">
                            </div>
                        </li>
                        <li>
                            <div class="lankNumber">
                                <p>8</p>
                            </div>
                            <div class="brandName">
                                <p>숏패딩</p>
                            </div>
                            <div class="changeLank sameLank">
                            </div>
                        </li>
                        <li>
                            <div class="lankNumber">
                                <p>9</p>
                            </div>
                            <div class="brandName">
                                <p>경량패딩</p>
                            </div>
                            <div class="changeLank downLank">
                            </div>
                        </li>
                        <li>
                            <div class="lankNumber">
                                <p>10</p>
                            </div>
                            <div class="brandName">
                                <p>블랙 원피스</p>
                            </div>
                            <div class="changeLank upLank">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="searchAreaClickPop" style="display: none;">
            <ul>
                <li class="brand">
                    <a href="">
                        <div class="brandInfo">
                            <div class="brandImg">
                                <img src="./img/Frame 2642.png" alt="">
                            </div>
                            <div class="brandName">
                                <span class="en">CROCODILE LADIES</span>
                                <span class="ko">크로커다일 레이디</span>
                            </div>
                        </div>
                        <p>브랜드</p>
                    </a>
                </li>
                <li class="brand">
                    <a href="">
                        <div class="brandInfo">
                            <div class="brandImg">
                                <img src="./img/Frame 2642.png" alt="">
                            </div>
                            <div class="brandName">
                                <span class="en">CROCODILE LADIES</span>
                                <span class="ko">크로커다일 레이디</span>
                            </div>
                        </div>
                        <p>브랜드</p>
                    </a>
                </li>
                <li class="textList">
                    <button>
                        <img src="./img/search_grey.png" alt="">
                    </button>
                    <span class="relatedText">크롭니트</span><!-- 입력텍스트와 같은 텍스트 색깔은  color:#2e82ff-->
                </li>
                <li class="textList">
                    <button>
                        <img src="./img/search_grey.png" alt="">
                    </button>
                    <span class="relatedText">크롭티</span><!-- 입력텍스트와 같은 텍스트 색깔은  color:#2e82ff-->
                </li>
                <li class="textList">
                    <button>
                        <img src="./img/search_grey.png" alt="">
                    </button>
                    <span class="relatedText">크롭진</span><!-- 입력텍스트와 같은 텍스트 색깔은  color:#2e82ff-->
                </li>
            </ul>
        </div>
    </div>
</body>
<script>
    $('.yesSearch>ul>li>button').click(function () {
        $(this).parent('li').remove();
    })//검색기록 지우기

    $('.searchArea').on('input', function () {
        if ($(this).val() == '') {
            $('.searchPageContent').css("display", "block")
            $('.searchAreaClickPop').css("display", "none")
        } else {
            $('.searchPageContent').css("display", "none")
            $('.searchAreaClickPop').css("display", "block")
        }
    });//input태그에 텍스트 입력시 관련된 상품,브랜드 나오는 창

    $('.inputTextDelete').click(function () {
        $(this).siblings('input').val('');
        $(this).css("display", "none");
        $('.searchPageContent').css("display", "block")
        $('.searchAreaClickPop').css("display", "none")
    })//input안에 x버튼 common.js에 있는거랑 page변환시키는 코드가 달라 따로 뺴놨습니다.
</script>

</html>