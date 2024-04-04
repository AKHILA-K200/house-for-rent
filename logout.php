<?php   
 //to ensure you are using same session
session_destroy(); //destroy the session
 header("Location:login1.php");//to redirect back to "index.php" after logging out
?>
