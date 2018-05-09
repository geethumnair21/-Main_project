	<?php
				session_start();
			
				$con=mysqli_connect("localhost","geethu","geethu@21","temple");
				$templeid=$_SESSION['templeid'];
				$tem="select tname from temple where tid=$templeid";
				$re=mysqli_query($con,$tem);
				$ro=mysqli_fetch_assoc($re);
				$gee=$ro['tname'];
				$deity=$_POST["deity"];
				$pname=$_POST["txtpooja"];
				$amt=$_POST["txtamount"];
				$purpose=$_POST["txtpurpose"];
				
				$cmail="SELECT pname FROM pooja WHERE pname = '$pname' and temple = '$templeid' and deity = '$deity' ;";
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
				$sql="insert into pooja(temple,deity,pname,amount,purpose,curdate)values('$templeid','$deity','$pname','$amt','$purpose',NOW());";
				if(mysqli_query($con,$sql));
				{
					 echo "<script type=\"text/javascript\">".
					"alert('Pooja Added successfully');".
					"window.location.href='AddPoojaR.php';".
					"</script>";
				}
				/* $_SESSION['username'] = $_POST['txtemail'];  */
				/* header('location:AddPooja.php');  */
				}
				
		
	?>		