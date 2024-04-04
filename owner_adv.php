<html>
<head>
<title>create advertisement</title>
	<link rel="stylesheet" type="text/css" href="createaccount.css">

</head>
<body>
	<body class="grad">
	 <form action="csubmitadv.php" method="POST">
		    <table align="left" cellspacing="20" border="1">
		    	<tr><td><font size="7">Create Advertisement</font></td></tr>
	          <tr><td colspan="3" class="col">
	             Please enter the following details
	            </td></tr>
	            <tr><td></td><td></td><td></td><td colspan="3" rowspan="15"><table height="500" width="300">
	                    <tr>
	                      <td> <input type="file" name="f1" id="f1">
	                        </td>
	                        <td> <input type="file" name="f2" id="f2">
	                        </td>
	                        </tr>
	                        <tr>
	                         <td> <input type="file" name="f3" id="f3">
	                        </td>
	                        <td> <input type="file" name="f4" id="f4">
	                        </td>
	                        </tr>
	                    </table></td></tr>
	                   <tr><td>            Enter your house details::</td></tr>
	           <tr><td>HNO</td><td>:<span class="error">*</span></td><td><input type="number" name="hno" placeholder="house number" size="30" required></td></tr>
	           	           <tr><td>Section</td><td>:<span class="error">*</span></td><td><input type="text" name="sec" placeholder="section" size="30" required></td></tr>

	           <tr><td>House name</td><td>:</td><td><input type="text" name="hname" placeholder="house name" size="30"></td></tr>
	           <tr><td>Street Name</td><td>:</td><td><input type="text" name="sname" placeholder="Street name" size="30"></td></tr>
	           <tr><td>Village</td><td>:</td><td><input type="text" name="village" placeholder="Village name" size="30"></td></td>
	           <tr><td>city</td><td>:</td><td><input type="text" name="city" placeholder="city" size="30"></td></td>

	           	       <tr><td>VardNo</td><td>:<span class="error">*</span></td><td><input type="number" name="vardno" placeholder="VardNo" size="30"></td>

	            <tr><td>PinCode</td><td>:<span class="error">*</span></td><td><input type="text" name="pinc" placeholder="Pincode" size="30" required></td></td>
	              <tr><td>Distric</td><td>:<span class="error">*</span></td><td><input type="text" name="dist" placeholder="District Name" required></td></tr> 
	                 
	                  
	                   <tr><td colspan="3">
	            Enter the Rental details::</td>
	       
	                  </tr>
	                   <tr><td>
	                   Type</td><td>:<span class="error">*</span></td><td>
	                 Flat <input type="radio" name="tp" value="1" checked>
	                  house   <input type="radio" name="tp" value="2">
	                   paying guest  <input type="radio" name="tp" value="3">
	                    Commericial buildings <input type="radio" name="tp" value="4">
	                    Residential plot<input type="radio" name="tp" value="5">
	                    </td></tr>
	                    
	                   <tr><td>
	                   Given for</td><td>:<span class="error">*</span></td><td>
	                 Family <input type="radio" name="forb" value="2" checked>
	                  Bachelor   <input type="radio" name="forb" value="1">
	                    </td>
	                    
	                    <tr>
	                    <td></td><td></td><td>
	                    no of members:<input type="nb" placeholder="No of members"></td></tr>
	                  </tr>
	                  <tr><td>
	            SQRFT</td><td>:<span class="error">*</span></td><td>
	                  <input type="number" name="sqrft" placeholder="squarefeet(eg.1600).." required>
	                  </td></tr>
	                  
	                   <tr><td>
	            BHK</td><td>:<span class="error">*</span></td><td>
	                  <input type="number" name="bhk" placeholder="2BHK/3BHK.." required>
	                  </td></tr>
	                   <tr><td>
	            Rent</td><td>:<span class="error">*</span></td><td>
	                  <input type="number" name="rent" placeholder="rentalamount" required>
	                  </td></tr>
	                  
	                   <tr><td>
	                   Furnished or not</td><td>:</td><td>
	                 Yes<input type="radio" name="fy" value="yes" checked>
	                  No <input type="radio" name="fy" value="no">
	                  	                  </td></tr>
	                  
	                   <tr><td>
	            Parking</td><td>:<span class="error">*</span></td><td>
	                  <input type="number" name="pkg" placeholder="Parking fro 2/4/.." required>
	                  </td></tr>
	                   <tr><td>
	            Waterfacility</td><td>:<span class="error">*</span></td><td><select>
	             <option value="-1"> select water facility</option>

        <option value=1 name="wmo">Well</option>
        <option value=2 name="wmo">Muncipality</option>
        <option value=3 name="wmo">Other</option>
        
        </select>
     </td></tr>
     <tr><td>
	  Floor</td><td>: </td>
	      <td>Groundfloor<input type="radio" name="gfr" id="gf" checked >
	           Topfloor   <input type="radio" name="gfr" id="tf"></td>
	           </tr>
	           
	                  <tr><td>
	  SingleHouse</td><td>: </td>
	      <td>Yes<input type="radio" name="shy"  id="sh"checked>
	           No  <input type="radio" name="shy" id="sn"></td>
	           </tr>
	           
	           <tr><td>
	           Other room details:</td><td>:</td>
	           <td><input type="checkbox" name="proom" value="yes">PoojaRoom
	               <input type="checkbox" name="sroom" value="yes">StoreRoom
	               <input type="checkbox" name="groom" value="yes">GuestRoom
	               <input type="checkbox" name="droom" value="yes">DiningRoom
	           
	              </td>
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

</body>
