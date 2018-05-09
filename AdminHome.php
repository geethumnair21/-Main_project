<?php
session_start();
$con=mysqli_connect("localhost","geethu","geethu@21","temple");
$templeid=$_SESSION['templeid'];
$tem="select tname from temple where tid=$templeid";
$re=mysqli_query($con,$tem);
$ro=mysqli_fetch_assoc($re);
?>

<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Temple Management System</title>
  <link rel="shortcut icon" href="dist/img/schools.ico" type="image/png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">



  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FF7593B5-AB9D-404E-AC20-195932D4F7C8/main.js" charset="UTF-8"></script></head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="starter.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>TMS</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><small>Temple Management System</small></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
	 
	<!-- <h2 class="nav navbar-nav" ><span class="btn bg-navy1 btn-flat margins">Academic Year:2017-2018</span></h2> -->
	  
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
	 
        <ul class="nav navbar-nav">
       
          <!-- User Account Menu -->
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
				echo $ro['tname'];
			    ?>
                  
                </p>
              </li>
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
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
        </div>
        <div class="pull-left info">
          <p><?php
				$id=$_SESSION["username"];
				$con=mysqli_connect("localhost","geethu","geethu@21","temple");
				$sq="select name from registration where email='$id';";
				$res=mysqli_query($con,$sq);
				$row=mysqli_fetch_assoc($res);
				echo $row['name'];
			    ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"></li>
        <!-- Optionally, you can add icons to the links -->
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Darshan Timing</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="AddDarshanTime.php">Add</a></li>
            <li><a href="AdminVDTime.php">View</a></li>
			<!-- <li><a href="#">Class Details</a></li> -->
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Pooja Details</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="AddPooja.php">Add Pooja</a></li>
            <li><a href="AdminPoojaList.php">View Pooja List</a></li>
			<li><a href="PendingPooja.php">Pending Poojas</a></li>
			<li><a href="completedPooja.php">Completed Poojas</a></li>
			<li><a href="AdminPoojaPay.php">Payment List</a></li>
          </ul>
        </li>
		 
		<li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Wedding</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="WeddingList.php">View Booked Wedding</a></li>
            <!-- <li><a href="#">Link in level 2</a></li> -->
          </ul>
        </li>
		<li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Donation</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
           <li><a href="ViewDonation.php">View Donation List</a></li>
		   <li><a href="AdminDonPay.php">Payment List</a></li>
            <!-- <li><a href="#">Link in level 2</a></li> -->
          </ul>
        </li>
		<li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Feedback</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="ViewFeedback.php">View User Feedback</a></li>
            <!-- <li><a href="#">Link in level 2</a></li> -->
          </ul>
        </li>
		<li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>User Profile</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="ViewUser.php">View User Profile</a></li>
            <!-- <li><a href="#">Link in level 2</a></li> -->
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Admin</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" background-color="red">

      <div class="row">
	  <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
             <h1><?php
				$con=mysqli_connect("localhost","geethu","geethu@21","temple");
				$sq="select amount from account;";
				$res=mysqli_query($con,$sq);
				$pp=mysqli_fetch_array($res);
				echo "<span class='info-box-number'>".$pp[0]."<small></small></span>";
			   ?></h1>

              <p>Account</p>
            </div>
            <div class="icon">
              <i class="fa fa-fw fa-rupee"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
             <h1><?php
				$con=mysqli_connect("localhost","geethu","geethu@21","temple");
				$sq="select did from donation;";
				$res=mysqli_query($con,$sq);
				$rowCount = mysqli_num_rows($res);
				echo "<span class='info-box-number'>".$rowCount."<small></small></span>";
			   ?></h1>

              <p>Donation</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h1><?php
				$con=mysqli_connect("localhost","geethu","geethu@21","temple");
				$sq="select pname from pooja;";
				$res=mysqli_query($con,$sq);
				$rowCount = mysqli_num_rows($res);
				echo "<span class='info-box-number'>".$rowCount."<small></small></span>";
			   ?></h1>

              <p>Poojas/Vazhipad</p>
            </div>
            <div class="icon">
              <i class="fa fa-fw fa-book"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <h1><?php
				$con=mysqli_connect("localhost","geethu","geethu@21","temple");
				$sq="select name from registration where usertype=1;";
				$res=mysqli_query($con,$sq);
				$rowCount = mysqli_num_rows($res);
				echo "<span class='info-box-number'>".$rowCount."<small></small></span>";
			   ?></h1>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="fa fa-fw fa-user"></i>
            </div>
            
          </div>
        </div>
      
      </div>

    </section>
    <!-- /.content -->
  </div>
  

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>