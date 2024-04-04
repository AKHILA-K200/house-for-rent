<html>
<head>
<title>admin home
</title>

        
<link rel="stylesheet" type="text/css" href="css/dropdown.css">

<link rel="stylesheet" type="text/css" href="css/adminhome.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    
body {
  margin: 0;
  background:#555;
  }
  
  .content {
  max-width: 1000px;
  margin: auto;
  background: white;
  padding: 10px;
  }
 #fontletter{
      text-shadow: 4px 4px #FF0000;
      font-size:100px;
      font-family:URW Chancery L;
      }
 .topnav {
 overflow: hidden;
  background-color:black;
}

.topnav a {
  float: left;
  color:#FFFFFF;
  text-align: center;
  padding: 14px 14px;
  font-size: 20px;
}

.topnav a:hover {
  background-color:white; ;
  color: black;
}
.down{
transform:rotate(45deg);
-webkit-transform:rotate(45deg);

}
 .but{
 color:#FF0000;
  text-shdow:0 5px #666;
  transform:transalateY(4px);
  
}

  </style>
</head>
<body>
<?php
 include 'dataconnect.php';
 $userid=$_GET['id'];
 ?>
 <div class="content">
 <table width="100%">
<tr><center>
<td><center><img src="images/hfr3.jpeg" height="100" width="100">
        <font id="fontletter">Your Dream House</font><img src="images/hfr3.jpeg" height="100" width="100"></center>
      </td></center>
        </tr>
        <?php
        echo'<tr><td align="right"><a href="renter_home3.php?id='.$userid.'">View Profile</a></td></tr>';
        ?>
  <tr><center>
  <td cellspacing="3">
    <div class="topnav">
   <?php echo'<a  class="active" href="home.php?id='.$userid.'">HOME</a>';?>
 echo'<a href="furnish.php?id='.$userid.'">Furnished</a>';
   echo'<a href="flats.php?id='.$userid.'">Flats</a>';
    echo'<a href="search.php?id='.$userid.'">Search</a>';?>
    <a href="logout.php">LOGOUT</a>
    <center>
    </tr>
<?php
    $sql=$conn->query("select * from advertisement,address where apornot='1' and cno is null and typeofh='1' and advertisement.no=address.no");
    if($sql->num_rows >0)
    {
      echo'<form>';
      while($result=mysqli_fetch_assoc($sql))
      {
       
$num=$result['num'];
$t=$result['typeof'];
$bhk=$result['bhk'];
$sqrft=$result['sqrft'];
$facing=$result['facing'];
$flatcno=$result['flatcno'];
$ebc=$result['ebc'];
$tax=$result['tax'];
$rent=$result['rent'];
$floor=$result['floor'];
$adno=$result['adno'];
$year=$result['year'];
$pkno=$result['pkno'];
$cno=$result['cno'];
$des=$result['description'];

    $hno=$result['hno'];
$sec=$result['section'];
$hname=$result['hname'];
$sname=$result['sname'];
$village=$result['village'];
$vard=$result['vardno'];

$pcity=$result['city'];
$pdist=$result['disno'];
$ppin=$result['pcode'];
}
$res=$conn->query("select * from typeofh where typeof='$t'");
      if($res->num_rows >0)
      {
        while($ts=mysqli_fetch_array($res))
        {
          $typeofh=$ts['tpfhtype'];
        }
      }
      $ad=$conn->query("select * from image where num='$num'");
      if($ad->num_rows >0)
      {
        while($ads=mysqli_fetch_assoc($ad))
        {
          $im1=$ads['img1'];
        }
      }
 echo '<table border="2"><tr><td><img src="'.$im1.'" height="150" width="200"></td>';

 
 
 echo'<td><table><tr><td><b>'.$hname.'</b></td></tr>';
 echo'<tr><td><b>'.$pcity.'</b></td></tr>';
  echo'<tr><td><span class="glyphicon glyphicon-bed">'.$bhk.'</span></td>';
 echo'<td><i class="fas fa-vector-square">Sqrft:'.$sqrft.'</i></td></tr>'; 
 echo'<tr><td><i class="fas fa-home">floor:'.$floor.'</i></td>';

 echo'<tr><td><a href="viewadv.php?id='.$num.'&name='.$userid.'">View more</a></td></tr></table></td></tr>';
 echo'<tr><td bgcolor="grey" colspan="3"><font size="5" color="white">RS.'.$rent.'</font></td><td bgcolor="grey"><font size="5" color="white">'.$typeofh.'</font></td>';
}
 
    echo'</form>';  
   ?>

    </div>
    </center>
  </td></center>
  </tr>


  </table></div>
 </body></html>
