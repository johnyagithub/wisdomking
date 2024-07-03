<!DOCTYPE html>
<html lang="th">

<head>

  <?php include ('./inc/inc-meta.php'); ?>

</head>

<body>

  <!-- begin #content -->
  <div class="divHeader">
    <header
      style="transition: .5s;background: #fff;height: 50px;position: fixed;top: 0px;left: 0px;z-index: 99;box-shadow: 0 0 10px rgb(0 0 0 / 15%);width: 100%;">
    </header>
  </div>
  <?php include ('./inc/inc-menu-bottom.php'); ?>
  <div class="box-body">

    <div class="box-qr">
      <h5 class="font-weight-light">Scan QR Code of the device</h5>
      <div class="square">
        <img src="assets/images/img-qr.png">
        <div class="scan">
        </div>
      </div>
      <button type="button" class="btn-gradient">สแกน QR</button>
    </div>

  </div>
  <!-- end #content -->

  <?php include ('./inc/inc-script.php'); ?>
</body>

</html>