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

    <a href="javascript:history.back()" class="I-back" style="filter: hue-rotate(161deg) opacity(0.7);"
      data-role="none">
      <img src="assets/images/I-back.png" alt="">
    </a>
    <div class="box-coin">
      <div class="container">
        <div class="box-MyCoins">
          <a href="record.php" class="record">ประวัติ</a>
          เหรียญของฉัน
          <div class="b-coin">
            <img class="mr-3" src="assets/images/coin.png">
            <h1>9,999</h1>
          </div>
        </div>
      </div>
      <div class="b-coin-head">
        <h2>เช็คอิน</h2>
        <h4>เพื่อรับ</h4>
        <h1>COINS</h1>
      </div>
      <div class="container">
        <img src="assets/images/Vector-Smart.png" class="img-cartoon">
        <div class="box-checkinCoin">
          <ul class="d-flex">
            <li class="active">
              <div class="box">
                <img class="mr-3" src="assets/images/coin.png">
                10
              </div>
              วันที่ 1
            </li>
            <li class="active">
              <div class="box">
                <img class="mr-3" src="assets/images/coin.png">
                10
              </div>
              วันนี้
            </li>
            <li>
              <div class="box">
                <img class="mr-3" src="assets/images/coin.png">
                10
              </div>
              วันที่ 3
            </li>
            <li>
              <div class="box">
                <img class="mr-3" src="assets/images/coin.png">
                10
              </div>
              วันที่ 4
            </li>
            <li>
              <div class="box">
                <img class="mr-3" src="assets/images/coin.png">
                10
              </div>
              วันที่ 5
            </li>
            <li>
              <div class="box">
                <img class="mr-3" src="assets/images/coin.png">
                10
              </div>
              วันที่ 6
            </li>
            <li>
              <div class="box">
                <img class="mr-3" src="assets/images/coin.png">
                10
              </div>
              วันที่ 7
            </li>
          </ul>
          <!-- กดแล้วเพิ่มคล้าส disabled -->
          <button data-fancybox data-src="#popup-content" type="button" class="btn-gradient">รับ COINS</button>
        </div>
      </div>
    </div>

  </div>
  <!-- end #content -->
  <!--  popup -->
  <div id="popup-content" style="display:none;max-width:500px;">
    <h3 class="text-gradient text-center font-weight-bold mb-0">ยินดีด้วย</h3>
    <div class="text-center d-flex justify-content-center align-items-center">
      <h4>คุณได้รับ</h4>
      <h1 class="text-gradient mx-2 font-weight-bold">0.1</h1>
      <h4>Coins!</h3>
    </div>
    <img src="assets/images/Coins.png" style="margin-top: -30px;">
    <button type="button" data-fancybox-close class="btn-gradient py-1">ตกลง</buttontype=>
  </div>
  <!-- end popup -->
</body>

</html>