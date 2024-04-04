
<html>
<head>
<title>create advertisement</title>
	<link rel="stylesheet" type="text/css" href="css/linkbut.css">
	<link rel="stylesheet" type="text/css" href="css/tacen.css">

</head>

	<body class="grad">
		<?php
		include'dataconnect.php';
		$userid=$_GET['id'];
	
	echo' <form action="csubmitadvrenter.php?id='.$userid.'" method="POST">	';?>
		    <table>
	          <tr><td colspan="3">
	             Create adverttisement
	            </td></tr>
	            <tr>
		    		<td>
                           Type</td><td>:</td><td><select name="tp">
                           	                     <option value="1">Fltat</option>
	                                              <option value="2">House</option>
	                                         <option value="3">Paying guest</option>
	                                         <option value="4">Commercial building</option>
	                                         <option value="5">Hostel</option>
	                  </select></td></tr>
	              <tr><td>
	            BHK</td><td>:<span class="error">*</span></td><td>
	                  <input type="number" name="bhk" placeholder="2BHK/3BHK.." required>
	                  </td></tr>
	                   <tr><td>
	            Rent</td><td>:<span class="error">*</span></td><td>
					<select name="rent">
		<option value="-1"> select the amount to be expected</option>

        <option value="1000">Less than 1000</option>
        <option value="2000">Less than 2000</option>
       <option value="3000">Less than 3000</option>
              <option value="5000">Less than 5000</option>
                     <option value="10000">Less than 1000</option>
                      <option value="12000">Less than 12000</option>
                       <option value="15000">Less than 15000</option>
                        <option value="20000">upto 20000</option>
        </select>
	                  </td></tr>
	                  
	                   <tr><td>
	                   Furnished or not</td><td>:</td><td>
	                 Yes<input type="radio" name="fy" value="sem" checked>
	                  No <input type="radio" name="fy" value="ful">
	                  	                  </td></tr>
	                 <tr> <td>Facing: </td><td>:</td><td><input type="text" name="facing" placeholder="north/east/south/west"></td>
	           </tr>
	                   <tr><td>
	            Parking</td><td>:<span class="error">*</span></td><td>
	                  <input type="number" name="pkg" placeholder="Parking fro 2/4/.." required>
	                  </td></tr>
	                   
	           
	                  <tr><td>
	  SingleHouse</td><td>: </td>
	      <td>Yes<input type="radio" name="shy" value="1" checked>
	           No  <input type="radio" name="shy" value="2"></td>
	           </tr>
	           
	           <tr><td>District</td><td>:</td>
	              <td><select name="dist">
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
       <tr>
	             <td>city</td><td>:</td><td><input type="text" name="city"></td>
	             </tr>
	           
	              <tr><td>
	              Other Description</td><td>:</td>
	              <td>
	             <textarea name="od" size="35"></textarea>
	              </td>
	              </tr>
	              <tr>
	              <td>
	              <input type="submit" name="sumbit" value="submit" width="50" id="letters">
	              </td></tr>
	                  </table>
	                  </form>
	                  </body>

</html>
