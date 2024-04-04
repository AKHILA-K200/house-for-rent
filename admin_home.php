<html>
<head>
<title>admin home
</title>
<link rel="stylesheet" type="text/css" href="dropdown.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<slink rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
<style>
body
{
	background-image:url("images/im1.jpg");
	height:100%;
	width:100%;
  background-position:center;
  background-repeat:no-repeat;
  background-size:cover;
}

.content {
  width:1000px;
  margin: auto;
  background: white;
  padding: 10px;
  }
  
 

</style></head>
<body>
  <div class="content">
<?php
 include 'dataconnect.php';
 
 $no=$_GET['id'];
  ?>
  <table>
  <center><tr><center>
  <td><center><h2>WELCOME ADMIN</h2></center>
  </td></center>
 </tr>
 <tr><td>
    <div class="navbar">
 <?php   echo'<a  class="active" href="admin_home.php?id='.$no.'">HOME</a>';?>
 <div class="dropdown">
  <button class="dropbtn">USERS</button>
  <div class="dropdown-content"><?php
    echo'<a href="admin_owner.php?id='.$no.'">VIEW OWNER</a>';
    echo'<a href="admin_renter.php?id='.$no.'">VIEW RENTER</a>';
 echo'<a href="admin_advertisement.php?id='.$no.'">ADVERTISEMENT</a>';
   echo' <a href="admin_maintainance.php?id='.$no.'">MAITAINANCE</a>';
echo '<a href="admin_payment.php?id='.$no.'">PAYMENTDETAILS</a>';?>
</div>
</div>
<?php


    echo'<a href="admin_notifydisplay.php?id='.$no.'">NOTIFICATION</a>';
    
   echo' <a href="admin_workers.php?id='.$no.'">WORKERS</a>';?>

    <a href="logout.php">logout</a>
 
    </td></tr>
  
  <center><tr><center><td><?php include'reports.php';?></td></center></tr></center>
  </table>   </div>
 </body></html>
