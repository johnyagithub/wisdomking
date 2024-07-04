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
  <div class="box-body">

    <a href="javascript:history.back()" class="I-back back-color" data-role="none">
      <img src="assets/images/I-back.png" alt="">
    </a>
    <div class="bg-light">
      <div class="container">
        <h4 class="text-center pt-4 pb-3 text-line1">แลกคะแนน</h4>

        <div id="floatingBox"></div>
        <div class="box-floatingBox">
          <div class="b-floatingBox">
            <img src="assets/images/img-profile3.jpg" class="img-pro" alt="">
            <img class="mr-3 img-coin ml-auto" src="assets/images/coin.png">
            <h4 class="text-gradient mb-0"><span>9,999</span> คะแนน</h4>
          </div>
        </div>

        <div class="box-list-product">
          <div class="input-group">
            <input type="text" placeholder="ค้นหา...">
            <button class="btn" type="submit">
              <img src="assets/images/I-search2.png">
            </button>
          </div>

          <div class="b-record">
            <a href="product-detail2.php">
              <img src="assets/images/img-product1.jpg" alt="">
              <div class="b-record-text">
                <span>Lorem</span>
                <p>เสื้อม่อฮ่อม แขนสั้น</p>
              </div>
              <div class="box-numbercoins">
                <span>800</span>
              </div>
            </a>
          </div>

          <div class="b-record">
            <a href="product-detail2.php">
              <img src="assets/images/img-product2.jpg" alt="">
              <div class="b-record-text">
                <span>Lorem</span>
                <p>กระเป๋าสาน</p>
              </div>
              <div class="box-numbercoins">
                <span>400</span>
              </div>
            </a>
          </div>

          <div class="b-record">
            <a href="product-detail2.php">
              <img src="assets/images/img-product3.jpg" alt="">
              <div class="b-record-text">
                <span>Lorem</span>
                <p>กระเป๋าผ้าขาวม้าตาไก่</p>
              </div>
              <div class="box-numbercoins">
                <span>200</span>
              </div>
            </a>
          </div>

          <div class="b-record">
            <a href="product-detail2.php">
              <img src="assets/images/img-product4.jpg" alt="">
              <div class="b-record-text">
                <span>Lorem</span>
                <p>กระเป๋าจูด</p>
              </div>
              <div class="box-numbercoins">
                <span>200</span>
              </div>
            </a>
          </div>

          <div class="b-record">
            <a href="product-detail2.php">
              <img src="assets/images/img-product5.jpg" alt="">
              <div class="b-record-text">
                <span>Lorem</span>
                <p>กระเป๋าผ้าขาวม้า</p>
              </div>
              <div class="box-numbercoins">
                <span>100</span>
              </div>
            </a>
          </div>

          <div class="b-record">
            <a href="product-detail2.php">
              <img src="assets/images/img-product6.jpg" alt="">
              <div class="b-record-text">
                <span>Lorem</span>
                <p>น้ำมันมะพร้าวบีบเย็น 120 ml.</p>
              </div>
              <div class="box-numbercoins">
                <span>80</span>
              </div>
            </a>
          </div>

        </div>

      </div>
    </div>

  </div>
  <!-- end #content -->
</body>

</html>