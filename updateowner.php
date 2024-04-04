<html>
<head>
<title>
Update profile</title>
</head>
<body>
<?php
include 'dataconnect.php';

$userid=$_POST['no'];
$phn=$_POST['cno'];
$cur=$_POST['cur'];
$city=$_POST['city'];
$desg=$_POST['desg'];

$pin=$_POST['pin'];
$dist=$_POST['district'];
$conn->query("update owner set phoneno='$phn' where no='$userid'");
$conn->query("update owner set curaddress='$cur' where no='$userid'");
$conn->query("update owner set city='$city' where no='$userid'");
$conn->query("update owner set desg='$desg' where no='$userid'");
$conn->query("update owner set pin='$pin' where no='$userid'");
$conn->query("update owner set distno='$dist' where no='$userid'");
?>
</body>
</html>
