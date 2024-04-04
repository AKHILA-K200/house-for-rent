<html>
<head>
<meta http-equiv="refresh" content="10">

<link rel="stylesheet" type="text/css" href="css/style1.css">
<style>
  .content {
  max-width: 1000px;
  margin: auto;
  background: white;
  padding: 10px;
  }
  
  body
{
  background-image:url("images/im1.jpg");
  height:100%;
  width:100%;
  background-position:center;
  background-repeat:no-repeat;
  background-size:cover;
}
table {
  border-collapse: collapse;
 width:1000px;
}
td{
  border: 1px solid black;
}
th {
  height: 50px;
}
.hei{
  height:100px;
}
</style>
</head>
<body>
  <div class="content">
<?php
include 'dataconnect.php'; 
include 'admin_notification.php';
$userid=$_GET['id'];


echo"<table>";
 
   echo'<tr><th colspan="4">';
    include'renter_home3.php';
    echo'</th></tr>';
?>  <?php
echo"<tr><td>USERNAME</td>";
echo"<td>MESSAGE</td>";


echo"</tr>";
$sql=$conn->query("select * from notification where ono='$userid' or no='$userid' and ora not in('r') order by time desc");
if($sql->num_rows> 0)
{
While($row=mysqli_fetch_assoc($sql))
{
echo '<form>';
	$count=$row['count'];
if($count==0)
{
  echo '<tr bgcolor="#BFBFBF"> ';
  $nid= $row['notid'];
    $no=$row['no'];
    $ono=$row['ono'];
    $ora=$row['ora'];
    $advno=$row['advno'];
    $nottype=$row['nottype'];
echo " <td>". $row['user']."</td>";
echo " <td>". $row['type']."</td>";
}
    if($nottype=="acc")
    {
    	echo '<td><a href="acceptadvrenter.php?id='.$row['notid'].'">View</a></td>';            
              echo '<td><a href="deletingnotify.php?id='.$row['notid'].'"/>Delete</a></td></tr>';

    }
    else if($nottype=="pay")
    {
    	echo '<td><a href="renterbalance.php">View</a></td>';            
              echo '<td><a href="deletingnotify.php?id='.$row['notid'].'"/>Delete</a></td></tr>';

    }
    else if($nottype=="lev")
    {
    	echo '<td><a href="commonview.php?id='.$row['notid'].'" />View</a></td>';
        echo '<td><a href="deletingnotify.php?id='.$row['notid'].'"/>Delete</a></td></tr>';

    }
    else if($nottype=="left")
    {
    	echo '<td><a href="view.php?id='.$row['notid'].'">View</a></td>';            
              echo '<td><a href="deletingnotify.php?id='.$row['notid'].'"/>Delete</a></td></tr>';

    }
    else
    {
    echo '<td><a href="commonview.php?id='.$row['notid'].'" />View</a></td>';
        echo '<td><a href="deletingnotify.php?id='.$row['notid'].'"/>Delete</a></td></tr>';
	
    }

}
}
else
{
  echo '<tr><td></td><td>No notification yet</td></tr>';
}


//giving the notification of interested advertisement.

$sql=$conn->query("select * from advertisement where no='$userid' and advno='1'");
if($sql->num_rows >0)
{
    while($result=mysqli_fetch_array($sql))
    {
      
$t=$result['typeofh'];
$bhk=$result['bhk'];
$facing=$result['facing'];
$rent=$result['rent'];
$floor=$result['floor'];
$adno=$result['adno'];
$pkno=$resul['pkno'];
$des=$result['description'];
}  

$sql=$conn->query("select * from address where no='$userid' and adno='$adno'");
if($sql->num_rows >0)
{
  While($row=mysqli_fetch_assoc($sql))
  {


$pcity=$row['city'];
$pdist=$row['disno'];
}
}
$sql=$conn->query("select * from advertisement,address where typeof='$t' and disno='$pdist' and rent<='$rent' or city='$pcity' or pkno='$pkno' or floor='$floor' or facing='$facing' and advertisement.no=address.no");
if($sql->num_rows >0)
{
    while($res=mysqli_fetch_array($sql))
    {
        $num=$res['num'];
        $no=$res['no'];
        $advno=$res['advno'];
        $name=$res['name'];
        echo'<tr><td>'.$name.'</td></tr>';
        echo'<tr><td>Here the home on your interest</td></tr>';
        echo '<td><a href="viewadv.php?id='.$num.'">View</a></td>';
    }
}
}

