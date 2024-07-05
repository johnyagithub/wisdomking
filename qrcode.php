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
    
    <a href="javascript:history.back()" class="I-back" data-role="none">
      <img src="assets/images/I-back.png" alt="">
    </a>
    <div class="box-qr">
      <h5 class="font-weight-light">Scan QR Code of the device</h5>
      <div class="square">
        <img src="assets/images/img-qr.png">
        <div class="scan">
        </div>
      </div>
      <!-- <button type="button" class="btn-gradient">สแกน QR</button> -->
      <a class="btn-gradient text-center" data-fancybox fancybox-video href="https://www.youtube.com/watch?v=UIHPIESyIXM&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0&amp;autohide=1">สแกน QR</a>
    </div>

  </div>
  <!-- end #content -->
</body>

</html>