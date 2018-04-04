<?php
	session_start();
			
				$con=mysqli_connect("localhost","geethu","geethu@21","temple");
				$bname=$_POST["txtbname"];
				$gname=$_POST["txtgname"];
				$bage=$_POST["txtbage"];
				$gage=$_POST["txtgage"];
				$badr=$_POST["txtbadr"];
				$gadr=$_POST["txtgadr"];
				$bmob=$_POST["txtbno"];
				$gmob=$_POST["txtgno"];
				$bemail=$_POST["txtbemail"];
				$gemail=$_POST["txtgemail"];
				$bfname=$_POST["txtbfname"];
				$gfname=$_POST["txtgfname"];
				$bmname=$_POST["txtbmname"];
				$gmname=$_POST["txtgmname"];
				
				$cid=$_SESSION["cid"];
				$uid=$_SESSION["uid"];
					
				
				
				$sql="insert into W_booking(cid,uid,bname,bage,badr,bmob,bemail,bfname,bmname,gname,gage,gadr,gmob,gemail,gfname,gmname)values($cid,$uid,'$bname',$bage,'$badr',$bmob,'$bemail','$bfname','$bmname','$gname',$gage,'$gadr',$gmob,'$gemail','$gfname','$gmname');";
				mysqli_query($con,$sql);
				/*  echo $sql;  */
			    header('location:Weddingdetails.php');  
	?>		