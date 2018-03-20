	<?php
	session_start();
			
				$con=mysqli_connect("localhost","geethu","geethu@21","temple");
				$name=$_POST["txtname"];
				$star=$_POST["star"];
				$date=$_POST["date"];
				$pid=$_SESSION["pid"];
				$uid=$_SESSION["uid"];
				echo $pid;
				echo $uid;
					
				
				
				$sql="insert into p_booking values('$uid','$name','$star','$date','$pid');";
				mysqli_query($con,$sql);
				header('location:DevoteePD.php'); 
	?>		