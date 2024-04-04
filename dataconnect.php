<?php
           $host='localhost';
		   $user='root';
		   $pwd='';
		   $db='houseforrent';
		   $conn=new mysqli($host,$user,$pwd,$db);
		   if(!$conn)
		   {
			   die("connection failed:".$conn->connect_error);
		   }
		   else
		   {
				//echo"connected successfully";
		   }
		  
          
		 
?>
