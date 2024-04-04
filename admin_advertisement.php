<html>
<head>
<title>
Admin owners
</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/linkbut.css">

<style>
	table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;


}

th {
  height: 50px;
}
.hei{
	height:100px;
}
.content {
  max-width: 1000px;
  margin: auto;
  background: white;
  padding: 10px;
  }
  .error{
   color:red;
   }
    input
   {
   	border:0;
   }
  body{
  	background:#555;
  }
  .login{
 background-color:blue;
 text-align: center;
 width:100px;
 height:35px;
 color: #f2f2f2;
 border-radius: 4px;
}
</style>
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
<table> <tr><form name="searching" method="POST" action="admin_advetisementsearch.php" onsubmit="return checkdata()" >
<td bgcolor="white" border="2">
 
<input type="text" name="search" placeholder="search here"></td><td><input type="submit"  name="sear" class="login" value="Search"></td></form>
</tr>
 <tr><td>Advertisement no</td>
<td>Name</td>
<td>Tenant id</td>
</tr>
<?php
$sql=$conn->query("select * from advertisement where apornot='1'");
if($sql->num_rows >0)
{
While($row=mysqli_fetch_assoc($sql))
{
echo '<form>';
  $num=$row['num'];

echo '<td>'. $num.'</td>';
echo '<td>'. $row['oname'].'</td>';
$st=$conn->query("select * from owner where num='$num'");
if($st->num_rows >0)
{
  while($sts=mysqli_fetch_assoc($st))
  {
    $cno=$sts['no'];
  }
  echo '<td>'.$cno .'</td>';
}
else
{
echo '<td>NULL</td>';
}


echo '<td><a href="sviewadv.php?id='.$num.'&name='.$no.'" >VIEW</td>';
echo '<td><a href="admin_ownerdel.php?id='.$row['no'].'">DELETE</td></tr>';
}
}
echo'</form>';
?>
</body>
</html>
