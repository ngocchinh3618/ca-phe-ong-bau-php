<?php 
session_start();
ob_start();
include("lib.php");
$sp =new sanpham;

if(isset($_POST['Button']))
{
	$kt=0;
	for($i=0;$i<count($_SESSION['giohang']);$i++)
	{
		if($_POST['id']==$_SESSION['giohang'][$i]['id'])
		{
			$_SESSION['giohang'][$i]['soluong']+=$_POST['soluong'];
			$kt=1;
		}
	}
	
	if($kt==0)
	{
		$kq=$sp->chitiet($_POST['id']);
		// $kq=[
  //   {
  //     id:2,
  //     ten:'Ca phe den',
  //     gia:20000
  //   }
  // ]
		$d=mysqli_fetch_array($kq);
		//$d= {
			//     id:2,
			//     ten:'Ca phe den',
			//     gia:20000
			//   }
		$i=count($_SESSION['giohang']);
		//kt=0 => $_SESSION['giohang'] = [] => count($_SESSION['giohang']) = 0
		$_SESSION['giohang'][$i]['id']=$d['id'];
		$_SESSION['giohang'][$i]['ten']=$d['ten'];
		$_SESSION['giohang'][$i]['gia']=$d['gia'];
		$_SESSION['giohang'][$i]['soluong']=$_POST['soluong'];
		$_SESSION['giohang'][$i]['hinh']=$d['hinh'];
			// [
			// 	[
			// 		'id'=> 2
			// 		'ten'=>'cafe den'
			// 		'gia'=>
			// 	]
			// ]
	}
	header("location:../../?key=chitiet&idsp={$_POST['id']}");
}

if(isset($_GET['xoa']))
{
	for($i=$_GET['xoa'];$i<count($_SESSION['giohang'])-1;$i++)
	{
		$_SESSION['giohang'][$i]=$_SESSION['giohang'][$i+1];
	};

	unset($_SESSION['giohang'][$i]);
	
	header("location:../../?key=giohang");
	
}

if(isset($_POST['capnhat']))
{
	for($i=0;$i<count($_SESSION['giohang']);$i++)
		$_SESSION['giohang'][$i]['soluong']=$_POST['SL'.$i];

	header("location:../../?key=giohang");
}

if(isset($_POST['myBBtn']))
{
	$kq = $sp->add($_POST);
	if($kq)
		header("location:../../?key=trangchu");
	else echo $kq;
}


if(isset($_POST['name']))
{
	$user=$_POST['name'];
	$kq=$sp->check('ten',$user);
	if(mysqli_num_rows($kq)>0)
	{
		echo "co";
	}
	else if($user == '')
	{
		echo "hoa";
	}
	else
	{
		echo "khong";
	}
}

if(isset($_POST['email']))
{
	$user=$_POST['email'];
	$kq=$sp->check('email',$user);
	if(mysqli_num_rows($kq)>0)
	{
		echo "co";
	}
	else if($user == '')
	{
		echo "hoa";
	}
	else
	{
		echo "khong";
	}	
}

if(isset($_POST['psw']))
{
	$user=$_POST['psw'];
	if($user == '')
	{
		echo "hoa";
	}
	else
	{
		echo "khong";
	}
}


if(isset($_POST['phoneNumber']))
{
	$user=$_POST['phoneNumber'];
	$kq=$sp->check('phone',$user);
	if(mysqli_num_rows($kq)>0)
	{
		echo "co";
	}
	else if($user == '')
	{
		echo "hoa";
	}
	else
	{
		echo "khong";
	}
}
?>