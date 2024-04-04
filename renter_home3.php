<html>
<head>
<title>
Owners home</title>
<link rel="stylesheet" type="text/css" href="dropdown.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<slink rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

.content {
  width:1000px;
  margin: auto;
  background: white;
  padding: 10px;
  }
  
 
</style>
</head>

<body>
	<div class="content">

<?php
ini_set('display_errors',1);
   error_reporting(E_ALL & ~E_STRICT);
echo'<form>';
include 'dataconnect.php';
	$userid=$_GET['id'];
		
$sql=$conn->query("select * from advertisement where cno='$userid'");
if($sql->num_rows >0)
{
	while($res=mysqli_fetch_array($sql))
	{
		$num=$res['num'];
	}
}
else
 $num="";
?>
<center>
<table>
	<?php
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
    $ono=$res['ono'];
$or=$res['ora'];
}
}
$sql=$conn->query("select * from advertisement where cno='$userid'");
if($sql->num_rows >0)
{
	while($res=mysqli_fetch_assoc($sql))
	{
		$num=$res['num'];
	}
}
?>
 
  	<tr><center><td class="let" align="center"><font size="7">Welcome<?php echo $name;?></font>
	 <div class="navbar">
	   <?php echo'<a  class="active" href="renter_home3.php?id='.$userid.'">HOME</a>';?>
	   <div class="dropdown">
  <button class="dropbtn">PROFILE</button>
  <div class="dropdown-content">
	  <?php echo'<a href="renterediting.php?id='.$userid.'">VIEW PROFILE</a>';?>
	 <?php echo' <a href="renter_notifydisplay.php?id='.$userid.'">NOTIFICATION</a>';?>
	</div></div>
	 <div class="dropdown">
  <button class="dropbtn">ADVERTISEMENT</button>
  <div class="dropdown-content">
	 <?php echo' <a href="home.php?id='.$userid.'">VIEW ADVERTISEMENT</a>';?>

	 <?php
	 if($ono!="")
	 {
 echo' <a href="rentalagreementview.php?id='.$num.'&name='.$userid.'">RENTALAGREEMENT</a>';
			 echo'<a href="addmaintainance.php?id='.$userid.'&name='.$num.'">ADD MAINTAINANCE</a>';
	   echo' <a href="payment.php?id='.$num.'&name='.$userid.'">PAY RENT</a>';
	   $sql=$conn->query("select * from advdate where no='$userid' and num='$num'");
if($sql->num_rows >0)
{
  while($row=mysqli_fetch_assoc($sql))
  {
    $join=$row['joining'];
    $exp=$row['joinexp'];
    $leaving=$row['leaving'];
    $leaveexp=$row['leaveexp'];
    $rentdate=$row['rentdate'];
    $depdate=$row['depdate'];
  }

	   $dt=date("Y/m/d H:i:s");
$d=date_create($dt);
$rentdate=date_create($rentdate);
   $diff=date_diff($d,$rentdate);
   $diff=$diff->format("%R%a");
   if(($diff<="90")&&($diff>=60))
   {
   	echo' <a href="renew.php?id='.$userid.'">RENEW</a>';
   }
 }
echo' <a href="left.php?id='.$userid.'&name='.$num.'">LEAVE</a>';

echo'</div></div> <a href="logout.php">lOGOUT</a>
	  </div>';
echo'</center></td></center></tr>';

  	}
	
// $ps=$conn->query("select * from advertisement where no='$userid'");
// if($ps->num_rows >0)
// {

// }
// else
// {


// $advno=1;
// 			$res=$conn->query("select * from advertisement where no='$userid' and advno='$advno'");
// 			if($res->num_rows>0)
// 			{
// 				while($result=mysqli_fetch_assoc($res))
// 				{
// 					$num=$result['num'];
// 					$adno=$result['adno'];
// 				}
// 				$ads=$conn->query("select * from address where adno='$adno' and no='$userid'");
// 			if($ads->num_rows >0)
// 			{
// 				while($ads1=mysqli_fetch_assoc($ads))
// 				{
// 					$im1=$ads1['img1'];
// 				}
// 			}
// 				echo '<tr><td height="200" width="200" align="center">  echo $im1; </td>'.'</tr>';
// 				echo'<tr bgcolor="white"><td><a href="sviewadv.php?id='.$num.'&name='.$userid.'"><font //size="5">view</font></a></td></tr>';
		//		 echo'<tr bgcolor="white"><td><a href="sdeleteadv.php?id='.$userid.'name='.$advno.'"><font size="5">delete</font></a></td></tr>';
				
				
		//	}
		//	else
			//{
			//				echo'<tr bgcolor="white"><td><a href="createadvrenter.php?id='.$userid.'"><font size="5">Createadvertisement</font></a></td></tr>';
	
          //   }
     // }   
			
	?>
	  </center>
  </td></center>
  </tr>
  </table>
</center>
</div>
</body>
</html>
				
