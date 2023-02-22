$(function () {
  //input 안에 삭제버튼 나타내기
  $('.textInput').on('input', function () {
    if ($(this).val() == '') {
      $(this).siblings('.inputTextDelete').css("display", "none");
    } else {
      $(this).siblings('.inputTextDelete').css("display", "block");
    }
  });

  //input 안에 삭제버튼 누르면 input텍스트 제거
  $('.inputTextDelete').click(function () {
    $(this).siblings('input').val('');
    $(this).css("display", "none");
  })

  // 체크박스 전체 선택
  $(".allAgreeBtn").on("click", "#check_btn", function () {
    var checked = $(this).is(":checked");

    if (checked) {
      $(this).parents(".allAgreeBtn").siblings('.checkBtnList').find('input').prop("checked", true);
    } else {
      $(this).parents(".allAgreeBtn").siblings('.checkBtnList').find('input').prop("checked", false);
    }
  });

  $(".checkBtnList").on("click", ".normal", function () {
    var checked = $(this).is(":checked");

    if (!checked) {
      $(".allAgreeBtn>label>#check_btn").prop("checked", false);
    }
  });

  // 체크박스 개별 선택
  $(".checkBtnList").on("click", ".normal", function () {
    var is_checked = true;

    $(".checkBtnList .normal").each(function () {
      is_checked = is_checked && $(this).is(":checked");
    });

    $(".allAgreeBtn>label>#check_btn").prop("checked", is_checked);
  });

  //최상단 슬라이드
  var swiper = new Swiper(".auto-slide", {
    loop: true,
    autoplay: {
      delay: 5000
    },
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    }
  });

  //headerGnb 스크롤 이동시 상단 고정

  if($(".headerGnb").length !== 0) {
    var gnb = $(".headerGnb").offset().top;
    $(window).scroll(function () {
      var window = $(this).scrollTop();
  
      if (gnb <= window) {
        $(".headerGnb").addClass("fixed");
      } else {
        $(".headerGnb").removeClass("fixed");
      }
    });
  }


  //하단 gnb 스크롤에 따른 히든처리

  var FirstScroll = 0;
  var prevScrollTop = $(window).scrollTop(),
    currentScrollTop = $(window).scrollTop();

  $(window).scroll(function (e) {
    currentScrollTop = $(this).scrollTop();

    if (currentScrollTop > prevScrollTop) {
      $('#bottomGnb').addClass('active')
    } else if (currentScrollTop < prevScrollTop) {
      $('#bottomGnb').removeClass('active')
    }
    prevScrollTop = currentScrollTop;

  });

  //스크롤탑버튼 기능
  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      $('.btn_gotop').show();
    } else {
      $('.btn_gotop').hide();
    }
  });
  $('.btn_gotop').click(function () {
    $('html, body').animate({ scrollTop: 0 }, 400);
    return false;
  });

  //하트이미지 클릭변경
  var ImgChange = 0;
  $(".img_change").click(function () {
    if (ImgChange == 0) {
      $(this).attr("src", "./img/ic-like_pk.png");
      ImgChange = 1;
    } else {
      $(this).attr("src", "./img/ic-like.png");
      ImgChange = 0;
    }
  });

});

//$(function () {
//  /* $('.category_tabcontent > div').hide(); */
//  $('.homeCategory_tabnav>ul>li>a').click(function () {
//    $('.homeCategory_tabcontent > div').hide().filter(this.hash).fadeIn();
//    $('.homeCategory_tabnav>ul>li>a').removeClass('on');
//    $(this).addClass('on');
//    return false;
//  }).filter(':eq(0)').click();//home섹션 안에 tab처리
//});