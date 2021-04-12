<?php
  $count = 0;
?>
<script>
  var arr = new Array();
</script>
<div class="header1">
  <img src="./public/images/sp/banner-slider1.jpg" alt="">
</div>
<div class="container main">
  <div class="tiltle">
    <h2>KHÁM PHÁ THỨC UỐNG</h2>
    
  </div>
  <div id="myBtnContainer">
    <button class="btn active" onclick="filterSelection('all')"> Show all</button>
    <?php
      $result = $sp->menu();
      // $result=[
      //   {
      //     idMenu:1,
      //     tenMenu:'cafe'
      //   },
      //   {
      //     idMenu:2,
      //     tenMenu:'Latte đá'
      //   },
      // ]
      while($row = mysqli_fetch_array($result))
      {
    ?>
    <script>
      arr.push("<?= $row['tenMenu']; ?>");
      // ['cafe','Latte đá',....]
    </script>
    <button class="btn"  onclick="filterSelection(arr[<?= $count ?>]);"><?= $row['tenMenu'] ?></button>
      <?php $count++;
    } ?>
  </div>
  
  <!-- Portfolio Gallery Grid -->
  
  <div class="row">
    <?php
      $result2 = $sp->sanpham();
      // $result2=[
      //   {
      //     ten:"cafe",
      //     gia:"20000"
      //   },
      //   {
      //     ten:"cafe2",
      //     gia:"20000"
      //   },
      // ]
      // $row2=mysqli_fetch_array($result2);
      // mysqli_fetch_array se lay obj tiep theo
      while($row2 = mysqli_fetch_array($result2))
      {
    ?>
    <!-- x= [
      <div class="column cafe"></div>,
      <div class="column latte da"></div>,
      <div class="column"></div>,
      <div class="column"></div>,
      <div class="column"></div>,
      <div class="column"></div>
    ] -->
    <div class="column <?= $row2['loai'] ?>" class="content__produce">
      <div class="item1 content">
        <a href="?key=chitiet&idsp=<?= $row2['id'] ?>">
          <!-- <a href="#"> -->
          <img src="<?= $row2['hinh'] ?>" style="width:100%">
        <h3><b><?= $row2['ten'] ?></b></h3>
        <p><?= $row2['gia'] ?></p>
        </a>
      </div>
    </div>
    <?php } ?>
  <!-- END GRID -->
  </div>
  
  <!-- END MAIN -->
  </div>