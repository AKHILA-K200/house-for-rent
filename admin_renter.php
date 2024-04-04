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
  color:solid black;
  }
  .error{
   color:red;
   }
    input
   {
    border:0;
   }
  body{background:#555;
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
$sql=$conn->query("select * from owner where ora='r'");
if($sql->num_rows >0)
{
?>
<table><tr><form name="searching" method="POST" action="admin_rentersearch.php" onsubmit="return checkdata()" >
<td bgcolor="white" border="2">
 
<input type="text" name="search" placeholder="search here"></td><td><input type="submit"  name="sear" class="login" value="Search"></td></form>
</tr>
<tr>
 <th>RENTERID</th>
<th>USERNAME</th>
<th>ADDRESS ID</th>

</tr>
<?php
While($row=mysqli_fetch_assoc($sql))
{
echo '<form>';
echo " <td>". $row['no']."</td>";
echo " <td>". $row['name']."</td>";
echo " <td>". $row['curaddress']."</td>";
echo '<td><a href="admin_renterview.php?id='.$row['no'].'" >VIEW</td>';
echo '<td><a href="admin_renterdel.php?id='.$row['no'].'">DELETE</td></tr>';


}
}
echo'</form>';

?>
</body>
</html>
