
<html>
<head>
<title>create ac form</title>


	<link rel="stylesheet" type="text/css" href="css/tacen.css">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
<style>
	td{
		font-size:20px;
		

	}
	input[type="text"]
	{
font-size:18px;

	}
	input[type="date"]
	{
font-size:18px;

	}
	input[type="submit"]
	{
font-size:18px;
	}
	select{
		font-size:18px;
	}
</style>
	<script type="text/javascript">
		function checkdata()
		{
var e=document.getElementById("district");
var value=e.options[e.selectedIndex].value;
var text=e.options[e.selectedIndex].text;
if(value=="")
{
	alert("please choose district");
	return false;
}
else
{
	return true;
}
		}
	</script>
	</head>
	<body class="content">
		<form method="POST" action="">
	<?php
	include'dataconnect.php';
	 include'owner_home2.php';
   $res=$conn->query("select *from owner where no='$userid'");
if($res->num_rows>0)
{
while($result=mysqli_fetch_assoc($res)){
	
$name=$result['name'];
$cno=$result['phoneno'];
$email=$result['email'];
$lic=$result['license'];
$vot=$result['viterid'];
$dob=$result['dob'];
$desg=$result['desg'];
$cur=$result['curaddress'];
$city=$result['city'];

$dist=$result['disno'];
$pin=$result['pin'];
}
}
	?>
	
		    <table align="left">
		    	 
		    <div class="let">
		    	<tr><center>
  <td colspan="2"><center>

	  </center>
  </td></center>
  </tr>
	     
	      <tr><td bgcolor="grey" colspan="2">
	            
	            <font size="5"><b>You can edit the following details</b></font>
	            </td></tr>
	            
	            <tr><td>
	             Name:</td><td><input type="text" name="name"  size="30" value="<?php echo $name;?>">
	                  </td></tr>
	                  
  
	           
  <tr><td>
	           Email-id:</td>
	           <td><input type="text" name="uname" value="<?php echo $email;?>"></td></tr>
	           <tr><td>
	           Contact no:</td>
	           <td><input type="text" name="cno" value="<?php echo $cno;?>"></td></tr>
	           <tr>
	           <td> valid proof number of owner(any one):</td>
	           <td><table><tr><td>
	             license no:</td><td><input type="text" name="lic" id="lic" value="<?php echo $lic;?>"></td></tr>
	              <tr>
	             <td>voter id:</td><td><input type="text" name="votid" value="<?php echo $vot;?>"></td>
	             </tr>
	         </table>
	     </td>
	 </tr>
	             <tr>
	             <td>Designation:</td><td><input type="text" name="desg" value="<?php echo $desg;?>"></td>
	             </tr>
	             <tr>
	             <td>Date Of Birth:</td><td><input type="date" name="dob" value="<?php echo $dob;?>"></td>
	             </tr>
	              <tr>
	             <td>Current address:</td><td><input type="text" name="cur" value="<?php echo $cur;?>"></td>
	             </tr>
	              <tr>
	             <td>city:</td><td><input type="text" name="city" value="<?php echo $city;?>"></td>
	             </tr>
	              <tr><td>PinCode:</td><td><input type="text" name="pin" size="30"></td></td>
	              <tr><td>District:</td>
	              <td><select id="district" value="" name="dist">Select district
	              <option value="1">tivandrum</option>
        <option value="2">Kollam</option>
       <option value="3">pathanamthitta</option>
       <option value="4">Alappuzha</option>
        <option value="5">Kottayam</option>
         <option value="6">Idukki</option>
          <option value="7">Ernakulam</option>
           <option value="8">Thrissur</option>
            <option value="9">Palakkad</option>
             <option value="10">Malappuram</option>
              <option value="11">Kozhikkode</option>
               <option value="12">wayanad</option>
                <option value="13">Kannur</option>
                 <option value="14">Kasargod</option>
        </select></td>
       </tr> 
	         
	             </td>
	             </tr>
	           <tr>
	              <td>
	              <input type="submit" name="predit" value="submit" width="50" id="letters">
	              </td></tr>
	          
	                  </table>
	                  </form>
	                  <?php
	                  if(isset($_REQUEST['predit']))
	                  {
	                  	include 'csubmitprofile.php';
	                  } 
	                  ?>
	                  </body>
	                  </html>
	           
