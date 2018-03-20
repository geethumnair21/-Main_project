<?php
session_start();

						 
							$tname=$_SESSION["tem"];
							$tdeity=$_SESSION["diety"];
							$pid=$_SESSION["pid"];
							
						
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
          <a href="../../index2.html" class="navbar-brand"><b>NALAMBALAM</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li class="active"><a href="#">Pooja Booking<span class="sr-only">(current)</span></a></li>
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
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
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
          <li><a href="#"><i class="fa fa-dashboard"></i>Pooja Booking</a></li>
		
          <!-- <li><a href="#">Layout</a></li>
          <li class="active">Top Navigation</li> -->
        </ol>
      </section>
         <div class="col-xs-12">
		 <div class="box">
		 <div class="box-header">
		    <div class="nav-tabs-custom">
					<h2 align="center">Devotee Details</h2>
			  </div>
			  <div class="tab-content">
              <div class="tab-pane active">
			  <?php
				$id=$_SESSION["username"];
				$con=mysqli_connect("localhost","geethu","geethu@21","temple");
				$sq="select * from registration where email='$id';";
				$res=mysqli_query($con,$sq);		
				$ro=mysqli_fetch_assoc($res);
				/* echo $ro['name']; */
				$uid=$ro['rid'];
				$_SESSION["uid"]=$uid;
				
			    ?>
			     <form action="DevoteePD1.php"  method="POST" class="form-horizontal">
				  
				        <div class="form-group">
		                   <label class="col-sm-3 control-label">Name</label>
					    <div class="col-sm-6">
					        <input type="text" name="txtname" class="form-control" placeholder="Enter ...">
					    </div>
					    </div>
						
						<div class="form-group">
		                   <label class="col-sm-3 control-label">Star(Nakshatra)</label>
					    <div class="col-sm-6">
					         <select name="star" id="star" class="form-control">	
								<option value="Select">Select</option>
					<?php		
					
						$con=mysqli_connect("localhost","geethu","geethu@21","temple");
						
						$sel="select star from star";
						$det=mysqli_query($con,$sel);
						if($det->num_rows >0){
						$areaOptions = "";
							while($row=$det->fetch_assoc()){			
							
							$areaOptions .= '<option value="' . $row['star'] . '">' . $row['star'] . '</option>';
							
							}
							echo $areaOptions;
							}	
					?>	
							</select>
					    </div>
					    </div>
						
						<div class="form-group">
		                   <label class="col-sm-3 control-label">Date</label>
					    <div class="col-sm-6">
					        <input type="date" name="date" class="form-control">
					    </div>
					    </div>
						
						
						<div class="form-group">
						<div class=" col-md-6" align="center">
							<input type='submit' class='btn btn-info pull-right' value=" ADD ">
								             
						</div>
						<div >   
						</form>	
						<form action="PoojaBooking.php" method="post">
							<button class="btn btn-info" onClick="PoojaBooking.php">Add More</button>
						</div>
						</div>
						
						
				 
				 </form>
				  
			  </div>
			  </div>
		 
		 </div>
		 </div>
		 </div>
		 
		  <div class="col-md-12">
		  <div class="box">
		  <div class="box-body">
		  <div class="box-header">
              <h3 class="box-title">Details</h3>
            </div>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Sl.No</th>
                  <th>Temple</th>
                  <th>Deity</th>
                  <th>Name</th>
                  <th>Star</th>
				  <th>Date</th>
				  <th>Pooja</th>
				  <th>Amount</th>
				  <th>Action</th>
                </tr>
                </thead>
                <tbody>
				<tbody>
				<?php
				
								$uid=$_SESSION["uid"];
								$con=mysqli_connect("localhost","geethu","geethu@21","temple");
								
								$sel="SELECT tmp.tname,dt.dname,p.name,p.uid,p.bid,p.star,p.date,pj.pname,pj.amount FROM 
									pooja pj left outer join  temple tmp on pj.temple=tmp.tid 
									left outer join deity dt on pj.deity=dt.did
                                   left outer join p_booking p on pj.pid=p.pid where uid=$uid;";
								
									
								$res=mysqli_query($con,$sel);
								
								if(mysqli_num_rows($res)>0){
									while($row=$res->fetch_assoc()){
									
									echo "<tr><td>". $row["bid"]."</td><td>" .$row["tname"]. "</td><td>". $row["dname"]."</td><td>". $row["name"]."</td><td>". $row["star"]."</td><td>". $row["date"]."</td><td>". $row["pname"]."</td><td>". $row["amount"]."</td>";
									echo "<td><div class='box-tools'>
									<button type='button' class='btn btn-info btn-sm' name='delete' data-toggle='tooltip'
									title='Remove' onclick=window.location.href='bookingdel.php?x=". $row["bid"]. "'>
									<i class='fa fa-times'></i></button></div>
									</td></tr>";
								  
									} 
									
									}
							
								
							?>      
               
               
               
						
                </tbody>
				</table>
				
				<div>
				<div class="form-group">
				<div class="col-sm-6">
				</div>
		                   <label class="col-sm-2 control-label">Total Amount</label>
				
					    <div class="col-sm-4">
					        <input type="label" name="txtamount" class="form-control-default" readonly placeholder="Rs/-">
					    </div>
					  </div>
				</div>
					 <div class="form-group">
						<div class=" col-md-6" align="center">
							<button type="reset" class="btn btn-info pull-right">Procced to Payment</button>	             
						</div>
						</div>
					
			   </div>
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
