<?php
	session_start();
	$con=mysqli_connect("localhost","geethu","geethu@21","temple");
	$id=$_SESSION['prid'];
	$temple=$_POST["temp"];
	$priest=$_POST["txtname"];
	$padr=$_POST["txtadr"];
	$email=$_POST["txtemail"];
	$mob=$_POST["txtmob"];
	$doj=$_POST["date"];
	$salary=$_POST["txtsal"];
	
	$sql="update priest set `temple`='$temple', `pname`='$priest', `adrs`='$padr', `email`='$email', `mob`='$mob',`mob`='$doj',`salary`='$salary', `curdate`=NOW() where prid=$id;";
	mysqli_query($con,$sql);
	
    header('location:AdminPriestList.php');
					
?>