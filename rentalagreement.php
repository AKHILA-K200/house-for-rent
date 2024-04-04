<html>
<head><title>rental agreement</title>
<style>
table{
    margin-left: 350px;
    align-content: center;
    border:5px solid black;
    }
.letter
{
    font-size: 20px;
    font-style: bold;

}
td{
 font-size: 20px;
  font-family:Liberation Sans;
  }
</style>
<script type="text/javascript">
  function myfunction()
  {
    window.print();
  }
</script>
</head>
<body>
	<?php
	include'dataconnect.php';
	$num=$_GET['id'];
	$no=$_GET['name'];



$sql=$conn->query("select * from advertisement where num='$num'");
  if($sql->num_rows >0)
    {
        while($res=mysqli_fetch_array($sql))
        {
         $userid=$res['no'];
         $adno=$res['adno'];
         $cno=$res['cno'];
         $rent=$res['rent'];
         $ebc=$res['ebc'];
        }
    }
    if($cno="NULL")
    {
      
        $d=date("Y/m/d");
$join=$d;
$dt=date_create($d);
date_add($dt,date_interval_create_from_date_string("334 days"));
$joinexp=date_format($dt,"Y-m-d");
//echo $joinexp;
$conn->query("insert into advdate(no,num,joininig,joinexp)values('$no','$num','$d','$joinexp'");

    }
    else
    {
        $sql=$conn->query("select * from advdate where no='$cno' and num='$num'");
if($sql->num_rows>0)
{
    while($res=mysqli_fetch_array($sql))
    {
        $join=$res['joining'];
        $joinexp=$res['joinexp'];
    }
}

    }
    $res=$conn->query("select * from owner where no='$userid'"); 
if($res->num_rows >0)
{
while($row=mysqli_fetch_assoc($res)){
$name=$row['name'];
$ph=$row['phoneno'];
$email=$row['email'];
$lic=$row['license'];
$vot=$row['viterid'];
$cur=$row['curaddress'];
    $dob=$row['dob'];
    $city=$row['city'];
    $dist=$row['disno'];
    $pin=$row['pin'];
    $desg=$row['desg'];
    $ono=$row['ono'];
$or=$row['ora'];
}
}
$res=$conn->query("select * from owner where no='$no'"); 
if($res->num_rows >0)
{
while($row=mysqli_fetch_assoc($res)){
$rentername=$row['name'];
$renterph=$row['phoneno'];
$renteremail=$row['email'];
$renterlic=$row['license'];
$rentervot=$row['viterid'];
$rentercur=$row['curaddress'];
    $renterdob=$row['dob'];
    $rentercity=$row['city'];
    $renterdist=$row['disno'];
    $renterpin=$row['pin'];
    $renterdesg=$row['desg'];
$renteror=$row['ora'];
}
}
$sql=$conn->query("select * from address where no='$userid' and adno='$adno'");
if($sql->num_rows >0)
{
  While($row=mysqli_fetch_assoc($sql))
  {
    $hno=$row['hno'];
$sec=$row['section'];
$hname=$row['hname'];
$sname=$row['sname'];
$village=$row['village'];
$vard=$row['vardno'];

$pcity=$row['city'];
$pdist=$row['disno'];
$ppin=$row['pcode'];

}
}
$sql=$conn->query("select * from advertisement where num='$num'");
if($sql->num_rows>0)
{
while($result=mysqli_fetch_assoc($sql)){
$cno=$result['cno'];
}
}
/*$res=$conn->query("select * from owner where no='$cno'"); 
if($res->num_rows >0)
{
while($result=mysqli_fetch_assoc($res)){
$rentername=$result['name'];
$renterph=$result['phoneno'];
$renteremail=$result['email'];
$renterlic=$result['license'];
$rentervot=$result['viterid'];
$rentercur=$row['cur'];
    $renterdob=$row['dob'];
    $rentercity=$row['city'];
    $renterdist=$row['distno'];
    $renterpin=$row['pin'];
    $renterdesg=$row['desg'];
$renteror=$result['ora'];
}
}

else
{
	$sql=$conn->query("select * from advertisement where num='$num'");
if($sql->num_rows>0)
{
while($result=mysqli_fetch_assoc($sql)){
$num=$result['num'];
$t=$resul['typeofh'];
$bhk=$result['bhk'];
$sqrft=$resul['sqrft'];
$facing=$result['facing'];
$flatcno=$result['flatcno'];
$ebc=$result['ebc'];
$tax=$result['tax'];
$rent=$result['rent'];
$floor=$result['floor'];
$adno=$result['adno'];
$year=$result['year'];
$pkno=$resul['pkno'];
$cno=$result['cno'];
$des=$result['description'];
}
}

$sql=$conn->query("select * from address where no='$ono' and adno='$adno'");
if($sql->num_rows >0)
{
  While($row=mysqli_fetch_assoc($sql))
  {
    $hno=$row['hno'];
$sec=$row['section'];
$hname=$row['hname'];
$sname=$row['sname'];
$village=$row['village'];
$vard=$row['vardno'];

$pcity=$row['city'];
$pdist=$row['disno'];
$ppin=$row['pin'];
$im1=$row['img1'];
$im2=$row['img2'];
$im3=$row['img3'];
$im4=$row['img4'];
}
}

*/
$advpay=3*$rent;

