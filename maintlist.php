<html>
<head>
<title>
Owners home</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
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
a{
	text-decoration: none;
}
table{
	align-content: center;
}
input
{
	border: 2px solid black;
	height: 50px;
	width: 200px;
	font-size: 20px;
}
th,td{
	border: 1px solid black;
	font-size: 20px;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="bg">
<?php
echo'<form  method="POST">';

ini_set('display_errors',1);
   error_reporting(E_ALL & ~E_STRICT);
include 'dataconnect.php';
include'renter_home3.php';
$num=$_GET['name'];
?>
<div class="b">
	<center>
<table bgcolor="white" width="900">
	<tr><th>House name</th><th>Maintainance name</th><th>Charge</th><th>date</th><th>Status</th></tr>
	<?php
	  $mt=$conn->query("select * from maintainance where no='$userid'");
	  if($mt->num_rows >0)
	  {
	  	while($res=mysqli_fetch_assoc($mt))
	  	{
	  		$adnum=$res['num'];
	  		$mname=$res['mname'];
	  		$mcharge=$res['mcharge'];
	  		$mdate=$res['mdate'];
	  		$mcom=$res['mcomplete'];
	  		$hn=$conn->query("select * from advertisement where num='$adnum'");
	  		if($hn->num_rows >0)
	  		{
	  			while($hna=mysqli_fetch_assoc($hn))
	  			{
	  				$ton=$hna['no'];
	  				$adno=$hna['adno'];
	  			}
	  		}
	  		$hno=$conn->query("select * from address where no='$ton' and adno='$adno'");
	  		if($hno->num_rows >0)
	  		{
	  			while($hna=mysqli_fetch_assoc($hno))
	  			{
	  				$hname=$hna['hname'];
	  			}
	  		}
	  		echo'<td>'.$hname.'</td>';
	  		echo'<td>'.$mname.'</td>';
	  		echo'<td>'.$mcharge.'</td>';
	  		echo'<td>'.$mdate.'</td>';
	  		if($mcom=="1")
	  		{
                echo'<td><span style="font-size:35px;">&#9989;</span></td></tr>';

	  		}
	  		else
	  		{
               echo'<td><i class="fa fa-close" style="font-size:35px;color:red"></i></td</tr>';

	  		}
	  		
	  	}
	  }?>