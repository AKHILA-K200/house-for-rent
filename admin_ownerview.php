<html>
<head>
<title>accepting page</title>
</head>
<body>
<?php
include 'dataconnect.php';
include'admin_home3.php';
$userid=$_GET['name'];
?>
<table><?php

$sql=$conn->query(" select * from owner where no='$userid' ");

if($sql->num_rows>0)
{


  while($res=mysqli_fetch_assoc($sql))
  {
    $name=$res['name'];
$ph=$res['phoneno'];
$email=$res['email'];
$lic=$res['license'];
$vot=$res['viterid'];
$cur=$res['curaddress'];
    $dob=$res['dob'];
    $city=$res['city'];
    $dist=$res['disno'];
    $pin=$res['pin'];
    $desg=$res['desg'];
$or=$res['ora'];
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
$sql=$conn->query("select * from district where disno='dist'");
if($sql->num_rows >0)
{
	while($res=mysqli_fetch_assoc($sql))
	{
		$dist=$res['disname'];
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
