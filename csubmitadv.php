<html>
<head>
<title>
Advertisement approving</title>
</head>
<body>
<?php
include'dataconnect.php';
include 'admin_notification.php';

$dob=$_POST['dob'];
$cur=$_POST['cur'];
$ocity=$_POST['ocity'];
$odist=$_POST['odist'];
$opin=$_POST['opin'];
$desg=$_POST['odesg'];
$forb=$_POST['forb'];
$oname=$_POST['owname'];
$type=$_POST['tp'];
$hno=$_POST['hno'];
$sec=$_POST['sec'];
$hname=$_POST['hname'];
$sname=$_POST['sname'];
$village=$_POST['village'];
$vard=$_POST['vardno'];
$typeofg=$_POST['typeofg'];
$pcity=$_POST['pcity'];
$pdist=$_POST['pdist'];
$ppin=$_POST['ppin'];
$year=$_POST['year'];
$bhk=$_POST['bhk'];
$nofb=$_POST['nofb'];
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
      $conn->query("update owner set pin='$opin' where no='$userid'");
       $conn->query("update owner set disno='$odist' where no='$userid'");
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
		$conn->query("insert into account(no,bank,acc_name,acc_number,acc_type,branch,isc,baddress)values('$userid','$bank','$acc_name','$acc_number','$acc_type','$branch','$ifsc','$baddress')");
}
$conn->query("insert into advertisement(no,oname,typeof,advno,ora,nofbatch,bhk,forb,sqrft,facing,fy,flatcno,ebc,tax,rent,floor,adno,year,pkno,description,loan,autname,autdob,autcity,autcno,autpin,autdesg,autemail,dis,relation)values('$userid','$oname','$type','$advno','$ora','$nofb','$bhk','$forb','$sqrft','$facing','$fur','$fcno','$cons','$tax','$rent','$fr','$adno','$year','$par','$details','$bn','$aut','$autdob','$autcity','$autcno','$autpin','$autdesg','$autemail','$autdist','$rel')");
$conn->query("insert into address(adno,no,hno,hname,section,vardno,sname,village,city,type,disno,pcode)values($adno,'$userid',$hno,'$hname','$sec','$vard','$sname','$village','$pcity',$typeofg,$pdist,$ppin)");
$sql=$conn->query("select * from advertisement where no='$userid' and advno='$advno'");
if($sql->num_rows >0)
{
  while($res=mysqli_fetch_assoc($sql))
  {
    $num=$res['num'];
  }
}
$conn->query("insert into image(num,img1,img2,img3)values('$num','$f1p','$f2p','$f2p')");
$nottype="adv";
$no=$userid;
$user=$name;
$type="advertisement creation of owner";
notifyadv($type,$name,$no,$nottype,$ora,$advno);
echo'<script>window.alert("Advertisement created successfully.Please wait for the admin approvation");
			             window.location.href="owner_home3.php?id='.$userid.'";</script>'; 
?>
</body>
</html>

