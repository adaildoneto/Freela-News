jQuery(document).ready(function ($) {
  $('.sl1der').slick({
  dots: true,
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

jQuery(document).ready(function($) {
    jQuery(".nav-item-dropdown-button").dropdown({constrainWidth: false, hover: false, coverTrigger:false,});
    jQuery(".side-menu-nav-item-dropdown-button").dropdown({constrainWidth: false, hover: false,});
    jQuery(".sidenav").sidenav();
    jQuery(".parallax").parallax();
    jQuery(".modal").modal();
    jQuery(".wp-caption").width('auto').height('auto');
    jQuery(".wp-caption-text").width('auto').height('auto');
    jQuery(".wp-caption .aligncenter").addClass('alignleft');
    jQuery(".collapsible").collapsible();

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
