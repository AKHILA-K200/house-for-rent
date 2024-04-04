
<html>
<head>

<script language="JavaScript">
  

function checkdata()
{

  var username,upassword;
username=document.formlogin.uname.value;

if(username==" ")
{
 alert("please enter username!!");
 return false;
}
upassword=document.formlogin.psw.value;
if(upassword==" ")
{
 alert("please enter the pass word!!");
return false;
}
if(isNaN(upassword))
{
 alert("please enter the phone number correctly");
return false;
}
if((upassword.length<10)||(upassword.length>10))
{
 alert("The password should have 10 no.please check your enterd no!");
return false;
}
}
</script>
<link rel="stylesheet" type="text/css" href="css/userlogin.css">
</head>
<body>
  <center>
<table width="500px" height="250" bgcolor="white">

<?php
  include'dataconnect.php';
  ?>
  <tr><td><font color="black">Login</font></td><td bgcolor="blue"><a href="owner_reg.php"><font color="white">Register</font></a>&nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php"><font size="4" color="white">X</a></td></tr>
 <form name="formlogin" method="POST"  action="loginuser2.php" onsubmit="return checkdata()" >
  <tr><td><font color="black" size="5"><b>login ID:</b></font></td><td>
     <input type="text" size="35" placeholder="Enter Username" name="uname" width="100%" required></td></tr>
    <tr><td></b><font color="black" size="5"><b> Password:</td><td>
     <input type="password" size="35"  placeholder="Enter Password" name="psw" required></td></tr>
     <tr><td><font size="4"><a href="forgotpassword.php">Forgotpassword?</a></font></td><td><input type="submit" class="login" value="Login">
                                                                        
</form>

</table></center>
</body>
</html>
<!--

 <tr><td> <font size="5"><b>user type:</b></font></td><td><select name="type">
    <option value="-1"> select user type</option>

        <option value="1">Admin</option>
        <option value="2">Owners</option>
       <option value="3">Renters</option>
        </select></td></div>
    </tr>
     <tr><td> <font size="5"><b> UserType:</td></b></font></td><td><select name="type"><option value="1">Admin</option>
                                                                                          <option value="2">Owner</option>
                                                                                          <option value="3">Renter</option>
                                                                                          <option value="4">workers</option></select>
                                                                                        </td></tr>

  -->
