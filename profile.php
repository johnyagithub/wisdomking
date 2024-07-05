<!DOCTYPE html>
<html lang="th">

<head>

  <?php include ('./inc/inc-meta.php'); ?>

</head>

<body>

  <!-- begin #content -->
  <div class="divHeader">
    <?php include ('./inc/inc-header.php'); ?>
  </div>
  <?php include ('./inc/inc-menu-bottom.php'); ?>
  <div class="box-body" style="max-width: none;">
    
    <a href="javascript:history.back()" class="I-back" data-role="none">
      <img src="assets/images/I-back.png" alt="">
    </a>
    <div class="bg-gradient">
      <div class="container">
        <h4 class="text-center pt-4 text-white text-line1">โปรไฟล์</h4>
      </div>

      <div class="box-profile3">
        <img src="assets/images/img-profile3.jpg" alt="">
        <h5 class="mb-3 text-center text-line1">Lorem</h5>
      </div>

      <div class="box-record">

        <a href="#" class="b-record">คูปอง</a>
        <a href="#" class="b-record">แก้ไขข้อมูลส่วนตัว</a>
        <a href="#" class="b-record">ข้อมูลการจองของฉัน</a>
        <a href="record.php" class="b-record">ประวัติ</a>
        <a href="myscore.php" class="b-record">คะแนนของฉัน</a>

        <a href="#" class="b-record text-gradient text-center">
          <u class="text-gradient">ลบข้อมูลทั้งหมด</u>
        </a>
      </div>
    </div>

  </div>
  <!-- end #content -->
</body>

</html>