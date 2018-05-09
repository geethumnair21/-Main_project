<?php
session_start();
			$uid=$_SESSION["uid"];
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
	?>