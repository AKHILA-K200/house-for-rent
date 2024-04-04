
<html>
<head>
<title>advertisement viewing</title>
<link rel="stylesheet" type="text/css" href="css/sviewadv.css">
<style>
body
{
	background-image:url("images/im1.jpg");
	height:100%;
	width:100%;
  background-position:center;
  background-repeat:no-repeat;
  background-size:cover;
}
.let{
 color:FFFFFF;
 
 text-decoration:bold;
  font-family:Liberation Sans;
  }  table{
  	align-content: center;
  }
</style><script type="text/javascript">
	function checkdata(){
		var r=confirm("Are you sure?");
		if(r==true)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
</script>
</head>
<body>
	<div class="content">
<?php
ini_set('display_errors',1);
   error_reporting(E_ALL & ~E_STRICT);
include 'dataconnect.php';
$num=$_GET['id'];
$no=$_GET['name'];

$sql=$conn->query("select * from advertisement where num='$num'");
if($sql->num_rows >0)
{
	echo'<form name="sviewdvform" onsubmit="return checkdata()" method="POST">';
while($result=mysqli_fetch_assoc($sql))
{
echo '<table width="400"><tr>';
echo'<td colspan="2" align="center">ADVERTISEMENT</td><tr>';
$typeof=$result['typeof'];
$res=$conn->query("select * from typeofh where typeof='$typeof'");
if($res->num_rows >0)
{
	while($row=mysqli_fetch_assoc($res))
		{
			$tpfhtype=$row['tpfhtype'];
		}
}
echo'<tr><td>Tenat type:</td><td>'.$tpfhtype.'</td></tr>';
echo'<tr><td>BHK:</td><td>'.$result['bhk'].'</td></tr>';
echo"<tr><td>square feet:</td><td>".$result['sqrft']."</td></tr>";
echo"<tr><td>Rent:</td><td>".$result['rent']."</td></tr>";
echo"<tr><td>Floor:</td><td>".$result['floor']."</td></tr>";
echo"<tr><td>parking :</td><td>".$result['pkno']."</td></tr>";
echo"<tr><td>description:</td><td>".$result['description']."</td></tr>";

$userid=$result['no'];
$adn=$result['adno'];
$img=$conn->query("select * from image where num='$num'");
if($img->num_rows >0)
{
	while($im=mysqli_fetch_assoc($img))
	{
		$im1=$im['img1'];
$im2=$im['img2'];
$im3=$im['img3'];
$im4=$im['img4'];
	}
}
echo '<tr><td><img src="'.$im1.'" height="150" width="200"></td>';
$ad=$conn->query(" select * from address where no='$userid' and adno='$adn'");
if($ad->num_rows>0)
{
while($result=mysqli_fetch_assoc($ad)){
echo" <tr><td>House no:</td><td>".$result['hno']."</td></tr>";
echo" <tr><td>Section:</td><td>".$result['section']."</td></tr>";
echo" <tr><td>Vardno</td><td>".$result['vardno']."</td></tr>";
echo" <tr><td>street name:</td><td>".$result['sname']."</td></tr>";
echo" <tr><td>village:</td><td>".$result['village']."</td></tr>";
echo" <tr><td>district no</td><td>".$result['disno']."</td></tr>";
echo" <tr><td>pincode:</td><td>".$result['pcode']."</td></tr>";
}
}

echo'<tr><td><a href="home.php?id='.$no.'">back to home</a></td>';
$res=$conn->query("select * from owner where num='' or ono='' and no='$no'");
if($sql->num_rows >0)
{

}
else
{
echo'<td><a href="selecthouse.php?id='.$num.'&name='.$no.'" name="sel" onclick="return checkdata()" >select</td></tr>';
}}
echo"</table>";
echo"</form>";
}
?>
<?php

if(isset($_REQUEST['sel']))
{
	$conn->query("update advertisement set cno='");
}

?>
</body>
</html>
