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
        <h4 class="text-center pt-4 text-white text-line1">ลำดับคะแนน</h4>
      </div>

      <div class="box-tabmenu">
        <a href="#" class="active">All</a>
        <a href="#">Game 1</a>
        <a href="#">Game 2</a>
        <a href="#">Game 3</a>
      </div>

      <div class="box-order123">

        <div class="b-orderscore">
          <img src="assets/images/img-profile01.jpg" alt="">
          <h5 class="text-line1">Lorem</h5>
          <p class="text-line1"><b>9,999</b> คะแนน</p>
        </div>
        <div class="b-orderscore">
          <img src="assets/images/img-profile02.jpg" alt="">
          <h5 class="text-line1">Lorem</h5>
          <p class="text-line1"><b>999</b> คะแนน</p>
        </div>
        <div class="b-orderscore">
          <img src="assets/images/img-profile03.jpg" alt="">
          <h5 class="text-line1">Lorem</h5>
          <p class="text-line1"><b>99</b> คะแนน</p>
        </div>

      </div>
      <div class="box-orderscore">

        <div class="b-orderscore">
          <img src="assets/images/img-profile01.jpg" alt="">
          <h5 class="text-line1">Lorem</h5>
          <p class="text-line1"><b>9,999</b> คะแนน</p>
        </div>
        <div class="b-orderscore down">
          <img src="assets/images/img-profile02.jpg" alt="">
          <h5 class="text-line1">Lorem</h5>
          <p class="text-line1"><b>999</b> คะแนน</p>
        </div>
        <div class="b-orderscore">
          <img src="assets/images/img-profile03.jpg" alt="">
          <h5 class="text-line1">Lorem</h5>
          <p class="text-line1"><b>99</b> คะแนน</p>
        </div>
        <div class="b-orderscore">
          <img src="assets/images/img-profile3.jpg" alt="">
          <h5 class="text-line1">Lorem</h5>
          <p class="text-line1"><b>89</b> คะแนน</p>
        </div>
        <div class="b-orderscore">
          <img src="assets/images/img-profile3.jpg" alt="">
          <h5 class="text-line1">Lorem</h5>
          <p class="text-line1"><b>79</b> คะแนน</p>
        </div>
        <div class="b-orderscore">
          <img src="assets/images/img-profile3.jpg" alt="">
          <h5 class="text-line1">Lorem</h5>
          <p class="text-line1"><b>69</b> คะแนน</p>
        </div>
        <div class="b-orderscore">
          <img src="assets/images/img-profile3.jpg" alt="">
          <h5 class="text-line1">Lorem</h5>
          <p class="text-line1"><b>59</b> คะแนน</p>
        </div>
        <div class="b-orderscore">
          <img src="assets/images/img-profile3.jpg" alt="">
          <h5 class="text-line1">Lorem</h5>
          <p class="text-line1"><b>49</b> คะแนน</p>
        </div>
        <div class="b-orderscore">
          <img src="assets/images/img-profile3.jpg" alt="">
          <h5 class="mext-line1">Lorem</h5>
          <p class="mext-line1"><b>39 </b>คะแนน</p>
        </div>

        <!-- Me -->
        <div class="b-orderscore me" data-order="99">
          <img src="assets/images/img-profile3.jpg" alt="">
          <h5 class="text-line1">Me</h5>
          <p class="text-line1"><b>9</b> คะแนน</p>
        </div>

        <div id="orderscore"></div>
      </div>
    </div>

  </div>
  <!-- end #content -->
</body>

</html>