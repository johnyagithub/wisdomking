<!DOCTYPE html>
<html lang="th">

<head>

  <?php include('./inc/inc-meta.php'); ?>
  <link rel="stylesheet" type="text/css" href="./assets/css/game1.css">
  <script type="text/javascript" src="./assets/js/script_game1.js"></script>
  <script type="text/javascript" src="./assets/js/custom_select.js"></script>

</head>

<body>
  <div class="game1 bg-floor">

    <?php include('./inc/inc-score.php'); ?>

    <div class="container">
      <div class="-storage">
        <h3 class="bg-head font-weight-bold text-primary">สมุดบันทึก</h3>
        <div class="btn-group mt-3" role="group">
          <a href="game1-storage.php" class="btn btn-secondary">กระเป๋า</a>
          <a href="game1-item.php" class="btn btn-secondary">ไอเทม</a>
          <a href="game1-herbs.php" class="btn btn-secondary active">คลังสมุนไพร</a>
        </div>
        <div class="--filter">
          <div class="custom-select" data-action="type">
            <select>
              <option value="all">ทั้งหมด</option>
              <option value="Medicine" img="icon1.png">ยารักษาโรค</option>
              <option value="MixColors" img="icon2.png">ผสมสี</option>
              <option value="FabricDye" img="icon3.png">สีย้อมผ้า</option>
            </select>
          </div>
          <div class="custom-select" data-action="sort">
            <select>
              <option>เรียงตาม</option>
              <option value="001">ชื่อ</option>
              <option value="002">ประเภท</option>
            </select>
          </div>
        </div>

        <div class="grid-storage -scroll -item">
          <div class="item have" data-type="Medicine">
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img2.png">
            </a>
          </div>
          <div class="item have" data-type="MixColors">
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img3.png">
            </a>
          </div>
          <div class="item have" data-type="FabricDye">
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img1.png">
            </a>
          </div>
          <div class="item  have" data-type="Medicine">
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img4.png">
            </a>
          </div>
          <div class="item have" data-type="Medicine">
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img5.png">
            </a>
          </div>
          <div class="item have" data-type="Medicine">
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img6.png">
            </a>
          </div>
          <div class="item have" data-type="MixColors">
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img7.png">
            </a>
          </div>
          <div class="item have" data-type="Medicine">
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img8.png">
            </a>
          </div>
          <div class="item have" data-type="MixColors">
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img9.png">
            </a>
          </div>
          <div class="item have" data-type="Medicine">
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img2.png">
            </a>
          </div>
          <div class="item" data-type="MixColors">
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img3.png">
            </a>
          </div>
          <div class="item" data-type="FabricDye">
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img1.png">
            </a>
          </div>
          <div class="item" data-type="Medicine">
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img4.png">
            </a>
          </div>
          <div class="item" data-type="Medicine">
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img5.png">
            </a>
          </div>
          <div class="item" data-type="Medicine">
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img6.png">
            </a>
          </div>
          <div class="item have" data-type="MixColors">
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img7.png">
            </a>
          </div>
          <div class="item" data-type="Medicine">
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img8.png">
            </a>
          </div>
          <div class="item have" data-type="MixColors">
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img9.png">
            </a>
          </div>
          <div class="item" data-type="Medicine">
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img2.png">
            </a>
          </div>
          <div class="item" data-type="MixColors">
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img3.png">
            </a>
          </div>
          <div class="item" data-type="FabricDye">
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img1.png">
            </a>
          </div>
          <div class="item" data-type="Medicine">
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img4.png">
            </a>
          </div>
          <div class="item" data-type="Medicine">
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img5.png">
            </a>
          </div>
          <div class="item" data-type="Medicine">
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img6.png">
            </a>
          </div>
          <div class="item" data-type="MixColors">
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img7.png">
            </a>
          </div>
          <div class="item" data-type="Medicine">
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img8.png">
            </a>
          </div>
          <div class="item have" data-type="MixColors">
            <a href="game1-info.php" class="storage-herb">
              <img src="assets/images/game1/herb/img9.png">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end #content -->

  <script>
    let myAction = (active, value, name) => {
      // console.log(active + " id:" + id + " " + name);
      if (active === 'type') {
        // เมือเลือกประเภท
        if (value == 'all') {
          $(".grid-storage .item").removeClass('disabled');
        } else {
          $(".grid-storage .item").addClass('disabled');
          $(".grid-storage .item[data-type='" + value + "']").removeClass('disabled');
        }
      } else if (active === 'sort') {
        // เมื่อเลือกเรียงตาม
        alert('เรียงตาม'+name);
      }
    }
  </script>
</body>

</html>