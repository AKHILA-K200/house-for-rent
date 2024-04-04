<html>
<head>
<title>accepting page</title>
<link rel="stylesheet" type="text/css" href="css/complete.css">
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
 border-radius: 4px;
}
</style>
</head>
<body>
	<div class="content">
<?php
ini_set('display_errors',1);
   error_reporting(E_ALL & ~E_STRICT);
include 'dataconnect.php';
include 'admin_home3.php';
$nid=$_GET['name'];

$sql=$conn->query("select * from notification where notid='$nid'");
if($sql->num_rows >0)
{
	While($row=mysqli_fetch_assoc($sql))
	{
		$userid=$row['no'];
    $count=$row['count'];
	}
}
if($count==0)
{
  $conn->query("update notification set count=1 where notid='$nid' ");
}

?>
<table><?php
$sql=$conn->query("select * from owner where no='$userid' ");
$res=$sql->num_rows;
if($res >0)
{
?>
<tr>
<th>NAME</th>
<th>PHONE NO</th>
<th>EMAIL</th>
<th>LICENSE</th>
<th>VOTERID</th>
</tr>


<?php
while($result=mysqli_fetch_assoc($sql)){
echo'<form>';
echo" <tr><td>".$result['name']."</td>";
echo" <td>".$result['phoneno']."</td>";
echo" <td>".$result['email']."</td>";
echo" <td>".$result['license']."</td>";
echo" <td>".$result['viterid']."</td>";
$apn=$result['apornot'];
if($apn==0)
{
echo'<td><a href="acceptingpage2.php?id='.$nid.'">APPROVE</td>';
echo'<td><a href="rejectingpage.php?id='.$nid.'">REJECT</td></tr>';
echo"</tr>";
}
else
{
echo'<td><a href="deletingnotify.php?id='.$nid.'">Delete</td></tr>';
 
}

}

}
else
{
echo "<td>view</td></tr>";
}
echo"</form>";
?>
</table>
</div>
</body>
</html>
