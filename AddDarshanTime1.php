	<?php
				session_start();
			
				$con=mysqli_connect("localhost","geethu","geethu@21","temple");
				$temple=$_POST["temple"];
				$fest=$_POST["txtfest"];
				$fdate=$_POST["fdate"];
				$tdate=$_POST["tdate"];
				$time=$_POST["txttime"];
				$event=$_POST["txtevent"];
				
				$cmail="SELECT event,time,temple,festival,fdate FROM time WHERE event = '$event' and temple = '$temple' and time = '$time' and festival = '$fest' and fdate= '$fdate';";
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
				$sql="insert into time(temple,festival,fdate,tdate,time,event)values('$temple','$fest','$fdate','$tdate','$time','$event');";
				if(mysqli_query($con,$sql));
				{
					 echo "<script type=\"text/javascript\">".
					"alert('Time Added successfully');".
					"window.location.href='AddDarshanTime.php';". 
					"</script>";
				}
				/* $_SESSION['username'] = $_POST['txtemail'];  */
				/* header('location:AddDarshanTime.php'); */ 
				}
				
		
	?>		