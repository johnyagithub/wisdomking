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
    
    <a href="javascript:history.back()" class="I-back back-color" data-role="none">
      <img src="assets/images/I-back.png" alt="">
    </a>
    <div class="box-game">
      <div class="container">
        <h4 class="text-center pt-4">เกมส์</h4> 
        <div class="box-game-list">

          <a href="game1.php">
            <div class="b-game-list" style="background-image: url(assets/images/game1/cover.jpg);">
              <span>New</span>
              <div class="game-text">
                <span>Lorem</span>
                <h4>GAME 1</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
            </div>
          </a>
          
          <a href="#">
            <div class="b-game-list" style="background-image: url(https://via.placeholder.com/700x240/d7d7d7/ffffff);">
              <div class="game-text">
                <span>Lorem</span>
                <h4>GAME 2</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
            </div>
          </a>
          
          <a href="#">
            <div class="b-game-list" style="background-image: url(https://via.placeholder.com/700x240/d7d7d7/333333);">
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
</body>

</html>