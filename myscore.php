<!DOCTYPE html>
<html lang="th">

<head>

  <?php include ('./inc/inc-meta.php'); ?>

</head>

<body>

  <!-- begin #content -->
  <div id="content" class="content">

    <div class="bg-gradient">
      <div class="container">
        <h4 class="text-center pt-3 text-white text-line1">คะแนนของฉัน</h4>
        <div class="box-total-score">
          <h5>คะแนนรวม</h5>
          <h4 class="text-gradient ml-auto"><span>9,999</span> คะแนน</h4>
        </div>
      </div>
      <div class="box-score-game">

        <div class="box-score">
          <h5>GAME 1</h5>
          <div class="d-flex align-items-center mt-2">
            <img class="mr-2" src="public/images/img-game.png" alt="">
            <h5 class="mr-auto text-gradient">Me</h5>
            <h6 class="text-gradient">
              <span>9</span> คะแนน
              <img src="public/images/chevron-top-square.png" alt="">
            </h6>
          </div>
        </div>

        <div class="box-score">
          <h5>GAME 2</h5>
          <div class="d-flex align-items-center mt-2">
            <img class="mr-2" src="public/images/img-game.png" alt="">
            <h5 class="mr-auto text-gradient">Me</h5>
            <h6 class="text-gradient">
              <span>90</span> คะแนน
              <img src="public/images/chevron-top-square.png" alt="">
            </h6>
          </div>
        </div>

        <div class="box-score">
          <h5>GAME 3</h5>
          <div class="d-flex align-items-center mt-2">
            <img class="mr-2" src="public/images/img-game.png" alt="">
            <h5 class="mr-auto text-gradient">Me</h5>
            <h6 class="text-gradient">
              <span>900</span> คะแน
              <img src="public/images/chevron-top-square.png" alt="">
            </h6>
          </div>
        </div>

        <div class="total-score">
          <div class="d-flex align-items-center">
            <h5 class="mr-auto">QR</h5>
            <h6 class="text-gradient"><span>9,000</span> คะแนน</h6>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- end #content -->

  <!-- begin menu bottom -->
  <?php include ('./inc/inc-menu-bottom.php'); ?>
  <!-- end menu bottom -->

  <?php include ('./inc/inc-script.php'); ?>
</body>

</html>