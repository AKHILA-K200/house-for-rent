<html>
<head>
<title>
Owners home</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="dropdown.css">
</head>

<body>
  <tr>
  <td>
  	<?php
  	include 'dataconnect.php';
$uname=$_SESSION['uname'];
$upass=$_SESSION['upass'];
$sql=$conn->query("select no from login where username='$uname' AND pasword='$upass'");

if($sql->num_rows >0)
{
while($res=mysqli_fetch_assoc($sql))
{
		$userid=$res['no'];
		
}
}
  	include 'owner_home2.php';
  	echo'<form>';
  	?>
  </td></tr>
  <tr><center>
<td align="center">
	<table cellspacing="35">
		<tr><td>
<table border=2>
		<tr>
			<?php
			include 'dataconnect.php';
			$advno=1;
			$res=$conn->query("select * from advertisement where no='$userid' and advno='$advno'");
			if($res->num_rows>0)
			{
				while($result=mysqli_fetch_assoc($res))
				{
					$num=$result['num'];
					$adno=$result['adno'];
					$cno=$result['cno'];
					
				}
			$res=$conn->query("select * from owner where num='$num'");
			if($res->num_rows >0)
			{
                 while($rest=mysqli_fetch_assoc($res))
                 {
                 	$no=$rest['no'];
                 }
				}
				$ad=$conn->query("select * from image where num='$num'");
			
			if($ad->num_rows >0)
			{
				while($ads=mysqli_fetch_assoc($ad))
				{
					$im=$ads['img1'];
				}
			}
				echo '<td ><img src="'.$im.'" height="300" width="300"></td></tr>';
				//echo'<tr bgcolor="white"><td><a href="sviewadv.php?id='.$num.'&name='.$no.'"><font size="5">view</font></a></td></tr>';
								 echo'<tr bgcolor="white"><td><a href="sviewadv.php?id='.$num.'&name='.$userid.'"><font size="5">View</font></a></td></tr>';

				 echo'<tr bgcolor="white"><td><a href="sdeleteadv.php?id='.$userid.'&name='.$advno.'"><font size="5">delete</font></a></td></tr>';
				 echo' <a href="left.php?id='.$num.'&name='.$no.'">LEAVE</a>';
				
				
			}
			else
			{
				
			echo '<tr bgcolor="white"><td><a href="owner_advertisement.php?id='.$userid.'"><font size="5">Create advertisement</font></a></td></tr>';
			
		}
		?>
	  </table>
  </td>
  <td><table border=2>
		<tr>
			<?php
			$advno=2;
			$res=$conn->query("select * from advertisement where no='$userid' and advno='$advno'");
			if($res->num_rows>0)
			{
				$adno=$conn->query("select adno from advertisement where no='$userid' and advno='$advno'");
				$im1=$conn->query("select img1 from address where adno='$adno'");
				echo '<td>  echo $im1; </td>'.'</tr>';
				echo'<tr bgcolor="white"><td><a href="sviewadv.php?id='.$userid.'"><font size="5">view</font></a></td></tr>';
				 echo'<tr bgcolor="white"><td><a href="sdeleteadv.php?id='.$userid.'name='.$advno.'"><font size="5">delete</font></a></td></tr>';
				 echo' <a href="left.php?id='.$num.'&name='.$no.'">LEAVE</a>';
				 
				}
			else
			{
			
			echo '<tr bgcolor="white"><td><a href="owner_advertisement.php?id='.$userid.'"><font size="5">Create advertisement</font></a></td></tr>';
		}
		?>
	  </table>
  </td></tr>
  <tr>
  <td><table border=2>
		<tr>
			<?php
			$advno=3;
			$res=$conn->query("select * from advertisement where no='$userid' and advno='$advno'");
			if($res->num_rows>0)
			{
				$adno=$conn->query("select adno from advertisement where no='$userid' and advno='$advno'");
				$im1=$conn->query("select img1 from address where adno='$adno'");
echo '<td>  echo $im1; </td>'.'</tr>';
				echo'<tr bgcolor="white"><td><a href="sviewadv.php?id='.$userid.'"><font size="5">view</font></a></td></tr>';
				 echo'<tr bgcolor="white"><td><a href="sdeleteadv.php?id='.$userid.'name='.$advno.'"><font size="5">delete</font></a></td></tr>';				
				echo' <a href="left.php?id='.$num.'&name='.$no.'">LEAVE</a>';
			}
			else
			{
				
			echo '<tr bgcolor="white"><td><a href="owner_advertisement.php?id='.$userid.'"><font size="5">Create advertisement</font></a></td></tr>';

		}
?>		
	  </table>
  </td>
  
  <td><table border=2>
		<tr>
			<?php
			$advno=4;
			$res=$conn->query("select * from advertisement where no='$userid' and advno='$advno'");
			if($res->num_rows>0)
			{
				$adno=$conn->query("select adno from advertisement where no='$userid' and advno='$advno'");
				$im1=$conn->query("select img1 from address where adno='$adno'");
				
echo '<td>  echo $im1; </td>'.'</tr>';
				echo'<tr bgcolor="white"><td><a href="sviewadv.php?id='.$userid.'"><font size="5">view</font></a></td></tr>';
				 echo'<tr bgcolor="white"><td><a href="sdeleteadv.php?id='.$userid.'name='.$advno.'"><font size="5">delete</font></a></td></tr>';				
echo' <a href="left.php?id='.$num.'&name='.$no.'">LEAVE</a>';
			}
			else
			{

			echo '<tr bgcolor="white"><td><a href="owner_advertisement.php?id='.$userid.'"><font size="5">Create advertisemen</font>t</a></td></tr>';
			
		   }
		echo '</form>';   
	?>
</td>
</tr>
</table>
	</center>
	  </td></tr></center>
  </table>
  
</body>	

 </html>

