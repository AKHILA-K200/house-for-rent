<html>
<head>
<title>create advertisement</title>
	<link rel="stylesheet" type="text/css" href="createaccount.css">

<style>
       table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}


th {
  height: 50px;
}
.hei{
	height:100px;
}
.content {
  max-width:1000px;
  margin: auto;
  background: white;
  padding: 10px;
  }
  .error{
   color:red;
   }
    input
   {
   	border:0;
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
}
</style>

</head>
<body>
	<?php
include'dataconnect.php';

$userid=$_GET['id'];

$sql=$conn->query("select * from owner where no='$userid'");
if($sql->num_rows >0)
{
	while($row=mysqli_fetch_assoc($sql))
	{   $name=$row['name'];
       $email=$row['email'];
		$cno=$row['phoneno'];
	    $cur=$row['curaddress'];
		$dob=$row['dob'];
		$city=$row['city'];
		$dist=$row['disno'];
		$pin=$row['pin'];
		$desg=$row['desg'];
		$ora=$row['ora'];
	}
}

$dis=$conn->query("select * from district");
if($dis->num_rows >0)
{
	while($row=mysqli_fetch_assoc($sql))
	{

	$disname=$row['disname'];
}
}
?>
<div class="content">
	<form  method="POST">
		    <table cellspacing="2" cellpadding="5">
				<?php echo '<tr><td colspan="3" align="right"><a href="owner_home3.php?id='.$userid.'">Back to home</a></td></tr>';?>
		    	<tr><th colspan="3"><font size="4"><b>YOUR DREAM HOME                             PROPERTY OWNERSHIP DECLARATION </b></font>
		    	</th></tr>
		    	<tr bgcolor="#555"><td colspan="3" align="center"><font color="white">APPLICANT INFORMATION </font></td></tr>
		    	 <tr><td colspan="3">
	            Enetr your name:<span class="error">*</span>
	                  <input type="text" name="name"  size="30" required value="<?php echo $name;?>">
	                  </td></tr>
	                  <tr ><td colspan="2">DOB:<span class="error">*</span><input type="date" name="dob" value="<?php echo $dob; ?>"></td><td>      
                    Contact no:<span class="error">*</span>
	           <input type="text" name="cno" value="<?php echo $cno;?>" pattern="[6-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]"></td>
	           <tr><td colspan="3">current address:<input type="text" name="cur"></td></tr>
               	           <tr><td>city:<input type="textarea" name="ocity" value="<?php echo $cur ?>"></td>
                           	              <td>Distric:<span class="error">*</span><select name="odist">
            	<option value="1">thivandrum</option>
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
        
            </select></td>  </td>

                          	           <td>PinCode:<span class="error">*</span><input type="text" name="opin" value="<?php echo $pin;?>" pattern="[6][0-9][0-9][0-9][0-9][0-9]"required></td></tr>
