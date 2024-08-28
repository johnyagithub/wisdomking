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
        <h5 class="mb-3">รายการคำสั่งแลกสินค้า</h5>

        <a href="product-detail2.php">
          <div class="b-record">
            <img class="mr-3" src="assets/images/img-record.jpg" alt="">
            <div class="b-record-text">
              <p>หมวกแก็บ คิดถึงมิลืมเลือน หมวกแก็บ คิดถึงมิลืมเลือน</p>
            </div>
            <div>
              <div class="b-date">24/03/2023</div>
              <div class="box-numbercoins">
                <span class="text-gradient">200</span>
              </div>
            </div>
          </div>
        </a>
        <a href="#" data-fancybox data-src="#popup-content" onclick="$('#imgScanQRCode').attr('src','assets/images/img-QR2.png')">
          <div class="b-record-qr">
            <img src="assets/images/icon-record1.png" alt="">
            <div class="b-record-text">
              <p class="text-gradient mb-0">คุณได้ทำการแลกสินค้าแล้ว</p>
              <p>กรุณาให้เจ้าหน้าที่ Scan QR Code เพื่อรับสินค้า</p>
            </div>
            <img class="record-qr" src="assets/images/icon-record3.png" alt="">
          </div>
        </a>

        <a href="product-detail2.php">
          <div class="b-record">
            <img class="mr-3" src="assets/images/img-record.jpg" alt="">
            <div class="b-record-text">
              <p>กระเป๋าผ้าดิบ</p>
            </div>
            <div>
              <div class="b-date">24/03/2023</div>
              <div class="box-numbercoins">
                <span class="text-gradient">20</span>
              </div>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="b-record-qr">
            <img src="assets/images/icon-record2.png" alt="">
            <div class="b-record-text">
              <p class="text-gradient mb-0">คุณได้รับสินค้าเรียบร้อยแล้ว</p>
            </div>
          </div>
        </a>

        <a href="product-detail2.php">
          <div class="b-record">
            <img class="mr-3" src="assets/images/img-record.jpg" alt="">
            <div class="b-record-text">
              <p>น้ำมันมะพร้าวบีบเย็น 120 ml.</p>
            </div>
            <div>
              <div class="b-date">24/03/2023</div>
              <div class="box-numbercoins">
                <span class="text-gradient">80</span>
              </div>
            </div>
          </div>
        </a>
        <a href="#" data-fancybox data-src="#popup-content" onclick="$('#imgScanQRCode').attr('src','assets/images/img-QR2.png')">
          <div class="b-record-qr">
            <img src="assets/images/icon-record1.png" alt="">
            <div class="b-record-text">
              <p class="text-gradient mb-0">คุณได้ทำการแลกสินค้าแล้ว</p>
              <p>กรุณาให้เจ้าหน้าที่ Scan QR Code เพื่อรับสินค้า</p>
            </div>
            <img class="record-qr" src="assets/images/icon-record3.png" alt="">
          </div>
        </a>

        <a href="product-detail2.php">
          <div class="b-record">
            <img class="mr-3" src="assets/images/img-record.jpg" alt="">
            <div class="b-record-text">
              <p>หมวกผ้าขาวม้า</p>
            </div>
            <div>
              <div class="b-date">24/03/2023</div>
              <div class="box-numbercoins">
                <span class="text-gradient">100</span>
              </div>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="b-record-qr">
            <img src="assets/images/icon-record2.png" alt="">
            <div class="b-record-text">
              <p class="text-gradient mb-0">คุณได้รับสินค้าเรียบร้อยแล้ว</p>
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