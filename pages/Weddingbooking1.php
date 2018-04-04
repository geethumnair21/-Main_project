<?php
			session_start();
				$con=mysqli_connect("localhost","geethu","geethu@21","temple");
				$temple=$_POST["temple"];
				$date=$_POST["date"];
				$time=$_POST["time"];
				
				$cid="select max(cid) from W_check";
				$ras=mysqli_query($con,$cid);
				$ro=mysqli_fetch_array($ras);
				$id=$ro[0];
				 echo $id;
				$_SESSION["cid"]=$id;
				
				$cmail="SELECT temple,wdate,time FROM w_check WHERE temple = '$temple' and wdate = '$date' and time = '$time' ;";
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
				$sql="insert into W_check(temple,wdate,time,curdate)values('$temple','$date','$time',NOW());";
				mysqli_query($con,$sql);
				/* echo $sql; */
				/* $_SESSION['username'] = $_POST['txtemail'];  */
				header('location:Weddingdetails.php'); 
				}
				
		
	?>