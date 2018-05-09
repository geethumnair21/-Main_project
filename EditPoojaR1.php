<?php
	session_start();
	$con=mysqli_connect("localhost","geethu","geethu@21","temple");
	$templeid=$_SESSION['templeid'];
	$tem="select tname from temple where tid=$templeid";
	$re=mysqli_query($con,$tem);
	$ro=mysqli_fetch_assoc($re);
	$gee=$ro['tname'];
	$id=$_SESSION['pid'];
	$deity=$_POST["deity"];
	$pname=$_POST["txtpooja"];
	$amt=$_POST["txtamount"];
	$purpose=$_POST["txtpurpose"];
	
	$sql="update pooja set `temple`='$templeid', `deity`='$deity', `pname`='$pname', `amount`='$amt', `purpose`='$purpose', `curdate`=NOW() where pid=$id;";
	mysqli_query($con,$sql);

    header('location:AdminPoojaListR.php');
					
?>