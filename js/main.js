/*========== Toggle ==========*/
$(document).on("click", ".toggle", function () {
  $(".toggle").toggleClass("active");
  $("html").toggleClass("flow");
  $("[nav]").toggleClass("active");
});
// testi-carousel
$(".testi-carousel").owlCarousel({
  autoplay: true,
  nav: true,
  navText: [
    '<i class="fa-solid fa-circle-chevron-left"></i>',
    '<i class="fa-solid fa-circle-chevron-right"></i>',
  ],
  // navText: [ 'prev', 'next' ],
  dots: false,
  loop: true,
  autoWidth: false,
  autoHeight: true,
  smartSpeed: 1000,
  autoplayTimeout: 10000,
  margin: 20,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
      autoplay: true,
      autoHeight: true,
      dots: false,
      nav: true,
    },
    600: {
      items: 1,
    },
    991: {
      items: 1,
    },
    1000: {
      items: 1,
    },
  },
});

// banner-carousel
$(".banner-carousel").owlCarousel({
  autoplay: true,
  nav: true,
  navText: [
    '<i class="fa-solid fa-chevron-left"></i>',
    '<i class="fa-solid fa-chevron-right"></i>',
  ],
  // navText: [ 'prev', 'next' ],
  dots: false,
  loop: true,
  autoWidth: false,
  autoHeight: true,
  smartSpeed: 1000,
  autoplayTimeout: 10000,
  margin: 20,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
      autoplay: true,
      autoHeight: true,
    },
    600: {
      items: 1,
    },
    991: {
      items: 3,
    },
    1000: {
      items: 2.5,
    },
  },
});

// res-carousel
$(".res-carousel").owlCarousel({
  autoplay: true,
  nav: true,
  navText: [
    '<i class="fa-solid fa-chevron-left"></i>',
    '<i class="fa-solid fa-chevron-right"></i>',
  ],
  // navText: [ 'prev', 'next' ],
  dots: false,
  loop: true,
  autoWidth: false,
  autoHeight: true,
  smartSpeed: 1000,
  autoplayTimeout: 10000,
  margin: 10,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
      autoplay: true,
      autoHeight: true,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 4,
    },
    1200: {
      items: 6,
    },
  },
});

// cusine-carousel
$(".cusine-carousel").owlCarousel({
  autoplay: true,
  nav: false,
  navText: [
    '<i class="fa-solid fa-chevron-left"></i>',
    '<i class="fa-solid fa-chevron-right"></i>',
  ],
  // navText: [ 'prev', 'next' ],
  dots: true,
  loop: true,
  autoWidth: false,
  autoHeight: true,
  smartSpeed: 1000,
  autoplayTimeout: 10000,
  margin: 20,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
      autoplay: true,
      autoHeight: true,
    },
    600: {
      items: 3,
    },
    991: {
      items: 4,
    },
    1000: {
      items: 6,
    },
  },
});
/*____ FAQ's ____*/
$(document).on("click", ".faqBlk > h5", function () {
  $(".faqBlk")
    .not($(this).parent().toggleClass("active"))
    .removeClass("active");
  $(".faqBlk > .txt")
    .not($(this).parent().children(".txt").slideToggle())
    .slideUp();
});
$(function () {
  $(".rateYo").rateYo({
    rating: 4.0,
    fullStar: true,
    readOnly: true,
    normalFill: "#ddd",
    ratedFill: "#ffc000",
    starWidth: "14px",
    spacing: "2px",
  });
});
/*_____ Progress _____*/
$(".progress").each(function () {
  var value = $(this).attr("data-percent");
  var left = $(this).find(".left > span");
  var right = $(this).find(".right > span");
  if (value <= 30) {
    $(this).addClass("p30");
  } else if (value <= 70) {
    $(this).addClass("p70");
  } else {
    $(this).addClass("p100");
  }
  if (value > 0) {
    if (value <= 50) {
      right.css("transform", "rotate(" + percentageToDegrees(value) + "deg)");
    } else {
      right.css("transform", "rotate(180deg)");
      setTimeout(function () {
        left.css(
          "transform",
          "rotate(" + percentageToDegrees(value - 50) + "deg)"
        );
      }, 500);
    }
  }
});
function percentageToDegrees(percentage) {
  return (percentage / 100) * 360;
}
/*========== Dropdown ==========*/
$(document).on("click", ".drop_btn", function (e) {
  e.stopPropagation();
  var $this = $(this).parent().children(".drop_cnt");
  $(".drop_cnt").not($this).removeClass("active");
  var $parent = $(this).parent(".drop");
  $parent.children(".drop_cnt").toggleClass("active");
});
$(document).on("click", ".drop_cnt", function (e) {
  e.stopPropagation();
});
$(document).on("click", function () {
  $(".drop_cnt").removeClass("active");
});
/*----- Card Sec Bar -----*/
$(document).on("click", ".cardSecBar .lblBtn", function () {
  var checkbox = $(this).parents(".lblBtn").find("input[type=radio]");
  checkbox.prop("checked", !checkbox.prop("checked"));
  $(".cardSec").slideDown("3000");
  $(".paypalSec").slideUp("3000");
});
$(document).on("click", ".paypalSecBar .lblBtn", function () {
  var checkbox = $(this).parents(".lblBtn").find("input[type=radio]");
  checkbox.prop("checked", !checkbox.prop("checked"));
  $(".paypalSec").slideDown("3000");
  $(".cardSec").slideUp("3000");
});
// _____popup_____*/
$(document).on("click", ".popBtn", function () {
  var popUp = $(this).data("popup");
  $("body").addClass("flow");
  $(".popup[data-popup= " + popUp + "]").fadeIn();
});
$(document).on("click", ".crosBtn", function () {
  $(".popup").fadeOut();
  $("body").removeClass("flow");
});
