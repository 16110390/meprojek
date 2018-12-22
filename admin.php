<?php 
require_once("koneksi.php");
 ?>

 <h2>tabel admin</h2>
 <table border="1">
 <tr>
 	<td>id</td>
 	<td>user</td>
 	<td>pass</td>
 </tr>
 <?php
 //perulangan

 $query = mysqli_query($con, "SELECT *from admin");
 while($record = mysqli_fetch_array($query)){
 ?>
 <tr>
 	<td><?php echo $record["id_admin"];?></td>
 	<td><?php echo $record["username"];?></td>
 	<td><?php echo $record["password"];?></td>
 </tr>
<?php
}
?>
 </table>