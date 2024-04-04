<html>
<head>
<title>create ac form</title>


	</head>
	<body>
		
	 <form action="updatereg.php" method="POST">
		 
		    <table cellspacing="20">
		    	<tr><td colspan="2"><font size="7">Your Profile</font></td></tr>
	          <tr><td  class="col">
	            your name:</td><td>
	                  <input type="text" name="name" placeholder="user name" size="30" value="<?php echo $name;?>" >
	                  </td></tr>                 
  <tr><td>
	           Email-id:</td>
	           <td><input type="text" value="<?php echo $email; ?>"></td></tr>
	           <tr><td>
	           Contact no:</td>
	           <td><input type="text" name="cno" value="<?php echo $ph;?>"></td></tr>
	           <tr>
	           <td>Enter valid proof number of owner(any one):</td>
	           <td><table><tr><td>
	             license no:</td><td><input type="text" value="<?php echo $lic;?>"></td></tr>
	             <tr>
	             <td>voter id:</td><td><input type="text" value="<?php echo $vot;?>"></td>
	             </tr></table></td></tr>
	             <tr><td>Designation:</td><td><input type="<?php echo $desg; ?>"></td></tr>
	             
	                  <tr><td>Current address</td><td><input type="text" name="cur" value="<?php echo $cur;?>"></td></tr>
	               <?php    $sql=$conn->query("select * from district where disno='$dist'");
	                                         if($sql->num_rows >0)
	                                         {
	                                         	echo "hello";
	                                         	while($res=mysqli_fetch_assoc($sql))
	                                         	{
	                                         		$disname=$res['disname'];
	                                         	}
	                                         
	echo' <tr><td>District</td><td>:</td>
	              <td><input type="text" name="district" value=" echo $disname">
	              </td>
       </tr>';
       } 
       ?>
       <?php
       $sql=$conn->query("select * from account where no='$userid'");
	
if($sql->num_rows >0)
{?>
       <tr><td>city:</td><td><input type="text" value="<?php echo $city; ?>"></td></tr>
       <tr><td>Pincode:</td><td><input type="text" value="<?php echo $pin;?>"></td></tr>
       
<tr><td colspan="2" align="center">BANK ACCOUNT DETAILS </td></tr>
		<tr><td >Bank:</td><td><input type="text" name="bank" value="<?php echo $bank;?>"></td></tr>
		<tr>
			<td >Account Name: </td><td><input type="text" name="acc_name" value="<?php echo $acc_name;?>"></td></tr>
			 <tr><td >Account Number:</td><td> <input type="text" name="acc_number" value="<?php echo $acc_number;?>"></td></tr>
			 <tr><td> Account Type:</td><td><input type="text" name="acc_type" value="<?php echo $acc_type;?>"></td></tr>
			  <tr><td>  Branch:  </td><td><input type="text" name="branch" value="<?php echo $branch;?>"></td></tr>
			  <tr><td >  IFSC Code:</td><td><input type="text" name="ifsc" value="<?php echo $ifsc; ?>"></td></tr>
	<tr><td >   Bank Address: </td><td><input type="text" name="baddress" value="<?php echo $baddress;?>"></td></tr>
	<?php
}
else
{

}
?>
</table>
</body>
</html>