?>
<table>
    <center><tr><center><td align="center"><b><u>RENTAL AGREEMENT</u></b></td></center></tr></center>
<tr><td align="center"><b>PARTIES TO AGREEMENT</b></td></tr>
<div class="letter">
<tr><center><td><center><b>
<?php echo $name;?></b> Owner of rental Property residing at</center></td></tr>
<tr><td><center><?php echo $cur;?>referred to henceforth as the First Party.</td></center></tr>
<tr><td><center>and
<b><?php echo $rentername;?></b> the tenant, henceforthe referred to as the Second Parties.</center></td></tr></div>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><center><b>PRIMARY AGREEMENT</b></center></td></tr><tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<center>
<tr><td><b>1.</b> The First Party own a residential Flat/House located  and agree</td></tr><tr><td> to rent the flat to the Second Party for a <b>monthly rental</b></td></tr><tr><td> amounting to <b><?php echo $rent;?> (Rs)</b></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><b>2.</b> Second Party agree to pay the stipulated rent and also the cost of</td></tr><tr><td> recurring utility bills pertaining to Maintenance, Electricity bill to</td></tr><tr><td> TNEB, water & sewage charges while in occupation of the said</td></tr><tr><td> flat/House.</td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><b>3.</b> The Second Party agree to pay the First Party a sum of <?php echo $advpay;?>(Rs)</td></tr><tr><td> towards REFUNDABLE SECURITY DEPOSIT (interest free).</td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><b>4.</b> The Second Party agrees to abide by the terms and conditions</td></tr><tr><td> enumerated below</td></tr>
<tr><td><center><b><u>TERMS AND CONDITIONS<u></b></center></td></tr>
    <tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td>The TERMS & CONDITIONS have been framed to ensure that both </td></tr><tr><td>Parties have a clear understanding of their rights and responsibilities </td></tr><tr><td>and maintain a cordial relationship during the period of Tenancy.</td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><b>i.</b> The Rental Agreement will come into force from the <?php echo $join?> of the </td></tr><tr><td>First Party (Landlord) handing over the key to the Second Party </td></tr><tr><td>(Tenant) and will be <?php echo $joinexp;?>.</td></tr><tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><b>ii.</b> The Second Party shall pay the rent <b>on or before 5th day of each</td></tr><tr><td> Succeeding calendar month</b>.</td></tr><tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><b>iii.</b> The Second Party shall pay all utility bills including Maintenance</td></tr><tr><td> within the due date without fail. Any failure to do so, therefore</td></tr><tr><td> entailing disconnection of a utility and subsequent expenditure for</td></tr><tr><td> penalty and arrears will be borne by the Second Party solely.</td></tr>

