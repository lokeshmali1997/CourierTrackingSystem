
<?php 
 session_start();

?>
<html lang="en">

<head>

	<link rel="icon"  href="../img/titleimg.jpg" />
     <title>Tracking System</title
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

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

<script type="text/javascript">
	  $(document).ready(function(){
        $("#btnnext").click(function(){
           $("#form1").css("display", "none");	
          $("#form2").css("display", "block");
                
          });
      });
</script>

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
      <li><a href="../about.php">About</a></li>
      <li><a href="../contact.php">Contact</a></li>
      <li><a href="../track.php">Track Order</a></li>
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
						<li style="margin-top: 50px;"><a href="customer.php" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li style="margin-top: 10px;"><a href="viewbooking.php" class=""><i class="lnr lnr-eye"></i> <span>View Book Shipping</span></a></li>
						<li style="margin-top: 10px;"><a href="charts.html" class=""><i class="lnr lnr-printer"></i> <span>Print Invoice</span></a></li>
						<li style="margin-top: 10px;"><a href="profile.php" class=""><i class="lnr lnr-user"></i> <span>Profile</span></a></li>
						
						<li style="margin-top: 10px;"><a href="logout.php" ><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
						
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panelnel-title">Booking Your Order</h3>
							<p class="panel-subtitle">Date : <?php echo date("d/M/Y"); ?></p>

						</div>
						<div class="panel-body">
                         <div id="form1">
						  <div class="row " >
                           <div class="col-md-6">
                             <div class="form-group">
                              <label>Origin</label>
                               <input type="text" ID="txtaddbookname" class="form-control" placeholder="Enter Origin" name="txtorigin"/>
                     
                             </div>
                            </div>
                          <div class="col-md-6">
                           <div class="form-group">
                      <label>Destination</label>
                       <input type="text" ID="txtaddbookname" class="form-control" placeholder="Enter Destination" name="txtdestination"/>
                           </div>
                          </div>
                      </div>
                      <div class="row " >
                           <div class="col-md-6">
                             <div class="form-group">
                              <label>Services</label>
                               <select class="form-control" name="ddlservice">
										<option value="0">---Select---</option>
										<option>Parcel</option>
										<option>Document</option>
			           					<option>Other</option>
										
									</select>
                     
                             </div>
                            </div>
                          <div class="col-md-6">
                           <div class="form-group">
                      <label>Weight</label>
                       <input type="text" ID="txtaddbookname" class="form-control" placeholder="Kg" name="txtweight"/>
                           </div>
                          </div>
                      </div>
                      <div class="row " >
                           <div class="col-md-6">
                             <div class="form-group">
                              <label>Length</label>
                               <input type="text" ID="txtaddbookname" class="form-control" placeholder="Length in cm" name="txtlength"/>
                     
                             </div>
                            </div>
                          <div class="col-md-6">
                           <div class="form-group">
                      <label >Width</label>
                       <input type="text" ID="txtaddbookname" class="form-control" placeholder="Width in cm" name="txtwidth"/>
                           </div>
                          </div>
                      </div>
                      <div class="row " >
                           <div class="col-md-6">
                             <div class="form-group">
                              <label>Height</label>
                               <input type="text" ID="txtaddbookname" class="form-control" placeholder="Height in cm" name="txtheight"/>
                     
                             </div>
                            </div>
                          <div class="col-md-6">
                           <div class="form-group">
                      <label >Name</label>
                       <input type="text" ID="txtaddbookname" class="form-control" placeholder="Enter name" name="txtbookname"/>
                           </div>
                          </div>
                      </div>
                      <div class="row " >
                           <div class="col-md-6">
                             <div class="form-group">
                              <label>Email</label>
                               <input type="text" ID="txtaddbookname" class="form-control" placeholder="Enter email address " name="txtbookemail"/>
                     
                             </div>
                            </div>
                          <div class="col-md-6">
                           <div class="form-group">
                      <label>Mobile Number</label>
                       <input type="text" ID="txtaddbookname" class="form-control" placeholder="Enter Number" name="txtbooknumber"/>
                           </div>
                          </div>
                      </div>
                      <div class="row" style="margin-top: 20px;">
                      	<div class="col-md-5"></div>
                      	<div class="col-md-2">
                      		<button type="button" id="btnnext" class="btn btn-success">Next</button></div>
                      	<div class="col-md-5"></div>
								
							</div>
							</div>
							<div id="form2" style="display:none;">
                                <div class="row " >
                           <div class="col-md-6">
                             <div class="form-group">
                              <label>Reciver Name</label>
                               <input type="text" ID="txtrecname" class="form-control" placeholder="Enter Origin" name="txtrecname"/>
                     
                             </div>
                            </div>
                          <div class="col-md-6">
                           <div class="form-group">
                      <label>Contact Number</label>
                       <input type="text" ID="txtrecnumber" class="form-control" placeholder="Enter Destination" name="txtrecnumber"/>
                           </div>
                          </div>
                      </div>
                       <div class="row " >
                           <div class="col-md-6">
                             <div class="form-group">
                              <label>Reciver Email</label>
                               <input type="text" ID="txtrecemail" class="form-control" placeholder="Enter Origin" name="txtrecemail"/>
                     
                             </div>
                            </div>
                          <div class="col-md-6">
                           <div class="form-group">
                      <label>Reciver Address</label>
                       <input type="text" ID="txtaddbookname" class="form-control" placeholder="Enter Destination" name="txtrecaddress"/>
                           </div>
                          </div>
                      </div>
                        <div class="row" style="margin-top: 20px;">
                      	<div class="col-md-5"></div>
                      	<div class="col-md-2">
                      		<input type="submit" id="btnnext" name="btnbook" value="BOOK NOW" class="btn btn-success"/></div>
                      	<div class="col-md-5"></div>
								
							</div>
							</div>
							
						</div>
					</div>
					<!-- END OVERVIEW -->
					<?php include("../insert_bookingdetails.php");?>
					
					</div>
					
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
	<script>
	
	</form>
</body>

</html>
