<html>
<head>
<title>
Admin maintainancesearch
</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/linkbut.css">
<link rel="stylesheet" type="text/css" href="css/tacen.css">
</head>
<body>
  <div class="content">
<?php
include 'dataconnect.php'; 
include 'admin_home2.php';
$s=$_POST['search'];
$f=0;
$v=0;
$w=0;
?>
<table>
	<tr>
  <th>User id</th>
<th>Maintainance name</th>
<th>Charge</th>
<th>Date</th>
<th>Completed?</th>
<td></td>
<td></td>
<td></td>
</tr>
<?php
$on=$conn->query("select * from owner where name like '%s'");
if($on->num_rows >0)
{
  while($onm=mysqli_fetch_assoc($on))
  {
   $userid=$onm['no'];
 
  }
  $sql=$conn->query("select * from maintainance where no='$userid'");
if($sql->num_rows >0)
{
While($row=mysqli_fetch_assoc($sql))
{
echo '<form>';
  $mid=$row['mid'];
echo '<tr><td>'. $row['no'].'</td>';
echo '<td>'. $row['mname'].'</td>';
echo '<td>'. $row['mcharge'].'</td>';
echo '<td>'. $row['mdate'].'</td>';

$mcom=$row['mcomplete'];
if($mcom=="1")
        {
                echo'<td><span style="font-size:35px;">&#9989;</span></td>';

echo '<td><a href="viewmaint.php?id='.$mid.'&name='.$no.'">VIEW</td></tr>';
        }
        else
        {
               echo'<td><i class="fa fa-close" style="font-size:35px;color:red"></i></td>';
               $wk=$conn->query("select * from worker where mid='$mid'");
    if($wk->num_rows >0)
    {
       echo '<td><a href="finished.php?id='.$mid.'">Finished?</td>';
  }
  else

               echo '<td><a href="wassign.php?id='.$mid.'">ASSIGN</td></tr>';
              

        }
    


}
}
$f=1;
}
else
{
  $sql=$conn->query("select * from maintainance where no='$s'");
if($sql->num_rows >0)
{
While($row=mysqli_fetch_assoc($sql))
{
echo '<form>';
  $mid=$row['mid'];
echo '<tr><td>'. $row['no'].'</td>';
echo '<td>'. $row['mname'].'</td>';
echo '<td>'. $row['mcharge'].'</td>';
echo '<td>'. $row['mdate'].'</td>';

$mcom=$row['mcomplete'];
if($mcom=="1")
        {
                echo'<td><span style="font-size:35px;">&#9989;</span></td>';

echo '<td><a href="viewmaint.php?id='.$mid.'&name='.$no.'">VIEW</td></tr>';
        }
        else
        {
               echo'<td><i class="fa fa-close" style="font-size:35px;color:red"></i></td>';
               $wk=$conn->query("select * from worker where mid='$mid'");
    if($wk->num_rows >0)
    {
       echo '<td><a href="finished.php?id='.$mid.'">Finished?</td>';
  }
  else

               echo '<td><a href="wassign.php?id='.$mid.'">ASSIGN</td></tr>';
              

        }
    


}
$v=1;
}
}
$wd=$conn->query("select * from wormain where mid like '$s%' or wid1 like '$s%' ");
if($wd->num_rows >0)
{
while($wdn=mysqli_fetch_assoc($wd))
{
  $mid=$wdn['mid'];
  $sql=$conn->query("select * from maintainance where mid='$midi");
if($sql->num_rows >0)
{
While($row=mysqli_fetch_assoc($sql))
{
echo '<form>';
 
echo '<tr><td>'. $row['no'].'</td>';
echo '<td>'. $row['mname'].'</td>';
echo '<td>'. $row['mcharge'].'</td>';
echo '<td>'. $row['mdate'].'</td>';

$mcom=$row['mcomplete'];
if($mcom=="1")
        {
                echo'<td><span style="font-size:35px;">&#9989;</span></td>';

echo '<td><a href="viewmaint.php?id='.$mid.'&name='.$no.'">VIEW</td></tr>';
        }
        else
        {
               echo'<td><i class="fa fa-close" style="font-size:35px;color:red"></i></td>';
               $wk=$conn->query("select * from worker where mid='$mid'");
    if($wk->num_rows >0)
    {
       echo '<td><a href="finished.php?id='.$mid.'">Finished?</td>';
  }
  else

               echo '<td><a href="wassign.php?id='.$mid.'">ASSIGN</td></tr>';
              

        }
    


}
}
}
$w=1;
}
if(($f=='0')&&($v=='0')&&($w=='0'))
{
  echo'<tr><td colspan="5">Sorry!! No such results!!</td></tr>';
}
?>
</table>
</div>
</body>
</html>