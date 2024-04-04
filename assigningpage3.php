<html>
<head>
<title>
Advertisement accepting</title>
</head>
<body>
<?php
include 'dataconnect.php';
$no=$_GET['id'];
$num=$_GET['num'];
$bank=$_POST['bank'];
	$acc_name=$_POST['acc_name'];
	$acc_number=$_POST['acc_number'];
	$acc_type=$_POST['acc_type'];
	$branch=$_POST['branch'];
	$ifsc=$_POST['ifsc'];
	$baddress=$_POST['baddress'];
		$conn->query("insert into account(no,bank,acc_name,acc_number,acc_type,branch,isc,baddress)values('$no','$bank','$acc_name','$acc_number','$acc_type','$branch','$ifsc','$baddress')");
		$sql=$conn->query("select * from advertisement where num='$num'");
if($sql->num_rows >0)
{
  while($res=mysqli_fetch_array($sql))
  {
    $rent=$res['rent'];
  }
}
	
		echo'<script>window.alert("please pay your deposit!!");
			             window.location.href="payment.php?id='.$num.'&name='.$no.'";</script>';
		
		?>
	</body>
	</html>