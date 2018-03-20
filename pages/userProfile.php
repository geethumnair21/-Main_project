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
          <a href="#" class="navbar-brand"><b>NALAMBALAM</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="userHome.php">Home<span class="sr-only">(current)</span></a></li>
            <li><a href="PoojaBooking.php">Pooja Booking</a></li>
			<li><a href="#">Vitrual Q</a></li>
			<li><a href="#">Wedding Booking</a></li>
			<li><a href="#">Donation</a></li>
			<li><a href="#">Feedback</a></li>
          </ul>
          
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
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
				$sq="select name from registration where email='$id';";
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
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
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
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
       <!--  <h1>
          Top Navigation
          <small>Example 2.0</small>
        </h1> -->
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>User Profile</a></li>
          <!-- <li><a href="#">Layout</a></li>
          <li class="active">Top Navigation</li> -->
        </ol>
      </section>
	    
	  <div class="col-md-9">
		<div class="box box-primary">
			<div class="box-header with-border" align="center">
              <h3 class="box-title">My Profile</h3>
            </div>
			<form action="signin.php" method="post" class="form-horizontal">
				 <div class="box-body">
					<div class="form-group">
                    </div>
					
				<div class="form-group">
                  <label class="col-sm-2 control-label">Name</label>
				  <?php

						$usr=$_SESSION["username"];
						$con=mysqli_connect("localhost","geethu","geethu@21","temple");
						$sq="select name,gender,dob,address,email,mob from registration where email='$usr';";
						$res=mysqli_query($con,$sq);
						$col=mysqli_fetch_assoc($res);
				   ?>
				   
                   <div class='col-sm-9'>
				   <?php
                   echo "<input type='text' name='txtname' class='form-control' readonly='readonly' placeholder='".$col['name']."'>";
				   ?>
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Gender</label>
				  <div class="col-sm-9">
				   <?php
                   echo "<input type='text' name='txtname' class='form-control' readonly='readonly' placeholder='".$col['gender']."'>";
				   ?>
				  </div>
				</div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Date of Birth</label>
				  <div class="col-sm-9">
				      <?php
                   echo "<input type='text' name='txtname' class='form-control' readonly='readonly' placeholder='".$col['dob']."'>";
					   ?>
					
				  </div>
				 </div>
				 <div class="form-group">
                  <label class="col-sm-2 control-label">Address</label>
				  <div class="col-sm-9">
                    <?php
                   echo "<input type='text' name='txtname' class='form-control' readonly='readonly' placeholder='".$col['address']."'>";
				   ?>
                  </div>
				 </div>
				 <div class="form-group">
                  <label class="col-sm-2 control-label">Email</label>
				  <div class="col-sm-9">
                    <?php
                   echo "<input type='text' name='txtname' class='form-control' readonly='readonly' placeholder='".$col['email']."'>";
				   ?>
                  </div>
				 </div>
				 <div class="form-group">
                  <label class="col-sm-2 control-label">Mobile</label>
				  <div class="col-sm-9">
                   <?php
                   echo "<input type='text' name='txtname' class='form-control' readonly='readonly' placeholder='".$col['mob']."'>";
				   ?>
                  </div>
				 </div>
				 
				
				 <!-- <div class="box-footer">
                
                <button type="submit" name="btnsubmit" class="btn btn-info pull-right">Submit</button>
              </div> 
					
				 </div>-->
			</form>
		</div>
	 </div>
	  
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
 
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>