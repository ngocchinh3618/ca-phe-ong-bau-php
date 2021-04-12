<?php
  session_start();
  include "./mvc/controllers/lib.php";
  $sp=new sanpham;
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <base href="http://localhost/ongbau.com/">
  <title>Cafe Ong Bau</title>

  <link rel="stylesheet" href="./public/css/portfolio.css">
  <link rel="stylesheet" href="./public/css/dangky.css">
  
  <link rel="stylesheet" href="./public/css/bootstrap.min.css">
  <link rel="stylesheet" href="./public/css/style.css">
  <link rel="stylesheet" href="./public/css/pro_ Espress.css">
  <link rel="stylesheet" href="./public/css/giohang.css">
  <link rel="stylesheet" href="./public/css/thuonghieu.css">
  <link rel="stylesheet" href="./public/css/trangchu.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  
  <script type="text/javascript" src="./public/javascripts/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="./public/javascripts/bootstrap.min.js"></script>
  <script type="text/javascript" src="./public/javascripts/portfolio.js"></script>
</head>
<body onload="filterSelection('all')">
  <header>
    <div class="navbar">
      <div class="logo">
        <a href="#"><img src="./public/images/index/logo.png" alt="Logo" width="130px"></a>
      </div>
      <div class="nav">
        <ul>
          <li><a href="?key=trangchu">TRANG CHỦ</a></li>
          <li><a href="?key=thuonghieu">CÂU CHUYỆN THƯƠNG HIỆU</a></li>
          <li><a href="?key=sp">SẢN PHẨM</a></li>
          <li><a href="?key=giohang">GIỎ HÀNG</a></li>
          <li><a href="?key=dangky">ĐĂNG KÝ</a></li>
        </ul>
        </div>
      </div>
  </header>