<tr><td colspan="3">Designation:<input type="text" name="odesg" value="<?php echo $desg?>"></td></tr>
<tr><td colspan="3">Email id:<input type="email" name="oemail" value="<?php echo $email?>">

		    	<tr bgcolor="#555"><td colspan="3" align="center"><font color="white">PROPERTY DETAILS </font></td></tr>
		    	<tr><td colspan="3">Owner of the  Property:<input type="text" name="owname"></td></tr>
		    	<tr>
		    		<td colspan="3">
                           Type:<span class="error">*</span>
	                 Flat <input type="radio" name="tp" value="1" checked>
	                  house   <input type="radio" name="tp" value="2">
	                   paying guest  <input type="radio" name="tp" value="3">
	                    Commericial buildings <input type="radio" name="tp" value="4">
	                    hostel<input type="radio" name="tp" value="5">
	                    </td></tr>
	                    
	                    

      <tr><td colspan="3">Property address:</td></tr>

	           <tr colspan="3" ><td>
	           	 HNO:<span class="error">*</span><input type="number" name="hno" placeholder="house number" size="30" required></td>
	           	           <td>Section:<span class="error">*</span><input type="text" name="sec" placeholder="section" size="30" required></td>

	           <td>House name:<input type="text" name="hname" placeholder="house name" size="30"></td></tr>
	          <tr colspan="3"> <td>Street Name:<input type="text" name="sname" placeholder="Street name" size="30"></td>
	           <td >Village:<input type="text" name="village" placeholder="Village name" size="30"></td>

	           	       <td>VardNo:<span class="error">*</span><input type="number" name="vardno" placeholder="VardNo" size="30"></td></tr>
	           	       <tr><td colspan="3">constitution type<select name="typeofg"><option value="1">Muncipality</option>	
	           	       <option value="2">Gramapanchayath</option>
	           	       <option value="3">Corpparation</option></select></td></tr>           	       
                     <tr colspan="2"><td>city:<input type="text" name="pcity" placeholder="city" size="30"></td>
                           	              <td>Distric:<span class="error">*</span><select name="pdist" value="<?php echo $dist ?>">
            	<option value="1">thivandrum</option>
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

                          	           <td>PinCode:<span class="error">*</span><input type="text" name="ppin" placeholder="Pincode" size="30" pattern="[6][0-9][0-9][0-9][0-9][0-9]" required></td></tr>
	           
	           <tr colspan="3"><td>Year of construction:<input type="text" name="year"></td><td> BHK:<span class="error">*</span>
	                  <input type="number" name="bhk" placeholder="2BHK/3BHK.." required>
	                  </td>
	                 <td>
	            SQRFT:<span class="error">*</span>
	                  <input type="number" name="sqrft" placeholder="squarefeet(eg.1600).." required>
	                  </td></tr>
	                  <tr><td>
	  Floor: 
	              <input type="number" name="fr" placeholder="0,1,2"></td>
	              <td> No.of Members:<input type="text" name="nofb" placeholder="number of members"></td>
	           <td> Facing:<input type="text" name="facing" placeholder="north/east/south/west"></td>
	           </tr>
	           <tr><td colspan="2">
	            Parking:<span class="error">*</span>
	                  <input type="number" name="pkg" placeholder="Parking fro 2/4/.." required>
	                  </td><td>Family or Bachelor:<input type="radio" name="forb" value="f">Family
	                  	<input type="radio" name="forb" value="b">Bachelor
	                  	<input type="radio" name="forb" value="fb">All</tr>

<tr><td colspan="3">Flat Association Details(Contact Person/Mobile)  : <input type="text" name="fcno">
	          </td></tr>
	          <tr ><td colspan="3">Rent(per month) : <input type="number" name="rent"></td></tr>
	          <tr><td colspan="3">EB Consumer No.<input type="text" name="cons"></td></tr>
	     <tr><td colspan="3"> Property Tax/Water Tax No. <input type="text" name="tax"></td></tr>
	     <tr><td colspan="3">Details(if any):<input type="text" name="details"></td></tr>
	     <tr><td colspan="3">Property in Bank loan: 
	            Yes<input type="radio" name="bn" value="1" checked >
	           No <input type="radio" name="bn" value="2"></td></tr>
	           <tr><td colspan="3"> 
	                   Furnished status:
	                 Not really<input type="radio" name="fy" value="not" checked>
	                  Semi furnished<input type="radio" name="fy" value="sem">
	                  fully furnished<input type="radio" name="fy" value="ful">
	                  	                  </td></tr>
	                  	                  		    	
	              <tr><td colspan="3">Insert images</td></tr>
	              <tr >
	                      <td colspan="2"> <input type="file" name="f1" id="f1">
	                        </td>
	                        <td> <input type="file" name="f2" id="f2">
	                        </td>
	                        </tr>
	                        <tr>
	                         <td colspan="2"> <input type="file" name="f3" id="f3">
	                        </td>
	                        <td> <input type="file" name="f4" id="f4">
	                        </td>
	                        </tr>
	           <tr><td> Name of the Authorized  Person::<span class="error">*</span>
	                  <input type="text" name="autname" placeholder="user name" size="30" required>
	                  </td></tr>
	                  <tr ><td colspan="2">DOB:<span class="error">*</span><input type="date" name="autdob"></td><td>      
                    Contact no:<span class="error">*</span>
	           <input type="text" name="autcno" placeholder="enter contact number" pattern="[6-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]"></td>
	           <tr><td colspan="3">Address:<input type="text" name="autcur"></td></tr>
               	           <tr><td>city:<input type="text" name="autcity" placeholder="city" size="30"></td>
                           	             <td>Distric:<span class="error">*</span><select name="autdist" value="<?php echo $dist ?>">
            	<option value="1">thivandrum</option>
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


                          	           <td>PinCode:<span class="error">*</span><input type="text" name="autpin" placeholder="Pincode" size="30" pattern="[6][0-9][0-9][0-9][0-9][0-9]" required></td></tr>
