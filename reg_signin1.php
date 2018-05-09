	<?php
				session_start();
			
				$con=mysqli_connect("localhost","geethu","geethu@21","temple");
				$name=$_POST["txtname"];
				$g=$_POST["gender"];
				$dob=$_POST["birth_day"] . '/' . $_POST["birth_month"] . '/' . $_POST["birth_year"];
				$adr=$_POST["txtaddress"];
				$email=$_POST["txtemail"];
				$mob=$_POST["txtmob"];
				$pass=$_POST["pass"];
				$cpass=$_POST["cpass"];
				if($pass!=$cpass)
				{
					echo "<script>var confirm = confirm(\"passwords not matching!\");
					if(confirm){ 
					document.getElementsByName('pass').value='';
					document.getElementsByName('cpass').value='';
					window.history.back();
					
					}
					else{
					document.getElementsByName('pass').value='';
					document.getElementsByName('cpass').value='';
					window.history.back();
					
					}
					</script>";
					
					
				}
				$cmail="SELECT email FROM registration WHERE email = '$email';";
				$res=mysqli_query($con,$cmail);
				if(mysqli_num_rows($res)>0)
				{
					echo "<script>var confirm = confirm(\"email already exists!\");
					if(confirm){ 
					window.history.back();
					}
						else{
					window.history.back();
					}
					</script>";
					
				}
				else{
				$sql="insert into registration(name,gender,dob,address,email,mob,pass,curdate)values('$name','$g','$dob','$adr',$email,'$mob','$pass',NOW());";
				mysqli_query($con,$sql);
				$_SESSION['username'] = $_POST['txtemail'];
				echo "hii"
				/* header('location:userHome.html'); */
				}
				
		
	?>		