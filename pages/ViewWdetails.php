<?php
session_start();


$con=mysqli_connect("localhost","geethu","geethu@21","temple");
 
$wid=$_GET["wid"];
$sql="select * from W_booking where wid=$wid";
$res=mysqli_query($con,$sql);
$col=mysqli_fetch_assoc($res);
$cid=$col['cid'];
$sq="select * from W_check where cid=$cid";
$re=mysqli_query($con,$sq);
$c=mysqli_fetch_assoc($re);


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Temple Management Syatem</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
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
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
   <a href="starter.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>TMS</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><small>Temple Management System</small></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

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
              <!-- User image -->
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
              <!-- Menu Body -->
             
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
      <!-- Sidebar user panel -->
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
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
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
          </ul>
        </li>
       
		<li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Wedding</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="WeddingList.php">View Booked Wedding</a></li>
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
        <li class="fa fa-dashboard">Wedding</li>
		<li class="active">View Booked Wedding</li>
      </ol>
    </section>
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
		
		<div class="row">
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-header">
              <h2 align="center"> Wedding Details</h3>
            </div>
			    <div class="tab-content">
              <div class="tab-pane active">
			  <form action="WeddingList.php" method="post" class="form-horizontal">
				<div class="box-body">
						<div class="form-group">
							<label class="col-sm-2 control-label">Temple</label>
						<div class="col-sm-3">		
							 <input type='text' name='txtname' class='form-control' readonly='readonly'value="<?php echo $c['temple']; ?>">
						</div>
							 <label class="col-sm-2 control-label">Wedding Date</label>
						<div class="col-sm-3">		
							 <input type='text' name='date' class='form-control' readonly='readonly'value="<?php echo $c['wdate']; ?>">
                        </div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-2 control-label">Time</label>
						<div class="col-sm-3">		
							<input type='text' name='time' class='form-control' readonly='readonly'value="<?php echo $c['time']; ?>">
                        </div>
							 <label class="col-sm-2 control-label">Booking Date</label>
						<div class="col-sm-3">		
							 <input type='text' name='date' class='form-control' readonly='readonly'value="<?php echo $c['curdate']; ?>">
                        </div>
						</div>
			
                         <legend><strong>Groom Details</strong> 
						 <div class="col-sm-6">
						 <strong>Bride Details</strong></div></legend>
						 <div class="form-group">
								<label class="col-sm-2 control-label">Bride Name</label>
						<div class="col-sm-3">
						<input type="text" name="txtbname" class="form-control" readonly='readonly' value="<?php echo $col['bname']; ?>">	
						</div>
								<label class="col-sm-2 control-label">Groom Name</label>
						<div class="col-sm-3">
						<input type="text" name="txtgname" class="form-control" readonly='readonly' value="<?php echo $col['gname']; ?>">
						</div>
						</div>
						<div class="form-group">
								<label class="col-sm-2 control-label">Age</label>
						<div class="col-sm-3">
						<input type="text" name="txtbage" class="form-control" readonly='readonly' value="<?php echo $col['bage']; ?>">
						</div>
								<label class="col-sm-2 control-label">Age</label>
						<div class="col-sm-3">
						<input type="text" name="txtgage" class="form-control" readonly='readonly' value="<?php echo $col['gage']; ?>">
						</div>
						</div>
						<div class="form-group">
								<label class="col-sm-2 control-label">Address</label>
						<div class="col-sm-3">
						<textarea class="form-control" name="txtbadr" rows="4" readonly='readonly'><?php echo $col['badr']; ?></textarea>
						</div>
								<label class="col-sm-2 control-label">Address</label>
						<div class="col-sm-3">
						<textarea class="form-control" name="txtgadr" rows="4" readonly='readonly'><?php echo $col['gadr']; ?></textarea>
						</div>
						</div>
						<div class="form-group">
								<label class="col-sm-2 control-label">Mobile</label>
						<div class="col-sm-3">
						<input type="text" name="txtbno" class="form-control" readonly='readonly' value="<?php echo $col['bmob']; ?>">
						</div>
								<label class="col-sm-2 control-label">Mobile</label>
						<div class="col-sm-3">
						<input type="text" name="txtgno" class="form-control" readonly='readonly' value="<?php echo $col['gmob']; ?>">
						</div>
						</div>
						<div class="form-group">
								<label class="col-sm-2 control-label">Email</label>
						<div class="col-sm-3">
						<input type="text" name="txtbemail" class="form-control" readonly='readonly' value="<?php echo $col['bemail']; ?>">
						</div>
								<label class="col-sm-2 control-label">Email</label>
						<div class="col-sm-3">
						<input type="text" name="txtgemail" class="form-control" readonly='readonly' value="<?php echo $col['gemail']; ?>">
						</div>
						</div>
						<div class="form-group">
								<label class="col-sm-2 control-label">Father's Name</label>
						<div class="col-sm-3">
						<input type="text" name="txtbfname" class="form-control" readonly='readonly' value="<?php echo $col['bfname']; ?>">
						</div>
								<label class="col-sm-2 control-label">Father's Name</label>
						<div class="col-sm-3">
						<input type="text" name="txtgfname" class="form-control" readonly='readonly' value="<?php echo $col['gfname']; ?>">
						</div>
						</div>
						<div class="form-group">
								<label class="col-sm-2 control-label">Mother's Name</label>
						<div class="col-sm-3">
						<input type="text" name="txtbmname" class="form-control" readonly='readonly' value="<?php echo $col['bmname']; ?>">
						</div>
								<label class="col-sm-2 control-label">Mother's Name</label>
						<div class="col-sm-3">
						<input type="text" name="txtgmname" class="form-control" readonly='readonly' value="<?php echo $col['gmname']; ?>">
						</div>
						</div>
						
						
				
						<div class="form-group">
						<div class=" col-md-6" align="center">
							<input type='submit' class='btn btn-info pull-right' value=" Back ">
								             
						</div>
						</div>
						</div>
			   </form>	
			
			
			</div>
			</div>
		</div>
		</div>
	
    </section>

  </div>
  <!-- /.content-wrapper -->
  <!-- <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer> -->

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
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
