<?php
session_start();
?>

<?php
 	$db=mysqli_connect("localhost","geethu","geethu@21","temple");
						
  $query = "SELECT tid,tname FROM temple";
  $result = $db->query($query);

  while($row = $result->fetch_assoc()){
    $categories[] = array("id" => $row['tid'], "val" => $row['tname']);
  }

  $query = "SELECT did, tid, dname FROM deity";
  $result = $db->query($query);

  while($row = $result->fetch_assoc()){
    $subcats[$row['tid']][] = array("id" => $row['did'], "val" => $row['dname']);
  }

  $jsonCats = json_encode($categories);
  $jsonSubCats = json_encode($subcats);


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
  <script type='text/javascript'>
      <?php
        echo "var categories = $jsonCats; \n";
        echo "var subcats = $jsonSubCats; \n";
      ?>
      function loadCategories(){
        var select = document.getElementById("categoriesSelect");
        select.onchange = updateSubCats;
        for(var i = 0; i < categories.length; i++){
          select.options[i] = new Option(categories[i].val,categories[i].id);          
        }
		select.options[i] = new Option("--Select--");
		select.selectedIndex = i;
      }
      function updateSubCats(){
        var catSelect = this;
        var catid = this.value;
        var subcatSelect = document.getElementById("subcatsSelect");
        subcatSelect.options.length = 0; //delete all options if any present
        for(var i = 0; i < subcats[catid].length; i++){
          subcatSelect.options[i] = new Option(subcats[catid][i].val,subcats[catid][i].id);
        }
      }
    </script>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body onload='loadCategories()' class="hold-transition skin-blue layout-top-nav">
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
            <li><a href="userHome.php">Home</a></li>
            <li class="active"><a href="PoojaBooking.php">Pooja Booking<span class="sr-only">(current)</span></a></li>
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
				$uid=$row['rid'];
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
          <li><a href="#"><i class="fa fa-dashboard"></i> Pooja Booking</a></li>
          <!-- <li><a href="#">Layout</a></li>
          <li class="active">Top Navigation</li> -->
        </ol>
      </section>
        	   <div class="col-xs-12">
		 <div class="box">
		 <div class="box-header">
              <div class="nav-tabs-custom">
					<h2 align="center">Pooja Booking</h2>
			  </div>
		<div class="tab-content">
              <div class="tab-pane active">
			     <form action="PoojaBooking1.php" method="post" class="form-horizontal">
				     <div class="form-group">
		                   <label class="col-sm-3 control-label">Temple</label>
					<div class="col-sm-6">
					
					<select id='categoriesSelect' name="temple" class="form-control">
					</select>
	   </div>
	   </div>
     <div class="form-group">
			<label class="col-sm-3 control-label">Deity</label>
	 <div class="col-sm-6">	
    <select id='subcatsSelect' name="deity" class="form-control">
    </select>
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
						    <thead>
							<tr><th>ID</th><th>Pooja/Vazhipad</th><th>Purpose</th><th>Amount</th><th>Action</th></tr>
							</thead>
							  <?php
   if((!empty($_POST["temple"])) && (!empty($_POST["deity"])))
   {
							$con=mysqli_connect("localhost","geethu","geethu@21","temple");
							$tem=$_POST["temple"];
							$deity=$_POST["deity"];
							$sel="SELECT `pid`, `pname`, `purpose`, `amount` FROM `pooja` WHERE `temple` = '$tem' and `deity` = '$deity' ";
							$res=mysqli_query($con,$sel);
							
							$_SESSION["tem"]=$tem;
							$_SESSION["diety"]=$deity;
							if(mysqli_num_rows($res)>0){
							while($row=$res->fetch_assoc()){
								
							$_SESSION["pid"]=$row["pid"];
									echo "<tr><td>".$row["pid"]."</td><td>" . $row["pname"]. "</td><td>" .$row["purpose"]. "</td><td>" .$row["amount"]. "</td><td align='middle'> <div class='btn-group'>
				  <div class='btn-group'>
                        
                  <button type='button' class='btn btn-info dropdown-toggle btn-sm' onclick=window.location.href='DevoteePD.php'>
				  Book Now
                 			
                  </button>

                        
                   </div>
                    </div></td></tr>";
								
							} 
							echo "</table>";
							}
							else{
								echo "<tr><td colspan='11' align='center'>Not Available</td></tr>";
							}
}							

?>

						  
						</div>
				</div>
			 </form>
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
