<?php
session_start();	
        
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Temple Management System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
       <!--  <h1>
          Top Navigation
          <small>Example 2.0</small>
        </h1> -->
        <ol class="breadcrumb">
          <li><a href="#"></i></a></li>
		
          <!-- <li><a href="#">Layout</a></li>
          <li class="active">Top Navigation</li> -->
        </ol>
      </section>

    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12" align="center">
          <h2 class="page-header">
           <b> NALAMBALAM </b>
            <small class="pull-right"></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
  
          <address>
            <strong>NALAMBALAM</strong><br>
            Phone:+91 9207509534<br>
            Email: nalambalam@gmail.com
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
         
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Invoice : </b><?php 
				$con=mysqli_connect("localhost","geethu","geethu@21","temple");
				$cid="select max(pyid) from paymentdon";
				$ras=mysqli_query($con,$cid);
				$ro=mysqli_fetch_array($ras);
				$id=$ro[0];
				echo $id;?><br>
          <br>
          <b>Donation ID:</b> <?php 
				$con=mysqli_connect("localhost","geethu","geethu@21","temple");
				$cid="select max(did) from paymentdon";
				$ras=mysqli_query($con,$cid);
				$ro=mysqli_fetch_array($ras);
				$id=$ro[0];
				echo $id;?><br>
          <b>Payment Due:</b> <?php 
				$con=mysqli_connect("localhost","geethu","geethu@21","temple");
				$cid="select max(curdate) from paymentdon";
				$ras=mysqli_query($con,$cid);
				$ro=mysqli_fetch_array($ras);
				$id=$ro[0];
				echo $id;?><br>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Name</th>
              <th>Temple</th>
              <th>Amount</th>
            </tr>
            </thead>
            <tbody>
          <?php
				
								$uid=$_SESSION["uid"];
								
								$con=mysqli_connect("localhost","geethu","geethu@21","temple");
								
								$sel="SELECT did,uid,name,temple,amount,purpose from donation where uid=$uid;";
								
									
								$res=mysqli_query($con,$sel);
								
								if(mysqli_num_rows($res)>0){
								 $i=0; 
									while($row=$res->fetch_assoc()){
										$a=$row["amount"];
										$i=$i+$a; 
										
									
									echo "<tr><td>" .$row["name"]. "</td><td>". $row["temple"]."</td><td>". $row["amount"]."</td></td>
									</tr>";
								  
									} 
									
									}
									
							
								
							?>    
          
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
          
        </div>
        <!-- /.col -->
        <div class="col-xs-6">

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Total Amount:</th>
                <td>₹ <?php echo $i;?></td>
              </tr>
			   <tr>
				<th>
				<td><b>Sd/-</b></td>
				<th>
			  </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
</body>
</html>