/* payment notification*/
/* depost notification*/
$sql=$conn->query("select * from owner where no='$userid'");
if($sql->num_rows >0)
{
  while($row=mysqli_fetch_assoc($sql))
{
  $ono=$row['ono'];
  $rname=$row['name'];
  $num=$row['num'];
}
}
$sql=$conn->query("select * from advdate where no='$userid' and num='$num'");
if($sql->num_rows >0)
{
  while($row=mysqli_fetch_assoc($sql))
  {
    $join=$row['joining'];
    $exp=$row['joinexp'];
    $leaving=$row['leaving'];
    $leaveexp=$row['leaveexp'];
    $rentdate=$row['rentdate'];
    $depdate=$row['depdate'];
  }
 
if(($depdate=="")&&($join!=""))
{

$dt=date("Y/m/d H:i:s");
$d=date_create($dt);
$join=date_create($join);
   $diff=date_diff($join,$d);
   $diff=$diff->format("%R%a");
   
   if($diff<15)
  {
    $dif=(15-$diff);
  $type='Please pay your deposit as soon as possible'.$dif;   
    $ora='a';
    $nottype="dep";
    $no=$userid;
    $ono=$ono;
    if($nottype=="dep")
  {
    
    $result=$conn->query("select * from notification where user='$name' and no='$no' and type='$type' "); 
    if($result->num_rows >0)
    {
    
    $conn->query("update notification set count=0,time=now() where user='$name' and no='$no' and type='$type'");
   
    }
    else
    {
  $conn->query("insert into notification(type,user,no,nottype,ora)values('$type','$name','$no','$nottype','$ora')");
   }
}
}
 else if($diff=15)
  {
    $type="deletd from the account from house";
    $ora='a';
    $nottype="left";
    $no=$userid;
    $ono=$ono;
    $adv=$conn->query("select * from advertisement where num='$num'");
    if($adv->num_rows >0)
    {
      while($ad=mysqli_fetch_assoc($adv))
      {
        $advno=$ad['advno'];
      }
    }
  if($nottype=="left")
  {
    
    $result=$conn->query("select * from notification where user='$name' and no='$no' and type='$type' and advno='$num' "); 
    if($result->num_rows >0)
    {
    
    $conn->query("update notification set count=0,time=now() where user='$name' and no='$no' and type='$type'");
   
    }
    else
    {
    $conn->query("insert into notification(type,user,no,advno,nottype,ono,ora)values('$type','$name','$no','advno',$nottype','$ono',$ora')");
    }
  }
  else{

  }
  
 } 
}
}
/*monthly payment notification*/
else if($join!="")
{
$dt=date("Y/m/d H:i:s");
$d=date_create($dt);
$rent=date_create($rentdate);
   $diff=date_diff($d,$rent);
   $diff=$diff->format("%R%a");
//checking date difference 25
   if($diff==25)
{
  $type="pay your rent within 5 days";
    $ora='a';
    $nottype="pay";
    $no=$userid;
    if($nottype=="pay")
  {
    
    $result=$conn->query("select * from notification where user='$name' and no='$no' and type='$type' "); 
    if($result->num_rows >0)
    {
    
    $conn->query("update notification set count=0,time=now() where user='$name' and no='$no' and type='$type'");
   
    }
    else
    {
   
    $conn->query("insert into notification(type,user,no,nottype,ora)values('$type','$rname','$no',$nottype',$ora')");
  }
  }
}
else if($diff==30)
{
$type="pay your rent today.if you have deposit rent will be credited";
    $ora='a';
    $nottype="pay";
    $no=$userid;
    if($nottype=="pay")
  {
    
    $result=$conn->query("select * from notification where user='$name' and no='$no' and type='$type' "); 
    if($result->num_rows >0)
    {
    
    $conn->query("update notification set count=0,time=now() where user='$name' and no='$no' and type='$type'");
   
    }
    else
    {
   
    $conn->query("insert into notification(type,user,no,nottype,ora)values('$type','$rname','$no',$nottype',$ora')");
  }
}
}
else if(($diff>=30)&&($diff<=35))
{
$type="pay your rent within 5 days.Otherwise you need to live from the house within 2 months";
    $ora='a';
    $nottype="pay";
    $no=$userid;
    if($nottype=="pay")
  {
    
    $result=$conn->query("select * from notification where user='$name' and no='$no' and type='$type' "); 
    if($result->num_rows >0)
    {
    
    $conn->query("update notification set count=0,time=now() where user='$name' and no='$no' and type='$type'");
   
    }
    else 
    {
   
    $conn->query("insert into notification(type,user,no,nottype,ora)values('$type','$rname','$no',$nottype',$ora')");
  }
}

}
else if($diff==36)
{ 
  $rd=date_create($rentdate);
date_add($rd,date_interval_create_from_date_string("60 days"));
$leav=date_format($rd,"Y-m-d ");
  
  $conn->query("update advdate set leaveexp='$leav' where no='$userid' and num='$num'");
  $type="Leave the house within 2 months.";
    $ora='a';
    $nottype="leav";
    $no=$userid;
    if($nottype=="leav")
  {
    
    $result=$conn->query("select * from notification where user='$name' and no='$no' and type='$type' "); 
    if($result->num_rows >0)
    {
    
    $conn->query("update notification set count=0,time=now() where user='$name' and no='$no' and type='$type'");
   
    }
    else 
    {
   
    $conn->query("insert into notification(type,user,no,nottype,ora)values('$type','$rname','$no',$nottype',$ora')");
  }
}
}
}
$dt=date("Y/m/d H:i:s");
$d=date_create($dt);
$rentdate=date_create($rentdate);
   $diff=date_diff($d,$rentdate);
   $diff=$diff->format("%R%a");
   if(($diff<="90")&&($diff>=60))
   {
    $type="Renew your house within one month.";
    $ora='a';
    $nottype="renew";
    $no=$userid;
    if($nottype=="renew")
  {
    
    $result=$conn->query("select * from notification where user='$name' and no='$no' and type='$type' "); 
    if($result->num_rows >0)
    {
    
    $conn->query("update notification set count=0,time=now() where user='$name' and no='$no' and type='$type'");
   
    }
    else
    {
   
    $conn->query("insert into notification(type,user,no,nottype,ora)values('$type','$rname','$no',$nottype',$ora')");
  }
}
}
else
{
   $type="Ypu have to leave the house within 2 months.Deposit will be retrieved as per your further rental payments";
    $ora='a';
    $nottype="renew";
    $no=$userid;
  if($diff=59)
    {
    
    $conn->query("update notification set count=0,time=now() where user='$name' and no='$no' and type='$type'");
   
    }
    else
    {
   
    $conn->query("insert into notification(type,user,no,nottype,ora)values('$type','$rname','$no',$nottype',$ora')");
  }
}


