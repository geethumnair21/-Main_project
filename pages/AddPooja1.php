	<?php
				session_start();
			
				$con=mysqli_connect("localhost","geethu","geethu@21","temple");
				$temple=$_POST["temple"];
				$deity=$_POST["deity"];
				$pname=$_POST["txtpooja"];
				$amt=$_POST["txtamount"];
				$purpose=$_POST["txtpurpose"];
				
				$cmail="SELECT pname FROM pooja WHERE pname = '$pname' and temple = '$temple' and deity = '$deity' ;";
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
				$sql="insert into pooja(temple,deity,pname,amount,purpose,curdate)values('$temple','$deity','$pname','$amt','$purpose',NOW());";
				mysqli_query($con,$sql);
				echo $sql;
				/* $_SESSION['username'] = $_POST['txtemail'];  */
				header('location:AddPooja.php'); 
				}
				
		
	?>		