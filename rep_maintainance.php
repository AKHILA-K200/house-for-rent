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
  table,tr,td{
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
 $d1=$_GET['id'];
 $d2=$_GET['name'];
  ?>/<div class="content">
  <table width="100%">
    <center>
    <tr><center><th colspan="5">YOUR DREAM HOME</th></center></tr>

    <tr><center><th colspan="5">Phone no:0484-2345667</th></center></tr>

    <tr><center><th colspan="5">Kalamassery,Opp.postoffice</th></center></tr>

    <tr><center><th colspan="5">Ernakulam</th></center></tr>

    <tr><center><th colspan="5">Pin:683209</th></center></tr>
    <tr><center>
  <th colspan="5"><center><b>MAINTAINANCE REPORT </b></center>
  </th></center>
 </tr>
  
    <tr><th>from:<?php echo  $d1;?> &nbsp; &nbsp;&nbsp;To:<?php echo $d2;?></th><th>Date:<?php $dt=date("Y/m/d H:i:s");
 echo $dt;?></th></tr>

  <tr><td>work name</td>
    <td>Name</td>
    <td>Charge</td>
    <td>date</td>
  </tr>
    <div class="topnav">
      <?php
      
       $mt=0;
       $charge=0;
        $sql=$conn->query("select * from maintainance where mdate>='$d1' and mdate<='$d2' and mcomplete='1'");
      if($sql->num_rows >0)
      {
        
        while($res=mysqli_fetch_assoc($sql))
        
  {
    $mnum=$res['num'];
    
    $no=$res['no'];
    $mname=$res['mname'];
 $mcharge=$res['mcharge'];
    $mdate=$res['mdate'];

   $mt=$mt+1;
   $charge=$charge+$mcharge;
   $nm=$conn->query("select * from owner where no='$no'");
   if($nm->num_rows >0)
   {
    while($nme=mysqli_fetch_assoc($nm))
    {
      $name=$nme['name'];
    }
   }
   echo'<tr><td>'.$name.'</td>';
     echo'<td>'.$mname.'</td>';
       echo'<td>'.$mcharge.'</td>';
         echo'<td>'.$mdate.'</td></tr>';
        
  }
  
}

   echo'<tr><td colspan="4">Total no.of maintainance:'.$mt.'</td></tr>';
   echo'<tr><td colspan="4">Total Charge:'.$charge.'</td></tr>';
    echo '<tr><td colspan="4"><button onclick="myfunction()">Print</button></td></tr>';
    ?>
    </div>
    </center>
  </td></center>
  </tr>
  

  </table>
 </body></html>
