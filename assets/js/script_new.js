$(function () {
  $('a[fancybox-video]').fancybox({
    smallBtn: true,
    btnTpl: {
      smallBtn: '<button data-fancybox-close="" class="fancybox-button fancybox-button--close" title="Close"></button>'
    }
  });

  jQuery(window).scroll(function (event) {
    jQuery("#floatingBox").each(function () {
      if ($("#floatingBox").visible(true)) {
        $('.box-floatingBox').removeClass("floating");
      } else {
        $('.box-floatingBox').addClass("floating");
      }
    });
  });
  jQuery('.box-orderscore').scroll(function (event) {
      jQuery("#orderscore").each(function () {
      if ($("#orderscore").visible(true)) {
        $('body').removeClass("orderscore");
      } else {
        $('body').addClass("orderscore");
      }
    });
  });

  $("#product-slide").owlCarousel({
    margin: 0,
    nav: true,
    navText: ["<img src='./assets/images/owl-nav.png'>","<img src='./assets/images/owl-nav.png'>"],
    dots: false,
    lazyLoad: true,
    items: 1,
    autoHeight: true,
  });
});