<tr><td>Allotted  Parking which should not be sub rented to any parties.</td></tr><tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><b>iv.</b> If the First Party serves a notice to vacate in extraordinary</td></tr><tr><td> situations, the Second Party shall accept and agree to vacate the</td></tr><tr><td> premise in 2 Months</td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><b>v.</b> If the Second Party wishes to vacate the premises at any time</td></tr><tr><td> before the completion of 11 months they should give prior notice of</td></tr><tr><td> 2 months with end of each calendar or if vacating at shorter notice</td></tr><tr><td> they should pay TWO MONTHS RENT as compensation to the First</td></tr><tr><td> Party and under no circumstances security deposit will be adjusted</td></tr><tr><td> towards rent for the notice period.</td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><b>vi.</b> It is agreed between the First and Second Party that the First party</td></tr><tr><td> will bear the normal wear and tear and Second Party will himself</td></tr><tr><td> bear replacement/repair cost of electric Fans, lights, water taps,</td></tr><tr><td> glasses, washbasin etc.</td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><b>vii.</b> The RENTAL AGREEMENT is automatically renewed for an additional</td></tr><tr><td> ELEVEN (11) months IF either party fails to intimate the other party</td></tr><tr><td> in writing (including email) at least 60 CALENDAR DAYS in</td></tr><tr><td> advance of the expiry of this RENTAL AGREEMENT.</td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><b>viii.</b> The revision of rent will usually be 10% over the previous year or</td></tr><tr><td> as per mutual agreement.</td></tr><tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><b>ix.</b> If the Second Party defaults in the payment of rent at the</td></tr><tr><td> appropriate time as agreed upon, the First Party can then terminate </td></tr><tr><td>the contract agreement with the Second Party immediately and</td></tr><tr><td> request the Second Party to vacate the premises without any</td></tr><tr><td> further notice.</td></tr><tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><b>x.</b> The Second Party is required to retain all BILLS related to </td></tr><tr><td>Electricity, Water & miscellaneous expenses incurred during</td></tr><tr><td> tenancy. These bills should be submitted to First Party on </td></tr><tr><td>completion of Tenancy period for settlement of accounts and refund</td></tr><tr><td> of Security Deposit.</td></tr><tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><b>xi.</b> It is agreed that the First party will REFUND the Security Deposit</td></tr><tr><td> within 15 days of the Second Party vacating the property after</td></tr><tr><td> deducting various dues towards utilities if any and also after </td></tr><tr><td>assessing the cost of re-painting, repairs and damages that may </td></tr><tr><td>have been caused to the property structure/surface</td></tr><tr><td> walls/flooring/fittings/etc.</td></tr><tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><b>xii.</b> During the time of occupation and the Second Party shall not</td></tr><tr><td> involve in sub-letting /lease /share the property with third parties</td></tr><tr><td> or indulge in any anti-social, criminal or nuisance activities that</td></tr><tr><td> may inconvenience the neighborhood community. If any complaints</td></tr><tr><td> or information are received from neighbors or other reliable </td></tr><tr><td>source/s 
then the First Party will consider this as a breach</td></tr><tr><td> of contract and reserve the right to evict the Second Party without</td></tr><tr><td> 
notice and repossess the property. The Second Party will also forfeit</td></tr><tr><td> the right to claim any refund of Security Deposit money given in </td></tr><tr><td>such a situation.</td></tr><tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><b>xiii. </b>The Second Party agrees to keep the premises of the rented flat in </td></tr><tr><td>a clean & good condition causing no damage to the physical </td></tr><tr><td>structure and the facilities provided. The occupant shall agree to</td></tr><tr><td> hand over the property to the first party in a fit & clean condition at</td></tr><tr><td> the time of vacating the premises to the satisfaction of the First</td></tr><tr><td> Party.</td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><b>xiv.</b> Nailing or/and extra fittings are not permitted without prior</td></tr><tr><td> permission. Any damages to the wall will invite recovery of actual </td></tr><tr><td>cost for the repair work from the occupant. No additional holes/vent</td></tr><tr><td> shall be made on the wall for installation of Air conditioners or any</td></tr><tr><td> equipment unless First Party authorizes the same in writing.</td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><b>xv.</b> The First Party is entitled to enter the Premises at any date & time</td></tr><tr><td> for inspection of the FLAT as long as The First Party has given at</td></tr><tr><td> least 1 (one) calendar day notice (including via email & SMS) to The </td></tr><tr><td>Second Party.</td></tr>
<tr><td>xvi. The Second Party agrees to cooperate with the First Party in</td></tr><tr><td> showing property to prospective tenants, prior to termination of </td></tr><tr><td>occupancy.</td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><b>xvii.</b> Any maintenance work related to electricity, plumbing, sewage and</td></tr><tr><td> other minor complaints can be reported directly to First Party and</td></tr><tr><td> subsequently carried out. Any major repair works that needs to be</td></tr><tr><td> undertaken will require prior assessment and approval from the</td></tr><tr><td> First Party.</td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><b>xviii.</b> The Second Party shall not erect any permanant fixtures, fittings or</td></tr><tr><td> extensions on the rented property without approval of the land lord</td></tr><tr><td>. In case the tenanat shall erect such fixtures, fittings or extensions</td></tr><tr><td> with the approval of the landlord they shall become the integral</td></tr><tr><td> part of the property. However upon the handing over of </td></tr><tr><td>the property to the landlord be liable to remove such fixtures at the</td></tr><tr><td> tenants own expense.</td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><b>xix.</b> If the property is left unoccupied by the Second Party for 2 </td></tr><tr><td>succesive months without payment of rent, the First Party retains </td></tr><tr><td>the right to enter the premises with a duplicate key and repossess </td></tr><tr><td>the flat without any reservations whatsoever. The Rental</td></tr><tr><td> Agreement will automatically become null and void and the Second</td></tr><tr><td> Party is liable to forfeit
 the entire amount of Security Deposit and</td></tr><tr><td> also additional punitive damages if the First Party considers it</td></tr><tr><td> necessarry to compensate any loss caused by negligence of Second </td></tr><tr><td>Party.</td></tr>
