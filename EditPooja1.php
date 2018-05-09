<?php
	session_start();
	$con=mysqli_connect("localhost","geethu","geethu@21","temple");
	$id=$_SESSION['pid'];
	$temple=$_POST["temple"];
	$deity=$_POST["deity"];
	$pname=$_POST["txtpooja"];
	$amt=$_POST["txtamount"];
	$purpose=$_POST["txtpurpose"];
	
	$sql="update pooja set `temple`='$temple', `deity`='$deity', `pname`='$pname', `amount`='$amt', `purpose`='$purpose', `curdate`=NOW() where pid=$id;";
	mysqli_query($con,$sql);
	
    header('location:AdminPoojaList.php');
					
?>