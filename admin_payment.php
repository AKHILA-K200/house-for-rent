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
</head>
<body>
  <div class="content">
<?php
include 'dataconnect.php'; 
include 'admin_home3.php';
?>
<table><tr>
  <th>name</th>
<th>amount</th>
<th>To</th>
<th>date</th>
</tr>
<?php
$p=1;
$sql=$conn->query("select * from py order by pdate desc");
if($sql->num_rows >0)
{
While($row=mysqli_fetch_assoc($sql))
{
echo '<form>';
$pid=$row['pid'];
echo '<td>'. $row['name'].'</td>';
echo '<td>'. $row['amt'].'</td>';
echo '<td>'. $row['ton'].'</td>';
echo '<td>'. $row['pdate'].'</td>';
echo '<td><a href="admin_pyview.php?id='.$p.'&name='.$pid.'">View</td></tr>';
}
}
echo'</form>';
?>
</body>
</html>
