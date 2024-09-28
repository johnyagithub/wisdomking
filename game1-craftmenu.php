<!DOCTYPE html>
<html lang="th">

<head>

  <?php include('./inc/inc-meta.php'); ?>
  <link rel="stylesheet" type="text/css" href="./assets/css/game1.css">
  <script type="text/javascript" src="./assets/js/script_game1.js"></script>

</head>

<body>
  <div class="game1 bg-floor">

    <?php include('./inc/inc-score.php'); ?>

    <div class="container">
      <div class="-storage">
        <h3 class="bg-head font-weight-bold text-primary">ภารกิจ</h3>
        <div class="btn-group mt-3" role="group">
          <a href="#" class="btn btn-secondary active">ยารักษาโรค</a>
          <a href="#" class="btn btn-secondary">ผสมสี</a>
          <a href="#" class="btn btn-secondary">สีย้อมผ้า</a>
        </div>

        <div class="box-craftmenu -scroll">

          <div class="-list">
            <div class="-img">
              <img src="assets/images/game1/symptom/img1.png">
            </div>
            <div class="-text">
              <h6>แก้ไข้</h6>
              <span class="text-point"><img src="assets/images/game1/coin2.png"> 100 point</span>
              <div class="-star">
                <p>ระดับความยาก :</p>
                <img src="assets/images/game1/Group.png" alt="">
                <img src="assets/images/game1/Group.png" alt="">
                <img src="assets/images/game1/Group.png" alt="">
              </div>
            </div>
            <a href="game1-craftmenu-info.php" class="-status"></a>
          </div>
          <div class="-list">
            <div class="-img">
              <img src="assets/images/game1/symptom/img2.jpg">
            </div>
            <div class="-text">
              <h6>แก้ท้องร่วง</h6>
              <span class="text-point"><img src="assets/images/game1/coin2.png"> 100 point</span>
              <div class="-star">
                <p>ระดับความยาก :</p>
                <img src="assets/images/game1/Group.png" alt="">
                <img src="assets/images/game1/Group.png" alt="">
                <img src="assets/images/game1/Group.png" alt="">
              </div>
            </div>
            <a href="game1-craftmenu-info.php" class="-status"></a>
          </div>
          <div class="-list">
            <div class="-img">
              <img src="assets/images/game1/symptom/img3.jpg">
            </div>
            <div class="-text">
              <h6>บำรุงไต</h6>
              <span class="text-point"><img src="assets/images/game1/coin2.png"> 100 point</span>
              <div class="-star">
                <p>ระดับความยาก :</p>
                <img src="assets/images/game1/Group.png" alt="">
                <img src="assets/images/game1/Group.png" alt="">
                <img src="assets/images/game1/Group.png" alt="">
              </div>
            </div>
            <a href="game1-craftmenu-info.php" class="-status"></a>
          </div>
          <div class="-list">
            <div class="-img">
              <img src="assets/images/game1/symptom/img4.jpg">
            </div>
            <div class="-text">
              <h6>ขับปัสสาวะ</h6>
              <span class="text-point"><img src="assets/images/game1/coin2.png"> 100 point</span>
              <div class="-star">
                <p>ระดับความยาก :</p>
                <img src="assets/images/game1/Group.png" alt="">
                <img src="assets/images/game1/Group.png" alt="">
                <img src="assets/images/game1/Group.png" alt="">
              </div>
            </div>
            <a href="game1-craftmenu-info.php" class="-status"></a>
          </div>
          <div class="-list">
            <div class="-img">
              <img src="assets/images/game1/symptom/img5.jpg">
            </div>
            <div class="-text">
              <h6>บรรเทาเจ็บคอ</h6>
              <span class="text-point"><img src="assets/images/game1/coin2.png"> 100 point</span>
              <div class="-star">
                <p>ระดับความยาก :</p>
                <img src="assets/images/game1/Group.png" alt="">
                <img src="assets/images/game1/Group.png" alt="">
                <img src="assets/images/game1/Group.png" alt="">
              </div>
            </div>
            <a href="game1-craftmenu-info.php" class="-status"></a>
          </div>
          <!-- ทำภารกิจสำเร็จแล้ว เพิ่ม finish -->
          <div class="-list finish">
            <div class="-img">
              <img src="assets/images/game1/symptom/img1.png">
            </div>
            <div class="-text">
              <h6>บรรเทาโรคกระเพาะ</h6>
              <span class="text-point"><img src="assets/images/game1/coin2.png"> 100 point</span>
              <div class="-star">
                <p>ระดับความยาก :</p>
                <img src="assets/images/game1/Group.png" alt="">
                <img src="assets/images/game1/Group.png" alt="">
                <img src="assets/images/game1/Group.png" alt="">
              </div>
            </div>
            <a href="game1-craftmenu-info.php" class="-status"></a>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- end #content -->
</body>

</html>