$(function () {
  $('a[data-fancybox]').fancybox({
    smallBtn: true,
    btnTpl: {
      smallBtn: '<button data-fancybox-close="" class="fancybox-button fancybox-button--close" title="Close"></button>'
    }
  });
});