jQuery(function ($) {
  $(window).load(function () {
    $("#prelodaer").fadeOut(300);
  });

  function sidemenu() {
    $(".nav_sec").toggleClass("slidein");
    $(".nav_sec").prepend('<div class="cls-btn"></div>');

    $(".cls-btn").on("click", function () {
      $(".nav_sec").removeClass("slidein");
    });
  }
  $("body").find(".toggle-menu").on("click", sidemenu);

  $(".nav_sec ul > li > ul").parent().prepend('<i class="arw-nav"></i>');
  function subMenu() {
    $(this).parent("li").find("> ul").stop(true, true).slideToggle();
    $(this).parents("li").siblings().find("ul").stop(true, true).slideUp();
    $(this).toggleClass("actv");
    $(this).parent().siblings().find(".arw-nav").removeClass("actv");
  }
  $(".nav_sec ul > li > .arw-nav").on("click", subMenu);


  $(".banner_main_slider").slick({
    dots: true,
    infinite: true,
    speed: 1000,
    autoplay: true,
    pauseOnHover: false,
    arrows: false,
    infinite:false,
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
  });


  $(".own-slider").slick({
    arrow: true,
    prevArrow:
      '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-angle-left"></i></button>',
    nextArrow:
      '<button class="slide-arrow next-arrow"><i class="fa-solid fa-angle-right"></i></button>',
    autoplay: true,
    infinite: true,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1025,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 668,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 385,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  $(".vwslider_slider").slick({
    dots: false,
    infinite: true,
    speed: 1000,
    autoplay: true,
    pauseOnHover: false,
    arrows: true,
    prevArrow:
      '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-angle-up"></i></button>',
    nextArrow:
      '<button class="slide-arrow next-arrow"><i class="fa-solid fa-angle-down"></i></button>',
    slidesToShow: 1,
    slidesToScroll: 1,
    vertical: true,
    verticalSwiping: true,
  });

  $(".icon_slider").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 8000,
    pauseOnHover: false,
    cssEase: "linear",
    arrows: false,
  });

  $(".tab-body-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: ".post-list-new",
  });
  $(".post-list-new").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: ".tab-body-slider",
    dots: false,
    prevArrow:
      '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-angle-left"></i></button>',
    nextArrow:
      '<button class="slide-arrow next-arrow"><i class="fa-solid fa-angle-right"></i></button>',
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 520,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  // $(".post-list-new").slick({
  //   dots: false,
  //   infinite: true,
  //   speed: 300,
  //   prevArrow:
  //     '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-angle-left"></i></button>',
  //   nextArrow:
  //     '<button class="slide-arrow next-arrow"><i class="fa-solid fa-angle-right"></i></button>',
  //   slidesToShow: 4,
  //   slidesToScroll: 1,
  //   responsive: [
  //     {
  //       breakpoint: 1280,
  //       settings: {
  //         slidesToShow: 3,
  //       },
  //     },
  //     {
  //       breakpoint: 768,
  //       settings: "unslick",
  //     },
  //   ],
  // });

  // $(window).scroll(function () {
  //   if ($(this).scrollTop() > 1) {
  //     $("header").addClass("sticky");
  //   } else {
  //     $("header").removeClass("sticky");
  //   }
  // });

  AOS.init();
});
