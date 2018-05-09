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
            <li><a href="Home.html">Home</a></li>
            <li><a href="Aboutus.html">About</a></li>
			<li class="active"><a href="userVdarshan.php">Darshan Time<span class="sr-only">(current)</span></a></li>
			<li><a href="userVPooja.php">Pooja Details</a></li>
			<li><a href="Gallery.html">Gallery</a></li>
			<li><a href="reg_signin.html">Signin/Register</a></li>
            
          </ul>
        </div>
       
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
	  <div>
	  </div>
        <!-- <h1>
          Top Navigation
          <small>Example 2.0</small>
        </h1>  -->
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>Darshan Time</a></li>
          <!-- <li><a href="#">Layout</a></li>
          <li class="active">Top Navigation</li>  -->
        </ol>
      </section>
	  
	  <div class="col-xs-12">
		 <div class="box">
		 <div class="box-header">
              <div class="nav-tabs-custom">
					<h2 align="center">View Darshan Time</h2>
			  </div>
         
		 <div class="tab-content">
              <div class="tab-pane active">
				 <form action="userVdarshan1.php" method="post" class="form-horizontal">
                        <div class="form-group">
							<label class="col-sm-3 control-label">Temple</label>
						<div class="col-sm-6">		
                          <select name="temple" id="temp" class="form-control">	
						  
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
                          <select name="fest" id="festival" class="form-control">	
						  <option value="select festival">Select Festival</option>
					<?php		
					
						$con=mysqli_connect("localhost","geethu","geethu@21","temple");
						
						$sel="select distinct festival from time";
						$det=mysqli_query($con,$sel);
						if($det->num_rows >0){
						$areaOptions = "";
							while($row=$det->fetch_assoc()){			
							
							$areaOptions .= '<option value="' . $row['festival'] . '">' . $row['festival'] . '</option>';
							
							}
							echo $areaOptions;
							}	
					?>	
						   </select>
                        </div>
						</div>
			
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<button type="submit" class="btn btn-info pull-right" Onclick=" return validate()">View</button>
				</div>
            </div>
			</form>
			 <form role="form" action="" method="POST" enctype="multipart/form-data">
				<div class="box-body">
						<div class="form-group">
						  <table id="example2" class="table table-bordered table-hover">
						    
							  <?php

							$con=mysqli_connect("localhost","geethu","geethu@21","temple");
							$tem=$_POST["temple"];
							$fest=$_POST["fest"];
							$sel="SELECT distinct tid,time,event,fdate,tdate FROM `time` WHERE `temple` = '$tem' and `festival` = '$fest'; ";
							$res=mysqli_query($con,$sel);
							$row=$res->fetch_assoc();
							$fdate=$row['fdate'];
							$tdate=$row['tdate'];
							
							echo'<thead>
							<tr><th>Date:&nbsp;&nbsp;&nbsp;'.$fdate.  '&nbsp;&nbsp;&nbsp;to&nbsp;&nbsp;&nbsp;'.$tdate. '  </th><th></th></tr>
							<tr><th>ID</th><th>Time</th><th>Event</th></tr>
							</thead>';
							if(mysqli_num_rows($res)>0){
							while($row=$res->fetch_assoc()){
								
								
									
									echo "<tr><td>".$row["tid"]."</td><td>" . $row["time"]. "</td><td>" .$row["event"]. "</td></tr>";
								
							} 
							echo "</table>";
							}
							else{
								echo "<tr><td colspan='11' align='center'>Not Available</td></tr>";
							}				

?>

						  
						</div>
				</div>
			 </form>
			</div>
		</div>
		 </div>
		</div>
	  
	

     
      <!-- /.content -->
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
</div>
</body>
</html>
