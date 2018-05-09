<?php		session_start();
						$usr=$_SESSION["username"];
						$con=mysqli_connect("localhost","geethu","geethu@21","temple");
						$tem=$_POST["temple"];	
						$fed=$_POST["txtmsg"];
						$sql= "insert into feedback(temple,email,feedback,curdate) values('$tem','$usr','$fed',NOW());";
						mysqli_query($con,$sql);
						header('location:Feedback.php');
						?>