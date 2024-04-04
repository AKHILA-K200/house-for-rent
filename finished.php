<?php
include 'dataconnect.php';
$mid=$_GET['id'];
$conn->query("update maintainance set mcomplete='1' where mid='$mid'");
  $sql=$conn->query("select * from worker where mid='$mid'");
  if($sql->num_rows >0)
  {
    while($res=mysqli_fetch_assoc($sql))
    {
      $wid=$res['wid'];
      $conn->query("update worker set mid='0' where wid='$wid'");
  }
}
echo'<script>window.alert("Successfully updated!!")
                   window.location.href="admin_maintainance.php?id='.$mid.'";</script>';
?>