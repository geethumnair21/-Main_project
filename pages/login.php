<?php
session_start();
$con=mysqli_connect("localhost","geethu","geethu@21","temple");
$user=$_POST["txtusername"];
$pass=$_POST["txtpassword"];
$sq="select email,pass,usertype from registration where email='$user' and pass='$pass';";
$res=mysqli_query($con,$sq);

if(mysqli_num_rows($res)>0){
	$row=mysqli_fetch_assoc($res);
	$type=$row["usertype"];
	if($row["usertype"]==1){
		$_SESSION['username'] = $_POST['txtusername'];
		header('location:userHome.php');
	}
	else{
		$_SESSION['username'] = $_POST['txtusername'];
		header('location:AdminHome.php');
		}
	}
else{	
		 echo "<script>var confirm = confirm(\"Invalid user!\");
          if(confirm){ 
              window.history.back();
			  document.getElementsByName('txtpassword').value='';
           }
		   else{
			   window.history.back();
			   document.getElementsByName('txtpassword').value='';
		   }
          </script>";
}
?>
