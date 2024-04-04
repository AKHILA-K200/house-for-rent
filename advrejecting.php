<html>
<head>
<title>
Advertisement rejecting</title>
</head>
<body>
<?php
include'dataconnect.php';
$nid=$_GET['id'];

$sql=$conn->query("select * from notification where notid='$nid'");
if($sql->num_rows >0)
{
	While($row=mysqli_fetch_assoc($sql))
	{
		$userid=$row['no'];
    $count=$row['count'];
    $advno=$row['advno'];
    $ora=$row['ora'];
	}     
}
if($count==0)
{
  $conn->query("update notification set count=1 where notid='$nid' ");
}
?>
<table><?php
if($ora=="o")
{
$sql=$conn->query("select * from advertisement where no='$userid' and advno='$advno'");
if($sql->num_rows>0)
{
while($result=mysql_fetch_assoc($sql)){

$t=$resul['typeofh'];
$bhk=$result['bhk'];
$sqrft=$resul['sqrft'];
$facing=$result['facing'];
$flatcno=$result['flatcno'];
$ebc=$result['ebc'];
$tax=$result['tax'];
$rent=$result['rent'];
$floor=$result['floor'];
$adno=$result['adno'];
$year=$result['year'];
$pkno=$resul['pkno'];
$des=$result['description'];
$loan=$result['loan'];
$autname=$result['autname'];
$autdob=$result['autdob'];
$autcity=$result['autcity'];
$autcno=$result['autcno'];
$autpin=$result['autpin'];
$autdesg=$result['autdesg'];
$autemail=$result['autemail'];
$dis=$result['dis'];
$rel=$result['relation'];
$apn=$result['apornot'];
}
}



$conn->query("insert into deleteadv(no,oname,type,advno,bhk,sqrft,facing,flatcno,ebc,tax,rent,floor,adno,year,pkno,description,loan,autname,autdob,autcno,disno,autpin,autdesg,autemail,relation)values('$userid','$oname',$type,'$advno',$bhk,$sqrft,'$facing','$fcno','$cons','$tax',$rent,$fr,'$adno',$year,$par,'$details','$bn','$aut','$autdob','$autcno',$autdist,'$autpin','$autdesg','$autemail','$rel')");
$conn->query("delete from notification where no='$no' and notid='$nid'");
$conn->query("delete from advertiesement where no='$no' and advno='$advno'");

echo'<script>window.alert("deleted successfully!!");
			             window.location.href="admin_notifydisplay.php";</script>'; 
?>
</body>
</html>
