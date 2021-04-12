<?php
session_start();
if(count($_SESSION['giohang'])>0)
{
  $sum = 0;
  for($i=0;$i<count($_SESSION['giohang']);$i++)
  {
    $sum += $_SESSION['giohang'][$i]['gia']*$_SESSION['giohang'][$i]['soluong'];
  }
?>

<div class="container" >

  <div class="button add">
    <div class="dathang">
      <p id="hienthi">Thành tiền: ...đ</p>
    </div>
    <button onclick='tong()'> Tinh tien </button>
  </div>
  <form method="post" action="./mvc/controllers/process.php" name="form2">
  <?php
    for($i=0;$i<count($_SESSION['giohang']);$i++)
    {
  ?>
  <div class="cards">
    <span class="hinhsp">
        <img  src='<?= $_SESSION['giohang'][$i]['hinh'] ?>' alt="">
    </span>
    <span class="tensp">
      <span><?= $_SESSION['giohang'][$i]['ten'] ?></span>
      <a href="./mvc/controllers/process.php?xoa=<?php echo $i;?>"> xóa</a>
    </span>
    <span class="giasp">
      <span><?= $_SESSION['giohang'][$i]['gia'] ?></span>
      <input type="text" size="5" name="SL<?php echo $i;?>" value="<?php echo $_SESSION['giohang'][$i]['soluong'];?>">
    </span>
    <input name="capnhat" type="submit" value="Cập Nhật">
  </div>
  <?php }?>
  </form
</div>

<div style="clear: both;"></div>
<?php }?>

<script>
  function tong(){
    document.getElementById('hienthi').innerHTML = '<?= $sum ?>'
  }
</script>