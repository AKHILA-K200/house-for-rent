<html>
<head>
<title>
Owners home</title>
<link rel="stylesheet" type="text/css" href="dropdown.css">
</head>

<body class="bg">

<?php
include'dataconnect.php';
$userid=$_GET['id'];
ini_set('display_errors',1);
   error_reporting(E_ALL & ~E_STRICT);
echo'<form>';
$sql=$conn->query("select * from owner where no='$userid'");
if($sql->num_rows >0)
{
	while($res=mysqli_fetch_array($sql))
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

$abc="select count(*) as c from advertisement where no='$userid'";

$result=mysqli_query($conn,$abc);
if($result)
 {
    while($row=mysqli_fetch_assoc($result))
  {
        $s=$row['c'];
  }     
 }
?>

	  <div class="navbar" width="100%">
	<?php echo' <a  class="active" href="owner_home3.php?id='.$userid.'">HOME</a>';?>
    <div class="dropdown">
  <button class="dropbtn">PROFILE</button>
  <div class="dropdown-content">
	  <?php echo' <a href="ownerediting.php?id='.$userid.'">VIEW PROFILE</a>';?>
    <?php 
	  echo '<a href="owner_notificationdisplay.php?id='.$userid.'">NOTIFICATION</a>';?>
	  <a href="logout.php">lOGOUT</a>
	  </div>
	 
  </div>
</div>

</body></html>