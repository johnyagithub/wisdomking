$(function () {
  $("#setup").click(function () {
    $(this).toggleClass("active");
  });

  $(".--dropdown .-sound").click(function () {
    $(this).toggleClass("off");

    if ($(this).is(".off")) {
      alert('ปิดเสียงcแล้ว');
    } else {
      alert('เปิดเสียงแล้ว');
    }
  });

  $("[data-fancybox-close][data-fancybox]").click(function () {
    setTimeout(() => {
      $.fancybox.open({ src: $(this).data("src") });
    }, 500);
  });
});