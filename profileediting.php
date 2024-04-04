
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>.login{
 background-color:blue;
 text-align: center;
 width:100px;
 height:35px;
 color: #f2f2f2;
 border-radius: 4px;
}</style>
</head>
<body>
$uname=$_SESSION['uname'];
$upass=$_SESSION['upass'];
$userid=$conn->query("select no from login where username='$uname' and pasword='$upass'");
?>
<form action="">
<table cellspacing="2" cellpadding="5">
		    	<tr><th colspan="3"><font size="4"><b>YOUR DREAM HOME </b></font>
		    	</th></tr>
		    	<tr bgcolor="#555"><td colspan="3" align="center">APPLICANT INFORMATION </td></tr>
		    	 <tr><td colspan="3">
	            Enetr your name:<span class="error">*</span>
	                  <input type="text" name="name" placeholder="user name" size="30" required value="<?php $name=$conn->query("select name from owner where no='$userid'");echo $name;?>">
	                  </td></tr>
	                  <tr ><td colspan="2">DOB:<span class="error">*</span><input type="date" name="dob"></td><td>      
                    Contact no:<span class="error">*</span>
	           <input type="text" name="cno" value="<?php echo $upass;?>"></td>
	           <tr><td colspan="3">current address:<input type="text" name="cur"></td></tr>
               	           <tr><td>city:<input type="text" name="ocity" placeholder="city" size="30"></td>
                           	              <td>Distric:<span class="error">*</span><input type="text" name="odist" placeholder="District Name" required></td>

                          	           <td>PinCode:<span class="error">*</span><input type="text" name="opin" placeholder="Pincode" size="30" required></td>
                          	           <tr>
                          	           	<td><input type="text" name="edit" class="login" value="submit"></td>
</tr>
<
</table>
</form>
<?php
if(isset($_REQUEST['edit']))
	include 'updateowner.php';
else
	echo 'alert(deletion not possible)';                          	        
	   </body>
</html>