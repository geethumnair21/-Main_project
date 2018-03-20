<?php
	session_start();
	$con=mysqli_connect("localhost","geethu","geethu@21","temple");
	$id=$_SESSION['tid'];
	$temple=$_POST["temple"];
	$fest=$_POST["txtfest"];
	$date=$_POST["date"];
	$time=$_POST["txttime"];
	$event=$_POST["txtevent"];
	
	$sql="update time set `temple`='$temple', `festival`='$fest', `date`='$date', `time`='$time', `event`='$event' where tid=$id;";
	mysqli_query($con,$sql);
	
    header('location:AdminVDTime.php'); 
					
?>