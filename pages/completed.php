<?php
 $con=mysqli_connect("localhost","geethu","geethu@21","temple");
 
$bid=$_GET["bid"];

$sql="update p_booking set status=1 where bid=$bid";
mysqli_query($con,$sql);
header('location:PendingPooja.php?x=1');

?>