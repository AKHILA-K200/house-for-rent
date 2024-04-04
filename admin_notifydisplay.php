<html>
<head>
<meta http-equiv="refresh" content="5">
<style>
       table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;


}
a{
  background-color: #00BFFF;
  color: white;
  text-decoration: none;
}
th {
  height: 50px;
}
.hei{
	height:100px;
}
.content {
  max-width: 1350px;
  margin: auto;
  background: white;
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
 background-color:#00BFFF;
 text-align: center;
 width:100px;
 height:35px;
 color: #f2f2f2;
 border-radius: 5px;
}

</style>
</head>
<body>
	<div class="content">
<?php
include 'dataconnect.php'; 
include 'admin_home3.php';
$sql=$conn->query("select * from notification where ora not in('a') order by time desc");
if($sql->num_rows >0)
{

echo"<table>";
echo"<caption>NOTIFICATION</caption>";
echo"<tr><th>NOTID</th>";
echo"<th>USERID</th>";
echo"<th>USERNAME</th>";
echo"<th>MESSAGE</th>";
echo "<th></th>";
echo "<th></th>";
echo"</tr>";
While($row=mysqli_fetch_assoc($sql))
{
echo '<form>';
if($row['count']==0)
{
echo '<tr  bgcolor="#BFBFBF"> <td>'. $row['notid'].'</td>';
echo '<td>'.$row['no'].'</td>';
echo '<td>'.$row['user'].'</td>';
echo '<td>'. $row['type'].'</td>';
$s=$row['nottype'];
$p=1;
if($s=="reg")

{
             echo '<td class="login"><a href="acceptingpage.php?id='.$p.'&name='.$row['notid'].'">View</a></td>';            
              //echo '<td class="login"><a href="deletingnotify.php?id='.$row['notid'].'"/>Delete</a></td></tr>';
}
 else if($s=="adv")
{	

 echo '<td class="login"><a href="advacceptingpage.php?id='.$row['notid'].'" />View</a></td>';

// echo '<td class="login"><a href="deletingnotify.php?id='.$row['notid'].'">Delete</td>';

}
else if($s=="pay")
{
	echo '<td class="login"><a href="commonview.php?id='.$row['notid'].'" />View</a></td>';

 //echo '<td class="login"><a href="deletingnotify.php?id='.$row['notid'].'">Delete</td>';

}
else if($s=="acc")
{
  echo '<td class="login"><a href="assigningpage.php?id='.$p.'&name='.$row['notid'].'">View</a></td>';            
              //echo '<td class="login"><a href="deletingnotify.php?id='.$row['notid'].'"/>Delete</a></td></tr>';
}
echo"</b>";
}
else
{
  $p=1;
	echo '<tr> <td>'. $row['notid'].'</td>';
echo '<td>'.$row['no'].'</td>';
echo '<td>'.$row['user'].'</td>';
echo '<td>'. $row['type'].'</td>';
$s=$row['nottype'];
if($s=="reg")
	{
            echo '<td class="login"><a href="acceptingpage.php?id='.$p.'&name='.$row['notid'].'">View</a></td>';            
              //echo '<td class="login"><a href="deletingpagereg.php?id='.$row['notid'].'"/>Delete</a></td></tr>';
   }
else if($s=='adv')
{
	echo '<td class="login"><a href="advacceptingpage.php?id='.$p.'&name='.$row['notid'].'" />View</a></td>';

 //echo '<td class="login"><a href="deletingnotify.php?id='.$p.'&name='.$row['notid'].'">Delete</td>';

}
else if($s=="pay")
{
  echo '<td class="login"><a href="commonview.php?id='.$p.'&name='.$row['notid'].'" />View</a></td>';

 //echo '<td class="login"><a href="deletingnotify.php?id='.$row['notid'].'">Delete</td>';

}
else if($s=="acc")
{
  echo '<td class="login"><a href="assigningpage.php?id='.$p.'&name='.$row['notid'].'">View</a></td>';            
              //echo '<td class="login"><a href="deletingnotify.php?id='.$row['notid'].'"/>Delete</a></td></tr>';
}
else
{
   echo '<td class="login"><a href="commonview.php?id='.$p.'&name='.$row['notid'].'" />View</a></td>';

 //echo '<td class="login"><a href="deletingnotify.php?id='.$p.'&name='.$row['notid'].'">Delete</td>';
}
}
echo'</form>';

}

}
?>
</div>
</body>
</html>

