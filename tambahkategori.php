<?php
require_once ("koneksi.php");
?>

<!DOCTYPE html>
<html>
<head>

<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>

<body>
<h3>Tambah Kategori</h3>
<form action="" method="post">
<table width="200" border="0">
<tr>
<td>idkategori</td>
<td><input name="id_kategori" type="text"></td>
</tr>
 <tr>
<td>nama</td>
<td><input name="nama_kategori" type="text"></td>
</tr>
<tr>
<td colspan="2"><input name="submit" type="submit" value="Insert"></td>
</tr>
</table>

</form>
</body>

</html>
<?php
if(isset($_POST['submit'])){

$query="insert into Kategori (id_kategori,
nama_kategori) values(".$_POST['id_kategori']."','".$_POST['nama_kategori']."')
";

//eksekusi query
$hasil=mysqli_query($con,$query) or die (mysqli_error($con));
?>

<script>
alert("data sukses ditambahkan");
window.location='dataakategori.php';</script>
<?php
}
?>
