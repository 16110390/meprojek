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
<h3>TABEL Admin</h3>

<form name="tambahadmin" action="tambahadmin.php"
method="post" >
<input type="submit" class="btn btn-lg btnprimary"
value="Tambah">
 </form>


 <table cellpadding="0" cellspacing="0" border="1px" class="table">
<thead>
<tr bgcolor="#000033">
<th><CENTER style="">
<span class="style1">ID Admin</span></th>
<th><CENTER style="">
<span class="style1">Username</span></th>
<th><CENTER style="">
<span class="style1">Password</span></th>


</tr>
</thead>
<tbody>
<?php
$query = mysqli_query($con,"SELECT *FROM admin");
while ($record =mysqli_fetch_array($query)) {
?>
<tr class="active">

<td> <CENTER style=""><?php echo$record['id_admin']; ?></td>

<td> <?php echo $record['username'];
?>
</td>
<td> <?php echo $record['password'];
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