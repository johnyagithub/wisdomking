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
        <h3 class="bg-head font-weight-bold text-primary">สมุดบันทึก</h3>
        <div class="btn-group mt-3" role="group">
          <a href="game1-storage.php" class="btn btn-secondary active">กระเป๋า</a>
          <a href="game1-item.php" class="btn btn-secondary">ไอเทม</a>
          <a href="game1-herbs.php" class="btn btn-secondary">คลังสมุนไพร</a>
        </div>
        <div class="grid-storage">
          <div class="item have">
            <span class="badge">10</span>
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img2.png">
            </a>
            <div class="btn-del" onclick="myDelete($(this))" data-id="001"><img src="assets/images/game1/btn-del.png"></div>
          </div>
          <div class="item have">
            <span class="badge">10</span>
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img3.png">
            </a>
            <div class="btn-del" onclick="myDelete($(this))" data-id="002"><img src="assets/images/game1/btn-del.png"></div>
          </div>
          <div class="item have">
            <span class="badge">10</span>
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img1.png">
            </a>
            <div class="btn-del" onclick="myDelete($(this))" data-id="003"><img src="assets/images/game1/btn-del.png"></div>
          </div>
          <div class="item"></div>
          <div class="item"></div>
          <div class="item"></div>
          <div class="item"></div>
          <div class="item"></div>
          <div class="item"></div>
        </div>
      </div>
    </div>
    <div class="container --sticky">
      <h6 class="text-center mb-3" style="color: #C55A10;">ช่องในกระเป๋าของคุณจะเพิ่มขึ้นในอีก 6 วัน 12 ชั่วโมง</h6>
      <div class="-storage-bottom">
        <h5>ใช้ <span class="text-point"><img src="assets/images/game1/coin2.png"> 100 point</span></h5>
        <h5>เพื่อเพิ่มช่องเก็บของในกระเป๋า</h5>
        <a href="game1-storage.php" class="btn-style">เพิ่มช่องเก็บของ</a>
      </div>
    </div>
  </div>
  <!-- end #content -->

  <!--  popup -->
  <div id="popup-content" class="popup-style" style="display: none; max-width: 500px;">
    <div class="-popup">
      <h3 class="head-style">The bag is full.</h3>
      <h3 class="mb-2 mt-3 font-weight-bold" style="color:#F51717;">กระเป๋าเต็มแล้ว !</h3>
      <p class="mb-4 mt-0" style="color:#77380F;">กรุณาลบสมุนไพรที่คุณมีเพื่อให้มีช่องว่างสำหรับสมุนไพรที่คุณต้องการ</p>
      <div onclick="$('.grid-storage').attr('delete','active')" data-fancybox-close>
        <img src="assets/images/game1/btn-Delete-herbs.png" class="w-100">
      </div>
    </div>
  </div>
  <!-- end popup -->

  <script>
    $(function () {

      // โหลด popup เป็นตัวอย่าง
      $.fancybox.open({ src: '#popup-content' });

    });

    let myDelete = (This) => {
      // ตัวอย่างการรับ id สามารถนำไปใช้ลบ database ได้ 
      var id = This.data('id');
      if (confirm('คุณแน่ใจหรือไม่ว่าต้องการลบกระเป๋า') == true) {
        This.closest('.grid-storage .item').remove();
        $(".grid-storage").append("<div class='item'></div>");

        // เอา id ไปใช้
        console.log('ลบ id = '+id)
      }
    }
  </script>
</body>

</html>