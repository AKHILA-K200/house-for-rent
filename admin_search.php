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
include 'dataconnect.php'; 
include 'admin_home3.php';
echo '<form>';
?>

</head>
<body>
<table><tr><td bgcolor="white" border="2"><input type="text" name="search" placeholder="search here"></td><td><button name="sear" class="login">Search</button></td></tr>
<?php
if(isset($_REQUEST['sear']))

{
$s=$_GET['search'];
$sql=$conn->query("select * from owner where name='$s'");
if($sql->num_rows >0)
{
While($row=mysqli_fetch_assoc($sql))
{
echo '<form>';
echo ' <td>'. $row['no'].'</td>';
echo '<td>'. $row['name'].'</td>';

echo '<td><a href="admin_ownerview.php?id='.$p.'&name='.$row['no'].'" >VIEW</td>';
echo '<td><a href="admin_ownerdel.php?id='.$row['no'].'">DELETE</td></tr>';
}
}
$sql=$conn->query("select * from owner where no='$s'");
if($sql->num_rows >0)
{
While($row=mysqli_fetch_assoc($sql))
{
echo '<form>';
echo ' <td>'. $row['no'].'</td>';
echo '<td>'. $row['name'].'</td>';

echo '<td><a href="admin_ownerview.php?id='.$p.'&name='.$row['no'].'" >VIEW</td>';
echo '<td><a href="admin_ownerdel.php?id='.$row['no'].'">DELETE</td></tr>';
}
}
}
?>
</body>
</html>