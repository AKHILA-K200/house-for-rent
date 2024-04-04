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
$f=0;
$v=0;
$p=1;
?>
<table>
 <tr><td>Advertisement no</td>
<td>Name</td>
<td>Tenant id</td>
</tr>
<?php
$sql=$conn->query("select * from advertisement where apornot='1'and num like '$s%'");
if($sql->num_rows >0)
{
While($row=mysqli_fetch_assoc($sql))
{
echo '<form>';
  $num=$row['num'];

echo '<tr><td>'. $num.'</td>';
echo '<td>'. $row['oname'].'</td>';
$st=$conn->query("select * from owner where num='$num'");
if($st->num_rows >0)
{
  while($sts=mysqli_fetch_assoc($st))
  {
    $cno=$sts['no'];
  }
  echo '<td>'.$cno .'</td>';
}
else
{
echo '<td>NULL</td>';
}


echo '<td><a href="sviewadv.php?id='.$num.'&name='.$no.'" >VIEW</td>';
echo '<td><a href="admin_ownerdel.php?id='.$row['no'].'">DELETE</td></tr>';
}
$f=1;
}
else
{
$sql=$conn->query("select * from advertisement where apornot='1'and oname like '$s%'");
if($sql->num_rows >0)
	While($row=mysqli_fetch_assoc($sql))
{
echo '<form>';
  $num=$row['num'];

echo '<tr><td>'. $num.'</td>';
echo '<td>'. $row['oname'].'</td>';
$st=$conn->query("select * from owner where num='$num'");
if($st->num_rows >0)
{
  while($sts=mysqli_fetch_assoc($st))
  {
    $cno=$sts['no'];
  }
  echo '<td>'.$cno .'</td>';
}
else
{
echo '<td>NULL</td>';
}


echo '<td><a href="sviewadv.php?id='.$num.'&name='.$no.'" >VIEW</td>';
echo '<td><a href="admin_ownerdel.php?id='.$row['no'].'">DELETE</td></tr>';
}
$v=1;
}
if(($f=='0')&&($v=='0'))
{
	echo"<tr><td>no such user exist</td></tr>";
}

echo'</form>';
?>
</table></div></body></html>