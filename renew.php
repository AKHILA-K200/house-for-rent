
<html>
<head>
<meta http-equiv="refresh" content="10">

<link rel="stylesheet" type="text/css" href="css/style1.css">
<style>
  .content {
  max-width: 1000px;
  margin: auto;
  background: white;
  padding: 10px;
  }
  
  body
{
  background-image:url("images/im1.jpg");
  height:100%;
  width:100%;
  background-position:center;
  background-repeat:no-repeat;
  background-size:cover;
}
table {
  border-collapse: collapse;
 width:1000px;
}
td{
  border: 1px solid black;
}
th {
  height: 50px;
}
.hei{
  height:100px;
}
</style>
</head>
<body>
	<?php
	$userid=$_GET['id'];
	$sql=$conn->query("select * from owner where no='$userid'");
	if($sql->num_rows >0)
	{
		while($res=mysqli_fetch_assoc($sql))
		{
			$name=$result['name'];

$lic=$result['num'];

		}
	}

	$sql=$conn->query("select * from advertisement where num='$num'");
	if($sql->num_rows >0)
	{
		while($res=mysqli_fetch_assoc($sql))
		{
    $rent=$res['rent'];
		}
		}
		$s=10*($rent/100);
$pay=$rent+$s;

$dt=date("Y/m/d H:i:s");
$d=date_create($dt);
date_add($d,date_interval_create_from_date_string("345 days"));
$rentdt=date_format($d,"Y-m-d");
$conn->query("update advdate set leaveexp='$rentdt' and joinexp='$rentdt' where num='$num' and no='$userid' ");
echo'<script>window.alert("Renewed for one year successfully!!");
			             window.location.href="renter_home3.php?'.$userid.'";</script>';
?>
</body>