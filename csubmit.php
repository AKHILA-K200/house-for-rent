
<html>
<head>
<title>
Registration approving</title>
</head>
<body>
<?php
include'dataconnect.php';
include 'admin_notification.php';
$name=$_POST['name'];
$email=$_POST['uname'];
$phn=$_POST['cno'];
$lic=$_POST['lic'];
$vot=$_POST['vot'];
$or=$_POST['ora'];
$sql=$conn->query("select * from owner");
if($sql->num_rows >0)
{
  while($row=mysqli_fetch_assoc($sql))
  {
    $em=$row['email'];
    $phone=$row['phoneno'];
    if(($email==$em)||($phn==$phone))
    {
    echo'<script>window.alert("Phone number or email already exist!!");
                   window.location.href="login1.php";</script>';

    }
  else
  {



if($or==1)
 $ora="o";
else
  $ora="r";
  
$type="Registration ";
$abc="SELECT count(*) as c FROM owner";
$result=mysqli_query($conn,$abc);
if($result)
 {
    while($row=mysqli_fetch_assoc($result))
  {
        $s=$row['c'];
  }     
 }

	
	$p=1;
	$s=$s+$p;	
	$no="oid".$s;
	$result=$conn->query("select * from owner where name='$name' and email='$email' and phoneno='$phn' "); 
    if($result->num_rows >0)
    {
    
      while($res=mysqli_fetch_assoc($result))
      {
      	$no=$res['no'];      }
    $conn->query("update owner set name='$name' where no='$no'");
   
    }
    else
    {
$conn->query("insert into owner(no,name,phoneno,email,license,viterid,ora)values('$no','$name','$phn','$email','$lic','$vot','$ora')");

$nottype="reg";
notify($type,$name,$no,$nottype,$ora);
}
echo'<script>window.alert("Registration completed please check your email for further updates!!");
			             window.location.href="login1.php";</script>'; 


}
}
}
?>
</body>
</html>
