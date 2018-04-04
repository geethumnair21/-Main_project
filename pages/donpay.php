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

$tot=$_POST["txtamountTot"];
$ss="select * from account";
$eq=mysqli_query($con,$ss);
$req = mysqli_fetch_assoc($eq);
$ac=$req['amount'];
$acc=$ac+$tot;

$sss="UPDATE `account` SET `amount`=$acc";
mysqli_query($con,$sss);



 header('location:paymntdon.php');




?>