<html>
<head>
<title>
Admin owners
</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/linkbut.css">

<style>
	table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;


}

th {
  height: 50px;
}
.hei{
	height:100px;
}
.content {
  max-width: 1000px;
  margin: auto;
  background: white;
  padding: 10px;
  }
  .error{
   color:red;
   }
    input
   {
   	border:0;
   }
  body{
  	background:#555;
  }
  .login{
 background-color:blue;
 text-align: center;
 width:100px;
 height:35px;
 color: #f2f2f2;
 border-radius: 10px;
}
</style>
</head>
<body>
  <div class="content">
<?php
echo '<form>';

include 'dataconnect.php'; 
include 'admin_home3.php';
$wid=$_GET['name'];
?>
<table>
<tr><td colspan="3"><font size="7" color="red"><a href="admin_workeradd.php">+</a></font></tr>
  <tr>
  <td>Worker id</td>
<td>Worker name</td>
<td>Worker address</td>

<td>Assigned work</td>

</tr>
<?php
$sql=$conn->query("select * from worker where wid='$wid'");
if($sql->num_rows >0)
{
While($row=mysqli_fetch_assoc($sql))
{
  $wid=$row['wid'];
echo '<td>'.$wid .'</td>';
echo '<td>'. $row['wname'].'</td>';
echo '<td>'. $row['wcur'].'</td>';

$mid=$row['mid'];
echo '<td>'.$mid .'</td>';

$p=1;
echo '<td class="login"><a href="admin_workerdel.php?id='.$p.'&name='.$wid.'">Delete</td></tr>';
}
}
$p=1;
echo'</form>';
?>


</body>
</html>
