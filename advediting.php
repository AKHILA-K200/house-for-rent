<html>
<head>
<title>
Advertisement approving</title>
</head>
<body>
<?php
include'dataconnect.php';
include 'admin_notification.php';


$forb=$_POST['forb'];

$type=$_POST['typeof'];
$hno=$_POST['hno'];
$sec=$_POST['sec'];
$year=$_POST['year'];
$bhk=$_POST['bhk'];
$sqrft=$_POST['sqrft'];
$fr=$_POST['fr'];
$facing=$_POST['facing'];
$par=$_POST['pkg'];
$fcno=$_POST['fcno'];
$rent=$_POST['rent'];
$cons=$_POST['cons'];
$tax=$_POST['tax'];
$details=$_POST['details'];
$bn=$_POST['bn'];
$fur=$_POST['fy'];
$f1p=$_POST['f1'];
$f2p=$_POST['f2'];
$f3p=$_POST['f3'];
$f4p=$_POST['f4'];
$aut=$_POST['autname'];
$autcno=$_POST['autcno'];
$autemail=$_POST['autemail'];
$autdob=$_POST['autdob'];
$autcur=$_POST['autcur'];
$autcity=$_POST['autcity'];
$autdist=$_POST['autdist'];
$autpin=$_POST['autpin'];
$autdesg=$_POST['autdesg'];
$rel=$_POST['rel'];

  $conn->query("update owner set license='$lic' where no='$userid'");
   $conn->query("update owner set viterid='$vot' where no='$userid'");
   $conn->query("update owner set dob='$dob' where no='$userid'");
   
    $conn->query("update owner set desg='$desg' where no='$userid'");
     $conn->query("update owner set city='$ocity' where no='$userid'");
     $conn->query("update owner set curaddress='$cur' where no='$userid'");
      $conn->query("update owner set pin='o$pin' where no='$userid'");
       $conn->query("update owner set disno='o$dist' where no='$userid'");
$abc="SELECT count(*) as c FROM advertisement where no='$userid'";
$result=mysqli_query($conn,$abc);
if($result)
 {
    while($row=mysqli_fetch_assoc($result))
  {
        $s=$row['c'];
  }     
 }
 $advno=$s+1;
 $adno=$advno;
$sql=$conn->query("select * from account where no='$userid'");
	
if($sql->num_rows >0)
{
	echo " ";
}
else
{
	$bank=$_POST['bank'];
	$acc_name=$_POST['acc_name'];
	$acc_number=$_POST['acc_number'];
	$acc_type=$_POST['acc_type'];
	$branch=$_POST['branch'];
	$ifsc=$_POST['ifsc'];
	$baddress=$_POST['baddress'];
		$conn->query("insert into account(no,ora,bank,acc_name,acc_number,acc_type,branch,isc,baddress)values('$userid','$ora','$bank','$acc_name','$acc_number','$acc_type','$branch','$ifsc','$baddress')");
}
$conn->query("insert into advertisement(no,oname,typeof,advno,ora,bhk,forb,sqrft,facing,fy,flatcno,ebc,tax,rent,floor,adno,type,year,pkno,description,loan,autname,autdob,autcno,dis,autpin,autdesg,autemail,relation)values('$userid','$oname',$type,$advno,'$ora',$bhk,$forb,'$sqrft','$facing','$fur','$fcno','$cons','$tax',$rent,$fr,'$adno',$typeofg,'$year',$par,'$details','$bn','$aut','$autdob','$autcno',$autdist,'$autpin','$autdesg','$autemail','$rel')");
$conn->query("insert into address(adno,no,hno,hname,section,vardno,sname,village,city,type,disno,pcode,img1)values($adno,'$userid',$hno,'$hname','$sec','$vard','$sname','$village','$pcity',$typeofg,$pdist,$ppin,'$f1p')");
$nottype="adv";
$no=$userid;
$user=$name;
$type="advertisement creation of owner";
notifyadv($type,$name,$no,$nottype,$ora,$advno);
echo'<script>window.alert("Advertisement created successfully.Please wait for the admin approvation");
			             window.location.href="owner_home.php";</script>'; 
?>
