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
  table,tr,td
  {
    border: 1px solid black;
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
  <center>  <center>
    <tr><center><th colspan="5">YOUR DREAM HOME</th></center></tr>

    <tr><center><th colspan="5">Phone no:0484-2345667</th></center></tr>

    <tr><center><th colspan="5">Kalamassery,Opp.postoffice</th></center></tr>

    <tr><center><th colspan="5">Ernakulam</th></center></tr>

    <tr><center><th colspan="5">Pin:683209</th></center></tr>
    <tr><center>
  <th colspan="5"><center><b>REGISTRATION REPORT  </b></center>
  </th></center>
 </tr>
  
    <tr><th>from:<?php echo  $d1;?> &nbsp; &nbsp;&nbsp;To:<?php echo $d2;?></th><th>Date:<?php $dt=date("Y/m/d H:i:s");
 echo $dt;?></th></tr>
  
  
    <div class="topnav">
      <?php
      $abc="SELECT count(*) as c FROM owner";
$result=mysqli_query($conn,$abc);
if($result)
 {
    while($row=mysqli_fetch_assoc($result))
  {
        $s=$row['c'];
  }     
 }
$ow=0;
$rr=0;
        $sql=$conn->query("select * from owner where apornot='1' and odate>='$d1' and odate<='$d2'");
      if($sql->num_rows >0)
      {
        echo'<tr><td>Owners</td><td>Date</td>';
        while($res=mysqli_fetch_assoc($sql))
        
  {
    $name=$res['name'];

 
    $odate=$res['odate'];
$or=$res['ora'];
  
  if($or=='o')
  {
   $ow=$ow+1;
   echo'<tr><td>'.$name.'</td>';
   echo'<td>'.$odate.'</td></tr>';
  }
  }
}
$sql=$conn->query("select * from owner where apornot='1' and odate>='$d1' and odate<='$d2'");
      if($sql->num_rows >0)
      {
        echo'<tr><th>Renters</th><th>Date</th>';
        while($res=mysqli_fetch_assoc($sql))
        
  {
    $name=$res['name'];
$odate=$res['odate'];
$or=$res['ora'];
  
  if($or=='r')
  {
   $rr=$rr+1;
   echo'<tr><td>'.$name.'</td>';
   echo'<td>'.$odate.'</td></tr>';
  }
}
  
}
   echo'<tr><td>Total no.of owners:'.$ow.'</td>';
    echo'<td>Total no.of owners:'.$rr.'</td></tr>';
    echo '<tr><td><button onclick="myfunction()">Print</button></td></tr>';
    ?>
    </div>
    </center>
  </td></center>
  </tr>
  

  </table>
 </body></html>
