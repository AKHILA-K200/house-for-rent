<html>
<head>
<title>
Rejecting page</title>
</head>
<body>
<?php 
include 'dataconnect.php';

$nid=$_GET['id'];
$conn->query("update notification set count=1 where notid='$nid'");

$sql=$conn->query("select * from notification where notid='$nid'");
if($sql->num_rows >0)
{
	while($res=mysqli_fetch_assoc($sql))
	{
		$userid=$res['no'];
	}
}

$res=$conn->query("select *from owner where no='$userid' ");
if($res->num_rows>0)
{

while($result=mysqli_fetch_assoc($res)){

$name=$result['name'];
$ph=$result['phoneno'];
$email=$result['email'];
$lic=$result['license'];
$vot=$result['viterid'];
$ora=$result['ora'];
}
}
$sql=$conn->query("insert into deletereg(no,name,phoneno,email,license,viterid,ora)values('$userid','$name',$ph,'$email','$lic','$vot','$ora')");

$res=$conn->query("delete from owner where no='$userid' ");

$conn->query("delete from notification where no='$userid' and notid='$nid'");

if($res->num_rows>0)
{
echo 'alert(" deletion not possible")';
}
else
{
echo'<script>window.alert("Deleted successfully!!");
			             window.location.href="admin_notifydisplay.php";</script>'; 
}

?>
</body>
</html>
