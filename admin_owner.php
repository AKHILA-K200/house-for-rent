<html>
<head>
<title>
Admin owners
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
</head>
<body>
  <div class="content">
<?php
include 'dataconnect.php'; 
include 'admin_home3.php';

?>

<table><tr><form name="searching" method="POST" action="admin_ownersearch.php" onsubmit="return checkdata()" >
<td bgcolor="white" border="2">
 
<input type="text" name="search" placeholder="search here"></td><td><input type="submit"  name="sear" class="login" value="Search"></td></form>
</tr>
  <tr><td>No</td>
<td>Name</td></tr>
<?php
echo '<form>';
$p=1;
$sql=$conn->query("select * from owner where ora='o' and apornot='1'");
if($sql->num_rows >0)
{
While($row=mysqli_fetch_assoc($sql))
{

echo ' <td>'. $row['no'].'</td>';
echo '<td>'. $row['name'].'</td>';

echo '<td><a href="admin_ownerview.php?id='.$p.'&name='.$row['no'].'" >VIEW</td>';
echo '<td><a href="admin_ownerdel.php?id='.$row['no'].'">DELETE</td></tr>';
}
}
echo'</form>';
?>


</body>
</html>
