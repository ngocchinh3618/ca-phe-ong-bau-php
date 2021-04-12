<?php
    include "./mvc/views/template/header.php";
	if(!isset($_SESSION['giohang']))$_SESSION['giohang']=array();
?>
<div class="contain" style="min-height:560px">
  <?php
    $key = isset($_GET['key'])? $_GET['key']:'';
    switch($key){
        case 'thuonghieu':include "./mvc/views/thuonghieu.php";break;
        case 'sp':include "./mvc/views/sanpham.php";break;
        case 'chitiet':include "./mvc/views/chitiet.php";break;
        case 'giohang':include "./mvc/views/giohang.php";break;
        case 'dangky':include "./mvc/views/dangky.php";break;
        default: include "./mvc/views/trangchu.php";
    }
  ?>
</div>
<?php
    include "./mvc/views/template/footer.php";
?>