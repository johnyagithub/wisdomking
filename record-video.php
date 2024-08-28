<!DOCTYPE html>
<html lang="th">

<head>

  <?php include('./inc/inc-meta.php'); ?>

</head>

<body>

  <!-- begin #content -->
  <div class="divHeader">
    <?php include('./inc/inc-header.php'); ?>
  </div>
  <?php include('./inc/inc-menu-bottom.php'); ?>
  <div class="box-body" style="max-width: none;">

    <a href="javascript:history.back()" class="I-back" data-role="none">
      <img src="assets/images/I-back.png" alt="">
    </a>
    <div class="bg-gradient">
      <div class="container">
        <h4 class="text-center pt-4 text-white text-line1">ประวัติ</h4>
      </div>
      <div class="box-record">
        <h5 class="mb-3">รายการวีดีโอ</h5>

        <a href="#">
          <div class="b-record align-items-center">
            <img class="mr-3" src="assets/images/v1.png" alt="">
            <div class="b-record-text">
              <img class="mr-1" src="assets/images/img-play.png" alt="">
              วีดีโอที่ 1
            </div>
          </div>
        </a>

        <a href="#">
          <div class="b-record align-items-center">
            <img class="mr-3" src="assets/images/v2.png" alt="">
            <div class="b-record-text">
              <img class="mr-1" src="assets/images/img-play.png" alt="">
              วีดีโอที่ 2
            </div>
          </div>
        </a>

        <a href="#">
          <div class="b-record align-items-center">
            <img class="mr-3" src="assets/images/v3.png" alt="">
            <div class="b-record-text">
              <img class="mr-1" src="assets/images/img-play.png" alt="">
              วีดีโอที่ 3
            </div>
          </div>
        </a>

        <a href="#">
          <div class="b-record align-items-center">
            <img class="mr-3" src="assets/images/v4.png" alt="">
            <div class="b-record-text">
              <img class="mr-1" src="assets/images/img-play.png" alt="">
              วีดีโอที่ 4
            </div>
          </div>
        </a>
      </div>
    </div>

  </div>
  <!-- end #content -->
  <!--  popup -->
  <div id="popup-content" style="display:none;max-width:500px;">
    <h3 class="text-gradient text-center font-weight-bold mb-0">Scan QR Code</h3>
    <div class="text-center d-flex justify-content-center align-items-center">
      <h4>เพื่อรับสินค้า</h3>
    </div>
    <img style="max-width:100%;" id="imgScanQRCode" src="assets/images/Coins.png">
  </div>
  <!-- end popup -->
</body>

</html>