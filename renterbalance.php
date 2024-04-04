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
  max-width: 700px;
  margin: auto;
  background: white;
  padding: 10px;
  }
  table,tr,th{
    border:1px solid black;
  }
</style>
<script type="text/javascript">
  function myfunction()
  {
    window.print();
  }
</script></head>
<body>
  
<?php
 include'dataconnect.php';
 
  ?>s<div class="content">
  <table width="100%">
  <center><tr><center>
  <th colspan="5"><center><h2>Payment details</h2></center>
  </th></center>
 </tr>
  
  <tr>
    <th>Name</th>
    <th>To</th>
    <th>Amount</th>
    <th>date</th>
  </tr>
    <div class="topnav">
      <?php
      
       $mt=0;
       $charge=0;

        $st=$conn->query("select * from py where no='$userid' ");
      if($st->num_rows >0)
      {
       
        while($res=mysqli_fetch_assoc($st))
        
  {
    $name=$res['name'];
    
    $amt=$res['amt'];
    $ton=$res['ton'];
    $mdate=$res['pdate'];
  $mt=$mt+$amt;
   $nm=$conn->query("select * from owner where no='$ton'");
   if($nm->num_rows >0)
   {
    while($nme=mysqli_fetch_assoc($nm))
    {
      $tname=$nme['name'];
    }
   }
   echo'<tr><td>'.$name.'</td>';
     
       echo'<td>'.$tname.'</td>';
       echo'<td>'.$amt.'</td>';
         echo'<td>'.$mdate.'</td></tr>';
        
  }
  
}

   echo'<tr><td colspan="5">TotalPayment:'.$mt.'</td>';
   $p=1;
echo'<tr><td><a href="admin_notifydisplay.php?id='.$p.'">Back to home</a></td></tr>';
    
    ?>
    </div>
    </center>
  </td></center>
  </tr>
  

  </table>
 </body></html>
