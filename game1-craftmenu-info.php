<!DOCTYPE html>
<html lang="th">

<head>

  <?php include('./inc/inc-meta.php'); ?>
  <link rel="stylesheet" type="text/css" href="./assets/css/game1.css">
  <script type="text/javascript" src="./assets/js/script_game1.js"></script>

</head>

<body>
  <div class="game1 bg-floor">
    <a href="javascript:history.back()" class="I-back" data-role="none">
      <img src="assets/images/I-back.png" alt="">
    </a>
    <div class="-img-info" style="align-items: end;">
      <img src="assets/images/game1/symptom/img1.png" style="max-height: 86%;">
    </div>
    <div class="container">
      <div class="box-info">
        <div class="-scroll">
          <h3 class="-head" style="text-align: left;" data-id="001">แก้ไข้</h3>
          <!-- สมมุติ แก้ไข้ มีรหัส 001 ในหลังบ้าน-->
          <div class="d-flex" style="justify-content: space-between;">
            <span class="text-point"><img src="assets/images/game1/coin2.png"> 100 point</span>
            <div class="-star">
              <p>ระดับความยาก :</p>
              <img src="assets/images/game1/Group.png" alt="">
              <img src="assets/images/game1/Group.png" alt="">
              <img src="assets/images/game1/Group.png" alt="">
            </div>
          </div>
          <hr>

          <div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
              industry's standard dummy text ever since the 1500s, when an Lorem Ipsum is simply dummy text of the
              printing and typesetting industry. Lorem Ipsum has been the industry's</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
              industry's standard dummy text ever since the 1500s, when an Lorem Ipsum is simply dummy text of the
              printing and typesetting industry. Lorem Ipsum has been the industry's</p>
          </div>

          <div class="box-formula">
            <div class="-formula">
              <div class="box-herb">
                <div class="img-herb">
                  <img class="effect" src="assets/images/game1/effect-color.png">
                  <img src="assets/images/game1/item/img3.png">
                </div>
              </div>
              <img src="assets/images/game1/result.png">
              <div class="--herb">
                <img src="assets/images/game1/herb/img1.png">
                <span class="badge">10/10</span>
              </div>
              <img src="assets/images/game1/mix.png" style="margin-top: 20px;">
              <div class="--herb">
                <img src="assets/images/game1/herb/img3.png">
                <span class="badge">10/10</span>
              </div>
            </div>
            <button type="button" class="btn-style" data-fancybox="" data-src="#popup-craft">คราฟต์เลย !</button>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- end #content -->

  <!--  popup -->
  <div id="popup-craft" class="popup-style" style="display: none; max-width: 500px;">
    <div class="-popup">
      <h3 class="head-style" style="letter-spacing: 5px;">SUCCEsS.</h3>
      <div class="box-herb">
        <div class="img-herb">
          <img class="effect" src="assets/images/game1/effect.png">
          <img src="assets/images/game1/item/img3.png">
        </div>
      </div>
      <h3 class="mb-3 font-weight-bold">สำเร็จแล้ว !</h3>
      <p>คุณต้องการรักษา “ไข้”<br />เลยหรือไม่ ?</p>
      <button type="button" class="btn-style" onclick="myTreat()" data-fancybox-close data-fancybox=""
        data-src="#popup-treat">รักษา</button>
    </div>
  </div>

  <div id="popup-treat" class="popup-style" style="display: none; max-width: 500px;">
    <div class="-popup">
      <h3 class="head-style" style="letter-spacing: 5px;">recovered.</h3>
      <div class="box-herb">
        <div class="img-herb">
          <img class="effect" src="assets/images/game1/effect.png">
          <img src="assets/images/game1/symptom/finish.png" style="width:150px;">
        </div>
      </div>
      <h3 class="mb-3 font-weight-bold">ภารกิจสำเร็จแล้ว !</h3>
      <p>you score</p>
      <span class="text-point"><img src="assets/images/game1/coin2.png"> 100 point</span>
      <button type="button" class="btn-style" data-fancybox-close>ตกลง</button>
    </div>
    <button type="button" data-fancybox-close class="fancybox-button fancybox-close-small" title="Close"></button>
  </div>
  <!-- end popup -->

  <script>
    $(function () {
      $("#popup-treat [data-fancybox-close]").click(function () {
        location.href = 'game1-craftmenu.php';
      });
    });

    // สำเร็จแล้ว เอารหัสรายการไปใช้
    let myTreat = () => {
      var id = $('.box-info .-scroll .-head').data('id');
      console.log("รายการรหัส :" + id + " ทำภารกิจสำเร็จแล้ว");
    }
  </script>
</body>

</html>