<html>
<head>
<title>
Advertisement accepting</title>
<link rel="stylesheet" type="text/css" href="css/tacen.css">
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
  <div class="content">
<?php 
include 'dataconnect.php';

$no=$_GET['id'];
$nid=$_GET['name'];

echo '<table><tr>';

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

if($count==0)
{
  $conn->query("update notification set count=1 where notid='$nid' ");
  $res=$conn->query("select * from owner where no='$userid'"); 
if($res->num_rows >0)
{
while($result=mysqli_fetch_assoc($res)){
$name=$result['name'];
$ph=$result['phoneno'];
$email=$result['email'];

$or=$result['curaddress'];
echo' <tr><th>RENTER DETAILS:</td><tr><td>Name</td><td>'.$name.'</td></tr>';

echo' <tr><td>Phone  no:</td><td>'.$ph.'</td></tr>';
echo' <tr><td>Email:</td><td>'.$email.'</td></tr>';

echo' <tr><td>Address:</td><td>'.$or.'</td></tr>';
}
}

$res=$conn->query("select * from owner where no='$ono'"); 
if($res->num_rows >0)
{
while($result=mysqli_fetch_assoc($res)){
$oname=$result['name'];
$oph=$result['phoneno'];
$oemail=$result['email'];

$oor=$result['curaddress'];
}
echo' <tr><th>OWNER DETAILS:</td><tr><td>Name</td><td>'.$oname.'</td></tr>';

echo' <tr><td>Phone  no:</td><td>'.$oph.'</td></tr>';
echo' <tr><td>Email:</td><td>'.$oemail.'</td></tr>';

echo' <tr><td>Address:</td><td>'.$oor.'</td></tr>';
}



$sql=$conn->query("select * from advertisement where num='$num'");
echo '<form>';
if($sql->num_rows >0)
	{
		while($row=mysqli_fetch_assoc($sql))
{
echo'<th>ADVERTISEMENT NO:</th><td>'. $row['advno'].'</td><tr>';

$adno=$row['adno'];
}

}
$im=$conn->query(" select * from address where no='$userid' and adno='$adno'");
if($im->num_rows>0)
{
while($result=mysqli_fetch_assoc($im)){
	echo'<tr><th>ADDRESS OF THE ADVERTISEMENT</th></tr>';
echo' <tr><td>House no:</td><td>'.$result['hno'].'</td></tr>';
echo' <tr><td>Section:</td><td>'.$result['section'].'</td></tr>';
echo' <tr><td>Vardno</td><td>'.$result['vardno'].'</td></tr>';
echo' <tr><td>street name:</td><td>'.$result['sname'].'</td></tr>';
echo' <tr><td>type:</td><td>'.$result['type'].'</td></tr>';
echo' <tr><td>village:</td><td>'.$result['village'].'</td></tr>';
echo' <tr><td>district no</td><td>'.$result['disno'].'</td></tr>';
echo' <tr><td>pincode:</td><td>'.$result['pcode'].'</td></tr>';
}
}
}
else
{
	$res=$conn->query("select * from owner where no='$userid'"); 
if($res->num_rows >0)
{
while($result=mysqli_fetch_assoc($res)){
$name=$result['name'];
$ph=$result['phoneno'];
$email=$result['email'];

$or=$result['curaddress'];
echo' <tr><th>RENTER DETAILS:</td><tr><td>Name</td><td>'.$name.'</td></tr>';

echo' <tr><td>Phone  no:</td><td>'.$ph.'</td></tr>';
echo' <tr><td>Email:</td><td>'.$email.'</td></tr>';

echo' <tr><td>Address:</td><td>'.$or.'</td></tr>';
}
}

$res=$conn->query("select * from owner where no='$ono'"); 
if($res->num_rows >0)
{
while($result=mysqli_fetch_assoc($res)){
$oname=$result['name'];
$oph=$result['phoneno'];
$oemail=$result['email'];

$oor=$result['curaddress'];
}
echo' <tr><th>OWNER DETAILS:</td><tr><td>Name</td><td>'.$oname.'</td></tr>';

echo' <tr><td>Phone  no:</td><td>'.$oph.'</td></tr>';
echo' <tr><td>Email:</td><td>'.$oemail.'</td></tr>';

echo' <tr><td>Address:</td><td>'.$oor.'</td></tr>';
}



$sql=$conn->query("select * from advertisement where num='$num'");
echo '<form>';
if($sql->num_rows >0)
	{
		while($row=mysqli_fetch_assoc($sql))
{
echo'<th>ADVERTISEMENT NO:</th><td>'. $row['advno'].'</td><tr>';

$adno=$row['adno'];
}

}
$im=$conn->query(" select * from address where no='$ono' and adno='$adno'");
if($im->num_rows>0)
{
while($result=mysqli_fetch_assoc($im)){
	echo'<tr><th>ADDRESS OF THE ADVERTISEMENT</th></tr>';
echo' <tr><td>House no:</td><td>'.$result['hno'].'</td></tr>';
echo' <tr><td>Section:</td><td>'.$result['section'].'</td></tr>';
echo' <tr><td>Vardno</td><td>'.$result['vardno'].'</td></tr>';
echo' <tr><td>street name:</td><td>'.$result['sname'].'</td></tr>';
echo' <tr><td>type:</td><td>'.$result['type'].'</td></tr>';
echo' <tr><td>village:</td><td>'.$result['village'].'</td></tr>';
echo' <tr><td>district no</td><td>'.$result['disno'].'</td></tr>';
echo' <tr><td>pincode:</td><td>'.$result['pcode'].'</td></tr>';
}
}

}
$sql=$conn->query("select * from login where no='$no'");
  if($sql->num_rows >0)
  {
    while($res=mysqli_fetch_assoc($sql))
{
  $catno=$res['catno'];
  }
}
if($catno=='1')
{
echo'<tr><td><a href="admin_notifydisplay.php?id='.$no.'">back to home</a></td>';
}

else
{
  echo'<tr><td><a href="owner_notificationdisplay.php?id='.$no.'">back to home</a></td>';
}


echo'</table>';
?>
</body>


</html>