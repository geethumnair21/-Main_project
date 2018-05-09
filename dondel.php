<?php
$con=mysqli_connect("localhost","geethu","geethu@21","temple");
$x=$_GET['x'];

						$sql="delete from donation where did=$x;";
						mysqli_query($con,$sql);
						
					    header('location:Donation.php');
						
?>