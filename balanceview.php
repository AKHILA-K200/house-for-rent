<html>
<head>
<title>Balance view</title>
	<link rel="stylesheet" type="text/css" href="createaccount.css">

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
  max-width: 600px;
  margin: auto;
  background: white;
  padding: 10px;
  }
  td{
    font-size: 18px;
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
  <?php
  include 'dataconnect.php';
  $nid=$_GET['id'];
  $pid=$_GET['name'];
  $sql=$conn->query("select * from notification where notid='$nid'");
if($sql->num_rows >0)
{
  While($row=mysqli_fetch_assoc($sql))
  {
    $userid=$row['no'];
    $count=$row['count'];
    $advno=$row['advno'];
    $pid=$row['pid'];
    $ora=$row['ora'];
    $ono=$row['ono'];
  }
}
/*if($ora=='r')
{
$sql=$conn->query("select * from account where no='$ono'");
if($sql->num_rows >0)
{
  while($res=mysqli_fetch_assoc($sql))
  {
    $bank=$res['bank'];
  $acc_type=$res['acc_type'];
  $acc_number=$res['acc_number'];
  $acc_name=$res['acc_name'];
  $branch=$res['branch'];
  $ifsc=$res['isc'];
  $baddress=$res['baddress'];
  $amt=$res['amount'];
  
  }
}
$sql=$conn->query("select * from account where no='$userid'");
if($sql->num_row >0)
{
  while($res=mysqli_fetch_assoc($sql))
  {
    $rent=$res['rent'];
    $rentdate=$res['rentdate'];

  }
}
$sql=$conn->query("select * from owner where no='$ono'");
if($sql->num_rows >0)

{
  while($res=mysqli_fetch_assoc($sql))
  {
    $name=$res['name'];
  }
}?>  
<tr bgcolor="#555"><td colspan="3" align="center">YOUR BANK ACCOUNT DETAILS </td></tr>
    <tr><td colspan="3">Bank<?php echo $bank; ?></td></tr>
    <tr>
      <td colspan="3">Account Name: <?php echo $acc_name;?></td></tr>
       <tr><td colspan="3">Account Number:<?php echo $acc_number; ?></td></tr>
       <tr><td colspan="3"> Account Type:<?php echo $acc_type; ?></td></tr>
        <tr><td colspan="3">  Branch: <?php echo $branch ;?></td></tr>
        <tr><td colspan="3">  IFSC Code:<?php echo $ifsc; ?></td></tr>
         <tr><td colspan="3">   Bank Address:<?php echo $baddress; ?></td></tr>
         <tr><td colspan="3">Total amount on your account is:<?php echo $amt;?></td></tr>
         <tr><td colspan="3">Rent amount paid is:<?php echo $rent;?></td></tr>
         <tr><td colspan="3">Paid by:<?php echo $name;?></td><td> on:<?php echo $rentdate;?></td></tr>
         <?php 
    }
    else*/
       $sql=$conn->query("select * from advertisement where num='$advno'");
       if($sql->num_rows >0)
       {
        while($res=mysqli_fetch_assoc($sql))
     {
       
      $rent=$res['rent'];
      
 }
       }
      $sql=$conn->query("select * from  py where pid='$pid'");
if($sql->num_rows >0)
{
  while($res=mysqli_fetch_assoc($sql))
  { 
    $amt=$res['amt'];
    $name=$res['name'];
    $pdate=$res['pdate'];  }
}







       $sql=$conn->query("select * from account where no='$ono'");
if($sql->num_rows >0)
{
  while($res=mysqli_fetch_assoc($sql))
  {
    $bank=$res['bank'];
  $acc_type=$res['acc_type'];
  $acc_number=$res['acc_number'];
  $acc_name=$res['acc_name'];
  $branch=$res['branch'];
  $ifsc=$res['isc'];
  $baddress=$res['baddress'];
  $amt=$res['amount'];
  
  }
}


?>  
<table>
<tr bgcolor="#555"><td colspan="3" align="center">YOUR BANK ACCOUNT DETAILS </td></tr>
    <tr><td colspan="3">Bank<?php echo $bank; ?></td></tr>
    <tr>
      <td colspan="3">Account Name: <?php echo $acc_name;?></td></tr>
       <tr><td colspan="3">Account Number:<?php echo $acc_number; ?></td></tr>
       <tr><td colspan="3"> Account Type:<?php echo $acc_type; ?></td></tr>
        <tr><td colspan="3">  Branch: <?php echo $branch ;?></td></tr>
        <tr><td colspan="3">  IFSC Code:<?php echo $ifsc; ?></td></tr>
         <tr><td colspan="3">   Bank Address:<?php echo $baddress; ?></td></tr>
         <tr><td colspan="3">Total amount on your account is:<?php echo $amt;?></td></tr>
         <tr><td colspan="3">Amount paid is:<?php echo $amt;?></td></tr>
         <tr><td colspan="3">Paid by:<?php echo $name;?></td></tr><tr><td> on:<?php echo $pdate;?></td></tr>
       <?php
        $sql=$conn->query("select * from login where no='$no'");
  if($sql->num_rows >0)
  {
    while($res=mysqli_fetch_assoc($sql))
{
  $catno=$res['catno'];
  }
}
if($catno=='1')
{
echo'<tr><td><a href="admin_home3.php?id='.$ono.'">back to home</a></td>';
}
else if($catno=='3')
{
  echo'<tr><td><a href="renter_home3.php?id='.$ono.'">back to home</a></td>';

}
else
{
  echo'<tr><td><a href="owner_home3.php?id='.$ono.'">back to home</a></td>';
}
?>
      </table>
</body>
</html>
         
