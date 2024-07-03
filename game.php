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
    <a href="javascript:history.back()" class="I-back back-color" data-role="none">
      <img src="assets/images/I-back.png" alt="">
    </a>
    <div class="box-game">
      <div class="container">
        <h4 class="text-center pt-4">เกมส์</h4> 
        <div class="box-game-list">

          <a href="#">
            <div class="b-game-list" style="background-image: url(https://via.placeholder.com/700x240/d7d7d7/ffffff);">
              <span>New</span>
              <div class="game-text">
                <span>Lorem</span>
                <h4>GAME 1</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
            </div>
          </a>

          <a href="#">
            <div class="b-game-list">
              <div class="game-text">
                <span>Lorem</span>
                <h4>GAME 2</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
            </div>
          </a>

          <a href="#">
            <div class="b-game-list">
              <div class="game-text">
                <span>Lorem</span>
                <h4>GAME 3</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>

  </div>
  <!-- end #content -->

  <?php include ('./inc/inc-script.php'); ?>
</body>

</html>