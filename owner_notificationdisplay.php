<html>
<head>
<meta http-equiv="refresh" content="10">
<link rel="stylesheet" type="text/css" href="css/tacen.css">
<style>
    td{
        font-size:20px;
        }
  table, td, th {
  border: 1px solid black;
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
</style>
</head>
<body>
    <div class="content">

<?php
include 'dataconnect.php'; 
include 'owner_home2.php';
$sql=$conn->query("select * from notification where ono='$userid' or no='$userid' and ora not in('o') order by time desc");
if($sql->num_rows >0)
{

echo"<table>";
echo"<th>USERNAME</th>";
echo"<th>MESSAGE</th>";


echo"</tr>";
While($row=mysqli_fetch_assoc($sql))
{
echo '<form>';
   $count=$row['count'];
if($count==0)
{

	echo '<tr bgcolor="#BFBFBF">';
echo " <td>". $row['user']."</td>";
echo " <td>". $row['type']."</td>";
$pid=$row['pid'];


$s=$row['nottype'];
    if($s=="acc")
    {
    	echo '<td><a href="assigningpage.php?id='.$userid.'&name='.$row['notid'].'">View</a></td>';            
              echo '<td><a href="deletingnotify.php?id='.$row['notid'].'"/>Delete</a></td></tr>';

    }

    else if($s=="pay")
    {
    	echo '<td><a href="balanceview.php?id='.$row['notid'].'&name='.$pid.'">View</a></td>';            
              echo '<td><a href="deletingnotify.php?id='.$row['notid'].'"/>Delete</a></td></tr>';

    }
    else if($s=="lev")
    {
    	echo '<td><a href="commonview.php?id='.$row['notid'].'" />View</a></td>';
        echo '<td><a href="deletingnotify.php?id='.$row['notid'].'"/>Delete</a></td></tr>';

    }
    else if($s=="left")
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
else
{

   
echo " <td>". $row['user']."</td>";
echo " <td>". $row['type']."</td>";


$s=$row['nottype'];
    if($s=="acc")
    {
        echo '<td><a href="assigningpage.php?id='.$userid.'&name='.$row['notid'].'">View</a></td>';            
              echo '<td><a href="deletingnotify.php?id='.$row['notid'].'"/>Delete</a></td></tr>';

    }
    else if($s=="pay")
    {
        echo '<td><a href="balanceview.php?id='.$row['notid'].'&name='.$userid.'">View</a></td>';            
              echo '<td><a href="deletingnotify.php?id='.$row['notid'].'"/>Delete</a></td></tr>';

    }
    else if($s=="lev")
    {
        echo '<td><a href="commonview.php?id='.$row['notid'].'" />View</a></td>';
        echo '<td><a href="deletingnotify.php?id='.$row['notid'].'"/>Delete</a></td></tr>';

    }
    else if($s=="left")
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
}
?>
</body>
</html>