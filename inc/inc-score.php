<div class="box-barscore">
  <div class="box-score">
    <!-- ปุ่มออกจากเกมเห็นแค่หน้าแรก -->
    <a href="game.php" class="I-back home-game"  onclick="if (confirm('ต้องการออกจากเกมใช่หรือไม่?')){return true;}else{event.stopPropagation();event.preventDefault();};">
      <img src="assets/images/I-back.png" alt="">
    </a>
    <!-- ปุ่มออกจากเกมเห็นแค่หน้าแรก -->

    <a href="javascript:history.back()" class="I-back" data-role="none">
      <img src="assets/images/I-back.png" alt="">
    </a>
    <div class="b-coin">
      <img class="bg-coin" src="assets/images/game1/effect-coin.png">
      <img src="assets/images/game1/coin.png">
    </div>
    <div class="b-coin-text">
      <h1>9,999</h1>
      คะแนน
    </div>
  </div>
  <a href="game1.php" class="-setup btn-home">
    <img src="assets/images/game1/home.png">
  </a>
  <div class="-setup" id="setup">
    <img src="assets/images/game1/setup.png">
    <ul class="--dropdown">
      <li>
        <div class="-sound"></div>
      </li>
      <li>
        <img src="assets/images/game1/way.png" data-fancybox="" data-src="#how-to-play">
      </li>
    </ul>
  </div>
</div>

<!--  popup -->
<div id="how-to-play" class="popup-style" style="display: none; max-width: 500px;">
  <div class="-popup" style="width: auto;">
    <h3 class="head-style">วิธีการเล่นเกม</h3>
    <div class="-scroll">
      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
      standard dummy text ever since the 1500s, when an Lorem Ipsum is simply dummy text of the printing and typesetting
      industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an Lorem Ipsum is
      simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
      text ever since the 1500s, when an Lorem Ipsum is simply dummy text of the printing and typesetting industry.
      Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
    </div>
    <button type="button" class="btn-style" data-fancybox-close>ตกลง</button>
  </div>
</div>
<!-- end popup -->