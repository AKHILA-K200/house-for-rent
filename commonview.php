<html>
<head>
<title>Balance view</title>
	<link rel="stylesheet" type="text/css" href="createaccount.css">

<style>
       table, td, th {
  border: 0px solid black;
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
   {  border:0;
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
  <table>
  <?php
  include 'dataconnect.php';
  $nid=$_GET['id'];
  $conn->query("update notification set count='1' where notid='$nid'");
  $sql=$conn->query("select * from notification where notid='$nid'");
if($sql->num_rows >0)
{
  While($row=mysqli_fetch_assoc($sql))
  {
    $userid=$row['no'];
    $type=$row['type'];
    $count=$row['count'];
    $advno=$row['advno'];
    $ora=$row['ora'];
    $ono=$row['ono'];
    $nottype=$row['nottype'];
  }
}
if($nottype=="reg")
{
  //owner renter registration
$res=$conn->query("select * from owner where no='$userid'"); 
if($res->num_rows >0)
{
while($result=mysqli_fetch_assoc($res)){
$name=$result['name'];
$ph=$result['phoneno'];
$email=$result['email'];
$lic=$result['license'];
$vot=$result['viterid'];
$cur=$row['cur'];
    $dob=$row['dob'];
    $city=$row['city'];
    $dist=$row['distno'];
    $pin=$row['pin'];
    $desg=$row['desg'];
$or=$result['ora'];
}
}

include 'sviewreg.php';
}
else if($nottype=="pay")
{
  
   include 'renterbalance.php' ;
 
}

else if($nottype=="leav")
{
  include 'leave.php';
}

else
{

	echo'<tr><td><h2>'.$type.'</tr></td></h2>';
  echo '<tr><td><a href="owner_home3.php?id='.$ono.'">Back to home</td></tr>';
    
}
?>
</table>	
</body>
</html>