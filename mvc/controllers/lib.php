<?php
class sanpham{
	var $link;
	protected $host = "localhost";
	protected $user = "root";
	protected $pass = "";
	protected $db = "cafe";
	
	function __construct()
	{
		$this->link=mysqli_connect($this->host,$this->user,$this->pass);
		mysqli_select_db($this->link,$this->db);
		mysqli_query($this->link,"set names 'utf8'");
	}

	public function menu()
	{
		$query = "SELECT * FROM menu";
		return mysqli_query($this->link,$query);
	}

	public function sanpham()
	{
		$query = "SELECT * FROM sanpham";
		return mysqli_query($this->link,$query);
	}

	public function chitiet($idsp)
	{
		$query = "SELECT * FROM sanpham where id = $idsp";
		return mysqli_query($this->link,$query);
	}

	public function relate($idsp)
	{
		$query = "SELECT * FROM sanpham where id != $idsp and idMenu = (SELECT idMenu FROM sanpham where id = $idsp) limit 0,4";
		return mysqli_query($this->link,$query);
	}

	public function check($a,$b)
	{
		$query="select * from user where $a ='$b'";
		return mysqli_query($this->link,$query);
	}

	public function add($post)
	{
		$query="insert into user values('{$post['name']}','{$post['email']}','{$post['psw']}',{$post['phoneNumber']},NULL)";
		return mysqli_query($this->link,$query);
	}

}
?>