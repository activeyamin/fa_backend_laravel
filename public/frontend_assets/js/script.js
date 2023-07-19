
// =========nav search dropdown js start=====
$(".search_icon_show").click(function(){
    $("#search_part").slideDown()
})
$(".search_item_hide").click(function(){
    $("#search_part").slideUp()
})
$(".js_nav_btn_hide").click(function (){
    $(".js_nav_btn_hide").slideUp()
})
$(".nav_close_click_on_nav_btn").click(function(){
    $(".js_nav_btn_hide").slideDown()
})
// ========= nav searchr dropdown js end=====
// ========= study aboard form js start=====

$(".study_form_item_show_js").click (function(){
  $("#student_benefit_show_form").slideDown();
})
$(".student_benefit_form_close").click (function(){
  $("#student_benefit_show_form").slideUp();
})
// ========= study aboard form js end=====
// =========computing it dropdown start js start=====
$(".compu_drop_manu_show").click(function(){
  $(".computing_manu_item").slideToggle();
})
// =========computing it dropdown start js end=====
// =========banner slider start=====
$('.banner_slider_box').slick({
  dots: false,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  // autoplaySpeed: 3000,
  prevArrow: '<i class="fa-solid fa-angle-left prev"></i>',
  nextArrow: '<i class="fa-solid fa-angle-right next"></i>',
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
// ======banner slider  end======
// =========australia banner slider start=====
$('.australia_banner_slider_box').slick({
  dots: false,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  // autoplaySpeed: 3000,
  prevArrow: '<i class="fa-solid fa-angle-left prev"></i>',
  nextArrow: '<i class="fa-solid fa-angle-right next"></i>',
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
// ======australia banner slider  end======
// =========australia banner slider start=====
$('.india_banner_slider_box').slick({
  dots: false,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  // autoplaySpeed: 3000,
  prevArrow: '<i class="fa-solid fa-angle-left prev"></i>',
  nextArrow: '<i class="fa-solid fa-angle-right next"></i>',
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
// ======australia banner slider  end======
// ======venobox slider  start======
new VenoBox({
  selector: '.venobox'
});
// ======venobox slider  end======

// ======askidp  slider start======
$('.askidp_slider_box').slick({
  dots: false,
  infinite: true,
  speed: 500,
  slidesToShow: 4,
  slidesToScroll: 1,
  // autoplaySpeed: 3000,
  prevArrow: '<i class="fa-solid fa-angle-left prev"></i>',
  nextArrow: '<i class="fa-solid fa-angle-right next"></i>',
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 1192,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
// ========askidp slider end====
// ========brand slider start====

$('.univer_slider_main_item').slick({
  dots: false,
  infinite: true,
  speed: 500,
  slidesToShow: 5,
  slidesToScroll: 1,
  cssEase: 'linear',
  autoplay: true,
  arrows: false,

  // autoplaySpeed: 3000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
// =========brand part end=====

// $(document).ready (function (){
//     new DataTable('#student_table_search', {
//         responsive: true,
//     });
// })
// -=-=-=--=-=-jquery progess bar start=-=-=-
$(document).on("scroll", function(){
  var pixels = $(document).scrollTop();
  var pageHeight = $(document).height() - $(window).height();
  var progress = 100 * pixels / pageHeight;

  $("div.progress").css("width", progress + "%");
})

// ---- Notes ---- //

// pixels = amount of px from top of page
// pageHeight = whole page height minus viewable page height
// progress = pixels from top / page-height * 100
// -=-=-=--=-=-jquery progess bar end=-=-=-
// =============select2 course start=========
$(document).ready (function (){
    $("#search_course_multi_select").select2({
      theme: "classic",
    });
})
$(document).ready (function (){
    $("#search_sub_select").select2({
        theme: "classic",
    });
})
// selet2 course end====
// selet2 university start====
$(document).ready (function (){
    $("#search_univer_multi_select").select2({
        theme: "classic",
    });
})
// selet2 university end====
// =====data table start====
// $(document).ready(function (){
//     $('#student_table_search').DataTable()
// });
// =====data table end====

// selet2 month start====
$(document).ready (function (){
    $("#search_month_multi_select").select2({
        theme: "classic",
    });
})
$(document).ready (function (){
    $("#search_country_select").select2({
        theme: "classic",
    });
})
// selet2 month end====

// ======select2 bootstrap end======
