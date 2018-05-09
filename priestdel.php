<?php
$con=mysqli_connect("localhost","geethu","geethu@21","temple");
$x=$_GET['x'];

						$sql="delete from priest where prid=$x;";
						mysqli_query($con,$sql);
						
					    header('location:AdminPriestList.php');
						
?>