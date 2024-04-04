<html>
<head>
<title>
Advertisement accepting</title>
<link rel="stylesheet" type="text/css" href="css/linkbut.css">
</head>
<body>
<?php 
include 'dataconnect.php';
include'admin_home3.php';
$nid=$_GET['id'];

$sql=$conn->query("select * from notification where notid='$nid'");
if($sql->num_rows >0)
{
	While($row=mysqli_fetch_assoc($sql))
	{
		$userid=$row['no'];
    $count=$row['count'];
    $advno=$row['advno'];
    $ora=$row['ora'];
	}
}
if($count==0)
{
  $conn->query("update notification set count=1 where notid='$nid' ");
}
?>

<table><?php
if($ora=="o")
{

$sql=$conn->query("select * from advertisement where no='$userid' and advno='$advno'");
if($sql->num_rows >0)
{
	echo "hello";
while($result=mysqli_fetch_assoc($sql)){
$num=$result['num'];
$t=$result['typeof'];
$bhk=$result['bhk'];
$sqrft=$result['sqrft'];
$facing=$result['facing'];
$flatcno=$result['flatcno'];
$ebc=$result['ebc'];
$tax=$result['tax'];
$rent=$result['rent'];
$floor=$result['floor'];
$adno=$result['adno'];
$year=$result['year'];
$pkno=$result['pkno'];
$des=$result['description'];
$loan=$result['loan'];
$autname=$result['autname'];
$autdob=$result['autdob'];
$autcity=$result['autcity'];
$autcno=$result['autcno'];
$autpin=$result['autpin'];
$autdesg=$result['autdesg'];
$autemail=$result['autemail'];
$dis=$result['dis'];
$rel=$result['relation'];
$apn=$result['apornot'];
}
}
$sql=$conn->query("select * from address where no='$userid' and adno='$advno'");
if($sql->num_rows >0)
{
	While($row=mysqli_fetch_assoc($sql))
	{
		$hno=$row['hno'];
$sec=$row['section'];
$hname=$row['hname'];
$sname=$row['sname'];
$village=$row['village'];
$vard=$row['vardno'];
$pcity=$row['city'];
$pdist=$row['disno'];
$ppin=$row['type'];


	}
}
echo '<tr><td>';
include'advviewadv.php';
echo'</td></tr>';

echo"</tr>";
if($apn==1)
{
	$p=1;
echo '<tr><td><a href="admin_notifydisplay.php?id='.$p.'">Back to home</a></td></tr>';

}
else
{
echo '<tr><td>';
include 'verification.php';echo'</td></tr>';
echo'<tr><td><a href="advacceptingpage2.php?id='.$nid.'" >APPROVE</td>';
echo'<td><a href="advrejecting.php?id='.$nid.'">REJECT</td>';
echo"</tr>";
}

}
else
{
	$sql=$conn->query("select * from advertisement where no='$userid' and advno='$advno'");
if($sql->num_rows>0)
{
while($result=mysql_fetch_assoc($sql)){

	$t=$resul['typeofh'];
$bhk=$result['bhk'];

$facing=$result['facing'];
$rent=$result['rent'];
$pkno=$resul['pkno'];
$des=$result['description'];
}
if($apn==1)
{
	$p=1;
echo '<tr><td><a href="admin_notifydisplay.php?id='.$p.'">Back to home</a></td></tr>';
}
else
{
echo '<tr><td>';
include 'verification.php';echo'</td></tr>';
echo'<tr><td><input type="button" name="approve"onclick="advacceptingpage2.php?id=.$nid." >APPROVE</td>';
//echo'<td><script>window.alert("Are you sure??");
			   //          window.location.href="advrejecting.php?id='.$nid.'";</script>REJECT</td></tr>'; 
echo'<td><a href="advrejecting.php?id='.$nid.'">REJECT</td>';
echo"</tr>";
}
}
}
echo"</form>";
?>
</table>
<?php
if(isset($_REQUEST['approve']))
{
	include 'advacceptingpage2.php';
}
?>

</body>
</html>
