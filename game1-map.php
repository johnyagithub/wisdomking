<!DOCTYPE html>
<html lang="th">

<head>

  <?php include('./inc/inc-meta.php'); ?>
  <link rel="stylesheet" type="text/css" href="./assets/css/game1.css">
  <script type="text/javascript" src="./assets/js/script_game1.js"></script>

</head>

<body>
  <div class="game1 bg-map">

    <?php include('./inc/inc-score.php'); ?>

    <div class="container">
      <div class="box-herb" style="width: 250px;">
        <div class="img-herb" data-fancybox="" data-src="#popup-content">
          <img class="effect" src="assets/images/game1/effect.png">
          <img src="assets/images/game1/herb/img1.png">
        </div>
        <span>กันเกรา</span>
      </div>
    </div>
  </div>
  <!-- end #content -->

  <!--  popup -->
  <div id="popup-content" class="popup-style" style="display: none; max-width: 500px;">
    <div class="-popup">
      <h3 class="head-style" style="letter-spacing: 5px;">FOUND IT!</h3>
      <div class="box-herb">
        <div class="img-herb">
          <img class="effect" src="assets/images/game1/effect.png">
          <img src="assets/images/game1/herb/img1.png">
        </div>
      </div>
      <h3 class="mb-3 font-weight-bold">กันเกรา</h3>
      <a href="game1-storage.php" class="btn-style">เก็บ</a>
    </div>
  </div>
  <!-- end popup -->
</body>

</html>