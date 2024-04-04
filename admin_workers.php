<html>
<head>
<title>
Admin owners
</title>
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
 width: 1000px;
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
   a{
    text-decoration: none;
   }
  body{
  	background:#555;
  }
  .login{
 background-color:#00BFFF;
 text-align: center;
 width:100px;
 height:35px;
 color: #f2f2f2;
 border-radius:10px;
}
</style>
</head>
<body>
  <div class="content">
<?php
include 'dataconnect.php'; 
include 'admin_home3.php';
?>
<table>
<tr><td colspan="3"><font size="7" color="red"><a href="admin_workeradd.php">+</a></font></tr>
  <tr>
  <td>Worker id</td>
<td>Worker name</td>
<td>Contact Number</td>
</tr>
<?php
$p=1;
$sql=$conn->query("select * from worker");
if($sql->num_rows >0)
{
While($row=mysqli_fetch_assoc($sql))
{
echo '<form>';
 $wid=$row['wid'] ;
echo '<td>'.$wid.'</td>';
echo '<td>'. $row['wname'].'</td>';
echo '<td>'. $row['wcno'].'</td>';


echo '<td class="login"><a href="admin_workerview.php?id='.$p.'&name='.$wid.'">View</td>';
echo '<td class="login"><a href="admin_workerdel.php?id='.$p.'&name='.$wid.'">Delete</td></tr>';
}
}
echo'</form>';
?>
</body>
</html>
