
<html>
<head>
<title>single adv deleting page</title>
</head>
<body>
<?php
include 'dataconnect.php';

$userid=$_GET['id'];
$num=$_GET['name'];

$res=$conn->query("select * from advertisement where no='$userid' and num='$num'");
if($res->num_rows>0)
{

while($result=mysqli_fetch_assoc($res)){

$cno=$result['cno'];
}


}



if($cno=='1')
{
	echo'<script>window.alert("Tenant exist here.so deletion only possible after tenant leave!!");
			             window.location.href="owner_home3.php?id='.$userid.'";</script>'; 
			             
}

else{
	
	$res=$conn->query("select * from advertisement where no='userid'");
	if($res->num_rows >0)
	{
		while($rest=mysqli_fetch_assoc($res))
		{
			$num=$rest['num'];
			$conn->query("delete from image where num='$num'");
		}
	}
	$conn->query("delete from advertisement where no='$userid'");
	$conn->query("delete from address where no='$userid'");
	$conn->query("delete from account where no='$userid'");
$conn->query("delete from owner where no='$userid' ");
echo'<script>window.alert("advertisement deleted successfully!!");
			             window.location.href="admin_owner.php?id='.$userid.'";</script>';
			             echo "hello";
			            
}
?>

</table>
</body>
</html>

</table>
</body>
</html>
