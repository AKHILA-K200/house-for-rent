
<html>
<head>  </head> 
  <body>
   <?php
   ini_set('display_errors',1);
   error_reporting(E_ALL & ~E_STRICT);
   session_start();
   include'dataconnect.php';
    $uname=$_POST['uname'];
    $upass=$_POST['psw']; 
    //$type=$_POST['type'];
    
    
     $res=$conn->query("select * from login where username='$uname' AND pasword='$upass'");
     	if($res->num_rows >0)  
     {
		 $sql=$conn->query("select * from login where username='$uname' and pasword='$upass'");
		 if($sql->num_rows >0)
		 {
			 While($row=mysqli_fetch_assoc($sql))
			 {
			 	$no=$row['no'];
				 $type=$row['catno'];
				}
		}
		 if($type==1)
		{
            header("location:admin_home.php?id=".$no);
		 
		}
		 else if($type==2)
		  {			
			  header("Location:owner_home3.php?id=".$no);
		 }
		 else if($type==3)
		 {
			 header("Location:renter_home3.php?id=".$no);
		 }
		 else
		 {
			 echo'<script>alert("invalid user type")</script>';	
		
	     }
	 }
	else
		 {
			echo'<script>window.alert("please enter correct username and password!!");
			             window.location.href="index.php";</script>'; 
		 }
			
	   $conn->close();
	   ?>
	
    </body>
    </html>
    
