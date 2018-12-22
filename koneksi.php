<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'berita_0390';

$con = mysqli_connect($server,$username,$password,$database);
if (mysqli_connect_errno())
	{
		echo "failed to connect mysql : ". mysqli_connect_erorr();
	}
	
	else{
		//echo "koneksi sukses";
	}
?>