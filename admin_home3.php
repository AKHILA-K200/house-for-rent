<html>
<head>
<title>admin home
</title>
<link rel="stylesheet" type="text/css" href="dropdown.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
a{
  background-color: #00BFFF;
  color: white;
}
.content {
  max-width:1000px;
  margin: auto;
  background: white;
  padding: 10px;
  }

</style></head>
<body>
  
<?php
 include 'dataconnect.php';
 $no=$_GET['id'];
 ?><div class="content">
  <table width="100%">
  <center><tr><center>
  <td><center><h2>WELCOME ADMIN</h2></center>
  </td></center>
 </tr>
  <tr><center>
  <td><center>
	  <div class="navbar">
 <?php  echo'<a  class="active" href="admin_home.php?id='.$no.'">HOME</a>';?>
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
	  </div>
	  </center>
  </td></center>
  </tr>
  </table>
 </body></html>
