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
</style>
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
<table bgcolor="white" height="500" width="500">
	
	<?php 
	echo'<tr><td align="left" bgcolor="blue"><a href="maintlist.php?id='.$userid.'&name='.$num.'"><font color="white" size="5">View Your Maintainance list </font></a></td><td></td></tr>';  
	 echo'<tr><td align="center"><input type="submit" value="carpenter" name="mname"></td></tr>';
	echo'<tr><td align="center"><input type="submit" value="Plumbing" name="mname2"></td></tr>';
	echo'<tr><td align="center"><input type="submit" value="House keepping" name="mname3"></td></tr>';
	echo'<tr><td align="center"><input type="submit" value="Electrical" name="mname4"></td></tr>';

	echo '</form> ';?>

<?php
if(isset($_REQUEST['mname'])){
	$conn->query("insert into maintainance(no,num,mname,mcharge)value('$userid','$num','carpenter','500')");
	echo'<script>window.alert("Maintainance added successfully!!");
			             window.location.href="maintlist.php?id='.$userid.'&name='.$num.'";</script>'; 
}
if(isset($_REQUEST['mname2']))
{
	$conn->query("insert into maintainance(no,num,mname,mcharge)value('$userid','$num','carpenter','1000')");
	echo'<script>window.alert("Maintainance added successfully!!");
			             window.location.href="maintlist.php?id='.$userid.'&name='.$num.'";</script>'; 
}
if(isset($_REQUEST['mname3']))
{
	$conn->query("insert into maintainance(no,num,mname,mcharge)value('$userid','$num','carpenter','500')");
	echo'<script>window.alert("Maintainance added successfully!!");
			             window.location.href="maintlist.php?id='.$userid.'&name='.$num.'";</script>'; 
}
if(isset($_REQUEST['mname4']))
{
	$conn->query("insert into maintainance(no,num,mname,mcharge)value('$userid','$num','carpenter','800')");
	echo'<script>window.alert("Maintainance added successfully!!");
			             window.location.href="maintlist.php?id='.$userid.'&name='.$num.'";</script>'; 
}
/*
*/
?>
</div>
</table>
</center>

</body>
</html>