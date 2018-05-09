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

				$con=mysqli_connect("localhost","geethu","geethu@21","temple");
	
					$sel="SELECT tmp.tname,dt.dname,p.name,p.pid,p.uid,p.bid,p.star,p.date,pj.pname,pj.amount FROM 
									pooja pj left outer join  temple tmp on pj.temple=tmp.tid 
									left outer join deity dt on pj.deity=dt.did
                                   left outer join p_booking p on pj.pid=p.pid where uid=$uid and p.pstatus='N';";
								
									
								$res=mysqli_query($con,$sel);
								echo $sel;
								if(mysqli_num_rows($res)>0){
									
									while($row=$res->fetch_assoc()){
										$a=$row["amount"];
										
										$bid=$row['bid'];
										$p=$row["pid"];
										
										$don=$row["tname"];
										$sss1="select amount from `account` where aname='$don'; ";
										$re1=mysqli_query($con,$sss1);
										echo $sss1;
										$ro1=mysqli_fetch_assoc($re1);
										$m=$ro1["amount"];
										$sss="UPDATE `account` SET `amount`=$m+$a where aname='$don'; ";
										mysqli_query($con,$sss);
										$sss2="UPDATE `p_booking` SET `pstatus`='P' where bid=$bid; ";
										mysqli_query($con,$sss2);
										echo $sss;
									
									
								  
									} 
									
									}


header('location:paymntpooja.php'); 



	
	





?>