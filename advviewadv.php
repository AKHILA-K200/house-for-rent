
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
 color:#FFFFFF;
 
 text-decoration:bold;
  font-family:Liberation Sans;
  }
  table{
  	align-content: center;
  }
  td{
  	font-size: 20px;
  }
  input[type="text"],input[type="date"]
  {
  	font-size: 18px;
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


$s=1;

$sql=$conn->query("select * from advertisement where num='$num'");
if($sql->num_rows >0)
{
	echo'<form name="sviewdvform" onsubmit="return checkdata()" method="POST">';
while($result=mysqli_fetch_assoc($sql))
{
$userid=$result['no'];
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
?><table width="400"><tr>
<td colspan="2" align="center">ADVERTISEMENT</td><tr>
<?php
$res=$conn->query("select * from typeofh where typeof='$typeof'");
if($res->num_rows >0)
{
	while($row=mysqli_fetch_assoc($res))
		{
			$tpfhtype=$row['tpfhtype'];
		}
}
if($forb=="f")
{
	$fb="family";
}
else if($forb=="b")
{
	$fb="bachelor";
}
else
{
	$fb="all";
}

?>
<tr><td>Tenat type:</td><td><input type="text" name="typeof" value="<?php echo $tpfhtype?>"></td></tr>
<tr><td>BHK:</td><td><input type="text" name="bhk" value="<?php echo $bhk;?>"></td></tr>
<tr><td>Available for:</td><td><input type="text" name="bhk" value="<?php echo $fb;?>"></td></tr>
<tr><td>square feet:</td><td><input type="text" name="sqrft" value="<?php echo  $sqrft?>"></td></tr>
<tr><td>Rent:</td><td><input type="text" name="rent" value="<?php echo $rent?>"></td></tr>
<tr><td>Floor:</td><td><input type="text" name="floor" value="<?php echo $floor ?>"></td></tr>
<tr><td>parking :</td><td><input type="text" name="pkno" value="<?php echo $pkno ?>"></td></tr>
<tr><td>description:</td><td><input type="text" name="des" value="<?php echo $des ?>"></td></tr>
<tr><td>Tax NO:</td><td><input type="text" name="tax" value="<?php echo $tax ?>"></td></tr>
<tr><td>Electricity bill:</td><td><input type="text" name="des" value="<?php echo $ebc ?>"></td></tr>

<tr><td>House no:</td><td><input type="text" name="hno" value="<?php echo $hno ?>"></td></tr>
 <tr><td>Section:</td><td><input type="text" name="sec" value="<?php echo $sec ?>"></td></tr>
 <tr><td>Vardno</td><td><input type="text" name="vard" value=" <?php echo $vard?>"></td></tr>
 	<tr><td>City</td><td><input type="text" name="vard" value="<?php echo $pcity?>"></td></tr>
 <tr><td>street name:</td><td><input type="text"  name="sname" value="<?php echo $sname?>"></td></tr>
<tr><td>village:</td><td><input type="text" name="village" value="<?php echo $village?>"></td></tr>
 <tr><td> Name of the Authorized  Person:</td><td>
	                  <input type="text" name="autname" value="<?php echo $autname;?>">
	                  </td></tr>
	                  <tr ><td>DOB of Authorized Person:</td><td><input type="date" name="autdob" value="<?php echo $autdob?>"></td>
	                  </tr><tr><td>      
                    Contact no of Authorized person:</td><td>
	           <input type="text" name="autcno" value="<?php echo $autcno;?>"></td></tr>
	           
               	           <tr><td>city of Authorized person:</td><td><input type="text" name="autcity" value="<?php echo $autcity;?>"></td></tr>
               	          
                                          
                           	              <tr><td>Distric of Authorized person:</td><td><input type="text" name="autdist" value="<?php echo $dis ;?>"></td></tr>

                          	           <tr><td>PinCode of Authorized person:</td><td><input type="text" name="autpin" value="<?php echo $autpin;?>"></td></tr>
<tr><td>Designation of Authorized person:</td><td><input type="text" name="autdesg" value="<?php echo $autdesg ?>"></td></tr>
<tr><td>Email id of Authorized person:</td><td><input type="text" name="autemail" value="<?php echo $autemail;?>"></td></tr>
	<tr><td>Relationship between owner:</td><td><input type="text" name="rel" value="<?php echo $rel;?>"></td></tr>

<?php 
$dis=$conn->query("select * from district where disno='$pdist'");
if($dis->num_rows >0)
	{
		while($dist=mysqli_fetch_assoc($dis))
		{
			$disname=$dist['disname'];
		}
	}
	?>
 <tr><td>district no</td><td><input type="text" name="disno" value="<?php echo $disname?>"></td></tr>
<tr><td>pincode:</td><td><input type="text" name="ppin" value="<?php echo $ppin ?>"></td></tr>
<?php
$sql=$conn->query("select * from account where no='$userid'");

if($sql->num_rows >0)
{
	while($row=mysqli_fetch_assoc($sql))
	{
		$bank=$row['bank'];
		$acc_name=$row['acc_name'];
		$acc_type=$row['acc_type'];
		$acc_number=$row['acc_number'];
		$branch=$row['branch'];
		$ifsc=$row['isc'];
		$baddress=$row['baddress'];
	}
	?><tr bgcolor="#555"><td  colspan="2" align="center"><font color="white">BANK ACCOUNT DETAILS </font></td></tr>
		<tr><td>Bank:</td><td><input type="text" name="bank" value="<?php echo $bank; ?>"></td></tr>
		<tr>
			<td>Account Name: </td><td><input type="text" name="acc_name" value="<?php echo $acc_name;?>"></td></tr>
			 <tr><td>Account Number:</td><td><input type="text" name="acc_number" value="<?php echo $acc_number; ?>"></td></tr>
			 <tr><td> Account Type:</td><td><input type="text" name="acc_type" value="<?php echo $acc_type; ?>"></td></tr>
			  <tr><td>  Branch:</td><td><input type="text" name="branch" value="<?php echo $branch ;?>"></td></tr>
			  <tr><td>  IFSC Code:</td><td><input type="text" name="ifsc" value="<?php echo $ifsc; ?>"></td></tr>
			   <tr><td>   Bank Address:</td><td><input type="text" name="baddress" value="<?php echo $baddress; ?>"></td></tr>
<?php			    
}


?>

<?php 
if($cno=="")
{

}
else
{


echo'<tr><td><a href="rentalagreementview.php?id='.$num.'&name='.$no.'" name="agreement">View agreement</a>';

echo '</td></tr>';

}
?>
<td><input type="submit" name="sviewadvsubmit" value="Edit" action="advediting.php" ></td></tr>

</form>
<?php if(isset($_REQUEST['agreement']))

{
	include 'rentalagreement.php';
}

?>
<?php 

$sql=$conn->query("select * from login where no='$s'");
  if($sql->num_rows >0)
  {
    while($res=mysqli_fetch_assoc($sql))
{
  $catno=$res['catno'];
  }
}
if($catno=='1')
{
echo'<tr><td><a href="admin_home3.php?id='.$s.'">back to home</a></td></tr>';
}
else if($catno=='3')
{
  echo'<tr><td><a href="renter_home3.php?id='.$s.'">back to home</a></td></tr>';

}
else
{
  echo'<tr><td><a href="owner_home3.php?id='.$s.'">back to home</a></td></tr>';
}

?>

</table>
</body>
</html>
