<?php
	session_start();
			
				$con=mysqli_connect("localhost","geethu","geethu@21","temple");
				$name=$_POST["txtname"];
				$temp=$_POST["temp"];
				$amount=$_POST["txtamount"];
				$pur=$_POST["txtpurpose"];
				$uid=$_SESSION["uid"];
				
					
			
				$sql="insert into donation(`uid`, `name`, `temple`, `amount`, `purpose`,`curdate`) values($uid,'$name','$temp',$amount,'$pur',NOW());";
				mysqli_query($con,$sql);
				 /* echo $sql;  */
			    header('location:Donation.php'); 
	?>		