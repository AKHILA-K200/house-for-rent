<html>
<head>
<title>advertisement submit</title>
</head><body>
<?php
include'dataconnect.php';
include 'admin_notification.php';
$userid=$_GET['id'];
$sql=$conn->query("select * from owner where no='$userid'");
if($sql->num_rows >0)

{
while($res=mysqli_fetch_assoc($sql))
{
	$name=$res['name'];
	$ora=$res['ora'];
}
}
//$dob=$_POST['dob'];
//$cur=$_POST['cur'];
//$ocity=$_POST['ocity'];
//$odist=$_POST['odist'];
//$opin=$_POST['opin'];
//$desg=$_POST['desg'];
$type=$_POST['tp'];
$pcity=$_POST['city'];
$pdist=$_POST['district'];
$rent=$_POST['rent'];

$bhk=$_POST['bhk'];

$facing=$_POST['facing'];
$par=$_POST['pkg'];


$details=$_POST['od'];

$fur=$_POST['fy'];
$sy=$_POST['shy'];
$sql=$conn->query("select * from advertisement whre no='$userid'");
if($sql->num_rows >0)
{
	$conn->query("update advertisement set typeof='$type',advno='1',bhk='$bhk',facing='$facing',fy='$fur',rent='$rent,adno='1',pkno='$par'");
	$conn->query("insert into address(adno,no,city,disno)values('1','$userid','$pcity','$pdist'");
}
else
{
	echo $userid;
	echo $type;
	echo $bhk;
	echo $facing;
	echo $fur;
	echo $rent;
	echo $par;

$conn->query("insert into advertisement(no,typeof,advno,bhk,facing,fy,rent,adno,pkno)values('$userid','$type','1','$bhk','$facing','$fur','$rent','1','$par')");
$conn->query("insert into address(adno,no,city,disno)values('1','$userid','$pcity','$pdist'");
}
$type="creation of advertisement for renter";
$nottype="adv";
$advno='1';
notifyadv($type,$user,$no,$nottype,$ora,$advno);
echo'<script>window.alert("Advertisement created successfully!!");
			             window.location.href="renter_home3.php?id='.$userid.'";</script>';


?>
</body>
</html>