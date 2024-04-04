
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include'dataconnect.php';
	?>
	<form method="POST">
<table><tr><td> <input type="file" name="f2" id="f2">
	                        </td></tr>
	                        <tr><td><input type="submit" name="f" ></table>
	                    </form>
	                    <?php
	                    if(isset($_REQUEST['f']))
	                    {
	                    	$f1=$_POST['f2'];
	                    	$conn->query("insert into image(num,img1)values(5,'$f1')"); 
	                    }
	                    ?>
</body>
</html>