<tr><td colspan="3">Designation:<input type="text" name="autdesg"></td></tr>
<tr><td colspan="3">Email id:<input type="email" name="autemail" >
	<tr><td>Relationship:<input type="text" name="rel"></td></tr>
	
	<tr bgcolor="#555"><td colspan="3" align="center"><font color="white">YOUR DREAM HOME PROPERTY PLAN  </font></td></tr>
	<tr><td> Property Management </td><td>Tenancy Finder </td><td>Charges One month rent </td></tr>
	<?php 
	$sql=$conn->query("select * from account where no='$userid'");
	
if($sql->num_rows >0)
{
	while($row=mysqli_fetch_assoc($sql))
	{
		$bank=$row['bank'];
		$acc_name=$row['acc_name'];
		$acc_type=$row['acc_type'];
		$acc_number=$row['acc_number'];
		$branch=$row['branch'];
		$ifsc=$row['isc'];
		$baddress=$row['baddress'];
	}
	?><tr bgcolor="#555"><td colspan="3" align="center"><font color="white">BANK ACCOUNT DETAILS</font> </td></tr>
		<tr><td colspan="3">Bank:<?php echo $bank; ?></td></tr>
		<tr>
			<td colspan="3">Account Name: <?php echo $acc_name;?></td></tr>
			 <tr><td colspan="3">Account Number:<?php echo $acc_number; ?></td></tr>
			 <tr><td colspan="3"> Account Type:<?php echo $acc_type; ?></td></tr>
			  <tr><td colspan="3">  Branch: <?php echo $branch ;?></td></tr>
			  <tr><td colspan="3">  IFSC Code:<?php echo $ifsc; ?></td></tr>
			   <tr><td colspan="3">   Bank Address:<?php echo $baddress; ?></td></tr>
		<?php	    
}
	else
	{
		?>
		<tr bgcolor="#555"><td colspan="3" align="center"><font color="white">BANK ACCOUNT DETAILS</font> </td></tr>
		<tr><td colspan="3">Bank<input type="text" name="bank" required></td></tr>
		<tr>
			<td colspan="3">Account Name: <input type="text" name="acc_name" required></td></tr>
			 <tr><td colspan="3">Account Number: <input type="text" name="acc_number" required></td></tr>
			 <tr><td colspan="3"> Account Type:<input type="text" name="acc_type" required></td></tr>
			  <tr><td colspan="3">  Branch:  <input type="text" name="branch" required></td></tr>
			  <tr><td colspan="3">  IFSC Code:<input type="text" name="ifsc" required></td></tr>
	<tr><td colspan="3">   Bank Address: <input type="text" name="baddress" required></td></tr>
	<?php		   
	}
	?>
			    <tr><td colspan="3">  <input type="checkbox" name="dec" required> I agree that all information listed above is honest and accurate as of the date listed below</td></tr>
			    <tr class="hei"><td colspan="2">Signature of Property Owner (or Power of Attorney Holder) </td><td>Date</td></tr>
			    <tr>
			    	<td>
			    		<input type="submit" value="submit" class="login" name="submit">
			    		<input type="reset" class="login" value="Reset">
			    		</td>
			    	</tr>
			</table>


	

	      </div>
	   <?php 
	  if(isset($_REQUEST['submit']))
	  {

	    include 'csubmitadv.php';
}
?>
	     </sbody>

