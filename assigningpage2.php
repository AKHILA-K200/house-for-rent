<html>
<head>
<title>
Advertisement accepting</title>

<style type="text/css">
 table,td, th {
  border: 1px solid black;
}


table {
  border-collapse: collapse;
  width: 100%;
}
.content {
  max-width:800px;
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
input
{
    border:0px;
}
</style>
</head>
<body>
    <div class="content">
<?php 
include 'dataconnect.php';
include 'admin_notification.php';
$num=$_GET['id'];
$no=$_GET['name'];
echo'<form method="POST">';
$sql=$conn->query("select * from owner where no='$no'");
if($sql->num_rows >0)
    {
        while($res=mysqli_fetch_array($sql))
        {
         $name=$res['name'];
         
        }
    }
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
$conn->query("update owner set ono='$userid' where no='$no'");
$conn->query("update advertisement set cno='$no' where num='$num'");
$type="Tenant is assigned";
     
     $advno=$num;
     $nottype="acc";
     $ora='r';
    $name="$name";
     notifyacc($type,$name,$no,$nottype,$advno,$userid,$ora);
 
    $sql=$conn->query("select * from account where no='$no'");
    
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
    ?>
    <table><tr bgcolor="#555"><td colspan="3" align="center">BANK ACCOUNT DETAILS </td></tr>
        <tr><td colspan="3">Bank:<?php echo $bank; ?></td></tr>
        <tr>
            <td >Account Name: <?php echo $acc_name;?></td></tr>
             <tr><td>Account Number:<?php echo $acc_number; ?></td></tr>
             <tr><td > Account Type:<?php echo $acc_type; ?></td></tr>
              <tr><td >  Branch: <?php echo $branch ;?></td></tr>
              <tr><td >  IFSC Code:<?php echo $ifsc; ?></td></tr>
               <tr><td >   Bank Address:<?php echo $baddress; ?></td></tr></table>
                  <?php echo' <tr><td><a href="assiginingpage3.php?id='.$no.'&name='.$num.'">Submit</a></td></tr>'?>
                  <?php echo' <tr><td><a href="home.php?id='.$no.'">back to home</a></td></tr>'; ?>
        <?php       
}
    else
    {
        ?>
        <table>
        <tr bgcolor="#555"><td colspan="3" align="center"><font color="white">FILL OUT YOUR BANK ACCOUNT DETAILS</font> </td></tr>
        <tr><td>Bank<input type="text" name="bank" required></td></tr>
        <tr>
            <td >Account Name: <input type="text" name="acc_name" required></td></tr>
             <tr><td >Account Number: <input type="text" name="acc_number" required></td></tr>
             <tr><td > Account Type:<input type="text" name="acc_type" required></td></tr>
              <tr><td >  Branch:  <input type="text" name="branch" required></td></tr>
              <tr><td >  IFSC Code:<input type="text" name="ifsc" required></td></tr>
    <tr><td >   Bank Address: <input type="text" name="baddress" required></td></tr>';
    <?php echo'<tr><td><a href="assigningpage3.php?id='.$no.'&name='.$num.'">Submit</a></td></tr>'?>
     <?php echo' <tr><td><a href="home.php?id='.$no.'">back to home</a></td></tr>'; ?>
</table>
    <?php          
    }
    $dt=date(Y-m-d);
  $rd=date_create($dt);
date_add($rd,date_interval_create_from_date_string("330 days"));
$rentdt=date_format($rd,"Y-m-d");
    $conn->query("insert into advdate (no,num,joining,joinexp)values('$no','$num','$joining','$joinexp')");
    echo'</form>';
    ?>

</body>
</html>