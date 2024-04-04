<html>
<head>
<title>accepting page</title>
</head>
<body>
<?php
include 'dataconnect.php';
$userid=$_GET['id'];
?>
<table>
<?php 
$res=$conn->query("select * from owner where no='$userid'"); 
if($res->num_rows >0)
{
while($result=mysqli_fetch_assoc($res)){
$name=$result['name'];
$ph=$result['phoneno'];
$email=$result['email'];
$lic=$result['license'];
$vot=$result['viterid'];
$cur=$result['curaddress'];
$city=$result['city'];
$desg=$result['desg'];
$dist=$result['disno'];
$pin=$result['pin'];
$or=$result['ora'];
}
}
echo $dist;
$res=$conn->query("select * from district where disno='$dist'"); 
if($res->num_rows >0)
{
while($result=mysqli_fetch_assoc($res)){
     $disname=$result['disname'];
 }
}



$sql=$conn->query("select * from account where no='$userid'");
	
if($sql->num_rows >0)
{
while($res=mysqli_fetch_assoc($sql)){	
	$bank=$res['bank'];
	$acc_type=$res['acc_type'];
	$acc_number=$res['acc_number'];
	$acc_name=$res['acc_name'];
	$branch=$res['branch'];
	$ifsc=$res['isc'];
	$baddress=$res['baddress'];
}
}

echo'<tr><td>';	                                        

include 'viewowner.php';
echo'</td></tr>';
$p=1;
echo'<tr><td><a href="admin_owner.php?id='.$p.'">Back to home</a></td></tr>';
echo'</form>';

?>

</table>
</body>
</html>
