<html>
<head>
<title>Deleting page</title>
</head>
<body>
<?php
include 'dataconnect.php';

$userid=$_GET['id'];
?>
<table><?php


$res=$conn->query("select * from advertisement where no='$userid'");

if($res->num_rows>0)
{
while($result=mysqli_fetch_assoc($res)){

$cno=$result['cno'];
if($cno==1)
             break;
}
}
$p=1;
echo $cno;
if($cno=='1')
{
	echo'<script>window.alert("Tenant exist here.so deletion only possible after tenant leave!!");
			             window.location.href="admin_owner.php?id='.$p.'";</script>'; 

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
echo'<script>window.alert("Owner delete successfully!!");
			             window.location.href="admin_owner.php?id='.$p.'";</script>';
			            
}




?>
</table>
</body>
</html>
