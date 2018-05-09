<?php
 session_start();
	$con=mysqli_connect("localhost","geethu","geethu@21","temple");
	
	$itemValues=0;
	
	$query="INSERT INTO `paymentdon`(`pyid`, `did`, `uid`, `price`, `total`, `curdate`) VALUES ";
	
$s="SELECT MAX(pyid) AS maxi FROM paymentdon";
$r=mysqli_query($con,$s);
$re = mysqli_fetch_assoc($r);
$inv=$re['maxi'];
$j=1;
$payid=$inv+$j;

$tot=$_POST["txtamountTot"];
/* echo $tot; */
$uid=$_SESSION["uid"];

$itemCount = count($_POST["did"]);

for($i=0;$i<$itemCount;$i++) 
{	
$itemValues++;
$id=$_POST["did"][$i];
$price=$_POST["amount"][$i];

$qvalue="('$payid','$id','$uid','$price','$tot',NOW());";
$sql = $query.$qvalue;

if($itemValues!=0) 
{
 mysqli_query($con,$sql);
	$qvalue=""; 
}
}


								$uid=$_SESSION["uid"];
								$sel="SELECT did,uid,name,temple,amount,purpose from donation where uid=$uid and status='N';";
								$res=mysqli_query($con,$sel);
								echo $sel;
								if(mysqli_num_rows($res)>0){
								
									while($row=$res->fetch_assoc()){
										$a=$row["amount"];
									 
										$did=$row['did'];
										
										$don=$row["temple"];
										$sss1="select amount from `account` where aname='$don'; ";
										$re1=mysqli_query($con,$sss1);
										echo $sss1;
										$ro1=mysqli_fetch_assoc($re1);
										$m=$ro1["amount"];
										$sss="UPDATE `account` SET `amount`=$m+$a where aname='$don'; ";
										mysqli_query($con,$sss);
										$sss2="UPDATE `donation` SET `status`='P' where did=$did; ";
										mysqli_query($con,$sss2);
										echo $sss;
										} 
									
									}
									


 header('location:paymntdon.php');




?>