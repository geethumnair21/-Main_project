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
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="" class="navbar-brand"><b>NALAMBALAM</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
             <li><a href="userHome.php">Home</a></li>
            <li class="active"><a href="PoojaBooking.php">Pooja Booking<span class="sr-only">(current)</span></a></li>
			<li><a href="#">Vitrual Q</a></li>
			<li><a href="weddingbooking.php">Wedding Booking</a></li>
			<li><a href="Donation.php">Donation</a></li>
			<li><a href="Feedback.php">Feedback</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
			
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                 <?php
				$id=$_SESSION["username"];
				$con=mysqli_connect("localhost","geethu","geethu@21","temple");
				$sq="select gender from registration where email='$id';";
				$res=mysqli_query($con,$sq);
				$row=mysqli_fetch_assoc($res);
				if($row['gender']=='Female')
				{
					echo "<img src='dist/img/FEMALE.jpg' class='user-image' alt='User Image'>";
				}
				else
				{
					echo "<img src='dist/img/MALE.jpg' class='user-image' alt='User Image'>";
				}	
			   
				$id=$_SESSION["username"];
				$con=mysqli_connect("localhost","geethu","geethu@21","temple");
				$sq="select * from registration where email='$id';";
				$res=mysqli_query($con,$sq);
				$row=mysqli_fetch_assoc($res);
				echo "<span class='hidden-xs'>".$row['name']."</span>";
			    ?>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <?php
				$id=$_SESSION["username"];
				$con=mysqli_connect("localhost","geethu","geethu@21","temple");
				$sq="select gender from registration where email='$id';";
				$res=mysqli_query($con,$sq);
				$row=mysqli_fetch_assoc($res);
				if($row['gender']=='Female')
				{
					echo "<img src='dist/img/FEMALE.jpg' class='img-circle' alt='User Image'>";
				}
				else
				{
					echo "<img src='dist/img/MALE.jpg' class='img-circle' alt='User Image'>";
				}
				
			    ?>
				  <p>
                  <?php
				$id=$_SESSION["username"];
				$con=mysqli_connect("localhost","geethu","geethu@21","temple");
				$sq="select name from registration where email='$id';";
				$res=mysqli_query($con,$sq);
				$row=mysqli_fetch_assoc($res);
				echo $row['name'];
			    ?>
                  
                </p>
                </li>
              
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="userProfile.php" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>  <!-- Left side column. contains the logo and sidebar -->
  

  <!-- Content Wrapper. Contains page content -->
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
            <small class="pull-right">Date: 2/10/2014</small>
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
				$cid="select max(pyid) from paymentpooja";
				$ras=mysqli_query($con,$cid);
				$ro=mysqli_fetch_array($ras);
				$id=$ro[0];
				echo $id;?><br>
          <br>
          <b>Booking ID:</b> <?php 
				$con=mysqli_connect("localhost","geethu","geethu@21","temple");
				$cid="select max(bid) from p_booking";
				$ras=mysqli_query($con,$cid);
				$ro=mysqli_fetch_array($ras);
				$id=$ro[0];
				echo $id;?><br>
          <b>Payment Due:</b> <?php 
				$con=mysqli_connect("localhost","geethu","geethu@21","temple");
				$cid="select max(curdate) from paymentpooja";
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
              <th>Temple</th>
              <th>Deity</th>
              <th>Name</th>
              <th>Star(Nakshatra)</th>
			  <th>Pooja</th>
              <th>Amount</th>
            </tr>
            </thead>
            <tbody>
           <?php
				
								$uid=$_SESSION["uid"];
								
								$con=mysqli_connect("localhost","geethu","geethu@21","temple");
								
								$sel="SELECT tmp.tname,dt.dname,p.name,p.pid,p.uid,p.bid,p.star,p.date,pj.pname,pj.amount FROM 
									pooja pj left outer join  temple tmp on pj.temple=tmp.tid 
									left outer join deity dt on pj.deity=dt.did
                                   left outer join p_booking p on pj.pid=p.pid where uid=$uid;";
								
									
								$res=mysqli_query($con,$sel);
								
								if(mysqli_num_rows($res)>0){
										$i=0;
									while($row=$res->fetch_assoc()){
										$a=$row["amount"];
										$i=$i+$a;
			
									
									echo "<tr><td>" .$row["tname"]. "</td><td>". $row["dname"]."</td><td>". $row["name"]."</td><td>". $row["star"]."</td><td>". $row["pname"]."</td><td>". $row["amount"]."</td></td>
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
				<th>
				<td>Sd/-</td>
				<th>
			  <tr>
			  </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
	  <form action="poojarecept_print.php" method="POST">
      <div class="row no-print">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-print"></i>  Print
          </button>
        </div>
      </div>
	  </form>
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

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
