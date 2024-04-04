<html>
<head>
<title>advertisement viewing</title>
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
  }
  table{
  	width:80%;
 }
.content {
  max-width: 1000px;
  margin: auto;
  background: white;
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
	
<?php
ini_set('display_errors',1);
   error_reporting(E_ALL & ~E_STRICT);
include 'dataconnect.php';

$num=$_GET['id'];
$no=$_GET['name'];
echo'<table>';
$sql=$conn->query("select * from advertisement where num='$num'");
if($sql->num_rows >0)
{
	echo'<form name="sviewdvform" onsubmit="return checkdata()" method="POST">';
while($result=mysqli_fetch_assoc($sql))
{

$typeof=$result['typeof'];
$userid=$result['no'];
$bhk=$result['bhk'];
$forb=$result['forb'];
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
$cno=$result['cno'];
$apn=$result['apornot'];
}
}
$sql=$conn->query("select * from address where no='$userid' and adno='$adno'");
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
$sql=$conn->query("select * from image where num='$num'");
if($sql->num_rows >0)
{
	while($row=mysqli_fetch_assoc($sql))
	{
		$im1=$row['img1'];
$im2=$row['img2'];
$im3=$row['img3'];
$im4=$row['img4'];
	}
}

if($forb=="f")
{
echo'<caption>Available only for family</caption>';
echo'<tr><th>Name of Family Member</th>
	     <th>Contact No</th>
	     <th>Id proof</th>
	 </tr>';
	 echo'<tr><td><input type="text" name="fam1" placeholder="Family member name">';
	 	echo'<td><input type="text" name="fam1cno" placeholder="Contact number">';
	 echo'<td><input type="text" name="fam1id" placeholder="id proof"></td></tr>';

	 echo'<tr><td><input type="text" name="fam2" placeholder="Family member name">';
	 	echo'<td><input type="text" name="fam2cno" placeholder="Contact number">';
	 echo'<td><input type="text" name="fam2id" placeholder="id proof"></td></tr>';

	 echo'<tr><td><input type="text" name="fam3" placeholder="Family member name">';
	 	echo'<td><input type="text" name="fam3cno" placeholder="Contact number">';
	 echo'<td><input type="text" name="fam3id" placeholder="id proof"></td></tr>';

	 echo'<tr><td><input type="text" name="fam4" placeholder="Family member name">';
	 	echo'<td><input type="text" name="fam4cno" placeholder="Contact number">';
	 echo'<td><input type="text" name="fam4id" placeholder="id proof"></td></tr>';

	 echo'<tr><td><input type="text" name="fam5" placeholder="Family member name">';
	 	echo'<td><input type="text" name="fam5cno" placeholder="Contact number">';
	 echo'<td><input type="text" name="fam5id" placeholder="id proof"></td></tr>';

	 echo'<tr><td><input type="text" name="fam6" placeholder="Family member name">';
	 	echo'<td><input type="text" name="fam6cno" placeholder="Contact number">';
	 echo'<td><input type="text" name="fam6id" placeholder="id proof"></td></tr>';
	 echo'<tr><td colspan="1"><a href="home.php?id='.$no.'">back to home</a></td>';
	 echo'<td><a href="rentalagreement.php?id='.$num.'&name='.$no.'"  onclick="return checkdata()" name="famsubmit">Submit</a></td></tr>';
  echo'<tr><td><a href="home.php?id='.$no.'">back to home</a></td>';

}
else
{
	echo'<tr><td bgcolor="white">';
	echo include 'rentalagreement.php';
	echo'</td></tr>';
}
echo'</form>';
echo'</table>';
?>
<?php
if(isset($_REQUEST['famsubmit']))
{
	$conn->query("insert into family(no,slno,fname,fid,fcno)values('$fam1','$fam1id','$fam1cno'");
	$conn->query("insert into family(no,slno,fname,fid,fcno)values('$fam2','$fam2id','$fam2cno'");
	$conn->query("insert into family(no,slno,fname,fid,fcno)values('$fam3','$fam3id','$fam3cno'");
	$conn->query("insert into family(no,slno,fname,fid,fcno)values('$fam4','$fam4id','$fam4cno'");
	$conn->query("insert into family(no,slno,fname,fid,fcno)values('$fam5','$fam5id','$fam5cno'");
	$conn->query("insert into family(no,slno,fname,fid,fcno)values('$fam6','$fam6id','$fam6cno'");
}
?>
</body>
</html>