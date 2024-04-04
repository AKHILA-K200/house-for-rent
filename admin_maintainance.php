<html>
<head>
<title>
Admin maintainance
</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/linkbut.css">
<link rel="stylesheet" type="text/css" href="css/tacen.css">

<script language="JavaScript">
  
function checkdata()
{
    var c;
    c=document.searching.search.value;
    if(c=="")
    {
      alert("please enter the data");
      return false;
    }
    else
    {

      return true;
    }
}
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="content">
<?php
include 'dataconnect.php'; 
include 'admin_home3.php';
?>
<table><tr><form name="searching" method="POST" action="admin_maintainancesearch.php" onsubmit="return checkdata()" >
<td bgcolor="white" border="2">
 
<input type="text" name="search" placeholder="search here"></td><td colspan="5"><input type="submit"  name="sear" class="login" value="Search"></td></form>
</tr><tr>
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
$sql=$conn->query("select * from maintainance");
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
echo'</form>';
?>
</body>
</html>
