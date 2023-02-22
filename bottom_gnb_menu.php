<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAUHAUS</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard/dist/web/static/pretendard.css" />
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/swiper.css">
    <link rel="stylesheet" href="./css/bottom_gnb_menu.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="./js/common.js"></script> 
</head>

<body>
    <?php include("./common.php/btn_gotop.php");?>
    <div id="mainPage">
        <header id="header">
            <div class="headerTop">
                <h1 class="logoBk"><a href="./index.php"><span class="hide"> 바우하우스</span></a></h1>
                <div>
                    <a href="./search.php" class="icoSearch"><span class="hide">검색아이콘</span></a>
                    <a href="" class="icoShoppingbag"><span class="hide">쇼핑백아이콘</span> <span class="numberTag">10</span></a>
                </div>
            </div>
            <h2 class="hide">메인메뉴</h2>
        </header>
        <nav id="bottomGnb">
            <ul>
                <li>
                    <a href="./bottom_gnb_menu.php" class="icoMenu">
                        <img src="./img/ic-menu-active.png" alt="하단메뉴아이콘">
                        <p>메뉴</p>
                    </a>
                </li>
                <li>
                    <a href="./index.php" class="icoHome">
                        <img src="./img/ic-home.png" alt="하단홈아이콘">
                        <p>홈</p>
                    </a>
                </li>
                <li>
                    <a href="./bottom_gnb_recent.php" class="icoRecent">
                        <img src="./img/ic-recent.png" alt="하단최근아이콘">
                        <p>최근 본</p>
                    </a>
                </li>
                <li>
                    <a href="./bottom_gnb_like.php" class="icoLike">
                        <img src="./img/ic-blike.png" alt="하단'좋아요'아이콘">
                        <p>찜</p>
                    </a>
                </li>
                <li>
                    <a href="./bottom_gnb_mypage_member.php" class="icoMypage">
                        <img src="./img/ic-my.png" alt="하단마이페이지아이콘">
                        <p>마이</p>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="menuTabWrap">
            <div class="menuTabNav">
                <ul>
                    <li><a href="#menu_tab1" class="on">카테고리</a></li>
                    <li><a href="#menu_tab2">브랜드</a></li>
                </ul>
            </div>
            <div class="menuTabContent">
                <div id="menu_tab1" class="tab">
                    <section id="quickMenuWrap">
                        <ul class="quickMenuFive">
                            <li class="quickMenuItem">
                                <a href="./quick-ic_page.php">
                                    <span>
                                        <img src="./img/category/outer.png" alt="아우터아이콘">
                                    </span>
                                    <p>아우터</p>
                                </a>
                            </li>
                            <li class="quickMenuItem">
                                <a href="./quick-ic_page.php">
                                    <span>
                                        <img src="./img/category/top.png" alt="상의아이콘">
                                    </span>
                                    <p>상의</p>
                                </a>
                            </li>
                            <li class="quickMenuItem">
                                <a href="./quick-ic_page.php">
                                    <span>
                                        <img src="./img/category/bottom.png" alt="하의아이콘">
                                    </span>
                                    <p>하의</p>
                                </a>
                            </li>
                            <li class="quickMenuItem">
                                <a href="./quick-ic_page.php">
                                    <span>
                                        <img src="./img/category/dress.png" alt="원피스아이콘">
                                    </span>
                                    <p>원피스</p>
                                </a>
                            </li>
                            <li class="quickMenuItem">
                                <a href="./quick-ic_page.php">
                                    <span>
                                        <img src="./img/category/skirt.png" alt="스커트아이콘">
                                    </span>
                                    <p>스커트</p>
                                </a>
                            </li>
                            <li class="quickMenuItem">
                                <a href="./quick-ic_page.php">
                                    <span>
                                        <img src="./img/category/golf-wear.png" alt="골프웨어아이콘">
                                    </span>
                                    <p>골프웨어</p>
                                </a>
                            </li>
                            <li class="quickMenuItem">
                                <a href="./quick-ic_page.php">
                                    <span>
                                        <img src="./img/category/bag.png" alt="가방아이콘">
                                    </span>
                                    <p>가방</p>
                                </a>
                            </li>
                            <li class="quickMenuItem">
                                <a href="./quick-ic_page.php">    
                                    <span>
                                        <img src="./img/category/hat.png" alt="모자아이콘">
                                    </span>
                                    <p>모자</p>
                                </a>
                            </li>
                            <li class="quickMenuItem">
                                <a href="./quick-ic_page.php">
                                    <span>
                                        <img src="./img/category/shoes.png" alt="신발아이콘">
                                    </span>
                                    <p>신발</p>
                                </a>
                            </li>
                        </ul>
                    </section>
                    <section id="menuExhibition">
                        <ul>
                            <li>
                                <h3>기획전</h3>
                            </li>
                            <li><a href="./exhibition_section.php">전체보기</a></li>
                        </ul>
                        <div class="exhibitionContent">
                            <ul>
                                <li>
                                    <a href="./exhibition_detail.php">
                                        <div class="imgArea"><img src="./img/menu_ex_img1.png" alt=""></div>
                                        <div class="textArea">
                                            <div class="textTop">
                                                <p>22SS 겨울 신상 컬렉션!!!!!!!!!!!!!!!</p>
                                            </div>
                                            <div class="textBottom">
                                                <P>그들의 장바구니를 살펴보 그들의 장바구니를 살펴보기</P>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="./exhibition_detail.php">
                                        <div class="imgArea"><img src="./img//menu_ex_img2.png" alt=""></div>
                                        <div class="textArea">
                                            <div class="textTop">
                                                <p>22SS 겨울 신상 컬렉션!</p>
                                            </div>
                                            <div class="textBottom">
                                                <P>그들의 장바구니를 살펴보 그들의 장바구니를 살펴보기</P>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="./exhibition_detail.php">
                                        <div class="imgArea"><img src="./img/menu_ex_img1.png" alt=""></div>
                                        <div class="textArea">
                                            <div class="textTop">
                                                <p>22SS 겨울 신상 컬렉션!</p>
                                            </div>
                                            <div class="textBottom">
                                                <P>그들의 장바구니를 살펴보 그들의 장바구니를 살펴보기</P>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <section id="menuMagazine">
                        <ul>
                            <li>
                                <h3>매거진</h3>
                            </li>
                            <li><a href="./magazine_section.php">전체보기</a></li>
                        </ul>
                        <div class="magazineContent">
                            <a href="./mz_latte1.php">
                                <div class="magazineList">
                                    <img src="./img/manu_magazine_img1.png" alt="">
                                    <div class="magazineText">
                                        <div class="textTop">
                                            <p>라떼센스</p>
                                        </div>
                                        <div class="textMiddle">
                                            <p>에디터들의 왓츠 인 마이쇼쇼쇼쇼쇼쇼</p>
                                        </div>
                                        <div class="textBottom">
                                            <p>그들의 장바구니를 살펴보자아 그들의 장바구니를 살펴보자자자자자</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="./mz_latte1.php">
                                <div class="magazineList">
                                    <img src="./img/manu_magazine_img2.png" alt="">
                                    <div class="magazineText">
                                        <div class="textTop">
                                            <p>라떼센스</p>
                                        </div>
                                        <div class="textMiddle">
                                            <p>에디터들의 왓츠 인 마이쇼쇼쇼쇼쇼쇼</p>
                                        </div>
                                        <div class="textBottom">
                                            <p>그들의 장바구니를 살펴보자아 그들의 장바구니를 살펴보자자자자자</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="./mz_latte1.php">
                                <div class="magazineList">
                                    <img src="./img/manu_magazine_img3.png" alt="">
                                    <div class="magazineText">
                                        <div class="textTop">
                                            <p>라떼센스</p>
                                        </div>
                                        <div class="textMiddle">
                                            <p>에디터들의 왓츠 인 마이쇼쇼쇼쇼쇼쇼</p>
                                        </div>
                                        <div class="textBottom">
                                            <p>그들의 장바구니를 살펴보자아 그들의 장바구니를 살펴보자자자자자</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </section>
                    <section id="footer">
                        <ul class="footer_ask">
                            <li class="service_center"><a href="./service_center_page.php"><span>고객센터</span></a></li>
                            <li class="one_inquiry"><a href="./one_on_one_write.php"><span>1:1 문의</span></a></li>
                            <li class="find_IdPw"><a href="./id_find.php"><span>ID/PW 찾기</span></a></li>
                        </ul>
                    </section>
                </div>
                <div id="menu_tab2" class="tab">
                    <section id="brandImgWrap">
                        <ul>
                            <li><a href="./brand_page.php"><img src="./img/brand/brand_1.png" alt=""></a></li>
                            <li><a href="./brand_page.php"><img src="./img/brand/brand_2.png" alt=""></a></li>
                            <li><a href="./brand_page.php"><img src="./img/brand/brand_3.png" alt=""></a></li>
                            <li><a href="./brand_page.php"><img src="./img/brand/brand_4.png" alt=""></a></li>
                            <li><a href="./brand_page.php"><img src="./img/brand/brand_5.png" alt=""></a></li>
                            <li><a href="./brand_page.php"><img src="./img/brand/brand_5.png" alt=""></a></li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $('.menuTabNav>ul>li>a').click(function () {
        $('.menuTabContent > div').hide().filter(this.hash).fadeIn();
        $('.menuTabNav>ul>li>a').removeClass('on');
        $(this).addClass('on');
        return false;
    }).filter(':eq(0)').click();
</script>

</html>