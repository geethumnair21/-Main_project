<?php
$con=mysqli_connect("localhost","geethu","geethu@21","temple");
$x=$_GET['x'];

						$sql="delete from time where tid=$x;";
						mysqli_query($con,$sql);
						header('location:AdminVDTime.php'); 
						
?>