<html>
<head>
<title>
Owners home</title>
</head>

<body>
	<div class="content">

<?php
ini_set('display_errors',1);
   error_reporting(E_ALL & ~E_STRICT);
echo'<form>';
include 'dataconnect.php';
	$no=$_GET['id'];
	$num=$_GET['name'];
	$conn->query("select * from login where no='$no'");
  if($sql->num_rows >0)
  {
    while($res=mysqli_fetch_assoc($sql))
{
  $catno=$res['catno'];
  }
}

else if($catno=='3')
{

	$date=$_POST['dt'];
$conn->query("update advdate set leavedate='$date' where num='$num' and no='$no'");
echo'<script>window.alert("Renter willleave the house within this date!!");
			             window.location.href="renter_home3.php?id='.$no.'";</script>';

}
else
{

	$date=$_POST['dt'];
$conn->query("update advdate set joinexp='$date' where num='$num' and no='$no'");

echo'<script>window.alert("Renter can leave the house within this date!!");
			             window.location.href="owner_home3.php?id='.$no.'";</script>';
}
?>

</body>
</html>