/*left*/
$sql=$conn->query("select * from advertisement where num='$num'");
if($sql->num_rows >0)
{
  while($res=mysqli_fetch_assoc($sql))

{
  $rent=$res['rent'];
  $no=$res['no'];
}
}
$sql=$conn->query("select * from advdate where no='$userid' and num='$num'");
if($sql->num_rows >0)
{
  while($row=mysqli_fetch_assoc($sql))
  {
    $join=$row['joining'];
    $exp=$row['joinexp'];
    $leaving=$row['leaving'];
    $leaveexp=$row['leaveexp'];
    $rentdate=$row['rentdate'];
    $depdate=$row['depdate'];
  } 
  $dt=date("Y/m/d H:i:s");
$d=date_create($dt);
$rent=date_create($leaveexp);
if($leaveexp==$d)
{
$conn->query("update advdate statuse='0' where no='$userid' and num='$num'");
 $conn->query("update advertisement set cno='0' where num='$num'");
 $conn->query("update owner set num='NULL' where no='$userid'");
   $conn->query("update owner set ono='NULL' where no='$userid'");
   $diff=date_diff($leaveexp,$join);
   $diff=$diff->format("%R%a");
   if($diff<365)
   {

    $conn->query("insert into py(no,name,amt,ton,pdate)values('$userid','$name','$pay','$no','$d')");

    $type="Leaving before one year,so advancepayment not repid";
    $ora='a';
$nottype="left";
      $conn->query("insert into notification(type,user,no,nottype,ora)values('$type','$rname','$userid',$nottype',$ora')");

   }
   else
   {
    $pay=3*$rent;
    $conn->query("update account set amount=amount-$pay where no='$no'");
    $conn->query("update account set amount=amount+$pay where no='$no'");

$conn->query("insert into py(no,name,amt,ton,pdate)values('$userid','$name','$pay','$no','$d')");
   
    $type="Your account has been credited with the advancepayment";
    $ora='a';
$nottype="left";
      $conn->query("insert into notification(type,user,no,nottype,ora)values('$type','$rname','$userid',$nottype',$ora')");

   }
}
else if($exp==$d)
{
  $conn->query("update advdate statuse='0' where no='$userid' and num='$num'");
 $conn->query("update advertisement set cno='0' where num='$num'");
 $conn->query("update owner set num='NULL' where no='$userid'");
   $conn->query("update owner set ono='NULL' where no='$userid'");
   $pay=3*$rent;
    $conn->query("update account set amount=amount-$pay where no='$no'");
    $conn->query("update account set amount=amount+$pay where no='$no'");

$conn->query("insert into py(no,name,amt,ton,pdate)values('$userid','$name','$pay','$no','$d')");
   
    $type="Your account has been credited with the advancepayment";
    $ora='a';
$nottype="left";
      $conn->query("insert into notification(type,user,no,nottype,ora)values('$type','$rname','$userid',$nottype',$ora')");

}
}

?>
  </table>
  </div>
</body>
</html>