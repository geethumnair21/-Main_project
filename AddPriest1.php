<?php
				session_start();
			
				$con=mysqli_connect("localhost","geethu","geethu@21","temple");
				$temple=$_POST["temp"];
				$priest=$_POST["txtname"];
				$padr=$_POST["txtadr"];
				$email=$_POST["txtemail"];
				$mob=$_POST["txtmob"];
				$doj=$_POST["date"];
				$salary=$_POST["txtsal"];
				
				
				$sql="insert into priest(temple,pname,adrs,email,mob,doj,salary,curdate)values('$temple','$priest','$padr','$email',$mob,'$doj',$salary,NOW());";
				if(mysqli_query($con,$sql));
				{
					 echo "<script type=\"text/javascript\">".
					"alert('Added successfully');".
					"window.location.href='AddPriest.php';".
					"</script>";
				}
				/* $_SESSION['username'] = $_POST['txtemail'];  */
				/* header('location:AddPooja.php');  */
				
				
		
	?>		