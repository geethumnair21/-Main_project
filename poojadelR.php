<?php
$con=mysqli_connect("localhost","geethu","geethu@21","temple");
$x=$_GET['x'];

						$sql="delete from pooja where pid=$x;";
						mysqli_query($con,$sql);
						header('location:AdminPoojaListR.php'); 
						
?>