<html>
<head>
<title>admin home
</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/adminhome.css">
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
  max-width: 1000px;
  margin: auto;
  background: white;
  padding: 10px;
  }
</style></head>
<body>
  
<?php
 echo'<form action="" method="POST">'; 
  ?><div class="content">
  <table width="700">
  <center><tr><center>
  <td colspan="5"><center><h2>MAKE YOUR REPORTS</h2></center>
  </td></center>
 </tr>
  
  
    <div class="topnav">
      <tr><center>
      <td colspan="5">
      From Date:
        <input type="date" name='d1'></td></center></tr>
         <tr><center>
      <td colspan="5">
      From Date:
        <input type="date" name='d2'></td></center></tr>
        <tr><td><input type="submit" name="reg" value="REGISTRATION"></td><td><input type="submit" name="ow" value="OWNERS"></td>
       <td><input type="submit" name="rr" value="RENTERS"></td>
        <td><input type="submit" name="mt" value="MAINTAINANCE"></td>
     <td><input type="submit" name="py" value="PAYMENTS"></td></tr>
         <?php
echo'</form>';
?>
           <?php
           if(isset($_REQUEST['reg']))
           {
            $d1=$_POST['d1'];
           $d2=$_POST['d2'];
           echo $d1;
         echo'<script>window.confirm("Are You Sure!!");
                   window.location.href="rep_registration.php?id='.$d1.'&name='.$d2.'";</script>'; 
       }
    if(isset($_REQUEST['ow']))
           {
            $d1=$_POST['d1'];
           $d2=$_POST['d2'];
            echo'<script>window.confirm("Are You Sure?");
                   window.location.href="rep_owners.php?id='.$d1.'&name='.$d2.'";</script>'; 
                 }
                 if(isset($_REQUEST['rr']))
           {
            $d1=$_POST['d1'];
           $d2=$_POST['d2'];
            echo'<script>window.confirm("Are You Sure?");
                   window.location.href="rep_renter.php?id='.$d1.'&name='.$d2.'";</script>'; 
                 }
                 if(isset($_REQUEST['mt']))
           {
            $d1=$_POST['d1'];
           $d2=$_POST['d2'];
            echo'<script>window.confirm("Are You Sure?");
                   window.location.href="rep_maintainance.php?id='.$d1.'&name='.$d2.'";</script>'; 
                 }
                 if(isset($_REQUEST['py']))
           {
            $d1=$_POST['d1'];
           $d2=$_POST['d2'];
            echo'<script>window.confirm("Are You Sure?");
                   window.location.href="rep_py.php?id='.$d1.'&name='.$d2.'";</script>'; 
                 }

        ?>
    </div>
    </center>
             
  </tr>
  </table>
 
 </body></html>

