<?php
session_start();
$con=mysqli_connect("localhost","geethu","geethu@21","temple");
$x=$_GET['x'];
$_SESSION['tid'] =$x;
$sql="select * from time where tid=$x";
$res=mysqli_query($con,$sql);
$col=mysqli_fetch_assoc($res);

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

      <!-- search form (Optional) -->
     <!--  <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form> -->
      <!-- /.search form -->

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
            <li class="active"><a href="AddDarshanTime.php">Add</a></li>
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
        <li class="fa fa-dashboard">Darshan Timing</li>
		<li class="active">Add</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" background-color="red">

      <div class="row">
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
          <div class="small-box bg-yellow">
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
		
		<div class="col-xs-12">
		<div class="box">
		  <div class="box-header">
				<div class="nav-tabs-custom">
					<h2 align="center">Edit Darshan Time</h2>
				</div>
					
			<div class="tab-content">
              <div class="tab-pane active">
               <form action="EditTime1.php" method="post" class="form-horizontal">
				  <div class="form-group">
                  <label class="col-sm-3 control-label">Temple</label>
					 <div class="col-sm-6">
                          <select name="temple" id="temp" class="form-control">	
							<option value="<?php echo $col['temple']; ?>" selected><?php echo $col['temple']; ?></option>
							 <?php		
					
						$con=mysqli_connect("localhost","geethu","geethu@21","temple");
						
						$sel="select tname from temple";
						$det=mysqli_query($con,$sel);
						if($det->num_rows >0){
						$areaOptions = "";
							while($row=$det->fetch_assoc()){			
							
							$areaOptions .= '<option value="' . $row['tname'] . '">' . $row['tname'] . '</option>';
							
							}
							echo $areaOptions;
							}	
					?>
							</select>
					</div>
                  </div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Festival</label>
                  <div class="col-sm-6">
             <input type="text" name="txtfest" class="form-control" placeholder="Enter ..." required value="<?php echo $col['festival']; ?>">
                  </div>
                </div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Date</label>
                  <div class="col-sm-2">
                   <input type="date" name="date" class="form-control" required value="<?php echo $col['date']; ?>">
                  </div>
					<label class="col-sm-1 control-label">Time</label>
				  <div class="col-sm-3">
               <input type="text" name="txttime" class="form-control" required placeholder="Enter ..." value="<?php echo $col['time']; ?>">
                  </div>
                </div>
				 <div class="form-group">
					<label class="col-sm-3 control-label">Event</label>
						<div class="col-sm-6">
              <input type="text" name="txtevent" class="form-control" required placeholder="Enter ..." value="<?php echo $col['event']; ?>">
						</div>
					</div>
				<div class="col-md-12">
				<div class="form-group">
					<button type="submit" class="btn btn-info">Reset</button>
					
					<button type="submit" class="btn btn-info pull-right">Edit</button>
				</div>
				</div>
				
				  </div>
				   </div>
				</form>
				</div>
		</div>
                  </div>
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