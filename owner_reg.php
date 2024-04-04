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

	</head>
	<body>
		<div class="content">
		 <form name="formlogin" method="POST">
		    <table cellspacing="20">
		    	<tr><td colspan="3"><font size="7">Create account</font></td></tr>
	          <tr><td colspan="3" class="col">
	            
	            Please enter the following details
	            </td></tr>
	            <tr><td>
	            Enetr your name</td><td>:<span class="error">*</span></td><td>
	                  <input type="text" name="name" placeholder="user name" size="30" required>
	                  </td></tr>                 
  <tr><td>
	           Email-id:</td><td>:<span class="error">*</span></td>
	           <td><input type="email" name="uname" placeholder="enter email" required></td></tr>
	           <tr><td>
	           Contact no:</td><td>:<span class="error">*</span></td>
	           <td><input type="text" name="cno" placeholder="enter contact number" pattern="[6-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" required></td></tr>
	           <tr>
	           <td>Enter valid proof number of owner(any one)</td><td>:<span class="error">*</span></td>
	           <td><table><tr><td>
	             license no:</td><td><input type="text" name="lic" id="lic"></td></tr>
	             
	             <tr></tr>
	             <tr>
	             <td>voter id:</td><td><input type="text" name="vot" id="vot"></td>
	             </tr></table>
	             </td>
	             </tr>
	             <tr><td><input type="radio" value="1" name="ora">Owner<input type="radio" value="2" name="ora">Renter</td></tr>
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

	include 'csubmit.php';
	
}
?>
	                  </body>
	                  </html>
