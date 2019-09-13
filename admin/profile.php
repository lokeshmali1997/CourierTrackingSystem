<?php 
//include("../login.php");
session_start();
include("../connection.php");
$username=$_SESSION["username"];

$select = "select * from usermaster where User_Name ='$username'";

 $query1 = mysqli_query($con,$select);

  $row = mysqli_fetch_assoc($query1);
     
    $user = $row["User_Name"];
    $number = $row["User_Mobile"];
    $email = $row["User_Email"];
    $pass = $row["User_Password"];




?>
<html lang="en">

<head>

	<link rel="icon"  href="../img/titleimg.jpg" />
     <title>Tracking System</title
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->

<style type="text/css" >
	

</style>
</head>

<body>
	<!-- WRAPPER -->
	<form method="POST">
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar row navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="col-md-3 navbar-header">
      <a class="navbar-brand" href="../index.php"><img src="logo1.png"  style="margin-top: -5px;height: 50px"></a>
    </div>
			<div class="col-md-3"></div>
			<div class="col-md-4">
    <ul class="nav navbar-nav"  >
      <li  ><a href="../index.php">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#">Track Order</a></li>
    </ul>
</div>	
				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../img/user.png" class="img-circle" alt="Avatar"> <span><?php echo $_SESSION["username"]; ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								
								
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li style="margin-top: 50px;"><a href="customer.php" class="" ><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li style="margin-top: 10px;"><a href="viewbooking.php" class="active" ><i class="lnr lnr-eye"></i> <span>View Book Shipping</span></a></li>
						<li style="margin-top: 10px;"><a href="charts.html" class=""><i class="lnr lnr-printer"></i> <span>Print Invoice</span></a></li>
						<li style="margin-top: 10px;"><a href="panels.html" class=""><i class="lnr lnr-user"></i> <span>Profile</span></a></li>
						
						<li style="margin-top: 10px;"><a href="logout.php" ><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
						
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content"style="margin-left: 50px;margin-right: 50px;">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panelnel-title">Profle</h3>
							<p class="panel-subtitle">Date : <?php echo date("d/M/Y"); ?></p>
						</div>
						<div class="panel-body">
						  <div class="row " >
                             <div id="form2" style="margin-left: 20px;margin-right: 20px;" >
                                <div class="row " >
                           <div class="col-md-6">
                             <div class="form-group">
                              <label>Name</label>
                               <input type="text" ID="txtrecname" class="form-control" value=<?php echo $user; ?> />

                     
                             </div>
                            </div>
                          <div class="col-md-6">
                           <div class="form-group">
                      <label>Number</label>
                       <input type="text" ID="txtrecnumber" class="form-control" name="txtrecnumber" value=<?php echo $number; ?> />
                           </div>
                          </div>
                      </div>
                       <div class="row " >
                           <div class="col-md-6">
                             <div class="form-group">
                              <label>Email</label>
                               <input type="text" ID="txtrecemail" class="form-control"  name="txtrecemail" value=<?php echo $email; ?> />
                     
                             </div>
                            </div>
                          <div class="col-md-6">
                           <div class="form-group">
                      <label>Change Password</label>
                       <input type="Password" ID="txtaddbookname" class="form-control"  name="txtrecaddress" value=<?php echo $user; ?> />
                           </div>
                          </div>
                      </div>
                        <div class="row" style="margin-top: 20px;">
                      	<div class="col-md-5"></div>
                      	<div class="col-md-2">
                      		<input type="submit" id="btnnext" name="btnbook" value="UPDATE" class="btn btn-success"/></div>
                      	<div class="col-md-5"></div>
								
							</div>
							</div>	
						  	
                          
							
						</div>
					</div>
					<!-- END OVERVIEW -->
					
					
					</div>
					
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">Shared by <i class="fa fa-love"></i><a href="https://bootstrapthemes.co">BootstrapThemes</a>
</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
	
	</form>
</body>

</html>
