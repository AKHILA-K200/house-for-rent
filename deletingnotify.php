<html>
<head>
<title>
Delete
</title>
</head>

<body>
<?php 
include 'dataconnect.php';

$userid=$_GET['id'];
$nid=$_GET['name'];
$conn->query("update notification set read=1 where notid='$nid'");

$res=$conn->query("select * from tempreg where no='$userid'");
if($res->num_rows>0)
{

while($result=mysqli_fetch_assoc($res)){
$name=$result['name'];
$ph=$result['phoneno'];
$email=$result['email'];
$lic=$result['license'];
$vot=$result['viterid'];

}
}
$conn->query("insert into deletereg(no,name,phoneno,email,license,viterid) values('$userid','$name','$ph','$email','$lic','$vot')");

$nottype=$conn->query("select nottype from notification where notid='$nid'");
$or=$conn->query("select ora from notification where notid='$nid'");

$conn->query("insert into delnot(notid,type,user,nottype,ora) values($nid,'$type','$name','$nottype','$or')");
$conn->query("delete from notification where no='$userid' and notid='$nid'");
$res=$conn->query("select *from tempreg where no='$userid'");
if($res->num_rows>0)
{
echo 'alert(" deletion not possible")';
}
else
{
echo'alert("deleted success fully")';
}


?>
<a href="ownerhome.php">back to home</a>

</body>
</html>
