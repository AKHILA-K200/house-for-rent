<html>
<head>
<title>accepting page</title>
</head>
<body>
<?php
include 'dataconnect.php';
$uname=$_SESSION['uname'];
$upass=$_SESSION['upass'];
$res=$conn->query("select * from login where username='$uname' and pasword='$upass'");
if($res->num_rows >0)
{
	while($row=mysqli_fetch_assoc($res))
	{
		$userid=$row['no'];
	}
}
?>
<table><?php

$sql=$conn->query(" select * from owner where no='$userid' ");
if($sql->num_rows>0)
{
?>
<td></td><td></td>
<td>NAME:</td>
<td>PHONE NO</td>
<td>EMAIL</td>
<td>LICENSE</td>
<td>VOTERID</td>
<td>CURRENT ADDRESS</td>
<td>CITY</td>
<td>DISTRICT</td>
<td>PINCODE</td>



<?php
while($result=mysqli_fetch_assoc($sql)){
	echo'<form>';
echo" <tr><td>".$result['name']."</td>";
echo" <td>".$result['phoneno']."</td>";
echo" <td>".$result['email']."</td>";
echo" <td>".$result['license']."</td>";
echo" <td>".$result['viterid']."</td>";
echo" <td>".$result['curaddress']."</td>";
echo" <td>".$result['city']."</td>";

echo" <td>".$result['disno']."</td>";
echo" <td>".$result['pcode']."</td></tr>";

echo"<tr><td>".include  'viewadv.php'."</td></tr>";

}
echo'<tr><td><a href="renterediting.php?id='.$row['no'].'">EDIT</a></td></tr>';
echo'<tr><td><a href="ownerhome.php">Back to home</a></td></tr>';
echo'</form>';
}
?>

</table>
</body>
</html>

