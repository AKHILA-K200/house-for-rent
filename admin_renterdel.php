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


$res=$conn->query("select * from owner where ono is not null");

if($res->num_rows>0)
{



	echo'<script>window.alert("Sorry Rental agreement is no expired . deletion not possible!!");
			             window.location.href="admin_owner.php?id='.$p.'";</script>'; 

}

else{
	$conn->query("delete from advertisement where no='$userid'");
	$res=$conn->query("select * from advertisement where no='userid'");
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
