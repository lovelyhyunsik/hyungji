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
    <div id="search_page">
        <div class="search_page_header">
            <div class="arrow_left_img">
                <a href="./index.php"><img src="./img/ic-arrow-left.png" alt=""></a>
            </div>
            <input type="text" class="search-area" placeholder="브랜드,상품명 등 입력해주세요">
        </div>
        <div class="recent_search">
            <div class="recent_search_header">
                <h3>최근 검색어</h3>
                <button>검색기록 모두 삭제</button>
            </div>
            <div class="recent_search_content">
                <p>최근 검색어가 없습니다.</p>
            </div>
        </div>
        <div class="hot_search">
            <div class="hot_search_header">
                <h3>인기 검색어</h3>
                <p class="update">
                    16:00 업데이트
                </p>
            </div>
            <div class="hot_search_content">
                <ul class="left-line">
                    <li>
                        <div class="lank_number">
                            <p>1</p>
                        </div>
                        <div class="brand_name">
                            <p>크로커다일레이디</p>
                        </div>
                        <div class="change_lank up_lank">
                        </div>
                    </li>
                    <li>
                        <div class="lank_number">
                            <p>2</p>
                        </div>
                        <div class="brand_name">
                            <p>롱코트</p>
                        </div>
                        <div class="change_lank up_lank">
                        </div>
                    </li>
                    <li>
                        <div class="lank_number">
                            <p>3</p>
                        </div>
                        <div class="brand_name">
                            <p>연말룩</p>
                        </div>
                        <div class="change_lank down_lank">
                        </div>
                    </li>
                    <li>
                        <div class="lank_number">
                            <p>4</p>
                        </div>
                        <div class="brand_name">
                            <p>목도리</p>
                        </div>
                        <div class="change_lank down_lank">
                        </div>
                    </li>
                    <li>
                        <div class="lank_number">
                            <p>5</p>
                        </div>
                        <div class="brand_name">
                            <p>캐시미어 니트</p>
                        </div>
                        <div class="change_lank up_lank">
                        </div>
                    </li>
                </ul>
                <ul class="right_line">
                    <li>
                        <div class="lank_number">
                            <p>6</p>
                        </div>
                        <div class="brand_name">
                            <p>알파카코트</p>
                        </div>
                        <div class="change_lank up_lank">
                        </div>
                    </li>
                    <li>
                        <div class="lank_number">
                            <p>7</p>
                        </div>
                        <div class="brand_name">
                            <p>하프코트</p>
                        </div>
                        <div class="change_lank same_lank">
                        </div>
                    </li>
                    <li>
                        <div class="lank_number">
                            <p>8</p>
                        </div>
                        <div class="brand_name">
                            <p>숏패딩</p>
                        </div>
                        <div class="change_lank same_lank">
                        </div>
                    </li>
                    <li>
                        <div class="lank_number">
                            <p>9</p>
                        </div>
                        <div class="brand_name">
                            <p>경량패딩</p>
                        </div>
                        <div class="change_lank down_lank">
                        </div>
                    </li>
                    <li>
                        <div class="lank_number">
                            <p>10</p>
                        </div>
                        <div class="brand_name">
                            <p>블랙 원피스</p>
                        </div>
                        <div class="change_lank up_lank">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>