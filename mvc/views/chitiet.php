
<?php
session_start();
// if(!arr) arr = new Array();
if(!isset($_SESSION['giohang']))$_SESSION['giohang']=array();
  $result3 = $sp->chitiet($_GET['idsp']);
  // $result3=[
  //   {
  //     id:2,
  //     ten:'Ca phe den',
  //     gia:20000
  //   }
  // ]
  $row3 = mysqli_fetch_array($result3);
?>

<div class="sanpham">
  
  <div class="prd_main sanpham1" style="flex-basis: 400px" >
    <img src="<?= $row3['hinh'] ?>">
  </div>
  <div class="text sanpham1" style="flex-basis: 700px">
    <h3><b><?= $row3['ten'] ?></b></h3>
    <p><b><?= $row3['gia'] ?></b></p>
    <p><?= $row3['mota'] ?></p>
    <form name="f" method="post" action="./mvc/controllers/process.php">
    <div class="btnn add">
      <input type="text" name="soluong" size="5"  value="1">

      <input type="hidden" name="id" value="<?= $row3['id'] ?>">

      <button class="btnn" name="Button" type="submit"> Cho vào giỏ hàng <i class="fas fa-arrow-right"></i> </button> 

      <a href="?key=giohang" style="margin-left: 10px !important;"><i class="fas fa-shopping-cart"></i></a>

      <a class="btnn" href="?key=sp"> <i style="font-size:16px" class="fa">&#xf060;</i> Quay lại</a> 
      
    </div>
    </form>
  </div>
</div>
<article>
<div class="tiltle">
<h2>CÓ THỂ BẠN THÍCH</h2>
<?php 
      // print_r($_SESSION['giohang']) ;
      // echo count($_SESSION['giohang']);
?>
</div>

<div class="content__produce">
<?php
  $result4 = $sp->relate($_GET['idsp']);
  while($row4 = mysqli_fetch_array($result4))
  {
?>
<div class="item1">
  <a href="?key=chitiet&idsp=<?= $row4['id'] ?>">
    <img src="<?= $row4['hinh'] ?>">
    <h3><b><?= $row4['ten'] ?></b></h3>
    <p><?= $row4['gia'] ?></p>
  </a>
</div>
  <?php } ?>
</div>
</article>
