<html>
<head>

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
 
 text-align: center;
 color:#ADD8E6;
}

</style>
</head>
<body>
  <div class="content">
<?php
include 'dataconnect.php'; 
echo "<table>";
$sql=$conn->query("select * from notification where notid='$nid'");
if($sql->num_rows >0)
{
  While($row=mysqli_fetch_assoc($sql))
  {
    $userid=$row['no'];
    $count=$row['count'];
    $advno=$row['advno'];
    $ora=$row['ora'];
    $ono=$row['ono'];
    $nottype=$row['nottype'];
  }
}
if($ora=="r")
{
$sql=$conn->query("select * from advertisement where no='$ono' and advno='$advno'");
if($sql->num_rows>0)
{
while($result=mysqli_fetch_assoc($sql)){
  $ora=$result['ora'];
  $adno=$result['adno'];
}
}
$sql=$conn->query("select * from owner where  no='$ono'");
{
  while($res=mysqli_fetch_assoc($sql))
  {
    $name=$result['name'];
$ph=$result['phoneno'];

  }
}
$sql=$conn->query("select * from owner where  no='$userid'");
{
  while($res=mysqli_fetch_assoc($sql))
  {
    $name=$result['name'];
$ph=$result['phoneno'];

  }
}
$sql=$conn->query("select * from address where no='$ono' and adno='$adno'");
if($sql->num_rows >0)
{
  While($row=mysqli_fetch_assoc($sql))
  {
    $hno=$row['hno'];
$sec=$row['section'];
$hname=$row['hname'];
$sname=$row['sname'];
$village=$row['village'];
$vard=$row['vardno'];

$pcity=$row['city'];
$pdist=$row['disno'];
$ppin=$row['pin'];


  }
}
$sql=$conn->query("select * from advertisement where no='$ono' and advno='$advno'");
       if($sql->num_rows >0)
       {
        while($res=mysqli_fetch_assoc($sql))
     {  
      $rent=$res['rent'];
        $tax=$res['tax'];
 }
 }

echo'<tr><td>the tenant on your advertisement is left and advertisement is ready for accepting next tenant</tr></td>';
 echo '<tr><td>The advertisement is</td></tr>';
 echo '<tr><td>Tax no:'.$tax.'</td></tr>';
echo"<tr><td>".$im1."</td>";
echo"<td>".$im2."</td></tr>";
echo"<tr><td>".$im3."</td>";
echo"<td>".$im4."</td></tr>";
echo" <tr><td>House no:</td><td>".$hno."</td></tr>";
echo" <tr><td>Section:</td><td>".$sec."</td></tr>";
echo" <tr><td>Vardno</td><td>".$vard."</td></tr>";
echo" <tr><td>street name:</td><td>".$sname."</td></tr>";
echo" <tr><td>village:</td><td>".$village."</td></tr>";
echo" <tr><td>district no</td><td>".$disname."</td></tr>";
echo" <tr><td>pincode:</td><td>".$ppin."</td></tr>";
echo'<tr><td><a href="owner_notificationdisplay.php">Back to notification</a></td></tr>';
echo '</table>';

}
else
{
   echo'you are left from the advertaisement';
}
?>
</div>
</body>
</html>