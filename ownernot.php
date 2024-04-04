<html>
<head>
<title>
Notifications
</title>
</head>
<body>
<?php
include 'dataconnect.php'; 

$ow="o";
$sql=$conn->query("select * from notification where ora='$ow' order by time desc");
if($sql->num_rows>0)
{
?>
<table>
<tr>
<td>NOTID</td>
<td>USERID</td>
<td>USERNAME</td>
 <td>MESSAGE</td>
<td></td>
</tr>
<?php
While($row=mysql_fetch_assoc($sql))
{
echo '<form method="POST" action="acceptingpage.php">';
echo "<tr> <td>". $row['notid']."</td>";
echo " <td>". $row['no']."</td>";
echo " <td>". $row['name']."</td>";
echo " <td>". $row['type']."</td>";
$s=$row['nottype'];
if($s=="reg")
{
echo '<td><a href="acceptingpage.php?id='.$row['no'].'&name='.$row['notid'].'">VIEW</td>';
echo '<td><a href=" deletingnotify.php?id='.$row['no'].'&name='.$row['notid'].'">DELETE</td></tr>';


}
else
{
echo '<td><a href="advacceptingpage.php?id='.$row['no'].'name='.$row['advno'].'">VIEW</td>';
 echo '<td><a href="deletingpageadv.php?id='.$row['no'].'name='.$row['notid'].'">DELETE</td>';

}
echo"</form>";

}
}
?>
</body>
</html>
