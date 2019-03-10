jQuery(document).ready(function ($) {
  $('.sl1der').slick({
  dots: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  fade: true,
  speed: 1800,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 6000,
  responsive: [
  {
  breakpoint: 1024,
  settings: {
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true
  }
  },
  {
  breakpoint: 600,
  settings: {
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false
  }
  },
  {
  breakpoint: 480,
  settings: {
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false
  }
  }
  // You can unslick at a given breakpoint now by adding:
  // settings: "unslick"
  // instead of a settings object
  ]
  });
  // FIM Slick Slider

});

jQuery(document).ready(function ($) {
  $('#sl1der2').slick({
  dots: false,
  slidesToShow: 4,
  slidesToScroll: 3,
  fade: false,
  speed: 1800,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 6000,
  responsive: [
  {
  breakpoint: 1024,
  settings: {
  slidesToShow: 3,
  slidesToScroll: 2,
  dots: true
  }
  },
  {
  breakpoint: 600,
  settings: {
  slidesToShow: 2,
  slidesToScroll: 1,
  arrows: false
  }
  },
  {
  breakpoint: 480,
  settings: {
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false
  }
  }
  // You can unslick at a given breakpoint now by adding:
  // settings: "unslick"
  // instead of a settings object
  ]
  });
  // FIM Slick Slider

});


jQuery(document).ready(function($) {
  $('#post').find('img').addClass('responsive-img');
  $('.wp_pagination').find('ul').addClass('pagination');
  $('.pagination').find('li').addClass('waves-effect');
  $('.current').addClass('btn-flat orange white-text');
  $('.calendar_wrap').addClass('white-text');
  $('#wp-calendar').addClass('centered');
  $('#wp-calendar').find('a').addClass('chip orange lighten-4 red-text darken-text-3');
    $(".nav-item-dropdown-button").dropdown({constrainWidth: false, hover: false, coverTrigger:false,});
    $(".side-menu-nav-item-dropdown-button").dropdown({constrainWidth: false, hover: false,});
    $(".sidenav").sidenav();
    $(".parallax").parallax();
    $(".modal").modal();
    $(".wp-caption").width('auto').height('auto');
    $(".wp-caption-text").width('auto').height('auto');
    $(".wp-caption .aligncenter").addClass('alignleft');
    $(".collapsible").collapsible();
    $("iframe[src*='youtube']").parent().fitVids();
    $("iframe[src*='web.facebook']").parent().fitVids();
    $('jp-relatedposts-post-title').addClass('blue-grey-text darken-text-4 news');

});

jQuery(document).ready(function($) {
var header = $(".float-panel");
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
       if (scroll >= 350) {
           $('.esconder').hide();
            $('.transparente').addClass('grey darken-3');
        } else {
            $('.esconder').show();
              $('.transparente').removeClass('grey darken-3');
        }
});
});
