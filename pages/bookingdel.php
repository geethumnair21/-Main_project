<?php
$con=mysqli_connect("localhost","geethu","geethu@21","temple");
$x=$_GET['x'];

						$sql="delete from p_booking where bid=$x;";
						mysqli_query($con,$sql);
						header('location:DevoteePD.php'); 
						
?>