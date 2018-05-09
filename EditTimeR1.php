<?php
	session_start();
	$con=mysqli_connect("localhost","geethu","geethu@21","temple");
	$templeid=$_SESSION['templeid'];
	$tem="select tname from temple where tid=$templeid";
	$re=mysqli_query($con,$tem);
	$ro=mysqli_fetch_assoc($re);
	$gee=$ro['tname'];
	$id=$_SESSION['tid'];
	$fest=$_POST["txtfest"];
	$fdate=$_POST["fdate"];
	$tdate=$_POST["tdate"];
	$time=$_POST["txttime"];
	$event=$_POST["txtevent"];
	
	$sql="update time set `temple`='$gee', `festival`='$fest', `fdate`='$fdate',`tdate`='$tdate', `time`='$time', `event`='$event' where tid=$id;";
	mysqli_query($con,$sql);
    header('location:AdminVDTimeR.php'); 
					
?>