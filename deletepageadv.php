<html>
<head>
<title>
deleting advertisement</title>
</head>
<body>
<?php
include'dataconnect.php';
$userid=$_GET['id'];
$nid=$_GET['name'];
$advno=$conn->query("select advno from tempadv where notid='$nid'");
$conn->query("update notification set read=1 where notid='$nid'");
$nottype=$conn->query("select nottype from notification where notid='$nid'");
$res=$conn->query("select *from tempadv where advno='$advno' and notid='$nid'");
if($res->num_rows>0)
{

while($result=mysqli_fetch_assoc($res)){
$no=$result['no'];
$forb=$result['forb'];
$noofbatch=$result['nofbatch'];
$bhk=$result['bhk'];
$sqrft=$result['sqrft'];
$rent=$result['rent'];
$floor=$result['floor'];
$adn=$result['adno'];
$hno=$result['hno'];
$sec=$result['section'];
$vard=$result['vardno'];
$sname=$result['sname'];
$type=$result['type'];
$village=$result['village'];
$dis=$result['disno'];
$pin=$result['pcode'];
$im1=$result['img1'];
$im2=$result['img2'];
$im3=$result['img3'];
$im4=$result['img4'];
$pkn=$result['pkno'];
$wf=$result['waterfno'];
$des=$result['description'];
$pm=$result['pmuri'];
$sroom=$result['sroom'];
$groom=$result['groom'];
$warea=$result['warea'];
$droom=$result['droom'];
$cout=$result['citout'];
$cno=$result['cno'];


}
}
$conn->query("insert into deleteadv(no,advno,forb,nofbatch,bhk,sqrft,rent,floor,adno,hno,section,vardno,sname,type,village,disno,pcode,img1,img2,img3,img4,pkno,waterfno,description, pmuri,sroom,groom,droom,warea,citout,cno) values($no',$advno,'$forb',$nofbatch,$bhk,$rent,'floor','$adn',$hno,'$sec',$vard,'$sname','$type','$village',$dis,'$pin','$im1','$im2','$im3','$im4',$pkn,$wf,'$des','$pm','$sroom','$groom','$warea','$droom','$cout','$cno')");
$or=$conn->query("select ora from notification where notid='$nid'");

$conn->query("insert into delnot(notid,user,nottype,ora) values($nid,'$type','$name','$nottype','$or')");

$conn->query("delete from notification where no='$no' and notid='$nid'");
$conn->query("delete from tempadv where no='$no' and advno='$advno'");
$res=$conn->query("select *from tempadv where notid='$nid");
if($res->num_rows>0)
{
echo 'alert(" deletion not possible"."window.location="admin_notifydisplay.php")';
}
else
{
echo'alert("deleted success fully")';
}

?>
</body>
</html>
