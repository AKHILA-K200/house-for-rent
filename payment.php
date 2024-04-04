<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
<script language="JavaScript">
  
function checkdata()
{
  var payment;
payment=document.paymenting.payment.value;
var pay="<?php echo $pay ?>";
if(payment<pay)
{
  alert("payment is less than the rental amount");
 return false;
}
else
{
  return true;
}
</script>
</head>
<body>
<?php
include 'dataconnect.php';
include 'admin_notification.php';
$num=$_GET['id'];
$no=$_GET['name'];
$sql=$conn->query("select * from owner where no='$no'");
if($sql->num_rows >0)
{
  while($result=mysqli_fetch_assoc($sql)){
    
    $email=$result['email'];
    $name=$result['name'];
    $cur=$result['curaddress'];
    $city=$result['city'];
    $pin=$result['pin'];
    $ono=$result['ono'];
    
  }
}
echo'<form method="POST">';
if($ono=="NULL")
{

  echo'<script>window.alert("Sorry you are not get a tenantyet!!")
                   window.location.href="renter_home3.php?id='.$no.'";</script>'; 

}
  else
{

$sql=$conn->query("select * from account where no='$no'");
$r=$sql->num_rows;
if($r >0)
{
  while($result=mysqli_fetch_assoc($sql))
  {
    $acc_name=$result['acc_name'];
   $acc_number =$result['acc_number'];
    $acc_type=$result['acc_type'];
   $branch=$result['branch'];
    $ifsc=$result['isc'];
    $dep=$result['deposit'];
    
  }
}
else

{
  
  echo'<script>window.alert("Fill your account details!!")
                   window.location.href="assigningpage2.php?id='.$num.'&name='.$no.'";</script>'; 
}

$sql=$conn->query("select * from advertisement where num='$num'");
if($sql->num_rows >0)
{
  while($res=mysqli_fetch_array($sql))
  {
    $userid=$res['no'];
     $rent=$res['rent'];
     $advno=$res['advno'];
    
  }
}
$dt=date("Y/m/d H:i:s");
$d=date_create($dt);
$sql=$conn->query("select * from account where no='$userid'");
if($sql->num_rows >0)
{
  while($res=mysqli_fetch_array($sql))
  {
    $amt=$res['amount'];
  }
}
  
$sql=$conn->query("select * from advdate where no='$no' and num='$num' ");
if($sql->num_rows >0)
{
  while($result=mysqli_fetch_assoc($sql)){
    
   $depdate=$result['depdate'];
  
    }
  
  if($depdate=="")
  {
    $pay=3*$rent;
    
  }
  else
  {
  
   /* $bal=$dep-$adv;
    if($bal>$rent)
      $pay=$rent;
    else
    {
      $s=$rent-$bal;
      $pay=$s;
    }
  }
  else
  {
    $pay=$rent;
    echo $pay;
  }
  */
  $pyd=$conn->query("select * from py where no='$no' and ton='$userid' ");
  if($pyd->num_rows >0)
  {
    for ($i=1; $i <2 ; $i++) { 
    while($pys=mysqli_fetch_array($pyd))
    {
       $padate=$pys['pdate'];
       Continue;
    }
    }
  }
  $total=0;
$sql=$conn->query("select * from maintainance where num='$num' and no='$no' and mdate>='$padate' and mdate<='$dt' and pyn='0'");
if($sql->num_rows >0)
{
  while($res=mysqli_fetch_array($sql))
  {
   $total=$total+$res['mcharge'];
  }
  $pay=$rent+$total;
}


else
{
  $pay=$rent;
}
}
?>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="" name="paymenting" onsubmit="return checkdata()">
      
        <div class="row">
          <div class="col-50">
            <h3>Renter Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" value="<?php echo $name;?>">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" value="<?php echo $email;?>">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" value="<?php echo $cur;?>">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" value="<?php echo $city;?>">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" value="Kerala">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" value="<?php echo $pin;?>">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" value="<?php echo $acc_name;?>">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Rental billing
        </label>
        

    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Rent <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      
      <hr>
      <p>amount <span class="price" style="color:black"><b><input type="text" name="payment" value="<?php echo $pay;?>"></b></span></p>
    </div>
  </div>
</div>
<input type="submit" value="Continue to checkout" class="btn" name="paysub">
 <?php
 echo'</form>';
}
?>

<?php
if(isset($_REQUEST['paysub']))
{
  /*deposit payment*/
  if($depdate=="")
{
  
  $conn->query("update advdate set depdate='$dt' where no='$no' and num='$num'");
  $conn->query("update account set amount='$amt+$pay' where no='$userid'");
  $conn->query("insert into py(no,name,amt,ton,pdate)values('$no','$name','$pay','$userid','$d')");
  $type=" Advance payment";
$nottype="pay";
$ora="r";
$pids=$conn->query("select * from py where no='$no' and name='$name' and amt='$pay' and ton='$userid' and pdate='$d'");
if($pids->num_rows >0)
{
  while($pidt=mysqli_fetch_assoc($pids))
  {
$pid=$pidt['pid'];
  }
}
notifypay($type,$name,$no,$nottype,$ora,$advno,$ono,$pid);
}
 else{
$payment=$_POST['payment'];
$tpay=$payment;
$sql=$conn->query("select * from maintainance where num='$num' and no='$no' and mdate>='$pdate' and mdate<='$dt' and py='0'");
if($sql->num_rows >0)
{
  while($res=mysqli_fetch_array($sql))
  {
   $total=$total+$res['mcharge'];
  }
  $adm=$conn->query("select * from account where no='1'");
  if($adm->num_rows >0)
  {
    while($admac=mysqli_fetch_array($adm))
{
  $adamt=$admac['amount'];
} 
 }
  $conn->query("update account set amt=$adamt+$total where no='1'");
  $payment=$payment-$total;
  $pay=$pay-$total;
}
$rtd=$conn->query("select * from advdate where no='$no' and num='$num'");
if($rtd->num_rows >0)
{
  while($rtdt=mysqli_fetch_assoc($rtd))
  {
    $rentdate=$rtdt['rentdate'];
  }
}
if($rentdate=="")
{
$rd=date_create($dt);
date_add($rd,date_interval_create_from_date_string("30 days"));
$rentdt=date_format($rd,"Y-m-d");
}
else
{
  $rd=date_create($rentdate);
date_add($rd,date_interval_create_from_date_string("30 days"));
$rentdt=date_format($rd,"Y-m-d ");
}
$retd=date_create($rentdate);
$diff=date_diff($retd,$d);
$diff=$diff->format("%R%a");
if($diff>=25)
{
if($payment>$pay)
{
  
  $r=$payment-$pay;
  $p=$dep+$r;
  $z=$amt+$pay;
  $y=$dep+$p;
  $conn->query("update account set amount='$z' where no='$userid'");

  //$conn->query("update account set amount='$amt+$pay' where no='$ono'");
  $conn->query("update accountt set deposit='$y' where no='$no'");
  $conn->query("update advdate set rentdate='$rentdt' where no='$no' and num='$num'");

$conn->query("insert into py(no,name,amt,ton,pdate)values('$no','$name','$tpay','$userid','$dt')");
$pids=$conn->query("select * from py where no='$no' and name='$name' and amt='$tpay' and ton='$userid' and pdate='$dt'");
if($pids->num_rows >0)
{
  while($pidt=mysqli_fetch_assoc($pids))
  {
$pid=$pidt['pid'];
  }
}

  }
  else
  {
     $z=$amt+$pay;
  $conn->query("update account set amount='$z' where no='$userid'");

  //$conn->query("update account set amount='$amt+$pay' where no='$ono'");
    $conn->query("update advdate set rentdate='$rentdt' where no='$no' and num='$num'");
$conn->query("insert into py(no,name,amt,ton,pdate)values('$no','$name','$tpay','$userid','$dt')");
$pids=$conn->query("select * from py where no='$no' and name='$name' and amt='$tpay' and ton='$userid' and pdate='$d'");
if($pids->num_rows >0)
{
  while($pidt=mysqli_fetch_assoc($pids))
  {
$pid=$pidt['pid'];
  }
}

}
$type=" Monthly rental payment";
$nottype="pay";
$ora="r";
notifypay($type,$name,$no,$nottype,$ora,$advno,$ono,$pid);
  
}
else
{
$x=$dep+$payment;
  $conn->query("update account set deposit='$x' where no='$no'");
  $conn->query("insert into py(no,name,amt,ton,pdate)values('$no','$name','$tpay','$userid','$dt')");

  echo '<h2>Balance on deposit is:'.$x.'</h2>';

   $type=" deposit payment";
$nottype="pay";
$ora="r";
$pids=$conn->query("select * from py where no='$no' and name='$name' and amt='$tpay' and ton='$userid' and pdate='$dt'");
if($pids->num_rows >0)
{
  while($pidt=mysqli_fetch_assoc($pids))
  {
$pid=$pidt['pid'];
  }
}
notifypay($type,$name,$no,$nottype,$ora,$advno,$ono,$pid);
}
}
 $conn->query("update maintainance set pyn='1' where num='$num' and no='$no' and mdate>='$pdate' and mdate<='$dt' and pyn='0' ");
echo "<h2>Your transaction is completed...Thankyou for trusting us</h2>";
  echo'<a href="renter_home3.php?id='.$no.'">back to home</a></h2>';
 }
}

 ?>
</body>
</html>
