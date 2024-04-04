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
.bc
{
border:none;	
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
$mid=$_GET['id'];

echo'<form method="POST">';
?>
<div class="b">
	<center>
<table bgcolor="white" width="900">
	<?php echo'<tr><td align="right" class="bc" colspan="3"><a href="admin_maintainance.php?id='.$mid.'">Back to home</a></td></tr>';?>
	<tr><th>Worker id</th><th>Worker name</th><th></th></tr>
	<?php
	$i=1;
	  $mt=$conn->query("select * from worker");
	  if($mt->num_rows >0)
	  {
	  	while($res=mysqli_fetch_assoc($mt))
	  	{
	  		$wid=$res['wid'];
	  		$wname=$res['wname'];
	  	
	  		echo'<tr><td>'.$wid.'</td>';
	  		echo'<td>'.$wname.'</td>';
	  	     echo'<td><a href="wassign2.php?id='.$wid.'&name='.$mid.'">ASSIGN</td></tr>';
	  		echo'</form>';
	
	  	}
	  
	  }?>
	 
</table></center>
	  
</div></body>	</html>  