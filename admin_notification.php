
<html>
<head>
<title>Notification creation</title></head>
<body>
<?php
ini_set('display_errors',1);
   error_reporting(E_ALL & ~E_STRICT);
   
function notify($type,$name,$no,$nottype,$ora)
{
	include'dataconnect.php';
   
if($nottype=="reg")
	{
		
		$result=$conn->query("select * from notification where user='$name' and no='$no' and type='$type' "); 
    if($result->num_rows >0)
    {
    
    $conn->query("update notification set count=0,time=now() where user='$name' and no='$no' and type='$type'");
   
    }
    else
    {
	$conn->query("insert into notification(type,user,no,nottype,ora)values('$type','$name','$no','$nottype','$ora')");
   }
}
}
function notifyadvacc($type,$name,$nottype,$advno,$ora,$ono)
{
    include'dataconnect.php';
   
if($nottype=="reg")
    {
        
        $result=$conn->query("select * from notification where user='$name' and no='$no' and type='$type' "); 
    if($result->num_rows >0)
    {
    
    $conn->query("update notification set count=0,time=now() where user='$name' and no='$no' and type='$type'");
   
    }
    else
    {
    $conn->query("insert into notification(type,user,advno,nottype,ora,ono)values('$type','$name','$advno','$nottype','$ora','$ono')");
   }
}
}

function notifyacr($type,$name,$no,$ora,$ono)
{
    include'dataconnect.php';
        
        $result=$conn->query("select * from notification where user='$name' and no='$no' and type='$type' "); 
    if($result->num_rows >0)
    {
    $conn->query("update notification set count=0,time=now() where user='$name' and no='$no' and type='$type'");
   
    }
    else
    {
    $conn->query("insert into notification(type,user,no,ora,ono)values('$type','$name','$no','$ora','$ono')");
   }
}




function notifyadv($type,$name,$no,$nottype,$ora,$advno)
{
    include 'dataconnect.php';
$result=$conn->query("select * from notification where advno='$advno' and no='$no' and type='$type' ");
if($result->num_rows >0)
{
$sql="update notification set count=0,time=now(), where advno='$advno' and no='$no' and type='$type';";
$conn->query($sql);
}
else
{
    
    $conn->query("insert into notification(type,user,no,advno,nottype,ora)values('$type','$name','$no',$advno,'$nottype','$ora')");
}
}
function notifyacc($type,$name,$no,$nottype,$advno,$ono,$ora)
{
    include 'dataconnect.php';
    

 $result=$conn->query("select * from notification where advno='$advno' and no='$no' and nottype='$nottype' ");
if($result->num_rows >0)
{
$sql="update notification set count=0,time=now(), where advno='$advno' and no='$no' and nottype='$nottype';";
$conn->query($sql);
}
  else
  {
    echo $type;
    echo $name;
    echo  $no;
    echo $nottype;
    echo  $advno;
    echo $ono;
    echo  $ora;
    $conn->query("insert into notification (type,user,no,advno,nottype,ora,ono)values('$type','$name','$no',$advno,'$nottype','$ora','$ono')");
}
}



function notifypay($type,$name,$no,$nottype,$ora,$advno,$ono,$pid)
{
  include 'dataconnect.php';
    $conn->query("insert into notification (type,user,no,advno,nottype,ora,ono)values('$type','$name','$no','$advno','$nottype','$ora','$ono',$pid)");
}  
function notifyleft($type,$name,$no,$nottype,$ora,$advno,$ono)
{
    $result=$conn->query("select * from notification where advno='$advno' and no='$no' and nottype='$nottype' ");
if($result->num_rows >0)
{
$sql="update notification set count=0,time=now(), where advno='$advno' and no='$no' and nottype='$nottype';";
$conn->query($sql);
}
  
    $conn->query("insert into notification (type,user,no,advno,nottype,ora,ono)values('$type','$name','$no','$advno','$nottype','$ora','$ono')");
}  
?>

</h2>

</body>
</html>
