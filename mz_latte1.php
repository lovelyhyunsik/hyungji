
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>.
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="css/mz_latte1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
</head>
<body>
    <div id="mz_latte1">
        <div>
            <header id="header_type2">
                <div>
                    <a href="./index.php" class="ico_left_arrow"><span class="hide">뒤로가기</span></a>
                    <a href="" class="ico_share"><span class="hide">공유</span></a>
                </div>
            </header>
            <div class="btn_gotop">
                <img src="./img/up_arrow.png" alt="">
            </div>
            <div class="page_title">
                <div class="text_top">
                    <p>[CHATELAINE] 2022 S/S NO.1</p>
                </div>
                <div class="text_middle">
                    <p>2022.04.12 - </p>
                </div>
            </div>
            <div class="latte_main_img">
                <img src="./img/mz_latte1.png" alt="">
            </div>
            <div class="latte_content1_img">
                <img src="./img/latte_top_img.png" alt="">
            </div>
            <div class="latte_content2_img">
                <img src="./img/latte_bottom_img.png" alt="">
            </div>
            <div class="brand_pick">
                <div class="brand_pick_title">
                    <h3>#관련상품</h3>
                    <a href="">더보기</a>
                </div>
                <ul class="mz_latte_row_wrap">
                    <li>
                        <a href="">
                            <div class="mz_latte_row">
                                <div class="mz_latte_row_img">
                                    <img src="./img/mz_lb_row1-1.png" alt="">
                                </div>
                                <div class="mz_latte_row_text">
                                    <div class="text_title">
                                        <p>WaistLineShirtbaaaaaaaam</p>
                                    </div>
                                    <div class="text_price">
                                        <p>215,000</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="mz_latte_row">
                                <div class="mz_latte_row_img">
                                    <img src="./img/mz_lb_row1-2.png" alt="">
                                </div>
                                <div class="mz_latte_row_text">
                                    <div class="text_title">
                                        <p>Waist Line Shirtbaaaaaaaam</p>
                                    </div>
                                    <div class="text_price">
                                        <p>215,000</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="mz_latte_row">
                                <div class="mz_latte_row_img">
                                    <img src="./img/mz_lb_row1-3.png" alt="">
                                </div>
                                <div class="mz_latte_row_text">
                                    <div class="text_title">
                                        <p>Waist Line Shirt baaaaaaaam</p>
                                    </div>
                                    <div class="text_price">
                                        <p>215,000</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="mz_latte_row">
                                <div class="mz_latte_row_img">
                                    <img src="./img/mz_lb_row1-3.png" alt="">
                                </div>
                                <div class="mz_latte_row_text">
                                    <div class="text_title">
                                        <p>Waist Line Shirt baaaaaaaam</p>
                                    </div>
                                    <div class="text_price">
                                        <p>215,000</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="mz_latte_row">
                                <div class="mz_latte_row_img">
                                    <img src="./img/mz_lb_row1-3.png" alt="">
                                </div>
                                <div class="mz_latte_row_text">
                                    <div class="text_title">
                                        <p>Waist Line Shirt baaaaaaaam</p>
                                    </div>
                                    <div class="text_price">
                                        <p>215,000</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="mz_latte_row">
                                <div class="mz_latte_row_img">
                                    <img src="./img/mz_lb_row1-3.png" alt="">
                                </div>
                                <div class="mz_latte_row_text">
                                    <div class="text_title">
                                        <p>Waist Line Shirt baaaaaaaam</p>
                                    </div>
                                    <div class="text_price">
                                        <p>215,000</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <?php include("./common.php/footer.php");?>
        </div>
    </div>
</body>
<script>
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.btn_gotop').show();
        } else {
            $('.btn_gotop').hide();
        }
    });
    $('.btn_gotop').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 400);
        return false;
    });
</script>
</html>

