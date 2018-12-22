<?php
require_once ("koneksi.php");
?>
<h2>tabel admin</h2>
 <table border="1">
 <tr>
 	<td>idcat</td>
 	<td>namakategori</td>
 	
 </tr>
 <?php
 //perulangan

 $query = mysqli_query($con, "SELECT *from kategori");
 while($record = mysqli_fetch_array($query)){
 ?>
 <tr>
 	<td><?php echo $record["id_kategori"];?></td>
 	<td><?php echo $record["nama_kategori"];?></td>
 	
 </tr>
<?php
}
?>
 </table>