<tr><td></td></tr><tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><b>xx.</b> Keys will be handed over to the Second Party at the time of</td></tr><tr><td> occupation. While vacating the flat the Second Party is required </td></tr><tr><td>to personally handover the key of the property to the First Party.</td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><b>xxi.</b> The Second Party acknowledges having taken possession of the</td></tr><tr><td> property in good condition and shall ensure to maintain the </td></tr><tr><td>property well and hand over the premises in equally good condition </td></tr><tr><td>on completion of tenancy.</td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><b>xxii.</b> If any issue happens in the apartment like misbehavior, Disturbing</td></tr><tr><td> neighbors, Allows or giving occupation for persons other than the</td></tr><tr><td> following persons, first party can take actions and vacates the tenant from the</td></tr><tr><td> premises.</td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><b>xxiii.</b> The First Party has appointed AUTHORIZED M/s Your Dream House</td></tr><tr><td> Property Management as Property Manager to represent them in </td></tr><tr><td>all matters related to the Property maintenance and repairs. </td></tr><tr><td>
The Second Party may contact<b> M/s Your dream home Property Management</td></tr><tr><td> whenever any service is required. Such repair and services</td></tr><tr><td> expenses undertaken by Your Dream House   Property Management at the</td></tr><tr><td> behest of the second party will be borne by the Second Party only.</td></tr>
    <tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr><tr><td>
<input type="checkbox" name="ch">We, the undersigned have read and understood the terms and conditions </td></tr><tr><td>listed above and agree to abide by the same without any reservations.</td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td>&nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;<?php echo $name?>  
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
    &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
    &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   <?php echo $rentername;?></td></tr>
<tr><td>&nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;Landlord 
   &nbsp;
   &nbsp;
    &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
    &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
&nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   Tenants</td></tr>
<tr><td>EB Consumer No: <?php echo $ebc; ?>
<tr><td>Keys Received:</td></tr>
<tr><td>List of items will be written in the site.</td></tr>
<tr><td>Date:<?php echo $join;?></td></tr>
</center>
</div>
<tr><td>
    &nbsp;
   &nbsp;
    &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
    &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
    &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
<?php
if($cno=="")
{
echo '<tr><td><a href="assigningpage2.php?id='.$num.'&name='.$no.'" name="acc">Accept</a></td></tr>';
}
else
{
  echo '<tr><td><button onclick="myfunction()">Print</button></td></tr>';
}
echo'<tr><td><a href="home.php?id='.$no.'" name="bth">back to home</a></td>';
?>
</table>
<?php
if(isset($_REQUEST['bth']))
{
    $conn->query("delete from family where no='$no'");
    $conn->query("delete from advdate where num='$num' and no='$no'");
}
if(isset($_REQUEST['acc']))
{
  $dep=$rent*3;
  $conn->query("insert into alldate(num,no,deposit,renew)values($num,'$no','$dep',1)");
}
?>
</body>
</html>