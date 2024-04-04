<html>
<head>
<title>
	searching page
</title>
<style>
  
body
{
  background-image:url("images/im1.jpg");
  height:100%;
  width:100%;
  background-position:center;
  background-repeat:no-repeat;
  background-size:cover;
}
.content {
  max-width:1000px;
  margin: auto;
  background: white;
  padding: 10px;
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

        <link rel="stylesheet" type="text/css" href="css/style.css">
        
        
        </head>
<body>
  <div class="content">
  <?php
  include 'dataconnect.php';
  $userid=$_GET['id'];
  ?>
	<form action="" method="POST">
	<center><table>
    <tr><td>
      <?php include 'home.php';?>
    </td></tr>
  
		<tr>
			<td>
				<font size="7">Search here</font>
			</td>
        </tr>
        <tr>
        	<td><font size="4">Select distric</font>
            <select name="dist">
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
        
            </select></td>  </tr>
            <tr><td><font size="4">Enter city:</font><input type="text" name="city"></td></tr>     
             	
             	            <tr><td><font size="4">Enter the amount:</font><select name="min"><option value="-1">MIN</option>
             	            	                                                 <option value="1000">1000</option>
             	                                                                 <option value="2000">2000</option>
             	                                                                 <option value="3000">3000</option>
             	                                                                 <option value="5000">5000</option>
             	                                                                 <option value="7000">7000</option>
             	                                                                 <option value="10000">10000</option>
             	                                                                 <option value="12000">12000</option>
             	                                                                 <option value="15000">15000</option> 
                                                                                 <option value="20000">20000</option></select>
                                                                                 	<select name="max"><option value="-1">MAX</option>
             	            	                                                 <option value="2000">2000</option>
             	                                                                 <option value="3000">3000</option>
             	                                                                 <option value="5000">5000</option>
             	                                                                 <option value="7000">7000</option>
             	                                                                 <option value="10000">10000</option>
             	                                                                 <option value="12000">12000</option>
             	                                                                 <option value="15000">15000</option>
             	                                                                 <option value="20000">20000</option> 
                                                                                 <option value="30000">30000</option></select></td>
                                                                                 
                                                                                 </tr>    
    <tr>
    	<td><font size="4">
    		 Type:</font><select name="type">
            	<option value="1">Flat</option>
            	<option value="2">House</option>
       <option value="3">paying guest</option>
       <option value="4">commercial building</option>
       <option value="5">Hostel</option>
	                
    	</td>
</tr>
<tr><td><input type="submit" value="search" name="sub" class="login"></td></tr>
</tr>
</table></center>
</form>
<?php
if(isset($_REQUEST['sub']))
{
  $t=$_POST['type'];
  $pdist=$_POST['dist'];
  $min=$_POST['min'];
  $max=$_POST['max'];
  $pcity=$_POST['city'];
  $rent=$max-$min;

    $sql=$conn->query("select * from advertisement,address where typeof='$t' and disno='$pdist' and rent<='$rent' or city='$pcity'  and apornot='1' and cno is null  and advertisement.no=address.no");
if($sql->num_rows >0)
{
    while($result=mysqli_fetch_array($sql))
    {
       
        $num=$result['num'];
$t=$result['typeof'];
$bhk=$result['bhk'];
$sqrft=$result['sqrft'];
$facing=$result['facing'];
$flatcno=$result['flatcno'];
$ebc=$result['ebc'];
$tax=$result['tax'];
$rent=$result['rent'];
$floor=$result['floor'];
$adno=$result['adno'];
$year=$result['year'];
$pkno=$result['pkno'];
$cno=$result['cno'];
$des=$result['description'];
$hno=$result['hno'];
$sec=$result['section'];
$hname=$result['hname'];
$sname=$result['sname'];
$village=$result['village'];
$vard=$result['vardno'];
$pcity=$result['city'];
$pdist=$result['disno'];
$ppin=$result['pcode'];

}
$im=$conn->query("select * from image where num='$num'");
if($im->num_rows >0)
{
  while($img=mysqli_fetch_array($im))
  {
    $im1=$result['img1'];

  }
}
$res=$conn->query("select * from typeofh where typeof='$t'");
      if($res->num_rows >0)
      {
        while($ts=mysqli_fetch_array($res))
        {
          $typeofh=$ts['tpfhtype'];
        }
      }

$ad=$conn->query("select * from image where num='$num'");
      if($ad->num_rows >0)
      {
        while($ads=mysqli_fetch_assoc($ad))
        {
          $im1=$ads['img1'];
        }
      }
 echo '<table border="2"><tr><td><img src="'.$im1.'" height="150" width="200"></td>';
 echo'<td><table><tr><td bgcolor="grey"'.$typeofh.'</td></tr>';
 echo'<tr><td bgcolor="grey">'.$rent.'</td></tr>';
 echo'<tr><td><b>'.$hname.'</b></td></tr>';
 echo'<tr><td><b>'.$pcity.'</b></td></tr>';
  echo'<tr><td><span class="glyphicon glyphicon-bed">'.$bhk.'</span></td>';
 echo'<td><i class="fas fa-vector-square">'.$sqrft.'</i></td></tr>'; 
 echo'<tr><td><i class="fas fa-home">'.$floor.'</i></td>';
 echo'<td><i class="fas fa-arrow">'.$floor.'</i></td></tr>';
 echo'<tr><td><a href="viewadv.php?id='.$num.'">View more</a></td></tr></table></td></tr>';
}

    }

?> 

</body>

</html>
