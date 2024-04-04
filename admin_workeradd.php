<html>
<head>
<title>create ac form</title>

<style>
	.content {
  max-width:800px;
  margin: auto;
  background: white;
  padding: 10px;
  }
  .error{
   color:red;
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
}</style>
<script language="JavaScript">

function ValidateEmail()
{
	var uname,cno;
username=document.formlogin.uname.val
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email.value.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
document.form1.text1.focus();
return false;
}
}

</script>
	</head>
	<body>
		<?php
		include 'dataconnect.php';
		?>
		<div class="content">
		 <form name="formlogin" method="POST"  onsubmit="return validate()" >
		    <table cellspacing="20">
		    	<tr><td colspan="3"><font size="7">Add Worker</font></td></tr>
	          <tr><td colspan="3" class="col">
	            
	            Please enter the following details
	            </td></tr>
	            <tr><td>
	            Enetr your name</td><td>:<span class="error">*</span></td><td>
	                  <input type="text" name="name" placeholder="user name" size="30" required>
	                  </td></tr>                 
  <tr><td>
	           Address:</td><td>:<span class="error" required>*</span></td>
	           <td><input type="text" name="wcur" placeholder="address" required></td></tr>
	           <tr><td>
	           Contact no:</td><td>:<span class="error">*</span></td>
	           <td><input type="text" name="wcno" placeholder="enter contact number" required></td></tr>
	           
	           <tr>
	              <td>
	              <input type="submit" name="sub" value="submit" width="50" class="login">
	              </td></tr>
	                  </table>
	                 
	                  </form>
	                   </div>
	                   <?php
if(isset($_REQUEST['sub']))
{
$f=0;
	$name=$_POST['name'];
	$cur=$_POST['wcur'];
	$cno=$_POST['wcno'];
	$res=$conn->query("select * from worker");
	
		while($rest=mysqli_fetch_assoc($res))
		{
            $ph=$rest['cno'];
            if($cno==$ph)
            {
            	echo'<script>window.alert("Already exist,Cannot possible to add!!");
                   window.location.href="admin_workers.php?id='.$p.'";</script>'; 
                   $f=1;
                   break;
            }
		}
		if($f=="0")
		{
			$conn->query("insert  into worker(wname,wcno,wcur)values('$name','$cno','$cur')");	
echo'<script>window.alert("Worker added  successfully!!");
                   window.location.href="admin_workers.php?id='.$p.'";</script>'; 
		}
	
	
}
?>
	                  </body>
	                  </html>
