	<?php
				session_start();
			
				$con=mysqli_connect("localhost","geethu","geethu@21","temple");
				$temple=$_POST["temple"];
				$fest=$_POST["txtfest"];
				$date=$_POST["date"];
				$time=$_POST["txttime"];
				$event=$_POST["txtevent"];
				
				$cmail="SELECT event,time,temple,festival,date FROM time WHERE event = '$event' and temple = '$temple' and time = '$time' and festival = '$fest and date= '$date';";
				$res=mysqli_query($con,$cmail);
				if(mysqli_num_rows($res)>0)
				{
					echo "<script>var confirm = confirm(\"already exists!\");
					if(confirm){ 
					window.history.back();
					}
						else{
					window.history.back();
					}
					</script>";
					
				}
				else{
				$sql="insert into time(temple,festival,date,time,event)values('$temple','$fest','$date','$time','$event');";
				mysqli_query($con,$sql);
				/* $_SESSION['username'] = $_POST['txtemail'];  */
				header('location:AddDarshanTime.php'); 
				}
				
		
	?>		