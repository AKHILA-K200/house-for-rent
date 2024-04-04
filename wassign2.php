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
$wid=$_GET['id'];
$mid=$_GET['name'];
$conn->query("update worker set mid='$mid' where wid='$wid'");
//$conn->query("insert into wormain(mid,wid)('$mid','$wid'");
  echo'<script>window.alert("Successfully updated!!")
                   window.location.href="wassign.php?id='.$mid.'";</script>';
                   ?>
echo'</form>';
</body>
</html>