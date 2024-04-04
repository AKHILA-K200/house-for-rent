<html>
<head>
<title>
Advertisement accepting</title>
</head>
<body>
<?php 
include 'dataconnect.php';

$nid=$_GET['id'];

$sql=$conn->query("select * from notification where notid='$nid'");
if($sql->num_rows >0)
{
	While($row=mysqli_fetch_assoc($sql))
	{
		$userid=$row['no'];
    $count=$row['count'];
    $num=$row['advno'];
    $ora=$row['ora'];
    $ono=$row['ono'];
	}
}
echo'<b>Rejected success fully</b>';
$type="Request rejected for the advertisement";
$name="admin";
$ora='a';
$ono='$userid';
notifyacr($type,$name,$no,$ora,$ono)
echo'<a href="admin_notifydisplay.php">Back to home</a>';
?>
</body>
</html>