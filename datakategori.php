 <?php
require_once ("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>

<style type="text/css">
<!--.style1 {color: #FFFFFF}-->
</style>
</head>

<body>
<h3>TABEL KATEGORI</h3>

<form name="tambahkategori" action="tambahkategori.php" method="post" >
<input type="submit" class="btn btn-lg btnprimary" value="Tambah">
 </form>


 <table cellpadding="0" cellspacing="0" border="1px" class="table">
<thead>
<tr bgcolor="#000033">
<th><CENTER style="">
<span class="style1">ID Kategori</span></th>
<th><CENTER style="">
<span class="style1">nama kategori</span></th>



</tr>
</thead>
<tbody>
<?php
$query = mysqli_query($con,"SELECT *FROM kategori");
while ($record =mysqli_fetch_array($query)) {
?>
<tr class="active">


<td> <?php echo $record['id_kategori'];
?>
</td>
<td> <?php echo $record['nama_kategori'];
?></td>

</tr>
<?php } ?>
</tbody>
</table>
</body>

</html>
<?php
mysqli_close($con);
?>