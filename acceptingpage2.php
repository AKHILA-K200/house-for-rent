 <html>
<head>
<title>
Acceptingapage2</title>
<style>
 table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;


}

th {
  height: 50px;
}
.hei{
	height:100px;
}
.content {
  max-width: 1000px;
  margin: auto;
  background: white;
  padding: 10px;
  }
  .error{
   color:red;
   }
    input
   {
   	border:0;
   }
  body{
  	background:#555;
  }
  .login{
 background-color:blue;
 text-align: center;
 width:100px;
 height:35px;
 color: #f2f2f2;
 border-radius: 4px;
}
</style>
</head>
<body>
	<div class="content">
<?php
ini_set('display_errors',1);
   error_reporting(E_ALL & ~E_STRICT);
include 'dataconnect.php';
include'admin_home.php';
$nid=$_GET['id'];
$sql=$conn->query("select * from notification where notid='$nid'");

if($sql->num_rows >0)
{
While($row=mysqli_fetch_assoc($sql))
{
$userid=$row['no'];
$or=$row['ora'];
}
}

$conn->query("update owner set apornot=1 where no='$userid'"); 
$res=$conn->query("select * from owner where no='$userid'"); 
if($res->num_rows >0)
{
while($result=mysqli_fetch_assoc($res)){
$userid=$result['no'];
$name=$result['name'];
$ph=$result['phoneno'];
$email=$result['email'];
$lic=$result['license'];
$vot=$result['viterid'];
$or=$result['ora'];
}
}
if($or=='o')
  $catno='2';
 else
   $catno='3';


	
	

$conn->query("insert into login(no,username,pasword,catno)values('$userid','$email','$ph','$catno')");
$to=$email;
$subject="house for rent";
$txt="hello". $name."\n"."Your user name for login is:".$email."\n"."your password is:".$ph."\n"."for login please click here..<a href=''>"."login";
$headers="from:akhiakhi0566@gmail.com"."\n";
mail($to,$subject,$txt,$headers);
$p=1;
	echo'<script>window.alert("Approved successfully!!");
                   window.location.href="admin_notifydisplay.php?id='.$p.'";</script>'; 

?>
<a href="admin_home.php">back to home</a>
</div>
</body>
</html>
