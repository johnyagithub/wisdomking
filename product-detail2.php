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

    <div class="owl-carousel owl-theme" id="product-slide">
      <div class="item">
        <img src="assets/images/product-slide.jpg" alt="">
      </div>
      <div class="item">
        <img src="assets/images/img-product1.jpg" alt="">
      </div>
      <div class="item">
        <img src="assets/images/img-product3.jpg" alt="">
      </div>
      <div class="item">
        <img src="assets/images/img-product4.jpg" alt="">
      </div>
      <div class="item">
        <img src="assets/images/img-product5.jpg" alt="">
      </div>
      <div class="item">
        <img src="assets/images/img-product6.jpg" alt="">
      </div>
    </div>

    <div class="box-details">
      <span>Lorem</span>
      <h5>กระเป๋าสาน</h5>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
      <div class="b-details">
        <div class="d-flex align-items-center">
          <img class="mr-3 img-coin" src="assets/images/coin.png" style="width: 16px;">
          <b>2 X 400</b>
          <div class="btn-group ml-auto">
            <button type="button" id="btnIncrese" class="btn btn-plus"><b class="text-gradient">+</b></button>
            <input type="number" id="txtNum" class="btn" value="1" readonly>
            <button type="button" id="btnDecrese" class="btn btn-delete disabled"><b class="text-gradient">-</b></button>
          </div>
        </div>
        <p>คุณต้องใช้คะแนนทั้งหมด 800 คะแนน</p>
        <button type="button" class="btn-gradient mb-1">แลกสินค้า</button>
      </div>
    </div>

  </div>
  <!-- end #content -->
</body>

</html>