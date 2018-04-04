<?php
 $con=mysqli_connect("localhost","geethu","geethu@21","temple");
 
$wid=$_GET["wid"];
$sql="select * from W_booking where wid=$wid";
$res=mysqli_query($con,$sql);
$col=mysqli_fetch_assoc($res);

header('location:ViewWdetails.php');

?>