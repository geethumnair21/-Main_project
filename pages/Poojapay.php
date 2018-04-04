<?php
    session_start();
	$con=mysqli_connect("localhost","geethu","geethu@21","temple");
	
	$itemValues=0;
	
	$query="INSERT INTO `paymentpooja`(`pyid`, `pid`, `uid`, `price`, `total`, `curdate`) VALUES ";
	
$s="SELECT MAX(pyid) AS maxi FROM paymentpooja";
$r=mysqli_query($con,$s);
$re = mysqli_fetch_assoc($r);
$inv=$re['maxi'];
$j=1;
$payid=$inv+$j;
/* echo $payid;
echo "<br/>"; */

$tot=$_POST["txtamount"];


/* echo $tot;
echo "<br/>"; */
$uid=$_SESSION["uid"];
/* echo $uid;
echo "<br/>"; */

$itemCount = count($_POST["bid"]);
	
	for($i=0;$i<$itemCount;$i++) 
{	
$itemValues++;
$id=$_POST["bid"][$i];
$price=$_POST["amount"][$i];
$pid=$_POST["pid"][$i];
/* echo $pid;
echo "<br/>";
echo $price;
echo "<br/>";
echo $id;
echo "<br/>"; */

$qvalue="('$payid','$pid','$uid','$price','$tot',NOW());";
$sql = $query.$qvalue;

if($itemValues!=0) 
	{
	/* echo $sql; */
    mysqli_query($con,$sql);
	$qvalue=""; 
	/* echo "<br/>"; */
	
	
	}

}
$tot=$_POST["txtamount"];
$ss="select * from account";
$eq=mysqli_query($con,$ss);
$req = mysqli_fetch_assoc($eq);
$ac=$req['amount'];
$acc=$ac+$tot;

/* echo "<br/>";
echo "<br/>";

echo "<br/>";
echo $ac;
echo "<br/>";
echo $acc; */


$sss="UPDATE `account` SET `amount`=$acc";
mysqli_query($con,$sss);



header('location:paymntpooja.php'); 



	
	





?>