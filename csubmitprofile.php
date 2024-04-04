

<?php
include'dataconnect.php';
include 'admin_notification.php';
$name=$_POST['name'];
$phn=$_POST['cno'];
$lic=$_POST['lic'];
$vot=$_POST['votid'];
$desg=$_POST['desg'];
$cur=$_POST['cur'];  
$city=$_POST['city'];
$pin=$_POST['pin'];
$dist=$_POST['dist'];


	
	$conn->query("update login set pasword='$phn' where no='$userid'");
  $conn->query("update owner set phoneno='$phn' where no='$userid'");
  $conn->query("update owner set license='$lic' where no='$userid'");
   $conn->query("update owner set viterid='$vot' where no='$userid'");
    $conn->query("update owner set desg='$desg' where no='$userid'");
     $conn->query("update owner set city='$city' where no='$userid'");
     $conn->query("update owner set curaddress='$cur' where no='$userid'");
      $conn->query("update owner set pin='$pin' where no='$userid'");
      $conn->query("update owner set disno='$dist' where no='$userid'");
      $sql=$conn->query("select * from login where no='$userid'");
  if($sql->num_rows >0)
  {
    while($res=mysqli_fetch_assoc($sql))
{
  $catno=$res['catno'];
  }
}
if($catno=='1')
{

 echo'<script>window.alert("Updated succefully!!");
                  window.location.href="owner_home3.php?id='.$userid.'";</script>'; 

}
else if($catno=='3')
{

 echo'<script>window.alert("Updated succefully!!");
                  window.location.href="renter_home3.php?id='.$userid.'";</script>'; 

}
else
{
  
 echo'<script>window.alert("Updated succefully!!");
                  window.location.href="admin_home3.php?id='.$userid.'";</script>'; 
     
}
?>
