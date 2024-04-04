<html><head><title>
payment completion</title></head>
<body>
<h2>Your transaction completd....<br>
Thankyou for trusting us..<br>
we will find out the best renters for you..</h2>
<h2><a href="home.php">back to home</a></h2>
<?php
include 'dataconnect.php';
$uname=$_SESSION['uname'];
$upass=$_SESSION['upass'];
$userid=$conn->query("select no from login where username='$uname' and pasword='$upass'");
$conn->query("update owner set count=1 where no='$userid'");
?>
</body>
</html>
