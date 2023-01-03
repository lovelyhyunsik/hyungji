$(function () {
  var swiper = new Swiper(".auto-slide", {
    loop: true,
    autoplay:{
      delay:5000
    },
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    }
  });//최상단 슬라이드

  var gnb = $(".header_gnb").offset().top;
  $(window).scroll(function () {
    var window = $(this).scrollTop();

    if (gnb <= window) {
      $(".header_gnb").addClass("fixed");
    } else {
      $(".header_gnb").removeClass("fixed");
    }
  });//gnb 스크롤 이동시 상단 고정

  var FirstScroll = 0;
  var prevScrollTop = $(window).scrollTop(),
    tp = $(window).scrollTop();

  $(window).scroll(function (e) {
    tp = $(this).scrollTop();

    if (tp > prevScrollTop) {
      /* $('#bottom_gnb').stop().animate({ bottom: "-6rem" }, 300) */
      $('#bottom_gnb').addClass('active')
    } else if (tp < prevScrollTop) {
      /* $('#bottom_gnb').stop().animate({ bottom: "0" }, 300) */
      $('#bottom_gnb').removeClass('active')
    }
    prevScrollTop = tp;

  });//하단 gnb 스크롤에 따른 히든처리

  $('.category_tabcontent > div').hide();
  $('.category_tabnav a').click(function () {
    $('.category_tabcontent > div').hide().filter(this.hash).fadeIn();
    $('.category_tabnav a').removeClass('on');
    $(this).addClass('on');
    return false;
  }).filter(':eq(0)').click();//tabcontent 처리

  var num = 0;
	$(".img_change").click(function () {
    console.log(num)
		if(num == 0) {
			$(this).attr("src", "./img/ic-like.png");
			num = 1;
		}else {
			$(this).attr("src", "./img/ic-like-active.png");
			num = 0;
		}
	});

  var swiper = new Swiper(".rec_brand_item", {
    loop: true,
    slidesPerView:1.15
  });
  
});



