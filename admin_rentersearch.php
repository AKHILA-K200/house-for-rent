<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/linkbut.css">
 <link rel="stylesheet" type="text/css" href="css/tacen.css">

 
</head>
<body>
  <div class="content">
<?php
echo '<form>';
include 'dataconnect.php'; 
include 'admin_home2.php';
$s=$_POST['search'];

?>

</head>
<body>
<table>
	<tr><td colspan="4" align="center">Searched Results are:</td></tr>
<?php
$f=0;
$v=0;
$p=1;
$sql=$conn->query("select * from owner where name like '%$s%' and ora='r'");
if($sql->num_rows >0)
{
	echo' <tr><td>No</td>
<td colspan="3">Name</td></tr>';
While($row=mysqli_fetch_assoc($sql))
{

echo '<tr><td>'. $row['no'].'</td>';
echo '<td>'. $row['name'].'</td>';

echo '<td><a href="admin_ownerview.php?id='.$p.'&name='.$row['no'].'" >VIEW</td>';
echo '<td><a href="admin_ownerdel.php?id='.$row['no'].'">DELETE</td></tr>';
}
$f=1;
}
else 
{
$sl=$conn->query("select * from owner where no like '%$s%' and ora='r'");
if($sl->num_rows >0)
{
	echo' <tr><td>No</td>
<td colspan="3">Name</td></tr>';
While($row=mysqli_fetch_assoc($sl))
{

echo ' <td>'. $row['no'].'</td>';
echo '<td >'. $row['name'].'</td>';

echo '<td><a href="admin_ownerview.php?id='.$p.'&name='.$row['no'].'" >VIEW</td>';
echo '<td><a href="admin_ownerdel.php?id='.$row['no'].'">DELETE</td></tr>';
}
$v=1;
}
}

if(($f=='0')&&($v=='0'))
{
	echo"<tr><td>no such user exist</td></tr>";
}
echo'</form>';
?>
</body>
</html>