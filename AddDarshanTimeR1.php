	<?php
				session_start();
			
				$con=mysqli_connect("localhost","geethu","geethu@21","temple");
				$templeid=$_SESSION['templeid'];
				$tem="select tname from temple where tid=$templeid";
				$re=mysqli_query($con,$tem);
				$ro=mysqli_fetch_assoc($re);
				$gee=$ro['tname'];
				$fest=$_POST["txtfest"];
				$fdate=$_POST["fdate"];
				$tdate=$_POST["tdate"];
				$time=$_POST["txttime"];
				$event=$_POST["txtevent"];
				
				$cmail="SELECT event,time,temple,festival,fdate FROM time WHERE event = '$event' and temple = '$gee' and time = '$time' and festival = '$fest' and fdate= '$fdate';";
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
				$sql="insert into time(temple,festival,fdate,tdate,time,event)values('$gee','$fest','$fdate','$tdate','$time','$event');";
				if(mysqli_query($con,$sql));
				{
					 echo "<script type=\"text/javascript\">".
					"alert('Time Added successfully');".
					"window.location.href='AddDarshanTimeR.php';". 
					"</script>";
				}
				/* $_SESSION['username'] = $_POST['txtemail'];  */
				/* header('location:AddDarshanTime.php'); */ 
				}
				
		
	?>		