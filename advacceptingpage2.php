<html>
<head>
<title>
Advertisement approving</title>
</head>
<body>
<?php
include'dataconnect.php';
include'admin_notification.php';
$nid=$_GET['id'];
$sql=$conn->query("select * from notification where notid='$nid'");

if($sql->num_rows >0)
{
While($row=mysqli_fetch_assoc($sql))
{
$userid=$row['no'];
$advno=$row['advno'];
$ora=$row['ora'];
}
}
	$conn->query("update advertisement set apornot=1 where no='$userid' and advno='$advno'");
$sql=$conn->query("select * from owner where no='$userid' ");
$res=$sql->num_rows;
if($res >0)
{
	While($row=mysqli_fetch_assoc($sql))
	{
		$email=$row['email'];
	}
}
$nottype="advacc";
$ono=$userid;
$user=$name;
$ora="a";
$type="advertisement accepted";
notifyadvacc($type,$name,$advno,$nottype,$ora,$ono);
$to=$email;
$subject="house for rent";
$txt="your advertisement is accepted";
$headers="from:akhiakhi0566@gmail.com"."\n";
mail('$to','$subject','$txt','$headers');
$p=1;
?>
echo'<script>window.alert("Advertisement accepted successfully!!");
			             window.location.href="admin_notifydisplay.php?id='.$p.'";</script>'; 
</body>
</html>
