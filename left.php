<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="dropdown.css">

	<style type="text/css">
	

.login{
 background-color:blue;
 text-align: center;
 width:100px;
 height:35px;
 color: #f2f2f2;
 border-radius: 4px;
}

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
  width:500px;
  margin: auto;
  background: white;
  padding: 10px;
  }
	</style>
</head>
<body>
	<div class="content">
<?php
	include'dataconnect.php';
	$num=$_GET['name'];
	$no=$_GET['id'];
include 'renter_home3.php';
	   $dt=date("Y/m/d H:i:s");
$d=date_create($dt);
?>
<form method="POST" action="leave.php">
<table><tr><td>Select the date you are leaving:</td>
	<?php echo'<td><input type="date" min='.$dt.'" name="dt" required></td>';
	echo'<tr><td><a href="leave.php?id='.$no.'&name='.$num.'"class="login">Submit</a></td></tr>';
	?>
</table>
</form></div>
</body></html>





	